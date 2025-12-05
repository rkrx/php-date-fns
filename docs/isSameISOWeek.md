[Back to README](../README.md)

# isSameISOWeek

Are the given dates in the same ISO week (and year)?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float|null)
- `dateRight` (DateTimeInterface|string|int|float|null)

## Returns
- `bool` - The dates are in the same ISO week (and year)

## Examples
Are 1 September 2014 and 7 September 2014 in the same ISO week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameISOWeek(new DateTimeImmutable('2014-09-01 00:00:00'), new DateTimeImmutable('2014-09-07 00:00:00'));
// => true
```

Are 1 September 2014 and 1 September 2015 in the same ISO week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameISOWeek(new DateTimeImmutable('2014-09-01 00:00:00'), new DateTimeImmutable('2015-09-01 00:00:00'));
// => false
```
