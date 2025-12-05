[Back to README](../README.md)

# nextSunday

When is the next Sunday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The next Sunday

## Examples
When is the next Sunday after March 22, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextSunday(new DateTimeImmutable('2020-03-22 00:00:00'));
// => Sun Mar 29 2020 00:00:00
```
