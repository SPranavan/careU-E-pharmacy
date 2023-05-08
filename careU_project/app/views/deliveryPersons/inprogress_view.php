<?php require APPROOT . '/views/deliveryPersons/deliveryPerson_header2.php'; ?>

<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/deliveryPersons/viewmore.css">


<main class="content" >

<div id="blur" class="container">

<div class="body-left-view-vm">
    
    
    <h3 class="viewer-name-t">Customer Details:</h3>
    
    <div class="container4">
    <hr>
    <div class="row">
                <div class="col-25">
                    <label for="cusID">Customer ID:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="customerID" name="customerID" value="<?php echo $data['delivery_details']->customerID; ?>" readonly>
                    <br><br>
                </div>
                </div> 

                <div class="row">
                <div class="col-25">
                    <label for="name">First Name:</label>
                </div>
                <div class="col-75">
                <input type="text" id="fname" name="fName" value="<?php echo $data['user_details']->fName; ?>" readonly><br>
                    
                <br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="name">Last Name:</label>
                </div>
                <div class="col-75">
                <input type="text" id="lname" name="lName" value="<?php echo $data['user_details']->lName; ?>" readonly><br>
                    
                <br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="telNo">Contact Number:</label>
                </div>
                <div class="col-75">
                    <input type="tel" id="telNo" name="mobile" value="<?php echo $data['user_details']->mobile; ?>" placeholder="07Xxxxxxxx" readonly><br>
                    <br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="mail">Email:</label>
                </div>
                <div class="col-75">
                    <input type="email" id="mail" name="email" value="<?php echo $data['user_details']->email; ?>" readonly><br>
                    <br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="sa">Street Address:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="sa" name="address" value="<?php echo $data['user_details']->address; ?>" readonly><br>
                    <br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="city">City:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="city" name="city" value="<?php echo $data['user_details']->city; ?>" readonly><br>
                    <br>
                </div>
                </div>


    </div>
    
    
</div>


    <div class="body-right-view-vm">
    <h3 class="viewer-name-tt">Order Details:</h3>
    <br>
    

            <div class="container5">

            <hr>

                <div class="row">
                <div class="col-25">
                    <label for="delID">Delivery ID:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="deliveryID" name="deliveryID" value="<?php echo $data['delivery_details']->deliveryID; ?>" readonly>
                    <br><br>
                </div>
                </div> 

                <div class="row">
                <div class="col-25">
                    <label for="odID">Order ID:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="orderId" name="orderId" value="<?php echo $data['delivery_details']->orderId; ?>" readonly>
                    <br><br>
                </div>
                </div> 

                <div class="row">
                <div class="col-25">
                    <label for="invID">Invoice ID:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="invoiceID" name="invoiceID" value="<?php echo $data['order_details']->invoiceID; ?>" readonly>
                    <br><br>
                </div>
                </div> 

                <div class="row">
                <div class="col-25">
                    <label for="oDate">Order Date:</label>
                </div>
                <div class="col-75">
                    <input type="datetime-local" id="date" name="date" value="<?php echo $data['order_details']->date; ?>" readonly><br>
                    <br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="aDate">Accepted Date:</label>
                </div>
                <div class="col-75">
                    <input type="datetime-local" id="acceptDate" name="acceptDate" value="<?php echo $data['delivery_details']->acceptDate; ?>" readonly><br>
                    <br>
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                    <label for="status">Status:</label>
                </div>
                <div class="col-75">
                <input type="text" id="availability_status" name="availability_status" value="<?php if ($data['delivery_details']->availability_status == 'in progress') { echo 'In Progress'; } ?>" readonly><br>
                    
                    <br>
                </div>
                </div>

                

                          
                
                
        

        <form action="<?php echo URLROOT; ?>/deliveryPersons/inprogress_action" method="POST">
        <div class="row">
                    <input type="hidden" name="deliveryID" value="<?php echo $data['delivery_details']->deliveryID;?>">
                    <input type="hidden" name="orderId" value="<?php echo $data['delivery_details']->orderId;?>">

                    <input type="submit" value="Reject" class="reject" name="reject">
                    <input type="submit" value="Confirm Delivery" class="confirm" name="confirm">
                    <a href="<?php echo URLROOT; ?>/deliveryPersons/inprogress_orders ?>" class="goback"><span>Back</span></a>
            
                    
                    </div>
        </form>
        



    </div>
      
    </div>
</div>

    
   
</main>



        
 




<?php require APPROOT . '/views/inc/footer.php'; ?>