[Back to README](../README.md)

# startOfYear

Return the start of a year for the given date. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The start of a year

## Examples
The start of a year for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfYear(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Wed Jan 01 2014 00:00:00
```
