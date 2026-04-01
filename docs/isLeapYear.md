[Back to README](../README.md)

# isLeapYear

Is the given date in the leap year?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is in the leap year

## Examples
Is 1 September 2012 in the leap year?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isLeapYear(date: new DateTimeImmutable('2012-09-01 00:00:00'));
// => true
```
