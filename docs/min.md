[Back to README](../README.md)

# min

Returns the earliest of the given dates.



## Parameters
- `datesArray` (array)

## Returns
- `DateTimeImmutable`

## Examples
Which of these dates is the earliest?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::min([
  new DateTimeImmutable('1989-07-10 00:00:00'),
  new DateTimeImmutable('1987-02-11 00:00:00'),
  new DateTimeImmutable('1995-07-02 00:00:00'),
  new DateTimeImmutable('1990-01-01 00:00:00')
]);
// => Wed Feb 11 1987 00:00:00
```
