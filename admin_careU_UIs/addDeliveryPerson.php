<?php


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    /*session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: adminDashboard.php");
        die();
    }*/

    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    include 'config.php';
    $msg = "";

    

    $query = "select * from manager order by Employee_ID desc limit 1";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $lastid = $row['Employee_ID'];
    if($lastid == " ")
    {
        $Employee_ID = "M00001";
    }
    else
    {
        $Employee_ID = substr($lastid,5);
        $Employee_ID = intval($Employee_ID);
        $Employee_ID = "M0000" . ($Employee_ID + 1);
    }
    


    if (isset($_POST['submit'])) {
        $Employee_ID = mysqli_real_escape_string($conn, $_POST['Employee_ID']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $mobilenumber = mysqli_real_escape_string($conn, $_POST['mobilenumber']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));   
        $confirmpassword = mysqli_real_escape_string($conn, md5($_POST['confirmpassword'])); 
        $code = mysqli_real_escape_string($conn, md5(rand()));  
        
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM manager WHERE email='{$email}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
        } else {
            if ($password === $confirmpassword) {
                $sql = "INSERT INTO manager (Employee_ID, firstName, lastName, mobileNumber, email, streetAddress, city, password, code) 
                VALUES ('{$Employee_ID}', '{$firstname}', '{$lastname}', '{$mobilenumber}', '{$email}', '{$address}', '{$city}', '{$password}', '{$code}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<div style='display: none;'>";
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'careu.epharmacy@gmail.com';                     //SMTP username
                        $mail->Password   = 'zjynnjtkesuiwuco';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('careu.epharmacy@gmail.com');
                        $mail->addAddress($email);

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'no reply';
                        $mail->Body    = 'Here is the verification link <b><a href="http://localhost/admin_careU/?verification='.$code.'">http://localhost/admin_careU/?verification='.$code.'</a></b>';

                        $mail->send();
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
            }
        }

    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Manager</title>
    <link rel="stylesheet" type="text/css" href="css/addUsers.css">
    
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
                    <a href="addPharmacist.php">Pharmacist</a>
                    <a href="addStoreKeeper.php">Store Keeper</a>
                    <a href="addDeliveryPerson.php">Delivery Person</a>
                    
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
    <div class="box1">
        <a href="addManager.php"><span class="actor">Manager</span></a><br><br>
        <a href="addPharmacist.php"><span class="actor">Pharmacist</span></a><br><br>
        <a href="addStoreKeeper.php"><span class="actor">Store Keeper</span></a><br><br>
        <a href="addDeliveryPerson.php"><span class="actor1">Delivery Person</span></a>
    </div>

    
        <div class="body-right">
          <h3 class="topic1">Add | Delivery Person</h3>
            <div class="container1">
                <form action="" method="post">
                <div class="row">
                  <div class="col-25">
                    <label for="empID">Employee ID:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="empID" name="Employee_ID" value="<?php echo $Employee_ID; ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="fname">First Name:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="firstname" value="<?php if (isset($_POST['submit'])) { echo $firstname; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="lname">Last Name:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="lname" name="lastname" value="<?php if (isset($_POST['submit'])) { echo $lastname; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="telNo">Mobile Number:</label>
                  </div>
                  <div class="col-75">
                    <input type="tel" id="telNo" name="mobilenumber" value="<?php if (isset($_POST['submit'])) { echo $mobilenumber; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="mail">Email:</label>
                  </div>
                  <div class="col-75">
                    <input type="email" id="mail" name="email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="sa">Street Address:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="sa" name="address" value="<?php if (isset($_POST['submit'])) { echo $address; } ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="city">City</label>
                  </div>
                  <div class="col-75">
                    <select id="city" name="city">
                      <option value="Kandy">Kandy</option>
                      <option value="Colombo">Colombo</option>
                      <option value="Jaffna">Jaffna</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="pw">Password:</label>
                  </div>
                  <div class="col-75">
                    <input type="password" id="pw" name="password" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="cpw">Confirm Password:</label>
                  </div>
                  <div class="col-75">
                    <input type="password" id="cpw" name="confirmpassword" required>
                  </div>
                </div>
                
                <br>
                <?php echo $msg; ?>
                <br>
                <div class="row">
                  <input type="submit" value="Add" name="submit">
                </div>
                </form>
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