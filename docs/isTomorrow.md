[Back to README](../README.md)

# isTomorrow

Is the given date tomorrow?



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
If today is 6 October 2014, is 7 October 14:00:00 tomorrow?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isTomorrow(date: new DateTimeImmutable('2014-10-07 14:00:00'));
// => true
```
