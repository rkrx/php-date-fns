[Back to README](../README.md)

# getMinutes

Get the minutes of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
Get the minutes of 29 February 2012 11:45:05:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getMinutes(new DateTimeImmutable('2012-02-29 11:45:05'));
// => 45
```
