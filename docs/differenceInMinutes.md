[Back to README](../README.md)

# differenceInMinutes

Get the number of minutes between the given dates.



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float)
- `dateRight` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
How many minutes are between 2 July 2014 12:07:59 and 2 July 2014 12:20:00?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInMinutes(
    dateLeft: new DateTimeImmutable('2014-07-02 12:20:00'),
    dateRight: new DateTimeImmutable('2014-07-02 12:07:59')
);
// => 12
```

How many minutes are between 10:01:59 and 10:00:00
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInMinutes(
    dateLeft: new DateTimeImmutable('2000-01-01 10:00:00'),
    dateRight: new DateTimeImmutable('2000-01-01 10:01:59')
);
// => -1
```
