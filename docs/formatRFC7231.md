[Back to README](../README.md)

# formatRFC7231

Return the formatted date string in RFC 7231 format. The result will always be in UTC timezone.



## Parameters
- `date` (DateTimeInterface|string|int)

## Returns
- `string`

## Examples
Represent 18 September 2019 in RFC 7231 format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatRFC7231(date: new DateTimeImmutable('2019-09-18 19:00:52'));
// => 'Wed, 18 Sep 2019 19:00:52 GMT'
```
