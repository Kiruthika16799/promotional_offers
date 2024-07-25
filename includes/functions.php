<?php
function isOfferActive($offer){
    $currentDate = date('Y-m-d');
    $currentTime = date('H:i');

    if ($currentDate >= $offer['start_date'] && $currentDate <= $offer['end_date']) {
        if ($currentTime >= $offer['start_time'] && $currentTime <= $offer['end_time']) {
            return true;
        }
    }
    return false;
}

function getDiscountedPrice($price, $discount) {
    return $price - ($price * ($discount / 100));
}
?>