[Back to README](../README.md)

# setHours

Set the hours to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `hours` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set 4 hours to 1 September 2014 11:30:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setHours(new DateTimeImmutable('2014-09-01 11:30:00'), 4);
// => Mon Sep 01 2014 04:30:00
```
