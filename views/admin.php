<?php
session_start();
include '../config.php';

$products = $_SESSION['products'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
    <h1>Admin Panel - Manage Offers</h1>
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <form method="post" action="../save_offer.php">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" value="<?php echo $product['offer']['start_date']; ?>"><br>
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" value="<?php echo $product['offer']['end_date']; ?>"><br>
                    <label for="start_time">Start Time:</label>
                    <input type="time" name="start_time" value="<?php echo $product['offer']['start_time']; ?>"><br>
                    <label for="end_time">End Time:</label>
                    <input type="time" name="end_time" value="<?php echo $product['offer']['end_time']; ?>"><br>
                    <label for="discount_percentage">Discount Percentage:</label>
                    <input type="number" name="discount_percentage" value="<?php echo $product['offer']['discount_percentage']; ?>"><br>
                    <button type="submit">Save Offer</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
