[Back to README](../README.md)

# differenceInCalendarQuarters

Get the number of calendar quarters between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null) - The later date
- `earlierDate` (DateTimeInterface|string|int|float|null) - The earlier date

## Returns
- `int` - The number of calendar quarters

## Examples
How many calendar quarters are between 31 December 2013 and 2 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInCalendarQuarters(
    laterDate: new DateTimeImmutable('2014-07-02 00:00:00'),
    earlierDate: new DateTimeImmutable('2013-12-31 00:00:00')
);
// => 3
```
