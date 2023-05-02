<?php require APPROOT . '/views/inc/customer_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/feedback.css">
</head>

    <main class="content">
        
        <div class="form-div-outer form-div">
            <h1>Feedback Form</h1>
            <form action="submit.php" method="POST">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Enter your feedback" required></textarea>

                <input type="submit" value="Submit">
            </form>

        </div>
    
    </main>


            <?php
        // Connect to the database
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'careu';
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check for errors
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // Insert the new item
        $message = $_POST['message'];
        $sql = "INSERT INTO feedback (description) VALUES ('$message')";
        $result = mysqli_query($conn, $sql);

        // Check for errors
        if (!$result) {
            echo "Error: " . mysqli_error($conn);
            exit();
        }

        // Close the database connection
        mysqli_close($conn);

        // Redirect back to the index page
        header('Location: order.php');
        exit();
        ?>



<?php require APPROOT . '/views/inc/footer.php'; ?>