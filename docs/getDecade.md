[Back to README](../README.md)

# getDecade

Get the decade of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The year of decade

## Examples
Which decade belongs 27 November 1942?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getDecade(date: new DateTimeImmutable('1942-11-27 00:00:00'));
// => 1940
```
