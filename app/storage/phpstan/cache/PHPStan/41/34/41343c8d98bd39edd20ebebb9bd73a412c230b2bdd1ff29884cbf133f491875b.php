<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Mixin.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Mixin
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8eaa6d655f0e9ed147caeac800078d940f596733fe6c6ed5de75a8b50c57d8c5-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Mixin',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Mixin.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Mixin',
    'shortName' => 'Mixin',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Mixin.
 *
 * Allows mixing in entire classes with multiple macros.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 29,
    'endLine' => 226,
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
      'macroContextStack' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'name' => 'macroContextStack',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 72,
            'startFilePos' => 673,
            'endTokenPos' => 73,
            'endFilePos' => 674,
          ),
        ),
        'docComment' => '/**
 * Stack of macro instance contexts.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 45,
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
      'mixin' => 
      array (
        'name' => 'mixin',
        'parameters' => 
        array (
          'mixin' => 
          array (
            'name' => 'mixin',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 34,
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
 * Mix another object into the class.
 *
 * @example
 * ```
 * Carbon::mixin(new class {
 *   public function addMoon() {
 *     return function () {
 *       return $this->addDays(30);
 *     };
 *   }
 *   public function subMoon() {
 *     return function () {
 *       return $this->subDays(30);
 *     };
 *   }
 * });
 * $fullMoon = Carbon::create(\'2018-12-22\');
 * $nextFullMoon = $fullMoon->addMoon();
 * $blackMoon = Carbon::create(\'2019-01-06\');
 * $previousBlackMoon = $blackMoon->subMoon();
 * echo "$nextFullMoon\\n";
 * echo "$previousBlackMoon\\n";
 * ```
 *
 * @param object|string $mixin
 *
 * @throws ReflectionException
 *
 * @return void
 */',
        'startLine' => 69,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
        'aliasName' => NULL,
      ),
      'loadMixinClass' => 
      array (
        'name' => 'loadMixinClass',
        'parameters' => 
        array (
          'mixin' => 
          array (
            'name' => 'mixin',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 44,
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
 * @param object|string $mixin
 *
 * @throws ReflectionException
 */',
        'startLine' => 81,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
        'aliasName' => NULL,
      ),
      'loadMixinTrait' => 
      array (
        'name' => 'loadMixinTrait',
        'parameters' => 
        array (
          'trait' => 
          array (
            'name' => 'trait',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 44,
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
 * @param string $trait
 */',
        'startLine' => 101,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
        'aliasName' => NULL,
      ),
      'getAnonymousClassCodeForTrait' => 
      array (
        'name' => 'getAnonymousClassCodeForTrait',
        'parameters' => 
        array (
          'trait' => 
          array (
            'name' => 'trait',
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
        'docComment' => NULL,
        'startLine' => 170,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
        'aliasName' => NULL,
      ),
      'getMixableMethods' => 
      array (
        'name' => 'getMixableMethods',
        'parameters' => 
        array (
          'context' => 
          array (
            'name' => 'context',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 47,
            'endColumn' => 59,
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
            'name' => 'Generator',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 175,
        'endLine' => 184,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => true,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
        'aliasName' => NULL,
      ),
      'bindMacroContext' => 
      array (
        'name' => 'bindMacroContext',
        'parameters' => 
        array (
          'context' => 
          array (
            'name' => 'context',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callable' => 
          array (
            'name' => 'callable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 58,
            'endColumn' => 75,
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
 * Stack a Carbon context from inside calls of self::this() and execute a given action.
 *
 * @param static|null $context
 * @param callable    $callable
 *
 * @throws Throwable
 *
 * @return mixed
 */',
        'startLine' => 196,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
        'aliasName' => NULL,
      ),
      'context' => 
      array (
        'name' => 'context',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the current context from inside a macro callee or a null if static.
 *
 * @return static|null
 */',
        'startLine' => 212,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
        'aliasName' => NULL,
      ),
      'this' => 
      array (
        'name' => 'this',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the current context from inside a macro callee or a new one if static.
 *
 * @return static
 */',
        'startLine' => 222,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Mixin',
        'implementingClassName' => 'Carbon\\Traits\\Mixin',
        'currentClassName' => 'Carbon\\Traits\\Mixin',
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