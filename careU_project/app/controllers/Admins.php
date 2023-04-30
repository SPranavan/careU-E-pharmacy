<?php

    class admins extends Controller{

        private $adminModel;

        public function __construct()
        {
            $this->adminModel = $this->model('Admin');
        }

        //Controller for admin's dashboard
        public function index(){
            $this->adminModel = $this->model('Admin');
            $data ="";
            $this->view('admins/admin_dashboard', $data);
        }

        
        /* Controller for view manager details */
        public function view_manager()
        {
            
            $ManagerDetails = $this->adminModel->view_manager();
            $data = [
              'manager_details' => $ManagerDetails
            ];

            $this->view('admins/view_manager', $data);
            
        }

        public function delete_manager()
        {
          $ManagerDetails = $this->adminModel->delete_manager();
          $data = [
            'manager_details' => $ManagerDetails
          ];

     
          $this->view('admins/delete_manager', $data);
            
        }

        public function view_pharmacist()
        {
            
            $PharmacistDetails = $this->adminModel->view_pharmacist();
            $data = [
              'pharmacist_details' => $PharmacistDetails
            ];

            $this->view('admins/view_pharmacist', $data);
        }

        public function delete_pharmacist()
        {
            $PharmacistDetails = $this->adminModel->delete_pharmacist();
            $data = [
              'pharmacist_details' => $PharmacistDetails
            ];
            $this->view('admins/delete_pharmacist', $data);
        }

        public function view_storekeeper()
        {
          $StoreKeepertDetails = $this->adminModel->view_storekeeper();
          $data = [
            'storekeeper_details' => $StoreKeepertDetails
          ];

          $this->view('admins/view_storekeeper', $data);
        }

        public function delete_storekeeper()
        {
            $StoreKeepertDetails = $this->adminModel->delete_storekeeper();
            $data = [
              'storekeeper_details' => $StoreKeepertDetails
            ];
            $this->view('admins/delete_storekeeper', $data);
        }

        public function view_deliveryperson()
        {
          $DeliveryPerson = $this->adminModel->view_deliveryperson();
          $data = [
            'deliveryperson_details' => $DeliveryPerson
          ];

          $this->view('admins/view_deliveryperson', $data);
        }

        public function delete_deliveryperson()
        {
            $DeliveryPerson = $this->adminModel->delete_deliveryperson();
            $data = [
              'deliveryperson_details' => $DeliveryPerson
            ];
            $this->view('admins/delete_deliveryperson', $data);
        }

        public function view_customer()
        {

          $Customer = $this->adminModel->view_customer();
          $data = [
            'customer_details' => $Customer
          ];

          $this->view('admins/view_customer', $data);
            
        }

       

        public function delete_customer()
        {
          $Customer = $this->adminModel->delete_customer();
          $data = [
            'customer_details' => $Customer
          ];
          $this->view('admins/delete_customer', $data);
        }
        
        
        //For view more details of users
        public function view_more(){
                 
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
              'user_ID' => strval(trim($_POST['user_ID'])),
              'user_details' => '',
              'age' => '',
              'userRole' => ''
            ];
  
          $data['user_details'] = $UserDetail = $this->adminModel->findUserByUserID($data['user_ID']);
          $data['age'] = $userAge = $this->adminModel->calculateAge($data['user_ID']);
          $data['userRole'] = $userRole = $this->adminModel->findRole($data['user_ID']);
  
  
          $data = [
            'user_details' => $UserDetail,
            'age' => $userAge,
            'userRole' => $userRole
          ];
  
          $this->view('admins/view_more', $data);

          }else{
              die("Error occurred!");
          }  
        }


        public function user_account_status(){

          if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $data = [
              'user_ID' => strval(trim($_POST['user_ID'])),
              'user_details' => '',
            ];

            $data['user_details'] = $UserDetail = $this->adminModel->findUserByUserID($data['user_ID']);

           

            if ($data['user_details']->active_status == 'Active'){
              $this->adminModel->delete_user_account($data['user_ID']);
              redirect('admins/view_'.$UserDetail->user_role);
            }

            elseif($data['user_details']->active_status == 'Deactivated'){
              $this->adminModel->activate_acc($data['user_ID']);
              redirect('admins/delete_'.$UserDetail->user_role);
            }
            
            $data = [
              'user_details' => $UserDetail
               
            ];
           
          }else{
              die("Error occurred!");
          }  

         }


         public function search_manager() {
          $result = $this->adminModel->search_manager($_POST['search']);
          
          $output = '';

          if($result>0){
            foreach($result as $row) {
              $output .= '                          
                          <tr class="dataset1">
                              <td>' .$row->user_ID. '</td>
                              <td>' .$row->fName." ".$row->lName. '</td>
                              <td>' .$row->mobile. '</td>
                              <td>' .$row->email. '</td>
                              <td class="vm">
                                  <form action="'.URLROOT.'/admins/view_more" method="POST">
                                      <input type="hidden" name="user_ID" value="' .$row->user_ID.'">
                                      <button class="viewMore" type="submit"><img src="'.URLROOT.'/public/img/admins/eye.png" alt="view more" style="width:30px;height:20px;"></button>
                                  </form>
                              </td>
                          </tr>
                          ';
              }
          }

          else{
            $output .= '
            <tr><td colspan="5">No results found</td></tr>';
          }
        
          echo $output;
        }


        public function search_pharmacist() {
          $result = $this->adminModel->search_pharmacist($_POST['search']);
          
          $output = '';

          if($result>0){
            foreach($result as $row) {
              $output .= '                          
                          <tr class="dataset1">
                              <td>' .$row->user_ID. '</td>
                              <td>' .$row->fName." ".$row->lName. '</td>
                              <td>' .$row->mobile. '</td>
                              <td>' .$row->email. '</td>
                              <td class="vm">
                                  <form action="'.URLROOT.'/admins/view_more" method="POST">
                                      <input type="hidden" name="user_ID" value="' .$row->user_ID.'">
                                      <button class="viewMore" type="submit"><img src="'.URLROOT.'/public/img/admins/eye.png" alt="view more" style="width:30px;height:20px;"></button>
                                  </form>
                              </td>
                          </tr>
                          ';
              }
          }

          else{
            $output .= '
            <tr><td colspan="5">No results found</td></tr>';
          }
        
          echo $output;
        }


        public function search_storekeeper() {
          $result = $this->adminModel->search_storekeeper($_POST['search']);
          
          $output = '';

          if($result>0){
            foreach($result as $row) {
              $output .= '                          
                          <tr class="dataset1">
                              <td>' .$row->user_ID. '</td>
                              <td>' .$row->fName." ".$row->lName. '</td>
                              <td>' .$row->mobile. '</td>
                              <td>' .$row->email. '</td>
                              <td class="vm">
                                  <form action="'.URLROOT.'/admins/view_more" method="POST">
                                      <input type="hidden" name="user_ID" value="' .$row->user_ID.'">
                                      <button class="viewMore" type="submit"><img src="'.URLROOT.'/public/img/admins/eye.png" alt="view more" style="width:30px;height:20px;"></button>
                                  </form>
                              </td>
                          </tr>
                          ';
              }
          }

          else{
            $output .= '
            <tr><td colspan="5">No results found</td></tr>';
          }
        
          echo $output;
        }


        public function search_deliveryperson() {
          $result = $this->adminModel->search_deliveryperson($_POST['search']);
          
          $output = '';

          if($result>0){
            foreach($result as $row) {
              $output .= '                          
                          <tr class="dataset1">
                              <td>' .$row->user_ID. '</td>
                              <td>' .$row->fName." ".$row->lName. '</td>
                              <td>' .$row->mobile. '</td>
                              <td>' .$row->email. '</td>
                              <td class="vm">
                                  <form action="'.URLROOT.'/admins/view_more" method="POST">
                                      <input type="hidden" name="user_ID" value="' .$row->user_ID.'">
                                      <button class="viewMore" type="submit"><img src="'.URLROOT.'/public/img/admins/eye.png" alt="view more" style="width:30px;height:20px;"></button>
                                  </form>
                              </td>
                          </tr>
                          ';
              }
          }

          else{
            $output .= '
            <tr><td colspan="5">No results found</td></tr>';
          }
        
          echo $output;
        }


        public function search_customer() {
          $result = $this->adminModel->search_customer($_POST['search']);
          
          $output = '';

          if($result>0){
            foreach($result as $row) {
              $output .= '                          
                          <tr class="dataset1">
                              <td>' .$row->user_ID. '</td>
                              <td>' .$row->fName." ".$row->lName. '</td>
                              <td>' .$row->mobile. '</td>
                              <td>' .$row->email. '</td>
                              <td class="vm">
                                  <form action="'.URLROOT.'/admins/view_more" method="POST">
                                      <input type="hidden" name="user_ID" value="' .$row->user_ID.'">
                                      <button class="viewMore" type="submit"><img src="'.URLROOT.'/public/img/admins/eye.png" alt="view more" style="width:30px;height:20px;"></button>
                                  </form>
                              </td>
                          </tr>
                          ';
              }
          }

          else{
            $output .= '
            <tr><td colspan="5">No results found</td></tr>';
          }
        
          echo $output;
        }
        


        

        
        private function getLastUserID_manager($lastUserID)
        {    

            if($lastUserID == " ")
             {
                 $user_ID = "M00001";
             }
             else
             {
                 $user_ID = substr($lastUserID, 5);
                 $user_ID = intval($user_ID);
                 $user_ID = "M0000" . ($user_ID+1);

            
             }
          
           
    
            return $user_ID;
        }

        


        public function add_manager(){
 


            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Process form
        
              // Sanitize POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Get the latest user ID
              $lastUserID = $this->model('Admin')->getLastUserID_manager();

              // Generate the new user ID
              $user_ID = $this->getLastUserID_manager($lastUserID);

              // Save the new user to the database
              //$this->model('User')->register($user_ID);
      
              // Init data
              $data =[
                'user_ID' => $user_ID,
                'fName' => trim($_POST['fName']),
                'lName' => trim($_POST['lName']),
                'birthDate' => trim($_POST['birthDate']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'manager',
                'joinedDate' => date('Y-m-d H:i:s'),
                'active_status' => 'Active',
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Validate Email
              if(empty($data['email'])){
                $data['email_err'] = 'Please enter your email address';
              } else {
                // Check email
                if($this->adminModel->findUserByEmail($data['email'])){
                  $data['email_err'] = 'This email is already taken';
                }
              }
      
              if(empty($data['mobile'])){
                  $data['mobile_err'] = 'Please enter your mobile number';
               } 
              elseif(strlen($data['mobile']) !== 10){
                $data['mobile_err'] = 'Please enter a valid mobile number';
              } 
               
              else {
                  // Check mobile
                  if($this->adminModel->findUserByMobile($data['mobile'])){
                    $data['mobile_err'] = 'This mobile number is already taken';
                  }
              } 

              


      
              // Validate Name
              if(empty($data['fName'])){
                $data['fName_err'] = 'Please enter your first name';
              }
      
              if(empty($data['lName'])){
                  $data['lName_err'] = 'Please enter your last name';
              }

              if(empty($data['birthDate'])){
                $data['birthDate_err'] = 'Please enter your birth date';
            }
      
              if(empty($data['address'])){
                  $data['address_err'] = 'Please enter your address';
              }
      
              if(empty($data['city'])){
                  $data['city_err'] = 'Please enter city';
              }
      
              // Validate Password
              if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
              } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
              }
      
              // Validate Confirm Password
              if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Please enter confirm password';
              } else {
                if($data['password'] != $data['confirm_password']){
                  $data['confirm_password_err'] = 'Passwords do not match';
                }
              }
      
              // Make sure errors are empty
              if(empty($data['email_err']) &&
                 empty($data['mobile_err']) && 
                 empty($data['fname_err']) && 
                 empty($data['lname_err']) &&
                 empty($data['birthDate_err']) &&
                 empty($data['address_err']) &&
                 empty($data['city_err']) &&
                 empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                
                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      
                // Register User
                if($this->adminModel->add_manager($data)){
                  //flash('register_success', 'You are registered and can log in');
                  redirect('users/login');
                } else {
                  die('Something went wrong');
                }
      
              } else {
                // Load view with errors
                $this->view('admins/add_manager', $data);
              }
      
            } else {
              // Init data
              $data =[
                'user_ID'=>'',
                'fName' => '',
                'lName' => '',
                'birthDate' => '',
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
                'joinedDate' => '',
                'active_status' => '',
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Load view
              $this->view('admins/add_manager', $data);

              
            }
          }



          private function getLastUserID_pharmacist($lastUserID)
          {    

            if($lastUserID == " ")
             {
                 $user_ID = "P00001";
             }
             else
             {
                 $user_ID = substr($lastUserID, 5);
                 $user_ID = intval($user_ID);
                 $user_ID = "P0000" . ($user_ID+1);

            
             }
          
           
    
            return $user_ID;
          }


        public function add_pharmacist(){
 


            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Process form
        
              // Sanitize POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Get the latest user ID
              $lastUserID = $this->model('Admin')->getLastUserID_pharmacist();

              // Generate the new user ID
              $user_ID = $this->getLastUserID_pharmacist($lastUserID);

              // Save the new user to the database
              //$this->model('User')->register($user_ID);
      
              // Init data
              $data =[
                'user_ID' => $user_ID,
                'fName' => trim($_POST['fName']),
                'lName' => trim($_POST['lName']),
                'birthDate' => trim($_POST['birthDate']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'pharmacist',
                'joinedDate' => date('Y-m-d H:i:s'),
                'active_status' => 'Active',                
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Validate Email
              if(empty($data['email'])){
                $data['email_err'] = 'Please enter your email address';
              } else {
                // Check email
                if($this->adminModel->findUserByEmail($data['email'])){
                  $data['email_err'] = 'This email is already taken';
                }
              }
      
              if(empty($data['mobile'])){
                  $data['mobile_err'] = 'Please enter your mobile number';
               } 
              elseif(strlen($data['mobile']) !== 10){
                $data['mobile_err'] = 'Please enter a valid mobile number';
              } 
               
              else {
                  // Check mobile
                  if($this->adminModel->findUserByMobile($data['mobile'])){
                    $data['mobile_err'] = 'This mobile number is already taken';
                  }
              } 

              


      
              // Validate Name
              if(empty($data['fName'])){
                $data['fName_err'] = 'Please enter your first name';
              }
      
              if(empty($data['lName'])){
                  $data['lName_err'] = 'Please enter your last name';
              }

              if(empty($data['birthDate'])){
                $data['birthDate_err'] = 'Please enter your birth date';
            }
      
              if(empty($data['address'])){
                  $data['address_err'] = 'Please enter your address';
              }
      
              if(empty($data['city'])){
                  $data['city_err'] = 'Please enter city';
              }
      
              // Validate Password
              if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
              } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
              }
      
              // Validate Confirm Password
              if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Please enter confirm password';
              } else {
                if($data['password'] != $data['confirm_password']){
                  $data['confirm_password_err'] = 'Passwords do not match';
                }
              }
      
              // Make sure errors are empty
              if(empty($data['email_err']) &&
                 empty($data['mobile_err']) && 
                 empty($data['fname_err']) && 
                 empty($data['lname_err']) &&
                 empty($data['birthDate_err']) &&
                 empty($data['address_err']) &&
                 empty($data['city_err']) &&
                 empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                
                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      
                // Register User
                if($this->adminModel->add_pharmacist($data)){
                  //flash('register_success', 'You are registered and can log in');
                  redirect('users/login');
                } else {
                  die('Something went wrong');
                }
      
              } else {
                // Load view with errors
                $this->view('admins/add_pharmacist', $data);
              }
      
            } else {
              // Init data
              $data =[
                'user_ID'=>'',
                'fName' => '',
                'lName' => '',
                'birthDate' => '',
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
                'joinedDate' => '',
                'active_status' => '',
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Load view
              $this->view('admins/add_pharmacist', $data);

              
            }
          }

          private function getLastUserID_storekeeper($lastUserID)
          {    

            if($lastUserID == " ")
             {
                 $user_ID = "S00001";
             }
             else
             {
                 $user_ID = substr($lastUserID, 5);
                 $user_ID = intval($user_ID);
                 $user_ID = "S0000" . ($user_ID+1);

            
             }
          
           
    
            return $user_ID;
          }


        public function add_storekeeper(){
 


            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Process form
        
              // Sanitize POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Get the latest user ID
              $lastUserID = $this->model('Admin')->getLastUserID_storekeeper();

              // Generate the new user ID
              $user_ID = $this->getLastUserID_storekeeper($lastUserID);

              // Save the new user to the database
              //$this->model('User')->register($user_ID);
      
              // Init data
              $data =[
                'user_ID' => $user_ID,
                'fName' => trim($_POST['fName']),
                'lName' => trim($_POST['lName']),
                'birthDate' => trim($_POST['birthDate']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'storekeeper',
                'joinedDate' => date('Y-m-d H:i:s'),
                'active_status' => 'Active',
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Validate Email
              if(empty($data['email'])){
                $data['email_err'] = 'Please enter your email address';
              } else {
                // Check email
                if($this->adminModel->findUserByEmail($data['email'])){
                  $data['email_err'] = 'This email is already taken';
                }
              }
      
              if(empty($data['mobile'])){
                  $data['mobile_err'] = 'Please enter your mobile number';
               } 
              elseif(strlen($data['mobile']) !== 10){
                $data['mobile_err'] = 'Please enter a valid mobile number';
              } 
               
              else {
                  // Check mobile
                  if($this->adminModel->findUserByMobile($data['mobile'])){
                    $data['mobile_err'] = 'This mobile number is already taken';
                  }
              } 

              


      
              // Validate Name
              if(empty($data['fName'])){
                $data['fName_err'] = 'Please enter your first name';
              }
      
              if(empty($data['lName'])){
                  $data['lName_err'] = 'Please enter your last name';
              }

              if(empty($data['birthDate'])){
                $data['birthDate_err'] = 'Please enter your birth date';
            }
      
              if(empty($data['address'])){
                  $data['address_err'] = 'Please enter your address';
              }
      
              if(empty($data['city'])){
                  $data['city_err'] = 'Please enter city';
              }
      
              // Validate Password
              if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
              } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
              }
      
              // Validate Confirm Password
              if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Please enter confirm password';
              } else {
                if($data['password'] != $data['confirm_password']){
                  $data['confirm_password_err'] = 'Passwords do not match';
                }
              }
      
              // Make sure errors are empty
              if(empty($data['email_err']) &&
                 empty($data['mobile_err']) && 
                 empty($data['fname_err']) && 
                 empty($data['lname_err']) &&
                 empty($data['birthDate_err']) &&
                 empty($data['address_err']) &&
                 empty($data['city_err']) &&
                 empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                
                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      
                // Register User
                if($this->adminModel->add_storekeeper($data)){
                  //flash('register_success', 'You are registered and can log in');
                  redirect('users/login');
                } else {
                  die('Something went wrong');
                }
      
              } else {
                // Load view with errors
                $this->view('admins/add_storekeeper', $data);
              }
      
            } else {
              // Init data
              $data =[
                'user_ID'=>'',
                'fName' => '',
                'lName' => '',
                'birthDate' => '',
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
                'joinedDate' => '',
                'active_status' => '',
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Load view
              $this->view('admins/add_storekeeper', $data);

              
            }
          }



          private function getLastUserID_deliveryperson($lastUserID)
          {    

            if($lastUserID == " ")
             {
                 $user_ID = "D00001";
             }
             else
             {
                 $user_ID = substr($lastUserID, 5);
                 $user_ID = intval($user_ID);
                 $user_ID = "D0000" . ($user_ID+1);

            
             }
          
           
    
            return $user_ID;
          }


        public function add_deliveryperson(){
 


            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Process form
        
              // Sanitize POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Get the latest user ID
              $lastUserID = $this->model('Admin')->getLastUserID_deliveryperson();

              // Generate the new user ID
              $user_ID = $this->getLastUserID_deliveryperson($lastUserID);

              // Save the new user to the database
              //$this->model('User')->register($user_ID);
      
              // Init data
              $data =[
                'user_ID' => $user_ID,
                'fName' => trim($_POST['fName']),
                'lName' => trim($_POST['lName']),
                'birthDate' => trim($_POST['birthDate']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'deliveryperson',
                'joinedDate' => date('Y-m-d H:i:s'),
                'active_status' => 'Active',
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Validate Email
              if(empty($data['email'])){
                $data['email_err'] = 'Please enter your email address';
              } else {
                // Check email
                if($this->adminModel->findUserByEmail($data['email'])){
                  $data['email_err'] = 'This email is already taken';
                }
              }
      
              if(empty($data['mobile'])){
                  $data['mobile_err'] = 'Please enter your mobile number';
               } 
              elseif(strlen($data['mobile']) !== 10){
                $data['mobile_err'] = 'Please enter a valid mobile number';
              } 
               
              else {
                  // Check mobile
                  if($this->adminModel->findUserByMobile($data['mobile'])){
                    $data['mobile_err'] = 'This mobile number is already taken';
                  }
              } 

              


      
              // Validate Name
              if(empty($data['fName'])){
                $data['fName_err'] = 'Please enter your first name';
              }
      
              if(empty($data['lName'])){
                  $data['lName_err'] = 'Please enter your last name';
              }

              if(empty($data['birthDate'])){
                $data['birthDate_err'] = 'Please enter your birth date';
            }
      
              if(empty($data['address'])){
                  $data['address_err'] = 'Please enter your address';
              }
      
              if(empty($data['city'])){
                  $data['city_err'] = 'Please enter city';
              }
      
              // Validate Password
              if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
              } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
              }
      
              // Validate Confirm Password
              if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Please enter confirm password';
              } else {
                if($data['password'] != $data['confirm_password']){
                  $data['confirm_password_err'] = 'Passwords do not match';
                }
              }
      
              // Make sure errors are empty
              if(empty($data['email_err']) &&
                 empty($data['mobile_err']) && 
                 empty($data['fname_err']) && 
                 empty($data['lname_err']) &&
                 empty($data['birthDate_err']) &&
                 empty($data['address_err']) &&
                 empty($data['city_err']) &&
                 empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                
                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      
                // Register User
                if($this->adminModel->add_deliveryperson($data)){
                  //flash('register_success', 'You are registered and can log in');
                  redirect('users/login');
                } else {
                  die('Something went wrong');
                }
      
              } else {
                // Load view with errors
                $this->view('admins/add_deliveryperson', $data);
              }
      
            } else {
              // Init data
              $data =[
                'user_ID'=>'',
                'fName' => '',
                'lName' => '',
                'birthDate' => '',
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
                'joinedDate' => '',
                'active_status' => '',
      
                'fName_err' => '',
                'lName_err' => '',
                'birthDate_err' => '',
                'mobile_err' => '',
                'email_err' => '',
                'address_err' => '',
                'city_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
              ];
      
              // Load view
              $this->view('admins/add_deliveryperson', $data);

              
            }
          }

         








    }