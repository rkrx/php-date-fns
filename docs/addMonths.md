[Back to README](../README.md)

# addMonths

Add the specified number of months to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of months to be added.

## Returns
- `DateTimeImmutable` - The new date with the months added

## Examples
Add 5 months to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addMonths(date: new DateTimeImmutable('2014-09-01 00:00:00'), amount: 5);
// => Sun Feb 01 2015 00:00:00

// Add one month to 30 January 2023:
$result = DateFns::addMonths(date: new DateTimeImmutable('2023-01-30 00:00:00'), amount: 1);
// => Tue Feb 28 2023 00:00:00
```
