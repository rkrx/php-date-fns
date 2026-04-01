[Back to README](../README.md)

# quartersToMonths

Convert a number of quarters to a full number of months.



## Parameters
- `quarters` (int) - The number of quarters to be converted

## Returns
- `int` - The number of quarters converted in months

## Examples
Convert 2 quarters to months
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::quartersToMonths(quarters: 2);
// => 6
```
