<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Cleanup/Strategies/DefaultStrategy.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Backup\Tasks\Cleanup\Strategies\DefaultStrategy
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bb33de7dc5b8b0040d8cc9bbc996bfe5440fd195a46a1c68e8564258c04e5a36-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Tasks/Cleanup/Strategies/DefaultStrategy.php',
      ),
    ),
    'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
    'name' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
    'shortName' => 'DefaultStrategy',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 127,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\CleanupStrategy',
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
      'newestBackup' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'name' => 'newestBackup',
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
                  'name' => 'Spatie\\Backup\\BackupDestination\\Backup',
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
            'startLine' => 14,
            'endLine' => 14,
            'startTokenPos' => 56,
            'startFilePos' => 386,
            'endTokenPos' => 56,
            'endFilePos' => 389,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 43,
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
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 38,
            'endColumn' => 62,
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
        'startLine' => 16,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'aliasName' => NULL,
      ),
      'calculateDateRanges' => 
      array (
        'name' => 'calculateDateRanges',
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
        'startLine' => 41,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'aliasName' => NULL,
      ),
      'groupByDateFormat' => 
      array (
        'name' => 'groupByDateFormat',
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
                'name' => 'Illuminate\\Support\\Collection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 42,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dateFormat' => 
          array (
            'name' => 'dateFormat',
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 63,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
        'startLine' => 73,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'aliasName' => NULL,
      ),
      'removeBackupsForAllPeriodsExceptOne' => 
      array (
        'name' => 'removeBackupsForAllPeriodsExceptOne',
        'parameters' => 
        array (
          'backupsPerPeriod' => 
          array (
            'name' => 'backupsPerPeriod',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Support\\Collection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 60,
            'endColumn' => 87,
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
        'startLine' => 78,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'aliasName' => NULL,
      ),
      'removeBackupsOlderThan' => 
      array (
        'name' => 'removeBackupsOlderThan',
        'parameters' => 
        array (
          'endDate' => 
          array (
            'name' => 'endDate',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Carbon\\Carbon',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 47,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 64,
            'endColumn' => 88,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 89,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'aliasName' => NULL,
      ),
      'removeOldBackupsUntilUsingLessThanMaximumStorage' => 
      array (
        'name' => 'removeOldBackupsUntilUsingLessThanMaximumStorage',
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
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 73,
            'endColumn' => 97,
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
        'startLine' => 96,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'aliasName' => NULL,
      ),
      'shouldRemoveOldestBackup' => 
      array (
        'name' => 'shouldRemoveOldestBackup',
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 49,
            'endColumn' => 73,
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
        'startLine' => 109,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies',
        'declaringClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'implementingClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
        'currentClassName' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
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