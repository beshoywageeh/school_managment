<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/ClientRequestWatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Telescope\Watchers\ClientRequestWatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b672a09da0f713ed1fcf705dc8c76918752085803c18037828dc316665af5702-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/ClientRequestWatcher.php',
      ),
    ),
    'namespace' => 'Laravel\\Telescope\\Watchers',
    'name' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
    'shortName' => 'ClientRequestWatcher',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 257,
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
            'startLine' => 23,
            'endLine' => 23,
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
        'startLine' => 23,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'recordFailedRequest' => 
      array (
        'name' => 'recordFailedRequest',
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
                'name' => 'Illuminate\\Http\\Client\\Events\\ConnectionFailed',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 41,
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
 * Record a HTTP Client connection failed request event.
 *
 * @param  \\Illuminate\\Http\\Client\\Events\\ConnectionFailed  $event
 * @return void
 */',
        'startLine' => 35,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'recordResponse' => 
      array (
        'name' => 'recordResponse',
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
                'name' => 'Illuminate\\Http\\Client\\Events\\ResponseReceived',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 36,
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
 * Record a HTTP Client response.
 *
 * @param  \\Illuminate\\Http\\Client\\Events\\ResponseReceived  $event
 * @return void
 */',
        'startLine' => 58,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'shouldIgnoreHost' => 
      array (
        'name' => 'shouldIgnoreHost',
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
            'startLine' => 86,
            'endLine' => 86,
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
 * Determine whether to ignore this request based on its host.
 *
 * @param  mixed  $event
 * @return bool
 */',
        'startLine' => 86,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'contentWithinLimits' => 
      array (
        'name' => 'contentWithinLimits',
        'parameters' => 
        array (
          'content' => 
          array (
            'name' => 'content',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 41,
            'endColumn' => 48,
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
 * Determine if the content is within the set limits.
 *
 * @param  string  $content
 * @return bool
 */',
        'startLine' => 99,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'response' => 
      array (
        'name' => 'response',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Client\\Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 33,
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
 * Format the given response object.
 *
 * @param  \\Illuminate\\Http\\Client\\Response  $response
 * @return array|string
 */',
        'startLine' => 112,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'headers' => 
      array (
        'name' => 'headers',
        'parameters' => 
        array (
          'headers' => 
          array (
            'name' => 'headers',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 32,
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
 * Format the given headers.
 *
 * @param  array  $headers
 * @return array
 */',
        'startLine' => 154,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'payload' => 
      array (
        'name' => 'payload',
        'parameters' => 
        array (
          'payload' => 
          array (
            'name' => 'payload',
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
            'startColumn' => 32,
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
 * Format the given payload.
 *
 * @param  array  $payload
 * @return array
 */',
        'startLine' => 177,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'hideParameters' => 
      array (
        'name' => 'hideParameters',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startColumn' => 39,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'hidden' => 
          array (
            'name' => 'hidden',
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
 * Hide the given parameters.
 *
 * @param  array  $data
 * @param  array  $hidden
 * @return mixed
 */',
        'startLine' => 191,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'input' => 
      array (
        'name' => 'input',
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
                'name' => 'Illuminate\\Http\\Client\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 208,
            'endLine' => 208,
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
 * Extract the input from the given request.
 *
 * @param  \\Illuminate\\Http\\Client\\Request  $request
 * @return array
 */',
        'startLine' => 208,
        'endLine' => 241,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'aliasName' => NULL,
      ),
      'duration' => 
      array (
        'name' => 'duration',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Client\\Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 249,
            'endLine' => 249,
            'startColumn' => 33,
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
 * Get the request duration in milliseconds.
 *
 * @param  \\Illuminate\\Http\\Client\\Response  $response
 * @return int|null
 */',
        'startLine' => 249,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\ClientRequestWatcher',
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