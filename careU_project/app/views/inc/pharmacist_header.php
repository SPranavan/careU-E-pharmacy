<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

    <section>
        <div class="wrapper">
            <header>

                <div class="topNav-add">
                        
    
                        <div class="topNav-right">
                            <div class="login-link">
                                <img class="login-icon" src="<?php echo URLROOT;?>/public/img/header/Login.png" alt="icon">
                                <a href="<?php echo URLROOT; ?>/users/login"><h4 class="login-a">LOGIN / </h4></a><a href="<?php echo URLROOT; ?>/users/register"><h4 class="register-a">REGISTER</h4></a>
                                <a href="#"><h4 class="myacc-a"> |&nbsp MY ACCOUNT</h4></a>
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
                            <a href=""><button type="submit" name="submit" class="button1" style="vertical-align:middle"><spa><span>Upload Prescription</span></button></a>
                        </div>
    
                    </div>
    
                    
                </div>
                <br>
                <div class="bottomNav">
    
                    
                    
    
                    <div class="bottomNav-left">
    
                        <img class="Img1" src="<?php echo URLROOT;?>/public/img/header/Medicine.png" alt="Medicine">
                        <a href=""><h5 class="item1"></h5></a>
                        
                        <div class="dropdown1">
                        <button class="dropbtn1">Products</button>
                        <div class="dropdown-content1">
                            <a href="/careU_project/pharmacists/product_medicine_heart">Medicine</a>
                            <a href="#">Personal Care</a>
                            <a href="#">Medical Devices</a>
                            <!-- <a href="#">Gastro Intestinal System</a>
                            <a href="#">Muscle and Joint</a> -->
                        </div>
                        </div>
                        
    
                        <img class="Img2" src="<?php echo URLROOT;?>/public/img/header/prescription.png" alt="PersonalCare">
                        <a href=""><h5 class="item2"></h5></a>
                        <div class="dropdown2">
                        <button class="dropbtn2">Prescription</button>
                        <div class="dropdown-content2">
                            <a href="/careU_project/pharmacists/available_prescription">Available Prescription</a>
                            <a href="/careU_project/pharmacists/accepted_prescription">Accepted Prescription</a>
                            <a href="/careU_project/pharmacists/completed_prescription">Completed Prescription</a>
                            <a href="/careU_project/pharmacists/create_new_prescription">Create new Prescription</a>
                            <a href="/careU_project/pharmacists/created_prescription">Created Prescription</a>
                            
                        </div>
                        </div>
                            
                        
    
                        <img class="Img3" src="<?php echo URLROOT;?>/public/img/header/orders.png" alt="MedicalDevices">
                        <a href=""><h5 class="item3"></h5></a>
                        
                        <div class="dropdown3">
                        <button class="dropbtn3">Orders</button>
                        <div class="dropdown-content3">
                            <a href="/careU_project/pharmacists/new_order">New Orders</a>
                            <a href="/careU_project/pharmacists/accepted_orders">Accepted Orders</a>
                            <a href="/careU_project/pharmacists/completed_orders">Completed Orders</a>
                            
                        </div>
                        </div>
    
                        
                        
                    </div>
    
                </div>
            </header>