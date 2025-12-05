[Back to README](../README.md)

# subWeeks

Subtract the specified number of weeks from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Subtract 4 weeks from 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subWeeks(new DateTimeImmutable('2014-09-01 00:00:00'), 4);
// => Mon Aug 04 2014 00:00:00
```
