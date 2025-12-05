[Back to README](../README.md)

# eachMonthOfInterval

Return the array of months within the specified time interval.



## Parameters
- `interval` (array)
- `options` (array)

## Returns
- `array`

## Examples
Each month between 6 February 2014 and 10 August 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::eachMonthOfInterval([
    'start' => new DateTimeImmutable('2014-02-06 00:00:00'),
    'end' => new DateTimeImmutable('2014-08-10 00:00:00')
]);
// => [
//   Sat Feb 01 2014 00:00:00,
//   Sat Mar 01 2014 00:00:00,
//   Tue Apr 01 2014 00:00:00,
//   Thu May 01 2014 00:00:00,
//   Sun Jun 01 2014 00:00:00,
//   Tue Jul 01 2014 00:00:00,
//   Fri Aug 01 2014 00:00:00;
// ]
```
