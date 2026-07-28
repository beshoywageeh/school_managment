<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Filesystem/Filesystem.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Filesystem\Filesystem
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d81a2a8519a239772bb29a09324da09da02767d74ca5f3aa626a767eea519e8a-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Filesystem/Filesystem.php',
      ),
    ),
    'namespace' => 'Illuminate\\Contracts\\Filesystem',
    'name' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
    'shortName' => 'Filesystem',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 5,
    'endLine' => 191,
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
      'VISIBILITY_PUBLIC' => 
      array (
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'name' => 'VISIBILITY_PUBLIC',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'public\'',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 12,
            'startTokenPos' => 21,
            'startFilePos' => 184,
            'endTokenPos' => 21,
            'endFilePos' => 191,
          ),
        ),
        'docComment' => '/**
 * The public visibility setting.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'VISIBILITY_PRIVATE' => 
      array (
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'name' => 'VISIBILITY_PRIVATE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'private\'',
          'attributes' => 
          array (
            'startLine' => 19,
            'endLine' => 19,
            'startTokenPos' => 32,
            'startFilePos' => 307,
            'endTokenPos' => 32,
            'endFilePos' => 315,
          ),
        ),
        'docComment' => '/**
 * The private visibility setting.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 28,
            'endColumn' => 32,
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
 * Determine if a file exists.
 *
 * @param  string  $path
 * @return bool
 */',
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
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
 * Get the contents of a file.
 *
 * @param  string  $path
 * @return string|null
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'readStream' => 
      array (
        'name' => 'readStream',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 32,
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
 * Get a resource to read the file.
 *
 * @param  string  $path
 * @return resource|null The path resource or null on failure.
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'put' => 
      array (
        'name' => 'put',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'contents' => 
          array (
            'name' => 'contents',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 32,
            'endColumn' => 40,
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
                'startLine' => 53,
                'endLine' => 53,
                'startTokenPos' => 89,
                'startFilePos' => 1129,
                'endTokenPos' => 90,
                'endFilePos' => 1130,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 43,
            'endColumn' => 55,
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
 * Write the contents of a file.
 *
 * @param  string  $path
 * @param  \\Psr\\Http\\Message\\StreamInterface|\\Illuminate\\Http\\File|\\Illuminate\\Http\\UploadedFile|string|resource  $contents
 * @param  mixed  $options
 * @return bool
 */',
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'writeStream' => 
      array (
        'name' => 'writeStream',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'resource' => 
          array (
            'name' => 'resource',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 40,
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
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 114,
                'startFilePos' => 1380,
                'endTokenPos' => 115,
                'endFilePos' => 1381,
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
            'startLine' => 63,
            'endLine' => 63,
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
 * Write a new file using a stream.
 *
 * @param  string  $path
 * @param  resource  $resource
 * @param  array  $options
 * @return bool
 */',
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'getVisibility' => 
      array (
        'name' => 'getVisibility',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
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
 * Get the visibility for the given path.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'setVisibility' => 
      array (
        'name' => 'setVisibility',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 35,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'visibility' => 
          array (
            'name' => 'visibility',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 42,
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
 * Set the visibility for the given path.
 *
 * @param  string  $path
 * @param  string  $visibility
 * @return bool
 */',
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'prepend' => 
      array (
        'name' => 'prepend',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 36,
            'endColumn' => 40,
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
 * Prepend to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @return bool
 */',
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'append' => 
      array (
        'name' => 'append',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 98,
            'endLine' => 98,
            'startColumn' => 28,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 98,
            'endLine' => 98,
            'startColumn' => 35,
            'endColumn' => 39,
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
 * Append to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @return bool
 */',
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'paths' => 
          array (
            'name' => 'paths',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 28,
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
 * Delete the file at a given path.
 *
 * @param  string|array  $paths
 * @return bool
 */',
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'copy' => 
      array (
        'name' => 'copy',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 26,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 33,
            'endColumn' => 35,
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
 * Copy a file to a new location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return bool
 */',
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'move' => 
      array (
        'name' => 'move',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 124,
            'endLine' => 124,
            'startColumn' => 26,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 124,
            'endLine' => 124,
            'startColumn' => 33,
            'endColumn' => 35,
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
 * Move a file to a new location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return bool
 */',
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'size' => 
      array (
        'name' => 'size',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
            'startColumn' => 26,
            'endColumn' => 30,
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
 * Get the file size of a given file.
 *
 * @param  string  $path
 * @return int
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'lastModified' => 
      array (
        'name' => 'lastModified',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 34,
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
 * Get the file\'s last modification time.
 *
 * @param  string  $path
 * @return int
 */',
        'startLine' => 140,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'files' => 
      array (
        'name' => 'files',
        'parameters' => 
        array (
          'directory' => 
          array (
            'name' => 'directory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 254,
                'startFilePos' => 3115,
                'endTokenPos' => 254,
                'endFilePos' => 3118,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 27,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'recursive' => 
          array (
            'name' => 'recursive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 261,
                'startFilePos' => 3134,
                'endTokenPos' => 261,
                'endFilePos' => 3138,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 46,
            'endColumn' => 63,
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
 * Get an array of all files in a directory.
 *
 * @param  string|null  $directory
 * @param  bool  $recursive
 * @return array
 */',
        'startLine' => 149,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'allFiles' => 
      array (
        'name' => 'allFiles',
        'parameters' => 
        array (
          'directory' => 
          array (
            'name' => 'directory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 157,
                'endLine' => 157,
                'startTokenPos' => 277,
                'startFilePos' => 3334,
                'endTokenPos' => 277,
                'endFilePos' => 3337,
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
            'startColumn' => 30,
            'endColumn' => 46,
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
 * Get all of the files from the given directory (recursive).
 *
 * @param  string|null  $directory
 * @return array
 */',
        'startLine' => 157,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'directories' => 
      array (
        'name' => 'directories',
        'parameters' => 
        array (
          'directory' => 
          array (
            'name' => 'directory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 166,
                'endLine' => 166,
                'startTokenPos' => 293,
                'startFilePos' => 3562,
                'endTokenPos' => 293,
                'endFilePos' => 3565,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'recursive' => 
          array (
            'name' => 'recursive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 166,
                'endLine' => 166,
                'startTokenPos' => 300,
                'startFilePos' => 3581,
                'endTokenPos' => 300,
                'endFilePos' => 3585,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 52,
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
 * Get all of the directories within a given directory.
 *
 * @param  string|null  $directory
 * @param  bool  $recursive
 * @return array
 */',
        'startLine' => 166,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'allDirectories' => 
      array (
        'name' => 'allDirectories',
        'parameters' => 
        array (
          'directory' => 
          array (
            'name' => 'directory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 174,
                'endLine' => 174,
                'startTokenPos' => 316,
                'startFilePos' => 3793,
                'endTokenPos' => 316,
                'endFilePos' => 3796,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 174,
            'endLine' => 174,
            'startColumn' => 36,
            'endColumn' => 52,
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
 * Get all (recursive) of the directories within a given directory.
 *
 * @param  string|null  $directory
 * @return array
 */',
        'startLine' => 174,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'makeDirectory' => 
      array (
        'name' => 'makeDirectory',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
 * Create a directory.
 *
 * @param  string  $path
 * @return bool
 */',
        'startLine' => 182,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'aliasName' => NULL,
      ),
      'deleteDirectory' => 
      array (
        'name' => 'deleteDirectory',
        'parameters' => 
        array (
          'directory' => 
          array (
            'name' => 'directory',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
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
 * Recursively delete a directory.
 *
 * @param  string  $directory
 * @return bool
 */',
        'startLine' => 190,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Filesystem',
        'declaringClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'implementingClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
        'currentClassName' => 'Illuminate\\Contracts\\Filesystem\\Filesystem',
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