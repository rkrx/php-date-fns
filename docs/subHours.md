[Back to README](../README.md)

# subHours

Subtract the specified number of hours from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Subtract 2 hours from 11 July 2014 01:00:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subHours(new DateTimeImmutable('2014-07-11 01:00:00'), 2);
// => Thu Jul 10 2014 23:00:00
```
