[Back to README](../README.md)

# startOfToday

Return the start of today.



## Parameters
- `options?` (array) - An object with options

## Returns
- `DateTimeImmutable` - The start of today

## Examples
If today is 6 October 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfToday();
// => Mon Oct 6 2014 00:00:00
```
