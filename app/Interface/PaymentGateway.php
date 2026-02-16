<?php

namespace App\Interface;

interface PaymentGateway
{
    public function pay(float $amount);
    public function generateInvoice();
    public function refund();
}
