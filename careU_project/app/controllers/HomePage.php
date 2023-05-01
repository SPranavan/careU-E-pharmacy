<?php
  class HomePage extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      
     
      $this->view('users/home_page');
      //$this->view('admins/admin_dashboard');
      //$this->view('admins/add_manager');
      //$this->view('admins/add_deliveryperson');
      //$this->view('admins/my_account');
      //$this->view('admins/view_more');
    }

    
  }