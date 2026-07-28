<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Support/Facades/Password.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Facades\Password
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4f6cc2ccd34c004c4598b766388e7c10050fc30f7f7808fd1fd538ad3dddaa63-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Facades\\Password',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/framework/src/Illuminate/Support/Facades/Password.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support\\Facades',
    'name' => 'Illuminate\\Support\\Facades\\Password',
    'shortName' => 'Password',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @method static \\Illuminate\\Contracts\\Auth\\PasswordBroker broker(string|null $name = null)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static string sendResetLink(array $credentials, \\Closure|null $callback = null)
 * @method static mixed reset(array $credentials, \\Closure $callback)
 * @method static \\Illuminate\\Contracts\\Auth\\CanResetPassword|null getUser(array $credentials)
 * @method static string createToken(\\Illuminate\\Contracts\\Auth\\CanResetPassword $user)
 * @method static void deleteToken(\\Illuminate\\Contracts\\Auth\\CanResetPassword $user)
 * @method static bool tokenExists(\\Illuminate\\Contracts\\Auth\\CanResetPassword $user, string $token)
 * @method static \\Illuminate\\Auth\\Passwords\\TokenRepositoryInterface getRepository()
 *
 * @see \\Illuminate\\Auth\\Passwords\\PasswordBrokerManager
 * @see \\Illuminate\\Auth\\Passwords\\PasswordBroker
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 68,
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
      'RESET_LINK_SENT' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Password',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Password',
        'name' => 'RESET_LINK_SENT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Illuminate\\Contracts\\Auth\\PasswordBroker::RESET_LINK_SENT',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 32,
            'startFilePos' => 1180,
            'endTokenPos' => 34,
            'endFilePos' => 1210,
          ),
        ),
        'docComment' => '/**
 * Constant representing a successfully sent reminder.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'PASSWORD_RESET' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Password',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Password',
        'name' => 'PASSWORD_RESET',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Illuminate\\Contracts\\Auth\\PasswordBroker::PASSWORD_RESET',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 45,
            'startFilePos' => 1343,
            'endTokenPos' => 47,
            'endFilePos' => 1372,
          ),
        ),
        'docComment' => '/**
 * Constant representing a successfully reset password.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 58,
      ),
      'INVALID_USER' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Password',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Password',
        'name' => 'INVALID_USER',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Illuminate\\Contracts\\Auth\\PasswordBroker::INVALID_USER',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 58,
            'startFilePos' => 1501,
            'endTokenPos' => 60,
            'endFilePos' => 1528,
          ),
        ),
        'docComment' => '/**
 * Constant representing the user not found response.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 54,
      ),
      'INVALID_TOKEN' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Password',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Password',
        'name' => 'INVALID_TOKEN',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Illuminate\\Contracts\\Auth\\PasswordBroker::INVALID_TOKEN',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 71,
            'startFilePos' => 1647,
            'endTokenPos' => 73,
            'endFilePos' => 1675,
          ),
        ),
        'docComment' => '/**
 * Constant representing an invalid token.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 56,
      ),
      'RESET_THROTTLED' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Password',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Password',
        'name' => 'RESET_THROTTLED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Illuminate\\Contracts\\Auth\\PasswordBroker::RESET_THROTTLED',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 84,
            'startFilePos' => 1805,
            'endTokenPos' => 86,
            'endFilePos' => 1835,
          ),
        ),
        'docComment' => '/**
 * Constant representing a throttled reset attempt.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
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
        'startLine' => 64,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Support\\Facades',
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Password',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Password',
        'currentClassName' => 'Illuminate\\Support\\Facades\\Password',
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