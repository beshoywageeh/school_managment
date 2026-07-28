<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Console/Concerns/ConfiguresPrompts.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Concerns\ConfiguresPrompts
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-cb52467536b26f430e126f4193285da570ea0d3f7bdf2f900891f91d412519f9-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Console/Concerns/ConfiguresPrompts.php',
      ),
    ),
    'namespace' => 'Illuminate\\Console\\Concerns',
    'name' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
    'shortName' => 'ConfiguresPrompts',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 170,
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
      'configurePrompts' => 
      array (
        'name' => 'configurePrompts',
        'parameters' => 
        array (
          'input' => 
          array (
            'name' => 'input',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 25,
            'endLine' => 25,
            'startColumn' => 41,
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
 * Configure the prompt fallbacks.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @return void
 */',
        'startLine' => 25,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Concerns',
        'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'aliasName' => NULL,
      ),
      'promptUntilValid' => 
      array (
        'name' => 'promptUntilValid',
        'parameters' => 
        array (
          'prompt' => 
          array (
            'name' => 'prompt',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'required' => 
          array (
            'name' => 'required',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 50,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'validate' => 
          array (
            'name' => 'validate',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 61,
            'endColumn' => 69,
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
 * Prompt the user until the given validation callback passes.
 *
 * @param  \\Closure  $prompt
 * @param  bool|string  $required
 * @param  \\Closure|null  $validate
 * @return mixed
 */',
        'startLine' => 128,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Concerns',
        'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'aliasName' => NULL,
      ),
      'restorePrompts' => 
      array (
        'name' => 'restorePrompts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Restore the prompts output.
 *
 * @return void
 */',
        'startLine' => 166,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Concerns',
        'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
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