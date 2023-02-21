<?php require APPROOT . '/views/inc/change_header.php'; ?>

    <main class="content">
        
    <div class="side_element">

<div class="side_options">
            <a href="myinformation">My Information</a><br>
            <a href="prescription_guide">My Prescription</a><br>
            <a href="order_history">My Orders</a><br>
            <a href="feedback">Feedback</a><br>
            <a href="delivery_details">Delivery Status</a><br>
            <a href="#">Rate Delivery</a><br>
            <a class="heart" href="edit_information">Edit My Information</a>

</div>
</div>

<p class="p-edit">Edit Account</p>

<div class="edit-box-3">

<form method="POST">
    
    <label class="label-edit" for="name">Name</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 100px;" for="number">Mobile Number</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="number" name="number"><br>

    <div class="change">
        <a href="change_username">Change Username</a><br>
        <a href="change_email">Change Email</a><br>
        <a href="change_password"><b>Change Passwoed</b></a><br>
        <a href="change_address">Change Address</a>
    </div>
    

</form>

<div class="edit-box-changepassword">

<form method="POST">
    
    <label class="label-edit" for="name">Current Password</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 100px;" for="number">New Password</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="number" name="number"><br>
    <label class="label-edit" style="top: 200px;" for="number">Confirm Password</label><br>
    <input type="text" class="input-edit" style="margin: 160px 0px;" id="number" name="number"><br>

    
    

</form>

</div>

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>