<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admins/account.css">
</head>

<div class="account">
    <img class="sli-img" src="<?php echo URLROOT; ?>/public/img/pharmacist/me.jpg" />
</div>

<div class="dashboard-container">
    <nav>
        <ul>
            <li>
                <a href="">
                    <button>
                    <img src="<?php echo URLROOT; ?>/public/img/pharmacist/home.png" alt="">
                    <span><h3>Dashboard</h3></span>
                    </button>
                </a>
            </li>
            <li>
                <a href="">
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
                <a href="">
                    <button class="last">
                        <span><img src="<?php echo URLROOT; ?>/public/img/pharmacist/user1.png" alt=""></span>
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
        <label for="">Name</label><br>
        <input type="text" value="chandra" readonly>
    </div>
    <div class="data">
        <label for="">Email address</label><br>
        <input type="text" value="chandra" readonly >
    </div>
    <div class="data">
        <label for="">Mobile number</label><br>
        <input type="text" value="chandra" readonly >
    </div>
    <div class="data">
        <label for="">Role</label><br>
        <input type="text" value="chandra" readonly>
    </div>

</div>




<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>