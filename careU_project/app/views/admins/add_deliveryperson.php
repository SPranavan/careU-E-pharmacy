<?php require APPROOT . '/views/inc/admin_header.php'; ?>

    <main class="content">

    <div class="box1">
        <a href="<?php echo URLROOT; ?>/admins/add_manager"><span class="actor">Manager</span></a><br><br>
        <a href="addPharmacist.php"><span class="actor">Pharmacist</span></a><br><br>
        <a href="addStoreKeeper.php"><span class="actor">Store Keeper</span></a><br><br>
        <a href="addDeliveryPerson.php"><span class="actor1">Delivery Person</span></a>
    </div>

    <div class="body-right">

        <h3 class="topic1">Add | Delivery Person</h3>   

        <div class="container1">

            <form action="<?php echo URLROOT; ?>/admins/add_deliveryperson" method="POST">
                    <div class="row">
                    <div class="col-25">
                        <label for="empID">Employee ID:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="empID" name="user_ID" value="<?php echo $user_ID; ?>" readonly>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="fName" value="<?php echo $data['fName']; ?>" required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lName" value="<?php echo $data['lName']; ?>" required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="telNo">Mobile Number:</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" id="telNo" name="mobile" value="<?php echo $data['mobile']; ?>" required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="mail">Email:</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="mail" name="email" value="<?php echo $data['email']; ?>" required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="sa">Street Address:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="sa" name="address" value="<?php echo $data['address']; ?>" required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="city">City</label>
                    </div>
                    <div class="col-75">
                        <select id="city" name="city" value="<?php echo $data['city']; ?>">
                        <option value="Kandy">Kandy</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Jaffna">Jaffna</option>
                        </select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="pw">Password:</label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="pw" name="password" value="<?php echo $data['password']; ?>" required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="cpw">Confirm Password:</label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="cpw" name="confirm_password" value="<?php echo $data['confirm_password']; ?>" required>
                    </div>
                    </div>
                    
                    <br>
                    
                    <br>
                    <div class="row">
                    <input type="submit" value="Add" name="submit">
                    </div>
                    
            </form>



        </div>

    </div>
        

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>