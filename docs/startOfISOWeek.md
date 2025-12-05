[Back to README](../README.md)

# startOfISOWeek

Return the start of an ISO week for the given date. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The start of an ISO week

## Examples
The start of an ISO week for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfISOWeek(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Mon Sep 01 2014 00:00:00
```
