[Back to README](../README.md)

# parseISO

Parse the given string in ISO 8601 format and return an instance of Date.



## Parameters
- `argument` (string)
- `options` (array)

## Returns
- `DateTimeImmutable` - The parsed date in the local time zone

## Examples
Convert string '2014-02-11T11:30:30' to date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::parseISO('2014-02-11T11:30:30');
// => Tue Feb 11 2014 11:30:30
```

Convert string '+02014101' to date, if the additional number of digits in the extended year format is 1:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::parseISO('+02014101', [
    'additionalDigits' => 1 ]);
// => Fri Apr 11 2014 00:00:00
```
