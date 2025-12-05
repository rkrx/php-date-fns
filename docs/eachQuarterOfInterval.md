[Back to README](../README.md)

# eachQuarterOfInterval

Return the array of quarters within the specified time interval.



## Parameters
- `interval` (array)
- `options` (array)

## Returns
- `array`

## Examples
Each quarter within interval 6 February 2014 - 10 August 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachQuarterOfInterval([
    'start' => new DateTimeImmutable('2014-02-06 00:00:00'),
    'end' => new DateTimeImmutable('2014-08-10 00:00:00'),
]);
// => [
//   Wed Jan 01 2014 00:00:00,
//   Tue Apr 01 2014 00:00:00,
//   Tue Jul 01 2014 00:00:00,;
// ]
```
