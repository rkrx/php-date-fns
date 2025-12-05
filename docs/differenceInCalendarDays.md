[Back to README](../README.md)

# differenceInCalendarDays

Get the number of calendar days between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
How many calendar days are between 2 July 2011 23:00:00 and 2 July 2012 00:00:00?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInCalendarDays(
  new DateTimeImmutable('2012-07-02 00:00:00'),
  new DateTimeImmutable('2011-07-02 23:00:00')
);
// => 366
// How many calendar days are between
// 2 July 2011 23:59:00 and 3 July 2011 00:01:00?
$result = DateFns::differenceInCalendarDays(
  new DateTimeImmutable('2011-07-03 00:01:00'),
  new DateTimeImmutable('2011-07-02 23:59:00')
);
// => 1
```
