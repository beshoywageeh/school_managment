<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Difference.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Difference
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e4ac2cdc0dea559543db8d58120c621a7789e12b407c8a11693aca367c25904d-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Difference',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Difference.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Difference',
    'shortName' => 'Difference',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Difference.
 *
 * Depends on the following methods:
 *
 * @method bool lessThan($date)
 * @method static copy()
 * @method static resolveCarbon($date = null)
 * @method static Translator translator()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 35,
    'endLine' => 1182,
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
      'fixNegativeMicroseconds' => 
      array (
        'name' => 'fixNegativeMicroseconds',
        'parameters' => 
        array (
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Carbon\\CarbonInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 55,
            'endColumn' => 74,
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
 * @codeCoverageIgnore
 *
 * @param CarbonInterval $diff
 */',
        'startLine' => 42,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'fixDiffInterval' => 
      array (
        'name' => 'fixDiffInterval',
        'parameters' => 
        array (
          'diff' => 
          array (
            'name' => 'diff',
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
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 47,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 67,
            'endColumn' => 75,
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
                'startLine' => 86,
                'endLine' => 86,
                'startTokenPos' => 385,
                'startFilePos' => 2106,
                'endTokenPos' => 386,
                'endFilePos' => 2107,
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
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 78,
            'endColumn' => 93,
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
 * @param DateInterval $diff
 * @param bool         $absolute
 *
 * @return CarbonInterval
 */',
        'startLine' => 86,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diff' => 
      array (
        'name' => 'diff',
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
                'startLine' => 124,
                'endLine' => 124,
                'startTokenPos' => 648,
                'startFilePos' => 3405,
                'endTokenPos' => 648,
                'endFilePos' => 3408,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 124,
            'endLine' => 124,
            'startColumn' => 26,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 124,
                'endLine' => 124,
                'startTokenPos' => 655,
                'startFilePos' => 3423,
                'endTokenPos' => 655,
                'endFilePos' => 3427,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 124,
            'endLine' => 124,
            'startColumn' => 40,
            'endColumn' => 56,
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
 * Get the difference as a DateInterval instance.
 * Return relative interval (negative if $absolute flag is not set to true and the given date is before
 * current one).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return DateInterval
 */',
        'startLine' => 123,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffAsCarbonInterval' => 
      array (
        'name' => 'diffAsCarbonInterval',
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
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 762,
                'startFilePos' => 4550,
                'endTokenPos' => 762,
                'endFilePos' => 4553,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 769,
                'startFilePos' => 4568,
                'endTokenPos' => 769,
                'endFilePos' => 4571,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 56,
            'endColumn' => 71,
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
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 778,
                'startFilePos' => 4588,
                'endTokenPos' => 779,
                'endFilePos' => 4589,
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 74,
            'endColumn' => 89,
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
 * Get the difference as a CarbonInterval instance.
 * Return relative interval (negative if $absolute flag is not set to true and the given date is before
 * current one).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return CarbonInterval
 */',
        'startLine' => 151,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInYears' => 
      array (
        'name' => 'diffInYears',
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
                'startLine' => 164,
                'endLine' => 164,
                'startTokenPos' => 827,
                'startFilePos' => 5029,
                'endTokenPos' => 827,
                'endFilePos' => 5032,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 164,
                'endLine' => 164,
                'startTokenPos' => 834,
                'startFilePos' => 5047,
                'endTokenPos' => 834,
                'endFilePos' => 5050,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 47,
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
 * Get the difference in years
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 164,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInQuarters' => 
      array (
        'name' => 'diffInQuarters',
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
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 878,
                'startFilePos' => 5489,
                'endTokenPos' => 878,
                'endFilePos' => 5492,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 885,
                'startFilePos' => 5507,
                'endTokenPos' => 885,
                'endFilePos' => 5510,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
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
 * Get the difference in quarters rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 177,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInMonths' => 
      array (
        'name' => 'diffInMonths',
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
                'startLine' => 190,
                'endLine' => 190,
                'startTokenPos' => 927,
                'startFilePos' => 5946,
                'endTokenPos' => 927,
                'endFilePos' => 5949,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 190,
                'endLine' => 190,
                'startTokenPos' => 934,
                'startFilePos' => 5964,
                'endTokenPos' => 934,
                'endFilePos' => 5967,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 48,
            'endColumn' => 63,
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
 * Get the difference in months rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 190,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInWeeks' => 
      array (
        'name' => 'diffInWeeks',
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
                'startLine' => 217,
                'endLine' => 217,
                'startTokenPos' => 1157,
                'startFilePos' => 6917,
                'endTokenPos' => 1157,
                'endFilePos' => 6920,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 217,
                'endLine' => 217,
                'startTokenPos' => 1164,
                'startFilePos' => 6935,
                'endTokenPos' => 1164,
                'endFilePos' => 6938,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 47,
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
 * Get the difference in weeks rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 217,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInDays' => 
      array (
        'name' => 'diffInDays',
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
                'startLine' => 230,
                'endLine' => 230,
                'startTokenPos' => 1206,
                'startFilePos' => 7363,
                'endTokenPos' => 1206,
                'endFilePos' => 7366,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 32,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 230,
                'endLine' => 230,
                'startTokenPos' => 1213,
                'startFilePos' => 7381,
                'endTokenPos' => 1213,
                'endFilePos' => 7384,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 46,
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
 * Get the difference in days rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 230,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInDaysFiltered' => 
      array (
        'name' => 'diffInDaysFiltered',
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
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 244,
            'endLine' => 244,
            'startColumn' => 40,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 244,
                'endLine' => 244,
                'startTokenPos' => 1260,
                'startFilePos' => 7949,
                'endTokenPos' => 1260,
                'endFilePos' => 7952,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 244,
            'endLine' => 244,
            'startColumn' => 59,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 244,
                'endLine' => 244,
                'startTokenPos' => 1267,
                'startFilePos' => 7967,
                'endTokenPos' => 1267,
                'endFilePos' => 7970,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 244,
            'endLine' => 244,
            'startColumn' => 73,
            'endColumn' => 88,
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
 * Get the difference in days using a filter closure rounded down.
 *
 * @param Closure                                                $callback
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 244,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInHoursFiltered' => 
      array (
        'name' => 'diffInHoursFiltered',
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
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 41,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 258,
                'endLine' => 258,
                'startTokenPos' => 1314,
                'startFilePos' => 8530,
                'endTokenPos' => 1314,
                'endFilePos' => 8533,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 60,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 258,
                'endLine' => 258,
                'startTokenPos' => 1321,
                'startFilePos' => 8548,
                'endTokenPos' => 1321,
                'endFilePos' => 8551,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 74,
            'endColumn' => 89,
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
 * Get the difference in hours using a filter closure rounded down.
 *
 * @param Closure                                                $callback
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 258,
        'endLine' => 261,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffFiltered' => 
      array (
        'name' => 'diffFiltered',
        'parameters' => 
        array (
          'ci' => 
          array (
            'name' => 'ci',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Carbon\\CarbonInterval',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 34,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 54,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'date' => 
          array (
            'name' => 'date',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 273,
                'endLine' => 273,
                'startTokenPos' => 1373,
                'startFilePos' => 9231,
                'endTokenPos' => 1373,
                'endFilePos' => 9234,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 73,
            'endColumn' => 84,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 273,
                'endLine' => 273,
                'startTokenPos' => 1380,
                'startFilePos' => 9249,
                'endTokenPos' => 1380,
                'endFilePos' => 9252,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 87,
            'endColumn' => 102,
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
 * Get the difference by the given interval using a filter closure.
 *
 * @param CarbonInterval                                         $ci       An interval to traverse by
 * @param Closure                                                $callback
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 273,
        'endLine' => 289,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInWeekdays' => 
      array (
        'name' => 'diffInWeekdays',
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
                'startLine' => 299,
                'endLine' => 299,
                'startTokenPos' => 1535,
                'startFilePos' => 10062,
                'endTokenPos' => 1535,
                'endFilePos' => 10065,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 299,
            'endLine' => 299,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 299,
                'endLine' => 299,
                'startTokenPos' => 1542,
                'startFilePos' => 10080,
                'endTokenPos' => 1542,
                'endFilePos' => 10083,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 299,
            'endLine' => 299,
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
 * Get the difference in weekdays rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 299,
        'endLine' => 304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInWeekendDays' => 
      array (
        'name' => 'diffInWeekendDays',
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
                'startLine' => 314,
                'endLine' => 314,
                'startTokenPos' => 1617,
                'startFilePos' => 10679,
                'endTokenPos' => 1617,
                'endFilePos' => 10682,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 314,
            'endLine' => 314,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 314,
                'endLine' => 314,
                'startTokenPos' => 1624,
                'startFilePos' => 10697,
                'endTokenPos' => 1624,
                'endFilePos' => 10700,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 314,
            'endLine' => 314,
            'startColumn' => 53,
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
 * Get the difference in weekend days using a filter rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 314,
        'endLine' => 319,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInHours' => 
      array (
        'name' => 'diffInHours',
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
                'startLine' => 329,
                'endLine' => 329,
                'startTokenPos' => 1699,
                'startFilePos' => 11268,
                'endTokenPos' => 1699,
                'endFilePos' => 11271,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 329,
            'endLine' => 329,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 329,
                'endLine' => 329,
                'startTokenPos' => 1706,
                'startFilePos' => 11286,
                'endTokenPos' => 1706,
                'endFilePos' => 11289,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 329,
            'endLine' => 329,
            'startColumn' => 47,
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
 * Get the difference in hours rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 329,
        'endLine' => 332,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInRealHours' => 
      array (
        'name' => 'diffInRealHours',
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
                'startTokenPos' => 1754,
                'startFilePos' => 11772,
                'endTokenPos' => 1754,
                'endFilePos' => 11775,
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
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 342,
                'endLine' => 342,
                'startTokenPos' => 1761,
                'startFilePos' => 11790,
                'endTokenPos' => 1761,
                'endFilePos' => 11793,
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
            'startColumn' => 51,
            'endColumn' => 66,
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
 * Get the difference in hours rounded down using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
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
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInMinutes' => 
      array (
        'name' => 'diffInMinutes',
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
                'startLine' => 355,
                'endLine' => 355,
                'startTokenPos' => 1809,
                'startFilePos' => 12263,
                'endTokenPos' => 1809,
                'endFilePos' => 12266,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 355,
                'endLine' => 355,
                'startTokenPos' => 1816,
                'startFilePos' => 12281,
                'endTokenPos' => 1816,
                'endFilePos' => 12284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 49,
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
 * Get the difference in minutes rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
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
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInRealMinutes' => 
      array (
        'name' => 'diffInRealMinutes',
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
                'startLine' => 368,
                'endLine' => 368,
                'startTokenPos' => 1858,
                'startFilePos' => 12744,
                'endTokenPos' => 1858,
                'endFilePos' => 12747,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 368,
                'endLine' => 368,
                'startTokenPos' => 1865,
                'startFilePos' => 12762,
                'endTokenPos' => 1865,
                'endFilePos' => 12765,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 53,
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
 * Get the difference in minutes rounded down using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
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
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInSeconds' => 
      array (
        'name' => 'diffInSeconds',
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
                'startLine' => 381,
                'endLine' => 381,
                'startTokenPos' => 1907,
                'startFilePos' => 13208,
                'endTokenPos' => 1907,
                'endFilePos' => 13211,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 381,
                'endLine' => 381,
                'startTokenPos' => 1914,
                'startFilePos' => 13226,
                'endTokenPos' => 1914,
                'endFilePos' => 13229,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 49,
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
 * Get the difference in seconds rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 381,
        'endLine' => 395,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInMicroseconds' => 
      array (
        'name' => 'diffInMicroseconds',
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
                'startLine' => 405,
                'endLine' => 405,
                'startTokenPos' => 2068,
                'startFilePos' => 14002,
                'endTokenPos' => 2068,
                'endFilePos' => 14005,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 405,
            'endLine' => 405,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 405,
                'endLine' => 405,
                'startTokenPos' => 2075,
                'startFilePos' => 14020,
                'endTokenPos' => 2075,
                'endFilePos' => 14023,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 405,
            'endLine' => 405,
            'startColumn' => 54,
            'endColumn' => 69,
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
 * Get the difference in microseconds.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 405,
        'endLine' => 414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInMilliseconds' => 
      array (
        'name' => 'diffInMilliseconds',
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
                'startTokenPos' => 2219,
                'startFilePos' => 14763,
                'endTokenPos' => 2219,
                'endFilePos' => 14766,
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
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 424,
                'endLine' => 424,
                'startTokenPos' => 2226,
                'startFilePos' => 14781,
                'endTokenPos' => 2226,
                'endFilePos' => 14784,
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
            'startColumn' => 54,
            'endColumn' => 69,
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
 * Get the difference in milliseconds rounded down.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
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
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInRealSeconds' => 
      array (
        'name' => 'diffInRealSeconds',
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
                'startLine' => 437,
                'endLine' => 437,
                'startTokenPos' => 2268,
                'startFilePos' => 15246,
                'endTokenPos' => 2268,
                'endFilePos' => 15249,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 437,
            'endLine' => 437,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 437,
                'endLine' => 437,
                'startTokenPos' => 2275,
                'startFilePos' => 15264,
                'endTokenPos' => 2275,
                'endFilePos' => 15267,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 437,
            'endLine' => 437,
            'startColumn' => 53,
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
 * Get the difference in seconds using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 437,
        'endLine' => 444,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInRealMicroseconds' => 
      array (
        'name' => 'diffInRealMicroseconds',
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
                'startLine' => 454,
                'endLine' => 454,
                'startTokenPos' => 2343,
                'startFilePos' => 15833,
                'endTokenPos' => 2343,
                'endFilePos' => 15836,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 454,
            'endLine' => 454,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 454,
                'endLine' => 454,
                'startTokenPos' => 2350,
                'startFilePos' => 15851,
                'endTokenPos' => 2350,
                'endFilePos' => 15854,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 454,
            'endLine' => 454,
            'startColumn' => 58,
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
        'docComment' => '/**
 * Get the difference in microseconds using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 454,
        'endLine' => 462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffInRealMilliseconds' => 
      array (
        'name' => 'diffInRealMilliseconds',
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
                'startLine' => 472,
                'endLine' => 472,
                'startTokenPos' => 2434,
                'startFilePos' => 16501,
                'endTokenPos' => 2434,
                'endFilePos' => 16504,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 472,
                'endLine' => 472,
                'startTokenPos' => 2441,
                'startFilePos' => 16519,
                'endTokenPos' => 2441,
                'endFilePos' => 16522,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 58,
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
        'docComment' => '/**
 * Get the difference in milliseconds rounded down using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
        'startLine' => 472,
        'endLine' => 475,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInSeconds' => 
      array (
        'name' => 'floatDiffInSeconds',
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
                'startLine' => 485,
                'endLine' => 485,
                'startTokenPos' => 2483,
                'startFilePos' => 17007,
                'endTokenPos' => 2483,
                'endFilePos' => 17010,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 485,
                'endLine' => 485,
                'startTokenPos' => 2490,
                'startFilePos' => 17025,
                'endTokenPos' => 2490,
                'endFilePos' => 17028,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 54,
            'endColumn' => 69,
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
 * Get the difference in seconds as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
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
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInMinutes' => 
      array (
        'name' => 'floatDiffInMinutes',
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
                'startLine' => 498,
                'endLine' => 498,
                'startTokenPos' => 2532,
                'startFilePos' => 17506,
                'endTokenPos' => 2532,
                'endFilePos' => 17509,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 498,
                'endLine' => 498,
                'startTokenPos' => 2539,
                'startFilePos' => 17524,
                'endTokenPos' => 2539,
                'endFilePos' => 17527,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 54,
            'endColumn' => 69,
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
 * Get the difference in minutes as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 498,
        'endLine' => 501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInHours' => 
      array (
        'name' => 'floatDiffInHours',
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
                'startLine' => 511,
                'endLine' => 511,
                'startTokenPos' => 2577,
                'startFilePos' => 17986,
                'endTokenPos' => 2577,
                'endFilePos' => 17989,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 511,
                'endLine' => 511,
                'startTokenPos' => 2584,
                'startFilePos' => 18004,
                'endTokenPos' => 2584,
                'endFilePos' => 18007,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 52,
            'endColumn' => 67,
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
 * Get the difference in hours as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 511,
        'endLine' => 514,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInDays' => 
      array (
        'name' => 'floatDiffInDays',
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
                'startLine' => 524,
                'endLine' => 524,
                'startTokenPos' => 2622,
                'startFilePos' => 18462,
                'endTokenPos' => 2622,
                'endFilePos' => 18465,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 524,
            'endLine' => 524,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 524,
                'endLine' => 524,
                'startTokenPos' => 2629,
                'startFilePos' => 18480,
                'endTokenPos' => 2629,
                'endFilePos' => 18483,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 524,
            'endLine' => 524,
            'startColumn' => 51,
            'endColumn' => 66,
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
 * Get the difference in days as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 524,
        'endLine' => 536,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInWeeks' => 
      array (
        'name' => 'floatDiffInWeeks',
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
                'startLine' => 546,
                'endLine' => 546,
                'startTokenPos' => 2760,
                'startFilePos' => 19264,
                'endTokenPos' => 2760,
                'endFilePos' => 19267,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 546,
            'endLine' => 546,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 546,
                'endLine' => 546,
                'startTokenPos' => 2767,
                'startFilePos' => 19282,
                'endTokenPos' => 2767,
                'endFilePos' => 19285,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 546,
            'endLine' => 546,
            'startColumn' => 52,
            'endColumn' => 67,
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
 * Get the difference in weeks as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 546,
        'endLine' => 549,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInMonths' => 
      array (
        'name' => 'floatDiffInMonths',
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
                'startLine' => 559,
                'endLine' => 559,
                'startTokenPos' => 2805,
                'startFilePos' => 19738,
                'endTokenPos' => 2805,
                'endFilePos' => 19741,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 559,
                'endLine' => 559,
                'startTokenPos' => 2812,
                'startFilePos' => 19756,
                'endTokenPos' => 2812,
                'endFilePos' => 19759,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 53,
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
 * Get the difference in months as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 559,
        'endLine' => 584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInYears' => 
      array (
        'name' => 'floatDiffInYears',
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
                'startLine' => 594,
                'endLine' => 594,
                'startTokenPos' => 3066,
                'startFilePos' => 21142,
                'endTokenPos' => 3066,
                'endFilePos' => 21145,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 594,
            'endLine' => 594,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 594,
                'endLine' => 594,
                'startTokenPos' => 3073,
                'startFilePos' => 21160,
                'endTokenPos' => 3073,
                'endFilePos' => 21163,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 594,
            'endLine' => 594,
            'startColumn' => 52,
            'endColumn' => 67,
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
 * Get the difference in year as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 594,
        'endLine' => 619,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInRealSeconds' => 
      array (
        'name' => 'floatDiffInRealSeconds',
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
                'startLine' => 629,
                'endLine' => 629,
                'startTokenPos' => 3327,
                'startFilePos' => 22555,
                'endTokenPos' => 3327,
                'endFilePos' => 22558,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 629,
                'endLine' => 629,
                'startTokenPos' => 3334,
                'startFilePos' => 22573,
                'endTokenPos' => 3334,
                'endFilePos' => 22576,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 58,
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
        'docComment' => '/**
 * Get the difference in seconds as float (microsecond-precision) using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 629,
        'endLine' => 632,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInRealMinutes' => 
      array (
        'name' => 'floatDiffInRealMinutes',
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
                'startLine' => 642,
                'endLine' => 642,
                'startTokenPos' => 3372,
                'startFilePos' => 23069,
                'endTokenPos' => 3372,
                'endFilePos' => 23072,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 642,
            'endLine' => 642,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 642,
                'endLine' => 642,
                'startTokenPos' => 3379,
                'startFilePos' => 23087,
                'endTokenPos' => 3379,
                'endFilePos' => 23090,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 642,
            'endLine' => 642,
            'startColumn' => 58,
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
        'docComment' => '/**
 * Get the difference in minutes as float (microsecond-precision) using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 642,
        'endLine' => 645,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInRealHours' => 
      array (
        'name' => 'floatDiffInRealHours',
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
                'startLine' => 655,
                'endLine' => 655,
                'startTokenPos' => 3417,
                'startFilePos' => 23574,
                'endTokenPos' => 3417,
                'endFilePos' => 23577,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 655,
            'endLine' => 655,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 655,
                'endLine' => 655,
                'startTokenPos' => 3424,
                'startFilePos' => 23592,
                'endTokenPos' => 3424,
                'endFilePos' => 23595,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 655,
            'endLine' => 655,
            'startColumn' => 56,
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
 * Get the difference in hours as float (microsecond-precision) using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 655,
        'endLine' => 658,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInRealDays' => 
      array (
        'name' => 'floatDiffInRealDays',
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
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 3462,
                'startFilePos' => 24058,
                'endTokenPos' => 3462,
                'endFilePos' => 24061,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 3469,
                'startFilePos' => 24076,
                'endTokenPos' => 3469,
                'endFilePos' => 24079,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 55,
            'endColumn' => 70,
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
 * Get the difference in days as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 668,
        'endLine' => 675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInRealWeeks' => 
      array (
        'name' => 'floatDiffInRealWeeks',
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
                'startLine' => 685,
                'endLine' => 685,
                'startTokenPos' => 3577,
                'startFilePos' => 24743,
                'endTokenPos' => 3577,
                'endFilePos' => 24746,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 685,
                'endLine' => 685,
                'startTokenPos' => 3584,
                'startFilePos' => 24761,
                'endTokenPos' => 3584,
                'endFilePos' => 24764,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 56,
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
 * Get the difference in weeks as float (microsecond-precision).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 685,
        'endLine' => 688,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInRealMonths' => 
      array (
        'name' => 'floatDiffInRealMonths',
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
                'startLine' => 698,
                'endLine' => 698,
                'startTokenPos' => 3622,
                'startFilePos' => 25242,
                'endTokenPos' => 3622,
                'endFilePos' => 25245,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 698,
            'endLine' => 698,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 698,
                'endLine' => 698,
                'startTokenPos' => 3629,
                'startFilePos' => 25260,
                'endTokenPos' => 3629,
                'endFilePos' => 25263,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 698,
            'endLine' => 698,
            'startColumn' => 57,
            'endColumn' => 72,
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
 * Get the difference in months as float (microsecond-precision) using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 698,
        'endLine' => 723,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'floatDiffInRealYears' => 
      array (
        'name' => 'floatDiffInRealYears',
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
                'startLine' => 733,
                'endLine' => 733,
                'startTokenPos' => 3883,
                'startFilePos' => 26679,
                'endTokenPos' => 3883,
                'endFilePos' => 26682,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 733,
            'endLine' => 733,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 733,
                'endLine' => 733,
                'startTokenPos' => 3890,
                'startFilePos' => 26697,
                'endTokenPos' => 3890,
                'endFilePos' => 26700,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 733,
            'endLine' => 733,
            'startColumn' => 56,
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
 * Get the difference in year as float (microsecond-precision) using timestamps.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
        'startLine' => 733,
        'endLine' => 758,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'secondsSinceMidnight' => 
      array (
        'name' => 'secondsSinceMidnight',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The number of seconds since midnight.
 *
 * @return int
 */',
        'startLine' => 765,
        'endLine' => 768,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'secondsUntilEndOfDay' => 
      array (
        'name' => 'secondsUntilEndOfDay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The number of seconds until 23:59:59.
 *
 * @return int
 */',
        'startLine' => 775,
        'endLine' => 778,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'diffForHumans' => 
      array (
        'name' => 'diffForHumans',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 827,
                'endLine' => 827,
                'startTokenPos' => 4208,
                'startFilePos' => 32624,
                'endTokenPos' => 4208,
                'endFilePos' => 32627,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 827,
                'endLine' => 827,
                'startTokenPos' => 4215,
                'startFilePos' => 32640,
                'endTokenPos' => 4215,
                'endFilePos' => 32643,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 1,
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
                'startLine' => 827,
                'endLine' => 827,
                'startTokenPos' => 4222,
                'startFilePos' => 32655,
                'endTokenPos' => 4222,
                'endFilePos' => 32659,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 66,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 827,
                'endLine' => 827,
                'startTokenPos' => 4229,
                'startFilePos' => 32671,
                'endTokenPos' => 4229,
                'endFilePos' => 32671,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 82,
            'endColumn' => 91,
            'parameterIndex' => 3,
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
                'startLine' => 827,
                'endLine' => 827,
                'startTokenPos' => 4236,
                'startFilePos' => 32685,
                'endTokenPos' => 4236,
                'endFilePos' => 32688,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 94,
            'endColumn' => 108,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the difference in a human readable format in the current locale from current instance to an other
 * instance given (or now if null given).
 *
 * @example
 * ```
 * echo Carbon::tomorrow()->diffForHumans() . "\\n";
 * echo Carbon::tomorrow()->diffForHumans([\'parts\' => 2]) . "\\n";
 * echo Carbon::tomorrow()->diffForHumans([\'parts\' => 3, \'join\' => true]) . "\\n";
 * echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday()) . "\\n";
 * echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday(), [\'short\' => true]) . "\\n";
 * ```
 *
 * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                             if null passed, now will be used as comparison reference;
 *                                                             if any other type, it will be converted to date and used as reference.
 * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                             - \'syntax\' entry (see below)
 *                                                             - \'short\' entry (see below)
 *                                                             - \'parts\' entry (see below)
 *                                                             - \'options\' entry (see below)
 *                                                             - \'skip\' entry, list of units to skip (array of strings or a single string,
 *                                                             ` it can be the unit name (singular or plural) or its shortcut
 *                                                             ` (y, m, w, d, h, min, s, ms, µs).
 *                                                             - \'aUnit\' entry, prefer "an hour" over "1 hour" if true
 *                                                             - \'join\' entry determines how to join multiple parts of the string
 *                                                             `  - if $join is a string, it\'s used as a joiner glue
 *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                             `    will be used instead of the glue for the last item
 *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                             `  - if $join is missing, a space will be used as glue
 *                                                             - \'other\' entry (see above)
 *                                                             - \'minimumUnit\' entry determines the smallest unit of time to display can be long or
 *                                                             `  short form of the units, e.g. \'hour\' or \'h\' (default value: s)
 *                                                             if int passed, it add modifiers:
 *                                                             Possible values:
 *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                        $short   displays short format of time units
 * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                         $options human diff options
 *
 * @return string
 */',
        'startLine' => 827,
        'endLine' => 850,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'from' => 
      array (
        'name' => 'from',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 886,
                'endLine' => 886,
                'startTokenPos' => 4524,
                'startFilePos' => 37004,
                'endTokenPos' => 4524,
                'endFilePos' => 37007,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 26,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 886,
                'endLine' => 886,
                'startTokenPos' => 4531,
                'startFilePos' => 37020,
                'endTokenPos' => 4531,
                'endFilePos' => 37023,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 1,
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
                'startLine' => 886,
                'endLine' => 886,
                'startTokenPos' => 4538,
                'startFilePos' => 37035,
                'endTokenPos' => 4538,
                'endFilePos' => 37039,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 57,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 886,
                'endLine' => 886,
                'startTokenPos' => 4545,
                'startFilePos' => 37051,
                'endTokenPos' => 4545,
                'endFilePos' => 37051,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 73,
            'endColumn' => 82,
            'parameterIndex' => 3,
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
                'startLine' => 886,
                'endLine' => 886,
                'startTokenPos' => 4552,
                'startFilePos' => 37065,
                'endTokenPos' => 4552,
                'endFilePos' => 37068,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 85,
            'endColumn' => 99,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @alias diffForHumans
 *
 * Get the difference in a human readable format in the current locale from current instance to an other
 * instance given (or now if null given).
 *
 * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                             if null passed, now will be used as comparison reference;
 *                                                             if any other type, it will be converted to date and used as reference.
 * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                             - \'syntax\' entry (see below)
 *                                                             - \'short\' entry (see below)
 *                                                             - \'parts\' entry (see below)
 *                                                             - \'options\' entry (see below)
 *                                                             - \'join\' entry determines how to join multiple parts of the string
 *                                                             `  - if $join is a string, it\'s used as a joiner glue
 *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                             `    will be used instead of the glue for the last item
 *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                             `  - if $join is missing, a space will be used as glue
 *                                                             - \'other\' entry (see above)
 *                                                             if int passed, it add modifiers:
 *                                                             Possible values:
 *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                        $short   displays short format of time units
 * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                         $options human diff options
 *
 * @return string
 */',
        'startLine' => 886,
        'endLine' => 889,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'since' => 
      array (
        'name' => 'since',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 4593,
                'startFilePos' => 37405,
                'endTokenPos' => 4593,
                'endFilePos' => 37408,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 27,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 4600,
                'startFilePos' => 37421,
                'endTokenPos' => 4600,
                'endFilePos' => 37424,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 1,
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
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 4607,
                'startFilePos' => 37436,
                'endTokenPos' => 4607,
                'endFilePos' => 37440,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 58,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 4614,
                'startFilePos' => 37452,
                'endTokenPos' => 4614,
                'endFilePos' => 37452,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 74,
            'endColumn' => 83,
            'parameterIndex' => 3,
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
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 4621,
                'startFilePos' => 37466,
                'endTokenPos' => 4621,
                'endFilePos' => 37469,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 86,
            'endColumn' => 100,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @alias diffForHumans
 *
 * Get the difference in a human readable format in the current locale from current instance to an other
 * instance given (or now if null given).
 */',
        'startLine' => 897,
        'endLine' => 900,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'to' => 
      array (
        'name' => 'to',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 950,
                'endLine' => 950,
                'startTokenPos' => 4662,
                'startFilePos' => 41249,
                'endTokenPos' => 4662,
                'endFilePos' => 41252,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 950,
            'endLine' => 950,
            'startColumn' => 24,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 950,
                'endLine' => 950,
                'startTokenPos' => 4669,
                'startFilePos' => 41265,
                'endTokenPos' => 4669,
                'endFilePos' => 41268,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 950,
            'endLine' => 950,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 1,
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
                'startLine' => 950,
                'endLine' => 950,
                'startTokenPos' => 4676,
                'startFilePos' => 41280,
                'endTokenPos' => 4676,
                'endFilePos' => 41284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 950,
            'endLine' => 950,
            'startColumn' => 55,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 950,
                'endLine' => 950,
                'startTokenPos' => 4683,
                'startFilePos' => 41296,
                'endTokenPos' => 4683,
                'endFilePos' => 41296,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 950,
            'endLine' => 950,
            'startColumn' => 71,
            'endColumn' => 80,
            'parameterIndex' => 3,
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
                'startLine' => 950,
                'endLine' => 950,
                'startTokenPos' => 4690,
                'startFilePos' => 41310,
                'endTokenPos' => 4690,
                'endFilePos' => 41313,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 950,
            'endLine' => 950,
            'startColumn' => 83,
            'endColumn' => 97,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the difference in a human readable format in the current locale from an other
 * instance given (or now if null given) to current instance.
 *
 * When comparing a value in the past to default now:
 * 1 hour from now
 * 5 months from now
 *
 * When comparing a value in the future to default now:
 * 1 hour ago
 * 5 months ago
 *
 * When comparing a value in the past to another value:
 * 1 hour after
 * 5 months after
 *
 * When comparing a value in the future to another value:
 * 1 hour before
 * 5 months before
 *
 * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                             if null passed, now will be used as comparison reference;
 *                                                             if any other type, it will be converted to date and used as reference.
 * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                             - \'syntax\' entry (see below)
 *                                                             - \'short\' entry (see below)
 *                                                             - \'parts\' entry (see below)
 *                                                             - \'options\' entry (see below)
 *                                                             - \'join\' entry determines how to join multiple parts of the string
 *                                                             `  - if $join is a string, it\'s used as a joiner glue
 *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                             `    will be used instead of the glue for the last item
 *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                             `  - if $join is missing, a space will be used as glue
 *                                                             - \'other\' entry (see above)
 *                                                             if int passed, it add modifiers:
 *                                                             Possible values:
 *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                        $short   displays short format of time units
 * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                         $options human diff options
 *
 * @return string
 */',
        'startLine' => 950,
        'endLine' => 957,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'until' => 
      array (
        'name' => 'until',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 993,
                'endLine' => 993,
                'startTokenPos' => 4761,
                'startFilePos' => 44809,
                'endTokenPos' => 4761,
                'endFilePos' => 44812,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 993,
            'endLine' => 993,
            'startColumn' => 27,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'syntax' => 
          array (
            'name' => 'syntax',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 993,
                'endLine' => 993,
                'startTokenPos' => 4768,
                'startFilePos' => 44825,
                'endTokenPos' => 4768,
                'endFilePos' => 44828,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 993,
            'endLine' => 993,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 1,
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
                'startLine' => 993,
                'endLine' => 993,
                'startTokenPos' => 4775,
                'startFilePos' => 44840,
                'endTokenPos' => 4775,
                'endFilePos' => 44844,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 993,
            'endLine' => 993,
            'startColumn' => 58,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 993,
                'endLine' => 993,
                'startTokenPos' => 4782,
                'startFilePos' => 44856,
                'endTokenPos' => 4782,
                'endFilePos' => 44856,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 993,
            'endLine' => 993,
            'startColumn' => 74,
            'endColumn' => 83,
            'parameterIndex' => 3,
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
                'startLine' => 993,
                'endLine' => 993,
                'startTokenPos' => 4789,
                'startFilePos' => 44870,
                'endTokenPos' => 4789,
                'endFilePos' => 44873,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 993,
            'endLine' => 993,
            'startColumn' => 86,
            'endColumn' => 100,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @alias to
 *
 * Get the difference in a human readable format in the current locale from an other
 * instance given (or now if null given) to current instance.
 *
 * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                             if null passed, now will be used as comparison reference;
 *                                                             if any other type, it will be converted to date and used as reference.
 * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                             - \'syntax\' entry (see below)
 *                                                             - \'short\' entry (see below)
 *                                                             - \'parts\' entry (see below)
 *                                                             - \'options\' entry (see below)
 *                                                             - \'join\' entry determines how to join multiple parts of the string
 *                                                             `  - if $join is a string, it\'s used as a joiner glue
 *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                             `    will be used instead of the glue for the last item
 *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                             `  - if $join is missing, a space will be used as glue
 *                                                             - \'other\' entry (see above)
 *                                                             if int passed, it add modifiers:
 *                                                             Possible values:
 *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                        $short   displays short format of time units
 * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                         $options human diff options
 *
 * @return string
 */',
        'startLine' => 993,
        'endLine' => 996,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'fromNow' => 
      array (
        'name' => 'fromNow',
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
                'startLine' => 1026,
                'endLine' => 1026,
                'startTokenPos' => 4830,
                'startFilePos' => 46956,
                'endTokenPos' => 4830,
                'endFilePos' => 46959,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1026,
            'endLine' => 1026,
            'startColumn' => 29,
            'endColumn' => 42,
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
                'startLine' => 1026,
                'endLine' => 1026,
                'startTokenPos' => 4837,
                'startFilePos' => 46971,
                'endTokenPos' => 4837,
                'endFilePos' => 46975,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1026,
            'endLine' => 1026,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1026,
                'endLine' => 1026,
                'startTokenPos' => 4844,
                'startFilePos' => 46987,
                'endTokenPos' => 4844,
                'endFilePos' => 46987,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1026,
            'endLine' => 1026,
            'startColumn' => 61,
            'endColumn' => 70,
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
                'startLine' => 1026,
                'endLine' => 1026,
                'startTokenPos' => 4851,
                'startFilePos' => 47001,
                'endTokenPos' => 4851,
                'endFilePos' => 47004,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1026,
            'endLine' => 1026,
            'startColumn' => 73,
            'endColumn' => 87,
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
 * Get the difference in a human readable format in the current locale from current
 * instance to now.
 *
 * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                           - \'syntax\' entry (see below)
 *                           - \'short\' entry (see below)
 *                           - \'parts\' entry (see below)
 *                           - \'options\' entry (see below)
 *                           - \'join\' entry determines how to join multiple parts of the string
 *                           `  - if $join is a string, it\'s used as a joiner glue
 *                           `  - if $join is a callable/closure, it get the list of string and should return a string
 *                           `  - if $join is an array, the first item will be the default glue, and the second item
 *                           `    will be used instead of the glue for the last item
 *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                           `  - if $join is missing, a space will be used as glue
 *                           if int passed, it add modifiers:
 *                           Possible values:
 *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                           Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool      $short   displays short format of time units
 * @param int       $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int       $options human diff options
 *
 * @return string
 */',
        'startLine' => 1026,
        'endLine' => 1035,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'toNow' => 
      array (
        'name' => 'toNow',
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
                'startLine' => 1065,
                'endLine' => 1065,
                'startTokenPos' => 4945,
                'startFilePos' => 49276,
                'endTokenPos' => 4945,
                'endFilePos' => 49279,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1065,
            'endLine' => 1065,
            'startColumn' => 27,
            'endColumn' => 40,
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
                'startLine' => 1065,
                'endLine' => 1065,
                'startTokenPos' => 4952,
                'startFilePos' => 49291,
                'endTokenPos' => 4952,
                'endFilePos' => 49295,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1065,
            'endLine' => 1065,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1065,
                'endLine' => 1065,
                'startTokenPos' => 4959,
                'startFilePos' => 49307,
                'endTokenPos' => 4959,
                'endFilePos' => 49307,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1065,
            'endLine' => 1065,
            'startColumn' => 59,
            'endColumn' => 68,
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
                'startLine' => 1065,
                'endLine' => 1065,
                'startTokenPos' => 4966,
                'startFilePos' => 49321,
                'endTokenPos' => 4966,
                'endFilePos' => 49324,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1065,
            'endLine' => 1065,
            'startColumn' => 71,
            'endColumn' => 85,
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
 * Get the difference in a human readable format in the current locale from an other
 * instance given to now
 *
 * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                           - \'syntax\' entry (see below)
 *                           - \'short\' entry (see below)
 *                           - \'parts\' entry (see below)
 *                           - \'options\' entry (see below)
 *                           - \'join\' entry determines how to join multiple parts of the string
 *                           `  - if $join is a string, it\'s used as a joiner glue
 *                           `  - if $join is a callable/closure, it get the list of string and should return a string
 *                           `  - if $join is an array, the first item will be the default glue, and the second item
 *                           `    will be used instead of the glue for the last item
 *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                           `  - if $join is missing, a space will be used as glue
 *                           if int passed, it add modifiers:
 *                           Possible values:
 *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                           Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool      $short   displays short format of time units
 * @param int       $parts   maximum number of parts to display (default value: 1: single part)
 * @param int       $options human diff options
 *
 * @return string
 */',
        'startLine' => 1065,
        'endLine' => 1068,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'ago' => 
      array (
        'name' => 'ago',
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
                'startLine' => 1098,
                'endLine' => 1098,
                'startTokenPos' => 5007,
                'startFilePos' => 51407,
                'endTokenPos' => 5007,
                'endFilePos' => 51410,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1098,
            'endLine' => 1098,
            'startColumn' => 25,
            'endColumn' => 38,
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
                'startLine' => 1098,
                'endLine' => 1098,
                'startTokenPos' => 5014,
                'startFilePos' => 51422,
                'endTokenPos' => 5014,
                'endFilePos' => 51426,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1098,
            'endLine' => 1098,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'parts' => 
          array (
            'name' => 'parts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1098,
                'endLine' => 1098,
                'startTokenPos' => 5021,
                'startFilePos' => 51438,
                'endTokenPos' => 5021,
                'endFilePos' => 51438,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1098,
            'endLine' => 1098,
            'startColumn' => 57,
            'endColumn' => 66,
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
                'startLine' => 1098,
                'endLine' => 1098,
                'startTokenPos' => 5028,
                'startFilePos' => 51452,
                'endTokenPos' => 5028,
                'endFilePos' => 51455,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1098,
            'endLine' => 1098,
            'startColumn' => 69,
            'endColumn' => 83,
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
 * Get the difference in a human readable format in the current locale from an other
 * instance given to now
 *
 * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                           - \'syntax\' entry (see below)
 *                           - \'short\' entry (see below)
 *                           - \'parts\' entry (see below)
 *                           - \'options\' entry (see below)
 *                           - \'join\' entry determines how to join multiple parts of the string
 *                           `  - if $join is a string, it\'s used as a joiner glue
 *                           `  - if $join is a callable/closure, it get the list of string and should return a string
 *                           `  - if $join is an array, the first item will be the default glue, and the second item
 *                           `    will be used instead of the glue for the last item
 *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                           `  - if $join is missing, a space will be used as glue
 *                           if int passed, it add modifiers:
 *                           Possible values:
 *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                           Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool      $short   displays short format of time units
 * @param int       $parts   maximum number of parts to display (default value: 1: single part)
 * @param int       $options human diff options
 *
 * @return string
 */',
        'startLine' => 1098,
        'endLine' => 1107,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'timespan' => 
      array (
        'name' => 'timespan',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1115,
                'endLine' => 1115,
                'startTokenPos' => 5122,
                'startFilePos' => 51963,
                'endTokenPos' => 5122,
                'endFilePos' => 51966,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1115,
            'endLine' => 1115,
            'startColumn' => 30,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1115,
                'endLine' => 1115,
                'startTokenPos' => 5129,
                'startFilePos' => 51981,
                'endTokenPos' => 5129,
                'endFilePos' => 51984,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1115,
            'endLine' => 1115,
            'startColumn' => 45,
            'endColumn' => 60,
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
 * Get the difference in a human readable format in the current locale from current instance to an other
 * instance given (or now if null given).
 *
 * @return string
 */',
        'startLine' => 1115,
        'endLine' => 1127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'calendar' => 
      array (
        'name' => 'calendar',
        'parameters' => 
        array (
          'referenceTime' => 
          array (
            'name' => 'referenceTime',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1140,
                'endLine' => 1140,
                'startTokenPos' => 5226,
                'startFilePos' => 52826,
                'endTokenPos' => 5226,
                'endFilePos' => 52829,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1140,
            'endLine' => 1140,
            'startColumn' => 30,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'formats' => 
          array (
            'name' => 'formats',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1140,
                'endLine' => 1140,
                'startTokenPos' => 5235,
                'startFilePos' => 52849,
                'endTokenPos' => 5236,
                'endFilePos' => 52850,
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
            'startLine' => 1140,
            'endLine' => 1140,
            'startColumn' => 53,
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
 * Returns either day of week + time (e.g. "Last Friday at 3:30 PM") if reference time is within 7 days,
 * or a calendar date (e.g. "10/29/2017") otherwise.
 *
 * Language, date and time formats will change according to the current locale.
 *
 * @param Carbon|\\DateTimeInterface|string|null $referenceTime
 * @param array                                 $formats
 *
 * @return string
 */',
        'startLine' => 1140,
        'endLine' => 1164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
        'aliasName' => NULL,
      ),
      'getIntervalDayDiff' => 
      array (
        'name' => 'getIntervalDayDiff',
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
            'startLine' => 1166,
            'endLine' => 1166,
            'startColumn' => 41,
            'endColumn' => 62,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1166,
        'endLine' => 1181,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Difference',
        'implementingClassName' => 'Carbon\\Traits\\Difference',
        'currentClassName' => 'Carbon\\Traits\\Difference',
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