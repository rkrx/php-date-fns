[Back to README](../README.md)

# hoursToSeconds

Convert a number of hours to a full number of seconds.



## Parameters
- `hours` (int) - The number of hours to be converted

## Returns
- `int` - The number of hours converted in seconds

## Examples
Convert 2 hours to seconds:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::hoursToSeconds(hours: 2);
// => 7200
```
