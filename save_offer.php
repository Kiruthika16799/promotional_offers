<?php
session_start();
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['product_id'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $startTime = $_POST['start_time'];
    $endTime = $_POST['end_time'];
    $discountPercentage = $_POST['discount_percentage'];

    $products = $_SESSION['products'];

    foreach ($products as &$product) {
        if ($product['id'] == $productId) {
            $product['offer'] = [
                'start_date' => $startDate,
                'end_date' => $endDate,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'discount_percentage' => $discountPercentage
            ];
            break;
        }
    }

    $_SESSION['products'] = $products;

    $_SESSION['success_message'] = "Offer successfully saved for " . $product['name'];

    header('Location: ../views/admin.php');
    exit();
}
?>
