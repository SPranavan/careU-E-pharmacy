<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/product_medicine_gastro.css">
</head>


    <div class="medicine">
        <p>Medicine</p>
    </div>
    <div class="side_element">
        <div class="side_options">
            <a href="product_medicine_heart">Heart</a>
            <br>
            <a href="product_medicine_diabetes">Diabetes</a>
            <br>
            <a href="product_medicine_infection">Infection</a>
            <br>
            <a class="heart">Gastro Infectional System</a>
            <br>
            <a href="product_medicine_muscle">Muscle and Joint</a>

        </div>


    </div>
    <div class="details">
        <?php 
        $countdata = count($data);

        for ($i=0; $i < $countdata; $i++) { 
            echo '
            <div class="box1">
                <img src="'.URLROOT.'/public/img/pharmacist/panadol.jpg" alt="call">
                <p>Item name :<span class="data"> '.$data[$i]-> name.' </span> </p>
                <p>Price :<span class="data"> '.$data[$i]-> price.'</span> </p>
                <p>Stock :<span class="data"> '.$data[$i]-> quantity.'</span> </p>
                <p>Quantity :<span class="data"> '.$data[$i]-> quantity_measurement.'</span> </p>
            </div> ';
        };
        
        
        
        ?>
        

    </div>
    

    



<?php require APPROOT . '/views/inc/pharmacistfooter.php'; ?>