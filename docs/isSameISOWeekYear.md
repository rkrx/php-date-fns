[Back to README](../README.md)

# isSameISOWeekYear

Are the given dates in the same ISO week-numbering year?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float|null)
- `dateRight` (DateTimeInterface|string|int|float|null)

## Returns
- `bool` - The dates are in the same ISO week-numbering year

## Examples
Are 29 December 2003 and 2 January 2005 in the same ISO week-numbering year?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameISOWeekYear(dateLeft: new DateTimeImmutable('2003-12-29 00:00:00'), dateRight: new DateTimeImmutable('2005-01-02 00:00:00'));
// => true
```
