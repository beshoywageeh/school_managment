<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Grammars/Grammar.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Query\Grammars\Grammar
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e3fee0832181f04a9f18b6375e3fcd4c82d1d2ce80b1e02662a3ea0cc5bab3cf-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Grammars/Grammar.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Query\\Grammars',
    'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
    'shortName' => 'Grammar',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 1445,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Grammar',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Concerns\\CompilesJsonPaths',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'operators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'name' => 'operators',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 74,
            'startFilePos' => 558,
            'endTokenPos' => 75,
            'endFilePos' => 559,
          ),
        ),
        'docComment' => '/**
 * The grammar specific operators.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bitwiseOperators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'name' => 'bitwiseOperators',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 86,
            'startFilePos' => 685,
            'endTokenPos' => 87,
            'endFilePos' => 686,
          ),
        ),
        'docComment' => '/**
 * The grammar specific bitwise operators.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'selectComponents' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'name' => 'selectComponents',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'aggregate\', \'columns\', \'from\', \'indexHint\', \'joins\', \'wheres\', \'groups\', \'havings\', \'orders\', \'limit\', \'offset\', \'lock\']',
          'attributes' => 
          array (
            'startLine' => 37,
            'endLine' => 50,
            'startTokenPos' => 98,
            'startFilePos' => 820,
            'endTokenPos' => 136,
            'endFilePos' => 1044,
          ),
        ),
        'docComment' => '/**
 * The components that make up a select clause.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 6,
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
      'compileSelect' => 
      array (
        'name' => 'compileSelect',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 35,
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
 * Compile a select query into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 58,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileComponents' => 
      array (
        'name' => 'compileComponents',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 42,
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
 * Compile the components necessary for a select clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return array
 */',
        'startLine' => 95,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileAggregate' => 
      array (
        'name' => 'compileAggregate',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'aggregate' => 
          array (
            'name' => 'aggregate',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 57,
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
 * Compile an aggregated select clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $aggregate
 * @return string
 */',
        'startLine' => 117,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileColumns' => 
      array (
        'name' => 'compileColumns',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
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
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 55,
            'endColumn' => 62,
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
 * Compile the "select *" portion of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $columns
 * @return string|null
 */',
        'startLine' => 140,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileFrom' => 
      array (
        'name' => 'compileFrom',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 36,
            'endColumn' => 49,
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
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile the "from" portion of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @return string
 */',
        'startLine' => 165,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJoins' => 
      array (
        'name' => 'compileJoins',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'joins' => 
          array (
            'name' => 'joins',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 53,
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
        'docComment' => '/**
 * Compile the "join" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $joins
 * @return string
 */',
        'startLine' => 177,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJoinLateral' => 
      array (
        'name' => 'compileJoinLateral',
        'parameters' => 
        array (
          'join' => 
          array (
            'name' => 'join',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\JoinLateralClause',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 40,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expression' => 
          array (
            'name' => 'expression',
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
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 65,
            'endColumn' => 82,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compile a "lateral join" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\JoinLateralClause  $join
 * @param  string  $expression
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 203,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileWheres' => 
      array (
        'name' => 'compileWheres',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 214,
            'endLine' => 214,
            'startColumn' => 35,
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
 * Compile the "where" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 214,
        'endLine' => 231,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileWheresToArray' => 
      array (
        'name' => 'compileWheresToArray',
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
            'startLine' => 239,
            'endLine' => 239,
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
 * Get an array of all the where clauses for the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return array
 */',
        'startLine' => 239,
        'endLine' => 244,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'concatenateWhereClauses' => 
      array (
        'name' => 'concatenateWhereClauses',
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
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 56,
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
 * Format the where clause statements into one string.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $sql
 * @return string
 */',
        'startLine' => 253,
        'endLine' => 258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereRaw' => 
      array (
        'name' => 'whereRaw',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 267,
            'endLine' => 267,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 267,
            'endLine' => 267,
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
 * Compile a raw where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 267,
        'endLine' => 270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBasic' => 
      array (
        'name' => 'whereBasic',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 51,
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
 * Compile a basic where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 279,
        'endLine' => 286,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBitwise' => 
      array (
        'name' => 'whereBitwise',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 295,
            'endLine' => 295,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 295,
            'endLine' => 295,
            'startColumn' => 53,
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
        'docComment' => '/**
 * Compile a bitwise operator where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 295,
        'endLine' => 298,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereIn' => 
      array (
        'name' => 'whereIn',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 307,
            'endLine' => 307,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 307,
            'endLine' => 307,
            'startColumn' => 48,
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
 * Compile a "where in" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 307,
        'endLine' => 314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotIn' => 
      array (
        'name' => 'whereNotIn',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 323,
            'endLine' => 323,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 323,
            'endLine' => 323,
            'startColumn' => 51,
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
 * Compile a "where not in" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 323,
        'endLine' => 330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotInRaw' => 
      array (
        'name' => 'whereNotInRaw',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 341,
            'endLine' => 341,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 341,
            'endLine' => 341,
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
 * Compile a "where not in raw" clause.
 *
 * For safety, whereIntegerInRaw ensures this method is only used with integer values.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 341,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereInRaw' => 
      array (
        'name' => 'whereInRaw',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 51,
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
 * Compile a "where in raw" clause.
 *
 * For safety, whereIntegerInRaw ensures this method is only used with integer values.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 359,
        'endLine' => 366,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNull' => 
      array (
        'name' => 'whereNull',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 375,
            'endLine' => 375,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
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
            'startColumn' => 50,
            'endColumn' => 55,
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
 * Compile a "where null" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 375,
        'endLine' => 378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotNull' => 
      array (
        'name' => 'whereNotNull',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 387,
            'endLine' => 387,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 387,
            'endLine' => 387,
            'startColumn' => 53,
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
        'docComment' => '/**
 * Compile a "where not null" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 387,
        'endLine' => 390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBetween' => 
      array (
        'name' => 'whereBetween',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
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
            'startColumn' => 53,
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
        'docComment' => '/**
 * Compile a "between" where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 399,
        'endLine' => 408,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBetweenColumns' => 
      array (
        'name' => 'whereBetweenColumns',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 417,
            'endLine' => 417,
            'startColumn' => 44,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 417,
            'endLine' => 417,
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
 * Compile a "between" where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 417,
        'endLine' => 426,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereDate' => 
      array (
        'name' => 'whereDate',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 50,
            'endColumn' => 55,
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
 * Compile a "where date" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 435,
        'endLine' => 438,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereTime' => 
      array (
        'name' => 'whereTime',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 50,
            'endColumn' => 55,
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
 * Compile a "where time" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 447,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereDay' => 
      array (
        'name' => 'whereDay',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 459,
            'endLine' => 459,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 459,
            'endLine' => 459,
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
 * Compile a "where day" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 459,
        'endLine' => 462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereMonth' => 
      array (
        'name' => 'whereMonth',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 471,
            'endLine' => 471,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 471,
            'endLine' => 471,
            'startColumn' => 51,
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
 * Compile a "where month" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 471,
        'endLine' => 474,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereYear' => 
      array (
        'name' => 'whereYear',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 483,
            'endLine' => 483,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 483,
            'endLine' => 483,
            'startColumn' => 50,
            'endColumn' => 55,
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
 * Compile a "where year" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 483,
        'endLine' => 486,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'dateBasedWhere' => 
      array (
        'name' => 'dateBasedWhere',
        'parameters' => 
        array (
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
            'startLine' => 496,
            'endLine' => 496,
            'startColumn' => 39,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 496,
            'endLine' => 496,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 496,
            'endLine' => 496,
            'startColumn' => 62,
            'endColumn' => 67,
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
 * Compile a date based where clause.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 496,
        'endLine' => 501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereColumn' => 
      array (
        'name' => 'whereColumn',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 510,
            'endLine' => 510,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 510,
            'endLine' => 510,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile a where clause comparing two columns.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 510,
        'endLine' => 513,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNested' => 
      array (
        'name' => 'whereNested',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile a nested where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 522,
        'endLine' => 530,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereSub' => 
      array (
        'name' => 'whereSub',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 539,
            'endLine' => 539,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 539,
            'endLine' => 539,
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
 * Compile a where condition with a sub-select.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 539,
        'endLine' => 544,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereExists' => 
      array (
        'name' => 'whereExists',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 553,
            'endLine' => 553,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 553,
            'endLine' => 553,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile a where exists clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 553,
        'endLine' => 556,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotExists' => 
      array (
        'name' => 'whereNotExists',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 565,
            'endLine' => 565,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 565,
            'endLine' => 565,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Compile a where exists clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 565,
        'endLine' => 568,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereRowValues' => 
      array (
        'name' => 'whereRowValues',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 577,
            'endLine' => 577,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 577,
            'endLine' => 577,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Compile a where row values condition.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 577,
        'endLine' => 584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonBoolean' => 
      array (
        'name' => 'whereJsonBoolean',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 593,
            'endLine' => 593,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 593,
            'endLine' => 593,
            'startColumn' => 57,
            'endColumn' => 62,
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
 * Compile a "where JSON boolean" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 593,
        'endLine' => 602,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonContains' => 
      array (
        'name' => 'whereJsonContains',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 611,
            'endLine' => 611,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 611,
            'endLine' => 611,
            'startColumn' => 58,
            'endColumn' => 63,
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
 * Compile a "where JSON contains" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 611,
        'endLine' => 619,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonContains' => 
      array (
        'name' => 'compileJsonContains',
        'parameters' => 
        array (
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
            'startLine' => 630,
            'endLine' => 630,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 630,
            'endLine' => 630,
            'startColumn' => 53,
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
        'docComment' => '/**
 * Compile a "JSON contains" statement into SQL.
 *
 * @param  string  $column
 * @param  string  $value
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 630,
        'endLine' => 633,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'prepareBindingForJsonContains' => 
      array (
        'name' => 'prepareBindingForJsonContains',
        'parameters' => 
        array (
          'binding' => 
          array (
            'name' => 'binding',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 51,
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
 * Prepare the binding for a "JSON contains" statement.
 *
 * @param  mixed  $binding
 * @return string
 */',
        'startLine' => 641,
        'endLine' => 644,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonContainsKey' => 
      array (
        'name' => 'whereJsonContainsKey',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 61,
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
 * Compile a "where JSON contains key" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 653,
        'endLine' => 660,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonContainsKey' => 
      array (
        'name' => 'compileJsonContainsKey',
        'parameters' => 
        array (
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
            'startLine' => 670,
            'endLine' => 670,
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
 * Compile a "JSON contains key" statement into SQL.
 *
 * @param  string  $column
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 670,
        'endLine' => 673,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonLength' => 
      array (
        'name' => 'whereJsonLength',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 682,
            'endLine' => 682,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 682,
            'endLine' => 682,
            'startColumn' => 56,
            'endColumn' => 61,
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
 * Compile a "where JSON length" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 682,
        'endLine' => 689,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonLength' => 
      array (
        'name' => 'compileJsonLength',
        'parameters' => 
        array (
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
            'startLine' => 701,
            'endLine' => 701,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 701,
            'endLine' => 701,
            'startColumn' => 51,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 701,
            'endLine' => 701,
            'startColumn' => 62,
            'endColumn' => 67,
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
 * Compile a "JSON length" statement into SQL.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  string  $value
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 701,
        'endLine' => 704,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonValueCast' => 
      array (
        'name' => 'compileJsonValueCast',
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
            'startLine' => 712,
            'endLine' => 712,
            'startColumn' => 42,
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
 * Compile a "JSON value cast" statement into SQL.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 712,
        'endLine' => 715,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereFullText' => 
      array (
        'name' => 'whereFullText',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 724,
            'endLine' => 724,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 724,
            'endLine' => 724,
            'startColumn' => 51,
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
 * Compile a "where fulltext" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 724,
        'endLine' => 727,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereExpression' => 
      array (
        'name' => 'whereExpression',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
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
            'startColumn' => 53,
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
        'docComment' => '/**
 * Compile a clause based on an expression.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 736,
        'endLine' => 739,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileGroups' => 
      array (
        'name' => 'compileGroups',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 748,
            'endLine' => 748,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'groups' => 
          array (
            'name' => 'groups',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 748,
            'endLine' => 748,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Compile the "group by" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $groups
 * @return string
 */',
        'startLine' => 748,
        'endLine' => 751,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavings' => 
      array (
        'name' => 'compileHavings',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 759,
            'endLine' => 759,
            'startColumn' => 39,
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
 * Compile the "having" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 759,
        'endLine' => 764,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHaving' => 
      array (
        'name' => 'compileHaving',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
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
            'startLine' => 772,
            'endLine' => 772,
            'startColumn' => 38,
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
 * Compile a single having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 772,
        'endLine' => 787,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileBasicHaving' => 
      array (
        'name' => 'compileBasicHaving',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 795,
            'endLine' => 795,
            'startColumn' => 43,
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
 * Compile a basic having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 795,
        'endLine' => 802,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingBetween' => 
      array (
        'name' => 'compileHavingBetween',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
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
            'startColumn' => 45,
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
 * Compile a "between" having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 810,
        'endLine' => 821,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingNull' => 
      array (
        'name' => 'compileHavingNull',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 829,
            'endLine' => 829,
            'startColumn' => 42,
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
 * Compile a having null clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 829,
        'endLine' => 834,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingNotNull' => 
      array (
        'name' => 'compileHavingNotNull',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 842,
            'endLine' => 842,
            'startColumn' => 45,
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
 * Compile a having not null clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 842,
        'endLine' => 847,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingBit' => 
      array (
        'name' => 'compileHavingBit',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
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
            'startColumn' => 41,
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
 * Compile a having clause involving a bit operator.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 855,
        'endLine' => 862,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingExpression' => 
      array (
        'name' => 'compileHavingExpression',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 870,
            'endLine' => 870,
            'startColumn' => 48,
            'endColumn' => 54,
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
 * Compile a having clause involving an expression.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 870,
        'endLine' => 873,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileNestedHavings' => 
      array (
        'name' => 'compileNestedHavings',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 881,
            'endLine' => 881,
            'startColumn' => 45,
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
 * Compile a nested having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 881,
        'endLine' => 884,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileOrders' => 
      array (
        'name' => 'compileOrders',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 893,
            'endLine' => 893,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'orders' => 
          array (
            'name' => 'orders',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 893,
            'endLine' => 893,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Compile the "order by" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $orders
 * @return string
 */',
        'startLine' => 893,
        'endLine' => 900,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileOrdersToArray' => 
      array (
        'name' => 'compileOrdersToArray',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 909,
            'endLine' => 909,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'orders' => 
          array (
            'name' => 'orders',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 909,
            'endLine' => 909,
            'startColumn' => 61,
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
 * Compile the query orders to an array.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $orders
 * @return array
 */',
        'startLine' => 909,
        'endLine' => 914,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileRandom' => 
      array (
        'name' => 'compileRandom',
        'parameters' => 
        array (
          'seed' => 
          array (
            'name' => 'seed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 922,
            'endLine' => 922,
            'startColumn' => 35,
            'endColumn' => 39,
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
 * Compile the random statement into SQL.
 *
 * @param  string|int  $seed
 * @return string
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
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileLimit' => 
      array (
        'name' => 'compileLimit',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 934,
            'endLine' => 934,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 934,
            'endLine' => 934,
            'startColumn' => 53,
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
        'docComment' => '/**
 * Compile the "limit" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  int  $limit
 * @return string
 */',
        'startLine' => 934,
        'endLine' => 937,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileOffset' => 
      array (
        'name' => 'compileOffset',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 946,
            'endLine' => 946,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 946,
            'endLine' => 946,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Compile the "offset" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  int  $offset
 * @return string
 */',
        'startLine' => 946,
        'endLine' => 949,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUnions' => 
      array (
        'name' => 'compileUnions',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 957,
            'endLine' => 957,
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
 * Compile the "union" queries attached to the main query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 957,
        'endLine' => 978,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUnion' => 
      array (
        'name' => 'compileUnion',
        'parameters' => 
        array (
          'union' => 
          array (
            'name' => 'union',
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
            'startLine' => 986,
            'endLine' => 986,
            'startColumn' => 37,
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
 * Compile a single union statement.
 *
 * @param  array  $union
 * @return string
 */',
        'startLine' => 986,
        'endLine' => 991,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'wrapUnion' => 
      array (
        'name' => 'wrapUnion',
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
            'startLine' => 999,
            'endLine' => 999,
            'startColumn' => 34,
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
 * Wrap a union subquery in parentheses.
 *
 * @param  string  $sql
 * @return string
 */',
        'startLine' => 999,
        'endLine' => 1002,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUnionAggregate' => 
      array (
        'name' => 'compileUnionAggregate',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1010,
            'endLine' => 1010,
            'startColumn' => 46,
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
 * Compile a union aggregate query into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1010,
        'endLine' => 1017,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileExists' => 
      array (
        'name' => 'compileExists',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1025,
            'endLine' => 1025,
            'startColumn' => 35,
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
 * Compile an exists statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1025,
        'endLine' => 1030,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsert' => 
      array (
        'name' => 'compileInsert',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1039,
            'endLine' => 1039,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1039,
            'endLine' => 1039,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Compile an insert statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 */',
        'startLine' => 1039,
        'endLine' => 1064,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertOrIgnore' => 
      array (
        'name' => 'compileInsertOrIgnore',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1075,
            'endLine' => 1075,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 0,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1075,
            'endLine' => 1075,
            'startColumn' => 59,
            'endColumn' => 71,
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
 * Compile an insert ignore statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1075,
        'endLine' => 1078,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertGetId' => 
      array (
        'name' => 'compileInsertGetId',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1088,
            'endLine' => 1088,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1088,
            'endLine' => 1088,
            'startColumn' => 56,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 1088,
            'endLine' => 1088,
            'startColumn' => 65,
            'endColumn' => 73,
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
 * Compile an insert and get ID statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @param  string  $sequence
 * @return string
 */',
        'startLine' => 1088,
        'endLine' => 1091,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertUsing' => 
      array (
        'name' => 'compileInsertUsing',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1101,
            'endLine' => 1101,
            'startColumn' => 40,
            'endColumn' => 53,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1101,
            'endLine' => 1101,
            'startColumn' => 56,
            'endColumn' => 69,
            'parameterIndex' => 1,
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
            'startLine' => 1101,
            'endLine' => 1101,
            'startColumn' => 72,
            'endColumn' => 82,
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
 * Compile an insert statement using a subquery into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $columns
 * @param  string  $sql
 * @return string
 */',
        'startLine' => 1101,
        'endLine' => 1110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertOrIgnoreUsing' => 
      array (
        'name' => 'compileInsertOrIgnoreUsing',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1122,
            'endLine' => 1122,
            'startColumn' => 48,
            'endColumn' => 61,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1122,
            'endLine' => 1122,
            'startColumn' => 64,
            'endColumn' => 77,
            'parameterIndex' => 1,
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
            'startLine' => 1122,
            'endLine' => 1122,
            'startColumn' => 80,
            'endColumn' => 90,
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
 * Compile an insert ignore statement using a subquery into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $columns
 * @param  string  $sql
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1122,
        'endLine' => 1125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdate' => 
      array (
        'name' => 'compileUpdate',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1134,
            'endLine' => 1134,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1134,
            'endLine' => 1134,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Compile an update statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 */',
        'startLine' => 1134,
        'endLine' => 1147,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdateColumns' => 
      array (
        'name' => 'compileUpdateColumns',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1156,
            'endLine' => 1156,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1156,
            'endLine' => 1156,
            'startColumn' => 61,
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
 * Compile the columns for an update statement.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 */',
        'startLine' => 1156,
        'endLine' => 1161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdateWithoutJoins' => 
      array (
        'name' => 'compileUpdateWithoutJoins',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1172,
            'endLine' => 1172,
            'startColumn' => 50,
            'endColumn' => 63,
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
            'startLine' => 1172,
            'endLine' => 1172,
            'startColumn' => 66,
            'endColumn' => 71,
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
            'startLine' => 1172,
            'endLine' => 1172,
            'startColumn' => 74,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1172,
            'endLine' => 1172,
            'startColumn' => 84,
            'endColumn' => 89,
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
 * Compile an update statement without joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $columns
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1172,
        'endLine' => 1175,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdateWithJoins' => 
      array (
        'name' => 'compileUpdateWithJoins',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1186,
            'endLine' => 1186,
            'startColumn' => 47,
            'endColumn' => 60,
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
            'startLine' => 1186,
            'endLine' => 1186,
            'startColumn' => 63,
            'endColumn' => 68,
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
            'startLine' => 1186,
            'endLine' => 1186,
            'startColumn' => 71,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1186,
            'endLine' => 1186,
            'startColumn' => 81,
            'endColumn' => 86,
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
 * Compile an update statement with joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $columns
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1186,
        'endLine' => 1191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpsert' => 
      array (
        'name' => 'compileUpsert',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1204,
            'endLine' => 1204,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1204,
            'endLine' => 1204,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'uniqueBy' => 
          array (
            'name' => 'uniqueBy',
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
            'startLine' => 1204,
            'endLine' => 1204,
            'startColumn' => 66,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
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
            'startLine' => 1204,
            'endLine' => 1204,
            'startColumn' => 83,
            'endColumn' => 95,
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
 * Compile an "upsert" statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @param  array  $uniqueBy
 * @param  array  $update
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1204,
        'endLine' => 1207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'prepareBindingsForUpdate' => 
      array (
        'name' => 'prepareBindingsForUpdate',
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
            'startLine' => 1216,
            'endLine' => 1216,
            'startColumn' => 46,
            'endColumn' => 60,
            'parameterIndex' => 0,
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1216,
            'endLine' => 1216,
            'startColumn' => 63,
            'endColumn' => 75,
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
 * Prepare the bindings for an update statement.
 *
 * @param  array  $bindings
 * @param  array  $values
 * @return array
 */',
        'startLine' => 1216,
        'endLine' => 1223,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileDelete' => 
      array (
        'name' => 'compileDelete',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1231,
            'endLine' => 1231,
            'startColumn' => 35,
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
 * Compile a delete statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1231,
        'endLine' => 1242,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileDeleteWithoutJoins' => 
      array (
        'name' => 'compileDeleteWithoutJoins',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1252,
            'endLine' => 1252,
            'startColumn' => 50,
            'endColumn' => 63,
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
            'startLine' => 1252,
            'endLine' => 1252,
            'startColumn' => 66,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1252,
            'endLine' => 1252,
            'startColumn' => 74,
            'endColumn' => 79,
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
 * Compile a delete statement without joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1252,
        'endLine' => 1255,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileDeleteWithJoins' => 
      array (
        'name' => 'compileDeleteWithJoins',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1265,
            'endLine' => 1265,
            'startColumn' => 47,
            'endColumn' => 60,
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
            'startLine' => 1265,
            'endLine' => 1265,
            'startColumn' => 63,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1265,
            'endLine' => 1265,
            'startColumn' => 71,
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
 * Compile a delete statement with joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1265,
        'endLine' => 1272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'prepareBindingsForDelete' => 
      array (
        'name' => 'prepareBindingsForDelete',
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
            'startLine' => 1280,
            'endLine' => 1280,
            'startColumn' => 46,
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
 * Prepare the bindings for a delete statement.
 *
 * @param  array  $bindings
 * @return array
 */',
        'startLine' => 1280,
        'endLine' => 1285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileTruncate' => 
      array (
        'name' => 'compileTruncate',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1293,
            'endLine' => 1293,
            'startColumn' => 37,
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
 * Compile a truncate table statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return array
 */',
        'startLine' => 1293,
        'endLine' => 1296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileLock' => 
      array (
        'name' => 'compileLock',
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
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1305,
            'endLine' => 1305,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 1305,
            'endLine' => 1305,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile the lock into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  bool|string  $value
 * @return string
 */',
        'startLine' => 1305,
        'endLine' => 1308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'supportsSavepoints' => 
      array (
        'name' => 'supportsSavepoints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the grammar supports savepoints.
 *
 * @return bool
 */',
        'startLine' => 1315,
        'endLine' => 1318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileSavepoint' => 
      array (
        'name' => 'compileSavepoint',
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
            'startLine' => 1326,
            'endLine' => 1326,
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
 * Compile the SQL statement to define a savepoint.
 *
 * @param  string  $name
 * @return string
 */',
        'startLine' => 1326,
        'endLine' => 1329,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileSavepointRollBack' => 
      array (
        'name' => 'compileSavepointRollBack',
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
            'startLine' => 1337,
            'endLine' => 1337,
            'startColumn' => 46,
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
 * Compile the SQL statement to execute a savepoint rollback.
 *
 * @param  string  $name
 * @return string
 */',
        'startLine' => 1337,
        'endLine' => 1340,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'wrapJsonBooleanSelector' => 
      array (
        'name' => 'wrapJsonBooleanSelector',
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
            'startLine' => 1348,
            'endLine' => 1348,
            'startColumn' => 48,
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
 * Wrap the given JSON selector for boolean values.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1348,
        'endLine' => 1351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'wrapJsonBooleanValue' => 
      array (
        'name' => 'wrapJsonBooleanValue',
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
            'startLine' => 1359,
            'endLine' => 1359,
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
 * Wrap the given JSON boolean value.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1359,
        'endLine' => 1362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'concatenate' => 
      array (
        'name' => 'concatenate',
        'parameters' => 
        array (
          'segments' => 
          array (
            'name' => 'segments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1370,
            'endLine' => 1370,
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
 * Concatenate an array of segments, removing empties.
 *
 * @param  array  $segments
 * @return string
 */',
        'startLine' => 1370,
        'endLine' => 1375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'removeLeadingBoolean' => 
      array (
        'name' => 'removeLeadingBoolean',
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
            'startLine' => 1383,
            'endLine' => 1383,
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
 * Remove the leading boolean from a statement.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1383,
        'endLine' => 1386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'substituteBindingsIntoRawSql' => 
      array (
        'name' => 'substituteBindingsIntoRawSql',
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
            'startLine' => 1395,
            'endLine' => 1395,
            'startColumn' => 50,
            'endColumn' => 53,
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
            'startLine' => 1395,
            'endLine' => 1395,
            'startColumn' => 56,
            'endColumn' => 64,
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
 * Substitute the given bindings into the given raw SQL query.
 *
 * @param  string  $sql
 * @param  array  $bindings
 * @return string
 */',
        'startLine' => 1395,
        'endLine' => 1424,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'getOperators' => 
      array (
        'name' => 'getOperators',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the grammar specific operators.
 *
 * @return array
 */',
        'startLine' => 1431,
        'endLine' => 1434,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'getBitwiseOperators' => 
      array (
        'name' => 'getBitwiseOperators',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the grammar specific bitwise operators.
 *
 * @return array
 */',
        'startLine' => 1441,
        'endLine' => 1444,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
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