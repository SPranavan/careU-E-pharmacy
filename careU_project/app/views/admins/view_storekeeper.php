<?php require APPROOT . '/views/inc/admin_header.php'; ?>


    <main class="content">

    <div class="box2">
        <a href="<?php echo URLROOT; ?>/admins/view_manager"><span class="actor">Manager</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_pharmacist"><span class="actor">Pharmacist</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_storekeeper"><span class="actor1">Store Keeper</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_deliveryperson"><span class="actor">Delivery Person</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_customer"><span class="actor">Customer</span></a><br><br>
    </div>

    
        <div class="body-right-view">
          <h3 class="topic1-view">Details | Store Keeper</h3>
            <div class="container2-view">
            <table>
                    <tr>
                        <th style="width:16%">Store Keeper ID</th>
                        <th style="width:27%">Name</th>
                        <th style="width:20%">Contact Number</th>
                        <th style="width:30%">Email</th>
                        <th style="width:20%">&nbsp</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    
                    <?php foreach($data['storekeeper_details'] as $sObject) : ?>
                        
                        <tr class="dataset1">
                            <!-- FETCHING DATA FROM EACH
                                ROW OF EVERY COLUMN -->
                            <td><?php echo $sObject->user_ID ?></td>
                            <td><?php echo $sObject->fName." ".$sObject->lName ?></td>
                            <td><?php echo $sObject->mobile ?></td>
                            <td><?php echo $sObject->email ?></td>
                            <td class="vm">
                                <form action="<?php echo URLROOT;?>/admins/view_more" method="POST">
                                <input type="hidden" name="user_ID" value="<?php echo $sObject->user_ID; ?>">
                                
                                <button class="viewMore" type="submit"><img src="<?php echo URLROOT;?>/public/img/admins/eye.png" alt="view more" style="width:30px;height:20px;"></button>

                                </form> 
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    


                   
                    
            </table>
                
            </div>
        </div>

    
        

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>