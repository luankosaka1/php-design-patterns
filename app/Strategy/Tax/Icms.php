<?php

namespace App\Strategy\Tax;

use App\Quote;

class Icms implements Tax
{
    public function calc(Quote $quote): float
    {
        return $quote->value * 0.1;
    }
}