[Back to README](../README.md)

# getMonth

Get the month of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The month index (0-11)

## Examples
Which month is 29 February 2012?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getMonth(date: new DateTimeImmutable('2012-02-29 00:00:00'));
// => 1
```
