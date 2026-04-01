[Back to README](../README.md)

# areIntervalsOverlapping

Check whether two date ranges overlap.



## Parameters
- `leftStart` (DateTimeInterface|string|int)
- `leftEnd` (DateTimeInterface|string|int)
- `rightStart` (DateTimeInterface|string|int)
- `rightEnd` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `bool`

## Examples
For overlapping time intervals:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::areIntervalsOverlapping(
    leftStart: new DateTimeImmutable('2014-01-10 00:00:00'),
    leftEnd: new DateTimeImmutable('2014-01-20 00:00:00'),
    rightStart: new DateTimeImmutable('2014-01-17 00:00:00'),
    rightEnd: new DateTimeImmutable('2014-01-21 00:00:00')
);
// => true
```

For non-overlapping time intervals:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::areIntervalsOverlapping(
    leftStart: new DateTimeImmutable('2014-01-10 00:00:00'),
    leftEnd: new DateTimeImmutable('2014-01-20 00:00:00'),
    rightStart: new DateTimeImmutable('2014-01-21 00:00:00'),
    rightEnd: new DateTimeImmutable('2014-01-22 00:00:00')
);
// => false
```

For adjacent time intervals:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::areIntervalsOverlapping(
    leftStart: new DateTimeImmutable('2014-01-10 00:00:00'),
    leftEnd: new DateTimeImmutable('2014-01-20 00:00:00'),
    rightStart: new DateTimeImmutable('2014-01-20 00:00:00'),
    rightEnd: new DateTimeImmutable('2014-01-30 00:00:00')
);
// => false
```

Using the inclusive option:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::areIntervalsOverlapping(
    leftStart: new DateTimeImmutable('2014-01-10 00:00:00'),
    leftEnd: new DateTimeImmutable('2014-01-20 00:00:00'),
    rightStart: new DateTimeImmutable('2014-01-20 00:00:00'),
    rightEnd: new DateTimeImmutable('2014-01-24 00:00:00'),
    options: ['inclusive' => true]
);
// => true
```
