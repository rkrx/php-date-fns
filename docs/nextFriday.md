[Back to README](../README.md)

# nextFriday

When is the next Friday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The next Friday

## Examples
When is the next Friday after Mar, 22, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextFriday(date: new DateTimeImmutable('2020-03-22 00:00:00'));
// => Fri Mar 27 2020 00:00:00
```
