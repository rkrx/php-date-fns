[Back to README](../README.md)

# startOfDecade

Return the start of a decade for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The start of a decade

## Examples
The start of a decade for 21 October 2015 00:00:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfDecade(date: new DateTimeImmutable('2015-10-21 00:00:00'));
// => Jan 01 2010 00:00:00
```
