[Back to README](../README.md)

# clamp

Return a date bounded by the start and the end of the given interval.



## Parameters
- `date` (DateTimeInterface|string|int)
- `interval` (array)

## Returns
- `DateTimeImmutable`

## Examples
What is Mar 21, 2021 bounded to an interval starting at Mar 22, 2021 and ending at Apr 01, 2021
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::clamp(new DateTimeImmutable('2021-03-21 00:00:00'), [
    'start' => new DateTimeImmutable('2021-03-22 00:00:00'),
    'end' => new DateTimeImmutable('2021-04-01 00:00:00'),
]);
// => Mon Mar 22 2021 00:00:00
```
