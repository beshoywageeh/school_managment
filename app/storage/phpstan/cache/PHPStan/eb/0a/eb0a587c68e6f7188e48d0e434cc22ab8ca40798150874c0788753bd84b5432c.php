<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Support/InteractsWithTime.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\InteractsWithTime
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2430473ca282a6e79ff50748b0654f72e3c493f3153bd13c0a4d851816c97529-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\InteractsWithTime',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Support/InteractsWithTime.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support',
    'name' => 'Illuminate\\Support\\InteractsWithTime',
    'shortName' => 'InteractsWithTime',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 64,
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
      'secondsUntil' => 
      array (
        'name' => 'secondsUntil',
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
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 37,
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
 * Get the number of seconds until the given DateTime.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @return int
 */',
        'startLine' => 16,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'aliasName' => NULL,
      ),
      'availableAt' => 
      array (
        'name' => 'availableAt',
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
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 99,
                'startFilePos' => 747,
                'endTokenPos' => 99,
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
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 36,
            'endColumn' => 45,
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
 * Get the "available at" UNIX timestamp.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @return int
 */',
        'startLine' => 31,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'aliasName' => NULL,
      ),
      'parseDateInterval' => 
      array (
        'name' => 'parseDateInterval',
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 42,
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
 * If the given value is an interval, convert it to a DateTime instance.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @return \\DateTimeInterface|int
 */',
        'startLine' => 46,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'aliasName' => NULL,
      ),
      'currentTime' => 
      array (
        'name' => 'currentTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current system time as a UNIX timestamp.
 *
 * @return int
 */',
        'startLine' => 60,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
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