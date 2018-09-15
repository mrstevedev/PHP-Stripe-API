<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');

// Instantiate Customer
$transaction = new Transaction();

// Get Customer
$transactions = $transaction->getTransactions();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Transactions</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
      <br>
      <div class="btn-group" role="group">
        <a class="btn black" href="customers.php">Customers</a>
        <a class="btn blue" href="transactions.php">Transactions</a>
      </div>
      <br>
      <hr style="background:#ccc;height:1px;border:none">
      <h2>Transactions</h2>
      <table class="striped highlight responsive-table">
        <thead>
          <tr>
            <th>Transaction ID</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($transactions as $transaction): ?>
            <tr>
              <td><?php echo $transaction->id; ?></td>
              <td><?php echo $transaction->customer_id; ?></td>
              <td><?php echo $transaction->product; ?></td>
              <td><?php echo sprintf('%.2f', $transaction->amount / 100); ?>
              <?php echo strtoUpper($transaction->currency); ?></td>
              <td><?php echo $transaction->created_at; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br>
      <p><a href="index.php">Pay Page</a></p>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
