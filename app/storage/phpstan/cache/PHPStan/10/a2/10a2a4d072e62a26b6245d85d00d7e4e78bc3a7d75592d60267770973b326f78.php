<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Boundaries.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Boundaries
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-973865df7cf2234a816f1f08da2ae3dc6c920d480e6693fadaf7af784ee0a1ec-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Boundaries',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Boundaries.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Boundaries',
    'shortName' => 'Boundaries',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Boundaries.
 *
 * startOf, endOf and derived method for each unit.
 *
 * Depends on the following properties:
 *
 * @property int $year
 * @property int $month
 * @property int $daysInMonth
 * @property int $quarter
 *
 * Depends on the following methods:
 *
 * @method $this setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0)
 * @method $this setDate(int $year, int $month, int $day)
 * @method $this addMonths(int $value = 1)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 34,
    'endLine' => 443,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'startOfDay' => 
      array (
        'name' => 'startOfDay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the time to 00:00:00 start of day
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfDay();
 * ```
 *
 * @return static
 */',
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfDay' => 
      array (
        'name' => 'endOfDay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the time to 23:59:59.999999 end of day
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfDay();
 * ```
 *
 * @return static
 */',
        'startLine' => 61,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfMonth' => 
      array (
        'name' => 'startOfMonth',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to the first day of the month and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMonth();
 * ```
 *
 * @return static
 */',
        'startLine' => 76,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfMonth' => 
      array (
        'name' => 'endOfMonth',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to end of the month and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMonth();
 * ```
 *
 * @return static
 */',
        'startLine' => 91,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfQuarter' => 
      array (
        'name' => 'startOfQuarter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to the first day of the quarter and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfQuarter();
 * ```
 *
 * @return static
 */',
        'startLine' => 106,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfQuarter' => 
      array (
        'name' => 'endOfQuarter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to end of the quarter and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfQuarter();
 * ```
 *
 * @return static
 */',
        'startLine' => 123,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfYear' => 
      array (
        'name' => 'startOfYear',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to the first day of the year and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfYear();
 * ```
 *
 * @return static
 */',
        'startLine' => 138,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfYear' => 
      array (
        'name' => 'endOfYear',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to end of the year and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfYear();
 * ```
 *
 * @return static
 */',
        'startLine' => 153,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfDecade' => 
      array (
        'name' => 'startOfDecade',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to the first day of the decade and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfDecade();
 * ```
 *
 * @return static
 */',
        'startLine' => 168,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfDecade' => 
      array (
        'name' => 'endOfDecade',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to end of the decade and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfDecade();
 * ```
 *
 * @return static
 */',
        'startLine' => 185,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfCentury' => 
      array (
        'name' => 'startOfCentury',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to the first day of the century and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfCentury();
 * ```
 *
 * @return static
 */',
        'startLine' => 202,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfCentury' => 
      array (
        'name' => 'endOfCentury',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to end of the century and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfCentury();
 * ```
 *
 * @return static
 */',
        'startLine' => 219,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfMillennium' => 
      array (
        'name' => 'startOfMillennium',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to the first day of the millennium and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMillennium();
 * ```
 *
 * @return static
 */',
        'startLine' => 236,
        'endLine' => 241,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfMillennium' => 
      array (
        'name' => 'endOfMillennium',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the date to end of the millennium and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMillennium();
 * ```
 *
 * @return static
 */',
        'startLine' => 253,
        'endLine' => 258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfWeek' => 
      array (
        'name' => 'startOfWeek',
        'parameters' => 
        array (
          'weekStartsAt' => 
          array (
            'name' => 'weekStartsAt',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 274,
                'endLine' => 274,
                'startTokenPos' => 757,
                'startFilePos' => 6894,
                'endTokenPos' => 757,
                'endFilePos' => 6897,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 274,
            'endLine' => 274,
            'startColumn' => 33,
            'endColumn' => 52,
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
 * Resets the date to the first day of week (defined in $weekStartsAt) and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->locale(\'ar\')->startOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfWeek(Carbon::SUNDAY) . "\\n";
 * ```
 *
 * @param int $weekStartsAt optional start allow you to specify the day of week to use to start the week
 *
 * @return static
 */',
        'startLine' => 274,
        'endLine' => 277,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfWeek' => 
      array (
        'name' => 'endOfWeek',
        'parameters' => 
        array (
          'weekEndsAt' => 
          array (
            'name' => 'weekEndsAt',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 293,
                'endLine' => 293,
                'startTokenPos' => 814,
                'startFilePos' => 7604,
                'endTokenPos' => 814,
                'endFilePos' => 7607,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 293,
            'endLine' => 293,
            'startColumn' => 31,
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
 * Resets the date to end of week (defined in $weekEndsAt) and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->locale(\'ar\')->endOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfWeek(Carbon::SATURDAY) . "\\n";
 * ```
 *
 * @param int $weekEndsAt optional start allow you to specify the day of week to use to end the week
 *
 * @return static
 */',
        'startLine' => 293,
        'endLine' => 296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfHour' => 
      array (
        'name' => 'startOfHour',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify to start of current hour, minutes and seconds become 0
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfHour();
 * ```
 *
 * @return static
 */',
        'startLine' => 308,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfHour' => 
      array (
        'name' => 'endOfHour',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify to end of current hour, minutes and seconds become 59
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfHour();
 * ```
 *
 * @return static
 */',
        'startLine' => 323,
        'endLine' => 326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfMinute' => 
      array (
        'name' => 'startOfMinute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify to start of current minute, seconds become 0
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMinute();
 * ```
 *
 * @return static
 */',
        'startLine' => 338,
        'endLine' => 341,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfMinute' => 
      array (
        'name' => 'endOfMinute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify to end of current minute, seconds become 59
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMinute();
 * ```
 *
 * @return static
 */',
        'startLine' => 353,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOfSecond' => 
      array (
        'name' => 'startOfSecond',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify to start of current second, microseconds become 0
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->startOfSecond()
 *   ->format(\'H:i:s.u\');
 * ```
 *
 * @return static
 */',
        'startLine' => 370,
        'endLine' => 373,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOfSecond' => 
      array (
        'name' => 'endOfSecond',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify to end of current second, microseconds become 999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->endOfSecond()
 *   ->format(\'H:i:s.u\');
 * ```
 *
 * @return static
 */',
        'startLine' => 387,
        'endLine' => 390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'startOf' => 
      array (
        'name' => 'startOf',
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
            'startLine' => 407,
            'endLine' => 407,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 407,
            'endLine' => 407,
            'startColumn' => 36,
            'endColumn' => 45,
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
 * Modify to start of current given unit.
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->startOf(\'month\')
 *   ->endOf(\'week\', Carbon::FRIDAY);
 * ```
 *
 * @param string            $unit
 * @param array<int, mixed> $params
 *
 * @return static
 */',
        'startLine' => 407,
        'endLine' => 416,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
      'endOf' => 
      array (
        'name' => 'endOf',
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
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 27,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 34,
            'endColumn' => 43,
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
 * Modify to end of current given unit.
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->startOf(\'month\')
 *   ->endOf(\'week\', Carbon::FRIDAY);
 * ```
 *
 * @param string            $unit
 * @param array<int, mixed> $params
 *
 * @return static
 */',
        'startLine' => 433,
        'endLine' => 442,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Boundaries',
        'implementingClassName' => 'Carbon\\Traits\\Boundaries',
        'currentClassName' => 'Carbon\\Traits\\Boundaries',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));