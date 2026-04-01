[Back to README](../README.md)

# subISOWeekYears

Subtract the specified number of ISO week-numbering years from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of ISO week-numbering years to be subtracted.

## Returns
- `DateTimeImmutable` - The new date with the ISO week-numbering years subtracted

## Examples
Subtract 5 ISO week-numbering years from 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subISOWeekYears(date: new DateTimeImmutable('2014-09-01 00:00:00'), amount: 5);
// => Mon Aug 31 2009 00:00:00
```
