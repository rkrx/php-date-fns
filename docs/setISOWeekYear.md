[Back to README](../README.md)

# setISOWeekYear

Set the ISO week-numbering year to the given date, saving the week number and the weekday number.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `isoYear` (int)

## Returns
- `DateTimeImmutable` - The new date with the ISO week-numbering year set

## Examples
Set ISO week-numbering year 2007 to 29 December 2008:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setISOWeekYear(date: new DateTimeImmutable('2008-12-29 00:00:00'), isoYear: 2007);
// => Mon Jan 01 2007 00:00:00
```
