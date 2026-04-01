[Back to README](../README.md)

# millisecondsToHours

Convert a number of milliseconds to a full number of hours.



## Parameters
- `milliseconds` (int) - The number of milliseconds to be converted

## Returns
- `int` - The number of milliseconds converted in hours

## Examples
Convert 7200000 milliseconds to hours:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::millisecondsToHours(milliseconds: 7200000);
// => 2
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::millisecondsToHours(milliseconds: 7199999);
// => 1
```
