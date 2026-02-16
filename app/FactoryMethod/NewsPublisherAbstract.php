<?php

namespace App\FactoryMethod;

use App\FactoryMethod\contracts\NewsInterface;

abstract class NewsPublisherAbstract
{
    abstract protected function createNews(): NewsInterface;

    public function publish(): string
    {
        $news = $this->createNews();
        return 'Publishing ' . $news->render();
    }
}
