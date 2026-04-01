[Back to README](../README.md)

# intervalToDuration

Convert two dates into a duration array.



## Parameters
- `start` (DateTimeInterface|string|int)
- `end` (DateTimeInterface|string|int)

## Returns
- `array`

## Examples
Get the duration between January 15, 1929 and April 4, 1968.
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::intervalToDuration(
    start: new DateTimeImmutable('1929-01-15 12:00:00'),
    end: new DateTimeImmutable('1968-04-04 19:05:00')
);
// => [
//   'years' => 39,
//   'months' => 2,
//   'days' => 20,
//   'hours' => 7,
//   'minutes' => 5,
// ]
```
