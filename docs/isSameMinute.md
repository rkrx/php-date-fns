[Back to README](../README.md)

# isSameMinute

Are the given dates in the same second?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float)
- `dateRight` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
Are 4 September 2014 06:30:00 and 4 September 2014 06:30:15 in the same minute?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameMinute(
    dateLeft: new DateTimeImmutable('2014-09-04 06:30:00'),
    dateRight: new DateTimeImmutable('2014-09-04 06:30:15')
);
// => true
```

Are 4 September 2014 06:30:00 and 5 September 2014 06:30:00 in the same minute?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameMinute(
    dateLeft: new DateTimeImmutable('2014-09-04 06:30:00'),
    dateRight: new DateTimeImmutable('2014-09-05 06:30:00')
);
// => false
```
