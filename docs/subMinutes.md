[Back to README](../README.md)

# subMinutes

Subtract the specified number of minutes from the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Subtract 30 minutes from 10 July 2014 12:00:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::subMinutes(date: new DateTimeImmutable('2014-07-10 12:00:00'), amount: 30);
// => Thu Jul 10 2014 11:30:00
```
