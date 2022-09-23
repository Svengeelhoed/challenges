<?php
$iphprice = readline("Hoe duur is de iPhone?");
$samprice = readline("Hoe duur is de samsung?");

if ($iphprice >  $samprice) {
    echo "de iPhone is het duurst, de telefoon kost " .  $iphprice . " euro" . PHP_EOL;
    echo "de Samsung is het goedkoopst, de telefoon kost " .  $samprice . " euro" . PHP_EOL;
}   else {
    echo "de Samsung is het duurst, de telefoon kost " .  $samprice . " euro" . PHP_EOL;
    echo "de iPhone is het goedkoopst, de telefoon kost " . $samprice . " euro" . PHP_EOL;
}

if ($iphprice - $samprice <= 50) {
    echo "Het advies is dus om de iPhone te kopen, omdat het minder dan 50 euro duurder is dan de Samsung.";
}   else {
    echo "Het advies is dus om de Samsung te kopen, omdat het meer dan 50 euro goedkoper is dan de iPhone.";
}

?>