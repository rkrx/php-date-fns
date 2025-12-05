[Back to README](../README.md)

# eachHourOfInterval

Return the array of hours within the specified time interval.



## Parameters
- `interval` (array)
- `options` (array)

## Returns
- `array`

## Examples
Each hour between 6 October 2014, 12:00 and 6 October 2014, 15:00
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachHourOfInterval([
    'start' => new DateTimeImmutable('2014-10-06 12:00:00'),
    'end' => new DateTimeImmutable('2014-10-06 15:00:00')
]);;
// => [
//   Mon Oct 06 2014 12:00:00,
//   Mon Oct 06 2014 13:00:00,
//   Mon Oct 06 2014 14:00:00,
//   Mon Oct 06 2014 15:00:00;
// ]
```
