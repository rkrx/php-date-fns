[Back to README](../README.md)

# lastDayOfDecade

Return the last day of a decade for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The last day of a decade

## Examples
The last day of a decade for 21 December 2012 21:12:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::lastDayOfDecade(date: new DateTimeImmutable('2012-12-21 21:12:00'));
// => Wed Dec 31 2019 00:00:00
```
