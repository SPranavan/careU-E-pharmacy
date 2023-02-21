<?php require APPROOT . '/views/inc/feedback_header.php'; ?>

    <main class="content">
        
        <h1>CHECKOUT</h1>
        
        <div>
            <P class="checkout">PAYMENT DETAILS</P>
            <form action="#">
            <label class="label-payment" for="cnumber">Card Number</label><br>
            <input type="text" class="edit" id="cnumber" name="cnumber"><br>
            <label class="label-payment" style="top: 565px;" for="edate">Expiry Date</label><br>
            <input type="text" class="edit" style="top: 595px;" id="edate" name="edate"><br>
            <label class="label-payment" style="top: 665px;" for="cvc">CVC</label><br>
            <input type="text" class="edit" style="top: 695px;" id="cvc" name="cvc"><br>           
            </form>
        </div>
        
        <div>
            <div class="payment-box-2"></div>
            <P class="checkout" style="left: 621px;">CREDIT/DEBIT CARD PAYMENTS</P>
        </div>

        <div>
            <P class="checkout" style="left: 1021px;">ORDER DETAILS</P>
            <div class="checkout-box-3"></div>
        </div>
        
    </main>


<?php require APPROOT . '/views/inc/footer.php'; ?>