[Back to README](../README.md)

# endOfISOWeek

Return the end of an ISO week for the given date. The result will be in the local timezone.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The original date

## Returns
- `DateTimeImmutable` - The end of an ISO week

## Examples
The end of an ISO week for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfISOWeek(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Sun Sep 07 2014 23:59:59.999
```
