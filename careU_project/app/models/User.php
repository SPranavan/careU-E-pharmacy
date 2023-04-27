<?php
    class User{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        // Login Function
        public function login($email, $password){
            $this->db->query("SELECT * FROM users where email = :email");
            $this->db->bind(':email', $email);
            
            $row = $this->db->single();

            $hashed_password = $row->password;
            if(password_verify($password, $hashed_password)){
                return $row;
            } else {
                return false;
            }
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



        // Regsiter user



        public function getLastUserID()
        {
            $stmt = $this->db->prepare("SELECT user_ID FROM users where user_role = 'customer' ORDER BY user_ID DESC LIMIT 1");
            $stmt->execute();

            return $stmt->fetchColumn();
        }

        

        public function register($data){

            
                      

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
            $this->db->bind(':user_role', 'customer');
            $this->db->bind(':joinedDate', date('Y-m-d H:i:s'));
            $this->db->bind(':active_status', 'Active');

        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
  


        

        
    }

    
    



  