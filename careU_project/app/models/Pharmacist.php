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


        

        
    }

    
    



  