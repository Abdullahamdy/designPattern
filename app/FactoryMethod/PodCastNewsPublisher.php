<?php

namespace App\FactoryMethod;

use App\FactoryMethod\contracts\NewsInterface;
use App\FactoryMethod\NewsTypes\PodCastNews;

class PodCastNewsPublisher extends NewsPublisherAbstract
{
    public function createNews(): NewsInterface
    {
        return new PodCastNews();
    }
}
