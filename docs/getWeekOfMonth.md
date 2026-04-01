[Back to README](../README.md)

# getWeekOfMonth

Get the week of the month of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
Which week of the month is 9 November 2017?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getWeekOfMonth(date: new DateTimeImmutable('2017-11-09 00:00:00'));
// => 2
```
