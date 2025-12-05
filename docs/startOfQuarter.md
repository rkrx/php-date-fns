[Back to README](../README.md)

# startOfQuarter

Return the start of a year quarter for the given date. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The start of a quarter

## Examples
The start of a quarter for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfQuarter(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Tue Jul 01 2014 00:00:00
```
