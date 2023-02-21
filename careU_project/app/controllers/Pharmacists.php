<?php 

    /*
        *TASKS:
            ~ Login & Reg
    */ 

    class pharmacists extends Controller{

        //Create varibale to connect to DB
        private $userModel;

        //Assigned 'User' model file
        public function __construct()
        {
            $this->userModel = $this->model('User');
        }

        public function index()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/home_page', $data);
        }

        public function accepted_orders()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/accepted_orders', $data);
        }

        public function available_prescription()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/available_prescription', $data);
        }

        public function completed_orders()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/completed_orders', $data);
        }

        public function completed_prescription()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/completed_prescription', $data);
        }

        public function create_new_prescription()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/create_new_prescription', $data);
        }

        public function created_prescription()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/created_prescription', $data);
        }

        public function new_order()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/new_order', $data);
        }

        public function prescription_acailable()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/prescription_available', $data);
        }

        public function product_medicine_heart()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/product_medicine_heart', $data);
        }

        public function product_medicine_diabetes()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/product_medicine_diabetes', $data);
        }

        public function product_medicine_gastro()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/product_medicine_gastro', $data);
        }

        public function product_medicine_infection()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/product_medicine_infection', $data);
        }

        public function product_medicine_muscle()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/product_medicine_muscle', $data);
        }

        public function view_a_prescription()
        {
            $this->userModel = $this->model('User');
            $data ="";
            $this->view('pharmacists/view_a_prescription', $data);
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

