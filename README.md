# PHP DateFns

**PHP DateFns** is a PHP adaptation of the JavaScript [date-fns](https://date-fns.org/) toolkit, bringing the same functional, immutable date utilities to PHP 8 projects. The sections below link to the generated PHP documentation for every helper.

## Installation

Install via Composer:

```bash
composer require rkr/date-fns
```

## Quick start

```php
<?php

use DateFns\DateFns;

$date = new DateTimeImmutable('2024-02-10 13:45:00');
$shifted = DateFns::add($date, ['days' => 5, 'hours' => 2]);

echo DateFns::format($shifted, 'yyyy-MM-dd HH:mm:ss');
```

## Credits

- Original JavaScript implementation: [date-fns](https://date-fns.org/) by [Sasha Koss](https://github.com/kossnocorp) and the date-fns community.
- Huge thanks to Sasha Koss for creating date-fns and sharing it with everyone—this PHP port happily stands on your shoulders.

## Funktionen

### Common Helpers

- [`DateFns::add($date, array $duration): DateTimeInterface`](docs/add.md)<br />
  Add the specified years, months, weeks, days, hours, minutes, and seconds to the given date.
- [`DateFns::closestIndexTo($dateToCompare, array $dates): ?int`](docs/closestIndexTo.md)<br />
  Return an index of the closest date from the array comparing to the given date.
- [`DateFns::closestTo($dateToCompare, array $dates): ?DateTimeInterface`](docs/closestTo.md)<br />
  Return a date from the array closest to the given date.
- [`DateFns::compareAsc($dateLeft, $dateRight): int`](docs/compareAsc.md)<br />
  Compare the two dates and return -1, 0, or 1.
- [`DateFns::compareDesc($dateLeft, $dateRight): int`](docs/compareDesc.md)<br />
  Compare the two dates reverse chronologically and return -1, 0, or 1.
- [`DateFns::format($date, string $formatStr): string`](docs/format.md)<br />
  Format the date.
- [`DateFns::formatDistance($date, $baseDate, array $options = []): string`](docs/formatDistance.md)<br />
  Return the distance between the given dates in words.
- [`DateFns::formatDistanceStrict($date, $baseDate, array $options = []): string`](docs/formatDistanceStrict.md)<br />
  Return the distance between the given dates in words.
- [`DateFns::formatDistanceToNow($date, array $options = []): string`](docs/formatDistanceToNow.md)<br />
  Return the distance between the given date and now in words.
- [`DateFns::formatDistanceToNowStrict($date, array $options = []): string`](docs/formatDistanceToNowStrict.md)<br />
  Return the distance between the given date and now in words.
- [`DateFns::formatDuration(array $duration, array $options = []): string`](docs/formatDuration.md)<br />
  Formats a duration in human-readable format
- [`DateFns::formatISO($date, array $options = []): string`](docs/formatISO.md)<br />
  Format the date according to the ISO 8601 standard (https://support.sas.com/documentation/cdl/en/lrdict/64316/HTML/default/viewer.htm#a003169814.htm). 
- [`DateFns::formatISO9075($date, array $options = []): string`](docs/formatISO9075.md)<br />
  Format the date according to the ISO 9075 standard (https://dev.mysql.com/doc/refman/5.7/en/date-and-time-functions.html#function_get-format). 
- [`DateFns::formatISODuration($duration): string`](docs/formatISODuration.md)<br />
  Format a duration object according as ISO 8601 duration string
- [`DateFns::formatRelative($date, $baseDate, array $options = []): string`](docs/formatRelative.md)<br />
  Represent the date in words relative to the given base date.
- [`DateFns::formatRFC3339($date, array $options = []): string`](docs/formatRFC3339.md)<br />
  Format the date according to the RFC 3339 standard (https://tools.ietf.org/html/rfc3339#section-5.6).
- [`DateFns::formatRFC7231($date): string`](docs/formatRFC7231.md)<br />
  Format the date according to the RFC 7231 standard (https://tools.ietf.org/html/rfc7231#section-7.1.1.1).
- [`DateFns::getDefaultOptions(): array`](docs/getDefaultOptions.md)<br />
  Get default options.
- [`DateFns::intervalToDuration(array $interval): array`](docs/intervalToDuration.md)<br />
  Convert interval to duration
- [`DateFns::intlFormat($date, array $formatOptions = [], array $localeOptions = []): string`](docs/intlFormat.md)<br />
  Format the date with Intl.DateTimeFormat (https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/DateTimeFormat). 
- [`DateFns::intlFormatDistance($laterDate, $earlierDate, array $options = []): string`](docs/intlFormatDistance.md)<br />
  Formats distance between two dates in a human-readable format
- [`DateFns::isAfter($date, $dateToCompare): bool`](docs/isAfter.md)<br />
  Is the first date after the second one?
- [`DateFns::isBefore($date, $dateToCompare): bool`](docs/isBefore.md)<br />
  Is the first date before the second one?
- [`DateFns::isDate($value): bool`](docs/isDate.md)<br />
  Is the given value a date?
- [`DateFns::isEqual($dateLeft, $dateRight): bool`](docs/isEqual.md)<br />
  Are the given dates equal?
- [`DateFns::isExists(int $year, int $month, int $day): bool`](docs/isExists.md)<br />
  Is the given date exists?
- [`DateFns::isFuture($date): bool`](docs/isFuture.md)<br />
  Is the given date in the future?
- [`DateFns::isMatch(string $dateString, string $formatString, array $options = []): bool`](docs/isMatch.md)<br />
  validates the date string against given formats
- [`DateFns::isPast($date): bool`](docs/isPast.md)<br />
  Is the given date in the past?
- [`DateFns::isValid($date): bool`](docs/isValid.md)<br />
  Is the given date valid?
- [`DateFns::lightFormat($date, string $format): string`](docs/lightFormat.md)<br />
  Format the date.
- [`DateFns::max(DateTimeInterface|string|int ...$dates): DateTimeImmutable`](docs/max.md)<br />
  Return the latest of the given dates.
- [`DateFns::min(DateTimeInterface|string|int ...$dates): DateTimeImmutable`](docs/min.md)<br />
  Returns the earliest of the given dates.
- [`DateFns::parse(string $dateString, string $formatString, $referenceDate, array $options = []): DateTimeImmutable`](docs/parse.md)<br />
  Parse the date.
- [`DateFns::parseISO(string $argument, array $options = []): DateTimeImmutable`](docs/parseISO.md)<br />
  Parse ISO string
- [`DateFns::set($date, array $values): DateTimeImmutable`](docs/set.md)<br />
  Set date values to a given date.
- [`DateFns::setDefaultOptions(array $options): void`](docs/setDefaultOptions.md)<br />
  Set default options including locale.
- [`DateFns::sub($date, array $duration): DateTimeImmutable`](docs/sub.md)<br />
  Subtract the specified years, months, weeks, days, hours, minutes, and seconds from the given date.
- [`DateFns::toDate($argument): DateTimeImmutable`](docs/toDate.md)<br />
  Convert the given argument to an instance of Date.


### Conversion Helpers

- [`DateFns::daysToWeeks(int $days): int`](docs/daysToWeeks.md)<br />
  Convert days to weeks.
- [`DateFns::hoursToMilliseconds(int $hours): int`](docs/hoursToMilliseconds.md)<br />
  Convert hours to milliseconds.
- [`DateFns::hoursToMinutes(int $hours): int`](docs/hoursToMinutes.md)<br />
  Convert hours to minutes.
- [`DateFns::hoursToSeconds(int $hours): int`](docs/hoursToSeconds.md)<br />
  Convert hours to seconds.
- [`DateFns::millisecondsToHours(int $milliseconds): int`](docs/millisecondsToHours.md)<br />
  Convert milliseconds to hours.
- [`DateFns::millisecondsToMinutes(int $milliseconds): int`](docs/millisecondsToMinutes.md)<br />
  Convert milliseconds to minutes.
- [`DateFns::millisecondsToSeconds(int $milliseconds): int`](docs/millisecondsToSeconds.md)<br />
  Convert milliseconds to seconds.
- [`DateFns::minutesToHours(int $minutes): int`](docs/minutesToHours.md)<br />
  Convert minutes to hours.
- [`DateFns::minutesToMilliseconds(int $minutes): int`](docs/minutesToMilliseconds.md)<br />
  Convert minutes to milliseconds.
- [`DateFns::minutesToSeconds(int $minutes): int`](docs/minutesToSeconds.md)<br />
  Convert minutes to seconds.
- [`DateFns::monthsToQuarters(int $months): int`](docs/monthsToQuarters.md)<br />
  Convert number of months to quarters.
- [`DateFns::monthsToYears(int $months): int`](docs/monthsToYears.md)<br />
  Convert number of months to years.
- [`DateFns::quartersToMonths(int $quarters): int`](docs/quartersToMonths.md)<br />
  Convert number of quarters to months.
- [`DateFns::quartersToYears(int $quarters): int`](docs/quartersToYears.md)<br />
  Convert number of quarters to years.
- [`DateFns::secondsToHours(int $seconds): int`](docs/secondsToHours.md)<br />
  Convert seconds to hours.
- [`DateFns::secondsToMilliseconds(int $seconds): int`](docs/secondsToMilliseconds.md)<br />
  Convert seconds to milliseconds.
- [`DateFns::secondsToMinutes(int $seconds): int`](docs/secondsToMinutes.md)<br />
  Convert seconds to minutes.
- [`DateFns::weeksToDays(int $weeks): int`](docs/weeksToDays.md)<br />
  Convert weeks to days.
- [`DateFns::yearsToDays(int $years): int`](docs/yearsToDays.md)<br />
  Convert years to days.
- [`DateFns::yearsToMonths(int $years): int`](docs/yearsToMonths.md)<br />
  Convert years to months.
- [`DateFns::yearsToQuarters(int $years): int`](docs/yearsToQuarters.md)<br />
  Convert years to quarters.


### Interval Helpers

- [`DateFns::areIntervalsOverlapping(array $intervalLeft, array $intervalRight, array $options = []): bool`](docs/areIntervalsOverlapping.md)<br />
  Is the given time interval overlapping with another time interval?
- [`DateFns::clamp($date, array $interval): DateTimeImmutable`](docs/clamp.md)<br />
  Return a date bounded by the start and the end of the given interval.
- [`DateFns::eachDayOfInterval(array $interval, array $options = []): array`](docs/eachDayOfInterval.md)<br />
  Return the array of dates within the specified time interval.
- [`DateFns::eachHourOfInterval(array $interval, array $options = []): array`](docs/eachHourOfInterval.md)<br />
  Return the array of hours within the specified time interval.
- [`DateFns::eachMinuteOfInterval(array $interval, array $options = []): array`](docs/eachMinuteOfInterval.md)<br />
  Return the array of minutes within the specified time interval.
- [`DateFns::eachMonthOfInterval(array $interval, array $options = []): array`](docs/eachMonthOfInterval.md)<br />
  Return the array of months within the specified time interval.
- [`DateFns::eachQuarterOfInterval(array $interval, array $options = []): array`](docs/eachQuarterOfInterval.md)<br />
  Return the array of quarters within the specified time interval.
- [`DateFns::eachWeekendOfInterval(array $interval): array`](docs/eachWeekendOfInterval.md)<br />
  List all the Saturdays and Sundays in the given date interval.
- [`DateFns::eachWeekOfInterval(array $interval, array $options = []): array`](docs/eachWeekOfInterval.md)<br />
  Return the array of weeks within the specified time interval.
- [`DateFns::eachYearOfInterval(array $interval, array $options = []): array`](docs/eachYearOfInterval.md)<br />
  Return the array of yearly timestamps within the specified time interval.
- [`DateFns::getOverlappingDaysInIntervals(array $intervalLeft, array $intervalRight): int`](docs/getOverlappingDaysInIntervals.md)<br />
  Get the number of days that overlap in two time intervals
- [`DateFns::interval($start, $end, array $options = []): array`](docs/interval.md)<br />
  Creates an interval object and validates its values.
- [`DateFns::isWithinInterval($date, array $interval): bool`](docs/isWithinInterval.md)<br />
  Is the given date within the interval?


### Timestamp Helpers

- [`DateFns::fromUnixTime($unixTime): DateTimeImmutable`](docs/fromUnixTime.md)<br />
  Create a date from a Unix timestamp.
- [`DateFns::getTime($date): int`](docs/getTime.md)<br />
  Get the milliseconds timestamp of the given date.
- [`DateFns::getUnixTime($date): int`](docs/getUnixTime.md)<br />
  Get the seconds timestamp of the given date.


### Millisecond Helpers

- [`DateFns::addMilliseconds($date, int $amount): DateTimeImmutable`](docs/addMilliseconds.md)<br />
  Add the specified number of milliseconds to the given date.
- [`DateFns::differenceInMilliseconds($laterDate, $earlierDate): int`](docs/differenceInMilliseconds.md)<br />
  Get the number of milliseconds between the given dates.
- [`DateFns::getMilliseconds($date): int`](docs/getMilliseconds.md)<br />
  Get the milliseconds of the given date.
- [`DateFns::milliseconds(array $duration): int`](docs/milliseconds.md)<br />
  Returns the number of milliseconds in the specified, years, months, weeks, days, hours, minutes, and seconds.
- [`DateFns::setMilliseconds($date, int $milliseconds): DateTimeImmutable`](docs/setMilliseconds.md)<br />
  Set the milliseconds to the given date.


### Second Helpers

- [`DateFns::addSeconds($date, int $amount): DateTimeImmutable`](docs/addSeconds.md)<br />
  Add the specified number of seconds to the given date.
- [`DateFns::differenceInSeconds($laterDate, $earlierDate, array $options = []): int`](docs/differenceInSeconds.md)<br />
  Get the number of seconds between the given dates.
- [`DateFns::endOfSecond($date): DateTimeImmutable`](docs/endOfSecond.md)<br />
  Return the end of a second for the given date.
- [`DateFns::getSeconds($date): int`](docs/getSeconds.md)<br />
  Get the seconds of the given date.
- [`DateFns::isSameSecond($dateLeft, $dateRight): bool`](docs/isSameSecond.md)<br />
  Are the given dates in the same second (and hour and day)?
- [`DateFns::isThisSecond($date): bool`](docs/isThisSecond.md)<br />
  Is the given date in the same second as the current date?
- [`DateFns::setSeconds($date, int $seconds): DateTimeImmutable`](docs/setSeconds.md)<br />
  Set the seconds to the given date, with context support.
- [`DateFns::startOfSecond($date): DateTimeImmutable`](docs/startOfSecond.md)<br />
  Return the start of a second for the given date.


### Minute Helpers

- [`DateFns::addMinutes($date, int $amount): DateTimeImmutable`](docs/addMinutes.md)<br />
  Add the specified number of minutes to the given date.
- [`DateFns::differenceInMinutes($dateLeft, $dateRight, array $options = []): int`](docs/differenceInMinutes.md)<br />
  Get the number of minutes between the given dates.
- [`DateFns::endOfMinute($date): DateTimeImmutable`](docs/endOfMinute.md)<br />
  Return the end of a minute for the given date.
- [`DateFns::getMinutes($date): int`](docs/getMinutes.md)<br />
  Get the minutes of the given date.
- [`DateFns::isSameMinute($dateLeft, $dateRight): bool`](docs/isSameMinute.md)<br />
  Are the given dates in the same minute (and hour and day)?
- [`DateFns::isThisMinute($date): bool`](docs/isThisMinute.md)<br />
  Is the given date in the same minute as the current date?
- [`DateFns::roundToNearestMinutes($date, array $options = []): DateTimeImmutable`](docs/roundToNearestMinutes.md)<br />
  Rounds the given date to the nearest minute
- [`DateFns::setMinutes($date, int $minutes): DateTimeImmutable`](docs/setMinutes.md)<br />
  Set the minutes to the given date.
- [`DateFns::startOfMinute($date): DateTimeImmutable`](docs/startOfMinute.md)<br />
  Return the start of a minute for the given date.
- [`DateFns::subMinutes($date, int $amount): DateTimeImmutable`](docs/subMinutes.md)<br />
  Subtract the specified number of minutes from the given date.


### Hour Helpers

- [`DateFns::addHours($date, int $amount): DateTimeImmutable`](docs/addHours.md)<br />
  Add the specified number of hours to the given date.
- [`DateFns::differenceInHours($laterDate, $earlierDate, array $options = []): int`](docs/differenceInHours.md)<br />
  Get the number of hours between the given dates.
- [`DateFns::endOfHour($date): DateTimeImmutable`](docs/endOfHour.md)<br />
  Return the end of an hour for the given date.
- [`DateFns::getHours($date): int`](docs/getHours.md)<br />
  Get the hours of the given date.
- [`DateFns::isSameHour($dateLeft, $dateRight): bool`](docs/isSameHour.md)<br />
  Are the given dates in the same hour (and same day)?
- [`DateFns::isThisHour($date): bool`](docs/isThisHour.md)<br />
  Is the given date in the same hour as the current date?
- [`DateFns::roundToNearestHours($date, array $options = []): DateTimeImmutable`](docs/roundToNearestHours.md)<br />
  Rounds the given date to the nearest hour
- [`DateFns::setHours($date, int $hours): DateTimeImmutable`](docs/setHours.md)<br />
  Set the hours to the given date.
- [`DateFns::startOfHour($date): DateTimeImmutable`](docs/startOfHour.md)<br />
  Return the start of an hour for the given date.
- [`DateFns::subHours($date, int $amount): DateTimeImmutable`](docs/subHours.md)<br />
  Subtract the specified number of hours from the given date.


### Day Helpers

- [`DateFns::addBusinessDays($date, int $amount): DateTimeImmutable`](docs/addBusinessDays.md)<br />
  Add the specified number of business days (mon - fri) to the given date.
- [`DateFns::addDays($date, int $amount): DateTimeImmutable`](docs/addDays.md)<br />
  Add the specified number of days to the given date.
- [`DateFns::differenceInBusinessDays($laterDate, $earlierDate): int`](docs/differenceInBusinessDays.md)<br />
  Get the number of business days between the given dates.
- [`DateFns::differenceInCalendarDays($laterDate, $earlierDate): int`](docs/differenceInCalendarDays.md)<br />
  Get the number of calendar days between the given dates.
- [`DateFns::differenceInDays($laterDate, $earlierDate): int`](docs/differenceInDays.md)<br />
  Get the number of full days between the given dates.
- [`DateFns::endOfDay($date): DateTimeImmutable`](docs/endOfDay.md)<br />
  Return the end of a day for the given date.
- [`DateFns::endOfToday(): DateTimeImmutable`](docs/endOfToday.md)<br />
  Return the end of today.
- [`DateFns::endOfTomorrow(): DateTimeImmutable`](docs/endOfTomorrow.md)<br />
  Return the end of tomorrow.
- [`DateFns::endOfYesterday(): DateTimeImmutable`](docs/endOfYesterday.md)<br />
  Return the end of yesterday.
- [`DateFns::getDate($date): int`](docs/getDate.md)<br />
  Get the day of the month of the given date.
- [`DateFns::getDayOfYear($date): int`](docs/getDayOfYear.md)<br />
  Get the day of the year of the given date.
- [`DateFns::isSameDay($dateLeft, $dateRight): bool`](docs/isSameDay.md)<br />
  Are the given dates in the same day (and year and month)?
- [`DateFns::isToday($date): bool`](docs/isToday.md)<br />
  Is the given date today?
- [`DateFns::isTomorrow($date): bool`](docs/isTomorrow.md)<br />
  Is the given date tomorrow?
- [`DateFns::isYesterday($date): bool`](docs/isYesterday.md)<br />
  Is the given date yesterday?
- [`DateFns::setDate($date, int $day): DateTimeImmutable`](docs/setDate.md)<br />
  Set the day of the month to the given date.
- [`DateFns::setDayOfYear($date, int $dayOfYear): DateTimeImmutable`](docs/setDayOfYear.md)<br />
  Set the day of the year to the given date.
- [`DateFns::startOfDay($date): DateTimeImmutable`](docs/startOfDay.md)<br />
  Return the start of a day for the given date.
- [`DateFns::startOfToday(): DateTimeImmutable`](docs/startOfToday.md)<br />
  Return the start of today.
- [`DateFns::startOfTomorrow(): DateTimeImmutable`](docs/startOfTomorrow.md)<br />
  Return the start of tomorrow.
- [`DateFns::startOfYesterday(): DateTimeImmutable`](docs/startOfYesterday.md)<br />
  Return the start of yesterday.
- [`DateFns::subBusinessDays($date, int $amount): DateTimeImmutable`](docs/subBusinessDays.md)<br />
  Subtract the specified number of business days (mon - fri) from the given date.
- [`DateFns::subDays($date, int $amount): DateTimeImmutable`](docs/subDays.md)<br />
  Subtract the specified number of days from the given date.


### Weekday Helpers

- [`DateFns::getDay(DateTimeInterface|int|float|string|null $date): int`](docs/getDay.md)<br />
  Get the day of the week of the given date.
- [`DateFns::getISODay(DateTimeInterface|int|float|string|null $date): int`](docs/getISODay.md)<br />
  Get the day of the ISO week of the given date.
- [`DateFns::isFriday(DateTimeInterface|int|float|string|null $date): bool`](docs/isFriday.md)<br />
  Is the given date Friday?
- [`DateFns::isMonday(DateTimeInterface|int|float|string|null $date): bool`](docs/isMonday.md)<br />
  Is the given date Monday?
- [`DateFns::isSaturday(DateTimeInterface|int|float|string|null $date): bool`](docs/isSaturday.md)<br />
  Is the given date Saturday?
- [`DateFns::isSunday(DateTimeInterface|int|float|string|null $date): bool`](docs/isSunday.md)<br />
  Is the given date Sunday?
- [`DateFns::isThursday(DateTimeInterface|int|float|string|null $date): bool`](docs/isThursday.md)<br />
  Is the given date Thursday?
- [`DateFns::isTuesday(DateTimeInterface|int|float|string|null $date): bool`](docs/isTuesday.md)<br />
  Is the given date Tuesday?
- [`DateFns::isWednesday(DateTimeInterface|int|float|string|null $date): bool`](docs/isWednesday.md)<br />
  Is the given date Wednesday?
- [`DateFns::isWeekend(DateTimeInterface|int|float|string|null $date): bool`](docs/isWeekend.md)<br />
  Does the given date fall on a weekend?
- [`DateFns::nextDay(DateTimeInterface|int|float|string|null $date, int $day): DateTimeImmutable`](docs/nextDay.md)<br />
  When is the next day of the week? 0-6 the day of the week, 0 represents Sunday.
- [`DateFns::nextFriday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/nextFriday.md)<br />
  When is the next Friday?
- [`DateFns::nextMonday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/nextMonday.md)<br />
  When is the next Monday?
- [`DateFns::nextSaturday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/nextSaturday.md)<br />
  When is the next Saturday?
- [`DateFns::nextSunday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/nextSunday.md)<br />
  When is the next Sunday?
- [`DateFns::nextThursday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/nextThursday.md)<br />
  When is the next Thursday?
- [`DateFns::nextTuesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/nextTuesday.md)<br />
  When is the next Tuesday?
- [`DateFns::nextWednesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/nextWednesday.md)<br />
  When is the next Wednesday?
- [`DateFns::previousDay(DateTimeInterface|int|float|string|null $date, int $day): DateTimeImmutable`](docs/previousDay.md)<br />
  When is the previous day of the week?
- [`DateFns::previousFriday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/previousFriday.md)<br />
  When is the previous Friday?
- [`DateFns::previousMonday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/previousMonday.md)<br />
  When is the previous Monday?
- [`DateFns::previousSaturday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/previousSaturday.md)<br />
  When is the previous Saturday?
- [`DateFns::previousSunday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/previousSunday.md)<br />
  When is the previous Sunday?
- [`DateFns::previousThursday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/previousThursday.md)<br />
  When is the previous Thursday?
- [`DateFns::previousTuesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/previousTuesday.md)<br />
  When is the previous Tuesday?
- [`DateFns::previousWednesday(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/previousWednesday.md)<br />
  When is the previous Wednesday?
- [`DateFns::setDay(DateTimeInterface|int|float|string|null $date, int $day): DateTimeImmutable`](docs/setDay.md)<br />
  Set the day of the week to the given date.
- [`DateFns::setISODay(DateTimeInterface|int|float|string|null $date, int $isoDay): DateTimeImmutable`](docs/setISODay.md)<br />
  Set the day of the ISO week to the given date.


### Week Helpers

- [`DateFns::addWeeks($date, int $amount): DateTimeImmutable`](docs/addWeeks.md)<br />
  Add the specified number of weeks to the given date.
- [`DateFns::differenceInCalendarWeeks($laterDate, $earlierDate, array $options = []): int`](docs/differenceInCalendarWeeks.md)<br />
  Get the number of calendar weeks between the given dates.
- [`DateFns::differenceInWeeks($laterDate, $earlierDate, array $options = []): int`](docs/differenceInWeeks.md)<br />
  Get the number of full weeks between the given dates.
- [`DateFns::endOfWeek($date, array $options = []): DateTimeImmutable`](docs/endOfWeek.md)<br />
  Return the end of a week for the given date.
- [`DateFns::getWeek($date, array $options = []): int`](docs/getWeek.md)<br />
  Get the local week index of the given date.
- [`DateFns::getWeekOfMonth($date, array $options = []): int`](docs/getWeekOfMonth.md)<br />
  Get the week of the month of the given date.
- [`DateFns::getWeeksInMonth($date, array $options = []): int`](docs/getWeeksInMonth.md)<br />
  Get the number of calendar weeks a month spans.
- [`DateFns::isSameWeek($dateLeft, $dateRight, array $options = []): bool`](docs/isSameWeek.md)<br />
  Are the given dates in the same week (and month and year)?
- [`DateFns::isThisWeek($date, array $options = []): bool`](docs/isThisWeek.md)<br />
  Is the given date in the same week as the current date?
- [`DateFns::lastDayOfWeek($date, array $options = []): DateTimeImmutable`](docs/lastDayOfWeek.md)<br />
  Return the last day of a week for the given date.
- [`DateFns::setWeek($date, int $week, array $options = []): DateTimeImmutable`](docs/setWeek.md)<br />
  Set the local week to the given date.
- [`DateFns::startOfWeek($date, array $options = []): DateTimeImmutable`](docs/startOfWeek.md)<br />
  Return the start of a week for the given date.
- [`DateFns::subWeeks($date, int $amount): DateTimeImmutable`](docs/subWeeks.md)<br />
  Subtract the specified number of weeks from the given date.


### ISO Week Helpers

- [`DateFns::differenceInCalendarISOWeeks(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInCalendarISOWeeks.md)<br />
  Get the number of calendar ISO weeks between the given dates.
- [`DateFns::endOfISOWeek(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/endOfISOWeek.md)<br />
  Return the end of an ISO week for the given date.
- [`DateFns::getISOWeek(DateTimeInterface|int|float|string|null $date): int`](docs/getISOWeek.md)<br />
  Get the ISO week of the given date.
- [`DateFns::isSameISOWeek(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool`](docs/isSameISOWeek.md)<br />
  Are the given dates in the same ISO week (and year)?
- [`DateFns::isThisISOWeek(DateTimeInterface|int|float|string|null $date): bool`](docs/isThisISOWeek.md)<br />
  Is the given date in the same ISO week as the current date?
- [`DateFns::lastDayOfISOWeek(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/lastDayOfISOWeek.md)<br />
  Return the last day of an ISO week for the given date.
- [`DateFns::setISOWeek(DateTimeInterface|int|float|string|null $date, int $week): DateTimeImmutable`](docs/setISOWeek.md)<br />
  Set the ISO week to the given date.
- [`DateFns::startOfISOWeek(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/startOfISOWeek.md)<br />
  Return the start of an ISO week for the given date.


### Month Helpers

- [`DateFns::addMonths(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/addMonths.md)<br />
  Add the specified number of months to the given date.
- [`DateFns::differenceInCalendarMonths(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInCalendarMonths.md)<br />
  Get the number of calendar months between the given dates.
- [`DateFns::differenceInMonths(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInMonths.md)<br />
  Get the number of full months between the given dates.
- [`DateFns::eachWeekendOfMonth(DateTimeInterface|int|float|string|null $date): array`](docs/eachWeekendOfMonth.md)<br />
  List all the Saturdays and Sundays in the given month.
- [`DateFns::endOfMonth(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/endOfMonth.md)<br />
  Return the end of a month for the given date.
- [`DateFns::getDaysInMonth(DateTimeInterface|int|float|string|null $date): int`](docs/getDaysInMonth.md)<br />
  Get the number of days in a month of the given date.
- [`DateFns::getMonth(DateTimeInterface|int|float|string|null $date): int`](docs/getMonth.md)<br />
  Get the month of the given date.
- [`DateFns::isFirstDayOfMonth(DateTimeInterface|int|float|string|null $date): bool`](docs/isFirstDayOfMonth.md)<br />
  Is the given date the first day of a month?
- [`DateFns::isLastDayOfMonth(DateTimeInterface|int|float|string|null $date): bool`](docs/isLastDayOfMonth.md)<br />
  Is the given date the last day of a month?
- [`DateFns::isSameMonth(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool`](docs/isSameMonth.md)<br />
  Are the given dates in the same month (and year)?
- [`DateFns::isThisMonth(DateTimeInterface|int|float|string|null $date): bool`](docs/isThisMonth.md)<br />
  Is the given date in the same month as the current date?
- [`DateFns::lastDayOfMonth(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/lastDayOfMonth.md)<br />
  Return the last day of a month for the given date.
- [`DateFns::setMonth(DateTimeInterface|int|float|string|null $date, int $month): DateTimeImmutable`](docs/setMonth.md)<br />
  Set the month to the given date.
- [`DateFns::startOfMonth(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/startOfMonth.md)<br />
  Return the start of a month for the given date.
- [`DateFns::subMonths(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/subMonths.md)<br />
  Subtract the specified number of months from the given date.


### Quarter Helpers

- [`DateFns::addQuarters(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/addQuarters.md)<br />
  Add the specified number of year quarters to the given date.
- [`DateFns::differenceInCalendarQuarters(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInCalendarQuarters.md)<br />
  Get the number of calendar quarters between the given dates.
- [`DateFns::differenceInQuarters(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate, array $options = []): int`](docs/differenceInQuarters.md)<br />
  Get the number of quarters between the given dates.
- [`DateFns::endOfQuarter(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/endOfQuarter.md)<br />
  Return the end of a year quarter for the given date.
- [`DateFns::getQuarter(DateTimeInterface|int|float|string|null $date): int`](docs/getQuarter.md)<br />
  Get the year quarter of the given date.
- [`DateFns::isSameQuarter(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool`](docs/isSameQuarter.md)<br />
  Are the given dates in the same quarter (and year)?
- [`DateFns::isThisQuarter(DateTimeInterface|int|float|string|null $date): bool`](docs/isThisQuarter.md)<br />
  Is the given date in the same quarter as the current date?
- [`DateFns::lastDayOfQuarter(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/lastDayOfQuarter.md)<br />
  Return the last day of a year quarter for the given date.
- [`DateFns::setQuarter(DateTimeInterface|int|float|string|null $date, int $quarter): DateTimeImmutable`](docs/setQuarter.md)<br />
  Set the year quarter to the given date.
- [`DateFns::startOfQuarter(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/startOfQuarter.md)<br />
  Return the start of a year quarter for the given date.
- [`DateFns::subQuarters(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/subQuarters.md)<br />
  Subtract the specified number of year quarters from the given date.


### Year Helpers

- [`DateFns::addYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/addYears.md)<br />
  Add the specified number of years to the given date.
- [`DateFns::differenceInCalendarYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInCalendarYears.md)<br />
  Get the number of calendar years between the given dates.
- [`DateFns::differenceInYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInYears.md)<br />
  Get the number of full years between the given dates.
- [`DateFns::eachWeekendOfYear(DateTimeInterface|int|float|string|null $date): array`](docs/eachWeekendOfYear.md)<br />
  List all the Saturdays and Sundays in the year.
- [`DateFns::endOfYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/endOfYear.md)<br />
  Return the end of a year for the given date.
- [`DateFns::getDaysInYear(DateTimeInterface|int|float|string|null $date): int`](docs/getDaysInYear.md)<br />
  Get the number of days in a year of the given date.
- [`DateFns::getYear(DateTimeInterface|int|float|string|null $date): int`](docs/getYear.md)<br />
  Get the year of the given date.
- [`DateFns::isLeapYear(DateTimeInterface|int|float|string|null $date): bool`](docs/isLeapYear.md)<br />
  Is the given date in the leap year?
- [`DateFns::isSameYear(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool`](docs/isSameYear.md)<br />
  Are the given dates in the same year?
- [`DateFns::isThisYear(DateTimeInterface|int|float|string|null $date): bool`](docs/isThisYear.md)<br />
  Is the given date in the same year as the current date?
- [`DateFns::lastDayOfYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/lastDayOfYear.md)<br />
  Return the last day of a year for the given date.
- [`DateFns::setYear(DateTimeInterface|int|float|string|null $date, int $year): DateTimeImmutable`](docs/setYear.md)<br />
  Set the year to the given date.
- [`DateFns::startOfYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/startOfYear.md)<br />
  Return the start of a year for the given date.
- [`DateFns::subYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/subYears.md)<br />
  Subtract the specified number of years from the given date.


### ISO Week-Numbering Year Helpers

- [`DateFns::addISOWeekYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/addISOWeekYears.md)<br />
  Add the specified number of ISO week-numbering years to the given date.
- [`DateFns::differenceInCalendarISOWeekYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInCalendarISOWeekYears.md)<br />
  Get the number of calendar ISO week-numbering years between the given dates.
- [`DateFns::differenceInISOWeekYears(DateTimeInterface|int|float|string|null $laterDate, DateTimeInterface|int|float|string|null $earlierDate): int`](docs/differenceInISOWeekYears.md)<br />
  Get the number of full ISO week-numbering years between the given dates.
- [`DateFns::endOfISOWeekYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/endOfISOWeekYear.md)<br />
  Return the end of an ISO week-numbering year for the given date.
- [`DateFns::getISOWeeksInYear(DateTimeInterface|int|float|string|null $date): int`](docs/getISOWeeksInYear.md)<br />
  Get the number of weeks in an ISO week-numbering year of the given date.
- [`DateFns::getISOWeekYear(DateTimeInterface|int|float|string|null $date): int`](docs/getISOWeekYear.md)<br />
  Get the ISO week-numbering year of the given date.
- [`DateFns::isSameISOWeekYear(DateTimeInterface|int|float|string|null $dateLeft, DateTimeInterface|int|float|string|null $dateRight): bool`](docs/isSameISOWeekYear.md)<br />
  Are the given dates in the same ISO week-numbering year?
- [`DateFns::lastDayOfISOWeekYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/lastDayOfISOWeekYear.md)<br />
  Return the last day of an ISO week-numbering year for the given date.
- [`DateFns::setISOWeekYear(DateTimeInterface|int|float|string|null $date, int $isoYear): DateTimeImmutable`](docs/setISOWeekYear.md)<br />
  Set the ISO week-numbering year to the given date.
- [`DateFns::startOfISOWeekYear(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/startOfISOWeekYear.md)<br />
  Return the start of an ISO week-numbering year for the given date.
- [`DateFns::subISOWeekYears(DateTimeInterface|int|float|string|null $date, int $amount): DateTimeImmutable`](docs/subISOWeekYears.md)<br />
  Subtract the specified number of ISO week-numbering years from the given date.


### Decade Helpers

- [`DateFns::endOfDecade(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/endOfDecade.md)<br />
  Return the end of a decade for the given date.
- [`DateFns::getDecade(DateTimeInterface|int|float|string|null $date): int`](docs/getDecade.md)<br />
  Get the decade of the given date.
- [`DateFns::lastDayOfDecade(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/lastDayOfDecade.md)<br />
  Return the last day of a decade for the given date.
- [`DateFns::startOfDecade(DateTimeInterface|int|float|string|null $date): DateTimeImmutable`](docs/startOfDecade.md)<br />
  Return the start of a decade for the given date.


### Generic Helpers

- [`DateFns::constructFrom($referenceDate, $value): DateTimeImmutable|DateTimeInterface`](docs/constructFrom.md)<br />
  Constructs a date using the reference date and the value
- [`DateFns::constructNow($referenceDate): DateTimeImmutable|DateTime`](docs/constructNow.md)<br />
  Constructs a new current date using the passed value constructor.
- [`DateFns::transpose(DateTimeInterface $date, $constructor): DateTimeInterface`](docs/transpose.md)<br />
  Transpose the date to the given constructor.
