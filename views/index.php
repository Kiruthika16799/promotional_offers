<?php
session_start();
include '../config.php';
include '../includes/functions.php';

$products = $_SESSION['products'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Offers</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
    <h1>Product Offers</h1>
    <div class="product-list">
        <?php foreach ($products as $product){ ?>
            <div class="product-item">
                <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>"  class="product-image">
                <h2><?php echo $product['name']; ?></h2>
                <p>Price: $<?php echo $product['price']; ?></p>
                <?php if (isOfferActive($product['offer'])){ ?>
                    <p class="offer-tag">Offer Available!</p>
                    <p>Discounted Price: $<?php echo getDiscountedPrice($product['price'], $product['offer']['discount_percentage']); ?></p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>
