[Back to README](../README.md)

# millisecondsToMinutes

Convert a number of milliseconds to a full number of minutes.



## Parameters
- `milliseconds` (int) - The number of milliseconds to be converted

## Returns
- `int` - The number of milliseconds converted in minutes

## Examples
Convert 60000 milliseconds to minutes:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::millisecondsToMinutes(milliseconds: 60000);
// => 1
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::millisecondsToMinutes(milliseconds: 119999);
// => 1
```
