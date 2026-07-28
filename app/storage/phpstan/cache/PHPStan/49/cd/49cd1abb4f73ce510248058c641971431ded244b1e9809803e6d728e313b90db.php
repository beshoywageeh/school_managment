<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Support/Facades/Cache.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Facades\Cache
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-59c563d4a16eace45d7a0dc365e1170cd42927453a8e223371d51506bd7ada9f-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Facades\\Cache',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Support/Facades/Cache.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support\\Facades',
    'name' => 'Illuminate\\Support\\Facades\\Cache',
    'shortName' => 'Cache',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @method static \\Illuminate\\Contracts\\Cache\\Repository store(string|null $name = null)
 * @method static \\Illuminate\\Contracts\\Cache\\Repository driver(string|null $driver = null)
 * @method static \\Illuminate\\Contracts\\Cache\\Repository resolve(string $name)
 * @method static \\Illuminate\\Cache\\Repository repository(\\Illuminate\\Contracts\\Cache\\Store $store)
 * @method static void refreshEventDispatcher()
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static \\Illuminate\\Cache\\CacheManager forgetDriver(array|string|null $name = null)
 * @method static void purge(string|null $name = null)
 * @method static \\Illuminate\\Cache\\CacheManager extend(string $driver, \\Closure $callback)
 * @method static \\Illuminate\\Cache\\CacheManager setApplication(\\Illuminate\\Contracts\\Foundation\\Application $app)
 * @method static bool has(array|string $key)
 * @method static bool missing(string $key)
 * @method static mixed get(array|string $key, mixed|\\Closure $default = null)
 * @method static array many(array $keys)
 * @method static iterable getMultiple(iterable $keys, mixed $default = null)
 * @method static mixed pull(array|string $key, mixed|\\Closure $default = null)
 * @method static bool put(array|string $key, mixed $value, \\DateTimeInterface|\\DateInterval|int|null $ttl = null)
 * @method static bool set(string $key, mixed $value, null|int|\\DateInterval $ttl = null)
 * @method static bool putMany(array $values, \\DateTimeInterface|\\DateInterval|int|null $ttl = null)
 * @method static bool setMultiple(iterable $values, null|int|\\DateInterval $ttl = null)
 * @method static bool add(string $key, mixed $value, \\DateTimeInterface|\\DateInterval|int|null $ttl = null)
 * @method static int|bool increment(string $key, mixed $value = 1)
 * @method static int|bool decrement(string $key, mixed $value = 1)
 * @method static bool forever(string $key, mixed $value)
 * @method static mixed remember(string $key, \\Closure|\\DateTimeInterface|\\DateInterval|int|null $ttl, \\Closure $callback)
 * @method static mixed sear(string $key, \\Closure $callback)
 * @method static mixed rememberForever(string $key, \\Closure $callback)
 * @method static bool forget(string $key)
 * @method static bool delete(string $key)
 * @method static bool deleteMultiple(iterable $keys)
 * @method static bool clear()
 * @method static \\Illuminate\\Cache\\TaggedCache tags(array|mixed $names)
 * @method static bool supportsTags()
 * @method static int|null getDefaultCacheTime()
 * @method static \\Illuminate\\Cache\\Repository setDefaultCacheTime(int|null $seconds)
 * @method static \\Illuminate\\Contracts\\Cache\\Store getStore()
 * @method static \\Illuminate\\Cache\\Repository setStore(\\Illuminate\\Contracts\\Cache\\Store $store)
 * @method static \\Illuminate\\Contracts\\Events\\Dispatcher getEventDispatcher()
 * @method static void setEventDispatcher(\\Illuminate\\Contracts\\Events\\Dispatcher $events)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static bool flush()
 * @method static string getPrefix()
 * @method static \\Illuminate\\Contracts\\Cache\\Lock lock(string $name, int $seconds = 0, string|null $owner = null)
 * @method static \\Illuminate\\Contracts\\Cache\\Lock restoreLock(string $name, string $owner)
 *
 * @see \\Illuminate\\Cache\\CacheManager
 *
 * @mixin \\Illuminate\\Cache\\Repository
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 60,
    'endLine' => 71,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Facades\\Facade',
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
      'getFacadeAccessor' => 
      array (
        'name' => 'getFacadeAccessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the registered name of the component.
 *
 * @return string
 */',
        'startLine' => 67,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Support\\Facades',
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'currentClassName' => 'Illuminate\\Support\\Facades\\Cache',
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