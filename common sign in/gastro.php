<?php
session_start();
include "db_connect.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="gastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Elsie&family=Raleway:wght@800&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    
<?php require_once('./header.php');
    require_once('./navigation.php'); ?>
    <p class="para_12">Medicine</p>
    <div class="side_element">
        
        <div class="side_options">
            <a href="home.php">Heart</a><br>
            <a href="diabetes.php">Diabetes</a><br>
            <a href="infection.php">Infection</a><br>
            <a class="heart" href="gastro.php">Gastro Infectional System</a><br>
            <a href="muscle.php">Muscle and Joint</a>

        </div>
    </div>
    <div class="heart_p">
        <p>Gastro Infectional System</p>
    </div>
    <div class="details">
  
    </div>
    <div class="tables">
        <table class="table_cont">
            <div class="border-1"></div>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price(LKR)</th>
                <th>Quantity Measurement</th>
                <th>Action</th>
            </tr>


            <?php 
                $sql = "SELECT * FROM medicine WHERE medicine_type1='medicine' AND medicine_type2 ='gastro' ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    echo '<tr>
                    <td>'.$row['medicineID'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['quantity'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['quantity_measurement'].'</td>
                    <td>Action</td>
                </tr>';
                };
            ?>
            <div class="border-2"></div>
        </table>
    </div>

    <div class="Foot">
        <p class="para_6">ABOUT US</p>
        <p class="para_7">|</p>
        <p class="para_8">TERMS AND CONDITIONS</p>
        <img class="img6" src="copy.png" alt="copyright">
        <p class="para_9">2022 All Rights Reserved</p>
        <p class="para_10">Contact Us</p>
        <img class="img7" src="call.png" alt="ContactUs">
        <p class="para_11">021 2230626</p>
        <img class="img8" src="dashicons_whatsapp.png" alt="Call">
        <img class="img9" src="Vector.png" alt="fb">
        <img class="img10" src="insta.png" alt="Insta">

    </div>



</body>



</html>