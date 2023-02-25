<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/created_prescription.css">
    <!-- <script>
        function showMessage(){
            window.alert("this is a po-up message!");
        }
    </script> -->
</head>

<div class="available">
    <p>Created Prescriptions</p>
</div>

<div class="box">
<div class="details">
    <table>
        <hr class="hr1">
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Prescription ID</th>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Invoice ID</th>
            <th>Date</th>
        </tr>
        <hr class="hr2">
        

        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>panadol</td>
            <td>25</td>
            <td>2001</td>
            <td>22.02.2023</td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>vitamin c</td>
            <td>12</td>
            <td>2001</td>
            <td>09.11.2023</td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>vitamin d</td>
            <td>22</td>
            <td>2002</td>
            <td>03.12.2034</td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</div>
</div>



<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>