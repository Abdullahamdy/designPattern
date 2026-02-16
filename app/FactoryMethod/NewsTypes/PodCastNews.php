<?php

namespace App\FactoryMethod\NewsTypes;

use App\FactoryMethod\contracts\NewsInterface;

class PodCastNews implements NewsInterface
{
    public function render(): string
    {
        return "PodCast News";
    }
}
