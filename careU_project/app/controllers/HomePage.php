<?php
  class HomePage extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      
     
      $this->view('users/home_page');
      //$this->view('admins/admin_dashboard');
    }

    
  }