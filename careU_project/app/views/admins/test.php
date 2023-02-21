<div class="box1">
        <a href="addManager.php"><span class="actor1">Manager</span></a><br><br>
        <a href="addPharmacist.php"><span class="actor">Pharmacist</span></a><br><br>
        <a href="addStoreKeeper.php"><span class="actor">Store Keeper</span></a><br><br>
        <a href="addDeliveryPerson.php"><span class="actor">Delivery Person</span></a>
</div>

<div class="body-right">

    <h3 class="topic1">Add | Manager</h3>   

    <div class="container1">

        <form action="" method="post">
                <div class="row">
                  <div class="col-25">
                    <label for="empID">Employee ID:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="empID" name="Employee_ID" value="<?php echo $Employee_ID; ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="fname">First Name:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="firstname" value="<?php if (isset($_POST['submit'])) { echo $firstname; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="lname">Last Name:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="lname" name="lastname" value="<?php if (isset($_POST['submit'])) { echo $lastname; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="telNo">Mobile Number:</label>
                  </div>
                  <div class="col-75">
                    <input type="tel" id="telNo" name="mobilenumber" value="<?php if (isset($_POST['submit'])) { echo $mobilenumber; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="mail">Email:</label>
                  </div>
                  <div class="col-75">
                    <input type="email" id="mail" name="email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="sa">Street Address:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="sa" name="address" value="<?php if (isset($_POST['submit'])) { echo $address; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="city">City</label>
                  </div>
                  <div class="col-75">
                    <select id="city" name="city">
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
                    <input type="password" id="pw" name="password" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="cpw">Confirm Password:</label>
                  </div>
                  <div class="col-75">
                    <input type="password" id="cpw" name="confirmpassword" required>
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