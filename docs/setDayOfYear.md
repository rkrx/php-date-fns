[Back to README](../README.md)

# setDayOfYear

Set the day of the year to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `dayOfYear` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set the 2nd day of the year to 2 July 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setDayOfYear(new DateTimeImmutable('2014-07-02 00:00:00'), 2);
// => Thu Jan 02 2014 00:00:00
```
