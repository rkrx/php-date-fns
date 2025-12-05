[Back to README](../README.md)

# previousFriday

When is the previous Friday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The previous Friday

## Examples
When is the previous Friday before Jun, 19, 2021?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousFriday(new DateTimeImmutable('2021-06-19 00:00:00'));
// => Fri June 18 2021 00:00:00
```
