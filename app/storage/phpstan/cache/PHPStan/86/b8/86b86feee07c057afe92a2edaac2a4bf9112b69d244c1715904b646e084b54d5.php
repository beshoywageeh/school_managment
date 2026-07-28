<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Monitor/BackupDestinationStatus.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Backup\Tasks\Monitor\BackupDestinationStatus
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7820f30aff5c04c3d60d7e8185e783d324bbc13a31f5c13d26c3c42a52bf8f76-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Monitor/BackupDestinationStatus.php',
      ),
    ),
    'namespace' => 'Spatie\\Backup\\Tasks\\Monitor',
    'name' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
    'shortName' => 'BackupDestinationStatus',
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
    'endLine' => 61,
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
      'healthCheckFailure' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'name' => 'healthCheckFailure',
        'modifiers' => 2,
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
                  'name' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthCheckFailure',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 12,
            'startTokenPos' => 42,
            'startFilePos' => 299,
            'endTokenPos' => 42,
            'endFilePos' => 302,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'backupDestination' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'name' => 'backupDestination',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Backup\\BackupDestination\\BackupDestination',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 9,
        'endColumn' => 54,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'healthChecks' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'name' => 'healthChecks',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 16,
            'endLine' => 16,
            'startTokenPos' => 67,
            'startFilePos' => 435,
            'endTokenPos' => 68,
            'endFilePos' => 436,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 9,
        'endColumn' => 42,
        'isPromoted' => true,
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
          'backupDestination' => 
          array (
            'name' => 'backupDestination',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Spatie\\Backup\\BackupDestination\\BackupDestination',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 15,
            'endLine' => 15,
            'startColumn' => 9,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'healthChecks' => 
          array (
            'name' => 'healthChecks',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 16,
                'endLine' => 16,
                'startTokenPos' => 67,
                'startFilePos' => 435,
                'endTokenPos' => 68,
                'endFilePos' => 436,
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 9,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 14,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'aliasName' => NULL,
      ),
      'backupDestination' => 
      array (
        'name' => 'backupDestination',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Backup\\BackupDestination\\BackupDestination',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'aliasName' => NULL,
      ),
      'check' => 
      array (
        'name' => 'check',
        'parameters' => 
        array (
          'check' => 
          array (
            'name' => 'check',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthCheck',
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
            'startColumn' => 27,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'bool',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthCheckFailure',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 24,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'aliasName' => NULL,
      ),
      'getHealthChecks' => 
      array (
        'name' => 'getHealthChecks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 35,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'aliasName' => NULL,
      ),
      'getHealthCheckFailure' => 
      array (
        'name' => 'getHealthCheckFailure',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthCheckFailure',
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
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 40,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'aliasName' => NULL,
      ),
      'isHealthy' => 
      array (
        'name' => 'isHealthy',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 45,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\BackupDestinationStatus',
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