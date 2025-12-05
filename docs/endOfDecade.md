[Back to README](../README.md)

# endOfDecade

Return the end of a decade for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The end of a decade

## Examples
The end of a decade for 12 May 1984 00:00:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfDecade(new DateTimeImmutable('1984-05-12 00:00:00'));
// => Dec 31 1989 23:59:59.999
```
