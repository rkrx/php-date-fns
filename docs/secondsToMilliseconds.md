[Back to README](../README.md)

# secondsToMilliseconds

Convert a number of seconds to a full number of milliseconds.



## Parameters
- `seconds` (int) - The number of seconds to be converted

## Returns
- `int` - The number of seconds converted in milliseconds

## Examples
Convert 2 seconds into milliseconds
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::secondsToMilliseconds(2);
// => 2000
```
