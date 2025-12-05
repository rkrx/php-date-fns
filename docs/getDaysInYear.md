[Back to README](../README.md)

# getDaysInYear

Get the number of days in a year of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The number of days in a year

## Examples
How many days are in 2012?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getDaysInYear(new DateTimeImmutable('2012-01-01 00:00:00'));
// => 366
```
