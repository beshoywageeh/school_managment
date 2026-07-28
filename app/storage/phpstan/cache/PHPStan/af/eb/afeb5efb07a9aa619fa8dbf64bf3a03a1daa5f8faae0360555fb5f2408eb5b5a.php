<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Macro.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Macro
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5eaa3e1b41e39e1f212eb777394a58edd0d34086a57c38b05579306ecc4723ee-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Macro',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Macro.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Macro',
    'shortName' => 'Macro',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Macros.
 *
 * Allows users to register macros within the Carbon class.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 136,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Carbon\\Traits\\Mixin',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'globalMacros' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'name' => 'globalMacros',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 32,
            'startFilePos' => 485,
            'endTokenPos' => 33,
            'endFilePos' => 486,
          ),
        ),
        'docComment' => '/**
 * The registered macros.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'globalGenericMacros' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'name' => 'globalGenericMacros',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 46,
            'startFilePos' => 613,
            'endTokenPos' => 47,
            'endFilePos' => 614,
          ),
        ),
        'docComment' => '/**
 * The registered generic macros.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 47,
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
      'macro' => 
      array (
        'name' => 'macro',
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'macro' => 
          array (
            'name' => 'macro',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 41,
            'endColumn' => 46,
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
 * Register a custom macro.
 *
 * @example
 * ```
 * $userSettings = [
 *   \'locale\' => \'pt\',
 *   \'timezone\' => \'America/Sao_Paulo\',
 * ];
 * Carbon::macro(\'userFormat\', function () use ($userSettings) {
 *   return $this->copy()->locale($userSettings[\'locale\'])->tz($userSettings[\'timezone\'])->calendar();
 * });
 * echo Carbon::yesterday()->hours(11)->userFormat();
 * ```
 *
 * @param string          $name
 * @param object|callable $macro
 *
 * @return void
 */',
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'currentClassName' => 'Carbon\\Traits\\Macro',
        'aliasName' => NULL,
      ),
      'resetMacros' => 
      array (
        'name' => 'resetMacros',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove all macros and generic macros.
 */',
        'startLine' => 65,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'currentClassName' => 'Carbon\\Traits\\Macro',
        'aliasName' => NULL,
      ),
      'genericMacro' => 
      array (
        'name' => 'genericMacro',
        'parameters' => 
        array (
          'macro' => 
          array (
            'name' => 'macro',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 79,
            'endLine' => 79,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'priority' => 
          array (
            'name' => 'priority',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 79,
                'endLine' => 79,
                'startTokenPos' => 135,
                'startFilePos' => 1732,
                'endTokenPos' => 135,
                'endFilePos' => 1732,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 79,
            'endLine' => 79,
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
 * Register a custom macro.
 *
 * @param object|callable $macro
 * @param int             $priority marco with higher priority is tried first
 *
 * @return void
 */',
        'startLine' => 79,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'currentClassName' => 'Carbon\\Traits\\Macro',
        'aliasName' => NULL,
      ),
      'hasMacro' => 
      array (
        'name' => 'hasMacro',
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
            'startLine' => 96,
            'endLine' => 96,
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
 * Checks if macro is registered globally.
 *
 * @param string $name
 *
 * @return bool
 */',
        'startLine' => 96,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'currentClassName' => 'Carbon\\Traits\\Macro',
        'aliasName' => NULL,
      ),
      'getMacro' => 
      array (
        'name' => 'getMacro',
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
            'startLine' => 108,
            'endLine' => 108,
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
 * Get the raw callable macro registered globally for a given name.
 *
 * @param string $name
 *
 * @return callable|null
 */',
        'startLine' => 108,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'currentClassName' => 'Carbon\\Traits\\Macro',
        'aliasName' => NULL,
      ),
      'hasLocalMacro' => 
      array (
        'name' => 'hasLocalMacro',
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
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 35,
            'endColumn' => 39,
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
 * Checks if macro is registered globally or locally.
 *
 * @param string $name
 *
 * @return bool
 */',
        'startLine' => 120,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'currentClassName' => 'Carbon\\Traits\\Macro',
        'aliasName' => NULL,
      ),
      'getLocalMacro' => 
      array (
        'name' => 'getLocalMacro',
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
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 35,
            'endColumn' => 39,
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
 * Get the raw callable macro registered globally or locally for a given name.
 *
 * @param string $name
 *
 * @return callable|null
 */',
        'startLine' => 132,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Macro',
        'implementingClassName' => 'Carbon\\Traits\\Macro',
        'currentClassName' => 'Carbon\\Traits\\Macro',
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