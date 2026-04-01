[Back to README](../README.md)

# toDate

Convert the given argument to an instance of Date.



## Parameters
- `argument` (DateTimeInterface|string|int)

## Returns
- `DateTimeImmutable`

## Examples
Clone the date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::toDate(argument: new DateTimeImmutable('2014-02-11 11:30:30'));
// => Tue Feb 11 2014 11:30:30
```

Convert the timestamp to date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::toDate(argument: 1392098430000);
// => Tue Feb 11 2014 11:30:30
```
