[Back to README](../README.md)

# isSunday

Is the given date Sunday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is Sunday

## Examples
Is 21 September 2014 Sunday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSunday(date: new DateTimeImmutable('2014-09-21 00:00:00'));
// => true
```
