<?php

return [
    'publishers' => [
        'default' => App\FactoryMethod\DefaultNewsPublisher::class,
        'lfii' => App\FactoryMethod\LFIINewsPublisher::class,
        'info' => App\FactoryMethod\InfoGraphicPublisher::class,
        'podcast' => App\FactoryMethod\PodCastNewsPublisher::class,
    ],
];
