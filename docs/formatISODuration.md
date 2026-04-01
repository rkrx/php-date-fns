[Back to README](../README.md)

# formatISODuration

Format a duration object according as ISO 8601 duration string



## Parameters
- `duration` (array{years: int, months: int, weeks: int, days: int, hours: int, minutes: int, seconds: int}|DateInterval)

## Returns
- `string`

## Examples
Format the given duration as ISO 8601 string
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::formatISODuration(
    duration: [
        'years' => 39,
        'months' => 2,
        'days' => 20,
        'hours' => 7,
        'minutes' => 5,
        'seconds' => 0
        ]
);
// => 'P39Y2M20DT0H0M0S'
```
