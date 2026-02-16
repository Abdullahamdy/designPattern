<?php

namespace App\Interface;

interface PaymentGatewayInterfaceFactory
{
    public function create(): PaymentGateway;
}
