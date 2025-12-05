[Back to README](../README.md)

# subMonths

Subtract the specified number of months from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of months to be subtracted.

## Returns
- `DateTimeImmutable` - The new date with the months subtracted

## Examples
Subtract 5 months from 1 February 2015:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subMonths(new DateTimeImmutable('2015-02-01 00:00:00'), 5);
// => Mon Sep 01 2014 00:00:00
```
