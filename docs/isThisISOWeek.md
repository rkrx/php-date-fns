[Back to README](../README.md)

# isThisISOWeek

Is the given date in the same ISO week as the current date?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is in this ISO week

## Examples
If today is 25 September 2014, is 22 September 2014 in this ISO week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisISOWeek(new DateTimeImmutable('2014-09-22 00:00:00'));
// => true
```
