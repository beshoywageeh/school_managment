<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Connection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Doctrine\DBAL\Connection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-cbee5e960211459f655d71eb3f8c3a07f800d293c22958924b01c385a704c384-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Doctrine\\DBAL\\Connection',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Connection.php',
      ),
    ),
    'namespace' => 'Doctrine\\DBAL',
    'name' => 'Doctrine\\DBAL\\Connection',
    'shortName' => 'Connection',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A database abstraction-level connection that implements features like events, transaction isolation levels,
 * configuration, emulated transaction nesting, lazy connecting and more.
 *
 * @phpstan-import-type Params from DriverManager
 * @phpstan-consistent-constructor
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 59,
    'endLine' => 2038,
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
      'PARAM_INT_ARRAY' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'PARAM_INT_ARRAY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Doctrine\\DBAL\\ArrayParameterType::INTEGER',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 284,
            'startFilePos' => 2272,
            'endTokenPos' => 286,
            'endFilePos' => 2298,
          ),
        ),
        'docComment' => '/**
 * Represents an array of ints to be expanded by Doctrine SQL parsing.
 *
 * @deprecated Use {@see ArrayParameterType::INTEGER} instead.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 63,
      ),
      'PARAM_STR_ARRAY' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'PARAM_STR_ARRAY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Doctrine\\DBAL\\ArrayParameterType::STRING',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 299,
            'startFilePos' => 2504,
            'endTokenPos' => 301,
            'endFilePos' => 2529,
          ),
        ),
        'docComment' => '/**
 * Represents an array of strings to be expanded by Doctrine SQL parsing.
 *
 * @deprecated Use {@see ArrayParameterType::STRING} instead.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 62,
      ),
      'PARAM_ASCII_STR_ARRAY' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'PARAM_ASCII_STR_ARRAY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Doctrine\\DBAL\\ArrayParameterType::ASCII',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 314,
            'startFilePos' => 2746,
            'endTokenPos' => 316,
            'endFilePos' => 2770,
          ),
        ),
        'docComment' => '/**
 * Represents an array of ascii strings to be expanded by Doctrine SQL parsing.
 *
 * @deprecated Use {@see ArrayParameterType::ASCII} instead.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 67,
      ),
      'ARRAY_PARAM_OFFSET' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'ARRAY_PARAM_OFFSET',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '100',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 329,
            'startFilePos' => 2981,
            'endTokenPos' => 329,
            'endFilePos' => 2983,
          ),
        ),
        'docComment' => '/**
 * Offset by which PARAM_* constants are detected as arrays of the param type.
 *
 * @internal Should be used only within the wrapper layer.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
    ),
    'immediateProperties' => 
    array (
      '_conn' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => '_conn',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The wrapped driver connection.
 *
 * @var DriverConnection|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_config' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => '_config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var Configuration */',
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_eventManager' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => '_eventManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @deprecated
 *
 * @var EventManager
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_expr' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => '_expr',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @deprecated Use {@see createExpressionBuilder()} instead.
 *
 * @var ExpressionBuilder
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'autoCommit' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'autoCommit',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 116,
            'endLine' => 116,
            'startTokenPos' => 370,
            'startFilePos' => 3502,
            'endTokenPos' => 370,
            'endFilePos' => 3505,
          ),
        ),
        'docComment' => '/**
 * The current auto-commit mode of this connection.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transactionNestingLevel' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'transactionNestingLevel',
        'modifiers' => 4,
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
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 121,
            'endLine' => 121,
            'startTokenPos' => 383,
            'startFilePos' => 3606,
            'endTokenPos' => 383,
            'endFilePos' => 3606,
          ),
        ),
        'docComment' => '/**
 * The transaction nesting level.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 121,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transactionIsolationLevel' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'transactionIsolationLevel',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The currently active transaction isolation level or NULL before it has been determined.
 *
 * @var TransactionIsolationLevel::*|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 128,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'nestTransactionsWithSavepoints' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'nestTransactionsWithSavepoints',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 133,
            'endLine' => 133,
            'startTokenPos' => 403,
            'startFilePos' => 3935,
            'endTokenPos' => 403,
            'endFilePos' => 3939,
          ),
        ),
        'docComment' => '/**
 * If nested transactions should use savepoints.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 57,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'params' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'params',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The parameters used during creation of the Connection instance.
 *
 * @var array<string,mixed>
 * @phpstan-var Params
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 141,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'platform' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'platform',
        'modifiers' => 4,
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
                  'name' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
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
            'startLine' => 146,
            'endLine' => 146,
            'startTokenPos' => 426,
            'startFilePos' => 4274,
            'endTokenPos' => 426,
            'endFilePos' => 4277,
          ),
        ),
        'docComment' => '/**
 * The database platform object used by the connection or NULL before it\'s initialized.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 146,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'exceptionConverter' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'exceptionConverter',
        'modifiers' => 4,
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
                  'name' => 'Doctrine\\DBAL\\Driver\\API\\ExceptionConverter',
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
            'startLine' => 148,
            'endLine' => 148,
            'startTokenPos' => 438,
            'startFilePos' => 4335,
            'endTokenPos' => 438,
            'endFilePos' => 4338,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 148,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 59,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'parser' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'parser',
        'modifiers' => 4,
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
                  'name' => 'Doctrine\\DBAL\\SQL\\Parser',
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
            'startLine' => 149,
            'endLine' => 149,
            'startTokenPos' => 450,
            'startFilePos' => 4395,
            'endTokenPos' => 450,
            'endFilePos' => 4398,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 149,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 59,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_schemaManager' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => '_schemaManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The schema manager.
 *
 * @deprecated Use {@see createSchemaManager()} instead.
 *
 * @var AbstractSchemaManager|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 158,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_driver' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => '_driver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The used DBAL driver.
 *
 * @var Driver
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 165,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isRollbackOnly' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'isRollbackOnly',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 170,
            'endLine' => 170,
            'startTokenPos' => 477,
            'startFilePos' => 4826,
            'endTokenPos' => 477,
            'endFilePos' => 4830,
          ),
        ),
        'docComment' => '/**
 * Flag that indicates whether the current transaction is marked for rollback only.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 170,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'schemaManagerFactory' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'name' => 'schemaManagerFactory',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Schema\\SchemaManagerFactory',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 172,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 55,
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
          'params' => 
          array (
            'name' => 'params',
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
              0 => 
              array (
                'name' => 'SensitiveParameter',
                'isRepeated' => false,
                'arguments' => 
                array (
                ),
              ),
            ),
            'startLine' => 188,
            'endLine' => 189,
            'startColumn' => 9,
            'endColumn' => 21,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'driver' => 
          array (
            'name' => 'driver',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Driver',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 9,
            'endColumn' => 22,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 517,
                'startFilePos' => 5568,
                'endTokenPos' => 517,
                'endFilePos' => 5571,
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
                      'name' => 'Doctrine\\DBAL\\Configuration',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 9,
            'endColumn' => 37,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'eventManager' => 
          array (
            'name' => 'eventManager',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 192,
                'endLine' => 192,
                'startTokenPos' => 527,
                'startFilePos' => 5612,
                'endTokenPos' => 527,
                'endFilePos' => 5615,
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
                      'name' => 'Doctrine\\Common\\EventManager',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 9,
            'endColumn' => 42,
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
 * Initializes a new instance of the Connection class.
 *
 * @internal The connection can be only instantiated by the driver manager.
 *
 * @param array<string,mixed> $params       The connection parameters.
 * @param Driver              $driver       The driver to use.
 * @param Configuration|null  $config       The configuration, optional.
 * @param EventManager|null   $eventManager The event manager, optional.
 * @phpstan-param Params $params
 *
 * @throws Exception
 */',
        'startLine' => 187,
        'endLine' => 239,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getParams' => 
      array (
        'name' => 'getParams',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the parameters used during instantiation.
 *
 * @internal
 *
 * @return array<string,mixed>
 * @phpstan-return Params
 */',
        'startLine' => 249,
        'endLine' => 252,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getDatabase' => 
      array (
        'name' => 'getDatabase',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the name of the currently selected database.
 *
 * @return string|null The name of the database or NULL if a database is not selected.
 *                     The platforms which don\'t support the concept of a database (e.g. embedded databases)
 *                     must always return a string as an indicator of an implicitly selected database.
 *
 * @throws Exception
 */',
        'startLine' => 263,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getDriver' => 
      array (
        'name' => 'getDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the DBAL driver instance.
 *
 * @return Driver
 */',
        'startLine' => 279,
        'endLine' => 282,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getConfiguration' => 
      array (
        'name' => 'getConfiguration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the Configuration used by the Connection.
 *
 * @return Configuration
 */',
        'startLine' => 289,
        'endLine' => 292,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getEventManager' => 
      array (
        'name' => 'getEventManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the EventManager used by the Connection.
 *
 * @deprecated
 *
 * @return EventManager
 */',
        'startLine' => 301,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
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
 * Gets the DatabasePlatform for the connection.
 *
 * @return AbstractPlatform
 *
 * @throws Exception
 */',
        'startLine' => 320,
        'endLine' => 329,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'createExpressionBuilder' => 
      array (
        'name' => 'createExpressionBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Query\\Expression\\ExpressionBuilder',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates an expression builder for the connection.
 */',
        'startLine' => 334,
        'endLine' => 337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getExpressionBuilder' => 
      array (
        'name' => 'getExpressionBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the ExpressionBuilder for the connection.
 *
 * @deprecated Use {@see createExpressionBuilder()} instead.
 *
 * @return ExpressionBuilder
 */',
        'startLine' => 346,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'connect' => 
      array (
        'name' => 'connect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Establishes the connection with the database.
 *
 * @internal This method will be made protected in DBAL 4.0.
 *
 * @return bool TRUE if the connection was successfully established, FALSE if
 *              the connection is already open.
 *
 * @throws Exception
 *
 * @phpstan-assert !null $this->_conn
 */',
        'startLine' => 370,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'detectDatabasePlatform' => 
      array (
        'name' => 'detectDatabasePlatform',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Detects and sets the database platform.
 *
 * Evaluates custom platform class and version in order to set the correct platform.
 *
 * @throws Exception If an invalid platform was specified for this connection.
 */',
        'startLine' => 414,
        'endLine' => 425,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getDatabasePlatformVersion' => 
      array (
        'name' => 'getDatabasePlatformVersion',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the version of the related platform if applicable.
 *
 * Returns null if either the driver is not capable to create version
 * specific platform instances, no explicit server version was specified
 * or the underlying driver connection cannot determine the platform
 * version without having to query it (performance reasons).
 *
 * @return string|null
 *
 * @throws Throwable
 */',
        'startLine' => 439,
        'endLine' => 499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getServerVersion' => 
      array (
        'name' => 'getServerVersion',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the database server version if the underlying driver supports it.
 *
 * @return string|null
 *
 * @throws Exception
 */',
        'startLine' => 508,
        'endLine' => 530,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'isAutoCommit' => 
      array (
        'name' => 'isAutoCommit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current auto-commit mode for this connection.
 *
 * @see    setAutoCommit
 *
 * @return bool True if auto-commit mode is currently enabled for this connection, false otherwise.
 */',
        'startLine' => 539,
        'endLine' => 542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'setAutoCommit' => 
      array (
        'name' => 'setAutoCommit',
        'parameters' => 
        array (
          'autoCommit' => 
          array (
            'name' => 'autoCommit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 560,
            'endLine' => 560,
            'startColumn' => 35,
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
 * Sets auto-commit mode for this connection.
 *
 * If a connection is in auto-commit mode, then all its SQL statements will be executed and committed as individual
 * transactions. Otherwise, its SQL statements are grouped into transactions that are terminated by a call to either
 * the method commit or the method rollback. By default, new connections are in auto-commit mode.
 *
 * NOTE: If this method is called during a transaction and the auto-commit mode is changed, the transaction is
 * committed. If this method is called and the auto-commit mode is not changed, the call is a no-op.
 *
 * @see   isAutoCommit
 *
 * @param bool $autoCommit True to enable auto-commit mode; false to disable it.
 *
 * @return void
 */',
        'startLine' => 560,
        'endLine' => 577,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchAssociative' => 
      array (
        'name' => 'fetchAssociative',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 591,
            'endLine' => 591,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 591,
                'endLine' => 591,
                'startTokenPos' => 1959,
                'startFilePos' => 18558,
                'endTokenPos' => 1960,
                'endFilePos' => 18559,
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
            'startLine' => 591,
            'endLine' => 591,
            'startColumn' => 53,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 591,
                'endLine' => 591,
                'startTokenPos' => 1969,
                'startFilePos' => 18577,
                'endTokenPos' => 1970,
                'endFilePos' => 18578,
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
            'startLine' => 591,
            'endLine' => 591,
            'startColumn' => 73,
            'endColumn' => 89,
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
 * Prepares and executes an SQL query and returns the first row of the result
 * as an associative array.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return array<string, mixed>|false False is returned if no rows are found.
 *
 * @throws Exception
 */',
        'startLine' => 591,
        'endLine' => 594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchNumeric' => 
      array (
        'name' => 'fetchNumeric',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 608,
            'endLine' => 608,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 608,
                'endLine' => 608,
                'startTokenPos' => 2016,
                'startFilePos' => 19311,
                'endTokenPos' => 2017,
                'endFilePos' => 19312,
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
            'startLine' => 608,
            'endLine' => 608,
            'startColumn' => 49,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 608,
                'endLine' => 608,
                'startTokenPos' => 2026,
                'startFilePos' => 19330,
                'endTokenPos' => 2027,
                'endFilePos' => 19331,
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
            'startLine' => 608,
            'endLine' => 608,
            'startColumn' => 69,
            'endColumn' => 85,
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
 * Prepares and executes an SQL query and returns the first row of the result
 * as a numerically indexed array.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return list<mixed>|false False is returned if no rows are found.
 *
 * @throws Exception
 */',
        'startLine' => 608,
        'endLine' => 611,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchOne' => 
      array (
        'name' => 'fetchOne',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 625,
            'endLine' => 625,
            'startColumn' => 30,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 625,
                'endLine' => 625,
                'startTokenPos' => 2073,
                'startFilePos' => 20051,
                'endTokenPos' => 2074,
                'endFilePos' => 20052,
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
            'startLine' => 625,
            'endLine' => 625,
            'startColumn' => 45,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 625,
                'endLine' => 625,
                'startTokenPos' => 2083,
                'startFilePos' => 20070,
                'endTokenPos' => 2084,
                'endFilePos' => 20071,
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
            'startLine' => 625,
            'endLine' => 625,
            'startColumn' => 65,
            'endColumn' => 81,
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
 * Prepares and executes an SQL query and returns the value of a single column
 * of the first row of the result.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return mixed|false False is returned if no rows are found.
 *
 * @throws Exception
 */',
        'startLine' => 625,
        'endLine' => 628,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'isConnected' => 
      array (
        'name' => 'isConnected',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether an actual connection to the database is established.
 *
 * @return bool
 */',
        'startLine' => 635,
        'endLine' => 638,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'isTransactionActive' => 
      array (
        'name' => 'isTransactionActive',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether a transaction is currently active.
 *
 * @return bool TRUE if a transaction is currently active, FALSE otherwise.
 */',
        'startLine' => 645,
        'endLine' => 648,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'addCriteriaCondition' => 
      array (
        'name' => 'addCriteriaCondition',
        'parameters' => 
        array (
          'criteria' => 
          array (
            'name' => 'criteria',
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
            'startLine' => 661,
            'endLine' => 661,
            'startColumn' => 9,
            'endColumn' => 23,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 662,
            'endLine' => 662,
            'startColumn' => 9,
            'endColumn' => 23,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 663,
            'endLine' => 663,
            'startColumn' => 9,
            'endColumn' => 22,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'conditions' => 
          array (
            'name' => 'conditions',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 664,
            'endLine' => 664,
            'startColumn' => 9,
            'endColumn' => 26,
            'parameterIndex' => 3,
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
 * Adds condition based on the criteria to the query components
 *
 * @param array<string,mixed> $criteria   Map of key columns to their values
 * @param string[]            $columns    Column names
 * @param mixed[]             $values     Column values
 * @param string[]            $conditions Key conditions
 *
 * @throws Exception
 */',
        'startLine' => 660,
        'endLine' => 678,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
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
            'startLine' => 693,
            'endLine' => 693,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'criteria' => 
          array (
            'name' => 'criteria',
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
            'startLine' => 693,
            'endLine' => 693,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 693,
                'endLine' => 693,
                'startTokenPos' => 2314,
                'startFilePos' => 22219,
                'endTokenPos' => 2315,
                'endFilePos' => 22220,
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
            'startLine' => 693,
            'endLine' => 693,
            'startColumn' => 53,
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
 * Executes an SQL DELETE statement on a table.
 *
 * Table expression and columns are not escaped and are not safe for user-input.
 *
 * @param string                                                               $table    Table name
 * @param array<string, mixed>                                                 $criteria Deletion criteria
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types    Parameter types
 *
 * @return int|string The number of affected rows.
 *
 * @throws Exception
 */',
        'startLine' => 693,
        'endLine' => 708,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'close' => 
      array (
        'name' => 'close',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Closes the connection.
 *
 * @return void
 */',
        'startLine' => 715,
        'endLine' => 719,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'setTransactionIsolation' => 
      array (
        'name' => 'setTransactionIsolation',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 730,
            'endLine' => 730,
            'startColumn' => 45,
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
 * Sets the transaction isolation level.
 *
 * @param TransactionIsolationLevel::* $level The level to set.
 *
 * @return int|string
 *
 * @throws Exception
 */',
        'startLine' => 730,
        'endLine' => 735,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getTransactionIsolation' => 
      array (
        'name' => 'getTransactionIsolation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the currently active transaction isolation level.
 *
 * @return TransactionIsolationLevel::* The current transaction isolation level.
 *
 * @throws Exception
 */',
        'startLine' => 744,
        'endLine' => 747,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
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
            'startLine' => 763,
            'endLine' => 763,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 763,
            'endLine' => 763,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'criteria' => 
          array (
            'name' => 'criteria',
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
            'startLine' => 763,
            'endLine' => 763,
            'startColumn' => 49,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 763,
                'endLine' => 763,
                'startTokenPos' => 2575,
                'startFilePos' => 24511,
                'endTokenPos' => 2576,
                'endFilePos' => 24512,
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
            'startLine' => 763,
            'endLine' => 763,
            'startColumn' => 66,
            'endColumn' => 82,
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
 * Executes an SQL UPDATE statement on a table.
 *
 * Table expression and columns are not escaped and are not safe for user-input.
 *
 * @param string                                                               $table    Table name
 * @param array<string, mixed>                                                 $data     Column-value pairs
 * @param array<string, mixed>                                                 $criteria Update criteria
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types    Parameter types
 *
 * @return int|string The number of affected rows.
 *
 * @throws Exception
 */',
        'startLine' => 763,
        'endLine' => 783,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
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
            'startLine' => 798,
            'endLine' => 798,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 798,
            'endLine' => 798,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 798,
                'endLine' => 798,
                'startTokenPos' => 2777,
                'startFilePos' => 25785,
                'endTokenPos' => 2778,
                'endFilePos' => 25786,
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
            'startLine' => 798,
            'endLine' => 798,
            'startColumn' => 49,
            'endColumn' => 65,
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
 * Inserts a table row with specified data.
 *
 * Table expression and columns are not escaped and are not safe for user-input.
 *
 * @param string                                                               $table Table name
 * @param array<string, mixed>                                                 $data  Column-value pairs
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types Parameter types
 *
 * @return int|string The number of affected rows.
 *
 * @throws Exception
 */',
        'startLine' => 798,
        'endLine' => 820,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'extractTypeValues' => 
      array (
        'name' => 'extractTypeValues',
        'parameters' => 
        array (
          'columnList' => 
          array (
            'name' => 'columnList',
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
            'startLine' => 830,
            'endLine' => 830,
            'startColumn' => 40,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
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
            'startLine' => 830,
            'endLine' => 830,
            'startColumn' => 59,
            'endColumn' => 70,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Extract ordered type list from an ordered column list and type map.
 *
 * @param array<int, string>                                                   $columnList
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types
 *
 * @return array<int, int|string|Type|null>|array<string, int|string|Type|null>
 */',
        'startLine' => 830,
        'endLine' => 839,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'quoteIdentifier' => 
      array (
        'name' => 'quoteIdentifier',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 855,
            'endLine' => 855,
            'startColumn' => 37,
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
 * Quotes a string so it can be safely used as a table or column name, even if
 * it is a reserved name.
 *
 * Delimiting style depends on the underlying database platform that is being used.
 *
 * NOTE: Just because you CAN use quoted identifiers does not mean
 * you SHOULD use them. In general, they end up causing way more
 * problems than they solve.
 *
 * @param string $str The name to be quoted.
 *
 * @return string The quoted name.
 */',
        'startLine' => 855,
        'endLine' => 858,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'quote' => 
      array (
        'name' => 'quote',
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
            'startLine' => 869,
            'endLine' => 869,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\\Doctrine\\DBAL\\ParameterType::STRING',
              'attributes' => 
              array (
                'startLine' => 869,
                'endLine' => 869,
                'startTokenPos' => 3084,
                'startFilePos' => 28054,
                'endTokenPos' => 3086,
                'endFilePos' => 28074,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 869,
            'endLine' => 869,
            'startColumn' => 35,
            'endColumn' => 63,
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
 * The usage of this method is discouraged. Use prepared statements
 * or {@see AbstractPlatform::quoteStringLiteral()} instead.
 *
 * @param mixed                $value
 * @param int|string|Type|null $type
 *
 * @return mixed
 */',
        'startLine' => 869,
        'endLine' => 876,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchAllNumeric' => 
      array (
        'name' => 'fetchAllNumeric',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 889,
            'endLine' => 889,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 889,
                'endLine' => 889,
                'startTokenPos' => 3156,
                'startFilePos' => 28847,
                'endTokenPos' => 3157,
                'endFilePos' => 28848,
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
            'startLine' => 889,
            'endLine' => 889,
            'startColumn' => 52,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 889,
                'endLine' => 889,
                'startTokenPos' => 3166,
                'startFilePos' => 28866,
                'endTokenPos' => 3167,
                'endFilePos' => 28867,
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
            'startLine' => 889,
            'endLine' => 889,
            'startColumn' => 72,
            'endColumn' => 88,
            'parameterIndex' => 2,
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
 * Prepares and executes an SQL query and returns the result as an array of numeric arrays.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return list<list<mixed>>
 *
 * @throws Exception
 */',
        'startLine' => 889,
        'endLine' => 892,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchAllAssociative' => 
      array (
        'name' => 'fetchAllAssociative',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 41,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 905,
                'endLine' => 905,
                'startTokenPos' => 3216,
                'startFilePos' => 29560,
                'endTokenPos' => 3217,
                'endFilePos' => 29561,
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
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 56,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 905,
                'endLine' => 905,
                'startTokenPos' => 3226,
                'startFilePos' => 29579,
                'endTokenPos' => 3227,
                'endFilePos' => 29580,
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
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 76,
            'endColumn' => 92,
            'parameterIndex' => 2,
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
 * Prepares and executes an SQL query and returns the result as an array of associative arrays.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return list<array<string,mixed>>
 *
 * @throws Exception
 */',
        'startLine' => 905,
        'endLine' => 908,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchAllKeyValue' => 
      array (
        'name' => 'fetchAllKeyValue',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 922,
            'endLine' => 922,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 922,
                'endLine' => 922,
                'startTokenPos' => 3276,
                'startFilePos' => 30348,
                'endTokenPos' => 3277,
                'endFilePos' => 30349,
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
            'startLine' => 922,
            'endLine' => 922,
            'startColumn' => 53,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 922,
                'endLine' => 922,
                'startTokenPos' => 3286,
                'startFilePos' => 30367,
                'endTokenPos' => 3287,
                'endFilePos' => 30368,
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
            'startLine' => 922,
            'endLine' => 922,
            'startColumn' => 73,
            'endColumn' => 89,
            'parameterIndex' => 2,
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
 * Prepares and executes an SQL query and returns the result as an associative array with the keys
 * mapped to the first column and the values mapped to the second column.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return array<mixed,mixed>
 *
 * @throws Exception
 */',
        'startLine' => 922,
        'endLine' => 925,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchAllAssociativeIndexed' => 
      array (
        'name' => 'fetchAllAssociativeIndexed',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 940,
            'endLine' => 940,
            'startColumn' => 48,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 940,
                'endLine' => 940,
                'startTokenPos' => 3336,
                'startFilePos' => 31217,
                'endTokenPos' => 3337,
                'endFilePos' => 31218,
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
            'startLine' => 940,
            'endLine' => 940,
            'startColumn' => 63,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 940,
                'endLine' => 940,
                'startTokenPos' => 3346,
                'startFilePos' => 31236,
                'endTokenPos' => 3347,
                'endFilePos' => 31237,
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
            'startLine' => 940,
            'endLine' => 940,
            'startColumn' => 83,
            'endColumn' => 99,
            'parameterIndex' => 2,
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
 * Prepares and executes an SQL query and returns the result as an associative array with the keys mapped
 * to the first column and the values being an associative array representing the rest of the columns
 * and their values.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return array<mixed,array<string,mixed>>
 *
 * @throws Exception
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
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'fetchFirstColumn' => 
      array (
        'name' => 'fetchFirstColumn',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 956,
                'endLine' => 956,
                'startTokenPos' => 3396,
                'startFilePos' => 31929,
                'endTokenPos' => 3397,
                'endFilePos' => 31930,
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
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 53,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 956,
                'endLine' => 956,
                'startTokenPos' => 3406,
                'startFilePos' => 31948,
                'endTokenPos' => 3407,
                'endFilePos' => 31949,
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
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 73,
            'endColumn' => 89,
            'parameterIndex' => 2,
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
 * Prepares and executes an SQL query and returns the result as an array of the first column values.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return list<mixed>
 *
 * @throws Exception
 */',
        'startLine' => 956,
        'endLine' => 959,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'iterateNumeric' => 
      array (
        'name' => 'iterateNumeric',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 972,
            'endLine' => 972,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 972,
                'endLine' => 972,
                'startTokenPos' => 3456,
                'startFilePos' => 32662,
                'endTokenPos' => 3457,
                'endFilePos' => 32663,
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
            'startLine' => 972,
            'endLine' => 972,
            'startColumn' => 51,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 972,
                'endLine' => 972,
                'startTokenPos' => 3466,
                'startFilePos' => 32681,
                'endTokenPos' => 3467,
                'endFilePos' => 32682,
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
            'startLine' => 972,
            'endLine' => 972,
            'startColumn' => 71,
            'endColumn' => 87,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Traversable',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares and executes an SQL query and returns the result as an iterator over rows represented as numeric arrays.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return Traversable<int,list<mixed>>
 *
 * @throws Exception
 */',
        'startLine' => 972,
        'endLine' => 975,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'iterateAssociative' => 
      array (
        'name' => 'iterateAssociative',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 989,
            'endLine' => 989,
            'startColumn' => 40,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 989,
                'endLine' => 989,
                'startTokenPos' => 3516,
                'startFilePos' => 33422,
                'endTokenPos' => 3517,
                'endFilePos' => 33423,
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
            'startLine' => 989,
            'endLine' => 989,
            'startColumn' => 55,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 989,
                'endLine' => 989,
                'startTokenPos' => 3526,
                'startFilePos' => 33441,
                'endTokenPos' => 3527,
                'endFilePos' => 33442,
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
            'startLine' => 989,
            'endLine' => 989,
            'startColumn' => 75,
            'endColumn' => 91,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Traversable',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares and executes an SQL query and returns the result as an iterator over rows represented
 * as associative arrays.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return Traversable<int,array<string,mixed>>
 *
 * @throws Exception
 */',
        'startLine' => 989,
        'endLine' => 992,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'iterateKeyValue' => 
      array (
        'name' => 'iterateKeyValue',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 1006,
            'endLine' => 1006,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1006,
                'endLine' => 1006,
                'startTokenPos' => 3576,
                'startFilePos' => 34211,
                'endTokenPos' => 3577,
                'endFilePos' => 34212,
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
            'startLine' => 1006,
            'endLine' => 1006,
            'startColumn' => 52,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1006,
                'endLine' => 1006,
                'startTokenPos' => 3586,
                'startFilePos' => 34230,
                'endTokenPos' => 3587,
                'endFilePos' => 34231,
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
            'startLine' => 1006,
            'endLine' => 1006,
            'startColumn' => 72,
            'endColumn' => 88,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Traversable',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares and executes an SQL query and returns the result as an iterator with the keys
 * mapped to the first column and the values mapped to the second column.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return Traversable<mixed,mixed>
 *
 * @throws Exception
 */',
        'startLine' => 1006,
        'endLine' => 1009,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'iterateAssociativeIndexed' => 
      array (
        'name' => 'iterateAssociativeIndexed',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 1024,
            'endLine' => 1024,
            'startColumn' => 47,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1024,
                'endLine' => 1024,
                'startTokenPos' => 3636,
                'startFilePos' => 35021,
                'endTokenPos' => 3637,
                'endFilePos' => 35022,
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
            'startLine' => 1024,
            'endLine' => 1024,
            'startColumn' => 62,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1024,
                'endLine' => 1024,
                'startTokenPos' => 3646,
                'startFilePos' => 35040,
                'endTokenPos' => 3647,
                'endFilePos' => 35041,
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
            'startLine' => 1024,
            'endLine' => 1024,
            'startColumn' => 82,
            'endColumn' => 98,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Traversable',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares and executes an SQL query and returns the result as an iterator with the keys mapped
 * to the first column and the values being an associative array representing the rest of the columns
 * and their values.
 *
 * @param string                                           $query  SQL query
 * @param list<mixed>|array<string, mixed>                 $params Query parameters
 * @param array<int, int|string>|array<string, int|string> $types  Parameter types
 *
 * @return Traversable<mixed,array<string,mixed>>
 *
 * @throws Exception
 */',
        'startLine' => 1024,
        'endLine' => 1027,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'iterateColumn' => 
      array (
        'name' => 'iterateColumn',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 1040,
            'endLine' => 1040,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1040,
                'endLine' => 1040,
                'startTokenPos' => 3696,
                'startFilePos' => 35751,
                'endTokenPos' => 3697,
                'endFilePos' => 35752,
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
            'startLine' => 1040,
            'endLine' => 1040,
            'startColumn' => 50,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1040,
                'endLine' => 1040,
                'startTokenPos' => 3706,
                'startFilePos' => 35770,
                'endTokenPos' => 3707,
                'endFilePos' => 35771,
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
            'startLine' => 1040,
            'endLine' => 1040,
            'startColumn' => 70,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Traversable',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares and executes an SQL query and returns the result as an iterator over the first column values.
 *
 * @param string                                                               $query  SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return Traversable<int,mixed>
 *
 * @throws Exception
 */',
        'startLine' => 1040,
        'endLine' => 1043,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'prepare' => 
      array (
        'name' => 'prepare',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 1052,
            'endLine' => 1052,
            'startColumn' => 29,
            'endColumn' => 39,
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
            'name' => 'Doctrine\\DBAL\\Statement',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares an SQL statement.
 *
 * @param string $sql The SQL statement to prepare.
 *
 * @throws Exception
 */',
        'startLine' => 1052,
        'endLine' => 1063,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'executeQuery' => 
      array (
        'name' => 'executeQuery',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 1078,
            'endLine' => 1078,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1079,
                'endLine' => 1079,
                'startTokenPos' => 3847,
                'startFilePos' => 37023,
                'endTokenPos' => 3848,
                'endFilePos' => 37024,
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
            'startLine' => 1079,
            'endLine' => 1079,
            'startColumn' => 9,
            'endColumn' => 26,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1080,
                'endLine' => 1080,
                'startTokenPos' => 3855,
                'startFilePos' => 37044,
                'endTokenPos' => 3856,
                'endFilePos' => 37045,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'qcp' => 
          array (
            'name' => 'qcp',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1081,
                'endLine' => 1081,
                'startTokenPos' => 3866,
                'startFilePos' => 37082,
                'endTokenPos' => 3866,
                'endFilePos' => 37085,
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
                      'name' => 'Doctrine\\DBAL\\Cache\\QueryCacheProfile',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1081,
            'endLine' => 1081,
            'startColumn' => 9,
            'endColumn' => 38,
            'parameterIndex' => 3,
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
 * Executes an, optionally parameterized, SQL query.
 *
 * If the query is parametrized, a prepared statement is used.
 * If an SQLLogger is configured, the execution is logged.
 *
 * @param string                                                               $sql    SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @throws Exception
 */',
        'startLine' => 1077,
        'endLine' => 1117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'executeCacheQuery' => 
      array (
        'name' => 'executeCacheQuery',
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
            'startLine' => 1129,
            'endLine' => 1129,
            'startColumn' => 39,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1129,
            'endLine' => 1129,
            'startColumn' => 45,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1129,
            'endLine' => 1129,
            'startColumn' => 54,
            'endColumn' => 59,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'qcp' => 
          array (
            'name' => 'qcp',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Cache\\QueryCacheProfile',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1129,
            'endLine' => 1129,
            'startColumn' => 62,
            'endColumn' => 83,
            'parameterIndex' => 3,
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
 * Executes a caching query.
 *
 * @param string                                                               $sql    SQL query
 * @param list<mixed>|array<string, mixed>                                     $params Query parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @throws CacheException
 * @throws Exception
 */',
        'startLine' => 1129,
        'endLine' => 1171,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'executeStatement' => 
      array (
        'name' => 'executeStatement',
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
            'startLine' => 1193,
            'endLine' => 1193,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1193,
                'endLine' => 1193,
                'startTokenPos' => 4507,
                'startFilePos' => 40923,
                'endTokenPos' => 4508,
                'endFilePos' => 40924,
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
            'startLine' => 1193,
            'endLine' => 1193,
            'startColumn' => 44,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1193,
                'endLine' => 1193,
                'startTokenPos' => 4517,
                'startFilePos' => 40942,
                'endTokenPos' => 4518,
                'endFilePos' => 40943,
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
            'startLine' => 1193,
            'endLine' => 1193,
            'startColumn' => 64,
            'endColumn' => 80,
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
 * Executes an SQL statement with the given parameters and returns the number of affected rows.
 *
 * Could be used for:
 *  - DML statements: INSERT, UPDATE, DELETE, etc.
 *  - DDL statements: CREATE, DROP, ALTER, etc.
 *  - DCL statements: GRANT, REVOKE, etc.
 *  - Session control statements: ALTER SESSION, SET, DECLARE, etc.
 *  - Other statements that don\'t yield a row set.
 *
 * This method supports PDO binding types as well as DBAL mapping types.
 *
 * @param string                                                               $sql    SQL statement
 * @param list<mixed>|array<string, mixed>                                     $params Statement parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @return int|string The number of affected rows.
 *
 * @throws Exception
 */',
        'startLine' => 1193,
        'endLine' => 1224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getTransactionNestingLevel' => 
      array (
        'name' => 'getTransactionNestingLevel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current transaction nesting level.
 *
 * @return int The nesting level. A value of 0 means there\'s no active transaction.
 */',
        'startLine' => 1231,
        'endLine' => 1234,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'lastInsertId' => 
      array (
        'name' => 'lastInsertId',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1250,
                'endLine' => 1250,
                'startTokenPos' => 4785,
                'startFilePos' => 42821,
                'endTokenPos' => 4785,
                'endFilePos' => 42824,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1250,
            'endLine' => 1250,
            'startColumn' => 34,
            'endColumn' => 45,
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
 * Returns the ID of the last inserted row, or the last value from a sequence object,
 * depending on the underlying driver.
 *
 * Note: This method may not return a meaningful or consistent result across different drivers,
 * because the underlying database may not even support the notion of AUTO_INCREMENT/IDENTITY
 * columns or sequences.
 *
 * @param string|null $name Name of the sequence object from which the ID should be returned.
 *
 * @return string|int|false A string representation of the last inserted ID.
 *
 * @throws Exception
 */',
        'startLine' => 1250,
        'endLine' => 1265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'transactional' => 
      array (
        'name' => 'transactional',
        'parameters' => 
        array (
          'func' => 
          array (
            'name' => 'func',
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
            'startLine' => 1283,
            'endLine' => 1283,
            'startColumn' => 35,
            'endColumn' => 47,
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
 * Executes a function in a transaction.
 *
 * The function gets passed this Connection instance as an (optional) parameter.
 *
 * If an exception occurs during execution of the function or transaction commit,
 * the transaction is rolled back and the exception re-thrown.
 *
 * @param Closure(self):T $func The function to execute transactionally.
 *
 * @return T The value returned by $func
 *
 * @throws Throwable
 *
 * @template T
 */',
        'startLine' => 1283,
        'endLine' => 1321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'setNestTransactionsWithSavepoints' => 
      array (
        'name' => 'setNestTransactionsWithSavepoints',
        'parameters' => 
        array (
          'nestTransactionsWithSavepoints' => 
          array (
            'name' => 'nestTransactionsWithSavepoints',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1332,
            'endLine' => 1332,
            'startColumn' => 55,
            'endColumn' => 85,
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
 * Sets if nested transactions should use savepoints.
 *
 * @param bool $nestTransactionsWithSavepoints
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1332,
        'endLine' => 1351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getNestTransactionsWithSavepoints' => 
      array (
        'name' => 'getNestTransactionsWithSavepoints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets if nested transactions should use savepoints.
 *
 * @return bool
 */',
        'startLine' => 1358,
        'endLine' => 1361,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      '_getNestedTransactionSavePointName' => 
      array (
        'name' => '_getNestedTransactionSavePointName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the savepoint name to use for nested transactions.
 *
 * @return string
 */',
        'startLine' => 1368,
        'endLine' => 1371,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
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
 * @return bool
 *
 * @throws Exception
 */',
        'startLine' => 1378,
        'endLine' => 1431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
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
 * @return bool
 *
 * @throws Exception
 */',
        'startLine' => 1438,
        'endLine' => 1463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'updateTransactionStateAfterCommit' => 
      array (
        'name' => 'updateTransactionStateAfterCommit',
        'parameters' => 
        array (
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
        'startLine' => 1465,
        'endLine' => 1487,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'doCommit' => 
      array (
        'name' => 'doCommit',
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
                'name' => 'Doctrine\\DBAL\\Driver\\Connection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1494,
            'endLine' => 1494,
            'startColumn' => 31,
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
 * @return bool
 *
 * @throws DriverException
 */',
        'startLine' => 1494,
        'endLine' => 1509,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'commitAll' => 
      array (
        'name' => 'commitAll',
        'parameters' => 
        array (
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
 * Commits all current nesting transactions.
 *
 * @throws Exception
 */',
        'startLine' => 1516,
        'endLine' => 1529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
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
 * Cancels any database changes done during the current transaction.
 *
 * @return bool
 *
 * @throws Exception
 */',
        'startLine' => 1538,
        'endLine' => 1592,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'createSavepoint' => 
      array (
        'name' => 'createSavepoint',
        'parameters' => 
        array (
          'savepoint' => 
          array (
            'name' => 'savepoint',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1603,
            'endLine' => 1603,
            'startColumn' => 37,
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
 * Creates a new savepoint.
 *
 * @param string $savepoint The name of the savepoint to create.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1603,
        'endLine' => 1612,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'releaseSavepoint' => 
      array (
        'name' => 'releaseSavepoint',
        'parameters' => 
        array (
          'savepoint' => 
          array (
            'name' => 'savepoint',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1623,
            'endLine' => 1623,
            'startColumn' => 38,
            'endColumn' => 47,
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
 * Releases the given savepoint.
 *
 * @param string $savepoint The name of the savepoint to release.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1623,
        'endLine' => 1652,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'rollbackSavepoint' => 
      array (
        'name' => 'rollbackSavepoint',
        'parameters' => 
        array (
          'savepoint' => 
          array (
            'name' => 'savepoint',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1663,
            'endLine' => 1663,
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
 * Rolls back to the given savepoint.
 *
 * @param string $savepoint The name of the savepoint to rollback to.
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 1663,
        'endLine' => 1672,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getWrappedConnection' => 
      array (
        'name' => 'getWrappedConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the wrapped driver connection.
 *
 * @deprecated Use {@link getNativeConnection()} to access the native connection.
 *
 * @return DriverConnection
 *
 * @throws Exception
 */',
        'startLine' => 1683,
        'endLine' => 1695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getNativeConnection' => 
      array (
        'name' => 'getNativeConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/** @return resource|object */',
        'startLine' => 1698,
        'endLine' => 1710,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'createSchemaManager' => 
      array (
        'name' => 'createSchemaManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a SchemaManager that can be used to inspect or change the
 * database schema through the connection.
 *
 * @throws Exception
 */',
        'startLine' => 1718,
        'endLine' => 1721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getSchemaManager' => 
      array (
        'name' => 'getSchemaManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the SchemaManager that can be used to inspect or change the
 * database schema through the connection.
 *
 * @deprecated Use {@see createSchemaManager()} instead.
 *
 * @return AbstractSchemaManager
 *
 * @throws Exception
 */',
        'startLine' => 1733,
        'endLine' => 1742,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'setRollbackOnly' => 
      array (
        'name' => 'setRollbackOnly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Marks the current transaction so that the only possible
 * outcome for the transaction to be rolled back.
 *
 * @return void
 *
 * @throws ConnectionException If no transaction is active.
 */',
        'startLine' => 1752,
        'endLine' => 1759,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'isRollbackOnly' => 
      array (
        'name' => 'isRollbackOnly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the current transaction is marked for rollback only.
 *
 * @return bool
 *
 * @throws ConnectionException If no transaction is active.
 */',
        'startLine' => 1768,
        'endLine' => 1775,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'convertToDatabaseValue' => 
      array (
        'name' => 'convertToDatabaseValue',
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
            'startLine' => 1788,
            'endLine' => 1788,
            'startColumn' => 44,
            'endColumn' => 49,
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
            'startLine' => 1788,
            'endLine' => 1788,
            'startColumn' => 52,
            'endColumn' => 56,
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
 * Converts a given value to its database representation according to the conversion
 * rules of a specific DBAL mapping type.
 *
 * @param mixed  $value The value to convert.
 * @param string $type  The name of the DBAL mapping type.
 *
 * @return mixed The converted value.
 *
 * @throws Exception
 */',
        'startLine' => 1788,
        'endLine' => 1791,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'convertToPHPValue' => 
      array (
        'name' => 'convertToPHPValue',
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
            'startLine' => 1804,
            'endLine' => 1804,
            'startColumn' => 39,
            'endColumn' => 44,
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
            'startLine' => 1804,
            'endLine' => 1804,
            'startColumn' => 47,
            'endColumn' => 51,
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
 * Converts a given value to its PHP representation according to the conversion
 * rules of a specific DBAL mapping type.
 *
 * @param mixed  $value The value to convert.
 * @param string $type  The name of the DBAL mapping type.
 *
 * @return mixed The converted type.
 *
 * @throws Exception
 */',
        'startLine' => 1804,
        'endLine' => 1807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'bindParameters' => 
      array (
        'name' => 'bindParameters',
        'parameters' => 
        array (
          'stmt' => 
          array (
            'name' => 'stmt',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Driver\\Statement',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1819,
            'endLine' => 1819,
            'startColumn' => 37,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
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
            'startLine' => 1819,
            'endLine' => 1819,
            'startColumn' => 60,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
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
            'startLine' => 1819,
            'endLine' => 1819,
            'startColumn' => 75,
            'endColumn' => 86,
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
 * Binds a set of parameters, some or all of which are typed with a PDO binding type
 * or DBAL mapping type, to a given statement.
 *
 * @param DriverStatement                                                      $stmt   Prepared statement
 * @param list<mixed>|array<string, mixed>                                     $params Statement parameters
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types  Parameter types
 *
 * @throws Exception
 */',
        'startLine' => 1819,
        'endLine' => 1868,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'getBindingInfo' => 
      array (
        'name' => 'getBindingInfo',
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
            'startLine' => 1880,
            'endLine' => 1880,
            'startColumn' => 37,
            'endColumn' => 42,
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
            'startLine' => 1880,
            'endLine' => 1880,
            'startColumn' => 45,
            'endColumn' => 49,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the binding type of a given type.
 *
 * @param mixed                $value The value to bind.
 * @param int|string|Type|null $type  The type to bind (PDO or DBAL).
 *
 * @return array{mixed, int} [0] => the (escaped) value, [1] => the binding type.
 *
 * @throws Exception
 */',
        'startLine' => 1880,
        'endLine' => 1894,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'createQueryBuilder' => 
      array (
        'name' => 'createQueryBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new instance of a SQL query builder.
 *
 * @return QueryBuilder
 */',
        'startLine' => 1901,
        'endLine' => 1904,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'convertExceptionDuringQuery' => 
      array (
        'name' => 'convertExceptionDuringQuery',
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
                'name' => 'Doctrine\\DBAL\\Driver\\Exception',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1913,
            'endLine' => 1913,
            'startColumn' => 9,
            'endColumn' => 27,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 1914,
            'endLine' => 1914,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1915,
                'endLine' => 1915,
                'startTokenPos' => 7432,
                'startFilePos' => 62574,
                'endTokenPos' => 7433,
                'endFilePos' => 62575,
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
            'startLine' => 1915,
            'endLine' => 1915,
            'startColumn' => 9,
            'endColumn' => 26,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1916,
                'endLine' => 1916,
                'startTokenPos' => 7442,
                'startFilePos' => 62601,
                'endTokenPos' => 7443,
                'endFilePos' => 62602,
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
            'startLine' => 1916,
            'endLine' => 1916,
            'startColumn' => 9,
            'endColumn' => 25,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Exception\\DriverException',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @internal
 *
 * @param list<mixed>|array<string, mixed>                                     $params
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types
 */',
        'startLine' => 1912,
        'endLine' => 1919,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 33,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'convertException' => 
      array (
        'name' => 'convertException',
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
                'name' => 'Doctrine\\DBAL\\Driver\\Exception',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1922,
            'endLine' => 1922,
            'startColumn' => 44,
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
            'name' => 'Doctrine\\DBAL\\Exception\\DriverException',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** @internal */',
        'startLine' => 1922,
        'endLine' => 1925,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 33,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'expandArrayParameters' => 
      array (
        'name' => 'expandArrayParameters',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 1933,
            'endLine' => 1933,
            'startColumn' => 44,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
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
            'startLine' => 1933,
            'endLine' => 1933,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
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
            'startLine' => 1933,
            'endLine' => 1933,
            'startColumn' => 72,
            'endColumn' => 83,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<int, mixed>|array<string, mixed>                               $params
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types
 *
 * @return array{string, list<mixed>, array<int,Type|int|string|null>}
 */',
        'startLine' => 1933,
        'endLine' => 1945,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'needsArrayParameterConversion' => 
      array (
        'name' => 'needsArrayParameterConversion',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
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
            'startLine' => 1951,
            'endLine' => 1951,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
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
            'startLine' => 1951,
            'endLine' => 1951,
            'startColumn' => 67,
            'endColumn' => 78,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<int, mixed>|array<string, mixed>                               $params
 * @param array<int, int|string|Type|null>|array<string, int|string|Type|null> $types
 */',
        'startLine' => 1951,
        'endLine' => 1969,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'handleDriverException' => 
      array (
        'name' => 'handleDriverException',
        'parameters' => 
        array (
          'driverException' => 
          array (
            'name' => 'driverException',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Driver\\Exception',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1972,
            'endLine' => 1972,
            'startColumn' => 9,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
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
                      'name' => 'Doctrine\\DBAL\\Query',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1973,
            'endLine' => 1973,
            'startColumn' => 9,
            'endColumn' => 21,
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
            'name' => 'Doctrine\\DBAL\\Exception\\DriverException',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1971,
        'endLine' => 1983,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'executeUpdate' => 
      array (
        'name' => 'executeUpdate',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 1993,
            'endLine' => 1993,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1993,
                'endLine' => 1993,
                'startTokenPos' => 7837,
                'startFilePos' => 65116,
                'endTokenPos' => 7838,
                'endFilePos' => 65117,
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
            'startLine' => 1993,
            'endLine' => 1993,
            'startColumn' => 48,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'types' => 
          array (
            'name' => 'types',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1993,
                'endLine' => 1993,
                'startTokenPos' => 7847,
                'startFilePos' => 65135,
                'endTokenPos' => 7848,
                'endFilePos' => 65136,
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
            'startLine' => 1993,
            'endLine' => 1993,
            'startColumn' => 68,
            'endColumn' => 84,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * BC layer for a wide-spread use-case of old DBAL APIs
 *
 * @deprecated Use {@see executeStatement()} instead
 *
 * @param array<mixed>           $params The query parameters
 * @param array<int|string|null> $types  The parameter types
 */',
        'startLine' => 1993,
        'endLine' => 2003,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'query' => 
      array (
        'name' => 'query',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 2010,
            'endLine' => 2010,
            'startColumn' => 27,
            'endColumn' => 37,
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
 * BC layer for a wide-spread use-case of old DBAL APIs
 *
 * @deprecated Use {@see executeQuery()} instead
 */',
        'startLine' => 2010,
        'endLine' => 2020,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
        'aliasName' => NULL,
      ),
      'exec' => 
      array (
        'name' => 'exec',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 2027,
            'endLine' => 2027,
            'startColumn' => 26,
            'endColumn' => 36,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * BC layer for a wide-spread use-case of old DBAL APIs
 *
 * @deprecated please use {@see executeStatement()} instead
 */',
        'startLine' => 2027,
        'endLine' => 2037,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL',
        'declaringClassName' => 'Doctrine\\DBAL\\Connection',
        'implementingClassName' => 'Doctrine\\DBAL\\Connection',
        'currentClassName' => 'Doctrine\\DBAL\\Connection',
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