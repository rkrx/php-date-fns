[Back to README](../README.md)

# startOfDay

Return the start of a day for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `DateTimeImmutable`

## Examples
The start of a day for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfDay(date: new DateTimeImmutable('2014-09-02 11:55:00'));
// => Tue Sep 02 2014 00:00:00
```
