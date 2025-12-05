[Back to README](../README.md)

# getDaysInMonth

Get the number of days in a month of the given date, considering the context if provided.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The number of days in a month

## Examples
How many days are in February 2000?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getDaysInMonth(new DateTimeImmutable('2000-02-01 00:00:00'));
// => 29
```
