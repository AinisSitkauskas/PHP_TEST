<?php

use App\MoneyFormatter;
use App\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    /**
     * @var MoneyFormatter
     */
    private $moneyFormatter;

    /**
     * @var NumberFormatter
     */
    private $numberFormatterMock;


    public function setUp(): void
    {
        $this->numberFormatterMock = $this->getNumberFormatterMock();
        $this->moneyFormatter = new MoneyFormatter($this->numberFormatterMock);
    }

    public function testFormatEur()
    {
        $this->numberFormatterMock->method('formatNumber')
            ->with(2835779)
            ->willReturn('2.84M');

        $this->assertSame('2.84M €', $this->moneyFormatter->formatEur(2835779));
    }

    public function testFormatUsd()
    {
        $this->numberFormatterMock->method('formatNumber')
            ->with(211.99)
            ->willReturn('211.99');

        $this->assertSame('$211.99', $this->moneyFormatter->formatUsd(211.99));
    }

    public function getNumberFormatterMock()
    {
        return $numberFormatterMock = $this->createMock(NumberFormatter::class);
    }
}
