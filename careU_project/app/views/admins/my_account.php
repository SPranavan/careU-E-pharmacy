<?php require APPROOT . '/views/admins/admin_header2.php'; ?>


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

    <div class="details">
        <h1>Account Details</h1>
        <div class="data">
            <label for="">User ID: </label><br>
            <input type="text" value="<?php echo $_SESSION['user_ID']; ?>" readonly >
        </div>
        <div class="data">
            <label for="">Name: </label><br>
            <input type="text" value="<?php echo $_SESSION['user_fName']." ".$_SESSION['user_lName']; ?>" readonly >
        </div>
        <div class="data">
            <label for="">Birthday: </label><br>
            <input type="text" value="<?php echo $_SESSION['user_bDay']; ?>" readonly >
        </div>
        <div class="data">
            <label for="">Email: </label><br>
            <input type="text" value="<?php echo $_SESSION['user_email']; ?>" readonly >
        </div>
        <div class="data">
            <label for="">Mobile Number: </label><br>
            <input type="text" value="<?php echo $_SESSION['user_mobile']; ?>" readonly >
        </div>
        <div class="data">
            <label for="">Role: </label><br>
            <input type="text" value="<?php echo $_SESSION['user_role']; ?>" readonly >
        </div>
        <div class="data">
            <label for="">Registered Date: </label><br>
            <input type="text" value="<?php echo $_SESSION['registered_date']; ?>" readonly >
        </div>
        <div class="data">
            <label for="">Active Status: </label><br>
            <input type="text" value="<?php echo $_SESSION['user_status']; ?>" readonly >
        </div>

    </div>
    
</main>




</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>