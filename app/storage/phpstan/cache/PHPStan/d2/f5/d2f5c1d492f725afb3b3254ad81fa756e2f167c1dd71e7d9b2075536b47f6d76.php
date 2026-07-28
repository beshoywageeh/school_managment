<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Week.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Week
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e7e6fae8664324e12f346a422dd349d7d4418d7bac5f4ff8054421bdbd5b007c-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Week',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Week.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Week',
    'shortName' => 'Week',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Week.
 *
 * week and ISO week number, year and count in year.
 *
 * Depends on the following properties:
 *
 * @property int $daysInYear
 * @property int $dayOfWeek
 * @property int $dayOfYear
 * @property int $year
 *
 * Depends on the following methods:
 *
 * @method static addWeeks(int $weeks = 1)
 * @method static copy()
 * @method static dayOfYear(int $dayOfYear)
 * @method string getTranslationMessage(string $key, ?string $locale = null, ?string $default = null, $translator = null)
 * @method static next(int|string $day = null)
 * @method static startOfWeek(int $day = 1)
 * @method static subWeeks(int $weeks = 1)
 * @method static year(int $year = null)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 37,
    'endLine' => 219,
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
      'isoWeekYear' => 
      array (
        'name' => 'isoWeekYear',
        'parameters' => 
        array (
          'year' => 
          array (
            'name' => 'year',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 29,
                'startFilePos' => 1502,
                'endTokenPos' => 29,
                'endFilePos' => 1505,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 36,
                'startFilePos' => 1521,
                'endTokenPos' => 36,
                'endFilePos' => 1524,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 47,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'dayOfYear' => 
          array (
            'name' => 'dayOfYear',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 43,
                'startFilePos' => 1540,
                'endTokenPos' => 43,
                'endFilePos' => 1543,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 66,
            'endColumn' => 82,
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
 * Set/get the week number of year using given first day of week and first
 * day of year included in the first week. Or use ISO format if no settings
 * given.
 *
 * @param int|null $year      if null, act as a getter, if not null, set the year and return current instance.
 * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
 * @param int|null $dayOfYear first day of year included in the week #1
 *
 * @return int|static
 */',
        'startLine' => 50,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Week',
        'implementingClassName' => 'Carbon\\Traits\\Week',
        'currentClassName' => 'Carbon\\Traits\\Week',
        'aliasName' => NULL,
      ),
      'weekYear' => 
      array (
        'name' => 'weekYear',
        'parameters' => 
        array (
          'year' => 
          array (
            'name' => 'year',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 88,
                'startFilePos' => 2236,
                'endTokenPos' => 88,
                'endFilePos' => 2239,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 30,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 95,
                'startFilePos' => 2255,
                'endTokenPos' => 95,
                'endFilePos' => 2258,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 44,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'dayOfYear' => 
          array (
            'name' => 'dayOfYear',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 102,
                'startFilePos' => 2274,
                'endTokenPos' => 102,
                'endFilePos' => 2277,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 63,
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
 * Set/get the week number of year using given first day of week and first
 * day of year included in the first week. Or use US format if no settings
 * given (Sunday / Jan 6).
 *
 * @param int|null $year      if null, act as a getter, if not null, set the year and return current instance.
 * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
 * @param int|null $dayOfYear first day of year included in the week #1
 *
 * @return int|static
 */',
        'startLine' => 70,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Week',
        'implementingClassName' => 'Carbon\\Traits\\Week',
        'currentClassName' => 'Carbon\\Traits\\Week',
        'aliasName' => NULL,
      ),
      'isoWeeksInYear' => 
      array (
        'name' => 'isoWeeksInYear',
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
                'startLine' => 132,
                'endLine' => 132,
                'startTokenPos' => 528,
                'startFilePos' => 4312,
                'endTokenPos' => 528,
                'endFilePos' => 4315,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 36,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'dayOfYear' => 
          array (
            'name' => 'dayOfYear',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 132,
                'endLine' => 132,
                'startTokenPos' => 535,
                'startFilePos' => 4331,
                'endTokenPos' => 535,
                'endFilePos' => 4334,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 55,
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
 * Get the number of weeks of the current week-year using given first day of week and first
 * day of year included in the first week. Or use ISO format if no settings
 * given.
 *
 * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
 * @param int|null $dayOfYear first day of year included in the week #1
 *
 * @return int
 */',
        'startLine' => 132,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Week',
        'implementingClassName' => 'Carbon\\Traits\\Week',
        'currentClassName' => 'Carbon\\Traits\\Week',
        'aliasName' => NULL,
      ),
      'weeksInYear' => 
      array (
        'name' => 'weeksInYear',
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
                'startLine' => 150,
                'endLine' => 150,
                'startTokenPos' => 577,
                'startFilePos' => 4914,
                'endTokenPos' => 577,
                'endFilePos' => 4917,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'dayOfYear' => 
          array (
            'name' => 'dayOfYear',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 150,
                'endLine' => 150,
                'startTokenPos' => 584,
                'startFilePos' => 4933,
                'endTokenPos' => 584,
                'endFilePos' => 4936,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 52,
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
 * Get the number of weeks of the current week-year using given first day of week and first
 * day of year included in the first week. Or use US format if no settings
 * given (Sunday / Jan 6).
 *
 * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
 * @param int|null $dayOfYear first day of year included in the week #1
 *
 * @return int
 */',
        'startLine' => 150,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Week',
        'implementingClassName' => 'Carbon\\Traits\\Week',
        'currentClassName' => 'Carbon\\Traits\\Week',
        'aliasName' => NULL,
      ),
      'week' => 
      array (
        'name' => 'week',
        'parameters' => 
        array (
          'week' => 
          array (
            'name' => 'week',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 180,
                'endLine' => 180,
                'startTokenPos' => 786,
                'startFilePos' => 6036,
                'endTokenPos' => 786,
                'endFilePos' => 6039,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 26,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 180,
                'endLine' => 180,
                'startTokenPos' => 793,
                'startFilePos' => 6055,
                'endTokenPos' => 793,
                'endFilePos' => 6058,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 40,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'dayOfYear' => 
          array (
            'name' => 'dayOfYear',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 180,
                'endLine' => 180,
                'startTokenPos' => 800,
                'startFilePos' => 6074,
                'endTokenPos' => 800,
                'endFilePos' => 6077,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 59,
            'endColumn' => 75,
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
 * Get/set the week number using given first day of week and first
 * day of year included in the first week. Or use US format if no settings
 * given (Sunday / Jan 6).
 *
 * @param int|null $week
 * @param int|null $dayOfWeek
 * @param int|null $dayOfYear
 *
 * @return int|static
 */',
        'startLine' => 180,
        'endLine' => 198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Week',
        'implementingClassName' => 'Carbon\\Traits\\Week',
        'currentClassName' => 'Carbon\\Traits\\Week',
        'aliasName' => NULL,
      ),
      'isoWeek' => 
      array (
        'name' => 'isoWeek',
        'parameters' => 
        array (
          'week' => 
          array (
            'name' => 'week',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 211,
                'endLine' => 211,
                'startTokenPos' => 1030,
                'startFilePos' => 7216,
                'endTokenPos' => 1030,
                'endFilePos' => 7219,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 29,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 211,
                'endLine' => 211,
                'startTokenPos' => 1037,
                'startFilePos' => 7235,
                'endTokenPos' => 1037,
                'endFilePos' => 7238,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 43,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'dayOfYear' => 
          array (
            'name' => 'dayOfYear',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 211,
                'endLine' => 211,
                'startTokenPos' => 1044,
                'startFilePos' => 7254,
                'endTokenPos' => 1044,
                'endFilePos' => 7257,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 62,
            'endColumn' => 78,
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
 * Get/set the week number using given first day of week and first
 * day of year included in the first week. Or use ISO format if no settings
 * given.
 *
 * @param int|null $week
 * @param int|null $dayOfWeek
 * @param int|null $dayOfYear
 *
 * @return int|static
 */',
        'startLine' => 211,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Week',
        'implementingClassName' => 'Carbon\\Traits\\Week',
        'currentClassName' => 'Carbon\\Traits\\Week',
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