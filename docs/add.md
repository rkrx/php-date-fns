[Back to README](../README.md)

# add

Add the specified years, months, weeks, days, hours, minutes and seconds to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|null)
- `duration` (array)

## Returns
- `DateTimeInterface`

## Examples
Add the following duration to 1 September 2014, 10:19:50
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::add(new DateTimeImmutable('2014-09-01 10:19:50'), [
    'years' => 2,
    'months' => 9,
    'weeks' => 1,
    'days' => 7,
    'hours' => 5,
    'minutes' => 9,
    'seconds' => 30,
]);
// => Thu Jun 15 2017 15:29:20
```
