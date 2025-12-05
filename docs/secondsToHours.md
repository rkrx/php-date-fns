[Back to README](../README.md)

# secondsToHours

Convert a number of seconds to a full number of hours.



## Parameters
- `seconds` (int) - The number of seconds to be converted

## Returns
- `int` - The number of seconds converted in hours

## Examples
Convert 7200 seconds into hours
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::secondsToHours(7200);
// => 2
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::secondsToHours(7199);
// => 1
```
