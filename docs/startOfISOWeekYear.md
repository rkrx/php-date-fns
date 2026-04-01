[Back to README](../README.md)

# startOfISOWeekYear

Return the start of an ISO week-numbering year, which always starts 3 days before the year's first Thursday. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The start of an ISO week-numbering year

## Examples
The start of an ISO week-numbering year for 2 July 2005:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfISOWeekYear(date: new DateTimeImmutable('2005-07-02 00:00:00'));
// => Mon Jan 03 2005 00:00:00
```
