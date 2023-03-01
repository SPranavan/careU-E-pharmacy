<?php 

    /*
        *TASKS:
            ~ Login & Reg
    */ 

    class pharmacists extends Controller{

        //Create varibale to connect to DB
        private $PharmacistModel;

        //Assigned 'Pharmacist' model file
        public function __construct()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
        }

        public function index()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/home_page', $data);
        }

        public function accepted_orders()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/accepted_orders', $data);
        }

        public function accepted_prescription()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $accepted_pres = $this->PharmacistModel->accepted_prescription();
            $data =$accepted_pres;
            $this->view('pharmacist/accepted_prescription', $data);
        }

        // public function available_prescription()
        // {
        //     $this->PharmacistModel = $this->model('Pharmacist');
        //     $data ="";
        //     $this->view('pharmacist/available_prescription', $data);
        // }

        public function completed_orders()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/completed_orders', $data);
        }

        public function dashboard()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/dashboard', $data);
        }

        public function completed_prescription()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $completed_pres = $this->PharmacistModel->completed_prescription();
            $data =$completed_pres;
            $this->view('pharmacist/completed_prescription', $data);
        }

        public function create_new_prescription()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/create_new_prescription', $data);
        }

        public function created_prescription()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/created_prescription', $data);
        }

        public function new_order()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/new_order', $data);
        }

        public function available_prescription()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $avail_pres = $this->PharmacistModel->available_prescription();
            $data =$avail_pres;
            $this->view('pharmacist/available_prescription', $data);
        }

        public function product_medicine_heart()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $heartmeds = $this->PharmacistModel-> getHeartMeds();
            $data =$heartmeds;
            $this->view('pharmacist/product_medicine_heart', $data);
        }

        public function product_medicine_diabetes()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $diabetesmeds = $this -> PharmacistModel ->getdiabetesMeds();
            $data =$diabetesmeds;
            $this->view('pharmacist/product_medicine_diabetes', $data);
        }

        public function product_medicine_gastro()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $gastromeds = $this->PharmacistModel->getgastroMeds();
            $data =$gastromeds;
            $this->view('pharmacist/product_medicine_gastro', $data);
        }

        public function product_medicine_infection()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $infectionmeds = $this->PharmacistModel ->getinfectionMeds();
            $data =$infectionmeds;
            $this->view('pharmacist/product_medicine_infection', $data);
        }

        public function product_medicine_muscle()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $musclemeds=$this->PharmacistModel->getmuscleMeds();
            $data =$musclemeds;
            $this->view('pharmacist/product_medicine_muscle', $data);
        }

        public function view_a_prescription()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/view_a_prescription', $data);
        }

        public function product_pc_nourishment()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $noruish_pc = $this->PharmacistModel->getnourishments();
            $data =$noruish_pc;
            $this->view('pharmacist/product_pc_nourishments', $data);
        }

        public function product_pc_accessories()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $accessories_pc = $this->PharmacistModel->getaccessories();
            $data = $accessories_pc;
            $this->view('pharmacist/product_pc_accessories', $data);
        }

        public function product_pc_skincare()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $skincare_pc = $this->PharmacistModel->getskincare();
            $data =$skincare_pc;
            $this->view('pharmacist/product_pc_skincare', $data);
        }

        public function product_pc_womenpc()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $womencare_pc = $this->PharmacistModel->women_personalcare();
            $data =$womencare_pc;
            $this->view('pharmacist/product_pc_womenpc', $data);
        }

        public function product_pc_oralcare()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $oralcare = $this->PharmacistModel->oralcare();
            $data =$oralcare;
            $this->view('pharmacist/product_pc_oralcare', $data);
        }

        public function product_md_firstaid()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $firstaid = $this->PharmacistModel->firstaid();
            $data =$firstaid;
            $this->view('pharmacist/product_md_firstaid', $data);
        }

        public function product_md_healthdevice()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $health_device = $this->PharmacistModel->health_device();
            $data =$health_device;
            $this->view('pharmacist/product_md_healthdevice', $data);
        }

        public function product_md_support()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $support = $this->PharmacistModel->support();
            $data =$support;
            $this->view('pharmacist/product_md_support', $data);
        }


        //Pharmacist's login authentication
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

                  //Check Pharmacist/email
                  if($this->PharmacistModel->findPharmacistByEmail($data['email'])){
                  //Pharmacist found

                  }
                  
                  else{
                      $data['email_err'] = " *Pharmacist not found";
                  }
              }

              //Valid Password
              if(empty($data['password'])){
                  $data['password_err'] = " *please enter password";
              }
              

              // IF ERRORS FREE, THEN ACCORDING TO Pharmacist ROLE NEED TO CREATE SEASSION AND LAND IN TO HIS/HER OWNS PAGE
              if(empty($data['email_err']) && empty($data['password_err'])){

                  //Authentication Pharmacist's email & password
                  $loggedInPharmacist = $this->PharmacistModel->login($data['email'], $data['password']);

                  if($loggedInPharmacist){
                      $this->createPharmacistSession($loggedInPharmacist);
                  }
                  else{
                      $data['password_err'] = " *incorrect password";
                      $this->view('Pharmacists/login', $data);
                  }
              }
              else{
                  $this->view('Pharmacists/login', $data);
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
              $this->view('Pharmacists/login', $data);
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
                if($this->PharmacistModel->findPharmacistByEmail($data['email'])){
                  $data['email_err'] = 'Email is already taken';
                }
              }
      
              if(empty($data['mobile'])){
                  $data['mobile_err'] = 'Pleae enter mobile number';
               } else {
                  // Check mobile
                  if($this->PharmacistModel->findPharmacistByMobile($data['mobile'])){
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
      
                // Register Pharmacist
                if($this->PharmacistModel->register($data)){
                  //flash('register_success', 'You are registered and can log in');
                  redirect('Pharmacists/login');
                } else {
                  die('Something went wrong');
                }
      
              } else {
                // Load view with errors
                $this->view('Pharmacists/register', $data);
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
              $this->view('Pharmacists/register', $data);

              
            }
          }


          //Create Session
          public function createPharmacistSession($Pharmacist){

            //Store session data
            $_SESSION['Pharmacist_fName'] = $Pharmacist->fName;
            $_SESSION['Pharmacist_lName'] = $Pharmacist->lName;
            $_SESSION['Pharmacist_role'] = $Pharmacist->role;

            //redirect to the Pharmacist's homepage
            die("logged successfully");
            //redirect('admin/home');

          }


        
    }

