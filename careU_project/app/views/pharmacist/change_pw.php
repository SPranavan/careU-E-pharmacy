<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/change_pw.css">
    <!-- <script>
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->
</head>
<?php require APPROOT . '/views/inc/img_upload_popup.php'; ?>

<div class="account">
    <img class="sli-img" src="<?php echo URLROOT; ?>/public/img/user-pics/<?php echo $_SESSION['profile'] ?>" />
</div>

<div class="dashboard-container">
    <nav>
        <ul>
            <li>
                <a href="/careU_project/pharmacists/dashboard">
                    <button>
                    <img src="<?php echo URLROOT; ?>/public/img/pharmacist/home.png" alt="">
                    <span><h3>Dashboard</h3></span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/careU_project/pharmacists/account">
                    <button>
                        <span><img src="<?php echo URLROOT; ?>/public/img/pharmacist/menu.png" alt=""></span>
                        <span><h3>Account Details</h3></span>
                    </button>
                </a>
            </li>
            <li>
                <a href="">
                    <button>
                        <span><img src="<?php echo URLROOT; ?>/public/img/pharmacist/rotation-lock.png" alt=""></span>
                        <span><h3>Change Password</h3></span>
                    </button>
                </a>
            </li>
            <li>
                
                    <button class="last" onclick="document.getElementById('id02').style.display='block'">
                        <span><img src="<?php echo URLROOT; ?>/public/img/pharmacist/user1.png" alt=""></span>
                        <span><h3>Change Profile Picture</h3></span>
                    </button>
               
            </li>
        </ul>
    </nav>
</div>

<div class="details">
    <h1>Change Password</h1>
    <form action="./update_pw" method="POST">
        <div class="data">
            <label for="">Current Password</label><br>
            <input name="cur_pw" type="password" value="">
            <?php
                if (isset($_SESSION['error1'])) {
                    echo '<span>'.$_SESSION["error1"].'</span>';
                    unset($_SESSION['error1']);
                }
            ?>
        </div>
        <div class="data">
            <label for="">New Password</label><br>
            <input name="new_pw" type="password" value="">
        </div>
        <div class="data">
            <label for="">Confirm New Password</label><br>
            <input name="con_pw" type="password" value="">
            <?php
                if (isset($_SESSION['error2'])) {
                    echo '<span class="error2">'.$_SESSION["error2"].'</span>';
                    unset($_SESSION['error2']);
                }
    
            ?>
            
        </div>
        
        <button type="submit" >Update</button>
    </form>

</div>




<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>