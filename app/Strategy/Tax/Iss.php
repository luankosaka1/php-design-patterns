<?php
/**
 * @author      Webjump Core Team <dev@webjump.com.br>
 * @copyright   2021 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace App\Strategy\Tax;

use App\Strategy\Quote;

class Iss implements Tax
{
    public function calc(Quote $quote): float
    {
        return $quote->value * 0.05;
    }
}