[Back to README](../README.md)

# sub

Subtract the specified years, months, weeks, days, hours, minutes and seconds from the given date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `duration` (array)

## Returns
- `DateTimeImmutable`

## Examples
Subtract the following duration from 15 June 2017 15:29:20
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::sub(new DateTimeImmutable('2017-06-15 15:29:20'), [
    'years' => 2,
    'months' => 9,
    'weeks' => 1,
    'days' => 7,
    'hours' => 5,
    'minutes' => 9,
    'seconds' => 30
]);
// => Mon Sep 1 2014 10:19:50
```
