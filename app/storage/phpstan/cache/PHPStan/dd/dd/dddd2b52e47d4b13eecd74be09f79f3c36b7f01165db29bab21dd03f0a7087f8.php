<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Cleanup/CleanupStrategy.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Backup\Tasks\Cleanup\CleanupStrategy
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f3b7fa35842c1968fd38f6467843e0af74379dd4b2c2243c1a9377d6283a2a49-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Cleanup/CleanupStrategy.php',
      ),
    ),
    'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup',
    'name' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
    'shortName' => 'CleanupStrategy',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 30,
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
      'backupDestination' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
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
        'startLine' => 11,
        'endLine' => 11,
        'startColumn' => 5,
        'endColumn' => 51,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'name' => 'config',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Contracts\\Config\\Repository',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 9,
        'endColumn' => 36,
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
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Config\\Repository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 14,
            'endLine' => 14,
            'startColumn' => 9,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 13,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'aliasName' => NULL,
      ),
      'deleteOldBackups' => 
      array (
        'name' => 'deleteOldBackups',
        'parameters' => 
        array (
          'backups' => 
          array (
            'name' => 'backups',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Spatie\\Backup\\BackupDestination\\BackupCollection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 47,
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
        'docComment' => NULL,
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'aliasName' => NULL,
      ),
      'setBackupDestination' => 
      array (
        'name' => 'setBackupDestination',
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
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 42,
            'endColumn' => 77,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
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
        'startLine' => 26,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
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