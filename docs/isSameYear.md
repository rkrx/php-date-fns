[Back to README](../README.md)

# isSameYear

Are the given dates in the same year?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float|null)
- `dateRight` (DateTimeInterface|string|int|float|null)

## Returns
- `bool` - The dates are in the same year

## Examples
Are 2 September 2014 and 25 September 2014 in the same year?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameYear(new DateTimeImmutable('2014-09-02 00:00:00'), new DateTimeImmutable('2014-09-25 00:00:00'));
// => true
```
