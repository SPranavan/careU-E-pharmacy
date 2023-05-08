<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/deliveryPersons/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/deliveryPersons/deliveryperson.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/deliveryPersons/orderstyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/footer.css">
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
                                <a href="<?php echo URLROOT; ?>/users/my_account"><h4 class="register-a">MY ACCOUNT</h4></a>
                                <a href="<?php echo URLROOT; ?>/users/logout"><h4 class="myacc-a"> |&nbsp LOGOUT</h4></a>
                            </div>
    
                            
                </div>
    
    
                <div class="topNav">
                    <img class="logo" src="<?php echo URLROOT;?>/public/img/header/Logo_White.png" alt="logo">
                    <h3 class="logoName">Pharmacy</h3>
    
                    
    
                    
    
                        <div class="topNav-right">
                            <a href="<?php echo URLROOT;?>/deliveryPerson/deliveryPerson_dashboard"><button type="submit" name="submit" class="button1" style="vertical-align:middle"><span><span>Delivery Person</span></button></a>
                        </div>
    
                    </div>
    
                    
                </div>
                <br>

                <div class="bottomNav">
    
                    
                    
    
                    <div class="bottomNav-left">
    
                        <img class="Img1" src="<?php echo URLROOT;?>/public/img/deliveryPersons/pending.png" alt="View">
                        <a href=""><h5 class="item1"></h5></a>
                        
                        <div class="dropdown1">
                        <a href="<?php echo URLROOT; ?>/deliveryPersons/pending_orders"><button class="dropbtn1">Pending</button></a>
                        
                        </div>
                        
    
                        <img class="Img2" src="<?php echo URLROOT;?>/public/img/deliveryPersons/in_progress.png" alt="Add">
                        <a href=""><h5 class="item2"></h5></a>
                        <div class="dropdown2">
                        <a href="<?php echo URLROOT; ?>/deliveryPersons/inprogress_orders"><button class="dropbtn2">In Progress</button></a>
                        
                        </div>
                            
                        
    
                        <img class="Img3" src="<?php echo URLROOT;?>/public/img/deliveryPersons/Delivered.png" alt="Delete">
                        <a href=""><h5 class="item3"></h5></a>
                        
                        <div class="dropdown3">
                        <a href="<?php echo URLROOT; ?>/deliveryPersons/delivered_orders"><button class="dropbtn3">Delivered</button></a>
                       
                        </div>
    
                        
                        
                    </div>
    
                </div>

</header>
                
            