<?php

namespace App\Builders;

use App\DTOs\ApiResponse;

class ApiResponseBuilder
{
    private bool $status = true;
    private string $message = '';
    private mixed $data = null;
    private array $meta = [];
    private array $errors = [];

    public function success(): self
    {
        $this->status = true;
        return $this;
    }

    public function failed(): self
    {
        $this->status = false;
        return $this;
    }

    public function message(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function data(mixed $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function meta(array $meta): self
    {
        $this->meta = $meta;
        return $this;
    }

    public function errors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    public function build(): ApiResponse
    {
        return new ApiResponse(
            $this->status,
            $this->message,
            $this->data,
            $this->meta,
            $this->errors
        );
    }
}
