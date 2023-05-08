<?php
     
     class deliveryperson{

        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        
        public function getPendingOrders()
        {
            $this->db->query('SELECT order_details.orderId, order_details.customerID, order_details.invoiceID, users.address, users.city  
            FROM order_details 
            INNER JOIN users ON order_details.customerID = users.user_ID
            WHERE order_details.delivery_status = "not delivered" ORDER BY order_details.date DESC');
            $results = $this->db->resultSet();
            
            return $results;

        }

        public function getInprogressOrders()
        {
            $this->db->query('SELECT delivery_guy.deliveryID, delivery_guy.orderId, delivery_guy.customerID, delivery_guy.acceptDate, users.address, users.city  
            FROM delivery_guy 
            INNER JOIN users ON delivery_guy.customerID = users.user_ID 
            where delivery_guy.availability_status = "in progress" ORDER BY delivery_guy.acceptDate DESC');
            $results = $this->db->resultSet();
            return $results;
        }

        public function getDeliveredOrders()
        {
            $this->db->query('SELECT delivery_guy.deliveryID, delivery_guy.orderId, delivery_guy.customerID, delivery_guy.deliveredDate , delivery_guy.rejectedDate, delivery_guy.availability_status,users.address, users.city  
            FROM delivery_guy 
            INNER JOIN users ON delivery_guy.customerID = users.user_ID 
            where delivery_guy.availability_status = "delivered" ORDER BY delivery_guy.deliveryID DESC');
            $results = $this->db->resultSet();
            return $results;
        }

        public function accept_pendingOrder($data){

            $this->db->query('INSERT INTO delivery_guy (orderId, customerID, deliverypersonID, availability_status, acceptDate, deliveredDate) VALUES (:orderId, :customerID, :deliverypersonID, :availability_status, :acceptDate, NULL)');
            $this->db->bind(':orderId', $data['orderId']);
            $this->db->bind(':customerID', $data['customerID']);
            $this->db->bind(':deliverypersonID', $_SESSION['user_ID']);
            $this->db->bind(':availability_status', $data['availability_status']);
            $this->db->bind(':acceptDate', $data['acceptDate']);
        
            if($this->db->execute()){
                // continue with the update query only if the insert query is successful
                $this->db->query('UPDATE order_details SET delivery_status = "delivered", deliverypersonID = :deliverypersonID WHERE orderId = :orderId');
                $this->db->bind(':deliverypersonID', $_SESSION['user_ID']);
                $this->db->bind(':orderId', $data['orderId']);
        
                if($this->db->execute()){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        public function getCustomerDetails($customerID){

            $this->db->query('SELECT * FROM users WHERE user_ID = :customerID');
            $this->db->bind(':customerID', $customerID);
            $row = $this->db->single();
            
            if($this->db->rowCount() > 0){
                return $row;

            }else{
                return false;
            }
        }

        public function getOrderDetails($orderId){

            $this->db->query('SELECT * FROM order_details WHERE orderId = :orderId');
            $this->db->bind(':orderId', $orderId);
            $row = $this->db->single();

            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            }

        }

        public function getDeliveryDetails($deliveryID){

            $this->db->query('SELECT * FROM delivery_guy WHERE deliveryID = :deliveryID');
            $this->db->bind(':deliveryID', $deliveryID);
            $row = $this->db->single();

            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            }

        }

        public function inprogress_confirm($data){
                
                $this->db->query('UPDATE delivery_guy SET availability_status = "delivered", deliveredDate = :deliveredDate, review = "Successful Delivery" WHERE deliveryID = :deliveryID');
                $this->db->bind(':deliveredDate', $data['deliveredDate']);
                $this->db->bind(':deliveryID', $data['deliveryID']);
    
                if($this->db->execute()){
                    return true;
                    
                }else{
                    return false;
                }
        }
        
        public function inprogress_reject($data){

            $this->db->query('UPDATE delivery_guy SET availability_status = "rejected", rejectedDate = :rejectedDate, review = :review WHERE deliveryID = :deliveryID');
            $this->db->bind(':rejectedDate', $data['rejectedDate']);
            $this->db->bind(':review', $data['review']);
            $this->db->bind(':deliveryID', $data['deliveryID']);
             
                       
            if($this->db->execute()){
                return true;
            }else{
                return false;
               }

           
        }

}