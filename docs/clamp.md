[Back to README](../README.md)

# clamp

Return a date bounded by the given minimum and maximum date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `min` (DateTimeInterface|string|int)
- `max` (DateTimeInterface|string|int)

## Returns
- `DateTimeImmutable`

## Examples
Bound a date to an explicit minimum and maximum:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::clamp(
    date: new DateTimeImmutable('2021-03-21 00:00:00'),
    min: new DateTimeImmutable('2021-03-22 00:00:00'),
    max: new DateTimeImmutable('2021-04-01 00:00:00'),
);
// => Mon Mar 22 2021 00:00:00
```
