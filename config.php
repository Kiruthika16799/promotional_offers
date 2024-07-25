<?php
session_start();

$products = [
    [
        "id" => 1,
        "image" => "../assets/img/1.webp",
        "name" => "Booyah | Birthday Greeting Card",
        "price" => 100,
        "offer" => [
            "start_date" => "2024-07-25",
            "end_date" => "2024-07-30",
            "start_time" => "00:00",
            "end_time" => "23:00",
            "discount_percentage" => 10
        ]
    ],
    [
        "id" => 2,
        "image" => "../assets/img/2.webp",
        "name" => "Fantastaco Birthday | Greeting Card",
        "price" => 150,
        "offer" => [
            "start_date" => "2024-07-29",
            "end_date" => "2024-07-30",
            "start_time" => "00:00",
            "end_time" => "23:00",
            "discount_percentage" => 15
        ]
    ],
    [
        "id" => 3,
        "image" => "../assets/img/3.webp",
        "name" => "Regalia Greeting Cards",
        "price" => 125,
        "offer" => [
            "start_date" => "2024-07-29",
            "end_date" => "2024-07-30",
            "start_time" => "00:00",
            "end_time" => "23:00",
            "discount_percentage" => 15
        ]
    ],
    [
        "id" => 4,
        "image" => "../assets/img/4.avif",
        "name" => "AC Thank You - Greeting Card",
        "price" => 110,
        "offer" => [
            "start_date" => "2024-07-25",
            "end_date" => "2024-07-30",
            "start_time" => "00:00",
            "end_time" => "23:00",
            "discount_percentage" => 10
        ]
    ],
    [
        "id" => 5,
        "image" => "../assets/img/5.webp",
        "name" => "AC Good Luck - Greeting Card",
        "price" => 100,
        "offer" => [
            "start_date" => "2024-07-29",
            "end_date" => "2024-07-30",
            "start_time" => "00:00",
            "end_time" => "23:00",
            "discount_percentage" => 15
        ]
    ],
    [
        "id" => 6,
        "image" => "../assets/img/6.avif",
        "name" => "Sneck Yeah - Greeting Card",
        "price" => 150,
        "offer" => [
            "start_date" => "2024-07-25",
            "end_date" => "2024-07-30",
            "start_time" => "11:00",
            "end_time" => "12:00",
            "discount_percentage" => 15
        ]
    ]
];

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = $products;
}
?>
