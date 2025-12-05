[Back to README](../README.md)

# transpose

Transpose the given date to the provided constructor/context.



## Parameters
- `date` (DateTimeInterface)
- `constructor` (DateTimeInterface|string|callable)

## Returns
- `DateTimeInterface` - Date transposed to the given constructor

## Examples
Create July 10, 2022 00:00 in locale time zone
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$date = new DateTimeImmutable('2022-07-10 00:00:00');
// => 'Sun Jul 10 2022 00:00:00 GMT+0800 (Singapore Standard Time)'
```

Transpose the date to July 10, 2022 00:00 in UTC
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

DateFns::transpose(date, UTCDate);
// => 'Sun Jul 10 2022 00:00:00 GMT+0000 (Coordinated Universal Time)'
```
