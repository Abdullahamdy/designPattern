<?php

namespace App\FactoryMethod;

use App\FactoryMethod\contracts\NewsInterface;
use App\FactoryMethod\NewsTypes\InfoGraphic;

class InfoGraphicPublisher extends NewsPublisherAbstract
{
    public function createNews(): NewsInterface
    {
        return new InfoGraphic();
    }
}
