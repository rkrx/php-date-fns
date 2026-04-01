[Back to README](../README.md)

# addMinutes

Add the specified number of minutes to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Add 30 minutes to 10 July 2014 12:00:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addMinutes(date: new DateTimeImmutable('2014-07-10 12:00:00'), amount: 30);
// => Thu Jul 10 2014 12:30:00
```
