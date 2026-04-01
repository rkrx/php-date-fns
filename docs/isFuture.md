[Back to README](../README.md)

# isFuture

Is the given date in the future?



## Parameters
- `date` (DateTimeInterface|string|int)

## Returns
- `bool`

## Examples
If today is 6 October 2014, is 31 December 2014 in the future?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isFuture(date: new DateTimeImmutable('2014-12-31 00:00:00'));
// => true
```
