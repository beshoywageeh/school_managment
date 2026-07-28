<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/console/Command/SignalableCommandInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Console\Command\SignalableCommandInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-729c464b78e0e8179b5196ec839e0bcde1443bb270c844a9ee8dfd3d8c93b715-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/console/Command/SignalableCommandInterface.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\Console\\Command',
    'name' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
    'shortName' => 'SignalableCommandInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for command reacting to signal.
 *
 * @author Grégoire Pineau <lyrixx@lyrix.info>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 34,
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
      'getSubscribedSignals' => 
      array (
        'name' => 'getSubscribedSignals',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the list of signals to subscribe.
 */',
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Console\\Command',
        'declaringClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        'implementingClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        'currentClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        'aliasName' => NULL,
      ),
      'handleSignal' => 
      array (
        'name' => 'handleSignal',
        'parameters' => 
        array (
          'signal' => 
          array (
            'name' => 'signal',
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
            'startLine' => 33,
            'endLine' => 33,
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
 * The method will be called when the application is signaled.
 *
 * @param int|false $previousExitCode
 *
 * @return int|false The exit code to return or false to continue the normal execution
 */',
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 85,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Console\\Command',
        'declaringClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        'implementingClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        'currentClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
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