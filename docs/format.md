[Back to README](../README.md)

# format

Format the date.



## Parameters
- `date` (DateTimeInterface|string|int|null)
- `formatStr` (string)

## Returns
- `string`

## Examples
Represent 11 February 2014 in middle-endian format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::format(
    date: new DateTimeImmutable('2014-02-11 00:00:00'),
    formatStr: 'MM/dd/yyyy'
);
// => '02/11/2014'
```

Represent 2 July 2014 in ISO-like format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;
use DateTimeZone;

$result = DateFns::format(
    date: new DateTimeImmutable('2014-07-02 00:00:00', new DateTimeZone('UTC')),
    formatStr: 'yyyy-MM-dd'
);
// => '2014-07-02'
```

Escape string by single quote characters:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::format(date: new DateTimeImmutable('2014-07-02 15:00:00'), formatStr: "h 'o''clock'");
// => "3 o'clock"
```
