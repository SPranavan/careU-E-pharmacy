<?php 

    /*
        *TASKS:
            ~ Login & Reg
    */ 

    class Customers extends Controller{

        //Create varibale to connect to DB
        private $CustomerModel;

        //Assigned 'Customer' model file
        public function __construct()
        {
            $this->CustomerModel = $this->model('Customer');
        }

        public function home()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/home', $data);
        }

        public function change_address()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/change_address', $data);
        }

        public function change_email()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/change_email', $data);
        }

        public function change_password()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/change_password', $data);
        }

        public function change_username()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/change_username', $data);
        }

        public function cart()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/cart', $data);
        }

        public function delivery_details()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/delivery_details', $data);
        }

        public function edit_information()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/edit_information', $data);
        }

        public function feedback()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/feedback', $data);
        }

        public function myaccount()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/myaccount', $data);
        }

        public function prescription_upload()
        {
            $this->CustomerModel = $this->model('Customer');
            $data ="";
            $this->view('customers/prescription_upload', $data);
        }

        public function order()
        {
          $this->CustomerModel = $this->model('Customer');

        // Create multiple arrays to hold different sets of data
        $Medicine = [
            'title' => 'Medicine',
            'items' => $this->CustomerModel->Medicine()
        ];

        $Personal_Care = [
            'title' => 'Personal Care',
            'items' => $this->CustomerModel->Personal_Care()
        ];

        $Medical_Equipments = [
            'title' => 'Medical Equipments',
            'items' => $this->CustomerModel->Medical_Equipments()
        ];

        $data = [$Medicine, $Personal_Care, $Medical_Equipments]; // Combine all data arrays into a single array

        $this->view('customers/order', $data);
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

     


        public function register(){
            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              // Process form
        
              // Sanitize POST data
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
              // Init data
              $data =[
                'fName' => trim($_POST['fName']),
                'lName' => trim($_POST['lName']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
      
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
                'fName' => '',
                'lName' => '',
                'mobile' => '',
                'email' => '',
                'address' => '',
                'city' => '',
                'password' => '',
                'confirm_password' => '',
      
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