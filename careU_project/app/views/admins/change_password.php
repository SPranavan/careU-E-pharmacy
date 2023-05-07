<?php require APPROOT . '/views/inc/admin_header2.php'; ?>


<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admins/account.css">

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

<main class="content">
    <div id="blur" class="container">
    <?php require APPROOT . '/views/inc/img_upload_popup.php'; ?>
<body>




    <div class="account">
                    <div class="dropdown_area" style="background-image: url(
                            <?php 
                                if($_SESSION['profile'] != null){
                                    echo URLROOT. "/public/img/user-pics/". $_SESSION['profile'];
                                }else{
                                    echo URLROOT. "/public/img/user-pics/user_public.jpg";
                                }
                            ?>); width: 160px; height: 160px;">
                    </div>
    </div>






    <div class="dashboard-container">
        <nav>
            <ul>
                <li>
                    <a href="/careU_project/admins/admin_dashboard">
                        <button>
                        <img src="<?php echo URLROOT; ?>/public/img/admins/home.png" alt="">
                        <span><h3>Dashboard</h3></span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="/careU_project/admins/my_account">
                        <button>
                            <span><img src="<?php echo URLROOT; ?>/public/img/admins/menu.png" alt=""></span>
                            <span><h3>Account Details</h3></span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="/careU_project/admins/change_password">
                        <button>
                            <span><img src="<?php echo URLROOT; ?>/public/img/admins/rotation-lock.png" alt=""></span>
                            <span><h3>Change Password</h3></span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="/careU_project/admins/change_profileImg">
                        <button class="last">
                            <span><img src="<?php echo URLROOT; ?>/public/img/admins/user1.png" alt=""></span>
                            <span><h3>Change Profile Picture</h3></span>
                        </button>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="details1">
    <h1>Change Password</h1>
    <form action="<?php echo URLROOT; ?>/admins/change_password_action" method="POST">
    <div class="form-group">
        <label for="cur_pw">Current Password</label>
        <input id="cur_pw" name="cur_pw" type="password" value="" required>
        <span style="color: red;" class="error1"><?php echo isset($data['cur_pw_err']) ? $data['cur_pw_err'] : ''; ?></span>
        <br>
    </div>
    
    <div class="form-group">
    <br>
        <label for="new_pw">New Password</label>
        <input id="new_pw" name="new_pw" type="password" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="con_pw">Confirm New Password</label>
        <input id="con_pw" name="con_pw" type="password" value="" required>
        <span style="color: red;" class="error2"><?php echo isset($data['con_pw_err']) ? $data['con_pw_err'] : ''; ?></span>
    </div>
    <br>
    <button type="submit">Update</button>
</form>




</div>

</main>




</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>