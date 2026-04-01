[Back to README](../README.md)

# subYears

Subtract the specified number of years from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of years to be subtracted.

## Returns
- `DateTimeImmutable` - The new date with the years subtracted

## Examples
Subtract 5 years from 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subYears(date: new DateTimeImmutable('2014-09-01 00:00:00'), amount: 5);
// => Tue Sep 01 2009 00:00:00
```
