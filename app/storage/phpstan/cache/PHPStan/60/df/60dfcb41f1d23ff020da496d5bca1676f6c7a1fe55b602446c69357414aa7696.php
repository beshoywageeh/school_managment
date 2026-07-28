<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/http-kernel/HttpKernelInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpKernel\HttpKernelInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ebadfd25f1e76804789df21824bc0475fda5d0429c8755c87fd6a68a2567078b-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../symfony/http-kernel/HttpKernelInterface.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\HttpKernel',
    'name' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
    'shortName' => 'HttpKernelInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * HttpKernelInterface handles a Request to convert it to a Response.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 46,
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
      'MAIN_REQUEST' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'implementingClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'name' => 'MAIN_REQUEST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 35,
            'startFilePos' => 567,
            'endTokenPos' => 35,
            'endFilePos' => 567,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 34,
      ),
      'SUB_REQUEST' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'implementingClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'name' => 'SUB_REQUEST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 46,
            'startFilePos' => 601,
            'endTokenPos' => 46,
            'endFilePos' => 601,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
      'MASTER_REQUEST' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'implementingClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'name' => 'MASTER_REQUEST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => 'self::MAIN_REQUEST',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 59,
            'startFilePos' => 823,
            'endTokenPos' => 61,
            'endFilePos' => 840,
          ),
        ),
        'docComment' => '/**
 * @deprecated since symfony/http-kernel 5.3, use MAIN_REQUEST instead.
 *             To ease the migration, this constant won\'t be removed until Symfony 7.0.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => 'self::MAIN_REQUEST',
              'attributes' => 
              array (
                'startLine' => 45,
                'endLine' => 45,
                'startTokenPos' => 83,
                'startFilePos' => 1413,
                'endTokenPos' => 85,
                'endFilePos' => 1430,
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
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 46,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'catch' => 
          array (
            'name' => 'catch',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 45,
                'endLine' => 45,
                'startTokenPos' => 94,
                'startFilePos' => 1447,
                'endTokenPos' => 94,
                'endFilePos' => 1450,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 78,
            'endColumn' => 95,
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
            'name' => 'Symfony\\Component\\HttpFoundation\\Response',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles a Request to convert it to a Response.
 *
 * When $catch is true, the implementation must catch all exceptions
 * and do its best to convert them to a Response instance.
 *
 * @param int  $type  The type of the request
 *                    (one of HttpKernelInterface::MAIN_REQUEST or HttpKernelInterface::SUB_REQUEST)
 * @param bool $catch Whether to catch exceptions or not
 *
 * @throws \\Exception When an Exception occurs during processing
 */',
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 107,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\HttpKernel',
        'declaringClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'implementingClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'currentClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
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