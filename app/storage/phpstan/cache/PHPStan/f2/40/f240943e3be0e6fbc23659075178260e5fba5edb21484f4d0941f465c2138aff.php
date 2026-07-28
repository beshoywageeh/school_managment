<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Models/Inventory/InventoryTransaction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Inventory\InventoryTransaction
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-6ec19cb4fb89fe5afae010dc6a7c7dab4a39394828cbfb26ec8af605e0480caa',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\Inventory\\InventoryTransaction',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Models/Inventory/InventoryTransaction.php',
      ),
    ),
    'namespace' => 'App\\Models\\Inventory',
    'name' => 'App\\Models\\Inventory\\InventoryTransaction',
    'shortName' => 'InventoryTransaction',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 62,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'App\\Models\\Traits\\BelongsToSchool',
      1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'item_id\', \'type\', \'quantity\', \'balance\', \'reference_type\', \'reference_id\', \'notes\', \'user_id\']',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 30,
            'startTokenPos' => 83,
            'startFilePos' => 518,
            'endTokenPos' => 109,
            'endFilePos' => 684,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'casts' => 
      array (
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'type\' => \\App\\Enums\\TransactionType::class, \'quantity\' => \'decimal:2\', \'balance\' => \'decimal:2\']',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 36,
            'startTokenPos' => 118,
            'startFilePos' => 711,
            'endTokenPos' => 143,
            'endFilePos' => 828,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 6,
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
      'item' => 
      array (
        'name' => 'item',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'aliasName' => NULL,
      ),
      'school' => 
      array (
        'name' => 'school',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 43,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'aliasName' => NULL,
      ),
      'user' => 
      array (
        'name' => 'user',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 48,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'aliasName' => NULL,
      ),
      'scopeBySchool' => 
      array (
        'name' => 'scopeBySchool',
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'schoolId' => 
          array (
            'name' => 'schoolId',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 53,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'aliasName' => NULL,
      ),
      'reference' => 
      array (
        'name' => 'reference',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\MorphTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 58,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryTransaction',
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