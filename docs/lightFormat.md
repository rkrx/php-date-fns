[Back to README](../README.md)

# lightFormat

Format the date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `format` (string)

## Returns
- `string`

## Examples
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::lightFormat(new DateTimeImmutable('2014-02-11 00:00:00'),
    'yyyy-MM-dd');
// => '2014-02-11'
```
