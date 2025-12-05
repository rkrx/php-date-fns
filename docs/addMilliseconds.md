[Back to README](../README.md)

# addMilliseconds

Add the specified number of milliseconds to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Add 750 milliseconds to 10 July 2014 12:45:30.000:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addMilliseconds(new DateTimeImmutable('2014-07-10 12:45:30'), 750);
// => Thu Jul 10 2014 12:45:30.750
```
