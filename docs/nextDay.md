[Back to README](../README.md)

# nextDay

Helpers to move to next/previous weekday or specific days.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check
- `day` (int) - Day of the week

## Returns
- `DateTimeImmutable` - The date is the next day of the week

## Examples
When is the next Monday after Mar, 20, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextDay(date: new DateTimeImmutable('2020-03-20 00:00:00'), day: 1);
// => Mon Mar 23 2020 00:00:00
```

When is the next Tuesday after Mar, 21, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::nextDay(date: new DateTimeImmutable('2020-03-21 00:00:00'), day: 2);
// => Tue Mar 24 2020 00:00:00
```
