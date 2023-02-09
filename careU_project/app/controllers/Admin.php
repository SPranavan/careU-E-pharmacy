<?php


    class Admin extends Controller{

        private $userModel;

        public function __construct()
        {
            $this->userModel = $this->model('Admin');
        }


        private function generateUserID($lastUserID)
        {
            if($lastUserID == " ")
            {
                $user_ID = "A00001";
            }
            else
            {
                $user_ID = substr($lastUserID, 5);
                $user_ID = intval($user_ID);
                $user_ID = "A0000" . ($user_ID+1);
            }

            return $user_ID;
        }


        public function add_manager(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $lastUserID = $this->model('Admin')->getLastUserId();

                $user_ID = $this->generateUserID($lastUserID);

                $data = [
                    'user_ID' => $user_ID,
                    'fName' => trim($_POST['fName']),
                    'lName' => trim($_POST['lName']),
                    'mobile' => trim($_POST['mobile']),
                    'email' => trim($_POST['email']),
                    'address' => trim($_POST['address']),
                    'city' => trim($_POST['city']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'user_role' => 'admin',
        
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
                $this->view('admins/add_manager', $data);
              }

            }

            else {
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
    }