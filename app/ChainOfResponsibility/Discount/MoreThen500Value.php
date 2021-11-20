<?php
/**
 * @author      Webjump Core Team <dev@webjump.com.br>
 * @copyright   2021 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace App\ChainOfResponsibility\Discount;

use App\Quote;

class MoreThen500Value extends Discount
{
    function calc(Quote $quote): float
    {
        if ($quote->value > 500) {
            return $quote->value * 0.1;
        }

        return $this->nextDiscount->calc($quote);
    }
}