[Back to README](../README.md)

# secondsToMinutes

Convert a number of seconds to a full number of minutes.



## Parameters
- `seconds` (int) - The number of seconds to be converted

## Returns
- `int` - The number of seconds converted in minutes

## Examples
Convert 120 seconds into minutes
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::secondsToMinutes(seconds: 120);
// => 2
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::secondsToMinutes(seconds: 119);
// => 1
```
