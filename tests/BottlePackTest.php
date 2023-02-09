<?php

declare(strict_types=1);

namespace tryserverless\Tests\Unit\Api;

use tryserverless\Api\BottlePack;
use PHPUnit\Framework\TestCase;

final class BottlePackTest extends TestCase
{
    public function testCalculateBottlePacks() : void
    {
        $bottlePack = new BottlePack();
        
        $bottles = 0;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 0, '6' => 0, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 1;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 0, '6' => 0, '3' => 1];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 3;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 0, '6' => 0, '3' => 1];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 4;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 0, '6' => 1, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 6;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 0, '6' => 1, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 9;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 1, '6' => 0, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 12;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 1, '6' => 0, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 15;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 1, '6' => 0, '3' => 1];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);

        $bottles = 16;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 1, '6' => 1, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);

        $bottles = 18;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 1, '6' => 1, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
      
        $bottles = 21;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 2, '6' => 0, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);

        $bottles = 25;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 2, '6' => 0, '3' => 1];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);

        $bottles = 35;
        $packSizes = [12, 6, 3];
        $expected = ['12' => 3, '6' => 0, '3' => 0];
        $this->assertEquals($bottlePack->calculateBottlePacks($bottles, $packSizes), $expected);
    }
}
