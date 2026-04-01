[Back to README](../README.md)

# millisecondsToSeconds

Convert a number of milliseconds to a full number of seconds.



## Parameters
- `milliseconds` (int) - The number of milliseconds to be converted

## Returns
- `int` - The number of milliseconds converted in seconds

## Examples
Convert 1000 milliseconds to seconds:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::millisecondsToSeconds(milliseconds: 1000);
// => 1
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::millisecondsToSeconds(milliseconds: 1999);
// => 1
```
