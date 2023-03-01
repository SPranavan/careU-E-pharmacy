<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/available_prescription.css">
    <!-- <script>
        function showMessage(){
            window.alert("this is a po-up message!");
        }
    </script> -->
</head>

<div class="available">
    <p>Available Prescriptions</p>
</div>

<div class="box">
    <div class="details">
        <table>
            <hr class="hr1">
            <tr>
                <th>Prescription ID</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th></th>
            </tr>
            <hr class="hr2">

            <?php

            $countdata = count($data);
            for ($i = 0; $i < $countdata; $i++) {
                echo '
        <tr>
            <td>' . $data[$i]->prescriptionID . '</td>
            <td>' . $data[$i]->customerID . '</td>
            <td>' . $data[$i]->customer_name . '</td>
            <td><button>View</button></td>
        </tr>';
            }
            ?>
        </table>

    </div>
</div>

<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>