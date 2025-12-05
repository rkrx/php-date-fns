[Back to README](../README.md)

# endOfTomorrow

Return the end of tomorrow.



## Parameters
- `options?` (array) - The options

## Returns
- `DateTimeImmutable` - The end of tomorrow

## Examples
If today is 6 October 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfTomorrow();
// => Tue Oct 7 2014 23:59:59.999
```
