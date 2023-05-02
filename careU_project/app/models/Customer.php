<?php
    
    class Customer{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function Medicine()
    {
        $this->db->query("SELECT * FROM medicine WHERE medicine_type1='medicine'");
        $row = $this->db->resultSet();
        return $row;
    }

    public function Personal_Care()
    {
        $this->db->query("SELECT * FROM medicine WHERE medicine_type1='Personal Care'");
        $row = $this->db->resultSet();
        return $row;
    }

    public function Medical_Equipments()
    {
        $this->db->query("SELECT * FROM medicine WHERE medicine_type1='Medical Equipments'");
        $row = $this->db->resultSet();
        return $row;
    }
}


    