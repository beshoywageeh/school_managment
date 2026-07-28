<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-permission/src/Middleware/RoleOrPermissionMiddleware.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Permission\Middleware\RoleOrPermissionMiddleware
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f4c1323f2f08839c7c015b97f4099cbb6c1d4f9d9cbec81a531ef73dfc943e70-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-permission/src/Middleware/RoleOrPermissionMiddleware.php',
      ),
    ),
    'namespace' => 'Spatie\\Permission\\Middleware',
    'name' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
    'shortName' => 'RoleOrPermissionMiddleware',
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
    'endLine' => 75,
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
            'startLine' => 12,
            'endLine' => 12,
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
            'startLine' => 12,
            'endLine' => 12,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'roleOrPermission' => 
          array (
            'name' => 'roleOrPermission',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 12,
            'endLine' => 12,
            'startColumn' => 53,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'guard' => 
          array (
            'name' => 'guard',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 12,
                'endLine' => 12,
                'startTokenPos' => 54,
                'startFilePos' => 299,
                'endTokenPos' => 54,
                'endFilePos' => 302,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 12,
            'endLine' => 12,
            'startColumn' => 72,
            'endColumn' => 84,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 12,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Permission\\Middleware',
        'declaringClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'implementingClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'currentClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'aliasName' => NULL,
      ),
      'using' => 
      array (
        'name' => 'using',
        'parameters' => 
        array (
          'roleOrPermission' => 
          array (
            'name' => 'roleOrPermission',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'guard' => 
          array (
            'name' => 'guard',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 47,
                'endLine' => 47,
                'startTokenPos' => 267,
                'startFilePos' => 1482,
                'endTokenPos' => 267,
                'endFilePos' => 1485,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 53,
            'endColumn' => 65,
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
 * Specify the role or permission and guard for the middleware.
 *
 * @param  array|string|\\BackedEnum  $roleOrPermission
 * @param  string|null  $guard
 * @return string
 */',
        'startLine' => 47,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Spatie\\Permission\\Middleware',
        'declaringClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'implementingClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'currentClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'aliasName' => NULL,
      ),
      'parseRoleOrPermissionToString' => 
      array (
        'name' => 'parseRoleOrPermissionToString',
        'parameters' => 
        array (
          'roleOrPermission' => 
          array (
            'name' => 'roleOrPermission',
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'BackedEnum',
                      'isIdentifier' => false,
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 61,
            'endColumn' => 102,
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
 * Convert array or string of roles/permissions to string representation.
 *
 * @return string
 */',
        'startLine' => 60,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Spatie\\Permission\\Middleware',
        'declaringClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'implementingClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
        'currentClassName' => 'Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware',
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