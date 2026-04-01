[Back to README](../README.md)

# quartersToYears

Convert a number of quarters to a full number of years.



## Parameters
- `quarters` (int) - The number of quarters to be converted

## Returns
- `int` - The number of quarters converted in years

## Examples
Convert 8 quarters to years
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::quartersToYears(quarters: 8);
// => 2
```

It uses floor rounding:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::quartersToYears(quarters: 11);
// => 2
```
