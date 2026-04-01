[Back to README](../README.md)

# previousDay

When is the previous day of the week? 0-6 the day of the week, 0 represents Sunday.



## Parameters
- `date` (DateTimeInterface|string|int|float|null) - The date to check
- `day` (int) - The day of the week

## Returns
- `DateTimeImmutable` - The date is the previous day of week

## Examples
When is the previous Monday before Mar, 20, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousDay(date: new DateTimeImmutable('2020-03-20 00:00:00'), day: 1);
// => Mon Mar 16 2020 00:00:00
```

When is the previous Tuesday before Mar, 21, 2020?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::previousDay(date: new DateTimeImmutable('2020-03-21 00:00:00'), day: 2);
// => Tue Mar 17 2020 00:00:00
```
