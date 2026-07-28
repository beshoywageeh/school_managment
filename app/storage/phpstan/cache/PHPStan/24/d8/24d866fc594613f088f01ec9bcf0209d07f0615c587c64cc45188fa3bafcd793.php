<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/DumpWatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Telescope\Watchers\DumpWatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-cc570c6d84dbed037e652d96d9927e6314fac17f1fd57ec1e104ea68ff5f50d1-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/DumpWatcher.php',
      ),
    ),
    'namespace' => 'Laravel\\Telescope\\Watchers',
    'name' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
    'shortName' => 'DumpWatcher',
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
    'endLine' => 78,
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
      'cache' => 
      array (
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'name' => 'cache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The cache factory implementation.
 *
 * @var \\Illuminate\\Contracts\\Cache\\Factory
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 21,
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
          'cache' => 
          array (
            'name' => 'cache',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Cache\\Factory',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 33,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 29,
                'endLine' => 29,
                'startTokenPos' => 82,
                'startFilePos' => 748,
                'endTokenPos' => 83,
                'endFilePos' => 749,
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
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 54,
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
 * Create a new watcher instance.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Factory  $cache
 * @param  array  $options
 * @return void
 */',
        'startLine' => 29,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'aliasName' => NULL,
      ),
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
            'startLine' => 42,
            'endLine' => 42,
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
        'startLine' => 42,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'aliasName' => NULL,
      ),
      'recordDump' => 
      array (
        'name' => 'recordDump',
        'parameters' => 
        array (
          'dump' => 
          array (
            'name' => 'dump',
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
            'startColumn' => 32,
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
 * Record a dumped variable.
 *
 * @param  string  $dump
 * @return void
 */',
        'startLine' => 72,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\DumpWatcher',
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