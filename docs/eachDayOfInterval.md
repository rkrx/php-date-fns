[Back to README](../README.md)

# eachDayOfInterval

Return the array of dates within the specified time interval.



## Parameters
- `interval` (array)
- `options` (array)

## Returns
- `array`

## Examples
Each day between 6 October 2014 and 10 October 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachDayOfInterval([
    'start' => new DateTimeImmutable('2014-10-06 00:00:00'),
    'end' => new DateTimeImmutable('2014-10-10 00:00:00')
]);
// => [
//   Mon Oct 06 2014 00:00:00,
//   Tue Oct 07 2014 00:00:00,
//   Wed Oct 08 2014 00:00:00,
//   Thu Oct 09 2014 00:00:00,
//   Fri Oct 10 2014 00:00:00;
// ]
```
