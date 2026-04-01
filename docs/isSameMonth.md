[Back to README](../README.md)

# isSameMonth

Are the given dates in the same month (and year)?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float|null)
- `dateRight` (DateTimeInterface|string|int|float|null)

## Returns
- `bool` - The dates are in the same month (and year)

## Examples
Are 2 September 2014 and 25 September 2014 in the same month?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameMonth(dateLeft: new DateTimeImmutable('2014-09-02 00:00:00'), dateRight: new DateTimeImmutable('2014-09-25 00:00:00'));
// => true
```

Are 2 September 2014 and 25 September 2015 in the same month?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameMonth(dateLeft: new DateTimeImmutable('2014-09-02 00:00:00'), dateRight: new DateTimeImmutable('2015-09-25 00:00:00'));
// => false
```
