<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');

// Instantiate Customer
$customer = new Customer();

// Get Customer
$customers = $customer->getCustomers();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Customers</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
      <br>
      <div class="btn-group" role="group">
        <a class="btn blue" href="customers.php">Customers</a>
        <a class="btn black" href="transactions.php">Transactions</a>
      </div>
      <br>
      <hr style="background:#ccc;height:1px;border:none">
      <h2>Customers</h2>
      <table class="striped highlight responsive-table">
        <thead>
          <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($customers as $customer): ?>
            <tr>
              <td><?php echo $customer->id; ?></td>
              <td><?php echo $customer->first_name; ?> <?php echo $customer->last_name; ?></td>
              <td><?php echo $customer->email; ?></td>
              <td><?php echo $customer->created_at; ?></td>
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
