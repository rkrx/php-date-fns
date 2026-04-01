[Back to README](../README.md)

# differenceInSeconds

Get the number of seconds between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
How many seconds are between 2 July 2014 12:30:07.999 and 2 July 2014 12:30:20.000?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInSeconds(
    laterDate: new DateTimeImmutable('2014-07-02 12:30:20'),
    earlierDate: new DateTimeImmutable('2014-07-02 12:30:07')
);
// => 12
```
