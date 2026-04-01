[Back to README](../README.md)

# isSameQuarter

Are the given dates in the same quarter (and year)?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float|null)
- `dateRight` (DateTimeInterface|string|int|float|null)

## Returns
- `bool` - The dates are in the same quarter (and year)

## Examples
Are 1 January 2014 and 8 March 2014 in the same quarter?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameQuarter(dateLeft: new DateTimeImmutable('2014-01-01 00:00:00'), dateRight: new DateTimeImmutable('2014-03-08 00:00:00'));
// => true
```

Are 1 January 2014 and 1 January 2015 in the same quarter?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameQuarter(dateLeft: new DateTimeImmutable('2014-01-01 00:00:00'), dateRight: new DateTimeImmutable('2015-01-01 00:00:00'));
// => false
```
