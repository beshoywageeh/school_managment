<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/JsonResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\JsonResponse
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3aea3897cfd8f0563ac9a9ed7bbe40bdad22af21818fadb3b04e6a155bb32296-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Http\\JsonResponse',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/JsonResponse.php',
      ),
    ),
    'namespace' => 'Illuminate\\Http',
    'name' => 'Illuminate\\Http\\JsonResponse',
    'shortName' => 'JsonResponse',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 136,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Http\\ResponseTrait',
      1 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
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
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 83,
                'startFilePos' => 685,
                'endTokenPos' => 83,
                'endFilePos' => 688,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 33,
            'endColumn' => 44,
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
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 90,
                'startFilePos' => 701,
                'endTokenPos' => 90,
                'endFilePos' => 703,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 47,
            'endColumn' => 59,
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
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 97,
                'startFilePos' => 717,
                'endTokenPos' => 98,
                'endFilePos' => 718,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 62,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 105,
                'startFilePos' => 732,
                'endTokenPos' => 105,
                'endFilePos' => 732,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 77,
            'endColumn' => 88,
            'parameterIndex' => 3,
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
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 112,
                'startFilePos' => 743,
                'endTokenPos' => 112,
                'endFilePos' => 747,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 91,
            'endColumn' => 103,
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
 * Create a new JSON response instance.
 *
 * @param  mixed  $data
 * @param  int  $status
 * @param  array  $headers
 * @param  int  $options
 * @param  bool  $json
 * @return void
 */',
        'startLine' => 28,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
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
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 162,
                'startFilePos' => 993,
                'endTokenPos' => 162,
                'endFilePos' => 996,
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
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 43,
            'endColumn' => 62,
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
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 171,
                'startFilePos' => 1013,
                'endTokenPos' => 171,
                'endFilePos' => 1015,
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
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 65,
            'endColumn' => 81,
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
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 180,
                'startFilePos' => 1035,
                'endTokenPos' => 181,
                'endFilePos' => 1036,
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
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 84,
            'endColumn' => 102,
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
 * {@inheritdoc}
 *
 * @return static
 */',
        'startLine' => 40,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
        'aliasName' => NULL,
      ),
      'withCallback' => 
      array (
        'name' => 'withCallback',
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
                'startLine' => 51,
                'endLine' => 51,
                'startTokenPos' => 225,
                'startFilePos' => 1281,
                'endTokenPos' => 225,
                'endFilePos' => 1284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 34,
            'endColumn' => 49,
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
 * Sets the JSONP callback.
 *
 * @param  string|null  $callback
 * @return $this
 */',
        'startLine' => 51,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
        'aliasName' => NULL,
      ),
      'getData' => 
      array (
        'name' => 'getData',
        'parameters' => 
        array (
          'assoc' => 
          array (
            'name' => 'assoc',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 254,
                'startFilePos' => 1534,
                'endTokenPos' => 254,
                'endFilePos' => 1538,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 29,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'depth' => 
          array (
            'name' => 'depth',
            'default' => 
            array (
              'code' => '512',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 261,
                'startFilePos' => 1550,
                'endTokenPos' => 261,
                'endFilePos' => 1552,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 45,
            'endColumn' => 56,
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
 * Get the json_decoded data from the response.
 *
 * @param  bool  $assoc
 * @param  int  $depth
 * @return mixed
 */',
        'startLine' => 63,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
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
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 296,
                'startFilePos' => 1727,
                'endTokenPos' => 297,
                'endFilePos' => 1728,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 29,
            'endColumn' => 38,
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
 * {@inheritdoc}
 *
 * @return static
 */',
        'startLine' => 73,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
        'aliasName' => NULL,
      ),
      'hasValidJson' => 
      array (
        'name' => 'hasValidJson',
        'parameters' => 
        array (
          'jsonError' => 
          array (
            'name' => 'jsonError',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 37,
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
 * Determine if an error occurred during JSON encoding.
 *
 * @param  int  $jsonError
 * @return bool
 */',
        'startLine' => 100,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
        'aliasName' => NULL,
      ),
      'setEncodingOptions' => 
      array (
        'name' => 'setEncodingOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 40,
            'endColumn' => 47,
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
 * {@inheritdoc}
 *
 * @return static
 */',
        'startLine' => 119,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
        'aliasName' => NULL,
      ),
      'hasEncodingOption' => 
      array (
        'name' => 'hasEncodingOption',
        'parameters' => 
        array (
          'option' => 
          array (
            'name' => 'option',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 39,
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
 * Determine if a JSON encoding option is set.
 *
 * @param  int  $option
 * @return bool
 */',
        'startLine' => 132,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http',
        'declaringClassName' => 'Illuminate\\Http\\JsonResponse',
        'implementingClassName' => 'Illuminate\\Http\\JsonResponse',
        'currentClassName' => 'Illuminate\\Http\\JsonResponse',
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