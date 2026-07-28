<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Platforms/AbstractPlatform.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Doctrine\DBAL\Platforms\AbstractPlatform
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0eef7fdf37780d65a5838c69f4121d1650186ec9b6a25036b5b50e82b02a82ea-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../doctrine/dbal/src/Platforms/AbstractPlatform.php',
      ),
    ),
    'namespace' => 'Doctrine\\DBAL\\Platforms',
    'name' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
    'shortName' => 'AbstractPlatform',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for all DatabasePlatforms. The DatabasePlatforms are the central
 * point of abstraction of platform-specific behaviors, features and SQL dialects.
 * They are a passive source of information.
 *
 * @todo Remove any unnecessary methods.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 75,
    'endLine' => 4727,
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
      'CREATE_INDEXES' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'name' => 'CREATE_INDEXES',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 380,
            'startFilePos' => 2463,
            'endTokenPos' => 380,
            'endFilePos' => 2463,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'CREATE_FOREIGNKEYS' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'name' => 'CREATE_FOREIGNKEYS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 391,
            'startFilePos' => 2505,
            'endTokenPos' => 391,
            'endFilePos' => 2505,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
    ),
    'immediateProperties' => 
    array (
      'doctrineTypeMapping' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'name' => 'doctrineTypeMapping',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var string[]|null */',
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'doctrineTypeComments' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'name' => 'doctrineTypeComments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Contains a list of all columns that should generate parseable column comments for type-detection
 * in reverse engineering scenarios.
 *
 * @deprecated This property is deprecated and will be removed in Doctrine DBAL 4.0.
 *
 * @var string[]|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_eventManager' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'name' => '_eventManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @deprecated
 *
 * @var EventManager|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_keywords' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'name' => '_keywords',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Holds the KeywordList instance for the current platform.
 *
 * @var KeywordList|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'disableTypeComments' => 
      array (
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'name' => 'disableTypeComments',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 430,
            'startFilePos' => 3190,
            'endTokenPos' => 430,
            'endFilePos' => 3194,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 46,
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
      'setDisableTypeComments' => 
      array (
        'name' => 'setDisableTypeComments',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
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
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 50,
            'endColumn' => 60,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** @internal */',
        'startLine' => 111,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 33,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'setEventManager' => 
      array (
        'name' => 'setEventManager',
        'parameters' => 
        array (
          'eventManager' => 
          array (
            'name' => 'eventManager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\Common\\EventManager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 37,
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
 * Sets the EventManager used by the Platform.
 *
 * @deprecated
 *
 * @return void
 */',
        'startLine' => 123,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getEventManager' => 
      array (
        'name' => 'getEventManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the EventManager used by the Platform.
 *
 * @deprecated
 *
 * @return EventManager|null
 */',
        'startLine' => 142,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBooleanTypeDeclarationSQL' => 
      array (
        'name' => 'getBooleanTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 59,
            'endColumn' => 71,
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
 * Returns the SQL snippet that declares a boolean column.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 161,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getIntegerTypeDeclarationSQL' => 
      array (
        'name' => 'getIntegerTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 59,
            'endColumn' => 71,
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
 * Returns the SQL snippet that declares a 4 byte integer column.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 170,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBigIntTypeDeclarationSQL' => 
      array (
        'name' => 'getBigIntTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 58,
            'endColumn' => 70,
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
 * Returns the SQL snippet that declares an 8 byte integer column.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 179,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSmallIntTypeDeclarationSQL' => 
      array (
        'name' => 'getSmallIntTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 60,
            'endColumn' => 72,
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
 * Returns the SQL snippet that declares a 2 byte integer column.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 188,
        'endLine' => 188,
        'startColumn' => 5,
        'endColumn' => 74,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      '_getCommonIntegerTypeDeclarationSQL' => 
      array (
        'name' => '_getCommonIntegerTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 69,
            'endColumn' => 81,
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
 * Returns the SQL snippet that declares common properties of an integer column.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 83,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'initializeDoctrineTypeMappings' => 
      array (
        'name' => 'initializeDoctrineTypeMappings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lazy load Doctrine Type Mappings.
 *
 * @return void
 */',
        'startLine' => 204,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'initializeAllDoctrineTypeMappings' => 
      array (
        'name' => 'initializeAllDoctrineTypeMappings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes Doctrine Type Mappings with the platform defaults
 * and with all additional type mappings.
 */',
        'startLine' => 210,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getAsciiStringTypeDeclarationSQL' => 
      array (
        'name' => 'getAsciiStringTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 228,
            'endLine' => 228,
            'startColumn' => 54,
            'endColumn' => 66,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL snippet used to declare a column that can
 * store characters in the ASCII character set
 *
 * @param mixed[] $column
 */',
        'startLine' => 228,
        'endLine' => 231,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getVarcharTypeDeclarationSQL' => 
      array (
        'name' => 'getVarcharTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 242,
            'endLine' => 242,
            'startColumn' => 50,
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
 * Returns the SQL snippet used to declare a VARCHAR column type.
 *
 * @deprecated Use {@link getStringTypeDeclarationSQL()} instead.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 242,
        'endLine' => 262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getStringTypeDeclarationSQL' => 
      array (
        'name' => 'getStringTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 49,
            'endColumn' => 61,
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
 * Returns the SQL snippet used to declare a string column type.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 271,
        'endLine' => 274,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBinaryTypeDeclarationSQL' => 
      array (
        'name' => 'getBinaryTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 283,
            'endLine' => 283,
            'startColumn' => 49,
            'endColumn' => 61,
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
 * Returns the SQL snippet used to declare a BINARY/VARBINARY column type.
 *
 * @param mixed[] $column The column definition.
 *
 * @return string
 */',
        'startLine' => 283,
        'endLine' => 312,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getGuidTypeDeclarationSQL' => 
      array (
        'name' => 'getGuidTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 324,
            'endLine' => 324,
            'startColumn' => 47,
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
 * Returns the SQL snippet to declare a GUID/UUID column.
 *
 * By default this maps directly to a CHAR(36) and only maps to more
 * special datatypes when the underlying databases support this datatype.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 324,
        'endLine' => 330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getJsonTypeDeclarationSQL' => 
      array (
        'name' => 'getJsonTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 342,
            'endLine' => 342,
            'startColumn' => 47,
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
 * Returns the SQL snippet to declare a JSON column.
 *
 * By default this maps directly to a CLOB and only maps to more
 * special datatypes when the underlying databases support this datatype.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 342,
        'endLine' => 345,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getVarcharTypeDeclarationSQLSnippet' => 
      array (
        'name' => 'getVarcharTypeDeclarationSQLSnippet',
        'parameters' => 
        array (
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 60,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fixed' => 
          array (
            'name' => 'fixed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 69,
            'endColumn' => 74,
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
 * @param int|false $length
 * @param bool      $fixed
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 355,
        'endLine' => 358,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBinaryTypeDeclarationSQLSnippet' => 
      array (
        'name' => 'getBinaryTypeDeclarationSQLSnippet',
        'parameters' => 
        array (
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 370,
            'endLine' => 370,
            'startColumn' => 59,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fixed' => 
          array (
            'name' => 'fixed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 370,
            'endLine' => 370,
            'startColumn' => 68,
            'endColumn' => 73,
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
 * Returns the SQL snippet used to declare a BINARY/VARBINARY column type.
 *
 * @param int|false $length The length of the column.
 * @param bool      $fixed  Whether the column length is fixed.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 370,
        'endLine' => 373,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getClobTypeDeclarationSQL' => 
      array (
        'name' => 'getClobTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 382,
            'endLine' => 382,
            'startColumn' => 56,
            'endColumn' => 68,
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
 * Returns the SQL snippet used to declare a CLOB column type.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 382,
        'endLine' => 382,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBlobTypeDeclarationSQL' => 
      array (
        'name' => 'getBlobTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 391,
            'endLine' => 391,
            'startColumn' => 56,
            'endColumn' => 68,
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
 * Returns the SQL Snippet used to declare a BLOB column type.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 391,
        'endLine' => 391,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
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
 * Gets the name of the platform.
 *
 * @deprecated Identify platforms by their class.
 *
 * @return string
 */',
        'startLine' => 400,
        'endLine' => 400,
        'startColumn' => 5,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'registerDoctrineTypeMapping' => 
      array (
        'name' => 'registerDoctrineTypeMapping',
        'parameters' => 
        array (
          'dbType' => 
          array (
            'name' => 'dbType',
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
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'doctrineType' => 
          array (
            'name' => 'doctrineType',
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
            'startColumn' => 58,
            'endColumn' => 70,
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
 * Registers a doctrine type to be used in conjunction with a column type of this platform.
 *
 * @param string $dbType
 * @param string $doctrineType
 *
 * @return void
 *
 * @throws Exception If the type is not found.
 */',
        'startLine' => 412,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDoctrineTypeMapping' => 
      array (
        'name' => 'getDoctrineTypeMapping',
        'parameters' => 
        array (
          'dbType' => 
          array (
            'name' => 'dbType',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 443,
            'endLine' => 443,
            'startColumn' => 44,
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
 * Gets the Doctrine type that is mapped for the given database column type.
 *
 * @param string $dbType
 *
 * @return string
 *
 * @throws Exception
 */',
        'startLine' => 443,
        'endLine' => 458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'hasDoctrineTypeMappingFor' => 
      array (
        'name' => 'hasDoctrineTypeMappingFor',
        'parameters' => 
        array (
          'dbType' => 
          array (
            'name' => 'dbType',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 467,
            'endLine' => 467,
            'startColumn' => 47,
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
 * Checks if a database type is currently supported by this platform.
 *
 * @param string $dbType
 *
 * @return bool
 */',
        'startLine' => 467,
        'endLine' => 476,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'initializeCommentedDoctrineTypes' => 
      array (
        'name' => 'initializeCommentedDoctrineTypes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes the Doctrine Type comments instance variable for in_array() checks.
 *
 * @deprecated This API will be removed in Doctrine DBAL 4.0.
 *
 * @return void
 */',
        'startLine' => 485,
        'endLine' => 505,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'isCommentedDoctrineType' => 
      array (
        'name' => 'isCommentedDoctrineType',
        'parameters' => 
        array (
          'doctrineType' => 
          array (
            'name' => 'doctrineType',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Types\\Type',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 45,
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
 * Is it necessary for the platform to add a parsable type comment to allow reverse engineering the given type?
 *
 * @deprecated Use {@link Type::requiresSQLCommentHint()} instead.
 *
 * @return bool
 */',
        'startLine' => 514,
        'endLine' => 528,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'markDoctrineTypeCommented' => 
      array (
        'name' => 'markDoctrineTypeCommented',
        'parameters' => 
        array (
          'doctrineType' => 
          array (
            'name' => 'doctrineType',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 537,
            'endLine' => 537,
            'startColumn' => 47,
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
 * Marks this type as to be commented in ALTER TABLE and CREATE TABLE statements.
 *
 * @param string|Type $doctrineType
 *
 * @return void
 */',
        'startLine' => 537,
        'endLine' => 553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDoctrineTypeComment' => 
      array (
        'name' => 'getDoctrineTypeComment',
        'parameters' => 
        array (
          'doctrineType' => 
          array (
            'name' => 'doctrineType',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Types\\Type',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 562,
            'endLine' => 562,
            'startColumn' => 44,
            'endColumn' => 61,
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
 * Gets the comment to append to a column comment that helps parsing this type in reverse engineering.
 *
 * @deprecated This method will be removed without replacement.
 *
 * @return string
 */',
        'startLine' => 562,
        'endLine' => 572,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getColumnComment' => 
      array (
        'name' => 'getColumnComment',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 41,
            'endColumn' => 54,
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
 * Gets the comment of a passed column modified by potential doctrine type comment hints.
 *
 * @deprecated This method will be removed without replacement.
 *
 * @return string|null
 */',
        'startLine' => 581,
        'endLine' => 597,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getIdentifierQuoteCharacter' => 
      array (
        'name' => 'getIdentifierQuoteCharacter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the character used for identifier quoting.
 *
 * @deprecated Use {@see quoteIdentifier()} to quote identifiers instead.
 *
 * @return string
 */',
        'startLine' => 606,
        'endLine' => 615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSqlCommentStartString' => 
      array (
        'name' => 'getSqlCommentStartString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the string portion that starts an SQL comment.
 *
 * @deprecated
 *
 * @return string
 */',
        'startLine' => 624,
        'endLine' => 633,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSqlCommentEndString' => 
      array (
        'name' => 'getSqlCommentEndString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the string portion that ends an SQL comment.
 *
 * @deprecated
 *
 * @return string
 */',
        'startLine' => 642,
        'endLine' => 651,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCharMaxLength' => 
      array (
        'name' => 'getCharMaxLength',
        'parameters' => 
        array (
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
        ),
        'docComment' => '/**
 * Gets the maximum length of a char column.
 *
 * @deprecated
 */',
        'startLine' => 658,
        'endLine' => 667,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getVarcharMaxLength' => 
      array (
        'name' => 'getVarcharMaxLength',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the maximum length of a varchar column.
 *
 * @deprecated
 *
 * @return int
 */',
        'startLine' => 676,
        'endLine' => 685,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getVarcharDefaultLength' => 
      array (
        'name' => 'getVarcharDefaultLength',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the default length of a varchar column.
 *
 * @deprecated
 *
 * @return int
 */',
        'startLine' => 694,
        'endLine' => 703,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBinaryMaxLength' => 
      array (
        'name' => 'getBinaryMaxLength',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the maximum length of a binary column.
 *
 * @deprecated
 *
 * @return int
 */',
        'startLine' => 712,
        'endLine' => 721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBinaryDefaultLength' => 
      array (
        'name' => 'getBinaryDefaultLength',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the default length of a binary column.
 *
 * @deprecated
 *
 * @return int
 */',
        'startLine' => 730,
        'endLine' => 739,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getWildcards' => 
      array (
        'name' => 'getWildcards',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets all SQL wildcard characters of the platform.
 *
 * @deprecated Use {@see AbstractPlatform::getLikeWildcardCharacters()} instead.
 *
 * @return string[]
 */',
        'startLine' => 748,
        'endLine' => 758,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getRegexpExpression' => 
      array (
        'name' => 'getRegexpExpression',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the regular expression operator.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 767,
        'endLine' => 770,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getAvgExpression' => 
      array (
        'name' => 'getAvgExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 781,
            'endLine' => 781,
            'startColumn' => 38,
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
 * Returns the SQL snippet to get the average value of a column.
 *
 * @deprecated Use AVG() in SQL instead.
 *
 * @param string $column The column to use.
 *
 * @return string Generated SQL including an AVG aggregate function.
 */',
        'startLine' => 781,
        'endLine' => 790,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCountExpression' => 
      array (
        'name' => 'getCountExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 803,
            'endLine' => 803,
            'startColumn' => 40,
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
 * Returns the SQL snippet to get the number of rows (without a NULL value) of a column.
 *
 * If a \'*\' is used instead of a column the number of selected rows is returned.
 *
 * @deprecated Use COUNT() in SQL instead.
 *
 * @param string|int $column The column to use.
 *
 * @return string Generated SQL including a COUNT aggregate function.
 */',
        'startLine' => 803,
        'endLine' => 812,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getMaxExpression' => 
      array (
        'name' => 'getMaxExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 823,
            'endLine' => 823,
            'startColumn' => 38,
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
 * Returns the SQL snippet to get the highest value of a column.
 *
 * @deprecated Use MAX() in SQL instead.
 *
 * @param string $column The column to use.
 *
 * @return string Generated SQL including a MAX aggregate function.
 */',
        'startLine' => 823,
        'endLine' => 832,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getMinExpression' => 
      array (
        'name' => 'getMinExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 843,
            'endLine' => 843,
            'startColumn' => 38,
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
 * Returns the SQL snippet to get the lowest value of a column.
 *
 * @deprecated Use MIN() in SQL instead.
 *
 * @param string $column The column to use.
 *
 * @return string Generated SQL including a MIN aggregate function.
 */',
        'startLine' => 843,
        'endLine' => 852,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSumExpression' => 
      array (
        'name' => 'getSumExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 863,
            'endLine' => 863,
            'startColumn' => 38,
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
 * Returns the SQL snippet to get the total sum of a column.
 *
 * @deprecated Use SUM() in SQL instead.
 *
 * @param string $column The column to use.
 *
 * @return string Generated SQL including a SUM aggregate function.
 */',
        'startLine' => 863,
        'endLine' => 872,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getMd5Expression' => 
      array (
        'name' => 'getMd5Expression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 887,
            'endLine' => 887,
            'startColumn' => 38,
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
 * Returns the SQL snippet to get the md5 sum of a column.
 *
 * Note: Not SQL92, but common functionality.
 *
 * @deprecated
 *
 * @param string $column
 *
 * @return string
 */',
        'startLine' => 887,
        'endLine' => 896,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getLengthExpression' => 
      array (
        'name' => 'getLengthExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 41,
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
 * Returns the SQL snippet to get the length of a text column in characters.
 *
 * @param string $column
 *
 * @return string
 */',
        'startLine' => 905,
        'endLine' => 908,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSqrtExpression' => 
      array (
        'name' => 'getSqrtExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 919,
            'endLine' => 919,
            'startColumn' => 39,
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
 * Returns the SQL snippet to get the squared value of a column.
 *
 * @deprecated Use SQRT() in SQL instead.
 *
 * @param string $column The column to use.
 *
 * @return string Generated SQL including an SQRT aggregate function.
 */',
        'startLine' => 919,
        'endLine' => 928,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getRoundExpression' => 
      array (
        'name' => 'getRoundExpression',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 940,
            'endLine' => 940,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'decimals' => 
          array (
            'name' => 'decimals',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 940,
                'endLine' => 940,
                'startTokenPos' => 2751,
                'startFilePos' => 26334,
                'endTokenPos' => 2751,
                'endFilePos' => 26334,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 940,
            'endLine' => 940,
            'startColumn' => 49,
            'endColumn' => 61,
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
 * Returns the SQL snippet to round a numeric column to the number of decimals specified.
 *
 * @deprecated Use ROUND() in SQL instead.
 *
 * @param string     $column
 * @param string|int $decimals
 *
 * @return string
 */',
        'startLine' => 940,
        'endLine' => 949,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getModExpression' => 
      array (
        'name' => 'getModExpression',
        'parameters' => 
        array (
          'expression1' => 
          array (
            'name' => 'expression1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 959,
            'endLine' => 959,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expression2' => 
          array (
            'name' => 'expression2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 959,
            'endLine' => 959,
            'startColumn' => 52,
            'endColumn' => 63,
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
 * Returns the SQL snippet to get the remainder of the division operation $expression1 / $expression2.
 *
 * @param string $expression1
 * @param string $expression2
 *
 * @return string
 */',
        'startLine' => 959,
        'endLine' => 962,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getTrimExpression' => 
      array (
        'name' => 'getTrimExpression',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 973,
            'endLine' => 973,
            'startColumn' => 39,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'mode' => 
          array (
            'name' => 'mode',
            'default' => 
            array (
              'code' => '\\Doctrine\\DBAL\\Platforms\\TrimMode::UNSPECIFIED',
              'attributes' => 
              array (
                'startLine' => 973,
                'endLine' => 973,
                'startTokenPos' => 2850,
                'startFilePos' => 27406,
                'endTokenPos' => 2852,
                'endFilePos' => 27426,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 973,
            'endLine' => 973,
            'startColumn' => 45,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'char' => 
          array (
            'name' => 'char',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 973,
                'endLine' => 973,
                'startTokenPos' => 2859,
                'startFilePos' => 27437,
                'endTokenPos' => 2859,
                'endFilePos' => 27441,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 973,
            'endLine' => 973,
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
 * Returns the SQL snippet to trim a string.
 *
 * @param string      $str  The expression to apply the trim to.
 * @param int         $mode The position of the trim (leading/trailing/both).
 * @param string|bool $char The char to trim, has to be quoted already. Defaults to space.
 *
 * @return string
 */',
        'startLine' => 973,
        'endLine' => 1000,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getRtrimExpression' => 
      array (
        'name' => 'getRtrimExpression',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1011,
            'endLine' => 1011,
            'startColumn' => 40,
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
 * Returns the SQL snippet to trim trailing space characters from the expression.
 *
 * @deprecated Use RTRIM() in SQL instead.
 *
 * @param string $str Literal string or column name.
 *
 * @return string
 */',
        'startLine' => 1011,
        'endLine' => 1020,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getLtrimExpression' => 
      array (
        'name' => 'getLtrimExpression',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1031,
            'endLine' => 1031,
            'startColumn' => 40,
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
 * Returns the SQL snippet to trim leading space characters from the expression.
 *
 * @deprecated Use LTRIM() in SQL instead.
 *
 * @param string $str Literal string or column name.
 *
 * @return string
 */',
        'startLine' => 1031,
        'endLine' => 1040,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getUpperExpression' => 
      array (
        'name' => 'getUpperExpression',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1052,
            'endLine' => 1052,
            'startColumn' => 40,
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
 * Returns the SQL snippet to change all characters from the expression to uppercase,
 * according to the current character set mapping.
 *
 * @deprecated Use UPPER() in SQL instead.
 *
 * @param string $str Literal string or column name.
 *
 * @return string
 */',
        'startLine' => 1052,
        'endLine' => 1061,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getLowerExpression' => 
      array (
        'name' => 'getLowerExpression',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1073,
            'endLine' => 1073,
            'startColumn' => 40,
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
 * Returns the SQL snippet to change all characters from the expression to lowercase,
 * according to the current character set mapping.
 *
 * @deprecated Use LOWER() in SQL instead.
 *
 * @param string $str Literal string or column name.
 *
 * @return string
 */',
        'startLine' => 1073,
        'endLine' => 1082,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getLocateExpression' => 
      array (
        'name' => 'getLocateExpression',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1095,
            'endLine' => 1095,
            'startColumn' => 41,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'substr' => 
          array (
            'name' => 'substr',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1095,
            'endLine' => 1095,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'startPos' => 
          array (
            'name' => 'startPos',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1095,
                'endLine' => 1095,
                'startTokenPos' => 3205,
                'startFilePos' => 30983,
                'endTokenPos' => 3205,
                'endFilePos' => 30987,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1095,
            'endLine' => 1095,
            'startColumn' => 56,
            'endColumn' => 72,
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
 * Returns the SQL snippet to get the position of the first occurrence of substring $substr in string $str.
 *
 * @param string           $str      Literal string.
 * @param string           $substr   Literal string to find.
 * @param string|int|false $startPos Position to start at, beginning of string by default.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1095,
        'endLine' => 1098,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getNowExpression' => 
      array (
        'name' => 'getNowExpression',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL snippet to get the current system date.
 *
 * @deprecated Generate dates within the application.
 *
 * @return string
 */',
        'startLine' => 1107,
        'endLine' => 1116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSubstringExpression' => 
      array (
        'name' => 'getSubstringExpression',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1131,
            'endLine' => 1131,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'start' => 
          array (
            'name' => 'start',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1131,
            'endLine' => 1131,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1131,
                'endLine' => 1131,
                'startTokenPos' => 3276,
                'startFilePos' => 32093,
                'endTokenPos' => 3276,
                'endFilePos' => 32096,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1131,
            'endLine' => 1131,
            'startColumn' => 61,
            'endColumn' => 74,
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
 * Returns a SQL snippet to get a substring inside an SQL statement.
 *
 * Note: Not SQL92, but common functionality.
 *
 * SQLite only supports the 2 parameter variant of this function.
 *
 * @param string          $string An sql string literal or column name/alias.
 * @param string|int      $start  Where to start the substring portion.
 * @param string|int|null $length The substring portion length.
 *
 * @return string
 */',
        'startLine' => 1131,
        'endLine' => 1138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getConcatExpression' => 
      array (
        'name' => 'getConcatExpression',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a SQL snippet to concatenate the given expressions.
 *
 * Accepts an arbitrary number of string parameters. Each parameter must contain an expression.
 *
 * @return string
 */',
        'startLine' => 1147,
        'endLine' => 1150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getNotExpression' => 
      array (
        'name' => 'getNotExpression',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1169,
            'endLine' => 1169,
            'startColumn' => 38,
            'endColumn' => 48,
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
 * Returns the SQL for a logical not.
 *
 * Example:
 * <code>
 * $q = new Doctrine_Query();
 * $e = $q->expr;
 * $q->select(\'*\')->from(\'table\')
 *   ->where($e->eq(\'id\', $e->not(\'null\'));
 * </code>
 *
 * @deprecated Use NOT() in SQL instead.
 *
 * @param string $expression
 *
 * @return string The logical expression.
 */',
        'startLine' => 1169,
        'endLine' => 1178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getIsNullExpression' => 
      array (
        'name' => 'getIsNullExpression',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1189,
            'endLine' => 1189,
            'startColumn' => 41,
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
 * Returns the SQL that checks if an expression is null.
 *
 * @deprecated Use IS NULL in SQL instead.
 *
 * @param string $expression The expression that should be compared to null.
 *
 * @return string The logical expression.
 */',
        'startLine' => 1189,
        'endLine' => 1198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getIsNotNullExpression' => 
      array (
        'name' => 'getIsNotNullExpression',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1209,
            'endLine' => 1209,
            'startColumn' => 44,
            'endColumn' => 54,
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
 * Returns the SQL that checks if an expression is not null.
 *
 * @deprecated Use IS NOT NULL in SQL instead.
 *
 * @param string $expression The expression that should be compared to null.
 *
 * @return string The logical expression.
 */',
        'startLine' => 1209,
        'endLine' => 1218,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBetweenExpression' => 
      array (
        'name' => 'getBetweenExpression',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1237,
            'endLine' => 1237,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value1' => 
          array (
            'name' => 'value1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1237,
            'endLine' => 1237,
            'startColumn' => 55,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value2' => 
          array (
            'name' => 'value2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1237,
            'endLine' => 1237,
            'startColumn' => 64,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL that checks if an expression evaluates to a value between two values.
 *
 * The parameter $expression is checked if it is between $value1 and $value2.
 *
 * Note: There is a slight difference in the way BETWEEN works on some databases.
 * http://www.w3schools.com/sql/sql_between.asp. If you want complete database
 * independence you should avoid using between().
 *
 * @deprecated Use BETWEEN in SQL instead.
 *
 * @param string $expression The value to compare to.
 * @param string $value1     The lower value to compare with.
 * @param string $value2     The higher value to compare with.
 *
 * @return string The logical expression.
 */',
        'startLine' => 1237,
        'endLine' => 1246,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getAcosExpression' => 
      array (
        'name' => 'getAcosExpression',
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
            'startLine' => 1257,
            'endLine' => 1257,
            'startColumn' => 39,
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
 * Returns the SQL to get the arccosine of a value.
 *
 * @deprecated Use ACOS() in SQL instead.
 *
 * @param string $value
 *
 * @return string
 */',
        'startLine' => 1257,
        'endLine' => 1266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSinExpression' => 
      array (
        'name' => 'getSinExpression',
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
            'startLine' => 1277,
            'endLine' => 1277,
            'startColumn' => 38,
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
 * Returns the SQL to get the sine of a value.
 *
 * @deprecated Use SIN() in SQL instead.
 *
 * @param string $value
 *
 * @return string
 */',
        'startLine' => 1277,
        'endLine' => 1286,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getPiExpression' => 
      array (
        'name' => 'getPiExpression',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL to get the PI value.
 *
 * @deprecated Use PI() in SQL instead.
 *
 * @return string
 */',
        'startLine' => 1295,
        'endLine' => 1304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCosExpression' => 
      array (
        'name' => 'getCosExpression',
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
            'startLine' => 1315,
            'endLine' => 1315,
            'startColumn' => 38,
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
 * Returns the SQL to get the cosine of a value.
 *
 * @deprecated Use COS() in SQL instead.
 *
 * @param string $value
 *
 * @return string
 */',
        'startLine' => 1315,
        'endLine' => 1324,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateDiffExpression' => 
      array (
        'name' => 'getDateDiffExpression',
        'parameters' => 
        array (
          'date1' => 
          array (
            'name' => 'date1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1338,
            'endLine' => 1338,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'date2' => 
          array (
            'name' => 'date2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1338,
            'endLine' => 1338,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Returns the SQL to calculate the difference in days between the two passed dates.
 *
 * Computes diff = date1 - date2.
 *
 * @param string $date1
 * @param string $date2
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1338,
        'endLine' => 1341,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddSecondsExpression' => 
      array (
        'name' => 'getDateAddSecondsExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1353,
            'endLine' => 1353,
            'startColumn' => 49,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1353,
            'endLine' => 1353,
            'startColumn' => 56,
            'endColumn' => 63,
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
 * Returns the SQL to add the number of given seconds to a date.
 *
 * @param string     $date
 * @param int|string $seconds
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1353,
        'endLine' => 1364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubSecondsExpression' => 
      array (
        'name' => 'getDateSubSecondsExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1376,
            'endLine' => 1376,
            'startColumn' => 49,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1376,
            'endLine' => 1376,
            'startColumn' => 56,
            'endColumn' => 63,
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
 * Returns the SQL to subtract the number of given seconds from a date.
 *
 * @param string     $date
 * @param int|string $seconds
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1376,
        'endLine' => 1387,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddMinutesExpression' => 
      array (
        'name' => 'getDateAddMinutesExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1399,
            'endLine' => 1399,
            'startColumn' => 49,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1399,
            'endLine' => 1399,
            'startColumn' => 56,
            'endColumn' => 63,
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
 * Returns the SQL to add the number of given minutes to a date.
 *
 * @param string     $date
 * @param int|string $minutes
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1399,
        'endLine' => 1410,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubMinutesExpression' => 
      array (
        'name' => 'getDateSubMinutesExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1422,
            'endLine' => 1422,
            'startColumn' => 49,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1422,
            'endLine' => 1422,
            'startColumn' => 56,
            'endColumn' => 63,
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
 * Returns the SQL to subtract the number of given minutes from a date.
 *
 * @param string     $date
 * @param int|string $minutes
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1422,
        'endLine' => 1433,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddHourExpression' => 
      array (
        'name' => 'getDateAddHourExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1445,
            'endLine' => 1445,
            'startColumn' => 46,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'hours' => 
          array (
            'name' => 'hours',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1445,
            'endLine' => 1445,
            'startColumn' => 53,
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
 * Returns the SQL to add the number of given hours to a date.
 *
 * @param string     $date
 * @param int|string $hours
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1445,
        'endLine' => 1456,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubHourExpression' => 
      array (
        'name' => 'getDateSubHourExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1468,
            'endLine' => 1468,
            'startColumn' => 46,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'hours' => 
          array (
            'name' => 'hours',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1468,
            'endLine' => 1468,
            'startColumn' => 53,
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
 * Returns the SQL to subtract the number of given hours to a date.
 *
 * @param string     $date
 * @param int|string $hours
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1468,
        'endLine' => 1479,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddDaysExpression' => 
      array (
        'name' => 'getDateAddDaysExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1491,
            'endLine' => 1491,
            'startColumn' => 46,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'days' => 
          array (
            'name' => 'days',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1491,
            'endLine' => 1491,
            'startColumn' => 53,
            'endColumn' => 57,
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
 * Returns the SQL to add the number of given days to a date.
 *
 * @param string     $date
 * @param int|string $days
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1491,
        'endLine' => 1502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubDaysExpression' => 
      array (
        'name' => 'getDateSubDaysExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1514,
            'endLine' => 1514,
            'startColumn' => 46,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'days' => 
          array (
            'name' => 'days',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1514,
            'endLine' => 1514,
            'startColumn' => 53,
            'endColumn' => 57,
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
 * Returns the SQL to subtract the number of given days to a date.
 *
 * @param string     $date
 * @param int|string $days
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1514,
        'endLine' => 1525,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddWeeksExpression' => 
      array (
        'name' => 'getDateAddWeeksExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1537,
            'endLine' => 1537,
            'startColumn' => 47,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'weeks' => 
          array (
            'name' => 'weeks',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1537,
            'endLine' => 1537,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Returns the SQL to add the number of given weeks to a date.
 *
 * @param string     $date
 * @param int|string $weeks
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1537,
        'endLine' => 1548,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubWeeksExpression' => 
      array (
        'name' => 'getDateSubWeeksExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1560,
            'endLine' => 1560,
            'startColumn' => 47,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'weeks' => 
          array (
            'name' => 'weeks',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1560,
            'endLine' => 1560,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Returns the SQL to subtract the number of given weeks from a date.
 *
 * @param string     $date
 * @param int|string $weeks
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1560,
        'endLine' => 1571,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddMonthExpression' => 
      array (
        'name' => 'getDateAddMonthExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1583,
            'endLine' => 1583,
            'startColumn' => 47,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'months' => 
          array (
            'name' => 'months',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1583,
            'endLine' => 1583,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Returns the SQL to add the number of given months to a date.
 *
 * @param string     $date
 * @param int|string $months
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1583,
        'endLine' => 1594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubMonthExpression' => 
      array (
        'name' => 'getDateSubMonthExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1606,
            'endLine' => 1606,
            'startColumn' => 47,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'months' => 
          array (
            'name' => 'months',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1606,
            'endLine' => 1606,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Returns the SQL to subtract the number of given months to a date.
 *
 * @param string     $date
 * @param int|string $months
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1606,
        'endLine' => 1617,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddQuartersExpression' => 
      array (
        'name' => 'getDateAddQuartersExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1629,
            'endLine' => 1629,
            'startColumn' => 50,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'quarters' => 
          array (
            'name' => 'quarters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1629,
            'endLine' => 1629,
            'startColumn' => 57,
            'endColumn' => 65,
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
 * Returns the SQL to add the number of given quarters to a date.
 *
 * @param string     $date
 * @param int|string $quarters
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1629,
        'endLine' => 1640,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubQuartersExpression' => 
      array (
        'name' => 'getDateSubQuartersExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1652,
            'endLine' => 1652,
            'startColumn' => 50,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'quarters' => 
          array (
            'name' => 'quarters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1652,
            'endLine' => 1652,
            'startColumn' => 57,
            'endColumn' => 65,
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
 * Returns the SQL to subtract the number of given quarters from a date.
 *
 * @param string     $date
 * @param int|string $quarters
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1652,
        'endLine' => 1663,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateAddYearsExpression' => 
      array (
        'name' => 'getDateAddYearsExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1675,
            'endLine' => 1675,
            'startColumn' => 47,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'years' => 
          array (
            'name' => 'years',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1675,
            'endLine' => 1675,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Returns the SQL to add the number of given years to a date.
 *
 * @param string     $date
 * @param int|string $years
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1675,
        'endLine' => 1686,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateSubYearsExpression' => 
      array (
        'name' => 'getDateSubYearsExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1698,
            'endLine' => 1698,
            'startColumn' => 47,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'years' => 
          array (
            'name' => 'years',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1698,
            'endLine' => 1698,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Returns the SQL to subtract the number of given years from a date.
 *
 * @param string     $date
 * @param int|string $years
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1698,
        'endLine' => 1709,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateArithmeticIntervalExpression' => 
      array (
        'name' => 'getDateArithmeticIntervalExpression',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1725,
            'endLine' => 1725,
            'startColumn' => 60,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1725,
            'endLine' => 1725,
            'startColumn' => 67,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1725,
            'endLine' => 1725,
            'startColumn' => 78,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'unit' => 
          array (
            'name' => 'unit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1725,
            'endLine' => 1725,
            'startColumn' => 89,
            'endColumn' => 93,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL for a date arithmetic expression.
 *
 * @param string     $date     The column or literal representing a date
 *                                     to perform the arithmetic operation on.
 * @param string     $operator The arithmetic operator (+ or -).
 * @param int|string $interval The interval that shall be calculated into the date.
 * @param string     $unit     The unit of the interval that shall be calculated into the date.
 *                                     One of the {@see DateIntervalUnit} constants.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 1725,
        'endLine' => 1728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'multiplyInterval' => 
      array (
        'name' => 'multiplyInterval',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1736,
            'endLine' => 1736,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'multiplier' => 
          array (
            'name' => 'multiplier',
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
            'startLine' => 1736,
            'endLine' => 1736,
            'startColumn' => 59,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates the SQL expression which represents the given date interval multiplied by a number
 *
 * @param string $interval   SQL expression describing the interval value
 * @param int    $multiplier Interval multiplier
 */',
        'startLine' => 1736,
        'endLine' => 1739,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBitAndComparisonExpression' => 
      array (
        'name' => 'getBitAndComparisonExpression',
        'parameters' => 
        array (
          'value1' => 
          array (
            'name' => 'value1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1749,
            'endLine' => 1749,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value2' => 
          array (
            'name' => 'value2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1749,
            'endLine' => 1749,
            'startColumn' => 60,
            'endColumn' => 66,
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
 * Returns the SQL bit AND comparison expression.
 *
 * @param string $value1
 * @param string $value2
 *
 * @return string
 */',
        'startLine' => 1749,
        'endLine' => 1752,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getBitOrComparisonExpression' => 
      array (
        'name' => 'getBitOrComparisonExpression',
        'parameters' => 
        array (
          'value1' => 
          array (
            'name' => 'value1',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1762,
            'endLine' => 1762,
            'startColumn' => 50,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value2' => 
          array (
            'name' => 'value2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1762,
            'endLine' => 1762,
            'startColumn' => 59,
            'endColumn' => 65,
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
 * Returns the SQL bit OR comparison expression.
 *
 * @param string $value1
 * @param string $value2
 *
 * @return string
 */',
        'startLine' => 1762,
        'endLine' => 1765,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCurrentDatabaseExpression' => 
      array (
        'name' => 'getCurrentDatabaseExpression',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL expression which represents the currently selected database.
 */',
        'startLine' => 1770,
        'endLine' => 1770,
        'startColumn' => 5,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getForUpdateSQL' => 
      array (
        'name' => 'getForUpdateSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the FOR UPDATE expression.
 *
 * @deprecated This API is not portable. Use {@link QueryBuilder::forUpdate()}` instead.
 *
 * @return string
 */',
        'startLine' => 1779,
        'endLine' => 1789,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'appendLockHint' => 
      array (
        'name' => 'appendLockHint',
        'parameters' => 
        array (
          'fromClause' => 
          array (
            'name' => 'fromClause',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1799,
            'endLine' => 1799,
            'startColumn' => 36,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'lockMode' => 
          array (
            'name' => 'lockMode',
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
            'startLine' => 1799,
            'endLine' => 1799,
            'startColumn' => 56,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Honors that some SQL vendors such as MsSql use table hints for locking instead of the
 * ANSI SQL FOR UPDATE specification.
 *
 * @param string $fromClause The FROM clause to append the hint for the given lock mode to
 * @param int    $lockMode   One of the Doctrine\\DBAL\\LockMode::* constants
 * @phpstan-param LockMode::* $lockMode
 */',
        'startLine' => 1799,
        'endLine' => 1811,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getReadLockSQL' => 
      array (
        'name' => 'getReadLockSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL snippet to append to any SELECT statement which locks rows in shared read lock.
 *
 * This defaults to the ANSI SQL "FOR UPDATE", which is an exclusive lock (Write). Some database
 * vendors allow to lighten this constraint up to be a real read lock.
 *
 * @deprecated This API is not portable.
 *
 * @return string
 */',
        'startLine' => 1823,
        'endLine' => 1833,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getWriteLockSQL' => 
      array (
        'name' => 'getWriteLockSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL snippet to append to any SELECT statement which obtains an exclusive lock on the rows.
 *
 * The semantics of this lock mode should equal the SELECT .. FOR UPDATE of the ANSI SQL standard.
 *
 * @deprecated This API is not portable.
 *
 * @return string
 */',
        'startLine' => 1844,
        'endLine' => 1854,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropTableSQL' => 
      array (
        'name' => 'getDropTableSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1865,
            'endLine' => 1865,
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
 * Returns the SQL snippet to drop an existing table.
 *
 * @param Table|string $table
 *
 * @return string
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 1865,
        'endLine' => 1909,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropTemporaryTableSQL' => 
      array (
        'name' => 'getDropTemporaryTableSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1918,
            'endLine' => 1918,
            'startColumn' => 46,
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
 * Returns the SQL to safely drop a temporary table WITHOUT implicitly committing an open transaction.
 *
 * @param Table|string $table
 *
 * @return string
 */',
        'startLine' => 1918,
        'endLine' => 1932,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropIndexSQL' => 
      array (
        'name' => 'getDropIndexSQL',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1944,
            'endLine' => 1944,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1944,
                'endLine' => 1944,
                'startTokenPos' => 5576,
                'startFilePos' => 56937,
                'endTokenPos' => 5576,
                'endFilePos' => 56940,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1944,
            'endLine' => 1944,
            'startColumn' => 45,
            'endColumn' => 57,
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
 * Returns the SQL to drop an index from a table.
 *
 * @param Index|string      $index
 * @param Table|string|null $table
 *
 * @return string
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 1944,
        'endLine' => 1962,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropConstraintSQL' => 
      array (
        'name' => 'getDropConstraintSQL',
        'parameters' => 
        array (
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1974,
            'endLine' => 1974,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1974,
            'endLine' => 1974,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Returns the SQL to drop a constraint.
 *
 * @internal The method should be only used from within the {@see AbstractPlatform} class hierarchy.
 *
 * @param Constraint|string $constraint
 * @param Table|string      $table
 *
 * @return string
 */',
        'startLine' => 1974,
        'endLine' => 2002,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropForeignKeySQL' => 
      array (
        'name' => 'getDropForeignKeySQL',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2012,
            'endLine' => 2012,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2012,
            'endLine' => 2012,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Returns the SQL to drop a foreign key.
 *
 * @param ForeignKeyConstraint|string $foreignKey
 * @param Table|string                $table
 *
 * @return string
 */',
        'startLine' => 2012,
        'endLine' => 2041,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropUniqueConstraintSQL' => 
      array (
        'name' => 'getDropUniqueConstraintSQL',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2046,
            'endLine' => 2046,
            'startColumn' => 48,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2046,
            'endLine' => 2046,
            'startColumn' => 62,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL to drop a unique constraint.
 */',
        'startLine' => 2046,
        'endLine' => 2049,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateTableSQL' => 
      array (
        'name' => 'getCreateTableSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Table',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2063,
            'endLine' => 2063,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'createFlags' => 
          array (
            'name' => 'createFlags',
            'default' => 
            array (
              'code' => 'self::CREATE_INDEXES',
              'attributes' => 
              array (
                'startLine' => 2063,
                'endLine' => 2063,
                'startTokenPos' => 6065,
                'startFilePos' => 60953,
                'endTokenPos' => 6067,
                'endFilePos' => 60972,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2063,
            'endLine' => 2063,
            'startColumn' => 53,
            'endColumn' => 87,
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
 * Returns the SQL statement(s) to create a table with the specified name, columns and constraints
 * on this platform.
 *
 * @param int $createFlags
 * @phpstan-param int-mask-of<self::CREATE_*> $createFlags
 *
 * @return list<string> The list of SQL statements.
 *
 * @throws Exception
 * @throws InvalidArgumentException
 */',
        'startLine' => 2063,
        'endLine' => 2094,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'createSelectSQLBuilder' => 
      array (
        'name' => 'createSelectSQLBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\SQL\\Builder\\SelectSQLBuilder',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2096,
        'endLine' => 2099,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateTableWithoutForeignKeysSQL' => 
      array (
        'name' => 'getCreateTableWithoutForeignKeysSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Table',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2108,
            'endLine' => 2108,
            'startColumn' => 66,
            'endColumn' => 77,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @internal
 *
 * @return list<string>
 *
 * @throws Exception
 */',
        'startLine' => 2108,
        'endLine' => 2111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 34,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'buildCreateTableSQL' => 
      array (
        'name' => 'buildCreateTableSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Table',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2118,
            'endLine' => 2118,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'createIndexes' => 
          array (
            'name' => 'createIndexes',
            'default' => NULL,
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
            'startLine' => 2118,
            'endLine' => 2118,
            'startColumn' => 56,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'createForeignKeys' => 
          array (
            'name' => 'createForeignKeys',
            'default' => NULL,
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
            'startLine' => 2118,
            'endLine' => 2118,
            'startColumn' => 77,
            'endColumn' => 99,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
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
 * @return list<string>
 *
 * @throws Exception
 */',
        'startLine' => 2118,
        'endLine' => 2226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateTablesSQL' => 
      array (
        'name' => 'getCreateTablesSQL',
        'parameters' => 
        array (
          'tables' => 
          array (
            'name' => 'tables',
            'default' => NULL,
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
            'startLine' => 2235,
            'endLine' => 2235,
            'startColumn' => 40,
            'endColumn' => 52,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param Table[] $tables
 *
 * @return list<string>
 *
 * @throws Exception
 */',
        'startLine' => 2235,
        'endLine' => 2253,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropTablesSQL' => 
      array (
        'name' => 'getDropTablesSQL',
        'parameters' => 
        array (
          'tables' => 
          array (
            'name' => 'tables',
            'default' => NULL,
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
            'startLine' => 2260,
            'endLine' => 2260,
            'startColumn' => 38,
            'endColumn' => 50,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param list<Table> $tables
 *
 * @return list<string>
 */',
        'startLine' => 2260,
        'endLine' => 2278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCommentOnTableSQL' => 
      array (
        'name' => 'getCommentOnTableSQL',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2280,
            'endLine' => 2280,
            'startColumn' => 45,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'comment' => 
          array (
            'name' => 'comment',
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
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
            'startLine' => 2280,
            'endLine' => 2280,
            'startColumn' => 64,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2280,
        'endLine' => 2289,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCommentOnColumnSQL' => 
      array (
        'name' => 'getCommentOnColumnSQL',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2298,
            'endLine' => 2298,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columnName' => 
          array (
            'name' => 'columnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2298,
            'endLine' => 2298,
            'startColumn' => 55,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'comment' => 
          array (
            'name' => 'comment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2298,
            'endLine' => 2298,
            'startColumn' => 68,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string      $tableName
 * @param string      $columnName
 * @param string|null $comment
 *
 * @return string
 */',
        'startLine' => 2298,
        'endLine' => 2309,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getInlineColumnCommentSQL' => 
      array (
        'name' => 'getInlineColumnCommentSQL',
        'parameters' => 
        array (
          'comment' => 
          array (
            'name' => 'comment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2320,
            'endLine' => 2320,
            'startColumn' => 47,
            'endColumn' => 54,
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
 * Returns the SQL to create inline comment on a column.
 *
 * @param string $comment
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 2320,
        'endLine' => 2327,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      '_getCreateTableSQL' => 
      array (
        'name' => '_getCreateTableSQL',
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
            'startLine' => 2338,
            'endLine' => 2338,
            'startColumn' => 43,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
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
            'startLine' => 2338,
            'endLine' => 2338,
            'startColumn' => 50,
            'endColumn' => 63,
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
                'startLine' => 2338,
                'endLine' => 2338,
                'startTokenPos' => 7563,
                'startFilePos' => 69614,
                'endTokenPos' => 7564,
                'endFilePos' => 69615,
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
            'startLine' => 2338,
            'endLine' => 2338,
            'startColumn' => 66,
            'endColumn' => 84,
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
 * Returns the SQL used to create a table.
 *
 * @param string    $name
 * @param mixed[][] $columns
 * @param mixed[]   $options
 *
 * @return string[]
 */',
        'startLine' => 2338,
        'endLine' => 2376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateTemporaryTableSnippetSQL' => 
      array (
        'name' => 'getCreateTemporaryTableSnippetSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/** @return string */',
        'startLine' => 2379,
        'endLine' => 2382,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getAlterSchemaSQL' => 
      array (
        'name' => 'getAlterSchemaSQL',
        'parameters' => 
        array (
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\SchemaDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2389,
            'endLine' => 2389,
            'startColumn' => 39,
            'endColumn' => 54,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates SQL statements that can be used to apply the diff.
 *
 * @return list<string>
 */',
        'startLine' => 2389,
        'endLine' => 2392,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateSequenceSQL' => 
      array (
        'name' => 'getCreateSequenceSQL',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Sequence',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2401,
            'endLine' => 2401,
            'startColumn' => 42,
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
 * Returns the SQL to create a sequence on this platform.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 2401,
        'endLine' => 2404,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getAlterSequenceSQL' => 
      array (
        'name' => 'getAlterSequenceSQL',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Sequence',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2413,
            'endLine' => 2413,
            'startColumn' => 41,
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
 * Returns the SQL to change a sequence on this platform.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 2413,
        'endLine' => 2416,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropSequenceSQL' => 
      array (
        'name' => 'getDropSequenceSQL',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2427,
            'endLine' => 2427,
            'startColumn' => 40,
            'endColumn' => 48,
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
 * Returns the SQL snippet to drop an existing sequence.
 *
 * @param Sequence|string $sequence
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 2427,
        'endLine' => 2445,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateConstraintSQL' => 
      array (
        'name' => 'getCreateConstraintSQL',
        'parameters' => 
        array (
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Constraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2459,
            'endLine' => 2459,
            'startColumn' => 44,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2459,
            'endLine' => 2459,
            'startColumn' => 68,
            'endColumn' => 73,
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
 * Returns the SQL to create a constraint on a table on this platform.
 *
 * @deprecated Use {@see getCreateIndexSQL()}, {@see getCreateForeignKeySQL()}
 *             or {@see getCreateUniqueConstraintSQL()} instead.
 *
 * @param Table|string $table
 *
 * @return string
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 2459,
        'endLine' => 2499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateIndexSQL' => 
      array (
        'name' => 'getCreateIndexSQL',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2510,
            'endLine' => 2510,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2510,
            'endLine' => 2510,
            'startColumn' => 53,
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
 * Returns the SQL to create an index on a table on this platform.
 *
 * @param Table|string $table The name of the table on which the index is to be created.
 *
 * @return string
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 2510,
        'endLine' => 2542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getPartialIndexSQL' => 
      array (
        'name' => 'getPartialIndexSQL',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2549,
            'endLine' => 2549,
            'startColumn' => 43,
            'endColumn' => 54,
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
 * Adds condition for partial index.
 *
 * @return string
 */',
        'startLine' => 2549,
        'endLine' => 2556,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateIndexSQLFlags' => 
      array (
        'name' => 'getCreateIndexSQLFlags',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2563,
            'endLine' => 2563,
            'startColumn' => 47,
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
 * Adds additional flags for index generation.
 *
 * @return string
 */',
        'startLine' => 2563,
        'endLine' => 2566,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreatePrimaryKeySQL' => 
      array (
        'name' => 'getCreatePrimaryKeySQL',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2575,
            'endLine' => 2575,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2575,
            'endLine' => 2575,
            'startColumn' => 58,
            'endColumn' => 63,
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
 * Returns the SQL to create an unnamed primary key constraint.
 *
 * @param Table|string $table
 *
 * @return string
 */',
        'startLine' => 2575,
        'endLine' => 2589,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateSchemaSQL' => 
      array (
        'name' => 'getCreateSchemaSQL',
        'parameters' => 
        array (
          'schemaName' => 
          array (
            'name' => 'schemaName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2600,
            'endLine' => 2600,
            'startColumn' => 40,
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
 * Returns the SQL to create a named schema.
 *
 * @param string $schemaName
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 2600,
        'endLine' => 2607,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateUniqueConstraintSQL' => 
      array (
        'name' => 'getCreateUniqueConstraintSQL',
        'parameters' => 
        array (
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\UniqueConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2612,
            'endLine' => 2612,
            'startColumn' => 50,
            'endColumn' => 77,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2612,
            'endLine' => 2612,
            'startColumn' => 80,
            'endColumn' => 96,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL to create a unique constraint on a table on this platform.
 */',
        'startLine' => 2612,
        'endLine' => 2615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropSchemaSQL' => 
      array (
        'name' => 'getDropSchemaSQL',
        'parameters' => 
        array (
          'schemaName' => 
          array (
            'name' => 'schemaName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2622,
            'endLine' => 2622,
            'startColumn' => 38,
            'endColumn' => 55,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL snippet to drop a schema.
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 2622,
        'endLine' => 2629,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'quoteIdentifier' => 
      array (
        'name' => 'quoteIdentifier',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2644,
            'endLine' => 2644,
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
 * Quotes a string so that it can be safely used as a table or column name,
 * even if it is a reserved word of the platform. This also detects identifier
 * chains separated by dot and quotes them independently.
 *
 * NOTE: Just because you CAN use quoted identifiers doesn\'t mean
 * you SHOULD use them. In general, they end up causing way more
 * problems than they solve.
 *
 * @param string $str The identifier name to be quoted.
 *
 * @return string The quoted identifier string.
 */',
        'startLine' => 2644,
        'endLine' => 2653,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'quoteSingleIdentifier' => 
      array (
        'name' => 'quoteSingleIdentifier',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2662,
            'endLine' => 2662,
            'startColumn' => 43,
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
 * Quotes a single identifier (no dot chain separation).
 *
 * @param string $str The identifier name to be quoted.
 *
 * @return string The quoted identifier string.
 */',
        'startLine' => 2662,
        'endLine' => 2667,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateForeignKeySQL' => 
      array (
        'name' => 'getCreateForeignKeySQL',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\ForeignKeyConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2677,
            'endLine' => 2677,
            'startColumn' => 44,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2677,
            'endLine' => 2677,
            'startColumn' => 78,
            'endColumn' => 83,
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
 * Returns the SQL to create a new foreign key.
 *
 * @param ForeignKeyConstraint $foreignKey The foreign key constraint.
 * @param Table|string         $table      The name of the table on which the foreign key is to be created.
 *
 * @return string
 */',
        'startLine' => 2677,
        'endLine' => 2691,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getAlterTableSQL' => 
      array (
        'name' => 'getAlterTableSQL',
        'parameters' => 
        array (
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2702,
            'endLine' => 2702,
            'startColumn' => 38,
            'endColumn' => 52,
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
 * Gets the SQL statements for altering an existing table.
 *
 * This method returns an array of SQL statements, since some platforms need several statements.
 *
 * @return list<string>
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 2702,
        'endLine' => 2705,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getRenameTableSQL' => 
      array (
        'name' => 'getRenameTableSQL',
        'parameters' => 
        array (
          'oldName' => 
          array (
            'name' => 'oldName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2708,
            'endLine' => 2708,
            'startColumn' => 39,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'newName' => 
          array (
            'name' => 'newName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2708,
            'endLine' => 2708,
            'startColumn' => 56,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
        'docComment' => '/** @return list<string> */',
        'startLine' => 2708,
        'endLine' => 2713,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'onSchemaAlterTableAddColumn' => 
      array (
        'name' => 'onSchemaAlterTableAddColumn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2720,
            'endLine' => 2720,
            'startColumn' => 52,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2720,
            'endLine' => 2720,
            'startColumn' => 68,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columnSql' => 
          array (
            'name' => 'columnSql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2720,
            'endLine' => 2720,
            'startColumn' => 85,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed[] $columnSql
 *
 * @return bool
 */',
        'startLine' => 2720,
        'endLine' => 2743,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'onSchemaAlterTableRemoveColumn' => 
      array (
        'name' => 'onSchemaAlterTableRemoveColumn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2750,
            'endLine' => 2750,
            'startColumn' => 55,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2750,
            'endLine' => 2750,
            'startColumn' => 71,
            'endColumn' => 85,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columnSql' => 
          array (
            'name' => 'columnSql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2750,
            'endLine' => 2750,
            'startColumn' => 88,
            'endColumn' => 98,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string[] $columnSql
 *
 * @return bool
 */',
        'startLine' => 2750,
        'endLine' => 2773,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'onSchemaAlterTableChangeColumn' => 
      array (
        'name' => 'onSchemaAlterTableChangeColumn',
        'parameters' => 
        array (
          'columnDiff' => 
          array (
            'name' => 'columnDiff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\ColumnDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2780,
            'endLine' => 2780,
            'startColumn' => 55,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2780,
            'endLine' => 2780,
            'startColumn' => 79,
            'endColumn' => 93,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columnSql' => 
          array (
            'name' => 'columnSql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2780,
            'endLine' => 2780,
            'startColumn' => 96,
            'endColumn' => 106,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string[] $columnSql
 *
 * @return bool
 */',
        'startLine' => 2780,
        'endLine' => 2803,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'onSchemaAlterTableRenameColumn' => 
      array (
        'name' => 'onSchemaAlterTableRenameColumn',
        'parameters' => 
        array (
          'oldColumnName' => 
          array (
            'name' => 'oldColumnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2811,
            'endLine' => 2811,
            'startColumn' => 55,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2811,
            'endLine' => 2811,
            'startColumn' => 71,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2811,
            'endLine' => 2811,
            'startColumn' => 87,
            'endColumn' => 101,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'columnSql' => 
          array (
            'name' => 'columnSql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2811,
            'endLine' => 2811,
            'startColumn' => 104,
            'endColumn' => 114,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string   $oldColumnName
 * @param string[] $columnSql
 *
 * @return bool
 */',
        'startLine' => 2811,
        'endLine' => 2834,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'onSchemaAlterTable' => 
      array (
        'name' => 'onSchemaAlterTable',
        'parameters' => 
        array (
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2841,
            'endLine' => 2841,
            'startColumn' => 43,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2841,
            'endLine' => 2841,
            'startColumn' => 60,
            'endColumn' => 64,
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
 * @param string[] $sql
 *
 * @return bool
 */',
        'startLine' => 2841,
        'endLine' => 2864,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getPreAlterTableIndexForeignKeySQL' => 
      array (
        'name' => 'getPreAlterTableIndexForeignKeySQL',
        'parameters' => 
        array (
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2867,
            'endLine' => 2867,
            'startColumn' => 59,
            'endColumn' => 73,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/** @return string[] */',
        'startLine' => 2867,
        'endLine' => 2895,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getPostAlterTableIndexForeignKeySQL' => 
      array (
        'name' => 'getPostAlterTableIndexForeignKeySQL',
        'parameters' => 
        array (
          'diff' => 
          array (
            'name' => 'diff',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\TableDiff',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2898,
            'endLine' => 2898,
            'startColumn' => 60,
            'endColumn' => 74,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/** @return string[] */',
        'startLine' => 2898,
        'endLine' => 2936,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getRenameIndexSQL' => 
      array (
        'name' => 'getRenameIndexSQL',
        'parameters' => 
        array (
          'oldIndexName' => 
          array (
            'name' => 'oldIndexName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2947,
            'endLine' => 2947,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2947,
            'endLine' => 2947,
            'startColumn' => 57,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2947,
            'endLine' => 2947,
            'startColumn' => 71,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL for renaming an index on a table.
 *
 * @param string $oldIndexName The name of the index to rename from.
 * @param Index  $index        The definition of the index to rename to.
 * @param string $tableName    The table to rename the given index on.
 *
 * @return string[] The sequence of SQL statements for renaming the given index.
 */',
        'startLine' => 2947,
        'endLine' => 2953,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getColumnDeclarationListSQL' => 
      array (
        'name' => 'getColumnDeclarationListSQL',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
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
            'startLine' => 2984,
            'endLine' => 2984,
            'startColumn' => 49,
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
 * Gets declaration of a number of columns in bulk.
 *
 * @param mixed[][] $columns A multidimensional associative array.
 *                           The first dimension determines the column name, while the second
 *                           dimension is keyed with the name of the properties
 *                           of the column being declared as array indexes. Currently, the types
 *                           of supported column properties are as follows:
 *
 *      length
 *          Integer value that determines the maximum length of the text
 *          column. If this argument is missing the column should be
 *          declared to have the longest length allowed by the DBMS.
 *
 *      default
 *          Text value to be used as default for this column.
 *
 *      notnull
 *          Boolean flag that indicates whether this column is constrained
 *          to not be set to null.
 *      charset
 *          Text value with the default CHARACTER SET for this column.
 *      collation
 *          Text value with the default COLLATION for this column.
 *      unique
 *          unique constraint
 *
 * @return string
 */',
        'startLine' => 2984,
        'endLine' => 2993,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getColumnDeclarationSQL' => 
      array (
        'name' => 'getColumnDeclarationSQL',
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
            'startLine' => 3030,
            'endLine' => 3030,
            'startColumn' => 45,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3030,
            'endLine' => 3030,
            'startColumn' => 52,
            'endColumn' => 64,
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
 * Obtains DBMS specific SQL code portion needed to declare a generic type
 * column to be used in statements like CREATE TABLE.
 *
 * @param string  $name   The name the column to be declared.
 * @param mixed[] $column An associative array with the name of the properties
 *                        of the column being declared as array indexes. Currently, the types
 *                        of supported column properties are as follows:
 *
 *      length
 *          Integer value that determines the maximum length of the text
 *          column. If this argument is missing the column should be
 *          declared to have the longest length allowed by the DBMS.
 *
 *      default
 *          Text value to be used as default for this column.
 *
 *      notnull
 *          Boolean flag that indicates whether this column is constrained
 *          to not be set to null.
 *      charset
 *          Text value with the default CHARACTER SET for this column.
 *      collation
 *          Text value with the default COLLATION for this column.
 *      unique
 *          unique constraint
 *      check
 *          column check constraint
 *      columnDefinition
 *          a string that defines the complete column
 *
 * @return string DBMS specific SQL code portion that should be used to declare the column.
 *
 * @throws Exception
 */',
        'startLine' => 3030,
        'endLine' => 3078,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDecimalTypeDeclarationSQL' => 
      array (
        'name' => 'getDecimalTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3087,
            'endLine' => 3087,
            'startColumn' => 50,
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
 * Returns the SQL snippet that declares a floating point column of arbitrary precision.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 3087,
        'endLine' => 3120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDefaultValueDeclarationSQL' => 
      array (
        'name' => 'getDefaultValueDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3130,
            'endLine' => 3130,
            'startColumn' => 51,
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
 * Obtains DBMS specific SQL code portion needed to set a default value
 * declaration to be used in statements like CREATE TABLE.
 *
 * @param mixed[] $column The column definition array.
 *
 * @return string DBMS specific SQL code portion needed to set a default value.
 */',
        'startLine' => 3130,
        'endLine' => 3165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCheckDeclarationSQL' => 
      array (
        'name' => 'getCheckDeclarationSQL',
        'parameters' => 
        array (
          'definition' => 
          array (
            'name' => 'definition',
            'default' => NULL,
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
            'startLine' => 3175,
            'endLine' => 3175,
            'startColumn' => 44,
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
 * Obtains DBMS specific SQL code portion needed to set a CHECK constraint
 * declaration to be used in statements like CREATE TABLE.
 *
 * @param string[]|mixed[][] $definition The check definition.
 *
 * @return string DBMS specific SQL code portion needed to set a CHECK constraint.
 */',
        'startLine' => 3175,
        'endLine' => 3193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getUniqueConstraintDeclarationSQL' => 
      array (
        'name' => 'getUniqueConstraintDeclarationSQL',
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
            'startLine' => 3206,
            'endLine' => 3206,
            'startColumn' => 55,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\UniqueConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3206,
            'endLine' => 3206,
            'startColumn' => 62,
            'endColumn' => 89,
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
 * Obtains DBMS specific SQL code portion needed to set a unique
 * constraint declaration to be used in statements like CREATE TABLE.
 *
 * @param string           $name       The name of the unique constraint.
 * @param UniqueConstraint $constraint The unique constraint definition.
 *
 * @return string DBMS specific SQL code portion needed to set a constraint.
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 3206,
        'endLine' => 3220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getIndexDeclarationSQL' => 
      array (
        'name' => 'getIndexDeclarationSQL',
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
            'startLine' => 3233,
            'endLine' => 3233,
            'startColumn' => 44,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3233,
            'endLine' => 3233,
            'startColumn' => 51,
            'endColumn' => 62,
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
 * Obtains DBMS specific SQL code portion needed to set an index
 * declaration to be used in statements like CREATE TABLE.
 *
 * @param string $name  The name of the index.
 * @param Index  $index The index definition.
 *
 * @return string DBMS specific SQL code portion needed to set an index.
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 3233,
        'endLine' => 3244,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCustomTypeDeclarationSQL' => 
      array (
        'name' => 'getCustomTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3257,
            'endLine' => 3257,
            'startColumn' => 49,
            'endColumn' => 61,
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
 * Obtains SQL code portion needed to create a custom column,
 * e.g. when a column has the "columnDefinition" keyword.
 * Only "AUTOINCREMENT" and "PRIMARY KEY" are added if appropriate.
 *
 * @deprecated
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 3257,
        'endLine' => 3267,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getIndexFieldDeclarationListSQL' => 
      array (
        'name' => 'getIndexFieldDeclarationListSQL',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Index',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3275,
            'endLine' => 3275,
            'startColumn' => 53,
            'endColumn' => 64,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Obtains DBMS specific SQL code portion needed to set an index
 * declaration to be used in statements like CREATE TABLE.
 *
 * @deprecated
 */',
        'startLine' => 3275,
        'endLine' => 3285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getColumnsFieldDeclarationListSQL' => 
      array (
        'name' => 'getColumnsFieldDeclarationListSQL',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
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
            'startLine' => 3295,
            'endLine' => 3295,
            'startColumn' => 55,
            'endColumn' => 68,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Obtains DBMS specific SQL code portion needed to set an index
 * declaration to be used in statements like CREATE TABLE.
 *
 * @deprecated
 *
 * @param mixed[] $columns
 */',
        'startLine' => 3295,
        'endLine' => 3315,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getTemporaryTableSQL' => 
      array (
        'name' => 'getTemporaryTableSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the required SQL string that fits between CREATE ... TABLE
 * to create the table as a temporary table.
 *
 * Should be overridden in driver classes to return the correct string for the
 * specific database type.
 *
 * The default is to return the string "TEMPORARY" - this will result in a
 * SQL error for any database that does not support temporary tables, or that
 * requires a different SQL command from "CREATE TEMPORARY TABLE".
 *
 * @deprecated
 *
 * @return string The string required to be placed between "CREATE" and "TABLE"
 *                to generate a temporary table, if possible.
 */',
        'startLine' => 3333,
        'endLine' => 3342,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getTemporaryTableName' => 
      array (
        'name' => 'getTemporaryTableName',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3351,
            'endLine' => 3351,
            'startColumn' => 43,
            'endColumn' => 52,
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
 * Some vendors require temporary table names to be qualified specially.
 *
 * @param string $tableName
 *
 * @return string
 */',
        'startLine' => 3351,
        'endLine' => 3354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getForeignKeyDeclarationSQL' => 
      array (
        'name' => 'getForeignKeyDeclarationSQL',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\ForeignKeyConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3363,
            'endLine' => 3363,
            'startColumn' => 49,
            'endColumn' => 80,
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
 * Obtain DBMS specific SQL code portion needed to set the FOREIGN KEY constraint
 * of a column declaration to be used in statements like CREATE TABLE.
 *
 * @return string DBMS specific SQL code portion needed to set the FOREIGN KEY constraint
 *                of a column declaration.
 */',
        'startLine' => 3363,
        'endLine' => 3369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getAdvancedForeignKeyOptionsSQL' => 
      array (
        'name' => 'getAdvancedForeignKeyOptionsSQL',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\ForeignKeyConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3379,
            'endLine' => 3379,
            'startColumn' => 53,
            'endColumn' => 84,
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
 * Returns the FOREIGN KEY query section dealing with non-standard options
 * as MATCH, INITIALLY DEFERRED, ON UPDATE, ...
 *
 * @param ForeignKeyConstraint $foreignKey The foreign key definition.
 *
 * @return string
 */',
        'startLine' => 3379,
        'endLine' => 3391,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getForeignKeyReferentialActionSQL' => 
      array (
        'name' => 'getForeignKeyReferentialActionSQL',
        'parameters' => 
        array (
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3402,
            'endLine' => 3402,
            'startColumn' => 55,
            'endColumn' => 61,
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
 * Returns the given referential action in uppercase if valid, otherwise throws an exception.
 *
 * @param string $action The foreign key referential action.
 *
 * @return string
 *
 * @throws InvalidArgumentException If unknown referential action given.
 */',
        'startLine' => 3402,
        'endLine' => 3416,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getForeignKeyBaseDeclarationSQL' => 
      array (
        'name' => 'getForeignKeyBaseDeclarationSQL',
        'parameters' => 
        array (
          'foreignKey' => 
          array (
            'name' => 'foreignKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\ForeignKeyConstraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3426,
            'endLine' => 3426,
            'startColumn' => 53,
            'endColumn' => 84,
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
 * Obtains DBMS specific SQL code portion needed to set the FOREIGN KEY constraint
 * of a column declaration to be used in statements like CREATE TABLE.
 *
 * @return string
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 3426,
        'endLine' => 3451,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getUniqueFieldDeclarationSQL' => 
      array (
        'name' => 'getUniqueFieldDeclarationSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Obtains DBMS specific SQL code portion needed to set the UNIQUE constraint
 * of a column declaration to be used in statements like CREATE TABLE.
 *
 * @deprecated Use UNIQUE in SQL instead.
 *
 * @return string DBMS specific SQL code portion needed to set the UNIQUE constraint
 *                of a column declaration.
 */',
        'startLine' => 3462,
        'endLine' => 3471,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getColumnCharsetDeclarationSQL' => 
      array (
        'name' => 'getColumnCharsetDeclarationSQL',
        'parameters' => 
        array (
          'charset' => 
          array (
            'name' => 'charset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3482,
            'endLine' => 3482,
            'startColumn' => 52,
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
 * Obtains DBMS specific SQL code portion needed to set the CHARACTER SET
 * of a column declaration to be used in statements like CREATE TABLE.
 *
 * @param string $charset The name of the charset.
 *
 * @return string DBMS specific SQL code portion needed to set the CHARACTER SET
 *                of a column declaration.
 */',
        'startLine' => 3482,
        'endLine' => 3485,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getColumnCollationDeclarationSQL' => 
      array (
        'name' => 'getColumnCollationDeclarationSQL',
        'parameters' => 
        array (
          'collation' => 
          array (
            'name' => 'collation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3496,
            'endLine' => 3496,
            'startColumn' => 54,
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
 * Obtains DBMS specific SQL code portion needed to set the COLLATION
 * of a column declaration to be used in statements like CREATE TABLE.
 *
 * @param string $collation The name of the collation.
 *
 * @return string DBMS specific SQL code portion needed to set the COLLATION
 *                of a column declaration.
 */',
        'startLine' => 3496,
        'endLine' => 3499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'prefersIdentityColumns' => 
      array (
        'name' => 'prefersIdentityColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform prefers identity columns (eg. autoincrement) for ID generation.
 * Subclasses should override this method to return TRUE if they prefer identity columns.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 3509,
        'endLine' => 3518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'convertBooleans' => 
      array (
        'name' => 'convertBooleans',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3534,
            'endLine' => 3534,
            'startColumn' => 37,
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
 * Some platforms need the boolean values to be converted.
 *
 * The default conversion in this implementation converts to integers (false => 0, true => 1).
 *
 * Note: if the input is not a boolean the original input might be returned.
 *
 * There are two contexts when converting booleans: Literals and Prepared Statements.
 * This method should handle the literal case
 *
 * @param mixed $item A boolean or an array of them.
 *
 * @return mixed A boolean database value or an array of them.
 */',
        'startLine' => 3534,
        'endLine' => 3549,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'convertFromBoolean' => 
      array (
        'name' => 'convertFromBoolean',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3562,
            'endLine' => 3562,
            'startColumn' => 40,
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
 * Some platforms have boolean literals that needs to be correctly converted
 *
 * The default conversion tries to convert value into bool "(bool)$item"
 *
 * @param T $item
 *
 * @return (T is null ? null : bool)
 *
 * @template T
 */',
        'startLine' => 3562,
        'endLine' => 3565,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'convertBooleansToDatabaseValue' => 
      array (
        'name' => 'convertBooleansToDatabaseValue',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3577,
            'endLine' => 3577,
            'startColumn' => 52,
            'endColumn' => 56,
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
 * This method should handle the prepared statements case. When there is no
 * distinction, it\'s OK to use the same method.
 *
 * Note: if the input is not a boolean the original input might be returned.
 *
 * @param mixed $item A boolean or an array of them.
 *
 * @return mixed A boolean database value or an array of them.
 */',
        'startLine' => 3577,
        'endLine' => 3580,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCurrentDateSQL' => 
      array (
        'name' => 'getCurrentDateSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL specific for the platform to get the current date.
 *
 * @return string
 */',
        'startLine' => 3587,
        'endLine' => 3590,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCurrentTimeSQL' => 
      array (
        'name' => 'getCurrentTimeSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL specific for the platform to get the current time.
 *
 * @return string
 */',
        'startLine' => 3597,
        'endLine' => 3600,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCurrentTimestampSQL' => 
      array (
        'name' => 'getCurrentTimestampSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL specific for the platform to get the current timestamp
 *
 * @return string
 */',
        'startLine' => 3607,
        'endLine' => 3610,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      '_getTransactionIsolationLevelSQL' => 
      array (
        'name' => '_getTransactionIsolationLevelSQL',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3621,
            'endLine' => 3621,
            'startColumn' => 57,
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
 * Returns the SQL for a given transaction isolation level Connection constant.
 *
 * @param int $level
 *
 * @return string
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 3621,
        'endLine' => 3639,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListDatabasesSQL' => 
      array (
        'name' => 'getListDatabasesSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @internal The method should be only used from within the {@see AbstractSchemaManager} class hierarchy.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3648,
        'endLine' => 3651,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListNamespacesSQL' => 
      array (
        'name' => 'getListNamespacesSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the SQL statement for retrieving the namespaces defined in the database.
 *
 * @deprecated Use {@see AbstractSchemaManager::listSchemaNames()} instead.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3662,
        'endLine' => 3672,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListSequencesSQL' => 
      array (
        'name' => 'getListSequencesSQL',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3683,
            'endLine' => 3683,
            'startColumn' => 41,
            'endColumn' => 49,
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
 * @internal The method should be only used from within the {@see AbstractSchemaManager} class hierarchy.
 *
 * @param string $database
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3683,
        'endLine' => 3686,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListTableConstraintsSQL' => 
      array (
        'name' => 'getListTableConstraintsSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3697,
            'endLine' => 3697,
            'startColumn' => 48,
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
 * @deprecated
 *
 * @param string $table
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3697,
        'endLine' => 3700,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListTableColumnsSQL' => 
      array (
        'name' => 'getListTableColumnsSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3712,
            'endLine' => 3712,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3712,
                'endLine' => 3712,
                'startTokenPos' => 13322,
                'startFilePos' => 114031,
                'endTokenPos' => 13322,
                'endFilePos' => 114034,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3712,
            'endLine' => 3712,
            'startColumn' => 52,
            'endColumn' => 67,
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
 * @deprecated The SQL used for schema introspection is an implementation detail and should not be relied upon.
 *
 * @param string $table
 * @param string $database
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3712,
        'endLine' => 3715,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListTablesSQL' => 
      array (
        'name' => 'getListTablesSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated The SQL used for schema introspection is an implementation detail and should not be relied upon.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3724,
        'endLine' => 3727,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListUsersSQL' => 
      array (
        'name' => 'getListUsersSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3736,
        'endLine' => 3745,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListViewsSQL' => 
      array (
        'name' => 'getListViewsSQL',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3758,
            'endLine' => 3758,
            'startColumn' => 37,
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
 * Returns the SQL to list all views of a database or user.
 *
 * @internal The method should be only used from within the {@see AbstractSchemaManager} class hierarchy.
 *
 * @param string $database
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3758,
        'endLine' => 3761,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListTableIndexesSQL' => 
      array (
        'name' => 'getListTableIndexesSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3782,
            'endLine' => 3782,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'database' => 
          array (
            'name' => 'database',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3782,
                'endLine' => 3782,
                'startTokenPos' => 13444,
                'startFilePos' => 116082,
                'endTokenPos' => 13444,
                'endFilePos' => 116085,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3782,
            'endLine' => 3782,
            'startColumn' => 52,
            'endColumn' => 67,
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
 * @deprecated The SQL used for schema introspection is an implementation detail and should not be relied upon.
 *
 * Returns the list of indexes for the current database.
 *
 * The current database parameter is optional but will always be passed
 * when using the SchemaManager API and is the database the given table is in.
 *
 * Attention: Some platforms only support currentDatabase when they
 * are connected with that database. Cross-database information schema
 * requests may be impossible.
 *
 * @param string $table
 * @param string $database
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3782,
        'endLine' => 3785,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getListTableForeignKeysSQL' => 
      array (
        'name' => 'getListTableForeignKeysSQL',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3796,
            'endLine' => 3796,
            'startColumn' => 48,
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
 * @deprecated The SQL used for schema introspection is an implementation detail and should not be relied upon.
 *
 * @param string $table
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3796,
        'endLine' => 3799,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateViewSQL' => 
      array (
        'name' => 'getCreateViewSQL',
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
            'startLine' => 3807,
            'endLine' => 3807,
            'startColumn' => 38,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3807,
            'endLine' => 3807,
            'startColumn' => 45,
            'endColumn' => 48,
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
 * @param string $name
 * @param string $sql
 *
 * @return string
 */',
        'startLine' => 3807,
        'endLine' => 3810,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropViewSQL' => 
      array (
        'name' => 'getDropViewSQL',
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
            'startLine' => 3817,
            'endLine' => 3817,
            'startColumn' => 36,
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
 * @param string $name
 *
 * @return string
 */',
        'startLine' => 3817,
        'endLine' => 3820,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSequenceNextValSQL' => 
      array (
        'name' => 'getSequenceNextValSQL',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3829,
            'endLine' => 3829,
            'startColumn' => 43,
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
 * @param string $sequence
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3829,
        'endLine' => 3832,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getCreateDatabaseSQL' => 
      array (
        'name' => 'getCreateDatabaseSQL',
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
            'startLine' => 3843,
            'endLine' => 3843,
            'startColumn' => 42,
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
 * Returns the SQL to create a new database.
 *
 * @param string $name The name of the database that should be created.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3843,
        'endLine' => 3850,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDropDatabaseSQL' => 
      array (
        'name' => 'getDropDatabaseSQL',
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
            'startLine' => 3859,
            'endLine' => 3859,
            'startColumn' => 40,
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
 * Returns the SQL snippet to drop an existing database.
 *
 * @param string $name The name of the database that should be dropped.
 *
 * @return string
 */',
        'startLine' => 3859,
        'endLine' => 3866,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getSetTransactionIsolationSQL' => 
      array (
        'name' => 'getSetTransactionIsolationSQL',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3877,
            'endLine' => 3877,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Returns the SQL to set the transaction isolation level.
 *
 * @param int $level
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3877,
        'endLine' => 3880,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateTimeTypeDeclarationSQL' => 
      array (
        'name' => 'getDateTimeTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3892,
            'endLine' => 3892,
            'startColumn' => 51,
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
 * Obtains DBMS specific SQL to be used to create datetime columns in
 * statements like CREATE TABLE.
 *
 * @param mixed[] $column
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3892,
        'endLine' => 3895,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateTimeTzTypeDeclarationSQL' => 
      array (
        'name' => 'getDateTimeTzTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3904,
            'endLine' => 3904,
            'startColumn' => 53,
            'endColumn' => 65,
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
 * Obtains DBMS specific SQL to be used to create datetime with timezone offset columns.
 *
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 3904,
        'endLine' => 3907,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateTypeDeclarationSQL' => 
      array (
        'name' => 'getDateTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3919,
            'endLine' => 3919,
            'startColumn' => 47,
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
 * Obtains DBMS specific SQL to be used to create date columns in statements
 * like CREATE TABLE.
 *
 * @param mixed[] $column
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3919,
        'endLine' => 3922,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getTimeTypeDeclarationSQL' => 
      array (
        'name' => 'getTimeTypeDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3934,
            'endLine' => 3934,
            'startColumn' => 47,
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
 * Obtains DBMS specific SQL to be used to create time columns in statements
 * like CREATE TABLE.
 *
 * @param mixed[] $column
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 3934,
        'endLine' => 3937,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getFloatDeclarationSQL' => 
      array (
        'name' => 'getFloatDeclarationSQL',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
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
            'startLine' => 3944,
            'endLine' => 3944,
            'startColumn' => 44,
            'endColumn' => 56,
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
 * @param mixed[] $column
 *
 * @return string
 */',
        'startLine' => 3944,
        'endLine' => 3947,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDefaultTransactionIsolationLevel' => 
      array (
        'name' => 'getDefaultTransactionIsolationLevel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the default transaction isolation level of the platform.
 *
 * @see TransactionIsolationLevel
 *
 * @return TransactionIsolationLevel::* The default isolation level.
 */',
        'startLine' => 3956,
        'endLine' => 3959,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsSequences' => 
      array (
        'name' => 'supportsSequences',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports sequences.
 *
 * @return bool
 */',
        'startLine' => 3968,
        'endLine' => 3971,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsIdentityColumns' => 
      array (
        'name' => 'supportsIdentityColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports identity columns.
 *
 * Identity columns are columns that receive an auto-generated value from the
 * database on insert of a row.
 *
 * @return bool
 */',
        'startLine' => 3981,
        'endLine' => 3984,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'usesSequenceEmulatedIdentityColumns' => 
      array (
        'name' => 'usesSequenceEmulatedIdentityColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform emulates identity columns through sequences.
 *
 * Some platforms that do not support identity columns natively
 * but support sequences can emulate identity columns by using
 * sequences.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 3997,
        'endLine' => 4007,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getIdentitySequenceName' => 
      array (
        'name' => 'getIdentitySequenceName',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4023,
            'endLine' => 4023,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columnName' => 
          array (
            'name' => 'columnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4023,
            'endLine' => 4023,
            'startColumn' => 57,
            'endColumn' => 67,
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
 * Returns the name of the sequence for a particular identity column in a particular table.
 *
 * @deprecated
 *
 * @see usesSequenceEmulatedIdentityColumns
 *
 * @param string $tableName  The name of the table to return the sequence name for.
 * @param string $columnName The name of the identity column in the table to return the sequence name for.
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 4023,
        'endLine' => 4026,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsIndexes' => 
      array (
        'name' => 'supportsIndexes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports indexes.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 4035,
        'endLine' => 4044,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsPartialIndexes' => 
      array (
        'name' => 'supportsPartialIndexes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports partial indexes.
 *
 * @return bool
 */',
        'startLine' => 4051,
        'endLine' => 4054,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsColumnLengthIndexes' => 
      array (
        'name' => 'supportsColumnLengthIndexes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports indexes with column length definitions.
 */',
        'startLine' => 4059,
        'endLine' => 4062,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsAlterTable' => 
      array (
        'name' => 'supportsAlterTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports altering tables.
 *
 * @deprecated All platforms must implement altering tables.
 *
 * @return bool
 */',
        'startLine' => 4071,
        'endLine' => 4080,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsTransactions' => 
      array (
        'name' => 'supportsTransactions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports transactions.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 4089,
        'endLine' => 4098,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsSavepoints' => 
      array (
        'name' => 'supportsSavepoints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports savepoints.
 *
 * @return bool
 */',
        'startLine' => 4105,
        'endLine' => 4108,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsReleaseSavepoints' => 
      array (
        'name' => 'supportsReleaseSavepoints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports releasing savepoints.
 *
 * @return bool
 */',
        'startLine' => 4115,
        'endLine' => 4118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsPrimaryConstraints' => 
      array (
        'name' => 'supportsPrimaryConstraints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports primary key constraints.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 4127,
        'endLine' => 4136,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsForeignKeyConstraints' => 
      array (
        'name' => 'supportsForeignKeyConstraints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports foreign key constraints.
 *
 * @deprecated All platforms should support foreign key constraints.
 *
 * @return bool
 */',
        'startLine' => 4145,
        'endLine' => 4154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsSchemas' => 
      array (
        'name' => 'supportsSchemas',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports database schemas.
 *
 * @return bool
 */',
        'startLine' => 4161,
        'endLine' => 4164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'canEmulateSchemas' => 
      array (
        'name' => 'canEmulateSchemas',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether this platform can emulate schemas.
 *
 * @deprecated
 *
 * Platforms that either support or emulate schemas don\'t automatically
 * filter a schema for the namespaced elements in {@see AbstractManager::introspectSchema()}.
 *
 * @return bool
 */',
        'startLine' => 4176,
        'endLine' => 4185,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDefaultSchemaName' => 
      array (
        'name' => 'getDefaultSchemaName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the default schema name.
 *
 * @deprecated
 *
 * @return string
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 4196,
        'endLine' => 4199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsCreateDropDatabase' => 
      array (
        'name' => 'supportsCreateDropDatabase',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether this platform supports create database.
 *
 * Some databases don\'t allow to create and drop databases at all or only with certain tools.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 4210,
        'endLine' => 4220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsGettingAffectedRows' => 
      array (
        'name' => 'supportsGettingAffectedRows',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the platform supports getting the affected rows of a recent update/delete type query.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 4229,
        'endLine' => 4238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsInlineColumnComments' => 
      array (
        'name' => 'supportsInlineColumnComments',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether this platform support to add inline column comments as postfix.
 *
 * @return bool
 */',
        'startLine' => 4245,
        'endLine' => 4248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsCommentOnStatement' => 
      array (
        'name' => 'supportsCommentOnStatement',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether this platform support the proprietary syntax "COMMENT ON asset".
 *
 * @return bool
 */',
        'startLine' => 4255,
        'endLine' => 4258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'hasNativeGuidType' => 
      array (
        'name' => 'hasNativeGuidType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Does this platform have native guid type.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 4267,
        'endLine' => 4277,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'hasNativeJsonType' => 
      array (
        'name' => 'hasNativeJsonType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Does this platform have native JSON type.
 *
 * @deprecated
 *
 * @return bool
 */',
        'startLine' => 4286,
        'endLine' => 4296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsViews' => 
      array (
        'name' => 'supportsViews',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether this platform supports views.
 *
 * @deprecated All platforms must implement support for views.
 *
 * @return bool
 */',
        'startLine' => 4305,
        'endLine' => 4314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsColumnCollation' => 
      array (
        'name' => 'supportsColumnCollation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Does this platform support column collation?
 *
 * @return bool
 */',
        'startLine' => 4321,
        'endLine' => 4324,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateTimeFormatString' => 
      array (
        'name' => 'getDateTimeFormatString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the format string, as accepted by the date() function, that describes
 * the format of a stored datetime value of this platform.
 *
 * @return string The format string.
 */',
        'startLine' => 4332,
        'endLine' => 4335,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateTimeTzFormatString' => 
      array (
        'name' => 'getDateTimeTzFormatString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the format string, as accepted by the date() function, that describes
 * the format of a stored datetime with timezone value of this platform.
 *
 * @return string The format string.
 */',
        'startLine' => 4343,
        'endLine' => 4346,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDateFormatString' => 
      array (
        'name' => 'getDateFormatString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the format string, as accepted by the date() function, that describes
 * the format of a stored date value of this platform.
 *
 * @return string The format string.
 */',
        'startLine' => 4354,
        'endLine' => 4357,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getTimeFormatString' => 
      array (
        'name' => 'getTimeFormatString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the format string, as accepted by the date() function, that describes
 * the format of a stored time value of this platform.
 *
 * @return string The format string.
 */',
        'startLine' => 4365,
        'endLine' => 4368,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'modifyLimitQuery' => 
      array (
        'name' => 'modifyLimitQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4379,
            'endLine' => 4379,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4379,
            'endLine' => 4379,
            'startColumn' => 52,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 4379,
                'endLine' => 4379,
                'startTokenPos' => 14637,
                'startFilePos' => 130316,
                'endTokenPos' => 14637,
                'endFilePos' => 130316,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4379,
            'endLine' => 4379,
            'startColumn' => 60,
            'endColumn' => 70,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds an driver-specific LIMIT clause to the query.
 *
 * @param string   $query
 * @param int|null $limit
 * @param int      $offset
 *
 * @throws Exception
 */',
        'startLine' => 4379,
        'endLine' => 4400,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 33,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'doModifyLimitQuery' => 
      array (
        'name' => 'doModifyLimitQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4411,
            'endLine' => 4411,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4411,
            'endLine' => 4411,
            'startColumn' => 51,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4411,
            'endLine' => 4411,
            'startColumn' => 59,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds an platform-specific LIMIT clause to the query.
 *
 * @param string   $query
 * @param int|null $limit
 * @param int      $offset
 *
 * @return string
 */',
        'startLine' => 4411,
        'endLine' => 4422,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'supportsLimitOffset' => 
      array (
        'name' => 'supportsLimitOffset',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the database platform support offsets in modify limit clauses.
 *
 * @deprecated All platforms must implement support for offsets in modify limit clauses.
 *
 * @return bool
 */',
        'startLine' => 4431,
        'endLine' => 4441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getMaxIdentifierLength' => 
      array (
        'name' => 'getMaxIdentifierLength',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Maximum length of any given database identifier, like tables or column names.
 *
 * @return int
 */',
        'startLine' => 4448,
        'endLine' => 4451,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getEmptyIdentityInsertSQL' => 
      array (
        'name' => 'getEmptyIdentityInsertSQL',
        'parameters' => 
        array (
          'quotedTableName' => 
          array (
            'name' => 'quotedTableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4461,
            'endLine' => 4461,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'quotedIdentifierColumnName' => 
          array (
            'name' => 'quotedIdentifierColumnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4461,
            'endLine' => 4461,
            'startColumn' => 65,
            'endColumn' => 91,
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
 * Returns the insert SQL for an empty insert statement.
 *
 * @param string $quotedTableName
 * @param string $quotedIdentifierColumnName
 *
 * @return string
 */',
        'startLine' => 4461,
        'endLine' => 4464,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getTruncateTableSQL' => 
      array (
        'name' => 'getTruncateTableSQL',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4477,
            'endLine' => 4477,
            'startColumn' => 41,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cascade' => 
          array (
            'name' => 'cascade',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 4477,
                'endLine' => 4477,
                'startTokenPos' => 14961,
                'startFilePos' => 133014,
                'endTokenPos' => 14961,
                'endFilePos' => 133018,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4477,
            'endLine' => 4477,
            'startColumn' => 53,
            'endColumn' => 68,
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
 * Generates a Truncate Table SQL statement for a given table.
 *
 * Cascade is not supported on many platforms but would optionally cascade the truncate by
 * following the foreign keys.
 *
 * @param string $tableName
 * @param bool   $cascade
 *
 * @return string
 */',
        'startLine' => 4477,
        'endLine' => 4482,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getDummySelectSQL' => 
      array (
        'name' => 'getDummySelectSQL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This is for test reasons, many vendors have special requirements for dummy statements.
 *
 * @return string
 */',
        'startLine' => 4489,
        'endLine' => 4494,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'createSavePoint' => 
      array (
        'name' => 'createSavePoint',
        'parameters' => 
        array (
          'savepoint' => 
          array (
            'name' => 'savepoint',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4503,
            'endLine' => 4503,
            'startColumn' => 37,
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
 * Returns the SQL to create a new savepoint.
 *
 * @param string $savepoint
 *
 * @return string
 */',
        'startLine' => 4503,
        'endLine' => 4506,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'releaseSavePoint' => 
      array (
        'name' => 'releaseSavePoint',
        'parameters' => 
        array (
          'savepoint' => 
          array (
            'name' => 'savepoint',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4515,
            'endLine' => 4515,
            'startColumn' => 38,
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
 * Returns the SQL to release a savepoint.
 *
 * @param string $savepoint
 *
 * @return string
 */',
        'startLine' => 4515,
        'endLine' => 4518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'rollbackSavePoint' => 
      array (
        'name' => 'rollbackSavePoint',
        'parameters' => 
        array (
          'savepoint' => 
          array (
            'name' => 'savepoint',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4527,
            'endLine' => 4527,
            'startColumn' => 39,
            'endColumn' => 48,
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
 * Returns the SQL to rollback a savepoint.
 *
 * @param string $savepoint
 *
 * @return string
 */',
        'startLine' => 4527,
        'endLine' => 4530,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getReservedKeywordsList' => 
      array (
        'name' => 'getReservedKeywordsList',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Platforms\\Keywords\\KeywordList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the keyword list instance of this platform.
 *
 * @throws Exception If no keyword list is specified.
 */',
        'startLine' => 4537,
        'endLine' => 4541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 33,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'createReservedKeywordsList' => 
      array (
        'name' => 'createReservedKeywordsList',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\Platforms\\Keywords\\KeywordList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates an instance of the reserved keyword list of this platform.
 *
 * This method will become @abstract in DBAL 4.0.0.
 *
 * @throws Exception
 */',
        'startLine' => 4550,
        'endLine' => 4559,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getReservedKeywordsClass' => 
      array (
        'name' => 'getReservedKeywordsClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the class name of the reserved keywords list.
 *
 * @deprecated Implement {@see createReservedKeywordsList()} instead.
 *
 * @return string
 * @phpstan-return class-string<KeywordList>
 *
 * @throws Exception If not supported on this platform.
 */',
        'startLine' => 4571,
        'endLine' => 4581,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'quoteStringLiteral' => 
      array (
        'name' => 'quoteStringLiteral',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4593,
            'endLine' => 4593,
            'startColumn' => 40,
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
 * Quotes a literal string.
 * This method is NOT meant to fix SQL injections!
 * It is only meant to escape this platform\'s string literal
 * quote character inside the given literal string.
 *
 * @param string $str The literal string to be quoted.
 *
 * @return string The quoted literal string.
 */',
        'startLine' => 4593,
        'endLine' => 4598,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getStringLiteralQuoteCharacter' => 
      array (
        'name' => 'getStringLiteralQuoteCharacter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the character used for string literal quoting.
 *
 * @deprecated Use {@see quoteStringLiteral()} to quote string literals instead.
 *
 * @return string
 */',
        'startLine' => 4607,
        'endLine' => 4617,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'escapeStringForLike' => 
      array (
        'name' => 'escapeStringForLike',
        'parameters' => 
        array (
          'inputString' => 
          array (
            'name' => 'inputString',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4627,
            'endLine' => 4627,
            'startColumn' => 47,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'escapeChar' => 
          array (
            'name' => 'escapeChar',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4627,
            'endLine' => 4627,
            'startColumn' => 68,
            'endColumn' => 85,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Escapes metacharacters in a string intended to be used with a LIKE
 * operator.
 *
 * @param string $inputString a literal, unquoted string
 * @param string $escapeChar  should be reused by the caller in the LIKE
 *                            expression.
 */',
        'startLine' => 4627,
        'endLine' => 4634,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 33,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'columnToArray' => 
      array (
        'name' => 'columnToArray',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4640,
            'endLine' => 4640,
            'startColumn' => 36,
            'endColumn' => 49,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<string,mixed> An associative array with the name of the properties
 *                             of the column being declared as array indexes.
 */',
        'startLine' => 4640,
        'endLine' => 4649,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'createSQLParser' => 
      array (
        'name' => 'createSQLParser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Doctrine\\DBAL\\SQL\\Parser',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** @internal */',
        'startLine' => 4652,
        'endLine' => 4655,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'getLikeWildcardCharacters' => 
      array (
        'name' => 'getLikeWildcardCharacters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 4657,
        'endLine' => 4660,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'columnsEqual' => 
      array (
        'name' => 'columnsEqual',
        'parameters' => 
        array (
          'column1' => 
          array (
            'name' => 'column1',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4667,
            'endLine' => 4667,
            'startColumn' => 34,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column2' => 
          array (
            'name' => 'column2',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4667,
            'endLine' => 4667,
            'startColumn' => 51,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compares the definitions of the given columns in the context of this platform.
 *
 * @throws Exception
 */',
        'startLine' => 4667,
        'endLine' => 4702,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'columnDeclarationsMatch' => 
      array (
        'name' => 'columnDeclarationsMatch',
        'parameters' => 
        array (
          'column1' => 
          array (
            'name' => 'column1',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4707,
            'endLine' => 4707,
            'startColumn' => 46,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column2' => 
          array (
            'name' => 'column2',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Schema\\Column',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4707,
            'endLine' => 4707,
            'startColumn' => 63,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether the database data type matches that expected for the doctrine type for the given colunms.
 */',
        'startLine' => 4707,
        'endLine' => 4713,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'aliasName' => NULL,
      ),
      'createSchemaManager' => 
      array (
        'name' => 'createSchemaManager',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Doctrine\\DBAL\\Connection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4723,
            'endLine' => 4723,
            'startColumn' => 41,
            'endColumn' => 62,
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
            'name' => 'Doctrine\\DBAL\\Schema\\AbstractSchemaManager',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates the schema manager that can be used to inspect and change the underlying
 * database schema according to the dialect of the platform.
 *
 * @throws Exception
 *
 * @abstract
 */',
        'startLine' => 4723,
        'endLine' => 4726,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Doctrine\\DBAL\\Platforms',
        'declaringClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'implementingClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
        'currentClassName' => 'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
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