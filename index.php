
<?php include 'includes/config.php';

// couldnt get the get ID to work
if(isset($_GET['id'])){

  $id = mysqli_real_escape_string($conn, $_GET['id']);

  $sql = "SELECT * FROM customers WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  $customer = mysqli_fetch_assoc($result);

  print_r($customer);
}
?>

<h4 class="center grey-text">Customers!</h4>

<div class="container">
  <div class="row">
  <?php foreach($customer as $customer){ ?>

    <div class="col s6 md3">
      <div class="card z-depth-0">
        <div class="card-content center">
          <h6><?php echo htmlspecialchars($customer['last_name']); ?></h6>
          <div><?php echo htmlspecialchars($customer['first_name']); ?></div>
          <div><?php echo htmlspecialchars($customer['dob']); ?></div>
          <div><?php echo htmlspecialchars($customer['driver_license_number']); ?></div>
          <div><?php echo htmlspecialchars($customer['phone']); ?></div>
          <div><?php echo htmlspecialchars($customer['email']); ?></div>
        </div>
        <div class="card-action right-align">
          <a href="" class="brand-text" href="#">more info</a>  
        </div>
      </div>
    </div>

  <?php } ?>

  </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>
</head>
<body>

</body>
</html>