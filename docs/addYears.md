[Back to README](../README.md)

# addYears

Add the specified number of years to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of years to be added.

## Returns
- `DateTimeImmutable` - The new date with the years added

## Examples
Add 5 years to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addYears(date: new DateTimeImmutable('2014-09-01 00:00:00'), amount: 5);
// => Sun Sep 01 2019 00:00:00
```
