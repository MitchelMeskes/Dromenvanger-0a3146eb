<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;

$hoeveel = readline();

if (!is_numeric($hoeveel)) {
    echo "Alleen nummer's!";
    exit;
}

$alles = array();

for ($i = 0; $i < $hoeveel; $i++) {
    echo "Wat is je naam:\n";
    $naam = readline();

    echo "Hoeveel dromen ga je opgeven?:\n";
    $hdroom = readline();
    $hd = [];
    if (!is_numeric($hdroom)) {
        echo "Alleen nummer's!";
        exit;
    }

    for ($j = 1; $j <= $hdroom; $j++) {
        echo "Wat is je droom?:\n";
        $droom = readline();
        $hd[] = $droom;
    }
    $alles[$naam] = $hd;
}

foreach ($alles as $naam => $gether) {
    foreach ($gether as $gether => $bijelkaar) {

        echo "$naam heeft dit als droom: $bijelkaar\n";
    }
}