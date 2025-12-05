[Back to README](../README.md)

# formatDistanceToNow

Return the distance between the given date and now in words.



## Parameters
- `date` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `string`

## Examples
If today is 1 January 2015, what is the distance to 2 July 2014?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceToNow(
  new DateTimeImmutable('2014-07-02 00:00:00')
);
// => '6 months'
```

If now is 1 January 2015 00:00:00, what is the distance to 1 January 2015 00:00:15, including seconds?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceToNow(
  new DateTimeImmutable('2015-01-01 00:00:15'),
  [
    'includeSeconds' => true]
);
// => 'less than 20 seconds'
```

If today is 1 January 2015, what is the distance to 1 January 2016, with a suffix?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatDistanceToNow(
  new DateTimeImmutable('2016-01-01 00:00:00'),
  [
    'addSuffix' => true]
);
// => 'in about 1 year'
```

If today is 1 January 2015, what is the distance to 1 August 2016 in Esperanto?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$eoLocale = require('date-fns/locale/eo');
$result = DateFns::formatDistanceToNow(
  new DateTimeImmutable('2016-08-01 00:00:00'),
  [
    'locale' => eoLocale]
);
// => 'pli ol 1 jaro'
```
