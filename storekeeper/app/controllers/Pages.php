<?php
    class Pages extends Controller{
        public function __construct(){
            if(!isLoggedIn()){      //if not logged in
                redirect('users/login');
            }
        }

        public function dashboard(){
            $data=[];
            
            $this->view('pages/dashboard',$data);          //it will load dashboard.php file in pages folder of view
        }
    }

?>