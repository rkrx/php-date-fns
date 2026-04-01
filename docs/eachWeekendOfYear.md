[Back to README](../README.md)

# eachWeekendOfYear

Get all the Saturdays and Sundays in the year.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given year

## Returns
- `array`

## Examples
Lists all Saturdays and Sundays in the year
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachWeekendOfYear(date: new DateTimeImmutable('2020-02-01 00:00:00'));
// => [
//   Sat Jan 03 2020 00:00:00,
//   Sun Jan 04 2020 00:00:00,
//   ...
//   Sun Dec 27 2020 00:00:00;
// ]
]
```
