[Back to README](../README.md)

# formatISO9075

Return the formatted date string in ISO 9075 format. Options may be passed to control the parts and notations of the date.



## Parameters
- `date` (DateTimeInterface|string|int)
- `options` (array)

## Returns
- `string`

## Examples
Represent 18 September 2019 in ISO 9075 format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO9075(date: new DateTimeImmutable('2019-09-18 19:00:52'));
// => '2019-09-18 19:00:52'
```

Represent 18 September 2019 in ISO 9075, short format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO9075(
    date: new DateTimeImmutable('2019-09-18 19:00:52'),
    options: [
        'format' => 'basic' ]
);
// => '20190918 190052'
```

Represent 18 September 2019 in ISO 9075 format, date only:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO9075(
    date: new DateTimeImmutable('2019-09-18 19:00:52'),
    options: [
        'representation' => 'date' ]
);
// => '2019-09-18'
```

Represent 18 September 2019 in ISO 9075 format, time only:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISO9075(
    date: new DateTimeImmutable('2019-09-18 19:00:52'),
    options: [
        'representation' => 'time' ]
);
// => '19:00:52'
```
