<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Comparison.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Comparison
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d26f7596d523c2204b6463fbb13621407819a1f9400faaf60ac2ee11317741f3-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Comparison',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Comparison.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Comparison',
    'shortName' => 'Comparison',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Comparison.
 *
 * Comparison utils and testers. All the following methods return booleans.
 * nowWithSameTz
 *
 * Depends on the following methods:
 *
 * @method static        resolveCarbon($date)
 * @method static        copy()
 * @method static        nowWithSameTz()
 * @method static static yesterday($timezone = null)
 * @method static static tomorrow($timezone = null)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 33,
    'endLine' => 1129,
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
      'endOfTime' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'name' => 'endOfTime',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 45,
            'startFilePos' => 855,
            'endTokenPos' => 45,
            'endFilePos' => 859,
          ),
        ),
        'docComment' => '/** @var bool */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'startOfTime' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'name' => 'startOfTime',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 56,
            'startFilePos' => 913,
            'endTokenPos' => 56,
            'endFilePos' => 917,
          ),
        ),
        'docComment' => '/** @var bool */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
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
      'eq' => 
      array (
        'name' => 'eq',
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 24,
            'endColumn' => 28,
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
 * Determines if the instance is equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->eq(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->eq(Carbon::parse(\'2018-07-25 12:45:16\')); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->eq(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see equalTo()
 *
 * @return bool
 */',
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'equalTo' => 
      array (
        'name' => 'equalTo',
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
            'startLine' => 76,
            'endLine' => 76,
            'startColumn' => 29,
            'endColumn' => 33,
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
 * Determines if the instance is equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(Carbon::parse(\'2018-07-25 12:45:16\')); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return bool
 */',
        'startLine' => 76,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'ne' => 
      array (
        'name' => 'ne',
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
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 24,
            'endColumn' => 28,
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
 * Determines if the instance is not equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->ne(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->ne(Carbon::parse(\'2018-07-25 12:45:16\')); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->ne(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see notEqualTo()
 *
 * @return bool
 */',
        'startLine' => 100,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'notEqualTo' => 
      array (
        'name' => 'notEqualTo',
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
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 32,
            'endColumn' => 36,
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
 * Determines if the instance is not equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(Carbon::parse(\'2018-07-25 12:45:16\')); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return bool
 */',
        'startLine' => 119,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'gt' => 
      array (
        'name' => 'gt',
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
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 24,
            'endColumn' => 28,
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
 * Determines if the instance is greater (after) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see greaterThan()
 *
 * @return bool
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
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'greaterThan' => 
      array (
        'name' => 'greaterThan',
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
            'startLine' => 159,
            'endLine' => 159,
            'startColumn' => 33,
            'endColumn' => 37,
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
 * Determines if the instance is greater (after) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return bool
 */',
        'startLine' => 159,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isAfter' => 
      array (
        'name' => 'isAfter',
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
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 29,
            'endColumn' => 33,
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
 * Determines if the instance is greater (after) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see greaterThan()
 *
 * @return bool
 */',
        'startLine' => 183,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'gte' => 
      array (
        'name' => 'gte',
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
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 25,
            'endColumn' => 29,
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
 * Determines if the instance is greater (after) than or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see greaterThanOrEqualTo()
 *
 * @return bool
 */',
        'startLine' => 204,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'greaterThanOrEqualTo' => 
      array (
        'name' => 'greaterThanOrEqualTo',
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
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 42,
            'endColumn' => 46,
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
 * Determines if the instance is greater (after) than or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return bool
 */',
        'startLine' => 223,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'lt' => 
      array (
        'name' => 'lt',
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
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 24,
            'endColumn' => 28,
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
 * Determines if the instance is less (before) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see lessThan()
 *
 * @return bool
 */',
        'startLine' => 247,
        'endLine' => 250,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'lessThan' => 
      array (
        'name' => 'lessThan',
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
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 30,
            'endColumn' => 34,
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
 * Determines if the instance is less (before) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return bool
 */',
        'startLine' => 266,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isBefore' => 
      array (
        'name' => 'isBefore',
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
            'startLine' => 290,
            'endLine' => 290,
            'startColumn' => 30,
            'endColumn' => 34,
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
 * Determines if the instance is less (before) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see lessThan()
 *
 * @return bool
 */',
        'startLine' => 290,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'lte' => 
      array (
        'name' => 'lte',
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
            'startLine' => 311,
            'endLine' => 311,
            'startColumn' => 25,
            'endColumn' => 29,
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
 * Determines if the instance is less (before) or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @see lessThanOrEqualTo()
 *
 * @return bool
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
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'lessThanOrEqualTo' => 
      array (
        'name' => 'lessThanOrEqualTo',
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
            'startLine' => 330,
            'endLine' => 330,
            'startColumn' => 39,
            'endColumn' => 43,
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
 * Determines if the instance is less (before) or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
 *
 * @return bool
 */',
        'startLine' => 330,
        'endLine' => 336,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'between' => 
      array (
        'name' => 'between',
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
            'startLine' => 359,
            'endLine' => 359,
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
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'equal' => 
          array (
            'name' => 'equal',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 359,
                'endLine' => 359,
                'startTokenPos' => 570,
                'startFilePos' => 10813,
                'endTokenPos' => 570,
                'endFilePos' => 10816,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 45,
            'endColumn' => 57,
            'parameterIndex' => 2,
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
 * Determines if the instance is between two others.
 *
 * The third argument allow you to specify if bounds are included or not (true by default)
 * but for when you including/excluding bounds may produce different results in your application,
 * we recommend to use the explicit methods ->betweenIncluded() or ->betweenExcluded() instead.
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->between(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->between(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->between(\'2018-07-25\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->between(\'2018-07-25\', \'2018-08-01\', false); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
 * @param bool                                    $equal Indicates if an equal to comparison should be done
 *
 * @return bool
 */',
        'startLine' => 359,
        'endLine' => 373,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'betweenIncluded' => 
      array (
        'name' => 'betweenIncluded',
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
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 37,
            'endColumn' => 42,
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
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 45,
            'endColumn' => 50,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is between two others, bounds included.
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-07-25\', \'2018-08-01\'); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
 *
 * @return bool
 */',
        'startLine' => 390,
        'endLine' => 393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'betweenExcluded' => 
      array (
        'name' => 'betweenExcluded',
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
            'startLine' => 410,
            'endLine' => 410,
            'startColumn' => 37,
            'endColumn' => 42,
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
            'startLine' => 410,
            'endLine' => 410,
            'startColumn' => 45,
            'endColumn' => 50,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is between two others, bounds excluded.
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-07-25\', \'2018-08-01\'); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
 *
 * @return bool
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
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isBetween' => 
      array (
        'name' => 'isBetween',
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
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 31,
            'endColumn' => 36,
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
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'equal' => 
          array (
            'name' => 'equal',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 432,
                'endLine' => 432,
                'startTokenPos' => 772,
                'startFilePos' => 13322,
                'endTokenPos' => 772,
                'endFilePos' => 13325,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 47,
            'endColumn' => 59,
            'parameterIndex' => 2,
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
 * Determines if the instance is between two others
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-25\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-25\', \'2018-08-01\', false); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
 * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
 * @param bool                                    $equal Indicates if an equal to comparison should be done
 *
 * @return bool
 */',
        'startLine' => 432,
        'endLine' => 435,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isWeekday' => 
      array (
        'name' => 'isWeekday',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is a weekday.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-07-14\')->isWeekday(); // false
 * Carbon::parse(\'2019-07-15\')->isWeekday(); // true
 * ```
 *
 * @return bool
 */',
        'startLine' => 448,
        'endLine' => 451,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isWeekend' => 
      array (
        'name' => 'isWeekend',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is a weekend day.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-07-14\')->isWeekend(); // true
 * Carbon::parse(\'2019-07-15\')->isWeekend(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 464,
        'endLine' => 467,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isYesterday' => 
      array (
        'name' => 'isYesterday',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is yesterday.
 *
 * @example
 * ```
 * Carbon::yesterday()->isYesterday(); // true
 * Carbon::tomorrow()->isYesterday(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 480,
        'endLine' => 483,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isToday' => 
      array (
        'name' => 'isToday',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is today.
 *
 * @example
 * ```
 * Carbon::today()->isToday(); // true
 * Carbon::tomorrow()->isToday(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 496,
        'endLine' => 499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isTomorrow' => 
      array (
        'name' => 'isTomorrow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is tomorrow.
 *
 * @example
 * ```
 * Carbon::tomorrow()->isTomorrow(); // true
 * Carbon::yesterday()->isTomorrow(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 512,
        'endLine' => 515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isFuture' => 
      array (
        'name' => 'isFuture',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is in the future, ie. greater (after) than now.
 *
 * @example
 * ```
 * Carbon::now()->addHours(5)->isFuture(); // true
 * Carbon::now()->subHours(5)->isFuture(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 528,
        'endLine' => 531,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isPast' => 
      array (
        'name' => 'isPast',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is in the past, ie. less (before) than now.
 *
 * @example
 * ```
 * Carbon::now()->subHours(5)->isPast(); // true
 * Carbon::now()->addHours(5)->isPast(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 544,
        'endLine' => 547,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isLeapYear' => 
      array (
        'name' => 'isLeapYear',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is a leap year.
 *
 * @example
 * ```
 * Carbon::parse(\'2020-01-01\')->isLeapYear(); // true
 * Carbon::parse(\'2019-01-01\')->isLeapYear(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 560,
        'endLine' => 563,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isLongYear' => 
      array (
        'name' => 'isLongYear',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is a long year (using calendar year).
 *
 * ⚠️ This method completely ignores month and day to use the numeric year number,
 * it\'s not correct if the exact date matters. For instance as `2019-12-30` is already
 * in the first week of the 2020 year, if you want to know from this date if ISO week
 * year 2020 is a long year, use `isLongIsoYear` instead.
 *
 * @example
 * ```
 * Carbon::create(2015)->isLongYear(); // true
 * Carbon::create(2016)->isLongYear(); // false
 * ```
 *
 * @see https://en.wikipedia.org/wiki/ISO_8601#Week_dates
 *
 * @return bool
 */',
        'startLine' => 583,
        'endLine' => 586,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isLongIsoYear' => 
      array (
        'name' => 'isLongIsoYear',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the instance is a long year (using ISO 8601 year).
 *
 * @example
 * ```
 * Carbon::parse(\'2015-01-01\')->isLongIsoYear(); // true
 * Carbon::parse(\'2016-01-01\')->isLongIsoYear(); // true
 * Carbon::parse(\'2016-01-03\')->isLongIsoYear(); // false
 * Carbon::parse(\'2019-12-29\')->isLongIsoYear(); // false
 * Carbon::parse(\'2019-12-30\')->isLongIsoYear(); // true
 * ```
 *
 * @see https://en.wikipedia.org/wiki/ISO_8601#Week_dates
 *
 * @return bool
 */',
        'startLine' => 604,
        'endLine' => 607,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isSameAs' => 
      array (
        'name' => 'isSameAs',
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
            'startLine' => 623,
            'endLine' => 623,
            'startColumn' => 30,
            'endColumn' => 36,
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
                'startLine' => 623,
                'endLine' => 623,
                'startTokenPos' => 1172,
                'startFilePos' => 18399,
                'endTokenPos' => 1172,
                'endFilePos' => 18402,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 623,
            'endLine' => 623,
            'startColumn' => 39,
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
 * Compares the formatted values of the two dates.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-06-13\')->isSameAs(\'Y-d\', Carbon::parse(\'2019-12-13\')); // true
 * Carbon::parse(\'2019-06-13\')->isSameAs(\'Y-d\', Carbon::parse(\'2019-06-14\')); // false
 * ```
 *
 * @param string                                        $format date formats to compare.
 * @param \\Carbon\\Carbon|\\DateTimeInterface|string|null $date   instance to compare with or null to use current day.
 *
 * @return bool
 */',
        'startLine' => 623,
        'endLine' => 626,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isSameUnit' => 
      array (
        'name' => 'isSameUnit',
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
            'startLine' => 644,
            'endLine' => 644,
            'startColumn' => 32,
            'endColumn' => 36,
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
                'startLine' => 644,
                'endLine' => 644,
                'startTokenPos' => 1218,
                'startFilePos' => 19145,
                'endTokenPos' => 1218,
                'endFilePos' => 19148,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 644,
            'endLine' => 644,
            'startColumn' => 39,
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
 * Determines if the instance is in the current unit given.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-01-13\')->isSameUnit(\'year\', Carbon::parse(\'2019-12-25\')); // true
 * Carbon::parse(\'2018-12-13\')->isSameUnit(\'year\', Carbon::parse(\'2019-12-25\')); // false
 * ```
 *
 * @param string                                 $unit singular unit string
 * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date instance to compare with or null to use current day.
 *
 * @throws BadComparisonUnitException
 *
 * @return bool
 */',
        'startLine' => 644,
        'endLine' => 678,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isCurrentUnit' => 
      array (
        'name' => 'isCurrentUnit',
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
            'startLine' => 695,
            'endLine' => 695,
            'startColumn' => 35,
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
 * Determines if the instance is in the current unit given.
 *
 * @example
 * ```
 * Carbon::now()->isCurrentUnit(\'hour\'); // true
 * Carbon::now()->subHours(2)->isCurrentUnit(\'hour\'); // false
 * ```
 *
 * @param string $unit The unit to test.
 *
 * @throws BadMethodCallException
 *
 * @return bool
 */',
        'startLine' => 695,
        'endLine' => 698,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isSameQuarter' => 
      array (
        'name' => 'isSameQuarter',
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
                'startLine' => 716,
                'endLine' => 716,
                'startTokenPos' => 1449,
                'startFilePos' => 21449,
                'endTokenPos' => 1449,
                'endFilePos' => 21452,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'ofSameYear' => 
          array (
            'name' => 'ofSameYear',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 716,
                'endLine' => 716,
                'startTokenPos' => 1456,
                'startFilePos' => 21469,
                'endTokenPos' => 1456,
                'endFilePos' => 21472,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 49,
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
 * Checks if the passed in date is in the same quarter as the instance quarter (and year if needed).
 *
 * @example
 * ```
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2019-03-01\')); // true
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2019-04-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2018-03-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2018-03-01\'), false); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|string|null $date       The instance to compare with or null to use current day.
 * @param bool                                          $ofSameYear Check if it is the same month in the same year.
 *
 * @return bool
 */',
        'startLine' => 716,
        'endLine' => 721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isSameMonth' => 
      array (
        'name' => 'isSameMonth',
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
                'startLine' => 739,
                'endLine' => 739,
                'startTokenPos' => 1516,
                'startFilePos' => 22441,
                'endTokenPos' => 1516,
                'endFilePos' => 22444,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 739,
            'endLine' => 739,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'ofSameYear' => 
          array (
            'name' => 'ofSameYear',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 739,
                'endLine' => 739,
                'startTokenPos' => 1523,
                'startFilePos' => 22461,
                'endTokenPos' => 1523,
                'endFilePos' => 22464,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 739,
            'endLine' => 739,
            'startColumn' => 47,
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
 * Checks if the passed in date is in the same month as the instance´s month.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2019-01-01\')); // true
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2019-02-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2018-01-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2018-01-01\'), false); // true
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date       The instance to compare with or null to use the current date.
 * @param bool                                   $ofSameYear Check if it is the same month in the same year.
 *
 * @return bool
 */',
        'startLine' => 739,
        'endLine' => 742,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isDayOfWeek' => 
      array (
        'name' => 'isDayOfWeek',
        'parameters' => 
        array (
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
            'startLine' => 759,
            'endLine' => 759,
            'startColumn' => 33,
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
 * Checks if this day is a specific day of the week.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(Carbon::WEDNESDAY); // true
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(Carbon::FRIDAY); // false
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(\'Wednesday\'); // true
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(\'Friday\'); // false
 * ```
 *
 * @param int $dayOfWeek
 *
 * @return bool
 */',
        'startLine' => 759,
        'endLine' => 766,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isBirthday' => 
      array (
        'name' => 'isBirthday',
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
                'startLine' => 783,
                'endLine' => 783,
                'startTokenPos' => 1632,
                'startFilePos' => 23912,
                'endTokenPos' => 1632,
                'endFilePos' => 23915,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 783,
            'endLine' => 783,
            'startColumn' => 32,
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
 * Check if its the birthday. Compares the date/month values of the two dates.
 *
 * @example
 * ```
 * Carbon::now()->subYears(5)->isBirthday(); // true
 * Carbon::now()->subYears(5)->subDay()->isBirthday(); // false
 * Carbon::parse(\'2019-06-05\')->isBirthday(Carbon::parse(\'2001-06-05\')); // true
 * Carbon::parse(\'2019-06-05\')->isBirthday(Carbon::parse(\'2001-06-06\')); // false
 * ```
 *
 * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date The instance to compare with or null to use current day.
 *
 * @return bool
 */',
        'startLine' => 783,
        'endLine' => 786,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isLastOfMonth' => 
      array (
        'name' => 'isLastOfMonth',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if today is the last day of the Month
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28\')->isLastOfMonth(); // true
 * Carbon::parse(\'2019-03-28\')->isLastOfMonth(); // false
 * Carbon::parse(\'2019-03-30\')->isLastOfMonth(); // false
 * Carbon::parse(\'2019-03-31\')->isLastOfMonth(); // true
 * Carbon::parse(\'2019-04-30\')->isLastOfMonth(); // true
 * ```
 *
 * @return bool
 */',
        'startLine' => 802,
        'endLine' => 805,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isStartOfDay' => 
      array (
        'name' => 'isStartOfDay',
        'parameters' => 
        array (
          'checkMicroseconds' => 
          array (
            'name' => 'checkMicroseconds',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 823,
                'endLine' => 823,
                'startTokenPos' => 1691,
                'startFilePos' => 25178,
                'endTokenPos' => 1691,
                'endFilePos' => 25182,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 823,
            'endLine' => 823,
            'startColumn' => 34,
            'endColumn' => 59,
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
 * Check if the instance is start of day / midnight.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 00:00:00\')->isStartOfDay(); // true
 * Carbon::parse(\'2019-02-28 00:00:00.999999\')->isStartOfDay(); // true
 * Carbon::parse(\'2019-02-28 00:00:01\')->isStartOfDay(); // false
 * Carbon::parse(\'2019-02-28 00:00:00.000000\')->isStartOfDay(true); // true
 * Carbon::parse(\'2019-02-28 00:00:00.000012\')->isStartOfDay(true); // false
 * ```
 *
 * @param bool $checkMicroseconds check time at microseconds precision
 *
 * @return bool
 */',
        'startLine' => 823,
        'endLine' => 829,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isEndOfDay' => 
      array (
        'name' => 'isEndOfDay',
        'parameters' => 
        array (
          'checkMicroseconds' => 
          array (
            'name' => 'checkMicroseconds',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 849,
                'endLine' => 849,
                'startTokenPos' => 1743,
                'startFilePos' => 26178,
                'endTokenPos' => 1743,
                'endFilePos' => 26182,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 849,
            'endLine' => 849,
            'startColumn' => 32,
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
 * Check if the instance is end of day.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 23:59:59.999999\')->isEndOfDay(); // true
 * Carbon::parse(\'2019-02-28 23:59:59.123456\')->isEndOfDay(); // true
 * Carbon::parse(\'2019-02-28 23:59:59\')->isEndOfDay(); // true
 * Carbon::parse(\'2019-02-28 23:59:58.999999\')->isEndOfDay(); // false
 * Carbon::parse(\'2019-02-28 23:59:59.999999\')->isEndOfDay(true); // true
 * Carbon::parse(\'2019-02-28 23:59:59.123456\')->isEndOfDay(true); // false
 * Carbon::parse(\'2019-02-28 23:59:59\')->isEndOfDay(true); // false
 * ```
 *
 * @param bool $checkMicroseconds check time at microseconds precision
 *
 * @return bool
 */',
        'startLine' => 849,
        'endLine' => 855,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isMidnight' => 
      array (
        'name' => 'isMidnight',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if the instance is start of day / midnight.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 00:00:00\')->isMidnight(); // true
 * Carbon::parse(\'2019-02-28 00:00:00.999999\')->isMidnight(); // true
 * Carbon::parse(\'2019-02-28 00:00:01\')->isMidnight(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 869,
        'endLine' => 872,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isMidday' => 
      array (
        'name' => 'isMidday',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if the instance is midday.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 11:59:59.999999\')->isMidday(); // false
 * Carbon::parse(\'2019-02-28 12:00:00\')->isMidday(); // true
 * Carbon::parse(\'2019-02-28 12:00:00.999999\')->isMidday(); // true
 * Carbon::parse(\'2019-02-28 12:00:01\')->isMidday(); // false
 * ```
 *
 * @return bool
 */',
        'startLine' => 887,
        'endLine' => 891,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'hasFormat' => 
      array (
        'name' => 'hasFormat',
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
            'startLine' => 907,
            'endLine' => 907,
            'startColumn' => 38,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startColumn' => 45,
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
 * Checks if the (date)time string is in a given format.
 *
 * @example
 * ```
 * Carbon::hasFormat(\'11:12:45\', \'h:i:s\'); // true
 * Carbon::hasFormat(\'13:12:45\', \'h:i:s\'); // false
 * ```
 *
 * @param string $date
 * @param string $format
 *
 * @return bool
 */',
        'startLine' => 907,
        'endLine' => 914,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'hasFormatWithModifiers' => 
      array (
        'name' => 'hasFormatWithModifiers',
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
            'startLine' => 930,
            'endLine' => 930,
            'startColumn' => 51,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 930,
            'endLine' => 930,
            'startColumn' => 58,
            'endColumn' => 64,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the (date)time string is in a given format.
 *
 * @example
 * ```
 * Carbon::hasFormatWithModifiers(\'31/08/2015\', \'d#m#Y\'); // true
 * Carbon::hasFormatWithModifiers(\'31/08/2015\', \'m#d#Y\'); // false
 * ```
 *
 * @param string $date
 * @param string $format
 *
 * @return bool
 */',
        'startLine' => 930,
        'endLine' => 933,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'canBeCreatedFromFormat' => 
      array (
        'name' => 'canBeCreatedFromFormat',
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
            'startLine' => 950,
            'endLine' => 950,
            'startColumn' => 51,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 950,
            'endLine' => 950,
            'startColumn' => 58,
            'endColumn' => 64,
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
 * Checks if the (date)time string is in a given format and valid to create a
 * new instance.
 *
 * @example
 * ```
 * Carbon::canBeCreatedFromFormat(\'11:12:45\', \'h:i:s\'); // true
 * Carbon::canBeCreatedFromFormat(\'13:12:45\', \'h:i:s\'); // false
 * ```
 *
 * @param string $date
 * @param string $format
 *
 * @return bool
 */',
        'startLine' => 950,
        'endLine' => 963,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'is' => 
      array (
        'name' => 'is',
        'parameters' => 
        array (
          'tester' => 
          array (
            'name' => 'tester',
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
            'startLine' => 989,
            'endLine' => 989,
            'startColumn' => 24,
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
 * Returns true if the current date matches the given string.
 *
 * @example
 * ```
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2018\')); // false
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019-06\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'06-02\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019-06-02\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'Sunday\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'June\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23:45\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23:00\')); // false
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12h\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 15:23:45\')->is(\'3pm\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 15:23:45\')->is(\'3am\')); // false
 * ```
 *
 * @param string $tester day name, month name, hour, date, etc. as string
 *
 * @return bool
 */',
        'startLine' => 989,
        'endLine' => 1058,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'matchFormatPattern' => 
      array (
        'name' => 'matchFormatPattern',
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
            'startLine' => 1076,
            'endLine' => 1076,
            'startColumn' => 48,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
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
            'startLine' => 1076,
            'endLine' => 1076,
            'startColumn' => 62,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'replacements' => 
          array (
            'name' => 'replacements',
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
            'startLine' => 1076,
            'endLine' => 1076,
            'startColumn' => 78,
            'endColumn' => 96,
            'parameterIndex' => 2,
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
 * Checks if the (date)time string is in a given format with
 * given list of pattern replacements.
 *
 * @example
 * ```
 * Carbon::hasFormat(\'11:12:45\', \'h:i:s\'); // true
 * Carbon::hasFormat(\'13:12:45\', \'h:i:s\'); // false
 * ```
 *
 * @param string $date
 * @param string $format
 * @param array  $replacements
 *
 * @return bool
 */',
        'startLine' => 1076,
        'endLine' => 1094,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isStartOfTime' => 
      array (
        'name' => 'isStartOfTime',
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
 * Returns true if the date was created using CarbonImmutable::startOfTime()
 *
 * @return bool
 */',
        'startLine' => 1101,
        'endLine' => 1104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'isEndOfTime' => 
      array (
        'name' => 'isEndOfTime',
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
 * Returns true if the date was created using CarbonImmutable::endOfTime()
 *
 * @return bool
 */',
        'startLine' => 1111,
        'endLine' => 1114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'discourageNull' => 
      array (
        'name' => 'discourageNull',
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
            'startLine' => 1116,
            'endLine' => 1116,
            'startColumn' => 37,
            'endColumn' => 42,
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
        'startLine' => 1116,
        'endLine' => 1121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
        'aliasName' => NULL,
      ),
      'discourageBoolean' => 
      array (
        'name' => 'discourageBoolean',
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
            'startLine' => 1123,
            'endLine' => 1123,
            'startColumn' => 40,
            'endColumn' => 45,
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
        'startLine' => 1123,
        'endLine' => 1128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Comparison',
        'implementingClassName' => 'Carbon\\Traits\\Comparison',
        'currentClassName' => 'Carbon\\Traits\\Comparison',
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