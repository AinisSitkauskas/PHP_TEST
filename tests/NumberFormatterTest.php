<?php

use App\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{

    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function setUp(): void
    {
        $this->numberFormatter = new NumberFormatter();
    }

    /**
     * @dataProvider numberProvider
     * @param float $number
     * @param string $result
     */
    public function testFormatNumber($number, $result)
    {
        $this->assertSame($result, $this->numberFormatter->formatNumber($number));
    }

    /**
     * @return array
     */
    public function numberProvider(): array
    {

        return array(
            [2835779, '2.84M'],
            [999500, '1.00M'],
            [535216, '535K'],
            [99950, '100K'],
            [27533.78, '27 534'],
            [999.99, '999.99'],
            [999.9999, '1 000'],
            [533.1, '533.10'],
            [66.6666, '66.67'],
            [12.00, '12'],
            [-2835779, '-2.84M'],
            [-999500, '-1.00M'],
            [-535216, '-535K'],
            [-99950, '-100K'],
            [-27533.78, '-27 534'],
            [-999.99, '-999.99'],
            [-999.9999, '-1 000'],
            [-533.1, '-533.10'],
            [-66.6666, '-66.67'],
            [-12.00, '-12']

        );

    }


}
