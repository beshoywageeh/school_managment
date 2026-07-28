<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasRelationships.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Concerns\HasRelationships
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-72febe1a022b65fc6632efeb4b13ceed1378139bf059f021819d1c2866a3be62-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasRelationships.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
    'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
    'shortName' => 'HasRelationships',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 929,
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
      'relations' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'name' => 'relations',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 121,
            'startFilePos' => 1162,
            'endTokenPos' => 122,
            'endFilePos' => 1163,
          ),
        ),
        'docComment' => '/**
 * The loaded relationships for the model.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'touches' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'name' => 'touches',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 133,
            'startFilePos' => 1290,
            'endTokenPos' => 134,
            'endFilePos' => 1291,
          ),
        ),
        'docComment' => '/**
 * The relationships that should be touched on save.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'manyMethods' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'name' => 'manyMethods',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'belongsToMany\', \'morphToMany\', \'morphedByMany\']',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 49,
            'startTokenPos' => 147,
            'startFilePos' => 1418,
            'endTokenPos' => 158,
            'endFilePos' => 1481,
          ),
        ),
        'docComment' => '/**
 * The many to many relationship methods.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'relationResolvers' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'name' => 'relationResolvers',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 171,
            'startFilePos' => 1608,
            'endTokenPos' => 172,
            'endFilePos' => 1609,
          ),
        ),
        'docComment' => '/**
 * The relation resolver callbacks.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 45,
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
      'relationResolver' => 
      array (
        'name' => 'relationResolver',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 46,
            'endColumn' => 49,
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
 * Get the dynamic relation resolver if defined or inherited, or return null.
 *
 * @param  string  $class
 * @param  string  $key
 * @return mixed
 */',
        'startLine' => 65,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'resolveRelationUsing' => 
      array (
        'name' => 'resolveRelationUsing',
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
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 49,
            'endColumn' => 53,
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
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 56,
            'endColumn' => 72,
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
 * Define a dynamic relation resolver.
 *
 * @param  string  $name
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 85,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'hasOne' => 
      array (
        'name' => 'hasOne',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 101,
                'endLine' => 101,
                'startTokenPos' => 329,
                'startFilePos' => 2808,
                'endTokenPos' => 329,
                'endFilePos' => 2811,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 38,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 101,
                'endLine' => 101,
                'startTokenPos' => 336,
                'startFilePos' => 2826,
                'endTokenPos' => 336,
                'endFilePos' => 2829,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 58,
            'endColumn' => 73,
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
 * Define a one-to-one relationship.
 *
 * @param  string  $related
 * @param  string|null  $foreignKey
 * @param  string|null  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasOne
 */',
        'startLine' => 101,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newHasOne' => 
      array (
        'name' => 'newHasOne',
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
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 50,
            'endColumn' => 62,
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
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 65,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 78,
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
 * Instantiate a new HasOne relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  string  $foreignKey
 * @param  string  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasOne
 */',
        'startLine' => 121,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'hasOneThrough' => 
      array (
        'name' => 'hasOneThrough',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'through' => 
          array (
            'name' => 'through',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'firstKey' => 
          array (
            'name' => 'firstKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 137,
                'endLine' => 137,
                'startTokenPos' => 483,
                'startFilePos' => 4049,
                'endTokenPos' => 483,
                'endFilePos' => 4052,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 55,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'secondKey' => 
          array (
            'name' => 'secondKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 137,
                'endLine' => 137,
                'startTokenPos' => 490,
                'startFilePos' => 4068,
                'endTokenPos' => 490,
                'endFilePos' => 4071,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 73,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 137,
                'endLine' => 137,
                'startTokenPos' => 497,
                'startFilePos' => 4086,
                'endTokenPos' => 497,
                'endFilePos' => 4089,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 92,
            'endColumn' => 107,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'secondLocalKey' => 
          array (
            'name' => 'secondLocalKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 137,
                'endLine' => 137,
                'startTokenPos' => 504,
                'startFilePos' => 4110,
                'endTokenPos' => 504,
                'endFilePos' => 4113,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 110,
            'endColumn' => 131,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define a has-one-through relationship.
 *
 * @param  string  $related
 * @param  string  $through
 * @param  string|null  $firstKey
 * @param  string|null  $secondKey
 * @param  string|null  $localKey
 * @param  string|null  $secondLocalKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasOneThrough
 */',
        'startLine' => 137,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newHasOneThrough' => 
      array (
        'name' => 'newHasOneThrough',
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
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'farParent' => 
          array (
            'name' => 'farParent',
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
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 57,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'throughParent' => 
          array (
            'name' => 'throughParent',
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
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 75,
            'endColumn' => 94,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'firstKey' => 
          array (
            'name' => 'firstKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 97,
            'endColumn' => 105,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'secondKey' => 
          array (
            'name' => 'secondKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 108,
            'endColumn' => 117,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 120,
            'endColumn' => 128,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'secondLocalKey' => 
          array (
            'name' => 'secondLocalKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 131,
            'endColumn' => 145,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instantiate a new HasOneThrough relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $farParent
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $throughParent
 * @param  string  $firstKey
 * @param  string  $secondKey
 * @param  string  $localKey
 * @param  string  $secondLocalKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasOneThrough
 */',
        'startLine' => 164,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'morphOne' => 
      array (
        'name' => 'morphOne',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 179,
                'endLine' => 179,
                'startTokenPos' => 697,
                'startFilePos' => 5681,
                'endTokenPos' => 697,
                'endFilePos' => 5684,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 47,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 179,
                'endLine' => 179,
                'startTokenPos' => 704,
                'startFilePos' => 5693,
                'endTokenPos' => 704,
                'endFilePos' => 5696,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 61,
            'endColumn' => 70,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 179,
                'endLine' => 179,
                'startTokenPos' => 711,
                'startFilePos' => 5711,
                'endTokenPos' => 711,
                'endFilePos' => 5714,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 73,
            'endColumn' => 88,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define a polymorphic one-to-one relationship.
 *
 * @param  string  $related
 * @param  string  $name
 * @param  string|null  $type
 * @param  string|null  $id
 * @param  string|null  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphOne
 */',
        'startLine' => 179,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newMorphOne' => 
      array (
        'name' => 'newMorphOne',
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
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 1,
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
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 67,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 74,
            'endColumn' => 76,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 79,
            'endColumn' => 87,
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
 * Instantiate a new MorphOne relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  string  $type
 * @param  string  $id
 * @param  string  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphOne
 */',
        'startLine' => 202,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'belongsTo' => 
      array (
        'name' => 'belongsTo',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 216,
                'endLine' => 216,
                'startTokenPos' => 882,
                'startFilePos' => 6919,
                'endTokenPos' => 882,
                'endFilePos' => 6922,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 41,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'ownerKey' => 
          array (
            'name' => 'ownerKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 216,
                'endLine' => 216,
                'startTokenPos' => 889,
                'startFilePos' => 6937,
                'endTokenPos' => 889,
                'endFilePos' => 6940,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 2,
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
                'startLine' => 216,
                'endLine' => 216,
                'startTokenPos' => 896,
                'startFilePos' => 6955,
                'endTokenPos' => 896,
                'endFilePos' => 6958,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 79,
            'endColumn' => 94,
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
 * Define an inverse one-to-one or many relationship.
 *
 * @param  string  $related
 * @param  string|null  $foreignKey
 * @param  string|null  $ownerKey
 * @param  string|null  $relation
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
 */',
        'startLine' => 216,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newBelongsTo' => 
      array (
        'name' => 'newBelongsTo',
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 37,
            'endColumn' => 50,
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 53,
            'endColumn' => 64,
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 67,
            'endColumn' => 77,
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 80,
            'endColumn' => 88,
            'parameterIndex' => 3,
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 91,
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
 * Instantiate a new BelongsTo relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $child
 * @param  string  $foreignKey
 * @param  string  $ownerKey
 * @param  string  $relation
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
 */',
        'startLine' => 254,
        'endLine' => 257,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'morphTo' => 
      array (
        'name' => 'morphTo',
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
                'startLine' => 268,
                'endLine' => 268,
                'startTokenPos' => 1099,
                'startFilePos' => 9068,
                'endTokenPos' => 1099,
                'endFilePos' => 9071,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 29,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 268,
                'endLine' => 268,
                'startTokenPos' => 1106,
                'startFilePos' => 9082,
                'endTokenPos' => 1106,
                'endFilePos' => 9085,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 268,
                'endLine' => 268,
                'startTokenPos' => 1113,
                'startFilePos' => 9094,
                'endTokenPos' => 1113,
                'endFilePos' => 9097,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 57,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'ownerKey' => 
          array (
            'name' => 'ownerKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 268,
                'endLine' => 268,
                'startTokenPos' => 1120,
                'startFilePos' => 9112,
                'endTokenPos' => 1120,
                'endFilePos' => 9115,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 69,
            'endColumn' => 84,
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
 * Define a polymorphic, inverse one-to-one or many relationship.
 *
 * @param  string|null  $name
 * @param  string|null  $type
 * @param  string|null  $id
 * @param  string|null  $ownerKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo
 */',
        'startLine' => 268,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'morphEagerTo' => 
      array (
        'name' => 'morphEagerTo',
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
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 37,
            'endColumn' => 41,
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
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 44,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 51,
            'endColumn' => 53,
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
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 56,
            'endColumn' => 64,
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
 * Define a polymorphic, inverse one-to-one or many relationship.
 *
 * @param  string  $name
 * @param  string  $type
 * @param  string  $id
 * @param  string  $ownerKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo
 */',
        'startLine' => 296,
        'endLine' => 301,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'morphInstanceTo' => 
      array (
        'name' => 'morphInstanceTo',
        'parameters' => 
        array (
          'target' => 
          array (
            'name' => 'target',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 49,
            'endColumn' => 53,
            'parameterIndex' => 1,
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 56,
            'endColumn' => 60,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 63,
            'endColumn' => 65,
            'parameterIndex' => 3,
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 68,
            'endColumn' => 76,
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
 * Define a polymorphic, inverse one-to-one or many relationship.
 *
 * @param  string  $target
 * @param  string  $name
 * @param  string  $type
 * @param  string  $id
 * @param  string  $ownerKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo
 */',
        'startLine' => 313,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newMorphTo' => 
      array (
        'name' => 'newMorphTo',
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 51,
            'endColumn' => 63,
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 66,
            'endColumn' => 76,
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 79,
            'endColumn' => 87,
            'parameterIndex' => 3,
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 90,
            'endColumn' => 94,
            'parameterIndex' => 4,
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 97,
            'endColumn' => 105,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instantiate a new MorphTo relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  string  $foreignKey
 * @param  string  $ownerKey
 * @param  string  $type
 * @param  string  $relation
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo
 */',
        'startLine' => 335,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'getActualClassNameForMorph' => 
      array (
        'name' => 'getActualClassNameForMorph',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 346,
            'endLine' => 346,
            'startColumn' => 55,
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
 * Retrieve the actual class name for a given morph class.
 *
 * @param  string  $class
 * @return string
 */',
        'startLine' => 346,
        'endLine' => 349,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'guessBelongsToRelation' => 
      array (
        'name' => 'guessBelongsToRelation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Guess the "belongs to" relationship name.
 *
 * @return string
 */',
        'startLine' => 356,
        'endLine' => 361,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'through' => 
      array (
        'name' => 'through',
        'parameters' => 
        array (
          'relationship' => 
          array (
            'name' => 'relationship',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 369,
            'endLine' => 369,
            'startColumn' => 29,
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
 * Create a pending has-many-through or has-one-through relationship.
 *
 * @param  string|\\Illuminate\\Database\\Eloquent\\Relations\\HasMany|\\Illuminate\\Database\\Eloquent\\Relations\\HasOne  $relationship
 * @return \\Illuminate\\Database\\Eloquent\\PendingHasThroughRelationship
 */',
        'startLine' => 369,
        'endLine' => 376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'hasMany' => 
      array (
        'name' => 'hasMany',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 386,
            'endLine' => 386,
            'startColumn' => 29,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 386,
                'endLine' => 386,
                'startTokenPos' => 1609,
                'startFilePos' => 13141,
                'endTokenPos' => 1609,
                'endFilePos' => 13144,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 386,
            'endLine' => 386,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 386,
                'endLine' => 386,
                'startTokenPos' => 1616,
                'startFilePos' => 13159,
                'endTokenPos' => 1616,
                'endFilePos' => 13162,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 386,
            'endLine' => 386,
            'startColumn' => 59,
            'endColumn' => 74,
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
 * Define a one-to-many relationship.
 *
 * @param  string  $related
 * @param  string|null  $foreignKey
 * @param  string|null  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
 */',
        'startLine' => 386,
        'endLine' => 397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newHasMany' => 
      array (
        'name' => 'newHasMany',
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
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 51,
            'endColumn' => 63,
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
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 66,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 79,
            'endColumn' => 87,
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
 * Instantiate a new HasMany relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  string  $foreignKey
 * @param  string  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
 */',
        'startLine' => 408,
        'endLine' => 411,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'hasManyThrough' => 
      array (
        'name' => 'hasManyThrough',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'through' => 
          array (
            'name' => 'through',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 46,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'firstKey' => 
          array (
            'name' => 'firstKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 424,
                'endLine' => 424,
                'startTokenPos' => 1765,
                'startFilePos' => 14412,
                'endTokenPos' => 1765,
                'endFilePos' => 14415,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'secondKey' => 
          array (
            'name' => 'secondKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 424,
                'endLine' => 424,
                'startTokenPos' => 1772,
                'startFilePos' => 14431,
                'endTokenPos' => 1772,
                'endFilePos' => 14434,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 74,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 424,
                'endLine' => 424,
                'startTokenPos' => 1779,
                'startFilePos' => 14449,
                'endTokenPos' => 1779,
                'endFilePos' => 14452,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 93,
            'endColumn' => 108,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'secondLocalKey' => 
          array (
            'name' => 'secondLocalKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 424,
                'endLine' => 424,
                'startTokenPos' => 1786,
                'startFilePos' => 14473,
                'endTokenPos' => 1786,
                'endFilePos' => 14476,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 111,
            'endColumn' => 132,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define a has-many-through relationship.
 *
 * @param  string  $related
 * @param  string  $through
 * @param  string|null  $firstKey
 * @param  string|null  $secondKey
 * @param  string|null  $localKey
 * @param  string|null  $secondLocalKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasManyThrough
 */',
        'startLine' => 424,
        'endLine' => 441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newHasManyThrough' => 
      array (
        'name' => 'newHasManyThrough',
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
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'farParent' => 
          array (
            'name' => 'farParent',
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
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 58,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'throughParent' => 
          array (
            'name' => 'throughParent',
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
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 76,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'firstKey' => 
          array (
            'name' => 'firstKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 98,
            'endColumn' => 106,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'secondKey' => 
          array (
            'name' => 'secondKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 109,
            'endColumn' => 118,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 121,
            'endColumn' => 129,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'secondLocalKey' => 
          array (
            'name' => 'secondLocalKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 132,
            'endColumn' => 146,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instantiate a new HasManyThrough relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $farParent
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $throughParent
 * @param  string  $firstKey
 * @param  string  $secondKey
 * @param  string  $localKey
 * @param  string  $secondLocalKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasManyThrough
 */',
        'startLine' => 455,
        'endLine' => 458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'morphMany' => 
      array (
        'name' => 'morphMany',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 41,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 470,
                'endLine' => 470,
                'startTokenPos' => 1979,
                'startFilePos' => 16100,
                'endTokenPos' => 1979,
                'endFilePos' => 16103,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 48,
            'endColumn' => 59,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 470,
                'endLine' => 470,
                'startTokenPos' => 1986,
                'startFilePos' => 16112,
                'endTokenPos' => 1986,
                'endFilePos' => 16115,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 62,
            'endColumn' => 71,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 470,
                'endLine' => 470,
                'startTokenPos' => 1993,
                'startFilePos' => 16130,
                'endTokenPos' => 1993,
                'endFilePos' => 16133,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 74,
            'endColumn' => 89,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define a polymorphic one-to-many relationship.
 *
 * @param  string  $related
 * @param  string  $name
 * @param  string|null  $type
 * @param  string|null  $id
 * @param  string|null  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphMany
 */',
        'startLine' => 470,
        'endLine' => 484,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newMorphMany' => 
      array (
        'name' => 'newMorphMany',
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
            'startLine' => 496,
            'endLine' => 496,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 496,
            'endLine' => 496,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 1,
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
            'startLine' => 496,
            'endLine' => 496,
            'startColumn' => 68,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'id' => 
          array (
            'name' => 'id',
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
            'startColumn' => 75,
            'endColumn' => 77,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'localKey' => 
          array (
            'name' => 'localKey',
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
            'startColumn' => 80,
            'endColumn' => 88,
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
 * Instantiate a new MorphMany relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  string  $type
 * @param  string  $id
 * @param  string  $localKey
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphMany
 */',
        'startLine' => 496,
        'endLine' => 499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'belongsToMany' => 
      array (
        'name' => 'belongsToMany',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 513,
            'endLine' => 513,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 513,
                'endLine' => 513,
                'startTokenPos' => 2170,
                'startFilePos' => 17763,
                'endTokenPos' => 2170,
                'endFilePos' => 17766,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 513,
            'endLine' => 513,
            'startColumn' => 45,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'foreignPivotKey' => 
          array (
            'name' => 'foreignPivotKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 513,
                'endLine' => 513,
                'startTokenPos' => 2177,
                'startFilePos' => 17788,
                'endTokenPos' => 2177,
                'endFilePos' => 17791,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 513,
            'endLine' => 513,
            'startColumn' => 60,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'relatedPivotKey' => 
          array (
            'name' => 'relatedPivotKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 513,
                'endLine' => 513,
                'startTokenPos' => 2184,
                'startFilePos' => 17813,
                'endTokenPos' => 2184,
                'endFilePos' => 17816,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 513,
            'endLine' => 513,
            'startColumn' => 85,
            'endColumn' => 107,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'parentKey' => 
          array (
            'name' => 'parentKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 514,
                'endLine' => 514,
                'startTokenPos' => 2191,
                'startFilePos' => 17866,
                'endTokenPos' => 2191,
                'endFilePos' => 17869,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 35,
            'endColumn' => 51,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'relatedKey' => 
          array (
            'name' => 'relatedKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 514,
                'endLine' => 514,
                'startTokenPos' => 2198,
                'startFilePos' => 17886,
                'endTokenPos' => 2198,
                'endFilePos' => 17889,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 54,
            'endColumn' => 71,
            'parameterIndex' => 5,
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
                'startLine' => 514,
                'endLine' => 514,
                'startTokenPos' => 2205,
                'startFilePos' => 17904,
                'endTokenPos' => 2205,
                'endFilePos' => 17907,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 74,
            'endColumn' => 89,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define a many-to-many relationship.
 *
 * @param  string  $related
 * @param  string|class-string<\\Illuminate\\Database\\Eloquent\\Model>|null  $table
 * @param  string|null  $foreignPivotKey
 * @param  string|null  $relatedPivotKey
 * @param  string|null  $parentKey
 * @param  string|null  $relatedKey
 * @param  string|null  $relation
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany
 */',
        'startLine' => 513,
        'endLine' => 544,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newBelongsToMany' => 
      array (
        'name' => 'newBelongsToMany',
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
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 1,
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
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 72,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'foreignPivotKey' => 
          array (
            'name' => 'foreignPivotKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 80,
            'endColumn' => 95,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'relatedPivotKey' => 
          array (
            'name' => 'relatedPivotKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 98,
            'endColumn' => 113,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'parentKey' => 
          array (
            'name' => 'parentKey',
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
            'startColumn' => 41,
            'endColumn' => 50,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'relatedKey' => 
          array (
            'name' => 'relatedKey',
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
            'startColumn' => 53,
            'endColumn' => 63,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
          'relationName' => 
          array (
            'name' => 'relationName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 560,
                'endLine' => 560,
                'startTokenPos' => 2418,
                'startFilePos' => 20033,
                'endTokenPos' => 2418,
                'endFilePos' => 20036,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 560,
            'endLine' => 560,
            'startColumn' => 66,
            'endColumn' => 85,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instantiate a new BelongsToMany relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  string|class-string<\\Illuminate\\Database\\Eloquent\\Model>  $table
 * @param  string  $foreignPivotKey
 * @param  string  $relatedPivotKey
 * @param  string  $parentKey
 * @param  string  $relatedKey
 * @param  string|null  $relationName
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany
 */',
        'startLine' => 559,
        'endLine' => 563,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'morphToMany' => 
      array (
        'name' => 'morphToMany',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 579,
            'endLine' => 579,
            'startColumn' => 33,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 579,
            'endLine' => 579,
            'startColumn' => 43,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 579,
                'endLine' => 579,
                'startTokenPos' => 2474,
                'startFilePos' => 20723,
                'endTokenPos' => 2474,
                'endFilePos' => 20726,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 579,
            'endLine' => 579,
            'startColumn' => 50,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'foreignPivotKey' => 
          array (
            'name' => 'foreignPivotKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 579,
                'endLine' => 579,
                'startTokenPos' => 2481,
                'startFilePos' => 20748,
                'endTokenPos' => 2481,
                'endFilePos' => 20751,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 579,
            'endLine' => 579,
            'startColumn' => 65,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'relatedPivotKey' => 
          array (
            'name' => 'relatedPivotKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 580,
                'endLine' => 580,
                'startTokenPos' => 2488,
                'startFilePos' => 20805,
                'endTokenPos' => 2488,
                'endFilePos' => 20808,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 580,
            'endLine' => 580,
            'startColumn' => 33,
            'endColumn' => 55,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'parentKey' => 
          array (
            'name' => 'parentKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 580,
                'endLine' => 580,
                'startTokenPos' => 2495,
                'startFilePos' => 20824,
                'endTokenPos' => 2495,
                'endFilePos' => 20827,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 580,
            'endLine' => 580,
            'startColumn' => 58,
            'endColumn' => 74,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'relatedKey' => 
          array (
            'name' => 'relatedKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2502,
                'startFilePos' => 20876,
                'endTokenPos' => 2502,
                'endFilePos' => 20879,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 6,
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
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2509,
                'startFilePos' => 20894,
                'endTokenPos' => 2509,
                'endFilePos' => 20897,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 53,
            'endColumn' => 68,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
          'inverse' => 
          array (
            'name' => 'inverse',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2516,
                'startFilePos' => 20911,
                'endTokenPos' => 2516,
                'endFilePos' => 20915,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 71,
            'endColumn' => 86,
            'parameterIndex' => 8,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define a polymorphic many-to-many relationship.
 *
 * @param  string  $related
 * @param  string  $name
 * @param  string|null  $table
 * @param  string|null  $foreignPivotKey
 * @param  string|null  $relatedPivotKey
 * @param  string|null  $parentKey
 * @param  string|null  $relatedKey
 * @param  string|null  $relation
 * @param  bool  $inverse
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphToMany
 */',
        'startLine' => 579,
        'endLine' => 610,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newMorphToMany' => 
      array (
        'name' => 'newMorphToMany',
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
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 70,
            'endColumn' => 74,
            'parameterIndex' => 2,
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
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 77,
            'endColumn' => 82,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'foreignPivotKey' => 
          array (
            'name' => 'foreignPivotKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 85,
            'endColumn' => 100,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'relatedPivotKey' => 
          array (
            'name' => 'relatedPivotKey',
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
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'parentKey' => 
          array (
            'name' => 'parentKey',
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
            'startColumn' => 57,
            'endColumn' => 66,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
          'relatedKey' => 
          array (
            'name' => 'relatedKey',
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
            'startColumn' => 69,
            'endColumn' => 79,
            'parameterIndex' => 7,
            'isOptional' => false,
          ),
          'relationName' => 
          array (
            'name' => 'relationName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 629,
                'endLine' => 629,
                'startTokenPos' => 2756,
                'startFilePos' => 22947,
                'endTokenPos' => 2756,
                'endFilePos' => 22950,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 39,
            'endColumn' => 58,
            'parameterIndex' => 8,
            'isOptional' => true,
          ),
          'inverse' => 
          array (
            'name' => 'inverse',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 629,
                'endLine' => 629,
                'startTokenPos' => 2763,
                'startFilePos' => 22964,
                'endTokenPos' => 2763,
                'endFilePos' => 22968,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 9,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instantiate a new MorphToMany relationship.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  string  $name
 * @param  string  $table
 * @param  string  $foreignPivotKey
 * @param  string  $relatedPivotKey
 * @param  string  $parentKey
 * @param  string  $relatedKey
 * @param  string|null  $relationName
 * @param  bool  $inverse
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphToMany
 */',
        'startLine' => 627,
        'endLine' => 633,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'morphedByMany' => 
      array (
        'name' => 'morphedByMany',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 648,
            'endLine' => 648,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 648,
            'endLine' => 648,
            'startColumn' => 45,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 648,
                'endLine' => 648,
                'startTokenPos' => 2825,
                'startFilePos' => 23663,
                'endTokenPos' => 2825,
                'endFilePos' => 23666,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 648,
            'endLine' => 648,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'foreignPivotKey' => 
          array (
            'name' => 'foreignPivotKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 648,
                'endLine' => 648,
                'startTokenPos' => 2832,
                'startFilePos' => 23688,
                'endTokenPos' => 2832,
                'endFilePos' => 23691,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 648,
            'endLine' => 648,
            'startColumn' => 67,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'relatedPivotKey' => 
          array (
            'name' => 'relatedPivotKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 649,
                'endLine' => 649,
                'startTokenPos' => 2839,
                'startFilePos' => 23747,
                'endTokenPos' => 2839,
                'endFilePos' => 23750,
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
            'startColumn' => 35,
            'endColumn' => 57,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'parentKey' => 
          array (
            'name' => 'parentKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 649,
                'endLine' => 649,
                'startTokenPos' => 2846,
                'startFilePos' => 23766,
                'endTokenPos' => 2846,
                'endFilePos' => 23769,
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
            'startColumn' => 60,
            'endColumn' => 76,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'relatedKey' => 
          array (
            'name' => 'relatedKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 649,
                'endLine' => 649,
                'startTokenPos' => 2853,
                'startFilePos' => 23786,
                'endTokenPos' => 2853,
                'endFilePos' => 23789,
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
            'startColumn' => 79,
            'endColumn' => 96,
            'parameterIndex' => 6,
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
                'startLine' => 649,
                'endLine' => 649,
                'startTokenPos' => 2860,
                'startFilePos' => 23804,
                'endTokenPos' => 2860,
                'endFilePos' => 23807,
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
            'startColumn' => 99,
            'endColumn' => 114,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define a polymorphic, inverse many-to-many relationship.
 *
 * @param  string  $related
 * @param  string  $name
 * @param  string|null  $table
 * @param  string|null  $foreignPivotKey
 * @param  string|null  $relatedPivotKey
 * @param  string|null  $parentKey
 * @param  string|null  $relatedKey
 * @param  string|null  $relation
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphToMany
 */',
        'startLine' => 648,
        'endLine' => 662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'guessBelongsToManyRelation' => 
      array (
        'name' => 'guessBelongsToManyRelation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the relationship name of the belongsToMany relationship.
 *
 * @return string|null
 */',
        'startLine' => 669,
        'endLine' => 679,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'joiningTable' => 
      array (
        'name' => 'joiningTable',
        'parameters' => 
        array (
          'related' => 
          array (
            'name' => 'related',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 688,
            'endLine' => 688,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'instance' => 
          array (
            'name' => 'instance',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 688,
                'endLine' => 688,
                'startTokenPos' => 3043,
                'startFilePos' => 25156,
                'endTokenPos' => 3043,
                'endFilePos' => 25159,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 688,
            'endLine' => 688,
            'startColumn' => 44,
            'endColumn' => 59,
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
 * Get the joining table name for a many-to-many relation.
 *
 * @param  string  $related
 * @param  \\Illuminate\\Database\\Eloquent\\Model|null  $instance
 * @return string
 */',
        'startLine' => 688,
        'endLine' => 705,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'joiningTableSegment' => 
      array (
        'name' => 'joiningTableSegment',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get this model\'s half of the intermediate table name for belongsToMany relationships.
 *
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
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'touches' => 
      array (
        'name' => 'touches',
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
            'startLine' => 723,
            'endLine' => 723,
            'startColumn' => 29,
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
 * Determine if the model touches a given relation.
 *
 * @param  string  $relation
 * @return bool
 */',
        'startLine' => 723,
        'endLine' => 726,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'touchOwners' => 
      array (
        'name' => 'touchOwners',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Touch the owning relations of the model.
 *
 * @return void
 */',
        'startLine' => 733,
        'endLine' => 746,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'getMorphs' => 
      array (
        'name' => 'getMorphs',
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
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 34,
            'endColumn' => 38,
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
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 41,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 48,
            'endColumn' => 50,
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
 * Get the polymorphic relationship columns.
 *
 * @param  string  $name
 * @param  string  $type
 * @param  string  $id
 * @return array
 */',
        'startLine' => 756,
        'endLine' => 759,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'getMorphClass' => 
      array (
        'name' => 'getMorphClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the class name for polymorphic relations.
 *
 * @return string
 */',
        'startLine' => 766,
        'endLine' => 783,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newRelatedInstance' => 
      array (
        'name' => 'newRelatedInstance',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 791,
            'endLine' => 791,
            'startColumn' => 43,
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
 * Create a new model instance for a related model.
 *
 * @param  string  $class
 * @return mixed
 */',
        'startLine' => 791,
        'endLine' => 798,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'newRelatedThroughInstance' => 
      array (
        'name' => 'newRelatedThroughInstance',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 806,
            'endLine' => 806,
            'startColumn' => 50,
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
 * Create a new model instance for a related "through" model.
 *
 * @param  string  $class
 * @return mixed
 */',
        'startLine' => 806,
        'endLine' => 809,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'getRelations' => 
      array (
        'name' => 'getRelations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all the loaded relations for the instance.
 *
 * @return array
 */',
        'startLine' => 816,
        'endLine' => 819,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'getRelation' => 
      array (
        'name' => 'getRelation',
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
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 33,
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
 * Get a specified relationship.
 *
 * @param  string  $relation
 * @return mixed
 */',
        'startLine' => 827,
        'endLine' => 830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'relationLoaded' => 
      array (
        'name' => 'relationLoaded',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 838,
            'endLine' => 838,
            'startColumn' => 36,
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
 * Determine if the given relation is loaded.
 *
 * @param  string  $key
 * @return bool
 */',
        'startLine' => 838,
        'endLine' => 841,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'setRelation' => 
      array (
        'name' => 'setRelation',
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
            'startLine' => 850,
            'endLine' => 850,
            'startColumn' => 33,
            'endColumn' => 41,
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
            'startLine' => 850,
            'endLine' => 850,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Set the given relationship on the model.
 *
 * @param  string  $relation
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 850,
        'endLine' => 855,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'unsetRelation' => 
      array (
        'name' => 'unsetRelation',
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
            'startLine' => 863,
            'endLine' => 863,
            'startColumn' => 35,
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
 * Unset a loaded relationship.
 *
 * @param  string  $relation
 * @return $this
 */',
        'startLine' => 863,
        'endLine' => 868,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'setRelations' => 
      array (
        'name' => 'setRelations',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
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
            'startLine' => 876,
            'endLine' => 876,
            'startColumn' => 34,
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
 * Set the entire relations array on the model.
 *
 * @param  array  $relations
 * @return $this
 */',
        'startLine' => 876,
        'endLine' => 881,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'withoutRelations' => 
      array (
        'name' => 'withoutRelations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Duplicate the instance and unset all the loaded relations.
 *
 * @return $this
 */',
        'startLine' => 888,
        'endLine' => 893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'unsetRelations' => 
      array (
        'name' => 'unsetRelations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unset all the loaded relations for the instance.
 *
 * @return $this
 */',
        'startLine' => 900,
        'endLine' => 905,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'getTouchedRelations' => 
      array (
        'name' => 'getTouchedRelations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the relationships that are touched on save.
 *
 * @return array
 */',
        'startLine' => 912,
        'endLine' => 915,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'aliasName' => NULL,
      ),
      'setTouchedRelations' => 
      array (
        'name' => 'setTouchedRelations',
        'parameters' => 
        array (
          'touches' => 
          array (
            'name' => 'touches',
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
            'startLine' => 923,
            'endLine' => 923,
            'startColumn' => 41,
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
 * Set the relationships that are touched on save.
 *
 * @param  array  $touches
 * @return $this
 */',
        'startLine' => 923,
        'endLine' => 928,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
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