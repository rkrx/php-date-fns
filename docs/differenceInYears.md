[Back to README](../README.md)

# differenceInYears

Get the number of full years between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null) - The later date
- `earlierDate` (DateTimeInterface|string|int|float|null) - The earlier date

## Returns
- `int` - The number of full years

## Examples
How many full years are between 31 December 2013 and 11 February 2015?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInYears(laterDate: new DateTimeImmutable('2015-02-11 00:00:00'), earlierDate: new DateTimeImmutable('2013-12-31 00:00:00'));
// => 1
```
