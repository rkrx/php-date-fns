[Back to README](../README.md)

# startOfTomorrow

Return the start of tomorrow.



## Parameters
- `options?` (array) - An object with options

## Returns
- `DateTimeImmutable` - The start of tomorrow

## Examples
If today is 6 October 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfTomorrow();
// => Tue Oct 7 2014 00:00:00
```
