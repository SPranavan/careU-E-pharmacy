<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/available_prescription.css">
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
            <th>Packed</th>
            <th>Delivered</th>
            <th></th>
        </tr>
        <hr class="hr2">
        

        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><button>Done</button></td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><button>Done</button></td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><button>Done</button></td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><button>Done</button></td>
        </tr>
    </table>

</div>
</div>

<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>