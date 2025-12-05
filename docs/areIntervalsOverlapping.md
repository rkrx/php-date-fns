[Back to README](../README.md)

# areIntervalsOverlapping

Is the given time interval overlapping with another time interval?



## Parameters
- `intervalLeft` (array)
- `intervalRight` (array)
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
  [
    'start' => new DateTimeImmutable('2014-01-10 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-20 00:00:00') ],
  [
    'start' => new DateTimeImmutable('2014-01-17 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-21 00:00:00') ]
);
// => true
```

For non-overlapping time intervals:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::areIntervalsOverlapping(
  [
    'start' => new DateTimeImmutable('2014-01-10 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-20 00:00:00') ],
  [
    'start' => new DateTimeImmutable('2014-01-21 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-22 00:00:00') ]
);
// => false
```

For adjacent time intervals:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::areIntervalsOverlapping(
  [
    'start' => new DateTimeImmutable('2014-01-10 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-20 00:00:00') ],
  [
    'start' => new DateTimeImmutable('2014-01-20 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-30 00:00:00') ]
);
// => false
```

Using the inclusive option:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::areIntervalsOverlapping(
  [
    'start' => new DateTimeImmutable('2014-01-10 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-20 00:00:00') ],
  [
    'start' => new DateTimeImmutable('2014-01-20 00:00:00'),
    'end' => new DateTimeImmutable('2014-01-24 00:00:00') ],
  [
    'inclusive' => true ]
);
// => true
```
