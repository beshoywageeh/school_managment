<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Validation/Rules/Unique.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Validation\Rules\Unique
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5053ac13651f51ad2724ffe4ef098881b811e42081ea4dfbafcc06242d3d2e01-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Validation\\Rules\\Unique',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Validation/Rules/Unique.php',
      ),
    ),
    'namespace' => 'Illuminate\\Validation\\Rules',
    'name' => 'Illuminate\\Validation\\Rules\\Unique',
    'shortName' => 'Unique',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 75,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Conditionable',
      1 => 'Illuminate\\Validation\\Rules\\DatabaseRule',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'ignore' => 
      array (
        'declaringClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'implementingClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'name' => 'ignore',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The ID that should be ignored.
 *
 * @var mixed
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'idColumn' => 
      array (
        'declaringClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'implementingClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'name' => 'idColumn',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'id\'',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 46,
            'startFilePos' => 391,
            'endTokenPos' => 46,
            'endFilePos' => 394,
          ),
        ),
        'docComment' => '/**
 * The name of the ID column.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 31,
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
      'ignore' => 
      array (
        'name' => 'ignore',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 28,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'idColumn' => 
          array (
            'name' => 'idColumn',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 33,
                'endLine' => 33,
                'startTokenPos' => 64,
                'startFilePos' => 602,
                'endTokenPos' => 64,
                'endFilePos' => 605,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 33,
            'endColumn' => 48,
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
 * Ignore the given ID during the unique check.
 *
 * @param  mixed  $id
 * @param  string|null  $idColumn
 * @return $this
 */',
        'startLine' => 33,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Validation\\Rules',
        'declaringClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'implementingClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'currentClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'aliasName' => NULL,
      ),
      'ignoreModel' => 
      array (
        'name' => 'ignoreModel',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'idColumn' => 
          array (
            'name' => 'idColumn',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 52,
                'endLine' => 52,
                'startTokenPos' => 140,
                'startFilePos' => 1068,
                'endTokenPos' => 140,
                'endFilePos' => 1071,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 41,
            'endColumn' => 56,
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
 * Ignore the given model during the unique check.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @param  string|null  $idColumn
 * @return $this
 */',
        'startLine' => 52,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Validation\\Rules',
        'declaringClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'implementingClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'currentClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the rule to a validation string.
 *
 * @return string
 */',
        'startLine' => 65,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Validation\\Rules',
        'declaringClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'implementingClassName' => 'Illuminate\\Validation\\Rules\\Unique',
        'currentClassName' => 'Illuminate\\Validation\\Rules\\Unique',
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