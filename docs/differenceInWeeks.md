[Back to README](../README.md)

# differenceInWeeks

Get the number of weeks between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
How many full weeks are between 5 July 2014 and 20 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInWeeks(new DateTimeImmutable('2014-07-20 00:00:00'), new DateTimeImmutable('2014-07-05 00:00:00'));
// => 2
```

How many full weeks are between 1 March 2020 0:00 and 6 June 2020 0:00 ? Note: because local time is used, the result will always be 8 weeks (54 days), even if DST starts and the period has only 54*24-1 hours.
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInWeeks(
  new DateTimeImmutable('2020-06-01 00:00:00'),
  new DateTimeImmutable('2020-03-06 00:00:00')
);
// => 8
```
