[Back to README](../README.md)

# subBusinessDays

Subtract the specified number of business days from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Subtract 10 business days from 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subBusinessDays(date: new DateTimeImmutable('2014-09-01 00:00:00'), amount: 10);
// => Mon Aug 18 2014 00:00:00 (skipped weekend days)
```
