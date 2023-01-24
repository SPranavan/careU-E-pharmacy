<?php require APPROOT . '/views/inc/main_header.php'; ?>

   

    <div class="body-left">
        <form action="<?php echo URLROOT; ?>/users/login" method="POST">        

            <div class="container-1">
                <h3 class="para-1">Already a customer ?</h3>
                <p class="para-2">If you have an account with us, log in using your email address.</p>
                <label for="userEmail">Email / Phone Number<span style="color:red;">*</span></label><br>
                <input type="email"  name="userEmail" value="<?php echo $data['email'] ?>">
                <!-- email error msg-->
                <span style="color: red;"><?php echo $data['email_err'];?></span>
                <br>
                
                <label for="password">Password<span style="color:red;">*</span></label><br>
                <input type="password" name="userPassword" value="<?php echo $data['password'] ?>">

                <!-- password error msg-->
                <span style="color: red;"><?php echo $data['password_err']; ?></span>
                
                <button type="submit" name="submit" class="button-2" style="vertical-align:middle"><span>Sign In</span></button>
                <br>
                <!-- <php echo $msg; ?> -->
                <br>
                <a href="#" class="fpw"><span>Forget your password?</span></a>
                
            </div>
        </form>
    </div>

    <div class="body-right">
             

            <div class="container-2">
                <h3 class="para-3">First time to join ?</h3>
                <p class="para-4">Fill the following information to upload prescription.</p>
                <form action="" method="post">
                    
                    <div class="row">
                      <div class="col-25">
                        <label for="fname">First Name:</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="fname" name="firstname" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="lname">Last Name:</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="lname" name="lastname"required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="telNo">Mobile Number:</label>
                      </div>
                      <div class="col-75">
                        <input type="tel" id="telNo" name="mobilenumber" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="mail">Email:</label>
                      </div>
                      <div class="col-75">
                        <input type="email" id="mail" name="email" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="sa">Street Address:</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="sa" name="address" required>
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

                     <button type="submit" name="create" class="button-3" style="vertical-align:middle"><span>Create</span></button>
                     <a href="#" class="cancel-btn"><span>Cancel</span></a>

                     
                    </div>
                    </form>
                
            </div>
        
    </div>

    <?php require APPROOT . '/views/inc/footer.php'; ?>

    