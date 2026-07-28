<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Queue/InteractsWithQueue.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\InteractsWithQueue
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4d7e3a3834dfa264ee2163ec913e305ad55be8c7555883336fc1bcb949a6f07f-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Queue\\InteractsWithQueue',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Queue/InteractsWithQueue.php',
      ),
    ),
    'namespace' => 'Illuminate\\Queue',
    'name' => 'Illuminate\\Queue\\InteractsWithQueue',
    'shortName' => 'InteractsWithQueue',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 94,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\InteractsWithTime',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'job' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'implementingClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'name' => 'job',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The underlying queue job instance.
 *
 * @var \\Illuminate\\Contracts\\Queue\\Job|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 16,
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
      'attempts' => 
      array (
        'name' => 'attempts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of times the job has been attempted.
 *
 * @return int
 */',
        'startLine' => 27,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'implementingClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'currentClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete the job from the queue.
 *
 * @return void
 */',
        'startLine' => 37,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'implementingClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'currentClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'aliasName' => NULL,
      ),
      'fail' => 
      array (
        'name' => 'fail',
        'parameters' => 
        array (
          'exception' => 
          array (
            'name' => 'exception',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 138,
                'startFilePos' => 953,
                'endTokenPos' => 138,
                'endFilePos' => 956,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 26,
            'endColumn' => 42,
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
 * Fail the job from the queue.
 *
 * @param  \\Throwable|string|null  $exception
 * @return void
 */',
        'startLine' => 50,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'implementingClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'currentClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'aliasName' => NULL,
      ),
      'release' => 
      array (
        'name' => 'release',
        'parameters' => 
        array (
          'delay' => 
          array (
            'name' => 'delay',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 71,
                'endLine' => 71,
                'startTokenPos' => 243,
                'startFilePos' => 1596,
                'endTokenPos' => 243,
                'endFilePos' => 1596,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 29,
            'endColumn' => 38,
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
 * Release the job back into the queue after (n) seconds.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @return void
 */',
        'startLine' => 71,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'implementingClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'currentClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'aliasName' => NULL,
      ),
      'setJob' => 
      array (
        'name' => 'setJob',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Queue\\Job',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 28,
            'endColumn' => 43,
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
 * Set the base queue job instance.
 *
 * @param  \\Illuminate\\Contracts\\Queue\\Job  $job
 * @return $this
 */',
        'startLine' => 88,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'implementingClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
        'currentClassName' => 'Illuminate\\Queue\\InteractsWithQueue',
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