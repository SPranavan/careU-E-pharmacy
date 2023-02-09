<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customers/header.css">
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
                                <a href="<?php echo URLROOT; ?>#"><h4 class="register-a">MY ACCOUNT</h4></a>
                                <a href="#"><h4 class="myacc-a"> |&nbsp LOGOUT</h4></a>
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
                            <a href=""><button type="submit" name="submit" class="button1" style="vertical-align:middle"><span><span>Upload Prescription</span></button></a>
                        </div>
    
                    </div>
    
                    
                </div>
                <br>
                <div class="bottomNav">
    
                    
                    
    
                    <div class="bottomNav-left">
    
                        <img class="Img1" src="<?php echo URLROOT;?>/public/img/header/Medicine.png" alt="Medicine">
                        <a href=""><h5 class="item1"></h5></a>
                        
                        <div class="dropdown1">
                        <button class="dropbtn1">Medicine</button>
                        <div class="dropdown-content1">
                            <a href="#">Heart</a>
                            <a href="#">Diabetes</a>
                            <a href="#">Infection</a>
                            <a href="#">Gastro Intestinal System</a>
                            <a href="#">Muscle and Joint</a>
                        </div>
                        </div>
                        
    
                        <img class="Img2" src="<?php echo URLROOT;?>/public/img/header/PersonalCare.png" alt="PersonalCare">
                        <a href=""><h5 class="item2"></h5></a>
                        <div class="dropdown2">
                        <button class="dropbtn2">Personal Care</button>
                        <div class="dropdown-content2">
                            <a href="#">Nourishments</a>
                            <a href="#">Accessories</a>
                            <a href="#">Skin Care</a>
                            <a href="#">Women Personal Care</a>
                            <a href="#">Oral Care</a>
                            
                        </div>
                        </div>
                            
                        
    
                        <img class="Img3" src="<?php echo URLROOT;?>/public/img/header/MedicalDevices.png" alt="MedicalDevices">
                        <a href=""><h5 class="item3"></h5></a>
                        
                        <div class="dropdown3">
                        <button class="dropbtn3">Medical Devices</button>
                        <div class="dropdown-content3">
                            <a href="#">First Aid</a>
                            <a href="#">Health Devices</a>
                            <a href="#">Supports</a>
                            
                        </div>
                        </div>
    
                        
                        
                    </div>
    
                </div>
            </header>