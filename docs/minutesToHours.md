[Back to README](../README.md)

# minutesToHours

Convert a number of minutes to a full number of hours.



## Parameters
- `minutes` (int) - The number of minutes to be converted

## Returns
- `int` - The number of minutes converted in hours

## Examples
Convert 140 minutes to hours:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::minutesToHours(120);
// => 2
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::minutesToHours(179);
// => 2
```
