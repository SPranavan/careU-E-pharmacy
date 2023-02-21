<?php require APPROOT . '/views/inc/admin_header.php'; ?>

    <main class="content">

    <div class="box2">
    <a href="<?php echo URLROOT; ?>/admins/delete_manager"><span class="actor">Manager</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_pharmacist"><span class="actor">Pharmacist</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_storekeeper"><span class="actor1">Store Keeper</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_deliveryperson"><span class="actor">Delivery Person</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_customer"><span class="actor">Customer</span></a><br><br>
    </div>

    
        <div class="body-right-view">
          <h3 class="topic1-view">Details | Store Keeper</h3>
            <div class="container2-view">
            <table>
                    <tr>
                        <th style="width:13%">Store Keeper ID</th>
                        <th style="width:30%">Name</th>
                        <th style="width:15%">Contact Number</th>
                        <th style="width:30%">Email</th>
                        <th style="width:25%">&nbsp</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    
                    <tr class="dataset1">
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="vm"><a href=""><button class="viewMore"><img src="<?php echo URLROOT;?>/public/img/admins/delete_action.png" alt="view more" style="width:30px;height:20px;"></button></a></td>
                    </tr>

                    <tr class="dataset1">
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="vm"><a href=""><button class="viewMore"><img src="<?php echo URLROOT;?>/public/img/admins/delete_action.png" alt="view more" style="width:30px;height:20px;"></button></a></td>
                    </tr>

                    <tr class="dataset1">
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="vm"><a href=""><button class="viewMore"><img src="<?php echo URLROOT;?>/public/img/admins/delete_action.png" alt="delete" style="width:30px;height:20px;"></button></a></td>
                    </tr>

                   
                    
            </table>
                
            </div>
        </div>

    
        

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>