<?php

namespace App;

class Quote
{
    public int $quantity;
    public float $value;

    /**
     * @param int $quantity
     * @param float $value
     */
    public function __construct(int $quantity, float $value)
    {
        $this->quantity = $quantity;
        $this->value = $value;
    }
}