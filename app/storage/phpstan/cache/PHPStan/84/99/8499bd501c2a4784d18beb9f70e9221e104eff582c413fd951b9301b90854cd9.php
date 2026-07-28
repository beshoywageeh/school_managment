<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Hashing/Argon2IdHasher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Hashing\Argon2IdHasher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-53329212e0ed818213b2d2e231a6f16e21cbaa7a1e53bc9d9695c28043fa57fd-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Hashing/Argon2IdHasher.php',
      ),
    ),
    'namespace' => 'Illuminate\\Hashing',
    'name' => 'Illuminate\\Hashing\\Argon2IdHasher',
    'shortName' => 'Argon2IdHasher',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 52,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
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
      'check' => 
      array (
        'name' => 'check',
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
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'hashedValue' => 
          array (
            'name' => 'hashedValue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 19,
                'endLine' => 19,
                'startTokenPos' => 42,
                'startFilePos' => 405,
                'endTokenPos' => 43,
                'endFilePos' => 406,
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
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 49,
            'endColumn' => 67,
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
 * Check the given plain value against a hash.
 *
 * @param  string  $value
 * @param  string|null  $hashedValue
 * @param  array  $options
 * @return bool
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 19,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Hashing',
        'declaringClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'implementingClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'currentClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'aliasName' => NULL,
      ),
      'isUsingCorrectAlgorithm' => 
      array (
        'name' => 'isUsingCorrectAlgorithm',
        'parameters' => 
        array (
          'hashedValue' => 
          array (
            'name' => 'hashedValue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 48,
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
 * Verify the hashed value\'s algorithm.
 *
 * @param  string  $hashedValue
 * @return bool
 */',
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Hashing',
        'declaringClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'implementingClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'currentClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'aliasName' => NULL,
      ),
      'algorithm' => 
      array (
        'name' => 'algorithm',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the algorithm that should be used for hashing.
 *
 * @return int
 */',
        'startLine' => 48,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Hashing',
        'declaringClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'implementingClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
        'currentClassName' => 'Illuminate\\Hashing\\Argon2IdHasher',
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