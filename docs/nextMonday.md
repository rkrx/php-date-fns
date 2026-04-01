[Back to README](../README.md)

# nextMonday

When is the next Monday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The next Monday

## Examples
When is the next Monday after Mar, 22, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextMonday(date: new DateTimeImmutable('2020-03-22 00:00:00'));
// => Mon Mar 23 2020 00:00:00
```
