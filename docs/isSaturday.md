[Back to README](../README.md)

# isSaturday

Is the given date Saturday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is Saturday

## Examples
Is 27 September 2014 Saturday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSaturday(date: new DateTimeImmutable('2014-09-27 00:00:00'));
// => true
```
