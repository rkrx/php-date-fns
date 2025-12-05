[Back to README](../README.md)

# closestTo

Return a date from the array closest to the given date.



## Parameters
- `dateToCompare` (DateTimeInterface|string|int|null)
- `dates` (array)

## Returns
- `DateTimeInterface|null`

## Examples
Which date is closer to 6 September 2015: 1 January 2000 or 1 January 2030?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$dateToCompare = new DateTimeImmutable('2015-09-06 00:00:00');
$result = DateFns::closestTo(dateToCompare, [
    
  new DateTimeImmutable('2000-01-01 00:00:00'),
  new DateTimeImmutable('2030-01-01 00:00:00')
]);
// => Tue Jan 01 2030 00:00:00
```
