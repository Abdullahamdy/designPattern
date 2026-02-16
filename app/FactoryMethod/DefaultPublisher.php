<?php

namespace App\FactoryMethod;

class DefaultPublisher extends NewsPublisherAbstract
{
    protected function createNews(): NewsInterface
    {
        return new DefaultNews();
    }
}
