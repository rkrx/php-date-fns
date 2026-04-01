[Back to README](../README.md)

# endOfQuarter

Return the end of a year quarter for the given date. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The end of a quarter

## Examples
The end of a quarter for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfQuarter(date: new DateTimeImmutable('2014-09-02 11:55:00'));
// => Tue Sep 30 2014 23:59:59.999
```
