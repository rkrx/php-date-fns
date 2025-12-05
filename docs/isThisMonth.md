[Back to README](../README.md)

# isThisMonth

Is the given date in the same month as the current date?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is in this month

## Examples
If today is 25 September 2014, is 15 September 2014 in this month?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisMonth(new DateTimeImmutable('2014-09-15 00:00:00'));
// => true
```
