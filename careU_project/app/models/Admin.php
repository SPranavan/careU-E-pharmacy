<?php
    class User{

        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getLastUserID(){

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
            $this->db->bind(':user_role', 'customer');
        
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }
    }