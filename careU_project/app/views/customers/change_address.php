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
        <a href="change_password">Change Passwoed</a><br>
        <a href="change_address"><b>Change Address</b></a>
    </div>
    

</form>

<div class="edit-box-changeusername">

<form method="POST">
    
    <label class="label-edit" for="name">New Address</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 100px;" for="number">City</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="number" name="number"><br>

    
    

</form>

</div>

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>