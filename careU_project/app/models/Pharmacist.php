<?php
    class Pharmacist{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getHeartMeds()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medicine' AND medicine_type2 ='heart'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function getdiabetesMeds()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medicine' AND medicine_type2 ='diabetes'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function getinfectionMeds()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medicine' AND medicine_type2 ='infection'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function getgastroMeds()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medicine' AND medicine_type2 ='gastro'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function getmuscleMeds()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medicine' AND medicine_type2 ='muscle'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function getnourishments()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='personal care' AND medicine_type2 ='nourishments'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function getaccessories()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='personal care' AND medicine_type2 ='accessories'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function getskincare()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='personal care' AND medicine_type2 ='skin care'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function women_personalcare()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='personal care' AND medicine_type2 ='women personal care'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function oralcare()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='personal care' AND medicine_type2 ='oral care'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function firstaid()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medical devices' AND medicine_type2 ='first aid'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function health_device()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medical devices' AND medicine_type2 ='health device'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function support()
        {
            $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medical devices' AND medicine_type2 ='support'");
            $row = $this->db->resultSet();
            return $row;
            
        }

        public function available_prescription()
        {
            $this->db->query("SELECT * FROM prescription");
            $row = $this->db->resultSet();
            return $row;
        }

        public function accepted_prescription()
        {
            $this->db->query("SELECT * FROM prescription");
            $row = $this->db->resultSet();
            return $row;
        }

        public function completed_prescription()
        {
            $this->db->query("SELECT * FROM prescription");
            $row = $this->db->resultSet();
            return $row;
        }

        public function getCount_Heart(){
            $this->db->query("SELECT COUNT(medicine_type2) AS heart FROM medicine WHERE medicine_type2 = 'heart';");
            $row = $this->db->resultSet();
            return $row[0]->heart;

        }

        public function getCount_diabetes(){
            $this->db->query("SELECT COUNT(medicine_type2) AS diabetes FROM medicine WHERE medicine_type2 = 'diabetes';");
            $row = $this->db->resultSet();
            return $row[0]->diabetes;

        }

        public function getCount_infection(){
            $this->db->query("SELECT COUNT(medicine_type2) AS infection FROM medicine WHERE medicine_type2 = 'infection';");
            $row = $this->db->resultSet();
            return $row[0]->infection;

        }

        public function getCount_gastro(){
            $this->db->query("SELECT COUNT(medicine_type2) AS gastro FROM medicine WHERE medicine_type2 = 'gastro';");
            $row = $this->db->resultSet();
            return $row[0]->gastro;

        }

        public function getCount_muscle(){
            $this->db->query("SELECT COUNT(medicine_type2) AS muscle FROM medicine WHERE medicine_type2 = 'muscle';");
            $row = $this->db->resultSet();
            return $row[0]->muscle;

        }

        public function getCount_customer(){
            $this->db->query("SELECT COUNT(customerID) AS customerID FROM customer;");
            $row = $this->db->resultSet();
            return $row[0]->customerID;

        }

        public function getexpiredate($cur_date){
            $this->db->query("SELECT COUNT(medicine_type2) AS expired FROM medicine WHERE expiry_date IS NOT NULL AND expiry_date < :date;");
            $this->db->bind(':date', $cur_date);
            $row = $this->db->resultSet();
            return $row[0]->expired;
        }

        public function getuserdetails($email){
            $this->db->query("SELECT fName,lName,mobile,email,user_role,password FROM users WHERE email = :email ");
            $this->db->bind(':email', $email);
            $row = $this->db->resultSet();
            return $row;
        }

        public function countuser($email){
            $this->db->query("SELECT COUNT(fName) FROM users WHERE email = :email ");
            $this->db->bind(':email', $email);
            $row = $this->db->resultSet();
            return $row;
        }

        public function updatePassword($email,$hashed)
        {
            $this->db->query("UPDATE users
            SET password= :hashed
            WHERE email=:email;");
            $this->db->bind(':hashed', $hashed);
            $this->db->bind(':email', $email);
            $row = $this->db->execute();
            if ($row) {
                return 1;
            } else {
                return 0;
            }
            
        }

        public function updateProfilePic($filename,$email)
        {
            $this->db->query("UPDATE users
            SET user_img= :picture
            WHERE email=:email;");
            $this->db->bind(':picture', $filename);
            $this->db->bind(':email', $email);
            $row = $this->db->execute();
            if ($row) {
                return 1;
            } else {
                return 0;
            }
        }




        

        
    }

    
    



  