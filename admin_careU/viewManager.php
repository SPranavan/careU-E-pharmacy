<?php
include "config.php";

 
// SQL query to select data from database
$sql = " SELECT * FROM manager";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Manager</title>
    <link rel="stylesheet" type="text/css" href="css/viewUsers.css?<?php echo time(); ?>">
    
</head>
<body>
    <header>
        <div class="topNav">
            <img class="logo" src="img/Logo_White.png" alt="logo">
            <h3 class="logoName">Pharmacy</h3>

            <div class="topNav-right">
            <a href="logout.php"><button type="submit" name="submit" class="button1" style="vertical-align:middle"><spa><span>Logout</span></button></a>
            </div>
        </div>
        <br>
        <div class="bottomNav">
            <div class="bottomNav-right">

                <img class="ViewImg" src="img/View.png" alt="view">
                <a href=""><h5 class="view"></h5></a>
                
                <div class="dropdown1">
                <button class="dropbtn1">View</button>
                <div class="dropdown-content1">
                    <a href="viewManager.php">Manager</a>
                    <a href="#">Pharmacist</a>
                    <a href="#">Store Keeper</a>
                    <a href="#">Delivery Person</a>
                    <a href="#">Customer</a>
                </div>
                </div>
                

                <img class="AddImg" src="img/Add.png" alt="add">
                <a href=""><h5 class="add"></h5></a>
                <div class="dropdown2">
                <button class="dropbtn2">Add</button>
                <div class="dropdown-content2">
                    <a href="addManager.php">Manager</a>
                    <a href="#">Pharmacist</a>
                    <a href="#">Store Keeper</a>
                    <a href="#">Delivery Person</a>
                    
                </div>
                </div>
                    
                

                <img class="DeleteImg" src="img/Delete.png" alt="delete">
                <a href=""><h5 class="delete"></h5></a>
                
                <div class="dropdown3">
                <button class="dropbtn3">Delete</button>
                <div class="dropdown-content3">
                    <a href="#">Manager</a>
                    <a href="#">Pharmacist</a>
                    <a href="#">Store Keeper</a>
                    <a href="#">Delivery Person</a>
                    <a href="#">Customer</a>
  
                </div>
                </div>
                
            </div>
        </div>
    </header>

    <section class="sec2">
    <div class="box2">
        <a href="viewManager.php"><span class="actor1">Manager</span></a><br><br>
        <span class="actor">Pharmacist</span><br><br>
        <span class="actor">Store Keeper</span><br><br>
        <span class="actor">Delivery Person</span><br><br>
        <span class="actor">Customer</span>
    </div>

    
        <div class="body-right">
          <h3 class="topic1">Details | Manager</h3>
            <div class="container2">
            <section>
                
                <table>
                    <tr>
                        <th style="width:13%">Manager ID</th>
                        <th style="width:30%">Name</th>
                        <th style="width:15%">Contact Number</th>
                        <th style="width:30%">Email</th>
                        <th style="width:25%">&nbsp</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr class="dataset1">
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['Employee_ID'];?></td>
                        <td><?php echo $rows['firstName']." ".$rows['lastName'];?></td>
                        <td><?php echo $rows['mobileNumber'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td class="vm"><a href=""><button class="viewMore"><img src=img/eye.png alt="view more" style="width:30px;height:20px;"></button></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </section>
                
            </div>
        </div>

    </section>

    <footer>
        <div class="left">
            <a href="#" class="about"><span>ABOUT US &nbsp</span></a>
            <a href="#" class="terms"><span>| &nbsp&nbsp TERMS AND CONDITIONS</span></a>
            <br>
            <div class="left-bottom">
                <img class="copyright" src="img/copyright.png" alt="copyright">
                <p class="all">&nbsp 2022 All Rights Reserved</p>
            </div>

        </div>

        <div class="right">
            <p class="contact">Contact Us</p>
            <br>
            <div class="right-bottom1">
                <img class="call" src="img/call.png" alt="call">
                <p class="num">&nbsp 021 2230626</p>
            </div>
            <br>
            <div class="right-bottom2">
                <a href="#"><img class="wa" src="img/whatsapp.png" alt="whatsApp"></a>
                <a href="#"><img class="fb" src="img/facebook.png" alt="FB"></a>
                <a href="#"><img class="insta" src="img/instagram.png" alt="IG"></a>
            </div>

        </div>
    </footer>
    
</body>
</html>

