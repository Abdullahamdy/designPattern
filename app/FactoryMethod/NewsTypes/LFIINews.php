<?php

namespace App\FactoryMethod\NewsTypes;

use App\FactoryMethod\contracts\NewsInterface;

class LFIINews implements NewsInterface
{
    public function render(): string
    {
        return "LFII News";
    }
}
