<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Creator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Creator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b5f00b16f74ba0f0f86f86645ae6a0a10445b63e0ca75939298afb173da4af0a-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Creator',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Creator.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Creator',
    'shortName' => 'Creator',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Creator.
 *
 * Static creators.
 *
 * Depends on the following methods:
 *
 * @method static Carbon|CarbonImmutable getTestNow()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 38,
    'endLine' => 977,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Carbon\\Traits\\ObjectInitialisation',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'lastErrors' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'name' => 'lastErrors',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The errors that can occur.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 33,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 60,
                'endLine' => 60,
                'startTokenPos' => 113,
                'startFilePos' => 1357,
                'endTokenPos' => 113,
                'endFilePos' => 1360,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 33,
            'endColumn' => 44,
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
                'startLine' => 60,
                'endLine' => 60,
                'startTokenPos' => 120,
                'startFilePos' => 1369,
                'endTokenPos' => 120,
                'endFilePos' => 1372,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 47,
            'endColumn' => 56,
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
 * Create a new Carbon instance.
 *
 * Please see the testing aids section (specifically static::setTestNow())
 * for more on the possibility of this constructor returning a test instance.
 *
 * @param DateTimeInterface|string|null $time
 * @param DateTimeZone|string|null      $tz
 *
 * @throws InvalidFormatException
 */',
        'startLine' => 60,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'constructTimezoneFromDateTime' => 
      array (
        'name' => 'constructTimezoneFromDateTime',
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
                'name' => 'DateTimeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 52,
            'endColumn' => 74,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tz' => 
          array (
            'name' => 'tz',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 77,
            'endColumn' => 80,
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
 * Get timezone from a datetime instance.
 *
 * @param DateTimeInterface        $date
 * @param DateTimeZone|string|null $tz
 *
 * @return DateTimeInterface
 */',
        'startLine' => 111,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update constructedObjectId on cloned.
 */',
        'startLine' => 131,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'instance' => 
      array (
        'name' => 'instance',
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
            'startLine' => 143,
            'endLine' => 143,
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
 * Create a Carbon instance from a DateTime one.
 *
 * @param DateTimeInterface $date
 *
 * @return static
 */',
        'startLine' => 143,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'rawParse' => 
      array (
        'name' => 'rawParse',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 180,
                'endLine' => 180,
                'startTokenPos' => 734,
                'startFilePos' => 4921,
                'endTokenPos' => 734,
                'endFilePos' => 4924,
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
            'startColumn' => 37,
            'endColumn' => 48,
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
                'startLine' => 180,
                'endLine' => 180,
                'startTokenPos' => 741,
                'startFilePos' => 4933,
                'endTokenPos' => 741,
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
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 51,
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
 * Create a carbon instance from a string.
 *
 * This is an alias for the constructor that allows better fluent syntax
 * as it allows you to do Carbon::parse(\'Monday next week\')->fn() rather
 * than (new Carbon(\'Monday next week\'))->fn().
 *
 * @param string|DateTimeInterface|null $time
 * @param DateTimeZone|string|null      $tz
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 180,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'parse' => 
      array (
        'name' => 'parse',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 219,
                'endLine' => 219,
                'startTokenPos' => 906,
                'startFilePos' => 6117,
                'endTokenPos' => 906,
                'endFilePos' => 6120,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 34,
            'endColumn' => 45,
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
                'startLine' => 219,
                'endLine' => 219,
                'startTokenPos' => 913,
                'startFilePos' => 6129,
                'endTokenPos' => 913,
                'endFilePos' => 6132,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 48,
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
 * Create a carbon instance from a string.
 *
 * This is an alias for the constructor that allows better fluent syntax
 * as it allows you to do Carbon::parse(\'Monday next week\')->fn() rather
 * than (new Carbon(\'Monday next week\'))->fn().
 *
 * @param string|DateTimeInterface|null $time
 * @param DateTimeZone|string|null      $tz
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 219,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'parseFromLocale' => 
      array (
        'name' => 'parseFromLocale',
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
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 44,
            'endColumn' => 48,
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
                'startLine' => 246,
                'endLine' => 246,
                'startTokenPos' => 1020,
                'startFilePos' => 7094,
                'endTokenPos' => 1020,
                'endFilePos' => 7097,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 51,
            'endColumn' => 64,
            'parameterIndex' => 1,
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
                'startLine' => 246,
                'endLine' => 246,
                'startTokenPos' => 1027,
                'startFilePos' => 7106,
                'endTokenPos' => 1027,
                'endFilePos' => 7109,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 67,
            'endColumn' => 76,
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
 * Create a carbon instance from a localized string (in French, Japanese, Arabic, etc.).
 *
 * @param string                   $time   date/time string in the given language (may also contain English).
 * @param string|null              $locale if locale is null or not specified, current global locale will be
 *                                         used instead.
 * @param DateTimeZone|string|null $tz     optional timezone for the new instance.
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 246,
        'endLine' => 249,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'now' => 
      array (
        'name' => 'now',
        'parameters' => 
        array (
          'tz' => 
          array (
            'name' => 'tz',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 258,
                'endLine' => 258,
                'startTokenPos' => 1072,
                'startFilePos' => 7406,
                'endTokenPos' => 1072,
                'endFilePos' => 7409,
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
            'startColumn' => 32,
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
 * Get a Carbon instance for the current date and time.
 *
 * @param DateTimeZone|string|null $tz
 *
 * @return static
 */',
        'startLine' => 258,
        'endLine' => 261,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'today' => 
      array (
        'name' => 'today',
        'parameters' => 
        array (
          'tz' => 
          array (
            'name' => 'tz',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 270,
                'endLine' => 270,
                'startTokenPos' => 1106,
                'startFilePos' => 7640,
                'endTokenPos' => 1106,
                'endFilePos' => 7643,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 34,
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
 * Create a Carbon instance for today.
 *
 * @param DateTimeZone|string|null $tz
 *
 * @return static
 */',
        'startLine' => 270,
        'endLine' => 273,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'tomorrow' => 
      array (
        'name' => 'tomorrow',
        'parameters' => 
        array (
          'tz' => 
          array (
            'name' => 'tz',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 282,
                'endLine' => 282,
                'startTokenPos' => 1140,
                'startFilePos' => 7889,
                'endTokenPos' => 1140,
                'endFilePos' => 7892,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 282,
            'endLine' => 282,
            'startColumn' => 37,
            'endColumn' => 46,
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
 * Create a Carbon instance for tomorrow.
 *
 * @param DateTimeZone|string|null $tz
 *
 * @return static
 */',
        'startLine' => 282,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'yesterday' => 
      array (
        'name' => 'yesterday',
        'parameters' => 
        array (
          'tz' => 
          array (
            'name' => 'tz',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 294,
                'endLine' => 294,
                'startTokenPos' => 1174,
                'startFilePos' => 8143,
                'endTokenPos' => 1174,
                'endFilePos' => 8146,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 294,
            'endLine' => 294,
            'startColumn' => 38,
            'endColumn' => 47,
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
 * Create a Carbon instance for yesterday.
 *
 * @param DateTimeZone|string|null $tz
 *
 * @return static
 */',
        'startLine' => 294,
        'endLine' => 297,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'maxValue' => 
      array (
        'name' => 'maxValue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a Carbon instance for the greatest supported date.
 *
 * @return static
 */',
        'startLine' => 304,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'minValue' => 
      array (
        'name' => 'minValue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a Carbon instance for the lowest supported date.
 *
 * @return static
 */',
        'startLine' => 320,
        'endLine' => 329,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'assertBetween' => 
      array (
        'name' => 'assertBetween',
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
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 43,
            'endColumn' => 47,
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
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'min' => 
          array (
            'name' => 'min',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 58,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'max' => 
          array (
            'name' => 'max',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 64,
            'endColumn' => 67,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 331,
        'endLine' => 336,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createNowInstance' => 
      array (
        'name' => 'createNowInstance',
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
            'startLine' => 338,
            'endLine' => 338,
            'startColumn' => 47,
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
        'startLine' => 338,
        'endLine' => 351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'year' => 
          array (
            'name' => 'year',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1522,
                'startFilePos' => 10451,
                'endTokenPos' => 1522,
                'endFilePos' => 10451,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'month' => 
          array (
            'name' => 'month',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1529,
                'startFilePos' => 10463,
                'endTokenPos' => 1529,
                'endFilePos' => 10463,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 46,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'day' => 
          array (
            'name' => 'day',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1536,
                'startFilePos' => 10473,
                'endTokenPos' => 1536,
                'endFilePos' => 10473,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 58,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'hour' => 
          array (
            'name' => 'hour',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1543,
                'startFilePos' => 10484,
                'endTokenPos' => 1543,
                'endFilePos' => 10484,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 68,
            'endColumn' => 76,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'minute' => 
          array (
            'name' => 'minute',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1550,
                'startFilePos' => 10497,
                'endTokenPos' => 1550,
                'endFilePos' => 10497,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 79,
            'endColumn' => 89,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1557,
                'startFilePos' => 10510,
                'endTokenPos' => 1557,
                'endFilePos' => 10510,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 92,
            'endColumn' => 102,
            'parameterIndex' => 5,
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
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1564,
                'startFilePos' => 10519,
                'endTokenPos' => 1564,
                'endFilePos' => 10522,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 105,
            'endColumn' => 114,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new Carbon instance from a specific date and time.
 *
 * If any of $year, $month or $day are set to null their now() values will
 * be used.
 *
 * If $hour is null it will be set to its now() value and the default
 * values for $minute and $second will be their now() values.
 *
 * If $hour is not null then the default values for $minute and $second
 * will be 0.
 *
 * @param DateTimeInterface|int|null $year
 * @param int|null                   $month
 * @param int|null                   $day
 * @param int|null                   $hour
 * @param int|null                   $minute
 * @param int|null                   $second
 * @param DateTimeZone|string|null   $tz
 *
 * @throws InvalidFormatException
 *
 * @return static|false
 */',
        'startLine' => 377,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createSafe' => 
      array (
        'name' => 'createSafe',
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
                'startLine' => 461,
                'endLine' => 461,
                'startTokenPos' => 2104,
                'startFilePos' => 13404,
                'endTokenPos' => 2104,
                'endFilePos' => 13407,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'month' => 
          array (
            'name' => 'month',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 461,
                'endLine' => 461,
                'startTokenPos' => 2111,
                'startFilePos' => 13419,
                'endTokenPos' => 2111,
                'endFilePos' => 13422,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'day' => 
          array (
            'name' => 'day',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 461,
                'endLine' => 461,
                'startTokenPos' => 2118,
                'startFilePos' => 13432,
                'endTokenPos' => 2118,
                'endFilePos' => 13435,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 68,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'hour' => 
          array (
            'name' => 'hour',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 461,
                'endLine' => 461,
                'startTokenPos' => 2125,
                'startFilePos' => 13446,
                'endTokenPos' => 2125,
                'endFilePos' => 13449,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 81,
            'endColumn' => 92,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'minute' => 
          array (
            'name' => 'minute',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 461,
                'endLine' => 461,
                'startTokenPos' => 2132,
                'startFilePos' => 13462,
                'endTokenPos' => 2132,
                'endFilePos' => 13465,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 95,
            'endColumn' => 108,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 461,
                'endLine' => 461,
                'startTokenPos' => 2139,
                'startFilePos' => 13478,
                'endTokenPos' => 2139,
                'endFilePos' => 13481,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 111,
            'endColumn' => 124,
            'parameterIndex' => 5,
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
                'startLine' => 461,
                'endLine' => 461,
                'startTokenPos' => 2146,
                'startFilePos' => 13490,
                'endTokenPos' => 2146,
                'endFilePos' => 13493,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 127,
            'endColumn' => 136,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new safe Carbon instance from a specific date and time.
 *
 * If any of $year, $month or $day are set to null their now() values will
 * be used.
 *
 * If $hour is null it will be set to its now() value and the default
 * values for $minute and $second will be their now() values.
 *
 * If $hour is not null then the default values for $minute and $second
 * will be 0.
 *
 * If one of the set values is not valid, an InvalidDateException
 * will be thrown.
 *
 * @param int|null                 $year
 * @param int|null                 $month
 * @param int|null                 $day
 * @param int|null                 $hour
 * @param int|null                 $minute
 * @param int|null                 $second
 * @param DateTimeZone|string|null $tz
 *
 * @throws InvalidDateException
 *
 * @return static|false
 */',
        'startLine' => 461,
        'endLine' => 488,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createStrict' => 
      array (
        'name' => 'createStrict',
        'parameters' => 
        array (
          'year' => 
          array (
            'name' => 'year',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 2408,
                'startFilePos' => 14955,
                'endTokenPos' => 2408,
                'endFilePos' => 14955,
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
                      'name' => 'int',
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'month' => 
          array (
            'name' => 'month',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 2418,
                'startFilePos' => 14972,
                'endTokenPos' => 2418,
                'endFilePos' => 14972,
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
                      'name' => 'int',
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 57,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'day' => 
          array (
            'name' => 'day',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 2428,
                'startFilePos' => 14987,
                'endTokenPos' => 2428,
                'endFilePos' => 14987,
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
                      'name' => 'int',
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 74,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'hour' => 
          array (
            'name' => 'hour',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 2438,
                'startFilePos' => 15003,
                'endTokenPos' => 2438,
                'endFilePos' => 15003,
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
                      'name' => 'int',
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 89,
            'endColumn' => 102,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'minute' => 
          array (
            'name' => 'minute',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 2448,
                'startFilePos' => 15021,
                'endTokenPos' => 2448,
                'endFilePos' => 15021,
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
                      'name' => 'int',
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 105,
            'endColumn' => 120,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 2458,
                'startFilePos' => 15039,
                'endTokenPos' => 2458,
                'endFilePos' => 15039,
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
                      'name' => 'int',
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 123,
            'endColumn' => 138,
            'parameterIndex' => 5,
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
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 2465,
                'startFilePos' => 15048,
                'endTokenPos' => 2465,
                'endFilePos' => 15051,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 141,
            'endColumn' => 150,
            'parameterIndex' => 6,
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
 * Create a new Carbon instance from a specific date and time using strict validation.
 *
 * @see create()
 *
 * @param int|null                 $year
 * @param int|null                 $month
 * @param int|null                 $day
 * @param int|null                 $hour
 * @param int|null                 $minute
 * @param int|null                 $second
 * @param DateTimeZone|string|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 507,
        'endLine' => 519,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createFromDate' => 
      array (
        'name' => 'createFromDate',
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
                'startLine' => 533,
                'endLine' => 533,
                'startTokenPos' => 2563,
                'startFilePos' => 15787,
                'endTokenPos' => 2563,
                'endFilePos' => 15790,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 533,
            'endLine' => 533,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'month' => 
          array (
            'name' => 'month',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 533,
                'endLine' => 533,
                'startTokenPos' => 2570,
                'startFilePos' => 15802,
                'endTokenPos' => 2570,
                'endFilePos' => 15805,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 533,
            'endLine' => 533,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'day' => 
          array (
            'name' => 'day',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 533,
                'endLine' => 533,
                'startTokenPos' => 2577,
                'startFilePos' => 15815,
                'endTokenPos' => 2577,
                'endFilePos' => 15818,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 533,
            'endLine' => 533,
            'startColumn' => 72,
            'endColumn' => 82,
            'parameterIndex' => 2,
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
                'startLine' => 533,
                'endLine' => 533,
                'startTokenPos' => 2584,
                'startFilePos' => 15827,
                'endTokenPos' => 2584,
                'endFilePos' => 15830,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 533,
            'endLine' => 533,
            'startColumn' => 85,
            'endColumn' => 94,
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
 * Create a Carbon instance from just a date. The time portion is set to now.
 *
 * @param int|null                 $year
 * @param int|null                 $month
 * @param int|null                 $day
 * @param DateTimeZone|string|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 533,
        'endLine' => 536,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createMidnightDate' => 
      array (
        'name' => 'createMidnightDate',
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
                'startLine' => 550,
                'endLine' => 550,
                'startTokenPos' => 2633,
                'startFilePos' => 16337,
                'endTokenPos' => 2633,
                'endFilePos' => 16340,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 47,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'month' => 
          array (
            'name' => 'month',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 550,
                'endLine' => 550,
                'startTokenPos' => 2640,
                'startFilePos' => 16352,
                'endTokenPos' => 2640,
                'endFilePos' => 16355,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 61,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'day' => 
          array (
            'name' => 'day',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 550,
                'endLine' => 550,
                'startTokenPos' => 2647,
                'startFilePos' => 16365,
                'endTokenPos' => 2647,
                'endFilePos' => 16368,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 76,
            'endColumn' => 86,
            'parameterIndex' => 2,
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
                'startLine' => 550,
                'endLine' => 550,
                'startTokenPos' => 2654,
                'startFilePos' => 16377,
                'endTokenPos' => 2654,
                'endFilePos' => 16380,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 89,
            'endColumn' => 98,
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
 * Create a Carbon instance from just a date. The time portion is set to midnight.
 *
 * @param int|null                 $year
 * @param int|null                 $month
 * @param int|null                 $day
 * @param DateTimeZone|string|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 550,
        'endLine' => 553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createFromTime' => 
      array (
        'name' => 'createFromTime',
        'parameters' => 
        array (
          'hour' => 
          array (
            'name' => 'hour',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 567,
                'endLine' => 567,
                'startTokenPos' => 2703,
                'startFilePos' => 16875,
                'endTokenPos' => 2703,
                'endFilePos' => 16875,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 567,
            'endLine' => 567,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'minute' => 
          array (
            'name' => 'minute',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 567,
                'endLine' => 567,
                'startTokenPos' => 2710,
                'startFilePos' => 16888,
                'endTokenPos' => 2710,
                'endFilePos' => 16888,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 567,
            'endLine' => 567,
            'startColumn' => 54,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 567,
                'endLine' => 567,
                'startTokenPos' => 2717,
                'startFilePos' => 16901,
                'endTokenPos' => 2717,
                'endFilePos' => 16901,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 567,
            'endLine' => 567,
            'startColumn' => 67,
            'endColumn' => 77,
            'parameterIndex' => 2,
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
                'startLine' => 567,
                'endLine' => 567,
                'startTokenPos' => 2724,
                'startFilePos' => 16910,
                'endTokenPos' => 2724,
                'endFilePos' => 16913,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 567,
            'endLine' => 567,
            'startColumn' => 80,
            'endColumn' => 89,
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
 * Create a Carbon instance from just a time. The date portion is set to today.
 *
 * @param int|null                 $hour
 * @param int|null                 $minute
 * @param int|null                 $second
 * @param DateTimeZone|string|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 567,
        'endLine' => 570,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createFromTimeString' => 
      array (
        'name' => 'createFromTimeString',
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
            'startLine' => 582,
            'endLine' => 582,
            'startColumn' => 49,
            'endColumn' => 53,
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
                'startLine' => 582,
                'endLine' => 582,
                'startTokenPos' => 2776,
                'startFilePos' => 17340,
                'endTokenPos' => 2776,
                'endFilePos' => 17343,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 582,
            'endLine' => 582,
            'startColumn' => 56,
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
 * Create a Carbon instance from a time string. The date portion is set to today.
 *
 * @param string                   $time
 * @param DateTimeZone|string|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 582,
        'endLine' => 585,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createFromFormatAndTimezone' => 
      array (
        'name' => 'createFromFormatAndTimezone',
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
            'startLine' => 594,
            'endLine' => 594,
            'startColumn' => 57,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 594,
            'endLine' => 594,
            'startColumn' => 66,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'originalTz' => 
          array (
            'name' => 'originalTz',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 594,
            'endLine' => 594,
            'startColumn' => 73,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string                         $format     Datetime format
 * @param string                         $time
 * @param DateTimeZone|string|false|null $originalTz
 *
 * @return DateTimeInterface|false
 */',
        'startLine' => 594,
        'endLine' => 618,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'rawCreateFromFormat' => 
      array (
        'name' => 'rawCreateFromFormat',
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
            'startLine' => 631,
            'endLine' => 631,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 631,
            'endLine' => 631,
            'startColumn' => 57,
            'endColumn' => 61,
            'parameterIndex' => 1,
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
                'startLine' => 631,
                'endLine' => 631,
                'startTokenPos' => 3007,
                'startFilePos' => 18931,
                'endTokenPos' => 3007,
                'endFilePos' => 18934,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 631,
            'endLine' => 631,
            'startColumn' => 64,
            'endColumn' => 73,
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
 * Create a Carbon instance from a specific format.
 *
 * @param string                         $format Datetime format
 * @param string                         $time
 * @param DateTimeZone|string|false|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static|false
 */',
        'startLine' => 631,
        'endLine' => 694,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
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
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 708,
            'endLine' => 708,
            'startColumn' => 45,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 708,
            'endLine' => 708,
            'startColumn' => 54,
            'endColumn' => 58,
            'parameterIndex' => 1,
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
                'startLine' => 708,
                'endLine' => 708,
                'startTokenPos' => 3534,
                'startFilePos' => 22094,
                'endTokenPos' => 3534,
                'endFilePos' => 22097,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 708,
            'endLine' => 708,
            'startColumn' => 61,
            'endColumn' => 70,
            'parameterIndex' => 2,
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
 * Create a Carbon instance from a specific format.
 *
 * @param string                         $format Datetime format
 * @param string                         $time
 * @param DateTimeZone|string|false|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static|false
 */',
        'startLine' => 707,
        'endLine' => 721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createFromIsoFormat' => 
      array (
        'name' => 'createFromIsoFormat',
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
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 57,
            'endColumn' => 61,
            'parameterIndex' => 1,
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
                'startLine' => 736,
                'endLine' => 736,
                'startTokenPos' => 3647,
                'startFilePos' => 23313,
                'endTokenPos' => 3647,
                'endFilePos' => 23316,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 64,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => '\'en\'',
              'attributes' => 
              array (
                'startLine' => 736,
                'endLine' => 736,
                'startTokenPos' => 3654,
                'startFilePos' => 23329,
                'endTokenPos' => 3654,
                'endFilePos' => 23332,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 76,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'translator' => 
          array (
            'name' => 'translator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 736,
                'endLine' => 736,
                'startTokenPos' => 3661,
                'startFilePos' => 23349,
                'endTokenPos' => 3661,
                'endFilePos' => 23352,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 92,
            'endColumn' => 109,
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
 * Create a Carbon instance from a specific ISO format (same replacements as ->isoFormat()).
 *
 * @param string                                             $format     Datetime format
 * @param string                                             $time
 * @param DateTimeZone|string|false|null                     $tz         optional timezone
 * @param string|null                                        $locale     locale to be used for LTS, LT, LL, LLL, etc. macro-formats (en by fault, unneeded if no such macro-format in use)
 * @param \\Symfony\\Component\\Translation\\TranslatorInterface $translator optional custom translator to use for macro-formats
 *
 * @throws InvalidFormatException
 *
 * @return static|false
 */',
        'startLine' => 736,
        'endLine' => 863,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createFromLocaleFormat' => 
      array (
        'name' => 'createFromLocaleFormat',
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
            'startLine' => 877,
            'endLine' => 877,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 877,
            'endLine' => 877,
            'startColumn' => 60,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 877,
            'endLine' => 877,
            'startColumn' => 69,
            'endColumn' => 73,
            'parameterIndex' => 2,
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
                'startLine' => 877,
                'endLine' => 877,
                'startTokenPos' => 4643,
                'startFilePos' => 28487,
                'endTokenPos' => 4643,
                'endFilePos' => 28490,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 877,
            'endLine' => 877,
            'startColumn' => 76,
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
 * Create a Carbon instance from a specific format and a string in a given language.
 *
 * @param string                         $format Datetime format
 * @param string                         $locale
 * @param string                         $time
 * @param DateTimeZone|string|false|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static|false
 */',
        'startLine' => 877,
        'endLine' => 893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'createFromLocaleIsoFormat' => 
      array (
        'name' => 'createFromLocaleIsoFormat',
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
            'startLine' => 907,
            'endLine' => 907,
            'startColumn' => 54,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 907,
            'endLine' => 907,
            'startColumn' => 63,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 907,
            'endLine' => 907,
            'startColumn' => 72,
            'endColumn' => 76,
            'parameterIndex' => 2,
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
                'startLine' => 907,
                'endLine' => 907,
                'startTokenPos' => 4805,
                'startFilePos' => 29630,
                'endTokenPos' => 4805,
                'endFilePos' => 29633,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 907,
            'endLine' => 907,
            'startColumn' => 79,
            'endColumn' => 88,
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
 * Create a Carbon instance from a specific ISO format and a string in a given language.
 *
 * @param string                         $format Datetime ISO format
 * @param string                         $locale
 * @param string                         $time
 * @param DateTimeZone|string|false|null $tz
 *
 * @throws InvalidFormatException
 *
 * @return static|false
 */',
        'startLine' => 907,
        'endLine' => 912,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
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
            'startLine' => 926,
            'endLine' => 926,
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
 * Make a Carbon instance from given variable if possible.
 *
 * Always return a new instance. Parse only strings and only these likely to be dates (skip intervals
 * and recurrences). Throw an exception for invalid format, but otherwise return null.
 *
 * @param mixed $var
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
        'startLine' => 926,
        'endLine' => 946,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'setLastErrors' => 
      array (
        'name' => 'setLastErrors',
        'parameters' => 
        array (
          'lastErrors' => 
          array (
            'name' => 'lastErrors',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 955,
            'endLine' => 955,
            'startColumn' => 43,
            'endColumn' => 53,
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
 * Set last errors.
 *
 * @param array|bool $lastErrors
 *
 * @return void
 */',
        'startLine' => 955,
        'endLine' => 965,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
        'aliasName' => NULL,
      ),
      'getLastErrors' => 
      array (
        'name' => 'getLastErrors',
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
 * {@inheritdoc}
 *
 * @return array
 */',
        'startLine' => 972,
        'endLine' => 976,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Creator',
        'implementingClassName' => 'Carbon\\Traits\\Creator',
        'currentClassName' => 'Carbon\\Traits\\Creator',
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