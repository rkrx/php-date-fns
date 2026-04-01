[Back to README](../README.md)

# previousThursday

When is the previous Thursday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The previous Thursday

## Examples
When is the previous Thursday before Jun, 18, 2021?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousThursday(date: new DateTimeImmutable('2021-06-18 00:00:00'));
// => Thu June 17 2021 00:00:00
```
