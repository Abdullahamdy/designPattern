<?php

namespace App\Builders;

class Invoice
{
    public function __construct(
        public string $customerName,
        public array $lineItems = [],
        public float $tax = 0,
        public float $discount = 0,
        public string $currency = 'USD',
        public float $total = 0,
        public string $status = 'unpaid',
        public ?string $notes = null,
        public array $meta = []
    ) {}
}
