[Back to README](../README.md)

# formatRFC3339

Return the formatted date string in RFC 3339 format. Options may be passed to control the parts and notations of the date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `string`

## Examples
Represent 18 September 2019 in RFC 3339 format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::formatRFC3339(date: new DateTimeImmutable('2019-09-18 19:00:52'));
// => '2019-09-18T19:00:52Z'
```

Represent 18 September 2019 in RFC 3339 format, 3 digits of second fraction
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::formatRFC3339(
    date: new DateTimeImmutable('2019-09-18 19:00:52'),
    options: [
        'fractionDigits' => 3
        ]
);
// => '2019-09-18T19:00:52.234Z'
```
