[Back to README](../README.md)

# isDate

Is the given value a date?



## Parameters
- `value` (mixed)

## Returns
- `bool`

## Examples
For a valid date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isDate(value: new DateTimeImmutable());
// => true
```

For an invalid date:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isDate(value: new DateTimeImmutable(NaN));
// => true
```

For some value:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isDate(value: '2014-02-31');
// => false
```

For an object:
```php
<?php

use DateFns\DateFns;
use DateTimeImmutable;

$result = DateFns::isDate(value: []);
// => false
```
