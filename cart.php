<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./cart.css">
</head>

<body>
  <header class="py-3">
    <div id="banner" class="container text-center">
      <p class="head">Shopping Cart</p>
      <div class="links">
        <a href="./index.php">Home</a>
        <a href="./about.html">About</a>
        <a href="./contact.php">Contact</a>
      </div>

    </div>
  </header>

  <div class="content">
    <main class="container py-4">
      <ul class="cart-items">
        <?php include("./cart_items.php") ?>
    </main>
  </div>

  <footer class="footer">
    <div class="container">
      &copy; 2023 Contrivance&trade; All Rights Reserved
    </div>
  </footer>

  <!-- Add Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- Add Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>