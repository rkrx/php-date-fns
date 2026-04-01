[Back to README](../README.md)

# constructNow

Constructs the current date using the reference constructor.



## Parameters
- `referenceDate` (DateTimeInterface|string|int|null|callable)

## Returns
- `DateTimeImmutable|DateTime` - Current date initialized using the given date constructor

## Examples
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;


function isToday<DateType extends Date>(
  date: DateArg<DateType>,
): boolean [
  // If we were to use `new DateTimeImmutable()` directly, the function would  behave
  // differently in different timezones and return false for the same date.
  return DateFns::isSameDay(
    dateLeft: date,
    dateRight: 'DateFns' =>:constructNow(date)
);
];
```
