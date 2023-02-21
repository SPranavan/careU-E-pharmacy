<?php require APPROOT . '/views/inc/change_header.php'; ?>

    <main class="content">
        
    <div class="side_element">

<div class="side_options">
    <a class="heart" href="myinformation">My Information</a><br>
    <a href="prescription_guide">My Prescription</a><br>
    <a href="order_history">My Orders</a><br>
    <a href="feedback">Feedback</a><br>
    <a href="delivery_details">Delivery Status</a><br>
    <a href="#">Rate Delivery</a><br>
    <a href="edit_information">Edit My Information</a>

</div>
</div>

<p class="p-edit">My Account</p>

<div class="edit-box-myaccount">

<form method="POST">
    
    <label class="label-edit" for="name">Name</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 100px;" for="uname">User Name</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="uname" name="uname"><br>
    <label class="label-edit" style="top: 200px;" for="email">Email</label><br>
    <input type="email" class="input-edit" style="margin: 140px 0px;" id="email" name="email"><br>
    <label class="label-edit" style="top: 300px;" for="number">Mobile Number</label><br>
    <input type="text" class="input-edit" style="margin: 220px 0px;" id="number" name="number"><br>

    <div class="change-myaccount">
        <a href="#" style="">Edit | Change Password</a>
    </div>
    

</form>

</div>

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>