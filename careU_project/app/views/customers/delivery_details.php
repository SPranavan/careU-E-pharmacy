<?php require APPROOT . '/views/inc/customer_header.php'; ?>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/customer/feedback.css">
</head>

    <main class="content">
        <div class="side_element">
            <div class="side_options">
            <a href="myaccount">My Information</a><br>
            <a href="prescription_upload">My Prescription</a><br>
            <a href="order_history">My Orders</a><br>
            <a href="feedback">Feedback</a><br>
            <a class="heart" href="delivery_details" style="width: 150px;">Delivery Status</a><br>
            <a href="edit_information">Edit My Information</a>

            </div>
        </div>
        <p class="p-delivery">Delivery Details</p>
        <div class="details">
        <html>

    
    <table>
      <tr>
        <th>Order ID</th>
        <th>Delivery ID</th>
        <th>Date</th>
        <th>Ship to</th>
        <th>Order Total</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Recieved /<br>Dispatched</td>
        <td><a href="#">View Order</a> | <a href="#">Reorder</a></td>
      </tr>
    </table>
  


        </div> 

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>