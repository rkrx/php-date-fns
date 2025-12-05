[Back to README](../README.md)

# isEqual

Are the given dates equal?



## Parameters
- `dateLeft` (DateTimeInterface|string|int)
- `dateRight` (DateTimeInterface|string|int)

## Returns
- `bool`

## Examples
Are 2 July 2014 06:30:45.000 and 2 July 2014 06:30:45.500 equal?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isEqual(
  new DateTimeImmutable('2014-07-02 06:30:45'),
  new DateTimeImmutable('2014-07-02 06:30:45')
);
// => false
```
