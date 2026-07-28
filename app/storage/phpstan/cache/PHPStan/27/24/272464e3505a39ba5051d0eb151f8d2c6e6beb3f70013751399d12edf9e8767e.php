<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/ToStringFormat.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\ToStringFormat
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3661ea845d2aadbe2fc65e19c3f8e5a8060c873edd7f91e2b97e76f2500df54f-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\ToStringFormat',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/ToStringFormat.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\ToStringFormat',
    'shortName' => 'ToStringFormat',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait ToStringFormat.
 *
 * Handle global format customization for string cast of the object.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 56,
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
      'toStringFormat' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\ToStringFormat',
        'implementingClassName' => 'Carbon\\Traits\\ToStringFormat',
        'name' => 'toStringFormat',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Format to use for __toString method when type juggling occurs.
 *
 * @var string|Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 37,
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
      'resetToStringFormat' => 
      array (
        'name' => 'resetToStringFormat',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reset the format used to the default when type juggling a Carbon instance to a string
 *
 * @return void
 */',
        'startLine' => 35,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\ToStringFormat',
        'implementingClassName' => 'Carbon\\Traits\\ToStringFormat',
        'currentClassName' => 'Carbon\\Traits\\ToStringFormat',
        'aliasName' => NULL,
      ),
      'setToStringFormat' => 
      array (
        'name' => 'setToStringFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
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
            'startColumn' => 46,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather let Carbon object being cast to string with DEFAULT_TO_STRING_FORMAT, and
 *             use other method or custom format passed to format() method if you need to dump another string
 *             format.
 *
 * Set the default format used when type juggling a Carbon instance to a string.
 *
 * @param string|Closure|null $format
 *
 * @return void
 */',
        'startLine' => 52,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\ToStringFormat',
        'implementingClassName' => 'Carbon\\Traits\\ToStringFormat',
        'currentClassName' => 'Carbon\\Traits\\ToStringFormat',
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