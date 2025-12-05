[Back to README](../README.md)

# isThisYear

Is the given date in the same year as the current date?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is in this year

## Examples
If today is 25 September 2014, is 2 July 2014 in this year?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisYear(new DateTimeImmutable('2014-07-02 00:00:00'));
// => true
```
