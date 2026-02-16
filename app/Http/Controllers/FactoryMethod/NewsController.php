<?php

namespace App\Http\Controllers\FactoryMethod;

use App\FactoryMethod\NewsPublisherAbstract;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function show(string $type)
    {
        $type = $this->resolvePublisher($type);
        return 'type: ' . $type->publish();
    }

    private function resolvePublisher(string $type): NewsPublisherAbstract
    {
        $publishers = config('news.publishers');
        return isset($publishers[$type])
            ?  app($publishers[$type])
            : throw new \Exception('Invalid news type');
    }
}
