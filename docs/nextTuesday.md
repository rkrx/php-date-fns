[Back to README](../README.md)

# nextTuesday

When is the next Tuesday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The next Tuesday

## Examples
When is the next Tuesday after Mar, 22, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextTuesday(new DateTimeImmutable('2020-03-22 00:00:00'));
// => Tue Mar 24 2020 00:00:00
```
