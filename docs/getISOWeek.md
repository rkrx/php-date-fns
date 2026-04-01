[Back to README](../README.md)

# getISOWeek

Get the ISO week of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The given date

## Returns
- `int` - The ISO week

## Examples
Which week of the ISO-week numbering year is 2 January 2005?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getISOWeek(date: new DateTimeImmutable('2005-01-02 00:00:00'));
// => 53
```
