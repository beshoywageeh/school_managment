<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/ExceptionWatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Telescope\Watchers\ExceptionWatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-843aa2b4c03f9c2fb015f6a5d0d3e8d7a7adf6c8ba2049ca9a77701a48dafbb3-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/ExceptionWatcher.php',
      ),
    ),
    'namespace' => 'Laravel\\Telescope\\Watchers',
    'name' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
    'shortName' => 'ExceptionWatcher',
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
    'endLine' => 83,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Laravel\\Telescope\\Watchers\\Watcher',
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
            'startLine' => 21,
            'endLine' => 21,
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
        'startLine' => 21,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'aliasName' => NULL,
      ),
      'recordException' => 
      array (
        'name' => 'recordException',
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
                'name' => 'Illuminate\\Log\\Events\\MessageLogged',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 37,
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
 * Record an exception was logged.
 *
 * @param  \\Illuminate\\Log\\Events\\MessageLogged  $event
 * @return void
 */',
        'startLine' => 32,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
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
            'startLine' => 65,
            'endLine' => 65,
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
 * Extract the tags for the given event.
 *
 * @param  \\Illuminate\\Log\\Events\\MessageLogged  $event
 * @return array
 */',
        'startLine' => 65,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'aliasName' => NULL,
      ),
      'shouldIgnore' => 
      array (
        'name' => 'shouldIgnore',
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
            'startLine' => 78,
            'endLine' => 78,
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
 * Determine if the event should be ignored.
 *
 * @param  mixed  $event
 * @return bool
 */',
        'startLine' => 78,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ExceptionWatcher',
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