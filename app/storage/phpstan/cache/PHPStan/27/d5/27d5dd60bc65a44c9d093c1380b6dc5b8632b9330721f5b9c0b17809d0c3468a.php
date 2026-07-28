<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Console/Commands/MigrateMysqlToPostgres.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\MigrateMysqlToPostgres
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-5b8f3ff0ddd454371bf6fc57472102c034b5945da209cc47633f4f437fd43adf',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Console/Commands/MigrateMysqlToPostgres.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
    'shortName' => 'MigrateMysqlToPostgres',
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
    'endLine' => 168,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Console\\Command',
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
      'signature' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'implementingClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'db:mysql-to-pg\'',
          'attributes' => 
          array (
            'startLine' => 11,
            'endLine' => 11,
            'startTokenPos' => 38,
            'startFilePos' => 221,
            'endTokenPos' => 38,
            'endFilePos' => 236,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 11,
        'endLine' => 11,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'implementingClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Migrate all tables from MySQL to PostgreSQL safely\'',
          'attributes' => 
          array (
            'startLine' => 13,
            'endLine' => 13,
            'startTokenPos' => 47,
            'startFilePos' => 269,
            'endTokenPos' => 47,
            'endFilePos' => 320,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 13,
        'endLine' => 13,
        'startColumn' => 5,
        'endColumn' => 82,
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
      'sortTablesByDependencies' => 
      array (
        'name' => 'sortTablesByDependencies',
        'parameters' => 
        array (
          'tables' => 
          array (
            'name' => 'tables',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'pg' => 
          array (
            'name' => 'pg',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 56,
            'endColumn' => 58,
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
        'startLine' => 16,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'implementingClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'currentClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 62,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'implementingClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'currentClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'aliasName' => NULL,
      ),
      'insertBatch' => 
      array (
        'name' => 'insertBatch',
        'parameters' => 
        array (
          'pg' => 
          array (
            'name' => 'pg',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 34,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 39,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 51,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'rows' => 
          array (
            'name' => 'rows',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 61,
            'endColumn' => 65,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'uniqueColumns' => 
          array (
            'name' => 'uniqueColumns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 68,
            'endColumn' => 81,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 145,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'implementingClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
        'currentClassName' => 'App\\Console\\Commands\\MigrateMysqlToPostgres',
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