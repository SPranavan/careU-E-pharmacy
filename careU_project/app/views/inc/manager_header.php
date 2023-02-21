<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/manager_footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/login.css">

    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/managers/initiated_orders.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/managers/cancelled_orders.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/managers/pass_order.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/managers/refund_order.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/managers/feedback.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/managers/feedback_details.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/managers/report.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admins/admin.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <header>

        <div class="topNav-add">
                
                <div class="topNav-right">
                            <div class="login-link">
                                <img class="login-icon" src="<?php echo URLROOT;?>/public/img/header/Login.png" alt="icon">
                                <a href="<?php echo URLROOT; ?>#"><h4 class="register-a">MY ACCOUNT</h4></a>
                                <a href="<?php echo URLROOT; ?>/users/logout"><h4 class="myacc-a"> |&nbsp LOGOUT</h4></a>
                            </div>

                    
        </div>


        <div class="topNav">
            <img class="logo" src="<?php echo URLROOT;?>/public/img/header/Logo_White.png" alt="logo">
            <h3 class="logoName">Pharmacy</h3>

            <div class="search-container">
                <form action="/action_page.php">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            

                <div class="topNav-right">
                    <a href=""><button type="submit" name="submit" class="button1" style="vertical-align:middle"><spa><span>Manager</span></button></a>
                </div>

            </div>

            
        </div>
        <br>
        <div class="bottomNav">

            
            

            <div class="bottomNav-left">

                <img class="Img1" src="<?php echo URLROOT;?>/public/img/header/report.png" alt="Report">
                <a href=""><h5 class="item1"></h5></a>
                
                <div class="dropdown1">
                <button class="dropbtn1"><a href="/careU_project/Managers/Report" style="text-decoration: none;color: inherit;">Report</a></button>
                <!-- <div class="dropdown-content1">
                    
                </div> -->
                </div>
                

                <img class="Img2" src="<?php echo URLROOT;?>/public/img/header/feedback.png" alt="Feedback">
                <a href=""><h5 class="item2"></h5></a>
                <div class="dropdown2">
                <button class="dropbtn2"><a href="/careU_project/Managers/Feedback" style="text-decoration: none;color: inherit;">Feedback</a></button>
                <!-- <div class="dropdown-content2">
                    
                </div> -->
                </div>
                    
                

                <img class="Img3" src="<?php echo URLROOT;?>/public/img/header/orders.png" alt="Orders">
                <a href=""><h5 class="item3"></h5></a>
                
                <div class="dropdown3">
                <button class="dropbtn3">Orders</button>
                <div class="dropdown-content3">
                    <a href="/careU_project/Managers/Initiated_orders">Initiated Orders</a>
                    <a href="/careU_project/Managers/Cancelled_orders">Cancelled Orders</a>
                </div>
                </div>

                
                
            </div>

        </div>
    </header>    
