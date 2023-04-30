<?php

    class Admin{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }


       


        public function findUserByEmail($email){
            $this->db->query("SELECT * FROM users where email = :email");
            $this->db->bind(':email', $email);

            $this->db->single();

            //check row
            if($this->db->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }

        public function findUserByMobile($mobile){
            $this->db->query("SELECT * FROM users where mobile = :mobile");
            $this->db->bind(':mobile', $mobile);

            $this->db->single();

            //check row
            if($this->db->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }

        public function findUserByUserID($user_ID){

            $this->db->query("SELECT * FROM users where user_ID = :user_ID");
            $this->db->bind(':user_ID', $user_ID);

            $row = $this->db->single();

            //check row
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 
        }

        //To calculate age
        public function calculateAge($user_ID){

            $stmt = $this->db->prepare("SELECT birthDate FROM users WHERE user_ID = :user_ID");
            $stmt->bindParam(':user_ID', $user_ID);
            $stmt->execute();
        
            $birthDate = $stmt->fetchColumn();
        
            $dobObject = new DateTime($birthDate);
            $currentDate = new DateTime();
            $ageInterval = $currentDate->diff($dobObject);
            $age = $ageInterval->y;
        
            return (object) ['age' => $age];

        }

        public function findRole($user_ID){

            $stmt = $this->db->prepare("SELECT user_role FROM users WHERE user_ID = :user_ID");
            $stmt->bindParam(':user_ID', $user_ID);
            $stmt->execute();
        
            $userRole = $stmt->fetchColumn();

            if($userRole == 'manager'){
                return (object) ['userRole' => "MANAGER"];
            }
            elseif($userRole == 'pharmacist'){
                return (object) ['userRole' => "PHARMACIST"];
            }
            elseif($userRole == 'storekeeper'){
                return (object) ['userRole' => "STORE KEEPER"];
            }
            elseif($userRole == 'deliveryperson'){
                return (object) ['userRole' => "DELIVERY PERSON"];
            }
            elseif($userRole == 'deliveryperson'){
                return (object) ['userRole' => "DELIVERY PERSON"];
            }
            elseif($userRole == 'customer'){
                return (object) ['userRole' => "CUSTOMER"];
            }
            else {
                return (object) ['userRole' => "UNKNOWN"];
            }
        }

        
        //Manager
        public function getLastUserID_manager()
        {
            $stmt = $this->db->prepare("SELECT user_ID FROM users where user_role = 'manager' ORDER BY user_ID DESC LIMIT 1");
            $stmt->execute();

            return $stmt->fetchColumn();
        }

        public function add_manager($data){
                  

            $this->db->query('INSERT INTO users (user_ID, fName, lName, birthDate, mobile, email, address, city, password, user_role, joinedDate, active_status) VALUES(:user_ID, :fName, :lName, :birthDate, :mobile, :email, :address, :city, :password, :user_role, :joinedDate, :active_status)');
            // Bind values
            $this->db->bind(':user_ID', $data['user_ID']);
            $this->db->bind(':fName', $data['fName']);
            $this->db->bind(':lName', $data['lName']);
            $this->db->bind(':birthDate', $data['birthDate']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':user_role', 'manager');
            $this->db->bind(':joinedDate', date('Y-m-d H:i:s'));;
            $this->db->bind(':active_status', 'Active');
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


        //Pharmacist
        public function getLastUserID_pharmacist()
        {
            $stmt = $this->db->prepare("SELECT user_ID FROM users where user_role = 'pharmacist' ORDER BY user_ID DESC LIMIT 1");
            $stmt->execute();

            return $stmt->fetchColumn();
        }

        public function add_pharmacist($data){
                  

            $this->db->query('INSERT INTO users (user_ID, fName, lName, birthDate, mobile, email, address, city, password, user_role, joinedDate,active_status) VALUES(:user_ID, :fName, :lName, :birthDate, :mobile, :email, :address, :city, :password, :user_role, :joinedDate, :active_status)');
            // Bind values
            $this->db->bind(':user_ID', $data['user_ID']);
            $this->db->bind(':fName', $data['fName']);
            $this->db->bind(':lName', $data['lName']);
            $this->db->bind(':birthDate', $data['birthDate']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':user_role', 'pharmacist');
            $this->db->bind(':joinedDate', date('Y-m-d H:i:s'));
            $this->db->bind(':active_status', 'Active');
            
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


        //Store Keeper
        public function getLastUserID_storekeeper()
        {
            $stmt = $this->db->prepare("SELECT user_ID FROM users where user_role = 'storekeeper' ORDER BY user_ID DESC LIMIT 1");
            $stmt->execute();

            return $stmt->fetchColumn();
        }

        public function add_storekeeper($data){
                  

            $this->db->query('INSERT INTO users (user_ID, fName, lName, birthDate, mobile, email, address, city, password, user_role, joinedDate, active_status) VALUES(:user_ID, :fName, :lName, :birthDate, :mobile, :email, :address, :city, :password, :user_role, :joinedDate, :active_status)');
            // Bind values
            $this->db->bind(':user_ID', $data['user_ID']);
            $this->db->bind(':fName', $data['fName']);
            $this->db->bind(':lName', $data['lName']);
            $this->db->bind(':birthDate', $data['birthDate']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':user_role', 'storekeeper');
            $this->db->bind(':joinedDate', date('Y-m-d H:i:s'));
            $this->db->bind(':active_status', 'Active');
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


        //Delivery Person
        public function getLastUserID_deliveryperson()
        {
            $stmt = $this->db->prepare("SELECT user_ID FROM users where user_role = 'deliveryperson' ORDER BY user_ID DESC LIMIT 1");
            $stmt->execute();

            return $stmt->fetchColumn();
        }

        public function add_deliveryperson($data){
                  
            

            $this->db->query('INSERT INTO users (user_ID, fName, lName, birthDate, mobile, email, address, city, password, user_role, joinedDate, active_status) VALUES(:user_ID, :fName, :lName, :birthDate, :mobile, :email, :address, :city, :password, :user_role, :joinedDate, :active_status)');
            // Bind values
            $this->db->bind(':user_ID', $data['user_ID']);
            $this->db->bind(':fName', $data['fName']);
            $this->db->bind(':lName', $data['lName']);
            $this->db->bind(':birthDate', $data['birthDate']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':user_role', 'deliveryperson');
            $this->db->bind(':joinedDate', date('Y-m-d H:i:s'));
            $this->db->bind(':active_status', 'Active');
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function view_manager(){

            $this->db->query("SELECT * FROM users where user_role = 'manager' and active_status = 'Active' ORDER BY user_ID DESC");
           
            return $this->db->resultSet();


        }

        public function delete_manager(){

            $this->db->query("SELECT * FROM users where user_role = 'manager' and active_status = 'Deactivated'");
           
            return $this->db->resultSet();


        }

        public function view_pharmacist(){

            $this->db->query("SELECT * FROM users where user_role = 'pharmacist' and active_status = 'Active' ORDER BY user_ID DESC");
           
            return $this->db->resultSet();


        }

        public function delete_pharmacist(){

            $this->db->query("SELECT * FROM users where user_role = 'pharmacist' and active_status = 'Deactivated'");
           
            return $this->db->resultSet();


        }

        public function view_storekeeper(){

            $this->db->query("SELECT * FROM users where user_role = 'storekeeper' and active_status = 'Active' ORDER BY user_ID DESC");
           
            return $this->db->resultSet();


        }

        public function delete_storekeeper(){

            $this->db->query("SELECT * FROM users where user_role = 'storekeeper' and active_status = 'Deactivated'");
           
            return $this->db->resultSet();


        }

        public function view_deliveryperson(){

            $this->db->query("SELECT * FROM users where user_role = 'deliveryperson' and active_status = 'Active' ORDER BY user_ID DESC");
           
            return $this->db->resultSet();


        }

        public function delete_deliveryperson(){

            $this->db->query("SELECT * FROM users where user_role = 'deliveryperson' and active_status = 'Deactivated'");
           
            return $this->db->resultSet();


        }

        public function view_customer(){

            $this->db->query("SELECT * FROM users where user_role = 'customer'and active_status = 'Active' ORDER BY user_ID DESC");
           
            return $this->db->resultSet();


        }

        public function delete_customer(){

            $this->db->query("SELECT * FROM users where user_role = 'customer'and active_status = 'Deactivated'");
           
            return $this->db->resultSet();


        }

        public function delete_user_account($user_ID){

            $this->db->query("UPDATE users SET active_status = 'Deactivated' WHERE user_ID = :user_ID");
            $this->db->bind(':user_ID', $user_ID);

            $row = $this->db->single();

            //check row
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 


        }

        public function activate_acc($user_ID){

            $this->db->query("UPDATE users SET active_status = 'Active' WHERE user_ID = :user_ID");
            $this->db->bind(':user_ID', $user_ID);

            $row = $this->db->single();

            //check row
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 

        }

        public function search_manager($search){
            $this->db->query("SELECT * FROM users WHERE user_role = 'manager' AND (fName LIKE :search OR lName LIKE :search OR email LIKE :search OR user_ID LIKE :search)");
            $this->db->bind(':search', '%'.$search.'%');
            $row = $this->db->resultSet();
            //var_dump($row); // Add this line to log the result set
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 
           
        }

        public function search_pharmacist($search){
            $this->db->query("SELECT * FROM users WHERE user_role = 'pharmacist' AND (fName LIKE :search OR lName LIKE :search OR email LIKE :search OR user_ID LIKE :search)");
            $this->db->bind(':search', '%'.$search.'%');
            $row = $this->db->resultSet();
            //var_dump($row); // Add this line to log the result set
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 
           
        }

        public function search_storekeeper($search){
            $this->db->query("SELECT * FROM users WHERE user_role = 'storekeeper' AND (fName LIKE :search OR lName LIKE :search OR email LIKE :search OR user_ID LIKE :search)");
            $this->db->bind(':search', '%'.$search.'%');
            $row = $this->db->resultSet();
            //var_dump($row); // Add this line to log the result set
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 
           
        }

        public function search_deliveryperson($search){
            $this->db->query("SELECT * FROM users WHERE user_role = 'deliveryperson' AND (fName LIKE :search OR lName LIKE :search OR email LIKE :search OR user_ID LIKE :search)");
            $this->db->bind(':search', '%'.$search.'%');
            $row = $this->db->resultSet();
            //var_dump($row); // Add this line to log the result set
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 
           
        }

        public function search_customer($search){
            $this->db->query("SELECT * FROM users WHERE user_role = 'customer' AND (fName LIKE :search OR lName LIKE :search OR email LIKE :search OR user_ID LIKE :search)");
            $this->db->bind(':search', '%'.$search.'%');
            $row = $this->db->resultSet();
            //var_dump($row); // Add this line to log the result set
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            } 
           
        }


            
    }

    