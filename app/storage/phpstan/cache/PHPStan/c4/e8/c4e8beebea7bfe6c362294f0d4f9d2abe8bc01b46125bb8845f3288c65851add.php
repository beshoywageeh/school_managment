<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/CarbonPeriod.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\CarbonPeriod
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8faba122564cdb4c020602ebb0b84f36c2c75cc9bb194e8bb995173a66232962-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\CarbonPeriod',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/CarbonPeriod.php',
      ),
    ),
    'namespace' => 'Carbon',
    'name' => 'Carbon\\CarbonPeriod',
    'shortName' => 'CarbonPeriod',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Substitution of DatePeriod with some modifications and many more features.
 *
 * @property-read int|float $recurrences number of recurrences (if end not set).
 * @property-read bool $include_start_date rather the start date is included in the iteration.
 * @property-read bool $include_end_date rather the end date is included in the iteration (if recurrences not set).
 * @property-read CarbonInterface $start Period start date.
 * @property-read CarbonInterface $current Current date from the iteration.
 * @property-read CarbonInterface $end Period end date.
 * @property-read CarbonInterval $interval Underlying date interval instance. Always present, one day by default.
 *
 * @method static static start($date, $inclusive = null) Create instance specifying start date or modify the start date if called on an instance.
 * @method static static since($date, $inclusive = null) Alias for start().
 * @method static static sinceNow($inclusive = null) Create instance with start date set to now or set the start date to now if called on an instance.
 * @method static static end($date = null, $inclusive = null) Create instance specifying end date or modify the end date if called on an instance.
 * @method static static until($date = null, $inclusive = null) Alias for end().
 * @method static static untilNow($inclusive = null) Create instance with end date set to now or set the end date to now if called on an instance.
 * @method static static dates($start, $end = null) Create instance with start and end dates or modify the start and end dates if called on an instance.
 * @method static static between($start, $end = null) Create instance with start and end dates or modify the start and end dates if called on an instance.
 * @method static static recurrences($recurrences = null) Create instance with maximum number of recurrences or modify the number of recurrences if called on an instance.
 * @method static static times($recurrences = null) Alias for recurrences().
 * @method static static options($options = null) Create instance with options or modify the options if called on an instance.
 * @method static static toggle($options, $state = null) Create instance with options toggled on or off, or toggle options if called on an instance.
 * @method static static filter($callback, $name = null) Create instance with filter added to the stack or append a filter if called on an instance.
 * @method static static push($callback, $name = null) Alias for filter().
 * @method static static prepend($callback, $name = null) Create instance with filter prepended to the stack or prepend a filter if called on an instance.
 * @method static static filters(array $filters = []) Create instance with filters stack or replace the whole filters stack if called on an instance.
 * @method static static interval($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static each($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static every($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static step($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static stepBy($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static invert() Create instance with inverted date interval or invert the interval if called on an instance.
 * @method static static years($years = 1) Create instance specifying a number of years for date interval or replace the interval by the given a number of years if called on an instance.
 * @method static static year($years = 1) Alias for years().
 * @method static static months($months = 1) Create instance specifying a number of months for date interval or replace the interval by the given a number of months if called on an instance.
 * @method static static month($months = 1) Alias for months().
 * @method static static weeks($weeks = 1) Create instance specifying a number of weeks for date interval or replace the interval by the given a number of weeks if called on an instance.
 * @method static static week($weeks = 1) Alias for weeks().
 * @method static static days($days = 1) Create instance specifying a number of days for date interval or replace the interval by the given a number of days if called on an instance.
 * @method static static dayz($days = 1) Alias for days().
 * @method static static day($days = 1) Alias for days().
 * @method static static hours($hours = 1) Create instance specifying a number of hours for date interval or replace the interval by the given a number of hours if called on an instance.
 * @method static static hour($hours = 1) Alias for hours().
 * @method static static minutes($minutes = 1) Create instance specifying a number of minutes for date interval or replace the interval by the given a number of minutes if called on an instance.
 * @method static static minute($minutes = 1) Alias for minutes().
 * @method static static seconds($seconds = 1) Create instance specifying a number of seconds for date interval or replace the interval by the given a number of seconds if called on an instance.
 * @method static static second($seconds = 1) Alias for seconds().
 * @method static static milliseconds($milliseconds = 1) Create instance specifying a number of milliseconds for date interval or replace the interval by the given a number of milliseconds if called on an instance.
 * @method static static millisecond($milliseconds = 1) Alias for milliseconds().
 * @method static static microseconds($microseconds = 1) Create instance specifying a number of microseconds for date interval or replace the interval by the given a number of microseconds if called on an instance.
 * @method static static microsecond($microseconds = 1) Alias for microseconds().
 * @method $this roundYear(float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this roundYears(float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this floorYear(float $precision = 1) Truncate the current instance year with given precision.
 * @method $this floorYears(float $precision = 1) Truncate the current instance year with given precision.
 * @method $this ceilYear(float $precision = 1) Ceil the current instance year with given precision.
 * @method $this ceilYears(float $precision = 1) Ceil the current instance year with given precision.
 * @method $this roundMonth(float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this roundMonths(float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this floorMonth(float $precision = 1) Truncate the current instance month with given precision.
 * @method $this floorMonths(float $precision = 1) Truncate the current instance month with given precision.
 * @method $this ceilMonth(float $precision = 1) Ceil the current instance month with given precision.
 * @method $this ceilMonths(float $precision = 1) Ceil the current instance month with given precision.
 * @method $this roundWeek(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundWeeks(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorWeek(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorWeeks(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilWeek(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilWeeks(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundDay(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundDays(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorDay(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorDays(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilDay(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilDays(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundHour(float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this roundHours(float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this floorHour(float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this floorHours(float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this ceilHour(float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this ceilHours(float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this roundMinute(float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this roundMinutes(float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this floorMinute(float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this floorMinutes(float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this ceilMinute(float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this ceilMinutes(float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this roundSecond(float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this roundSeconds(float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this floorSecond(float $precision = 1) Truncate the current instance second with given precision.
 * @method $this floorSeconds(float $precision = 1) Truncate the current instance second with given precision.
 * @method $this ceilSecond(float $precision = 1) Ceil the current instance second with given precision.
 * @method $this ceilSeconds(float $precision = 1) Ceil the current instance second with given precision.
 * @method $this roundMillennium(float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this roundMillennia(float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this floorMillennium(float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this floorMillennia(float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this ceilMillennium(float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this ceilMillennia(float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this roundCentury(float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this roundCenturies(float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this floorCentury(float $precision = 1) Truncate the current instance century with given precision.
 * @method $this floorCenturies(float $precision = 1) Truncate the current instance century with given precision.
 * @method $this ceilCentury(float $precision = 1) Ceil the current instance century with given precision.
 * @method $this ceilCenturies(float $precision = 1) Ceil the current instance century with given precision.
 * @method $this roundDecade(float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this roundDecades(float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this floorDecade(float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this floorDecades(float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this ceilDecade(float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this ceilDecades(float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this roundQuarter(float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this roundQuarters(float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this floorQuarter(float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this floorQuarters(float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this ceilQuarter(float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this ceilQuarters(float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this roundMillisecond(float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this roundMilliseconds(float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this floorMillisecond(float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this floorMilliseconds(float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this ceilMillisecond(float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this ceilMilliseconds(float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this roundMicrosecond(float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this roundMicroseconds(float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this floorMicrosecond(float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this floorMicroseconds(float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this ceilMicrosecond(float $precision = 1) Ceil the current instance microsecond with given precision.
 * @method $this ceilMicroseconds(float $precision = 1) Ceil the current instance microsecond with given precision.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 176,
    'endLine' => 2742,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Iterator',
      1 => 'Countable',
      2 => 'JsonSerializable',
    ),
    'traitClassNames' => 
    array (
      0 => 'Carbon\\Traits\\IntervalRounding',
      1 => 'Carbon\\Traits\\Mixin',
      2 => 'Carbon\\Traits\\Options',
      3 => 'Carbon\\Traits\\ToStringFormat',
    ),
    'immediateConstants' => 
    array (
      'RECURRENCES_FILTER' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'RECURRENCES_FILTER',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::class, \'filterRecurrences\']',
          'attributes' => 
          array (
            'startLine' => 190,
            'endLine' => 190,
            'startTokenPos' => 209,
            'startFilePos' => 17361,
            'endTokenPos' => 216,
            'endFilePos' => 17394,
          ),
        ),
        'docComment' => '/**
 * Built-in filter for limit by recurrences.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 190,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 73,
      ),
      'END_DATE_FILTER' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'END_DATE_FILTER',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::class, \'filterEndDate\']',
          'attributes' => 
          array (
            'startLine' => 197,
            'endLine' => 197,
            'startTokenPos' => 229,
            'startFilePos' => 17521,
            'endTokenPos' => 236,
            'endFilePos' => 17550,
          ),
        ),
        'docComment' => '/**
 * Built-in filter for limit to an end.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 66,
      ),
      'END_ITERATION' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'END_ITERATION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::class, \'endIteration\']',
          'attributes' => 
          array (
            'startLine' => 204,
            'endLine' => 204,
            'startTokenPos' => 249,
            'startFilePos' => 17718,
            'endTokenPos' => 256,
            'endFilePos' => 17746,
          ),
        ),
        'docComment' => '/**
 * Special value which can be returned by filters to end iteration. Also a filter.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 204,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 63,
      ),
      'EXCLUDE_START_DATE' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'EXCLUDE_START_DATE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 211,
            'endLine' => 211,
            'startTokenPos' => 269,
            'startFilePos' => 17869,
            'endTokenPos' => 269,
            'endFilePos' => 17869,
          ),
        ),
        'docComment' => '/**
 * Exclude start date from iteration.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 211,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EXCLUDE_END_DATE' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'EXCLUDE_END_DATE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 218,
            'endLine' => 218,
            'startTokenPos' => 282,
            'startFilePos' => 17988,
            'endTokenPos' => 282,
            'endFilePos' => 17988,
          ),
        ),
        'docComment' => '/**
 * Exclude end date from iteration.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 218,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'IMMUTABLE' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'IMMUTABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '4',
          'attributes' => 
          array (
            'startLine' => 225,
            'endLine' => 225,
            'startTokenPos' => 295,
            'startFilePos' => 18100,
            'endTokenPos' => 295,
            'endFilePos' => 18100,
          ),
        ),
        'docComment' => '/**
 * Yield CarbonImmutable instances.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 225,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'NEXT_MAX_ATTEMPTS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'NEXT_MAX_ATTEMPTS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1000',
          'attributes' => 
          array (
            'startLine' => 232,
            'endLine' => 232,
            'startTokenPos' => 308,
            'startFilePos' => 18259,
            'endTokenPos' => 308,
            'endFilePos' => 18262,
          ),
        ),
        'docComment' => '/**
 * Number of maximum attempts before giving up on finding next valid date.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 232,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
      'END_MAX_ATTEMPTS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'END_MAX_ATTEMPTS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '10000',
          'attributes' => 
          array (
            'startLine' => 239,
            'endLine' => 239,
            'startTokenPos' => 321,
            'startFilePos' => 18413,
            'endTokenPos' => 321,
            'endFilePos' => 18417,
          ),
        ),
        'docComment' => '/**
 * Number of maximum attempts before giving up on finding end date.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 239,
        'endLine' => 239,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
      'DEFAULT_DATE_CLASS' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'DEFAULT_DATE_CLASS',
        'modifiers' => 2,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Carbon\\Carbon::class',
          'attributes' => 
          array (
            'startLine' => 246,
            'endLine' => 246,
            'startTokenPos' => 334,
            'startFilePos' => 18550,
            'endTokenPos' => 336,
            'endFilePos' => 18562,
          ),
        ),
        'docComment' => '/**
 * Default date class of iteration items.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 246,
        'endLine' => 246,
        'startColumn' => 5,
        'endColumn' => 55,
      ),
    ),
    'immediateProperties' => 
    array (
      'macros' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'macros',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 253,
            'endLine' => 253,
            'startTokenPos' => 349,
            'startFilePos' => 18668,
            'endTokenPos' => 350,
            'endFilePos' => 18669,
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
        'startLine' => 253,
        'endLine' => 253,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dateClass' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'dateClass',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Carbon\\Carbon::class',
          'attributes' => 
          array (
            'startLine' => 260,
            'endLine' => 260,
            'startTokenPos' => 361,
            'startFilePos' => 18780,
            'endTokenPos' => 363,
            'endFilePos' => 18792,
          ),
        ),
        'docComment' => '/**
 * Date class of iteration items.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 260,
        'endLine' => 260,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dateInterval' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'dateInterval',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Underlying date interval instance. Always present, one day by default.
 *
 * @var CarbonInterval
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 267,
        'endLine' => 267,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'constructed' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'constructed',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 274,
            'endLine' => 274,
            'startTokenPos' => 381,
            'startFilePos' => 19065,
            'endTokenPos' => 381,
            'endFilePos' => 19069,
          ),
        ),
        'docComment' => '/**
 * True once __construct is finished.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 274,
        'endLine' => 274,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isDefaultInterval' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'isDefaultInterval',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Whether current date interval was set by default.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 281,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filters' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'filters',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 288,
            'endLine' => 288,
            'startTokenPos' => 399,
            'startFilePos' => 19297,
            'endTokenPos' => 400,
            'endFilePos' => 19298,
          ),
        ),
        'docComment' => '/**
 * The filters stack.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 288,
        'endLine' => 288,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'startDate' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'startDate',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Period start date. Applied on rewind. Always present, now by default.
 *
 * @var CarbonInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 295,
        'endLine' => 295,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'endDate' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'endDate',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Period end date. For inverted interval should be before the start date. Applied via a filter.
 *
 * @var CarbonInterface|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 302,
        'endLine' => 302,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'recurrences' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'recurrences',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Limit for number of recurrences. Applied via a filter.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 309,
        'endLine' => 309,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'options',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Iteration options.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 316,
        'endLine' => 316,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'key' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'key',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Index of current date. Always sequential, even if some dates are skipped by filters.
 * Equal to null only before the first iteration.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 324,
        'endLine' => 324,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'current' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'current',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Current date. May temporarily hold unaccepted value when looking for a next valid date.
 * Equal to null only before the first iteration.
 *
 * @var CarbonInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 332,
        'endLine' => 332,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timezone' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'timezone',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Timezone of current date. Taken from the start date.
 *
 * @var \\DateTimeZone|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 339,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validationResult' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'name' => 'validationResult',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The cached validation result for current date.
 *
 * @var bool|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 346,
        'endLine' => 346,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tzName' => 
      array (
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
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
        'startLine' => 353,
        'endLine' => 353,
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
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'var' => 
          array (
            'name' => 'var',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 33,
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
 * Make a CarbonPeriod instance from given variable if possible.
 *
 * @param mixed $var
 *
 * @return static|null
 */',
        'startLine' => 362,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'instance' => 
      array (
        'name' => 'instance',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 378,
            'endLine' => 378,
            'startColumn' => 37,
            'endColumn' => 43,
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
 * Create a new instance from a DatePeriod or CarbonPeriod object.
 *
 * @param CarbonPeriod|DatePeriod $period
 *
 * @return static
 */',
        'startLine' => 378,
        'endLine' => 410,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
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
            'startLine' => 417,
            'endLine' => 417,
            'startColumn' => 35,
            'endColumn' => 44,
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
 * Create a new instance.
 *
 * @return static
 */',
        'startLine' => 417,
        'endLine' => 420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'createFromArray' => 
      array (
        'name' => 'createFromArray',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
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
            'startLine' => 429,
            'endLine' => 429,
            'startColumn' => 44,
            'endColumn' => 56,
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
 * Create a new instance from an array of parameters.
 *
 * @param array $params
 *
 * @return static
 */',
        'startLine' => 429,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'createFromIso' => 
      array (
        'name' => 'createFromIso',
        'parameters' => 
        array (
          'iso' => 
          array (
            'name' => 'iso',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 442,
            'endLine' => 442,
            'startColumn' => 42,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 442,
                'endLine' => 442,
                'startTokenPos' => 832,
                'startFilePos' => 22935,
                'endTokenPos' => 832,
                'endFilePos' => 22938,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 442,
            'endLine' => 442,
            'startColumn' => 48,
            'endColumn' => 62,
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
 * Create CarbonPeriod from ISO 8601 string.
 *
 * @param string   $iso
 * @param int|null $options
 *
 * @return static
 */',
        'startLine' => 442,
        'endLine' => 453,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'intervalHasTime' => 
      array (
        'name' => 'intervalHasTime',
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
            'startLine' => 462,
            'endLine' => 462,
            'startColumn' => 47,
            'endColumn' => 68,
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
 * Return whether given interval contains non zero value of any time unit.
 *
 * @param \\DateInterval $interval
 *
 * @return bool
 */',
        'startLine' => 462,
        'endLine' => 465,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isIso8601' => 
      array (
        'name' => 'isIso8601',
        'parameters' => 
        array (
          'var' => 
          array (
            'name' => 'var',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 477,
            'endLine' => 477,
            'startColumn' => 41,
            'endColumn' => 44,
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
 * Return whether given variable is an ISO 8601 specification.
 *
 * Note: Check is very basic, as actual validation will be done later when parsing.
 * We just want to ensure that variable is not any other type of a valid parameter.
 *
 * @param mixed $var
 *
 * @return bool
 */',
        'startLine' => 477,
        'endLine' => 489,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'parseIso8601' => 
      array (
        'name' => 'parseIso8601',
        'parameters' => 
        array (
          'iso' => 
          array (
            'name' => 'iso',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 500,
            'endLine' => 500,
            'startColumn' => 44,
            'endColumn' => 47,
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
 * Parse given ISO 8601 string into an array of arguments.
 *
 * @SuppressWarnings(PHPMD.ElseExpression)
 *
 * @param string $iso
 *
 * @return array
 */',
        'startLine' => 500,
        'endLine' => 526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'addMissingParts' => 
      array (
        'name' => 'addMissingParts',
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
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 47,
            'endColumn' => 53,
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
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 56,
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
 * Add missing parts of the target date from the source date.
 *
 * @param string $source
 * @param string $target
 *
 * @return string
 */',
        'startLine' => 536,
        'endLine' => 543,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 561,
            'endLine' => 561,
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
            'startLine' => 561,
            'endLine' => 561,
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
 * CarbonPeriod::macro(\'middle\', function () {
 *   return $this->getStartDate()->average($this->getEndDate());
 * });
 * echo CarbonPeriod::since(\'2011-05-12\')->until(\'2011-06-03\')->middle();
 * ```
 *
 * @param string          $name
 * @param object|callable $macro
 *
 * @return void
 */',
        'startLine' => 561,
        'endLine' => 564,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 600,
            'endLine' => 600,
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
 * CarbonPeriod::mixin(new class {
 *   public function addDays() {
 *     return function ($count = 1) {
 *       return $this->setStartDate(
 *         $this->getStartDate()->addDays($count)
 *       )->setEndDate(
 *         $this->getEndDate()->addDays($count)
 *       );
 *     };
 *   }
 *   public function subDays() {
 *     return function ($count = 1) {
 *       return $this->setStartDate(
 *         $this->getStartDate()->subDays($count)
 *       )->setEndDate(
 *         $this->getEndDate()->subDays($count)
 *       );
 *     };
 *   }
 * });
 * echo CarbonPeriod::create(\'2000-01-01\', \'2000-02-01\')->addDays(5)->subDays(3);
 * ```
 *
 * @param object|string $mixin
 *
 * @throws ReflectionException
 *
 * @return void
 */',
        'startLine' => 600,
        'endLine' => 603,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 612,
            'endLine' => 612,
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
        'startLine' => 612,
        'endLine' => 615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 625,
            'endLine' => 625,
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
            'startLine' => 625,
            'endLine' => 625,
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
 * Provide static proxy for instance aliases.
 *
 * @param string $method
 * @param array  $parameters
 *
 * @return mixed
 */',
        'startLine' => 625,
        'endLine' => 636,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 645,
            'endLine' => 645,
            'startColumn' => 33,
            'endColumn' => 45,
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
 * CarbonPeriod constructor.
 *
 * @SuppressWarnings(PHPMD.ElseExpression)
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 645,
        'endLine' => 727,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'copyIfImmutable' => 
      array (
        'name' => 'copyIfImmutable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepare the instance to be set (self if mutable to be mutated,
 * copy if immutable to generate a new instance).
 *
 * @return static
 */',
        'startLine' => 745,
        'endLine' => 748,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getGetter' => 
      array (
        'name' => 'getGetter',
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
            'startLine' => 757,
            'endLine' => 757,
            'startColumn' => 34,
            'endColumn' => 45,
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
 * Get the getter for a property allowing both `DatePeriod` snakeCase and camelCase names.
 *
 * @param string $name
 *
 * @return callable|null
 */',
        'startLine' => 757,
        'endLine' => 780,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 789,
            'endLine' => 789,
            'startColumn' => 25,
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
 * Get a property allowing both `DatePeriod` snakeCase and camelCase names.
 *
 * @param string $name
 *
 * @return bool|CarbonInterface|CarbonInterval|int|null
 */',
        'startLine' => 789,
        'endLine' => 798,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 807,
            'endLine' => 807,
            'startColumn' => 27,
            'endColumn' => 38,
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
 * Get a property allowing both `DatePeriod` snakeCase and camelCase names.
 *
 * @param string $name
 *
 * @return bool|CarbonInterface|CarbonInterval|int|null
 */',
        'startLine' => 807,
        'endLine' => 810,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
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
            'startLine' => 819,
            'endLine' => 819,
            'startColumn' => 29,
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
 * Check if an attribute exists on the object
 *
 * @param string $name
 *
 * @return bool
 */',
        'startLine' => 819,
        'endLine' => 822,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
 * @alias copy
 *
 * Get a copy of the instance.
 *
 * @return static
 */',
        'startLine' => 831,
        'endLine' => 834,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setDateClass' => 
      array (
        'name' => 'setDateClass',
        'parameters' => 
        array (
          'dateClass' => 
          array (
            'name' => 'dateClass',
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
            'startLine' => 843,
            'endLine' => 843,
            'startColumn' => 34,
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
 * Set the iteration item class.
 *
 * @param string $dateClass
 *
 * @return static
 */',
        'startLine' => 843,
        'endLine' => 859,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getDateClass' => 
      array (
        'name' => 'getDateClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns iteration item date class.
 *
 * @return string
 */',
        'startLine' => 866,
        'endLine' => 869,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setDateInterval' => 
      array (
        'name' => 'setDateInterval',
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
            'startLine' => 880,
            'endLine' => 880,
            'startColumn' => 37,
            'endColumn' => 45,
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
 * Change the period date interval.
 *
 * @param DateInterval|string $interval
 *
 * @throws InvalidIntervalException
 *
 * @return static
 */',
        'startLine' => 880,
        'endLine' => 898,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'invertDateInterval' => 
      array (
        'name' => 'invertDateInterval',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invert the period date interval.
 *
 * @return static
 */',
        'startLine' => 905,
        'endLine' => 908,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setDates' => 
      array (
        'name' => 'setDates',
        'parameters' => 
        array (
          'start' => 
          array (
            'name' => 'start',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 918,
            'endLine' => 918,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'end' => 
          array (
            'name' => 'end',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 918,
            'endLine' => 918,
            'startColumn' => 38,
            'endColumn' => 41,
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
 * Set start and end date.
 *
 * @param DateTime|DateTimeInterface|string      $start
 * @param DateTime|DateTimeInterface|string|null $end
 *
 * @return static
 */',
        'startLine' => 918,
        'endLine' => 921,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setOptions' => 
      array (
        'name' => 'setOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 932,
            'endLine' => 932,
            'startColumn' => 32,
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
 * Change the period options.
 *
 * @param int|null $options
 *
 * @throws InvalidArgumentException
 *
 * @return static
 */',
        'startLine' => 932,
        'endLine' => 944,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getOptions' => 
      array (
        'name' => 'getOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the period options.
 *
 * @return int
 */',
        'startLine' => 951,
        'endLine' => 954,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'toggleOptions' => 
      array (
        'name' => 'toggleOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 966,
            'endLine' => 966,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'state' => 
          array (
            'name' => 'state',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 966,
                'endLine' => 966,
                'startTokenPos' => 3130,
                'startFilePos' => 37172,
                'endTokenPos' => 3130,
                'endFilePos' => 37175,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 966,
            'endLine' => 966,
            'startColumn' => 45,
            'endColumn' => 57,
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
 * Toggle given options on or off.
 *
 * @param int       $options
 * @param bool|null $state
 *
 * @throws \\InvalidArgumentException
 *
 * @return static
 */',
        'startLine' => 966,
        'endLine' => 977,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'excludeStartDate' => 
      array (
        'name' => 'excludeStartDate',
        'parameters' => 
        array (
          'state' => 
          array (
            'name' => 'state',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 986,
                'endLine' => 986,
                'startTokenPos' => 3215,
                'startFilePos' => 37606,
                'endTokenPos' => 3215,
                'endFilePos' => 37609,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 986,
            'endLine' => 986,
            'startColumn' => 38,
            'endColumn' => 50,
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
 * Toggle EXCLUDE_START_DATE option.
 *
 * @param bool $state
 *
 * @return static
 */',
        'startLine' => 986,
        'endLine' => 989,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'excludeEndDate' => 
      array (
        'name' => 'excludeEndDate',
        'parameters' => 
        array (
          'state' => 
          array (
            'name' => 'state',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 998,
                'endLine' => 998,
                'startTokenPos' => 3249,
                'startFilePos' => 37859,
                'endTokenPos' => 3249,
                'endFilePos' => 37862,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 998,
            'endLine' => 998,
            'startColumn' => 36,
            'endColumn' => 48,
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
 * Toggle EXCLUDE_END_DATE option.
 *
 * @param bool $state
 *
 * @return static
 */',
        'startLine' => 998,
        'endLine' => 1001,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getDateInterval' => 
      array (
        'name' => 'getDateInterval',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the underlying date interval.
 *
 * @return CarbonInterval
 */',
        'startLine' => 1008,
        'endLine' => 1011,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getStartDate' => 
      array (
        'name' => 'getStartDate',
        'parameters' => 
        array (
          'rounding' => 
          array (
            'name' => 'rounding',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1020,
                'endLine' => 1020,
                'startTokenPos' => 3311,
                'startFilePos' => 38395,
                'endTokenPos' => 3311,
                'endFilePos' => 38398,
              ),
            ),
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
            'startLine' => 1020,
            'endLine' => 1020,
            'startColumn' => 34,
            'endColumn' => 57,
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
 * Get start date of the period.
 *
 * @param string|null $rounding Optional rounding \'floor\', \'ceil\', \'round\' using the period interval.
 *
 * @return CarbonInterface
 */',
        'startLine' => 1020,
        'endLine' => 1025,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getEndDate' => 
      array (
        'name' => 'getEndDate',
        'parameters' => 
        array (
          'rounding' => 
          array (
            'name' => 'rounding',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1034,
                'endLine' => 1034,
                'startTokenPos' => 3371,
                'startFilePos' => 38810,
                'endTokenPos' => 3371,
                'endFilePos' => 38813,
              ),
            ),
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
            'startLine' => 1034,
            'endLine' => 1034,
            'startColumn' => 32,
            'endColumn' => 55,
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
 * Get end date of the period.
 *
 * @param string|null $rounding Optional rounding \'floor\', \'ceil\', \'round\' using the period interval.
 *
 * @return CarbonInterface|null
 */',
        'startLine' => 1034,
        'endLine' => 1043,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getRecurrences' => 
      array (
        'name' => 'getRecurrences',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get number of recurrences.
 *
 * @return int|float|null
 */',
        'startLine' => 1050,
        'endLine' => 1053,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isStartExcluded' => 
      array (
        'name' => 'isStartExcluded',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the start date should be excluded.
 *
 * @return bool
 */',
        'startLine' => 1060,
        'endLine' => 1063,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isEndExcluded' => 
      array (
        'name' => 'isEndExcluded',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the end date should be excluded.
 *
 * @return bool
 */',
        'startLine' => 1070,
        'endLine' => 1073,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isStartIncluded' => 
      array (
        'name' => 'isStartIncluded',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the start date should be included.
 *
 * @return bool
 */',
        'startLine' => 1080,
        'endLine' => 1083,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isEndIncluded' => 
      array (
        'name' => 'isEndIncluded',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the end date should be included.
 *
 * @return bool
 */',
        'startLine' => 1090,
        'endLine' => 1093,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getIncludedStartDate' => 
      array (
        'name' => 'getIncludedStartDate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the start if it\'s included by option, else return the start + 1 period interval.
 *
 * @return CarbonInterface
 */',
        'startLine' => 1100,
        'endLine' => 1109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getIncludedEndDate' => 
      array (
        'name' => 'getIncludedEndDate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the end if it\'s included by option, else return the end - 1 period interval.
 * Warning: if the period has no fixed end, this method will iterate the period to calculate it.
 *
 * @return CarbonInterface
 */',
        'startLine' => 1117,
        'endLine' => 1130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'addFilter' => 
      array (
        'name' => 'addFilter',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1142,
            'endLine' => 1142,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1142,
                'endLine' => 1142,
                'startTokenPos' => 3720,
                'startFilePos' => 41193,
                'endTokenPos' => 3720,
                'endFilePos' => 41196,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1142,
            'endLine' => 1142,
            'startColumn' => 42,
            'endColumn' => 53,
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
 * Add a filter to the stack.
 *
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 *
 * @param callable $callback
 * @param string   $name
 *
 * @return static
 */',
        'startLine' => 1142,
        'endLine' => 1152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'prependFilter' => 
      array (
        'name' => 'prependFilter',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1164,
            'endLine' => 1164,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1164,
                'endLine' => 1164,
                'startTokenPos' => 3790,
                'startFilePos' => 41683,
                'endTokenPos' => 3790,
                'endFilePos' => 41686,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1164,
            'endLine' => 1164,
            'startColumn' => 46,
            'endColumn' => 57,
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
 * Prepend a filter to the stack.
 *
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 *
 * @param callable $callback
 * @param string   $name
 *
 * @return static
 */',
        'startLine' => 1164,
        'endLine' => 1174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'removeFilter' => 
      array (
        'name' => 'removeFilter',
        'parameters' => 
        array (
          'filter' => 
          array (
            'name' => 'filter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1183,
            'endLine' => 1183,
            'startColumn' => 34,
            'endColumn' => 40,
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
 * Remove a filter by instance or name.
 *
 * @param callable|string $filter
 *
 * @return static
 */',
        'startLine' => 1183,
        'endLine' => 1200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'hasFilter' => 
      array (
        'name' => 'hasFilter',
        'parameters' => 
        array (
          'filter' => 
          array (
            'name' => 'filter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1209,
            'endLine' => 1209,
            'startColumn' => 31,
            'endColumn' => 37,
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
 * Return whether given instance or name is in the filter stack.
 *
 * @param callable|string $filter
 *
 * @return bool
 */',
        'startLine' => 1209,
        'endLine' => 1220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getFilters' => 
      array (
        'name' => 'getFilters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get filters stack.
 *
 * @return array
 */',
        'startLine' => 1227,
        'endLine' => 1230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setFilters' => 
      array (
        'name' => 'setFilters',
        'parameters' => 
        array (
          'filters' => 
          array (
            'name' => 'filters',
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
            'startLine' => 1239,
            'endLine' => 1239,
            'startColumn' => 32,
            'endColumn' => 45,
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
 * Set filters stack.
 *
 * @param array $filters
 *
 * @return static
 */',
        'startLine' => 1239,
        'endLine' => 1249,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'resetFilters' => 
      array (
        'name' => 'resetFilters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reset filters stack.
 *
 * @return static
 */',
        'startLine' => 1256,
        'endLine' => 1272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setRecurrences' => 
      array (
        'name' => 'setRecurrences',
        'parameters' => 
        array (
          'recurrences' => 
          array (
            'name' => 'recurrences',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1283,
            'endLine' => 1283,
            'startColumn' => 36,
            'endColumn' => 47,
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
 * Add a recurrences filter (set maximum number of recurrences).
 *
 * @param int|float|null $recurrences
 *
 * @throws InvalidArgumentException
 *
 * @return static
 */',
        'startLine' => 1283,
        'endLine' => 1304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setStartDate' => 
      array (
        'name' => 'setStartDate',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1316,
            'endLine' => 1316,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'inclusive' => 
          array (
            'name' => 'inclusive',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1316,
                'endLine' => 1316,
                'startTokenPos' => 4403,
                'startFilePos' => 45153,
                'endTokenPos' => 4403,
                'endFilePos' => 45156,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1316,
            'endLine' => 1316,
            'startColumn' => 41,
            'endColumn' => 57,
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
 * Change the period start date.
 *
 * @param DateTime|DateTimeInterface|string $date
 * @param bool|null                         $inclusive
 *
 * @throws InvalidPeriodDateException
 *
 * @return static
 */',
        'startLine' => 1316,
        'endLine' => 1330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setEndDate' => 
      array (
        'name' => 'setEndDate',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1342,
            'endLine' => 1342,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'inclusive' => 
          array (
            'name' => 'inclusive',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1342,
                'endLine' => 1342,
                'startTokenPos' => 4531,
                'startFilePos' => 45888,
                'endTokenPos' => 4531,
                'endFilePos' => 45891,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1342,
            'endLine' => 1342,
            'startColumn' => 39,
            'endColumn' => 55,
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
 * Change the period end date.
 *
 * @param DateTime|DateTimeInterface|string|null $date
 * @param bool|null                              $inclusive
 *
 * @throws \\InvalidArgumentException
 *
 * @return static
 */',
        'startLine' => 1342,
        'endLine' => 1366,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'valid' => 
      array (
        'name' => 'valid',
        'parameters' => 
        array (
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
 * Check if the current position is valid.
 *
 * @return bool
 */',
        'startLine' => 1373,
        'endLine' => 1377,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'key' => 
      array (
        'name' => 'key',
        'parameters' => 
        array (
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
 * Return the current key.
 *
 * @return int|null
 */',
        'startLine' => 1384,
        'endLine' => 1390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'current' => 
      array (
        'name' => 'current',
        'parameters' => 
        array (
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
 * Return the current date.
 *
 * @return CarbonInterface|null
 */',
        'startLine' => 1397,
        'endLine' => 1403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'next' => 
      array (
        'name' => 'next',
        'parameters' => 
        array (
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
 * Move forward to the next date.
 *
 * @throws RuntimeException
 *
 * @return void
 */',
        'startLine' => 1412,
        'endLine' => 1424,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'rewind' => 
      array (
        'name' => 'rewind',
        'parameters' => 
        array (
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
 * Rewind to the start date.
 *
 * Iterating over a date in the UTC timezone avoids bug during backward DST change.
 *
 * @see https://bugs.php.net/bug.php?id=72255
 * @see https://bugs.php.net/bug.php?id=74274
 * @see https://wiki.php.net/rfc/datetime_and_daylight_saving_time
 *
 * @throws RuntimeException
 *
 * @return void
 */',
        'startLine' => 1439,
        'endLine' => 1462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'skip' => 
      array (
        'name' => 'skip',
        'parameters' => 
        array (
          'count' => 
          array (
            'name' => 'count',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1471,
                'endLine' => 1471,
                'startTokenPos' => 5102,
                'startFilePos' => 49105,
                'endTokenPos' => 5102,
                'endFilePos' => 49105,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1471,
            'endLine' => 1471,
            'startColumn' => 26,
            'endColumn' => 35,
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
 * Skip iterations and returns iteration state (false if ended, true if still valid).
 *
 * @param int $count steps number to skip (1 by default)
 *
 * @return bool
 */',
        'startLine' => 1471,
        'endLine' => 1478,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'toIso8601String' => 
      array (
        'name' => 'toIso8601String',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the date period as ISO 8601.
 *
 * @return string
 */',
        'startLine' => 1485,
        'endLine' => 1502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'toString' => 
      array (
        'name' => 'toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the date period into a string.
 *
 * @return string
 */',
        'startLine' => 1509,
        'endLine' => 1544,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'spec' => 
      array (
        'name' => 'spec',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the date period as ISO 8601.
 *
 * @return string
 */',
        'startLine' => 1551,
        'endLine' => 1554,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 1563,
            'endLine' => 1563,
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
 * @return DatePeriod
 */',
        'startLine' => 1563,
        'endLine' => 1579,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'toDatePeriod' => 
      array (
        'name' => 'toDatePeriod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return native DatePeriod PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(CarbonPeriod::create(\'2021-01-05\', \'2021-02-15\')->toDatePeriod());
 * ```
 *
 * @return DatePeriod
 */',
        'startLine' => 1591,
        'endLine' => 1594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isUnfilteredAndEndLess' => 
      array (
        'name' => 'isUnfilteredAndEndLess',
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
        'docComment' => '/**
 * Return `true` if the period has no custom filter and is guaranteed to be endless.
 *
 * Note that we can\'t check if a period is endless as soon as it has custom filters
 * because filters can emit `CarbonPeriod::END_ITERATION` to stop the iteration in
 * a way we can\'t predict without actually iterating the period.
 */',
        'startLine' => 1603,
        'endLine' => 1627,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
 * Convert the date period into an array without changing current iteration state.
 *
 * @return CarbonInterface[]
 */',
        'startLine' => 1634,
        'endLine' => 1651,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
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
 * Count dates in the date period.
 *
 * @return int
 */',
        'startLine' => 1658,
        'endLine' => 1662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'first' => 
      array (
        'name' => 'first',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the first date in the date period.
 *
 * @return CarbonInterface|null
 */',
        'startLine' => 1669,
        'endLine' => 1682,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'last' => 
      array (
        'name' => 'last',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the last date in the date period.
 *
 * @return CarbonInterface|null
 */',
        'startLine' => 1689,
        'endLine' => 1694,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
 * Convert the date period into a string.
 *
 * @return string
 */',
        'startLine' => 1701,
        'endLine' => 1704,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 1721,
            'endLine' => 1721,
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
            'startLine' => 1721,
            'endLine' => 1721,
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
 * Add aliases for setters.
 *
 * CarbonPeriod::days(3)->hours(5)->invert()
 *     ->sinceNow()->until(\'2010-01-10\')
 *     ->filter(...)
 *     ->count()
 *
 * Note: We use magic method to let static and instance aliases with the same names.
 *
 * @param string $method
 * @param array  $parameters
 *
 * @return mixed
 */',
        'startLine' => 1721,
        'endLine' => 1845,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setTimezone' => 
      array (
        'name' => 'setTimezone',
        'parameters' => 
        array (
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1854,
            'endLine' => 1854,
            'startColumn' => 33,
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
 * Set the instance\'s timezone from a string or object and apply it to start/end.
 *
 * @param \\DateTimeZone|string $timezone
 *
 * @return static
 */',
        'startLine' => 1854,
        'endLine' => 1869,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'shiftTimezone' => 
      array (
        'name' => 'shiftTimezone',
        'parameters' => 
        array (
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1878,
            'endLine' => 1878,
            'startColumn' => 35,
            'endColumn' => 43,
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
 * Set the instance\'s timezone from a string or object and add/subtract the offset difference to start/end.
 *
 * @param \\DateTimeZone|string $timezone
 *
 * @return static
 */',
        'startLine' => 1878,
        'endLine' => 1893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'calculateEnd' => 
      array (
        'name' => 'calculateEnd',
        'parameters' => 
        array (
          'rounding' => 
          array (
            'name' => 'rounding',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1902,
                'endLine' => 1902,
                'startTokenPos' => 7248,
                'startFilePos' => 60983,
                'endTokenPos' => 7248,
                'endFilePos' => 60986,
              ),
            ),
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
            'startLine' => 1902,
            'endLine' => 1902,
            'startColumn' => 34,
            'endColumn' => 57,
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
 * Returns the end is set, else calculated from start an recurrences.
 *
 * @param string|null $rounding Optional rounding \'floor\', \'ceil\', \'round\' using the period interval.
 *
 * @return CarbonInterface
 */',
        'startLine' => 1902,
        'endLine' => 1919,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'getEndFromRecurrences' => 
      array (
        'name' => 'getEndFromRecurrences',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return CarbonInterface|null
 */',
        'startLine' => 1924,
        'endLine' => 1950,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'iterateUntilEnd' => 
      array (
        'name' => 'iterateUntilEnd',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return CarbonInterface|null
 */',
        'startLine' => 1955,
        'endLine' => 1969,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'overlaps' => 
      array (
        'name' => 'overlaps',
        'parameters' => 
        array (
          'rangeOrRangeStart' => 
          array (
            'name' => 'rangeOrRangeStart',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1980,
            'endLine' => 1980,
            'startColumn' => 30,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'rangeEnd' => 
          array (
            'name' => 'rangeEnd',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1980,
                'endLine' => 1980,
                'startTokenPos' => 7654,
                'startFilePos' => 63342,
                'endTokenPos' => 7654,
                'endFilePos' => 63345,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1980,
            'endLine' => 1980,
            'startColumn' => 50,
            'endColumn' => 65,
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
 * Returns true if the current period overlaps the given one (if 1 parameter passed)
 * or the period between 2 dates (if 2 parameters passed).
 *
 * @param CarbonPeriod|\\DateTimeInterface|Carbon|CarbonImmutable|string $rangeOrRangeStart
 * @param \\DateTimeInterface|Carbon|CarbonImmutable|string|null         $rangeEnd
 *
 * @return bool
 */',
        'startLine' => 1980,
        'endLine' => 1992,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'forEach' => 
      array (
        'name' => 'forEach',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2006,
            'endLine' => 2006,
            'startColumn' => 29,
            'endColumn' => 46,
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
 * Execute a given function on each date of the period.
 *
 * @example
 * ```
 * Carbon::create(\'2020-11-29\')->daysUntil(\'2020-12-24\')->forEach(function (Carbon $date) {
 *   echo $date->diffInDays(\'2020-12-25\')." days before Christmas!\\n";
 * });
 * ```
 *
 * @param callable $callback
 */',
        'startLine' => 2006,
        'endLine' => 2011,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'map' => 
      array (
        'name' => 'map',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2028,
            'endLine' => 2028,
            'startColumn' => 25,
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
 * Execute a given function on each date of the period and yield the result of this function.
 *
 * @example
 * ```
 * $period = Carbon::create(\'2020-11-29\')->daysUntil(\'2020-12-24\');
 * echo implode("\\n", iterator_to_array($period->map(function (Carbon $date) {
 *   return $date->diffInDays(\'2020-12-25\').\' days before Christmas!\';
 * })));
 * ```
 *
 * @param callable $callback
 *
 * @return \\Generator
 */',
        'startLine' => 2028,
        'endLine' => 2033,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => true,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'eq' => 
      array (
        'name' => 'eq',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2045,
            'endLine' => 2045,
            'startColumn' => 24,
            'endColumn' => 30,
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
 * Determines if the instance is equal to another.
 * Warning: if options differ, instances will never be equal.
 *
 * @param mixed $period
 *
 * @see equalTo()
 *
 * @return bool
 */',
        'startLine' => 2045,
        'endLine' => 2048,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'equalTo' => 
      array (
        'name' => 'equalTo',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2058,
            'endLine' => 2058,
            'startColumn' => 29,
            'endColumn' => 35,
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
 * Determines if the instance is equal to another.
 * Warning: if options differ, instances will never be equal.
 *
 * @param mixed $period
 *
 * @return bool
 */',
        'startLine' => 2058,
        'endLine' => 2071,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'ne' => 
      array (
        'name' => 'ne',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2083,
            'endLine' => 2083,
            'startColumn' => 24,
            'endColumn' => 30,
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
 * Determines if the instance is not equal to another.
 * Warning: if options differ, instances will never be equal.
 *
 * @param mixed $period
 *
 * @see notEqualTo()
 *
 * @return bool
 */',
        'startLine' => 2083,
        'endLine' => 2086,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'notEqualTo' => 
      array (
        'name' => 'notEqualTo',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2096,
            'endLine' => 2096,
            'startColumn' => 32,
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
 * Determines if the instance is not equal to another.
 * Warning: if options differ, instances will never be equal.
 *
 * @param mixed $period
 *
 * @return bool
 */',
        'startLine' => 2096,
        'endLine' => 2099,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'startsBefore' => 
      array (
        'name' => 'startsBefore',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2109,
                'endLine' => 2109,
                'startTokenPos' => 8133,
                'startFilePos' => 66874,
                'endTokenPos' => 8133,
                'endFilePos' => 66877,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2109,
            'endLine' => 2109,
            'startColumn' => 34,
            'endColumn' => 45,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the start date is before an other given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2109,
        'endLine' => 2112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'startsBeforeOrAt' => 
      array (
        'name' => 'startsBeforeOrAt',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2122,
                'endLine' => 2122,
                'startTokenPos' => 8174,
                'startFilePos' => 67234,
                'endTokenPos' => 8174,
                'endFilePos' => 67237,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2122,
            'endLine' => 2122,
            'startColumn' => 38,
            'endColumn' => 49,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the start date is before or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2122,
        'endLine' => 2125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'startsAfter' => 
      array (
        'name' => 'startsAfter',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2135,
                'endLine' => 2135,
                'startTokenPos' => 8215,
                'startFilePos' => 67589,
                'endTokenPos' => 8215,
                'endFilePos' => 67592,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2135,
            'endLine' => 2135,
            'startColumn' => 33,
            'endColumn' => 44,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the start date is after an other given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2135,
        'endLine' => 2138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'startsAfterOrAt' => 
      array (
        'name' => 'startsAfterOrAt',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2148,
                'endLine' => 2148,
                'startTokenPos' => 8256,
                'startFilePos' => 67950,
                'endTokenPos' => 8256,
                'endFilePos' => 67953,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2148,
            'endLine' => 2148,
            'startColumn' => 37,
            'endColumn' => 48,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the start date is after or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2148,
        'endLine' => 2151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'startsAt' => 
      array (
        'name' => 'startsAt',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2161,
                'endLine' => 2161,
                'startTokenPos' => 8297,
                'startFilePos' => 68304,
                'endTokenPos' => 8297,
                'endFilePos' => 68307,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2161,
            'endLine' => 2161,
            'startColumn' => 30,
            'endColumn' => 41,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the start date is the same as a given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2161,
        'endLine' => 2164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'endsBefore' => 
      array (
        'name' => 'endsBefore',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2174,
                'endLine' => 2174,
                'startTokenPos' => 8338,
                'startFilePos' => 68647,
                'endTokenPos' => 8338,
                'endFilePos' => 68650,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2174,
            'endLine' => 2174,
            'startColumn' => 32,
            'endColumn' => 43,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the end date is before an other given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2174,
        'endLine' => 2177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'endsBeforeOrAt' => 
      array (
        'name' => 'endsBeforeOrAt',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2187,
                'endLine' => 2187,
                'startTokenPos' => 8379,
                'startFilePos' => 69003,
                'endTokenPos' => 8379,
                'endFilePos' => 69006,
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
            'startColumn' => 36,
            'endColumn' => 47,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the end date is before or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2187,
        'endLine' => 2190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'endsAfter' => 
      array (
        'name' => 'endsAfter',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2200,
                'endLine' => 2200,
                'startTokenPos' => 8420,
                'startFilePos' => 69354,
                'endTokenPos' => 8420,
                'endFilePos' => 69357,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2200,
            'endLine' => 2200,
            'startColumn' => 31,
            'endColumn' => 42,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the end date is after an other given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2200,
        'endLine' => 2203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'endsAfterOrAt' => 
      array (
        'name' => 'endsAfterOrAt',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2213,
                'endLine' => 2213,
                'startTokenPos' => 8461,
                'startFilePos' => 69711,
                'endTokenPos' => 8461,
                'endFilePos' => 69714,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2213,
            'endLine' => 2213,
            'startColumn' => 35,
            'endColumn' => 46,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the end date is after or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2213,
        'endLine' => 2216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'endsAt' => 
      array (
        'name' => 'endsAt',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2226,
                'endLine' => 2226,
                'startTokenPos' => 8502,
                'startFilePos' => 70061,
                'endTokenPos' => 8502,
                'endFilePos' => 70064,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2226,
            'endLine' => 2226,
            'startColumn' => 28,
            'endColumn' => 39,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the end date is the same as a given date.
 * (Rather start/end are included by options is ignored.)
 *
 * @param mixed $date
 *
 * @return bool
 */',
        'startLine' => 2226,
        'endLine' => 2229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isStarted' => 
      array (
        'name' => 'isStarted',
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
        'docComment' => '/**
 * Return true if start date is now or later.
 * (Rather start/end are included by options is ignored.)
 *
 * @return bool
 */',
        'startLine' => 2237,
        'endLine' => 2240,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isEnded' => 
      array (
        'name' => 'isEnded',
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
        'docComment' => '/**
 * Return true if end date is now or later.
 * (Rather start/end are included by options is ignored.)
 *
 * @return bool
 */',
        'startLine' => 2248,
        'endLine' => 2251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isInProgress' => 
      array (
        'name' => 'isInProgress',
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
        'docComment' => '/**
 * Return true if now is between start date (included) and end date (excluded).
 * (Rather start/end are included by options is ignored.)
 *
 * @return bool
 */',
        'startLine' => 2259,
        'endLine' => 2262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 2273,
            'endLine' => 2273,
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
                'startLine' => 2273,
                'endLine' => 2273,
                'startTokenPos' => 8633,
                'startFilePos' => 71340,
                'endTokenPos' => 8633,
                'endFilePos' => 71340,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2273,
            'endLine' => 2273,
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
                'startLine' => 2273,
                'endLine' => 2273,
                'startTokenPos' => 8640,
                'startFilePos' => 71355,
                'endTokenPos' => 8640,
                'endFilePos' => 71361,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2273,
            'endLine' => 2273,
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
 * @param string                              $unit
 * @param float|int|string|\\DateInterval|null $precision
 * @param string                              $function
 *
 * @return static
 */',
        'startLine' => 2273,
        'endLine' => 2283,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 2293,
            'endLine' => 2293,
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
                'startLine' => 2293,
                'endLine' => 2293,
                'startTokenPos' => 8764,
                'startFilePos' => 72078,
                'endTokenPos' => 8764,
                'endFilePos' => 72078,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2293,
            'endLine' => 2293,
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
 * @param string                              $unit
 * @param float|int|string|\\DateInterval|null $precision
 *
 * @return static
 */',
        'startLine' => 2293,
        'endLine' => 2296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 2306,
            'endLine' => 2306,
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
                'startLine' => 2306,
                'endLine' => 2306,
                'startTokenPos' => 8802,
                'startFilePos' => 72459,
                'endTokenPos' => 8802,
                'endFilePos' => 72459,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2306,
            'endLine' => 2306,
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
 * @param string                              $unit
 * @param float|int|string|\\DateInterval|null $precision
 *
 * @return static
 */',
        'startLine' => 2306,
        'endLine' => 2309,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2319,
                'endLine' => 2319,
                'startTokenPos' => 8837,
                'startFilePos' => 72854,
                'endTokenPos' => 8837,
                'endFilePos' => 72857,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2319,
            'endLine' => 2319,
            'startColumn' => 27,
            'endColumn' => 43,
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
                'startLine' => 2319,
                'endLine' => 2319,
                'startTokenPos' => 8844,
                'startFilePos' => 72872,
                'endTokenPos' => 8844,
                'endFilePos' => 72878,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2319,
            'endLine' => 2319,
            'startColumn' => 46,
            'endColumn' => 64,
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
 * Round the current instance second with given precision if specified (else period interval is used).
 *
 * @param float|int|string|\\DateInterval|null $precision
 * @param string                              $function
 *
 * @return static
 */',
        'startLine' => 2319,
        'endLine' => 2325,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2334,
                'endLine' => 2334,
                'startTokenPos' => 8900,
                'startFilePos' => 73336,
                'endTokenPos' => 8900,
                'endFilePos' => 73339,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2334,
            'endLine' => 2334,
            'startColumn' => 27,
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
 * Round the current instance second with given precision if specified (else period interval is used).
 *
 * @param float|int|string|\\DateInterval|null $precision
 *
 * @return static
 */',
        'startLine' => 2334,
        'endLine' => 2337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2346,
                'endLine' => 2346,
                'startTokenPos' => 8932,
                'startFilePos' => 73662,
                'endTokenPos' => 8932,
                'endFilePos' => 73665,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2346,
            'endLine' => 2346,
            'startColumn' => 26,
            'endColumn' => 42,
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
 * Ceil the current instance second with given precision if specified (else period interval is used).
 *
 * @param float|int|string|\\DateInterval|null $precision
 *
 * @return static
 */',
        'startLine' => 2346,
        'endLine' => 2349,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'jsonSerialize' => 
      array (
        'name' => 'jsonSerialize',
        'parameters' => 
        array (
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
 * Specify data which should be serialized to JSON.
 *
 * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
 *
 * @return CarbonInterface[]
 */',
        'startLine' => 2358,
        'endLine' => 2362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'contains' => 
      array (
        'name' => 'contains',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2371,
                'endLine' => 2371,
                'startTokenPos' => 8991,
                'startFilePos' => 74319,
                'endTokenPos' => 8991,
                'endFilePos' => 74322,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2371,
            'endLine' => 2371,
            'startColumn' => 30,
            'endColumn' => 41,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return true if the given date is between start and end.
 *
 * @param \\Carbon\\Carbon|\\Carbon\\CarbonPeriod|\\Carbon\\CarbonInterval|\\DateInterval|\\DatePeriod|\\DateTimeInterface|string|null $date
 *
 * @return bool
 */',
        'startLine' => 2371,
        'endLine' => 2377,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'follows' => 
      array (
        'name' => 'follows',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2388,
            'endLine' => 2388,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2388,
            'endLine' => 2388,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 1,
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
 * Return true if the current period follows a given other period (with no overlap).
 * For instance, [2019-08-01 -> 2019-08-12] follows [2019-07-29 -> 2019-07-31]
 * Note than in this example, follows() would be false if 2019-08-01 or 2019-07-31 was excluded by options.
 *
 * @param \\Carbon\\CarbonPeriod|\\DatePeriod|string $period
 *
 * @return bool
 */',
        'startLine' => 2388,
        'endLine' => 2393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isFollowedBy' => 
      array (
        'name' => 'isFollowedBy',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2404,
            'endLine' => 2404,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2404,
            'endLine' => 2404,
            'startColumn' => 43,
            'endColumn' => 55,
            'parameterIndex' => 1,
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
 * Return true if the given other period follows the current one (with no overlap).
 * For instance, [2019-07-29 -> 2019-07-31] is followed by [2019-08-01 -> 2019-08-12]
 * Note than in this example, isFollowedBy() would be false if 2019-08-01 or 2019-07-31 was excluded by options.
 *
 * @param \\Carbon\\CarbonPeriod|\\DatePeriod|string $period
 *
 * @return bool
 */',
        'startLine' => 2404,
        'endLine' => 2409,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isConsecutiveWith' => 
      array (
        'name' => 'isConsecutiveWith',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2421,
            'endLine' => 2421,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2421,
            'endLine' => 2421,
            'startColumn' => 48,
            'endColumn' => 60,
            'parameterIndex' => 1,
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
 * Return true if the given period either follows or is followed by the current one.
 *
 * @see follows()
 * @see isFollowedBy()
 *
 * @param \\Carbon\\CarbonPeriod|\\DatePeriod|string $period
 *
 * @return bool
 */',
        'startLine' => 2421,
        'endLine' => 2424,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'updateInternalState' => 
      array (
        'name' => 'updateInternalState',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update properties after removing built-in filters.
 *
 * @return void
 */',
        'startLine' => 2431,
        'endLine' => 2440,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'createFilterTuple' => 
      array (
        'name' => 'createFilterTuple',
        'parameters' => 
        array (
          'parameters' => 
          array (
            'name' => 'parameters',
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
            'startLine' => 2451,
            'endLine' => 2451,
            'startColumn' => 42,
            'endColumn' => 58,
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
 * Create a filter tuple from raw parameters.
 *
 * Will create an automatic filter callback for one of Carbon\'s is* methods.
 *
 * @param array $parameters
 *
 * @return array
 */',
        'startLine' => 2451,
        'endLine' => 2462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isCarbonPredicateMethod' => 
      array (
        'name' => 'isCarbonPredicateMethod',
        'parameters' => 
        array (
          'callable' => 
          array (
            'name' => 'callable',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2472,
            'endLine' => 2472,
            'startColumn' => 48,
            'endColumn' => 56,
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
 * Return whether given callable is a string pointing to one of Carbon\'s is* methods
 * and should be automatically converted to a filter callback.
 *
 * @param callable $callable
 *
 * @return bool
 */',
        'startLine' => 2472,
        'endLine' => 2476,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'filterRecurrences' => 
      array (
        'name' => 'filterRecurrences',
        'parameters' => 
        array (
          'current' => 
          array (
            'name' => 'current',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2488,
            'endLine' => 2488,
            'startColumn' => 42,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2488,
            'endLine' => 2488,
            'startColumn' => 52,
            'endColumn' => 55,
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
 * Recurrences filter callback (limits number of recurrences).
 *
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 *
 * @param \\Carbon\\Carbon $current
 * @param int            $key
 *
 * @return bool|string
 */',
        'startLine' => 2488,
        'endLine' => 2495,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'filterEndDate' => 
      array (
        'name' => 'filterEndDate',
        'parameters' => 
        array (
          'current' => 
          array (
            'name' => 'current',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2504,
            'endLine' => 2504,
            'startColumn' => 38,
            'endColumn' => 45,
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
 * End date filter callback.
 *
 * @param \\Carbon\\Carbon $current
 *
 * @return bool|string
 */',
        'startLine' => 2504,
        'endLine' => 2515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'endIteration' => 
      array (
        'name' => 'endIteration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * End iteration filter callback.
 *
 * @return string
 */',
        'startLine' => 2522,
        'endLine' => 2525,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'handleChangedParameters' => 
      array (
        'name' => 'handleChangedParameters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle change of the parameters.
 */',
        'startLine' => 2530,
        'endLine' => 2539,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'validateCurrentDate' => 
      array (
        'name' => 'validateCurrentDate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validate current date and stop iteration when necessary.
 *
 * Returns true when current date is valid, false if it is not, or static::END_ITERATION
 * when iteration should be stopped.
 *
 * @return bool|string
 */',
        'startLine' => 2549,
        'endLine' => 2557,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'checkFilters' => 
      array (
        'name' => 'checkFilters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check whether current value and key pass all the filters.
 *
 * @return bool|string
 */',
        'startLine' => 2564,
        'endLine' => 2586,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'prepareForReturn' => 
      array (
        'name' => 'prepareForReturn',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Carbon\\CarbonInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2595,
            'endLine' => 2595,
            'startColumn' => 41,
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
        'docComment' => '/**
 * Prepare given date to be returned to the external logic.
 *
 * @param CarbonInterface $date
 *
 * @return CarbonInterface
 */',
        'startLine' => 2595,
        'endLine' => 2604,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'incrementCurrentDateUntilValid' => 
      array (
        'name' => 'incrementCurrentDateUntilValid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Keep incrementing the current date until a valid date is found or the iteration is ended.
 *
 * @throws RuntimeException
 *
 * @return void
 */',
        'startLine' => 2613,
        'endLine' => 2626,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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
            'startLine' => 2636,
            'endLine' => 2636,
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
            'startLine' => 2636,
            'endLine' => 2636,
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
        'startLine' => 2636,
        'endLine' => 2647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'resolveCarbon' => 
      array (
        'name' => 'resolveCarbon',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2657,
                'endLine' => 2657,
                'startTokenPos' => 10188,
                'startFilePos' => 82435,
                'endTokenPos' => 10188,
                'endFilePos' => 82438,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2657,
            'endLine' => 2657,
            'startColumn' => 38,
            'endColumn' => 49,
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
 * Return the Carbon instance passed through, a now instance in the same timezone
 * if null given or parse the input if string given.
 *
 * @param \\Carbon\\Carbon|\\Carbon\\CarbonPeriod|\\Carbon\\CarbonInterval|\\DateInterval|\\DatePeriod|\\DateTimeInterface|string|null $date
 *
 * @return \\Carbon\\CarbonInterface
 */',
        'startLine' => 2657,
        'endLine' => 2660,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'resolveCarbonPeriod' => 
      array (
        'name' => 'resolveCarbonPeriod',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2670,
            'endLine' => 2670,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2670,
            'endLine' => 2670,
            'startColumn' => 53,
            'endColumn' => 65,
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
 * Resolve passed arguments or DatePeriod to a CarbonPeriod object.
 *
 * @param mixed $period
 * @param mixed ...$arguments
 *
 * @return static
 */',
        'startLine' => 2670,
        'endLine' => 2679,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 2,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'orderCouple' => 
      array (
        'name' => 'orderCouple',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
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
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
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
            'startColumn' => 42,
            'endColumn' => 48,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2681,
        'endLine' => 2684,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'makeDateTime' => 
      array (
        'name' => 'makeDateTime',
        'parameters' => 
        array (
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
            'startLine' => 2686,
            'endLine' => 2686,
            'startColumn' => 35,
            'endColumn' => 40,
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
                  'name' => 'DateTimeInterface',
                  'isIdentifier' => false,
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
        'startLine' => 2686,
        'endLine' => 2706,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'isInfiniteDate' => 
      array (
        'name' => 'isInfiniteDate',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2708,
            'endLine' => 2708,
            'startColumn' => 37,
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
        'docComment' => NULL,
        'startLine' => 2708,
        'endLine' => 2711,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'rawDate' => 
      array (
        'name' => 'rawDate',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2713,
            'endLine' => 2713,
            'startColumn' => 30,
            'endColumn' => 34,
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
                  'name' => 'DateTimeInterface',
                  'isIdentifier' => false,
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
        'startLine' => 2713,
        'endLine' => 2732,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
        'aliasName' => NULL,
      ),
      'setDefaultParameters' => 
      array (
        'name' => 'setDefaultParameters',
        'parameters' => 
        array (
          'parameters' => 
          array (
            'name' => 'parameters',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2734,
            'endLine' => 2734,
            'startColumn' => 50,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'defaults' => 
          array (
            'name' => 'defaults',
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
            'startLine' => 2734,
            'endLine' => 2734,
            'startColumn' => 70,
            'endColumn' => 84,
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
        'startLine' => 2734,
        'endLine' => 2741,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon',
        'declaringClassName' => 'Carbon\\CarbonPeriod',
        'implementingClassName' => 'Carbon\\CarbonPeriod',
        'currentClassName' => 'Carbon\\CarbonPeriod',
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