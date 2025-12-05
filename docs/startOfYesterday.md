[Back to README](../README.md)

# startOfYesterday

Return the start of yesterday.



## Parameters
- `options?` (array) - An object with options

## Returns
- `DateTimeImmutable` - The start of yesterday

## Examples
If today is 6 October 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfYesterday();
// => Sun Oct 5 2014 00:00:00
```
