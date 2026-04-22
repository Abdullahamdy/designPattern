<?php

namespace App\Console\Commands;

use App\Pool\PaymentClientPool;
use Illuminate\Console\Command;


class PayWithPool extends Command
{
    protected $signature = 'pay:with-pool';

    public function handle(PaymentClientPool $pool)
    {
        echo "=== WITH POOL ===\n";

        $start = microtime(true);

        for ($i = 1; $i <= 3; $i++) {
            echo "---- iteration {$i}\n";

            $client = $pool->acquire();
            $client->pay(100);
            $pool->release($client);
        }

        $time = microtime(true) - $start;
        echo "⏱ Total Time: {$time} seconds\n";
    }
}
