[Back to README](../README.md)

# getDefaultOptions

Get default options. IntlDatePatternGenerator



## Parameters
None.

## Returns
- `array`

## Examples
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::getDefaultOptions();
// => []
```

```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::setDefaultOptions(
    options: [
        'weekStarsOn' => 1,
        'firstWeekContainsDate' => 4 ]
);
$result = DateFns::getDefaultOptions();
// => [
    'weekStarsOn' => 1,
    'firstWeekContainsDate' => 4 ]
```
