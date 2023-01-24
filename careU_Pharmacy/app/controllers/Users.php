<?php 

    /*
        *TASKS:
            ~ Login
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
                    'email' => trim($_POST['userEmail']),
                    'password' => trim($_POST['userPassword']),
                    
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

