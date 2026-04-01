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

$result = DateFns::lightFormat(
    date: new DateTimeImmutable('2014-02-11 00:00:00'),
    format: 'yyyy-MM-dd'
);
// => '2014-02-11'
```
