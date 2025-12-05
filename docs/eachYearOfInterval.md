[Back to README](../README.md)

# eachYearOfInterval

Return the array of years within the specified time interval.



## Parameters
- `interval` (array)
- `options` (array)

## Returns
- `array`

## Examples
Each year between 6 February 2014 and 10 August 2017:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachYearOfInterval([
    'start' => new DateTimeImmutable('2014-02-06 00:00:00'),
    'end' => new DateTimeImmutable('2017-08-10 00:00:00')
]);
// => [
//   Wed Jan 01 2014 00:00:00,
//   Thu Jan 01 2015 00:00:00,
//   Fri Jan 01 2016 00:00:00,
//   Sun Jan 01 2017 00:00:00;
// ]
```
