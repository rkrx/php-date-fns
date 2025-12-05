[Back to README](../README.md)

# previousWednesday

When is the previous Wednesday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The previous Wednesday

## Examples
When is the previous Wednesday before Jun, 18, 2021?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousWednesday(new DateTimeImmutable('2021-06-18 00:00:00'));
// => Wed June 16 2021 00:00:00
```
