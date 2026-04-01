[Back to README](../README.md)

# addHours

Add the specified number of hours to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Add 2 hours to 10 July 2014 23:00:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addHours(date: new DateTimeImmutable('2014-07-10 23:00:00'), amount: 2);
// => Fri Jul 11 2014 01:00:00
```
