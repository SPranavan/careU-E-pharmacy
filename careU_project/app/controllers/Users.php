<?php 

    /*
        *TASKS:
            ~ Login & Reg
    */ 

    class Users extends Controller{

        //Create varibale to connect to DB
        private $userModel;

        //Assigned 'User' model file
        public function __construct()
        {
            $this->userModel = $this->model('User');
        }


        //User's login authentication
        public function login(){

          if($_SERVER['REQUEST_METHOD'] == 'POST'){

              

              //Fetch data from request form
              $data = [
                  'email' => trim($_POST['email']),
                  'password' => trim($_POST['password']),
                  
                  'email_err' => '',
                  'password_err' => ''

              ];

              //Validate email and password
              if(empty($data['email'])){
                  $data['email_err'] =  " *please enter email";
              }
              else{

                  //Check user/email
                  if($this->userModel->findUserByEmail($data['email'])){
                  //User found

                  }
                  
                  else{
                      $data['email_err'] = " *User not found";
                  }
              }

              //Valid Password
              if(empty($data['password'])){
                  $data['password_err'] = " *please enter password";
              }
              

              // IF ERRORS FREE, THEN ACCORDING TO USER ROLE NEED TO CREATE SEASSION AND LAND IN TO HIS/HER OWNS PAGE
              if(empty($data['email_err']) && empty($data['password_err'])){

                  //Authentication user's email & password
                  $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                  if($loggedInUser){
                      $this->createUserSession($loggedInUser);
                  }
                  else{
                      $data['password_err'] = " *incorrect password";
                      $this->view('users/login', $data);
                  }
              }
              else{
                  $this->view('users/login', $data);
              }


          }
          else{

              //If request is not POST then this scope will be execute

              $data = [

                  'email' => '',
                  'password' => '',

                  'email_err' => '',
                  'password_err' => ''

              ];
              $this->view('users/login', $data);
          }

      }

        private function generateUserID($lastUserID)
        {    

            if($lastUserID == " ")
             {
                 $user_ID = "C00001";
             }
             else
             {
                 $user_ID = substr($lastUserID, 5);
                 $user_ID = intval($user_ID);
                 $user_ID = "C0000" . ($user_ID+1);

            //     preg_match('/C(\d+)/', $lastid, $matches);
            //     $user_ID = "C" . str_pad($matches[1] + 1, 5, "0", STR_PAD_LEFT);
             }
          
            //  if (empty($lastUserID)) {
            //      return 'C00001';
            //  }

            //  elseif (preg_match('/U(\d+)/', $lastUserID, $matches)) {
            //   $user_ID = "C" . str_pad($matches[1] + 1, 5, "0", STR_PAD_LEFT);
            //   echo'hello';
            // } else {
            //     // Handle the error, for example, by logging the error message.
            //     error_log("Error: Failed to match pattern in preg_match()");
            // }
          
    
            // // preg_match('/U(\d+)/', $lastUserID, $matches);
            // // $user_ID = "C" . str_pad($matches[1] + 1, 5, "0", STR_PAD_LEFT);
            // if (isset($matches[1])) {
            //   $user_ID = "C" . str_pad($matches[1] + 1, 5, "0", STR_PAD_LEFT);
            // } else {
            //     // handle the error, for example, by logging it or returning a default value
            //     $user_ID = "C00001";
            // }
    
            return $user_ID;
        }

     


        public function register(){


            


            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Process form
        
              // Sanitize POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Get the latest user ID
              $lastUserID = $this->model('User')->getLastUserID();

              // Generate the new user ID
              $user_ID = $this->generateUserID($lastUserID);

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
                'user_role' => 'customer',
      
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
                $data['email_err'] = 'Please enter email';
              } else {
                // Check email
                if($this->userModel->findUserByEmail($data['email'])){
                  $data['email_err'] = 'Email is already taken';
                }
              }
      
              if(empty($data['mobile'])){
                  $data['mobile_err'] = 'Pleae enter mobile number';
               } else {
                  // Check mobile
                  if($this->userModel->findUserByMobile($data['mobile'])){
                    $data['mobile_err'] = 'mobile number is already taken';
                  }
              } 

              


      
              // Validate Name
              if(empty($data['fName'])){
                $data['fName_err'] = 'Please enter first name';
              }
      
              if(empty($data['lName'])){
                  $data['lName_err'] = 'Please enter last name';
              }
      
              if(empty($data['address'])){
                  $data['address_err'] = 'Please enter address';
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
                if($this->userModel->register($data)){
                  //flash('register_success', 'You are registered and can log in');
                  redirect('users/login');
                } else {
                  die('Something went wrong');
                }
      
              } else {
                // Load view with errors
                $this->view('users/register', $data);
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
              $this->view('users/register', $data);

              
            }
          }


          //Create Session
          public function createUserSession($user){

            //Store session data
            $_SESSION['user_fName'] = $user->fName;
            $_SESSION['user_lName'] = $user->lName;
            $_SESSION['user_role'] = $user->role;

            //redirect to the user's homepage
            die("logged successfully");
            //redirect('admin/home');

          }


        
    }

