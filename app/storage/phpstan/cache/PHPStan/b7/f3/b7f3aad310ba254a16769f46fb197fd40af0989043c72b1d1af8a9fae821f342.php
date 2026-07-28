<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Routing/RouteCollection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Routing\RouteCollection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fd17edd2fd7ed4dbbe1b5d84436e7300b543877e2571ee0b850ac3715630d057-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Routing\\RouteCollection',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Routing/RouteCollection.php',
      ),
    ),
    'namespace' => 'Illuminate\\Routing',
    'name' => 'Illuminate\\Routing\\RouteCollection',
    'shortName' => 'RouteCollection',
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
    'endLine' => 268,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Routing\\AbstractRouteCollection',
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
      'routes' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'name' => 'routes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 16,
            'endLine' => 16,
            'startTokenPos' => 40,
            'startFilePos' => 300,
            'endTokenPos' => 41,
            'endFilePos' => 301,
          ),
        ),
        'docComment' => '/**
 * An array of the routes keyed by method.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allRoutes' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'name' => 'allRoutes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 52,
            'startFilePos' => 442,
            'endTokenPos' => 53,
            'endFilePos' => 443,
          ),
        ),
        'docComment' => '/**
 * A flattened array of all of the routes.
 *
 * @var \\Illuminate\\Routing\\Route[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'nameList' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'name' => 'nameList',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 64,
            'startFilePos' => 585,
            'endTokenPos' => 65,
            'endFilePos' => 586,
          ),
        ),
        'docComment' => '/**
 * A look-up table of routes by their names.
 *
 * @var \\Illuminate\\Routing\\Route[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'actionList' => 
      array (
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'name' => 'actionList',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 37,
            'endLine' => 37,
            'startTokenPos' => 76,
            'startFilePos' => 736,
            'endTokenPos' => 77,
            'endFilePos' => 737,
          ),
        ),
        'docComment' => '/**
 * A look-up table of routes by controller action.
 *
 * @var \\Illuminate\\Routing\\Route[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 31,
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
      'add' => 
      array (
        'name' => 'add',
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
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 25,
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
 * Add a Route instance to the collection.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Illuminate\\Routing\\Route
 */',
        'startLine' => 45,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'addToCollections' => 
      array (
        'name' => 'addToCollections',
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 41,
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
 * Add the given route to the arrays of routes.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return void
 */',
        'startLine' => 60,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'addLookups' => 
      array (
        'name' => 'addLookups',
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
            'startLine' => 77,
            'endLine' => 77,
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
 * Add the route to any look-up tables if necessary.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return void
 */',
        'startLine' => 77,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'addToActionList' => 
      array (
        'name' => 'addToActionList',
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
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
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
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 49,
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
 * Add a route to the controller action dictionary.
 *
 * @param  array  $action
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return void
 */',
        'startLine' => 103,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'refreshNameLookups' => 
      array (
        'name' => 'refreshNameLookups',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Refresh the name look-up table.
 *
 * This is done in case any names are fluently defined or if routes are overwritten.
 *
 * @return void
 */',
        'startLine' => 115,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'refreshActionLookups' => 
      array (
        'name' => 'refreshActionLookups',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Refresh the action look-up table.
 *
 * This is done in case any actions are overwritten with new controllers.
 *
 * @return void
 */',
        'startLine' => 133,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'match' => 
      array (
        'name' => 'match',
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
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 27,
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
 * Find the first route matching a given request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Illuminate\\Routing\\Route
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
 */',
        'startLine' => 153,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 171,
                'endLine' => 171,
                'startTokenPos' => 555,
                'startFilePos' => 4674,
                'endTokenPos' => 555,
                'endFilePos' => 4677,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 25,
            'endColumn' => 38,
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
 * Get routes from the collection by method.
 *
 * @param  string|null  $method
 * @return \\Illuminate\\Routing\\Route[]
 */',
        'startLine' => 171,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'hasNamedRoute' => 
      array (
        'name' => 'hasNamedRoute',
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
            'startLine' => 182,
            'endLine' => 182,
            'startColumn' => 35,
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
 * Determine if the route collection contains a given named route.
 *
 * @param  string  $name
 * @return bool
 */',
        'startLine' => 182,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'getByName' => 
      array (
        'name' => 'getByName',
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
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 31,
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
 * Get a route instance by its name.
 *
 * @param  string  $name
 * @return \\Illuminate\\Routing\\Route|null
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
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'getByAction' => 
      array (
        'name' => 'getByAction',
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
            'startLine' => 204,
            'endLine' => 204,
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
 * Get a route instance by its controller action.
 *
 * @param  string  $action
 * @return \\Illuminate\\Routing\\Route|null
 */',
        'startLine' => 204,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
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
 * Get all of the routes in the collection.
 *
 * @return \\Illuminate\\Routing\\Route[]
 */',
        'startLine' => 214,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'getRoutesByMethod' => 
      array (
        'name' => 'getRoutesByMethod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the routes keyed by their HTTP verb / method.
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
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'getRoutesByName' => 
      array (
        'name' => 'getRoutesByName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the routes keyed by their name.
 *
 * @return \\Illuminate\\Routing\\Route[]
 */',
        'startLine' => 234,
        'endLine' => 237,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'toSymfonyRouteCollection' => 
      array (
        'name' => 'toSymfonyRouteCollection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the collection to a Symfony RouteCollection instance.
 *
 * @return \\Symfony\\Component\\Routing\\RouteCollection
 */',
        'startLine' => 244,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
        'aliasName' => NULL,
      ),
      'toCompiledRouteCollection' => 
      array (
        'name' => 'toCompiledRouteCollection',
        'parameters' => 
        array (
          'router' => 
          array (
            'name' => 'router',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Routing\\Router',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 63,
            'endColumn' => 82,
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
 * Convert the collection to a CompiledRouteCollection instance.
 *
 * @param  \\Illuminate\\Routing\\Router  $router
 * @param  \\Illuminate\\Container\\Container  $container
 * @return \\Illuminate\\Routing\\CompiledRouteCollection
 */',
        'startLine' => 260,
        'endLine' => 267,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Routing',
        'declaringClassName' => 'Illuminate\\Routing\\RouteCollection',
        'implementingClassName' => 'Illuminate\\Routing\\RouteCollection',
        'currentClassName' => 'Illuminate\\Routing\\RouteCollection',
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