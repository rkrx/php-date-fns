[Back to README](../README.md)

# getQuarter

Get the year quarter of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The quarter

## Examples
Which quarter is 2 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getQuarter(new DateTimeImmutable('2014-07-02 00:00:00'));
// => 3
```
