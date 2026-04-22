<?php

namespace App\Pool;

class PaymentGatewayClient
{
    public function __construct()
    {
        echo "🆕 PaymentGatewayClient constructor called\n";
        sleep(1); // simulate heavy init
    }

    public function pay(int $amount): void
    {
        echo "💸 Paid {$amount}\n";
    }
}
