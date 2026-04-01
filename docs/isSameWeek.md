[Back to README](../README.md)

# isSameWeek

Are the given dates in the same week?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float)
- `dateRight` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `bool`

## Examples
Are 31 August 2014 and 4 September 2014 in the same week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameWeek(dateLeft: new DateTimeImmutable('2014-08-31 00:00:00'), dateRight: new DateTimeImmutable('2014-09-04 00:00:00'));
// => true
```

If week starts with Monday, are 31 August 2014 and 4 September 2014 in the same week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameWeek(
    dateLeft: new DateTimeImmutable('2014-08-31 00:00:00'),
    dateRight: new DateTimeImmutable('2014-09-04 00:00:00'),
    options: [
        'weekStartsOn' => 1
        ]
);
// => false
```

Are 1 January 2014 and 1 January 2015 in the same week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameWeek(dateLeft: new DateTimeImmutable('2014-01-01 00:00:00'), dateRight: new DateTimeImmutable('2015-01-01 00:00:00'));
// => false
```
