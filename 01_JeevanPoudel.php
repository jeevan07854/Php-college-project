
<!-- 01. Develop a PHP program for an online store. If a user's cart total is over $100, apply a
10% discount; if it's over $50, apply a 5% discount; otherwise, no discount. Display the
final amount to be paid. -->


<?php


function finalprice($amount){

    $finalamount=$amount;
    if($amount >100){
        $finalamount *=0.90;
    }
    elseif($amount > 50){
$finalamount *= 0.95;}
    return $finalamount;
}

$amount=60;
$calculatedfinalamount = finalprice($amount);

echo ("Total Amount = $". $calculatedfinalamount);



?>