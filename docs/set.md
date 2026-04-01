[Back to README](../README.md)

# set

Set date values to a given date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `values` (array)

## Returns
- `DateTimeImmutable`

## Examples
Transform 1 September 2014 into 20 October 2015 in a single line:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::set(
    date: new DateTimeImmutable('2014-09-20 00:00:00'),
    values: [
        'year' => 2015,
        'month' => 9,
        'date' => 20 ]
);
// => Tue Oct 20 2015 00:00:00
```

Set 12 PM to 1 September 2014 01:23:45 to 1 September 2014 12:00:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::set(
    date: new DateTimeImmutable('2014-09-01 01:23:45'),
    values: [
        'hours' => 12 ]
);
// => Mon Sep 01 2014 12:23:45
```
