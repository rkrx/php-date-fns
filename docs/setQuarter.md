[Back to README](../README.md)

# setQuarter

Set the year quarter to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `quarter` (int) - The quarter of the new date

## Returns
- `DateTimeImmutable` - The new date with the quarter set

## Examples
Set the 2nd quarter to 2 July 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setQuarter(new DateTimeImmutable('2014-07-02 00:00:00'), 2);
// => Wed Apr 02 2014 00:00:00
```
