[Back to README](../README.md)

# differenceInCalendarISOWeeks

Get the number of calendar ISO weeks between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null) - The later date
- `earlierDate` (DateTimeInterface|string|int|float|null) - The earlier date

## Returns
- `int` - The number of calendar ISO weeks

## Examples
How many calendar ISO weeks are between 6 July 2014 and 21 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInCalendarISOWeeks(
  new DateTimeImmutable('2014-07-21 00:00:00'),
  new DateTimeImmutable('2014-07-06 00:00:00'),
);
// => 3
```
