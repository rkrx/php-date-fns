[Back to README](../README.md)

# endOfToday

Return the end of today.



## Parameters
- `options?` (array) - The options

## Returns
- `DateTimeImmutable` - The end of today

## Examples
If today is 6 October 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfToday();
// => Mon Oct 6 2014 23:59:59.999
```
