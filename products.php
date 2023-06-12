<?php 
//connect to server
include('./server/connection.php');

//get products from database
$stmt = $conn->prepare("SELECT * FROM products");

$stmt->execute();

//array of clothing products
$feature_products = $stmt->get_result(); ?>

<?php while ($row = $feature_products->fetch_assoc()) { // Loop through each product row 
?>
  <?php
  // Assign variables for each data
  $image = $row['image'];
  $name = $row['name'];
  $description = $row['description'];
  $price = $row['price'];
  $id = $row['id'];
  ?>
  <li>
    <figure>
      <img class="product" src="./images/<?php echo $image ?>" width="158px" height="187px">
      <figcaption>
        <!-- Product name, description, &, price -->
        <h4><?php echo $name ?></h4>
        <p><?php echo $description ?></p>
        <p class="priceTag"><strong>Price: ₱</strong> <?php echo $price ?></p>

        <!-- Form to add product to cart -->
        <form action="./cart.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input type="hidden" name="name" value="<?php echo $name ?>">
          <input type="hidden" name="price" value="<?php echo $price ?>">
          <input type="hidden" name="image" value="<?php echo $image ?>">

          <!-- Quantity input field -->
          <p><b>Quantity: </b></p>
          <input type="number" name="quantity" value="1">
          <br><br>
          <button type="submit">Add to Cart</button>
        </form>
      </figcaption>
    </figure>
  </li>
<?php }
?>