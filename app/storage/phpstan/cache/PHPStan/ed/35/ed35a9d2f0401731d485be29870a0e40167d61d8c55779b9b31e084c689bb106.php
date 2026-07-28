<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Schema/AbstractSchemaManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Doctrine\DBAL\Schema\AbstractSchemaManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c4c1e938678c1c93dc551c1c9be712b2042dbd69fc966c019a01cfe7d3b2c799-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Schema/AbstractSchemaManager.php',
      ),
    ),
    'namespace' => 'Doctrine\\DBAL\\Schema',
    'name' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
    'shortName' => 'AbstractSchemaManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for schema managers. Schema managers are used to inspect and/or
 * modify the database schema/structure.
 *
 * @template-covariant T of AbstractPlatform
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 1808,
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
      '_conn' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'name' => '_conn',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Holds instance of the Doctrine connection for this schema manager.
 *
 * @var Connection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_platform' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'name' => '_platform',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Holds instance of the database platform used for this schema manager.
 *
 * @var T
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 25,
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
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Connection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 33,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'platform' => 
          array (
            'name' => 'platform',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 57,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/** @param T $platform */',
        'startLine' => 53,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'getDatabasePlatform' => 
      array (
        'name' => 'getDatabasePlatform',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the associated platform.
 *
 * @deprecated Use {@link Connection::getDatabasePlatform()} instead.
 *
 * @return T
 */',
        'startLine' => 66,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'tryMethod' => 
      array (
        'name' => 'tryMethod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Tries any method on the schema manager. Normally a method throws an
 * exception when your DBMS doesn\'t support it or if an error occurs.
 * This method allows you to try and method on your SchemaManager
 * instance and will return false if it does not work or is not supported.
 *
 * <code>
 * $result = $sm->tryMethod(\'dropView\', \'view_name\');
 * </code>
 *
 * @deprecated
 *
 * @return mixed
 */',
        'startLine' => 92,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listDatabases' => 
      array (
        'name' => 'listDatabases',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lists the available databases for this connection.
 *
 * @return string[]
 *
 * @throws Exception
 */',
        'startLine' => 122,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listNamespaceNames' => 
      array (
        'name' => 'listNamespaceNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a list of all namespaces in the current database.
 *
 * @deprecated Use {@see listSchemaNames()} instead.
 *
 * @return string[]
 *
 * @throws Exception
 */',
        'startLine' => 140,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listSchemaNames' => 
      array (
        'name' => 'listSchemaNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a list of the names of all schemata in the current database.
 *
 * @return list<string>
 *
 * @throws Exception
 */',
        'startLine' => 163,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listSequences' => 
      array (
        'name' => 'listSequences',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 540,
                'startFilePos' => 4649,
                'endTokenPos' => 540,
                'endFilePos' => 4652,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 35,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lists the available sequences for this connection.
 *
 * @param string|null $database
 *
 * @return Sequence[]
 *
 * @throws Exception
 */',
        'startLine' => 177,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listTableColumns' => 
      array (
        'name' => 'listTableColumns',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 213,
                'endLine' => 213,
                'startTokenPos' => 654,
                'startFilePos' => 5929,
                'endTokenPos' => 654,
                'endFilePos' => 5932,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 46,
            'endColumn' => 61,
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
 * Lists the columns for a given table.
 *
 * In contrast to other libraries and to the old version of Doctrine,
 * this column definition does try to contain the \'primary\' column for
 * the reason that it is not portable across different RDBMS. Use
 * {@see listTableIndexes($tableName)} to retrieve the primary key
 * of a table. Where a RDBMS specifies more details, these are held
 * in the platformDetails array.
 *
 * @param string      $table    The name of the table.
 * @param string|null $database
 *
 * @return Column[]
 *
 * @throws Exception
 */',
        'startLine' => 213,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'doListTableColumns' => 
      array (
        'name' => 'doListTableColumns',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 240,
                'endLine' => 240,
                'startTokenPos' => 772,
                'startFilePos' => 6766,
                'endTokenPos' => 772,
                'endFilePos' => 6769,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 51,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string      $table
 * @param string|null $database
 *
 * @return Column[]
 *
 * @throws Exception
 */',
        'startLine' => 240,
        'endLine' => 258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listTableIndexes' => 
      array (
        'name' => 'listTableIndexes',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Lists the indexes for a given table returning an array of Index instances.
 *
 * Keys of the portable indexes list are all lower-cased.
 *
 * @param string $table The name of the table.
 *
 * @return Index[]
 *
 * @throws Exception
 */',
        'startLine' => 271,
        'endLine' => 278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'doListTableIndexes' => 
      array (
        'name' => 'doListTableIndexes',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 287,
            'endLine' => 287,
            'startColumn' => 43,
            'endColumn' => 48,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string $table
 *
 * @return Index[]
 *
 * @throws Exception
 */',
        'startLine' => 287,
        'endLine' => 299,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'tablesExist' => 
      array (
        'name' => 'tablesExist',
        'parameters' => 
        array (
          'names' => 
          array (
            'name' => 'names',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 312,
            'endLine' => 312,
            'startColumn' => 33,
            'endColumn' => 38,
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
 * Returns true if all the given tables exist.
 *
 * The usage of a string $tableNames is deprecated. Pass a one-element array instead.
 *
 * @param string|string[] $names
 *
 * @return bool
 *
 * @throws Exception
 */',
        'startLine' => 312,
        'endLine' => 326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listTableNames' => 
      array (
        'name' => 'listTableNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a list of all tables in the current database.
 *
 * @return string[]
 *
 * @throws Exception
 */',
        'startLine' => 335,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'doListTableNames' => 
      array (
        'name' => 'doListTableNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return list<string>
 *
 * @throws Exception
 */',
        'startLine' => 350,
        'endLine' => 360,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'filterAssetNames' => 
      array (
        'name' => 'filterAssetNames',
        'parameters' => 
        array (
          'assetNames' => 
          array (
            'name' => 'assetNames',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 370,
            'endLine' => 370,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Filters asset names if they are configured to return only a subset of all
 * the found elements.
 *
 * @param mixed[] $assetNames
 *
 * @return mixed[]
 */',
        'startLine' => 370,
        'endLine' => 378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listTables' => 
      array (
        'name' => 'listTables',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lists the tables for this connection.
 *
 * @return list<Table>
 *
 * @throws Exception
 */',
        'startLine' => 387,
        'endLine' => 397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'doListTables' => 
      array (
        'name' => 'doListTables',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return list<Table>
 *
 * @throws Exception
 */',
        'startLine' => 404,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listTableDetails' => 
      array (
        'name' => 'listTableDetails',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 443,
            'endLine' => 443,
            'startColumn' => 38,
            'endColumn' => 42,
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
 * @deprecated Use {@see introspectTable()} instead.
 *
 * @param string $name
 *
 * @return Table
 *
 * @throws Exception
 */',
        'startLine' => 443,
        'endLine' => 462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'doListTableDetails' => 
      array (
        'name' => 'doListTableDetails',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 469,
            'endLine' => 469,
            'startColumn' => 43,
            'endColumn' => 47,
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
            'name' => 'Doctrine\\DBAL\\Schema\\Table',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string $name
 *
 * @throws Exception
 */',
        'startLine' => 469,
        'endLine' => 491,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'normalizeName' => 
      array (
        'name' => 'normalizeName',
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
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 38,
            'endColumn' => 49,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * An extension point for those platforms where case sensitivity of the object name depends on whether it\'s quoted.
 *
 * Such platforms should convert a possibly quoted name into a value of the corresponding case.
 */',
        'startLine' => 498,
        'endLine' => 503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'selectTableNames' => 
      array (
        'name' => 'selectTableNames',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 512,
            'endLine' => 512,
            'startColumn' => 41,
            'endColumn' => 60,
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
            'name' => 'Doctrine\\DBAL\\Result',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Selects names of tables in the specified database.
 *
 * @throws Exception
 *
 * @abstract
 */',
        'startLine' => 512,
        'endLine' => 515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'selectTableColumns' => 
      array (
        'name' => 'selectTableColumns',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 525,
            'endLine' => 525,
            'startColumn' => 43,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 525,
                'endLine' => 525,
                'startTokenPos' => 1945,
                'startFilePos' => 14835,
                'endTokenPos' => 1945,
                'endFilePos' => 14838,
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
                      'name' => 'string',
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
            'startLine' => 525,
            'endLine' => 525,
            'startColumn' => 65,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Result',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Selects definitions of table columns in the specified database. If the table name is specified, narrows down
 * the selection to this table.
 *
 * @throws Exception
 *
 * @abstract
 */',
        'startLine' => 525,
        'endLine' => 528,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'selectIndexColumns' => 
      array (
        'name' => 'selectIndexColumns',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 43,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 536,
                'endLine' => 536,
                'startTokenPos' => 1985,
                'startFilePos' => 15198,
                'endTokenPos' => 1985,
                'endFilePos' => 15201,
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
                      'name' => 'string',
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
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 65,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Result',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Selects definitions of index columns in the specified database. If the table name is specified, narrows down
 * the selection to this table.
 *
 * @throws Exception
 */',
        'startLine' => 536,
        'endLine' => 539,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'selectForeignKeyColumns' => 
      array (
        'name' => 'selectForeignKeyColumns',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 48,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 547,
                'endLine' => 547,
                'startTokenPos' => 2025,
                'startFilePos' => 15572,
                'endTokenPos' => 2025,
                'endFilePos' => 15575,
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
                      'name' => 'string',
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
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 70,
            'endColumn' => 94,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Result',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Selects definitions of foreign key columns in the specified database. If the table name is specified,
 * narrows down the selection to this table.
 *
 * @throws Exception
 */',
        'startLine' => 547,
        'endLine' => 550,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'fetchTableColumnsByTable' => 
      array (
        'name' => 'fetchTableColumnsByTable',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 49,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetches definitions of table columns in the specified database and returns them grouped by table name.
 *
 * @return array<string,list<array<string,mixed>>>
 *
 * @throws Exception
 */',
        'startLine' => 559,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'fetchIndexColumnsByTable' => 
      array (
        'name' => 'fetchIndexColumnsByTable',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 571,
            'endLine' => 571,
            'startColumn' => 49,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetches definitions of index columns in the specified database and returns them grouped by table name.
 *
 * @return array<string,list<array<string,mixed>>>
 *
 * @throws Exception
 */',
        'startLine' => 571,
        'endLine' => 574,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'fetchForeignKeyColumnsByTable' => 
      array (
        'name' => 'fetchForeignKeyColumnsByTable',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 583,
            'endLine' => 583,
            'startColumn' => 54,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetches definitions of foreign key columns in the specified database and returns them grouped by table name.
 *
 * @return array<string, list<array<string, mixed>>>
 *
 * @throws Exception
 */',
        'startLine' => 583,
        'endLine' => 592,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'fetchTableOptionsByTable' => 
      array (
        'name' => 'fetchTableOptionsByTable',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 49,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 602,
                'endLine' => 602,
                'startTokenPos' => 2197,
                'startFilePos' => 17384,
                'endTokenPos' => 2197,
                'endFilePos' => 17387,
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
                      'name' => 'string',
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
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 71,
            'endColumn' => 95,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetches table options for the tables in the specified database and returns them grouped by table name.
 * If the table name is specified, narrows down the selection to this table.
 *
 * @return array<string,array<string,mixed>>
 *
 * @throws Exception
 */',
        'startLine' => 602,
        'endLine' => 605,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'introspectTable' => 
      array (
        'name' => 'introspectTable',
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
            'startLine' => 612,
            'endLine' => 612,
            'startColumn' => 37,
            'endColumn' => 48,
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
            'name' => 'Doctrine\\DBAL\\Schema\\Table',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Introspects the table with the given name.
 *
 * @throws Exception
 */',
        'startLine' => 612,
        'endLine' => 621,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listViews' => 
      array (
        'name' => 'listViews',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lists the views this connection has.
 *
 * @return View[]
 *
 * @throws Exception
 */',
        'startLine' => 630,
        'endLine' => 637,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'listTableForeignKeys' => 
      array (
        'name' => 'listTableForeignKeys',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 649,
                'endLine' => 649,
                'startTokenPos' => 2363,
                'startFilePos' => 18520,
                'endTokenPos' => 2363,
                'endFilePos' => 18523,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 50,
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
 * Lists the foreign keys for the given table.
 *
 * @param string      $table    The name of the table.
 * @param string|null $database
 *
 * @return ForeignKeyConstraint[]
 *
 * @throws Exception
 */',
        'startLine' => 649,
        'endLine' => 665,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'doListTableForeignKeys' => 
      array (
        'name' => 'doListTableForeignKeys',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 675,
            'endLine' => 675,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 675,
                'endLine' => 675,
                'startTokenPos' => 2475,
                'startFilePos' => 19370,
                'endTokenPos' => 2475,
                'endFilePos' => 19373,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 675,
            'endLine' => 675,
            'startColumn' => 55,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string      $table
 * @param string|null $database
 *
 * @return ForeignKeyConstraint[]
 *
 * @throws Exception
 */',
        'startLine' => 675,
        'endLine' => 693,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropDatabase' => 
      array (
        'name' => 'dropDatabase',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 708,
            'endLine' => 708,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Drops a database.
 *
 * NOTE: You can not drop the database this SchemaManager is currently connected to.
 *
 * @param string $database The name of the database to drop.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 708,
        'endLine' => 713,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropSchema' => 
      array (
        'name' => 'dropSchema',
        'parameters' => 
        array (
          'schemaName' => 
          array (
            'name' => 'schemaName',
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
            'startLine' => 720,
            'endLine' => 720,
            'startColumn' => 32,
            'endColumn' => 49,
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
        'docComment' => '/**
 * Drops a schema.
 *
 * @throws Exception
 */',
        'startLine' => 720,
        'endLine' => 725,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropTable' => 
      array (
        'name' => 'dropTable',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 31,
            'endColumn' => 35,
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
 * Drops the given table.
 *
 * @param string $name The name of the table to drop.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 736,
        'endLine' => 741,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropIndex' => 
      array (
        'name' => 'dropIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 753,
            'endLine' => 753,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 753,
            'endLine' => 753,
            'startColumn' => 39,
            'endColumn' => 44,
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
 * Drops the index from the given table.
 *
 * @param Index|string $index The name of the index.
 * @param Table|string $table The name of the table.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 753,
        'endLine' => 780,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropConstraint' => 
      array (
        'name' => 'dropConstraint',
        'parameters' => 
        array (
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Constraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 793,
            'endLine' => 793,
            'startColumn' => 36,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 793,
            'endLine' => 793,
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
 * Drops the constraint from the given table.
 *
 * @deprecated Use {@see dropIndex()}, {@see dropForeignKey()} or {@see dropUniqueConstraint()} instead.
 *
 * @param Table|string $table The name of the table.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 793,
        'endLine' => 810,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropForeignKey' => 
      array (
        'name' => 'dropForeignKey',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 49,
            'endColumn' => 54,
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
 * Drops a foreign key from a table.
 *
 * @param ForeignKeyConstraint|string $foreignKey The name of the foreign key.
 * @param Table|string                $table      The name of the table with the foreign key.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 822,
        'endLine' => 850,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropSequence' => 
      array (
        'name' => 'dropSequence',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 861,
            'endLine' => 861,
            'startColumn' => 34,
            'endColumn' => 38,
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
 * Drops a sequence with a given name.
 *
 * @param string $name The name of the sequence to drop.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 861,
        'endLine' => 866,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropUniqueConstraint' => 
      array (
        'name' => 'dropUniqueConstraint',
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
            'startLine' => 873,
            'endLine' => 873,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
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
            'startLine' => 873,
            'endLine' => 873,
            'startColumn' => 56,
            'endColumn' => 72,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Drops the unique constraint from the given table.
 *
 * @throws Exception
 */',
        'startLine' => 873,
        'endLine' => 878,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropView' => 
      array (
        'name' => 'dropView',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 889,
            'endLine' => 889,
            'startColumn' => 30,
            'endColumn' => 34,
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
 * Drops a view.
 *
 * @param string $name The name of the view.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 889,
        'endLine' => 894,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createSchemaObjects' => 
      array (
        'name' => 'createSchemaObjects',
        'parameters' => 
        array (
          'schema' => 
          array (
            'name' => 'schema',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Schema',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 899,
            'endLine' => 899,
            'startColumn' => 41,
            'endColumn' => 54,
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
        'docComment' => '/** @throws Exception */',
        'startLine' => 899,
        'endLine' => 902,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createDatabase' => 
      array (
        'name' => 'createDatabase',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 913,
            'endLine' => 913,
            'startColumn' => 36,
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
 * Creates a new database.
 *
 * @param string $database The name of the database to create.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 913,
        'endLine' => 918,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createTable' => 
      array (
        'name' => 'createTable',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Table',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 927,
            'endLine' => 927,
            'startColumn' => 33,
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
 * Creates a new table.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 927,
        'endLine' => 931,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createSequence' => 
      array (
        'name' => 'createSequence',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 942,
            'endLine' => 942,
            'startColumn' => 36,
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
 * Creates a new sequence.
 *
 * @param Sequence $sequence
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 942,
        'endLine' => 947,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createConstraint' => 
      array (
        'name' => 'createConstraint',
        'parameters' => 
        array (
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Constraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 960,
            'endLine' => 960,
            'startColumn' => 38,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 960,
            'endLine' => 960,
            'startColumn' => 62,
            'endColumn' => 67,
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
 * Creates a constraint on a table.
 *
 * @deprecated Use {@see createIndex()}, {@see createForeignKey()} or {@see createUniqueConstraint()} instead.
 *
 * @param Table|string $table
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 960,
        'endLine' => 965,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createIndex' => 
      array (
        'name' => 'createIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 976,
            'endLine' => 976,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 976,
            'endLine' => 976,
            'startColumn' => 47,
            'endColumn' => 52,
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
 * Creates a new index on a table.
 *
 * @param Table|string $table The name of the table on which the index is to be created.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 976,
        'endLine' => 981,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createForeignKey' => 
      array (
        'name' => 'createForeignKey',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\ForeignKeyConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 993,
            'endLine' => 993,
            'startColumn' => 38,
            'endColumn' => 69,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 993,
            'endLine' => 993,
            'startColumn' => 72,
            'endColumn' => 77,
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
 * Creates a new foreign key.
 *
 * @param ForeignKeyConstraint $foreignKey The ForeignKey instance.
 * @param Table|string         $table      The name of the table on which the foreign key is to be created.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 993,
        'endLine' => 998,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createUniqueConstraint' => 
      array (
        'name' => 'createUniqueConstraint',
        'parameters' => 
        array (
          'uniqueConstraint' => 
          array (
            'name' => 'uniqueConstraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\UniqueConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1005,
            'endLine' => 1005,
            'startColumn' => 44,
            'endColumn' => 77,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
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
            'startLine' => 1005,
            'endLine' => 1005,
            'startColumn' => 80,
            'endColumn' => 96,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a unique constraint on a table.
 *
 * @throws Exception
 */',
        'startLine' => 1005,
        'endLine' => 1010,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createView' => 
      array (
        'name' => 'createView',
        'parameters' => 
        array (
          'view' => 
          array (
            'name' => 'view',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\View',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1019,
            'endLine' => 1019,
            'startColumn' => 32,
            'endColumn' => 41,
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
 * Creates a new view.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1019,
        'endLine' => 1027,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropSchemaObjects' => 
      array (
        'name' => 'dropSchemaObjects',
        'parameters' => 
        array (
          'schema' => 
          array (
            'name' => 'schema',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Schema',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1032,
            'endLine' => 1032,
            'startColumn' => 39,
            'endColumn' => 52,
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
        'docComment' => '/** @throws Exception */',
        'startLine' => 1032,
        'endLine' => 1035,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropAndCreateConstraint' => 
      array (
        'name' => 'dropAndCreateConstraint',
        'parameters' => 
        array (
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Constraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1053,
            'endLine' => 1053,
            'startColumn' => 45,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1053,
            'endLine' => 1053,
            'startColumn' => 69,
            'endColumn' => 74,
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
 * Drops and creates a constraint.
 *
 * @deprecated Use {@see dropIndex()} and {@see createIndex()},
 *             {@see dropForeignKey()} and {@see createForeignKey()}
 *             or {@see dropUniqueConstraint()} and {@see createUniqueConstraint()} instead.
 *
 * @see dropConstraint()
 * @see createConstraint()
 *
 * @param Table|string $table
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1053,
        'endLine' => 1067,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropAndCreateIndex' => 
      array (
        'name' => 'dropAndCreateIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Drops and creates a new index on a table.
 *
 * @deprecated Use {@see dropIndex()} and {@see createIndex()} instead.
 *
 * @param Table|string $table The name of the table on which the index is to be created.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1080,
        'endLine' => 1091,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropAndCreateForeignKey' => 
      array (
        'name' => 'dropAndCreateForeignKey',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\ForeignKeyConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1106,
            'endLine' => 1106,
            'startColumn' => 45,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1106,
            'endLine' => 1106,
            'startColumn' => 79,
            'endColumn' => 84,
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
 * Drops and creates a new foreign key.
 *
 * @deprecated Use {@see dropForeignKey()} and {@see createForeignKey()} instead.
 *
 * @param ForeignKeyConstraint $foreignKey An associative array that defines properties
 *                                         of the foreign key to be created.
 * @param Table|string         $table      The name of the table on which the foreign key is to be created.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1106,
        'endLine' => 1117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropAndCreateSequence' => 
      array (
        'name' => 'dropAndCreateSequence',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Sequence',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1128,
            'endLine' => 1128,
            'startColumn' => 43,
            'endColumn' => 60,
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
 * Drops and create a new sequence.
 *
 * @deprecated Use {@see dropSequence()} and {@see createSequence()} instead.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1128,
        'endLine' => 1139,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropAndCreateTable' => 
      array (
        'name' => 'dropAndCreateTable',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Table',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1150,
            'endLine' => 1150,
            'startColumn' => 40,
            'endColumn' => 51,
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
 * Drops and creates a new table.
 *
 * @deprecated Use {@see dropTable()} and {@see createTable()} instead.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1150,
        'endLine' => 1161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropAndCreateDatabase' => 
      array (
        'name' => 'dropAndCreateDatabase',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1174,
            'endLine' => 1174,
            'startColumn' => 43,
            'endColumn' => 51,
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
 * Drops and creates a new database.
 *
 * @deprecated Use {@see dropDatabase()} and {@see createDatabase()} instead.
 *
 * @param string $database The name of the database to create.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1174,
        'endLine' => 1185,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'dropAndCreateView' => 
      array (
        'name' => 'dropAndCreateView',
        'parameters' => 
        array (
          'view' => 
          array (
            'name' => 'view',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\View',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1196,
            'endLine' => 1196,
            'startColumn' => 39,
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
 * Drops and creates a new view.
 *
 * @deprecated Use {@see dropView()} and {@see createView()} instead.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1196,
        'endLine' => 1207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'alterSchema' => 
      array (
        'name' => 'alterSchema',
        'parameters' => 
        array (
          'schemaDiff' => 
          array (
            'name' => 'schemaDiff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\SchemaDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1214,
            'endLine' => 1214,
            'startColumn' => 33,
            'endColumn' => 54,
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
        'docComment' => '/**
 * Alters an existing schema.
 *
 * @throws Exception
 */',
        'startLine' => 1214,
        'endLine' => 1217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'migrateSchema' => 
      array (
        'name' => 'migrateSchema',
        'parameters' => 
        array (
          'toSchema' => 
          array (
            'name' => 'toSchema',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Schema',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1224,
            'endLine' => 1224,
            'startColumn' => 35,
            'endColumn' => 50,
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
        'docComment' => '/**
 * Migrates an existing schema to a new schema.
 *
 * @throws Exception
 */',
        'startLine' => 1224,
        'endLine' => 1230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'alterTable' => 
      array (
        'name' => 'alterTable',
        'parameters' => 
        array (
          'tableDiff' => 
          array (
            'name' => 'tableDiff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1241,
            'endLine' => 1241,
            'startColumn' => 32,
            'endColumn' => 51,
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
 * Alters an existing tables schema.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1241,
        'endLine' => 1244,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'renameTable' => 
      array (
        'name' => 'renameTable',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1256,
            'endLine' => 1256,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'newName' => 
          array (
            'name' => 'newName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1256,
            'endLine' => 1256,
            'startColumn' => 40,
            'endColumn' => 47,
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
 * Renames a given table to another name.
 *
 * @param string $name    The current name of the table.
 * @param string $newName The new name of the table.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1256,
        'endLine' => 1259,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableDatabasesList' => 
      array (
        'name' => '_getPortableDatabasesList',
        'parameters' => 
        array (
          'databases' => 
          array (
            'name' => 'databases',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1271,
            'endLine' => 1271,
            'startColumn' => 50,
            'endColumn' => 59,
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
 * @param mixed[] $databases
 *
 * @return string[]
 */',
        'startLine' => 1271,
        'endLine' => 1279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'getPortableNamespacesList' => 
      array (
        'name' => 'getPortableNamespacesList',
        'parameters' => 
        array (
          'namespaces' => 
          array (
            'name' => 'namespaces',
            'default' => NULL,
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
            'startLine' => 1291,
            'endLine' => 1291,
            'startColumn' => 50,
            'endColumn' => 66,
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
 * Converts a list of namespace names from the native DBMS data definition to a portable Doctrine definition.
 *
 * @deprecated Use {@see listSchemaNames()} instead.
 *
 * @param array<int, array<string, mixed>> $namespaces The list of namespace names
 *                                                     in the native DBMS data definition.
 *
 * @return string[]
 */',
        'startLine' => 1291,
        'endLine' => 1307,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableDatabaseDefinition' => 
      array (
        'name' => '_getPortableDatabaseDefinition',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1314,
            'endLine' => 1314,
            'startColumn' => 55,
            'endColumn' => 63,
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
 * @param mixed $database
 *
 * @return mixed
 */',
        'startLine' => 1314,
        'endLine' => 1317,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'getPortableNamespaceDefinition' => 
      array (
        'name' => 'getPortableNamespaceDefinition',
        'parameters' => 
        array (
          'namespace' => 
          array (
            'name' => 'namespace',
            'default' => NULL,
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
            'startLine' => 1328,
            'endLine' => 1328,
            'startColumn' => 55,
            'endColumn' => 70,
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
 * Converts a namespace definition from the native DBMS data definition to a portable Doctrine definition.
 *
 * @deprecated Use {@see listSchemaNames()} instead.
 *
 * @param array<string, mixed> $namespace The native DBMS namespace definition.
 *
 * @return mixed
 */',
        'startLine' => 1328,
        'endLine' => 1338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableSequencesList' => 
      array (
        'name' => '_getPortableSequencesList',
        'parameters' => 
        array (
          'sequences' => 
          array (
            'name' => 'sequences',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1347,
            'endLine' => 1347,
            'startColumn' => 50,
            'endColumn' => 59,
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
 * @param mixed[][] $sequences
 *
 * @return Sequence[]
 *
 * @throws Exception
 */',
        'startLine' => 1347,
        'endLine' => 1356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableSequenceDefinition' => 
      array (
        'name' => '_getPortableSequenceDefinition',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1365,
            'endLine' => 1365,
            'startColumn' => 55,
            'endColumn' => 63,
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
 * @param mixed[] $sequence
 *
 * @return Sequence
 *
 * @throws Exception
 */',
        'startLine' => 1365,
        'endLine' => 1368,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableTableColumnList' => 
      array (
        'name' => '_getPortableTableColumnList',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1383,
            'endLine' => 1383,
            'startColumn' => 52,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1383,
            'endLine' => 1383,
            'startColumn' => 60,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'tableColumns' => 
          array (
            'name' => 'tableColumns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1383,
            'endLine' => 1383,
            'startColumn' => 71,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Independent of the database the keys of the column list result are lowercased.
 *
 * The name of the created column instance however is kept in its case.
 *
 * @param string    $table        The name of the table.
 * @param string    $database
 * @param mixed[][] $tableColumns
 *
 * @return Column[]
 *
 * @throws Exception
 */',
        'startLine' => 1383,
        'endLine' => 1420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableTableColumnDefinition' => 
      array (
        'name' => '_getPortableTableColumnDefinition',
        'parameters' => 
        array (
          'tableColumn' => 
          array (
            'name' => 'tableColumn',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1431,
            'endLine' => 1431,
            'startColumn' => 67,
            'endColumn' => 78,
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
 * Gets Table Column Definition.
 *
 * @param mixed[] $tableColumn
 *
 * @return Column
 *
 * @throws Exception
 */',
        'startLine' => 1431,
        'endLine' => 1431,
        'startColumn' => 5,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableTableIndexesList' => 
      array (
        'name' => '_getPortableTableIndexesList',
        'parameters' => 
        array (
          'tableIndexes' => 
          array (
            'name' => 'tableIndexes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1443,
            'endLine' => 1443,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1443,
                'endLine' => 1443,
                'startTokenPos' => 4777,
                'startFilePos' => 41616,
                'endTokenPos' => 4777,
                'endFilePos' => 41619,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1443,
            'endLine' => 1443,
            'startColumn' => 68,
            'endColumn' => 84,
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
 * Aggregates and groups the index results according to the required data result.
 *
 * @param mixed[][]   $tableIndexes
 * @param string|null $tableName
 *
 * @return Index[]
 *
 * @throws Exception
 */',
        'startLine' => 1443,
        'endLine' => 1518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableTablesList' => 
      array (
        'name' => '_getPortableTablesList',
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
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 47,
            'endColumn' => 53,
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
 * @param mixed[][] $tables
 *
 * @return string[]
 */',
        'startLine' => 1525,
        'endLine' => 1533,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableTableDefinition' => 
      array (
        'name' => '_getPortableTableDefinition',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1540,
            'endLine' => 1540,
            'startColumn' => 52,
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
 * @param mixed $table
 *
 * @return string
 */',
        'startLine' => 1540,
        'endLine' => 1543,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableViewsList' => 
      array (
        'name' => '_getPortableViewsList',
        'parameters' => 
        array (
          'views' => 
          array (
            'name' => 'views',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1550,
            'endLine' => 1550,
            'startColumn' => 46,
            'endColumn' => 51,
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
 * @param mixed[][] $views
 *
 * @return View[]
 */',
        'startLine' => 1550,
        'endLine' => 1565,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableViewDefinition' => 
      array (
        'name' => '_getPortableViewDefinition',
        'parameters' => 
        array (
          'view' => 
          array (
            'name' => 'view',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1572,
            'endLine' => 1572,
            'startColumn' => 51,
            'endColumn' => 55,
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
 * @param mixed[] $view
 *
 * @return View|false
 */',
        'startLine' => 1572,
        'endLine' => 1575,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableTableForeignKeysList' => 
      array (
        'name' => '_getPortableTableForeignKeysList',
        'parameters' => 
        array (
          'tableForeignKeys' => 
          array (
            'name' => 'tableForeignKeys',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1582,
            'endLine' => 1582,
            'startColumn' => 57,
            'endColumn' => 73,
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
 * @param mixed[][] $tableForeignKeys
 *
 * @return ForeignKeyConstraint[]
 */',
        'startLine' => 1582,
        'endLine' => 1591,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_getPortableTableForeignKeyDefinition' => 
      array (
        'name' => '_getPortableTableForeignKeyDefinition',
        'parameters' => 
        array (
          'tableForeignKey' => 
          array (
            'name' => 'tableForeignKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1600,
            'endLine' => 1600,
            'startColumn' => 62,
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
 * @param mixed $tableForeignKey
 *
 * @return ForeignKeyConstraint
 *
 * @abstract
 */',
        'startLine' => 1600,
        'endLine' => 1603,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      '_execSql' => 
      array (
        'name' => '_execSql',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1614,
            'endLine' => 1614,
            'startColumn' => 33,
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
        'docComment' => '/**
 * @internal
 *
 * @param string[]|string $sql
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1614,
        'endLine' => 1619,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createSchema' => 
      array (
        'name' => 'createSchema',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a schema instance for the current database.
 *
 * @deprecated Use {@link introspectSchema()} instead.
 *
 * @return Schema
 *
 * @throws Exception
 */',
        'startLine' => 1630,
        'endLine' => 1654,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'introspectSchema' => 
      array (
        'name' => 'introspectSchema',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Schema\\Schema',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a {@see Schema} instance representing the current database schema.
 *
 * @throws Exception
 */',
        'startLine' => 1661,
        'endLine' => 1664,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createSchemaConfig' => 
      array (
        'name' => 'createSchemaConfig',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates the configuration for this schema.
 *
 * @return SchemaConfig
 *
 * @throws Exception
 */',
        'startLine' => 1673,
        'endLine' => 1695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'getSchemaSearchPaths' => 
      array (
        'name' => 'getSchemaSearchPaths',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The search path for namespaces in the currently connected database.
 *
 * The first entry is usually the default namespace in the Schema. All
 * further namespaces contain tables/sequences which can also be addressed
 * with a short, not full-qualified name.
 *
 * For databases that don\'t support subschema/namespaces this method
 * returns the name of the currently connected database.
 *
 * @deprecated
 *
 * @return string[]
 *
 * @throws Exception
 */',
        'startLine' => 1713,
        'endLine' => 1728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'extractDoctrineTypeFromComment' => 
      array (
        'name' => 'extractDoctrineTypeFromComment',
        'parameters' => 
        array (
          'comment' => 
          array (
            'name' => 'comment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1741,
            'endLine' => 1741,
            'startColumn' => 52,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'currentType' => 
          array (
            'name' => 'currentType',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1741,
            'endLine' => 1741,
            'startColumn' => 62,
            'endColumn' => 73,
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
 * Given a table comment this method tries to extract a typehint for Doctrine Type, or returns
 * the type given as default.
 *
 * @internal This method should be only used from within the AbstractSchemaManager class hierarchy.
 *
 * @param string|null $comment
 * @param string      $currentType
 *
 * @return string
 */',
        'startLine' => 1741,
        'endLine' => 1752,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'removeDoctrineTypeFromComment' => 
      array (
        'name' => 'removeDoctrineTypeFromComment',
        'parameters' => 
        array (
          'comment' => 
          array (
            'name' => 'comment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1762,
            'endLine' => 1762,
            'startColumn' => 51,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1762,
            'endLine' => 1762,
            'startColumn' => 61,
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
 * @internal This method should be only used from within the AbstractSchemaManager class hierarchy.
 *
 * @param string|null $comment
 * @param string|null $type
 *
 * @return string|null
 */',
        'startLine' => 1762,
        'endLine' => 1773,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'getDatabase' => 
      array (
        'name' => 'getDatabase',
        'parameters' => 
        array (
          'methodName' => 
          array (
            'name' => 'methodName',
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
            'startLine' => 1776,
            'endLine' => 1776,
            'startColumn' => 34,
            'endColumn' => 51,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** @throws Exception */',
        'startLine' => 1776,
        'endLine' => 1785,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'createComparator' => 
      array (
        'name' => 'createComparator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Schema\\Comparator',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1787,
        'endLine' => 1790,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'aliasName' => NULL,
      ),
      'fetchAllAssociativeGrouped' => 
      array (
        'name' => 'fetchAllAssociativeGrouped',
        'parameters' => 
        array (
          'result' => 
          array (
            'name' => 'result',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Result',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1797,
            'endLine' => 1797,
            'startColumn' => 49,
            'endColumn' => 62,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<string,list<array<string,mixed>>>
 *
 * @throws Exception
 */',
        'startLine' => 1797,
        'endLine' => 1807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
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