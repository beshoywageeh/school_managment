<?php declare(strict_types = 1);

// ftm-/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v5-2.3.3',
   'data' => 
  array (
    0 => 
    array (
      '7ca12353d2ea4ffc64f70ccd65891ab7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '24d4d6bfb21a36612709e83199eac16c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'f81de4c35a7fa0d4cb75edcef9429383' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'bootHasPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '633d66a315f5357d654329e063ae4ab2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getPermissionClass',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'ade0b45df3e5c4c06aa0163128239629' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getWildcardClass',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '21ea63e4fd846c3bfd56e3094982cf47' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'permissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '6e8f3ba8320e79ea8058b53362d96609' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'scopePermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'a3bc8fb82a077ba3db6022c85dca6165' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'scopeWithoutPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '8e1e744feed1cfefd51e6441f7bd0ec6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'convertToPermissionModels',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'a1d6259dc6f98385f4dc5a8e2afdab25' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'filterPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '02fdb6ac90121fda7d256d0119597002' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasPermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '92fcc3df817411b1d073fc7cdd7e5b26' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasWildcardPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'b3f35025393720ec25ca4fb73d20847f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'checkPermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '7985688947a78aefe63cbb21150898af' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasAnyPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'b24713d5f83a3395ecc27e19d98d8b4e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasAllPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'e7593420771e3a298b7f8dc715b4cc99' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasPermissionViaRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '4d544b3bf0d33ea898b4a4bd60e42fa4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasDirectPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'f101fc6bd846365a0cee68ae0a17ec84' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getPermissionsViaRoles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '7aca8096baf294e37d6ab26ba34b3bbb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getAllPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'ccb6a83bc9df1b9e0656b6198949bcf8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'collectPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'fc39c7cfd1035223b4580bf57617bca8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'givePermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'fcdf78529933f99af96e567661a4538b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'forgetWildcardPermissionIndex',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'c64559059248820fe41003a98d6af531' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'syncPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '0051a988f0193b81655b606447373cef' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'revokePermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '482086e1c8ba507b3eeeb0bbbcd57b6a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getPermissionNames',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'c744d85f3972ce158e71002eb3ebd885' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getStoredPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '579ff08c454816b53e2dceba4a2843db' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'ensureModelSharesGuard',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'f154337c58f0419d131dc42bc4dd4a97' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getGuardNames',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'd6cca88d471ee09da5bbbb77ca055764' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'getDefaultGuardName',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '50fd98804f6371aaea0148f93dfad5e3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'forgetCachedPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '88869748024f67433a8c89bf86a9658a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasAllDirectPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'b3fa4ecc4f1f134b2a582cb2028ff23d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattached' => 'Spatie\\Permission\\Events\\PermissionAttached',
          'permissiondetached' => 'Spatie\\Permission\\Events\\PermissionDetached',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasAnyDirectPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'e62a437795fbe8e5a71af5a7bb97aab1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '64e851580cbb6f8a9e1ec77211dd2942' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'bootRefreshesPermissionCache',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
         'traitData' => 
        array (
          0 => '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php',
          1 => 'Spatie\\Permission\\Models\\Role',
          2 => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '14cca732cebc21d385dcbcbb5b475e3d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => '__construct',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'cf980fbdf587ffa14db3ce05036218f8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'create',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '282668f19e50422d33362a8555799edd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'permissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '6bdaaab311968427a1507db7b7f48a6c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'users',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '96ea457b56b1d7d4ed723331956beb1d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'findByName',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '77491ec2d268df64e040756f1ca44e29' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'findById',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '1ec7b606bfd6ff5e5f8ea73c37f91fb7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'findOrCreate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '39a30850143f76fa05719cb1f8f7a763' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'findByParam',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '9819e1d986f269767c3d0492228f7a69' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
          'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Role',
         'functionName' => 'hasPermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'carbon' => 'Illuminate\\Support\\Carbon',
            'permission' => 'Spatie\\Permission\\Contracts\\Permission',
            'rolecontract' => 'Spatie\\Permission\\Contracts\\Role',
            'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'rolealreadyexists' => 'Spatie\\Permission\\Exceptions\\RoleAlreadyExists',
            'roledoesnotexist' => 'Spatie\\Permission\\Exceptions\\RoleDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'haspermissions' => 'Spatie\\Permission\\Traits\\HasPermissions',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Role',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
    ),
    1 => 
    array (
      '/data/projects/laravel_projects/school_managment/app/vendor/spatie/laravel-permission/src/Models/Role.php' => '14cc8307eb7b7b600efce25f09b7cda85d4d163e249363df2ed22e9d4101a49b',
      '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-permission/src/Traits/HasPermissions.php' => '89d1dc525802930071b0d69e4541279edee0de7e82f08b06f816d87b7fe8cd55',
      '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-permission/src/Traits/RefreshesPermissionCache.php' => '370881494ee529b47bbc1faed96282b4faf9b828a35fc32ff9c766f1f4c2f69f',
    ),
  ),
));