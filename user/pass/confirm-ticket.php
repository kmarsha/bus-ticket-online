<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm - Ticket Page</title>
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="acc.css">
</head>
<style>
.container {
  max-width: 960px;
}
*{
  color: white;
}
</style>
<body class="bg-dark">
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>Personal data form</h2>
        <p class="lead">Please fill out this Personal data form to confirm if it's You. Don't worry we will keep your data secretly</p>
      </div>
  
        <div class="col-md-7 col-lg-12">
          <h4 class="mb-3">Personal Data</h4>
          <form class="needs-validation" method="POST" action="payment-ticket.php" novalidate>
            <div class="row g-3">
              <div class="col-sm-8">
                <label for="user" class="form-label">Username <span class="text-muted">(Please fill username correctly)</span></label>
                <input type="text" name="user" class="form-control" id="user" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid Username is required.
                </div>
              </div>
  
              <div class="col-6">
                <label for="phonenumber" >Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="0812-3456-7890" required>
                <div class="invalid-feedback">
                    Your Phone Number is required.
                  </div>
              </div>

              
            <hr class="my-4">

              <?php

                session_start();
                $from = $_SESSION['from'];
                $to = $_SESSION['to'];
                $route = $_SESSION['route'];
                $total_pass = $_SESSION['total_pass'];
                $date = $_SESSION['date'];
                $time = $_SESSION['time'];
                $fare = $_SESSION['fare'];

              ?>
  
              <h4 style="text-align: center;"><?php echo "Track from " . $from . " To " . $to; ?></h4>
              <h4 style="text-align: center;"><?php echo "Fare for " . $total_pass . " Passengers is Rp. " . number_format($fare, 2, "," , "."); ?></h4>
              
            <hr class="my-4">
  
            <h4 class="mb-3">Payment</h4>
  
            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value="Credit card" required>
                <label class="form-check-label" for="credit">Credit card</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" value="Debit card" required>
                <label class="form-check-label" for="debit">Debit card</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" value="Digital card" required>
                <label class="form-check-label" for="paypal">Digital Credit Card (DANA/OVO/GOPAY/PAYPAL)</label>
              </div>
            </div>
  
            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" name="ccname" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
  
              <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" name="ccnumber" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" name="expiration" class="form-control" id="cc-expiration" placeholder="">
              </div>
  
              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV <span class="text-muted small">(Card Verification Value)</span></label>
                <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="">
              </div>
            </div>
  
            <hr class="my-4">
  
            <button class="w-100 btn btn-costum btn-lg" type="submit" style="color: white; background-color: rgb(62, 118, 223);">Continue Registration</button>
          </form>
        </div>
      </div>
    </main>
  
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 12007880 - RPL SMK WIKRAMA BOGOR 2021
        <a class="text-reset fw-bold" href="http://smkwikrama.sch.id/rekayasa-perangkat-lunak">smkwikrama.sch.id</a></p>
    </footer>
  </div>
  
  <script src="form-validation.js"></script>
</body>
</html>