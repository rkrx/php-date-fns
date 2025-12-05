[Back to README](../README.md)

# differenceInHours

Get the number of hours between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
How many hours are between 2 July 2014 06:50:00 and 2 July 2014 19:00:00?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInHours(
  new DateTimeImmutable('2014-07-02 19:00:00'),
  new DateTimeImmutable('2014-07-02 06:50:00')
);
// => 12
```
