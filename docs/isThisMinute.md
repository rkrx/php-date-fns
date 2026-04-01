[Back to README](../README.md)

# isThisMinute

Is the given date in the same minute as now?



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
If now is 25 September 2014 18:30:15.500, is 25 September 2014 18:30:00 in this minute?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisMinute(date: new DateTimeImmutable('2014-09-25 18:30:00'));
// => true
```
