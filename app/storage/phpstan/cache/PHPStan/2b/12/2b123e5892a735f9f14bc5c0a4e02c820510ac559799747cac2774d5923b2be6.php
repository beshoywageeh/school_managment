<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Middleware\TrustProxies
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bfe663f1c4996c63ee78be268d669eece85adcadc0aefebbc17f339a9dbdbeaa-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php',
      ),
    ),
    'namespace' => 'Illuminate\\Http\\Middleware',
    'name' => 'Illuminate\\Http\\Middleware\\TrustProxies',
    'shortName' => 'TrustProxies',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 132,
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
      'proxies' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'name' => 'proxies',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The trusted proxies for the application.
 *
 * @var array<int, string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'headers' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'name' => 'headers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Illuminate\\Http\\Request::HEADER_X_FORWARDED_FOR | \\Illuminate\\Http\\Request::HEADER_X_FORWARDED_HOST | \\Illuminate\\Http\\Request::HEADER_X_FORWARDED_PORT | \\Illuminate\\Http\\Request::HEADER_X_FORWARDED_PROTO | \\Illuminate\\Http\\Request::HEADER_X_FORWARDED_PREFIX | \\Illuminate\\Http\\Request::HEADER_X_FORWARDED_AWS_ELB',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 22,
            'startTokenPos' => 38,
            'startFilePos' => 347,
            'endTokenPos' => 70,
            'endFilePos' => 558,
          ),
        ),
        'docComment' => '/**
 * The proxy header mappings.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 238,
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
      'handle' => 
      array (
        'name' => 'handle',
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
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'next' => 
          array (
            'name' => 'next',
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
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 46,
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
 * Handle an incoming request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Closure  $next
 * @return mixed
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
 */',
        'startLine' => 33,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'aliasName' => NULL,
      ),
      'setTrustedProxyIpAddresses' => 
      array (
        'name' => 'setTrustedProxyIpAddresses',
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 51,
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
 * Sets the trusted proxies on the request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return void
 */',
        'startLine' => 48,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'aliasName' => NULL,
      ),
      'setTrustedProxyIpAddressesToSpecificIps' => 
      array (
        'name' => 'setTrustedProxyIpAddressesToSpecificIps',
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
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 64,
            'endColumn' => 79,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'trustedIps' => 
          array (
            'name' => 'trustedIps',
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
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 82,
            'endColumn' => 98,
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
 * Specify the IP addresses to trust explicitly.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  array  $trustedIps
 * @return void
 */',
        'startLine' => 84,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'aliasName' => NULL,
      ),
      'setTrustedProxyIpAddressesToTheCallingIp' => 
      array (
        'name' => 'setTrustedProxyIpAddressesToTheCallingIp',
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
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 65,
            'endColumn' => 80,
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
 * Set the trusted proxy to be the IP address calling this servers.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return void
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
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'aliasName' => NULL,
      ),
      'getTrustedHeaderNames' => 
      array (
        'name' => 'getTrustedHeaderNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve trusted header name(s), falling back to defaults if config not set.
 *
 * @return int A bit field of Request::HEADER_*, to set which headers to trust from your proxies.
 */',
        'startLine' => 105,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'aliasName' => NULL,
      ),
      'proxies' => 
      array (
        'name' => 'proxies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the trusted proxies.
 *
 * @return array|string|null
 */',
        'startLine' => 128,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Http\\Middleware',
        'declaringClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'implementingClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
        'currentClassName' => 'Illuminate\\Http\\Middleware\\TrustProxies',
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