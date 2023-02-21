<?php require APPROOT . '/views/inc/feedback_header.php'; ?>

    <main class="content">
        
        <h1>CHECKOUT</h1>
        
        <div>
            <P class="checkout">USE ACCOUNT ADDRESS</P>
            <div class="checkout-box-1"></div>
        </div>
        
        <div>
            <P class="checkout" style="left: 621px;">USE NEW ADDRESS</P>
            <form action="#">
            <label class="label-checkout" for="fname">First Name</label><br>
            <input type="text" class="edit-checkout" id="fname" name="fname"><br>
            <label class="label-checkout" style="top: 565px;" for="lname">Last Name</label><br>
            <input type="text" class="edit-checkout" style="top: 595px;" id="lname" name="lname"><br>
            <label class="label-checkout" style="top: 665px;" for="address">Address</label><br>
            <input type="text" class="edit-checkout" style="top: 695px;" id="address" name="address"><br>
            <label class="label-checkout" style="top: 765px;" for="number">Contact Number</label><br>
            <input type="text" class="edit-checkout" style="top: 795px;" id="number" name="number"><br>
            <label class="label-checkout" style="top:865px;" for="email">Email</label><br>
            <input type="text" class="edit-checkout" style="top: 895px;" id="name" name="name"><br>
            
            </form>
        </div>

        <div>
            <P class="checkout" style="left: 1021px;">ORDER DETAILS</P>
            <div class="checkout-box-3"></div>
        </div>
        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>