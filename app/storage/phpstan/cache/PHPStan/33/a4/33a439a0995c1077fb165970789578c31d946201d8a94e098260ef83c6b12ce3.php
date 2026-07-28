<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/http-foundation/JsonResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpFoundation\JsonResponse
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5c32537498f82550c0c10032181766b5ab35df71c043354a55d43cd34f22edef-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/http-foundation/JsonResponse.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\HttpFoundation',
    'name' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
    'shortName' => 'JsonResponse',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Response represents an HTTP response in JSON format.
 *
 * Note that this class does not force the returned JSON content to be an
 * object. It is however recommended that you do return an object as it
 * protects yourself against XSSI and JSON-JavaScript Hijacking.
 *
 * @see https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/AJAX_Security_Cheat_Sheet.md#always-return-json-with-an-object-on-the-outside
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 190,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Symfony\\Component\\HttpFoundation\\Response',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'DEFAULT_ENCODING_OPTIONS' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'name' => 'DEFAULT_ENCODING_OPTIONS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '15',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 43,
            'startFilePos' => 1066,
            'endTokenPos' => 43,
            'endFilePos' => 1067,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 47,
      ),
    ),
    'immediateProperties' => 
    array (
      'data' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'name' => 'data',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'callback' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'name' => 'callback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'encodingOptions' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'name' => 'encodingOptions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'self::DEFAULT_ENCODING_OPTIONS',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 52,
            'startFilePos' => 1104,
            'endTokenPos' => 54,
            'endFilePos' => 1133,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 64,
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
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 71,
                'startFilePos' => 1261,
                'endTokenPos' => 71,
                'endFilePos' => 1264,
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
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
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 80,
                'startFilePos' => 1281,
                'endTokenPos' => 80,
                'endFilePos' => 1283,
              ),
            ),
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 53,
            'endColumn' => 69,
            'parameterIndex' => 1,
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
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 89,
                'startFilePos' => 1303,
                'endTokenPos' => 90,
                'endFilePos' => 1304,
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 72,
            'endColumn' => 90,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'json' => 
          array (
            'name' => 'json',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 99,
                'startFilePos' => 1320,
                'endTokenPos' => 99,
                'endFilePos' => 1324,
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 93,
            'endColumn' => 110,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param bool $json If the data is already a JSON string
 */',
        'startLine' => 39,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'aliasName' => NULL,
      ),
      'fromJsonString' => 
      array (
        'name' => 'fromJsonString',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'status' => 
          array (
            'name' => 'status',
            'default' => 
            array (
              'code' => '200',
              'attributes' => 
              array (
                'startLine' => 64,
                'endLine' => 64,
                'startTokenPos' => 234,
                'startFilePos' => 2265,
                'endTokenPos' => 234,
                'endFilePos' => 2267,
              ),
            ),
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
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 57,
            'endColumn' => 73,
            'parameterIndex' => 1,
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
                'startLine' => 64,
                'endLine' => 64,
                'startTokenPos' => 243,
                'startFilePos' => 2287,
                'endTokenPos' => 244,
                'endFilePos' => 2288,
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
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 76,
            'endColumn' => 94,
            'parameterIndex' => 2,
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
 * Factory method for chainability.
 *
 * Example:
 *
 *     return JsonResponse::fromJsonString(\'{"key": "value"}\')
 *         ->setSharedMaxAge(300);
 *
 * @param string $data    The JSON response string
 * @param int    $status  The response status code (200 "OK" by default)
 * @param array  $headers An array of response headers
 */',
        'startLine' => 64,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'aliasName' => NULL,
      ),
      'setCallback' => 
      array (
        'name' => 'setCallback',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 78,
                'endLine' => 78,
                'startTokenPos' => 288,
                'startFilePos' => 2665,
                'endTokenPos' => 288,
                'endFilePos' => 2668,
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
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 33,
            'endColumn' => 56,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the JSONP callback.
 *
 * @param string|null $callback The JSONP callback or null to use none
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException When the callback name is not valid
 */',
        'startLine' => 78,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'aliasName' => NULL,
      ),
      'setJson' => 
      array (
        'name' => 'setJson',
        'parameters' => 
        array (
          'json' => 
          array (
            'name' => 'json',
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
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 29,
            'endColumn' => 40,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets a raw string containing a JSON document to be sent.
 *
 * @return $this
 */',
        'startLine' => 112,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'aliasName' => NULL,
      ),
      'setData' => 
      array (
        'name' => 'setData',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 126,
                'endLine' => 126,
                'startTokenPos' => 639,
                'startFilePos' => 4810,
                'endTokenPos' => 640,
                'endFilePos' => 4811,
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
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 29,
            'endColumn' => 44,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the data to be sent as JSON.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 126,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'aliasName' => NULL,
      ),
      'getEncodingOptions' => 
      array (
        'name' => 'getEncodingOptions',
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
 * Returns options used while encoding data to JSON.
 */',
        'startLine' => 151,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'aliasName' => NULL,
      ),
      'setEncodingOptions' => 
      array (
        'name' => 'setEncodingOptions',
        'parameters' => 
        array (
          'encodingOptions' => 
          array (
            'name' => 'encodingOptions',
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 40,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets options used while encoding data to JSON.
 *
 * @return $this
 */',
        'startLine' => 161,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
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
 * Updates the content and headers according to the JSON data and callback.
 *
 * @return $this
 */',
        'startLine' => 173,
        'endLine' => 189,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
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