<?php

namespace App\Strategy\Tax;

use App\Quote;

interface Tax
{
    public function calc(Quote $quote): float;
}