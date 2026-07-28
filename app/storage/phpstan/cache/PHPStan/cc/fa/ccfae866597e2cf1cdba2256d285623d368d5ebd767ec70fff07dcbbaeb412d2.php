<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/Event.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Scheduling\Event
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6a3887f9ef501fe0f3bfbb79f84c03f815344aa150e7912df85c450e8407d9f8-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Console\\Scheduling\\Event',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/Event.php',
      ),
    ),
    'namespace' => 'Illuminate\\Console\\Scheduling',
    'name' => 'Illuminate\\Console\\Scheduling\\Event',
    'shortName' => 'Event',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 1023,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
      1 => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
      2 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'command' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'command',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The command string.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expression' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'expression',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'* * * * *\'',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 123,
            'startFilePos' => 923,
            'endTokenPos' => 123,
            'endFilePos' => 933,
          ),
        ),
        'docComment' => '/**
 * The cron expression representing the event\'s frequency.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'repeatSeconds' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'repeatSeconds',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 134,
            'startFilePos' => 1063,
            'endTokenPos' => 134,
            'endFilePos' => 1066,
          ),
        ),
        'docComment' => '/**
 * How often to repeat the event during a minute.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timezone' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'timezone',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The timezone the date should be evaluated on.
 *
 * @var \\DateTimeZone|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'user' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'user',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The user the command should run as.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 17,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'environments' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'environments',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 159,
            'startFilePos' => 1441,
            'endTokenPos' => 160,
            'endFilePos' => 1442,
          ),
        ),
        'docComment' => '/**
 * The list of environments the command should run under.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'evenInMaintenanceMode' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'evenInMaintenanceMode',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 171,
            'startFilePos' => 1586,
            'endTokenPos' => 171,
            'endFilePos' => 1590,
          ),
        ),
        'docComment' => '/**
 * Indicates if the command should run in maintenance mode.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'withoutOverlapping' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'withoutOverlapping',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 182,
            'startFilePos' => 1726,
            'endTokenPos' => 182,
            'endFilePos' => 1730,
          ),
        ),
        'docComment' => '/**
 * Indicates if the command should not overlap itself.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'onOneServer' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'onOneServer',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 193,
            'startFilePos' => 1902,
            'endTokenPos' => 193,
            'endFilePos' => 1906,
          ),
        ),
        'docComment' => '/**
 * Indicates if the command should only be allowed to run on one server for each cron expression.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expiresAt' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'expiresAt',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '1440',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 204,
            'startFilePos' => 2029,
            'endTokenPos' => 204,
            'endFilePos' => 2032,
          ),
        ),
        'docComment' => '/**
 * The number of minutes the mutex should be valid.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'runInBackground' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'runInBackground',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 101,
            'startTokenPos' => 215,
            'startFilePos' => 2168,
            'endTokenPos' => 215,
            'endFilePos' => 2172,
          ),
        ),
        'docComment' => '/**
 * Indicates if the command should run in the background.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filters' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'filters',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 226,
            'startFilePos' => 2280,
            'endTokenPos' => 227,
            'endFilePos' => 2281,
          ),
        ),
        'docComment' => '/**
 * The array of filter callbacks.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rejects' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'rejects',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 115,
            'startTokenPos' => 238,
            'startFilePos' => 2389,
            'endTokenPos' => 239,
            'endFilePos' => 2390,
          ),
        ),
        'docComment' => '/**
 * The array of reject callbacks.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'output' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'output',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'/dev/null\'',
          'attributes' => 
          array (
            'startLine' => 122,
            'endLine' => 122,
            'startTokenPos' => 250,
            'startFilePos' => 2508,
            'endTokenPos' => 250,
            'endFilePos' => 2518,
          ),
        ),
        'docComment' => '/**
 * The location that output should be sent to.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'shouldAppendOutput' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'shouldAppendOutput',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 129,
            'endLine' => 129,
            'startTokenPos' => 261,
            'startFilePos' => 2647,
            'endTokenPos' => 261,
            'endFilePos' => 2651,
          ),
        ),
        'docComment' => '/**
 * Indicates whether output should be appended.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'beforeCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 136,
            'endLine' => 136,
            'startTokenPos' => 272,
            'startFilePos' => 2798,
            'endTokenPos' => 273,
            'endFilePos' => 2799,
          ),
        ),
        'docComment' => '/**
 * The array of callbacks to be run before the event is started.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'afterCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 284,
            'startFilePos' => 2945,
            'endTokenPos' => 285,
            'endFilePos' => 2946,
          ),
        ),
        'docComment' => '/**
 * The array of callbacks to be run after the event is finished.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'description',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The human readable description of the event.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 150,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mutex' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'mutex',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event mutex implementation.
 *
 * @var \\Illuminate\\Console\\Scheduling\\EventMutex
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 157,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mutexNameResolver' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'mutexNameResolver',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The mutex name resolver callback.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 164,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastChecked' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'lastChecked',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The last time the event was checked for eligibility to run.
 *
 * Utilized by sub-minute repeated events.
 *
 * @var \\Illuminate\\Support\\Carbon|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'exitCode' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'name' => 'exitCode',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The exit status code of the command.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 180,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 21,
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
          'mutex' => 
          array (
            'name' => 'mutex',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Console\\Scheduling\\EventMutex',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'command' => 
          array (
            'name' => 'command',
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
            'startColumn' => 52,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 190,
                'endLine' => 190,
                'startTokenPos' => 343,
                'startFilePos' => 3962,
                'endTokenPos' => 343,
                'endFilePos' => 3965,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 62,
            'endColumn' => 77,
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
 * Create a new event instance.
 *
 * @param  \\Illuminate\\Console\\Scheduling\\EventMutex  $mutex
 * @param  string  $command
 * @param  \\DateTimeZone|string|null  $timezone
 * @return void
 */',
        'startLine' => 190,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'getDefaultOutput' => 
      array (
        'name' => 'getDefaultOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default output depending on the OS.
 *
 * @return string
 */',
        'startLine' => 204,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'run' => 
      array (
        'name' => 'run',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 25,
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
 * Run the given event.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @return void
 *
 * @throws \\Throwable
 */',
        'startLine' => 217,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'shouldSkipDueToOverlapping' => 
      array (
        'name' => 'shouldSkipDueToOverlapping',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the event should skip because another process is overlapping.
 *
 * @return bool
 */',
        'startLine' => 235,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'isRepeatable' => 
      array (
        'name' => 'isRepeatable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the event has been configured to repeat multiple times per minute.
 *
 * @return bool
 */',
        'startLine' => 245,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'shouldRepeatNow' => 
      array (
        'name' => 'shouldRepeatNow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the event is ready to repeat.
 *
 * @return bool
 */',
        'startLine' => 255,
        'endLine' => 259,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'start' => 
      array (
        'name' => 'start',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 269,
            'endLine' => 269,
            'startColumn' => 30,
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
 * Run the command process.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @return int
 *
 * @throws \\Throwable
 */',
        'startLine' => 269,
        'endLine' => 280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'execute' => 
      array (
        'name' => 'execute',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 32,
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
 * Run the command process.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @return int
 */',
        'startLine' => 288,
        'endLine' => 297,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'finish' => 
      array (
        'name' => 'finish',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 28,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exitCode' => 
          array (
            'name' => 'exitCode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 50,
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
 * Mark the command process as finished and run callbacks/cleanup.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @param  int  $exitCode
 * @return void
 */',
        'startLine' => 306,
        'endLine' => 315,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'callBeforeCallbacks' => 
      array (
        'name' => 'callBeforeCallbacks',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 323,
            'endLine' => 323,
            'startColumn' => 41,
            'endColumn' => 60,
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
 * Call all of the "before" callbacks for the event.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @return void
 */',
        'startLine' => 323,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'callAfterCallbacks' => 
      array (
        'name' => 'callAfterCallbacks',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 336,
            'endLine' => 336,
            'startColumn' => 40,
            'endColumn' => 59,
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
 * Call all of the "after" callbacks for the event.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @return void
 */',
        'startLine' => 336,
        'endLine' => 341,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'buildCommand' => 
      array (
        'name' => 'buildCommand',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Build the command string.
 *
 * @return string
 */',
        'startLine' => 348,
        'endLine' => 351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'isDue' => 
      array (
        'name' => 'isDue',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 27,
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
 * Determine if the given event should run based on the Cron expression.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return bool
 */',
        'startLine' => 359,
        'endLine' => 367,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'runsInMaintenanceMode' => 
      array (
        'name' => 'runsInMaintenanceMode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the event runs in maintenance mode.
 *
 * @return bool
 */',
        'startLine' => 374,
        'endLine' => 377,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'expressionPasses' => 
      array (
        'name' => 'expressionPasses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the Cron expression passes.
 *
 * @return bool
 */',
        'startLine' => 384,
        'endLine' => 393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'runsInEnvironment' => 
      array (
        'name' => 'runsInEnvironment',
        'parameters' => 
        array (
          'environment' => 
          array (
            'name' => 'environment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 401,
            'endLine' => 401,
            'startColumn' => 39,
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
 * Determine if the event runs in the given environment.
 *
 * @param  string  $environment
 * @return bool
 */',
        'startLine' => 401,
        'endLine' => 404,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'filtersPass' => 
      array (
        'name' => 'filtersPass',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 33,
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
 * Determine if the filters pass for the event.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return bool
 */',
        'startLine' => 412,
        'endLine' => 429,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'storeOutput' => 
      array (
        'name' => 'storeOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure that the output is stored on disk in a log file.
 *
 * @return $this
 */',
        'startLine' => 436,
        'endLine' => 441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'sendOutputTo' => 
      array (
        'name' => 'sendOutputTo',
        'parameters' => 
        array (
          'location' => 
          array (
            'name' => 'location',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 450,
            'endLine' => 450,
            'startColumn' => 34,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'append' => 
          array (
            'name' => 'append',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 450,
                'endLine' => 450,
                'startTokenPos' => 1268,
                'startFilePos' => 10170,
                'endTokenPos' => 1268,
                'endFilePos' => 10174,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 450,
            'endLine' => 450,
            'startColumn' => 45,
            'endColumn' => 59,
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
 * Send the output of the command to a given location.
 *
 * @param  string  $location
 * @param  bool  $append
 * @return $this
 */',
        'startLine' => 450,
        'endLine' => 457,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'appendOutputTo' => 
      array (
        'name' => 'appendOutputTo',
        'parameters' => 
        array (
          'location' => 
          array (
            'name' => 'location',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 465,
            'endLine' => 465,
            'startColumn' => 36,
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
 * Append the output of the command to a given location.
 *
 * @param  string  $location
 * @return $this
 */',
        'startLine' => 465,
        'endLine' => 468,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'emailOutputTo' => 
      array (
        'name' => 'emailOutputTo',
        'parameters' => 
        array (
          'addresses' => 
          array (
            'name' => 'addresses',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'onlyIfOutputExists' => 
          array (
            'name' => 'onlyIfOutputExists',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 479,
                'endLine' => 479,
                'startTokenPos' => 1341,
                'startFilePos' => 10828,
                'endTokenPos' => 1341,
                'endFilePos' => 10832,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 47,
            'endColumn' => 73,
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
 * E-mail the results of the scheduled operation.
 *
 * @param  array|mixed  $addresses
 * @param  bool  $onlyIfOutputExists
 * @return $this
 *
 * @throws \\LogicException
 */',
        'startLine' => 479,
        'endLine' => 488,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'emailWrittenOutputTo' => 
      array (
        'name' => 'emailWrittenOutputTo',
        'parameters' => 
        array (
          'addresses' => 
          array (
            'name' => 'addresses',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 42,
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
 * E-mail the results of the scheduled operation if it produces output.
 *
 * @param  array|mixed  $addresses
 * @return $this
 *
 * @throws \\LogicException
 */',
        'startLine' => 498,
        'endLine' => 501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'emailOutputOnFailure' => 
      array (
        'name' => 'emailOutputOnFailure',
        'parameters' => 
        array (
          'addresses' => 
          array (
            'name' => 'addresses',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 42,
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
 * E-mail the results of the scheduled operation if it fails.
 *
 * @param  array|mixed  $addresses
 * @return $this
 */',
        'startLine' => 509,
        'endLine' => 518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'ensureOutputIsBeingCaptured' => 
      array (
        'name' => 'ensureOutputIsBeingCaptured',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure that the command output is being captured.
 *
 * @return void
 */',
        'startLine' => 525,
        'endLine' => 530,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'emailOutput' => 
      array (
        'name' => 'emailOutput',
        'parameters' => 
        array (
          'mailer' => 
          array (
            'name' => 'mailer',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Mail\\Mailer',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 540,
            'endLine' => 540,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'addresses' => 
          array (
            'name' => 'addresses',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 540,
            'endLine' => 540,
            'startColumn' => 52,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'onlyIfOutputExists' => 
          array (
            'name' => 'onlyIfOutputExists',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 540,
                'endLine' => 540,
                'startTokenPos' => 1597,
                'startFilePos' => 12567,
                'endTokenPos' => 1597,
                'endFilePos' => 12571,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 540,
            'endLine' => 540,
            'startColumn' => 64,
            'endColumn' => 90,
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
 * E-mail the output of the event to the recipients.
 *
 * @param  \\Illuminate\\Contracts\\Mail\\Mailer  $mailer
 * @param  array  $addresses
 * @param  bool  $onlyIfOutputExists
 * @return void
 */',
        'startLine' => 540,
        'endLine' => 551,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'getEmailSubject' => 
      array (
        'name' => 'getEmailSubject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the e-mail subject line for output results.
 *
 * @return string
 */',
        'startLine' => 558,
        'endLine' => 565,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'pingBefore' => 
      array (
        'name' => 'pingBefore',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 573,
            'endLine' => 573,
            'startColumn' => 32,
            'endColumn' => 35,
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
 * Register a callback to ping a given URL before the job runs.
 *
 * @param  string  $url
 * @return $this
 */',
        'startLine' => 573,
        'endLine' => 576,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'pingBeforeIf' => 
      array (
        'name' => 'pingBeforeIf',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 585,
            'endLine' => 585,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 585,
            'endLine' => 585,
            'startColumn' => 42,
            'endColumn' => 45,
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
 * Register a callback to ping a given URL before the job runs if the given condition is true.
 *
 * @param  bool  $value
 * @param  string  $url
 * @return $this
 */',
        'startLine' => 585,
        'endLine' => 588,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'thenPing' => 
      array (
        'name' => 'thenPing',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 596,
            'endLine' => 596,
            'startColumn' => 30,
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
 * Register a callback to ping a given URL after the job runs.
 *
 * @param  string  $url
 * @return $this
 */',
        'startLine' => 596,
        'endLine' => 599,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'thenPingIf' => 
      array (
        'name' => 'thenPingIf',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 608,
            'endLine' => 608,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 608,
            'endLine' => 608,
            'startColumn' => 40,
            'endColumn' => 43,
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
 * Register a callback to ping a given URL after the job runs if the given condition is true.
 *
 * @param  bool  $value
 * @param  string  $url
 * @return $this
 */',
        'startLine' => 608,
        'endLine' => 611,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'pingOnSuccess' => 
      array (
        'name' => 'pingOnSuccess',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 619,
            'endLine' => 619,
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
 * Register a callback to ping a given URL if the operation succeeds.
 *
 * @param  string  $url
 * @return $this
 */',
        'startLine' => 619,
        'endLine' => 622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'pingOnFailure' => 
      array (
        'name' => 'pingOnFailure',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 630,
            'endLine' => 630,
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
 * Register a callback to ping a given URL if the operation fails.
 *
 * @param  string  $url
 * @return $this
 */',
        'startLine' => 630,
        'endLine' => 633,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'pingCallback' => 
      array (
        'name' => 'pingCallback',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 641,
            'endLine' => 641,
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
 * Get the callback that pings the given URL.
 *
 * @param  string  $url
 * @return \\Closure
 */',
        'startLine' => 641,
        'endLine' => 650,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'runInBackground' => 
      array (
        'name' => 'runInBackground',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * State that the command should run in the background.
 *
 * @return $this
 */',
        'startLine' => 657,
        'endLine' => 662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'user' => 
      array (
        'name' => 'user',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 670,
            'endLine' => 670,
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
 * Set which user the command should run as.
 *
 * @param  string  $user
 * @return $this
 */',
        'startLine' => 670,
        'endLine' => 675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'environments' => 
      array (
        'name' => 'environments',
        'parameters' => 
        array (
          'environments' => 
          array (
            'name' => 'environments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 683,
            'endLine' => 683,
            'startColumn' => 34,
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
 * Limit the environments the command should run in.
 *
 * @param  array|mixed  $environments
 * @return $this
 */',
        'startLine' => 683,
        'endLine' => 688,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'evenInMaintenanceMode' => 
      array (
        'name' => 'evenInMaintenanceMode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * State that the command should run even in maintenance mode.
 *
 * @return $this
 */',
        'startLine' => 695,
        'endLine' => 700,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'withoutOverlapping' => 
      array (
        'name' => 'withoutOverlapping',
        'parameters' => 
        array (
          'expiresAt' => 
          array (
            'name' => 'expiresAt',
            'default' => 
            array (
              'code' => '1440',
              'attributes' => 
              array (
                'startLine' => 710,
                'endLine' => 710,
                'startTokenPos' => 2155,
                'startFilePos' => 16568,
                'endTokenPos' => 2155,
                'endFilePos' => 16571,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 710,
            'endLine' => 710,
            'startColumn' => 40,
            'endColumn' => 56,
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
 * Do not allow the event to overlap each other.
 *
 * The expiration time of the underlying cache lock may be specified in minutes.
 *
 * @param  int  $expiresAt
 * @return $this
 */',
        'startLine' => 710,
        'endLine' => 719,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'onOneServer' => 
      array (
        'name' => 'onOneServer',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allow the event to only run on one server for each cron expression.
 *
 * @return $this
 */',
        'startLine' => 726,
        'endLine' => 731,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'when' => 
      array (
        'name' => 'when',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 739,
            'endLine' => 739,
            'startColumn' => 26,
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
 * Register a callback to further filter the schedule.
 *
 * @param  \\Closure|bool  $callback
 * @return $this
 */',
        'startLine' => 739,
        'endLine' => 746,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'skip' => 
      array (
        'name' => 'skip',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 754,
            'endLine' => 754,
            'startColumn' => 26,
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
 * Register a callback to further filter the schedule.
 *
 * @param  \\Closure|bool  $callback
 * @return $this
 */',
        'startLine' => 754,
        'endLine' => 761,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'before' => 
      array (
        'name' => 'before',
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
            'startLine' => 769,
            'endLine' => 769,
            'startColumn' => 28,
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
 * Register a callback to be called before the operation.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 769,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'after' => 
      array (
        'name' => 'after',
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
            'startLine' => 782,
            'endLine' => 782,
            'startColumn' => 27,
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
 * Register a callback to be called after the operation.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 782,
        'endLine' => 785,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'then' => 
      array (
        'name' => 'then',
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
            'startLine' => 793,
            'endLine' => 793,
            'startColumn' => 26,
            'endColumn' => 42,
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
 * Register a callback to be called after the operation.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 793,
        'endLine' => 804,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'thenWithOutput' => 
      array (
        'name' => 'thenWithOutput',
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
            'startLine' => 813,
            'endLine' => 813,
            'startColumn' => 36,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'onlyIfOutputExists' => 
          array (
            'name' => 'onlyIfOutputExists',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 813,
                'endLine' => 813,
                'startTokenPos' => 2517,
                'startFilePos' => 18947,
                'endTokenPos' => 2517,
                'endFilePos' => 18951,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 813,
            'endLine' => 813,
            'startColumn' => 55,
            'endColumn' => 81,
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
 * Register a callback that uses the output after the job runs.
 *
 * @param  \\Closure  $callback
 * @param  bool  $onlyIfOutputExists
 * @return $this
 */',
        'startLine' => 813,
        'endLine' => 818,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'onSuccess' => 
      array (
        'name' => 'onSuccess',
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
            'startLine' => 826,
            'endLine' => 826,
            'startColumn' => 31,
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
 * Register a callback to be called if the operation succeeds.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 826,
        'endLine' => 839,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'onSuccessWithOutput' => 
      array (
        'name' => 'onSuccessWithOutput',
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
            'startLine' => 848,
            'endLine' => 848,
            'startColumn' => 41,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'onlyIfOutputExists' => 
          array (
            'name' => 'onlyIfOutputExists',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 848,
                'endLine' => 848,
                'startTokenPos' => 2679,
                'startFilePos' => 19976,
                'endTokenPos' => 2679,
                'endFilePos' => 19980,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 848,
            'endLine' => 848,
            'startColumn' => 60,
            'endColumn' => 86,
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
 * Register a callback that uses the output if the operation succeeds.
 *
 * @param  \\Closure  $callback
 * @param  bool  $onlyIfOutputExists
 * @return $this
 */',
        'startLine' => 848,
        'endLine' => 853,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'onFailure' => 
      array (
        'name' => 'onFailure',
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
            'startLine' => 861,
            'endLine' => 861,
            'startColumn' => 31,
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
 * Register a callback to be called if the operation fails.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 861,
        'endLine' => 874,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'onFailureWithOutput' => 
      array (
        'name' => 'onFailureWithOutput',
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
            'startLine' => 883,
            'endLine' => 883,
            'startColumn' => 41,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'onlyIfOutputExists' => 
          array (
            'name' => 'onlyIfOutputExists',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 883,
                'endLine' => 883,
                'startTokenPos' => 2841,
                'startFilePos' => 21004,
                'endTokenPos' => 2841,
                'endFilePos' => 21008,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 883,
            'endLine' => 883,
            'startColumn' => 60,
            'endColumn' => 86,
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
 * Register a callback that uses the output if the operation fails.
 *
 * @param  \\Closure  $callback
 * @param  bool  $onlyIfOutputExists
 * @return $this
 */',
        'startLine' => 883,
        'endLine' => 888,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'withOutputCallback' => 
      array (
        'name' => 'withOutputCallback',
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
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 43,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'onlyIfOutputExists' => 
          array (
            'name' => 'onlyIfOutputExists',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 2890,
                'startFilePos' => 21413,
                'endTokenPos' => 2890,
                'endFilePos' => 21417,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 62,
            'endColumn' => 88,
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
 * Get a callback that provides output.
 *
 * @param  \\Closure  $callback
 * @param  bool  $onlyIfOutputExists
 * @return \\Closure
 */',
        'startLine' => 897,
        'endLine' => 906,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'name' => 
      array (
        'name' => 'name',
        'parameters' => 
        array (
          'description' => 
          array (
            'name' => 'description',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 914,
            'endLine' => 914,
            'startColumn' => 26,
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
 * Set the human-friendly description of the event.
 *
 * @param  string  $description
 * @return $this
 */',
        'startLine' => 914,
        'endLine' => 917,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'description' => 
      array (
        'name' => 'description',
        'parameters' => 
        array (
          'description' => 
          array (
            'name' => 'description',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 925,
            'endLine' => 925,
            'startColumn' => 33,
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
 * Set the human-friendly description of the event.
 *
 * @param  string  $description
 * @return $this
 */',
        'startLine' => 925,
        'endLine' => 930,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'getSummaryForDisplay' => 
      array (
        'name' => 'getSummaryForDisplay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the summary of the event for display.
 *
 * @return string
 */',
        'startLine' => 937,
        'endLine' => 944,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'nextRunDate' => 
      array (
        'name' => 'nextRunDate',
        'parameters' => 
        array (
          'currentTime' => 
          array (
            'name' => 'currentTime',
            'default' => 
            array (
              'code' => '\'now\'',
              'attributes' => 
              array (
                'startLine' => 954,
                'endLine' => 954,
                'startTokenPos' => 3102,
                'startFilePos' => 22885,
                'endTokenPos' => 3102,
                'endFilePos' => 22889,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 954,
            'endLine' => 954,
            'startColumn' => 33,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'nth' => 
          array (
            'name' => 'nth',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 954,
                'endLine' => 954,
                'startTokenPos' => 3109,
                'startFilePos' => 22899,
                'endTokenPos' => 3109,
                'endFilePos' => 22899,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 954,
            'endLine' => 954,
            'startColumn' => 55,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'allowCurrentDate' => 
          array (
            'name' => 'allowCurrentDate',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 954,
                'endLine' => 954,
                'startTokenPos' => 3116,
                'startFilePos' => 22922,
                'endTokenPos' => 3116,
                'endFilePos' => 22926,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 954,
            'endLine' => 954,
            'startColumn' => 65,
            'endColumn' => 89,
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
 * Determine the next due date for an event.
 *
 * @param  \\DateTimeInterface|string  $currentTime
 * @param  int  $nth
 * @param  bool  $allowCurrentDate
 * @return \\Illuminate\\Support\\Carbon
 */',
        'startLine' => 954,
        'endLine' => 958,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'getExpression' => 
      array (
        'name' => 'getExpression',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Cron expression for the event.
 *
 * @return string
 */',
        'startLine' => 965,
        'endLine' => 968,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'preventOverlapsUsing' => 
      array (
        'name' => 'preventOverlapsUsing',
        'parameters' => 
        array (
          'mutex' => 
          array (
            'name' => 'mutex',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Console\\Scheduling\\EventMutex',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 976,
            'endLine' => 976,
            'startColumn' => 42,
            'endColumn' => 58,
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
 * Set the event mutex implementation to be used.
 *
 * @param  \\Illuminate\\Console\\Scheduling\\EventMutex  $mutex
 * @return $this
 */',
        'startLine' => 976,
        'endLine' => 981,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'mutexName' => 
      array (
        'name' => 'mutexName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the mutex name for the scheduled command.
 *
 * @return string
 */',
        'startLine' => 988,
        'endLine' => 997,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'createMutexNameUsing' => 
      array (
        'name' => 'createMutexNameUsing',
        'parameters' => 
        array (
          'mutexName' => 
          array (
            'name' => 'mutexName',
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
                      'name' => 'Closure',
                      'isIdentifier' => false,
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
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1005,
            'endLine' => 1005,
            'startColumn' => 42,
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
 * Set the mutex name or name resolver callback.
 *
 * @param  \\Closure|string  $mutexName
 * @return $this
 */',
        'startLine' => 1005,
        'endLine' => 1010,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'aliasName' => NULL,
      ),
      'removeMutex' => 
      array (
        'name' => 'removeMutex',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete the mutex for the event.
 *
 * @return void
 */',
        'startLine' => 1017,
        'endLine' => 1022,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\Event',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\Event',
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