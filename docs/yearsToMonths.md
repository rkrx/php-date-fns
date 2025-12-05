[Back to README](../README.md)

# yearsToMonths

Convert a number of years to a full number of months.



## Parameters
- `years` (int) - The number of years to be converted

## Returns
- `int` - The number of years converted in months

## Examples
Convert 2 years into months
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::yearsToMonths(2);
// => 24
```
