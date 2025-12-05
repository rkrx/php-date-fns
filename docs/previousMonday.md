[Back to README](../README.md)

# previousMonday

When is the previous Monday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The previous Monday

## Examples
When is the previous Monday before Jun, 18, 2021?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousMonday(new DateTimeImmutable('2021-06-18 00:00:00'));
// => Mon June 14 2021 00:00:00
```
