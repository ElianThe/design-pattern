<?php

namespace App;

class OLED extends ComputerDecorator
{

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 50;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . ' oled';
    }
}