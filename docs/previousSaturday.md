[Back to README](../README.md)

# previousSaturday

When is the previous Saturday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The previous Saturday

## Examples
When is the previous Saturday before Jun, 20, 2021?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousSaturday(new DateTimeImmutable('2021-06-20 00:00:00'));
// => Sat June 19 2021 00:00:00
```
