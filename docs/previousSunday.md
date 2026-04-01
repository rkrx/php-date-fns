[Back to README](../README.md)

# previousSunday

When is the previous Sunday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The previous Sunday

## Examples
When is the previous Sunday before Jun, 21, 2021?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousSunday(date: new DateTimeImmutable('2021-06-21 00:00:00'));
// => Sun June 20 2021 00:00:00
```
