<?php 
    /*
        Login 
    */ 
    class View_medicine extends Controller{

        //Create variable to connect to DB
        private $userModel;

        //Assigned 'User' model file
        public function __construct(){
            $this->userModel = $this->model('User');
        }

    public function index(){
        $this->userModel=$this->model('User');
        $data='';
        $this->view('pages/view_medicine',$data);
    }

    public function createUserSession($user){
        $_SESSION['user_id']=$user->ID;
        $_SESSION['user_email']=$user->email;
        $_SESSION['user_name']=$user->first_name;
        redirect('pages/dashboard');                //it will redirect to index method in pages controller
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
      
  }