[Back to README](../README.md)

# nextSaturday

When is the next Saturday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The next Saturday

## Examples
When is the next Saturday after Mar, 22, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextSaturday(date: new DateTimeImmutable('2020-03-22 00:00:00'));
// => Sat Mar 28 2020 00:00:00
```
