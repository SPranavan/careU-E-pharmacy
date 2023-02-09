<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/create_new_prescription.css">
    <!-- <script>
        function showMessage(){
            window.alert("this is a po-up message!");
        }
    </script> -->
</head>

<div class="available">
    <p>Create new Prescription</p>
</div>

<form action="#">
    <div class="container">
        <label for="medicine_category">Medicine Category</label>
        <input class="i1" type="text" name="medicine_category" id="medicine_category" required><br>
        <label for="medicine_id">Medicine ID</label>
        <input class="i2" type="text" name="medicine_id" id="medicine_id" required><br>
        <label for="medicine_name">Medicine name</label>
        <input class="i3" type="text" name="medicine_name" id="medicine_name" required><br>
        <label for="total">Total Items</label>
        <input class="i4" type="text" name="total" id="total" required><br>
        <label for="customer_name">Customer name</label>
        <input class="i5" type="text" name="customer_name" id="customer_name" required><br>
        <label for="customer_id">Customer ID</label>
        <input class="i6" type="text" name="customer_id" id="customer_id" required><br>
        <label for="gender">Customer Gender</label>
        <input class="i7" type="text" name="gender" id="gender" required><br>
        <label for="age">Age</label>
        <input class="i8" type="text" name="age" id="age" required><br>
        <button type="submit" class="submit_btn">Create</button>
        <button type="reset" class="cancel_btn">Cancel</button>
    </div>

</form>





<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>