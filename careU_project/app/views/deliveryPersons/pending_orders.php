<?php require APPROOT . '/views/deliveryPersons/deliveryPerson_header.php'; ?>


    <main class="content" >

    <div id="blur" class="container">
    
    
        <div class="body-right-view">
          <h3 class="topic1-view">Pending Orders</h3>

          <div class="search-container">
                        <form action="<?php echo URLROOT;?>/admins/search_manager" method="POST">
                            <input type="text" placeholder="Search..." name="search" id="search">
                            <button type="submit" name="search" id="btn-search"><i class="fa fa-search"></i></button>
                        </form>
          </div>
          <br>

            <div class="container2-view">

            <table>
                
                    <tr>
                        <th style="width:10%">Order ID</th>
                        <th style="width:15%">Invoice ID</th>
                        <th style="width:15%">Customer ID</th>
                        <th style="width:20%">Order Date</th>
                        <th style="width:30%">Shipping Address</th>
                        <th style="width:10%">Action</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    
                    <tbody class="all-data">

                        <?php 
                                                                                                                                                                                                                        
                            foreach($data['PendingOrdersDetails'] as $orderObject){
                                echo '                          
                                <tr class="dataset1">
                                    <td>' .$orderObject->orderId. '</td>
                                    <td>' .$orderObject->invoiceID. '</td>
                                    <td>' .$orderObject->customerID. '</td>
                                    <td>' ." ". '</td>
                                    <td>' .$orderObject->address." ".$orderObject->city. '</td>
                                    
                                    <td class="vm">
                                        <form action="'.URLROOT.'/deliveryPersons/accept_pendingOrder" method="POST">
                                            <input type="hidden" name="orderId" value="' .$orderObject->orderId.'">
                                            <input type="hidden" name="customerID" value="' .$orderObject->customerID.'">
                                            <button class="viewMore" type="submit">Accept</button>
                                        </form>
                                    </td>
                                </tr>
                                ';
                    
                            }
                        
                        ?>
                
                    </tbody>
                    <tbody id="details" class="search-data"></tbody>
                                      
                    
            </table>
                
            </div>
        </div>
    </div>
                            
        
       
    </main>

    

    
<script src="<?php echo URLROOT;?>/public/js/admins/search_manager.js"></script>
    


<?php require APPROOT . '/views/inc/footer.php'; ?>

