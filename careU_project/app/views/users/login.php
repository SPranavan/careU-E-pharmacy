<?php require APPROOT . '/views/inc/main_header.php'; ?>

    <main class="content">
        <div class="body-left">

                    
        </div>

        <div class="body-right">

        <form action="<?php echo URLROOT; ?>/users/login" method="POST">        

        <div class="container-1">
            <h3 class="para-1">Already a customer ?</h3>
                    <p class="para-2">If you have an account with us, log in using your email address.</p>
                    <label for="userEmail">Email / Phone Number<span style="color:red;">*</span></label><br>
                    <input type="email"  name="email" value="<?php echo $data['email']; ?>">
                    <!-- email error msg-->
                    <span style="color: red;"><?php echo $data['email_err'];?></span>
                    <br>
                    <br>
                    
                    <label for="password">Password<span style="color:red;">*</span></label><br>
                    <input type="password" name="password" value="<?php echo $data['password']; ?>">
                    <!-- password error msg-->
                    <span style="color: red;"><?php echo $data['password_err']; ?></span>
                    <br>
                    <br>
                    
                    <button type="submit" name="login" class="button-2" style="vertical-align:middle"><span>Sign In</span></button>
                    <br>
                    <!-- <php echo $msg; ?> -->
                    <br>
                    <a href="#" class="fpw"><span>Forget your password?</span></a>
            
        </div>
        </form>
        </div>

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>