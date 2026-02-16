<?php

namespace App\FactoryMethod;

use App\FactoryMethod\contracts\NewsInterface;
use App\FactoryMethod\NewsTypes\LFIINews;

class LFIINewsPublisher extends NewsPublisherAbstract
{
    public function createNews(): NewsInterface
    {
        return new LFIINews();
    }
}
