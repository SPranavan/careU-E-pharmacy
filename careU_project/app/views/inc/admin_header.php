<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admins/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admins/admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admins/add.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admins/view.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
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
                                <a href="<?php echo URLROOT; ?>/users/logout"><h4 class="myacc-a"> |&nbsp LOGOUT</h4></a>
                            </div>
    
                            
                </div>
    
    
                <div class="topNav">
                    <img class="logo" src="<?php echo URLROOT;?>/public/img/header/Logo_White.png" alt="logo">
                    <h3 class="logoName">Pharmacy</h3>
    
                    
    
                    
    
                        <div class="topNav-right">
                            <a href=""><button type="submit" name="submit" class="button1" style="vertical-align:middle"><span><span>Admin</span></button></a>
                        </div>
    
                    </div>
    
                    
                </div>
                <br>
                <div class="bottomNav">
    
                    
                    
    
                    <div class="bottomNav-left">
    
                        <img class="Img1" src="<?php echo URLROOT;?>/public/img/admins/View.png" alt="View">
                        <a href=""><h5 class="item1"></h5></a>
                        
                        <div class="dropdown1">
                        <button class="dropbtn1">View</button>
                        <div class="dropdown-content1">
                            <a href="<?php echo URLROOT; ?>/admins/view_manager">Manager</a>
                            <a href="<?php echo URLROOT; ?>/admins/view_pharmacist">Pharmacist</a>
                            <a href="<?php echo URLROOT; ?>/admins/view_storekeeper">Store Keeper</a>
                            <a href="<?php echo URLROOT; ?>/admins/view_deliveryperson">Delivery Person</a>
                            <a href="<?php echo URLROOT; ?>/admins/view_customer">Customer</a>
                        </div>
                        </div>
                        
    
                        <img class="Img2" src="<?php echo URLROOT;?>/public/img/admins/Add.png" alt="Add">
                        <a href=""><h5 class="item2"></h5></a>
                        <div class="dropdown2">
                        <button class="dropbtn2">Add</button>
                        <div class="dropdown-content2">
                            <a href="<?php echo URLROOT; ?>/admins/add_manager">Manager</a>
                            <a href="<?php echo URLROOT; ?>/admins/add_pharmacist">Pharmacist</a>
                            <a href="<?php echo URLROOT; ?>/admins/add_storekeeper">Store Keeper</a>
                            <a href="<?php echo URLROOT; ?>/admins/add_deliveryperson">Delivery Person</a>
                    
                            
                        </div>
                        </div>
                            
                        
    
                        <img class="Img3" src="<?php echo URLROOT;?>/public/img/admins/Delete.png" alt="Delete">
                        <a href=""><h5 class="item3"></h5></a>
                        
                        <div class="dropdown3">
                        <button class="dropbtn3">Delete</button>
                        <div class="dropdown-content3">
                            <a href="<?php echo URLROOT; ?>/admins/delete_manager">Manager</a>
                            <a href="<?php echo URLROOT; ?>/admins/delete_pharmacist">Pharmacist</a>
                            <a href="<?php echo URLROOT; ?>/admins/delete_storekeeper">Store Keeper</a>
                            <a href="<?php echo URLROOT; ?>/admins/delete_deliveryperson">Delivery Person</a>
                            <a href="<?php echo URLROOT; ?>/admins/delete_customer">Customer</a>
                            
                        </div>
                        </div>
    
                        
                        
                    </div>
    
                </div>
            </header>