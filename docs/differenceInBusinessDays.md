[Back to README](../README.md)

# differenceInBusinessDays

Get the number of business days between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
How many business days are between 10 January 2014 and 20 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInBusinessDays(
  new DateTimeImmutable('2014-07-20 00:00:00'),
  new DateTimeImmutable('2014-01-10 00:00:00')
);
// => 136

// How many business days are between
// 30 November 2021 and 1 November 2021?
$result = DateFns::differenceInBusinessDays(
  new DateTimeImmutable('2021-11-30 00:00:00'),
  new DateTimeImmutable('2021-11-01 00:00:00')
);
// => 21

// How many business days are between
// 1 November 2021 and 1 December 2021?
$result = DateFns::differenceInBusinessDays(
  new DateTimeImmutable('2021-11-01 00:00:00'),
  new DateTimeImmutable('2021-12-01 00:00:00')
);
// => -22

// How many business days are between
// 1 November 2021 and 1 November 2021 ?
$result = DateFns::differenceInBusinessDays(
  new DateTimeImmutable('2021-11-01 00:00:00'),
  new DateTimeImmutable('2021-11-01 00:00:00')
);
// => 0
```
