[Back to README](../README.md)

# isSameHour

Are the given dates in the same hour?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float)
- `dateRight` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
Are 4 September 2014 06:00:00 and 4 September 06:30:00 in the same hour?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameHour(new DateTimeImmutable('2014-09-04 06:00:00'), new DateTimeImmutable('2014-09-04 06:30:00'));
// => true
```

Are 4 September 2014 06:00:00 and 5 September 06:00:00 in the same hour?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameHour(new DateTimeImmutable('2014-09-04 06:00:00'), new DateTimeImmutable('2014-09-05 06:00:00'));
// => false
```
