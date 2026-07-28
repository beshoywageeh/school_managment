<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Localization.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Localization
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a9e676a142be8c7b188ad3cf64d0d784f6869f27c681bc9180570677719f6171-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Carbon\\Traits\\Localization',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Localization.php',
      ),
    ),
    'namespace' => 'Carbon\\Traits',
    'name' => 'Carbon\\Traits\\Localization',
    'shortName' => 'Localization',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait Localization.
 *
 * Embed default and locale translators and translation base methods.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 42,
    'endLine' => 840,
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
      'translator' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'name' => 'translator',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Default translator.
 *
 * @var \\Symfony\\Component\\Translation\\TranslatorInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'localTranslator' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'name' => 'localTranslator',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Specific translator of the current instance.
 *
 * @var \\Symfony\\Component\\Translation\\TranslatorInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'humanDiffOptions' => 
      array (
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'name' => 'humanDiffOptions',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Carbon\\CarbonInterface::NO_ZERO_DIFF',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 139,
            'startFilePos' => 1664,
            'endTokenPos' => 141,
            'endFilePos' => 1692,
          ),
        ),
        'docComment' => '/**
 * Options for diffForHumans().
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 71,
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
      'setHumanDiffOptions' => 
      array (
        'name' => 'setHumanDiffOptions',
        'parameters' => 
        array (
          'humanDiffOptions' => 
          array (
            'name' => 'humanDiffOptions',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 48,
            'endColumn' => 64,
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
 *             You should rather use the ->settings() method.
 * @see settings
 *
 * @param int $humanDiffOptions
 */',
        'startLine' => 72,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'enableHumanDiffOption' => 
      array (
        'name' => 'enableHumanDiffOption',
        'parameters' => 
        array (
          'humanDiffOption' => 
          array (
            'name' => 'humanDiffOption',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 50,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 * @see settings
 *
 * @param int $humanDiffOption
 */',
        'startLine' => 84,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'disableHumanDiffOption' => 
      array (
        'name' => 'disableHumanDiffOption',
        'parameters' => 
        array (
          'humanDiffOption' => 
          array (
            'name' => 'humanDiffOption',
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
            'startColumn' => 51,
            'endColumn' => 66,
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
 *             You should rather use the ->settings() method.
 * @see settings
 *
 * @param int $humanDiffOption
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
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getHumanDiffOptions' => 
      array (
        'name' => 'getHumanDiffOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return default humanDiff() options (merged flags as integer).
 *
 * @return int
 */',
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getTranslator' => 
      array (
        'name' => 'getTranslator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default translator instance in use.
 *
 * @return \\Symfony\\Component\\Translation\\TranslatorInterface
 */',
        'startLine' => 116,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'setTranslator' => 
      array (
        'name' => 'setTranslator',
        'parameters' => 
        array (
          'translator' => 
          array (
            'name' => 'translator',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Translation\\TranslatorInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 42,
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
 * Set the default translator instance to use.
 *
 * @param \\Symfony\\Component\\Translation\\TranslatorInterface $translator
 *
 * @return void
 */',
        'startLine' => 128,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'hasLocalTranslator' => 
      array (
        'name' => 'hasLocalTranslator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return true if the current instance has its own translator.
 *
 * @return bool
 */',
        'startLine' => 138,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getLocalTranslator' => 
      array (
        'name' => 'getLocalTranslator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the translator of the current instance or the default if none set.
 *
 * @return \\Symfony\\Component\\Translation\\TranslatorInterface
 */',
        'startLine' => 148,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'setLocalTranslator' => 
      array (
        'name' => 'setLocalTranslator',
        'parameters' => 
        array (
          'translator' => 
          array (
            'name' => 'translator',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Translation\\TranslatorInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 160,
            'endLine' => 160,
            'startColumn' => 40,
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
 * Set the translator for the current instance.
 *
 * @param \\Symfony\\Component\\Translation\\TranslatorInterface $translator
 *
 * @return $this
 */',
        'startLine' => 160,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getTranslationMessageWith' => 
      array (
        'name' => 'getTranslationMessageWith',
        'parameters' => 
        array (
          'translator' => 
          array (
            'name' => 'translator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 54,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 67,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 425,
                'startFilePos' => 5143,
                'endTokenPos' => 425,
                'endFilePos' => 5146,
              ),
            ),
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
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 80,
            'endColumn' => 101,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 435,
                'startFilePos' => 5168,
                'endTokenPos' => 435,
                'endFilePos' => 5171,
              ),
            ),
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
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 104,
            'endColumn' => 126,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns raw translation message for a given key.
 *
 * @param \\Symfony\\Component\\Translation\\TranslatorInterface $translator the translator to use
 * @param string                                             $key        key to find
 * @param string|null                                        $locale     current locale used if null
 * @param string|null                                        $default    default value if translation returns the key
 *
 * @return string
 */',
        'startLine' => 177,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getTranslationMessage' => 
      array (
        'name' => 'getTranslationMessage',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 43,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 205,
                'endLine' => 205,
                'startTokenPos' => 605,
                'startFilePos' => 6484,
                'endTokenPos' => 605,
                'endFilePos' => 6487,
              ),
            ),
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
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 56,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 205,
                'endLine' => 205,
                'startTokenPos' => 615,
                'startFilePos' => 6509,
                'endTokenPos' => 615,
                'endFilePos' => 6512,
              ),
            ),
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
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 80,
            'endColumn' => 102,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'translator' => 
          array (
            'name' => 'translator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 205,
                'endLine' => 205,
                'startTokenPos' => 622,
                'startFilePos' => 6529,
                'endTokenPos' => 622,
                'endFilePos' => 6532,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 105,
            'endColumn' => 122,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns raw translation message for a given key.
 *
 * @param string                                             $key        key to find
 * @param string|null                                        $locale     current locale used if null
 * @param string|null                                        $default    default value if translation returns the key
 * @param \\Symfony\\Component\\Translation\\TranslatorInterface $translator an optional translator to use
 *
 * @return string
 */',
        'startLine' => 205,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'translateWith' => 
      array (
        'name' => 'translateWith',
        'parameters' => 
        array (
          'translator' => 
          array (
            'name' => 'translator',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Translation\\TranslatorInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 42,
            'endColumn' => 72,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 75,
            'endColumn' => 85,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 220,
                'endLine' => 220,
                'startTokenPos' => 683,
                'startFilePos' => 7188,
                'endTokenPos' => 684,
                'endFilePos' => 7189,
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
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 88,
            'endColumn' => 109,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'number' => 
          array (
            'name' => 'number',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 220,
                'endLine' => 220,
                'startTokenPos' => 691,
                'startFilePos' => 7202,
                'endTokenPos' => 691,
                'endFilePos' => 7205,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 112,
            'endColumn' => 125,
            'parameterIndex' => 3,
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
 * Translate using translation string or callback available.
 *
 * @param \\Symfony\\Component\\Translation\\TranslatorInterface $translator
 * @param string                                             $key
 * @param array                                              $parameters
 * @param null                                               $number
 *
 * @return string
 */',
        'startLine' => 220,
        'endLine' => 241,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'translate' => 
      array (
        'name' => 'translate',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 254,
                'endLine' => 254,
                'startTokenPos' => 871,
                'startFilePos' => 8513,
                'endTokenPos' => 872,
                'endFilePos' => 8514,
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 44,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'number' => 
          array (
            'name' => 'number',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 254,
                'endLine' => 254,
                'startTokenPos' => 879,
                'startFilePos' => 8527,
                'endTokenPos' => 879,
                'endFilePos' => 8530,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 68,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'translator' => 
          array (
            'name' => 'translator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 254,
                'endLine' => 254,
                'startTokenPos' => 889,
                'startFilePos' => 8568,
                'endTokenPos' => 889,
                'endFilePos' => 8571,
              ),
            ),
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
                      'name' => 'Symfony\\Component\\Translation\\TranslatorInterface',
                      'isIdentifier' => false,
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 84,
            'endColumn' => 122,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'altNumbers' => 
          array (
            'name' => 'altNumbers',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 254,
                'endLine' => 254,
                'startTokenPos' => 898,
                'startFilePos' => 8593,
                'endTokenPos' => 898,
                'endFilePos' => 8597,
              ),
            ),
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
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 125,
            'endColumn' => 148,
            'parameterIndex' => 4,
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
 * Translate using translation string or callback available.
 *
 * @param string                                                  $key
 * @param array                                                   $parameters
 * @param string|int|float|null                                   $number
 * @param \\Symfony\\Component\\Translation\\TranslatorInterface|null $translator
 * @param bool                                                    $altNumbers
 *
 * @return string
 */',
        'startLine' => 254,
        'endLine' => 263,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'translateNumber' => 
      array (
        'name' => 'translateNumber',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
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
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Returns the alternative number for a given integer if available in the current locale.
 *
 * @param int $number
 *
 * @return string
 */',
        'startLine' => 272,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'translateTimeString' => 
      array (
        'name' => 'translateTimeString',
        'parameters' => 
        array (
          'timeString' => 
          array (
            'name' => 'timeString',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 48,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'from' => 
          array (
            'name' => 'from',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1390,
                'startFilePos' => 11619,
                'endTokenPos' => 1390,
                'endFilePos' => 11622,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 61,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1397,
                'startFilePos' => 11631,
                'endTokenPos' => 1397,
                'endFilePos' => 11634,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 75,
            'endColumn' => 84,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'mode' => 
          array (
            'name' => 'mode',
            'default' => 
            array (
              'code' => '\\Carbon\\CarbonInterface::TRANSLATE_ALL',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1404,
                'startFilePos' => 11645,
                'endTokenPos' => 1406,
                'endFilePos' => 11674,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 87,
            'endColumn' => 124,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Translate a time string from a locale to an other.
 *
 * @param string      $timeString date/time/duration string to translate (may also contain English)
 * @param string|null $from       input locale of the $timeString parameter (`Carbon::getLocale()` by default)
 * @param string|null $to         output locale of the result returned (`"en"` by default)
 * @param int         $mode       specify what to translate with options:
 *                                - CarbonInterface::TRANSLATE_ALL (default)
 *                                - CarbonInterface::TRANSLATE_MONTHS
 *                                - CarbonInterface::TRANSLATE_DAYS
 *                                - CarbonInterface::TRANSLATE_UNITS
 *                                - CarbonInterface::TRANSLATE_MERIDIEM
 *                                You can use pipe to group: CarbonInterface::TRANSLATE_MONTHS | CarbonInterface::TRANSLATE_DAYS
 *
 * @return string
 */',
        'startLine' => 331,
        'endLine' => 424,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'translateTimeStringTo' => 
      array (
        'name' => 'translateTimeStringTo',
        'parameters' => 
        array (
          'timeString' => 
          array (
            'name' => 'timeString',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 434,
            'endLine' => 434,
            'startColumn' => 43,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 434,
                'endLine' => 434,
                'startTokenPos' => 2259,
                'startFilePos' => 15811,
                'endTokenPos' => 2259,
                'endFilePos' => 15814,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 434,
            'endLine' => 434,
            'startColumn' => 56,
            'endColumn' => 65,
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
 * Translate a time string from the current locale (`$date->locale()`) to an other.
 *
 * @param string      $timeString time string to translate
 * @param string|null $to         output locale of the result returned ("en" by default)
 *
 * @return string
 */',
        'startLine' => 434,
        'endLine' => 437,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'locale' => 
      array (
        'name' => 'locale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 447,
                'endLine' => 447,
                'startTokenPos' => 2301,
                'startFilePos' => 16157,
                'endTokenPos' => 2301,
                'endFilePos' => 16160,
              ),
            ),
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
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 28,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'fallbackLocales' => 
          array (
            'name' => 'fallbackLocales',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 52,
            'endColumn' => 70,
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
 * Get/set the locale for the current instance.
 *
 * @param string|null $locale
 * @param string      ...$fallbackLocales
 *
 * @return $this|string
 */',
        'startLine' => 447,
        'endLine' => 472,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getLocale' => 
      array (
        'name' => 'getLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current translator locale.
 *
 * @return string
 */',
        'startLine' => 479,
        'endLine' => 482,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'setLocale' => 
      array (
        'name' => 'setLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 492,
            'endLine' => 492,
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
 * Set the current translator locale and indicate if the source locale file exists.
 * Pass \'auto\' as locale to use closest language from the current LC_TIME locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
        'startLine' => 492,
        'endLine' => 495,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'setFallbackLocale' => 
      array (
        'name' => 'setFallbackLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 504,
            'endLine' => 504,
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
 * Set the fallback locale.
 *
 * @see https://symfony.com/doc/current/components/translation.html#fallback-locales
 *
 * @param string $locale
 */',
        'startLine' => 504,
        'endLine' => 520,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getFallbackLocale' => 
      array (
        'name' => 'getFallbackLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the fallback locale.
 *
 * @see https://symfony.com/doc/current/components/translation.html#fallback-locales
 *
 * @return string|null
 */',
        'startLine' => 529,
        'endLine' => 538,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'executeWithLocale' => 
      array (
        'name' => 'executeWithLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 549,
            'endLine' => 549,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'func' => 
          array (
            'name' => 'func',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 549,
            'endLine' => 549,
            'startColumn' => 55,
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
 * Set the current locale to the given, execute the passed function, reset the locale to previous one,
 * then return the result of the closure (or null if the closure was void).
 *
 * @param string   $locale locale ex. en
 * @param callable $func
 *
 * @return mixed
 */',
        'startLine' => 549,
        'endLine' => 556,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'localeHasShortUnits' => 
      array (
        'name' => 'localeHasShortUnits',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 566,
            'endLine' => 566,
            'startColumn' => 48,
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
 * Returns true if the given locale is internally supported and has short-units support.
 * Support is considered enabled if either year, day or hour has a short variant translated.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
        'startLine' => 566,
        'endLine' => 577,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'localeHasDiffSyntax' => 
      array (
        'name' => 'localeHasDiffSyntax',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 48,
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
 * Returns true if the given locale is internally supported and has diff syntax support (ago, from now, before, after).
 * Support is considered enabled if the 4 sentences are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
        'startLine' => 587,
        'endLine' => 608,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'localeHasDiffOneDayWords' => 
      array (
        'name' => 'localeHasDiffOneDayWords',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 618,
            'endLine' => 618,
            'startColumn' => 53,
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
 * Returns true if the given locale is internally supported and has words for 1-day diff (just now, yesterday, tomorrow).
 * Support is considered enabled if the 3 words are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
        'startLine' => 618,
        'endLine' => 626,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'localeHasDiffTwoDayWords' => 
      array (
        'name' => 'localeHasDiffTwoDayWords',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 636,
            'endLine' => 636,
            'startColumn' => 53,
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
 * Returns true if the given locale is internally supported and has words for 2-days diff (before yesterday, after tomorrow).
 * Support is considered enabled if the 2 words are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
        'startLine' => 636,
        'endLine' => 643,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'localeHasPeriodSyntax' => 
      array (
        'name' => 'localeHasPeriodSyntax',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 50,
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
 * Returns true if the given locale is internally supported and has period syntax support (X times, every X, from X, to X).
 * Support is considered enabled if the 4 sentences are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
        'startLine' => 653,
        'endLine' => 662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getAvailableLocales' => 
      array (
        'name' => 'getAvailableLocales',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the list of internally available locales and already loaded custom locales.
 * (It will ignore custom translator dynamic loading.)
 *
 * @return array
 */',
        'startLine' => 670,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getAvailableLocalesInfo' => 
      array (
        'name' => 'getAvailableLocalesInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns list of Language object for each available locale. This object allow you to get the ISO name, native
 * name, region and variant of the locale.
 *
 * @return Language[]
 */',
        'startLine' => 685,
        'endLine' => 693,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'translator' => 
      array (
        'name' => 'translator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initialize the default translator instance if necessary.
 *
 * @return \\Symfony\\Component\\Translation\\TranslatorInterface
 */',
        'startLine' => 700,
        'endLine' => 707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getTranslatorLocale' => 
      array (
        'name' => 'getTranslatorLocale',
        'parameters' => 
        array (
          'translator' => 
          array (
            'name' => 'translator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 719,
                'endLine' => 719,
                'startTokenPos' => 3582,
                'startFilePos' => 25424,
                'endTokenPos' => 3582,
                'endFilePos' => 25427,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 719,
            'endLine' => 719,
            'startColumn' => 44,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the locale of a given translator.
 *
 * If null or omitted, current local translator is used.
 * If no local translator is in use, current global translator is used.
 *
 * @param null $translator
 *
 * @return string|null
 */',
        'startLine' => 719,
        'endLine' => 728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 2,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getLocaleAwareTranslator' => 
      array (
        'name' => 'getLocaleAwareTranslator',
        'parameters' => 
        array (
          'translator' => 
          array (
            'name' => 'translator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 737,
                'endLine' => 737,
                'startTokenPos' => 3663,
                'startFilePos' => 25948,
                'endTokenPos' => 3663,
                'endFilePos' => 25951,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 737,
            'endLine' => 737,
            'startColumn' => 56,
            'endColumn' => 73,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an error if passed object is not LocaleAwareInterface.
 *
 * @param LocaleAwareInterface|null $translator
 *
 * @return LocaleAwareInterface|null
 */',
        'startLine' => 737,
        'endLine' => 748,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 18,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getFromCatalogue' => 
      array (
        'name' => 'getFromCatalogue',
        'parameters' => 
        array (
          'translator' => 
          array (
            'name' => 'translator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 46,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'catalogue' => 
          array (
            'name' => 'catalogue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 59,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'id' => 
          array (
            'name' => 'id',
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
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 71,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'domain' => 
          array (
            'name' => 'domain',
            'default' => 
            array (
              'code' => '\'messages\'',
              'attributes' => 
              array (
                'startLine' => 756,
                'endLine' => 756,
                'startTokenPos' => 3772,
                'startFilePos' => 26614,
                'endTokenPos' => 3772,
                'endFilePos' => 26623,
              ),
            ),
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
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 83,
            'endColumn' => 109,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed                                                    $translator
 * @param \\Symfony\\Component\\Translation\\MessageCatalogueInterface $catalogue
 *
 * @return mixed
 */',
        'startLine' => 756,
        'endLine' => 761,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'cleanWordFromTranslationString' => 
      array (
        'name' => 'cleanWordFromTranslationString',
        'parameters' => 
        array (
          'word' => 
          array (
            'name' => 'word',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 770,
            'endLine' => 770,
            'startColumn' => 60,
            'endColumn' => 64,
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
 * Return the word cleaned from its translation codes.
 *
 * @param string $word
 *
 * @return string
 */',
        'startLine' => 770,
        'endLine' => 777,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'translateWordsByKeys' => 
      array (
        'name' => 'translateWordsByKeys',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 788,
            'endLine' => 788,
            'startColumn' => 50,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'messages' => 
          array (
            'name' => 'messages',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 788,
            'endLine' => 788,
            'startColumn' => 57,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 788,
            'endLine' => 788,
            'startColumn' => 68,
            'endColumn' => 71,
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
 * Translate a list of words.
 *
 * @param string[] $keys     keys to translate.
 * @param string[] $messages messages bag handling translations.
 * @param string   $key      \'to\' (to get the translation) or \'from\' (to get the detection RegExp pattern).
 *
 * @return string[]
 */',
        'startLine' => 788,
        'endLine' => 805,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'getTranslationArray' => 
      array (
        'name' => 'getTranslationArray',
        'parameters' => 
        array (
          'translation' => 
          array (
            'name' => 'translation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 49,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 63,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'timeString' => 
          array (
            'name' => 'timeString',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 72,
            'endColumn' => 82,
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
 * Get an array of translations based on the current date.
 *
 * @param callable $translation
 * @param int      $length
 * @param string   $timeString
 *
 * @return string[]
 */',
        'startLine' => 816,
        'endLine' => 832,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
        'aliasName' => NULL,
      ),
      'replaceOrdinalWords' => 
      array (
        'name' => 'replaceOrdinalWords',
        'parameters' => 
        array (
          'timeString' => 
          array (
            'name' => 'timeString',
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
            'startLine' => 834,
            'endLine' => 834,
            'startColumn' => 49,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ordinalWords' => 
          array (
            'name' => 'ordinalWords',
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
            'startLine' => 834,
            'endLine' => 834,
            'startColumn' => 69,
            'endColumn' => 87,
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
        'startLine' => 834,
        'endLine' => 839,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Carbon\\Traits',
        'declaringClassName' => 'Carbon\\Traits\\Localization',
        'implementingClassName' => 'Carbon\\Traits\\Localization',
        'currentClassName' => 'Carbon\\Traits\\Localization',
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