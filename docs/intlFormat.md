[Back to README](../README.md)

# intlFormat

Format the date with Intl.DateTimeFormat



## Parameters
- `date` (DateTimeInterface|string|int)
- `formatOptions` (array)
- `localeOptions` (array)

## Returns
- `string`

## Examples
Represent 4 October 2019 in middle-endian format:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::intlFormat(date: new DateTimeImmutable('2019-10-04 12:30:13'));
// => 10/4/2019
```

Represent 4 October 2019 in Korean. Convert the date with locale's options.
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::intlFormat(
    date: new DateTimeImmutable('2019-10-04 12:30:13'),
    formatOptions: [
        'locale' => 'ko-KR',
        ]
);
// => 2019. 10. 4.
```

Represent 4 October 2019. Convert the date with format's options.
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = intlFormat.default(new DateTimeImmutable('2019-10-04 12:30:13'), [
    'year' => 'numeric',
    'month' => 'numeric',
    'day' => 'numeric',
    'hour' => 'numeric',
]);
// => 10/4/2019, 12 PM
```

Represent 4 October 2019 in German. Convert the date with format's options and locale's options.
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::intlFormat(
    date: new DateTimeImmutable('2019-10-04 12:30:13'),
    formatOptions: [
        'weekday' => 'long',
        'year' => 'numeric',
        'month' => 'long',
        'day' => 'numeric',
        ],
    localeOptions: [
        'locale' => 'de-DE',
        ]
);
// => Freitag, 4. Oktober 2019
```
