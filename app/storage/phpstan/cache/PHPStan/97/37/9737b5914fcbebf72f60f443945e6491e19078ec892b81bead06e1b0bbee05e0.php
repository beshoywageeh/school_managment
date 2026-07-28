<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Container/Container.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Container\Container
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fcca5f85bd228664cb6841d02a43fc3b3ba016dcce22e1d062d660a5c663f276-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Contracts\\Container\\Container',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Container/Container.php',
      ),
    ),
    'namespace' => 'Illuminate\\Contracts\\Container',
    'name' => 'Illuminate\\Contracts\\Container\\Container',
    'shortName' => 'Container',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 219,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Psr\\Container\\ContainerInterface',
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
      'bound' => 
      array (
        'name' => 'bound',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
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
 * Determine if the given abstract type has been bound.
 *
 * @param  string  $abstract
 * @return bool
 */',
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'alias' => 
      array (
        'name' => 'alias',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 27,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Alias a type to a different name.
 *
 * @param  string  $abstract
 * @param  string  $alias
 * @return void
 *
 * @throws \\LogicException
 */',
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'tag' => 
      array (
        'name' => 'tag',
        'parameters' => 
        array (
          'abstracts' => 
          array (
            'name' => 'abstracts',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 25,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tags' => 
          array (
            'name' => 'tags',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 37,
            'endColumn' => 41,
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
 * Assign a set of tags to a given binding.
 *
 * @param  array|string  $abstracts
 * @param  array|mixed  ...$tags
 * @return void
 */',
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'tagged' => 
      array (
        'name' => 'tagged',
        'parameters' => 
        array (
          'tag' => 
          array (
            'name' => 'tag',
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
 * Resolve all of the bindings for a given tag.
 *
 * @param  string  $tag
 * @return iterable
 */',
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'bind' => 
      array (
        'name' => 'bind',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
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
            'startColumn' => 26,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 96,
                'startFilePos' => 1179,
                'endTokenPos' => 96,
                'endFilePos' => 1182,
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
            'startColumn' => 37,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'shared' => 
          array (
            'name' => 'shared',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 103,
                'startFilePos' => 1195,
                'endTokenPos' => 103,
                'endFilePos' => 1199,
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
            'startColumn' => 55,
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
 * Register a binding with the container.
 *
 * @param  string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
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
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'bindMethod' => 
      array (
        'name' => 'bindMethod',
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 41,
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
 * Bind a callback to resolve with Container::call.
 *
 * @param  array|string  $method
 * @param  \\Closure  $callback
 * @return void
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
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'bindIf' => 
      array (
        'name' => 'bindIf',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 28,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 137,
                'startFilePos' => 1694,
                'endTokenPos' => 137,
                'endFilePos' => 1697,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'shared' => 
          array (
            'name' => 'shared',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 144,
                'startFilePos' => 1710,
                'endTokenPos' => 144,
                'endFilePos' => 1714,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 57,
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
 * Register a binding if it hasn\'t already been registered.
 *
 * @param  string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 */',
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'singleton' => 
      array (
        'name' => 'singleton',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 82,
                'endLine' => 82,
                'startTokenPos' => 163,
                'startFilePos' => 1946,
                'endTokenPos' => 163,
                'endFilePos' => 1949,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 42,
            'endColumn' => 57,
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
 * Register a shared binding in the container.
 *
 * @param  string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'singletonIf' => 
      array (
        'name' => 'singletonIf',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 91,
                'endLine' => 91,
                'startTokenPos' => 182,
                'startFilePos' => 2203,
                'endTokenPos' => 182,
                'endFilePos' => 2206,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
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
 * Register a shared binding if it hasn\'t already been registered.
 *
 * @param  string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'scoped' => 
      array (
        'name' => 'scoped',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 28,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 100,
                'endLine' => 100,
                'startTokenPos' => 201,
                'startFilePos' => 2435,
                'endTokenPos' => 201,
                'endFilePos' => 2438,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 39,
            'endColumn' => 54,
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
 * Register a scoped binding in the container.
 *
 * @param  string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'scopedIf' => 
      array (
        'name' => 'scopedIf',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 30,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 109,
                'endLine' => 109,
                'startTokenPos' => 220,
                'startFilePos' => 2689,
                'endTokenPos' => 220,
                'endFilePos' => 2692,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 41,
            'endColumn' => 56,
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
 * Register a scoped binding if it hasn\'t already been registered.
 *
 * @param  string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'extend' => 
      array (
        'name' => 'extend',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 28,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'closure' => 
          array (
            'name' => 'closure',
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
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 39,
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
 * "Extend" an abstract type in the container.
 *
 * @param  string  $abstract
 * @param  \\Closure  $closure
 * @return void
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'instance' => 
      array (
        'name' => 'instance',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 30,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'instance' => 
          array (
            'name' => 'instance',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 41,
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
 * Register an existing instance as shared in the container.
 *
 * @param  string  $abstract
 * @param  mixed  $instance
 * @return mixed
 */',
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'addContextualBinding' => 
      array (
        'name' => 'addContextualBinding',
        'parameters' => 
        array (
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 139,
            'endLine' => 139,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 139,
            'endLine' => 139,
            'startColumn' => 53,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'implementation' => 
          array (
            'name' => 'implementation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 139,
            'endLine' => 139,
            'startColumn' => 64,
            'endColumn' => 78,
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
 * Add a contextual binding to the container.
 *
 * @param  string  $concrete
 * @param  string  $abstract
 * @param  \\Closure|string  $implementation
 * @return void
 */',
        'startLine' => 139,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'when' => 
      array (
        'name' => 'when',
        'parameters' => 
        array (
          'concrete' => 
          array (
            'name' => 'concrete',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 26,
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
 * Define a contextual binding.
 *
 * @param  string|array  $concrete
 * @return \\Illuminate\\Contracts\\Container\\ContextualBindingBuilder
 */',
        'startLine' => 147,
        'endLine' => 147,
        'startColumn' => 5,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'factory' => 
      array (
        'name' => 'factory',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 155,
            'endLine' => 155,
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
 * Get a closure to resolve the given type from the container.
 *
 * @param  string  $abstract
 * @return \\Closure
 */',
        'startLine' => 155,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'flush' => 
      array (
        'name' => 'flush',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flush the container of all bindings and resolved instances.
 *
 * @return void
 */',
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 26,
            'endColumn' => 34,
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
                'startLine' => 173,
                'endLine' => 173,
                'startTokenPos' => 326,
                'startFilePos' => 4314,
                'endTokenPos' => 327,
                'endFilePos' => 4315,
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
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 37,
            'endColumn' => 58,
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
 * Resolve the given type from the container.
 *
 * @param  string  $abstract
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'call' => 
      array (
        'name' => 'call',
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
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 26,
            'endColumn' => 34,
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
                'startLine' => 183,
                'endLine' => 183,
                'startTokenPos' => 348,
                'startFilePos' => 4613,
                'endTokenPos' => 349,
                'endFilePos' => 4614,
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
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 37,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'defaultMethod' => 
          array (
            'name' => 'defaultMethod',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 183,
                'endLine' => 183,
                'startTokenPos' => 356,
                'startFilePos' => 4634,
                'endTokenPos' => 356,
                'endFilePos' => 4637,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 61,
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
 * Call the given Closure / class@method and inject its dependencies.
 *
 * @param  callable|string  $callback
 * @param  array  $parameters
 * @param  string|null  $defaultMethod
 * @return mixed
 */',
        'startLine' => 183,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 83,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'resolved' => 
      array (
        'name' => 'resolved',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 30,
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
 * Determine if the given abstract type has been resolved.
 *
 * @param  string  $abstract
 * @return bool
 */',
        'startLine' => 191,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'beforeResolving' => 
      array (
        'name' => 'beforeResolving',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 200,
            'endLine' => 200,
            'startColumn' => 37,
            'endColumn' => 45,
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
                'startLine' => 200,
                'endLine' => 200,
                'startTokenPos' => 390,
                'startFilePos' => 5065,
                'endTokenPos' => 390,
                'endFilePos' => 5068,
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
            'startLine' => 200,
            'endLine' => 200,
            'startColumn' => 48,
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
 * Register a new before resolving callback.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|null  $callback
 * @return void
 */',
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 74,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'resolving' => 
      array (
        'name' => 'resolving',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 31,
            'endColumn' => 39,
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
                'startLine' => 209,
                'endLine' => 209,
                'startTokenPos' => 412,
                'startFilePos' => 5302,
                'endTokenPos' => 412,
                'endFilePos' => 5305,
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
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 42,
            'endColumn' => 66,
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
 * Register a new resolving callback.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|null  $callback
 * @return void
 */',
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'aliasName' => NULL,
      ),
      'afterResolving' => 
      array (
        'name' => 'afterResolving',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 218,
            'endLine' => 218,
            'startColumn' => 36,
            'endColumn' => 44,
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
                'startLine' => 218,
                'endLine' => 218,
                'startTokenPos' => 434,
                'startFilePos' => 5550,
                'endTokenPos' => 434,
                'endFilePos' => 5553,
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
            'startLine' => 218,
            'endLine' => 218,
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
 * Register a new after resolving callback.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|null  $callback
 * @return void
 */',
        'startLine' => 218,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Container',
        'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
        'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
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