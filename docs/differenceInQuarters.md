[Back to README](../README.md)

# differenceInQuarters

Get the number of quarters between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float|null)
- `earlierDate` (DateTimeInterface|string|int|float|null)
- `options` (array)

## Returns
- `int` - The number of full quarters

## Examples
How many full quarters are between 31 December 2013 and 2 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInQuarters(laterDate: new DateTimeImmutable('2014-07-02 00:00:00'), earlierDate: new DateTimeImmutable('2013-12-31 00:00:00'));
// => 2
```
