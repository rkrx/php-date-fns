[Back to README](../README.md)

# lastDayOfISOWeekYear

Return the last day of an ISO week-numbering year, which always starts 3 days before the year's first Thursday. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The end of an ISO week-numbering year

## Examples
The last day of an ISO week-numbering year for 2 July 2005:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::lastDayOfISOWeekYear(new DateTimeImmutable('2005-07-02 00:00:00'));
// => Sun Jan 01 2006 00:00:00
```
