[Back to README](../README.md)

# isThisHour

Is the given date in the same hour as now?



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
If now is 25 September 2014 18:30:15.500, is 25 September 2014 18:00:00 in this hour?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisHour(date: new DateTimeImmutable('2014-09-25 18:00:00'));
// => true
```
