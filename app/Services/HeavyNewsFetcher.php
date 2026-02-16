<?php

namespace App\Services;

class HeavyNewsFetcher
{
    public function __construct()
    {
        logger()->info("HeavyNewsFetcher Created at " . now());
        usleep(500000);
    }

    public function fetch(string $source): array
    {
        logger()->info("Fetching news from $source at " . now());
        return [
            'type' => 'HeavyNewsFetcher',
            'source' => $source,
            'title' => "Breaking News from " . strtoupper($source),
            'time' => now()->toDateTimeString(),
        ];
    }
}
