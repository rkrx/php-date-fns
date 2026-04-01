[Back to README](../README.md)

# previousTuesday

When is the previous Tuesday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The previous Tuesday

## Examples
When is the previous Tuesday before Jun, 18, 2021?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousTuesday(date: new DateTimeImmutable('2021-06-18 00:00:00'));
// => Tue June 15 2021 00:00:00
```
