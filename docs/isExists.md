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

$result = DateFns::isExists(2018, 0, 31);
// => true
```

For the invalid date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isExists(2018, 1, 31);
// => false
```
