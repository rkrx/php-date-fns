[Back to README](../README.md)

# intlFormatDistance

Formats distance between two dates in a human-readable format similar to Intl.RelativeTimeFormat.



## Parameters
- `laterDate` (DateTimeInterface|string|int)
- `earlierDate` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `string`

## Examples
What is the distance between the dates when the fist date is after the second?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::intlFormatDistance(
  new DateTimeImmutable('1986-04-04 11:30:00'),
  new DateTimeImmutable('1986-04-04 10:30:00')
);
// => 'in 1 hour'

// What is the distance between the dates when the fist date is before the second?
DateFns::intlFormatDistance(
  new DateTimeImmutable('1986-04-04 10:30:00'),
  new DateTimeImmutable('1986-04-04 11:30:00')
);
// => '1 hour ago'
```

Use the unit option to force the function to output the result in quarters. Without setting it, the example would return "next year"
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::intlFormatDistance(
  new DateTimeImmutable('1987-07-04 10:30:00'),
  new DateTimeImmutable('1986-04-04 10:30:00'),
  [
    'unit' => 'quarter' ]
);
// => 'in 5 quarters'
```

Use the locale option to get the result in Spanish. Without setting it, the example would return "in 1 hour".
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::intlFormatDistance(
  new DateTimeImmutable('1986-04-04 11:30:00'),
  new DateTimeImmutable('1986-04-04 10:30:00'),
  [
    'locale' => 'es' ]
);
// => 'dentro de 1 hora'
```

Use the numeric option to force the function to use numeric values. Without setting it, the example would return "tomorrow".
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::intlFormatDistance(
  new DateTimeImmutable('1986-04-05 11:30:00'),
  new DateTimeImmutable('1986-04-04 11:30:00'),
  [
    'numeric' => 'always' ]
);
// => 'in 1 day'
```

Use the style option to force the function to use short values. Without setting it, the example would return "in 2 years".
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::intlFormatDistance(
  new DateTimeImmutable('1988-04-04 11:30:00'),
  new DateTimeImmutable('1986-04-04 11:30:00'),
  [
    'style' => 'short' ]
);
// => 'in 2 yr'
```
