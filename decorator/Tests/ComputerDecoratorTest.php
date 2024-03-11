<?php

namespace Test;

use App\GPU;
use App\OLED;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptot = new Laptop();
        $laptot = new GPU($laptot);
        $this->assertSame(500, $laptot->getPrice());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptot = new Laptop();
        $laptot = new OLED($laptot);
        $this->assertSame(450, $laptot->getPrice());
    }

    public function testLaptopWithGPUWithOledScreen() {
        $laptot = new Laptop();
        $laptot = new OLED($laptot);
        $laptot = new GPU($laptot);
        $this->assertSame(550, $laptot->getPrice());
    }
}