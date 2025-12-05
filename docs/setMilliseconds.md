[Back to README](../README.md)

# setMilliseconds

Set the milliseconds to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `milliseconds` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set 300 milliseconds to 1 September 2014 11:30:40.500:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setMilliseconds(new DateTimeImmutable('2014-09-01 11:30:40'), 300);
// => Mon Sep 01 2014 11:30:40.300
```
