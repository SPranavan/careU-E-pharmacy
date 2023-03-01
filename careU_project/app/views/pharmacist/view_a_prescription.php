<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/view_a_prescription.css">


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

<?php require APPROOT . '/views/inc/review_pop_up.php'; ?>
<div class="available">
    <p>Prescription001</p>
</div>

<div class="box">
    <div class="details">
        <table>
            <hr class="hr1">
            <tr>
                <th>Prescription ID</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <hr class="hr2">


            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>

            </tr>

        </table>

    </div>
    <img src="<?php echo URLROOT; ?>/public/img/pharmacist/prescription_1.jpg" alt="call">
    <button class="btn1">Accept</button>
    <button class="btn2" onclick="document.getElementById('id01').style.display='block'">Decline</button>

</div>




<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>