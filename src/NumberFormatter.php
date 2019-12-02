<?php

declare(strict_types=1);

namespace App;


class NumberFormatter
{
    /**
     * @var string
     */
    private $result;

    /**
     * @param float $number
     * @return string
     */
    public function formatNumber(float $number): string
    {

        if (abs($number) < 999.995) {
            $number = round($number, 2);
            if ($number - floor($number) == 0) {
                $this->result = number_format($number, 0, '.', '');
            } else {
                $this->result = number_format($number, 2, '.', '');
            }

        } elseif (abs($number) < 99950) {
            $this->result = number_format($number, 0, '.', ' ');

        } elseif (abs($number) < 999500) {
            $this->result = number_format($number / 1000, 0, '.', '') . 'K';

        } else {
            $this->result = number_format($number / 1000000, 2, '.', '') . 'M';
        }

        return $this->result;
    }
}
