[Back to README](../README.md)

# differenceInMilliseconds

Get the number of milliseconds between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
How many milliseconds are between 2 July 2014 12:30:20.600 and 2 July 2014 12:30:21.700?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInMilliseconds(
  new DateTimeImmutable('2014-07-02 12:30:21'),
  new DateTimeImmutable('2014-07-02 12:30:20')
);
// => 1100
```
