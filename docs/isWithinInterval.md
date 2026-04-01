[Back to README](../README.md)

# isWithinInterval

Check whether a date is within the given start and end boundary, including both ends.



## Parameters
- `date` (DateTimeInterface|string|int)
- `start` (DateTimeInterface|string|int)
- `end` (DateTimeInterface|string|int)

## Returns
- `bool`

## Examples
For a date inside the interval:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(
    date: new DateTimeImmutable('2014-01-03 00:00:00'),
    start: new DateTimeImmutable('2014-01-01 00:00:00'),
    end: new DateTimeImmutable('2014-01-07 00:00:00')
);
// => true
```

For a date outside the interval:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(
    date: new DateTimeImmutable('2014-01-10 00:00:00'),
    start: new DateTimeImmutable('2014-01-01 00:00:00'),
    end: new DateTimeImmutable('2014-01-07 00:00:00')
);
// => false
```

When the date is equal to the start:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(
    date: new DateTimeImmutable('2014-01-01 00:00:00'),
    start: new DateTimeImmutable('2014-01-01 00:00:00'),
    end: new DateTimeImmutable('2014-01-07 00:00:00')
);
// => true
```

When the date is equal to the end:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::isWithinInterval(
    date: new DateTimeImmutable('2014-01-07 00:00:00'),
    start: new DateTimeImmutable('2014-01-01 00:00:00'),
    end: new DateTimeImmutable('2014-01-07 00:00:00')
);
// => true
```
