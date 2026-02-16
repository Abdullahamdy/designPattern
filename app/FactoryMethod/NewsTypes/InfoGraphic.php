<?php

namespace App\FactoryMethod\NewsTypes;

use App\FactoryMethod\contracts\NewsInterface;

class InfoGraphic implements NewsInterface
{
    public function render(): string
    {
        return "InfoGraphic News";
    }
}
