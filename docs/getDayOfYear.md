[Back to README](../README.md)

# getDayOfYear

Get the day of the year for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
Which day of the year is 2 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getDayOfYear(date: new DateTimeImmutable('2014-07-02 00:00:00'));
// => 183
```
