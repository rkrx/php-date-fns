[Back to README](../README.md)

# roundToNearestMinutes

Round the given date to the nearest minute (or given increment).



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `DateTimeImmutable`

## Examples
Round 10 July 2014 12:12:34 to nearest minute:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestMinutes(new DateTimeImmutable('2014-07-10 12:12:34'));
// => Thu Jul 10 2014 12:13:00
```

Round 10 July 2014 12:12:34 to nearest quarter hour:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestMinutes(new DateTimeImmutable('2014-07-10 12:12:34'), [
    'nearestTo' => 15 ]);
// => Thu Jul 10 2014 12:15:00
```

Floor (rounds down) 10 July 2014 12:12:34 to nearest minute:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestMinutes(new DateTimeImmutable('2014-07-10 12:12:34'), [
    'roundingMethod' => 'floor' ]);
// => Thu Jul 10 2014 12:12:00
```

Ceil (rounds up) 10 July 2014 12:12:34 to nearest half hour:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::roundToNearestMinutes(new DateTimeImmutable('2014-07-10 12:12:34'), [
    'roundingMethod' => 'ceil',
    'nearestTo' => 30 ]);
// => Thu Jul 10 2014 12:30:00
```
