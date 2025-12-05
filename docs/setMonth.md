[Back to README](../README.md)

# setMonth

Set the month to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `month` (int) - The month index to set (0-11)

## Returns
- `DateTimeImmutable` - The new date with the month set

## Examples
Set February to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setMonth(new DateTimeImmutable('2014-09-01 00:00:00'), 1);
// => Sat Feb 01 2014 00:00:00
```
