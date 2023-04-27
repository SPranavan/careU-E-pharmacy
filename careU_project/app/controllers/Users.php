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

            
             }
          
            
    
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
                'birthDate' => trim($_POST['birthDate']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_role' => 'customer',
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
                if($this->userModel->findUserByEmail($data['email'])){
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
                  if($this->userModel->findUserByMobile($data['mobile'])){
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
              $this->view('users/register', $data);

              
            }
          }


          //Create Session
          public function createUserSession($user){
           
            //Store session data
            $_SESSION['user_fName'] = $user->fName;
            $_SESSION['user_lName'] = $user->lName;
            $_SESSION['user_role'] = $user->user_role;
  
            if($_SESSION['user_role'] == "customer"){
              //header("Location: ".URLROOT."/HomePage");
              redirect('customers/myaccount');
            }
            elseif($_SESSION['user_role'] == "admin"){
              //header("Location: ".URLROOT."/admin_dashboard");
              redirect('admins/admin_dashboard');
            }
            elseif($_SESSION['user_role'] == "pharmacist"){
              //header("Location: ".URLROOT."/admin_dashboard");
              redirect('pharmacists/home_page');
            }
            elseif($_SESSION['user_role'] == "manager"){
              //header("Location: ".URLROOT."/admin_dashboard");
              redirect('managers/dashboard');
            }
            elseif($_SESSION['user_role'] == "storekeeper"){
              //header("Location: ".URLROOT."/admin_dashboard");
              redirect('storekeepers/Add_medicine');
            }
            elseif($_SESSION['user_role'] == "deliveryperson"){
              //header("Location: ".URLROOT."/admin_dashboard");
            }

            

          }


          public function logout(){
            // DESTROY USER DETAILS
            
            unset($_SESSION['user_fName']);
            unset($_SESSION['user_lName']);
            unset($_SESSION['user_role']);
           

            session_destroy();
            redirect('users/login');
        }


        
    }

