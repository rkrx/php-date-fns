[Back to README](../README.md)

# getDate

Get the day of the month for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
Which day of the month is 29 February 2012?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getDate(new DateTimeImmutable('2012-02-29 00:00:00'));
// => 29
```
