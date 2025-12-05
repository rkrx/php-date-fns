[Back to README](../README.md)

# hoursToMilliseconds

Convert a number of hours to a full number of milliseconds.



## Parameters
- `hours` (int) - number of hours to be converted

## Returns
- `int` - The number of hours converted to milliseconds

## Examples
Convert 2 hours to milliseconds:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::hoursToMilliseconds(2);
// => 7200000
```
