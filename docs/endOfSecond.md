[Back to README](../README.md)

# endOfSecond

Return the end of a second for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `DateTimeImmutable`

## Examples
The end of a second for 1 December 2014 22:15:45.400:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfSecond(new DateTimeImmutable('2014-12-01 22:15:45'));
// => Mon Dec 01 2014 22:15:45.999
```
