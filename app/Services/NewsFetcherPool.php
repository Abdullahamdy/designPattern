<?php

namespace App\Services;

class NewsFetcherPool
{
    private array $available = [];
    private array $inUse = [];

    public function acquire(): HeavyNewsFetcher
    {
        if (empty($this->available)) {
            $fetcher = new HeavyNewsFetcher();
        } else {
            $fetcher = array_pop($this->available);
        }

        $this->inUse[spl_object_id($fetcher)] = $fetcher;
        return $fetcher;
    }

    public function release(HeavyNewsFetcher $fetcher): void
    {
        $id = spl_object_id($fetcher);
        unset($this->inUse[$id]);
        $this->available[] = $fetcher;
    }
}
