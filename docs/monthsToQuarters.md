[Back to README](../README.md)

# monthsToQuarters

Convert a number of months to a full number of quarters.



## Parameters
- `months` (int) - The number of months to be converted.

## Returns
- `int` - The number of months converted in quarters

## Examples
Convert 6 months to quarters:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::monthsToQuarters(months: 6);
// => 2
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::monthsToQuarters(months: 7);
// => 2
```
