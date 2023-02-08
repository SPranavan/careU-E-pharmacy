<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/completed_prescription.css">
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
            <th>Time</th>
            <th></th>
            <th></th>
        </tr>
        <hr class="hr2">
        

        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td></td>
            <td></td>
            <td><button>order details</button></td>
            <td><button class="btn2" onclick="document.getElementById('id01').style.display='block'">Feedback</button></td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td></td>
            <td></td>
            <td><button>order details</button></td>
            <td><button>feedback</button></td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td></td>
            <td></td>
            <td><button>order details</button></td>
            <td><button>feedback</button></td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td></td>
            <td></td>
            <td><button>order details</button></td>
            <td><button>feedback</button></td>
        </tr>
    </table>

</div>
</div>

<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>