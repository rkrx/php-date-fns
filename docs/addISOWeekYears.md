[Back to README](../README.md)

# addISOWeekYears

Add the specified number of ISO week-numbering years to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of ISO week-numbering years to be added.

## Returns
- `DateTimeImmutable` - The new date with the ISO week-numbering years added

## Examples
Add 5 ISO week-numbering years to 2 July 2010:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addISOWeekYears(new DateTimeImmutable('2010-07-02 00:00:00'), 5);
// => Fri Jun 26 2015 00:00:00
```
