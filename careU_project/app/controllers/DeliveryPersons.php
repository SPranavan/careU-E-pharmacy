<?php

    class deliverypersons extends Controller{

        private $deliverypersonModel;

    

    public function __construct(){

        $this->deliverypersonModel = $this->model('deliveryperson');
    }

    public function index(){
        $this->deliverypersonModel = $this->model('DeliveryPerson');
        $data ="";
        $this->view('deliveryPersons/deliveryPersons_dashboard', $data);
    }


    public function locate(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

          if(isset($_POST['orderId'])){
              $orderId = (trim($_POST['orderId']));
            } else {
              $orderId = '';
            }
            
            if(isset($_POST['customerID'])){
              $customerID = trim($_POST['customerID']);
            } else {
              $customerID = '';
            }

            if(isset($_POST['deliveryID'])){
              $deliveryID = trim($_POST['deliveryID']);
            } else {
              $deliveryID = '';
            }

            $data = [
              'orderId' => $orderId,
              'customerID' => $customerID,
              'deliveryID' => $deliveryID,
              'user_details' => '',
              'order_details' => '',
              'delivery_details' => ''
            ];

            

            $data['user_details'] = $this->deliverypersonModel->getCustomerDetails($data['customerID']);
            $data['order_details'] = $this->deliverypersonModel->getOrderDetails($data['orderId']);
            $data['delivery_details'] = $this->deliverypersonModel->getDeliveryDetails($data['deliveryID']);

            $data = [
              'user_details' => $data['user_details'],
              'order_details' => $data['order_details'],
              'delivery_details' => $data['delivery_details']
            ];

          

            $this->view('deliveryPersons/locate', $data);
            

      }
      else{
          die("Something went wrong, please try again!");
      }
    }



    public function pending_orders(){

        // $this->deliverypersonModel = $this->model('DeliveryPerson');
        // $data ="";
        // $this->view('deliveryPersons/pending_orders', $data);

        $PendingOrdersDetails = $this->deliverypersonModel->getPendingOrders();

        $data = [
            'PendingOrdersDetails' => $PendingOrdersDetails
        ];

        $this->view('deliveryPersons/pending_orders', $data);
    }

    public function inprogress_orders(){

        $InprogressOrdersDetails = $this->deliverypersonModel->getInprogressOrders();

        $data = [
            'InprogressOrdersDetails' => $InprogressOrdersDetails
        ];

        $this->view('deliveryPersons/inprogress_orders', $data);
    }

    public function delivered_orders(){
            
            $DeliveredOrdersDetails = $this->deliverypersonModel->getDeliveredOrders();
    
            $data = [
                'DeliveredOrdersDetails' => $DeliveredOrdersDetails
            ];
    
            $this->view('deliveryPersons/delivered_orders', $data);

    }

    public function accept_pendingOrder(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['orderId'])){
                $orderId = (trim($_POST['orderId']));
              } else {
                $orderId = '';
              }
              
              if(isset($_POST['customerID'])){
                $customerID = trim($_POST['customerID']);
              } else {
                $customerID = '';
              }


            $data = [
                'orderId' => $orderId,
                'customerID' => $customerID,
                'availability_status' => 'in progress',
                'acceptDate' => date("Y-m-d H:i:s")
                
            ];
          
    
            if($this->deliverypersonModel->accept_pendingOrder($data)){
                header("Location: ".URLROOT."/deliverypersons/pending_orders");
            }else{
                die("Something went wrong, please try again!");
            }
    
        }else{
            $data = [
                'orderId' => '',
                'customerID' => '',
            ];
        }
        $this->view('deliverypersons/accept_pendingOrder', $data);
    }



    public function inprogress_view(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['orderId'])){
                $orderId = (trim($_POST['orderId']));
              } else {
                $orderId = '';
              }
              
              if(isset($_POST['customerID'])){
                $customerID = trim($_POST['customerID']);
              } else {
                $customerID = '';
              }

              if(isset($_POST['deliveryID'])){
                $deliveryID = trim($_POST['deliveryID']);
              } else {
                $deliveryID = '';
              }

              $data = [
                'orderId' => $orderId,
                'customerID' => $customerID,
                'deliveryID' => $deliveryID,
                'user_details' => '',
                'order_details' => '',
                'delivery_details' => ''
              ];

              

              $data['user_details'] = $this->deliverypersonModel->getCustomerDetails($data['customerID']);
              $data['order_details'] = $this->deliverypersonModel->getOrderDetails($data['orderId']);
              $data['delivery_details'] = $this->deliverypersonModel->getDeliveryDetails($data['deliveryID']);

              $data = [
                'user_details' => $data['user_details'],
                'order_details' => $data['order_details'],
                'delivery_details' => $data['delivery_details']
              ];

              $this->view('deliveryPersons/inprogress_view', $data);
              

        }
        else{
            die("Something went wrong, please try again!");
        }
    
    }


    public function inprogress_action(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          if(isset($_POST['orderId'])){
              $orderId = (trim($_POST['orderId']));
            } else {
              $orderId = '';
            }
            

            if(isset($_POST['deliveryID'])){
              $deliveryID = trim($_POST['deliveryID']);
            } else {
              $deliveryID = '';
            }

            

            if(isset($_POST['confirm'])){
              $data = [
                'orderId' => $orderId,
                'deliveryID' => $deliveryID,
                'availability_status' => 'delivered',
                'deliveredDate' => date("Y-m-d H:i:s"),
                'review' => 'Successful Delivery'
              ];

              
              if($this->deliverypersonModel->inprogress_confirm($data)){
                header("Location: ".URLROOT."/deliveryPersons/inprogress_orders");
              }else{
                die("Something went wrong, please try again!");
              }

            } 
            elseif(isset($_POST['reject'])){
              $data = [
                'orderId' => $orderId,
                'deliveryID' => $deliveryID,
                'availability_status' => 'rejected',
                'rejectedDate' => date("Y-m-d H:i:s"),
                'review' => '',
                
                

              ];


              if($this->deliverypersonModel->inprogress_reject($data)){
                header("Location: ".URLROOT."/deliveryPersons/inprogress_orders");

              }else{
                die("Something went wrong, please try again!");
              }
            }
      }
      else{
          die("Something went wrong, please try again!");
      }
    }


    public function delivered_view(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          if(isset($_POST['orderId'])){
              $orderId = (trim($_POST['orderId']));
            } else {
              $orderId = '';
            }
            
            if(isset($_POST['customerID'])){
              $customerID = trim($_POST['customerID']);
            } else {
              $customerID = '';
            }

            if(isset($_POST['deliveryID'])){
              $deliveryID = trim($_POST['deliveryID']);
            } else {
              $deliveryID = '';
            }

            $data = [
              'orderId' => $orderId,
              'customerID' => $customerID,
              'deliveryID' => $deliveryID,
              'user_details' => '',
              'order_details' => '',
              'delivery_details' => ''
            ];

            

            $data['user_details'] = $this->deliverypersonModel->getCustomerDetails($data['customerID']);
            $data['order_details'] = $this->deliverypersonModel->getOrderDetails($data['orderId']);
            $data['delivery_details'] = $this->deliverypersonModel->getDeliveryDetails($data['deliveryID']);

            $data = [
              'user_details' => $data['user_details'],
              'order_details' => $data['order_details'],
              'delivery_details' => $data['delivery_details']
            ];

           

            $this->view('deliveryPersons/delivered_view', $data);
            

      }
      else{
          die("Something went wrong, please try again!");
      }
  
  }

}
        
        
    

