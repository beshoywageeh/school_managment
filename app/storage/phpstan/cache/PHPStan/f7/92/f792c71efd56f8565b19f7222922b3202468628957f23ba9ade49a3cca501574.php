<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/BelongsTo.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\BelongsTo
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a16c0bbf5058b0cb4c42c14623c14019c296a9edf9dc56aca887be9caa0fb9d7-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/BelongsTo.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
    'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
    'shortName' => 'BelongsTo',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 393,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\ComparesRelatedModels',
      1 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
      2 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'child' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'name' => 'child',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The child model instance of the relation.
 *
 * @var \\Illuminate\\Database\\Eloquent\\Model
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'foreignKey' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'name' => 'foreignKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The foreign key of the parent model.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ownerKey' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'name' => 'ownerKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The associated key on the parent model.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'relationName' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 28,
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'child' => 
          array (
            'name' => 'child',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Model',
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
            'startColumn' => 49,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 63,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'ownerKey' => 
          array (
            'name' => 'ownerKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 76,
            'endColumn' => 84,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'relationName' => 
          array (
            'name' => 'relationName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 87,
            'endColumn' => 99,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new belongs to relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $child
 * @param  string  $foreignKey
 * @param  string  $ownerKey
 * @param  string  $relationName
 * @return void
 */',
        'startLine' => 57,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getResults' => 
      array (
        'name' => 'getResults',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the results of the relationship.
 *
 * @return mixed
 */',
        'startLine' => 76,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'addConstraints' => 
      array (
        'name' => 'addConstraints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the base constraints on the relation query.
 *
 * @return void
 */',
        'startLine' => 90,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'addEagerConstraints' => 
      array (
        'name' => 'addEagerConstraints',
        'parameters' => 
        array (
          'models' => 
          array (
            'name' => 'models',
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
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 41,
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
 * Set the constraints for an eager load of the relation.
 *
 * @param  array  $models
 * @return void
 */',
        'startLine' => 108,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getEagerModelKeys' => 
      array (
        'name' => 'getEagerModelKeys',
        'parameters' => 
        array (
          'models' => 
          array (
            'name' => 'models',
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
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 42,
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
 * Gather the keys from an array of related models.
 *
 * @param  array  $models
 * @return array
 */',
        'startLine' => 126,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'initRelation' => 
      array (
        'name' => 'initRelation',
        'parameters' => 
        array (
          'models' => 
          array (
            'name' => 'models',
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 49,
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
 * Initialize the relation on a set of models.
 *
 * @param  array  $models
 * @param  string  $relation
 * @return array
 */',
        'startLine' => 151,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'match' => 
      array (
        'name' => 'match',
        'parameters' => 
        array (
          'models' => 
          array (
            'name' => 'models',
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
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 27,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'results' => 
          array (
            'name' => 'results',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Collection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 42,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 63,
            'endColumn' => 71,
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
 * Match the eagerly loaded results to their parents.
 *
 * @param  array  $models
 * @param  \\Illuminate\\Database\\Eloquent\\Collection  $results
 * @param  string  $relation
 * @return array
 */',
        'startLine' => 168,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'associate' => 
      array (
        'name' => 'associate',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 31,
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
 * Associate the model instance to the given parent.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|int|string|null  $model
 * @return \\Illuminate\\Database\\Eloquent\\Model
 */',
        'startLine' => 201,
        'endLine' => 214,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'dissociate' => 
      array (
        'name' => 'dissociate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dissociate previously associated model from the given parent.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Model
 */',
        'startLine' => 221,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'disassociate' => 
      array (
        'name' => 'disassociate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias of "dissociate" method.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Model
 */',
        'startLine' => 233,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getRelationExistenceQuery' => 
      array (
        'name' => 'getRelationExistenceQuery',
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
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parentQuery' => 
          array (
            'name' => 'parentQuery',
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
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 63,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 246,
                'endLine' => 246,
                'startTokenPos' => 901,
                'startFilePos' => 7547,
                'endTokenPos' => 903,
                'endFilePos' => 7551,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 85,
            'endColumn' => 100,
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
 * Add the constraints for a relationship query.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $parentQuery
 * @param  array|mixed  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Builder
 */',
        'startLine' => 246,
        'endLine' => 255,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getRelationExistenceQueryForSelfRelation' => 
      array (
        'name' => 'getRelationExistenceQueryForSelfRelation',
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
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 62,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parentQuery' => 
          array (
            'name' => 'parentQuery',
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
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 78,
            'endColumn' => 97,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 265,
                'endLine' => 265,
                'startTokenPos' => 1008,
                'startFilePos' => 8332,
                'endTokenPos' => 1010,
                'endFilePos' => 8336,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 100,
            'endColumn' => 115,
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
 * Add the constraints for a relationship query on the same table.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $parentQuery
 * @param  array|mixed  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Builder
 */',
        'startLine' => 265,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'relationHasIncrementingId' => 
      array (
        'name' => 'relationHasIncrementingId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the related model has an auto-incrementing ID.
 *
 * @return bool
 */',
        'startLine' => 283,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'newRelatedInstanceFor' => 
      array (
        'name' => 'newRelatedInstanceFor',
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
                'name' => 'Illuminate\\Database\\Eloquent\\Model',
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
            'startColumn' => 46,
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
 * Make a new related instance for the given model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @return \\Illuminate\\Database\\Eloquent\\Model
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
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getChild' => 
      array (
        'name' => 'getChild',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the child of the relationship.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Model
 */',
        'startLine' => 305,
        'endLine' => 308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getForeignKeyName' => 
      array (
        'name' => 'getForeignKeyName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the foreign key of the relationship.
 *
 * @return string
 */',
        'startLine' => 315,
        'endLine' => 318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getQualifiedForeignKeyName' => 
      array (
        'name' => 'getQualifiedForeignKeyName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the fully qualified foreign key of the relationship.
 *
 * @return string
 */',
        'startLine' => 325,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getParentKey' => 
      array (
        'name' => 'getParentKey',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the key value of the child\'s foreign key.
 *
 * @return mixed
 */',
        'startLine' => 335,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getOwnerKeyName' => 
      array (
        'name' => 'getOwnerKeyName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the associated key of the relationship.
 *
 * @return string
 */',
        'startLine' => 345,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getQualifiedOwnerKeyName' => 
      array (
        'name' => 'getQualifiedOwnerKeyName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the fully qualified associated key of the relationship.
 *
 * @return string
 */',
        'startLine' => 355,
        'endLine' => 358,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getRelatedKeyFrom' => 
      array (
        'name' => 'getRelatedKeyFrom',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 366,
            'endLine' => 366,
            'startColumn' => 42,
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
 * Get the value of the model\'s associated key.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @return mixed
 */',
        'startLine' => 366,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'aliasName' => NULL,
      ),
      'getForeignKeyFrom' => 
      array (
        'name' => 'getForeignKeyFrom',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 42,
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
 * Get the value of the model\'s foreign key.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @return mixed
 */',
        'startLine' => 377,
        'endLine' => 382,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
        'startLine' => 389,
        'endLine' => 392,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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