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