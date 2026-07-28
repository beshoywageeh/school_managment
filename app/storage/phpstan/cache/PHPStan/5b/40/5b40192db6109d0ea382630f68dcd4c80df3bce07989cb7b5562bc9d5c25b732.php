<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Broadcasting/Broadcasters/Broadcaster.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Broadcasting\Broadcasters\Broadcaster
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-896a7356a172d988d9084504815eb6235b29aee3182351bae256a65bc83d2cdd-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Broadcasting/Broadcasters/Broadcaster.php',
      ),
    ),
    'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
    'name' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
    'shortName' => 'Broadcaster',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 386,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Broadcasting\\Broadcaster',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'authenticatedUserCallback' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'name' => 'authenticatedUserCallback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 91,
            'startFilePos' => 747,
            'endTokenPos' => 91,
            'endFilePos' => 750,
          ),
        ),
        'docComment' => '/**
 * The callback to resolve the authenticated user information.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'channels' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'name' => 'channels',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 102,
            'startFilePos' => 867,
            'endTokenPos' => 103,
            'endFilePos' => 868,
          ),
        ),
        'docComment' => '/**
 * The registered channel authenticators.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'channelOptions' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'name' => 'channelOptions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 114,
            'startFilePos' => 984,
            'endTokenPos' => 115,
            'endFilePos' => 985,
          ),
        ),
        'docComment' => '/**
 * The registered channel options.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bindingRegistrar' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'name' => 'bindingRegistrar',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The binding registrar instance.
 *
 * @var \\Illuminate\\Contracts\\Routing\\BindingRegistrar
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 32,
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
      'resolveAuthenticatedUser' => 
      array (
        'name' => 'resolveAuthenticatedUser',
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
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 46,
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
 * Resolve the authenticated user payload for the incoming connection request.
 *
 * See: https://pusher.com/docs/channels/library_auth_reference/auth-signatures/#user-authentication.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return array|null
 */',
        'startLine' => 56,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'resolveAuthenticatedUserUsing' => 
      array (
        'name' => 'resolveAuthenticatedUserUsing',
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
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 51,
            'endColumn' => 67,
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
 * Register the user retrieval callback used to authenticate connections.
 *
 * See: https://pusher.com/docs/channels/library_auth_reference/auth-signatures/#user-authentication.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 71,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'channel' => 
      array (
        'name' => 'channel',
        'parameters' => 
        array (
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 29,
            'endColumn' => 36,
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
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 39,
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
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 208,
                'startFilePos' => 2348,
                'endTokenPos' => 209,
                'endFilePos' => 2349,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
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
 * Register a channel authenticator.
 *
 * @param  \\Illuminate\\Contracts\\Broadcasting\\HasBroadcastChannel|string  $channel
 * @param  callable|string  $callback
 * @param  array  $options
 * @return $this
 */',
        'startLine' => 84,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'verifyUserCanAccessChannel' => 
      array (
        'name' => 'verifyUserCanAccessChannel',
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
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 51,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 61,
            'endColumn' => 68,
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
 * Authenticate the incoming request for a given channel.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  string  $channel
 * @return mixed
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException
 */',
        'startLine' => 108,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'extractAuthParameters' => 
      array (
        'name' => 'extractAuthParameters',
        'parameters' => 
        array (
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
            'startLine' => 139,
            'endLine' => 139,
            'startColumn' => 46,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'channel' => 
          array (
            'name' => 'channel',
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
            'startColumn' => 56,
            'endColumn' => 63,
            'parameterIndex' => 1,
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
            'startLine' => 139,
            'endLine' => 139,
            'startColumn' => 66,
            'endColumn' => 74,
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
 * Extract the parameters from the given pattern and channel.
 *
 * @param  string  $pattern
 * @param  string  $channel
 * @param  callable|string  $callback
 * @return array
 */',
        'startLine' => 139,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'extractParameters' => 
      array (
        'name' => 'extractParameters',
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
            'startLine' => 158,
            'endLine' => 158,
            'startColumn' => 42,
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
 * Extracts the parameters out of what the user passed to handle the channel authentication.
 *
 * @param  callable|string  $callback
 * @return \\ReflectionParameter[]
 *
 * @throws \\Exception
 */',
        'startLine' => 158,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'extractParametersFromClass' => 
      array (
        'name' => 'extractParametersFromClass',
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
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 51,
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
 * Extracts the parameters out of a class channel\'s "join" method.
 *
 * @param  string  $callback
 * @return \\ReflectionParameter[]
 *
 * @throws \\Exception
 */',
        'startLine' => 177,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'extractChannelKeys' => 
      array (
        'name' => 'extractChannelKeys',
        'parameters' => 
        array (
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
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
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
 * Extract the channel keys from the incoming channel name.
 *
 * @param  string  $pattern
 * @param  string  $channel
 * @return array
 */',
        'startLine' => 195,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'resolveBinding' => 
      array (
        'name' => 'resolveBinding',
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
            'startLine' => 210,
            'endLine' => 210,
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
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callbackParameters' => 
          array (
            'name' => 'callbackParameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 53,
            'endColumn' => 71,
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
 * Resolve the given parameter binding.
 *
 * @param  string  $key
 * @param  string  $value
 * @param  array  $callbackParameters
 * @return mixed
 */',
        'startLine' => 210,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'resolveExplicitBindingIfPossible' => 
      array (
        'name' => 'resolveExplicitBindingIfPossible',
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
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 57,
            'endColumn' => 60,
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
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 63,
            'endColumn' => 68,
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
 * Resolve an explicit parameter binding if applicable.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return mixed
 */',
        'startLine' => 226,
        'endLine' => 235,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'resolveImplicitBindingIfPossible' => 
      array (
        'name' => 'resolveImplicitBindingIfPossible',
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
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 57,
            'endColumn' => 60,
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
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 63,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callbackParameters' => 
          array (
            'name' => 'callbackParameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 71,
            'endColumn' => 89,
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
 * Resolve an implicit parameter binding if applicable.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @param  array  $callbackParameters
 * @return mixed
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException
 */',
        'startLine' => 247,
        'endLine' => 264,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'isImplicitlyBindable' => 
      array (
        'name' => 'isImplicitlyBindable',
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
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 45,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameter' => 
          array (
            'name' => 'parameter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 51,
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
 * Determine if a given key and parameter is implicitly bindable.
 *
 * @param  string  $key
 * @param  \\ReflectionParameter  $parameter
 * @return bool
 */',
        'startLine' => 273,
        'endLine' => 277,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'formatChannels' => 
      array (
        'name' => 'formatChannels',
        'parameters' => 
        array (
          'channels' => 
          array (
            'name' => 'channels',
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
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 39,
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
 * Format the channel array into an array of strings.
 *
 * @param  array  $channels
 * @return array
 */',
        'startLine' => 285,
        'endLine' => 290,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'binder' => 
      array (
        'name' => 'binder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the model binding registrar instance.
 *
 * @return \\Illuminate\\Contracts\\Routing\\BindingRegistrar
 */',
        'startLine' => 297,
        'endLine' => 305,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'normalizeChannelHandlerToCallable' => 
      array (
        'name' => 'normalizeChannelHandlerToCallable',
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 58,
            'endColumn' => 66,
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
 * Normalize the given callback into a callable.
 *
 * @param  mixed  $callback
 * @return callable
 */',
        'startLine' => 313,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'retrieveUser' => 
      array (
        'name' => 'retrieveUser',
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
            'startLine' => 329,
            'endLine' => 329,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 329,
            'endLine' => 329,
            'startColumn' => 47,
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
 * Retrieve the authenticated user using the configured guard (if any).
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  string  $channel
 * @return mixed
 */',
        'startLine' => 329,
        'endLine' => 344,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'retrieveChannelOptions' => 
      array (
        'name' => 'retrieveChannelOptions',
        'parameters' => 
        array (
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 352,
            'endLine' => 352,
            'startColumn' => 47,
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
 * Retrieve options for a certain channel.
 *
 * @param  string  $channel
 * @return array
 */',
        'startLine' => 352,
        'endLine' => 363,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'channelNameMatchesPattern' => 
      array (
        'name' => 'channelNameMatchesPattern',
        'parameters' => 
        array (
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 372,
            'endLine' => 372,
            'startColumn' => 50,
            'endColumn' => 57,
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
            'startLine' => 372,
            'endLine' => 372,
            'startColumn' => 60,
            'endColumn' => 67,
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
 * Check if the channel name from the request matches a pattern from registered channels.
 *
 * @param  string  $channel
 * @param  string  $pattern
 * @return bool
 */',
        'startLine' => 372,
        'endLine' => 375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'aliasName' => NULL,
      ),
      'getChannels' => 
      array (
        'name' => 'getChannels',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the registered channels.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 382,
        'endLine' => 385,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting\\Broadcasters',
        'declaringClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'implementingClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
        'currentClassName' => 'Illuminate\\Broadcasting\\Broadcasters\\Broadcaster',
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