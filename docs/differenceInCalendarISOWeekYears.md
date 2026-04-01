[Back to README](../README.md)

# differenceInCalendarISOWeekYears

Get the number of calendar ISO week-numbering years between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null) - The later date
- `earlierDate` (DateTimeInterface|string|int|float|null) - The earlier date

## Returns
- `int` - The number of calendar ISO week-numbering years

## Examples
How many calendar ISO week-numbering years are 1 January 2010 and 1 January 2012?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInCalendarISOWeekYears(
    laterDate: new DateTimeImmutable('2012-01-01 00:00:00'),
    earlierDate: new DateTimeImmutable('2010-01-01 00:00:00')
);
// => 2
```
