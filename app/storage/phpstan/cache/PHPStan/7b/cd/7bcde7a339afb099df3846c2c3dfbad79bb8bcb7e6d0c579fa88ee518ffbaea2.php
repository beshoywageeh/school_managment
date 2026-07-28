<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Schema/AbstractAsset.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Doctrine\DBAL\Schema\AbstractAsset
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ce355607f33208e6cf4395dca6349aade88ebac2b09e5adc4277dc59d107c5b4-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Schema/AbstractAsset.php',
      ),
    ),
    'namespace' => 'Doctrine\\DBAL\\Schema',
    'name' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
    'shortName' => 'AbstractAsset',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * The abstract asset allows to reset the name of all assets without publishing this to the public userland.
 *
 * This encapsulation hack is necessary to keep a consistent state of the database schema. Say we have a list of tables
 * array($tableName => Table($tableName)); if you want to rename the table, you have to make sure this does not get
 * recreated during schema migration.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 224,
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
      '_name' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'name' => '_name',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 105,
            'startFilePos' => 825,
            'endTokenPos' => 105,
            'endFilePos' => 826,
          ),
        ),
        'docComment' => '/** @var string */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_namespace' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'name' => '_namespace',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Namespace of the asset. If none isset the default namespace is assumed.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_quoted' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'name' => '_quoted',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 123,
            'startFilePos' => 1030,
            'endTokenPos' => 123,
            'endFilePos' => 1034,
          ),
        ),
        'docComment' => '/** @var bool */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
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
      '_setName' => 
      array (
        'name' => '_setName',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 33,
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
 * Sets the name of this asset.
 *
 * @param string $name
 *
 * @return void
 */',
        'startLine' => 48,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      'isInDefaultNamespace' => 
      array (
        'name' => 'isInDefaultNamespace',
        'parameters' => 
        array (
          'defaultNamespaceName' => 
          array (
            'name' => 'defaultNamespaceName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 42,
            'endColumn' => 62,
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
 * Is this asset in the default namespace?
 *
 * @param string $defaultNamespaceName
 *
 * @return bool
 */',
        'startLine' => 71,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      'getNamespaceName' => 
      array (
        'name' => 'getNamespaceName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the namespace name of this asset.
 *
 * If NULL is returned this means the default namespace is used.
 *
 * @return string|null
 */',
        'startLine' => 83,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      'getShortestName' => 
      array (
        'name' => 'getShortestName',
        'parameters' => 
        array (
          'defaultNamespaceName' => 
          array (
            'name' => 'defaultNamespaceName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 37,
            'endColumn' => 57,
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
 * The shortest name is stripped of the default namespace. All other
 * namespaced elements are returned as full-qualified names.
 *
 * @param string|null $defaultNamespaceName
 *
 * @return string
 */',
        'startLine' => 96,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      'getFullQualifiedName' => 
      array (
        'name' => 'getFullQualifiedName',
        'parameters' => 
        array (
          'defaultNamespaceName' => 
          array (
            'name' => 'defaultNamespaceName',
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
            'startColumn' => 42,
            'endColumn' => 62,
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
 * The normalized name is full-qualified and lower-cased. Lower-casing is
 * actually wrong, but we have to do it to keep our sanity. If you are
 * using database objects that only differentiate in the casing (FOO vs
 * Foo) then you will NOT be able to use Doctrine Schema abstraction.
 *
 * Every non-namespaced element is prefixed with the default namespace
 * name which is passed as argument to this method.
 *
 * @deprecated Use {@see getNamespaceName()} and {@see getName()} instead.
 *
 * @param string $defaultNamespaceName
 *
 * @return string
 */',
        'startLine' => 121,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      'isQuoted' => 
      array (
        'name' => 'isQuoted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if this asset\'s name is quoted.
 *
 * @return bool
 */',
        'startLine' => 143,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      'isIdentifierQuoted' => 
      array (
        'name' => 'isIdentifierQuoted',
        'parameters' => 
        array (
          'identifier' => 
          array (
            'name' => 'identifier',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 43,
            'endColumn' => 53,
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
 * Checks if this identifier is quoted.
 *
 * @param string $identifier
 *
 * @return bool
 */',
        'startLine' => 155,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      'trimQuotes' => 
      array (
        'name' => 'trimQuotes',
        'parameters' => 
        array (
          'identifier' => 
          array (
            'name' => 'identifier',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 167,
            'endLine' => 167,
            'startColumn' => 35,
            'endColumn' => 45,
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
 * Trim quotes from the identifier.
 *
 * @param string $identifier
 *
 * @return string
 */',
        'startLine' => 167,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
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
        'docComment' => '/**
 * Returns the name of this schema asset.
 *
 * @return string
 */',
        'startLine' => 177,
        'endLine' => 184,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
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
            'startLine' => 192,
            'endLine' => 192,
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
        'docComment' => '/**
 * Gets the quoted representation of this asset but only if it was defined with one. Otherwise
 * return the plain unquoted value as inserted.
 *
 * @return string
 */',
        'startLine' => 192,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'aliasName' => NULL,
      ),
      '_generateIdentifierName' => 
      array (
        'name' => '_generateIdentifierName',
        'parameters' => 
        array (
          'columnNames' => 
          array (
            'name' => 'columnNames',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 48,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 216,
                'endLine' => 216,
                'startTokenPos' => 742,
                'startFilePos' => 5954,
                'endTokenPos' => 742,
                'endFilePos' => 5955,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 62,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'maxSize' => 
          array (
            'name' => 'maxSize',
            'default' => 
            array (
              'code' => '30',
              'attributes' => 
              array (
                'startLine' => 216,
                'endLine' => 216,
                'startTokenPos' => 749,
                'startFilePos' => 5969,
                'endTokenPos' => 749,
                'endFilePos' => 5970,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 76,
            'endColumn' => 88,
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
 * Generates an identifier from a list of column names obeying a certain string length.
 *
 * This is especially important for Oracle, since it does not allow identifiers larger than 30 chars,
 * however building idents automatically for foreign keys, composite keys or such can easily create
 * very long names.
 *
 * @param string[] $columnNames
 * @param string   $prefix
 * @param int      $maxSize
 *
 * @return string
 */',
        'startLine' => 216,
        'endLine' => 223,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Schema',
        'declaringClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'implementingClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
        'currentClassName' => 'Doctrine\\DBAL\\Schema\\AbstractAsset',
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