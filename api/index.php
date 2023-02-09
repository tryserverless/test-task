<?php

declare(strict_types=1);

use tryserverless\Api\BottlePack;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bottles = $_POST["bottles"];
    $packSizes = $_POST["packSizes"];
    $result = (new BottlePack())->calculateBottlePacks($bottles, $packSizes);

    header("Content-Type: application/json");
    echo json_encode($result);
}
