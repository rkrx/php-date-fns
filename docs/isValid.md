[Back to README](../README.md)

# isValid

Is the given date valid?



## Parameters
- `date` (mixed)

## Returns
- `bool`

## Examples
For the valid date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isValid(new DateTimeImmutable('2014-02-31 00:00:00'));
// => true
```

For the value, convertible into a date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isValid(1393804800000);
// => true
```

For the invalid date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isValid(new DateTimeImmutable(''));
// => false
```
