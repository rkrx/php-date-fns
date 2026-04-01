[Back to README](../README.md)

# endOfWeek

Return the end of a week for the given date.



## Parameters
- `date` (DateTimeInterface|string|int|float)
- `options` (array)

## Returns
- `DateTimeImmutable`

## Examples
The end of a week for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfWeek(date: new DateTimeImmutable('2014-09-02 11:55:00'));
// => Sat Sep 06 2014 23:59:59.999
```

If the week starts on Monday, the end of the week for 2 September 2014 11:55:00:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::endOfWeek(
    date: new DateTimeImmutable('2014-09-02 11:55:00'),
    options: [
        'weekStartsOn' => 1 ]
);
// => Sun Sep 07 2014 23:59:59.999
```
