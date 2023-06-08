<!DOCTYPE html>
<html>
<head>
  <title>Checkout Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
    }
    
    .checkout-form {
      max-width: 500px;
      margin: 0 auto;
    }
    
    .checkout-form .form-group {
      margin-bottom: 20px;
    }
    
    .checkout-form label {
      font-weight: bold;
    }
    
    .checkout-form button {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Checkout Page</h1>
    <div class="checkout-form">
      <form action="addUser.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control" id="address" placeholder="Enter your address" name="address"></textarea>
        </div>
        <div class="form-group">
          <label for="credit-card">Credit Card Number:</label>
          <input type="text" class="form-control" id="credit-card" placeholder="Enter your credit card number" name="credit">
        </div>
        <div class="form-group">
          <label for="expiry">Expiry Date:</label>
          <input type="text" class="form-control" id="expiry" placeholder="Enter the expiry date" name="date">
        </div>
        <div class="form-group">
          <label for="cvv">CVV:</label>
          <input type="text" class="form-control" id="cvv" placeholder="Enter the CVV number" name="CVV">
        </div>
        <button type="submit" value="add" name="add" class="btn btn-primary">Submit</button>
        <br><br>
        <a href='cart.php'> Back to cart page</a>
      </form>
    </div>
  </div>
</body>
</html>