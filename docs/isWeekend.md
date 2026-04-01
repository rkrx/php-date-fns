[Back to README](../README.md)

# isWeekend

Does the given date fall on a weekend? A weekend is either Saturday (6) or Sunday (0).



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check

## Returns
- `bool` - The date falls on a weekend

## Examples
Does 5 October 2014 fall on a weekend?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isWeekend(date: new DateTimeImmutable('2014-10-05 00:00:00'));
// => true
```
