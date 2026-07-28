<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Monitor/HealthChecks/MaximumAgeInDays.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Backup\Tasks\Monitor\HealthChecks\MaximumAgeInDays
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bbac2a8ea93b02d2a3f6338bdd68e92a185658302eeec0cda369c78592a82241-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Monitor/HealthChecks/MaximumAgeInDays.php',
      ),
    ),
    'namespace' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks',
    'name' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
    'shortName' => 'MaximumAgeInDays',
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
    'endLine' => 43,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthCheck',
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
      'days' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'name' => 'days',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 12,
            'startTokenPos' => 47,
            'startFilePos' => 313,
            'endTokenPos' => 47,
            'endFilePos' => 313,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 9,
        'endColumn' => 31,
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
          'days' => 
          array (
            'name' => 'days',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 12,
                'endLine' => 12,
                'startTokenPos' => 47,
                'startFilePos' => 313,
                'endTokenPos' => 47,
                'endFilePos' => 313,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 12,
            'endLine' => 12,
            'startColumn' => 9,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 11,
        'endLine' => 13,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'aliasName' => NULL,
      ),
      'checkHealth' => 
      array (
        'name' => 'checkHealth',
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 15,
            'endLine' => 15,
            'startColumn' => 33,
            'endColumn' => 68,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 15,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'aliasName' => NULL,
      ),
      'hasNoBackups' => 
      array (
        'name' => 'hasNoBackups',
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 37,
            'endColumn' => 72,
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
        'docComment' => NULL,
        'startLine' => 30,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'aliasName' => NULL,
      ),
      'isTooOld' => 
      array (
        'name' => 'isTooOld',
        'parameters' => 
        array (
          'backup' => 
          array (
            'name' => 'backup',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Spatie\\Backup\\BackupDestination\\Backup',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 33,
            'endColumn' => 46,
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
        'docComment' => NULL,
        'startLine' => 35,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays',
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