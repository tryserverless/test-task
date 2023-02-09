<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bottles = $_POST["bottles"];
    $packSizes = $_POST["packSizes"];
    $result = calculateBottlePacks($bottles, $packSizes);

    header("Content-Type: application/json");
    echo json_encode($result);
}

function calculateBottlePacks($bottles, $packSizes) {
    $result = [];

    foreach ($packSizes as $packSize) {
        $result[$packSize] = floor($bottles / $packSize);
        $bottles %= $packSize;
        if ($bottles > next($packSizes)) {
            $result[$packSize]++;
            $bottles = 0;
        }
    }

    return $result;
}
