<?php 
    $apikey="rzp_test_wbvZfVojaGqxXF";
?>

<form action="https://www.example.com/payment/success/" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key='<?php echo $apikey;?>' // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="1000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="";
    data-buttontext="Pay with Razorpay"
    data-name="Doggo Donation"
    data-description="Non-Profit Organization"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name=""
    data-prefill.email=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">










        <form class="container" method="POST">
        <h1>Enter Details</h1>
            <?php
    if ( isset($_SESSION['error']) ) {
        echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
        unset($_SESSION['error']);
    }
    ?>
            <label for="name"><b>Name</b></label>
            <p class="field"><input type="text" placeholder="Enter Name" name="name" required></p>
            <label for="email"><b>Email</b></label>
            <p class="field"><input type="text" placeholder="Enter Email" name="email" required></p>
            <label for="amt"><b>Enter Amount</b></label>
            <p class="field"><input type="text" placeholder="Enter Amount" name="amt" required></p>
            <br><br>
            <button type="submit" class="btn">Pay Using Razorpay</button>

                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key='<?php echo $apikey;?>' // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
                    data-amount="200000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
                    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
                    data-order_id="";
                    data-name="Doggo Donation"
                    data-description="Non-Profit Organization"
                    data-image="https://example.com/your_logo.jpg"
                    data-prefill.name=""
                    data-prefill.email=""
                    data-theme.color="#F37254">
    </script>
    <input type="hidden" custom="Hidden Element" name="hidden">
        </form>




