[Back to README](../README.md)

# eachWeekOfInterval

Return the array of weeks within the specified time interval.



## Parameters
- `start` (DateTimeInterface|string|int)
- `end` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `array`

## Examples
Each week within interval 6 October 2014 - 23 November 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachWeekOfInterval(
    start: new DateTimeImmutable('2014-10-06 00:00:00'),
    end: new DateTimeImmutable('2014-11-23 00:00:00')
);
// => [
//   Sun Oct 05 2014 00:00:00,
//   Sun Oct 12 2014 00:00:00,
//   Sun Oct 19 2014 00:00:00,
//   Sun Oct 26 2014 00:00:00,
//   Sun Nov 02 2014 00:00:00,
//   Sun Nov 09 2014 00:00:00,
//   Sun Nov 16 2014 00:00:00,
//   Sun Nov 23 2014 00:00:00;
// ]
```
