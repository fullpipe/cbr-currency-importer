<?php

namespace Fullpipe\CbrCurrency;

/**
 * CurrencyInterface.
 */
interface CurrencyInterface
{
    /**
     * Get currency exchange rate.
     *
     * @return double
     */
    public function getExchangeRate();

    /**
     * Get currency code.
     *
     * @return string
     */
    public function getCode();
}
