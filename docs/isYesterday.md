[Back to README](../README.md)

# isYesterday

Is the given date yesterday?



## Parameters
- `date` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
If today is 6 October 2014, is 5 October 14:00:00 yesterday?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isYesterday(new DateTimeImmutable('2014-10-05 14:00:00'));
// => true
```
