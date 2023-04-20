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
            $count_heart = $this->PharmacistModel->getCount_Heart();
            $count_diabetes=$this->PharmacistModel->getCount_diabetes();
            $count_infection=$this->PharmacistModel->getCount_infection();
            $count_gastro=$this->PharmacistModel->getCount_gastro();
            $count_muscle=$this->PharmacistModel->getCount_muscle();
            $count_customer=$this->PharmacistModel->getCount_customer();

            $cur_date = date('y-m-d');
            $count_expired=$this->PharmacistModel->getexpiredate($cur_date);

            $data =array($count_heart,$count_diabetes,$count_infection,$count_gastro,$count_muscle,$count_customer,$count_expired);
            //print_r($data);die();
            $this->view('pharmacist/dashboard', $data);
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

        // public function dashboard()
        // {
        //     $this->PharmacistModel = $this->model('Pharmacist');
        //     $data ="";
        //     $this->view('pharmacist/dashboard', $data);
        // }

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

        public function account()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $email = $_SESSION['email'];
            $userdetails = $this->PharmacistModel->getuserdetails($email);
            $data =$userdetails;
            // print_r($data);die();
            $this->view('pharmacist/account', $data);
        }

        public function change_pw()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            $this->view('pharmacist/change_pw', $data);
        }

        public function update_pw()
        {
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ="";
            //print_r($_POST);die();
            $cur_pw = $_POST['cur_pw']; 
            $res = $this->PharmacistModel->getuserdetails($_SESSION['email']);
            if (password_verify($cur_pw,$res[0]->password)) {
                if ($_POST['new_pw'] == $_POST['con_pw'] ) {
                    $hashed = password_hash($_POST['new_pw'], PASSWORD_DEFAULT);
                    $res = $this->PharmacistModel->updatePassword($_SESSION['email'],$hashed);
                    if ($res) {
                        header('Location: ./account');
                    }
                }
                else {
                    $_SESSION['error2'] = "Passwords Not Match";
                    $this->view('pharmacist/change_pw', $data);
                    exit();
                }
            }
            else {
                $_SESSION['error1'] = "Incorrect Password";
                $this->view('pharmacist/change_pw', $data);
                exit();
            }
            // print_r($res[0]->password);die();
            // $data ="";
            // $this->view('pharmacist/change_pw', $data);
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
            $_SESSION['profile_pic'] = $Pharmacist->profile_picture;

            //redirect to the Pharmacist's homepage
            die("logged successfully");
            //redirect('admin/home');

          }

          public function updateImg()
        {
            // print_r($_FILES);die();
            $this->PharmacistModel = $this->model('Pharmacist');
            $data ='';

            $target_dir = "C:/xampp/htdocs/careU_project/public/img/user-pics/";
        $filename = basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $filename;
        
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $result = $this->PharmacistModel->updateProfilePic($filename,$_SESSION['email']);
        if ($result) {
            $_SESSION['profile'] = $filename;
        }

        redirect('pharmacists/account'); 
        }
       
        
    }

