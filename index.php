<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use App\{NumberFormatter,MoneyFormatter};

$number = new MoneyFormatter(new NumberFormatter());

echo $number ->formatEur(-999.00);
