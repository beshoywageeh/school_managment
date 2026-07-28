<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-fpassthru
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v1-6.70.0.3-dev-master@709e512-8.5',
   'data' => 
  array (
    'name' => 'fpassthru',
    'parameters' => 
    array (
      'stream' => 
      array (
        'name' => 'stream',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 24,
        'endColumn' => 30,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
    ),
    'returnsReference' => false,
    'returnType' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
      'data' => 
      array (
        'name' => 'int',
        'isIdentifier' => true,
      ),
    ),
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '["8.0" => "int"]',
            'attributes' => 
            array (
              'startLine' => 13,
              'endLine' => 13,
              'startTokenPos' => 11,
              'startFilePos' => 570,
              'endTokenPos' => 17,
              'endFilePos' => 585,
            ),
          ),
          'default' => 
          array (
            'code' => '"int|false"',
            'attributes' => 
            array (
              'startLine' => 13,
              'endLine' => 13,
              'startTokenPos' => 23,
              'startFilePos' => 597,
              'endTokenPos' => 23,
              'endFilePos' => 607,
            ),
          ),
        ),
      ),
    ),
    'docComment' => '/**
 * Output all remaining data on a file pointer
 * @link https://php.net/manual/en/function.fpassthru.php
 * @param resource $stream The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).
 * @return int|false If an error occurs, fpassthru returns
 * false. Otherwise, fpassthru returns
 * the number of characters read from handle
 * and passed through to the output.
 */',
    'startLine' => 13,
    'endLine' => 16,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => false,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\InternalLocatedSource',
      'data' => 
      array (
        'name' => 'fpassthru',
        'filename' => 'phar:///data/projects/laravel_projects/school_managment/app/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/standard/standard_5.stub',
        'extensionName' => 'standard',
        'aliasName' => NULL,
      ),
    ),
  ),
));