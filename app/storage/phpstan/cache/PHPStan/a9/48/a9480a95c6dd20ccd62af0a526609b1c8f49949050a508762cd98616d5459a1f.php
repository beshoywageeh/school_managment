<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Notifications/Notifications/UnhealthyBackupWasFoundNotification.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Backup\Notifications\Notifications\UnhealthyBackupWasFoundNotification
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e47a3fab161d2fafaf5d7420ef8c5a16a064d4556a796ca944957f87bd60c354-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../spatie/laravel-backup/src/Notifications/Notifications/UnhealthyBackupWasFoundNotification.php',
      ),
    ),
    'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
    'name' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
    'shortName' => 'UnhealthyBackupWasFoundNotification',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 111,
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
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'name' => 'event',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Backup\\Events\\UnhealthyBackupWasFound',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 9,
        'endColumn' => 45,
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
                'name' => 'Spatie\\Backup\\Events\\UnhealthyBackupWasFound',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 9,
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
        'docComment' => NULL,
        'startLine' => 15,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
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
        'startLine' => 19,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
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
        'startLine' => 42,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
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
        'startLine' => 75,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'aliasName' => NULL,
      ),
      'problemDescription' => 
      array (
        'name' => 'problemDescription',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 98,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'aliasName' => NULL,
      ),
      'failure' => 
      array (
        'name' => 'failure',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Backup\\Tasks\\Monitor\\HealthCheckFailure',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 107,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Spatie\\Backup\\Notifications\\Notifications',
        'declaringClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'implementingClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
        'currentClassName' => 'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification',
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