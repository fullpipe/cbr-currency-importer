<?php

namespace Fullpipe\CbrCurrency\Exception;

/**
 * Exception for undefined currency.
 */
class CurrencyNotDefinedException extends \RuntimeException implements ExceptionInterface
{
    public function __construct()
    {
        parent::__construct("Currency not defined");
    }
}
