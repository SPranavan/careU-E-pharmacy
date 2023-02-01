<?php
session_start();
include "db_connect.php"; ?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Elsie&family=Raleway:wght@800&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

    <div class="header">
        <img class="img1" src="medicine 1.png" alt="Italian Trulli">
        <p class="para_1">Pharmacy</p>
        <button class="button_1" type="button">Sign in</button>
    </div>
    <div class="second_nav">
        <img class="img2" src="pill.png" alt="pill">
        <p class="para_2">Medicine</p>
        <img class="img3" src="personal-hygiene.png" alt="personal-hygiene">
        <p class="para_3">Personal Care</p>
        <img class="img4" src="online-assistance.png" alt="medical divices">
        <p class="para_4">Medical divices</p>
    </div>

    <div class="textbox">
        <p class="para_12">Already a customer?</p>
        <p class="para_13">If you have an account with us, log in using your email address.</p>

        <div class="form_1">
            <form action="signin_function.php" method="POST">
                <div class="email">
                    <label for="Email/ Phone number">Email/ Phone number : </label> <br>
                    <input type="text" id="Email" name="email" placeholder="Your Email.."> <br>
                </div>
                <div class="password">
                    <label for="Password">Password : </label> <br>
                    <input type="password" id="password" name="password" placeholder="Password..">
                </div>
                <div class="button_2">
                    <button type="submit">Sign in &#62</button>

                </div>


            </form>

        </div>

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
    <div>

    </div>


</body>

</html>