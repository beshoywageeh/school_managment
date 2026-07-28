<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Http/Traits/ImageTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Traits\ImageTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-e1f231f37adfa1dfef33ea492e9efce832b4f5b8bd39d49ff8c5f7e756bf900f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Traits\\ImageTrait',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Http/Traits/ImageTrait.php',
      ),
    ),
    'namespace' => 'App\\Http\\Traits',
    'name' => 'App\\Http\\Traits\\ImageTrait',
    'shortName' => 'ImageTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 54,
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
      'verifyAndStoreImage' => 
      array (
        'name' => 'verifyAndStoreImage',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'inputName' => 
          array (
            'name' => 'inputName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 59,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'folderName' => 
          array (
            'name' => 'folderName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 71,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'disk' => 
          array (
            'name' => 'disk',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 84,
            'endColumn' => 88,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'imageableId' => 
          array (
            'name' => 'imageableId',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 91,
            'endColumn' => 102,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'imageableType' => 
          array (
            'name' => 'imageableType',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 105,
            'endColumn' => 118,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'fName' => 
          array (
            'name' => 'fName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 121,
            'endColumn' => 126,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
          'existingImage' => 
          array (
            'name' => 'existingImage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 23,
                'endLine' => 23,
                'startTokenPos' => 71,
                'startFilePos' => 619,
                'endTokenPos' => 71,
                'endFilePos' => 622,
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
                      'name' => 'App\\Models\\Image',
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
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 129,
            'endColumn' => 156,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Verify and store or update an image.
 *
 * @param  string  $inputName
 * @param  string  $folderName
 * @param  string  $disk
 * @param  int  $imageableId
 * @param  string  $imageableType
 * @param  string  $fName
 * @return string|null
 */',
        'startLine' => 23,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Traits',
        'declaringClassName' => 'App\\Http\\Traits\\ImageTrait',
        'implementingClassName' => 'App\\Http\\Traits\\ImageTrait',
        'currentClassName' => 'App\\Http\\Traits\\ImageTrait',
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