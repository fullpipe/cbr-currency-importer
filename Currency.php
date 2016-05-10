<?php

namespace Fullpipe\CbrCurrency;

class Currency implements CurrencyInterface
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var double
     */
    protected $exchangeRate;

    /**
     * Constructor.
     *
     * @param string $code
     * @param double  $exchangeRate
     */
    public function __construct($code, $exchangeRate)
    {
        $this->code = $code;
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }
}
