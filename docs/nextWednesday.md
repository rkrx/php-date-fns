[Back to README](../README.md)

# nextWednesday

When is the next Wednesday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The next Wednesday

## Examples
When is the next Wednesday after Mar, 22, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextWednesday(date: new DateTimeImmutable('2020-03-22 00:00:00'));
// => Wed Mar 25 2020 00:00:00
```
