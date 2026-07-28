<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Broadcasting/PendingBroadcast.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Broadcasting\PendingBroadcast
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b3d1844689affaacfb1b8e4028f263605b92ec32582b6e0725bc2953ac73e616-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Broadcasting/PendingBroadcast.php',
      ),
    ),
    'namespace' => 'Illuminate\\Broadcasting',
    'name' => 'Illuminate\\Broadcasting\\PendingBroadcast',
    'shortName' => 'PendingBroadcast',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 74,
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
      'events' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'implementingClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'name' => 'events',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event dispatcher implementation.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'event' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'implementingClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'name' => 'event',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event instance.
 *
 * @var mixed
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
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
          'events' => 
          array (
            'name' => 'events',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 30,
            'endLine' => 30,
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
 * Create a new pending broadcast instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @param  mixed  $event
 * @return void
 */',
        'startLine' => 30,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'implementingClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'currentClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'aliasName' => NULL,
      ),
      'via' => 
      array (
        'name' => 'via',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 42,
                'endLine' => 42,
                'startTokenPos' => 82,
                'startFilePos' => 847,
                'endTokenPos' => 82,
                'endFilePos' => 850,
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
            'startColumn' => 25,
            'endColumn' => 42,
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
 * Broadcast the event using a specific broadcaster.
 *
 * @param  string|null  $connection
 * @return $this
 */',
        'startLine' => 42,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'implementingClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'currentClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'aliasName' => NULL,
      ),
      'toOthers' => 
      array (
        'name' => 'toOthers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Broadcast the event to everyone except the current user.
 *
 * @return $this
 */',
        'startLine' => 56,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'implementingClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'currentClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'aliasName' => NULL,
      ),
      '__destruct' => 
      array (
        'name' => '__destruct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle the object\'s destruction.
 *
 * @return void
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
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'implementingClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
        'currentClassName' => 'Illuminate\\Broadcasting\\PendingBroadcast',
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