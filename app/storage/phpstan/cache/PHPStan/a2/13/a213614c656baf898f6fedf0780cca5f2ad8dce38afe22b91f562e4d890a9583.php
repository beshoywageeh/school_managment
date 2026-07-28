<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Models/Inventory/InventoryOrderItem.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Inventory\InventoryOrderItem
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-0274d093bfedb7a3a13889ff3e7ef7ae7c336d3fd7fa46d3575664fbbc076c08',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Models/Inventory/InventoryOrderItem.php',
      ),
    ),
    'namespace' => 'App\\Models\\Inventory',
    'name' => 'App\\Models\\Inventory\\InventoryOrderItem',
    'shortName' => 'InventoryOrderItem',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 44,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'table' => 
      array (
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'inventory_order_items\'',
          'attributes' => 
          array (
            'startLine' => 16,
            'endLine' => 16,
            'startTokenPos' => 58,
            'startFilePos' => 394,
            'endTokenPos' => 58,
            'endFilePos' => 416,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'inventory_order_id\', \'itemable_id\', \'itemable_type\', \'quantity_in\', \'quantity_out\', \'unit_price\', \'total\']',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 26,
            'startTokenPos' => 67,
            'startFilePos' => 446,
            'endTokenPos' => 90,
            'endFilePos' => 616,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 26,
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
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'quantity_in\' => \'decimal:2\', \'quantity_out\' => \'decimal:2\', \'unit_price\' => \'decimal:2\', \'total\' => \'decimal:2\']',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 33,
            'startTokenPos' => 99,
            'startFilePos' => 643,
            'endTokenPos' => 129,
            'endFilePos' => 795,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 33,
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
      'order' => 
      array (
        'name' => 'order',
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
        'startLine' => 35,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'aliasName' => NULL,
      ),
      'itemable' => 
      array (
        'name' => 'itemable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 40,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models\\Inventory',
        'declaringClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'implementingClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
        'currentClassName' => 'App\\Models\\Inventory\\InventoryOrderItem',
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