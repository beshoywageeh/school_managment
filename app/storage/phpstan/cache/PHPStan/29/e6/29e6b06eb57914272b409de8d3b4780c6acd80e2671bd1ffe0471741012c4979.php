<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/CarbonInterval.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\CarbonInterval
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-20b29e4d2df2c5c26ed619a8580a92fa86afe80fdd3a93096963875bf06f6e59-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\CarbonInterval',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/CarbonInterval.php',
      ),
    ),
    'namespace' => 'Carbon',
    'name' => 'Carbon\\CarbonInterval',
    'shortName' => 'CarbonInterval',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A simple API extension for DateInterval.
 * The implementation provides helpers to handle weeks but only days are saved.
 * Weeks are calculated based on the total days of the current instance.
 *
 * @property int $years Total years of the current interval.
 * @property int $months Total months of the current interval.
 * @property int $weeks Total weeks of the current interval calculated from the days.
 * @property int $dayz Total days of the current interval (weeks * 7 + days).
 * @property int $hours Total hours of the current interval.
 * @property int $minutes Total minutes of the current interval.
 * @property int $seconds Total seconds of the current interval.
 * @property int $microseconds Total microseconds of the current interval.
 * @property int $milliseconds Total milliseconds of the current interval.
 * @property int $microExcludeMilli Remaining microseconds without the milliseconds.
 * @property int $dayzExcludeWeeks Total days remaining in the final week of the current instance (days % 7).
 * @property int $daysExcludeWeeks alias of dayzExcludeWeeks
 * @property-read float $totalYears Number of years equivalent to the interval.
 * @property-read float $totalMonths Number of months equivalent to the interval.
 * @property-read float $totalWeeks Number of weeks equivalent to the interval.
 * @property-read float $totalDays Number of days equivalent to the interval.
 * @property-read float $totalDayz Alias for totalDays.
 * @property-read float $totalHours Number of hours equivalent to the interval.
 * @property-read float $totalMinutes Number of minutes equivalent to the interval.
 * @property-read float $totalSeconds Number of seconds equivalent to the interval.
 * @property-read float $totalMilliseconds Number of milliseconds equivalent to the interval.
 * @property-read float $totalMicroseconds Number of microseconds equivalent to the interval.
 * @property-read string $locale locale of the current instance
 *
 * @method static CarbonInterval years($years = 1) Create instance specifying a number of years or modify the number of years if called on an instance.
 * @method static CarbonInterval year($years = 1) Alias for years()
 * @method static CarbonInterval months($months = 1) Create instance specifying a number of months or modify the number of months if called on an instance.
 * @method static CarbonInterval month($months = 1) Alias for months()
 * @method static CarbonInterval weeks($weeks = 1) Create instance specifying a number of weeks or modify the number of weeks if called on an instance.
 * @method static CarbonInterval week($weeks = 1) Alias for weeks()
 * @method static CarbonInterval days($days = 1) Create instance specifying a number of days or modify the number of days if called on an instance.
 * @method static CarbonInterval dayz($days = 1) Alias for days()
 * @method static CarbonInterval daysExcludeWeeks($days = 1) Create instance specifying a number of days or modify the number of days (keeping the current number of weeks) if called on an instance.
 * @method static CarbonInterval dayzExcludeWeeks($days = 1) Alias for daysExcludeWeeks()
 * @method static CarbonInterval day($days = 1) Alias for days()
 * @method static CarbonInterval hours($hours = 1) Create instance specifying a number of hours or modify the number of hours if called on an instance.
 * @method static CarbonInterval hour($hours = 1) Alias for hours()
 * @method static CarbonInterval minutes($minutes = 1) Create instance specifying a number of minutes or modify the number of minutes if called on an instance.
 * @method static CarbonInterval minute($minutes = 1) Alias for minutes()
 * @method static CarbonInterval seconds($seconds = 1) Create instance specifying a number of seconds or modify the number of seconds if called on an instance.
 * @method static CarbonInterval second($seconds = 1) Alias for seconds()
 * @method static CarbonInterval milliseconds($milliseconds = 1) Create instance specifying a number of milliseconds or modify the number of milliseconds if called on an instance.
 * @method static CarbonInterval millisecond($milliseconds = 1) Alias for milliseconds()
 * @method static CarbonInterval microseconds($microseconds = 1) Create instance specifying a number of microseconds or modify the number of microseconds if called on an instance.
 * @method static CarbonInterval microsecond($microseconds = 1) Alias for microseconds()
 * @method $this addYears(int $years) Add given number of years to the current interval
 * @method $this subYears(int $years) Subtract given number of years to the current interval
 * @method $this addMonths(int $months) Add given number of months to the current interval
 * @method $this subMonths(int $months) Subtract given number of months to the current interval
 * @method $this addWeeks(int|float $weeks) Add given number of weeks to the current interval
 * @method $this subWeeks(int|float $weeks) Subtract given number of weeks to the current interval
 * @method $this addDays(int|float $days) Add given number of days to the current interval
 * @method $this subDays(int|float $days) Subtract given number of days to the current interval
 * @method $this addHours(int|float $hours) Add given number of hours to the current interval
 * @method $this subHours(int|float $hours) Subtract given number of hours to the current interval
 * @method $this addMinutes(int|float $minutes) Add given number of minutes to the current interval
 * @method $this subMinutes(int|float $minutes) Subtract given number of minutes to the current interval
 * @method $this addSeconds(int|float $seconds) Add given number of seconds to the current interval
 * @method $this subSeconds(int|float $seconds) Subtract given number of seconds to the current interval
 * @method $this addMilliseconds(int|float $milliseconds) Add given number of milliseconds to the current interval
 * @method $this subMilliseconds(int|float $milliseconds) Subtract given number of milliseconds to the current interval
 * @method $this addMicroseconds(int|float $microseconds) Add given number of microseconds to the current interval
 * @method $this subMicroseconds(int|float $microseconds) Subtract given number of microseconds to the current interval
 * @method $this roundYear(int|float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this roundYears(int|float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this floorYear(int|float $precision = 1) Truncate the current instance year with given precision.
 * @method $this floorYears(int|float $precision = 1) Truncate the current instance year with given precision.
 * @method $this ceilYear(int|float $precision = 1) Ceil the current instance year with given precision.
 * @method $this ceilYears(int|float $precision = 1) Ceil the current instance year with given precision.
 * @method $this roundMonth(int|float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this roundMonths(int|float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this floorMonth(int|float $precision = 1) Truncate the current instance month with given precision.
 * @method $this floorMonths(int|float $precision = 1) Truncate the current instance month with given precision.
 * @method $this ceilMonth(int|float $precision = 1) Ceil the current instance month with given precision.
 * @method $this ceilMonths(int|float $precision = 1) Ceil the current instance month with given precision.
 * @method $this roundWeek(int|float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundWeeks(int|float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorWeek(int|float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorWeeks(int|float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilWeek(int|float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilWeeks(int|float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundDay(int|float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundDays(int|float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorDay(int|float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorDays(int|float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilDay(int|float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilDays(int|float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundHour(int|float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this roundHours(int|float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this floorHour(int|float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this floorHours(int|float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this ceilHour(int|float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this ceilHours(int|float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this roundMinute(int|float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this roundMinutes(int|float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this floorMinute(int|float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this floorMinutes(int|float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this ceilMinute(int|float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this ceilMinutes(int|float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this roundSecond(int|float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this roundSeconds(int|float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this floorSecond(int|float $precision = 1) Truncate the current instance second with given precision.
 * @method $this floorSeconds(int|float $precision = 1) Truncate the current instance second with given precision.
 * @method $this ceilSecond(int|float $precision = 1) Ceil the current instance second with given precision.
 * @method $this ceilSeconds(int|float $precision = 1) Ceil the current instance second with given precision.
 * @method $this roundMillennium(int|float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this roundMillennia(int|float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this floorMillennium(int|float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this floorMillennia(int|float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this ceilMillennium(int|float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this ceilMillennia(int|float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this roundCentury(int|float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this roundCenturies(int|float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this floorCentury(int|float $precision = 1) Truncate the current instance century with given precision.
 * @method $this floorCenturies(int|float $precision = 1) Truncate the current instance century with given precision.
 * @method $this ceilCentury(int|float $precision = 1) Ceil the current instance century with given precision.
 * @method $this ceilCenturies(int|float $precision = 1) Ceil the current instance century with given precision.
 * @method $this roundDecade(int|float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this roundDecades(int|float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this floorDecade(int|float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this floorDecades(int|float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this ceilDecade(int|float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this ceilDecades(int|float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this roundQuarter(int|float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this roundQuarters(int|float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this floorQuarter(int|float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this floorQuarters(int|float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this ceilQuarter(int|float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this ceilQuarters(int|float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this roundMillisecond(int|float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this roundMilliseconds(int|float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this floorMillisecond(int|float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this floorMilliseconds(int|float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this ceilMillisecond(int|float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this ceilMilliseconds(int|float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this roundMicrosecond(int|float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this roundMicroseconds(int|float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this floorMicrosecond(int|float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this floorMicroseconds(int|float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this ceilMicrosecond(int|float $precision = 1) Ceil the current instance microsecond with given precision.
 * @method $this ceilMicroseconds(int|float $precision = 1) Ceil the current instance microsecond with given precision.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 189,
    'endLine' => 3054,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'DateInterval',
    'implementsClassNames' => 
    array (
      0 => 'Carbon\\CarbonConverterInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Carbon\\Traits\\IntervalRounding',
      1 => 'Carbon\\Traits\\IntervalStep',
      2 => 'Carbon\\Traits\\MagicParameter',
      3 => 'Carbon\\Traits\\Mixin',
      4 => 'Carbon\\Traits\\Options',
      5 => 'Carbon\\Traits\\ToStringFormat',
    ),
    'immediateConstants' => 
    array (
      'PERIOD_PREFIX' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_PREFIX',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'P\'',
          'attributes' => 
          array (
            'startLine' => 203,
            'endLine' => 203,
            'startTokenPos' => 212,
            'startFilePos' => 17910,
            'endTokenPos' => 212,
            'endFilePos' => 17912,
          ),
        ),
        'docComment' => '/**
 * Interval spec period designators
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 203,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 37,
      ),
      'PERIOD_YEARS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_YEARS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'Y\'',
          'attributes' => 
          array (
            'startLine' => 204,
            'endLine' => 204,
            'startTokenPos' => 223,
            'startFilePos' => 17947,
            'endTokenPos' => 223,
            'endFilePos' => 17949,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 204,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'PERIOD_MONTHS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_MONTHS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'M\'',
          'attributes' => 
          array (
            'startLine' => 205,
            'endLine' => 205,
            'startTokenPos' => 234,
            'startFilePos' => 17985,
            'endTokenPos' => 234,
            'endFilePos' => 17987,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 205,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 37,
      ),
      'PERIOD_DAYS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_DAYS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'D\'',
          'attributes' => 
          array (
            'startLine' => 206,
            'endLine' => 206,
            'startTokenPos' => 245,
            'startFilePos' => 18021,
            'endTokenPos' => 245,
            'endFilePos' => 18023,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 206,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
      'PERIOD_TIME_PREFIX' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_TIME_PREFIX',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'T\'',
          'attributes' => 
          array (
            'startLine' => 207,
            'endLine' => 207,
            'startTokenPos' => 256,
            'startFilePos' => 18064,
            'endTokenPos' => 256,
            'endFilePos' => 18066,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
      'PERIOD_HOURS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_HOURS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'H\'',
          'attributes' => 
          array (
            'startLine' => 208,
            'endLine' => 208,
            'startTokenPos' => 267,
            'startFilePos' => 18101,
            'endTokenPos' => 267,
            'endFilePos' => 18103,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 208,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'PERIOD_MINUTES' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_MINUTES',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'M\'',
          'attributes' => 
          array (
            'startLine' => 209,
            'endLine' => 209,
            'startTokenPos' => 278,
            'startFilePos' => 18140,
            'endTokenPos' => 278,
            'endFilePos' => 18142,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'PERIOD_SECONDS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'PERIOD_SECONDS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'S\'',
          'attributes' => 
          array (
            'startLine' => 210,
            'endLine' => 210,
            'startTokenPos' => 289,
            'startFilePos' => 18179,
            'endTokenPos' => 289,
            'endFilePos' => 18181,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 210,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
    ),
    'immediateProperties' => 
    array (
      'translator' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'translator',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A translator to ... er ... translate stuff
 *
 * @var \\Symfony\\Component\\Translation\\TranslatorInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 217,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cascadeFactors' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'cascadeFactors',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 222,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formats' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'formats',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'y\' => \'y\', \'Y\' => \'y\', \'o\' => \'y\', \'m\' => \'m\', \'n\' => \'m\', \'W\' => \'weeks\', \'d\' => \'d\', \'j\' => \'d\', \'z\' => \'d\', \'h\' => \'h\', \'g\' => \'h\', \'H\' => \'h\', \'G\' => \'h\', \'i\' => \'i\', \'s\' => \'s\', \'u\' => \'micro\', \'v\' => \'milli\']',
          'attributes' => 
          array (
            'startLine' => 227,
            'endLine' => 245,
            'startTokenPos' => 320,
            'startFilePos' => 18500,
            'endTokenPos' => 441,
            'endFilePos' => 18858,
          ),
        ),
        'docComment' => '/**
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 227,
        'endLine' => 245,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'flipCascadeFactors' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'flipCascadeFactors',
        'modifiers' => 20,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 250,
        'endLine' => 250,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'floatSettersEnabled' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'floatSettersEnabled',
        'modifiers' => 20,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 255,
            'endLine' => 255,
            'startTokenPos' => 463,
            'startFilePos' => 19017,
            'endTokenPos' => 463,
            'endFilePos' => 19021,
          ),
        ),
        'docComment' => '/**
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 255,
        'endLine' => 255,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'macros' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'macros',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 262,
            'endLine' => 262,
            'startTokenPos' => 476,
            'startFilePos' => 19127,
            'endTokenPos' => 477,
            'endFilePos' => 19128,
          ),
        ),
        'docComment' => '/**
 * The registered macros.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 262,
        'endLine' => 262,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tzName' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'name' => 'tzName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Timezone handler for settings() method.
 *
 * @var mixed
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 269,
        'endLine' => 269,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'setTimezone' => 
      array (
        'name' => 'setTimezone',
        'parameters' => 
        array (
          'tzName' => 
          array (
            'name' => 'tzName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the instance\'s timezone from a string or object.
 *
 * @param \\DateTimeZone|string $tzName
 *
 * @return static
 */',
        'startLine' => 278,
        'endLine' => 283,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'shiftTimezone' => 
      array (
        'name' => 'shiftTimezone',
        'parameters' => 
        array (
          'tzName' => 
          array (
            'name' => 'tzName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 294,
            'endLine' => 294,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @internal
 *
 * Set the instance\'s timezone from a string or object and add/subtract the offset difference.
 *
 * @param \\DateTimeZone|string $tzName
 *
 * @return static
 */',
        'startLine' => 294,
        'endLine' => 299,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getCascadeFactors' => 
      array (
        'name' => 'getCascadeFactors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Mapping of units and factors for cascading.
 *
 * Should only be modified by changing the factors or referenced constants.
 *
 * @return array
 */',
        'startLine' => 308,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getDefaultCascadeFactors' => 
      array (
        'name' => 'getDefaultCascadeFactors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 313,
        'endLine' => 325,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'standardizeUnit' => 
      array (
        'name' => 'standardizeUnit',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 327,
            'endLine' => 327,
            'startColumn' => 45,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 327,
        'endLine' => 332,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getFlipCascadeFactors' => 
      array (
        'name' => 'getFlipCascadeFactors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 334,
        'endLine' => 345,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'setCascadeFactors' => 
      array (
        'name' => 'setCascadeFactors',
        'parameters' => 
        array (
          'cascadeFactors' => 
          array (
            'name' => 'cascadeFactors',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 352,
            'endLine' => 352,
            'startColumn' => 46,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set default cascading factors for ->cascade() method.
 *
 * @param array $cascadeFactors
 */',
        'startLine' => 352,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'enableFloatSetters' => 
      array (
        'name' => 'enableFloatSetters',
        'parameters' => 
        array (
          'floatSettersEnabled' => 
          array (
            'name' => 'floatSettersEnabled',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 366,
                'endLine' => 366,
                'startTokenPos' => 911,
                'startFilePos' => 22084,
                'endTokenPos' => 911,
                'endFilePos' => 22087,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 366,
            'endLine' => 366,
            'startColumn' => 47,
            'endColumn' => 78,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This option allow you to opt-in for the Carbon 3 behavior where float
 * values will no longer be cast to integer (so truncated).
 *
 * ⚠️ This settings will be applied globally, which mean your whole application
 * code including the third-party dependencies that also may use Carbon will
 * adopt the new behavior.
 */',
        'startLine' => 366,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'years' => 
          array (
            'name' => 'years',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 948,
                'startFilePos' => 23076,
                'endTokenPos' => 948,
                'endFilePos' => 23076,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'months' => 
          array (
            'name' => 'months',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 955,
                'startFilePos' => 23089,
                'endTokenPos' => 955,
                'endFilePos' => 23092,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'weeks' => 
          array (
            'name' => 'weeks',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 962,
                'startFilePos' => 23104,
                'endTokenPos' => 962,
                'endFilePos' => 23107,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 61,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'days' => 
          array (
            'name' => 'days',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 969,
                'startFilePos' => 23118,
                'endTokenPos' => 969,
                'endFilePos' => 23121,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 76,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'hours' => 
          array (
            'name' => 'hours',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 976,
                'startFilePos' => 23133,
                'endTokenPos' => 976,
                'endFilePos' => 23136,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 90,
            'endColumn' => 102,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 983,
                'startFilePos' => 23150,
                'endTokenPos' => 983,
                'endFilePos' => 23153,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 105,
            'endColumn' => 119,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 990,
                'startFilePos' => 23167,
                'endTokenPos' => 990,
                'endFilePos' => 23170,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 122,
            'endColumn' => 136,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
          'microseconds' => 
          array (
            'name' => 'microseconds',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 389,
                'endLine' => 389,
                'startTokenPos' => 997,
                'startFilePos' => 23189,
                'endTokenPos' => 997,
                'endFilePos' => 23192,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 139,
            'endColumn' => 158,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new CarbonInterval instance.
 *
 * @param Closure|DateInterval|string|int|null $years
 * @param int|float|null                       $months
 * @param int|float|null                       $weeks
 * @param int|float|null                       $days
 * @param int|float|null                       $hours
 * @param int|float|null                       $minutes
 * @param int|float|null                       $seconds
 * @param int|float|null                       $microseconds
 *
 * @throws Exception when the interval_spec (passed as $years) cannot be parsed as an interval.
 */',
        'startLine' => 389,
        'endLine' => 504,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getFactor' => 
      array (
        'name' => 'getFactor',
        'parameters' => 
        array (
          'source' => 
          array (
            'name' => 'source',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'target' => 
          array (
            'name' => 'target',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the factor for a given source-to-target couple.
 *
 * @param string $source
 * @param string $target
 *
 * @return int|float|null
 */',
        'startLine' => 514,
        'endLine' => 531,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getFactorWithDefault' => 
      array (
        'name' => 'getFactorWithDefault',
        'parameters' => 
        array (
          'source' => 
          array (
            'name' => 'source',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 542,
            'endLine' => 542,
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'target' => 
          array (
            'name' => 'target',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 542,
            'endLine' => 542,
            'startColumn' => 58,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the factor for a given source-to-target couple if set,
 * else try to find the appropriate constant as the factor, such as Carbon::DAYS_PER_WEEK.
 *
 * @param string $source
 * @param string $target
 *
 * @return int|float|null
 */',
        'startLine' => 542,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getDaysPerWeek' => 
      array (
        'name' => 'getDaysPerWeek',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current config for days per week.
 *
 * @return int|float
 */',
        'startLine' => 569,
        'endLine' => 572,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getHoursPerDay' => 
      array (
        'name' => 'getHoursPerDay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current config for hours per day.
 *
 * @return int|float
 */',
        'startLine' => 579,
        'endLine' => 582,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getMinutesPerHour' => 
      array (
        'name' => 'getMinutesPerHour',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current config for minutes per hour.
 *
 * @return int|float
 */',
        'startLine' => 589,
        'endLine' => 592,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getSecondsPerMinute' => 
      array (
        'name' => 'getSecondsPerMinute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current config for seconds per minute.
 *
 * @return int|float
 */',
        'startLine' => 599,
        'endLine' => 602,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getMillisecondsPerSecond' => 
      array (
        'name' => 'getMillisecondsPerSecond',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current config for microseconds per second.
 *
 * @return int|float
 */',
        'startLine' => 609,
        'endLine' => 612,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getMicrosecondsPerMillisecond' => 
      array (
        'name' => 'getMicrosecondsPerMillisecond',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current config for microseconds per second.
 *
 * @return int|float
 */',
        'startLine' => 619,
        'endLine' => 622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'years' => 
          array (
            'name' => 'years',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2580,
                'startFilePos' => 31880,
                'endTokenPos' => 2580,
                'endFilePos' => 31880,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'months' => 
          array (
            'name' => 'months',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2587,
                'startFilePos' => 31893,
                'endTokenPos' => 2587,
                'endFilePos' => 31896,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'weeks' => 
          array (
            'name' => 'weeks',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2594,
                'startFilePos' => 31908,
                'endTokenPos' => 2594,
                'endFilePos' => 31911,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 63,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'days' => 
          array (
            'name' => 'days',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2601,
                'startFilePos' => 31922,
                'endTokenPos' => 2601,
                'endFilePos' => 31925,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 78,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'hours' => 
          array (
            'name' => 'hours',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2608,
                'startFilePos' => 31937,
                'endTokenPos' => 2608,
                'endFilePos' => 31940,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 92,
            'endColumn' => 104,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2615,
                'startFilePos' => 31954,
                'endTokenPos' => 2615,
                'endFilePos' => 31957,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 107,
            'endColumn' => 121,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2622,
                'startFilePos' => 31971,
                'endTokenPos' => 2622,
                'endFilePos' => 31974,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 124,
            'endColumn' => 138,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
          'microseconds' => 
          array (
            'name' => 'microseconds',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 643,
                'endLine' => 643,
                'startTokenPos' => 2629,
                'startFilePos' => 31993,
                'endTokenPos' => 2629,
                'endFilePos' => 31996,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 141,
            'endColumn' => 160,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new CarbonInterval instance from specific values.
 * This is an alias for the constructor that allows better fluent
 * syntax as it allows you to do CarbonInterval::create(1)->fn() rather than
 * (new CarbonInterval(1))->fn().
 *
 * @param int $years
 * @param int $months
 * @param int $weeks
 * @param int $days
 * @param int $hours
 * @param int $minutes
 * @param int $seconds
 * @param int $microseconds
 *
 * @throws Exception when the interval_spec (passed as $years) cannot be parsed as an interval.
 *
 * @return static
 */',
        'startLine' => 643,
        'endLine' => 646,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'createFromFormat' => 
      array (
        'name' => 'createFromFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 663,
            'endLine' => 663,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 663,
            'endLine' => 663,
            'startColumn' => 61,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parse a string into a new CarbonInterval object according to the specified format.
 *
 * @example
 * ```
 * echo Carboninterval::createFromFormat(\'H:i\', \'1:30\');
 * ```
 *
 * @param string      $format   Format of the $interval input string
 * @param string|null $interval Input string to convert into an interval
 *
 * @throws \\Carbon\\Exceptions\\ParseErrorException when the $interval cannot be parsed as an interval.
 *
 * @return static
 */',
        'startLine' => 663,
        'endLine' => 713,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'copy' => 
      array (
        'name' => 'copy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a copy of the instance.
 *
 * @return static
 */',
        'startLine' => 720,
        'endLine' => 727,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'clone' => 
      array (
        'name' => 'clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a copy of the instance.
 *
 * @return static
 */',
        'startLine' => 734,
        'endLine' => 737,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      '__callStatic' => 
      array (
        'name' => '__callStatic',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 50,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Provide static helpers to create instances.  Allows CarbonInterval::years(3).
 *
 * Note: This is done using the magic method to allow static and instance methods to
 *       have the same names.
 *
 * @param string $method     magic method name called
 * @param array  $parameters parameters list
 *
 * @return static|null
 */',
        'startLine' => 750,
        'endLine' => 773,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      '__set_state' => 
      array (
        'name' => '__set_state',
        'parameters' => 
        array (
          'dump' => 
          array (
            'name' => 'dump',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 783,
            'endLine' => 783,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Evaluate the PHP generated by var_export() and recreate the exported CarbonInterval instance.
 *
 * @param array $dump data as exported by var_export()
 *
 * @return static
 */',
        'startLine' => 782,
        'endLine' => 790,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'this' => 
      array (
        'name' => 'this',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the current context from inside a macro callee or a new one if static.
 *
 * @return static
 */',
        'startLine' => 797,
        'endLine' => 800,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'fromString' => 
      array (
        'name' => 'fromString',
        'parameters' => 
        array (
          'intervalDefinition' => 
          array (
            'name' => 'intervalDefinition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 39,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a CarbonInterval from string.
 *
 * Format:
 *
 * Suffix | Unit    | Example | DateInterval expression
 * -------|---------|---------|------------------------
 * y      | years   |   1y    | P1Y
 * mo     | months  |   3mo   | P3M
 * w      | weeks   |   2w    | P2W
 * d      | days    |  28d    | P28D
 * h      | hours   |   4h    | PT4H
 * m      | minutes |  12m    | PT12M
 * s      | seconds |  59s    | PT59S
 *
 * e. g. `1w 3d 4h 32m 23s` is converted to 10 days 4 hours 32 minutes and 23 seconds.
 *
 * Special cases:
 *  - An empty string will return a zero interval
 *  - Fractions are allowed for weeks, days, hours and minutes and will be converted
 *    and rounded to the next smaller value (caution: 0.5w = 4d)
 *
 * @param string $intervalDefinition
 *
 * @return static
 */',
        'startLine' => 828,
        'endLine' => 989,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'parseFromLocale' => 
      array (
        'name' => 'parseFromLocale',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 999,
            'endLine' => 999,
            'startColumn' => 44,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 999,
                'endLine' => 999,
                'startTokenPos' => 4312,
                'startFilePos' => 42726,
                'endTokenPos' => 4312,
                'endFilePos' => 42729,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 999,
            'endLine' => 999,
            'startColumn' => 55,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a CarbonInterval from string using a different locale.
 *
 * @param string      $interval interval string in the given language (may also contain English).
 * @param string|null $locale   if locale is null or not specified, current global locale will be used instead.
 *
 * @return static
 */',
        'startLine' => 999,
        'endLine' => 1002,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'castIntervalToClass' => 
      array (
        'name' => 'castIntervalToClass',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1004,
            'endLine' => 1004,
            'startColumn' => 49,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'className' => 
          array (
            'name' => 'className',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1004,
            'endLine' => 1004,
            'startColumn' => 73,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'skip' => 
          array (
            'name' => 'skip',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1004,
                'endLine' => 1004,
                'startTokenPos' => 4373,
                'startFilePos' => 42963,
                'endTokenPos' => 4374,
                'endFilePos' => 42964,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1004,
            'endLine' => 1004,
            'startColumn' => 92,
            'endColumn' => 107,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1004,
        'endLine' => 1026,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'copyNegativeUnits' => 
      array (
        'name' => 'copyNegativeUnits',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1028,
            'endLine' => 1028,
            'startColumn' => 47,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1028,
            'endLine' => 1028,
            'startColumn' => 67,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1028,
        'endLine' => 1037,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'copyStep' => 
      array (
        'name' => 'copyStep',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1039,
            'endLine' => 1039,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1039,
            'endLine' => 1039,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1039,
        'endLine' => 1042,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'cast' => 
      array (
        'name' => 'cast',
        'parameters' => 
        array (
          'className' => 
          array (
            'name' => 'className',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1051,
            'endLine' => 1051,
            'startColumn' => 26,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Cast the current instance into the given class.
 *
 * @param string $className The $className::instance() method will be called to cast the current object.
 *
 * @return DateInterval
 */',
        'startLine' => 1051,
        'endLine' => 1054,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'instance' => 
      array (
        'name' => 'instance',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1068,
            'endLine' => 1068,
            'startColumn' => 37,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'skip' => 
          array (
            'name' => 'skip',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1068,
                'endLine' => 1068,
                'startTokenPos' => 4713,
                'startFilePos' => 44929,
                'endTokenPos' => 4714,
                'endFilePos' => 44930,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1068,
            'endLine' => 1068,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'skipCopy' => 
          array (
            'name' => 'skipCopy',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1068,
                'endLine' => 1068,
                'startTokenPos' => 4723,
                'startFilePos' => 44950,
                'endTokenPos' => 4723,
                'endFilePos' => 44954,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1068,
            'endLine' => 1068,
            'startColumn' => 79,
            'endColumn' => 100,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a CarbonInterval instance from a DateInterval one.  Can not instance
 * DateInterval objects created from DateTime::diff() as you can\'t externally
 * set the $days field.
 *
 * @param DateInterval $interval
 * @param bool         $skipCopy set to true to return the passed object
 *                               (without copying it) if it\'s already of the
 *                               current class
 *
 * @return static
 */',
        'startLine' => 1068,
        'endLine' => 1075,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1091,
            'endLine' => 1091,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'unit' => 
          array (
            'name' => 'unit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1091,
                'endLine' => 1091,
                'startTokenPos' => 4788,
                'startFilePos' => 46039,
                'endTokenPos' => 4788,
                'endFilePos' => 46042,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1091,
            'endLine' => 1091,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'skipCopy' => 
          array (
            'name' => 'skipCopy',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1091,
                'endLine' => 1091,
                'startTokenPos' => 4797,
                'startFilePos' => 46062,
                'endTokenPos' => 4797,
                'endFilePos' => 46066,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1091,
            'endLine' => 1091,
            'startColumn' => 58,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Make a CarbonInterval instance from given variable if possible.
 *
 * Always return a new instance. Parse only strings and only these likely to be intervals (skip dates
 * and recurrences). Throw an exception for invalid format, but otherwise return null.
 *
 * @param mixed|int|DateInterval|string|Closure|null $interval interval or number of the given $unit
 * @param string|null                                $unit     if specified, $interval must be an integer
 * @param bool                                       $skipCopy set to true to return the passed object
 *                                                             (without copying it) if it\'s already of the
 *                                                             current class
 *
 * @return static|null
 */',
        'startLine' => 1091,
        'endLine' => 1110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'makeFromString' => 
      array (
        'name' => 'makeFromString',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1112,
            'endLine' => 1112,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1112,
        'endLine' => 1134,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'resolveInterval' => 
      array (
        'name' => 'resolveInterval',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1136,
            'endLine' => 1136,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1136,
        'endLine' => 1143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'createFromDateString' => 
      array (
        'name' => 'createFromDateString',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1155,
            'endLine' => 1155,
            'startColumn' => 49,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Sets up a DateInterval from the relative parts of the string.
 *
 * @param string $time
 *
 * @return static
 *
 * @link https://php.net/manual/en/dateinterval.createfromdatestring.php
 */',
        'startLine' => 1154,
        'endLine' => 1167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1182,
            'endLine' => 1182,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a part of the CarbonInterval object.
 *
 * @param string $name
 *
 * @throws UnknownGetterException
 *
 * @return int|float|string
 */',
        'startLine' => 1182,
        'endLine' => 1231,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1242,
            'endLine' => 1242,
            'startColumn' => 27,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a part of the CarbonInterval object.
 *
 * @param string $name
 *
 * @throws UnknownGetterException
 *
 * @return int|float|string
 */',
        'startLine' => 1242,
        'endLine' => 1245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1257,
            'endLine' => 1257,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1257,
                'endLine' => 1257,
                'startTokenPos' => 5546,
                'startFilePos' => 50388,
                'endTokenPos' => 5546,
                'endFilePos' => 50391,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1257,
            'endLine' => 1257,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set a part of the CarbonInterval object.
 *
 * @param string|array $name
 * @param int          $value
 *
 * @throws UnknownSetterException
 *
 * @return $this
 */',
        'startLine' => 1257,
        'endLine' => 1346,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      '__set' => 
      array (
        'name' => '__set',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1356,
            'endLine' => 1356,
            'startColumn' => 27,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1356,
            'endLine' => 1356,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set a part of the CarbonInterval object.
 *
 * @param string $name
 * @param int    $value
 *
 * @throws UnknownSetterException
 */',
        'startLine' => 1356,
        'endLine' => 1359,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'weeksAndDays' => 
      array (
        'name' => 'weeksAndDays',
        'parameters' => 
        array (
          'weeks' => 
          array (
            'name' => 'weeks',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1369,
            'endLine' => 1369,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'days' => 
          array (
            'name' => 'days',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1369,
            'endLine' => 1369,
            'startColumn' => 42,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allow setting of weeks and days to be cumulative.
 *
 * @param int $weeks Number of weeks to set
 * @param int $days  Number of days to set
 *
 * @return static
 */',
        'startLine' => 1369,
        'endLine' => 1374,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'isEmpty' => 
      array (
        'name' => 'isEmpty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the interval is empty for each unit.
 *
 * @return bool
 */',
        'startLine' => 1381,
        'endLine' => 1391,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'macro' => 
      array (
        'name' => 'macro',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1409,
            'endLine' => 1409,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'macro' => 
          array (
            'name' => 'macro',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1409,
            'endLine' => 1409,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a custom macro.
 *
 * @example
 * ```
 * CarbonInterval::macro(\'twice\', function () {
 *   return $this->times(2);
 * });
 * echo CarbonInterval::hours(2)->twice();
 * ```
 *
 * @param string          $name
 * @param object|callable $macro
 *
 * @return void
 */',
        'startLine' => 1409,
        'endLine' => 1412,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'mixin' => 
      array (
        'name' => 'mixin',
        'parameters' => 
        array (
          'mixin' => 
          array (
            'name' => 'mixin',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1447,
            'endLine' => 1447,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register macros from a mixin object.
 *
 * @example
 * ```
 * CarbonInterval::mixin(new class {
 *   public function daysToHours() {
 *     return function () {
 *       $this->hours += $this->days;
 *       $this->days = 0;
 *
 *       return $this;
 *     };
 *   }
 *   public function hoursToDays() {
 *     return function () {
 *       $this->days += $this->hours;
 *       $this->hours = 0;
 *
 *       return $this;
 *     };
 *   }
 * });
 * echo CarbonInterval::hours(5)->hoursToDays() . "\\n";
 * echo CarbonInterval::days(5)->daysToHours() . "\\n";
 * ```
 *
 * @param object|string $mixin
 *
 * @throws ReflectionException
 *
 * @return void
 */',
        'startLine' => 1447,
        'endLine' => 1450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'hasMacro' => 
      array (
        'name' => 'hasMacro',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1459,
            'endLine' => 1459,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if macro is registered.
 *
 * @param string $name
 *
 * @return bool
 */',
        'startLine' => 1459,
        'endLine' => 1462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'callMacro' => 
      array (
        'name' => 'callMacro',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1472,
            'endLine' => 1472,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1472,
            'endLine' => 1472,
            'startColumn' => 41,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Call given macro.
 *
 * @param string $name
 * @param array  $parameters
 *
 * @return mixed
 */',
        'startLine' => 1472,
        'endLine' => 1483,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1498,
            'endLine' => 1498,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1498,
            'endLine' => 1498,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allow fluent calls on the setters... CarbonInterval::years(3)->months(5)->day().
 *
 * Note: This is done using the magic method to allow static and instance methods to
 *       have the same names.
 *
 * @param string $method     magic method name called
 * @param array  $parameters parameters list
 *
 * @throws BadFluentSetterException|Throwable
 *
 * @return static
 */',
        'startLine' => 1498,
        'endLine' => 1529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getForHumansInitialVariables' => 
      array (
        'name' => 'getForHumansInitialVariables',
        'parameters' => 
        array (
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1531,
            'endLine' => 1531,
            'startColumn' => 53,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'short' => 
          array (
            'name' => 'short',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1531,
            'endLine' => 1531,
            'startColumn' => 62,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1531,
        'endLine' => 1552,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getForHumansParameters' => 
      array (
        'name' => 'getForHumansParameters',
        'parameters' => 
        array (
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1562,
                'endLine' => 1562,
                'startTokenPos' => 6905,
                'startFilePos' => 58850,
                'endTokenPos' => 6905,
                'endFilePos' => 58853,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1562,
            'endLine' => 1562,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'short' => 
          array (
            'name' => 'short',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1562,
                'endLine' => 1562,
                'startTokenPos' => 6912,
                'startFilePos' => 58865,
                'endTokenPos' => 6912,
                'endFilePos' => 58869,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1562,
            'endLine' => 1562,
            'startColumn' => 63,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '-1',
              'attributes' => 
              array (
                'startLine' => 1562,
                'endLine' => 1562,
                'startTokenPos' => 6919,
                'startFilePos' => 58881,
                'endTokenPos' => 6920,
                'endFilePos' => 58882,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1562,
            'endLine' => 1562,
            'startColumn' => 79,
            'endColumn' => 89,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1562,
                'endLine' => 1562,
                'startTokenPos' => 6927,
                'startFilePos' => 58896,
                'endTokenPos' => 6927,
                'endFilePos' => 58899,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1562,
            'endLine' => 1562,
            'startColumn' => 92,
            'endColumn' => 106,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed $syntax
 * @param mixed $short
 * @param mixed $parts
 * @param mixed $options
 *
 * @return array
 */',
        'startLine' => 1562,
        'endLine' => 1636,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getRoundingMethodFromOptions' => 
      array (
        'name' => 'getRoundingMethodFromOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1638,
            'endLine' => 1638,
            'startColumn' => 60,
            'endColumn' => 71,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1638,
        'endLine' => 1653,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns interval values as an array where key are the unit names and values the counts.
 *
 * @return int[]
 */',
        'startLine' => 1660,
        'endLine' => 1672,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getNonZeroValues' => 
      array (
        'name' => 'getNonZeroValues',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns interval non-zero values as an array where key are the unit names and values the counts.
 *
 * @return int[]
 */',
        'startLine' => 1679,
        'endLine' => 1682,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getValuesSequence' => 
      array (
        'name' => 'getValuesSequence',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns interval values as an array where key are the unit names and values the counts
 * from the biggest non-zero one the the smallest non-zero one.
 *
 * @return int[]
 */',
        'startLine' => 1690,
        'endLine' => 1719,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'forHumans' => 
      array (
        'name' => 'forHumans',
        'parameters' => 
        array (
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1766,
                'endLine' => 1766,
                'startTokenPos' => 7914,
                'startFilePos' => 66291,
                'endTokenPos' => 7914,
                'endFilePos' => 66294,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1766,
            'endLine' => 1766,
            'startColumn' => 31,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'short' => 
          array (
            'name' => 'short',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1766,
                'endLine' => 1766,
                'startTokenPos' => 7921,
                'startFilePos' => 66306,
                'endTokenPos' => 7921,
                'endFilePos' => 66310,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1766,
            'endLine' => 1766,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '-1',
              'attributes' => 
              array (
                'startLine' => 1766,
                'endLine' => 1766,
                'startTokenPos' => 7928,
                'startFilePos' => 66322,
                'endTokenPos' => 7929,
                'endFilePos' => 66323,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1766,
            'endLine' => 1766,
            'startColumn' => 63,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1766,
                'endLine' => 1766,
                'startTokenPos' => 7936,
                'startFilePos' => 66337,
                'endTokenPos' => 7936,
                'endFilePos' => 66340,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1766,
            'endLine' => 1766,
            'startColumn' => 76,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current interval in a human readable format in the current locale.
 *
 * @example
 * ```
 * echo CarbonInterval::fromString(\'4d 3h 40m\')->forHumans() . "\\n";
 * echo CarbonInterval::fromString(\'4d 3h 40m\')->forHumans([\'parts\' => 2]) . "\\n";
 * echo CarbonInterval::fromString(\'4d 3h 40m\')->forHumans([\'parts\' => 3, \'join\' => true]) . "\\n";
 * echo CarbonInterval::fromString(\'4d 3h 40m\')->forHumans([\'short\' => true]) . "\\n";
 * echo CarbonInterval::fromString(\'1d 24h\')->forHumans([\'join\' => \' or \']) . "\\n";
 * echo CarbonInterval::fromString(\'1d 24h\')->forHumans([\'minimumUnit\' => \'hour\']) . "\\n";
 * ```
 *
 * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                           - \'syntax\' entry (see below)
 *                           - \'short\' entry (see below)
 *                           - \'parts\' entry (see below)
 *                           - \'options\' entry (see below)
 *                           - \'skip\' entry, list of units to skip (array of strings or a single string,
 *                           ` it can be the unit name (singular or plural) or its shortcut
 *                           ` (y, m, w, d, h, min, s, ms, µs).
 *                           - \'aUnit\' entry, prefer "an hour" over "1 hour" if true
 *                           - \'join\' entry determines how to join multiple parts of the string
 *                           `  - if $join is a string, it\'s used as a joiner glue
 *                           `  - if $join is a callable/closure, it get the list of string and should return a string
 *                           `  - if $join is an array, the first item will be the default glue, and the second item
 *                           `    will be used instead of the glue for the last item
 *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                           `  - if $join is missing, a space will be used as glue
 *                           - \'minimumUnit\' entry determines the smallest unit of time to display can be long or
 *                           `  short form of the units, e.g. \'hour\' or \'h\' (default value: s)
 *                           if int passed, it add modifiers:
 *                           Possible values:
 *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                           Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool      $short   displays short format of time units
 * @param int       $parts   maximum number of parts to display (default value: -1: no limits)
 * @param int       $options human diff options
 *
 * @throws Exception
 *
 * @return string
 */',
        'startLine' => 1766,
        'endLine' => 1972,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as a string using the forHumans() function.
 *
 * @throws Exception
 *
 * @return string
 */',
        'startLine' => 1981,
        'endLine' => 1994,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'toDateInterval' => 
      array (
        'name' => 'toDateInterval',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return native DateInterval PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(CarbonInterval::hours(2)->toDateInterval());
 * ```
 *
 * @return DateInterval
 */',
        'startLine' => 2006,
        'endLine' => 2009,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'toPeriod' => 
      array (
        'name' => 'toPeriod',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2018,
            'endLine' => 2018,
            'startColumn' => 30,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the interval to a CarbonPeriod.
 *
 * @param DateTimeInterface|string|int ...$params Start date, [end date or recurrences] and optional settings.
 *
 * @return CarbonPeriod
 */',
        'startLine' => 2018,
        'endLine' => 2029,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'invert' => 
      array (
        'name' => 'invert',
        'parameters' => 
        array (
          'inverted' => 
          array (
            'name' => 'inverted',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2039,
                'endLine' => 2039,
                'startTokenPos' => 10071,
                'startFilePos' => 76387,
                'endTokenPos' => 10071,
                'endFilePos' => 76390,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2039,
            'endLine' => 2039,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invert the interval.
 *
 * @param bool|int $inverted if a parameter is passed, the passed value cast as 1 or 0 is used
 *                           as the new value of the ->invert property.
 *
 * @return $this
 */',
        'startLine' => 2039,
        'endLine' => 2044,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'solveNegativeInterval' => 
      array (
        'name' => 'solveNegativeInterval',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2046,
        'endLine' => 2060,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'add' => 
      array (
        'name' => 'add',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2070,
            'endLine' => 2070,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2070,
                'endLine' => 2070,
                'startTokenPos' => 10313,
                'startFilePos' => 77292,
                'endTokenPos' => 10313,
                'endFilePos' => 77292,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2070,
            'endLine' => 2070,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the passed interval to the current instance.
 *
 * @param string|DateInterval $unit
 * @param int|float           $value
 *
 * @return $this
 */',
        'startLine' => 2070,
        'endLine' => 2103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'sub' => 
      array (
        'name' => 'sub',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2113,
            'endLine' => 2113,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2113,
                'endLine' => 2113,
                'startTokenPos' => 10633,
                'startFilePos' => 78557,
                'endTokenPos' => 10633,
                'endFilePos' => 78557,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2113,
            'endLine' => 2113,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Subtract the passed interval to the current instance.
 *
 * @param string|DateInterval $unit
 * @param int|float           $value
 *
 * @return $this
 */',
        'startLine' => 2113,
        'endLine' => 2120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'subtract' => 
      array (
        'name' => 'subtract',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2130,
            'endLine' => 2130,
            'startColumn' => 30,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2130,
                'endLine' => 2130,
                'startTokenPos' => 10701,
                'startFilePos' => 78953,
                'endTokenPos' => 10701,
                'endFilePos' => 78953,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2130,
            'endLine' => 2130,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Subtract the passed interval to the current instance.
 *
 * @param string|DateInterval $unit
 * @param int|float           $value
 *
 * @return $this
 */',
        'startLine' => 2130,
        'endLine' => 2133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'plus' => 
      array (
        'name' => 'plus',
        'parameters' => 
        array (
          'years' => 
          array (
            'name' => 'years',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2150,
                'endLine' => 2150,
                'startTokenPos' => 10734,
                'startFilePos' => 79417,
                'endTokenPos' => 10734,
                'endFilePos' => 79417,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2150,
            'endLine' => 2150,
            'startColumn' => 9,
            'endColumn' => 18,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'months' => 
          array (
            'name' => 'months',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2151,
                'endLine' => 2151,
                'startTokenPos' => 10741,
                'startFilePos' => 79438,
                'endTokenPos' => 10741,
                'endFilePos' => 79438,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2151,
            'endLine' => 2151,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'weeks' => 
          array (
            'name' => 'weeks',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2152,
                'endLine' => 2152,
                'startTokenPos' => 10748,
                'startFilePos' => 79458,
                'endTokenPos' => 10748,
                'endFilePos' => 79458,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2152,
            'endLine' => 2152,
            'startColumn' => 9,
            'endColumn' => 18,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'days' => 
          array (
            'name' => 'days',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2153,
                'endLine' => 2153,
                'startTokenPos' => 10755,
                'startFilePos' => 79477,
                'endTokenPos' => 10755,
                'endFilePos' => 79477,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2153,
            'endLine' => 2153,
            'startColumn' => 9,
            'endColumn' => 17,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'hours' => 
          array (
            'name' => 'hours',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2154,
                'endLine' => 2154,
                'startTokenPos' => 10762,
                'startFilePos' => 79497,
                'endTokenPos' => 10762,
                'endFilePos' => 79497,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2154,
            'endLine' => 2154,
            'startColumn' => 9,
            'endColumn' => 18,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2155,
                'endLine' => 2155,
                'startTokenPos' => 10769,
                'startFilePos' => 79519,
                'endTokenPos' => 10769,
                'endFilePos' => 79519,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2155,
            'endLine' => 2155,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2156,
                'endLine' => 2156,
                'startTokenPos' => 10776,
                'startFilePos' => 79541,
                'endTokenPos' => 10776,
                'endFilePos' => 79541,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2156,
            'endLine' => 2156,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
          'microseconds' => 
          array (
            'name' => 'microseconds',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2157,
                'endLine' => 2157,
                'startTokenPos' => 10783,
                'startFilePos' => 79568,
                'endTokenPos' => 10783,
                'endFilePos' => 79568,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2157,
            'endLine' => 2157,
            'startColumn' => 9,
            'endColumn' => 25,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add given parameters to the current interval.
 *
 * @param int       $years
 * @param int       $months
 * @param int|float $weeks
 * @param int|float $days
 * @param int|float $hours
 * @param int|float $minutes
 * @param int|float $seconds
 * @param int|float $microseconds
 *
 * @return $this
 */',
        'startLine' => 2149,
        'endLine' => 2163,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'minus' => 
      array (
        'name' => 'minus',
        'parameters' => 
        array (
          'years' => 
          array (
            'name' => 'years',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2180,
                'endLine' => 2180,
                'startTokenPos' => 10835,
                'startFilePos' => 80188,
                'endTokenPos' => 10835,
                'endFilePos' => 80188,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2180,
            'endLine' => 2180,
            'startColumn' => 9,
            'endColumn' => 18,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'months' => 
          array (
            'name' => 'months',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2181,
                'endLine' => 2181,
                'startTokenPos' => 10842,
                'startFilePos' => 80209,
                'endTokenPos' => 10842,
                'endFilePos' => 80209,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2181,
            'endLine' => 2181,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'weeks' => 
          array (
            'name' => 'weeks',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2182,
                'endLine' => 2182,
                'startTokenPos' => 10849,
                'startFilePos' => 80229,
                'endTokenPos' => 10849,
                'endFilePos' => 80229,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2182,
            'endLine' => 2182,
            'startColumn' => 9,
            'endColumn' => 18,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'days' => 
          array (
            'name' => 'days',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2183,
                'endLine' => 2183,
                'startTokenPos' => 10856,
                'startFilePos' => 80248,
                'endTokenPos' => 10856,
                'endFilePos' => 80248,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2183,
            'endLine' => 2183,
            'startColumn' => 9,
            'endColumn' => 17,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'hours' => 
          array (
            'name' => 'hours',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2184,
                'endLine' => 2184,
                'startTokenPos' => 10863,
                'startFilePos' => 80268,
                'endTokenPos' => 10863,
                'endFilePos' => 80268,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2184,
            'endLine' => 2184,
            'startColumn' => 9,
            'endColumn' => 18,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2185,
                'endLine' => 2185,
                'startTokenPos' => 10870,
                'startFilePos' => 80290,
                'endTokenPos' => 10870,
                'endFilePos' => 80290,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2185,
            'endLine' => 2185,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2186,
                'endLine' => 2186,
                'startTokenPos' => 10877,
                'startFilePos' => 80312,
                'endTokenPos' => 10877,
                'endFilePos' => 80312,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2186,
            'endLine' => 2186,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
          'microseconds' => 
          array (
            'name' => 'microseconds',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 2187,
                'endLine' => 2187,
                'startTokenPos' => 10884,
                'startFilePos' => 80339,
                'endTokenPos' => 10884,
                'endFilePos' => 80339,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2187,
            'endLine' => 2187,
            'startColumn' => 9,
            'endColumn' => 25,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add given parameters to the current interval.
 *
 * @param int       $years
 * @param int       $months
 * @param int|float $weeks
 * @param int|float $days
 * @param int|float $hours
 * @param int|float $minutes
 * @param int|float $seconds
 * @param int|float $microseconds
 *
 * @return $this
 */',
        'startLine' => 2179,
        'endLine' => 2193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'times' => 
      array (
        'name' => 'times',
        'parameters' => 
        array (
          'factor' => 
          array (
            'name' => 'factor',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2210,
            'endLine' => 2210,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Multiply current instance given number of times. times() is naive, it multiplies each unit
 * (so day can be greater than 31, hour can be greater than 23, etc.) and the result is rounded
 * separately for each unit.
 *
 * Use times() when you want a fast and approximated calculation that does not cascade units.
 *
 * For a precise and cascaded calculation,
 *
 * @see multiply()
 *
 * @param float|int $factor
 *
 * @return $this
 */',
        'startLine' => 2210,
        'endLine' => 2226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'shares' => 
      array (
        'name' => 'shares',
        'parameters' => 
        array (
          'divider' => 
          array (
            'name' => 'divider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2243,
            'endLine' => 2243,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Divide current instance by a given divider. shares() is naive, it divides each unit separately
 * and the result is rounded for each unit. So 5 hours and 20 minutes shared by 3 becomes 2 hours
 * and 7 minutes.
 *
 * Use shares() when you want a fast and approximated calculation that does not cascade units.
 *
 * For a precise and cascaded calculation,
 *
 * @see divide()
 *
 * @param float|int $divider
 *
 * @return $this
 */',
        'startLine' => 2243,
        'endLine' => 2246,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'copyProperties' => 
      array (
        'name' => 'copyProperties',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2248,
            'endLine' => 2248,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ignoreSign' => 
          array (
            'name' => 'ignoreSign',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2248,
                'endLine' => 2248,
                'startTokenPos' => 11168,
                'startFilePos' => 82348,
                'endTokenPos' => 11168,
                'endFilePos' => 82352,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2248,
            'endLine' => 2248,
            'startColumn' => 55,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2248,
        'endLine' => 2263,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'multiply' => 
      array (
        'name' => 'multiply',
        'parameters' => 
        array (
          'factor' => 
          array (
            'name' => 'factor',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2272,
            'endLine' => 2272,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Multiply and cascade current instance by a given factor.
 *
 * @param float|int $factor
 *
 * @return $this
 */',
        'startLine' => 2272,
        'endLine' => 2291,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'divide' => 
      array (
        'name' => 'divide',
        'parameters' => 
        array (
          'divider' => 
          array (
            'name' => 'divider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2300,
            'endLine' => 2300,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Divide and cascade current instance by a given divider.
 *
 * @param float|int $divider
 *
 * @return $this
 */',
        'startLine' => 2300,
        'endLine' => 2303,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'getDateIntervalSpec' => 
      array (
        'name' => 'getDateIntervalSpec',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2312,
            'endLine' => 2312,
            'startColumn' => 48,
            'endColumn' => 69,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'microseconds' => 
          array (
            'name' => 'microseconds',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2312,
                'endLine' => 2312,
                'startTokenPos' => 11468,
                'startFilePos' => 83977,
                'endTokenPos' => 11468,
                'endFilePos' => 83981,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2312,
            'endLine' => 2312,
            'startColumn' => 72,
            'endColumn' => 97,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'skip' => 
          array (
            'name' => 'skip',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2312,
                'endLine' => 2312,
                'startTokenPos' => 11477,
                'startFilePos' => 83998,
                'endTokenPos' => 11478,
                'endFilePos' => 83999,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2312,
            'endLine' => 2312,
            'startColumn' => 100,
            'endColumn' => 115,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the interval_spec string of a date interval.
 *
 * @param DateInterval $interval
 *
 * @return string
 */',
        'startLine' => 2312,
        'endLine' => 2355,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'spec' => 
      array (
        'name' => 'spec',
        'parameters' => 
        array (
          'microseconds' => 
          array (
            'name' => 'microseconds',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2362,
                'endLine' => 2362,
                'startTokenPos' => 11888,
                'startFilePos' => 85616,
                'endTokenPos' => 11888,
                'endFilePos' => 85620,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2362,
            'endLine' => 2362,
            'startColumn' => 26,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the interval_spec string.
 *
 * @return string
 */',
        'startLine' => 2362,
        'endLine' => 2365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'compareDateIntervals' => 
      array (
        'name' => 'compareDateIntervals',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2375,
            'endLine' => 2375,
            'startColumn' => 49,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2375,
            'endLine' => 2375,
            'startColumn' => 70,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Comparing 2 date intervals.
 *
 * @param DateInterval $first
 * @param DateInterval $second
 *
 * @return int
 */',
        'startLine' => 2375,
        'endLine' => 2389,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'compare' => 
      array (
        'name' => 'compare',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2398,
            'endLine' => 2398,
            'startColumn' => 29,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Comparing with passed interval.
 *
 * @param DateInterval $interval
 *
 * @return int
 */',
        'startLine' => 2398,
        'endLine' => 2401,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'invertCascade' => 
      array (
        'name' => 'invertCascade',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2403,
            'endLine' => 2403,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2403,
        'endLine' => 2408,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'doCascade' => 
      array (
        'name' => 'doCascade',
        'parameters' => 
        array (
          'deep' => 
          array (
            'name' => 'deep',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2410,
            'endLine' => 2410,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2410,
        'endLine' => 2475,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'cascade' => 
      array (
        'name' => 'cascade',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert overflowed values into bigger units.
 *
 * @return $this
 */',
        'startLine' => 2482,
        'endLine' => 2485,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'hasNegativeValues' => 
      array (
        'name' => 'hasNegativeValues',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2487,
        'endLine' => 2496,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'hasPositiveValues' => 
      array (
        'name' => 'hasPositiveValues',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2498,
        'endLine' => 2507,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'total' => 
      array (
        'name' => 'total',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2518,
            'endLine' => 2518,
            'startColumn' => 27,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get amount of given unit equivalent to the interval.
 *
 * @param string $unit
 *
 * @throws UnknownUnitException|UnitNotConfiguredException
 *
 * @return float
 */',
        'startLine' => 2518,
        'endLine' => 2604,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'eq' => 
      array (
        'name' => 'eq',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2615,
            'endLine' => 2615,
            'startColumn' => 24,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @see equalTo()
 *
 * @return bool
 */',
        'startLine' => 2615,
        'endLine' => 2618,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'equalTo' => 
      array (
        'name' => 'equalTo',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2627,
            'endLine' => 2627,
            'startColumn' => 29,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @return bool
 */',
        'startLine' => 2627,
        'endLine' => 2632,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'ne' => 
      array (
        'name' => 'ne',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2643,
            'endLine' => 2643,
            'startColumn' => 24,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is not equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @see notEqualTo()
 *
 * @return bool
 */',
        'startLine' => 2643,
        'endLine' => 2646,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'notEqualTo' => 
      array (
        'name' => 'notEqualTo',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2655,
            'endLine' => 2655,
            'startColumn' => 32,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is not equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @return bool
 */',
        'startLine' => 2655,
        'endLine' => 2658,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'gt' => 
      array (
        'name' => 'gt',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2669,
            'endLine' => 2669,
            'startColumn' => 24,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is greater (longer) than another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @see greaterThan()
 *
 * @return bool
 */',
        'startLine' => 2669,
        'endLine' => 2672,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'greaterThan' => 
      array (
        'name' => 'greaterThan',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2681,
            'endLine' => 2681,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is greater (longer) than another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @return bool
 */',
        'startLine' => 2681,
        'endLine' => 2686,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'gte' => 
      array (
        'name' => 'gte',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2697,
            'endLine' => 2697,
            'startColumn' => 25,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is greater (longer) than or equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @see greaterThanOrEqualTo()
 *
 * @return bool
 */',
        'startLine' => 2697,
        'endLine' => 2700,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'greaterThanOrEqualTo' => 
      array (
        'name' => 'greaterThanOrEqualTo',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2709,
            'endLine' => 2709,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is greater (longer) than or equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @return bool
 */',
        'startLine' => 2709,
        'endLine' => 2712,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'lt' => 
      array (
        'name' => 'lt',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2723,
            'endLine' => 2723,
            'startColumn' => 24,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is less (shorter) than another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @see lessThan()
 *
 * @return bool
 */',
        'startLine' => 2723,
        'endLine' => 2726,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'lessThan' => 
      array (
        'name' => 'lessThan',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2735,
            'endLine' => 2735,
            'startColumn' => 30,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is less (shorter) than another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @return bool
 */',
        'startLine' => 2735,
        'endLine' => 2740,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'lte' => 
      array (
        'name' => 'lte',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2751,
            'endLine' => 2751,
            'startColumn' => 25,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is less (shorter) than or equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @see lessThanOrEqualTo()
 *
 * @return bool
 */',
        'startLine' => 2751,
        'endLine' => 2754,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'lessThanOrEqualTo' => 
      array (
        'name' => 'lessThanOrEqualTo',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2763,
            'endLine' => 2763,
            'startColumn' => 39,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is less (shorter) than or equal to another
 *
 * @param CarbonInterval|DateInterval|mixed $interval
 *
 * @return bool
 */',
        'startLine' => 2763,
        'endLine' => 2766,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'between' => 
      array (
        'name' => 'between',
        'parameters' => 
        array (
          'interval1' => 
          array (
            'name' => 'interval1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2789,
            'endLine' => 2789,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'interval2' => 
          array (
            'name' => 'interval2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2789,
            'endLine' => 2789,
            'startColumn' => 41,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'equal' => 
          array (
            'name' => 'equal',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 2789,
                'endLine' => 2789,
                'startTokenPos' => 13845,
                'startFilePos' => 97457,
                'endTokenPos' => 13845,
                'endFilePos' => 97460,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2789,
            'endLine' => 2789,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is between two others.
 *
 * The third argument allow you to specify if bounds are included or not (true by default)
 * but for when you including/excluding bounds may produce different results in your application,
 * we recommend to use the explicit methods ->betweenIncluded() or ->betweenExcluded() instead.
 *
 * @example
 * ```
 * CarbonInterval::hours(48)->between(CarbonInterval::day(), CarbonInterval::days(3)); // true
 * CarbonInterval::hours(48)->between(CarbonInterval::day(), CarbonInterval::hours(36)); // false
 * CarbonInterval::hours(48)->between(CarbonInterval::day(), CarbonInterval::days(2)); // true
 * CarbonInterval::hours(48)->between(CarbonInterval::day(), CarbonInterval::days(2), false); // false
 * ```
 *
 * @param CarbonInterval|DateInterval|mixed $interval1
 * @param CarbonInterval|DateInterval|mixed $interval2
 * @param bool                              $equal     Indicates if an equal to comparison should be done
 *
 * @return bool
 */',
        'startLine' => 2789,
        'endLine' => 2794,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'betweenIncluded' => 
      array (
        'name' => 'betweenIncluded',
        'parameters' => 
        array (
          'interval1' => 
          array (
            'name' => 'interval1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2811,
            'endLine' => 2811,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'interval2' => 
          array (
            'name' => 'interval2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2811,
            'endLine' => 2811,
            'startColumn' => 49,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is between two others, bounds excluded.
 *
 * @example
 * ```
 * CarbonInterval::hours(48)->betweenExcluded(CarbonInterval::day(), CarbonInterval::days(3)); // true
 * CarbonInterval::hours(48)->betweenExcluded(CarbonInterval::day(), CarbonInterval::hours(36)); // false
 * CarbonInterval::hours(48)->betweenExcluded(CarbonInterval::day(), CarbonInterval::days(2)); // true
 * ```
 *
 * @param CarbonInterval|DateInterval|mixed $interval1
 * @param CarbonInterval|DateInterval|mixed $interval2
 *
 * @return bool
 */',
        'startLine' => 2811,
        'endLine' => 2814,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'betweenExcluded' => 
      array (
        'name' => 'betweenExcluded',
        'parameters' => 
        array (
          'interval1' => 
          array (
            'name' => 'interval1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2831,
            'endLine' => 2831,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'interval2' => 
          array (
            'name' => 'interval2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2831,
            'endLine' => 2831,
            'startColumn' => 49,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is between two others, bounds excluded.
 *
 * @example
 * ```
 * CarbonInterval::hours(48)->betweenExcluded(CarbonInterval::day(), CarbonInterval::days(3)); // true
 * CarbonInterval::hours(48)->betweenExcluded(CarbonInterval::day(), CarbonInterval::hours(36)); // false
 * CarbonInterval::hours(48)->betweenExcluded(CarbonInterval::day(), CarbonInterval::days(2)); // false
 * ```
 *
 * @param CarbonInterval|DateInterval|mixed $interval1
 * @param CarbonInterval|DateInterval|mixed $interval2
 *
 * @return bool
 */',
        'startLine' => 2831,
        'endLine' => 2834,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'isBetween' => 
      array (
        'name' => 'isBetween',
        'parameters' => 
        array (
          'interval1' => 
          array (
            'name' => 'interval1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2853,
            'endLine' => 2853,
            'startColumn' => 31,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'interval2' => 
          array (
            'name' => 'interval2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2853,
            'endLine' => 2853,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'equal' => 
          array (
            'name' => 'equal',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 2853,
                'endLine' => 2853,
                'startTokenPos' => 13988,
                'startFilePos' => 100036,
                'endTokenPos' => 13988,
                'endFilePos' => 100039,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2853,
            'endLine' => 2853,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is between two others
 *
 * @example
 * ```
 * CarbonInterval::hours(48)->isBetween(CarbonInterval::day(), CarbonInterval::days(3)); // true
 * CarbonInterval::hours(48)->isBetween(CarbonInterval::day(), CarbonInterval::hours(36)); // false
 * CarbonInterval::hours(48)->isBetween(CarbonInterval::day(), CarbonInterval::days(2)); // true
 * CarbonInterval::hours(48)->isBetween(CarbonInterval::day(), CarbonInterval::days(2), false); // false
 * ```
 *
 * @param CarbonInterval|DateInterval|mixed $interval1
 * @param CarbonInterval|DateInterval|mixed $interval2
 * @param bool                              $equal     Indicates if an equal to comparison should be done
 *
 * @return bool
 */',
        'startLine' => 2853,
        'endLine' => 2856,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'roundUnit' => 
      array (
        'name' => 'roundUnit',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2869,
            'endLine' => 2869,
            'startColumn' => 31,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2869,
                'endLine' => 2869,
                'startTokenPos' => 14029,
                'startFilePos' => 100541,
                'endTokenPos' => 14029,
                'endFilePos' => 100541,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2869,
            'endLine' => 2869,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'function' => 
          array (
            'name' => 'function',
            'default' => 
            array (
              'code' => '\'round\'',
              'attributes' => 
              array (
                'startLine' => 2869,
                'endLine' => 2869,
                'startTokenPos' => 14036,
                'startFilePos' => 100556,
                'endTokenPos' => 14036,
                'endFilePos' => 100562,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2869,
            'endLine' => 2869,
            'startColumn' => 54,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Round the current instance at the given unit with given precision if specified and the given function.
 *
 * @param string                             $unit
 * @param float|int|string|DateInterval|null $precision
 * @param string                             $function
 *
 * @throws Exception
 *
 * @return $this
 */',
        'startLine' => 2869,
        'endLine' => 2896,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'floorUnit' => 
      array (
        'name' => 'floorUnit',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2908,
            'endLine' => 2908,
            'startColumn' => 31,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2908,
                'endLine' => 2908,
                'startTokenPos' => 14269,
                'startFilePos' => 101772,
                'endTokenPos' => 14269,
                'endFilePos' => 101772,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2908,
            'endLine' => 2908,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Truncate the current instance at the given unit with given precision if specified.
 *
 * @param string                             $unit
 * @param float|int|string|DateInterval|null $precision
 *
 * @throws Exception
 *
 * @return $this
 */',
        'startLine' => 2908,
        'endLine' => 2911,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'ceilUnit' => 
      array (
        'name' => 'ceilUnit',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2923,
            'endLine' => 2923,
            'startColumn' => 30,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2923,
                'endLine' => 2923,
                'startTokenPos' => 14307,
                'startFilePos' => 102182,
                'endTokenPos' => 14307,
                'endFilePos' => 102182,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2923,
            'endLine' => 2923,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ceil the current instance at the given unit with given precision if specified.
 *
 * @param string                             $unit
 * @param float|int|string|DateInterval|null $precision
 *
 * @throws Exception
 *
 * @return $this
 */',
        'startLine' => 2923,
        'endLine' => 2926,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'round' => 
      array (
        'name' => 'round',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2938,
                'endLine' => 2938,
                'startTokenPos' => 14342,
                'startFilePos' => 102575,
                'endTokenPos' => 14342,
                'endFilePos' => 102575,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2938,
            'endLine' => 2938,
            'startColumn' => 27,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'function' => 
          array (
            'name' => 'function',
            'default' => 
            array (
              'code' => '\'round\'',
              'attributes' => 
              array (
                'startLine' => 2938,
                'endLine' => 2938,
                'startTokenPos' => 14349,
                'startFilePos' => 102590,
                'endTokenPos' => 14349,
                'endFilePos' => 102596,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2938,
            'endLine' => 2938,
            'startColumn' => 43,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Round the current instance second with given precision if specified.
 *
 * @param float|int|string|DateInterval|null $precision
 * @param string                             $function
 *
 * @throws Exception
 *
 * @return $this
 */',
        'startLine' => 2938,
        'endLine' => 2941,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'floor' => 
      array (
        'name' => 'floor',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2952,
                'endLine' => 2952,
                'startTokenPos' => 14381,
                'startFilePos' => 102926,
                'endTokenPos' => 14381,
                'endFilePos' => 102926,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2952,
            'endLine' => 2952,
            'startColumn' => 27,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Round the current instance second with given precision if specified.
 *
 * @param float|int|string|DateInterval|null $precision
 *
 * @throws Exception
 *
 * @return $this
 */',
        'startLine' => 2952,
        'endLine' => 2955,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'ceil' => 
      array (
        'name' => 'ceil',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 2966,
                'endLine' => 2966,
                'startTokenPos' => 14413,
                'startFilePos' => 103248,
                'endTokenPos' => 14413,
                'endFilePos' => 103248,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2966,
            'endLine' => 2966,
            'startColumn' => 26,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ceil the current instance second with given precision if specified.
 *
 * @param float|int|string|DateInterval|null $precision
 *
 * @throws Exception
 *
 * @return $this
 */',
        'startLine' => 2966,
        'endLine' => 2969,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'needsDeclension' => 
      array (
        'name' => 'needsDeclension',
        'parameters' => 
        array (
          'mode' => 
          array (
            'name' => 'mode',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2971,
            'endLine' => 2971,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2971,
            'endLine' => 2971,
            'startColumn' => 52,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2971,
            'endLine' => 2971,
            'startColumn' => 64,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2971,
        'endLine' => 2979,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'checkIntegerValue' => 
      array (
        'name' => 'checkIntegerValue',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2981,
            'endLine' => 2981,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2981,
            'endLine' => 2981,
            'startColumn' => 54,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2981,
        'endLine' => 3004,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'assertSafeForInteger' => 
      array (
        'name' => 'assertSafeForInteger',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3009,
            'endLine' => 3009,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3009,
            'endLine' => 3009,
            'startColumn' => 57,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if precision loss when storing the given value as an integer would be >= 1.0.
 */',
        'startLine' => 3009,
        'endLine' => 3014,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
      'handleDecimalPart' => 
      array (
        'name' => 'handleDecimalPart',
        'parameters' => 
        array (
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3016,
            'endLine' => 3016,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3016,
            'endLine' => 3016,
            'startColumn' => 54,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'integerValue' => 
          array (
            'name' => 'integerValue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3016,
            'endLine' => 3016,
            'startColumn' => 62,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 3016,
        'endLine' => 3053,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonInterval',
        'implementingClassName' => 'Carbon\\CarbonInterval',
        'currentClassName' => 'Carbon\\CarbonInterval',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Carbon\\Traits\\Mixin' => 
        array (
          0 => 
          array (
            'alias' => 'baseMixin',
            'method' => 'mixin',
            'hash' => 'carbon\\traits\\mixin::mixin',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'carbon\\traits\\mixin::mixin' => 'Carbon\\Traits\\Mixin::mixin',
      ),
    ),
  ),
));