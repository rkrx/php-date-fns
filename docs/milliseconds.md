[Back to README](../README.md)

# milliseconds

Returns the number of milliseconds in the specified duration parts.



## Parameters
- `duration` (array)

## Returns
- `int`

## Examples
1 year in milliseconds
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::milliseconds(
    duration: [
        'years' => 1 ]
);
// => 31556952000

// 3 months in milliseconds
DateFns::milliseconds(
    duration: [
        'months' => 3 ]
);
// => 7889238000
```
