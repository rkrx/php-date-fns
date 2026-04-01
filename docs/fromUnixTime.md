[Back to README](../README.md)

# fromUnixTime

Create a date from a Unix timestamp (seconds).



## Parameters
- `unixTime` (int|float|string)

## Returns
- `DateTimeImmutable`

## Examples
Create the date 29 February 2012 11:45:05:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::fromUnixTime(unixTime: 1330515905);
// => Wed Feb 29 2012 11:45:05
```
