<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/TokenGuard.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\TokenGuard
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-9d06f457d3627ce09a86b10414e66bb8c5276cd54cd4596c361ddc4ac6f29847-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Auth\\TokenGuard',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/TokenGuard.php',
      ),
    ),
    'namespace' => 'Illuminate\\Auth',
    'name' => 'Illuminate\\Auth\\TokenGuard',
    'shortName' => 'TokenGuard',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 149,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Auth\\Guard',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Auth\\GuardHelpers',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'request' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'name' => 'request',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The request instance.
 *
 * @var \\Illuminate\\Http\\Request
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'inputKey' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'name' => 'inputKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the query string item from the request containing the API token.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'storageKey' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'name' => 'storageKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the token "column" in persistent storage.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hash' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'name' => 'hash',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 66,
            'startFilePos' => 720,
            'endTokenPos' => 66,
            'endFilePos' => 724,
          ),
        ),
        'docComment' => '/**
 * Indicates if the API token is hashed in storage.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 28,
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
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 9,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'inputKey' => 
          array (
            'name' => 'inputKey',
            'default' => 
            array (
              'code' => '\'api_token\'',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 92,
                'startFilePos' => 1135,
                'endTokenPos' => 92,
                'endFilePos' => 1145,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 9,
            'endColumn' => 31,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'storageKey' => 
          array (
            'name' => 'storageKey',
            'default' => 
            array (
              'code' => '\'api_token\'',
              'attributes' => 
              array (
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 99,
                'startFilePos' => 1170,
                'endTokenPos' => 99,
                'endFilePos' => 1180,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 9,
            'endColumn' => 33,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'hash' => 
          array (
            'name' => 'hash',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 106,
                'startFilePos' => 1199,
                'endTokenPos' => 106,
                'endFilePos' => 1203,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 9,
            'endColumn' => 21,
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
 * Create a new authentication guard.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\UserProvider  $provider
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  string  $inputKey
 * @param  string  $storageKey
 * @param  bool  $hash
 * @return void
 */',
        'startLine' => 51,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
        'aliasName' => NULL,
      ),
      'user' => 
      array (
        'name' => 'user',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the currently authenticated user.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
        'startLine' => 70,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
        'aliasName' => NULL,
      ),
      'getTokenForRequest' => 
      array (
        'name' => 'getTokenForRequest',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the token for the current request.
 *
 * @return string|null
 */',
        'startLine' => 97,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 122,
                'endLine' => 122,
                'startTokenPos' => 417,
                'startFilePos' => 2882,
                'endTokenPos' => 418,
                'endFilePos' => 2883,
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
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 30,
            'endColumn' => 52,
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
 * Validate a user\'s credentials.
 *
 * @param  array  $credentials
 * @return bool
 */',
        'startLine' => 122,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
        'aliasName' => NULL,
      ),
      'setRequest' => 
      array (
        'name' => 'setRequest',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 32,
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
 * Set the current request instance.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return $this
 */',
        'startLine' => 143,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
        'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
        'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
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