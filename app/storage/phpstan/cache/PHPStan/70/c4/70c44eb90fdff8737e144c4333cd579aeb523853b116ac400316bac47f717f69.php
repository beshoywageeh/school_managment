<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/ConnectionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\ConnectionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-137684e2680b2cd6d2dd8646502b20fbf59a4e1304e9fdd00666bc4a60de080a-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\ConnectionInterface',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/ConnectionInterface.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database',
    'name' => 'Illuminate\\Database\\ConnectionInterface',
    'shortName' => 'ConnectionInterface',
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
    'endLine' => 170,
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
            'startLine' => 16,
            'endLine' => 16,
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
                'startLine' => 16,
                'endLine' => 16,
                'startTokenPos' => 33,
                'startFilePos' => 358,
                'endTokenPos' => 33,
                'endFilePos' => 361,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
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
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|string  $table
 * @param  string|null  $as
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 24,
            'endLine' => 24,
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
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 34,
            'endLine' => 34,
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
                'startLine' => 34,
                'endLine' => 34,
                'startTokenPos' => 64,
                'startFilePos' => 801,
                'endTokenPos' => 65,
                'endFilePos' => 802,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
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
                'startLine' => 34,
                'endLine' => 34,
                'startTokenPos' => 72,
                'startFilePos' => 819,
                'endTokenPos' => 72,
                'endFilePos' => 822,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
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
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 74,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 44,
            'endLine' => 44,
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
                'startLine' => 44,
                'endLine' => 44,
                'startTokenPos' => 91,
                'startFilePos' => 1065,
                'endTokenPos' => 92,
                'endFilePos' => 1066,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
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
                'startLine' => 44,
                'endLine' => 44,
                'startTokenPos' => 99,
                'startFilePos' => 1083,
                'endTokenPos' => 99,
                'endFilePos' => 1086,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
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
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 54,
            'endLine' => 54,
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
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 118,
                'startFilePos' => 1358,
                'endTokenPos' => 119,
                'endFilePos' => 1359,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
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
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 126,
                'startFilePos' => 1376,
                'endTokenPos' => 126,
                'endFilePos' => 1379,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
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
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 63,
            'endLine' => 63,
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
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 145,
                'startFilePos' => 1589,
                'endTokenPos' => 146,
                'endFilePos' => 1590,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
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
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 72,
            'endLine' => 72,
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
                'startLine' => 72,
                'endLine' => 72,
                'startTokenPos' => 165,
                'startFilePos' => 1799,
                'endTokenPos' => 166,
                'endFilePos' => 1800,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
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
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 81,
            'endLine' => 81,
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
                'startLine' => 81,
                'endLine' => 81,
                'startTokenPos' => 185,
                'startFilePos' => 2008,
                'endTokenPos' => 186,
                'endFilePos' => 2009,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 81,
            'endLine' => 81,
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
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 90,
            'endLine' => 90,
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
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 205,
                'startFilePos' => 2232,
                'endTokenPos' => 206,
                'endFilePos' => 2233,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
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
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 99,
            'endLine' => 99,
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
                'startLine' => 99,
                'endLine' => 99,
                'startTokenPos' => 225,
                'startFilePos' => 2466,
                'endTokenPos' => 226,
                'endFilePos' => 2467,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 99,
            'endLine' => 99,
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
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 107,
            'endLine' => 107,
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
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 115,
            'endLine' => 115,
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
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'transaction' => 
      array (
        'name' => 'transaction',
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
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attempts' => 
          array (
            'name' => 'attempts',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 126,
                'endLine' => 126,
                'startTokenPos' => 273,
                'startFilePos' => 3081,
                'endTokenPos' => 273,
                'endFilePos' => 3081,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 52,
            'endColumn' => 64,
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
 * Execute a Closure within a transaction.
 *
 * @param  \\Closure  $callback
 * @param  int  $attempts
 * @return mixed
 *
 * @throws \\Throwable
 */',
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'beginTransaction' => 
      array (
        'name' => 'beginTransaction',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Start a new database transaction.
 *
 * @return void
 */',
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'commit' => 
      array (
        'name' => 'commit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Commit the active database transaction.
 *
 * @return void
 */',
        'startLine' => 140,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'rollBack' => 
      array (
        'name' => 'rollBack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Rollback the active database transaction.
 *
 * @return void
 */',
        'startLine' => 147,
        'endLine' => 147,
        'startColumn' => 5,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'transactionLevel' => 
      array (
        'name' => 'transactionLevel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of active transactions.
 *
 * @return int
 */',
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
            'startLine' => 162,
            'endLine' => 162,
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
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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
        'startLine' => 169,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'implementingClassName' => 'Illuminate\\Database\\ConnectionInterface',
        'currentClassName' => 'Illuminate\\Database\\ConnectionInterface',
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