<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Connection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Connection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c0c875bea85bd9865fd5613dd55c3e7f82e48da2734b1ab32c1fe1712f9569b2-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Connection',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Connection.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database',
    'name' => 'Illuminate\\Database\\Connection',
    'shortName' => 'Connection',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 1767,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Database\\ConnectionInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\DetectsConcurrencyErrors',
      1 => 'Illuminate\\Database\\DetectsLostConnections',
      2 => 'Illuminate\\Database\\Concerns\\ManagesTransactions',
      3 => 'Illuminate\\Support\\InteractsWithTime',
      4 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'pdo' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'pdo',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The active PDO connection.
 *
 * @var \\PDO|\\Closure
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'readPdo' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'readPdo',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The active PDO connection used for reads.
 *
 * @var \\PDO|\\Closure
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'database' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'database',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the connected database.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'readWriteType' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'readWriteType',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The type of the connection.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tablePrefix' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'tablePrefix',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 206,
            'startFilePos' => 1751,
            'endTokenPos' => 206,
            'endFilePos' => 1752,
          ),
        ),
        'docComment' => '/**
 * The table prefix for the connection.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 78,
            'endLine' => 78,
            'startTokenPos' => 217,
            'startFilePos' => 1875,
            'endTokenPos' => 218,
            'endFilePos' => 1876,
          ),
        ),
        'docComment' => '/**
 * The database connection configuration options.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reconnector' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'reconnector',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The reconnector instance for the connection.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queryGrammar' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'queryGrammar',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The query grammar implementation.
 *
 * @var \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'schemaGrammar' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'schemaGrammar',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The schema grammar implementation.
 *
 * @var \\Illuminate\\Database\\Schema\\Grammars\\Grammar
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'postProcessor' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'postProcessor',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The query post processor implementation.
 *
 * @var \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'events' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'events',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fetchMode' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'fetchMode',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\PDO::FETCH_OBJ',
          'attributes' => 
          array (
            'startLine' => 120,
            'endLine' => 120,
            'startTokenPos' => 264,
            'startFilePos' => 2722,
            'endTokenPos' => 266,
            'endFilePos' => 2735,
          ),
        ),
        'docComment' => '/**
 * The default fetch mode of the connection.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transactions' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'transactions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 127,
            'endLine' => 127,
            'startTokenPos' => 277,
            'startFilePos' => 2850,
            'endTokenPos' => 277,
            'endFilePos' => 2850,
          ),
        ),
        'docComment' => '/**
 * The number of active transactions.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transactionsManager' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'transactionsManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The transaction manager instance.
 *
 * @var \\Illuminate\\Database\\DatabaseTransactionsManager
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'recordsModified' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'recordsModified',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 141,
            'endLine' => 141,
            'startTokenPos' => 295,
            'startFilePos' => 3149,
            'endTokenPos' => 295,
            'endFilePos' => 3153,
          ),
        ),
        'docComment' => '/**
 * Indicates if changes have been made to the database.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 141,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'readOnWriteConnection' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'readOnWriteConnection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 148,
            'endLine' => 148,
            'startTokenPos' => 306,
            'startFilePos' => 3310,
            'endTokenPos' => 306,
            'endFilePos' => 3314,
          ),
        ),
        'docComment' => '/**
 * Indicates if the connection should use the "write" PDO connection.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 148,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queryLog' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'queryLog',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 155,
            'endLine' => 155,
            'startTokenPos' => 317,
            'startFilePos' => 3439,
            'endTokenPos' => 318,
            'endFilePos' => 3440,
          ),
        ),
        'docComment' => '/**
 * All of the queries run against the connection.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 155,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'loggingQueries' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'loggingQueries',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 162,
            'endLine' => 162,
            'startTokenPos' => 329,
            'startFilePos' => 3567,
            'endTokenPos' => 329,
            'endFilePos' => 3571,
          ),
        ),
        'docComment' => '/**
 * Indicates whether queries are being logged.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'totalQueryDuration' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'totalQueryDuration',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0.0',
          'attributes' => 
          array (
            'startLine' => 169,
            'endLine' => 169,
            'startTokenPos' => 340,
            'startFilePos' => 3713,
            'endTokenPos' => 340,
            'endFilePos' => 3715,
          ),
        ),
        'docComment' => '/**
 * The duration of all executed queries in milliseconds.
 *
 * @var float
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 169,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queryDurationHandlers' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'queryDurationHandlers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 176,
            'endLine' => 176,
            'startTokenPos' => 351,
            'startFilePos' => 3853,
            'endTokenPos' => 352,
            'endFilePos' => 3854,
          ),
        ),
        'docComment' => '/**
 * All of the registered query duration handlers.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 176,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pretending' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'pretending',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 183,
            'endLine' => 183,
            'startTokenPos' => 363,
            'startFilePos' => 3980,
            'endTokenPos' => 363,
            'endFilePos' => 3984,
          ),
        ),
        'docComment' => '/**
 * Indicates if the connection is in a "dry run".
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 183,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeStartingTransaction' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'beforeStartingTransaction',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 190,
            'endLine' => 190,
            'startTokenPos' => 374,
            'startFilePos' => 4161,
            'endTokenPos' => 375,
            'endFilePos' => 4162,
          ),
        ),
        'docComment' => '/**
 * All of the callbacks that should be invoked before a transaction is started.
 *
 * @var \\Closure[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 190,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeExecutingCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'beforeExecutingCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 197,
            'endLine' => 197,
            'startTokenPos' => 386,
            'startFilePos' => 4333,
            'endTokenPos' => 387,
            'endFilePos' => 4334,
          ),
        ),
        'docComment' => '/**
 * All of the callbacks that should be invoked before a query is executed.
 *
 * @var \\Closure[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'doctrineConnection' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'doctrineConnection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The instance of Doctrine connection.
 *
 * @var \\Doctrine\\DBAL\\Connection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 204,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'doctrineTypeMappings' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'doctrineTypeMappings',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 211,
            'endLine' => 211,
            'startTokenPos' => 405,
            'startFilePos' => 4652,
            'endTokenPos' => 406,
            'endFilePos' => 4653,
          ),
        ),
        'docComment' => '/**
 * Type mappings that should be registered with new Doctrine connections.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 211,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'resolvers' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'name' => 'resolvers',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 218,
            'endLine' => 218,
            'startTokenPos' => 419,
            'startFilePos' => 4770,
            'endTokenPos' => 420,
            'endFilePos' => 4771,
          ),
        ),
        'docComment' => '/**
 * The connection resolvers.
 *
 * @var \\Closure[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 218,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 37,
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
          'pdo' => 
          array (
            'name' => 'pdo',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 229,
                'endLine' => 229,
                'startTokenPos' => 438,
                'startFilePos' => 5052,
                'endTokenPos' => 438,
                'endFilePos' => 5053,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'tablePrefix' => 
          array (
            'name' => 'tablePrefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 229,
                'endLine' => 229,
                'startTokenPos' => 445,
                'startFilePos' => 5071,
                'endTokenPos' => 445,
                'endFilePos' => 5072,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 55,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 229,
                'endLine' => 229,
                'startTokenPos' => 454,
                'startFilePos' => 5091,
                'endTokenPos' => 455,
                'endFilePos' => 5092,
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
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 74,
            'endColumn' => 91,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new database connection instance.
 *
 * @param  \\PDO|\\Closure  $pdo
 * @param  string  $database
 * @param  string  $tablePrefix
 * @param  array  $config
 * @return void
 */',
        'startLine' => 229,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'useDefaultQueryGrammar' => 
      array (
        'name' => 'useDefaultQueryGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the query grammar to the default implementation.
 *
 * @return void
 */',
        'startLine' => 255,
        'endLine' => 258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDefaultQueryGrammar' => 
      array (
        'name' => 'getDefaultQueryGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default query grammar instance.
 *
 * @return \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
        'startLine' => 265,
        'endLine' => 270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'useDefaultSchemaGrammar' => 
      array (
        'name' => 'useDefaultSchemaGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the schema grammar to the default implementation.
 *
 * @return void
 */',
        'startLine' => 277,
        'endLine' => 280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDefaultSchemaGrammar' => 
      array (
        'name' => 'getDefaultSchemaGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default schema grammar instance.
 *
 * @return \\Illuminate\\Database\\Schema\\Grammars\\Grammar|null
 */',
        'startLine' => 287,
        'endLine' => 290,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'useDefaultPostProcessor' => 
      array (
        'name' => 'useDefaultPostProcessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the query post processor to the default implementation.
 *
 * @return void
 */',
        'startLine' => 297,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDefaultPostProcessor' => 
      array (
        'name' => 'getDefaultPostProcessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default post processor instance.
 *
 * @return \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
        'startLine' => 307,
        'endLine' => 310,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getSchemaBuilder' => 
      array (
        'name' => 'getSchemaBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a schema builder instance for the connection.
 *
 * @return \\Illuminate\\Database\\Schema\\Builder
 */',
        'startLine' => 317,
        'endLine' => 324,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'table' => 
      array (
        'name' => 'table',
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
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 738,
                'startFilePos' => 7839,
                'endTokenPos' => 738,
                'endFilePos' => 7842,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 35,
            'endColumn' => 44,
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
 * Begin a fluent query against a database table.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  string|null  $as
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 333,
        'endLine' => 336,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'query' => 
      array (
        'name' => 'query',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a new query builder instance.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 343,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'selectOne' => 
      array (
        'name' => 'selectOne',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 358,
                'endLine' => 358,
                'startTokenPos' => 817,
                'startFilePos' => 8425,
                'endTokenPos' => 818,
                'endFilePos' => 8426,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'useReadPdo' => 
          array (
            'name' => 'useReadPdo',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 358,
                'endLine' => 358,
                'startTokenPos' => 825,
                'startFilePos' => 8443,
                'endTokenPos' => 825,
                'endFilePos' => 8446,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 55,
            'endColumn' => 72,
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
 * Run a select statement and return a single result.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return mixed
 */',
        'startLine' => 358,
        'endLine' => 363,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'scalar' => 
      array (
        'name' => 'scalar',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 375,
            'endLine' => 375,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 375,
                'endLine' => 375,
                'startTokenPos' => 873,
                'startFilePos' => 8905,
                'endTokenPos' => 874,
                'endFilePos' => 8906,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 375,
            'endLine' => 375,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'useReadPdo' => 
          array (
            'name' => 'useReadPdo',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 375,
                'endLine' => 375,
                'startTokenPos' => 881,
                'startFilePos' => 8923,
                'endTokenPos' => 881,
                'endFilePos' => 8926,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 375,
            'endLine' => 375,
            'startColumn' => 52,
            'endColumn' => 69,
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
 * Run a select statement and return the first column of the first row.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\MultipleColumnsSelectedException
 */',
        'startLine' => 375,
        'endLine' => 390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'selectFromWriteConnection' => 
      array (
        'name' => 'selectFromWriteConnection',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 399,
                'endLine' => 399,
                'startTokenPos' => 980,
                'startFilePos' => 9471,
                'endTokenPos' => 981,
                'endFilePos' => 9472,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 55,
            'endColumn' => 68,
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
 * Run a select statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return array
 */',
        'startLine' => 399,
        'endLine' => 402,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'select' => 
      array (
        'name' => 'select',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 412,
                'endLine' => 412,
                'startTokenPos' => 1019,
                'startFilePos' => 9782,
                'endTokenPos' => 1020,
                'endFilePos' => 9783,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'useReadPdo' => 
          array (
            'name' => 'useReadPdo',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 412,
                'endLine' => 412,
                'startTokenPos' => 1027,
                'startFilePos' => 9800,
                'endTokenPos' => 1027,
                'endFilePos' => 9803,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 52,
            'endColumn' => 69,
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
 * Run a select statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return array
 */',
        'startLine' => 412,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'selectResultSets' => 
      array (
        'name' => 'selectResultSets',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 442,
            'endLine' => 442,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 442,
                'endLine' => 442,
                'startTokenPos' => 1164,
                'startFilePos' => 10833,
                'endTokenPos' => 1165,
                'endFilePos' => 10834,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 442,
            'endLine' => 442,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'useReadPdo' => 
          array (
            'name' => 'useReadPdo',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 442,
                'endLine' => 442,
                'startTokenPos' => 1172,
                'startFilePos' => 10851,
                'endTokenPos' => 1172,
                'endFilePos' => 10854,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 442,
            'endLine' => 442,
            'startColumn' => 62,
            'endColumn' => 79,
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
 * Run a select statement against the database and returns all of the result sets.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return array
 */',
        'startLine' => 442,
        'endLine' => 465,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'cursor' => 
      array (
        'name' => 'cursor',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 475,
                'endLine' => 475,
                'startTokenPos' => 1337,
                'startFilePos' => 11733,
                'endTokenPos' => 1338,
                'endFilePos' => 11734,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'useReadPdo' => 
          array (
            'name' => 'useReadPdo',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 475,
                'endLine' => 475,
                'startTokenPos' => 1345,
                'startFilePos' => 11751,
                'endTokenPos' => 1345,
                'endFilePos' => 11754,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 52,
            'endColumn' => 69,
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
 * Run a select statement against the database and returns a generator.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return \\Generator
 */',
        'startLine' => 475,
        'endLine' => 503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => true,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'prepared' => 
      array (
        'name' => 'prepared',
        'parameters' => 
        array (
          'statement' => 
          array (
            'name' => 'statement',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'PDOStatement',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 33,
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
 * Configure the PDO prepared statement.
 *
 * @param  \\PDOStatement  $statement
 * @return \\PDOStatement
 */',
        'startLine' => 511,
        'endLine' => 518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getPdoForSelect' => 
      array (
        'name' => 'getPdoForSelect',
        'parameters' => 
        array (
          'useReadPdo' => 
          array (
            'name' => 'useReadPdo',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 526,
                'endLine' => 526,
                'startTokenPos' => 1555,
                'startFilePos' => 13422,
                'endTokenPos' => 1555,
                'endFilePos' => 13425,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 526,
            'endLine' => 526,
            'startColumn' => 40,
            'endColumn' => 57,
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
 * Get the PDO connection to use for a select query.
 *
 * @param  bool  $useReadPdo
 * @return \\PDO
 */',
        'startLine' => 526,
        'endLine' => 529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 538,
            'endLine' => 538,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 538,
                'endLine' => 538,
                'startTokenPos' => 1598,
                'startFilePos' => 13714,
                'endTokenPos' => 1599,
                'endFilePos' => 13715,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 538,
            'endLine' => 538,
            'startColumn' => 36,
            'endColumn' => 49,
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
 * Run an insert statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return bool
 */',
        'startLine' => 538,
        'endLine' => 541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 550,
                'endLine' => 550,
                'startTokenPos' => 1634,
                'startFilePos' => 13987,
                'endTokenPos' => 1635,
                'endFilePos' => 13988,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 36,
            'endColumn' => 49,
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
 * Run an update statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return int
 */',
        'startLine' => 550,
        'endLine' => 553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 562,
            'endLine' => 562,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 562,
                'endLine' => 562,
                'startTokenPos' => 1670,
                'startFilePos' => 14268,
                'endTokenPos' => 1671,
                'endFilePos' => 14269,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 562,
            'endLine' => 562,
            'startColumn' => 36,
            'endColumn' => 49,
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
 * Run a delete statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return int
 */',
        'startLine' => 562,
        'endLine' => 565,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'statement' => 
      array (
        'name' => 'statement',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 574,
            'endLine' => 574,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 574,
                'endLine' => 574,
                'startTokenPos' => 1706,
                'startFilePos' => 14564,
                'endTokenPos' => 1707,
                'endFilePos' => 14565,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 574,
            'endLine' => 574,
            'startColumn' => 39,
            'endColumn' => 52,
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
 * Execute an SQL statement and return the boolean result.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return bool
 */',
        'startLine' => 574,
        'endLine' => 589,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'affectingStatement' => 
      array (
        'name' => 'affectingStatement',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 598,
            'endLine' => 598,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 598,
                'endLine' => 598,
                'startTokenPos' => 1823,
                'startFilePos' => 15208,
                'endTokenPos' => 1824,
                'endFilePos' => 15209,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 598,
            'endLine' => 598,
            'startColumn' => 48,
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
 * Run an SQL statement and get the number of rows affected.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return int
 */',
        'startLine' => 598,
        'endLine' => 620,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'unprepared' => 
      array (
        'name' => 'unprepared',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 628,
            'endLine' => 628,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Run a raw, unprepared query against the PDO connection.
 *
 * @param  string  $query
 * @return bool
 */',
        'startLine' => 628,
        'endLine' => 641,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'pretend' => 
      array (
        'name' => 'pretend',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 29,
            'endColumn' => 45,
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
 * Execute the given callback in "dry run" mode.
 *
 * @param  \\Closure  $callback
 * @return array
 */',
        'startLine' => 649,
        'endLine' => 663,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'withoutPretending' => 
      array (
        'name' => 'withoutPretending',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 671,
            'endLine' => 671,
            'startColumn' => 39,
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
 * Execute the given callback without "pretending".
 *
 * @param  \\Closure  $callback
 * @return mixed
 */',
        'startLine' => 671,
        'endLine' => 684,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'withFreshQueryLog' => 
      array (
        'name' => 'withFreshQueryLog',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 692,
            'endLine' => 692,
            'startColumn' => 42,
            'endColumn' => 50,
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
 * Execute the given callback in "dry run" mode.
 *
 * @param  \\Closure  $callback
 * @return array
 */',
        'startLine' => 692,
        'endLine' => 711,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'bindValues' => 
      array (
        'name' => 'bindValues',
        'parameters' => 
        array (
          'statement' => 
          array (
            'name' => 'statement',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 720,
            'endLine' => 720,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 720,
            'endLine' => 720,
            'startColumn' => 44,
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
 * Bind values to their parameters in the given statement.
 *
 * @param  \\PDOStatement  $statement
 * @param  array  $bindings
 * @return void
 */',
        'startLine' => 720,
        'endLine' => 733,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'prepareBindings' => 
      array (
        'name' => 'prepareBindings',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
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
            'startLine' => 741,
            'endLine' => 741,
            'startColumn' => 37,
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
 * Prepare the query bindings for execution.
 *
 * @param  array  $bindings
 * @return array
 */',
        'startLine' => 741,
        'endLine' => 757,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'run' => 
      array (
        'name' => 'run',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 769,
            'endLine' => 769,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 769,
            'endLine' => 769,
            'startColumn' => 36,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 769,
            'endLine' => 769,
            'startColumn' => 47,
            'endColumn' => 63,
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
 * Run a SQL statement and log its execution context.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
        'startLine' => 769,
        'endLine' => 798,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'runQueryCallback' => 
      array (
        'name' => 'runQueryCallback',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 810,
            'endLine' => 810,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 810,
            'endLine' => 810,
            'startColumn' => 49,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 810,
            'endLine' => 810,
            'startColumn' => 60,
            'endColumn' => 76,
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
 * Run a SQL statement.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
        'startLine' => 810,
        'endLine' => 833,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'isUniqueConstraintError' => 
      array (
        'name' => 'isUniqueConstraintError',
        'parameters' => 
        array (
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Exception',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 841,
            'endLine' => 841,
            'startColumn' => 48,
            'endColumn' => 67,
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
 * Determine if the given database exception was caused by a unique constraint violation.
 *
 * @param  \\Exception  $exception
 * @return bool
 */',
        'startLine' => 841,
        'endLine' => 844,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'logQuery' => 
      array (
        'name' => 'logQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 854,
            'endLine' => 854,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 854,
            'endLine' => 854,
            'startColumn' => 38,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 854,
                'endLine' => 854,
                'startTokenPos' => 2832,
                'startFilePos' => 23214,
                'endTokenPos' => 2832,
                'endFilePos' => 23217,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 854,
            'endLine' => 854,
            'startColumn' => 49,
            'endColumn' => 60,
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
 * Log a query in the connection\'s query log.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  float|null  $time
 * @return void
 */',
        'startLine' => 854,
        'endLine' => 867,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getElapsedTime' => 
      array (
        'name' => 'getElapsedTime',
        'parameters' => 
        array (
          'start' => 
          array (
            'name' => 'start',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 875,
            'endLine' => 875,
            'startColumn' => 39,
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
 * Get the elapsed time since a given starting point.
 *
 * @param  int  $start
 * @return float
 */',
        'startLine' => 875,
        'endLine' => 878,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'whenQueryingForLongerThan' => 
      array (
        'name' => 'whenQueryingForLongerThan',
        'parameters' => 
        array (
          'threshold' => 
          array (
            'name' => 'threshold',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 887,
            'endLine' => 887,
            'startColumn' => 47,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 887,
            'endLine' => 887,
            'startColumn' => 59,
            'endColumn' => 66,
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
 * Register a callback to be invoked when the connection queries for longer than a given amount of time.
 *
 * @param  \\DateTimeInterface|\\Carbon\\CarbonInterval|float|int  $threshold
 * @param  callable  $handler
 * @return void
 */',
        'startLine' => 887,
        'endLine' => 911,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'allowQueryDurationHandlersToRunAgain' => 
      array (
        'name' => 'allowQueryDurationHandlersToRunAgain',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allow all the query duration handlers to run again, even if they have already run.
 *
 * @return void
 */',
        'startLine' => 918,
        'endLine' => 923,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'totalQueryDuration' => 
      array (
        'name' => 'totalQueryDuration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the duration of all run queries in milliseconds.
 *
 * @return float
 */',
        'startLine' => 930,
        'endLine' => 933,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'resetTotalQueryDuration' => 
      array (
        'name' => 'resetTotalQueryDuration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reset the duration of all run queries.
 *
 * @return void
 */',
        'startLine' => 940,
        'endLine' => 943,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'handleQueryException' => 
      array (
        'name' => 'handleQueryException',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\QueryException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 45,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 64,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 72,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 83,
            'endColumn' => 99,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle a query exception.
 *
 * @param  \\Illuminate\\Database\\QueryException  $e
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
        'startLine' => 956,
        'endLine' => 965,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'tryAgainIfCausedByLostConnection' => 
      array (
        'name' => 'tryAgainIfCausedByLostConnection',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\QueryException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 978,
            'endLine' => 978,
            'startColumn' => 57,
            'endColumn' => 73,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 978,
            'endLine' => 978,
            'startColumn' => 76,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 978,
            'endLine' => 978,
            'startColumn' => 84,
            'endColumn' => 92,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 978,
            'endLine' => 978,
            'startColumn' => 95,
            'endColumn' => 111,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle a query exception that occurred during query execution.
 *
 * @param  \\Illuminate\\Database\\QueryException  $e
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
        'startLine' => 978,
        'endLine' => 987,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'reconnect' => 
      array (
        'name' => 'reconnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reconnect to the database.
 *
 * @return mixed|false
 *
 * @throws \\Illuminate\\Database\\LostConnectionException
 */',
        'startLine' => 996,
        'endLine' => 1005,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'reconnectIfMissingConnection' => 
      array (
        'name' => 'reconnectIfMissingConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reconnect to the database if a PDO connection is missing.
 *
 * @return void
 */',
        'startLine' => 1012,
        'endLine' => 1017,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'disconnect' => 
      array (
        'name' => 'disconnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disconnect from the underlying PDO connection.
 *
 * @return void
 */',
        'startLine' => 1024,
        'endLine' => 1029,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'beforeStartingTransaction' => 
      array (
        'name' => 'beforeStartingTransaction',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 1037,
            'endLine' => 1037,
            'startColumn' => 47,
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
 * Register a hook to be run just before a database transaction is started.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 1037,
        'endLine' => 1042,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'beforeExecuting' => 
      array (
        'name' => 'beforeExecuting',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 1050,
            'endLine' => 1050,
            'startColumn' => 37,
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
 * Register a hook to be run just before a database query is executed.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 1050,
        'endLine' => 1055,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'listen' => 
      array (
        'name' => 'listen',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 1063,
            'endLine' => 1063,
            'startColumn' => 28,
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
 * Register a database query listener with the connection.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 1063,
        'endLine' => 1066,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'fireConnectionEvent' => 
      array (
        'name' => 'fireConnectionEvent',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1074,
            'endLine' => 1074,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Fire an event for this connection.
 *
 * @param  string  $event
 * @return array|null
 */',
        'startLine' => 1074,
        'endLine' => 1083,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'event' => 
      array (
        'name' => 'event',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1091,
            'endLine' => 1091,
            'startColumn' => 30,
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
 * Fire the given event if possible.
 *
 * @param  mixed  $event
 * @return void
 */',
        'startLine' => 1091,
        'endLine' => 1094,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'raw' => 
      array (
        'name' => 'raw',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1102,
            'endLine' => 1102,
            'startColumn' => 25,
            'endColumn' => 30,
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
 * Get a new raw query expression.
 *
 * @param  mixed  $value
 * @return \\Illuminate\\Contracts\\Database\\Query\\Expression
 */',
        'startLine' => 1102,
        'endLine' => 1105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escape' => 
      array (
        'name' => 'escape',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1114,
            'endLine' => 1114,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'binary' => 
          array (
            'name' => 'binary',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1114,
                'endLine' => 1114,
                'startTokenPos' => 3798,
                'startFilePos' => 30012,
                'endTokenPos' => 3798,
                'endFilePos' => 30016,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1114,
            'endLine' => 1114,
            'startColumn' => 36,
            'endColumn' => 50,
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
 * Escape a value for safe SQL embedding.
 *
 * @param  string|float|int|bool|null  $value
 * @param  bool  $binary
 * @return string
 */',
        'startLine' => 1114,
        'endLine' => 1137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escapeString' => 
      array (
        'name' => 'escapeString',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1145,
            'endLine' => 1145,
            'startColumn' => 37,
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
 * Escape a string value for safe SQL embedding.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1145,
        'endLine' => 1148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escapeBool' => 
      array (
        'name' => 'escapeBool',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1156,
            'endLine' => 1156,
            'startColumn' => 35,
            'endColumn' => 40,
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
 * Escape a boolean value for safe SQL embedding.
 *
 * @param  bool  $value
 * @return string
 */',
        'startLine' => 1156,
        'endLine' => 1159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escapeBinary' => 
      array (
        'name' => 'escapeBinary',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1167,
            'endLine' => 1167,
            'startColumn' => 37,
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
 * Escape a binary value for safe SQL embedding.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1167,
        'endLine' => 1170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'hasModifiedRecords' => 
      array (
        'name' => 'hasModifiedRecords',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the database connection has modified any database records.
 *
 * @return bool
 */',
        'startLine' => 1177,
        'endLine' => 1180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'recordsHaveBeenModified' => 
      array (
        'name' => 'recordsHaveBeenModified',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1188,
                'endLine' => 1188,
                'startTokenPos' => 4104,
                'startFilePos' => 32048,
                'endTokenPos' => 4104,
                'endFilePos' => 32051,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1188,
            'endLine' => 1188,
            'startColumn' => 45,
            'endColumn' => 57,
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
 * Indicate if any records have been modified.
 *
 * @param  bool  $value
 * @return void
 */',
        'startLine' => 1188,
        'endLine' => 1193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setRecordModificationState' => 
      array (
        'name' => 'setRecordModificationState',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1201,
            'endLine' => 1201,
            'startColumn' => 48,
            'endColumn' => 58,
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
 * Set the record modification state.
 *
 * @param  bool  $value
 * @return $this
 */',
        'startLine' => 1201,
        'endLine' => 1206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'forgetRecordModificationState' => 
      array (
        'name' => 'forgetRecordModificationState',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reset the record modification state.
 *
 * @return void
 */',
        'startLine' => 1213,
        'endLine' => 1216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'useWriteConnectionWhenReading' => 
      array (
        'name' => 'useWriteConnectionWhenReading',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1224,
                'endLine' => 1224,
                'startTokenPos' => 4200,
                'startFilePos' => 32819,
                'endTokenPos' => 4200,
                'endFilePos' => 32822,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1224,
            'endLine' => 1224,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Indicate that the connection should use the write PDO connection for reads.
 *
 * @param  bool  $value
 * @return $this
 */',
        'startLine' => 1224,
        'endLine' => 1229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'isDoctrineAvailable' => 
      array (
        'name' => 'isDoctrineAvailable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Is Doctrine available?
 *
 * @return bool
 */',
        'startLine' => 1236,
        'endLine' => 1239,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'usingNativeSchemaOperations' => 
      array (
        'name' => 'usingNativeSchemaOperations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether native alter operations will be used when dropping, renaming, or modifying columns, even if Doctrine DBAL is installed.
 *
 * @return bool
 */',
        'startLine' => 1246,
        'endLine' => 1249,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDoctrineColumn' => 
      array (
        'name' => 'getDoctrineColumn',
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
            'startLine' => 1258,
            'endLine' => 1258,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1258,
            'endLine' => 1258,
            'startColumn' => 47,
            'endColumn' => 53,
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
 * Get a Doctrine Schema Column instance.
 *
 * @param  string  $table
 * @param  string  $column
 * @return \\Doctrine\\DBAL\\Schema\\Column
 */',
        'startLine' => 1258,
        'endLine' => 1263,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDoctrineSchemaManager' => 
      array (
        'name' => 'getDoctrineSchemaManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Doctrine DBAL schema manager for the connection.
 *
 * @return \\Doctrine\\DBAL\\Schema\\AbstractSchemaManager
 */',
        'startLine' => 1270,
        'endLine' => 1275,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDoctrineConnection' => 
      array (
        'name' => 'getDoctrineConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Doctrine DBAL database connection instance.
 *
 * @return \\Doctrine\\DBAL\\Connection
 */',
        'startLine' => 1282,
        'endLine' => 1302,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'registerDoctrineType' => 
      array (
        'name' => 'registerDoctrineType',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
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
                      'name' => 'Doctrine\\DBAL\\Types\\Type',
                      'isIdentifier' => false,
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
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1315,
            'endLine' => 1315,
            'startColumn' => 42,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 1315,
            'endLine' => 1315,
            'startColumn' => 62,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
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
            'startLine' => 1315,
            'endLine' => 1315,
            'startColumn' => 76,
            'endColumn' => 87,
            'parameterIndex' => 2,
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
 * Register a custom Doctrine mapping type.
 *
 * @param  Type|class-string<Type>  $class
 * @param  string  $name
 * @param  string  $type
 * @return void
 *
 * @throws \\Doctrine\\DBAL\\Exception
 * @throws \\RuntimeException
 */',
        'startLine' => 1315,
        'endLine' => 1329,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getPdo' => 
      array (
        'name' => 'getPdo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current PDO connection.
 *
 * @return \\PDO
 */',
        'startLine' => 1336,
        'endLine' => 1343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getRawPdo' => 
      array (
        'name' => 'getRawPdo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current PDO connection parameter without executing any reconnect logic.
 *
 * @return \\PDO|\\Closure|null
 */',
        'startLine' => 1350,
        'endLine' => 1353,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getReadPdo' => 
      array (
        'name' => 'getReadPdo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current PDO connection used for reading.
 *
 * @return \\PDO
 */',
        'startLine' => 1360,
        'endLine' => 1376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getRawReadPdo' => 
      array (
        'name' => 'getRawReadPdo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current read PDO connection parameter without executing any reconnect logic.
 *
 * @return \\PDO|\\Closure|null
 */',
        'startLine' => 1383,
        'endLine' => 1386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setPdo' => 
      array (
        'name' => 'setPdo',
        'parameters' => 
        array (
          'pdo' => 
          array (
            'name' => 'pdo',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1394,
            'endLine' => 1394,
            'startColumn' => 28,
            'endColumn' => 31,
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
 * Set the PDO connection.
 *
 * @param  \\PDO|\\Closure|null  $pdo
 * @return $this
 */',
        'startLine' => 1394,
        'endLine' => 1401,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setReadPdo' => 
      array (
        'name' => 'setReadPdo',
        'parameters' => 
        array (
          'pdo' => 
          array (
            'name' => 'pdo',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1409,
            'endLine' => 1409,
            'startColumn' => 32,
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
 * Set the PDO connection used for reading.
 *
 * @param  \\PDO|\\Closure|null  $pdo
 * @return $this
 */',
        'startLine' => 1409,
        'endLine' => 1414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setReconnector' => 
      array (
        'name' => 'setReconnector',
        'parameters' => 
        array (
          'reconnector' => 
          array (
            'name' => 'reconnector',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1422,
            'endLine' => 1422,
            'startColumn' => 36,
            'endColumn' => 56,
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
 * Set the reconnect instance on the connection.
 *
 * @param  callable  $reconnector
 * @return $this
 */',
        'startLine' => 1422,
        'endLine' => 1427,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getName' => 
      array (
        'name' => 'getName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database connection name.
 *
 * @return string|null
 */',
        'startLine' => 1434,
        'endLine' => 1437,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getNameWithReadWriteType' => 
      array (
        'name' => 'getNameWithReadWriteType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database connection full name.
 *
 * @return string|null
 */',
        'startLine' => 1444,
        'endLine' => 1447,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getConfig' => 
      array (
        'name' => 'getConfig',
        'parameters' => 
        array (
          'option' => 
          array (
            'name' => 'option',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1455,
                'endLine' => 1455,
                'startTokenPos' => 5020,
                'startFilePos' => 38451,
                'endTokenPos' => 5020,
                'endFilePos' => 38454,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1455,
            'endLine' => 1455,
            'startColumn' => 31,
            'endColumn' => 44,
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
 * Get an option from the configuration options.
 *
 * @param  string|null  $option
 * @return mixed
 */',
        'startLine' => 1455,
        'endLine' => 1458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDriverName' => 
      array (
        'name' => 'getDriverName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the PDO driver name.
 *
 * @return string
 */',
        'startLine' => 1465,
        'endLine' => 1468,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getQueryGrammar' => 
      array (
        'name' => 'getQueryGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the query grammar used by the connection.
 *
 * @return \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
        'startLine' => 1475,
        'endLine' => 1478,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setQueryGrammar' => 
      array (
        'name' => 'setQueryGrammar',
        'parameters' => 
        array (
          'grammar' => 
          array (
            'name' => 'grammar',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1486,
            'endLine' => 1486,
            'startColumn' => 37,
            'endColumn' => 67,
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
 * Set the query grammar used by the connection.
 *
 * @param  \\Illuminate\\Database\\Query\\Grammars\\Grammar  $grammar
 * @return $this
 */',
        'startLine' => 1486,
        'endLine' => 1491,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getSchemaGrammar' => 
      array (
        'name' => 'getSchemaGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the schema grammar used by the connection.
 *
 * @return \\Illuminate\\Database\\Schema\\Grammars\\Grammar
 */',
        'startLine' => 1498,
        'endLine' => 1501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setSchemaGrammar' => 
      array (
        'name' => 'setSchemaGrammar',
        'parameters' => 
        array (
          'grammar' => 
          array (
            'name' => 'grammar',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Schema\\Grammars\\Grammar',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1509,
            'endLine' => 1509,
            'startColumn' => 38,
            'endColumn' => 69,
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
 * Set the schema grammar used by the connection.
 *
 * @param  \\Illuminate\\Database\\Schema\\Grammars\\Grammar  $grammar
 * @return $this
 */',
        'startLine' => 1509,
        'endLine' => 1514,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getPostProcessor' => 
      array (
        'name' => 'getPostProcessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the query post processor used by the connection.
 *
 * @return \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
        'startLine' => 1521,
        'endLine' => 1524,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setPostProcessor' => 
      array (
        'name' => 'setPostProcessor',
        'parameters' => 
        array (
          'processor' => 
          array (
            'name' => 'processor',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Processors\\Processor',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1532,
            'endLine' => 1532,
            'startColumn' => 38,
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
 * Set the query post processor used by the connection.
 *
 * @param  \\Illuminate\\Database\\Query\\Processors\\Processor  $processor
 * @return $this
 */',
        'startLine' => 1532,
        'endLine' => 1537,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getEventDispatcher' => 
      array (
        'name' => 'getEventDispatcher',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the event dispatcher used by the connection.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
        'startLine' => 1544,
        'endLine' => 1547,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setEventDispatcher' => 
      array (
        'name' => 'setEventDispatcher',
        'parameters' => 
        array (
          'events' => 
          array (
            'name' => 'events',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1555,
            'endLine' => 1555,
            'startColumn' => 40,
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
 * Set the event dispatcher instance on the connection.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @return $this
 */',
        'startLine' => 1555,
        'endLine' => 1560,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'unsetEventDispatcher' => 
      array (
        'name' => 'unsetEventDispatcher',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unset the event dispatcher for this connection.
 *
 * @return void
 */',
        'startLine' => 1567,
        'endLine' => 1570,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setTransactionManager' => 
      array (
        'name' => 'setTransactionManager',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1578,
            'endLine' => 1578,
            'startColumn' => 43,
            'endColumn' => 50,
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
 * Set the transaction manager instance on the connection.
 *
 * @param  \\Illuminate\\Database\\DatabaseTransactionsManager  $manager
 * @return $this
 */',
        'startLine' => 1578,
        'endLine' => 1583,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'unsetTransactionManager' => 
      array (
        'name' => 'unsetTransactionManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unset the transaction manager for this connection.
 *
 * @return void
 */',
        'startLine' => 1590,
        'endLine' => 1593,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'pretending' => 
      array (
        'name' => 'pretending',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the connection is in a "dry run".
 *
 * @return bool
 */',
        'startLine' => 1600,
        'endLine' => 1603,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getQueryLog' => 
      array (
        'name' => 'getQueryLog',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the connection query log.
 *
 * @return array
 */',
        'startLine' => 1610,
        'endLine' => 1613,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getRawQueryLog' => 
      array (
        'name' => 'getRawQueryLog',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the connection query log with embedded bindings.
 *
 * @return array
 */',
        'startLine' => 1620,
        'endLine' => 1629,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'flushQueryLog' => 
      array (
        'name' => 'flushQueryLog',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clear the query log.
 *
 * @return void
 */',
        'startLine' => 1636,
        'endLine' => 1639,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'enableQueryLog' => 
      array (
        'name' => 'enableQueryLog',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enable the query log on the connection.
 *
 * @return void
 */',
        'startLine' => 1646,
        'endLine' => 1649,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'disableQueryLog' => 
      array (
        'name' => 'disableQueryLog',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disable the query log on the connection.
 *
 * @return void
 */',
        'startLine' => 1656,
        'endLine' => 1659,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'logging' => 
      array (
        'name' => 'logging',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine whether we\'re logging queries.
 *
 * @return bool
 */',
        'startLine' => 1666,
        'endLine' => 1669,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDatabaseName' => 
      array (
        'name' => 'getDatabaseName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the name of the connected database.
 *
 * @return string
 */',
        'startLine' => 1676,
        'endLine' => 1679,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setDatabaseName' => 
      array (
        'name' => 'setDatabaseName',
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
            'startLine' => 1687,
            'endLine' => 1687,
            'startColumn' => 37,
            'endColumn' => 45,
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
 * Set the name of the connected database.
 *
 * @param  string  $database
 * @return $this
 */',
        'startLine' => 1687,
        'endLine' => 1692,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setReadWriteType' => 
      array (
        'name' => 'setReadWriteType',
        'parameters' => 
        array (
          'readWriteType' => 
          array (
            'name' => 'readWriteType',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1700,
            'endLine' => 1700,
            'startColumn' => 38,
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
 * Set the read / write type of the connection.
 *
 * @param  string|null  $readWriteType
 * @return $this
 */',
        'startLine' => 1700,
        'endLine' => 1705,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getTablePrefix' => 
      array (
        'name' => 'getTablePrefix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the table prefix for the connection.
 *
 * @return string
 */',
        'startLine' => 1712,
        'endLine' => 1715,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setTablePrefix' => 
      array (
        'name' => 'setTablePrefix',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1723,
            'endLine' => 1723,
            'startColumn' => 36,
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
 * Set the table prefix in use by the connection.
 *
 * @param  string  $prefix
 * @return $this
 */',
        'startLine' => 1723,
        'endLine' => 1730,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'withTablePrefix' => 
      array (
        'name' => 'withTablePrefix',
        'parameters' => 
        array (
          'grammar' => 
          array (
            'name' => 'grammar',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Grammar',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1738,
            'endLine' => 1738,
            'startColumn' => 37,
            'endColumn' => 52,
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
 * Set the table prefix and return the grammar.
 *
 * @param  \\Illuminate\\Database\\Grammar  $grammar
 * @return \\Illuminate\\Database\\Grammar
 */',
        'startLine' => 1738,
        'endLine' => 1743,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'resolverFor' => 
      array (
        'name' => 'resolverFor',
        'parameters' => 
        array (
          'driver' => 
          array (
            'name' => 'driver',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1752,
            'endLine' => 1752,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 1752,
            'endLine' => 1752,
            'startColumn' => 49,
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
 * Register a connection resolver.
 *
 * @param  string  $driver
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 1752,
        'endLine' => 1755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getResolver' => 
      array (
        'name' => 'getResolver',
        'parameters' => 
        array (
          'driver' => 
          array (
            'name' => 'driver',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1763,
            'endLine' => 1763,
            'startColumn' => 40,
            'endColumn' => 46,
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
 * Get the connection resolver for the given driver.
 *
 * @param  string  $driver
 * @return mixed
 */',
        'startLine' => 1763,
        'endLine' => 1766,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\Connection',
        'implementingClassName' => 'Illuminate\\Database\\Connection',
        'currentClassName' => 'Illuminate\\Database\\Connection',
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