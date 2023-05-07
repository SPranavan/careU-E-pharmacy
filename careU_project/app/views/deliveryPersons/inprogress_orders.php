<?php require APPROOT . '/views/inc/deliveryPerson_header.php'; ?>





    <main class="content" >

    <div id="blur" class="container">
    
    
        <div class="body-right-view">
          <h3 class="topic1-view">In-Progress Orders</h3>

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
                        <th style="width:10%">Delivery ID</th>
                        <th style="width:10%">Order ID</th>
                        <th style="width:12%">Customer ID</th>
                        <th style="width:15%">Order Date</th>
                        <th style="width:15%">Accept Date</th>
                        <th style="width:30%">Shipping Address</th>
                        <th style="width:8%">&nbsp</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    
                    <tbody class="all-data">

                        <?php 
                            foreach($data['InprogressOrdersDetails'] as $ordersObject){
                            
                                echo '                          
                                <tr class="dataset1">
                                    <td>' .$ordersObject->deliveryID. '</td>
                                    <td>' .$ordersObject->orderId. '</td>
                                    <td>' .$ordersObject->customerID. '</td>
                                    <td>'  ." ". '</td>
                                    <td>' .$ordersObject->acceptDate. '</td>
                                    <td>' .$ordersObject->address." ".$ordersObject->city. '</td>
                                    <td class="vm1">
                                        <form action="'.URLROOT.'/deliveryPersons/inprogress_view" method="POST">
                                            <input type="hidden" name="deliveryID" value="' .$ordersObject->deliveryID.'">
                                            <input type="hidden" name="orderId" value="' .$ordersObject->orderId.'">
                                            <input type="hidden" name="customerID" value="' .$ordersObject->customerID.'">
                                            <button class="viewMore" type="submit"><img src="'.URLROOT.'/public/img/admins/eye.png" alt="view more" style="width:35px;height:25px;"></button>
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

