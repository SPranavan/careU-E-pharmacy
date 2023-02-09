<?php 
    class Storekeepers extends Controller{

        //Create variable to connect to DB
        private $userModel;

        //Assigned 'User' model file
        public function __construct(){
            $this->userModel = $this->model('User');
        }

        //User's login authentication
        public function login(){
            //check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
               // Sanitize POST data
               $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              
               //Fetch data from request form
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_err' => '',
                    'password_err' => ''
                ];
  
                //Validate email
                if(empty($data['email'])){
                    $data['email_err'] =  " *please enter email";
                }
  
                // Validate Password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                }
  
                //Check for user email
                if($this->userModel->findUserByEmail($data['email'])){
                    //User found
                }    
                else{
                    //User not found
                    $data['email_err'] = " *User not found";
                }
  
                // IF ERRORS FREE, THEN ACCORDING TO USER ROLE NEED TO CREATE SESSION AND LAND IN TO HIS/HER OWNS PAGE
                if(empty($data['email_err']) && empty($data['password_err'])){
                    //Validated
                    //Authentication user's email & password
                    $loggedInUser = $this->userModel->login($data['email'], $data['password']);                                        //ERROR
                      
                    if($loggedInUser){
                        $this->createUserSession($loggedInUser);
                    }
                    else{
                        $data['password_err'] = " *incorrect password";
                        $this->view('users/login', $data);
                    }
                }
                else{
                     // Load view with errors
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
  
                //load view
                $this->view('users/login', $data);
            }
          }

        
        public function index(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/dashboard',$data);
        }
     
        public function Add_medicaldevices(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/add_medicaldevices',$data);
        }
     
        public function Add_medicine(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/add_medicine',$data);
        }
     
        public function Add_personalcare(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/add_personalcare',$data);
        }
     
        public function View_medicine(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/view_medicine',$data);
        }
     
        public function View_medicaldevices(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/view_medicaldevices',$data);
        }
     
        public function View_personalcare(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/view_personalcare',$data);
        }
     
        public function Delete_medicine(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/delete_medicine',$data);
        }
     
        public function Delete_medicaldevices(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/delete_medicaldevices',$data);
        }
     
        public function Delete_personalcare(){
            $this->userModel=$this->model('User');
            $data='';
            $this->view('storeKeepers/delete_personalcare',$data);
        }
     
        
     
     
     
        public function createUserSession($user){
            $_SESSION['user_id']=$user->ID;
            $_SESSION['user_email']=$user->email;
            $_SESSION['user_name']=$user->first_name;
            redirect('storeKeepers/dashboard');                //it will redirect to index method in pages controller
        }
     
        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_name']);
            session_destroy();
            redirect('users/login');
        }
          
      } 