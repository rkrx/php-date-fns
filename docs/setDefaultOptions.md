[Back to README](../README.md)

# setDefaultOptions

Set default options.



## Parameters
- `options` (array)

## Returns
- `void`

## Examples
Set global locale:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$es = 'es';
DateFns::setDefaultOptions([
    'locale' => $es ]);
$result = DateFns::format(new DateTimeImmutable('2014-09-02 00:00:00'),
    'PPPP');
// => 'martes, 2 de septiembre de 2014'
```

Start of the week for 2 September 2014:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::startOfWeek(new DateTimeImmutable('2014-09-02 00:00:00'));
// => Sun Aug 31 2014 00:00:00
```

Start of the week for 2 September 2014, when we set that week starts on Monday by default:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::setDefaultOptions([
    'weekStartsOn' => 1 ]);
$result = DateFns::startOfWeek(new DateTimeImmutable('2014-09-02 00:00:00'));
// => Mon Sep 01 2014 00:00:00
```

Manually set options take priority over default options:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::setDefaultOptions([
    'weekStartsOn' => 1 ]);
$result = DateFns::startOfWeek(new DateTimeImmutable('2014-09-02 00:00:00'), [
    'weekStartsOn' => 0 ]);
// => Sun Aug 31 2014 00:00:00
```

Remove the option by setting it to undefined:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::setDefaultOptions([
    'weekStartsOn' => 1 ]);
DateFns::setDefaultOptions([
    'weekStartsOn' => null ]);
$result = DateFns::startOfWeek(new DateTimeImmutable('2014-09-02 00:00:00'));
// => Sun Aug 31 2014 00:00:00
```
