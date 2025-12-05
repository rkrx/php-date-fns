[Back to README](../README.md)

# subDays

Subtract the specified number of days from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Subtract 10 days from 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subDays(new DateTimeImmutable('2014-09-01 00:00:00'), 10);
// => Fri Aug 22 2014 00:00:00
```
