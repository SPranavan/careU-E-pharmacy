<?php require APPROOT . '/views/inc/storekeeper_header.php'; ?>
    <div class="add-personalcare-div1">
        <p class="add-personalcare-heading">Add Personal Care</p>
        <div class="add-personalcare-div2">
            <form action="/action_page.php" class="add-personalcare-form">
                <label for="medicine_category">Medicine Category</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <select class="add-personalcare-select" id="cars" name="cars">
                    <option value="Medicine">Medicine</option>
                    <option value="Personalcare">Personal Care</option>
                    <option value="Medicaldevices">Medical Devices</option>
                </select><br>
              
                <label for="lname">Medicine Id</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" class="add-personalcare-input" id="m_id" name="medicine_id"><br>
                
                <label for="lname">Medicine Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" class="add-personalcare-input" id="m_name" name="medicine_name"><br>

                <label for="lname">Generic Name</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" class="add-personalcare-input" id="g_name" name="generic_name"><br>

                <label for="lname">Date of Expiry</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" class="add-personalcare-input" id="ex_date" name="expiry_date"><br>

                <label for="lname">Total Items</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" class="add-personalcare-input"id="count" name="lname"><br>

                <label for="lname">Price(LKR)</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" class="add-personalcare-input" id="price" name="price"><br><br>

                <label for="lname">File Input</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="file" class="add-personalcare-input" id="avatar" name="avatar"ar"><br><br>

                <input type="button" id="add-personalcare-bt1" name="add" value="add" class="view-medicaldevices-bt1">
                <input type="submit" id="add-personalcare-bt2" name="cancel" value="cancel" class="view-medicaldevices-bt1"><br><br>
            </form> 
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>