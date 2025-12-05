[Back to README](../README.md)

# differenceInMonths

The later date



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null) - The later date
- `earlierDate` (DateTimeInterface|string|int|float|null) - The earlier date

## Returns
- `int` - The number of full months

## Examples
How many full months are between 31 January 2014 and 1 September 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInMonths(new DateTimeImmutable('2014-09-01 00:00:00'), new DateTimeImmutable('2014-01-31 00:00:00'));
// => 7
```
