[Back to README](../README.md)

# getHours

Get the hours of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
Get the hours of 29 February 2012 11:45:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getHours(date: new DateTimeImmutable('2012-02-29 11:45:00'));
// => 11
```
