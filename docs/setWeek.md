[Back to README](../README.md)

# setWeek

Set the week number to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `week` (int)
- `options` (array)

## Returns
- `DateTimeImmutable`

## Examples
Set the 1st week to 2 January 2005 with default options:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setWeek(date: new DateTimeImmutable('2005-01-02 00:00:00'), week: 1);
// => Sun Dec 26 2004 00:00:00
```

Set the 1st week to 2 January 2005, if Monday is the first day of the week, and the first week of the year always contains 4 January:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setWeek(
    date: new DateTimeImmutable('2005-01-02 00:00:00'),
    week: 1,
    options: [
        'weekStartsOn' => 1,
        'firstWeekContainsDate' => 4
        ]
);
// => Sun Jan 4 2004 00:00:00
```
