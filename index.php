<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contrivance</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="./images/Logo.png">
  <script src="./script.js" defer></script>
</head>

<body>
  <header>
    <nav>
      <div class="title">
        <mark id="Contrivance">Contrivance&trade;</mark>
      </div>
      <div class="navigation">
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./contact.php">Contact</a></li>
          <li><a href="./cart.php">Cart</a></li>
        </ul>
      </div>
    </nav>
    <div class="banner">
      <div class="tb">
        <p>Unleash style with our unique <em><strong>contrivances</strong></em></p>
        <p>We offer a carefully curated selection of <em><strong>stylish</strong></em> clothing for both men and women.
        </p>
        <p>Elevate your style with a smile, make each moment <em><strong>worthwhile</strong></em></p>
      </div>
      <img src="./images/wave.gif" alt="kanagawa-wave" width="400px">
    </div>
  </header>
  <marquee behavior="scroll" direction="left">· Don't forget to use our promo code <kbd>CONTRIVE10</kbd> for a 10%
    discount on your first purchase · Get a chance to win a Macbook for every purchase for a limited time only! ·
    Available in variety of sizes! XS, S, M, L, & XL, order now! · </marquee>
  <main>
    <div class="lineup">
      <h1><small>Featured Lineup</small></h1>
      <input class="search-bar" type="search" onkeyup="filterProducts()" id="search-box" placeholder="Find a product to buy" class="search-bar">
    </div>
    <ul id="product-list">
      <?php include('./products.php') ?>
    </ul>

  </main>
  <footer>
    <blockquote>
      <p class="true">True Style Never Dies</p>
      <cite>--Drareg & Contrivance</cite>
      <p>&copy; 2023 Contrivance&trade; All Rights Reserved</p>
    </blockquote>
    <address>
      <h3>Address</h3>
      <p class="addr">123 Somewhere St. Brgy 69</p>
      <p class="addr">Lucban, Quezon</p>
      <p class="addr">Zip Code 4328</p>
      <p class="addr">Office Hours: 9am - 5pm</p>
    </address>
    <div class="bLinks">
      <ul>
        <li><a class="af" href="#">FAQ</a></li>
        <li><a class="af" href="#">Redeem</a></li>
        <li><a class="af" href="#">Customer Support</a></li>
        <li><a class="af" href="#">Email Us</a></li>
      </ul>
    </div>
    <div class="bLinks">
      <ul>
        <li><a class="af" href="#">Facebook</a></li>
        <li><a class="af" href="#">Instagram</a></li>
        <li><a class="af" href="#">Twitter</a></li>
      </ul>
    </div>
  </footer>
</body>

</html>