[Back to README](../README.md)

# addSeconds

Add the specified number of seconds to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `amount` (int)

## Returns
- `DateTimeImmutable`

## Examples
Add 30 seconds to 10 July 2014 12:45:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::addSeconds(new DateTimeImmutable('2014-07-10 12:45:00'), 30);
// => Thu Jul 10 2014 12:45:30
```
