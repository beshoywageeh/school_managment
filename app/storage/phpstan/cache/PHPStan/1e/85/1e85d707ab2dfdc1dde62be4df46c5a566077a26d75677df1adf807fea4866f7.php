<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/sanctum/src/Sanctum.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Sanctum\Sanctum
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4fd77371af30171de1b1f0fcff8b2f463816085d0baad2904c41daa82c4e978b-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Sanctum\\Sanctum',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/sanctum/src/Sanctum.php',
      ),
    ),
    'namespace' => 'Laravel\\Sanctum',
    'name' => 'Laravel\\Sanctum\\Sanctum',
    'shortName' => 'Sanctum',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 146,
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
      'personalAccessTokenModel' => 
      array (
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'name' => 'personalAccessTokenModel',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Laravel\\Sanctum\\PersonalAccessToken\'',
          'attributes' => 
          array (
            'startLine' => 14,
            'endLine' => 14,
            'startTokenPos' => 28,
            'startFilePos' => 205,
            'endTokenPos' => 28,
            'endFilePos' => 243,
          ),
        ),
        'docComment' => '/**
 * The personal access client model class name.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 86,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'accessTokenRetrievalCallback' => 
      array (
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'name' => 'accessTokenRetrievalCallback',
        'modifiers' => 17,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A callback that can get the token from the request.
 *
 * @var callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'accessTokenAuthenticationCallback' => 
      array (
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'name' => 'accessTokenAuthenticationCallback',
        'modifiers' => 17,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A callback that can add to the validation of the access token.
 *
 * @var callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 53,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'runsMigrations' => 
      array (
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'name' => 'runsMigrations',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 59,
            'startFilePos' => 709,
            'endTokenPos' => 59,
            'endFilePos' => 712,
          ),
        ),
        'docComment' => '/**
 * Indicates if Sanctum\'s migrations will be run.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 41,
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
      'currentApplicationUrlWithPort' => 
      array (
        'name' => 'currentApplicationUrlWithPort',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current application URL from the "APP_URL" environment variable - with port.
 *
 * @return string
 */',
        'startLine' => 42,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
        'aliasName' => NULL,
      ),
      'actingAs' => 
      array (
        'name' => 'actingAs',
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'abilities' => 
          array (
            'name' => 'abilities',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 152,
                'startFilePos' => 1479,
                'endTokenPos' => 153,
                'endFilePos' => 1480,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 44,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'guard' => 
          array (
            'name' => 'guard',
            'default' => 
            array (
              'code' => '\'sanctum\'',
              'attributes' => 
              array (
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 160,
                'startFilePos' => 1492,
                'endTokenPos' => 160,
                'endFilePos' => 1500,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 61,
            'endColumn' => 78,
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
 * Set the current user for the application with the given abilities.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable|\\Laravel\\Sanctum\\HasApiTokens  $user
 * @param  array  $abilities
 * @param  string  $guard
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable
 */',
        'startLine' => 57,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
        'aliasName' => NULL,
      ),
      'usePersonalAccessTokenModel' => 
      array (
        'name' => 'usePersonalAccessTokenModel',
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
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 56,
            'endColumn' => 61,
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
 * Set the personal access token model name.
 *
 * @param  string  $model
 * @return void
 */',
        'startLine' => 88,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
        'aliasName' => NULL,
      ),
      'getAccessTokenFromRequestUsing' => 
      array (
        'name' => 'getAccessTokenFromRequestUsing',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
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
                      'name' => 'callable',
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
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 59,
            'endColumn' => 77,
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
 * Specify a callback that should be used to fetch the access token from the request.
 *
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 99,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
        'aliasName' => NULL,
      ),
      'authenticateAccessTokensUsing' => 
      array (
        'name' => 'authenticateAccessTokensUsing',
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 58,
            'endColumn' => 75,
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
 * Specify a callback that should be used to authenticate access tokens.
 *
 * @param  callable  $callback
 * @return void
 */',
        'startLine' => 110,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
        'aliasName' => NULL,
      ),
      'shouldRunMigrations' => 
      array (
        'name' => 'shouldRunMigrations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if Sanctum\'s migrations should be run.
 *
 * @return bool
 */',
        'startLine' => 120,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
        'aliasName' => NULL,
      ),
      'ignoreMigrations' => 
      array (
        'name' => 'ignoreMigrations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Configure Sanctum to not register its migrations.
 *
 * @return static
 */',
        'startLine' => 130,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
        'aliasName' => NULL,
      ),
      'personalAccessTokenModel' => 
      array (
        'name' => 'personalAccessTokenModel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the token model class name.
 *
 * @return string
 */',
        'startLine' => 142,
        'endLine' => 145,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\Sanctum',
        'implementingClassName' => 'Laravel\\Sanctum\\Sanctum',
        'currentClassName' => 'Laravel\\Sanctum\\Sanctum',
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