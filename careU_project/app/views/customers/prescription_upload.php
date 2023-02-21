<?php require APPROOT . '/views/inc/main_header.php'; ?>

    <main class="content">
        
        <img class="img" src="<?php echo URLROOT;?>/public/img/prescription/prescription.png" alt="prescription">
        <h2>Upload Prescription</h2>

        <label for="name">Your Name (required)</label><br>
        <input type="text" class="prescription-input" id="name" name="name"><br>
        <label for="age">Your Age (required)</label><br>
        <input type="text" class="prescription-input" id="age" name="age"><br>
        <label for="email">Your Email (required)</label><br>
        <input type="text" class="prescription-input" id="email" name="email"><br>
        <label for="number">Your Contact No (required)</label><br>
        <input type="text" class="prescription-input" id="number" name="number"><br>
        <label for="address">Your Address (required)</label><br>
        <input type="text" class="prescription-input" id="address" name="address"><br>
        <p>Doctor’s Prescription (required - Maxium upload size 5Mb)</p>
        <div>
            <button>Browsr.....</button>
            <p>No file selected.</p>
        </div>
        <label for="number">Mobile Number</label><br>
        <input type="text" class="prescription-input" id="number" name="number"><br>

        <form action="">

        </form>
        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>