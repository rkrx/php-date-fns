[Back to README](../README.md)

# isBefore

Is the first date before the second one?



## Parameters
- `date` (DateTimeInterface|string|int)
- `dateToCompare` (DateTimeInterface|string|int)

## Returns
- `bool`

## Examples
Is 10 July 1989 before 11 February 1987?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isBefore(new DateTimeImmutable('1989-07-10 00:00:00'), new DateTimeImmutable('1987-02-11 00:00:00'));
// => false
```
