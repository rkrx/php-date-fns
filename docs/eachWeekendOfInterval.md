[Back to README](../README.md)

# eachWeekendOfInterval

Return the array of weekends within the specified time interval.



## Parameters
- `start` (DateTimeInterface|string|int)
- `end` (DateTimeInterface|string|int)

## Returns
- `array`

## Examples
Lists all Saturdays and Sundays in the given date interval
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachWeekendOfInterval(
    start: new DateTimeImmutable('2018-09-17 00:00:00'),
    end: new DateTimeImmutable('2018-09-30 00:00:00')
);
// => [
//   Sat Sep 22 2018 00:00:00,
//   Sun Sep 23 2018 00:00:00,
//   Sat Sep 29 2018 00:00:00,
//   Sun Sep 30 2018 00:00:00;
// ]
```
