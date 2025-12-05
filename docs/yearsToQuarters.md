[Back to README](../README.md)

# yearsToQuarters

Convert a number of years to a full number of quarters.



## Parameters
- `years` (int) - The number of years to be converted

## Returns
- `int` - The number of years converted in quarters

## Examples
Convert 2 years to quarters
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::yearsToQuarters(2);
// => 8
```
