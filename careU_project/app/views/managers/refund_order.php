<?php require APPROOT . '/views/inc/manager_header.php'; ?>
    <div class="refund-order-div1">
        <p class="refund-order-heading">Refund Order</p>
        <div class="refund-order-div2">
            <table class="table-4">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                    </tr>
                </tbody>
            </table>

            <a href="<?php echo URLROOT; ?>/pages/cancelled_orders" style='text-decoration:none;'><button class="refund-order-bt1">Back</button></a>
            <a href='#' style='text-decoration:none;'><button class="refund-order-bt2">Refund</button></a>
        </div>
    <div>
<?php require APPROOT . '/views/inc/footer.php'; ?>