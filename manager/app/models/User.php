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

            
            $h_password = $row->password;  //h_password - password from database {not hashed in my case}

            // if(password_verify($password, $h_password)){
            //     return $row;
            // }
            
            if(strcmp($h_password,$password)==0){
                return $row;
            }
            else {
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
 
    }

    
    



  