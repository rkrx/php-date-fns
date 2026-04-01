[Back to README](../README.md)

# isFriday

Is the given date Friday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is Friday

## Examples
Is 26 September 2014 Friday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isFriday(date: new DateTimeImmutable('2014-09-26 00:00:00'));
// => true
```
