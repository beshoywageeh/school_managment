<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/CanBeOneOfMany.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\Concerns\CanBeOneOfMany
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a20cfb7e64317c84c32bbca872fcc07a0219b34db5b95e9e71a619cd890ea3c8-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/CanBeOneOfMany.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
    'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
    'shortName' => 'CanBeOneOfMany',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 331,
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
      'isOneOfMany' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'name' => 'isOneOfMany',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 46,
            'startFilePos' => 374,
            'endTokenPos' => 46,
            'endFilePos' => 378,
          ),
        ),
        'docComment' => '/**
 * Determines whether the relationship is one-of-many.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'relationName' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'name' => 'relationName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the relationship.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'oneOfManySubQuery' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'name' => 'oneOfManySubQuery',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The one of many inner join subselect query builder instance.
 *
 * @var \\Illuminate\\Database\\Eloquent\\Builder|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 33,
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
      'addOneOfManySubQueryConstraints' => 
      array (
        'name' => 'addOneOfManySubQueryConstraints',
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
                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 62,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 42,
                'endLine' => 42,
                'startTokenPos' => 82,
                'startFilePos' => 1017,
                'endTokenPos' => 82,
                'endFilePos' => 1020,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 78,
            'endColumn' => 91,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'aggregate' => 
          array (
            'name' => 'aggregate',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 42,
                'endLine' => 42,
                'startTokenPos' => 89,
                'startFilePos' => 1036,
                'endTokenPos' => 89,
                'endFilePos' => 1039,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 94,
            'endColumn' => 110,
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
 * Add constraints for inner join subselect for one of many relationships.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  string|null  $column
 * @param  string|null  $aggregate
 * @return void
 */',
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 112,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'getOneOfManySubQuerySelectColumns' => 
      array (
        'name' => 'getOneOfManySubQuerySelectColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the columns the determine the relationship groups.
 *
 * @return array|string
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'addOneOfManyJoinSubQueryConstraints' => 
      array (
        'name' => 'addOneOfManyJoinSubQueryConstraints',
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
                'name' => 'Illuminate\\Database\\Query\\JoinClause',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 66,
            'endColumn' => 81,
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
 * Add join query constraints for one of many relationships.
 *
 * @param  \\Illuminate\\Database\\Query\\JoinClause  $join
 * @return void
 */',
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 83,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'ofMany' => 
      array (
        'name' => 'ofMany',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 134,
                'startFilePos' => 1825,
                'endTokenPos' => 134,
                'endFilePos' => 1828,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 28,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'aggregate' => 
          array (
            'name' => 'aggregate',
            'default' => 
            array (
              'code' => '\'MAX\'',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 141,
                'startFilePos' => 1844,
                'endTokenPos' => 141,
                'endFilePos' => 1848,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 44,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'relation' => 
          array (
            'name' => 'relation',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 148,
                'startFilePos' => 1863,
                'endTokenPos' => 148,
                'endFilePos' => 1866,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 64,
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
 * Indicate that the relation is a single result of a larger one-to-many relationship.
 *
 * @param  string|array|null  $column
 * @param  string|\\Closure|null  $aggregate
 * @param  string|null  $relation
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 69,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'latestOfMany' => 
      array (
        'name' => 'latestOfMany',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 641,
                'startFilePos' => 4341,
                'endTokenPos' => 641,
                'endFilePos' => 4344,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'relation' => 
          array (
            'name' => 'relation',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 648,
                'startFilePos' => 4359,
                'endTokenPos' => 648,
                'endFilePos' => 4362,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
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
 * Indicate that the relation is the latest single result of a larger one-to-many relationship.
 *
 * @param  string|array|null  $column
 * @param  string|null  $relation
 * @return $this
 */',
        'startLine' => 151,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'oldestOfMany' => 
      array (
        'name' => 'oldestOfMany',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 165,
                'endLine' => 165,
                'startTokenPos' => 719,
                'startFilePos' => 4813,
                'endTokenPos' => 719,
                'endFilePos' => 4816,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'relation' => 
          array (
            'name' => 'relation',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 165,
                'endLine' => 165,
                'startTokenPos' => 726,
                'startFilePos' => 4831,
                'endTokenPos' => 726,
                'endFilePos' => 4834,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
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
 * Indicate that the relation is the oldest single result of a larger one-to-many relationship.
 *
 * @param  string|array|null  $column
 * @param  string|null  $relation
 * @return $this
 */',
        'startLine' => 165,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'getDefaultOneOfManyJoinAlias' => 
      array (
        'name' => 'getDefaultOneOfManyJoinAlias',
        'parameters' => 
        array (
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 178,
            'endLine' => 178,
            'startColumn' => 53,
            'endColumn' => 61,
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
 * Get the default alias for the one of many inner join clause.
 *
 * @param  string  $relation
 * @return string
 */',
        'startLine' => 178,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'newOneOfManySubQuery' => 
      array (
        'name' => 'newOneOfManySubQuery',
        'parameters' => 
        array (
          'groupBy' => 
          array (
            'name' => 'groupBy',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 193,
                'endLine' => 193,
                'startTokenPos' => 844,
                'startFilePos' => 5756,
                'endTokenPos' => 844,
                'endFilePos' => 5759,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 55,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'aggregate' => 
          array (
            'name' => 'aggregate',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 193,
                'endLine' => 193,
                'startTokenPos' => 851,
                'startFilePos' => 5775,
                'endTokenPos' => 851,
                'endFilePos' => 5778,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 72,
            'endColumn' => 88,
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
 * Get a new query for the related model, grouping the query by the given column, often the foreign key of the relationship.
 *
 * @param  string|array  $groupBy
 * @param  array<string>|null  $columns
 * @param  string|null  $aggregate
 * @return \\Illuminate\\Database\\Eloquent\\Builder
 */',
        'startLine' => 193,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'addOneOfManyJoinSubQuery' => 
      array (
        'name' => 'addOneOfManyJoinSubQuery',
        'parameters' => 
        array (
          'parent' => 
          array (
            'name' => 'parent',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 49,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'subQuery' => 
          array (
            'name' => 'subQuery',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 66,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'on' => 
          array (
            'name' => 'on',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 85,
            'endColumn' => 87,
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
 * Add the join subquery to the given query on the given column and the relationship\'s foreign key.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $parent
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $subQuery
 * @param  array<string>  $on
 * @return void
 */',
        'startLine' => 230,
        'endLine' => 243,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'mergeOneOfManyJoinsTo' => 
      array (
        'name' => 'mergeOneOfManyJoinsTo',
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
                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 251,
            'endLine' => 251,
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
 * Merge the relationship query joins to the given query builder.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @return void
 */',
        'startLine' => 251,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'getRelationQuery' => 
      array (
        'name' => 'getRelationQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the query builder that will contain the relationship constraints.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder
 */',
        'startLine' => 263,
        'endLine' => 268,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'getOneOfManySubQuery' => 
      array (
        'name' => 'getOneOfManySubQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the one of many inner join subselect builder instance.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder|void
 */',
        'startLine' => 275,
        'endLine' => 278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'qualifySubSelectColumn' => 
      array (
        'name' => 'qualifySubSelectColumn',
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
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 44,
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
 * Get the qualified column name for the one-of-many relationship using the subselect join query\'s alias.
 *
 * @param  string  $column
 * @return string
 */',
        'startLine' => 286,
        'endLine' => 289,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'qualifyRelatedColumn' => 
      array (
        'name' => 'qualifyRelatedColumn',
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
            'startLine' => 297,
            'endLine' => 297,
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
 * Qualify related column using the related table name if it is not already qualified.
 *
 * @param  string  $column
 * @return string
 */',
        'startLine' => 297,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'guessRelationship' => 
      array (
        'name' => 'guessRelationship',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Guess the "hasOne" relationship\'s name via backtrace.
 *
 * @return string
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
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'isOneOfMany' => 
      array (
        'name' => 'isOneOfMany',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine whether the relationship is a one-of-many relationship.
 *
 * @return bool
 */',
        'startLine' => 317,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'aliasName' => NULL,
      ),
      'getRelationName' => 
      array (
        'name' => 'getRelationName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the name of the relationship.
 *
 * @return string
 */',
        'startLine' => 327,
        'endLine' => 330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
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