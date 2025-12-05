[Back to README](../README.md)

# eachMinuteOfInterval

Return the array of minutes within the specified time interval.



## Parameters
- `interval` (array)
- `options` (array)

## Returns
- `array`

## Examples
Each minute between 14 October 2020, 13:00 and 14 October 2020, 13:03
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachMinuteOfInterval([
    'start' => new DateTimeImmutable('2014-10-14 13:00:00'),
    'end' => new DateTimeImmutable('2014-10-14 13:03:00')
]);
// => [
//   Wed Oct 14 2014 13:00:00,
//   Wed Oct 14 2014 13:01:00,
//   Wed Oct 14 2014 13:02:00,
//   Wed Oct 14 2014 13:03:00;
// ]
```
