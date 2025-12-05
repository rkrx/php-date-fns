[Back to README](../README.md)

# addBusinessDays

Add the specified number of business days (Mon-Fri) to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Add 10 business days to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addBusinessDays(new DateTimeImmutable('2014-09-01 00:00:00'), 10);
// => Mon Sep 15 2014 00:00:00 (skipped weekend days)
```
