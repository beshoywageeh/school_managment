<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Options.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Options
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5af98f7d3d2289e6459c0412419276519d07cbd0f8d4d9222338699d5826a568-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Options',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Options.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Options',
    'shortName' => 'Options',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Options.
 *
 * Embed base methods to change settings of Carbon classes.
 *
 * Depends on the following methods:
 *
 * @method static shiftTimezone($timezone) Set the timezone
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 471,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Carbon\\Traits\\Localization',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'PHPIntSize' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'PHPIntSize',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'PHP_INT_SIZE',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 47,
            'startFilePos' => 671,
            'endTokenPos' => 47,
            'endFilePos' => 682,
          ),
        ),
        'docComment' => '/**
 * Customizable PHP_INT_SIZE override.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'weekStartsAt' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'weekStartsAt',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Carbon\\CarbonInterface::MONDAY',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 60,
            'startFilePos' => 795,
            'endTokenPos' => 62,
            'endFilePos' => 817,
          ),
        ),
        'docComment' => '/**
 * First day of week.
 *
 * @var int|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'weekEndsAt' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'weekEndsAt',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Carbon\\CarbonInterface::SUNDAY',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 75,
            'startFilePos' => 927,
            'endTokenPos' => 77,
            'endFilePos' => 949,
          ),
        ),
        'docComment' => '/**
 * Last day of week.
 *
 * @var int|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 59,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'weekendDays' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'weekendDays',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Carbon\\CarbonInterface::SATURDAY, \\Carbon\\CarbonInterface::SUNDAY]',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 60,
            'startTokenPos' => 90,
            'startFilePos' => 1054,
            'endTokenPos' => 102,
            'endFilePos' => 1128,
          ),
        ),
        'docComment' => '/**
 * Days of weekend.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'regexFormats' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'regexFormats',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[
    \'d\' => \'(3[01]|[12][0-9]|0[1-9])\',
    \'D\' => \'(Sun|Mon|Tue|Wed|Thu|Fri|Sat)\',
    \'j\' => \'([123][0-9]|[1-9])\',
    \'l\' => \'([a-zA-Z]{2,})\',
    \'N\' => \'([1-7])\',
    \'S\' => \'(st|nd|rd|th)\',
    \'w\' => \'([0-6])\',
    \'z\' => \'(36[0-5]|3[0-5][0-9]|[12][0-9]{2}|[1-9]?[0-9])\',
    \'W\' => \'(5[012]|[1-4][0-9]|0?[1-9])\',
    \'F\' => \'([a-zA-Z]{2,})\',
    \'m\' => \'(1[012]|0[1-9])\',
    \'M\' => \'([a-zA-Z]{3})\',
    \'n\' => \'(1[012]|[1-9])\',
    \'t\' => \'(2[89]|3[01])\',
    \'L\' => \'(0|1)\',
    \'o\' => \'([1-9][0-9]{0,4})\',
    \'Y\' => \'([1-9]?[0-9]{4})\',
    \'y\' => \'([0-9]{2})\',
    \'a\' => \'(am|pm)\',
    \'A\' => \'(AM|PM)\',
    \'B\' => \'([0-9]{3})\',
    \'g\' => \'(1[012]|[1-9])\',
    \'G\' => \'(2[0-3]|1?[0-9])\',
    \'h\' => \'(1[012]|0[1-9])\',
    \'H\' => \'(2[0-3]|[01][0-9])\',
    \'i\' => \'([0-5][0-9])\',
    \'s\' => \'([0-5][0-9])\',
    \'u\' => \'([0-9]{1,6})\',
    \'v\' => \'([0-9]{1,3})\',
    \'e\' => \'([a-zA-Z]{1,5})|([a-zA-Z]*\\/[a-zA-Z]*)\',
    \'I\' => \'(0|1)\',
    \'O\' => \'([+-](1[0123]|0[0-9])[0134][05])\',
    \'P\' => \'([+-](1[0123]|0[0-9]):[0134][05])\',
    \'p\' => \'(Z|[+-](1[0123]|0[0-9]):[0134][05])\',
    \'T\' => \'([a-zA-Z]{1,5})\',
    \'Z\' => \'(-?[1-5]?[0-9]{1,4})\',
    \'U\' => \'([0-9]*)\',
    // The formats below are combinations of the above formats.
    \'c\' => \'(([1-9]?[0-9]{4})-(1[012]|0[1-9])-(3[01]|[12][0-9]|0[1-9])T(2[0-3]|[01][0-9]):([0-5][0-9]):([0-5][0-9])[+-](1[012]|0[0-9]):([0134][05]))\',
    // Y-m-dTH:i:sP
    \'r\' => \'(([a-zA-Z]{3}), ([123][0-9]|0[1-9]) ([a-zA-Z]{3}) ([1-9]?[0-9]{4}) (2[0-3]|[01][0-9]):([0-5][0-9]):([0-5][0-9]) [+-](1[012]|0[0-9])([0134][05]))\',
]',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 109,
            'startTokenPos' => 115,
            'startFilePos' => 1256,
            'endTokenPos' => 396,
            'endFilePos' => 3012,
          ),
        ),
        'docComment' => '/**
 * Format regex patterns.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'regexFormatModifiers' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'regexFormatModifiers',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'*\' => \'.+\', \' \' => \'[   ]\', \'#\' => \'[;:\\/.,()-]\', \'?\' => \'([^a]|[a])\', \'!\' => \'\', \'|\' => \'\', \'+\' => \'\']',
          'attributes' => 
          array (
            'startLine' => 116,
            'endLine' => 124,
            'startTokenPos' => 409,
            'startFilePos' => 3182,
            'endTokenPos' => 460,
            'endFilePos' => 3350,
          ),
        ),
        'docComment' => '/**
 * Format modifiers (such as available in createFromFormat) regex patterns.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 116,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'monthsOverflow' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'monthsOverflow',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 132,
            'endLine' => 132,
            'startTokenPos' => 473,
            'startFilePos' => 3519,
            'endTokenPos' => 473,
            'endFilePos' => 3522,
          ),
        ),
        'docComment' => '/**
 * Indicates if months should be calculated with overflow.
 * Global setting.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'yearsOverflow' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'yearsOverflow',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 140,
            'endLine' => 140,
            'startTokenPos' => 486,
            'startFilePos' => 3689,
            'endTokenPos' => 486,
            'endFilePos' => 3692,
          ),
        ),
        'docComment' => '/**
 * Indicates if years should be calculated with overflow.
 * Global setting.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 140,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'strictModeEnabled' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'strictModeEnabled',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 148,
            'endLine' => 148,
            'startTokenPos' => 499,
            'startFilePos' => 3848,
            'endTokenPos' => 499,
            'endFilePos' => 3851,
          ),
        ),
        'docComment' => '/**
 * Indicates if the strict mode is in use.
 * Global setting.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 148,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formatFunction' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'formatFunction',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Function to call instead of format.
 *
 * @var string|callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 155,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'createFromFormatFunction' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'createFromFormatFunction',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Function to call instead of createFromFormat.
 *
 * @var string|callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'parseFunction' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'parseFunction',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Function to call instead of parse.
 *
 * @var string|callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 169,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localMonthsOverflow' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localMonthsOverflow',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates if months should be calculated with overflow.
 * Specific setting.
 *
 * @var bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 177,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localYearsOverflow' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localYearsOverflow',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates if years should be calculated with overflow.
 * Specific setting.
 *
 * @var bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 185,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localStrictModeEnabled' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localStrictModeEnabled',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates if the strict mode is in use.
 * Specific setting.
 *
 * @var bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 193,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localHumanDiffOptions' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localHumanDiffOptions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Options for diffForHumans and forHumans methods.
 *
 * @var bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localToStringFormat' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localToStringFormat',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Format to use on string cast.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localSerializer' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localSerializer',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Format to use on JSON serialization.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 214,
        'endLine' => 214,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localMacros' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localMacros',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Instance-specific macros.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 221,
        'endLine' => 221,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localGenericMacros' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localGenericMacros',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Instance-specific generic macros.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 228,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localFormatFunction' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'name' => 'localFormatFunction',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Function to call instead of format.
 *
 * @var string|callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 235,
        'endLine' => 235,
        'startColumn' => 5,
        'endColumn' => 35,
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
      'useStrictMode' => 
      array (
        'name' => 'useStrictMode',
        'parameters' => 
        array (
          'strictModeEnabled' => 
          array (
            'name' => 'strictModeEnabled',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 246,
                'endLine' => 246,
                'startTokenPos' => 606,
                'startFilePos' => 5927,
                'endTokenPos' => 606,
                'endFilePos' => 5930,
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
            'startColumn' => 42,
            'endColumn' => 66,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 * @see settings
 *
 * Enable the strict mode (or disable with passing false).
 *
 * @param bool $strictModeEnabled
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
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'isStrictModeEnabled' => 
      array (
        'name' => 'isStrictModeEnabled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the strict mode is globally in use, false else.
 * (It can be overridden in specific instances.)
 *
 * @return bool
 */',
        'startLine' => 257,
        'endLine' => 260,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'useMonthsOverflow' => 
      array (
        'name' => 'useMonthsOverflow',
        'parameters' => 
        array (
          'monthsOverflow' => 
          array (
            'name' => 'monthsOverflow',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 275,
                'endLine' => 275,
                'startTokenPos' => 659,
                'startFilePos' => 6913,
                'endTokenPos' => 659,
                'endFilePos' => 6916,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 46,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addMonthsWithOverflow/addMonthsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Indicates if months should be calculated with overflow.
 *
 * @param bool $monthsOverflow
 *
 * @return void
 */',
        'startLine' => 275,
        'endLine' => 278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'resetMonthsOverflow' => 
      array (
        'name' => 'resetMonthsOverflow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addMonthsWithOverflow/addMonthsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Reset the month overflow behavior.
 *
 * @return void
 */',
        'startLine' => 291,
        'endLine' => 294,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'shouldOverflowMonths' => 
      array (
        'name' => 'shouldOverflowMonths',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the month overflow global behavior (can be overridden in specific instances).
 *
 * @return bool
 */',
        'startLine' => 301,
        'endLine' => 304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'useYearsOverflow' => 
      array (
        'name' => 'useYearsOverflow',
        'parameters' => 
        array (
          'yearsOverflow' => 
          array (
            'name' => 'yearsOverflow',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 319,
                'endLine' => 319,
                'startTokenPos' => 737,
                'startFilePos' => 8464,
                'endTokenPos' => 737,
                'endFilePos' => 8467,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 319,
            'endLine' => 319,
            'startColumn' => 45,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addYearsWithOverflow/addYearsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Indicates if years should be calculated with overflow.
 *
 * @param bool $yearsOverflow
 *
 * @return void
 */',
        'startLine' => 319,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'resetYearsOverflow' => 
      array (
        'name' => 'resetYearsOverflow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addYearsWithOverflow/addYearsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Reset the month overflow behavior.
 *
 * @return void
 */',
        'startLine' => 335,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'shouldOverflowYears' => 
      array (
        'name' => 'shouldOverflowYears',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the month overflow global behavior (can be overridden in specific instances).
 *
 * @return bool
 */',
        'startLine' => 345,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'settings' => 
      array (
        'name' => 'settings',
        'parameters' => 
        array (
          'settings' => 
          array (
            'name' => 'settings',
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
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 30,
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
 * Set specific options.
 *  - strictMode: true|false|null
 *  - monthOverflow: true|false|null
 *  - yearOverflow: true|false|null
 *  - humanDiffOptions: int|null
 *  - toStringFormat: string|Closure|null
 *  - toJsonFormat: string|Closure|null
 *  - locale: string|null
 *  - timezone: \\DateTimeZone|string|int|null
 *  - macros: array|null
 *  - genericMacros: array|null
 *
 * @param array $settings
 *
 * @return $this|static
 */',
        'startLine' => 367,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'getSettings' => 
      array (
        'name' => 'getSettings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current local settings.
 *
 * @return array
 */',
        'startLine' => 405,
        'endLine' => 431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      '__debugInfo' => 
      array (
        'name' => '__debugInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Show truthy properties on var_dump().
 *
 * @return array
 */',
        'startLine' => 438,
        'endLine' => 453,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
        'aliasName' => NULL,
      ),
      'addExtraDebugInfos' => 
      array (
        'name' => 'addExtraDebugInfos',
        'parameters' => 
        array (
          'infos' => 
          array (
            'name' => 'infos',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 43,
            'endColumn' => 49,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 455,
        'endLine' => 470,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Options',
        'implementingClassName' => 'Carbon\\Traits\\Options',
        'currentClassName' => 'Carbon\\Traits\\Options',
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