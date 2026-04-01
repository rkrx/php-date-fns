[Back to README](../README.md)

# getYear

Get the year of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The year

## Examples
Which year is 2 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getYear(date: new DateTimeImmutable('2014-07-02 00:00:00'));
// => 2014
```
