[Back to README](../README.md)

# isFirstDayOfMonth

Is the given date the first day of a month?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is the first day of a month

## Examples
Is 1 September 2014 the first day of a month?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isFirstDayOfMonth(date: new DateTimeImmutable('2014-09-01 00:00:00'));
// => true
```
