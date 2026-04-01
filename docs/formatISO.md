[Back to README](../README.md)

# formatISO

Return the formatted date string in ISO 8601 format. Options may be passed to control the parts and notations of the date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `string`

## Examples
Represent 18 September 2019 in ISO 8601 format (local time zone is UTC):
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO(date: new DateTimeImmutable('2019-09-18 19:00:52'));
// => '2019-09-18T19:00:52Z'
```

Represent 18 September 2019 in ISO 8601, short format (local time zone is UTC):
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO(
    date: new DateTimeImmutable('2019-09-18 19:00:52'),
    options: [
        'format' => 'basic' ]
);
// => '20190918T190052'
```

Represent 18 September 2019 in ISO 8601 format, date only:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO(
    date: new DateTimeImmutable('2019-09-18 19:00:52'),
    options: [
        'representation' => 'date' ]
);
// => '2019-09-18'
```

Represent 18 September 2019 in ISO 8601 format, time only (local time zone is UTC):
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO(
    date: new DateTimeImmutable('2019-09-18 19:00:52'),
    options: [
        'representation' => 'time' ]
);
// => '19:00:52Z'
```
