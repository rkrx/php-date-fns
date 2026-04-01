[Back to README](../README.md)

# isThisWeek

Is the given date in the same week as now?



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `bool`

## Examples
If today is 25 September 2014, is 21 September 2014 in this week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisWeek(date: new DateTimeImmutable('2014-09-21 00:00:00'));
// => true
```

If today is 25 September 2014 and week starts with Monday is 21 September 2014 in this week?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isThisWeek(
    date: new DateTimeImmutable('2014-09-21 00:00:00'),
    options: [
        'weekStartsOn' => 1 ]
);
// => false
```
