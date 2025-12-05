[Back to README](../README.md)

# addQuarters

Add the specified number of year quarters to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of quarters to be added.

## Returns
- `DateTimeImmutable` - The new date with the quarters added

## Examples
Add 1 quarter to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addQuarters(new DateTimeImmutable('2014-09-01 00:00:00'), 1);
//=; Mon Dec 01 2014 00:00:00
```
