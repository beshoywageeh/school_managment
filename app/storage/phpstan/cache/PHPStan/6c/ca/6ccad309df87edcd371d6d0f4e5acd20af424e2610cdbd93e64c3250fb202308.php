<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Serialization.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Serialization
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-975aba2b4afd0533936bdc34eaeb68d809fcd63a321e26225286561ede79b0c2-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Serialization',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Serialization.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Serialization',
    'shortName' => 'Serialization',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Serialization.
 *
 * Serialization and JSON stuff.
 *
 * Depends on the following properties:
 *
 * @property int $year
 * @property int $month
 * @property int $daysInMonth
 * @property int $quarter
 *
 * Depends on the following methods:
 *
 * @method string|static locale(string $locale = null, string ...$fallbackLocales)
 * @method string        toJSON()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 35,
    'endLine' => 326,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Carbon\\Traits\\ObjectInitialisation',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'serializer' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'name' => 'serializer',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom Carbon JSON serializer.
 *
 * @var callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dumpProperties' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'name' => 'dumpProperties',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'date\', \'timezone_type\', \'timezone\']',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 54,
            'startFilePos' => 1029,
            'endTokenPos' => 62,
            'endFilePos' => 1065,
          ),
        ),
        'docComment' => '/**
 * List of key to use for dump/serialization.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 70,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dumpLocale' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'name' => 'dumpLocale',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Locale to dump comes here before serialization.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dumpDateProperties' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'name' => 'dumpDateProperties',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Embed date properties to dump in a dedicated variables so it won\'t overlap native
 * DateTime ones.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 34,
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
      'serialize' => 
      array (
        'name' => 'serialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return a serialized string of the instance.
 *
 * @return string
 */',
        'startLine' => 73,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      'fromSerialized' => 
      array (
        'name' => 'fromSerialized',
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
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 43,
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
 * Create an instance from a serialized string.
 *
 * @param string $value
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
        'startLine' => 87,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      '__set_state' => 
      array (
        'name' => '__set_state',
        'parameters' => 
        array (
          'dump' => 
          array (
            'name' => 'dump',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
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
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * The __set_state handler.
 *
 * @param string|array $dump
 *
 * @return static
 */',
        'startLine' => 105,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      '__sleep' => 
      array (
        'name' => '__sleep',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the list of properties to dump on serialize() called on.
 *
 * Only used by PHP < 7.4.
 *
 * @return array
 */',
        'startLine' => 127,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      '__serialize' => 
      array (
        'name' => '__serialize',
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
 * Returns the values to dump on serialize() called on.
 *
 * Only used by PHP >= 7.4.
 *
 * @return array
 */',
        'startLine' => 146,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      '__wakeup' => 
      array (
        'name' => '__wakeup',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Set locale if specified on unserialize() called.
 *
 * Only used by PHP < 7.4.
 *
 * @return void
 */',
        'startLine' => 188,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      '__unserialize' => 
      array (
        'name' => '__unserialize',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 224,
            'endLine' => 224,
            'startColumn' => 35,
            'endColumn' => 45,
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
        'docComment' => '/**
 * Set locale if specified on unserialize() called.
 *
 * Only used by PHP >= 7.4.
 *
 * @return void
 */',
        'startLine' => 224,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      'jsonSerialize' => 
      array (
        'name' => 'jsonSerialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Prepare the object for JSON serialization.
 *
 * @return array|string
 */',
        'startLine' => 254,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      'serializeUsing' => 
      array (
        'name' => 'serializeUsing',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather transform Carbon object before the serialization.
 *
 * JSON serialize all Carbon instances using the given callback.
 *
 * @param callable $callback
 *
 * @return void
 */',
        'startLine' => 278,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      'cleanupDumpProperties' => 
      array (
        'name' => 'cleanupDumpProperties',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Cleanup properties attached to the public scope of DateTime when a dump of the date is requested.
 * foreach ($date as $_) {}
 * serializer($date)
 * var_export($date)
 * get_object_vars($date)
 */',
        'startLine' => 290,
        'endLine' => 303,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
        'aliasName' => NULL,
      ),
      'getSleepProperties' => 
      array (
        'name' => 'getSleepProperties',
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
        'docComment' => NULL,
        'startLine' => 305,
        'endLine' => 325,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Serialization',
        'implementingClassName' => 'Carbon\\Traits\\Serialization',
        'currentClassName' => 'Carbon\\Traits\\Serialization',
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