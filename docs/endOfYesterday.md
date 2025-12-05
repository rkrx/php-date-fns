[Back to README](../README.md)

# endOfYesterday

Return the end of yesterday.



## Parameters
- `options?` (array)

## Returns
- `DateTimeImmutable` - The end of yesterday

## Examples
If today is 6 October 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfYesterday();
// => Sun Oct 5 2014 23:59:59.999
```
