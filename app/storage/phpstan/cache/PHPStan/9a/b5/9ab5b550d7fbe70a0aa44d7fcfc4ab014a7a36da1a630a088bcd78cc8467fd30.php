<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Notifications/Notifications/CleanupWasSuccessfulNotification.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Backup\Notifications\Notifications\CleanupWasSuccessfulNotification
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f082ac939dd062538d50d8fd0d0a7357e9bca1af2facb504c979a433690ab889-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Notifications/Notifications/CleanupWasSuccessfulNotification.php',
      ),
    ),
    'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
    'name' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
    'shortName' => 'CleanupWasSuccessfulNotification',
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
    'endLine' => 52,
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
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'name' => 'event',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Backup\\Events\\CleanupWasSuccessful',
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
        'endColumn' => 42,
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
                'name' => 'Spatie\\Backup\\Events\\CleanupWasSuccessful',
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
            'endColumn' => 42,
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
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
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
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
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
        'startLine' => 32,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
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
        'startLine' => 44,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification',
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