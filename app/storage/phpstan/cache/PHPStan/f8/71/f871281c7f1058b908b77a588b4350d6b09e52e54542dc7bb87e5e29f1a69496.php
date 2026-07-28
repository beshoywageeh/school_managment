<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Http/Kernel.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Kernel
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-61b7c4ad840a77d071aa73ed2cfe201024c159074fffaafc3a2bf9a06ced7ca5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Kernel',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Http/Kernel.php',
      ),
    ),
    'namespace' => 'App\\Http',
    'name' => 'App\\Http\\Kernel',
    'shortName' => 'Kernel',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 42,
    'endLine' => 118,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Foundation\\Http\\Kernel',
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
      'middleware' => 
      array (
        'declaringClassName' => 'App\\Http\\Kernel',
        'implementingClassName' => 'App\\Http\\Kernel',
        'name' => 'middleware',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[
    // \\App\\Http\\Middleware\\TrustHosts::class,
    \\App\\Http\\Middleware\\TrustProxies::class,
    \\Illuminate\\Http\\Middleware\\HandleCors::class,
    \\App\\Http\\Middleware\\PreventRequestsDuringMaintenance::class,
    \\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize::class,
    \\App\\Http\\Middleware\\TrimStrings::class,
    \\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull::class,
    \\Alkoumi\\LaravelArabicNumbers\\Http\\Middleware\\ConvertArabicDigitsToEnlishMiddleware::class,
    \\App\\Http\\Middleware\\SecurityHeadersMiddleware::class,
]',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 62,
            'startTokenPos' => 209,
            'startFilePos' => 2253,
            'endTokenPos' => 253,
            'endFilePos' => 2615,
          ),
        ),
        'docComment' => '/**
 * The application\'s global HTTP middleware stack.
 *
 * These middleware are run during every request to your application.
 *
 * @var array<int, class-string|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middlewareGroups' => 
      array (
        'declaringClassName' => 'App\\Http\\Kernel',
        'implementingClassName' => 'App\\Http\\Kernel',
        'name' => 'middlewareGroups',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'web\' => [\\App\\Http\\Middleware\\EncryptCookies::class, \\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse::class, \\Illuminate\\Session\\Middleware\\StartSession::class, \\Illuminate\\View\\Middleware\\ShareErrorsFromSession::class, \\App\\Http\\Middleware\\VerifyCsrfToken::class, \\Illuminate\\Routing\\Middleware\\SubstituteBindings::class], \'api\' => [
    // \\Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful::class,
    \\Illuminate\\Routing\\Middleware\\ThrottleRequests::class . \':api\',
    \\Illuminate\\Routing\\Middleware\\SubstituteBindings::class,
]]',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 84,
            'startTokenPos' => 264,
            'startFilePos' => 2785,
            'endTokenPos' => 328,
            'endFilePos' => 3258,
          ),
        ),
        'docComment' => '/**
 * The application\'s route middleware groups.
 *
 * @var array<string, array<int, class-string|string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middlewareAliases' => 
      array (
        'declaringClassName' => 'App\\Http\\Kernel',
        'implementingClassName' => 'App\\Http\\Kernel',
        'name' => 'middlewareAliases',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'auth\' => \\App\\Http\\Middleware\\Authenticate::class, \'auth.basic\' => \\Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth::class, \'auth.session\' => \\Illuminate\\Session\\Middleware\\AuthenticateSession::class, \'cache.headers\' => \\Illuminate\\Http\\Middleware\\SetCacheHeaders::class, \'can\' => \\Illuminate\\Auth\\Middleware\\Authorize::class, \'guest\' => \\App\\Http\\Middleware\\RedirectIfAuthenticated::class, \'password.confirm\' => \\Illuminate\\Auth\\Middleware\\RequirePassword::class, \'precognitive\' => \\Illuminate\\Foundation\\Http\\Middleware\\HandlePrecognitiveRequests::class, \'signed\' => \\App\\Http\\Middleware\\ValidateSignature::class, \'throttle\' => \\Illuminate\\Routing\\Middleware\\ThrottleRequests::class, \'verified\' => \\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified::class, \'localize\' => \\Mcamara\\LaravelLocalization\\Middleware\\LaravelLocalizationRoutes::class, \'localizationRedirect\' => \\Mcamara\\LaravelLocalization\\Middleware\\LaravelLocalizationRedirectFilter::class, \'localeSessionRedirect\' => \\Mcamara\\LaravelLocalization\\Middleware\\LocaleSessionRedirect::class, \'localeCookieRedirect\' => \\Mcamara\\LaravelLocalization\\Middleware\\LocaleCookieRedirect::class, \'localeViewPath\' => \\Mcamara\\LaravelLocalization\\Middleware\\LaravelLocalizationViewPath::class, \'Debugbar\' => \\App\\Http\\Barryvdh\\Debugbar\\Facades\\Debugbar::class, \'setup\' => \\App\\Http\\Middleware\\EnsureSetupIsNotCompleted::class, \'role\' => \\Spatie\\Permission\\Middleware\\RoleMiddleware::class, \'permission\' => \\Spatie\\Permission\\Middleware\\PermissionMiddleware::class, \'role_or_permission\' => \\Spatie\\Permission\\Middleware\\RoleOrPermissionMiddleware::class, \'sanitize\' => \\App\\Http\\Middleware\\SanitizeInput::class]',
          'attributes' => 
          array (
            'startLine' => 93,
            'endLine' => 117,
            'startTokenPos' => 339,
            'startFilePos' => 3525,
            'endTokenPos' => 539,
            'endFilePos' => 4727,
          ),
        ),
        'docComment' => '/**
 * The application\'s middleware aliases.
 *
 * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
 *
 * @var array<string, class-string|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 93,
        'endLine' => 117,
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