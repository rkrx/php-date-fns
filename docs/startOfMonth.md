[Back to README](../README.md)

# startOfMonth

Return the start of a month for the given date. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The start of a month

## Examples
The start of a month for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfMonth(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Mon Sep 01 2014 00:00:00
```
