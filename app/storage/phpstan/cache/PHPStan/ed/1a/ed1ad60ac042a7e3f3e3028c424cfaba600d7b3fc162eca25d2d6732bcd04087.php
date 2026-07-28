<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Builder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Builder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-00081dc7b7fea20d5275a7322777dc79beb27170d8732e8a836d69cd66f2c789-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Builder',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Eloquent',
    'name' => 'Illuminate\\Database\\Eloquent\\Builder',
    'shortName' => 'Builder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property-read HigherOrderBuilderProxy $orWhere
 * @property-read HigherOrderBuilderProxy $whereNot
 * @property-read HigherOrderBuilderProxy $orWhereNot
 *
 * @mixin \\Illuminate\\Database\\Query\\Builder
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 32,
    'endLine' => 2063,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
      1 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
      2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'query' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'query',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The base query builder instance.
 *
 * @var \\Illuminate\\Database\\Query\\Builder
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
      'model' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'model',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The model being queried.
 *
 * @var \\Illuminate\\Database\\Eloquent\\Model
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'eagerLoad' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'eagerLoad',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 167,
            'startFilePos' => 1587,
            'endTokenPos' => 168,
            'endFilePos' => 1588,
          ),
        ),
        'docComment' => '/**
 * The relationships that should be eager loaded.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'macros' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'macros',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 181,
            'startFilePos' => 1718,
            'endTokenPos' => 182,
            'endFilePos' => 1719,
          ),
        ),
        'docComment' => '/**
 * All of the globally registered builder macros.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localMacros' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'localMacros',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 193,
            'startFilePos' => 1846,
            'endTokenPos' => 194,
            'endFilePos' => 1847,
          ),
        ),
        'docComment' => '/**
 * All of the locally registered builder macros.
 *
 * @var array
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
      'onDelete' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'onDelete',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A replacement for the typical delete function.
 *
 * @var \\Closure
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'propertyPassthru' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'propertyPassthru',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'from\']',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 87,
            'startTokenPos' => 212,
            'startFilePos' => 2119,
            'endTokenPos' => 217,
            'endFilePos' => 2141,
          ),
        ),
        'docComment' => '/**
 * The properties that should be returned from query builder.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'passthru' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'passthru',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'aggregate\', \'average\', \'avg\', \'count\', \'dd\', \'ddrawsql\', \'doesntexist\', \'doesntexistor\', \'dump\', \'dumprawsql\', \'exists\', \'existsor\', \'explain\', \'getbindings\', \'getconnection\', \'getgrammar\', \'getrawbindings\', \'implode\', \'insert\', \'insertgetid\', \'insertorignore\', \'insertusing\', \'insertorignoreusing\', \'max\', \'min\', \'raw\', \'rawvalue\', \'sum\', \'tosql\', \'torawsql\']',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 125,
            'startTokenPos' => 228,
            'startFilePos' => 2278,
            'endTokenPos' => 320,
            'endFilePos' => 2886,
          ),
        ),
        'docComment' => '/**
 * The methods that should be returned from query builder.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scopes' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'scopes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 132,
            'endLine' => 132,
            'startTokenPos' => 331,
            'startFilePos' => 2985,
            'endTokenPos' => 332,
            'endFilePos' => 2986,
          ),
        ),
        'docComment' => '/**
 * Applied global scopes.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'removedScopes' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'name' => 'removedScopes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 139,
            'endLine' => 139,
            'startTokenPos' => 343,
            'startFilePos' => 3092,
            'endTokenPos' => 344,
            'endFilePos' => 3093,
          ),
        ),
        'docComment' => '/**
 * Removed global scopes.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 139,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 34,
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
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 33,
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
 * Create a new Eloquent query builder instance.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return void
 */',
        'startLine' => 147,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 158,
                'endLine' => 158,
                'startTokenPos' => 387,
                'startFilePos' => 3561,
                'endTokenPos' => 388,
                'endFilePos' => 3562,
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
            'startLine' => 158,
            'endLine' => 158,
            'startColumn' => 26,
            'endColumn' => 47,
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
 * Create and return an un-saved model instance.
 *
 * @param  array  $attributes
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 158,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withGlobalScope' => 
      array (
        'name' => 'withGlobalScope',
        'parameters' => 
        array (
          'identifier' => 
          array (
            'name' => 'identifier',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
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
 * Register a new global scope.
 *
 * @param  string  $identifier
 * @param  \\Illuminate\\Database\\Eloquent\\Scope|\\Closure  $scope
 * @return $this
 */',
        'startLine' => 170,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withoutGlobalScope' => 
      array (
        'name' => 'withoutGlobalScope',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 187,
            'endLine' => 187,
            'startColumn' => 40,
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
 * Remove a registered global scope.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Scope|string  $scope
 * @return $this
 */',
        'startLine' => 187,
        'endLine' => 198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withoutGlobalScopes' => 
      array (
        'name' => 'withoutGlobalScopes',
        'parameters' => 
        array (
          'scopes' => 
          array (
            'name' => 'scopes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 206,
                'endLine' => 206,
                'startTokenPos' => 546,
                'startFilePos' => 4635,
                'endTokenPos' => 546,
                'endFilePos' => 4638,
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
                      'name' => 'array',
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
            'startLine' => 206,
            'endLine' => 206,
            'startColumn' => 41,
            'endColumn' => 61,
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
 * Remove all or passed registered global scopes.
 *
 * @param  array|null  $scopes
 * @return $this
 */',
        'startLine' => 206,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'removedScopes' => 
      array (
        'name' => 'removedScopes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get an array of global scopes that were removed from the query.
 *
 * @return array
 */',
        'startLine' => 224,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'whereKey' => 
      array (
        'name' => 'whereKey',
        'parameters' => 
        array (
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
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 30,
            'endColumn' => 32,
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
 * Add a where clause on the primary key to the query.
 *
 * @param  mixed  $id
 * @return $this
 */',
        'startLine' => 235,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'whereKeyNot' => 
      array (
        'name' => 'whereKeyNot',
        'parameters' => 
        array (
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
            'startLine' => 264,
            'endLine' => 264,
            'startColumn' => 33,
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
 * Add a where clause on the primary key to the query.
 *
 * @param  mixed  $id
 * @return $this
 */',
        'startLine' => 264,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'where' => 
      array (
        'name' => 'where',
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
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 296,
                'endLine' => 296,
                'startTokenPos' => 1035,
                'startFilePos' => 7050,
                'endTokenPos' => 1035,
                'endFilePos' => 7053,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 296,
                'endLine' => 296,
                'startTokenPos' => 1042,
                'startFilePos' => 7065,
                'endTokenPos' => 1042,
                'endFilePos' => 7068,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 54,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 296,
                'endLine' => 296,
                'startTokenPos' => 1049,
                'startFilePos' => 7082,
                'endTokenPos' => 1049,
                'endFilePos' => 7086,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 296,
            'endLine' => 296,
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
 * Add a basic where clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 296,
        'endLine' => 307,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'firstWhere' => 
      array (
        'name' => 'firstWhere',
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
            'startLine' => 318,
            'endLine' => 318,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 318,
                'endLine' => 318,
                'startTokenPos' => 1149,
                'startFilePos' => 7823,
                'endTokenPos' => 1149,
                'endFilePos' => 7826,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 318,
            'endLine' => 318,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 318,
                'endLine' => 318,
                'startTokenPos' => 1156,
                'startFilePos' => 7838,
                'endTokenPos' => 1156,
                'endFilePos' => 7841,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 318,
            'endLine' => 318,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 318,
                'endLine' => 318,
                'startTokenPos' => 1163,
                'startFilePos' => 7855,
                'endTokenPos' => 1163,
                'endFilePos' => 7859,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 318,
            'endLine' => 318,
            'startColumn' => 74,
            'endColumn' => 89,
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
 * Add a basic where clause to the query, and return the first result.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return \\Illuminate\\Database\\Eloquent\\Model|static|null
 */',
        'startLine' => 318,
        'endLine' => 321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'orWhere' => 
      array (
        'name' => 'orWhere',
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
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1202,
                'startFilePos' => 8227,
                'endTokenPos' => 1202,
                'endFilePos' => 8230,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1209,
                'startFilePos' => 8242,
                'endTokenPos' => 1209,
                'endFilePos' => 8245,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 56,
            'endColumn' => 68,
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
 * Add an "or where" clause to the query.
 *
 * @param  \\Closure|array|string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 331,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'whereNot' => 
      array (
        'name' => 'whereNot',
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
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 349,
                'endLine' => 349,
                'startTokenPos' => 1283,
                'startFilePos' => 8791,
                'endTokenPos' => 1283,
                'endFilePos' => 8794,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 349,
                'endLine' => 349,
                'startTokenPos' => 1290,
                'startFilePos' => 8806,
                'endTokenPos' => 1290,
                'endFilePos' => 8809,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 349,
                'endLine' => 349,
                'startTokenPos' => 1297,
                'startFilePos' => 8823,
                'endTokenPos' => 1297,
                'endFilePos' => 8827,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 72,
            'endColumn' => 87,
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
 * Add a basic "where not" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 349,
        'endLine' => 352,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNot' => 
      array (
        'name' => 'orWhereNot',
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
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 362,
                'endLine' => 362,
                'startTokenPos' => 1340,
                'startFilePos' => 9218,
                'endTokenPos' => 1340,
                'endFilePos' => 9221,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 362,
                'endLine' => 362,
                'startTokenPos' => 1347,
                'startFilePos' => 9233,
                'endTokenPos' => 1347,
                'endFilePos' => 9236,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 59,
            'endColumn' => 71,
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
 * Add an "or where not" clause to the query.
 *
 * @param  \\Closure|array|string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 362,
        'endLine' => 365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'latest' => 
      array (
        'name' => 'latest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 373,
                'endLine' => 373,
                'startTokenPos' => 1385,
                'startFilePos' => 9540,
                'endTokenPos' => 1385,
                'endFilePos' => 9543,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 28,
            'endColumn' => 41,
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
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
        'startLine' => 373,
        'endLine' => 382,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'oldest' => 
      array (
        'name' => 'oldest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 390,
                'endLine' => 390,
                'startTokenPos' => 1449,
                'startFilePos' => 9960,
                'endTokenPos' => 1449,
                'endFilePos' => 9963,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 28,
            'endColumn' => 41,
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
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
        'startLine' => 390,
        'endLine' => 399,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'hydrate' => 
      array (
        'name' => 'hydrate',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
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
            'startLine' => 407,
            'endLine' => 407,
            'startColumn' => 29,
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
 * Create a collection of models from plain arrays.
 *
 * @param  array  $items
 * @return \\Illuminate\\Database\\Eloquent\\Collection
 */',
        'startLine' => 407,
        'endLine' => 420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'fromQuery' => 
      array (
        'name' => 'fromQuery',
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
            'startLine' => 429,
            'endLine' => 429,
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
                'startLine' => 429,
                'endLine' => 429,
                'startTokenPos' => 1624,
                'startFilePos' => 10996,
                'endTokenPos' => 1625,
                'endFilePos' => 10997,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 429,
            'endLine' => 429,
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
 * Create a collection of models from a raw query.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return \\Illuminate\\Database\\Eloquent\\Collection
 */',
        'startLine' => 429,
        'endLine' => 434,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'find' => 
      array (
        'name' => 'find',
        'parameters' => 
        array (
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
            'startLine' => 443,
            'endLine' => 443,
            'startColumn' => 26,
            'endColumn' => 28,
            'parameterIndex' => 0,
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
                'startLine' => 443,
                'endLine' => 443,
                'startTokenPos' => 1673,
                'startFilePos' => 11405,
                'endTokenPos' => 1675,
                'endFilePos' => 11409,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 443,
            'endLine' => 443,
            'startColumn' => 31,
            'endColumn' => 46,
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
 * Find a model by its primary key.
 *
 * @param  mixed  $id
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Model|\\Illuminate\\Database\\Eloquent\\Collection|static[]|static|null
 */',
        'startLine' => 443,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'findMany' => 
      array (
        'name' => 'findMany',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
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
            'startColumn' => 30,
            'endColumn' => 33,
            'parameterIndex' => 0,
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
                'startLine' => 459,
                'endLine' => 459,
                'startTokenPos' => 1746,
                'startFilePos' => 11879,
                'endTokenPos' => 1748,
                'endFilePos' => 11883,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 459,
            'endLine' => 459,
            'startColumn' => 36,
            'endColumn' => 51,
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
 * Find multiple models by their primary keys.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $ids
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Collection
 */',
        'startLine' => 459,
        'endLine' => 468,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'findOrFail' => 
      array (
        'name' => 'findOrFail',
        'parameters' => 
        array (
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
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 32,
            'endColumn' => 34,
            'parameterIndex' => 0,
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
                'startLine' => 479,
                'endLine' => 479,
                'startTokenPos' => 1832,
                'startFilePos' => 12524,
                'endTokenPos' => 1834,
                'endFilePos' => 12528,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 37,
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
 * Find a model by its primary key or throw an exception.
 *
 * @param  mixed  $id
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Model|\\Illuminate\\Database\\Eloquent\\Collection|static|static[]
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 */',
        'startLine' => 479,
        'endLine' => 502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'findOrNew' => 
      array (
        'name' => 'findOrNew',
        'parameters' => 
        array (
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
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 31,
            'endColumn' => 33,
            'parameterIndex' => 0,
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
                'startLine' => 511,
                'endLine' => 511,
                'startTokenPos' => 2011,
                'startFilePos' => 13412,
                'endTokenPos' => 2013,
                'endFilePos' => 13416,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 36,
            'endColumn' => 51,
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
 * Find a model by its primary key or return fresh model instance.
 *
 * @param  mixed  $id
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 511,
        'endLine' => 518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'findOr' => 
      array (
        'name' => 'findOr',
        'parameters' => 
        array (
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
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 28,
            'endColumn' => 30,
            'parameterIndex' => 0,
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
                'startLine' => 528,
                'endLine' => 528,
                'startTokenPos' => 2076,
                'startFilePos' => 13926,
                'endTokenPos' => 2078,
                'endFilePos' => 13930,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 528,
                'endLine' => 528,
                'startTokenPos' => 2088,
                'startFilePos' => 13954,
                'endTokenPos' => 2088,
                'endFilePos' => 13957,
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
                      'name' => 'Closure',
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
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 51,
            'endColumn' => 75,
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
 * Find a model by its primary key or call a callback.
 *
 * @param  mixed  $id
 * @param  \\Closure|array|string  $columns
 * @param  \\Closure|null  $callback
 * @return \\Illuminate\\Database\\Eloquent\\Model|\\Illuminate\\Database\\Eloquent\\Collection|static[]|static|mixed
 */',
        'startLine' => 528,
        'endLine' => 541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'firstOrNew' => 
      array (
        'name' => 'firstOrNew',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 550,
                'endLine' => 550,
                'startTokenPos' => 2178,
                'startFilePos' => 14487,
                'endTokenPos' => 2179,
                'endFilePos' => 14488,
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
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 32,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 550,
                'endLine' => 550,
                'startTokenPos' => 2188,
                'startFilePos' => 14507,
                'endTokenPos' => 2189,
                'endFilePos' => 14508,
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
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 56,
            'endColumn' => 73,
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
 * Get the first record matching the attributes or instantiate it.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 550,
        'endLine' => 557,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'firstOrCreate' => 
      array (
        'name' => 'firstOrCreate',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 566,
                'endLine' => 566,
                'startTokenPos' => 2259,
                'startFilePos' => 15004,
                'endTokenPos' => 2260,
                'endFilePos' => 15005,
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
            'startLine' => 566,
            'endLine' => 566,
            'startColumn' => 35,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 566,
                'endLine' => 566,
                'startTokenPos' => 2269,
                'startFilePos' => 15024,
                'endTokenPos' => 2270,
                'endFilePos' => 15025,
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
            'startLine' => 566,
            'endLine' => 566,
            'startColumn' => 59,
            'endColumn' => 76,
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
 * Get the first record matching the attributes. If the record is not found, create it.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 566,
        'endLine' => 573,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'createOrFirst' => 
      array (
        'name' => 'createOrFirst',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 582,
                'endLine' => 582,
                'startTokenPos' => 2341,
                'startFilePos' => 15536,
                'endTokenPos' => 2342,
                'endFilePos' => 15537,
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
            'startLine' => 582,
            'endLine' => 582,
            'startColumn' => 35,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 582,
                'endLine' => 582,
                'startTokenPos' => 2351,
                'startFilePos' => 15556,
                'endTokenPos' => 2352,
                'endFilePos' => 15557,
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
            'startLine' => 582,
            'endLine' => 582,
            'startColumn' => 59,
            'endColumn' => 76,
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
 * Attempt to create the record. If a unique constraint violation occurs, attempt to find the matching record.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 582,
        'endLine' => 589,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'updateOrCreate' => 
      array (
        'name' => 'updateOrCreate',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
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
            'startLine' => 598,
            'endLine' => 598,
            'startColumn' => 36,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 598,
                'endLine' => 598,
                'startTokenPos' => 2448,
                'startFilePos' => 16143,
                'endTokenPos' => 2449,
                'endFilePos' => 16144,
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
            'startLine' => 598,
            'endLine' => 598,
            'startColumn' => 55,
            'endColumn' => 72,
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
 * Create or update a record matching the attributes, and fill it with values.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 598,
        'endLine' => 605,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'firstOrFail' => 
      array (
        'name' => 'firstOrFail',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 615,
                'endLine' => 615,
                'startTokenPos' => 2527,
                'startFilePos' => 16734,
                'endTokenPos' => 2529,
                'endFilePos' => 16738,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 33,
            'endColumn' => 48,
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
 * Execute the query and get the first result or throw an exception.
 *
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 */',
        'startLine' => 615,
        'endLine' => 622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'firstOr' => 
      array (
        'name' => 'firstOr',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 631,
                'endLine' => 631,
                'startTokenPos' => 2596,
                'startFilePos' => 17212,
                'endTokenPos' => 2598,
                'endFilePos' => 17216,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 631,
            'endLine' => 631,
            'startColumn' => 29,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 631,
                'endLine' => 631,
                'startTokenPos' => 2608,
                'startFilePos' => 17240,
                'endTokenPos' => 2608,
                'endFilePos' => 17243,
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
                      'name' => 'Closure',
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
            'startLine' => 631,
            'endLine' => 631,
            'startColumn' => 47,
            'endColumn' => 71,
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
 * Execute the query and get the first result or call a callback.
 *
 * @param  \\Closure|array|string  $columns
 * @param  \\Closure|null  $callback
 * @return \\Illuminate\\Database\\Eloquent\\Model|static|mixed
 */',
        'startLine' => 631,
        'endLine' => 644,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'sole' => 
      array (
        'name' => 'sole',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 655,
                'endLine' => 655,
                'startTokenPos' => 2693,
                'startFilePos' => 17912,
                'endTokenPos' => 2695,
                'endFilePos' => 17916,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 655,
            'endLine' => 655,
            'startColumn' => 26,
            'endColumn' => 41,
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
 * Execute the query and get the first result if it\'s the sole matching record.
 *
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Model
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
        'startLine' => 655,
        'endLine' => 662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'value' => 
      array (
        'name' => 'value',
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
            'startColumn' => 27,
            'endColumn' => 33,
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
 * Get a single column\'s value from the first result of a query.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return mixed
 */',
        'startLine' => 670,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'soleValue' => 
      array (
        'name' => 'soleValue',
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
            'startLine' => 688,
            'endLine' => 688,
            'startColumn' => 31,
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
 * Get a single column\'s value from the first result of a query if it\'s the sole matching record.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
        'startLine' => 688,
        'endLine' => 693,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'valueOrFail' => 
      array (
        'name' => 'valueOrFail',
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
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 33,
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
 * Get a single column\'s value from the first result of the query or throw an exception.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 */',
        'startLine' => 703,
        'endLine' => 708,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 716,
                'endLine' => 716,
                'startTokenPos' => 2974,
                'startFilePos' => 19993,
                'endTokenPos' => 2976,
                'endFilePos' => 19997,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 25,
            'endColumn' => 40,
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
 * Execute the query as a "select" statement.
 *
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Collection|static[]
 */',
        'startLine' => 716,
        'endLine' => 728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getModels' => 
      array (
        'name' => 'getModels',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 736,
                'endLine' => 736,
                'startTokenPos' => 3064,
                'startFilePos' => 20722,
                'endTokenPos' => 3066,
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
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 31,
            'endColumn' => 46,
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
 * Get the hydrated models without eager loading.
 *
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Model[]|static[]
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
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'eagerLoadRelations' => 
      array (
        'name' => 'eagerLoadRelations',
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
            'startLine' => 749,
            'endLine' => 749,
            'startColumn' => 40,
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
 * Eager load the relationships for the models.
 *
 * @param  array  $models
 * @return array
 */',
        'startLine' => 749,
        'endLine' => 761,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'eagerLoadRelation' => 
      array (
        'name' => 'eagerLoadRelation',
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
            'startLine' => 771,
            'endLine' => 771,
            'startColumn' => 42,
            'endColumn' => 54,
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
            'startLine' => 771,
            'endLine' => 771,
            'startColumn' => 57,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'constraints' => 
          array (
            'name' => 'constraints',
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
            'startLine' => 771,
            'endLine' => 771,
            'startColumn' => 64,
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
 * Eagerly load the relationship on a set of models.
 *
 * @param  array  $models
 * @param  string  $name
 * @param  \\Closure  $constraints
 * @return array
 */',
        'startLine' => 771,
        'endLine' => 789,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getRelation' => 
      array (
        'name' => 'getRelation',
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
            'startLine' => 797,
            'endLine' => 797,
            'startColumn' => 33,
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
 * Get the relation instance for the given relation name.
 *
 * @param  string  $name
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\Relation
 */',
        'startLine' => 797,
        'endLine' => 820,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'relationsNestedUnder' => 
      array (
        'name' => 'relationsNestedUnder',
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
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 45,
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
 * Get the deeply nested relations for a given top-level relation.
 *
 * @param  string  $relation
 * @return array
 */',
        'startLine' => 828,
        'endLine' => 842,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'isNestedUnder' => 
      array (
        'name' => 'isNestedUnder',
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
            'startLine' => 851,
            'endLine' => 851,
            'startColumn' => 38,
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
            'startLine' => 851,
            'endLine' => 851,
            'startColumn' => 49,
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
 * Determine if the relationship is nested.
 *
 * @param  string  $relation
 * @param  string  $name
 * @return bool
 */',
        'startLine' => 851,
        'endLine' => 854,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'cursor' => 
      array (
        'name' => 'cursor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a lazy collection for the given query.
 *
 * @return \\Illuminate\\Support\\LazyCollection
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
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'enforceOrderBy' => 
      array (
        'name' => 'enforceOrderBy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a generic "order by" clause if the query doesn\'t already have one.
 *
 * @return void
 */',
        'startLine' => 873,
        'endLine' => 878,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'pluck' => 
      array (
        'name' => 'pluck',
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
            'startLine' => 887,
            'endLine' => 887,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 887,
                'endLine' => 887,
                'startTokenPos' => 3691,
                'startFilePos' => 25822,
                'endTokenPos' => 3691,
                'endFilePos' => 25825,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 887,
            'endLine' => 887,
            'startColumn' => 36,
            'endColumn' => 46,
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
 * Get a collection with the values of a given column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 887,
        'endLine' => 905,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'paginate' => 
      array (
        'name' => 'paginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 919,
                'endLine' => 919,
                'startTokenPos' => 3864,
                'startFilePos' => 27006,
                'endTokenPos' => 3864,
                'endFilePos' => 27009,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 919,
            'endLine' => 919,
            'startColumn' => 30,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 919,
                'endLine' => 919,
                'startTokenPos' => 3871,
                'startFilePos' => 27023,
                'endTokenPos' => 3873,
                'endFilePos' => 27027,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 919,
            'endLine' => 919,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 919,
                'endLine' => 919,
                'startTokenPos' => 3880,
                'startFilePos' => 27042,
                'endTokenPos' => 3880,
                'endFilePos' => 27047,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 919,
            'endLine' => 919,
            'startColumn' => 65,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 919,
                'endLine' => 919,
                'startTokenPos' => 3887,
                'startFilePos' => 27058,
                'endTokenPos' => 3887,
                'endFilePos' => 27061,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 919,
            'endLine' => 919,
            'startColumn' => 85,
            'endColumn' => 96,
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
 * Paginate the given query.
 *
 * @param  int|null|\\Closure  $perPage
 * @param  array|string  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @param  \\Closure|int|null  $total
 * @return \\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 919,
        'endLine' => 938,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'simplePaginate' => 
      array (
        'name' => 'simplePaginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 949,
                'endLine' => 949,
                'startTokenPos' => 4070,
                'startFilePos' => 28024,
                'endTokenPos' => 4070,
                'endFilePos' => 28027,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 949,
            'endLine' => 949,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 949,
                'endLine' => 949,
                'startTokenPos' => 4077,
                'startFilePos' => 28041,
                'endTokenPos' => 4079,
                'endFilePos' => 28045,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 949,
            'endLine' => 949,
            'startColumn' => 53,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 949,
                'endLine' => 949,
                'startTokenPos' => 4086,
                'startFilePos' => 28060,
                'endTokenPos' => 4086,
                'endFilePos' => 28065,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 949,
            'endLine' => 949,
            'startColumn' => 71,
            'endColumn' => 88,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 949,
                'endLine' => 949,
                'startTokenPos' => 4093,
                'startFilePos' => 28076,
                'endTokenPos' => 4093,
                'endFilePos' => 28079,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 949,
            'endLine' => 949,
            'startColumn' => 91,
            'endColumn' => 102,
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
 * Paginate the given query into a simple paginator.
 *
 * @param  int|null  $perPage
 * @param  array|string  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator
 */',
        'startLine' => 949,
        'endLine' => 964,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'cursorPaginate' => 
      array (
        'name' => 'cursorPaginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 975,
                'endLine' => 975,
                'startTokenPos' => 4224,
                'startFilePos' => 29091,
                'endTokenPos' => 4224,
                'endFilePos' => 29094,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 975,
                'endLine' => 975,
                'startTokenPos' => 4231,
                'startFilePos' => 29108,
                'endTokenPos' => 4233,
                'endFilePos' => 29112,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 53,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'cursorName' => 
          array (
            'name' => 'cursorName',
            'default' => 
            array (
              'code' => '\'cursor\'',
              'attributes' => 
              array (
                'startLine' => 975,
                'endLine' => 975,
                'startTokenPos' => 4240,
                'startFilePos' => 29129,
                'endTokenPos' => 4240,
                'endFilePos' => 29136,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 71,
            'endColumn' => 92,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cursor' => 
          array (
            'name' => 'cursor',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 975,
                'endLine' => 975,
                'startTokenPos' => 4247,
                'startFilePos' => 29149,
                'endTokenPos' => 4247,
                'endFilePos' => 29152,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 95,
            'endColumn' => 108,
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
 * Paginate the given query into a cursor paginator.
 *
 * @param  int|null  $perPage
 * @param  array|string  $columns
 * @param  string  $cursorName
 * @param  \\Illuminate\\Pagination\\Cursor|string|null  $cursor
 * @return \\Illuminate\\Contracts\\Pagination\\CursorPaginator
 */',
        'startLine' => 975,
        'endLine' => 980,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'ensureOrderForCursorPagination' => 
      array (
        'name' => 'ensureOrderForCursorPagination',
        'parameters' => 
        array (
          'shouldReverse' => 
          array (
            'name' => 'shouldReverse',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 988,
                'endLine' => 988,
                'startTokenPos' => 4303,
                'startFilePos' => 29555,
                'endTokenPos' => 4303,
                'endFilePos' => 29559,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 988,
            'endLine' => 988,
            'startColumn' => 55,
            'endColumn' => 76,
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
 * Ensure the proper order by required for cursor pagination.
 *
 * @param  bool  $shouldReverse
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 988,
        'endLine' => 1014,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1022,
                'endLine' => 1022,
                'startTokenPos' => 4558,
                'startFilePos' => 30658,
                'endTokenPos' => 4559,
                'endFilePos' => 30659,
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
            'startLine' => 1022,
            'endLine' => 1022,
            'startColumn' => 28,
            'endColumn' => 49,
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
 * Save a new model and return the instance.
 *
 * @param  array  $attributes
 * @return \\Illuminate\\Database\\Eloquent\\Model|$this
 */',
        'startLine' => 1022,
        'endLine' => 1027,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'forceCreate' => 
      array (
        'name' => 'forceCreate',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
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
            'startLine' => 1035,
            'endLine' => 1035,
            'startColumn' => 33,
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
 * Save a new model and return the instance. Allow mass-assignment.
 *
 * @param  array  $attributes
 * @return \\Illuminate\\Database\\Eloquent\\Model|$this
 */',
        'startLine' => 1035,
        'endLine' => 1040,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'forceCreateQuietly' => 
      array (
        'name' => 'forceCreateQuietly',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1048,
                'endLine' => 1048,
                'startTokenPos' => 4667,
                'startFilePos' => 31455,
                'endTokenPos' => 4668,
                'endFilePos' => 31456,
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
            'startLine' => 1048,
            'endLine' => 1048,
            'startColumn' => 40,
            'endColumn' => 61,
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
 * Save a new model instance with mass assignment without raising model events.
 *
 * @param  array  $attributes
 * @return \\Illuminate\\Database\\Eloquent\\Model|$this
 */',
        'startLine' => 1048,
        'endLine' => 1051,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
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
            'startLine' => 1059,
            'endLine' => 1059,
            'startColumn' => 28,
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
 * Update records in the database.
 *
 * @param  array  $values
 * @return int
 */',
        'startLine' => 1059,
        'endLine' => 1062,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'upsert' => 
      array (
        'name' => 'upsert',
        'parameters' => 
        array (
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
            'startLine' => 1072,
            'endLine' => 1072,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uniqueBy' => 
          array (
            'name' => 'uniqueBy',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1072,
            'endLine' => 1072,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1072,
                'endLine' => 1072,
                'startTokenPos' => 4753,
                'startFilePos' => 32057,
                'endTokenPos' => 4753,
                'endFilePos' => 32060,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1072,
            'endLine' => 1072,
            'startColumn' => 54,
            'endColumn' => 67,
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
 * Insert new records or update the existing ones.
 *
 * @param  array  $values
 * @param  array|string  $uniqueBy
 * @param  array|null  $update
 * @return int
 */',
        'startLine' => 1072,
        'endLine' => 1091,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'touch' => 
      array (
        'name' => 'touch',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1099,
                'endLine' => 1099,
                'startTokenPos' => 4880,
                'startFilePos' => 32705,
                'endTokenPos' => 4880,
                'endFilePos' => 32708,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1099,
            'endLine' => 1099,
            'startColumn' => 27,
            'endColumn' => 40,
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
 * Update the column\'s update timestamp.
 *
 * @param  string|null  $column
 * @return int|false
 */',
        'startLine' => 1099,
        'endLine' => 1114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'increment' => 
      array (
        'name' => 'increment',
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
            'startLine' => 1124,
            'endLine' => 1124,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'amount' => 
          array (
            'name' => 'amount',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1124,
                'endLine' => 1124,
                'startTokenPos' => 5008,
                'startFilePos' => 33377,
                'endTokenPos' => 5008,
                'endFilePos' => 33377,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1124,
            'endLine' => 1124,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1124,
                'endLine' => 1124,
                'startTokenPos' => 5017,
                'startFilePos' => 33395,
                'endTokenPos' => 5018,
                'endFilePos' => 33396,
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
            'startLine' => 1124,
            'endLine' => 1124,
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
 * Increment a column\'s value by a given amount.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
        'startLine' => 1124,
        'endLine' => 1129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'decrement' => 
      array (
        'name' => 'decrement',
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
            'startLine' => 1139,
            'endLine' => 1139,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'amount' => 
          array (
            'name' => 'amount',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1139,
                'endLine' => 1139,
                'startTokenPos' => 5067,
                'startFilePos' => 33816,
                'endTokenPos' => 5067,
                'endFilePos' => 33816,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1139,
            'endLine' => 1139,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1139,
                'endLine' => 1139,
                'startTokenPos' => 5076,
                'startFilePos' => 33834,
                'endTokenPos' => 5077,
                'endFilePos' => 33835,
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
            'startLine' => 1139,
            'endLine' => 1139,
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
 * Decrement a column\'s value by a given amount.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
        'startLine' => 1139,
        'endLine' => 1144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'addUpdatedAtColumn' => 
      array (
        'name' => 'addUpdatedAtColumn',
        'parameters' => 
        array (
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
            'startLine' => 1152,
            'endLine' => 1152,
            'startColumn' => 43,
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
 * Add the "updated at" column to an array of values.
 *
 * @param  array  $values
 * @return array
 */',
        'startLine' => 1152,
        'endLine' => 1186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'addUniqueIdsToUpsertValues' => 
      array (
        'name' => 'addUniqueIdsToUpsertValues',
        'parameters' => 
        array (
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
            'startLine' => 1194,
            'endLine' => 1194,
            'startColumn' => 51,
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
 * Add unique IDs to the inserted values.
 *
 * @param  array  $values
 * @return array
 */',
        'startLine' => 1194,
        'endLine' => 1209,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'addTimestampsToUpsertValues' => 
      array (
        'name' => 'addTimestampsToUpsertValues',
        'parameters' => 
        array (
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
            'startLine' => 1217,
            'endLine' => 1217,
            'startColumn' => 52,
            'endColumn' => 64,
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
 * Add timestamps to the inserted values.
 *
 * @param  array  $values
 * @return array
 */',
        'startLine' => 1217,
        'endLine' => 1237,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'addUpdatedAtToUpsertColumns' => 
      array (
        'name' => 'addUpdatedAtToUpsertColumns',
        'parameters' => 
        array (
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
            'startLine' => 1245,
            'endLine' => 1245,
            'startColumn' => 52,
            'endColumn' => 64,
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
 * Add the "updated at" column to the updated columns.
 *
 * @param  array  $update
 * @return array
 */',
        'startLine' => 1245,
        'endLine' => 1260,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete records from the database.
 *
 * @return mixed
 */',
        'startLine' => 1267,
        'endLine' => 1274,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'forceDelete' => 
      array (
        'name' => 'forceDelete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run the default delete function on the builder.
 *
 * Since we do not apply scopes here, the row will actually be deleted.
 *
 * @return mixed
 */',
        'startLine' => 1283,
        'endLine' => 1286,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'onDelete' => 
      array (
        'name' => 'onDelete',
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
            'startLine' => 1294,
            'endLine' => 1294,
            'startColumn' => 30,
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
 * Register a replacement for the default delete function.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 1294,
        'endLine' => 1297,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'hasNamedScope' => 
      array (
        'name' => 'hasNamedScope',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
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
 * Determine if the given model has a scope.
 *
 * @param  string  $scope
 * @return bool
 */',
        'startLine' => 1305,
        'endLine' => 1308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'scopes' => 
      array (
        'name' => 'scopes',
        'parameters' => 
        array (
          'scopes' => 
          array (
            'name' => 'scopes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1316,
            'endLine' => 1316,
            'startColumn' => 28,
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
 * Call the given local model scopes.
 *
 * @param  array|string  $scopes
 * @return static|mixed
 */',
        'startLine' => 1316,
        'endLine' => 1337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'applyScopes' => 
      array (
        'name' => 'applyScopes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the scopes to the Eloquent builder instance and return it.
 *
 * @return static
 */',
        'startLine' => 1344,
        'endLine' => 1375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'callScope' => 
      array (
        'name' => 'callScope',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
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
            'startLine' => 1384,
            'endLine' => 1384,
            'startColumn' => 34,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1384,
                'endLine' => 1384,
                'startTokenPos' => 6187,
                'startFilePos' => 40755,
                'endTokenPos' => 6188,
                'endFilePos' => 40756,
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
            'startLine' => 1384,
            'endLine' => 1384,
            'startColumn' => 51,
            'endColumn' => 72,
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
 * Apply the given scope on the current builder instance.
 *
 * @param  callable  $scope
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 1384,
        'endLine' => 1403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'callNamedScope' => 
      array (
        'name' => 'callNamedScope',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1412,
            'endLine' => 1412,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1412,
                'endLine' => 1412,
                'startTokenPos' => 6315,
                'startFilePos' => 41673,
                'endTokenPos' => 6316,
                'endFilePos' => 41674,
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
            'startLine' => 1412,
            'endLine' => 1412,
            'startColumn' => 47,
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
 * Apply the given named scope on the current builder instance.
 *
 * @param  string  $scope
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 1412,
        'endLine' => 1417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'addNewWheresWithinGroup' => 
      array (
        'name' => 'addNewWheresWithinGroup',
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
            'startLine' => 1426,
            'endLine' => 1426,
            'startColumn' => 48,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'originalWhereCount' => 
          array (
            'name' => 'originalWhereCount',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1426,
            'endLine' => 1426,
            'startColumn' => 69,
            'endColumn' => 87,
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
 * Nest where conditions by slicing them at the given where count.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  int  $originalWhereCount
 * @return void
 */',
        'startLine' => 1426,
        'endLine' => 1442,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'groupWhereSliceForScope' => 
      array (
        'name' => 'groupWhereSliceForScope',
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
            'startLine' => 1451,
            'endLine' => 1451,
            'startColumn' => 48,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'whereSlice' => 
          array (
            'name' => 'whereSlice',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1451,
            'endLine' => 1451,
            'startColumn' => 69,
            'endColumn' => 79,
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
 * Slice where conditions at the given offset and add them to the query as a nested condition.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $whereSlice
 * @return void
 */',
        'startLine' => 1451,
        'endLine' => 1465,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'createNestedWhere' => 
      array (
        'name' => 'createNestedWhere',
        'parameters' => 
        array (
          'whereSlice' => 
          array (
            'name' => 'whereSlice',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1474,
            'endLine' => 1474,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1474,
                'endLine' => 1474,
                'startTokenPos' => 6594,
                'startFilePos' => 43933,
                'endTokenPos' => 6594,
                'endFilePos' => 43937,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1474,
            'endLine' => 1474,
            'startColumn' => 55,
            'endColumn' => 70,
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
 * Create a where array with nested where conditions.
 *
 * @param  array  $whereSlice
 * @param  string  $boolean
 * @return array
 */',
        'startLine' => 1474,
        'endLine' => 1481,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'with' => 
      array (
        'name' => 'with',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1490,
            'endLine' => 1490,
            'startColumn' => 26,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1490,
                'endLine' => 1490,
                'startTokenPos' => 6665,
                'startFilePos' => 44379,
                'endTokenPos' => 6665,
                'endFilePos' => 44382,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1490,
            'endLine' => 1490,
            'startColumn' => 38,
            'endColumn' => 53,
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
 * Set the relationships that should be eager loaded.
 *
 * @param  string|array  $relations
 * @param  string|\\Closure|null  $callback
 * @return $this
 */',
        'startLine' => 1490,
        'endLine' => 1501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'without' => 
      array (
        'name' => 'without',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1509,
            'endLine' => 1509,
            'startColumn' => 29,
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
 * Prevent the specified relations from being eager loaded.
 *
 * @param  mixed  $relations
 * @return $this
 */',
        'startLine' => 1509,
        'endLine' => 1516,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withOnly' => 
      array (
        'name' => 'withOnly',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1524,
            'endLine' => 1524,
            'startColumn' => 30,
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
 * Set the relationships that should be eager loaded while removing any previously added eager loading specifications.
 *
 * @param  mixed  $relations
 * @return $this
 */',
        'startLine' => 1524,
        'endLine' => 1529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'newModelInstance' => 
      array (
        'name' => 'newModelInstance',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1537,
                'endLine' => 1537,
                'startTokenPos' => 6859,
                'startFilePos' => 45663,
                'endTokenPos' => 6860,
                'endFilePos' => 45664,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1537,
            'endLine' => 1537,
            'startColumn' => 38,
            'endColumn' => 53,
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
 * Create a new instance of the model being queried.
 *
 * @param  array  $attributes
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 1537,
        'endLine' => 1542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'parseWithRelations' => 
      array (
        'name' => 'parseWithRelations',
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
            'startLine' => 1550,
            'endLine' => 1550,
            'startColumn' => 43,
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
 * Parse a list of relations into individuals.
 *
 * @param  array  $relations
 * @return array
 */',
        'startLine' => 1550,
        'endLine' => 1568,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'prepareNestedWithRelationships' => 
      array (
        'name' => 'prepareNestedWithRelationships',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1577,
            'endLine' => 1577,
            'startColumn' => 55,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1577,
                'endLine' => 1577,
                'startTokenPos' => 7016,
                'startFilePos' => 46827,
                'endTokenPos' => 7016,
                'endFilePos' => 46828,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1577,
            'endLine' => 1577,
            'startColumn' => 67,
            'endColumn' => 78,
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
 * Prepare nested with relationships.
 *
 * @param  array  $relations
 * @param  string  $prefix
 * @return array
 */',
        'startLine' => 1577,
        'endLine' => 1621,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'combineConstraints' => 
      array (
        'name' => 'combineConstraints',
        'parameters' => 
        array (
          'constraints' => 
          array (
            'name' => 'constraints',
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
            'startLine' => 1629,
            'endLine' => 1629,
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
 * Combine an array of constraints into a single constraint.
 *
 * @param  array  $constraints
 * @return \\Closure
 */',
        'startLine' => 1629,
        'endLine' => 1638,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'parseNameAndAttributeSelectionConstraint' => 
      array (
        'name' => 'parseNameAndAttributeSelectionConstraint',
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
            'startLine' => 1646,
            'endLine' => 1646,
            'startColumn' => 65,
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
 * Parse the attribute select constraints from the name.
 *
 * @param  string  $name
 * @return array
 */',
        'startLine' => 1646,
        'endLine' => 1653,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'createSelectWithConstraint' => 
      array (
        'name' => 'createSelectWithConstraint',
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
            'startLine' => 1661,
            'endLine' => 1661,
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
 * Create a constraint to select the given columns for the relation.
 *
 * @param  string  $name
 * @return array
 */',
        'startLine' => 1661,
        'endLine' => 1674,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'addNestedWiths' => 
      array (
        'name' => 'addNestedWiths',
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
            'startLine' => 1683,
            'endLine' => 1683,
            'startColumn' => 39,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'results' => 
          array (
            'name' => 'results',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1683,
            'endLine' => 1683,
            'startColumn' => 46,
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
 * Parse the nested relationships in a relation.
 *
 * @param  string  $name
 * @param  array  $results
 * @return array
 */',
        'startLine' => 1683,
        'endLine' => 1701,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withCasts' => 
      array (
        'name' => 'withCasts',
        'parameters' => 
        array (
          'casts' => 
          array (
            'name' => 'casts',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1709,
            'endLine' => 1709,
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
 * Apply query-time casts to the model instance.
 *
 * @param  array  $casts
 * @return $this
 */',
        'startLine' => 1709,
        'endLine' => 1714,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withSavepointIfNeeded' => 
      array (
        'name' => 'withSavepointIfNeeded',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
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
            'startLine' => 1724,
            'endLine' => 1724,
            'startColumn' => 43,
            'endColumn' => 56,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the given Closure within a transaction savepoint if needed.
 *
 * @template TModelValue
 *
 * @param  \\Closure(): TModelValue  $scope
 * @return TModelValue
 */',
        'startLine' => 1724,
        'endLine' => 1729,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getUnionBuilders' => 
      array (
        'name' => 'getUnionBuilders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Eloquent builder instances that are used in the union of the query.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 1736,
        'endLine' => 1741,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getQuery' => 
      array (
        'name' => 'getQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the underlying query builder instance.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 1748,
        'endLine' => 1751,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'setQuery' => 
      array (
        'name' => 'setQuery',
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
            'startLine' => 1759,
            'endLine' => 1759,
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
 * Set the underlying query builder instance.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return $this
 */',
        'startLine' => 1759,
        'endLine' => 1764,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'toBase' => 
      array (
        'name' => 'toBase',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a base query builder instance.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 1771,
        'endLine' => 1774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getEagerLoads' => 
      array (
        'name' => 'getEagerLoads',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the relationships being eagerly loaded.
 *
 * @return array
 */',
        'startLine' => 1781,
        'endLine' => 1784,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'setEagerLoads' => 
      array (
        'name' => 'setEagerLoads',
        'parameters' => 
        array (
          'eagerLoad' => 
          array (
            'name' => 'eagerLoad',
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
            'startLine' => 1792,
            'endLine' => 1792,
            'startColumn' => 35,
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
 * Set the relationships being eagerly loaded.
 *
 * @param  array  $eagerLoad
 * @return $this
 */',
        'startLine' => 1792,
        'endLine' => 1797,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withoutEagerLoad' => 
      array (
        'name' => 'withoutEagerLoad',
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
            'startLine' => 1805,
            'endLine' => 1805,
            'startColumn' => 38,
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
 * Indicate that the given relationships should not be eagerly loaded.
 *
 * @param  array  $relations
 * @return $this
 */',
        'startLine' => 1805,
        'endLine' => 1810,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'withoutEagerLoads' => 
      array (
        'name' => 'withoutEagerLoads',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flush the relationships being eagerly loaded.
 *
 * @return $this
 */',
        'startLine' => 1817,
        'endLine' => 1820,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'defaultKeyName' => 
      array (
        'name' => 'defaultKeyName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default key name of the table.
 *
 * @return string
 */',
        'startLine' => 1827,
        'endLine' => 1830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getModel' => 
      array (
        'name' => 'getModel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the model instance being queried.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Model|static
 */',
        'startLine' => 1837,
        'endLine' => 1840,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'setModel' => 
      array (
        'name' => 'setModel',
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
            'startLine' => 1848,
            'endLine' => 1848,
            'startColumn' => 30,
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
 * Set a model instance for the model being queried.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @return $this
 */',
        'startLine' => 1848,
        'endLine' => 1855,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'qualifyColumn' => 
      array (
        'name' => 'qualifyColumn',
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
            'startLine' => 1863,
            'endLine' => 1863,
            'startColumn' => 35,
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
 * Qualify the given column name by the model\'s table.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return string
 */',
        'startLine' => 1863,
        'endLine' => 1868,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'qualifyColumns' => 
      array (
        'name' => 'qualifyColumns',
        'parameters' => 
        array (
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
            'startLine' => 1876,
            'endLine' => 1876,
            'startColumn' => 36,
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
 * Qualify the given columns with the model\'s table.
 *
 * @param  array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $columns
 * @return array
 */',
        'startLine' => 1876,
        'endLine' => 1879,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getMacro' => 
      array (
        'name' => 'getMacro',
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
            'startLine' => 1887,
            'endLine' => 1887,
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
 * Get the given macro by name.
 *
 * @param  string  $name
 * @return \\Closure
 */',
        'startLine' => 1887,
        'endLine' => 1890,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'hasMacro' => 
      array (
        'name' => 'hasMacro',
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
            'startLine' => 1898,
            'endLine' => 1898,
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
 * Checks if a macro is registered.
 *
 * @param  string  $name
 * @return bool
 */',
        'startLine' => 1898,
        'endLine' => 1901,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'getGlobalMacro' => 
      array (
        'name' => 'getGlobalMacro',
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
            'startLine' => 1909,
            'endLine' => 1909,
            'startColumn' => 43,
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
 * Get the given global macro by name.
 *
 * @param  string  $name
 * @return \\Closure
 */',
        'startLine' => 1909,
        'endLine' => 1912,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'hasGlobalMacro' => 
      array (
        'name' => 'hasGlobalMacro',
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
            'startLine' => 1920,
            'endLine' => 1920,
            'startColumn' => 43,
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
 * Checks if a global macro is registered.
 *
 * @param  string  $name
 * @return bool
 */',
        'startLine' => 1920,
        'endLine' => 1923,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
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
            'startLine' => 1933,
            'endLine' => 1933,
            'startColumn' => 27,
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
 * Dynamically access builder proxies.
 *
 * @param  string  $key
 * @return mixed
 *
 * @throws \\Exception
 */',
        'startLine' => 1933,
        'endLine' => 1944,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1953,
            'endLine' => 1953,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1953,
            'endLine' => 1953,
            'startColumn' => 37,
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
 * Dynamically handle calls into the query instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 1953,
        'endLine' => 1988,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      '__callStatic' => 
      array (
        'name' => '__callStatic',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1999,
            'endLine' => 1999,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1999,
            'endLine' => 1999,
            'startColumn' => 50,
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
 * Dynamically handle calls into the query instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
        'startLine' => 1999,
        'endLine' => 2022,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'registerMixin' => 
      array (
        'name' => 'registerMixin',
        'parameters' => 
        array (
          'mixin' => 
          array (
            'name' => 'mixin',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2031,
            'endLine' => 2031,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2031,
            'endLine' => 2031,
            'startColumn' => 53,
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
 * Register the given mixin with the builder.
 *
 * @param  string  $mixin
 * @param  bool  $replace
 * @return void
 */',
        'startLine' => 2031,
        'endLine' => 2042,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      'clone' => 
      array (
        'name' => 'clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the Eloquent query builder.
 *
 * @return static
 */',
        'startLine' => 2049,
        'endLine' => 2052,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Force a clone of the underlying query builder when cloning.
 *
 * @return void
 */',
        'startLine' => 2059,
        'endLine' => 2062,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Illuminate\\Database\\Concerns\\BuildsQueries' => 
        array (
          0 => 
          array (
            'alias' => 'baseSole',
            'method' => 'sole',
            'hash' => 'illuminate\\database\\concerns\\buildsqueries::sole',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'illuminate\\database\\concerns\\buildsqueries::sole' => 'Illuminate\\Database\\Concerns\\BuildsQueries::sole',
      ),
    ),
  ),
));