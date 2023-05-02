<?php require APPROOT . '/views/inc/customer_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/edit_information.css">
</head>

<body>
    
</body>

    <main class="content">
        
    <div class="side_element">

<div class="side_options">
            <a href="myaccount">My Information</a><br>
            <a href="prescription_upload">My Prescription</a><br>
            <a href="order_history">My Orders</a><br>
            <a href="feedback">Feedback</a><br>
            <a href="delivery_details">Delivery Status</a><br>
            <a class="heart" href="editinformation" style="width: 180px;">Edit My Information</a>

</div>
</div>

<p class="p-edit">Edit Account</p>

<div class="edit-box-information">

<form method="POST">
    
    <label class="label-edit" for="name">Name</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 100px;" for="number">Mobile Number</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="number" name="number"><br>

    <div class="change">
        <a href="change_username">Change Username</a><br>
        <a href="change_email">Change Email</a><br>
        <a href="change_password">Change Passwoed</a><br>
        <a href="change_address">Change Address</a>
    </div>
    

</form>

</div>

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>