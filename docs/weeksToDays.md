[Back to README](../README.md)

# weeksToDays

Convert a number of weeks to a full number of days.



## Parameters
- `weeks` (int) - The number of weeks to be converted

## Returns
- `int` - The number of weeks converted in days

## Examples
Convert 2 weeks into days
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::weeksToDays(2);
// => 14
```
