<?php require APPROOT . '/views/inc/admin_header2.php'; ?>



    <main class="content" >

    <div id="blur" class="container">
    <h3 class="viewer-name"><?php echo $data['userRole']->userRole; ?></h3>
    <div class="box3">
        
        
    </div>

    
        <div class="body-right-view">

                <div class="container3">

                <form action="<?php echo URLROOT; ?>/admins/view_more" method="POST">
                    <div class="row">
                    <div class="col-25">
                        <label for="empID">Employee ID:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="empID" name="user_ID" value="<?php echo $data['user_details']->user_ID; ?>" readonly>
                        <br><br>
                    </div>
                    </div> 

                    <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="fName" value="<?php echo $data['user_details']->fName; ?>" readonly><br>
                        
                        <br>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lName" value="<?php echo $data['user_details']->lName; ?>" readonly><br>
                        <br>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-25">
                        <label for="birthDate">Birth Date:</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="birthDate" name="birthDate" value="<?php echo $data['user_details']->birthDate; ?>" readonly><br>
                        <br>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-25">
                        <label for="age">Age:</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="age" name="age" value="<?php echo $data['age']->age; ?>" readonly><br>
                        <br>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-25">
                        <label for="telNo">Mobile Number:</label>
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

                    <div class="row">
                    <div class="col-25">
                        <label for="joinedDate">Joined Date:</label>
                    </div>
                    <div class="col-75">
                        <input type="datetime-local" id="joinedDate" name="joinedDate" value="<?php echo $data['user_details']->joinedDate; ?>" readonly><br>
                        <br><br>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-25">
                        <label for="status">Active Status:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="status" name="status" value="<?php echo $data['user_details']->active_status; ?>" readonly><br>
                        <br>
                    </div>
                    </div>

                    
                    
                    
            </form>

            <form action="<?php echo URLROOT; ?>/admins/user_account_status" method="POST">
            <div class="row">
                        <input type="hidden" name="user_ID" value="<?php echo $data['user_details']->user_ID;?>">
                        <input type="hidden" name="user_role" value="<?php echo $data['user_details']->user_role;?>">
                        <input type="hidden" name="status" value="<?php echo $data['user_details']->active_status;?>">
                        <a href="<?php echo URLROOT; ?>/admins/view_<?php echo ($data['user_details']->user_role); ?>" class="goback"><span>Back</span></a>

            
                        <input type="submit" value="<?php if(($data['user_details']->active_status)=='Active'){
                            echo ("Delete Account");
                        }
                        elseif(($data['user_details']->active_status)=='Deactivated'){
                            echo ("Activate Account");
                        }
                        ; ?>" name="submit">
                        
                        
                        </div>
            </form>
            



        </div>
          
        </div>
    </div>

        
       
    </main>

    

            
     

    


<?php require APPROOT . '/views/inc/footer.php'; ?>

