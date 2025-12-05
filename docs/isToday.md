[Back to README](../README.md)

# isToday

Is the given date today?



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
If today is 6 October 2014, is 6 October 14:00:00 today?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isToday(new DateTimeImmutable('2014-10-06 14:00:00'));
// => true
```
