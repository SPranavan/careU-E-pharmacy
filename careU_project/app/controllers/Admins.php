<?php

    class admins extends Controller{

        private $adminModel;

        public function __construct()
        {
            $this->adminModel = $this->model('Admin');
        }

        public function index(){
            $this->adminModel = $this->model('Admin');
            $data ="";
            $this->view('admins/admin_dashboard', $data);
        }


        public function view_manager()
        {
            // $this->userModel = $this->model('Admin');
            // $data ="";
            // $this->view('admins/view_manager', $data);

            $ManagerDetails = $this->adminModel->view_managers();
            $data = [
              'manager_details' => $ManagerDetails
            ];

            $this->view('admins/view_manager', $data);
        }

        public function view_pharmacist()
        {
            // $this->adminModel = $this->model('Admin');
            // $data ="";
            // $this->view('admins/view_pharmacist', $data);
            $PharmacistDetails = $this->adminModel->view_pharmacist();
            $data = [
              'pharmacist_details' => $PharmacistDetails
            ];

            $this->view('admins/view_pharmacist', $data);
        }

        public function view_storekeeper()
        {
          $StoreKeepertDetails = $this->adminModel->view_storekeeper();
          $data = [
            'storekeeper_details' => $StoreKeepertDetails
          ];

          $this->view('admins/view_storekeeper', $data);
        }

        public function view_deliveryperson()
        {
          $DeliveryPerson = $this->adminModel->view_deliveryperson();
          $data = [
            'deliveryperson_details' => $DeliveryPerson
          ];

          $this->view('admins/view_deliveryperson', $data);
        }

        public function view_customer()
        {

          $Customer = $this->adminModel->view_customer();
          $data = [
            'customer_details' => $Customer
          ];

          $this->view('admins/view_customer', $data);
            
        }

        // public function add_manager(){
        //     $this->userModel = $this->model('User');
        //     $data ="";
        //     $this->view('admin/add_manager', $data);
        // }


        public function delete_manager()
        {
            $this->adminModel = $this->model('Admin');
            $data ="";
            $this->view('admins/delete_manager', $data);
        }

        public function delete_pharmacist()
        {
            $this->adminModel = $this->model('Admin');
            $data ="";
            $this->view('admins/delete_pharmacist', $data);
        }

        public function delete_storekeeper()
        {
            $this->adminModel = $this->model('Admin');
            $data ="";
            $this->view('admins/delete_storekeeper', $data);
        }

        public function delete_deliveryperson()
        {
            $this->adminModel = $this->model('Admin');
            $data = $this->adminModel;
            $this->view('admins/delete_deliveryperson', $data);
        }

        public function delete_customer()
        {
            $this->adminModel = $this->model('Admin');
            $data ="";
            $this->view('admins/delete_customer', $data);
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
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'manager',
      
                'fName_err' => '',
                'lName_err' => '',
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
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
      
                'fName_err' => '',
                'lName_err' => '',
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
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'pharmacist',
      
                'fName_err' => '',
                'lName_err' => '',
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
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
      
                'fName_err' => '',
                'lName_err' => '',
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
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'storekeeper',
      
                'fName_err' => '',
                'lName_err' => '',
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
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
      
                'fName_err' => '',
                'lName_err' => '',
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
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'deliveryperson',
      
                'fName_err' => '',
                'lName_err' => '',
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
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
                'user_role' => '',
      
                'fName_err' => '',
                'lName_err' => '',
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