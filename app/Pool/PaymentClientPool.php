<?php

namespace App\Pool;

class PaymentClientPool
{
    private array $availableClients = [];

    public function acquire(): PaymentGatewayClient
    {
        if (empty($this->availableClients)) {
            echo "No available clients, creating new one\n";
            return new PaymentGatewayClient();
        } else {
            return array_pop($this->availableClients);
        }
    }

    public function release(PaymentGatewayClient $client): void
    {
        $this->availableClients[] = $client;
    }
}
