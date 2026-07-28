<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Support/Providers/RouteServiceProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Support\Providers\RouteServiceProvider
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-004865c9f464e9e25736809330b81ba292a21aee63d96e281f65a7ce30ce8f83',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Support/Providers/RouteServiceProvider.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
    'name' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
    'shortName' => 'RouteServiceProvider',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin \\Illuminate\\Routing\\Router
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 139,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\ServiceProvider',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'namespace' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'name' => 'namespace',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The controller namespace for the application.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'loadRoutesUsing' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'name' => 'loadRoutesUsing',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The callback that should be used to load the application\'s routes.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
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
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register any application services.
 *
 * @return void
 */',
        'startLine' => 37,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'aliasName' => NULL,
      ),
      'boot' => 
      array (
        'name' => 'boot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Bootstrap any application services.
 *
 * @return void
 */',
        'startLine' => 60,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'aliasName' => NULL,
      ),
      'routes' => 
      array (
        'name' => 'routes',
        'parameters' => 
        array (
          'routesCallback' => 
          array (
            'name' => 'routesCallback',
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
            'startLine' => 71,
            'endLine' => 71,
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
 * Register the callback that will be used to load the application\'s routes.
 *
 * @param  \\Closure  $routesCallback
 * @return $this
 */',
        'startLine' => 71,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'aliasName' => NULL,
      ),
      'setRootControllerNamespace' => 
      array (
        'name' => 'setRootControllerNamespace',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the root controller namespace for the application.
 *
 * @return void
 */',
        'startLine' => 83,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'aliasName' => NULL,
      ),
      'routesAreCached' => 
      array (
        'name' => 'routesAreCached',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application routes are cached.
 *
 * @return bool
 */',
        'startLine' => 95,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'aliasName' => NULL,
      ),
      'loadCachedRoutes' => 
      array (
        'name' => 'loadCachedRoutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Load the cached routes for the application.
 *
 * @return void
 */',
        'startLine' => 105,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'aliasName' => NULL,
      ),
      'loadRoutes' => 
      array (
        'name' => 'loadRoutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Load the application routes.
 *
 * @return void
 */',
        'startLine' => 117,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
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
            'startLine' => 133,
            'endLine' => 133,
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
            'startLine' => 133,
            'endLine' => 133,
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
 * Pass dynamic methods onto the router instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 133,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Support\\Providers',
        'declaringClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'implementingClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
        'currentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
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