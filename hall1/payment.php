<?php include 'inc/session.php';?>
<?php require('inc/dbconection.php');
 if(isset($_POST['confirm-purchase'])){
            $uid=$_SESSION['user_no'];
            /*$fullname=$_POST['fname'];
            $username=$_POST['uname'];
            $email=$_POST['email'];
            $phone=$_POST['num'];
            $city=$_POST['city'];*/
            $owner=$_POST['owner'];
            $cvv=$_POST['c'];
            $owner=$_POST['owner'];
            $owner=$_POST['owner'];
            $bookdate=$_POST['bookdate'];
      $hallid=$_SESSION['hallid'];
      $hallname=$_SESSION['hallname'];
      $hallprice=$_SESSION['hallprice'];}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
<?php require('inc/link.php');?>
</head>

<body class="bg-light">

<?php include 'inc/user_header.php';?>

       
              <h2 class=" mb-2 text-center fw-bold h-font">MAKE PAYMENT</h2>
        <div class="h-line bg-dark"><b></div>
        <div class="creditCardForm shadow">

            <div class="payment">
                <form action="payment.php" method="POST">
                    <div class="form-group owner">
                        <label for="owner">Owner</label>
                        <input type="text" name="owner" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" name="cvv" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" name="cardnum" class="form-control" id="cardNumber">
                    </div>

                    <div class="form-group" id="card-number-field">
                        <label for="totalamount">Total Amount</label>
                        <input type="number" class="form-control" id="totalamount" name="amount" value="<?=$_SESSION['hallprice']?>" readonly>
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                            <option value="24"> 2024</option>
                            <option value="25"> 2025</option>
                            <option value="26"> 2026</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="assets/images/visa.jpg" id="visa">
                        <img src="assets/images/mastercard.jpg" id="mastercard">
                        <img src="assets/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" name="confirm-purchase" id="confirm-purchase" style="background-color:#8B0000">Confirm</button>
                    </div>
                </form>
            </div>
        </div>

        <p class="examples-note">Here are some dummy credit card numbers and CVV codes for references:</p>

        <div class="examples">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Card Number</th>
                            <th>Security Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Visa</td>
                            <td>4716108999716531</td>
                            <td>257</td>
                        </tr>
                        <tr>
                            <td>Master Card</td>
                            <td>5281037048916168</td>
                            <td>043</td>
                        </tr>
                        <tr>
                            <td>American Express</td>
                            <td>342498818630298</td>
                            <td>3156</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script>$(function() {

    var owner = $('#owner');
    var cardNumber = $('#cardNumber');
    var cardNumberField = $('#card-number-field');
    var CVV = $("#cvv");
    var mastercard = $("#mastercard");
    var confirmButton = $('#confirm-purchase');
    var visa = $("#visa");
    var amex = $("#amex");

    // Use the payform library to format and validate
    // the payment fields.

    cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');


    cardNumber.keyup(function() {

        amex.removeClass('transparent');
        visa.removeClass('transparent');
        mastercard.removeClass('transparent');

        if ($.payform.validateCardNumber(cardNumber.val()) == false) {
            cardNumberField.addClass('has-error');
        } else {
            cardNumberField.removeClass('has-error');
            cardNumberField.addClass('has-success');
        }

        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            mastercard.addClass('transparent');
            amex.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            mastercard.addClass('transparent');
            visa.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            amex.addClass('transparent');
            visa.addClass('transparent');
        }
    });

    confirmButton.click(function(e) {

        e.preventDefault();

        var isCardValid = $.payform.validateCardNumber(cardNumber.val());
        var isCvvValid = $.payform.validateCardCVC(CVV.val());

        if(owner.val().length < 5){
            alert("Wrong owner name");
        } else if (!isCardValid) {
            alert("Wrong card number");
        } else if (!isCvvValid) {
            alert("Wrong CVV");
        } else {
            // Everything is correct. Add your form submission code here.
          window.location.href = "hall.php";
        }
    });
});

           
    </script>
<?php include 'inc/footer.php';?>
</body>

</html>
