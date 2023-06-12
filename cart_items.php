<?php
session_start();

// Check if all the required POST parameters are set
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['quantity'])) {

  // Create a product array with the POST data
  $product = [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'image' => $_POST['image'],
    'quantity' => $_POST['quantity']
  ];

  // Check if the 'cart' variable exists in the session
  if (isset($_SESSION['cart'])) {
    $found = false;

    // Iterate through each item in the 'cart' session variable
    foreach ($_SESSION['cart'] as $index => $item) {

      // Check if the ID of the current item matches the ID of the product being added
      if ($item['id'] === $product['id']) {

        // Update the quantity of the existing item in the cart
        $_SESSION['cart'][$index]['quantity'] += $product['quantity'];
        $found = true;
        break;
      }
    }

    // If the product was not found in the cart, add it as a new item
    if (!$found) {
      $_SESSION['cart'][] = $product;
    }
  } else {
    // If the 'cart' session variable doesn't exist, create it and add the product as the first item
    $_SESSION['cart'][] = $product;
  }
}

// Check if the 'remove' GET parameter is set
if (isset($_GET['remove'])) {
  $id = $_GET['remove'];

  // Check if the 'cart' variable exists in the session
  if (isset($_SESSION['cart'])) {

    // Iterate through each item in the 'cart' session variable
    foreach ($_SESSION['cart'] as $index => $item) {

      // Check if the ID of the current item matches the ID to be removed
      if ($item['id'] === $id) {

        // Remove the item from the cart using array_splice
        array_splice($_SESSION['cart'], $index, 1);
        break;
      }
    }
  }
}

// Initialize the total variable
$total = 0;

// Check if the 'cart' variable exists in the session and is not empty
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

  // Iterate through each item in the 'cart' session variable
  foreach ($_SESSION['cart'] as $item) {

    // Calculate the subtotal for the item
    $subtotal = $item['price'] * $item['quantity'];

    // Add the subtotal to the total
    $total += $subtotal;

    // Output HTML for displaying the item in the cart
    echo '<li class="cart-item">';
    echo '<img src="./images/' . $item['image'] . '" alt="' . $item['name'] . '">';
    echo '<div class="cart-item-details">';
    echo '<h5 class="cart-item-name">' . $item['name'] . '</h5>';
    echo '<p class="cart-item-price">$' . $item['price'] . '</p>';
    echo '</div>';
    echo '<div class="cart-item-actions">';
    echo '<input type="number" class="cart-item-quantity" value="' . $item['quantity'] . '" min="1" readonly>';
    echo '<a href="?remove=' . $item['id'] . '"><i class="fas fa-trash-alt"></i></a>';
    echo '</div>';
    echo '</li>';
  }
} else {
  // If the cart is empty, display a message
  echo '<div class="empty">';
  echo '<li class="text-center">Your cart is empty.</li>';
  echo '<div id="return" class="text-center"><a href="./index.php">Return</a></div>';
  echo '</div>';
}
?>

</ul>

<?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
  <div class="cart-total">
    Total: $<?php echo $total; ?>
  </div>
  <div class="text-end mt-4">
    <a href="#" class="btn btn-primary checkout-btn">Checkout</a>
  </div>
<?php } ?>
