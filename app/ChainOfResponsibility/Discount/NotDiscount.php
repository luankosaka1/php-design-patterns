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

class NotDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    function calc(Quote $quote): float
    {
        return 0;
    }
}