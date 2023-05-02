<?php require APPROOT . '/views/inc/customer_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/checkout.css">
</head>

    <main class="content">

    <div class="outer-div inner-div">
        <div class="inner-div">
        <table style="width:100%">
        <tr>
            <th></th>
            <th></th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>

        <?php foreach ($_SESSION['cart'] as $key => $item): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td>$<?php echo $item['price']; ?></td>
            <td>
                <form action="cart.php?action=update&id=<?php echo $key; ?>" method="post">
                    <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1">
                    <input type="submit" name="update" value="Update">
                </form>
                <?php 
                if (isset($_POST['update'])) {
                    $id = $key;
                    $quantity = $_POST['quantity'];
                    
                    // Update the quantity for the item in the cart
                    $_SESSION['cart'][$id]['quantity'] = $quantity;
                    
                    // Redirect back to the cart page
                    header('Location: cart.php');
                    exit();
                }
                ?>
            </td>
            <td>$<?php echo $item['price'] * $item['quantity']; ?></td>
            <td><a href="cart.php?action=delete&id=<?php echo $key; ?>">Remove Item</a></td>
            <?php 
                if ($_GET['action'] == 'delete') {
                    $id = $_GET['id'];
                
                    // Remove the item from the cart
                    unset($_SESSION['cart'][$id]);
                }                        
            ?>
        </tr>
    <?php endforeach; ?>
</table>

    <div>
        <button class="return-cart" onclick="window.location.href='order';">Return To Shop</button>
    </div>
        </div>

    </div>

    </main>

<?php require APPROOT . '/views/inc/footer.php'; ?>
