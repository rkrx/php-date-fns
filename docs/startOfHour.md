[Back to README](../README.md)

# startOfHour

Return the start of an hour for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `DateTimeImmutable`

## Examples
The start of an hour for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfHour(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Tue Sep 02 2014 11:00:00
```
