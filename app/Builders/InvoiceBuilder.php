<?php

namespace App\Builders;

use App\Builders\Invoice;

class InvoiceBuilder
{
    private string $customerName = '';
    private array $lineItems = [];
    private float $tax = 0;
    private float $discount = 0;
    private string $currency = 'USD';
    private string $status = 'unpaid';
    private ?string $notes = null;
    private array $meta = [];

    // setter fluent
    public function customer(string $customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }
    public function addItem(string $name, int $quantity, float $price): self
    {
        $this->lineItems[] = [
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price,
            'subtotal' => $quantity * $price
        ];
        return $this;
    }
    public function tax(float $tax): self
    {
        $this->tax = $tax;
        return $this;
    }

    public function discount(float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }
    public function currency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function status(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function notes(string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }
    public function meta(array $meta): self
    {
        $this->meta = $meta;
        return $this;
    }

    private function calculateTotal(): float
    {
        $subtotal = array_sum(array_column($this->lineItems, 'subtotal'));
        $total = $subtotal + $this->tax - $this->discount;
        return $total > 0 ? $total : 0;
    }

    public function build(): Invoice
    {
        return new Invoice(
            customerName: $this->customerName,
            lineItems: $this->lineItems,
            tax: $this->tax,
            discount: $this->discount,
            currency: $this->currency,
            total: $this->calculateTotal(),
            status: $this->status,
            notes: $this->notes,
            meta: $this->meta
        );
    }
}
