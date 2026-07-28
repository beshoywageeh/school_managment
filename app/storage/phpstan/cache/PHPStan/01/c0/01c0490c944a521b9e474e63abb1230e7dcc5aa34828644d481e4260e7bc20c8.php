<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-a5c66e63fa460a912e05e6caa6560798b156b474356df6619bcb4f6b40534b28',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
    'name' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
    'shortName' => 'PreventRequestsDuringMaintenance',
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
    'endLine' => 179,
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
      'app' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'name' => 'app',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The application implementation.
 *
 * @var \\Illuminate\\Contracts\\Foundation\\Application
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'except' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'name' => 'except',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 53,
            'startFilePos' => 594,
            'endTokenPos' => 54,
            'endFilePos' => 595,
          ),
        ),
        'docComment' => '/**
 * The URIs that should be accessible while maintenance mode is enabled.
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 27,
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
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Foundation\\Application',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 33,
            'endColumn' => 48,
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
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return void
 */',
        'startLine' => 33,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'currentClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
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
            'startLine' => 48,
            'endLine' => 48,
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 38,
            'endColumn' => 50,
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
 * Handle an incoming request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Closure  $next
 * @return mixed
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
 * @throws \\ErrorException
 */',
        'startLine' => 48,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'currentClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'aliasName' => NULL,
      ),
      'hasValidBypassCookie' => 
      array (
        'name' => 'hasValidBypassCookie',
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 55,
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
 * Determine if the incoming request has a maintenance mode bypass cookie.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  array  $data
 * @return bool
 */',
        'startLine' => 109,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'currentClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'aliasName' => NULL,
      ),
      'inExceptArray' => 
      array (
        'name' => 'inExceptArray',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 38,
            'endColumn' => 45,
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
 * Determine if the request has a URI that should be accessible in maintenance mode.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return bool
 */',
        'startLine' => 125,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'currentClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'aliasName' => NULL,
      ),
      'bypassResponse' => 
      array (
        'name' => 'bypassResponse',
        'parameters' => 
        array (
          'secret' => 
          array (
            'name' => 'secret',
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
            'startLine' => 146,
            'endLine' => 146,
            'startColumn' => 39,
            'endColumn' => 52,
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
 * Redirect the user back to the root of the application with a maintenance mode bypass cookie.
 *
 * @param  string  $secret
 * @return \\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 146,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'currentClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'aliasName' => NULL,
      ),
      'getHeaders' => 
      array (
        'name' => 'getHeaders',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
 * Get the headers that should be sent with the response.
 *
 * @param  array  $data
 * @return array
 */',
        'startLine' => 159,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'currentClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'aliasName' => NULL,
      ),
      'getExcludedPaths' => 
      array (
        'name' => 'getExcludedPaths',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the URIs that should be accessible even when maintenance mode is enabled.
 *
 * @return array
 */',
        'startLine' => 175,
        'endLine' => 178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'implementingClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
        'currentClassName' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
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