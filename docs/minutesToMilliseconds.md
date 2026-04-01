[Back to README](../README.md)

# minutesToMilliseconds

Convert a number of minutes to a full number of milliseconds.



## Parameters
- `minutes` (int) - The number of minutes to be converted

## Returns
- `int` - The number of minutes converted in milliseconds

## Examples
Convert 2 minutes to milliseconds
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::minutesToMilliseconds(minutes: 2);
// => 120000
```
