<?php require APPROOT . '/views/inc/admin_header.php'; ?>


    <main class="content">

    <div class="box2">
    
        <a href="<?php echo URLROOT; ?>/admins/view_manager"><span class="actor">Manager</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_pharmacist"><span class="actor1">Pharmacist</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_storekeeper"><span class="actor">Store Keeper</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_deliveryperson"><span class="actor">Delivery Person</span></a><br><br>
        <a href="<?php echo URLROOT; ?>/admins/view_customer"><span class="actor">Customer</span></a><br><br>
    </div>

    
        <div class="body-right-view">
          <h3 class="topic1-view">Details | Pharmacist</h3>

          <div class="search-container">
                        <form action="<?php echo URLROOT;?>/admins/search_pharmacist" method="POST">
                            <input type="text" placeholder="Search..." name="search" id="search">
                            <button type="submit" name="search" id="btn-search"><i class="fa fa-search"></i></button>
                        </form>
          </div>
          <br>
          
            <div class="container2-view">
            <table>
                    <tr>
                        <th style="width:15%">Pharmacist ID</th>
                        <th style="width:27%">Full Name</th>
                        <th style="width:20%">Contact Number</th>
                        <th style="width:30%">Email</th>
                        <th style="width:20%">&nbsp</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->

                    <tbody class="all-data">

                    <?php foreach($data['pharmacist_details'] as $pObject){
                        
                        echo '                          
                                <tr class="dataset1">
                                    <td>' .$pObject->user_ID. '</td>
                                    <td>' .$pObject->fName." ".$pObject->lName. '</td>
                                    <td>' .$pObject->mobile. '</td>
                                    <td>' .$pObject->email. '</td>
                                    <td class="vm">
                                        <form action="'.URLROOT.'/admins/view_more" method="POST">
                                            <input type="hidden" name="user_ID" value="' .$pObject->user_ID.'">
                                            <button class="viewMore" type="submit"><img src="'.URLROOT.'/public/img/admins/eye.png" alt="view more" style="width:30px;height:20px;"></button>
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

    
        

        
    </main>

    <script src="<?php echo URLROOT;?>/public/js/admins/search_pharmacist.js"></script>



<?php require APPROOT . '/views/inc/footer.php'; ?>