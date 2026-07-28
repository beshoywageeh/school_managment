<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Routing/Router.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Routing\Router
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-9c0ea82a542136fc371c2bc971bf50c22e0096de7acd6048790fa3c42f85a31f-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Routing\\Router',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Routing/Router.php',
      ),
    ),
    'namespace' => 'Illuminate\\Routing',
    'name' => 'Illuminate\\Routing\\Router',
    'shortName' => 'Router',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin \\Illuminate\\Routing\\RouteRegistrar
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 37,
    'endLine' => 1504,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Routing\\BindingRegistrar',
      1 => 'Illuminate\\Contracts\\Routing\\Registrar',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'events' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'events',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The IoC container instance.
 *
 * @var \\Illuminate\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'routes' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'routes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The route collection instance.
 *
 * @var \\Illuminate\\Routing\\RouteCollectionInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'current' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'current',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The currently dispatched route instance.
 *
 * @var \\Illuminate\\Routing\\Route|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'currentRequest' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'currentRequest',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The request currently being dispatched.
 *
 * @var \\Illuminate\\Http\\Request
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middleware' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'middleware',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 232,
            'startFilePos' => 2107,
            'endTokenPos' => 233,
            'endFilePos' => 2108,
          ),
        ),
        'docComment' => '/**
 * All of the short-hand keys for middlewares.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middlewareGroups' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'middlewareGroups',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 244,
            'startFilePos' => 2224,
            'endTokenPos' => 245,
            'endFilePos' => 2225,
          ),
        ),
        'docComment' => '/**
 * All of the middleware groups.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middlewarePriority' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'middlewarePriority',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 99,
            'startTokenPos' => 256,
            'startFilePos' => 2426,
            'endTokenPos' => 257,
            'endFilePos' => 2427,
          ),
        ),
        'docComment' => '/**
 * The priority-sorted list of middleware.
 *
 * Forces the listed middleware to always be in the given order.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'binders' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'binders',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 268,
            'startFilePos' => 2540,
            'endTokenPos' => 269,
            'endFilePos' => 2541,
          ),
        ),
        'docComment' => '/**
 * The registered route value binders.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'patterns' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'patterns',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 113,
            'endLine' => 113,
            'startTokenPos' => 280,
            'startFilePos' => 2662,
            'endTokenPos' => 281,
            'endFilePos' => 2663,
          ),
        ),
        'docComment' => '/**
 * The globally available parameter patterns.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'groupStack' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'groupStack',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 120,
            'endLine' => 120,
            'startTokenPos' => 292,
            'startFilePos' => 2776,
            'endTokenPos' => 293,
            'endFilePos' => 2777,
          ),
        ),
        'docComment' => '/**
 * The route group attribute stack.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'implicitBindingCallback' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'implicitBindingCallback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The registered custom implicit binding callback.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'verbs' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'name' => 'verbs',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'GET\', \'HEAD\', \'POST\', \'PUT\', \'PATCH\', \'DELETE\', \'OPTIONS\']',
          'attributes' => 
          array (
            'startLine' => 134,
            'endLine' => 134,
            'startTokenPos' => 313,
            'startFilePos' => 3039,
            'endTokenPos' => 333,
            'endFilePos' => 3098,
          ),
        ),
        'docComment' => '/**
 * All of the verbs supported by the router.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 88,
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'container' => 
          array (
            'name' => 'container',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 143,
                'endLine' => 143,
                'startTokenPos' => 356,
                'startFilePos' => 3386,
                'endTokenPos' => 356,
                'endFilePos' => 3389,
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
                      'name' => 'Illuminate\\Container\\Container',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 53,
            'endColumn' => 80,
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
 * Create a new Router instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @param  \\Illuminate\\Container\\Container|null  $container
 * @return void
 */',
        'startLine' => 143,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 25,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 157,
                'endLine' => 157,
                'startTokenPos' => 414,
                'startFilePos' => 3771,
                'endTokenPos' => 414,
                'endFilePos' => 3774,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 31,
            'endColumn' => 44,
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
 * Register a new GET route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 157,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'post' => 
      array (
        'name' => 'post',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 169,
            'endLine' => 169,
            'startColumn' => 26,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 169,
                'endLine' => 169,
                'startTokenPos' => 457,
                'startFilePos' => 4088,
                'endTokenPos' => 457,
                'endFilePos' => 4091,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 169,
            'endLine' => 169,
            'startColumn' => 32,
            'endColumn' => 45,
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
 * Register a new POST route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 169,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'put' => 
      array (
        'name' => 'put',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 25,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 181,
                'endLine' => 181,
                'startTokenPos' => 495,
                'startFilePos' => 4394,
                'endTokenPos' => 495,
                'endFilePos' => 4397,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 31,
            'endColumn' => 44,
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
 * Register a new PUT route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 181,
        'endLine' => 184,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'patch' => 
      array (
        'name' => 'patch',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
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
            'startColumn' => 27,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 193,
                'endLine' => 193,
                'startTokenPos' => 533,
                'startFilePos' => 4703,
                'endTokenPos' => 533,
                'endFilePos' => 4706,
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
            'startColumn' => 33,
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
 * Register a new PATCH route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 193,
        'endLine' => 196,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 28,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 205,
                'endLine' => 205,
                'startTokenPos' => 571,
                'startFilePos' => 5016,
                'endTokenPos' => 571,
                'endFilePos' => 5019,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 34,
            'endColumn' => 47,
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
 * Register a new DELETE route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 205,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'options' => 
      array (
        'name' => 'options',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 29,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 217,
                'endLine' => 217,
                'startTokenPos' => 609,
                'startFilePos' => 5332,
                'endTokenPos' => 609,
                'endFilePos' => 5335,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 35,
            'endColumn' => 48,
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
 * Register a new OPTIONS route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 217,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'any' => 
      array (
        'name' => 'any',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 25,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 229,
                'endLine' => 229,
                'startTokenPos' => 647,
                'startFilePos' => 5645,
                'endTokenPos' => 647,
                'endFilePos' => 5648,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 31,
            'endColumn' => 44,
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
 * Register a new route responding to all verbs.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 229,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'fallback' => 
      array (
        'name' => 'fallback',
        'parameters' => 
        array (
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 30,
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
 * Register a new fallback route with the router.
 *
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 240,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'redirect' => 
      array (
        'name' => 'redirect',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 30,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'destination' => 
          array (
            'name' => 'destination',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'status' => 
          array (
            'name' => 'status',
            'default' => 
            array (
              'code' => '302',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 748,
                'startFilePos' => 6386,
                'endTokenPos' => 748,
                'endFilePos' => 6388,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 50,
            'endColumn' => 62,
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
 * Create a redirect from one URI to another.
 *
 * @param  string  $uri
 * @param  string  $destination
 * @param  int  $status
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 257,
        'endLine' => 262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'permanentRedirect' => 
      array (
        'name' => 'permanentRedirect',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 39,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'destination' => 
          array (
            'name' => 'destination',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 45,
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
 * Create a permanent redirect from one URI to another.
 *
 * @param  string  $uri
 * @param  string  $destination
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 271,
        'endLine' => 274,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'view' => 
      array (
        'name' => 'view',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
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
            'startColumn' => 26,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'view' => 
          array (
            'name' => 'view',
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
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 286,
                'endLine' => 286,
                'startTokenPos' => 838,
                'startFilePos' => 7206,
                'endTokenPos' => 839,
                'endFilePos' => 7207,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 39,
            'endColumn' => 48,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'status' => 
          array (
            'name' => 'status',
            'default' => 
            array (
              'code' => '200',
              'attributes' => 
              array (
                'startLine' => 286,
                'endLine' => 286,
                'startTokenPos' => 846,
                'startFilePos' => 7220,
                'endTokenPos' => 846,
                'endFilePos' => 7222,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'headers' => 
          array (
            'name' => 'headers',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 286,
                'endLine' => 286,
                'startTokenPos' => 855,
                'startFilePos' => 7242,
                'endTokenPos' => 856,
                'endFilePos' => 7243,
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
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 66,
            'endColumn' => 84,
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
 * Register a new route that returns a view.
 *
 * @param  string  $uri
 * @param  string  $view
 * @param  array  $data
 * @param  int|array  $status
 * @param  array  $headers
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 286,
        'endLine' => 295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'match' => 
      array (
        'name' => 'match',
        'parameters' => 
        array (
          'methods' => 
          array (
            'name' => 'methods',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 27,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 305,
                'endLine' => 305,
                'startTokenPos' => 960,
                'startFilePos' => 7897,
                'endTokenPos' => 960,
                'endFilePos' => 7900,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 43,
            'endColumn' => 56,
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
 * Register a new route with the given verbs.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
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
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'resources' => 
      array (
        'name' => 'resources',
        'parameters' => 
        array (
          'resources' => 
          array (
            'name' => 'resources',
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
            'startLine' => 317,
            'endLine' => 317,
            'startColumn' => 31,
            'endColumn' => 46,
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
                'startLine' => 317,
                'endLine' => 317,
                'startTokenPos' => 1010,
                'startFilePos' => 8228,
                'endTokenPos' => 1011,
                'endFilePos' => 8229,
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
            'startLine' => 317,
            'endLine' => 317,
            'startColumn' => 49,
            'endColumn' => 67,
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
 * Register an array of resource controllers.
 *
 * @param  array  $resources
 * @param  array  $options
 * @return void
 */',
        'startLine' => 317,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'resource' => 
      array (
        'name' => 'resource',
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
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 30,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'controller' => 
          array (
            'name' => 'controller',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 1,
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
                'startLine' => 332,
                'endLine' => 332,
                'startTokenPos' => 1070,
                'startFilePos' => 8657,
                'endTokenPos' => 1071,
                'endFilePos' => 8658,
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
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 50,
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
 * Route a resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingResourceRegistration
 */',
        'startLine' => 332,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'apiResources' => 
      array (
        'name' => 'apiResources',
        'parameters' => 
        array (
          'resources' => 
          array (
            'name' => 'resources',
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
            'startLine' => 352,
            'endLine' => 352,
            'startColumn' => 34,
            'endColumn' => 49,
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
                'startLine' => 352,
                'endLine' => 352,
                'startTokenPos' => 1177,
                'startFilePos' => 9258,
                'endTokenPos' => 1178,
                'endFilePos' => 9259,
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
            'startLine' => 352,
            'endLine' => 352,
            'startColumn' => 52,
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
 * Register an array of API resource controllers.
 *
 * @param  array  $resources
 * @param  array  $options
 * @return void
 */',
        'startLine' => 352,
        'endLine' => 357,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'apiResource' => 
      array (
        'name' => 'apiResource',
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
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'controller' => 
          array (
            'name' => 'controller',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 1,
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
                'startLine' => 367,
                'endLine' => 367,
                'startTokenPos' => 1237,
                'startFilePos' => 9698,
                'endTokenPos' => 1238,
                'endFilePos' => 9699,
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
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 53,
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
 * Route an API resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingResourceRegistration
 */',
        'startLine' => 367,
        'endLine' => 378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'singletons' => 
      array (
        'name' => 'singletons',
        'parameters' => 
        array (
          'singletons' => 
          array (
            'name' => 'singletons',
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
            'startLine' => 387,
            'endLine' => 387,
            'startColumn' => 32,
            'endColumn' => 48,
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
                'startLine' => 387,
                'endLine' => 387,
                'startTokenPos' => 1350,
                'startFilePos' => 10252,
                'endTokenPos' => 1351,
                'endFilePos' => 10253,
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
            'startLine' => 387,
            'endLine' => 387,
            'startColumn' => 51,
            'endColumn' => 69,
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
 * Register an array of singleton resource controllers.
 *
 * @param  array  $singletons
 * @param  array  $options
 * @return void
 */',
        'startLine' => 387,
        'endLine' => 392,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'singleton' => 
      array (
        'name' => 'singleton',
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
            'startLine' => 402,
            'endLine' => 402,
            'startColumn' => 31,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'controller' => 
          array (
            'name' => 'controller',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 402,
            'endLine' => 402,
            'startColumn' => 38,
            'endColumn' => 48,
            'parameterIndex' => 1,
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
                'startLine' => 402,
                'endLine' => 402,
                'startTokenPos' => 1410,
                'startFilePos' => 10703,
                'endTokenPos' => 1411,
                'endFilePos' => 10704,
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
            'startLine' => 402,
            'endLine' => 402,
            'startColumn' => 51,
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
 * Route a singleton resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingSingletonResourceRegistration
 */',
        'startLine' => 402,
        'endLine' => 413,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'apiSingletons' => 
      array (
        'name' => 'apiSingletons',
        'parameters' => 
        array (
          'singletons' => 
          array (
            'name' => 'singletons',
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
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 35,
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
                'startLine' => 422,
                'endLine' => 422,
                'startTokenPos' => 1517,
                'startFilePos' => 11326,
                'endTokenPos' => 1518,
                'endFilePos' => 11327,
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
            'startLine' => 422,
            'endLine' => 422,
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
 * Register an array of API singleton resource controllers.
 *
 * @param  array  $singletons
 * @param  array  $options
 * @return void
 */',
        'startLine' => 422,
        'endLine' => 427,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'apiSingleton' => 
      array (
        'name' => 'apiSingleton',
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
            'startLine' => 437,
            'endLine' => 437,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'controller' => 
          array (
            'name' => 'controller',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 437,
            'endLine' => 437,
            'startColumn' => 41,
            'endColumn' => 51,
            'parameterIndex' => 1,
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
                'startLine' => 437,
                'endLine' => 437,
                'startTokenPos' => 1577,
                'startFilePos' => 11788,
                'endTokenPos' => 1578,
                'endFilePos' => 11789,
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
            'startLine' => 437,
            'endLine' => 437,
            'startColumn' => 54,
            'endColumn' => 72,
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
 * Route an API singleton resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingSingletonResourceRegistration
 */',
        'startLine' => 437,
        'endLine' => 448,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'group' => 
      array (
        'name' => 'group',
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
            'startLine' => 457,
            'endLine' => 457,
            'startColumn' => 27,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'routes' => 
          array (
            'name' => 'routes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 457,
            'endLine' => 457,
            'startColumn' => 46,
            'endColumn' => 52,
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
 * Create a route group with shared attributes.
 *
 * @param  array  $attributes
 * @param  \\Closure|array|string  $routes
 * @return $this
 */',
        'startLine' => 457,
        'endLine' => 471,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'updateGroupStack' => 
      array (
        'name' => 'updateGroupStack',
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
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 41,
            'endColumn' => 57,
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
 * Update the group stack with the given attributes.
 *
 * @param  array  $attributes
 * @return void
 */',
        'startLine' => 479,
        'endLine' => 486,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'mergeWithLastGroup' => 
      array (
        'name' => 'mergeWithLastGroup',
        'parameters' => 
        array (
          'new' => 
          array (
            'name' => 'new',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 495,
            'endLine' => 495,
            'startColumn' => 40,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prependExistingPrefix' => 
          array (
            'name' => 'prependExistingPrefix',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 495,
                'endLine' => 495,
                'startTokenPos' => 1811,
                'startFilePos' => 13429,
                'endTokenPos' => 1811,
                'endFilePos' => 13432,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 495,
            'endLine' => 495,
            'startColumn' => 46,
            'endColumn' => 74,
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
 * Merge the given array with the last group stack.
 *
 * @param  array  $new
 * @param  bool  $prependExistingPrefix
 * @return array
 */',
        'startLine' => 495,
        'endLine' => 498,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'loadRoutes' => 
      array (
        'name' => 'loadRoutes',
        'parameters' => 
        array (
          'routes' => 
          array (
            'name' => 'routes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 506,
            'endLine' => 506,
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
 * Load the provided routes.
 *
 * @param  \\Closure|string  $routes
 * @return void
 */',
        'startLine' => 506,
        'endLine' => 513,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getLastGroupPrefix' => 
      array (
        'name' => 'getLastGroupPrefix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the prefix from the last group on the stack.
 *
 * @return string
 */',
        'startLine' => 520,
        'endLine' => 529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'addRoute' => 
      array (
        'name' => 'addRoute',
        'parameters' => 
        array (
          'methods' => 
          array (
            'name' => 'methods',
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
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uri' => 
          array (
            'name' => 'uri',
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
            'startColumn' => 40,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
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
            'startColumn' => 46,
            'endColumn' => 52,
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
 * Add a route to the underlying route collection.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 539,
        'endLine' => 542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'createRoute' => 
      array (
        'name' => 'createRoute',
        'parameters' => 
        array (
          'methods' => 
          array (
            'name' => 'methods',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 552,
            'endLine' => 552,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 552,
            'endLine' => 552,
            'startColumn' => 46,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 552,
            'endLine' => 552,
            'startColumn' => 52,
            'endColumn' => 58,
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
 * Create a new route instance.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  mixed  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 552,
        'endLine' => 575,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'actionReferencesController' => 
      array (
        'name' => 'actionReferencesController',
        'parameters' => 
        array (
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 583,
            'endLine' => 583,
            'startColumn' => 51,
            'endColumn' => 57,
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
 * Determine if the action is routing to a controller.
 *
 * @param  mixed  $action
 * @return bool
 */',
        'startLine' => 583,
        'endLine' => 590,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'convertToControllerAction' => 
      array (
        'name' => 'convertToControllerAction',
        'parameters' => 
        array (
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 598,
            'endLine' => 598,
            'startColumn' => 50,
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
 * Add a controller based route action to the action array.
 *
 * @param  array|string  $action
 * @return array
 */',
        'startLine' => 598,
        'endLine' => 618,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'prependGroupNamespace' => 
      array (
        'name' => 'prependGroupNamespace',
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
            'startLine' => 626,
            'endLine' => 626,
            'startColumn' => 46,
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
 * Prepend the last group namespace onto the use clause.
 *
 * @param  string  $class
 * @return string
 */',
        'startLine' => 626,
        'endLine' => 632,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'prependGroupController' => 
      array (
        'name' => 'prependGroupController',
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
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 47,
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
 * Prepend the last group controller onto the use clause.
 *
 * @param  string  $class
 * @return string
 */',
        'startLine' => 640,
        'endLine' => 657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'newRoute' => 
      array (
        'name' => 'newRoute',
        'parameters' => 
        array (
          'methods' => 
          array (
            'name' => 'methods',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 667,
            'endLine' => 667,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 667,
            'endLine' => 667,
            'startColumn' => 40,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 667,
            'endLine' => 667,
            'startColumn' => 46,
            'endColumn' => 52,
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
 * Create a new Route object.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  mixed  $action
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 667,
        'endLine' => 672,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'prefix' => 
      array (
        'name' => 'prefix',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 680,
            'endLine' => 680,
            'startColumn' => 31,
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
 * Prefix the given URI with the last prefix.
 *
 * @param  string  $uri
 * @return string
 */',
        'startLine' => 680,
        'endLine' => 683,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'addWhereClausesToRoute' => 
      array (
        'name' => 'addWhereClausesToRoute',
        'parameters' => 
        array (
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 691,
            'endLine' => 691,
            'startColumn' => 47,
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
 * Add the necessary where clauses to the route based on its initial registration.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 691,
        'endLine' => 698,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'mergeGroupAttributesIntoRoute' => 
      array (
        'name' => 'mergeGroupAttributesIntoRoute',
        'parameters' => 
        array (
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 706,
            'endLine' => 706,
            'startColumn' => 54,
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
 * Merge the group stack with the controller action.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return void
 */',
        'startLine' => 706,
        'endLine' => 712,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'respondWithRoute' => 
      array (
        'name' => 'respondWithRoute',
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
            'startLine' => 720,
            'endLine' => 720,
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
 * Return the response returned by the given route.
 *
 * @param  string  $name
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 720,
        'endLine' => 725,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'dispatch' => 
      array (
        'name' => 'dispatch',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 733,
            'endLine' => 733,
            'startColumn' => 30,
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
 * Dispatch the request to the application.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 733,
        'endLine' => 738,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'dispatchToRoute' => 
      array (
        'name' => 'dispatchToRoute',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 746,
            'endLine' => 746,
            'startColumn' => 37,
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
 * Dispatch the request to a route and return the response.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 746,
        'endLine' => 749,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'findRoute' => 
      array (
        'name' => 'findRoute',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 757,
            'endLine' => 757,
            'startColumn' => 34,
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
 * Find the route matching a given request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 757,
        'endLine' => 768,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'runRoute' => 
      array (
        'name' => 'runRoute',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 777,
            'endLine' => 777,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Routing\\Route',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 777,
            'endLine' => 777,
            'startColumn' => 51,
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
 * Return the response for the given route.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 777,
        'endLine' => 786,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'runRouteWithinStack' => 
      array (
        'name' => 'runRouteWithinStack',
        'parameters' => 
        array (
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Routing\\Route',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 795,
            'endLine' => 795,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 795,
            'endLine' => 795,
            'startColumn' => 58,
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
 * Run the given route within a Stack "onion" instance.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @param  \\Illuminate\\Http\\Request  $request
 * @return mixed
 */',
        'startLine' => 795,
        'endLine' => 808,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'gatherRouteMiddleware' => 
      array (
        'name' => 'gatherRouteMiddleware',
        'parameters' => 
        array (
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Routing\\Route',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 43,
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
 * Gather the middleware for the given route with resolved class names.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
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
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'resolveMiddleware' => 
      array (
        'name' => 'resolveMiddleware',
        'parameters' => 
        array (
          'middleware' => 
          array (
            'name' => 'middleware',
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
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 39,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'excluded' => 
          array (
            'name' => 'excluded',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 828,
                'endLine' => 828,
                'startTokenPos' => 3144,
                'startFilePos' => 23118,
                'endTokenPos' => 3145,
                'endFilePos' => 23119,
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
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 58,
            'endColumn' => 77,
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
 * Resolve a flat array of middleware classes from the provided array.
 *
 * @param  array  $middleware
 * @param  array  $excluded
 * @return array
 */',
        'startLine' => 828,
        'endLine' => 861,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'sortMiddleware' => 
      array (
        'name' => 'sortMiddleware',
        'parameters' => 
        array (
          'middlewares' => 
          array (
            'name' => 'middlewares',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Support\\Collection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 869,
            'endLine' => 869,
            'startColumn' => 39,
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
 * Sort the given middleware by priority.
 *
 * @param  \\Illuminate\\Support\\Collection  $middlewares
 * @return array
 */',
        'startLine' => 869,
        'endLine' => 872,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'prepareResponse' => 
      array (
        'name' => 'prepareResponse',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
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
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'response' => 
          array (
            'name' => 'response',
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
            'startColumn' => 47,
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
 * Create a response instance from the given value.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  mixed  $response
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 881,
        'endLine' => 888,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'toResponse' => 
      array (
        'name' => 'toResponse',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 39,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
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
 * Static version of prepareResponse.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  mixed  $response
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 897,
        'endLine' => 926,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'substituteBindings' => 
      array (
        'name' => 'substituteBindings',
        'parameters' => 
        array (
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 937,
            'endLine' => 937,
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
 * Substitute the route bindings onto the route.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Illuminate\\Routing\\Route
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 * @throws \\Illuminate\\Routing\\Exceptions\\BackedEnumCaseNotFoundException
 */',
        'startLine' => 937,
        'endLine' => 946,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'substituteImplicitBindings' => 
      array (
        'name' => 'substituteImplicitBindings',
        'parameters' => 
        array (
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 957,
            'endLine' => 957,
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
 * Substitute the implicit route bindings for the given route.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return void
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 * @throws \\Illuminate\\Routing\\Exceptions\\BackedEnumCaseNotFoundException
 */',
        'startLine' => 957,
        'endLine' => 964,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'substituteImplicitBindingsUsing' => 
      array (
        'name' => 'substituteImplicitBindingsUsing',
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
            'startLine' => 972,
            'endLine' => 972,
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
 * Register a callback to to run after implicit bindings are substituted.
 *
 * @param  callable  $callback
 * @return $this
 */',
        'startLine' => 972,
        'endLine' => 977,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'performBinding' => 
      array (
        'name' => 'performBinding',
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
            'startLine' => 989,
            'endLine' => 989,
            'startColumn' => 39,
            'endColumn' => 42,
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
            'startLine' => 989,
            'endLine' => 989,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'route' => 
          array (
            'name' => 'route',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 989,
            'endLine' => 989,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Call the binding callback for the given key.
 *
 * @param  string  $key
 * @param  string  $value
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 */',
        'startLine' => 989,
        'endLine' => 992,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'matched' => 
      array (
        'name' => 'matched',
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
            'startLine' => 1000,
            'endLine' => 1000,
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
 * Register a route matched event listener.
 *
 * @param  string|callable  $callback
 * @return void
 */',
        'startLine' => 1000,
        'endLine' => 1003,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getMiddleware' => 
      array (
        'name' => 'getMiddleware',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the defined middleware short-hand names.
 *
 * @return array
 */',
        'startLine' => 1010,
        'endLine' => 1013,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'aliasMiddleware' => 
      array (
        'name' => 'aliasMiddleware',
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
            'startLine' => 1022,
            'endLine' => 1022,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 1022,
            'endLine' => 1022,
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
 * Register a short-hand name for a middleware.
 *
 * @param  string  $name
 * @param  string  $class
 * @return $this
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
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'hasMiddlewareGroup' => 
      array (
        'name' => 'hasMiddlewareGroup',
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
            'startLine' => 1035,
            'endLine' => 1035,
            'startColumn' => 40,
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
 * Check if a middlewareGroup with the given name exists.
 *
 * @param  string  $name
 * @return bool
 */',
        'startLine' => 1035,
        'endLine' => 1038,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getMiddlewareGroups' => 
      array (
        'name' => 'getMiddlewareGroups',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the defined middleware groups.
 *
 * @return array
 */',
        'startLine' => 1045,
        'endLine' => 1048,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'middlewareGroup' => 
      array (
        'name' => 'middlewareGroup',
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
            'startLine' => 1057,
            'endLine' => 1057,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'middleware' => 
          array (
            'name' => 'middleware',
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
            'startLine' => 1057,
            'endLine' => 1057,
            'startColumn' => 44,
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
 * Register a group of middleware.
 *
 * @param  string  $name
 * @param  array  $middleware
 * @return $this
 */',
        'startLine' => 1057,
        'endLine' => 1062,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'prependMiddlewareToGroup' => 
      array (
        'name' => 'prependMiddlewareToGroup',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1073,
            'endLine' => 1073,
            'startColumn' => 46,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'middleware' => 
          array (
            'name' => 'middleware',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1073,
            'endLine' => 1073,
            'startColumn' => 54,
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
 * Add a middleware to the beginning of a middleware group.
 *
 * If the middleware is already in the group, it will not be added again.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return $this
 */',
        'startLine' => 1073,
        'endLine' => 1080,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'pushMiddlewareToGroup' => 
      array (
        'name' => 'pushMiddlewareToGroup',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1091,
            'endLine' => 1091,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'middleware' => 
          array (
            'name' => 'middleware',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1091,
            'endLine' => 1091,
            'startColumn' => 51,
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
 * Add a middleware to the end of a middleware group.
 *
 * If the middleware is already in the group, it will not be added again.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return $this
 */',
        'startLine' => 1091,
        'endLine' => 1102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'removeMiddlewareFromGroup' => 
      array (
        'name' => 'removeMiddlewareFromGroup',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1111,
            'endLine' => 1111,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'middleware' => 
          array (
            'name' => 'middleware',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1111,
            'endLine' => 1111,
            'startColumn' => 55,
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
 * Remove the given middleware from the specified group.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return $this
 */',
        'startLine' => 1111,
        'endLine' => 1128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'flushMiddlewareGroups' => 
      array (
        'name' => 'flushMiddlewareGroups',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flush the router\'s middleware groups.
 *
 * @return $this
 */',
        'startLine' => 1135,
        'endLine' => 1140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'bind' => 
      array (
        'name' => 'bind',
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
            'startLine' => 1149,
            'endLine' => 1149,
            'startColumn' => 26,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'binder' => 
          array (
            'name' => 'binder',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1149,
            'endLine' => 1149,
            'startColumn' => 32,
            'endColumn' => 38,
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
 * Add a new route parameter binder.
 *
 * @param  string  $key
 * @param  string|callable  $binder
 * @return void
 */',
        'startLine' => 1149,
        'endLine' => 1154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'model' => 
      array (
        'name' => 'model',
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
            'startLine' => 1164,
            'endLine' => 1164,
            'startColumn' => 27,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 1164,
            'endLine' => 1164,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 1,
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
                'startLine' => 1164,
                'endLine' => 1164,
                'startTokenPos' => 4613,
                'startFilePos' => 32915,
                'endTokenPos' => 4613,
                'endFilePos' => 32918,
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
            'startLine' => 1164,
            'endLine' => 1164,
            'startColumn' => 41,
            'endColumn' => 65,
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
 * Register a model binder for a wildcard.
 *
 * @param  string  $key
 * @param  string  $class
 * @param  \\Closure|null  $callback
 * @return void
 */',
        'startLine' => 1164,
        'endLine' => 1167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getBindingCallback' => 
      array (
        'name' => 'getBindingCallback',
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
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 40,
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
 * Get the binding callback for a given binding.
 *
 * @param  string  $key
 * @return \\Closure|null
 */',
        'startLine' => 1175,
        'endLine' => 1180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getPatterns' => 
      array (
        'name' => 'getPatterns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the global "where" patterns.
 *
 * @return array
 */',
        'startLine' => 1187,
        'endLine' => 1190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'pattern' => 
      array (
        'name' => 'pattern',
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
            'startLine' => 1199,
            'endLine' => 1199,
            'startColumn' => 29,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1199,
            'endLine' => 1199,
            'startColumn' => 35,
            'endColumn' => 42,
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
 * Set a global where pattern on all routes.
 *
 * @param  string  $key
 * @param  string  $pattern
 * @return void
 */',
        'startLine' => 1199,
        'endLine' => 1202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'patterns' => 
      array (
        'name' => 'patterns',
        'parameters' => 
        array (
          'patterns' => 
          array (
            'name' => 'patterns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1210,
            'endLine' => 1210,
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
 * Set a group of global where patterns on all routes.
 *
 * @param  array  $patterns
 * @return void
 */',
        'startLine' => 1210,
        'endLine' => 1215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'hasGroupStack' => 
      array (
        'name' => 'hasGroupStack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the router currently has a group stack.
 *
 * @return bool
 */',
        'startLine' => 1222,
        'endLine' => 1225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getGroupStack' => 
      array (
        'name' => 'getGroupStack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current group stack for the router.
 *
 * @return array
 */',
        'startLine' => 1232,
        'endLine' => 1235,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'input' => 
      array (
        'name' => 'input',
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
            'startLine' => 1244,
            'endLine' => 1244,
            'startColumn' => 27,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1244,
                'endLine' => 1244,
                'startTokenPos' => 4857,
                'startFilePos' => 34619,
                'endTokenPos' => 4857,
                'endFilePos' => 34622,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1244,
            'endLine' => 1244,
            'startColumn' => 33,
            'endColumn' => 47,
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
 * Get a route parameter for the current route.
 *
 * @param  string  $key
 * @param  string|null  $default
 * @return mixed
 */',
        'startLine' => 1244,
        'endLine' => 1247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getCurrentRequest' => 
      array (
        'name' => 'getCurrentRequest',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the request currently being dispatched.
 *
 * @return \\Illuminate\\Http\\Request
 */',
        'startLine' => 1254,
        'endLine' => 1257,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getCurrentRoute' => 
      array (
        'name' => 'getCurrentRoute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the currently dispatched route instance.
 *
 * @return \\Illuminate\\Routing\\Route|null
 */',
        'startLine' => 1264,
        'endLine' => 1267,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'current' => 
      array (
        'name' => 'current',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the currently dispatched route instance.
 *
 * @return \\Illuminate\\Routing\\Route|null
 */',
        'startLine' => 1274,
        'endLine' => 1277,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'has' => 
      array (
        'name' => 'has',
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
            'startLine' => 1285,
            'endLine' => 1285,
            'startColumn' => 25,
            'endColumn' => 29,
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
 * Check if a route with the given name exists.
 *
 * @param  string|array  $name
 * @return bool
 */',
        'startLine' => 1285,
        'endLine' => 1296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'currentRouteName' => 
      array (
        'name' => 'currentRouteName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current route name.
 *
 * @return string|null
 */',
        'startLine' => 1303,
        'endLine' => 1306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'is' => 
      array (
        'name' => 'is',
        'parameters' => 
        array (
          'patterns' => 
          array (
            'name' => 'patterns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1314,
            'endLine' => 1314,
            'startColumn' => 24,
            'endColumn' => 35,
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
 * Alias for the "currentRouteNamed" method.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
        'startLine' => 1314,
        'endLine' => 1317,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'currentRouteNamed' => 
      array (
        'name' => 'currentRouteNamed',
        'parameters' => 
        array (
          'patterns' => 
          array (
            'name' => 'patterns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1325,
            'endLine' => 1325,
            'startColumn' => 39,
            'endColumn' => 50,
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
 * Determine if the current route matches a pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
        'startLine' => 1325,
        'endLine' => 1328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'currentRouteAction' => 
      array (
        'name' => 'currentRouteAction',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current route action.
 *
 * @return string|null
 */',
        'startLine' => 1335,
        'endLine' => 1340,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'uses' => 
      array (
        'name' => 'uses',
        'parameters' => 
        array (
          'patterns' => 
          array (
            'name' => 'patterns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1348,
            'endLine' => 1348,
            'startColumn' => 26,
            'endColumn' => 37,
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
 * Alias for the "currentRouteUses" method.
 *
 * @param  array  ...$patterns
 * @return bool
 */',
        'startLine' => 1348,
        'endLine' => 1357,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'currentRouteUses' => 
      array (
        'name' => 'currentRouteUses',
        'parameters' => 
        array (
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1365,
            'endLine' => 1365,
            'startColumn' => 38,
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
 * Determine if the current route action matches a given action.
 *
 * @param  string  $action
 * @return bool
 */',
        'startLine' => 1365,
        'endLine' => 1368,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'singularResourceParameters' => 
      array (
        'name' => 'singularResourceParameters',
        'parameters' => 
        array (
          'singular' => 
          array (
            'name' => 'singular',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1376,
                'endLine' => 1376,
                'startTokenPos' => 5279,
                'startFilePos' => 37493,
                'endTokenPos' => 5279,
                'endFilePos' => 37496,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1376,
            'endLine' => 1376,
            'startColumn' => 48,
            'endColumn' => 63,
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
 * Set the unmapped global resource parameters to singular.
 *
 * @param  bool  $singular
 * @return void
 */',
        'startLine' => 1376,
        'endLine' => 1379,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'resourceParameters' => 
      array (
        'name' => 'resourceParameters',
        'parameters' => 
        array (
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1387,
                'endLine' => 1387,
                'startTokenPos' => 5308,
                'startFilePos' => 37756,
                'endTokenPos' => 5309,
                'endFilePos' => 37757,
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
            'startLine' => 1387,
            'endLine' => 1387,
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
 * Set the global resource parameter mapping.
 *
 * @param  array  $parameters
 * @return void
 */',
        'startLine' => 1387,
        'endLine' => 1390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'resourceVerbs' => 
      array (
        'name' => 'resourceVerbs',
        'parameters' => 
        array (
          'verbs' => 
          array (
            'name' => 'verbs',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1398,
                'endLine' => 1398,
                'startTokenPos' => 5338,
                'startFilePos' => 38010,
                'endTokenPos' => 5339,
                'endFilePos' => 38011,
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
            'startLine' => 1398,
            'endLine' => 1398,
            'startColumn' => 35,
            'endColumn' => 51,
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
 * Get or set the verbs used in the resource URIs.
 *
 * @param  array  $verbs
 * @return array|null
 */',
        'startLine' => 1398,
        'endLine' => 1401,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'getRoutes' => 
      array (
        'name' => 'getRoutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the underlying route collection.
 *
 * @return \\Illuminate\\Routing\\RouteCollectionInterface
 */',
        'startLine' => 1408,
        'endLine' => 1411,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'setRoutes' => 
      array (
        'name' => 'setRoutes',
        'parameters' => 
        array (
          'routes' => 
          array (
            'name' => 'routes',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Routing\\RouteCollection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1419,
            'endLine' => 1419,
            'startColumn' => 31,
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
 * Set the route collection instance.
 *
 * @param  \\Illuminate\\Routing\\RouteCollection  $routes
 * @return void
 */',
        'startLine' => 1419,
        'endLine' => 1428,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'setCompiledRoutes' => 
      array (
        'name' => 'setCompiledRoutes',
        'parameters' => 
        array (
          'routes' => 
          array (
            'name' => 'routes',
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
            'startLine' => 1436,
            'endLine' => 1436,
            'startColumn' => 39,
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
 * Set the compiled route collection instance.
 *
 * @param  array  $routes
 * @return void
 */',
        'startLine' => 1436,
        'endLine' => 1443,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'uniqueMiddleware' => 
      array (
        'name' => 'uniqueMiddleware',
        'parameters' => 
        array (
          'middleware' => 
          array (
            'name' => 'middleware',
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
            'startLine' => 1451,
            'endLine' => 1451,
            'startColumn' => 45,
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
 * Remove any duplicate middleware from the given array.
 *
 * @param  array  $middleware
 * @return array
 */',
        'startLine' => 1451,
        'endLine' => 1466,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
      'setContainer' => 
      array (
        'name' => 'setContainer',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1474,
            'endLine' => 1474,
            'startColumn' => 34,
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
 * Set the container instance used by the router.
 *
 * @param  \\Illuminate\\Container\\Container  $container
 * @return $this
 */',
        'startLine' => 1474,
        'endLine' => 1479,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
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
            'startLine' => 1488,
            'endLine' => 1488,
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
            'startLine' => 1488,
            'endLine' => 1488,
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
 * Dynamically handle calls into the router instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 1488,
        'endLine' => 1503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\Router',
        'implementingClassName' => 'Illuminate\\Routing\\Router',
        'currentClassName' => 'Illuminate\\Routing\\Router',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Illuminate\\Support\\Traits\\Macroable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\macroable::__call',
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
        'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
      ),
    ),
  ),
));