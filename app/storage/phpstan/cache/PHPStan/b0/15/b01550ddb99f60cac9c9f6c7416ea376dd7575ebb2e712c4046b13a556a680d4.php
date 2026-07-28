<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/Passwords/TokenRepositoryInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\Passwords\TokenRepositoryInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c964dfab998d79e1f957d14c2f432fb3d8d3c897140e17d31423a50582eb444e-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/Passwords/TokenRepositoryInterface.php',
      ),
    ),
    'namespace' => 'Illuminate\\Auth\\Passwords',
    'name' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
    'shortName' => 'TokenRepositoryInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 48,
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
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\CanResetPassword',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 15,
            'endLine' => 15,
            'startColumn' => 28,
            'endColumn' => 57,
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
 * Create a new token.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\CanResetPassword  $user
 * @return string
 */',
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Passwords',
        'declaringClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'implementingClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'currentClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'aliasName' => NULL,
      ),
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\CanResetPassword',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 24,
            'endLine' => 24,
            'startColumn' => 28,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'token' => 
          array (
            'name' => 'token',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 24,
            'endLine' => 24,
            'startColumn' => 60,
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
 * Determine if a token record exists and is valid.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\CanResetPassword  $user
 * @param  string  $token
 * @return bool
 */',
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Passwords',
        'declaringClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'implementingClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'currentClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'aliasName' => NULL,
      ),
      'recentlyCreatedToken' => 
      array (
        'name' => 'recentlyCreatedToken',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\CanResetPassword',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 42,
            'endColumn' => 71,
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
 * Determine if the given user recently created a password reset token.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\CanResetPassword  $user
 * @return bool
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Passwords',
        'declaringClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'implementingClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'currentClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\CanResetPassword',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 28,
            'endColumn' => 57,
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
 * Delete a token record.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\CanResetPassword  $user
 * @return void
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Passwords',
        'declaringClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'implementingClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'currentClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'aliasName' => NULL,
      ),
      'deleteExpired' => 
      array (
        'name' => 'deleteExpired',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete expired tokens.
 *
 * @return void
 */',
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Passwords',
        'declaringClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'implementingClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
        'currentClassName' => 'Illuminate\\Auth\\Passwords\\TokenRepositoryInterface',
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