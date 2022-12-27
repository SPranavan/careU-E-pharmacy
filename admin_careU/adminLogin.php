<?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: adminDashboard.php");
        die();
    }

    include 'config.php';
    $msg = "";

    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM admin_info WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
            
            if ($query) {
                $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
            }
        } else {
            header("Location: adminLogin.php");
        }
    }

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM admin_info WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (empty($row['code'])) {
                $_SESSION['SESSION_EMAIL'] = $email;
                header("Location: adminDashboard.php");
            } else {
                $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Email or password does not match.</div>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Page_Admin</title>
    <link rel="stylesheet" type="text/css" href="css/adminLogin1.css?<?php echo time(); ?>">
    
</head>
<body>
    <header>
        <div class="topNav">
            <img class="logo" src="img/Logo_White.png" alt="logo">
            <h3 class="logoName">Pharmacy</h3>

            <div class="topNav-right">
                <span class="button2">ADMIN</span>
            </div>
        </div>
        <br>
        <div class="bottomNav">
            <div class="bottomNav-right">
                <img class="ViewImg" src="img/View.png" alt="view">
                <h5 class="view">View</h5>
                <img class="AddImg" src="img/Add.png" alt="add">
                <h5 class="add">Add</h5>
                <img class="DeleteImg" src="img/Delete.png" alt="delete">
                <h5 class="delete">Delete</h5>
            </div>
        </div>
    </header>

    <img class="adminLogo" src="img/Admin.png" alt="AdminLogo">

    <div class="body-right">
        <form action="" method="post">

        

            <div class="container">
                <label for="userEmail">Email<span style="color:red;">*</span></label><br>
                <input type="email"  name="email" required>
                <br>
                
                <label for="password">Password<span style="color:red;">*</span></label><br>
                <input type="password" name="password" required>
                
                <button type="submit" name="submit" class="button" style="vertical-align:middle"><span>Sign In</span></button>
                <br>
                <?php echo $msg; ?>
                <br>
                <a href="#" class="fpw"><span>Forget your password?</span></a>
                
            </div>
        </form>
    </div>
    
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