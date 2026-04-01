[Back to README](../README.md)

# isSameDay

Are the given dates in the same day?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float)
- `dateRight` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
Are 4 September 06:00:00 and 4 September 18:00:00 in the same day?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameDay(dateLeft: new DateTimeImmutable('2014-09-04 06:00:00'), dateRight: new DateTimeImmutable('2014-09-04 18:00:00'));
// => true
```

Are 4 September and 4 October in the same day?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameDay(dateLeft: new DateTimeImmutable('2014-09-04 00:00:00'), dateRight: new DateTimeImmutable('2014-10-04 00:00:00'));
// => false
```

Are 4 September, 2014 and 4 September, 2015 in the same day?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameDay(dateLeft: new DateTimeImmutable('2014-09-04 00:00:00'), dateRight: new DateTimeImmutable('2015-09-04 00:00:00'));
// => false
```
