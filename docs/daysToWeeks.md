[Back to README](../README.md)

# daysToWeeks

Convert a number of days to a full number of weeks.



## Parameters
- `days` (int) - The number of days to be converted

## Returns
- `int` - The number of days converted in weeks

## Examples
Convert 14 days to weeks:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::daysToWeeks(days: 14);
// => 2
```

It uses trunc rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::daysToWeeks(days: 13);
// => 1
```
