<?php require APPROOT . '/views/inc/admin_header2.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/account.css">

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
<body>



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
                <a href="/careU_project/pharmacists/change_pw">
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
    <h1>Account Details</h1>
    <div class="data">
        <label for="">Name</label><br>
        <input type="text" value="<?php echo $data[0]->fName." ".$data[0]->lName; ?>" readonly>
    </div>
    <div class="data">
        <label for="">Email address</label><br>
        <input type="text" value="<?php echo $data[0]->email; ?>" readonly >
    </div>
    <div class="data">
        <label for="">Mobile number</label><br>
        <input type="text" value="<?php echo $data[0]->mobile; ?>" readonly >
    </div>
    <div class="data">
        <label for="">Role</label><br>
        <input type="text" value="<?php echo $data[0]->user_role; ?>" readonly>
    </div>

</div>


</body>

<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>