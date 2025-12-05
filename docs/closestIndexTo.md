[Back to README](../README.md)

# closestIndexTo

Return an index of the closest date from the array comparing to the given date.



## Parameters
- `dateToCompare` (DateTimeInterface|string|int|null)
- `dates` (array)

## Returns
- `int|null`

## Examples
Which date is closer to 6 September 2015?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$dateToCompare = new DateTimeImmutable('2015-09-06 00:00:00');
$datesArray = [
  new DateTimeImmutable('2015-01-01 00:00:00'),
  new DateTimeImmutable('2016-01-01 00:00:00'),
  new DateTimeImmutable('2017-01-01 00:00:00')
]
$result = DateFns::closestIndexTo(dateToCompare, datesArray);
// => 1
```
