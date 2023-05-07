<?php require APPROOT . '/views/inc/deliveryPerson_header2.php'; ?>

<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/deliveryPersons/locate.css">


<main class="content" >

<div id="blur" class="container">

<div class="body-left-view-vm">
    
    
    <h3 class="viewer-name-t">Customer Details:</h3>
    
    <div class="container4">
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

       

                

                          
                
                
        

        <div class="row">
                 
                   
                    <a href="<?php echo URLROOT; ?>/deliveryPersons/delivered_orders ?>" class="goback1"><span>Back</span></a>
            
                    
                    </div>
        </form>
        



    
      
    
</div>

    
   
</main>



        
 




<?php require APPROOT . '/views/inc/footer.php'; ?>