<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use tryserverless\Api\BottlePack;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bottles = (int) $_POST["bottles"];
    $packSizes = $_POST["packSizes"];
    $result = (new BottlePack())->calculateBottlePacks($bottles, $packSizes);

    header("Content-Type: application/json");
    echo json_encode($result);
}
