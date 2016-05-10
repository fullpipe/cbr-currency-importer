<?php

namespace Fullpipe\CbrCurrency;

use Fullpipe\CbrCurrency\Exception\CurrencyNotDefinedException;

class Converter
{
    /**
     * @var CurrencyInterface
     */
    private $from;

    /**
     * @var CurrencyInterface
     */
    private $to;

    /**
     * Constructor.
     *
     * @param CurrencyInterface $from
     * @param CurrencyInterface $to
     */
    public function __construct(CurrencyInterface $from = null, CurrencyInterface $to = null)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * Get from currency.
     *
     * @return CurrencyInterface
     */
    public function getFrom()
    {
        if (null === $this->from) {
            throw new CurrencyNotDefinedException();
        }

        return $this->from;
    }

    /**
     * Set from currency.
     *
     * @param CurrencyInterface $from
     */
    public function setFrom(CurrencyInterface $from)
    {
        $this->from = $from;
    }

    /**
     * Get to currency.
     *
     * @return CurrencyInterface
     */
    public function getTo()
    {
        if (null === $this->to) {
            throw new CurrencyNotDefinedException();
        }

        return $this->to;
    }

    /**
     * Set to currency.
     *
     * @param CurrencyInterface $to
     */
    public function setTo(CurrencyInterface $to)
    {
        $this->to = $to;
    }

    /**
     * Convert.
     *
     * @param number $amount
     *
     * @return float
     */
    public function convert($amount)
    {
        $fromRate = $this->getFrom()->getExchangeRate();
        $toRate = $this->getTo()->getExchangeRate();

        return $amount * $fromRate / $toRate;
    }
}
