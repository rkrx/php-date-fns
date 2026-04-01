[Back to README](../README.md)

# getMilliseconds

Get the milliseconds of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
Get the milliseconds of 29 February 2012 11:45:05.123:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getMilliseconds(date: new DateTimeImmutable('2012-02-29 11:45:05'));
// => 123
```
