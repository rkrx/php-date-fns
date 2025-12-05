[Back to README](../README.md)

# formatDistanceStrict

Return the distance between the given dates in words, using strict units.



## Parameters
- `date` (DateTimeInterface|string|int)
- `baseDate` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `string`

## Examples
What is the distance between 2 July 2014 and 1 January 2015?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceStrict(new DateTimeImmutable('2014-07-02 00:00:00'), new DateTimeImmutable('2015-01-02 00:00:00'));
// => '6 months'
```

What is the distance between 1 January 2015 00:00:15 and 1 January 2015 00:00:00?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceStrict(
  new DateTimeImmutable('2015-01-01 00:00:15'),
  new DateTimeImmutable('2015-01-01 00:00:00')
);
// => '15 seconds'
```

What is the distance from 1 January 2016 to 1 January 2015, with a suffix?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceStrict(new DateTimeImmutable('2015-01-01 00:00:00'), new DateTimeImmutable('2016-01-01 00:00:00'), [
    'addSuffix' => true
]);
// => '1 year ago'
```

What is the distance from 1 January 2016 to 1 January 2015, in minutes?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceStrict(new DateTimeImmutable('2016-01-01 00:00:00'), new DateTimeImmutable('2015-01-01 00:00:00'), [
    'unit' => 'minute'
]);
// => '525600 minutes'
```

What is the distance from 1 January 2015 to 28 January 2015, in months, rounded up?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceStrict(new DateTimeImmutable('2015-01-28 00:00:00'), new DateTimeImmutable('2015-01-01 00:00:00'), [
    'unit' => 'month',
    'roundingMethod' => 'ceil'
]);
// => '1 month'
```

What is the distance between 1 August 2016 and 1 January 2015 in Esperanto?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$eoLocale = 'eo';
$result = DateFns::formatDistanceStrict(new DateTimeImmutable('2016-08-01 00:00:00'), new DateTimeImmutable('2015-01-01 00:00:00'), [
    'locale' => $eoLocale
]);
// => '1 jaro'
```
