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
        public function register($data){
            $this->db->query('INSERT INTO users (fName, lName, mobile, email, address, city,password) VALUES(:fName, :lName, :mobile, :email, :address, :city, :password)');
            // Bind values
            $this->db->bind(':fName', $data['fName']);
            $this->db->bind(':lName', $data['lName']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':password', $data['password']);
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
  


        

        
    }

    
    



  