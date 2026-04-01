[Back to README](../README.md)

# isMonday

Is the given date Monday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is Monday

## Examples
Is 22 September 2014 Monday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isMonday(date: new DateTimeImmutable('2014-09-22 00:00:00'));
// => true
```
