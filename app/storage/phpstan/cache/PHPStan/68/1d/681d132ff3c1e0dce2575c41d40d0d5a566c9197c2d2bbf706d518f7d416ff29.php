<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Test.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Test
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c7612d43b4feb90104b8dd84d9c06e801cfbd4755db4c67112b0256f59a4c758-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Test',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Test.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Test',
    'shortName' => 'Test',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 228,
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
      'testNow' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'name' => 'testNow',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A test Carbon instance to be returned when now instances are created.
 *
 * @var Closure|static|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'testDefaultTimezone' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'name' => 'testDefaultTimezone',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The timezone to resto to when clearing the time mock.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 42,
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
      'setTestNow' => 
      array (
        'name' => 'setTestNow',
        'parameters' => 
        array (
          'testNow' => 
          array (
            'name' => 'testNow',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 64,
                'endLine' => 64,
                'startTokenPos' => 88,
                'startFilePos' => 2194,
                'endTokenPos' => 88,
                'endFilePos' => 2197,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 39,
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
 * Set a Carbon instance (real or mock) to be returned when a "now"
 * instance is created.  The provided instance will be returned
 * specifically under the following conditions:
 *   - A call to the static now() method, ex. Carbon::now()
 *   - When a null (or blank string) is passed to the constructor or parse(), ex. new Carbon(null)
 *   - When the string "now" is passed to the constructor or parse(), ex. new Carbon(\'now\')
 *   - When a string containing the desired time is passed to Carbon::parse().
 *
 * Note the timezone parameter was left out of the examples above and
 * has no affect as the mock value will be returned regardless of its value.
 *
 * Only the moment is mocked with setTestNow(), the timezone will still be the one passed
 * as parameter of date_default_timezone_get() as a fallback (see setTestNowAndTimezone()).
 *
 * To clear the test instance call this method using the default
 * parameter of null.
 *
 * /!\\ Use this method for unit tests only.
 *
 * @param DateTimeInterface|Closure|static|string|false|null $testNow real or mock Carbon instance
 */',
        'startLine' => 64,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
        'aliasName' => NULL,
      ),
      'setTestNowAndTimezone' => 
      array (
        'name' => 'setTestNowAndTimezone',
        'parameters' => 
        array (
          'testNow' => 
          array (
            'name' => 'testNow',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 143,
                'startFilePos' => 3416,
                'endTokenPos' => 143,
                'endFilePos' => 3419,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 50,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'tz' => 
          array (
            'name' => 'tz',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 150,
                'startFilePos' => 3428,
                'endTokenPos' => 150,
                'endFilePos' => 3431,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 67,
            'endColumn' => 76,
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
 * Set a Carbon instance (real or mock) to be returned when a "now"
 * instance is created.  The provided instance will be returned
 * specifically under the following conditions:
 *   - A call to the static now() method, ex. Carbon::now()
 *   - When a null (or blank string) is passed to the constructor or parse(), ex. new Carbon(null)
 *   - When the string "now" is passed to the constructor or parse(), ex. new Carbon(\'now\')
 *   - When a string containing the desired time is passed to Carbon::parse().
 *
 * It will also align default timezone (e.g. call date_default_timezone_set()) with
 * the second argument or if null, with the timezone of the given date object.
 *
 * To clear the test instance call this method using the default
 * parameter of null.
 *
 * /!\\ Use this method for unit tests only.
 *
 * @param DateTimeInterface|Closure|static|string|false|null $testNow real or mock Carbon instance
 */',
        'startLine' => 90,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
        'aliasName' => NULL,
      ),
      'withTestNow' => 
      array (
        'name' => 'withTestNow',
        'parameters' => 
        array (
          'testNow' => 
          array (
            'name' => 'testNow',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 50,
            'endColumn' => 58,
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
 * Temporarily sets a static date to be used within the callback.
 * Using setTestNow to set the date, executing the callback, then
 * clearing the test instance.
 *
 * /!\\ Use this method for unit tests only.
 *
 * @template T
 *
 * @param DateTimeInterface|Closure|static|string|false|null $testNow  real or mock Carbon instance
 * @param Closure(): T                                       $callback
 *
 * @return T
 */',
        'startLine' => 129,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
        'aliasName' => NULL,
      ),
      'getTestNow' => 
      array (
        'name' => 'getTestNow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Carbon instance (real or mock) to be returned when a "now"
 * instance is created.
 *
 * @return Closure|static the current instance used for testing
 */',
        'startLine' => 148,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
        'aliasName' => NULL,
      ),
      'hasTestNow' => 
      array (
        'name' => 'hasTestNow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if there is a valid test instance set. A valid test instance
 * is anything that is not null.
 *
 * @return bool true if there is a test instance, otherwise false
 */',
        'startLine' => 159,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
        'aliasName' => NULL,
      ),
      'getMockedTestNow' => 
      array (
        'name' => 'getMockedTestNow',
        'parameters' => 
        array (
          'tz' => 
          array (
            'name' => 'tz',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 48,
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
 * Get the mocked date passed in setTestNow() and if it\'s a Closure, execute it.
 *
 * @param string|\\DateTimeZone $tz
 *
 * @return \\Carbon\\CarbonImmutable|\\Carbon\\Carbon|null
 */',
        'startLine' => 171,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
        'aliasName' => NULL,
      ),
      'mockConstructorParameters' => 
      array (
        'name' => 'mockConstructorParameters',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 189,
            'endLine' => 189,
            'startColumn' => 57,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tz' => 
          array (
            'name' => 'tz',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 189,
            'endLine' => 189,
            'startColumn' => 65,
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
        'startLine' => 189,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
        'aliasName' => NULL,
      ),
      'setDefaultTimezone' => 
      array (
        'name' => 'setDefaultTimezone',
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
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 48,
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
                'startLine' => 203,
                'endLine' => 203,
                'startTokenPos' => 669,
                'startFilePos' => 6894,
                'endTokenPos' => 669,
                'endFilePos' => 6897,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 59,
            'endColumn' => 89,
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
        'startLine' => 203,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Test',
        'implementingClassName' => 'Carbon\\Traits\\Test',
        'currentClassName' => 'Carbon\\Traits\\Test',
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