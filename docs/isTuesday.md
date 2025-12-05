[Back to README](../README.md)

# isTuesday

Is the given date Tuesday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is Tuesday

## Examples
Is 23 September 2014 Tuesday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isTuesday(new DateTimeImmutable('2014-09-23 00:00:00'));
// => true
```
