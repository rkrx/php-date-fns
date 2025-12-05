[Back to README](../README.md)

# getTime

Get the milliseconds timestamp of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
Get the timestamp of 29 February 2012 11:45:05.123:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getTime(new DateTimeImmutable('2012-02-29 11:45:05'));
// => 1330515905123
```
