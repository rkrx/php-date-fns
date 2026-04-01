[Back to README](../README.md)

# isThisSecond

Is the given date in the same second as now?



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
If now is 25 September 2014 18:30:15.500, is 25 September 2014 18:30:15.000 in this second?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisSecond(date: new DateTimeImmutable('2014-09-25 18:30:15'));
// => true
```
