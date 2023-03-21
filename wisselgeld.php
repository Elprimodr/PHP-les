<?php

$amount = $argv[1];
define('MONEY_UNITS', [50.0, 20.0, 10.0, 5.0, 2.0, 1.0, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01]);
$restAmount = $amount;


function calculateRest(float $unit, float $amount): float
{
    $bills = floor(round($amount / $unit, 2));
    if ($bills >= 1) {
        echo printChange($bills, $unit);
    }
    return $amount - round($bills * $unit, 2);
}

function printChange(int $bills, float $unit): string
{
    return"$bills x " . (($unit < 1.0) ?
    $unit * 100 . " cent" :
    $unit . " euro") . PHP_EOL;
}

try {
    if ($restAmount == 0) {
        echo "Geen wisselgeld";
    }
    if ($restAmount <= 0) {
        echo "Input moet een positief getal zijn"; 
    } elseif (is_numeric($restAmount)) {
        $restAmount = floatval($restAmount);
        foreach (MONEY_UNITS as $unit) {
            round($restAmount = calculateRest($unit, $restAmount));
        }
    } else {
            throw new Exception("Geen wisselgeld");
    }
} catch (Exception $ex) {
        echo $ex->getMessage() . PHP_EOL;
}
?>