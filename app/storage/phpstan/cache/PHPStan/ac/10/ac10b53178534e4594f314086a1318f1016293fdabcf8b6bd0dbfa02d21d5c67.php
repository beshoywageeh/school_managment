<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Modifiers.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Modifiers
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8ff8b7ddb1a722f02716a3b1cdafba44023d8f7f9310e4339ee6a34bb8cf4749-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Modifiers',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Modifiers.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Modifiers',
    'shortName' => 'Modifiers',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Modifiers.
 *
 * Returns dates relative to current date using modifier short-hand.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 472,
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
      'midDayAt' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'name' => 'midDayAt',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '12',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 37,
            'startFilePos' => 529,
            'endTokenPos' => 37,
            'endFilePos' => 530,
          ),
        ),
        'docComment' => '/**
 * Midday/noon hour.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 36,
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
      'getMidDayAt' => 
      array (
        'name' => 'getMidDayAt',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * get midday/noon hour
 *
 * @return int
 */',
        'startLine' => 36,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'setMidDayAt' => 
      array (
        'name' => 'setMidDayAt',
        'parameters' => 
        array (
          'hour' => 
          array (
            'name' => 'hour',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
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
        ),
        'docComment' => '/**
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather consider mid-day is always 12pm, then if you need to test if it\'s an other
 *             hour, test it explicitly:
 *                 $date->format(\'G\') == 13
 *             or to set explicitly to a given hour:
 *                 $date->setTime(13, 0, 0, 0)
 *
 * Set midday/noon hour
 *
 * @param int $hour midday hour
 *
 * @return void
 */',
        'startLine' => 55,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'midDay' => 
      array (
        'name' => 'midDay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify to midday, default to self::$midDayAt
 *
 * @return static
 */',
        'startLine' => 65,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'next' => 
      array (
        'name' => 'next',
        'parameters' => 
        array (
          'modifier' => 
          array (
            'name' => 'modifier',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 80,
                'endLine' => 80,
                'startTokenPos' => 136,
                'startFilePos' => 1943,
                'endTokenPos' => 136,
                'endFilePos' => 1946,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 26,
            'endColumn' => 41,
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
 * Modify to the next occurrence of a given modifier such as a day of
 * the week. If no modifier is provided, modify to the next occurrence
 * of the current day of the week. Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param string|int|null $modifier
 *
 * @return static|false
 */',
        'startLine' => 80,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'nextOrPreviousDay' => 
      array (
        'name' => 'nextOrPreviousDay',
        'parameters' => 
        array (
          'weekday' => 
          array (
            'name' => 'weekday',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 99,
                'endLine' => 99,
                'startTokenPos' => 210,
                'startFilePos' => 2395,
                'endTokenPos' => 210,
                'endFilePos' => 2398,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 40,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'forward' => 
          array (
            'name' => 'forward',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 99,
                'endLine' => 99,
                'startTokenPos' => 217,
                'startFilePos' => 2412,
                'endTokenPos' => 217,
                'endFilePos' => 2415,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 57,
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
 * Go forward or backward to the next week- or weekend-day.
 *
 * @param bool $weekday
 * @param bool $forward
 *
 * @return static
 */',
        'startLine' => 99,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'nextWeekday' => 
      array (
        'name' => 'nextWeekday',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Go forward to the next weekday.
 *
 * @return static
 */',
        'startLine' => 117,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'previousWeekday' => 
      array (
        'name' => 'previousWeekday',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Go backward to the previous weekday.
 *
 * @return static
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
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'nextWeekendDay' => 
      array (
        'name' => 'nextWeekendDay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Go forward to the next weekend day.
 *
 * @return static
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
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'previousWeekendDay' => 
      array (
        'name' => 'previousWeekendDay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Go backward to the previous weekend day.
 *
 * @return static
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
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'previous' => 
      array (
        'name' => 'previous',
        'parameters' => 
        array (
          'modifier' => 
          array (
            'name' => 'modifier',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 162,
                'endLine' => 162,
                'startTokenPos' => 408,
                'startFilePos' => 3862,
                'endTokenPos' => 408,
                'endFilePos' => 3865,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 162,
            'endLine' => 162,
            'startColumn' => 30,
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
 * Modify to the previous occurrence of a given modifier such as a day of
 * the week. If no dayOfWeek is provided, modify to the previous occurrence
 * of the current day of the week. Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param string|int|null $modifier
 *
 * @return static|false
 */',
        'startLine' => 162,
        'endLine' => 171,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'firstOfMonth' => 
      array (
        'name' => 'firstOfMonth',
        'parameters' => 
        array (
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 183,
                'endLine' => 183,
                'startTokenPos' => 482,
                'startFilePos' => 4490,
                'endTokenPos' => 482,
                'endFilePos' => 4493,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 34,
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
 * Modify to the first occurrence of a given day of the week
 * in the current month. If no dayOfWeek is provided, modify to the
 * first day of the current month.  Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int|null $dayOfWeek
 *
 * @return static
 */',
        'startLine' => 183,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'lastOfMonth' => 
      array (
        'name' => 'lastOfMonth',
        'parameters' => 
        array (
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 204,
                'endLine' => 204,
                'startTokenPos' => 568,
                'startFilePos' => 5133,
                'endTokenPos' => 568,
                'endFilePos' => 5136,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 33,
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
 * Modify to the last occurrence of a given day of the week
 * in the current month. If no dayOfWeek is provided, modify to the
 * last day of the current month.  Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int|null $dayOfWeek
 *
 * @return static
 */',
        'startLine' => 204,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'nthOfMonth' => 
      array (
        'name' => 'nthOfMonth',
        'parameters' => 
        array (
          'nth' => 
          array (
            'name' => 'nth',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 38,
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
 * Modify to the given occurrence of a given day of the week
 * in the current month. If the calculated occurrence is outside the scope
 * of the current month, then return false and no modifications are made.
 * Use the supplied constants to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int $nth
 * @param int $dayOfWeek
 *
 * @return mixed
 */',
        'startLine' => 226,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'firstOfQuarter' => 
      array (
        'name' => 'firstOfQuarter',
        'parameters' => 
        array (
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 245,
                'endLine' => 245,
                'startTokenPos' => 753,
                'startFilePos' => 6567,
                'endTokenPos' => 753,
                'endFilePos' => 6570,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 245,
            'endLine' => 245,
            'startColumn' => 36,
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
 * Modify to the first occurrence of a given day of the week
 * in the current quarter. If no dayOfWeek is provided, modify to the
 * first day of the current quarter.  Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int|null $dayOfWeek day of the week default null
 *
 * @return static
 */',
        'startLine' => 245,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'lastOfQuarter' => 
      array (
        'name' => 'lastOfQuarter',
        'parameters' => 
        array (
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 260,
                'endLine' => 260,
                'startTokenPos' => 807,
                'startFilePos' => 7138,
                'endTokenPos' => 807,
                'endFilePos' => 7141,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 35,
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
 * Modify to the last occurrence of a given day of the week
 * in the current quarter. If no dayOfWeek is provided, modify to the
 * last day of the current quarter.  Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int|null $dayOfWeek day of the week default null
 *
 * @return static
 */',
        'startLine' => 260,
        'endLine' => 263,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'nthOfQuarter' => 
      array (
        'name' => 'nthOfQuarter',
        'parameters' => 
        array (
          'nth' => 
          array (
            'name' => 'nth',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 276,
            'endLine' => 276,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 276,
            'endLine' => 276,
            'startColumn' => 40,
            'endColumn' => 49,
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
 * Modify to the given occurrence of a given day of the week
 * in the current quarter. If the calculated occurrence is outside the scope
 * of the current quarter, then return false and no modifications are made.
 * Use the supplied constants to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int $nth
 * @param int $dayOfWeek
 *
 * @return mixed
 */',
        'startLine' => 276,
        'endLine' => 284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'firstOfYear' => 
      array (
        'name' => 'firstOfYear',
        'parameters' => 
        array (
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 296,
                'endLine' => 296,
                'startTokenPos' => 987,
                'startFilePos' => 8543,
                'endTokenPos' => 987,
                'endFilePos' => 8546,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 33,
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
 * Modify to the first occurrence of a given day of the week
 * in the current year. If no dayOfWeek is provided, modify to the
 * first day of the current year.  Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int|null $dayOfWeek day of the week default null
 *
 * @return static
 */',
        'startLine' => 296,
        'endLine' => 299,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'lastOfYear' => 
      array (
        'name' => 'lastOfYear',
        'parameters' => 
        array (
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 311,
                'endLine' => 311,
                'startTokenPos' => 1021,
                'startFilePos' => 9041,
                'endTokenPos' => 1021,
                'endFilePos' => 9044,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 311,
            'endLine' => 311,
            'startColumn' => 32,
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
 * Modify to the last occurrence of a given day of the week
 * in the current year. If no dayOfWeek is provided, modify to the
 * last day of the current year.  Use the supplied constants
 * to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int|null $dayOfWeek day of the week default null
 *
 * @return static
 */',
        'startLine' => 311,
        'endLine' => 314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'nthOfYear' => 
      array (
        'name' => 'nthOfYear',
        'parameters' => 
        array (
          'nth' => 
          array (
            'name' => 'nth',
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
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
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
            'startColumn' => 37,
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
 * Modify to the given occurrence of a given day of the week
 * in the current year. If the calculated occurrence is outside the scope
 * of the current year, then return false and no modifications are made.
 * Use the supplied constants to indicate the desired dayOfWeek, ex. static::MONDAY.
 *
 * @param int $nth
 * @param int $dayOfWeek
 *
 * @return mixed
 */',
        'startLine' => 327,
        'endLine' => 332,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'average' => 
      array (
        'name' => 'average',
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
                'startLine' => 342,
                'endLine' => 342,
                'startTokenPos' => 1134,
                'startFilePos' => 10083,
                'endTokenPos' => 1134,
                'endFilePos' => 10086,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 342,
            'endLine' => 342,
            'startColumn' => 29,
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
 * Modify the current instance to the average of a given instance (default now) and the current instance
 * (second-precision).
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date
 *
 * @return static
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
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'closest' => 
      array (
        'name' => 'closest',
        'parameters' => 
        array (
          'date1' => 
          array (
            'name' => 'date1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'date2' => 
          array (
            'name' => 'date2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 37,
            'endColumn' => 42,
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
 * Get the closest date from the instance (second-precision).
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
 *
 * @return static
 */',
        'startLine' => 355,
        'endLine' => 358,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'farthest' => 
      array (
        'name' => 'farthest',
        'parameters' => 
        array (
          'date1' => 
          array (
            'name' => 'date1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'date2' => 
          array (
            'name' => 'date2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Get the farthest date from the instance (second-precision).
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
 *
 * @return static
 */',
        'startLine' => 368,
        'endLine' => 371,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'min' => 
      array (
        'name' => 'min',
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
                'startLine' => 380,
                'endLine' => 380,
                'startTokenPos' => 1274,
                'startFilePos' => 11285,
                'endTokenPos' => 1274,
                'endFilePos' => 11288,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 380,
            'endLine' => 380,
            'startColumn' => 25,
            'endColumn' => 36,
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
 * Get the minimum instance between a given instance (default now) and the current instance.
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return static
 */',
        'startLine' => 380,
        'endLine' => 385,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'minimum' => 
      array (
        'name' => 'minimum',
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
                'startLine' => 396,
                'endLine' => 396,
                'startTokenPos' => 1323,
                'startFilePos' => 11669,
                'endTokenPos' => 1323,
                'endFilePos' => 11672,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 396,
            'endLine' => 396,
            'startColumn' => 29,
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
 * Get the minimum instance between a given instance (default now) and the current instance.
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see min()
 *
 * @return static
 */',
        'startLine' => 396,
        'endLine' => 399,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'max' => 
      array (
        'name' => 'max',
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
                'startLine' => 408,
                'endLine' => 408,
                'startTokenPos' => 1352,
                'startFilePos' => 11963,
                'endTokenPos' => 1352,
                'endFilePos' => 11966,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 25,
            'endColumn' => 36,
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
 * Get the maximum instance between a given instance (default now) and the current instance.
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return static
 */',
        'startLine' => 408,
        'endLine' => 413,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'maximum' => 
      array (
        'name' => 'maximum',
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
                'startLine' => 424,
                'endLine' => 424,
                'startTokenPos' => 1401,
                'startFilePos' => 12347,
                'endTokenPos' => 1401,
                'endFilePos' => 12350,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 29,
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
 * Get the maximum instance between a given instance (default now) and the current instance.
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see max()
 *
 * @return static
 */',
        'startLine' => 424,
        'endLine' => 427,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'modify' => 
      array (
        'name' => 'modify',
        'parameters' => 
        array (
          'modify' => 
          array (
            'name' => 'modify',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 437,
            'endLine' => 437,
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
 * Calls \\DateTime::modify if mutable or \\DateTimeImmutable::modify else.
 *
 * @see https://php.net/manual/en/datetime.modify.php
 *
 * @return static|false
 */',
        'startLine' => 436,
        'endLine' => 440,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
        'aliasName' => NULL,
      ),
      'change' => 
      array (
        'name' => 'change',
        'parameters' => 
        array (
          'modifier' => 
          array (
            'name' => 'modifier',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 456,
            'endLine' => 456,
            'startColumn' => 28,
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
 * Similar to native modify() method of DateTime but can handle more grammars.
 *
 * @example
 * ```
 * echo Carbon::now()->change(\'next 2pm\');
 * ```
 *
 * @link https://php.net/manual/en/datetime.modify.php
 *
 * @param string $modifier
 *
 * @return static|false
 */',
        'startLine' => 456,
        'endLine' => 471,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Modifiers',
        'implementingClassName' => 'Carbon\\Traits\\Modifiers',
        'currentClassName' => 'Carbon\\Traits\\Modifiers',
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