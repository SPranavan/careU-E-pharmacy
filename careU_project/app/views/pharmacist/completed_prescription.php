<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/completed_prescription.css">
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</head>
<?php require APPROOT . '/views/inc/feedback_pop_up.php'; ?>

<div class="available">
    <p>Completed Prescriptions</p>
</div>

<div class="box">
<div class="details">
    <table>
        <hr class="hr1">
        <tr>
            <th>Prescription ID</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Date</th>
            
            <th></th>
            <th></th>
        </tr>
        <hr class="hr2">
        
        <?php
            $countdata = count($data);
            for($i =0;$i<$countdata;$i++){
          ?>      
        <tr>
            <td><?php echo $data[$i]->prescriptionID ?></td>
            <td><?php echo$data[$i]->customerID?></td>
            <td><?php echo$data[$i]->customer_name?></td>
            <td><?php echo$data[$i]->date?></td>
            
            <td><button>order details</button></td>
            <td><button class="btn2" onclick="document.getElementById;('id01').style.display='block'">Feedback</button></td>
        </tr>
          <?php  }
         ?>
    </table>

</div>
</div>

<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>