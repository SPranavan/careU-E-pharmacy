<?php require APPROOT . '/views/inc/pharmacist_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/pharmacists/product_pc_oralcare.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#search").keyup(function(){
				var searchText = $(this).val();
				$.ajax({
					url: './oralcare_search',
					type: 'post',
					data: {search: searchText},
					success: function(response){
                        console.log(response);
						$("#details").html(response);
					}
				});
			});
		});
	</script>

    <div class="medicine">
        <p>Personal Care</p>
    </div>
    <div class="search-container">
   
        <input id="search" type="text" placeholder="Search..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    
</div>
    <div class="side_element">
        <div class="side_options">
            <a href="product_pc_nourishment">Nourishments</a>
            <br>
            <a href="product_pc_accessories">Accessories</a>
            <br>
            <a href="product_pc_skincare">Skin care</a>
            <br>
            <a href="product_pc_womenpc">Women Personal care</a>
            <br>
            <a class="heart">Oral care</a>

        </div>


    </div>
    <div id="details" class="details">
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