[Back to README](../README.md)

# parse

Parse the date string using the given format string.



## Parameters
- `dateString` (string)
- `formatString` (string)
- `referenceDate` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `DateTimeImmutable`

## Examples
Parse 11 February 2014 from middle-endian format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::parse('02/11/2014',
    'MM/dd/yyyy', new DateTimeImmutable());
// => Tue Feb 11 2014 00:00:00
```

Parse 28th of February in Esperanto locale in the context of 2010 year:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$eo = 'eo';
$result = DateFns::parse('28-a de februaro', "do 'de' MMMM", new DateTimeImmutable('2010-01-01 00:00:00'), [
    'locale' => $eo
]);
// => Sun Feb 28 2010 00:00:00
```
