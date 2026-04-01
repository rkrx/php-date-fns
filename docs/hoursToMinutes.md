[Back to README](../README.md)

# hoursToMinutes

Convert a number of hours to a full number of minutes.



## Parameters
- `hours` (int) - number of hours to be converted

## Returns
- `int` - The number of hours converted in minutes

## Examples
Convert 2 hours to minutes:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::hoursToMinutes(hours: 2);
// => 120
```
