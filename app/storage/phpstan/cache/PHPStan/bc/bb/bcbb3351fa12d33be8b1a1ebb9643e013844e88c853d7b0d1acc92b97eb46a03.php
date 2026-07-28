<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Converter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Converter
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7910cd6e2fa29cb14682660984a028e606941e8fe5f2bc614ed4b594033ad1ce-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Converter',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Converter.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Converter',
    'shortName' => 'Converter',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Converter.
 *
 * Change date into different string formats and types and
 * handle the string cast.
 *
 * Depends on the following methods:
 *
 * @method static copy()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 639,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Carbon\\Traits\\ToStringFormat',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'format' => 
      array (
        'name' => 'format',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 28,
            'endColumn' => 34,
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
 * Returns the formatted date string on success or FALSE on failure.
 *
 * @see https://php.net/manual/en/datetime.format.php
 *
 * @param string $format
 *
 * @return string
 */',
        'startLine' => 49,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'rawFormat' => 
      array (
        'name' => 'rawFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
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
 * @see https://php.net/manual/en/datetime.format.php
 *
 * @param string $format
 *
 * @return string
 */',
        'startLine' => 72,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
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
 * Format the instance as a string using the set format
 *
 * @example
 * ```
 * echo Carbon::now(); // Carbon instances can be cast to string
 * ```
 *
 * @return string
 */',
        'startLine' => 87,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toDateString' => 
      array (
        'name' => 'toDateString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as date
 *
 * @example
 * ```
 * echo Carbon::now()->toDateString();
 * ```
 *
 * @return string
 */',
        'startLine' => 110,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toFormattedDateString' => 
      array (
        'name' => 'toFormattedDateString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as a readable date
 *
 * @example
 * ```
 * echo Carbon::now()->toFormattedDateString();
 * ```
 *
 * @return string
 */',
        'startLine' => 125,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toFormattedDayDateString' => 
      array (
        'name' => 'toFormattedDayDateString',
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
 * Format the instance with the day, and a readable date
 *
 * @example
 * ```
 * echo Carbon::now()->toFormattedDayDateString();
 * ```
 *
 * @return string
 */',
        'startLine' => 140,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toTimeString' => 
      array (
        'name' => 'toTimeString',
        'parameters' => 
        array (
          'unitPrecision' => 
          array (
            'name' => 'unitPrecision',
            'default' => 
            array (
              'code' => '\'second\'',
              'attributes' => 
              array (
                'startLine' => 157,
                'endLine' => 157,
                'startTokenPos' => 369,
                'startFilePos' => 3399,
                'endTokenPos' => 369,
                'endFilePos' => 3406,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 34,
            'endColumn' => 58,
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
 * Format the instance as time
 *
 * @example
 * ```
 * echo Carbon::now()->toTimeString();
 * ```
 *
 * @param string $unitPrecision
 *
 * @return string
 */',
        'startLine' => 157,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toDateTimeString' => 
      array (
        'name' => 'toDateTimeString',
        'parameters' => 
        array (
          'unitPrecision' => 
          array (
            'name' => 'unitPrecision',
            'default' => 
            array (
              'code' => '\'second\'',
              'attributes' => 
              array (
                'startLine' => 174,
                'endLine' => 174,
                'startTokenPos' => 403,
                'startFilePos' => 3783,
                'endTokenPos' => 403,
                'endFilePos' => 3790,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 174,
            'endLine' => 174,
            'startColumn' => 38,
            'endColumn' => 62,
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
 * Format the instance as date and time
 *
 * @example
 * ```
 * echo Carbon::now()->toDateTimeString();
 * ```
 *
 * @param string $unitPrecision
 *
 * @return string
 */',
        'startLine' => 174,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'getTimeFormatByPrecision' => 
      array (
        'name' => 'getTimeFormatByPrecision',
        'parameters' => 
        array (
          'unitPrecision' => 
          array (
            'name' => 'unitPrecision',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 186,
            'endLine' => 186,
            'startColumn' => 53,
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
 * Return a format from H:i to H:i:s.u according to given unit precision.
 *
 * @param string $unitPrecision "minute", "second", "millisecond" or "microsecond"
 *
 * @return string
 */',
        'startLine' => 186,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toDateTimeLocalString' => 
      array (
        'name' => 'toDateTimeLocalString',
        'parameters' => 
        array (
          'unitPrecision' => 
          array (
            'name' => 'unitPrecision',
            'default' => 
            array (
              'code' => '\'second\'',
              'attributes' => 
              array (
                'startLine' => 218,
                'endLine' => 218,
                'startTokenPos' => 531,
                'startFilePos' => 5143,
                'endTokenPos' => 531,
                'endFilePos' => 5150,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 218,
            'endLine' => 218,
            'startColumn' => 43,
            'endColumn' => 67,
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
 * Format the instance as date and time T-separated with no timezone
 *
 * @example
 * ```
 * echo Carbon::now()->toDateTimeLocalString();
 * echo "\\n";
 * echo Carbon::now()->toDateTimeLocalString(\'minute\'); // You can specify precision among: minute, second, millisecond and microsecond
 * ```
 *
 * @param string $unitPrecision
 *
 * @return string
 */',
        'startLine' => 218,
        'endLine' => 221,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toDayDateTimeString' => 
      array (
        'name' => 'toDayDateTimeString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance with day, date and time
 *
 * @example
 * ```
 * echo Carbon::now()->toDayDateTimeString();
 * ```
 *
 * @return string
 */',
        'startLine' => 233,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toAtomString' => 
      array (
        'name' => 'toAtomString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as ATOM
 *
 * @example
 * ```
 * echo Carbon::now()->toAtomString();
 * ```
 *
 * @return string
 */',
        'startLine' => 248,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toCookieString' => 
      array (
        'name' => 'toCookieString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as COOKIE
 *
 * @example
 * ```
 * echo Carbon::now()->toCookieString();
 * ```
 *
 * @return string
 */',
        'startLine' => 263,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
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
 * Format the instance as ISO8601
 *
 * @example
 * ```
 * echo Carbon::now()->toIso8601String();
 * ```
 *
 * @return string
 */',
        'startLine' => 278,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRfc822String' => 
      array (
        'name' => 'toRfc822String',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as RFC822
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc822String();
 * ```
 *
 * @return string
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
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toIso8601ZuluString' => 
      array (
        'name' => 'toIso8601ZuluString',
        'parameters' => 
        array (
          'unitPrecision' => 
          array (
            'name' => 'unitPrecision',
            'default' => 
            array (
              'code' => '\'second\'',
              'attributes' => 
              array (
                'startLine' => 310,
                'endLine' => 310,
                'startTokenPos' => 692,
                'startFilePos' => 6933,
                'endTokenPos' => 692,
                'endFilePos' => 6940,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 41,
            'endColumn' => 65,
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
 * Convert the instance to UTC and return as Zulu ISO8601
 *
 * @example
 * ```
 * echo Carbon::now()->toIso8601ZuluString();
 * ```
 *
 * @param string $unitPrecision
 *
 * @return string
 */',
        'startLine' => 310,
        'endLine' => 315,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRfc850String' => 
      array (
        'name' => 'toRfc850String',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as RFC850
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc850String();
 * ```
 *
 * @return string
 */',
        'startLine' => 327,
        'endLine' => 330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRfc1036String' => 
      array (
        'name' => 'toRfc1036String',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as RFC1036
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc1036String();
 * ```
 *
 * @return string
 */',
        'startLine' => 342,
        'endLine' => 345,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRfc1123String' => 
      array (
        'name' => 'toRfc1123String',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as RFC1123
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc1123String();
 * ```
 *
 * @return string
 */',
        'startLine' => 357,
        'endLine' => 360,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRfc2822String' => 
      array (
        'name' => 'toRfc2822String',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as RFC2822
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc2822String();
 * ```
 *
 * @return string
 */',
        'startLine' => 372,
        'endLine' => 375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRfc3339String' => 
      array (
        'name' => 'toRfc3339String',
        'parameters' => 
        array (
          'extended' => 
          array (
            'name' => 'extended',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 390,
                'endLine' => 390,
                'startTokenPos' => 844,
                'startFilePos' => 8530,
                'endTokenPos' => 844,
                'endFilePos' => 8534,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 37,
            'endColumn' => 53,
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
 * Format the instance as RFC3339
 *
 * @param bool $extended
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc3339String() . "\\n";
 * echo Carbon::now()->toRfc3339String(true) . "\\n";
 * ```
 *
 * @return string
 */',
        'startLine' => 390,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRssString' => 
      array (
        'name' => 'toRssString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as RSS
 *
 * @example
 * ```
 * echo Carbon::now()->toRssString();
 * ```
 *
 * @return string
 */',
        'startLine' => 410,
        'endLine' => 413,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toW3cString' => 
      array (
        'name' => 'toW3cString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as W3C
 *
 * @example
 * ```
 * echo Carbon::now()->toW3cString();
 * ```
 *
 * @return string
 */',
        'startLine' => 425,
        'endLine' => 428,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toRfc7231String' => 
      array (
        'name' => 'toRfc7231String',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the instance as RFC7231
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc7231String();
 * ```
 *
 * @return string
 */',
        'startLine' => 440,
        'endLine' => 445,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
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
 * Get default array representation.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toArray());
 * ```
 *
 * @return array
 */',
        'startLine' => 457,
        'endLine' => 473,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toObject' => 
      array (
        'name' => 'toObject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get default object representation.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toObject());
 * ```
 *
 * @return object
 */',
        'startLine' => 485,
        'endLine' => 488,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
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
 * Returns english human readable complete date string.
 *
 * @example
 * ```
 * echo Carbon::now()->toString();
 * ```
 *
 * @return string
 */',
        'startLine' => 500,
        'endLine' => 503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toISOString' => 
      array (
        'name' => 'toISOString',
        'parameters' => 
        array (
          'keepOffset' => 
          array (
            'name' => 'keepOffset',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 519,
                'endLine' => 519,
                'startTokenPos' => 1208,
                'startFilePos' => 11605,
                'endTokenPos' => 1208,
                'endFilePos' => 11609,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 33,
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
 * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z, if $keepOffset truthy, offset will be kept:
 * 1977-04-22T01:00:00-05:00).
 *
 * @example
 * ```
 * echo Carbon::now(\'America/Toronto\')->toISOString() . "\\n";
 * echo Carbon::now(\'America/Toronto\')->toISOString(true) . "\\n";
 * ```
 *
 * @param bool $keepOffset Pass true to keep the date offset. Else forced to UTC.
 *
 * @return null|string
 */',
        'startLine' => 519,
        'endLine' => 530,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toJSON' => 
      array (
        'name' => 'toJSON',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z) with UTC timezone.
 *
 * @example
 * ```
 * echo Carbon::now(\'America/Toronto\')->toJSON();
 * ```
 *
 * @return null|string
 */',
        'startLine' => 542,
        'endLine' => 545,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toDateTime' => 
      array (
        'name' => 'toDateTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return native DateTime PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toDateTime());
 * ```
 *
 * @return DateTime
 */',
        'startLine' => 557,
        'endLine' => 560,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toDateTimeImmutable' => 
      array (
        'name' => 'toDateTimeImmutable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return native toDateTimeImmutable PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toDateTimeImmutable());
 * ```
 *
 * @return DateTimeImmutable
 */',
        'startLine' => 572,
        'endLine' => 575,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toDate' => 
      array (
        'name' => 'toDate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @alias toDateTime
 *
 * Return native DateTime PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toDate());
 * ```
 *
 * @return DateTime
 */',
        'startLine' => 589,
        'endLine' => 592,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'toPeriod' => 
      array (
        'name' => 'toPeriod',
        'parameters' => 
        array (
          'end' => 
          array (
            'name' => 'end',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 603,
                'endLine' => 603,
                'startTokenPos' => 1448,
                'startFilePos' => 13895,
                'endTokenPos' => 1448,
                'endFilePos' => 13898,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 603,
            'endLine' => 603,
            'startColumn' => 30,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'interval' => 
          array (
            'name' => 'interval',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 603,
                'endLine' => 603,
                'startTokenPos' => 1455,
                'startFilePos' => 13913,
                'endTokenPos' => 1455,
                'endFilePos' => 13916,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 603,
            'endLine' => 603,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unit' => 
          array (
            'name' => 'unit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 603,
                'endLine' => 603,
                'startTokenPos' => 1462,
                'startFilePos' => 13927,
                'endTokenPos' => 1462,
                'endFilePos' => 13930,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 603,
            'endLine' => 603,
            'startColumn' => 61,
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
 * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
 *
 * @param \\DateTimeInterface|Carbon|CarbonImmutable|int|null $end      period end date or recurrences count if int
 * @param int|\\DateInterval|string|null                      $interval period default interval or number of the given $unit
 * @param string|null                                        $unit     if specified, $interval must be an integer
 *
 * @return CarbonPeriod
 */',
        'startLine' => 603,
        'endLine' => 624,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
        'aliasName' => NULL,
      ),
      'range' => 
      array (
        'name' => 'range',
        'parameters' => 
        array (
          'end' => 
          array (
            'name' => 'end',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 635,
                'endLine' => 635,
                'startTokenPos' => 1646,
                'startFilePos' => 15086,
                'endTokenPos' => 1646,
                'endFilePos' => 15089,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 635,
            'endLine' => 635,
            'startColumn' => 27,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'interval' => 
          array (
            'name' => 'interval',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 635,
                'endLine' => 635,
                'startTokenPos' => 1653,
                'startFilePos' => 15104,
                'endTokenPos' => 1653,
                'endFilePos' => 15107,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 635,
            'endLine' => 635,
            'startColumn' => 40,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unit' => 
          array (
            'name' => 'unit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 635,
                'endLine' => 635,
                'startTokenPos' => 1660,
                'startFilePos' => 15118,
                'endTokenPos' => 1660,
                'endFilePos' => 15121,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 635,
            'endLine' => 635,
            'startColumn' => 58,
            'endColumn' => 69,
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
 * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
 *
 * @param \\DateTimeInterface|Carbon|CarbonImmutable|null $end      period end date
 * @param int|\\DateInterval|string|null                  $interval period default interval or number of the given $unit
 * @param string|null                                    $unit     if specified, $interval must be an integer
 *
 * @return CarbonPeriod
 */',
        'startLine' => 635,
        'endLine' => 638,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Converter',
        'implementingClassName' => 'Carbon\\Traits\\Converter',
        'currentClassName' => 'Carbon\\Traits\\Converter',
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