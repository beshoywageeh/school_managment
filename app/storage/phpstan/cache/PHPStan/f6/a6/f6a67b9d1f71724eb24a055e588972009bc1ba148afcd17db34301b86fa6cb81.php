<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/MailWatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Telescope\Watchers\MailWatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6dbe3f0bd42b07e450cd0d22ed554b4088747ea8bb654fcf4419a9597fbdd804-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../laravel/telescope/src/Watchers/MailWatcher.php',
      ),
    ),
    'namespace' => 'Laravel\\Telescope\\Watchers',
    'name' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
    'shortName' => 'MailWatcher',
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
    'endLine' => 119,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Laravel\\Telescope\\Watchers\\Watcher',
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
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 30,
            'endColumn' => 33,
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
 * Register the watcher.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return void
 */',
        'startLine' => 19,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'aliasName' => NULL,
      ),
      'recordMail' => 
      array (
        'name' => 'recordMail',
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
                'name' => 'Illuminate\\Mail\\Events\\MessageSent',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 32,
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
 * Record a mail message was sent.
 *
 * @param  \\Illuminate\\Mail\\Events\\MessageSent  $event
 * @return void
 */',
        'startLine' => 30,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'aliasName' => NULL,
      ),
      'getMailable' => 
      array (
        'name' => 'getMailable',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 36,
            'endColumn' => 41,
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
 * Get the name of the mailable.
 *
 * @param  \\Illuminate\\Mail\\Events\\MessageSent  $event
 * @return string
 */',
        'startLine' => 58,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'aliasName' => NULL,
      ),
      'getQueuedStatus' => 
      array (
        'name' => 'getQueuedStatus',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 40,
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
 * Determine whether the mailable was queued.
 *
 * @param  \\Illuminate\\Mail\\Events\\MessageSent  $event
 * @return bool
 */',
        'startLine' => 73,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'aliasName' => NULL,
      ),
      'formatAddresses' => 
      array (
        'name' => 'formatAddresses',
        'parameters' => 
        array (
          'addresses' => 
          array (
            'name' => 'addresses',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 40,
            'endColumn' => 56,
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
 * Convert the given addresses into a readable format.
 *
 * @param  array|null  $addresses
 * @return array|null
 */',
        'startLine' => 88,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'aliasName' => NULL,
      ),
      'tags' => 
      array (
        'name' => 'tags',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 27,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Extract the tags from the message.
 *
 * @param  \\Swift_Message  $message
 * @param  array  $data
 * @return array
 */',
        'startLine' => 110,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Laravel\\Telescope\\Watchers',
        'declaringClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'implementingClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
        'currentClassName' => 'Laravel\\Telescope\\Watchers\\MailWatcher',
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