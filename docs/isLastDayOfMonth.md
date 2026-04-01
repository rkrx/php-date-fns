[Back to README](../README.md)

# isLastDayOfMonth

Is the given date the last day of a month?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is the last day of a month

## Examples
Is 28 February 2014 the last day of a month?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isLastDayOfMonth(date: new DateTimeImmutable('2014-02-28 00:00:00'));
// => true
```
