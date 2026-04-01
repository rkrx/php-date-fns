[Back to README](../README.md)

# isExists

Is the given date exists?



## Parameters
- `year` (int)
- `month` (int) - Month is 0-indexed (0 = January)
- `day` (int)

## Returns
- `bool`

## Examples
For the valid date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isExists(year: 2018, month: 0, day: 31);
// => true
```

For the invalid date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isExists(year: 2018, month: 1, day: 31);
// => false
```
