[Back to README](../README.md)

# differenceInCalendarMonths

Get the number of calendar months between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null) - The later date
- `earlierDate` (DateTimeInterface|string|int|float|null) - The earlier date

## Returns
- `int` - The number of calendar months

## Examples
How many calendar months are between 31 January 2014 and 1 September 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInCalendarMonths(
    laterDate: new DateTimeImmutable('2014-09-01 00:00:00'),
    earlierDate: new DateTimeImmutable('2014-01-31 00:00:00')
);
// => 8
```
