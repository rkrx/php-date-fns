[Back to README](../README.md)

# isWednesday

Is the given date Wednesday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is Wednesday

## Examples
Is 24 September 2014 Wednesday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isWednesday(date: new DateTimeImmutable('2014-09-24 00:00:00'));
// => true
```
