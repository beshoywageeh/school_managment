<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/http-foundation/Request.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpFoundation\Request
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e9d530ffb9e0460245a67b497ac0e827d30f6321a0a07b62904b76f77eb82f30-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\HttpFoundation\\Request',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/http-foundation/Request.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'name' => 'Symfony\\Component\\HttpFoundation\\Request',
    'shortName' => 'Request',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Request represents an HTTP request.
 *
 * The methods dealing with URL accept / return a raw path (% encoded):
 *   * getBasePath
 *   * getBaseUrl
 *   * getPathInfo
 *   * getRequestUri
 *   * getUri
 *   * getUriForPath
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 43,
    'endLine' => 2171,
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
      'HEADER_FORWARDED' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_FORWARDED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b1',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 113,
            'startFilePos' => 1326,
            'endTokenPos' => 113,
            'endFilePos' => 1333,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 45,
      ),
      'HEADER_X_FORWARDED_FOR' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_X_FORWARDED_FOR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b10',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 126,
            'startFilePos' => 1401,
            'endTokenPos' => 126,
            'endFilePos' => 1408,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 51,
      ),
      'HEADER_X_FORWARDED_HOST' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_X_FORWARDED_HOST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b100',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 137,
            'startFilePos' => 1454,
            'endTokenPos' => 137,
            'endFilePos' => 1461,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'HEADER_X_FORWARDED_PROTO' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_X_FORWARDED_PROTO',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b1000',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 148,
            'startFilePos' => 1508,
            'endTokenPos' => 148,
            'endFilePos' => 1515,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'HEADER_X_FORWARDED_PORT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_X_FORWARDED_PORT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b10000',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 49,
            'startTokenPos' => 159,
            'startFilePos' => 1561,
            'endTokenPos' => 159,
            'endFilePos' => 1568,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'HEADER_X_FORWARDED_PREFIX' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_X_FORWARDED_PREFIX',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b100000',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 170,
            'startFilePos' => 1616,
            'endTokenPos' => 170,
            'endFilePos' => 1623,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 54,
      ),
      'HEADER_X_FORWARDED_AWS_ELB' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_X_FORWARDED_AWS_ELB',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b11010',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 181,
            'startFilePos' => 1673,
            'endTokenPos' => 181,
            'endFilePos' => 1681,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 56,
      ),
      'HEADER_X_FORWARDED_TRAEFIK' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'HEADER_X_FORWARDED_TRAEFIK',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0b111110',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 194,
            'startFilePos' => 1771,
            'endTokenPos' => 194,
            'endFilePos' => 1779,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 56,
      ),
      'METHOD_HEAD' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_HEAD',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'HEAD\'',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 207,
            'startFilePos' => 1875,
            'endTokenPos' => 207,
            'endFilePos' => 1880,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'METHOD_GET' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_GET',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'GET\'',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 218,
            'startFilePos' => 1913,
            'endTokenPos' => 218,
            'endFilePos' => 1917,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'METHOD_POST' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_POST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'POST\'',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 229,
            'startFilePos' => 1951,
            'endTokenPos' => 229,
            'endFilePos' => 1956,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'METHOD_PUT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_PUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PUT\'',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 240,
            'startFilePos' => 1989,
            'endTokenPos' => 240,
            'endFilePos' => 1993,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'METHOD_PATCH' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_PATCH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PATCH\'',
          'attributes' => 
          array (
            'startLine' => 59,
            'endLine' => 59,
            'startTokenPos' => 251,
            'startFilePos' => 2028,
            'endTokenPos' => 251,
            'endFilePos' => 2034,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'METHOD_DELETE' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_DELETE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'DELETE\'',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 262,
            'startFilePos' => 2070,
            'endTokenPos' => 262,
            'endFilePos' => 2077,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
      'METHOD_PURGE' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_PURGE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PURGE\'',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 61,
            'startTokenPos' => 273,
            'startFilePos' => 2112,
            'endTokenPos' => 273,
            'endFilePos' => 2118,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'METHOD_OPTIONS' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_OPTIONS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'OPTIONS\'',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 284,
            'startFilePos' => 2155,
            'endTokenPos' => 284,
            'endFilePos' => 2163,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 44,
      ),
      'METHOD_TRACE' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_TRACE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'TRACE\'',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 295,
            'startFilePos' => 2198,
            'endTokenPos' => 295,
            'endFilePos' => 2204,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'METHOD_CONNECT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'METHOD_CONNECT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'CONNECT\'',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 306,
            'startFilePos' => 2241,
            'endTokenPos' => 306,
            'endFilePos' => 2249,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 44,
      ),
      'FORWARDED_PARAMS' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'FORWARDED_PARAMS',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::HEADER_X_FORWARDED_FOR => \'for\', self::HEADER_X_FORWARDED_HOST => \'host\', self::HEADER_X_FORWARDED_PROTO => \'proto\', self::HEADER_X_FORWARDED_PORT => \'host\']',
          'attributes' => 
          array (
            'startLine' => 220,
            'endLine' => 225,
            'startTokenPos' => 604,
            'startFilePos' => 4794,
            'endTokenPos' => 642,
            'endFilePos' => 4996,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 220,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
      'TRUSTED_HEADERS' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'TRUSTED_HEADERS',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::HEADER_FORWARDED => \'FORWARDED\', self::HEADER_X_FORWARDED_FOR => \'X_FORWARDED_FOR\', self::HEADER_X_FORWARDED_HOST => \'X_FORWARDED_HOST\', self::HEADER_X_FORWARDED_PROTO => \'X_FORWARDED_PROTO\', self::HEADER_X_FORWARDED_PORT => \'X_FORWARDED_PORT\', self::HEADER_X_FORWARDED_PREFIX => \'X_FORWARDED_PREFIX\']',
          'attributes' => 
          array (
            'startLine' => 236,
            'endLine' => 243,
            'startTokenPos' => 655,
            'startFilePos' => 5337,
            'endTokenPos' => 711,
            'endFilePos' => 5699,
          ),
        ),
        'docComment' => '/**
 * Names for headers that can be trusted when
 * using trusted proxies.
 *
 * The FORWARDED header is the standard as of rfc7239.
 *
 * The other headers are non-standard, but widely used
 * by popular reverse proxies (like Apache mod_proxy or Amazon EC2).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 236,
        'endLine' => 243,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'trustedProxies' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'trustedProxies',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 319,
            'startFilePos' => 2329,
            'endTokenPos' => 320,
            'endFilePos' => 2330,
          ),
        ),
        'docComment' => '/**
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'trustedHostPatterns' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'trustedHostPatterns',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 333,
            'startFilePos' => 2415,
            'endTokenPos' => 334,
            'endFilePos' => 2416,
          ),
        ),
        'docComment' => '/**
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'trustedHosts' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'trustedHosts',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 347,
            'startFilePos' => 2494,
            'endTokenPos' => 348,
            'endFilePos' => 2495,
          ),
        ),
        'docComment' => '/**
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'httpMethodParameterOverride' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'httpMethodParameterOverride',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 81,
            'endLine' => 81,
            'startTokenPos' => 359,
            'startFilePos' => 2551,
            'endTokenPos' => 359,
            'endFilePos' => 2555,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 58,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'attributes',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Custom parameters.
 *
 * @var ParameterBag
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'request' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'request',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Request body parameters ($_POST).
 *
 * @see getPayload() for portability between content types
 *
 * @var InputBag
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'query' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'query',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Query string parameters ($_GET).
 *
 * @var InputBag
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'server' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'server',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Server and execution environment parameters ($_SERVER).
 *
 * @var ServerBag
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'files' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'files',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Uploaded files ($_FILES).
 *
 * @var FileBag
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookies' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'cookies',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cookies ($_COOKIE).
 *
 * @var InputBag
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'headers' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'headers',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Headers (taken from the $_SERVER).
 *
 * @var HeaderBag
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'content' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'content',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|resource|false|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'languages' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'languages',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string[]|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 142,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'charsets' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'charsets',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string[]|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 147,
        'endLine' => 147,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'encodings' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'encodings',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string[]|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'acceptableContentTypes' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'acceptableContentTypes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string[]|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 157,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pathInfo' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'pathInfo',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'requestUri' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'requestUri',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 167,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseUrl' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'baseUrl',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 172,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'basePath' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'basePath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 177,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'method' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'method',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 182,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'format' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'format',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 187,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'session' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'session',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var SessionInterface|callable():SessionInterface|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 192,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'locale' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'locale',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultLocale' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'defaultLocale',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'en\'',
          'attributes' => 
          array (
            'startLine' => 202,
            'endLine' => 202,
            'startTokenPos' => 510,
            'startFilePos' => 4360,
            'endTokenPos' => 510,
            'endFilePos' => 4363,
          ),
        ),
        'docComment' => '/**
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 202,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formats' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'formats',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var array<string, string[]>|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'requestFactory' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'requestFactory',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'preferredFormat' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'preferredFormat',
        'modifiers' => 4,
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 211,
            'endLine' => 211,
            'startTokenPos' => 538,
            'startFilePos' => 4534,
            'endTokenPos' => 538,
            'endFilePos' => 4537,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 211,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isHostValid' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'isHostValid',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 212,
            'endLine' => 212,
            'startTokenPos' => 549,
            'startFilePos' => 4572,
            'endTokenPos' => 549,
            'endFilePos' => 4575,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 212,
        'endLine' => 212,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isForwardedValid' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'isForwardedValid',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 213,
            'endLine' => 213,
            'startTokenPos' => 560,
            'startFilePos' => 4615,
            'endTokenPos' => 560,
            'endFilePos' => 4618,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 213,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isSafeContentPreferred' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'isSafeContentPreferred',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 214,
        'endLine' => 214,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'trustedValuesCache' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'trustedValuesCache',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 216,
            'endLine' => 216,
            'startTokenPos' => 578,
            'startFilePos' => 4704,
            'endTokenPos' => 579,
            'endFilePos' => 4705,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 216,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'trustedHeaderSet' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'trustedHeaderSet',
        'modifiers' => 20,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '-1',
          'attributes' => 
          array (
            'startLine' => 218,
            'endLine' => 218,
            'startTokenPos' => 592,
            'startFilePos' => 4752,
            'endTokenPos' => 593,
            'endFilePos' => 4753,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 218,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isIisRewrite' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'name' => 'isIisRewrite',
        'modifiers' => 4,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 246,
            'endLine' => 246,
            'startTokenPos' => 722,
            'startFilePos' => 5752,
            'endTokenPos' => 722,
            'endFilePos' => 5756,
          ),
        ),
        'docComment' => '/** @var bool */',
        'attributes' => 
        array (
        ),
        'startLine' => 246,
        'endLine' => 246,
        'startColumn' => 5,
        'endColumn' => 34,
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
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 739,
                'startFilePos' => 6341,
                'endTokenPos' => 740,
                'endFilePos' => 6342,
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
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 749,
                'startFilePos' => 6362,
                'endTokenPos' => 750,
                'endFilePos' => 6363,
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
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 52,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 759,
                'startFilePos' => 6386,
                'endTokenPos' => 760,
                'endFilePos' => 6387,
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
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 73,
            'endColumn' => 94,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cookies' => 
          array (
            'name' => 'cookies',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 769,
                'startFilePos' => 6407,
                'endTokenPos' => 770,
                'endFilePos' => 6408,
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
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 97,
            'endColumn' => 115,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'files' => 
          array (
            'name' => 'files',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 779,
                'startFilePos' => 6426,
                'endTokenPos' => 780,
                'endFilePos' => 6427,
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
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 118,
            'endColumn' => 134,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'server' => 
          array (
            'name' => 'server',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 789,
                'startFilePos' => 6446,
                'endTokenPos' => 790,
                'endFilePos' => 6447,
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
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 137,
            'endColumn' => 154,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'content' => 
          array (
            'name' => 'content',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 257,
                'endLine' => 257,
                'startTokenPos' => 797,
                'startFilePos' => 6461,
                'endTokenPos' => 797,
                'endFilePos' => 6464,
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
            'startColumn' => 157,
            'endColumn' => 171,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array                $query      The GET parameters
 * @param array                $request    The POST parameters
 * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array                $cookies    The COOKIE parameters
 * @param array                $files      The FILES parameters
 * @param array                $server     The SERVER parameters
 * @param string|resource|null $content    The raw body data
 */',
        'startLine' => 257,
        'endLine' => 260,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'initialize' => 
      array (
        'name' => 'initialize',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 844,
                'startFilePos' => 7296,
                'endTokenPos' => 845,
                'endFilePos' => 7297,
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
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 32,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 854,
                'startFilePos' => 7317,
                'endTokenPos' => 855,
                'endFilePos' => 7318,
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
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 51,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 864,
                'startFilePos' => 7341,
                'endTokenPos' => 865,
                'endFilePos' => 7342,
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
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 72,
            'endColumn' => 93,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cookies' => 
          array (
            'name' => 'cookies',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 874,
                'startFilePos' => 7362,
                'endTokenPos' => 875,
                'endFilePos' => 7363,
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
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 96,
            'endColumn' => 114,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'files' => 
          array (
            'name' => 'files',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 884,
                'startFilePos' => 7381,
                'endTokenPos' => 885,
                'endFilePos' => 7382,
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
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 117,
            'endColumn' => 133,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'server' => 
          array (
            'name' => 'server',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 894,
                'startFilePos' => 7401,
                'endTokenPos' => 895,
                'endFilePos' => 7402,
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
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 136,
            'endColumn' => 153,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'content' => 
          array (
            'name' => 'content',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 902,
                'startFilePos' => 7416,
                'endTokenPos' => 902,
                'endFilePos' => 7419,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 156,
            'endColumn' => 170,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the parameters for this request.
 *
 * This method also re-initializes all properties.
 *
 * @param array                $query      The GET parameters
 * @param array                $request    The POST parameters
 * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array                $cookies    The COOKIE parameters
 * @param array                $files      The FILES parameters
 * @param array                $server     The SERVER parameters
 * @param string|resource|null $content    The raw body data
 *
 * @return void
 */',
        'startLine' => 277,
        'endLine' => 298,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'createFromGlobals' => 
      array (
        'name' => 'createFromGlobals',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new request with values from PHP\'s super globals.
 */',
        'startLine' => 303,
        'endLine' => 315,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => '\'GET\'',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 1270,
                'startFilePos' => 9654,
                'endTokenPos' => 1270,
                'endFilePos' => 9658,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 48,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 1279,
                'startFilePos' => 9681,
                'endTokenPos' => 1280,
                'endFilePos' => 9682,
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
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 72,
            'endColumn' => 93,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cookies' => 
          array (
            'name' => 'cookies',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 1289,
                'startFilePos' => 9702,
                'endTokenPos' => 1290,
                'endFilePos' => 9703,
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
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 96,
            'endColumn' => 114,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'files' => 
          array (
            'name' => 'files',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 1299,
                'startFilePos' => 9721,
                'endTokenPos' => 1300,
                'endFilePos' => 9722,
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
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 117,
            'endColumn' => 133,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'server' => 
          array (
            'name' => 'server',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 1309,
                'startFilePos' => 9741,
                'endTokenPos' => 1310,
                'endFilePos' => 9742,
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
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 136,
            'endColumn' => 153,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'content' => 
          array (
            'name' => 'content',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 1317,
                'startFilePos' => 9756,
                'endTokenPos' => 1317,
                'endFilePos' => 9759,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 156,
            'endColumn' => 170,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a Request based on a given URI and configuration.
 *
 * The information contained in the URI always take precedence
 * over the other information (server and parameters).
 *
 * @param string               $uri        The URI
 * @param string               $method     The HTTP method
 * @param array                $parameters The query (GET) or request (POST) parameters
 * @param array                $cookies    The request cookies ($_COOKIE)
 * @param array                $files      The request files ($_FILES)
 * @param array                $server     The server parameters ($_SERVER)
 * @param string|resource|null $content    The raw body data
 *
 * @throws BadRequestException When the URI is invalid
 */',
        'startLine' => 333,
        'endLine' => 456,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setFactory' => 
      array (
        'name' => 'setFactory',
        'parameters' => 
        array (
          'callable' => 
          array (
            'name' => 'callable',
            'default' => NULL,
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
                      'name' => 'callable',
                      'isIdentifier' => true,
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
            'startLine' => 467,
            'endLine' => 467,
            'startColumn' => 39,
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
 * Sets a callable able to create a Request instance.
 *
 * This is mainly useful when you need to override the Request class
 * to keep BC with an existing system. It should not be used for any
 * other purpose.
 *
 * @return void
 */',
        'startLine' => 467,
        'endLine' => 470,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'duplicate' => 
      array (
        'name' => 'duplicate',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 482,
                'endLine' => 482,
                'startTokenPos' => 2544,
                'startFilePos' => 15607,
                'endTokenPos' => 2544,
                'endFilePos' => 15610,
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
                      'name' => 'array',
                      'isIdentifier' => true,
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
            'startLine' => 482,
            'endLine' => 482,
            'startColumn' => 31,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 482,
                'endLine' => 482,
                'startTokenPos' => 2554,
                'startFilePos' => 15631,
                'endTokenPos' => 2554,
                'endFilePos' => 15634,
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
                      'name' => 'array',
                      'isIdentifier' => true,
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
            'startLine' => 482,
            'endLine' => 482,
            'startColumn' => 53,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 482,
                'endLine' => 482,
                'startTokenPos' => 2564,
                'startFilePos' => 15658,
                'endTokenPos' => 2564,
                'endFilePos' => 15661,
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
                      'name' => 'array',
                      'isIdentifier' => true,
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
            'startLine' => 482,
            'endLine' => 482,
            'startColumn' => 77,
            'endColumn' => 101,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cookies' => 
          array (
            'name' => 'cookies',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 482,
                'endLine' => 482,
                'startTokenPos' => 2574,
                'startFilePos' => 15682,
                'endTokenPos' => 2574,
                'endFilePos' => 15685,
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
                      'name' => 'array',
                      'isIdentifier' => true,
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
            'startLine' => 482,
            'endLine' => 482,
            'startColumn' => 104,
            'endColumn' => 125,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'files' => 
          array (
            'name' => 'files',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 482,
                'endLine' => 482,
                'startTokenPos' => 2584,
                'startFilePos' => 15704,
                'endTokenPos' => 2584,
                'endFilePos' => 15707,
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
                      'name' => 'array',
                      'isIdentifier' => true,
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
            'startLine' => 482,
            'endLine' => 482,
            'startColumn' => 128,
            'endColumn' => 147,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'server' => 
          array (
            'name' => 'server',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 482,
                'endLine' => 482,
                'startTokenPos' => 2594,
                'startFilePos' => 15727,
                'endTokenPos' => 2594,
                'endFilePos' => 15730,
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
                      'name' => 'array',
                      'isIdentifier' => true,
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
            'startLine' => 482,
            'endLine' => 482,
            'startColumn' => 150,
            'endColumn' => 170,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clones a request and overrides some of its parameters.
 *
 * @param array|null $query      The GET parameters
 * @param array|null $request    The POST parameters
 * @param array|null $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array|null $cookies    The COOKIE parameters
 * @param array|null $files      The FILES parameters
 * @param array|null $server     The SERVER parameters
 */',
        'startLine' => 482,
        'endLine' => 524,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clones the current request.
 *
 * Note that the session is not cloned as duplicated requests
 * are most of the time sub-requests of the main one.
 */',
        'startLine' => 532,
        'endLine' => 541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 543,
        'endLine' => 563,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'overrideGlobals' => 
      array (
        'name' => 'overrideGlobals',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Overrides the PHP global variables according to this request instance.
 *
 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
 * $_FILES is never overridden, see rfc1867
 *
 * @return void
 */',
        'startLine' => 573,
        'endLine' => 603,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setTrustedProxies' => 
      array (
        'name' => 'setTrustedProxies',
        'parameters' => 
        array (
          'proxies' => 
          array (
            'name' => 'proxies',
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
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'trustedHeaderSet' => 
          array (
            'name' => 'trustedHeaderSet',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 62,
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
 * Sets a list of trusted proxies.
 *
 * You should only list the reverse proxies that you manage directly.
 *
 * @param array $proxies          A list of trusted proxies, the string \'REMOTE_ADDR\' will be replaced with $_SERVER[\'REMOTE_ADDR\']
 * @param int   $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
 *
 * @return void
 */',
        'startLine' => 615,
        'endLine' => 627,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getTrustedProxies' => 
      array (
        'name' => 'getTrustedProxies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the list of trusted proxies.
 *
 * @return string[]
 */',
        'startLine' => 634,
        'endLine' => 637,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getTrustedHeaderSet' => 
      array (
        'name' => 'getTrustedHeaderSet',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the set of trusted headers from trusted proxies.
 *
 * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
 */',
        'startLine' => 644,
        'endLine' => 647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setTrustedHosts' => 
      array (
        'name' => 'setTrustedHosts',
        'parameters' => 
        array (
          'hostPatterns' => 
          array (
            'name' => 'hostPatterns',
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
            'startLine' => 658,
            'endLine' => 658,
            'startColumn' => 44,
            'endColumn' => 62,
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
 * Sets a list of trusted host patterns.
 *
 * You should only list the hosts you manage using regexs.
 *
 * @param array $hostPatterns A list of trusted host patterns
 *
 * @return void
 */',
        'startLine' => 658,
        'endLine' => 663,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getTrustedHosts' => 
      array (
        'name' => 'getTrustedHosts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the list of trusted host patterns.
 *
 * @return string[]
 */',
        'startLine' => 670,
        'endLine' => 673,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'normalizeQueryString' => 
      array (
        'name' => 'normalizeQueryString',
        'parameters' => 
        array (
          'qs' => 
          array (
            'name' => 'qs',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'startLine' => 681,
            'endLine' => 681,
            'startColumn' => 49,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Normalizes a query string.
 *
 * It builds a normalized query string, where keys/value pairs are alphabetized,
 * have consistent escaping and unneeded delimiters are removed.
 */',
        'startLine' => 681,
        'endLine' => 691,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'enableHttpMethodParameterOverride' => 
      array (
        'name' => 'enableHttpMethodParameterOverride',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enables support for the _method request parameter to determine the intended HTTP method.
 *
 * Be warned that enabling this feature might lead to CSRF issues in your code.
 * Check that you are using CSRF tokens when required.
 * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
 * and used to send a "PUT" or "DELETE" request via the _method request parameter.
 * If these methods are not protected against CSRF, this presents a possible vulnerability.
 *
 * The HTTP method can only be overridden when the real HTTP method is POST.
 *
 * @return void
 */',
        'startLine' => 706,
        'endLine' => 709,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getHttpMethodParameterOverride' => 
      array (
        'name' => 'getHttpMethodParameterOverride',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether support for the _method request parameter is enabled.
 */',
        'startLine' => 714,
        'endLine' => 717,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 730,
            'endLine' => 730,
            'startColumn' => 25,
            'endColumn' => 35,
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
                'startLine' => 730,
                'endLine' => 730,
                'startTokenPos' => 3988,
                'startFilePos' => 23806,
                'endTokenPos' => 3988,
                'endFilePos' => 23809,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 730,
            'endLine' => 730,
            'startColumn' => 38,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a "parameter" value from any bag.
 *
 * This method is mainly useful for libraries that want to provide some flexibility. If you don\'t need the
 * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
 * public property instead (attributes, query, request).
 *
 * Order of precedence: PATH (routing placeholders or custom attributes), GET, POST
 *
 * @internal use explicit input sources instead
 */',
        'startLine' => 730,
        'endLine' => 745,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getSession' => 
      array (
        'name' => 'getSession',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the Session.
 *
 * @throws SessionNotFoundException When session is not set properly
 */',
        'startLine' => 752,
        'endLine' => 764,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'hasPreviousSession' => 
      array (
        'name' => 'hasPreviousSession',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the request contains a Session which was started in one of the
 * previous requests.
 */',
        'startLine' => 770,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'hasSession' => 
      array (
        'name' => 'hasSession',
        'parameters' => 
        array (
          'skipIfUninitialized' => 
          array (
            'name' => 'skipIfUninitialized',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 785,
                'endLine' => 785,
                'startTokenPos' => 4251,
                'startFilePos' => 25522,
                'endTokenPos' => 4251,
                'endFilePos' => 25526,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 785,
            'endLine' => 785,
            'startColumn' => 32,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the request contains a Session object.
 *
 * This method does not give any information about the state of the session object,
 * like whether the session is started or not. It is just a way to check if this Request
 * is associated with a Session instance.
 *
 * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
 */',
        'startLine' => 785,
        'endLine' => 788,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setSession' => 
      array (
        'name' => 'setSession',
        'parameters' => 
        array (
          'session' => 
          array (
            'name' => 'session',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 793,
            'endLine' => 793,
            'startColumn' => 32,
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
 * @return void
 */',
        'startLine' => 793,
        'endLine' => 796,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setSessionFactory' => 
      array (
        'name' => 'setSessionFactory',
        'parameters' => 
        array (
          'factory' => 
          array (
            'name' => 'factory',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 803,
            'endLine' => 803,
            'startColumn' => 39,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @internal
 *
 * @param callable(): SessionInterface $factory
 */',
        'startLine' => 803,
        'endLine' => 806,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getClientIps' => 
      array (
        'name' => 'getClientIps',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the client IP addresses.
 *
 * In the returned array the most trusted IP address is first, and the
 * least trusted one last. The "real" client IP address is the last one,
 * but this is also the least trusted one. Trusted proxies are stripped.
 *
 * Use this method carefully; you should use getClientIp() instead.
 *
 * @see getClientIp()
 */',
        'startLine' => 819,
        'endLine' => 828,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getClientIp' => 
      array (
        'name' => 'getClientIp',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the client IP address.
 *
 * This method can read the client IP address from the "X-Forwarded-For" header
 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
 * header value is a comma+space separated list of IP addresses, the left-most
 * being the original client, and each successive proxy that passed the request
 * adding the IP address where it received the request from.
 *
 * If your reverse proxy uses a different header name than "X-Forwarded-For",
 * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
 * argument of the Request::setTrustedProxies() method instead.
 *
 * @see getClientIps()
 * @see https://wikipedia.org/wiki/X-Forwarded-For
 */',
        'startLine' => 846,
        'endLine' => 851,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getScriptName' => 
      array (
        'name' => 'getScriptName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns current script name.
 */',
        'startLine' => 856,
        'endLine' => 859,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getPathInfo' => 
      array (
        'name' => 'getPathInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the path being requested relative to the executed script.
 *
 * The path info always starts with a /.
 *
 * Suppose this request is instantiated from /mysite on localhost:
 *
 *  * http://localhost/mysite              returns \'/\'
 *  * http://localhost/mysite/about        returns \'/about\'
 *  * http://localhost/mysite/enco%20ded   returns \'/enco%20ded\'
 *  * http://localhost/mysite/about?var=1  returns \'/about\'
 *
 * @return string The raw path (i.e. not urldecoded)
 */',
        'startLine' => 875,
        'endLine' => 878,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getBasePath' => 
      array (
        'name' => 'getBasePath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the root path from which this request is executed.
 *
 * Suppose that an index.php file instantiates this request object:
 *
 *  * http://localhost/index.php         returns an empty string
 *  * http://localhost/index.php/page    returns an empty string
 *  * http://localhost/web/index.php     returns \'/web\'
 *  * http://localhost/we%20b/index.php  returns \'/we%20b\'
 *
 * @return string The raw path (i.e. not urldecoded)
 */',
        'startLine' => 892,
        'endLine' => 895,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getBaseUrl' => 
      array (
        'name' => 'getBaseUrl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the root URL from which this request is executed.
 *
 * The base URL never ends with a /.
 *
 * This is similar to getBasePath(), except that it also includes the
 * script filename (e.g. index.php) if one exists.
 *
 * @return string The raw URL (i.e. not urldecoded)
 */',
        'startLine' => 907,
        'endLine' => 917,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getBaseUrlReal' => 
      array (
        'name' => 'getBaseUrlReal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the real base URL received by the webserver from which this request is executed.
 * The URL does not include trusted reverse proxy prefix.
 *
 * @return string The raw URL (i.e. not urldecoded)
 */',
        'startLine' => 925,
        'endLine' => 928,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getScheme' => 
      array (
        'name' => 'getScheme',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the request\'s scheme.
 */',
        'startLine' => 933,
        'endLine' => 936,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getPort' => 
      array (
        'name' => 'getPort',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              2 => 
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the port on which the request is made.
 *
 * This method can read the client port from the "X-Forwarded-Port" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Port" header must contain the client port.
 *
 * @return int|string|null Can be a string if fetched from the server bag
 */',
        'startLine' => 948,
        'endLine' => 969,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getUser' => 
      array (
        'name' => 'getUser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the user.
 */',
        'startLine' => 974,
        'endLine' => 977,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getPassword' => 
      array (
        'name' => 'getPassword',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the password.
 */',
        'startLine' => 982,
        'endLine' => 985,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getUserInfo' => 
      array (
        'name' => 'getUserInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the user info.
 *
 * @return string|null A user name if any and, optionally, scheme-specific information about how to gain authorization to access the server
 */',
        'startLine' => 992,
        'endLine' => 1002,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getHttpHost' => 
      array (
        'name' => 'getHttpHost',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the HTTP host being requested.
 *
 * The port name will be appended to the host if it\'s non-standard.
 */',
        'startLine' => 1009,
        'endLine' => 1019,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getRequestUri' => 
      array (
        'name' => 'getRequestUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the requested URI (path and query string).
 *
 * @return string The raw URI (i.e. not URI decoded)
 */',
        'startLine' => 1026,
        'endLine' => 1029,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getSchemeAndHttpHost' => 
      array (
        'name' => 'getSchemeAndHttpHost',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the scheme and HTTP host.
 *
 * If the URL was called with basic authentication, the user
 * and the password are not added to the generated string.
 */',
        'startLine' => 1037,
        'endLine' => 1040,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getUri' => 
      array (
        'name' => 'getUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates a normalized URI (URL) for the Request.
 *
 * @see getQueryString()
 */',
        'startLine' => 1047,
        'endLine' => 1054,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getUriForPath' => 
      array (
        'name' => 'getUriForPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates a normalized URI for the given path.
 *
 * @param string $path A path to use instead of the current one
 */',
        'startLine' => 1061,
        'endLine' => 1064,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getRelativeUriForPath' => 
      array (
        'name' => 'getRelativeUriForPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1081,
            'endLine' => 1081,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the path as relative reference from the current Request path.
 *
 * Only the URIs path component (no schema, host etc.) is relevant and must be given.
 * Both paths must be absolute and not contain relative parts.
 * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
 * Furthermore, they can be used to reduce the link size in documents.
 *
 * Example target paths, given a base path of "/a/b/c/d":
 * - "/a/b/c/d"     -> ""
 * - "/a/b/c/"      -> "./"
 * - "/a/b/"        -> "../"
 * - "/a/b/c/other" -> "other"
 * - "/a/x/y"       -> "../../x/y"
 */',
        'startLine' => 1081,
        'endLine' => 1115,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getQueryString' => 
      array (
        'name' => 'getQueryString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates the normalized query string for the Request.
 *
 * It builds a normalized query string, where keys/value pairs are alphabetized
 * and have consistent escaping.
 */',
        'startLine' => 1123,
        'endLine' => 1128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isSecure' => 
      array (
        'name' => 'isSecure',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the request is secure or not.
 *
 * This method can read the client protocol from the "X-Forwarded-Proto" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
 */',
        'startLine' => 1138,
        'endLine' => 1147,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getHost' => 
      array (
        'name' => 'getHost',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the host name.
 *
 * This method can read the client host name from the "X-Forwarded-Host" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Host" header must contain the client host name.
 *
 * @throws SuspiciousOperationException when the host name is invalid or not trusted
 */',
        'startLine' => 1159,
        'endLine' => 1207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setMethod' => 
      array (
        'name' => 'setMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1214,
            'endLine' => 1214,
            'startColumn' => 31,
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
 * Sets the request method.
 *
 * @return void
 */',
        'startLine' => 1214,
        'endLine' => 1218,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getMethod' => 
      array (
        'name' => 'getMethod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the request "intended" method.
 *
 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
 * then it is used to determine the "real" intended HTTP method.
 *
 * The _method request parameter can also be used to determine the HTTP method,
 * but only if enableHttpMethodParameterOverride() has been called.
 *
 * The method is always an uppercased string.
 *
 * @see getRealMethod()
 */',
        'startLine' => 1233,
        'endLine' => 1266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getRealMethod' => 
      array (
        'name' => 'getRealMethod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the "real" request method.
 *
 * @see getMethod()
 */',
        'startLine' => 1273,
        'endLine' => 1276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getMimeType' => 
      array (
        'name' => 'getMimeType',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1281,
            'endLine' => 1281,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the mime type associated with the format.
 */',
        'startLine' => 1281,
        'endLine' => 1288,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getMimeTypes' => 
      array (
        'name' => 'getMimeTypes',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1295,
            'endLine' => 1295,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the mime types associated with the format.
 *
 * @return string[]
 */',
        'startLine' => 1295,
        'endLine' => 1302,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getFormat' => 
      array (
        'name' => 'getFormat',
        'parameters' => 
        array (
          'mimeType' => 
          array (
            'name' => 'mimeType',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'startLine' => 1307,
            'endLine' => 1307,
            'startColumn' => 31,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the format associated with the mime type.
 */',
        'startLine' => 1307,
        'endLine' => 1335,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setFormat' => 
      array (
        'name' => 'setFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'startLine' => 1344,
            'endLine' => 1344,
            'startColumn' => 31,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'mimeTypes' => 
          array (
            'name' => 'mimeTypes',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
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
            'startLine' => 1344,
            'endLine' => 1344,
            'startColumn' => 48,
            'endColumn' => 70,
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
 * Associates a format with mime types.
 *
 * @param string|string[] $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
 *
 * @return void
 */',
        'startLine' => 1344,
        'endLine' => 1351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getRequestFormat' => 
      array (
        'name' => 'getRequestFormat',
        'parameters' => 
        array (
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => '\'html\'',
              'attributes' => 
              array (
                'startLine' => 1364,
                'endLine' => 1364,
                'startTokenPos' => 7018,
                'startFilePos' => 43597,
                'endTokenPos' => 7018,
                'endFilePos' => 43602,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'startLine' => 1364,
            'endLine' => 1364,
            'startColumn' => 38,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the request format.
 *
 * Here is the process to determine the format:
 *
 *  * format defined by the user (with setRequestFormat())
 *  * _format request attribute
 *  * $default
 *
 * @see getPreferredFormat
 */',
        'startLine' => 1364,
        'endLine' => 1369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setRequestFormat' => 
      array (
        'name' => 'setRequestFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'startLine' => 1376,
            'endLine' => 1376,
            'startColumn' => 38,
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
 * Sets the request format.
 *
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
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getContentType' => 
      array (
        'name' => 'getContentType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the usual name of the format associated with the request\'s media type (provided in the Content-Type header).
 *
 * @deprecated since Symfony 6.2, use getContentTypeFormat() instead
 */',
        'startLine' => 1386,
        'endLine' => 1391,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getContentTypeFormat' => 
      array (
        'name' => 'getContentTypeFormat',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the usual name of the format associated with the request\'s media type (provided in the Content-Type header).
 *
 * @see Request::$formats
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
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setDefaultLocale' => 
      array (
        'name' => 'setDefaultLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1408,
            'endLine' => 1408,
            'startColumn' => 38,
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
 * Sets the default locale.
 *
 * @return void
 */',
        'startLine' => 1408,
        'endLine' => 1415,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getDefaultLocale' => 
      array (
        'name' => 'getDefaultLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default locale.
 */',
        'startLine' => 1420,
        'endLine' => 1423,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setLocale' => 
      array (
        'name' => 'setLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1430,
            'endLine' => 1430,
            'startColumn' => 31,
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
 * Sets the locale.
 *
 * @return void
 */',
        'startLine' => 1430,
        'endLine' => 1433,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getLocale' => 
      array (
        'name' => 'getLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the locale.
 */',
        'startLine' => 1438,
        'endLine' => 1441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isMethod' => 
      array (
        'name' => 'isMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1448,
            'endLine' => 1448,
            'startColumn' => 30,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the request method is of specified type.
 *
 * @param string $method Uppercase request method (GET, POST etc)
 */',
        'startLine' => 1448,
        'endLine' => 1451,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isMethodSafe' => 
      array (
        'name' => 'isMethodSafe',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether or not the method is safe.
 *
 * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
 */',
        'startLine' => 1458,
        'endLine' => 1461,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isMethodIdempotent' => 
      array (
        'name' => 'isMethodIdempotent',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether or not the method is idempotent.
 */',
        'startLine' => 1466,
        'endLine' => 1469,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isMethodCacheable' => 
      array (
        'name' => 'isMethodCacheable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the method is cacheable or not.
 *
 * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
 */',
        'startLine' => 1476,
        'endLine' => 1479,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getProtocolVersion' => 
      array (
        'name' => 'getProtocolVersion',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the protocol version.
 *
 * If the application is behind a proxy, the protocol version used in the
 * requests between the client and the proxy and between the proxy and the
 * server might be different. This returns the former (from the "Via" header)
 * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
 * the latter (from the "SERVER_PROTOCOL" server parameter).
 */',
        'startLine' => 1490,
        'endLine' => 1501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getContent' => 
      array (
        'name' => 'getContent',
        'parameters' => 
        array (
          'asResource' => 
          array (
            'name' => 'asResource',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1512,
                'endLine' => 1512,
                'startTokenPos' => 7567,
                'startFilePos' => 47585,
                'endTokenPos' => 7567,
                'endFilePos' => 47589,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1512,
            'endLine' => 1512,
            'startColumn' => 32,
            'endColumn' => 55,
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
 * Returns the request body content.
 *
 * @param bool $asResource If true, a resource will be returned
 *
 * @return string|resource
 *
 * @psalm-return ($asResource is true ? resource : string)
 */',
        'startLine' => 1512,
        'endLine' => 1548,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getPayload' => 
      array (
        'name' => 'getPayload',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\HttpFoundation\\InputBag',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the decoded form or json request body.
 *
 * @throws JsonException When the body cannot be decoded to an array
 */',
        'startLine' => 1555,
        'endLine' => 1576,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the request body decoded as array, typically from a JSON payload.
 *
 * @see getPayload() for portability between content types
 *
 * @throws JsonException When the body cannot be decoded to an array
 */',
        'startLine' => 1585,
        'endLine' => 1602,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getETags' => 
      array (
        'name' => 'getETags',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the Etags.
 */',
        'startLine' => 1607,
        'endLine' => 1610,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isNoCache' => 
      array (
        'name' => 'isNoCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1612,
        'endLine' => 1615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getPreferredFormat' => 
      array (
        'name' => 'getPreferredFormat',
        'parameters' => 
        array (
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => '\'html\'',
              'attributes' => 
              array (
                'startLine' => 1625,
                'endLine' => 1625,
                'startTokenPos' => 8199,
                'startFilePos' => 51115,
                'endTokenPos' => 8199,
                'endFilePos' => 51120,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'startLine' => 1625,
            'endLine' => 1625,
            'startColumn' => 40,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the preferred format for the response by inspecting, in the following order:
 *   * the request format set using setRequestFormat;
 *   * the values of the Accept HTTP header.
 *
 * Note that if you use this method, you should send the "Vary: Accept" header
 * in the response to prevent any issues with intermediary HTTP caches.
 */',
        'startLine' => 1625,
        'endLine' => 1638,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getPreferredLanguage' => 
      array (
        'name' => 'getPreferredLanguage',
        'parameters' => 
        array (
          'locales' => 
          array (
            'name' => 'locales',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1645,
                'endLine' => 1645,
                'startTokenPos' => 8304,
                'startFilePos' => 51699,
                'endTokenPos' => 8304,
                'endFilePos' => 51702,
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
                      'name' => 'array',
                      'isIdentifier' => true,
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
            'startLine' => 1645,
            'endLine' => 1645,
            'startColumn' => 42,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the preferred language.
 *
 * @param string[] $locales An array of ordered available locales
 */',
        'startLine' => 1645,
        'endLine' => 1671,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getLanguages' => 
      array (
        'name' => 'getLanguages',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
 *
 * @return string[]
 */',
        'startLine' => 1678,
        'endLine' => 1712,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getCharsets' => 
      array (
        'name' => 'getCharsets',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of charsets acceptable by the client browser in preferable order.
 *
 * @return string[]
 */',
        'startLine' => 1719,
        'endLine' => 1722,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getEncodings' => 
      array (
        'name' => 'getEncodings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of encodings acceptable by the client browser in preferable order.
 *
 * @return string[]
 */',
        'startLine' => 1729,
        'endLine' => 1732,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getAcceptableContentTypes' => 
      array (
        'name' => 'getAcceptableContentTypes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of content types acceptable by the client browser in preferable order.
 *
 * @return string[]
 */',
        'startLine' => 1739,
        'endLine' => 1742,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isXmlHttpRequest' => 
      array (
        'name' => 'isXmlHttpRequest',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the request is an XMLHttpRequest.
 *
 * It works if your JavaScript library sets an X-Requested-With HTTP header.
 * It is known to work with common JavaScript frameworks:
 *
 * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
 */',
        'startLine' => 1752,
        'endLine' => 1755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'preferSafeContent' => 
      array (
        'name' => 'preferSafeContent',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the client browser prefers safe content or not according to RFC8674.
 *
 * @see https://tools.ietf.org/html/rfc8674
 */',
        'startLine' => 1762,
        'endLine' => 1774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'prepareRequestUri' => 
      array (
        'name' => 'prepareRequestUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return string
 */',
        'startLine' => 1787,
        'endLine' => 1829,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'prepareBaseUrl' => 
      array (
        'name' => 'prepareBaseUrl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares the base URL.
 */',
        'startLine' => 1834,
        'endLine' => 1896,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'prepareBasePath' => 
      array (
        'name' => 'prepareBasePath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares the base path.
 */',
        'startLine' => 1901,
        'endLine' => 1920,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'preparePathInfo' => 
      array (
        'name' => 'preparePathInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares the path info.
 */',
        'startLine' => 1925,
        'endLine' => 1949,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'initializeFormats' => 
      array (
        'name' => 'initializeFormats',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes HTTP request formats.
 *
 * @return void
 */',
        'startLine' => 1956,
        'endLine' => 1971,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'setPhpDefaultLocale' => 
      array (
        'name' => 'setPhpDefaultLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1973,
            'endLine' => 1973,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1973,
        'endLine' => 1984,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getUrlencodedPrefix' => 
      array (
        'name' => 'getUrlencodedPrefix',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1990,
            'endLine' => 1990,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1990,
            'endLine' => 1990,
            'startColumn' => 58,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the prefix as encoded in the string when the string starts with
 * the given prefix, null otherwise.
 */',
        'startLine' => 1990,
        'endLine' => 2009,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'createRequestFromFactory' => 
      array (
        'name' => 'createRequestFromFactory',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2011,
                'endLine' => 2011,
                'startTokenPos' => 10803,
                'startFilePos' => 64587,
                'endTokenPos' => 10804,
                'endFilePos' => 64588,
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
            'startLine' => 2011,
            'endLine' => 2011,
            'startColumn' => 54,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2011,
                'endLine' => 2011,
                'startTokenPos' => 10813,
                'startFilePos' => 64608,
                'endTokenPos' => 10814,
                'endFilePos' => 64609,
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
            'startLine' => 2011,
            'endLine' => 2011,
            'startColumn' => 73,
            'endColumn' => 91,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2011,
                'endLine' => 2011,
                'startTokenPos' => 10823,
                'startFilePos' => 64632,
                'endTokenPos' => 10824,
                'endFilePos' => 64633,
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
            'startLine' => 2011,
            'endLine' => 2011,
            'startColumn' => 94,
            'endColumn' => 115,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cookies' => 
          array (
            'name' => 'cookies',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2011,
                'endLine' => 2011,
                'startTokenPos' => 10833,
                'startFilePos' => 64653,
                'endTokenPos' => 10834,
                'endFilePos' => 64654,
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
            'startLine' => 2011,
            'endLine' => 2011,
            'startColumn' => 118,
            'endColumn' => 136,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'files' => 
          array (
            'name' => 'files',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2011,
                'endLine' => 2011,
                'startTokenPos' => 10843,
                'startFilePos' => 64672,
                'endTokenPos' => 10844,
                'endFilePos' => 64673,
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
            'startLine' => 2011,
            'endLine' => 2011,
            'startColumn' => 139,
            'endColumn' => 155,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'server' => 
          array (
            'name' => 'server',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2011,
                'endLine' => 2011,
                'startTokenPos' => 10853,
                'startFilePos' => 64692,
                'endTokenPos' => 10854,
                'endFilePos' => 64693,
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
            'startLine' => 2011,
            'endLine' => 2011,
            'startColumn' => 158,
            'endColumn' => 175,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'content' => 
          array (
            'name' => 'content',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2011,
                'endLine' => 2011,
                'startTokenPos' => 10861,
                'startFilePos' => 64707,
                'endTokenPos' => 10861,
                'endFilePos' => 64710,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2011,
            'endLine' => 2011,
            'startColumn' => 178,
            'endColumn' => 192,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2011,
        'endLine' => 2024,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isFromTrustedProxy' => 
      array (
        'name' => 'isFromTrustedProxy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether this request originated from a trusted proxy.
 *
 * This can be useful to determine whether or not to trust the
 * contents of a proxy-specific header.
 */',
        'startLine' => 2032,
        'endLine' => 2035,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'getTrustedValues' => 
      array (
        'name' => 'getTrustedValues',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2042,
            'endLine' => 2042,
            'startColumn' => 39,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ip' => 
          array (
            'name' => 'ip',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2042,
                'endLine' => 2042,
                'startTokenPos' => 11041,
                'startFilePos' => 65939,
                'endTokenPos' => 11041,
                'endFilePos' => 65942,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'startLine' => 2042,
            'endLine' => 2042,
            'startColumn' => 50,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This method is rather heavy because it splits and merges headers, and it\'s called by many other methods such as
 * getPort(), isSecure(), getHost(), getClientIps(), getBaseUrl() etc. Thus, we try to cache the results for
 * best performance.
 */',
        'startLine' => 2042,
        'endLine' => 2097,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'normalizeAndFilterClientIps' => 
      array (
        'name' => 'normalizeAndFilterClientIps',
        'parameters' => 
        array (
          'clientIps' => 
          array (
            'name' => 'clientIps',
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
            'startLine' => 2099,
            'endLine' => 2099,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ip' => 
          array (
            'name' => 'ip',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2099,
            'endLine' => 2099,
            'startColumn' => 68,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2099,
        'endLine' => 2137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isIisRewrite' => 
      array (
        'name' => 'isIisRewrite',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Is this IIS with UrlRewriteModule?
 *
 * This method consumes, caches and removed the IIS_WasUrlRewritten env var,
 * so we don\'t inherit it to sub-requests.
 */',
        'startLine' => 2145,
        'endLine' => 2153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'aliasName' => NULL,
      ),
      'isHostValid' => 
      array (
        'name' => 'isHostValid',
        'parameters' => 
        array (
          'host' => 
          array (
            'name' => 'host',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2158,
            'endLine' => 2158,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * See https://url.spec.whatwg.org/.
 */',
        'startLine' => 2158,
        'endLine' => 2170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
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