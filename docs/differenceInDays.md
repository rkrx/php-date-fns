[Back to README](../README.md)

# differenceInDays

Get the number of days between the given dates.



## Parameters
- `laterDate` (DateTimeInterface|string|int|float)
- `earlierDate` (DateTimeInterface|string|int|float)

## Returns
- `int`

## Examples
How many full days are between 2 July 2011 23:00:00 and 2 July 2012 00:00:00?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInDays(
    laterDate: new DateTimeImmutable('2012-07-02 00:00:00'),
    earlierDate: new DateTimeImmutable('2011-07-02 23:00:00')
);
// => 365
```

How many full days are between 2 July 2011 23:59:00 and 3 July 2011 00:01:00?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInDays(
    laterDate: new DateTimeImmutable('2011-07-03 00:01:00'),
    earlierDate: new DateTimeImmutable('2011-07-02 23:59:00')
);
// => 0
```

How many full days are between 1 March 2020 0:00 and 1 June 2020 0:00 ? Note: because local time is used, the result will always be 92 days, even in time zones where DST starts and the period has only 92*24-1 hours.
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::differenceInDays(
    laterDate: new DateTimeImmutable('2020-06-01 00:00:00'),
    earlierDate: new DateTimeImmutable('2020-03-01 00:00:00')
);
// => 92
```
