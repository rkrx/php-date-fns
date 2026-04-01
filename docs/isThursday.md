[Back to README](../README.md)

# isThursday

Is the given date Thursday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date is Thursday

## Examples
Is 25 September 2014 Thursday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThursday(date: new DateTimeImmutable('2014-09-25 00:00:00'));
// => true
```
