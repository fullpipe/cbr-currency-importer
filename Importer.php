<?php

namespace Fullpipe\CbrCurrency;

class Importer
{
    private $dataUrl = 'http://www.cbr.ru/scripts/XML_daily.asp';

    /**
     * Import currencies from CBR.
     *
     * @return array<CurrencyInterface>
     */
    public function import()
    {
        /* @var \SimpleXMLElement */
        $xmlData = simplexml_load_file($this->dataUrl);
        $imports = array();

        /* @var $valute \SimpleXMLElement*/
        foreach ($xmlData->xpath('/ValCurs/Valute') as $valute) {
            $code = (string) $valute->CharCode;
            $value = doubleval(str_replace(',', '.', $valute->Value));
            $nominal = (int) $valute->Nominal;

            $imports[] = new Currency($code, $value / $nominal);
        }

        return $imports;
    }
}
