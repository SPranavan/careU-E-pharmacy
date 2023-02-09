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

        
            
        public function getLastUserID_manager()
        {
            $stmt = $this->db->prepare("SELECT user_ID FROM users where user_role = 'admin' ORDER BY user_ID DESC LIMIT 1");
            $stmt->execute();

            return $stmt->fetchColumn();
        }

        public function add_manager($data){
                  

            $this->db->query('INSERT INTO users (user_ID, fName, lName, mobile, email, address, city, password, user_role) VALUES(:user_ID, :fName, :lName, :mobile, :email, :address, :city, :password, :user_role)');
            // Bind values
            $this->db->bind(':user_ID', $data['user_ID']);
            $this->db->bind(':fName', $data['fName']);
            $this->db->bind(':lName', $data['lName']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':user_role', 'admin');
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


            
    }