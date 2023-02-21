<?php require APPROOT . '/views/inc/main_header.php'; ?>

    <main class="content">
        <div class="side_element">
            <div class="side_options">
            <a href="myinformation">My Information</a><br>
            <a href="prescription_guide">My Prescription</a><br>
            <a href="order_history">My Orders</a><br>
            <a class="heart" href="feedback">Feedback</a><br>
            <a href="delivery_details">Delivery Status</a><br>
            <a href="#">Rate Delivery</a><br>
            <a href="edit_information">Edit My Information</a>

            </div>
        </div>
        <div class="heart_p">
            <p>Leave a comment</p>
        </div>
        <div class="details">
            <form method="POST">
                <input type="text" class="feedback-input" name="feedback" id="feedback" value="FEEDBACK" style="text-align: center; font-size: 50px;">
                <button class="button3" type="submit" name="submit">Submit</button>
                <!-- <in put  value="Submit"> -->
            </form>

        </div> 

        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>