<?php require APPROOT . '/views/inc/admin_header.php'; ?>


    <main class="content">

    <div class="box2">
    <a href="<?php echo URLROOT; ?>/admins/delete_manager"><span class="actor">Manager</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_pharmacist"><span class="actor">Pharmacist</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_storekeeper"><span class="actor">Store Keeper</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_deliveryperson"><span class="actor">Delivery Person</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/delete_customer"><span class="actor1">Customer</span></a><br><br>
    </div>

    
        <div class="body-right-view">
          <h3 class="topic1-view">Details | Customer</h3>
            <div class="container2-view">
            <table>
                    <tr>
                        <th style="width:13%">Customer ID</th>
                        <th style="width:30%">Name</th>
                        <th style="width:20%">Contact Number</th>
                        <th style="width:30%">Email</th>
                        <th style="width:20%">&nbsp</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    
                    <?php foreach($data['customer_details'] as $cObject) : ?>
                        
                        <tr class="dataset1">
                            <!-- FETCHING DATA FROM EACH
                                ROW OF EVERY COLUMN -->
                            <td><?php echo $cObject->user_ID ?></td>
                            <td><?php echo $cObject->fName." ".$cObject->lName ?></td>
                            <td><?php echo $cObject->mobile ?></td>
                            <td><?php echo $cObject->email ?></td>
                            <td class="vm">
                                <form action="<?php echo URLROOT;?>/admins/view_more" method="POST">
                                <input type="hidden" name="user_ID" value="<?php echo $cObject->user_ID; ?>">
                                
                                <button class="viewMore" type="submit"><img src="<?php echo URLROOT;?>/public/img/admins/delete_action.png" alt="view more" style="width:30px;height:20px;"></button>

                                </form>
                            </td>
                        
                        </tr>
                    <?php endforeach; ?>


                   
                    
            </table>
                
            </div>
        </div>

    
        

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>