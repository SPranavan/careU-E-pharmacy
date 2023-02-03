<?php require APPROOT . '/views/inc/main_header.php'; ?>

   
<div class="body-left">

<img class="login-Img" src="<?php echo URLROOT;?>/public/img/users/loginImg.jpg" alt="login">
    
</div>

     
    <div class="body-right">
             

    <div class="container-2">

                <h3 class="para-3">First time to join ?</h3>
                <p class="para-4">Fill the following information to upload prescription.</p>
                <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                    
                    <div class="row">
                      <div class="col-25">
                        <label for="fname">First Name:</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="fname" name="fName" value="<?php echo $data['fName']; ?>">
                        <span style="color: red;"><?php echo $data['fName_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="lname">Last Name:</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="lname" name="lName" value="<?php echo $data['lName']; ?>">
                        <span style="color: red;"><?php echo $data['lName_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="telNo">Mobile Number:</label>
                      </div>
                      <div class="col-75">
                        <input type="tel" id="telNo" name="mobile" value="<?php echo $data['mobile']; ?>">
                        <span style="color: red;"><?php echo $data['mobile_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="mail">Email:</label>
                      </div>
                      <div class="col-75">
                        <input type="email" id="mail" name="email" value="<?php echo $data['email']; ?>">
                        <span style="color: red;"><?php echo $data['email_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="sa">Street Address:</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="sa" name="address" value="<?php echo $data['address']; ?>">
                        <span style="color: red;"><?php echo $data['address_err'];?></span>
                        <br><br>
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
                        <span style="color: red;"><?php echo $data['city_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="pw">Password:</label>
                      </div>
                      <div class="col-75">
                        <input type="password" id="pw" name="password" value="<?php echo $data['password']; ?>">
                        <span style="color: red;"><?php echo $data['password_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="cpw">Confirm Password:</label>
                      </div>
                      <div class="col-75">
                        <input type="password" id="cpw" name="confirm_password" value="<?php echo $data['confirm_password']; ?>">
                        <span style="color: red;"><?php echo $data['confirm_password_err'];?></span>
                        <br>
                      </div>
                    </div>
                    
                    <br>
                    
                    <br>
                    <div class="row">

                     <button type="submit" name="register" class="button-3" style="vertical-align:middle"><span>Create</span></button>
                     <a href="#" class="cancel-btn"><span>Cancel</span></a>

                     
                    </div>
                    </form>
                
            </div>
        
    </div>

    <br>


    <?php require APPROOT . '/views/inc/footer.php'; ?>

    