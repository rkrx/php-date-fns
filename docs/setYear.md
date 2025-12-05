[Back to README](../README.md)

# setYear

Set the year to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `year` (int) - The year of the new date

## Returns
- `DateTimeImmutable` - The new date with the year set

## Examples
Set year 2013 to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setYear(new DateTimeImmutable('2014-09-01 00:00:00'), 2013);
// => Sun Sep 01 2013 00:00:00
```
