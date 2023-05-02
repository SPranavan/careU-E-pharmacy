<?php require APPROOT . '/views/inc/customer_header.php'; ?>
<?php 
    $db_connection = mysqli_connect('localhost','root','');
    mysqli_select_db($db_connection, 'careu');
    $query = "SELECT * FROM users";
    $result = mysqli_query($db_connection, $query);
?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/edit_information.css">
</head>

    <main class="content">
        
    
<p class="p-myaccount">My Account</p>

<div class="form-div-outer form-div">
    <table>
        <?php 
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>
                <tr>
                    <th>Name : <?php echo $rows['fName']. " " . $rows['lName']; ?></th>
                    <th>Birth Date : <?php echo $rows['birthDate']; ?></th>
                    <th>Mobile Number : <?php echo $rows['mobile']; ?></th>
                    <th>Email : <?php echo $rows['email']; ?></th>
                    <th>Address : <?php echo $rows['address']. " " . $rows['city']; ?></th>
                </tr>
        <?php
            }
        ?>
        <div class="change-myaccount">
            <a href="change_password" class="a-myaccount">Edit | Change Password</a>
        </div>
        
    </table>
</div>





    
<!-- <div class="edit-box-myaccount">

<form method="POST">
    
    <label class="label-edit" for="name">Name</label><br>
    <input type="text" class="input-edit" id="name" name="name"><br>
    <label class="label-edit" style="top: 100px;" for="uname">User Name</label><br>
    <input type="text" class="input-edit" style="margin: 80px 0px;" id="uname" name="uname"><br>
    <label class="label-edit" style="top: 200px;" for="email">Email</label><br>
    <input type="email" class="input-edit" style="margin: 140px 0px;" id="email" name="email"><br>
    <label class="label-edit" style="top: 295px;" for="number">Mobile Number</label><br>
    <input type="text" class="input-edit" style="margin: 200px 0px;" id="number" name="number"><br>

    <div class="change-myaccount">
        <a href="change_password" class="a-myaccount">Edit | Change Password</a>
    </div>
    

</form>

</div> -->

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>