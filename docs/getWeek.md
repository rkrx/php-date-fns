[Back to README](../README.md)

# getWeek

Return the week number for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
Which week of the local week numbering year is 2 January 2005 with default options?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getWeek(date: new DateTimeImmutable('2005-01-02 00:00:00'));
// => 2
```

Which week of the local week numbering year is 2 January 2005, if Monday is the first day of the week, and the first week of the year always contains 4 January?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getWeek(
    date: new DateTimeImmutable('2005-01-02 00:00:00'),
    options: [
        'weekStartsOn' => 1,
        'firstWeekContainsDate' => 4
        ]
);
// => 53
```
