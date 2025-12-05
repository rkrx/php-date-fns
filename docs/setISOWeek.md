[Back to README](../README.md)

# setISOWeek

Set the ISO week to the given date, saving the weekday number.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `week` (int) - The ISO week of the new date

## Returns
- `DateTimeImmutable` - The new date with the ISO week set

## Examples
Set the 53rd ISO week to 7 August 2004:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setISOWeek(new DateTimeImmutable('2004-08-07 00:00:00'), 53);
// => Sat Jan 01 2005 00:00:00
```
