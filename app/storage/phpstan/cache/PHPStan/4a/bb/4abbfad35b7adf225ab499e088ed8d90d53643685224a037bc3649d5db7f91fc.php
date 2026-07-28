<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Middleware\HandleCors
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e226a7a59fba5d6796423db5917dd383d17a3245bd9ac41b3ee5ec53eac09028-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php',
      ),
    ),
    'namespace' => 'Illuminate\\Http\\Middleware',
    'name' => 'Illuminate\\Http\\Middleware\\HandleCors',
    'shortName' => 'HandleCors',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 112,
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
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The container instance.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cors' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'name' => 'cors',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The CORS service instance.
 *
 * @var \\Fruitcake\\Cors\\CorsService
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
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
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
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
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cors' => 
          array (
            'name' => 'cors',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Fruitcake\\Cors\\CorsService',
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
            'startColumn' => 55,
            'endColumn' => 71,
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
 * Create a new middleware instance.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @param  \\Fruitcake\\Cors\\CorsService  $cors
 * @return void
 */',
        'startLine' => 33,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
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
            'startLine' => 46,
            'endLine' => 46,
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
            'startLine' => 46,
            'endLine' => 46,
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
 * Handle the incoming request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Closure  $next
 * @return \\Illuminate\\Http\\Response
 */',
        'startLine' => 46,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'aliasName' => NULL,
      ),
      'hasMatchingPath' => 
      array (
        'name' => 'hasMatchingPath',
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
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 40,
            'endColumn' => 55,
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
 * Get the path from the configuration to determine if the CORS service should run.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return bool
 */',
        'startLine' => 77,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'aliasName' => NULL,
      ),
      'getPathsByHost' => 
      array (
        'name' => 'getPathsByHost',
        'parameters' => 
        array (
          'host' => 
          array (
            'name' => 'host',
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
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 39,
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
 * Get the CORS paths for the given host.
 *
 * @param  string  $host
 * @return array
 */',
        'startLine' => 100,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\HandleCors',
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