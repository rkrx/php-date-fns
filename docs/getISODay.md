[Back to README](../README.md)

# getISODay

Get ISO day of week (1 = Monday, 7 = Sunday).



## Parameters
- `date` (DateTimeInterface|string|int|float|null)

## Returns
- `int`

## Examples
Which day of the ISO week is 26 February 2012?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getISODay(date: new DateTimeImmutable('2012-02-26 00:00:00'));
// => 7
```
