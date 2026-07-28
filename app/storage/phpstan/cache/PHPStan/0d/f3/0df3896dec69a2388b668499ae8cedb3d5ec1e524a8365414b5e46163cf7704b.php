<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/QueryWatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Telescope\Watchers\QueryWatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-57dfe71e461285c8a7c61dfaa05c24cc6c23a9d54588c69ec3885f153b0b5e83-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/QueryWatcher.php',
      ),
    ),
    'namespace' => 'Laravel\\Telescope\\Watchers',
    'name' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
    'shortName' => 'QueryWatcher',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 148,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Laravel\\Telescope\\Watchers\\Watcher',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Laravel\\Telescope\\Watchers\\FetchesStackTrace',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 30,
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
 * Register the watcher.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return void
 */',
        'startLine' => 19,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'aliasName' => NULL,
      ),
      'recordQuery' => 
      array (
        'name' => 'recordQuery',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Events\\QueryExecuted',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 33,
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
 * Record a query was executed.
 *
 * @param  \\Illuminate\\Database\\Events\\QueryExecuted  $event
 * @return void
 */',
        'startLine' => 30,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'aliasName' => NULL,
      ),
      'tags' => 
      array (
        'name' => 'tags',
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
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 29,
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
 * Get the tags for the query.
 *
 * @param  \\Illuminate\\Database\\Events\\QueryExecuted  $event
 * @return array
 */',
        'startLine' => 59,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'aliasName' => NULL,
      ),
      'familyHash' => 
      array (
        'name' => 'familyHash',
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
            'startLine' => 70,
            'endLine' => 70,
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
 * Calculate the family look-up hash for the query event.
 *
 * @param  \\Illuminate\\Database\\Events\\QueryExecuted  $event
 * @return string
 */',
        'startLine' => 70,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'aliasName' => NULL,
      ),
      'formatBindings' => 
      array (
        'name' => 'formatBindings',
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
            'startLine' => 81,
            'endLine' => 81,
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
 * Format the given bindings to strings.
 *
 * @param  \\Illuminate\\Database\\Events\\QueryExecuted  $event
 * @return array
 */',
        'startLine' => 81,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'aliasName' => NULL,
      ),
      'replaceBindings' => 
      array (
        'name' => 'replaceBindings',
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
            'startLine' => 92,
            'endLine' => 92,
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
 * Replace the placeholders with the actual bindings.
 *
 * @param  \\Illuminate\\Database\\Events\\QueryExecuted  $event
 * @return string
 */',
        'startLine' => 92,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'aliasName' => NULL,
      ),
      'quoteStringBinding' => 
      array (
        'name' => 'quoteStringBinding',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 51,
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
 * Add quotes to string bindings.
 *
 * @param  \\Illuminate\\Database\\Events\\QueryExecuted  $event
 * @param  string  $binding
 * @return string
 */',
        'startLine' => 125,
        'endLine' => 147,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\QueryWatcher',
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