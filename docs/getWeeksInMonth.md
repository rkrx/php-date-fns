[Back to README](../README.md)

# getWeeksInMonth

Get the number of weeks in the month of the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `int`

## Examples
How many calendar weeks does February 2015 span?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getWeeksInMonth(new DateTimeImmutable('2015-02-08 00:00:00'));
// => 4
```

If the week starts on Monday, how many calendar weeks does July 2017 span?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getWeeksInMonth(new DateTimeImmutable('2017-07-05 00:00:00'), [
    'weekStartsOn' => 1 ]);
// => 6
```
