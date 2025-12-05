[Back to README](../README.md)

# getISOWeekYear

Get the ISO week-numbering year of the given date, which always starts 3 days before the year's first Thursday.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The ISO week-numbering year

## Examples
Which ISO-week numbering year is 2 January 2005?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getISOWeekYear(new DateTimeImmutable('2005-01-02 00:00:00'));
// => 2004
```
