<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-abort_if
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-5510a79801b68916aa5fbaba1b644f7964ff94059e4459df33a2ecf3fb8ee80b',
   'data' => 
  array (
    'name' => 'abort_if',
    'parameters' => 
    array (
      'boolean' => 
      array (
        'name' => 'boolean',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 23,
        'endColumn' => 30,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'code' => 
      array (
        'name' => 'code',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 33,
        'endColumn' => 37,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'message' => 
      array (
        'name' => 'message',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 272,
            'startFilePos' => 2375,
            'endTokenPos' => 272,
            'endFilePos' => 2376,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 40,
        'endColumn' => 52,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'headers' => 
      array (
        'name' => 'headers',
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 281,
            'startFilePos' => 2396,
            'endTokenPos' => 282,
            'endFilePos' => 2397,
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
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 55,
        'endColumn' => 73,
        'parameterIndex' => 3,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Throw an HttpException with the given data if the given condition is true.
 *
 * @param  bool  $boolean
 * @param  \\Symfony\\Component\\HttpFoundation\\Response|\\Illuminate\\Contracts\\Support\\Responsable|int  $code
 * @param  string  $message
 * @param  array  $headers
 * @return void
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
 */',
    'startLine' => 62,
    'endLine' => 67,
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
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'abort_if',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php',
      ),
    ),
  ),
));