<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithExceptionHandling.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-1be3b52eb3d42635c59a8201dfd0c74f1a75c03c7b4552f2ac69a75b73198956',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithExceptionHandling.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
    'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
    'shortName' => 'InteractsWithExceptionHandling',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 194,
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
      'originalExceptionHandler' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'name' => 'originalExceptionHandler',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The original exception handler.
 *
 * @var \\Illuminate\\Contracts\\Debug\\ExceptionHandler|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 40,
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
      'withExceptionHandling' => 
      array (
        'name' => 'withExceptionHandling',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Restore exception handling.
 *
 * @return $this
 */',
        'startLine' => 27,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'aliasName' => NULL,
      ),
      'handleExceptions' => 
      array (
        'name' => 'handleExceptions',
        'parameters' => 
        array (
          'exceptions' => 
          array (
            'name' => 'exceptions',
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
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 41,
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
 * Only handle the given exceptions via the exception handler.
 *
 * @param  array  $exceptions
 * @return $this
 */',
        'startLine' => 42,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'aliasName' => NULL,
      ),
      'handleValidationExceptions' => 
      array (
        'name' => 'handleValidationExceptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Only handle validation exceptions via the exception handler.
 *
 * @return $this
 */',
        'startLine' => 52,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'aliasName' => NULL,
      ),
      'withoutExceptionHandling' => 
      array (
        'name' => 'withoutExceptionHandling',
        'parameters' => 
        array (
          'except' => 
          array (
            'name' => 'except',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 176,
                'startFilePos' => 1572,
                'endTokenPos' => 177,
                'endFilePos' => 1573,
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
            'startColumn' => 49,
            'endColumn' => 66,
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
 * Disable exception handling for the test.
 *
 * @param  array  $except
 * @return $this
 */',
        'startLine' => 63,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'aliasName' => NULL,
      ),
      'assertThrows' => 
      array (
        'name' => 'assertThrows',
        'parameters' => 
        array (
          'test' => 
          array (
            'name' => 'test',
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expectedClass' => 
          array (
            'name' => 'expectedClass',
            'default' => 
            array (
              'code' => '\\Throwable::class',
              'attributes' => 
              array (
                'startLine' => 161,
                'endLine' => 161,
                'startTokenPos' => 535,
                'startFilePos' => 4691,
                'endTokenPos' => 537,
                'endFilePos' => 4706,
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 52,
            'endColumn' => 91,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'expectedMessage' => 
          array (
            'name' => 'expectedMessage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 161,
                'endLine' => 161,
                'startTokenPos' => 547,
                'startFilePos' => 4736,
                'endTokenPos' => 547,
                'endFilePos' => 4739,
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 94,
            'endColumn' => 124,
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
 * Assert that the given callback throws an exception with the given message when invoked.
 *
 * @param  \\Closure  $test
 * @param  class-string<\\Throwable>  $expectedClass
 * @param  string|null  $expectedMessage
 * @return $this
 */',
        'startLine' => 161,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
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