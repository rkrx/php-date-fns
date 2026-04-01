[Back to README](../README.md)

# minutesToSeconds

Convert a number of minutes to a full number of seconds.



## Parameters
- `minutes` (int) - The number of minutes to be converted

## Returns
- `int` - The number of minutes converted in seconds

## Examples
Convert 2 minutes to seconds
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::minutesToSeconds(minutes: 2);
// => 120
```
