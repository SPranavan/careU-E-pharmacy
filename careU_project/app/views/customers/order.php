<?php require APPROOT . '/views/inc/customer_header.php'; ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/order.css">
</head>

<main class="content">

    <div class="p-order">Order</div>

    <?php if (!empty($data) && is_array($data)) : // Check if $data is not empty and is an array ?>
        <?php foreach ($data as $dataArray) : // Loop through each data array ?>
            <div class="details">
            <?php if (!empty($dataArray['title'])) : ?>
                <h2 class=""><?php echo $dataArray['title']; ?></h2>
            <?php endif; ?>
            <div class="full-details">
                <?php if (!empty($dataArray['items']) && is_array($dataArray['items'])) : ?>
                    <?php foreach ($dataArray['items'] as $item) : // Loop through each item in the current data array ?>

                        <?php 
                            if (isset($_POST['addCart'])) {
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            $quantity = $_POST['quantity'];

                            // Add the item to the cart
                            $_SESSION['cart'][] = array(
                                'name' => $name,
                                'price' => $price,
                                'quantity' => $quantity
                            );
                        }
   
                        ?>

                    <div class="box1"> 
                        <form method="post" action="<?php echo URLROOT ?>/customers/cart">
                        <span class="data"><?php echo $item->image; ?></span>
                        <p>Item Name: <span class="data"><?php echo $item->name; ?></span></p>
                        <p>Quantity: <span class="data"><?php echo $item->quantity_measurement; ?></span></p>
                        <p>Price: <strong>Rs</strong>   <span class="data"><?php echo $item->price; ?></span></p>
                            <input type="hidden" name="name" value="<?php echo $item->name; ?>">
                            <input type="hidden" name="price" value="<?php echo $item->price; ?>">
                            <input type="hidden" name="quantity" value="<?php echo $item->quantity_measurement; ?>">
                            <input type="submit" name="addCart" class="cart-button" value="Add to Cart">


                        </form>
                    </div>




                       

                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No data available.</p> <!-- Display an error message if $dataArray['items'] is empty or not an array -->
                <?php endif; ?>

            </div>
            </div>

        <?php endforeach; ?>
    <?php else : ?>
        <p>No data available.</p> <!-- Display an error message if $data is empty or not an array -->
    <?php endif; ?>

</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>
