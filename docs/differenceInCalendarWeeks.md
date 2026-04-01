[Back to README](../README.md)

# differenceInCalendarWeeks

Get the number of calendar weeks between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
How many calendar weeks are between 5 July 2014 and 20 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInCalendarWeeks(
    laterDate: new DateTimeImmutable('2014-07-20 00:00:00'),
    earlierDate: new DateTimeImmutable('2014-07-05 00:00:00')
);
// => 3
```

If the week starts on Monday, how many calendar weeks are between 5 July 2014 and 20 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInCalendarWeeks(
    laterDate: new DateTimeImmutable('2014-07-20 00:00:00'),
    earlierDate: new DateTimeImmutable('2014-07-05 00:00:00'),
    options: [
        'weekStartsOn' => 1 ]
);
// => 2
```
