<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Timestamp.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Timestamp
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2793cd174f53ec6219f0819657ef61163085a715614e9526dcd208a072fd30cf-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Timestamp',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Timestamp.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Timestamp',
    'shortName' => 'Timestamp',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Timestamp.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 199,
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
      'createFromTimestamp' => 
      array (
        'name' => 'createFromTimestamp',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 48,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tz' => 
          array (
            'name' => 'tz',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 38,
                'startFilePos' => 753,
                'endTokenPos' => 38,
                'endFilePos' => 756,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 60,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Create a Carbon instance from a timestamp and set the timezone (use default one if not specified).
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 *
 * @param float|int|string          $timestamp
 * @param \\DateTimeZone|string|null $tz
 *
 * @return static
 */',
        'startLine' => 29,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'createFromTimestampUTC' => 
      array (
        'name' => 'createFromTimestampUTC',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 51,
            'endColumn' => 60,
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
 * Create a Carbon instance from an timestamp keeping the timezone to UTC.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 *
 * @param float|int|string $timestamp
 *
 * @return static
 */',
        'startLine' => 44,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'createFromTimestampMsUTC' => 
      array (
        'name' => 'createFromTimestampMsUTC',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 53,
            'endColumn' => 62,
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
 * Create a Carbon instance from a timestamp in milliseconds.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 *
 * @param float|int|string $timestamp
 *
 * @return static
 */',
        'startLine' => 64,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'createFromTimestampMs' => 
      array (
        'name' => 'createFromTimestampMs',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 50,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tz' => 
          array (
            'name' => 'tz',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 89,
                'endLine' => 89,
                'startTokenPos' => 394,
                'startFilePos' => 3060,
                'endTokenPos' => 394,
                'endFilePos' => 3063,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 62,
            'endColumn' => 71,
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
 * Create a Carbon instance from a timestamp in milliseconds.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 *
 * @param float|int|string          $timestamp
 * @param \\DateTimeZone|string|null $tz
 *
 * @return static
 */',
        'startLine' => 89,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'timestamp' => 
      array (
        'name' => 'timestamp',
        'parameters' => 
        array (
          'unixTimestamp' => 
          array (
            'name' => 'unixTimestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 31,
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
 * Set the instance\'s timestamp.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 *
 * @param float|int|string $unixTimestamp
 *
 * @return static
 */',
        'startLine' => 104,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'getPreciseTimestamp' => 
      array (
        'name' => 'getPreciseTimestamp',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '6',
              'attributes' => 
              array (
                'startLine' => 127,
                'endLine' => 127,
                'startTokenPos' => 454,
                'startFilePos' => 4528,
                'endTokenPos' => 454,
                'endFilePos' => 4528,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 41,
            'endColumn' => 54,
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
 * Returns a timestamp rounded with the given precision (6 by default).
 *
 * @example getPreciseTimestamp()   1532087464437474 (microsecond maximum precision)
 * @example getPreciseTimestamp(6)  1532087464437474
 * @example getPreciseTimestamp(5)  153208746443747  (1/100000 second precision)
 * @example getPreciseTimestamp(4)  15320874644375   (1/10000 second precision)
 * @example getPreciseTimestamp(3)  1532087464437    (millisecond precision)
 * @example getPreciseTimestamp(2)  153208746444     (1/100 second precision)
 * @example getPreciseTimestamp(1)  15320874644      (1/10 second precision)
 * @example getPreciseTimestamp(0)  1532087464       (second precision)
 * @example getPreciseTimestamp(-1) 153208746        (10 second precision)
 * @example getPreciseTimestamp(-2) 15320875         (100 second precision)
 *
 * @param int $precision
 *
 * @return float
 */',
        'startLine' => 127,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'valueOf' => 
      array (
        'name' => 'valueOf',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the milliseconds timestamps used amongst other by Date javascript objects.
 *
 * @return float
 */',
        'startLine' => 137,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'getTimestampMs' => 
      array (
        'name' => 'getTimestampMs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the timestamp with millisecond precision.
 *
 * @return int
 */',
        'startLine' => 147,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'unix' => 
      array (
        'name' => 'unix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @alias getTimestamp
 *
 * Returns the UNIX timestamp for the current date.
 *
 * @return int
 */',
        'startLine' => 159,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
        'aliasName' => NULL,
      ),
      'getIntegerAndDecimalParts' => 
      array (
        'name' => 'getIntegerAndDecimalParts',
        'parameters' => 
        array (
          'numbers' => 
          array (
            'name' => 'numbers',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 55,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'decimals' => 
          array (
            'name' => 'decimals',
            'default' => 
            array (
              'code' => '6',
              'attributes' => 
              array (
                'startLine' => 176,
                'endLine' => 176,
                'startTokenPos' => 582,
                'startFilePos' => 5925,
                'endTokenPos' => 582,
                'endFilePos' => 5925,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 65,
            'endColumn' => 77,
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
 * Return an array with integer part digits and decimals digits split from one or more positive numbers
 * (such as timestamps) as string with the given number of decimals (6 by default).
 *
 * By splitting integer and decimal, this method obtain a better precision than
 * number_format when the input is a string.
 *
 * @param float|int|string $numbers  one or more numbers
 * @param int              $decimals number of decimals precision (6 by default)
 *
 * @return array 0-index is integer part, 1-index is decimal part digits
 */',
        'startLine' => 176,
        'endLine' => 198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Timestamp',
        'implementingClassName' => 'Carbon\\Traits\\Timestamp',
        'currentClassName' => 'Carbon\\Traits\\Timestamp',
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