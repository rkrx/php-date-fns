[Back to README](../README.md)

# eachWeekendOfMonth

Get all the Saturdays and Sundays in the given month.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given month

## Returns
- `array`

## Examples
Lists all Saturdays and Sundays in the given month
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachWeekendOfMonth(new DateTimeImmutable('2022-02-01 00:00:00'));
// => [
//   Sat Feb 05 2022 00:00:00,
//   Sun Feb 06 2022 00:00:00,
//   Sat Feb 12 2022 00:00:00,
//   Sun Feb 13 2022 00:00:00,
//   Sat Feb 19 2022 00:00:00,
//   Sun Feb 20 2022 00:00:00,
//   Sat Feb 26 2022 00:00:00,
//   Sun Feb 27 2022 00:00:00;
// ]
```
