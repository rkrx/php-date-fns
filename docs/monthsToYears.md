[Back to README](../README.md)

# monthsToYears

Convert a number of months to a full number of years.



## Parameters
- `months` (int) - The number of months to be converted

## Returns
- `int` - The number of months converted in years

## Examples
Convert 36 months to years:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::monthsToYears(36);
// => 3

// It uses floor rounding:
$result = DateFns::monthsToYears(40);
// => 3
```
