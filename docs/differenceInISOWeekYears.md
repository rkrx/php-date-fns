[Back to README](../README.md)

# differenceInISOWeekYears

Get the number of full ISO week-numbering years between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null) - The later date
- `earlierDate` (DateTimeInterface|string|int|float|null) - The earlier date

## Returns
- `int` - The number of full ISO week-numbering years

## Examples
How many full ISO week-numbering years are between 1 January 2010 and 1 January 2012?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInISOWeekYears(
  new DateTimeImmutable('2012-01-01 00:00:00'),
  new DateTimeImmutable('2010-01-01 00:00:00')
);
// => 1
```
