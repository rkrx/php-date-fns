[Back to README](../README.md)

# nextThursday

When is the next Thursday?



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to start counting from

## Returns
- `DateTimeImmutable` - The next Thursday

## Examples
When is the next Thursday after Mar, 22, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextThursday(date: new DateTimeImmutable('2020-03-22 00:00:00'));
// => Thur Mar 26 2020 00:00:00
```
