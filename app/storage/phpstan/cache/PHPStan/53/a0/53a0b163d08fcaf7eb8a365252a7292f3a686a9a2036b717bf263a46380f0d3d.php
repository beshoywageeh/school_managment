<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/sanctum/src/HasApiTokens.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Sanctum\HasApiTokens
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-db37944ccc61e5fe964341aa97552c978b165441f146301d8f2c145cdb7b19ee-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Sanctum\\HasApiTokens',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/sanctum/src/HasApiTokens.php',
      ),
    ),
    'namespace' => 'Laravel\\Sanctum',
    'name' => 'Laravel\\Sanctum\\HasApiTokens',
    'shortName' => 'HasApiTokens',
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
    'endLine' => 97,
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
      'accessToken' => 
      array (
        'declaringClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'name' => 'accessToken',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The access token the user is using for the current request.
 *
 * @var \\Laravel\\Sanctum\\Contracts\\HasAbilities
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
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
      'tokens' => 
      array (
        'name' => 'tokens',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the access tokens that belong to model.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphMany
 */',
        'startLine' => 22,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'currentClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'tokenCan' => 
      array (
        'name' => 'tokenCan',
        'parameters' => 
        array (
          'ability' => 
          array (
            'name' => 'ability',
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
            'startLine' => 33,
            'endLine' => 33,
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
 * Determine if the current API token has a given scope.
 *
 * @param  string  $ability
 * @return bool
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
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'currentClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'createToken' => 
      array (
        'name' => 'createToken',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'abilities' => 
          array (
            'name' => 'abilities',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 46,
                'endLine' => 46,
                'startTokenPos' => 113,
                'startFilePos' => 1113,
                'endTokenPos' => 115,
                'endFilePos' => 1117,
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 47,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'expiresAt' => 
          array (
            'name' => 'expiresAt',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 46,
                'endLine' => 46,
                'startTokenPos' => 124,
                'startFilePos' => 1151,
                'endTokenPos' => 124,
                'endFilePos' => 1154,
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
                      'name' => 'DateTimeInterface',
                      'isIdentifier' => false,
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 73,
            'endColumn' => 107,
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
 * Create a new personal access token for the user.
 *
 * @param  string  $name
 * @param  array  $abilities
 * @param  \\DateTimeInterface|null  $expiresAt
 * @return \\Laravel\\Sanctum\\NewAccessToken
 */',
        'startLine' => 46,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'currentClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'generateTokenString' => 
      array (
        'name' => 'generateTokenString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generate the token string.
 *
 * @return string
 */',
        'startLine' => 65,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'currentClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'currentAccessToken' => 
      array (
        'name' => 'currentAccessToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the access token currently associated with the user.
 *
 * @return \\Laravel\\Sanctum\\Contracts\\HasAbilities
 */',
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'currentClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'withAccessToken' => 
      array (
        'name' => 'withAccessToken',
        'parameters' => 
        array (
          'accessToken' => 
          array (
            'name' => 'accessToken',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 37,
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
 * Set the current access token for the user.
 *
 * @param  \\Laravel\\Sanctum\\Contracts\\HasAbilities  $accessToken
 * @return $this
 */',
        'startLine' => 91,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Sanctum',
        'declaringClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Sanctum\\HasApiTokens',
        'currentClassName' => 'Laravel\\Sanctum\\HasApiTokens',
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