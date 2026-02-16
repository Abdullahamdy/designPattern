<?php

namespace App\Jobs;

use App\Services\NewsFetcherPool;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FetchNewsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        protected string $source
    ) {}

    public function handle(NewsFetcherPool $pool)
    {
        logger()->info("Job started for {$this->source} at " . now());

        sleep(10);

        $fetcher = $pool->acquire();

        try {
            $news = $fetcher->fetch($this->source);
            logger()->info('Fetched news', $news);
        } finally {
            $pool->release($fetcher);
        }

        logger()->info("Job finished for {$this->source} at " . now());
    }
}
