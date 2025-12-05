[Back to README](../README.md)

# constructFrom

Constructs a date using the reference date and the given value.



## Parameters
- `referenceDate` (DateTimeInterface|string|int|null|callable)
- `value` (DateTimeInterface|string|int)

## Returns
- `DateTimeImmutable|DateTimeInterface` - Date initialized using the given date and value

## Examples
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

;
// A function that clones a date preserving the original type
function cloneDate<DateType extends Date>(date: DateType): DateType [
  return DateFns::constructFrom(
    date, // Use constructor from the given date
    date.DateFns::getTime() // Use the date value to create a new date
  );
]
```
