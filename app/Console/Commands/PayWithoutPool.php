<?php

namespace App\Console\Commands;

use App\Pool\PaymentGatewayClient;
use Illuminate\Console\Command;

class PayWithoutPool extends Command
{
    protected $signature = 'pay:without-pool';

    public function handle()
    {
        echo "=== WITHOUT POOL ===\n";

        $start = microtime(true);

        for ($i = 1; $i <= 3; $i++) {
            echo "---- iteration {$i}\n";
            $client = new PaymentGatewayClient();
            $client->pay(100);
        }

        $time = microtime(true) - $start;
        echo "⏱ Total Time: {$time} seconds\n";
    }
}
