[Back to README](../README.md)

# compareDesc

Compare the two dates and return -1 if the first date is after the second, 1 if the first date is before the second or 0 if dates are equal.



## Parameters
- `dateLeft` (DateTimeInterface|string|int|null)
- `dateRight` (DateTimeInterface|string|int|null)

## Returns
- `int`

## Examples
Compare 11 February 1987 and 10 July 1989 reverse chronologically:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::compareDesc(new DateTimeImmutable('1987-02-11 00:00:00'), new DateTimeImmutable('1989-07-10 00:00:00'));
// => 1
```

Sort the array of dates in reverse chronological order:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = [
  new DateTimeImmutable('1995-07-02 00:00:00'),
  new DateTimeImmutable('1987-02-11 00:00:00'),
  new DateTimeImmutable('1989-07-10 00:00:00')
];
usort($result, [DateFns::class, 'compareDesc']);
// => [
//   Sun Jul 02 1995 00:00:00,
//   Mon Jul 10 1989 00:00:00,
//   Wed Feb 11 1987 00:00:00;
// ]
```
