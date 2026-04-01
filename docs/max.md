[Back to README](../README.md)

# max

Return the latest of the given dates.



## Parameters
- `dates` (DateTimeInterface|string|int, variadic)

## Returns
- `DateTimeImmutable`

## Examples
PHP does not support repeated named arguments for variadic parameters, so this example uses positional variadic arguments.

Which of these dates is the latest?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::max(
  new DateTimeImmutable('1989-07-10 00:00:00'),
  new DateTimeImmutable('1987-02-11 00:00:00'),
  new DateTimeImmutable('1995-07-02 00:00:00'),
  new DateTimeImmutable('1990-01-01 00:00:00')
);
// => Sun Jul 02 1995 00:00:00
```
