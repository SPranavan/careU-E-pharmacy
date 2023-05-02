<?php require APPROOT . '/views/inc/customer_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/prescription_upload.css">
</head>

    <main class="content">

    
   <div class="form-div form-div-outer">
    
    <div class="form-div">

        <div class="img-prescription">
            <img class="img" src="<?php echo URLROOT;?>/public/img/customer/prescription.png" alt="prescription">
            <h2>Upload Prescription</h2>
        </div>

        <form class="form" method="post" enctype="multipart/form-data">

        <label for="name" class="label-upload">Your Name <span class="required">*</span></label><br>
        <input type="text" class="prescription-input" id="name" name="name"><br>

        <label for="age" class="label-upload">Your Age <span class="required">*</span></label><br>
        <input type="text" class="prescription-input" id="age" name="age"><br>

        <label for="email" class="label-upload">Your Email <span class="required">*</span></label><br>
        <input type="text" class="prescription-input" id="email" name="email"><br>

        <label for="number" class="label-upload">Your Contact No <span class="required">*</span></label><br>
        <input type="text" class="prescription-input" id="number" name="number"><br>

        <label for="address" class="label-upload">Your Address<span class="required">*</span></label><br>
        <input type="text" class="prescription-input" id="address" name="address"><br>

        <label for="prescription" class="label-upload">Doctor's Prescription<span class="required">*</span> (Maxium upload size 5Mb)</label><br>
        <div class="div-prescription-upload">
            <input type="File" class="button-prescription-upload" name="file" accept=".jpg, .jpeg, .png">
        </div><br>

        <label for="number" class="label-upload">Your Message</label><br>
        <textarea class="prescription-textarea" rows="10" cols="70" type="text" id="message" name="message"></textarea><br>

        <input type="submit" name="submit" value="Send" class="button-submit">

        <div></div>

        </form>

        </div> 

    </div>
        
    </main>



        <?php
        $localhost = "localhost"; //localhost
        $dbusername = "root"; //username of phpmyadmin
        $dbpassword = ""; //password of phpmyadmin
        $dbname = "careu"; //database name

        // connection string
        $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

        if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"]))     {
        //retrieve file title
            $name = $_POST["name"];
            $age = $_POST["age"];
            $email = $_POST["email"];
            $number = $_POST["number"];
            $address = $_POST["address"];
            $message = $_POST["message"];

        //file name with a random number so that similar dont get replaced
         $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

        //temporary file name to store file
        $tname = $_FILES["file"]["tmp_name"];

        //upload directory path
        $uploads_dir = 'C:\xampp\htdocs\careU_project\public\img\prescription';

        // get the file type
        $file_type = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));

        // check if the file is an image
        if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png") {
        echo "<script>
        alert('Error: Only JPG, JPEG, and PNG files are allowed');
        </script>";
        exit;
        }

        //TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);

        //sql query to insert into database
        $sql = "INSERT into customer_prescription(name,age,email,number,address,message,prescription) VALUES('$name','$age','$email','$number','$address','$message','$pname')";

            if(mysqli_query($conn,$sql)){

            echo "<script>
            alert('Successfully Added');
          </script>";
            }
            else{
                echo "Error";
            }
        }
        ?>


<?php require APPROOT . '/views/inc/footer.php'; ?>
