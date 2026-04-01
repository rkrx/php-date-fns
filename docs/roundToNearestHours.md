[Back to README](../README.md)

# roundToNearestHours

Round the given date to the nearest hour (or increment).



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `DateTimeImmutable`

## Examples
Round 10 July 2014 12:34:56 to nearest hour:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestHours(date: new DateTimeImmutable('2014-07-10 12:34:56'));
// => Thu Jul 10 2014 13:00:00
```

Round 10 July 2014 12:34:56 to nearest half hour:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestHours(
    date: new DateTimeImmutable('2014-07-10 12:34:56'),
    options: [
        'nearestTo' => 6 ]
);
// => Thu Jul 10 2014 12:00:00
```

Round 10 July 2014 12:34:56 to nearest half hour:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestHours(
    date: new DateTimeImmutable('2014-07-10 12:34:56'),
    options: [
        'nearestTo' => 8 ]
);
// => Thu Jul 10 2014 16:00:00
```

Floor (rounds down) 10 July 2014 12:34:56 to nearest hour:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestHours(
    date: new DateTimeImmutable('2014-07-10 01:23:45'),
    options: [
        'roundingMethod' => 'ceil' ]
);
// => Thu Jul 10 2014 02:00:00
```

Ceil (rounds up) 10 July 2014 12:34:56 to nearest quarter hour:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestHours(
    date: new DateTimeImmutable('2014-07-10 12:34:56'),
    options: [
        'roundingMethod' => 'floor',
        'nearestTo' => 8 ]
);
// => Thu Jul 10 2014 08:00:00
```
