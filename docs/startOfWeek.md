[Back to README](../README.md)

# startOfWeek

Return the start of a week for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `DateTimeImmutable`

## Examples
The start of a week for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfWeek(new DateTimeImmutable('2014-09-02 11:55:00'));
// => Sun Aug 31 2014 00:00:00
```

If the week starts on Monday, the start of the week for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfWeek(new DateTimeImmutable('2014-09-02 11:55:00'), [
    'weekStartsOn' => 1 ]);
// => Mon Sep 01 2014 00:00:00
```
