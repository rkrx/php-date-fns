[Back to README](../README.md)

# subQuarters

Subtract the specified number of year quarters from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to be changed
- `amount` (int) - The amount of quarters to be subtracted.

## Returns
- `DateTimeImmutable` - The new date with the quarters subtracted

## Examples
Subtract 3 quarters from 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subQuarters(new DateTimeImmutable('2014-09-01 00:00:00'), 3);
// => Sun Dec 01 2013 00:00:00
```
