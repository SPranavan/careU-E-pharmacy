<?php require APPROOT . '/views/inc/customer_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/edit_information.css">

</head>

    <main class="content">
        

<p class="p-edit">Edit Account</p>

<div class="edit-box-information">

<form method="POST">
    
    <label class="label-edit" for="name">Name</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 100px;" for="number">Mobile Number</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="number" name="number"><br>

    <div class="change">
        <a href="change_username"><b>Change Username</b></a><br>
        <a href="change_email">Change Email</a><br>
        <a href="change_password">Change Passwoed</a><br>
        <a href="change_address">Change Address</a>
    </div>
    

</form>

<div class="edit-box-changeusername">

<form method="POST">
    
    <label class="label-edit" for="name">New Username</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 110px;" for="number">Current Password</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="number" name="number"><br>

    <button class="change-button">Save</button>

    

</form>

</div>

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>