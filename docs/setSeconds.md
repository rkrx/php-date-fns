[Back to README](../README.md)

# setSeconds

Set the seconds to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `seconds` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set 45 seconds to 1 September 2014 11:30:40:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setSeconds(new DateTimeImmutable('2014-09-01 11:30:40'), 45);
// => Mon Sep 01 2014 11:30:45
```
