[Back to README](../README.md)

# getDay

Get the day of the week of the given date (0 = Sunday).



## Parameters
- `date` (DateTimeInterface|string|int|float|null)

## Returns
- `int`

## Examples
Which day of the week is 29 February 2012?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getDay(new DateTimeImmutable('2012-02-29 00:00:00'));
// => 3
```
