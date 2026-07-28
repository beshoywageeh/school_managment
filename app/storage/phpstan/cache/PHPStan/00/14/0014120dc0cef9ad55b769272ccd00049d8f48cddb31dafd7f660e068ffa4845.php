<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/SoftDeletes.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\SoftDeletes
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5e00dffb317c577189fb0d5fd5023b111d43ae5e1e1b0a9499a6b672ee72f8bc-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/SoftDeletes.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Eloquent',
    'name' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
    'shortName' => 'SoftDeletes',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|\\Illuminate\\Database\\Query\\Builder withTrashed(bool $withTrashed = true)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|\\Illuminate\\Database\\Query\\Builder onlyTrashed()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|\\Illuminate\\Database\\Query\\Builder withoutTrashed()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 249,
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
      'forceDeleting' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'name' => 'forceDeleting',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 23,
            'startFilePos' => 548,
            'endTokenPos' => 23,
            'endFilePos' => 552,
          ),
        ),
        'docComment' => '/**
 * Indicates if the model is currently force deleting.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
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
      'bootSoftDeletes' => 
      array (
        'name' => 'bootSoftDeletes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Boot the soft deleting trait for a model.
 *
 * @return void
 */',
        'startLine' => 24,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'initializeSoftDeletes' => 
      array (
        'name' => 'initializeSoftDeletes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initialize the soft deleting trait for an instance.
 *
 * @return void
 */',
        'startLine' => 34,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'forceDelete' => 
      array (
        'name' => 'forceDelete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Force a hard delete on a soft deleted model.
 *
 * @return bool|null
 */',
        'startLine' => 46,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'forceDeleteQuietly' => 
      array (
        'name' => 'forceDeleteQuietly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Force a hard delete on a soft deleted model without raising any events.
 *
 * @return bool|null
 */',
        'startLine' => 68,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'performDeleteOnModel' => 
      array (
        'name' => 'performDeleteOnModel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Perform the actual delete query on this model instance.
 *
 * @return mixed
 */',
        'startLine' => 78,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'runSoftDelete' => 
      array (
        'name' => 'runSoftDelete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Perform the actual delete query on this model instance.
 *
 * @return void
 */',
        'startLine' => 94,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'restore' => 
      array (
        'name' => 'restore',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Restore a soft-deleted model instance.
 *
 * @return bool
 */',
        'startLine' => 122,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'restoreQuietly' => 
      array (
        'name' => 'restoreQuietly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Restore a soft-deleted model instance without raising any events.
 *
 * @return bool
 */',
        'startLine' => 150,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'trashed' => 
      array (
        'name' => 'trashed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the model instance has been soft-deleted.
 *
 * @return bool
 */',
        'startLine' => 160,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'softDeleted' => 
      array (
        'name' => 'softDeleted',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 40,
            'endColumn' => 48,
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
 * Register a "softDeleted" model event callback with the dispatcher.
 *
 * @param  \\Closure|string  $callback
 * @return void
 */',
        'startLine' => 171,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'restoring' => 
      array (
        'name' => 'restoring',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 182,
            'endLine' => 182,
            'startColumn' => 38,
            'endColumn' => 46,
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
 * Register a "restoring" model event callback with the dispatcher.
 *
 * @param  \\Closure|string  $callback
 * @return void
 */',
        'startLine' => 182,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'restored' => 
      array (
        'name' => 'restored',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 37,
            'endColumn' => 45,
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
 * Register a "restored" model event callback with the dispatcher.
 *
 * @param  \\Closure|string  $callback
 * @return void
 */',
        'startLine' => 193,
        'endLine' => 196,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'forceDeleting' => 
      array (
        'name' => 'forceDeleting',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 42,
            'endColumn' => 50,
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
 * Register a "forceDeleting" model event callback with the dispatcher.
 *
 * @param  \\Closure|string  $callback
 * @return void
 */',
        'startLine' => 204,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'forceDeleted' => 
      array (
        'name' => 'forceDeleted',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 41,
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
 * Register a "forceDeleted" model event callback with the dispatcher.
 *
 * @param  \\Closure|string  $callback
 * @return void
 */',
        'startLine' => 215,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'isForceDeleting' => 
      array (
        'name' => 'isForceDeleting',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the model is currently force deleting.
 *
 * @return bool
 */',
        'startLine' => 225,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'getDeletedAtColumn' => 
      array (
        'name' => 'getDeletedAtColumn',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the name of the "deleted at" column.
 *
 * @return string
 */',
        'startLine' => 235,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'aliasName' => NULL,
      ),
      'getQualifiedDeletedAtColumn' => 
      array (
        'name' => 'getQualifiedDeletedAtColumn',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the fully qualified "deleted at" column.
 *
 * @return string
 */',
        'startLine' => 245,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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