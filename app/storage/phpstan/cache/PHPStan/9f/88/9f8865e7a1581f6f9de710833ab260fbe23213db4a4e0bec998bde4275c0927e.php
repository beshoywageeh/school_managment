<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/AuthenticationException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\AuthenticationException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-aab98f2bc3e1fab3d99cc4292605932fcd91b80f25bf401314f9b5a58467d332-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Auth\\AuthenticationException',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Auth/AuthenticationException.php',
      ),
    ),
    'namespace' => 'Illuminate\\Auth',
    'name' => 'Illuminate\\Auth\\AuthenticationException',
    'shortName' => 'AuthenticationException',
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
    'endLine' => 58,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Exception',
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
      'guards' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'implementingClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'name' => 'guards',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * All of the guards that were checked.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'redirectTo' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'implementingClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'name' => 'redirectTo',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The path the user should be redirected to.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 26,
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
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'Unauthenticated.\'',
              'attributes' => 
              array (
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 48,
                'startFilePos' => 569,
                'endTokenPos' => 48,
                'endFilePos' => 586,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 33,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'guards' => 
          array (
            'name' => 'guards',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 57,
                'startFilePos' => 605,
                'endTokenPos' => 58,
                'endFilePos' => 606,
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
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 64,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'redirectTo' => 
          array (
            'name' => 'redirectTo',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 65,
                'startFilePos' => 623,
                'endTokenPos' => 65,
                'endFilePos' => 626,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 84,
            'endColumn' => 101,
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
 * Create a new authentication exception.
 *
 * @param  string  $message
 * @param  array  $guards
 * @param  string|null  $redirectTo
 * @return void
 */',
        'startLine' => 31,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'implementingClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'currentClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'aliasName' => NULL,
      ),
      'guards' => 
      array (
        'name' => 'guards',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the guards that were checked.
 *
 * @return array
 */',
        'startLine' => 44,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'implementingClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'currentClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'aliasName' => NULL,
      ),
      'redirectTo' => 
      array (
        'name' => 'redirectTo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path the user should be redirected to.
 *
 * @return string|null
 */',
        'startLine' => 54,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'implementingClassName' => 'Illuminate\\Auth\\AuthenticationException',
        'currentClassName' => 'Illuminate\\Auth\\AuthenticationException',
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