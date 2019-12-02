<?php

declare(strict_types=1);

namespace App;


class MoneyFormatter
{

    /**
     * @var NumberFormatter
     */
    private $numberFormatter;


    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    /**
     * @param float $number
     * @return string
     */
    public function formatEur(float $number): string
    {
        return $this->numberFormatter->formatNumber($number) . ' €';
    }

    /**
     * @param float $number
     * @return string
     */
    public function formatUsd(float $number): string
    {
        return '$' . $this->numberFormatter->formatNumber($number);
    }
}
