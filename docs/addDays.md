[Back to README](../README.md)

# addDays

Add the specified number of days to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Add 10 days to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addDays(date: new DateTimeImmutable('2014-09-01 00:00:00'), amount: 10);
// => Thu Sep 11 2014 00:00:00
```
