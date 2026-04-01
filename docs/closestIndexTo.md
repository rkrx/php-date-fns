[Back to README](../README.md)

# closestIndexTo

Return an index of the closest date from the given dates comparing to the given date.



## Parameters
- `dateToCompare` (DateTimeInterface|string|int|null)
- `dates` (DateTimeInterface|string|int|null, variadic)

## Returns
- `int|null`

## Examples
PHP does not support repeated named arguments for variadic parameters, so this example uses positional variadic arguments.

Which date is closer to 6 September 2015?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$dateToCompare = new DateTimeImmutable('2015-09-06 00:00:00');
$result = DateFns::closestIndexTo(
  $dateToCompare,
  new DateTimeImmutable('2015-01-01 00:00:00'),
  new DateTimeImmutable('2016-01-01 00:00:00'),
  new DateTimeImmutable('2017-01-01 00:00:00')
);
// => 1
```
