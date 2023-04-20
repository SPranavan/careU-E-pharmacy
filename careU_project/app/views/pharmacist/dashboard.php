<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>

<div class="head1">
    <p>Dashboard</p>
</div>

<div class="box1">
    
    <div class="meds">
        <a href="/careU_project/pharmacists/product_medicine_heart">Heart - <span><?php echo $data[0];?></span></a><br>
        <a href="/careU_project/pharmacists/product_medicine_diabetes">Diabetes -<span><?php echo $data[1];?></span> </a><br>
        <a href="/careU_project/pharmacists/product_medicine_infection">Infection -<span><?php echo $data[2];?></span> </a><br>
        <a href="/careU_project/pharmacists/product_medicine_gastro">Gastro - <span><?php echo $data[3];?></span></a><br>
        <a href="/careU_project/pharmacists/product_medicine_muscle">Muscle -<span><?php echo $data[4];?></span> </a>
    </div>
    <p>Available Medicines</p>
    
</div>

<div class="box2">
    <h3><?php echo $data[5];?></h3>
    <p>Total Customers</p>

</div>

<div class="box3">
    <h3><?php echo $data[6];?></h3>
    <p>Expired Medicines</p>

</div>

<div class="head2">
    <p>Weekly Analysis</p>
</div>

<div class="chart">
    <canvas id="myChart" style="width:100%;max-width:800px"></canvas>

    <script>
        var xValues = ['Mon','Tues','Wed','Thurs','Fri','Satur','Sun'];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    label:'Completed Prescriptions',
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "red",
                    fill: false
                }, {
                    label:'Completed Orders',
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: true
                },
                scales:{
                    yAxes:[{
                        scaleLabel:{
                            display:true,
                            labelString:'Customer count'
                        }
                    }],
                    xAxes:[{
                        scaleLabel:{
                            display:true,
                            labelString:'Day'
                        }
                    }]
                }
            }
        });
    </script>

</div>




<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>