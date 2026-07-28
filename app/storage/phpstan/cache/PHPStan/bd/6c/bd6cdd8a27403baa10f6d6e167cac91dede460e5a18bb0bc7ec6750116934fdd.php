<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Auth/Access/AuthorizesRequests.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Auth\Access\AuthorizesRequests
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-8d325d8ac1fabddae0eb8e09cb609d8e5ee3759a745e8192a76c160b333ce539',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Auth/Access/AuthorizesRequests.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
    'name' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
    'shortName' => 'AuthorizesRequests',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 131,
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
      'authorize' => 
      array (
        'name' => 'authorize',
        'parameters' => 
        array (
          'ability' => 
          array (
            'name' => 'ability',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 19,
                'endLine' => 19,
                'startTokenPos' => 38,
                'startFilePos' => 469,
                'endTokenPos' => 39,
                'endFilePos' => 470,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 41,
            'endColumn' => 55,
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
 * Authorize a given action for the current user.
 *
 * @param  mixed  $ability
 * @param  mixed|array  $arguments
 * @return \\Illuminate\\Auth\\Access\\Response
 *
 * @throws \\Illuminate\\Auth\\Access\\AuthorizationException
 */',
        'startLine' => 19,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
        'declaringClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'implementingClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'currentClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'aliasName' => NULL,
      ),
      'authorizeForUser' => 
      array (
        'name' => 'authorizeForUser',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 38,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ability' => 
          array (
            'name' => 'ability',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 36,
                'endLine' => 36,
                'startTokenPos' => 102,
                'startFilePos' => 1033,
                'endTokenPos' => 103,
                'endFilePos' => 1034,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 55,
            'endColumn' => 69,
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
 * Authorize a given action for a user.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable|mixed  $user
 * @param  mixed  $ability
 * @param  mixed|array  $arguments
 * @return \\Illuminate\\Auth\\Access\\Response
 *
 * @throws \\Illuminate\\Auth\\Access\\AuthorizationException
 */',
        'startLine' => 36,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
        'declaringClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'implementingClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'currentClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'aliasName' => NULL,
      ),
      'parseAbilityAndArguments' => 
      array (
        'name' => 'parseAbilityAndArguments',
        'parameters' => 
        array (
          'ability' => 
          array (
            'name' => 'ability',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 49,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 59,
            'endColumn' => 68,
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
 * Guesses the ability\'s name if it wasn\'t provided.
 *
 * @param  mixed  $ability
 * @param  mixed|array  $arguments
 * @return array
 */',
        'startLine' => 50,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
        'declaringClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'implementingClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'currentClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'aliasName' => NULL,
      ),
      'normalizeGuessedAbilityName' => 
      array (
        'name' => 'normalizeGuessedAbilityName',
        'parameters' => 
        array (
          'ability' => 
          array (
            'name' => 'ability',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 67,
            'endLine' => 67,
            'startColumn' => 52,
            'endColumn' => 59,
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
 * Normalize the ability name that has been guessed from the method name.
 *
 * @param  string  $ability
 * @return string
 */',
        'startLine' => 67,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
        'declaringClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'implementingClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'currentClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'aliasName' => NULL,
      ),
      'authorizeResource' => 
      array (
        'name' => 'authorizeResource',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameter' => 
          array (
            'name' => 'parameter',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 83,
                'endLine' => 83,
                'startTokenPos' => 293,
                'startFilePos' => 2405,
                'endTokenPos' => 293,
                'endFilePos' => 2408,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 47,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 83,
                'endLine' => 83,
                'startTokenPos' => 302,
                'startFilePos' => 2428,
                'endTokenPos' => 303,
                'endFilePos' => 2429,
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
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 66,
            'endColumn' => 84,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 83,
                'endLine' => 83,
                'startTokenPos' => 310,
                'startFilePos' => 2443,
                'endTokenPos' => 310,
                'endFilePos' => 2446,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 87,
            'endColumn' => 101,
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
 * Authorize a resource action based on the incoming request.
 *
 * @param  string|array  $model
 * @param  string|array|null  $parameter
 * @param  array  $options
 * @param  \\Illuminate\\Http\\Request|null  $request
 * @return void
 */',
        'startLine' => 83,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
        'declaringClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'implementingClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'currentClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'aliasName' => NULL,
      ),
      'resourceAbilityMap' => 
      array (
        'name' => 'resourceAbilityMap',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the map of resource methods to ability names.
 *
 * @return array
 */',
        'startLine' => 109,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
        'declaringClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'implementingClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'currentClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'aliasName' => NULL,
      ),
      'resourceMethodsWithoutModels' => 
      array (
        'name' => 'resourceMethodsWithoutModels',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the list of resource methods which do not have model parameters.
 *
 * @return array
 */',
        'startLine' => 127,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
        'declaringClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'implementingClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        'currentClassName' => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
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