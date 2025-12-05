[Back to README](../README.md)

# yearsToDays

Convert a number of years to a full number of days.



## Parameters
- `years` (int) - The number of years to be converted

## Returns
- `int` - The number of years converted in days

## Examples
Convert 2 years into days
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::yearsToDays(2);
// => 730
```
