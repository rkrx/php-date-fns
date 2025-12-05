[Back to README](../README.md)

# formatRelative

Represent the date in words relative to the given base date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `baseDate` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `string`

## Examples
Represent the date of 6 days ago in words relative to the given base date. In this example, today is Wednesday
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatRelative(DateFns::subDays(new DateTimeImmutable(), 6), new DateTimeImmutable());
// => "last Thursday at 12:45 AM"
```
