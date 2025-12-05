[Back to README](../README.md)

# isPast

Is the given date in the past?



## Parameters
- `date` (DateTimeInterface|string|int)

## Returns
- `bool`

## Examples
If today is 6 October 2014, is 2 July 2014 in the past?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isPast(new DateTimeImmutable('2014-07-02 00:00:00'));
// => true
```
