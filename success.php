<?php
  error_reporting(E_ALL);
  if(!empty($_GET['tid'] && !empty ($_GET['product']))) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
  } else {
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stripe API</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container mt-4">
      <h2>Thank you for purchasing <?php echo $product; ?></h2>
      <hr>
      <p><strong>Your transaction ID:</strong> <?php echo $tid; ?></p>
      <p>Check your email for more info</p>
      <p><a href="index.php" class="btn blue">Go Back</a></p>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./js/charge.js"></script>
    </body>
</html>
