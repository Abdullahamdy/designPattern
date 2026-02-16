<?php

namespace App\FactoryMethod;

use App\FactoryMethod\contracts\NewsInterface;
use App\FactoryMethod\NewsTypes\DefaultNews;

class DefaultNewsPublisher extends NewsPublisherAbstract
{
    public function createNews(): NewsInterface
    {
        return new DefaultNews();
    }
}
