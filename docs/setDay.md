[Back to README](../README.md)

# setDay

Set the day of the week (0 = Sunday) to the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float|null)
- `day` (int)

## Returns
- `DateTimeImmutable`

## Examples
Set week day to Sunday, with the default weekStartsOn of Sunday:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setDay(date: new DateTimeImmutable('2014-09-01 00:00:00'), day: 0);
// => Sun Aug 31 2014 00:00:00
```

Set week day to Saturday:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::setDay(date: new DateTimeImmutable('2014-09-01 00:00:00'), day: 6);
// => Sat Sep 06 2014 00:00:00
```
