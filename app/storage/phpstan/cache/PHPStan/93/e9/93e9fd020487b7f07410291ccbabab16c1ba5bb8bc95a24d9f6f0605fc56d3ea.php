<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Schema/Constraint.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Doctrine\DBAL\Schema\Constraint
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f3956e42e34b32057e53f409bf7cfcd3de44c267846231e26bcbcf6afa301c33-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Schema/Constraint.php',
      ),
    ),
    'namespace' => 'Doctrine\\DBAL\\Schema',
    'name' => 'Doctrine\\DBAL\\Schema\\Constraint',
    'shortName' => 'Constraint',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Marker interface for constraints.
 *
 * @deprecated Use {@see ForeignKeyConstraint}, {@see Index} or {@see UniqueConstraint} instead.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 41,
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
      'getName' => 
      array (
        'name' => 'getName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/** @return string */',
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'aliasName' => NULL,
      ),
      'getQuotedName' => 
      array (
        'name' => 'getQuotedName',
        'parameters' => 
        array (
          'platform' => 
          array (
            'name' => 'platform',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 35,
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
        'docComment' => '/** @return string */',
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'aliasName' => NULL,
      ),
      'getColumns' => 
      array (
        'name' => 'getColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the names of the referencing table columns
 * the constraint is associated with.
 *
 * @return string[]
 */',
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'aliasName' => NULL,
      ),
      'getQuotedColumns' => 
      array (
        'name' => 'getQuotedColumns',
        'parameters' => 
        array (
          'platform' => 
          array (
            'name' => 'platform',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 38,
            'endColumn' => 63,
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
 * Returns the quoted representation of the column names
 * the constraint is associated with.
 *
 * But only if they were defined with one or a column name
 * is a keyword reserved by the platform.
 * Otherwise the plain unquoted value as inserted is returned.
 *
 * @param AbstractPlatform $platform The platform to use for quotation.
 *
 * @return string[]
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\Constraint',
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