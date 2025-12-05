[Back to README](../README.md)

# getOverlappingDaysInIntervals

Get the number of days that overlap in two time intervals.



## Parameters
- `intervalLeft` (array)
- `intervalRight` (array)

## Returns
- `int`

## Examples
For overlapping time intervals adds 1 for each started overlapping day:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::getOverlappingDaysInIntervals(
  [
    'start' => new DateTimeImmutable('2014-01-10 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-20 00:00:00') ],
  [
    'start' => new DateTimeImmutable('2014-01-17 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-21 00:00:00') ]
);
// => 3
```

For non-overlapping time intervals returns 0:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::getOverlappingDaysInIntervals(
  [
    'start' => new DateTimeImmutable('2014-01-10 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-20 00:00:00') ],
  [
    'start' => new DateTimeImmutable('2014-01-21 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-22 00:00:00') ]
);
// => 0
```
