[Back to README](../README.md)

# addWeeks

Add the specified number of weeks to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Add 4 weeks to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addWeeks(date: new DateTimeImmutable('2014-09-01 00:00:00'), amount: 4);
// => Mon Sep 29 2014 00:00:00
```
