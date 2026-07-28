<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Notifications/Notifications/CleanupHasFailedNotification.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Backup\Notifications\Notifications\CleanupHasFailedNotification
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b3aeb536a002303b9eff1ce113c2b894de7da5c59696ca3f887b1c0682389891-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Notifications/Notifications/CleanupHasFailedNotification.php',
      ),
    ),
    'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
    'name' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
    'shortName' => 'CleanupHasFailedNotification',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 68,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Spatie\\Backup\\Notifications\\BaseNotification',
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
      'event' => 
      array (
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'name' => 'event',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Backup\\Events\\CleanupHasFailed',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 9,
        'endColumn' => 38,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Spatie\\Backup\\Events\\CleanupHasFailed',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 15,
            'endLine' => 15,
            'startColumn' => 9,
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
        'startLine' => 14,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'aliasName' => NULL,
      ),
      'toMail' => 
      array (
        'name' => 'toMail',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Notifications\\Messages\\MailMessage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 18,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'aliasName' => NULL,
      ),
      'toSlack' => 
      array (
        'name' => 'toSlack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Notifications\\Messages\\SlackMessage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 35,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'aliasName' => NULL,
      ),
      'toDiscord' => 
      array (
        'name' => 'toDiscord',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Backup\\Notifications\\Channels\\Discord\\DiscordMessage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 57,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification',
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