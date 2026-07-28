<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/Middleware/Authenticate.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\Middleware\Authenticate
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c7f722268c6dceaec5ed465c466b3c73c7e14e093a425d33a51cdff6ec50a56c-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/Middleware/Authenticate.php',
      ),
    ),
    'namespace' => 'Illuminate\\Auth\\Middleware',
    'name' => 'Illuminate\\Auth\\Middleware\\Authenticate',
    'shortName' => 'Authenticate',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 110,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'auth' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'name' => 'auth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The authentication factory instance.
 *
 * @var \\Illuminate\\Contracts\\Auth\\Factory
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 20,
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
          'auth' => 
          array (
            'name' => 'auth',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Factory',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
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
 * Create a new middleware instance.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Factory  $auth
 * @return void
 */',
        'startLine' => 26,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'aliasName' => NULL,
      ),
      'using' => 
      array (
        'name' => 'using',
        'parameters' => 
        array (
          'guard' => 
          array (
            'name' => 'guard',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'others' => 
          array (
            'name' => 'others',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 42,
            'endColumn' => 51,
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
 * Specify the guards for the middleware.
 *
 * @param  string  $guard
 * @param  string  $others
 * @return string
 */',
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'next' => 
          array (
            'name' => 'next',
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'guards' => 
          array (
            'name' => 'guards',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 53,
            'endColumn' => 62,
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
 * Handle an incoming request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Closure  $next
 * @param  string[]  ...$guards
 * @return mixed
 *
 * @throws \\Illuminate\\Auth\\AuthenticationException
 */',
        'startLine' => 53,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'aliasName' => NULL,
      ),
      'authenticate' => 
      array (
        'name' => 'authenticate',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'guards' => 
          array (
            'name' => 'guards',
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 47,
            'endColumn' => 59,
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
 * Determine if the user is logged in to any of the given guards.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  array  $guards
 * @return void
 *
 * @throws \\Illuminate\\Auth\\AuthenticationException
 */',
        'startLine' => 69,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'aliasName' => NULL,
      ),
      'unauthenticated' => 
      array (
        'name' => 'unauthenticated',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'guards' => 
          array (
            'name' => 'guards',
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
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 50,
            'endColumn' => 62,
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
 * Handle an unauthenticated user.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  array  $guards
 * @return void
 *
 * @throws \\Illuminate\\Auth\\AuthenticationException
 */',
        'startLine' => 93,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'aliasName' => NULL,
      ),
      'redirectTo' => 
      array (
        'name' => 'redirectTo',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 35,
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
 * Get the path the user should be redirected to when they are not authenticated.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return string|null
 */',
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\Authenticate',
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