[Back to README](../README.md)

# setDate

Set the day of the month to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `day` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set the 30th day of the month to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setDate(new DateTimeImmutable('2014-09-01 00:00:00'), 30);
// => Tue Sep 30 2014 00:00:00
```
