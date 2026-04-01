[Back to README](../README.md)

# formatDuration

Formats a duration in human-readable format.



## Parameters
- `duration` (array)
- `options` (array)

## Returns
- `string`

## Examples
Format full duration
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::formatDuration(
    duration: [
        'years' => 2,
        'months' => 9,
        'weeks' => 1,
        'days' => 7,
        'hours' => 5,
        'minutes' => 9,
        'seconds' => 30
        ]
);
// => '2 years 9 months 1 week 7 days 5 hours 9 minutes 30 seconds'
```

Format partial duration
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::formatDuration(
    duration: [
        'months' => 9,
        'days' => 2 ]
);
// => '9 months 2 days'
```

Customize the format
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::formatDuration(
    duration: [
        'years' => 2,
        'months' => 9,
        'weeks' => 1,
        'days' => 7,
        'hours' => 5,
        'minutes' => 9,
        'seconds' => 30
        ],
    options: [
        'format' => [
        'months',
        'weeks'] ]
) === '9 months 1 week';
```

Customize the zeros presence
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::formatDuration(
    duration: [
        'years' => 0,
        'months' => 9 ]
);
// => '9 months'
DateFns::formatDuration(
    duration: [
        'years' => 0,
        'months' => 9 ],
    options: [
        'zero' => true ]
);
// => '0 years 9 months'
```

Customize the delimiter
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::formatDuration(
    duration: [
        'years' => 2,
        'months' => 9,
        'weeks' => 3 ],
    options: [
        'delimiter' => ',
        ' ]
);
// => '2 years, 9 months, 3 weeks'
```
