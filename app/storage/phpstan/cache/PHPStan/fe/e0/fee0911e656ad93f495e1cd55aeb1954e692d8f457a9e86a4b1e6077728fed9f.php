<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/ReportableHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Exceptions\ReportableHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-d0bb6f371000c9ca66d7e61b9832f26363a053adbf0a5a3a87da5ab98357c5c9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/ReportableHandler.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Exceptions',
    'name' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
    'shortName' => 'ReportableHandler',
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
    'endLine' => 82,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'callback' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'name' => 'callback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The underlying callback.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'shouldStop' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'name' => 'shouldStop',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 43,
            'startFilePos' => 410,
            'endTokenPos' => 43,
            'endFilePos' => 414,
          ),
        ),
        'docComment' => '/**
 * Indicates if reporting should stop after invoking this handler.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
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
          'callback' => 
          array (
            'name' => 'callback',
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
            'startLine' => 32,
            'endLine' => 32,
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
 * Create a new reportable handler instance.
 *
 * @param  callable  $callback
 * @return void
 */',
        'startLine' => 32,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'aliasName' => NULL,
      ),
      '__invoke' => 
      array (
        'name' => '__invoke',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 30,
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
 * Invoke the handler.
 *
 * @param  \\Throwable  $e
 * @return bool
 */',
        'startLine' => 43,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'aliasName' => NULL,
      ),
      'handles' => 
      array (
        'name' => 'handles',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 29,
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
 * Determine if the callback handles the given exception.
 *
 * @param  \\Throwable  $e
 * @return bool
 */',
        'startLine' => 60,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'aliasName' => NULL,
      ),
      'stop' => 
      array (
        'name' => 'stop',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that report handling should stop after invoking this callback.
 *
 * @return $this
 */',
        'startLine' => 76,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\ReportableHandler',
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