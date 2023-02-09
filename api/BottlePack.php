<?php

declare(strict_types=1);

namespace tryserverless\Api;

class BottlePack
{
    public function calculateBottlePacks(int $bottles, array $packSizes): array
    {
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
}
