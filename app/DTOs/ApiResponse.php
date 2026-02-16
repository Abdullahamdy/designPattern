<?php

namespace App\DTOs;

class ApiResponse
{
    public function __construct(
        public bool $status,
        public string $message,
        public mixed $data = null,
        public array $meta = [],
        public array $errors = [],
    ){}

    public function toArray(){
        return [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data,
            'meta' => $this->meta,
            'errors' => $this->errors,
        ];
    }
}
