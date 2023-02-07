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


    // $query = "select * from manager order by Employee_ID desc limit 1";
    // $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_array($result);
    // $lastid = $row['Employee_ID'];
    // if($lastid == " ")
    // {
    //     $Employee_ID = "M00001";
    // }
    // else
    // {
    //     $Employee_ID = substr($lastid,5);
    //     $Employee_ID = intval($Employee_ID);
    //     $Employee_ID = "M0000" . ($Employee_ID + 1);
    // }


        // public function customerID($user_ID){
        //     $this->db->query("SELECT * FROM users where user_role = 'customer' ORDER BY :user_ID desc limit 1");
        //     $this->db->bind(':user_ID', $user_ID);
        //     $row = $this->db->single();

        //     $lastid = $row[':user_ID'];
        //     if($lastid == " ")
        //     {
        //         $user_ID = "C00001";
        //     }
        //     else
        //     {
        //         $user_ID = substr($lastid, 5);
        //         $user_ID = intval($user_ID);
        //         $user_ID = "C0000" . ($user_ID+1);
        //     }
        // }

        public function register($data){

            $user_ID = null;
            
            $this->db->query("SELECT * FROM users where user_role = 'customer' ORDER BY :user_ID desc limit 1");
            $this->db->bind(':user_ID', $user_ID);
            $row = $this->db->single();

            //error_log(print_r($row, true));
            //$lastid = $row[':user_ID'];
            $lastid = $row->user_ID;
            if($lastid == " ")
            {
                $user_ID = "C00001";
            }
            else
            {
                // $user_ID = substr($lastid, 5);
                // $user_ID = intval($user_ID);
                // $user_ID = "C0000" . ($user_ID+1);

                preg_match('/C(\d+)/', $lastid, $matches);
                $user_ID = "C" . str_pad($matches[1] + 1, 5, "0", STR_PAD_LEFT);
            }

            $this->db->query('INSERT INTO users (user_ID, fName, lName, mobile, email, address, city, password, user_role) VALUES(:user_ID, :fName, :lName, :mobile, :email, :address, :city, :password, :user_role)');
            // Bind values
            $this->db->bind(':user_ID', $user_ID);
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

    
    



  