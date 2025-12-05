[Back to README](../README.md)

# isWithinInterval

Is the given date within the interval? (Including start and end.)



## Parameters
- `date` (DateTimeInterface|string|int)
- `interval` (array)

## Returns
- `bool`

## Examples
For the date within the interval:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(new DateTimeImmutable('2014-01-03 00:00:00'), [
    'start' => new DateTimeImmutable('2014-01-01 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-07 00:00:00')
]);
// => true
```

For the date outside of the interval:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(new DateTimeImmutable('2014-01-10 00:00:00'), [
    'start' => new DateTimeImmutable('2014-01-01 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-07 00:00:00')
]);
// => false
```

For date equal to the interval start:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(date, [
     start,
    'end' => date ]);
// => true
```

For date equal to the interval end:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(date, [
    'start' => date, end ]);
// => true
```
