<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Models/Inventory/InventoryItem.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Inventory\InventoryItem
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-805cceef86d5eb50dcf0b8aac6636a72987b5608edb4837d143da73ae604af4b',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\Inventory\\InventoryItem',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Models/Inventory/InventoryItem.php',
      ),
    ),
    'namespace' => 'App\\Models\\Inventory',
    'name' => 'App\\Models\\Inventory\\InventoryItem',
    'shortName' => 'InventoryItem',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 125,
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
      'table' => 
      array (
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'inventory_items\'',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 103,
            'startFilePos' => 669,
            'endTokenPos' => 103,
            'endFilePos' => 685,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'type\', \'category\', \'name\', \'unit\', \'current_stock\', \'min_stock\', \'max_stock\', \'cost_price\', \'sell_price\', \'sales_price_set\', \'is_active\', \'opening_qty\', \'opening_date\', \'grade_id\', \'classroom_id\', \'user_id\', \'description\']',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 45,
            'startTokenPos' => 112,
            'startFilePos' => 715,
            'endTokenPos' => 165,
            'endFilePos' => 1081,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 45,
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
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'type\' => \\App\\Enums\\InventoryItemType::class, \'category\' => \\App\\Enums\\InventoryItemCategory::class, \'is_active\' => \'boolean\', \'opening_date\' => \'date\', \'opening_qty\' => \'decimal:2\', \'sell_price\' => \'decimal:2\', \'sales_price_set\' => \'decimal:2\', \'cost_price\' => \'decimal:2\', \'current_stock\' => \'decimal:2\', \'min_stock\' => \'decimal:2\', \'max_stock\' => \'decimal:2\']',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 59,
            'startTokenPos' => 174,
            'startFilePos' => 1108,
            'endTokenPos' => 257,
            'endFilePos' => 1544,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 59,
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
            'startLine' => 61,
            'endLine' => 61,
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
            'startLine' => 61,
            'endLine' => 61,
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
        'startLine' => 61,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'scopeActive' => 
      array (
        'name' => 'scopeActive',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 33,
            'endColumn' => 38,
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
        'startLine' => 66,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'scopeLowStock' => 
      array (
        'name' => 'scopeLowStock',
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
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'threshold' => 
          array (
            'name' => 'threshold',
            'default' => 
            array (
              'code' => '10',
              'attributes' => 
              array (
                'startLine' => 71,
                'endLine' => 71,
                'startTokenPos' => 328,
                'startFilePos' => 1825,
                'endTokenPos' => 328,
                'endFilePos' => 1826,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 43,
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
        'docComment' => NULL,
        'startLine' => 71,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'scopeByType' => 
      array (
        'name' => 'scopeByType',
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
            'startLine' => 76,
            'endLine' => 76,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 76,
            'endLine' => 76,
            'startColumn' => 41,
            'endColumn' => 45,
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
        'startLine' => 76,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'scopeByCategory' => 
      array (
        'name' => 'scopeByCategory',
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
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'category' => 
          array (
            'name' => 'category',
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
            'startColumn' => 45,
            'endColumn' => 53,
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
        'startLine' => 81,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'grade' => 
      array (
        'name' => 'grade',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 86,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'classroom' => 
      array (
        'name' => 'classroom',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 91,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
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
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 96,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
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
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 101,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'getSalesPriceAttribute' => 
      array (
        'name' => 'getSalesPriceAttribute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'orderItems' => 
      array (
        'name' => 'orderItems',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 111,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'orders' => 
      array (
        'name' => 'orders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 116,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'aliasName' => NULL,
      ),
      'transactions' => 
      array (
        'name' => 'transactions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 121,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryItem',
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