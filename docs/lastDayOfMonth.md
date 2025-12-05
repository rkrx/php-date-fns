[Back to README](../README.md)

# lastDayOfMonth

Return the last day of a month for the given date. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The last day of a month

## Examples
The last day of a month for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::lastDayOfMonth(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Tue Sep 30 2014 00:00:00
```
