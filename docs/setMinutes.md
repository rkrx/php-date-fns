[Back to README](../README.md)

# setMinutes

Set the minutes to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `minutes` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set 45 minutes to 1 September 2014 11:30:40:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setMinutes(date: new DateTimeImmutable('2014-09-01 11:30:40'), minutes: 45);
// => Mon Sep 01 2014 11:45:40
```
