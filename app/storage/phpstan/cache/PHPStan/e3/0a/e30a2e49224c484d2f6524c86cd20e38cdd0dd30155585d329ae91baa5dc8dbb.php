<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/Concerns/InteractsWithContentTypes.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Concerns\InteractsWithContentTypes
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d7d61bc8395d877a181e0b42117bba14ee269ac30c2e16b5a118b999fb07f8f5-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Http/Concerns/InteractsWithContentTypes.php',
      ),
    ),
    'namespace' => 'Illuminate\\Http\\Concerns',
    'name' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
    'shortName' => 'InteractsWithContentTypes',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 179,
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
    ),
    'immediateMethods' => 
    array (
      'isJson' => 
      array (
        'name' => 'isJson',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the request is sending JSON.
 *
 * @return bool
 */',
        'startLine' => 14,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'expectsJson' => 
      array (
        'name' => 'expectsJson',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the current request probably expects a JSON response.
 *
 * @return bool
 */',
        'startLine' => 24,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'wantsJson' => 
      array (
        'name' => 'wantsJson',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the current request is asking for JSON.
 *
 * @return bool
 */',
        'startLine' => 34,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'accepts' => 
      array (
        'name' => 'accepts',
        'parameters' => 
        array (
          'contentTypes' => 
          array (
            'name' => 'contentTypes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 29,
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
 * Determines whether the current requests accepts a given content type.
 *
 * @param  string|array  $contentTypes
 * @return bool
 */',
        'startLine' => 47,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'prefers' => 
      array (
        'name' => 'prefers',
        'parameters' => 
        array (
          'contentTypes' => 
          array (
            'name' => 'contentTypes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 29,
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
 * Return the most suitable content type from the given array based on content negotiation.
 *
 * @param  string|array  $contentTypes
 * @return string|null
 */',
        'startLine' => 82,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'acceptsAnyContentType' => 
      array (
        'name' => 'acceptsAnyContentType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the current request accepts any content type.
 *
 * @return bool
 */',
        'startLine' => 116,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'acceptsJson' => 
      array (
        'name' => 'acceptsJson',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines whether a request accepts JSON.
 *
 * @return bool
 */',
        'startLine' => 130,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'acceptsHtml' => 
      array (
        'name' => 'acceptsHtml',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines whether a request accepts HTML.
 *
 * @return bool
 */',
        'startLine' => 140,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'matchesType' => 
      array (
        'name' => 'matchesType',
        'parameters' => 
        array (
          'actual' => 
          array (
            'name' => 'actual',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 152,
            'endLine' => 152,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 152,
            'endLine' => 152,
            'startColumn' => 49,
            'endColumn' => 53,
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
 * Determine if the given content types match.
 *
 * @param  string  $actual
 * @param  string  $type
 * @return bool
 */',
        'startLine' => 152,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'aliasName' => NULL,
      ),
      'format' => 
      array (
        'name' => 'format',
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
                'startLine' => 169,
                'endLine' => 169,
                'startTokenPos' => 768,
                'startFilePos' => 4134,
                'endTokenPos' => 768,
                'endFilePos' => 4139,
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
            'startColumn' => 28,
            'endColumn' => 44,
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
 * Get the data format expected in the response.
 *
 * @param  string  $default
 * @return string
 */',
        'startLine' => 169,
        'endLine' => 178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Concerns',
        'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
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