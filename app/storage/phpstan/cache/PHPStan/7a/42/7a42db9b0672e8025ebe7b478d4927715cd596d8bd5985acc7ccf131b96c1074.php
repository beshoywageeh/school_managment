<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Cache/RateLimiting/Limit.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\RateLimiting\Limit
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ee9d2d4bc1994da74943f6c46d88934cd4ce54e639c91b637bb5077df933c479-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Cache/RateLimiting/Limit.php',
      ),
    ),
    'namespace' => 'Illuminate\\Cache\\RateLimiting',
    'name' => 'Illuminate\\Cache\\RateLimiting\\Limit',
    'shortName' => 'Limit',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 5,
    'endLine' => 132,
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
      'key' => 
      array (
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'name' => 'key',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The rate limit signature key.
 *
 * @var mixed
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 16,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'maxAttempts' => 
      array (
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'name' => 'maxAttempts',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The maximum number of attempts allowed within the given number of minutes.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'decayMinutes' => 
      array (
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'name' => 'decayMinutes',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of minutes until the rate limit is reset.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'responseCallback' => 
      array (
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'name' => 'responseCallback',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The response generator callback.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 29,
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
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 53,
                'startFilePos' => 759,
                'endTokenPos' => 53,
                'endFilePos' => 760,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'maxAttempts' => 
          array (
            'name' => 'maxAttempts',
            'default' => 
            array (
              'code' => '60',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 62,
                'startFilePos' => 782,
                'endTokenPos' => 62,
                'endFilePos' => 783,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 44,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'decayMinutes' => 
          array (
            'name' => 'decayMinutes',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 71,
                'startFilePos' => 806,
                'endTokenPos' => 71,
                'endFilePos' => 806,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 67,
            'endColumn' => 87,
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
 * Create a new limit instance.
 *
 * @param  mixed  $key
 * @param  int  $maxAttempts
 * @param  int  $decayMinutes
 * @return void
 */',
        'startLine' => 43,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'aliasName' => NULL,
      ),
      'perMinute' => 
      array (
        'name' => 'perMinute',
        'parameters' => 
        array (
          'maxAttempts' => 
          array (
            'name' => 'maxAttempts',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 38,
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
        'docComment' => '/**
 * Create a new rate limit.
 *
 * @param  int  $maxAttempts
 * @return static
 */',
        'startLine' => 56,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'aliasName' => NULL,
      ),
      'perMinutes' => 
      array (
        'name' => 'perMinutes',
        'parameters' => 
        array (
          'decayMinutes' => 
          array (
            'name' => 'decayMinutes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'maxAttempts' => 
          array (
            'name' => 'maxAttempts',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 54,
            'endColumn' => 65,
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
 * Create a new rate limit using minutes as decay time.
 *
 * @param  int  $decayMinutes
 * @param  int  $maxAttempts
 * @return static
 */',
        'startLine' => 68,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'aliasName' => NULL,
      ),
      'perHour' => 
      array (
        'name' => 'perHour',
        'parameters' => 
        array (
          'maxAttempts' => 
          array (
            'name' => 'maxAttempts',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'decayHours' => 
          array (
            'name' => 'decayHours',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 80,
                'endLine' => 80,
                'startTokenPos' => 188,
                'startFilePos' => 1699,
                'endTokenPos' => 188,
                'endFilePos' => 1699,
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
            'startColumn' => 50,
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
 * Create a new rate limit using hours as decay time.
 *
 * @param  int  $maxAttempts
 * @param  int  $decayHours
 * @return static
 */',
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'aliasName' => NULL,
      ),
      'perDay' => 
      array (
        'name' => 'perDay',
        'parameters' => 
        array (
          'maxAttempts' => 
          array (
            'name' => 'maxAttempts',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'decayDays' => 
          array (
            'name' => 'decayDays',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 92,
                'endLine' => 92,
                'startTokenPos' => 232,
                'startFilePos' => 2005,
                'endTokenPos' => 232,
                'endFilePos' => 2005,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 49,
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
 * Create a new rate limit using days as decay time.
 *
 * @param  int  $maxAttempts
 * @param  int  $decayDays
 * @return static
 */',
        'startLine' => 92,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'aliasName' => NULL,
      ),
      'none' => 
      array (
        'name' => 'none',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new unlimited rate limit.
 *
 * @return static
 */',
        'startLine' => 102,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'aliasName' => NULL,
      ),
      'by' => 
      array (
        'name' => 'by',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 24,
            'endColumn' => 27,
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
 * Set the key of the rate limit.
 *
 * @param  mixed  $key
 * @return $this
 */',
        'startLine' => 113,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'aliasName' => NULL,
      ),
      'response' => 
      array (
        'name' => 'response',
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
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 30,
            'endColumn' => 47,
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
 * Set the callback that should generate the response when the limit is exceeded.
 *
 * @param  callable  $callback
 * @return $this
 */',
        'startLine' => 126,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
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