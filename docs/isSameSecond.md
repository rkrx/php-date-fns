[Back to README](../README.md)

# isSameSecond

Are the given dates in the same second?



## Parameters
- `dateLeft` (DateTimeInterface|string|int|float)
- `dateRight` (DateTimeInterface|string|int|float)

## Returns
- `bool`

## Examples
Are 4 September 2014 06:30:15.000 and 4 September 2014 06:30.15.500 in the same second?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameSecond(
    dateLeft: new DateTimeImmutable('2014-09-04 06:30:15'),
    dateRight: new DateTimeImmutable('2014-09-04 06:30:15')
);
// => true
```

Are 4 September 2014 06:00:15.000 and 4 September 2014 06:01.15.000 in the same second?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameSecond(
    dateLeft: new DateTimeImmutable('2014-09-04 06:00:15'),
    dateRight: new DateTimeImmutable('2014-09-04 06:01:15')
);
// => false
```

Are 4 September 2014 06:00:15.000 and 5 September 2014 06:00.15.000 in the same second?
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isSameSecond(
    dateLeft: new DateTimeImmutable('2014-09-04 06:00:15'),
    dateRight: new DateTimeImmutable('2014-09-05 06:00:15')
);
// => false
```
