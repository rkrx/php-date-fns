[Back to README](../README.md)

# endOfDay

Return the end of a day for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `DateTimeImmutable`

## Examples
The end of a day for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfDay(date: new DateTimeImmutable('2014-09-02 11:55:00'));
// => Tue Sep 02 2014 23:59:59.999
```
