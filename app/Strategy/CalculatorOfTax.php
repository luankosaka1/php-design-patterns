<?php

namespace App\Strategy;

use App\Quote;
use App\Strategy\Tax\Tax;

class CalculatorOfTax
{
    public function calc(Quote $quote, Tax $tax): float
    {
        return $tax->calc($quote);
    }
}