<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Bus/Queueable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Bus\Queueable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7ef2b2de6f7638bd40ff008b474e838f8c6bfb6a7655f83a084f0e5d9bce28c1-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Bus\\Queueable',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Bus/Queueable.php',
      ),
    ),
    'namespace' => 'Illuminate\\Bus',
    'name' => 'Illuminate\\Bus\\Queueable',
    'shortName' => 'Queueable',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 286,
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
      'connection' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'connection',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the connection the job should be sent to.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queue' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'queue',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the queue the job should be sent to.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'chainConnection' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'chainConnection',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the connection the chain should be sent to.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'chainQueue' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'chainQueue',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the queue the chain should be sent to.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'chainCatchCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'chainCatchCallbacks',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The callbacks to be executed on chain failure.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'delay' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'delay',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of seconds before the job should be made available.
 *
 * @var \\DateTimeInterface|\\DateInterval|array|int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterCommit' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'afterCommit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates whether the job should be dispatched after all database transactions have committed.
 *
 * @var bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middleware' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'middleware',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 90,
            'startFilePos' => 1288,
            'endTokenPos' => 91,
            'endFilePos' => 1289,
          ),
        ),
        'docComment' => '/**
 * The middleware the job should be dispatched through.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'chained' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'name' => 'chained',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 102,
            'startFilePos' => 1415,
            'endTokenPos' => 103,
            'endFilePos' => 1416,
          ),
        ),
        'docComment' => '/**
 * The jobs that should run if this job is successful.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 25,
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
      'onConnection' => 
      array (
        'name' => 'onConnection',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 34,
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
 * Set the desired connection for the job.
 *
 * @param  string|null  $connection
 * @return $this
 */',
        'startLine' => 81,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'onQueue' => 
      array (
        'name' => 'onQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Set the desired queue for the job.
 *
 * @param  string|null  $queue
 * @return $this
 */',
        'startLine' => 94,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'allOnConnection' => 
      array (
        'name' => 'allOnConnection',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Set the desired connection for the chain.
 *
 * @param  string|null  $connection
 * @return $this
 */',
        'startLine' => 107,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'allOnQueue' => 
      array (
        'name' => 'allOnQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Set the desired queue for the chain.
 *
 * @param  string|null  $queue
 * @return $this
 */',
        'startLine' => 121,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'delay' => 
      array (
        'name' => 'delay',
        'parameters' => 
        array (
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 135,
            'endLine' => 135,
            'startColumn' => 27,
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
 * Set the desired delay in seconds for the job.
 *
 * @param  \\DateTimeInterface|\\DateInterval|array|int|null  $delay
 * @return $this
 */',
        'startLine' => 135,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'afterCommit' => 
      array (
        'name' => 'afterCommit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the job should be dispatched after all database transactions have committed.
 *
 * @return $this
 */',
        'startLine' => 147,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'beforeCommit' => 
      array (
        'name' => 'beforeCommit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the job should not wait until database transactions have been committed before dispatching.
 *
 * @return $this
 */',
        'startLine' => 159,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'through' => 
      array (
        'name' => 'through',
        'parameters' => 
        array (
          'middleware' => 
          array (
            'name' => 'middleware',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 172,
            'endLine' => 172,
            'startColumn' => 29,
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
 * Specify the middleware the job should be dispatched through.
 *
 * @param  array|object  $middleware
 * @return $this
 */',
        'startLine' => 172,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'chain' => 
      array (
        'name' => 'chain',
        'parameters' => 
        array (
          'chain' => 
          array (
            'name' => 'chain',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 185,
            'endLine' => 185,
            'startColumn' => 27,
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
 * Set the jobs that should run if this job is successful.
 *
 * @param  array  $chain
 * @return $this
 */',
        'startLine' => 185,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'prependToChain' => 
      array (
        'name' => 'prependToChain',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 200,
            'endLine' => 200,
            'startColumn' => 36,
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
 * Prepend a job to the current chain so that it is run after the currently running job.
 *
 * @param  mixed  $job
 * @return $this
 */',
        'startLine' => 200,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'appendToChain' => 
      array (
        'name' => 'appendToChain',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 218,
            'endLine' => 218,
            'startColumn' => 35,
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
 * Append a job to the end of the current chain.
 *
 * @param  mixed  $job
 * @return $this
 */',
        'startLine' => 218,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'serializeJob' => 
      array (
        'name' => 'serializeJob',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 238,
            'endLine' => 238,
            'startColumn' => 37,
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
 * Serialize a job for queuing.
 *
 * @param  mixed  $job
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 238,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'dispatchNextJobInChain' => 
      array (
        'name' => 'dispatchNextJobInChain',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dispatch the next job on the chain.
 *
 * @return void
 */',
        'startLine' => 258,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
        'aliasName' => NULL,
      ),
      'invokeChainCatchCallbacks' => 
      array (
        'name' => 'invokeChainCatchCallbacks',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 280,
            'endLine' => 280,
            'startColumn' => 47,
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
 * Invoke all of the chain\'s failed job callbacks.
 *
 * @param  \\Throwable  $e
 * @return void
 */',
        'startLine' => 280,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Queueable',
        'implementingClassName' => 'Illuminate\\Bus\\Queueable',
        'currentClassName' => 'Illuminate\\Bus\\Queueable',
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