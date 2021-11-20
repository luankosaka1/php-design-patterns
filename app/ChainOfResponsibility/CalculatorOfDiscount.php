<?php
/**
 * @author      Webjump Core Team <dev@webjump.com.br>
 * @copyright   2021 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace App\ChainOfResponsibility;

use App\ChainOfResponsibility\Discount\MoreThen5Quantity;
use App\ChainOfResponsibility\Discount\MoreThen500Value;
use App\ChainOfResponsibility\Discount\NotDiscount;
use App\ChainOfResponsibility\Discount\SemDesconto;
use App\Quote;

class CalculatorOfDiscount
{
    public function calc(Quote $quote): float
    {
        $discount = new MoreThen5Quantity(
            new MoreThen500Value(
                new NotDiscount()
            )
        );

        return $discount->calc($quote);
    }
}