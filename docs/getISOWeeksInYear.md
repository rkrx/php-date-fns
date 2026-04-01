[Back to README](../README.md)

# getISOWeeksInYear

Get the number of weeks in an ISO week-numbering year of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The number of ISO weeks in a year

## Examples
How many weeks are in ISO week-numbering year 2015?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getISOWeeksInYear(date: new DateTimeImmutable('2015-02-11 00:00:00'));
// => 53
```
