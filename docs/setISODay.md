[Back to README](../README.md)

# setISODay

Set the ISO day of the week (1 = Monday, 7 = Sunday).



## Parameters
- `date` (DateTimeInterface|string|int|float|null)
- `isoDay` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set Sunday to 1 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setISODay(new DateTimeImmutable('2014-09-01 00:00:00'), 7);
// => Sun Sep 07 2014 00:00:00
```
