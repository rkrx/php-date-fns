[Back to README](../README.md)

# isMatch

Return the true if given date is string correct against the given format else will return false.



## Parameters
- `dateString` (string)
- `formatString` (string)
- `options` (array)

## Returns
- `bool` - Is format string a match for date string?

## Examples
Match 11 February 2014 from middle-endian format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isMatch('02/11/2014',
    'MM/dd/yyyy');
// => true
```

Match 28th of February in Esperanto locale in the context of 2010 year:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$eo = 'eo';
$result = DateFns::isMatch('28-a de februaro', "do 'de' MMMM", [
    'locale' => $eo
]);
// => true
```
