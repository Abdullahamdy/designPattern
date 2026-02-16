<?php

namespace App\FactoryMethod\NewsTypes;

use App\FactoryMethod\contracts\NewsInterface;

class DefaultNews implements NewsInterface
{
    public function render(): string
    {
        return "Default News";
    }
}
