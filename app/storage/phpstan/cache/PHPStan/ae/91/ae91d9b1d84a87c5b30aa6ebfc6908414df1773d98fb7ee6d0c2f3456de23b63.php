<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Services/Finance/AccountService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\Finance\AccountService
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-85d3f565228b9479f9c452ab35ad27c8083d0c284770f990cf9dbfbaf36836b4',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Services\\Finance\\AccountService',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Services/Finance/AccountService.php',
      ),
    ),
    'namespace' => 'App\\Services\\Finance',
    'name' => 'App\\Services\\Finance\\AccountService',
    'shortName' => 'AccountService',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 150,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'App\\Http\\Traits\\LogsActivity',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'generateAutoNumber' => 
      array (
        'name' => 'generateAutoNumber',
        'parameters' => 
        array (
          'modelClass' => 
          array (
            'name' => 'modelClass',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 9,
            'endColumn' => 26,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'auto_number\'',
              'attributes' => 
              array (
                'startLine' => 22,
                'endLine' => 22,
                'startTokenPos' => 86,
                'startFilePos' => 480,
                'endTokenPos' => 86,
                'endFilePos' => 492,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 9,
            'endColumn' => 38,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pad' => 
          array (
            'name' => 'pad',
            'default' => 
            array (
              'code' => '6',
              'attributes' => 
              array (
                'startLine' => 23,
                'endLine' => 23,
                'startTokenPos' => 95,
                'startFilePos' => 514,
                'endTokenPos' => 95,
                'endFilePos' => 514,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
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
        'startLine' => 20,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\AccountService',
        'implementingClassName' => 'App\\Services\\Finance\\AccountService',
        'currentClassName' => 'App\\Services\\Finance\\AccountService',
        'aliasName' => NULL,
      ),
      'createReceipt' => 
      array (
        'name' => 'createReceipt',
        'parameters' => 
        array (
          'amount' => 
          array (
            'name' => 'amount',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'student' => 
          array (
            'name' => 'student',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 44,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'academicYearId' => 
          array (
            'name' => 'academicYearId',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 54,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'school_id' => 
          array (
            'name' => 'school_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 71,
            'endColumn' => 80,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Models\\ReceiptPayment',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 34,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\AccountService',
        'implementingClassName' => 'App\\Services\\Finance\\AccountService',
        'currentClassName' => 'App\\Services\\Finance\\AccountService',
        'aliasName' => NULL,
      ),
      'createOrUpdateExchangeBond' => 
      array (
        'name' => 'createOrUpdateExchangeBond',
        'parameters' => 
        array (
          'school' => 
          array (
            'name' => 'school',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 57,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'acc_year' => 
          array (
            'name' => 'acc_year',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 75,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Models\\ExchangeBond',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 62,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\AccountService',
        'implementingClassName' => 'App\\Services\\Finance\\AccountService',
        'currentClassName' => 'App\\Services\\Finance\\AccountService',
        'aliasName' => NULL,
      ),
      'fundAccount' => 
      array (
        'name' => 'fundAccount',
        'parameters' => 
        array (
          'school' => 
          array (
            'name' => 'school',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 9,
            'endColumn' => 15,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exchange' => 
          array (
            'name' => 'exchange',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 104,
                'endLine' => 104,
                'startTokenPos' => 727,
                'startFilePos' => 3456,
                'endTokenPos' => 727,
                'endFilePos' => 3459,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'Credit' => 
          array (
            'name' => 'Credit',
            'default' => 
            array (
              'code' => '0.0',
              'attributes' => 
              array (
                'startLine' => 105,
                'endLine' => 105,
                'startTokenPos' => 734,
                'startFilePos' => 3480,
                'endTokenPos' => 734,
                'endFilePos' => 3482,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 9,
            'endColumn' => 21,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'Debit' => 
          array (
            'name' => 'Debit',
            'default' => 
            array (
              'code' => '0.0',
              'attributes' => 
              array (
                'startLine' => 106,
                'endLine' => 106,
                'startTokenPos' => 741,
                'startFilePos' => 3502,
                'endTokenPos' => 741,
                'endFilePos' => 3504,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'receipt' => 
          array (
            'name' => 'receipt',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 107,
                'endLine' => 107,
                'startTokenPos' => 748,
                'startFilePos' => 3526,
                'endTokenPos' => 748,
                'endFilePos' => 3529,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 9,
            'endColumn' => 23,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 102,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\AccountService',
        'implementingClassName' => 'App\\Services\\Finance\\AccountService',
        'currentClassName' => 'App\\Services\\Finance\\AccountService',
        'aliasName' => NULL,
      ),
      'createStudentAccount' => 
      array (
        'name' => 'createStudentAccount',
        'parameters' => 
        array (
          'student' => 
          array (
            'name' => 'student',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 9,
            'endColumn' => 16,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fee_invoices_id' => 
          array (
            'name' => 'fee_invoices_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'acc_year' => 
          array (
            'name' => 'acc_year',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 9,
            'endColumn' => 17,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 124,
            'endLine' => 124,
            'startColumn' => 9,
            'endColumn' => 13,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'debit' => 
          array (
            'name' => 'debit',
            'default' => 
            array (
              'code' => '0.0',
              'attributes' => 
              array (
                'startLine' => 125,
                'endLine' => 125,
                'startTokenPos' => 870,
                'startFilePos' => 4049,
                'endTokenPos' => 870,
                'endFilePos' => 4051,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'credit' => 
          array (
            'name' => 'credit',
            'default' => 
            array (
              'code' => '0.0',
              'attributes' => 
              array (
                'startLine' => 126,
                'endLine' => 126,
                'startTokenPos' => 877,
                'startFilePos' => 4072,
                'endTokenPos' => 877,
                'endFilePos' => 4074,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 9,
            'endColumn' => 21,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'recipt_id' => 
          array (
            'name' => 'recipt_id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 127,
                'endLine' => 127,
                'startTokenPos' => 884,
                'startFilePos' => 4098,
                'endTokenPos' => 884,
                'endFilePos' => 4101,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 9,
            'endColumn' => 25,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
          'excpetion_id' => 
          array (
            'name' => 'excpetion_id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 128,
                'endLine' => 128,
                'startTokenPos' => 891,
                'startFilePos' => 4128,
                'endTokenPos' => 891,
                'endFilePos' => 4131,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 9,
            'endColumn' => 28,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
          'exchange_bond_id' => 
          array (
            'name' => 'exchange_bond_id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 129,
                'endLine' => 129,
                'startTokenPos' => 898,
                'startFilePos' => 4162,
                'endTokenPos' => 898,
                'endFilePos' => 4165,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 8,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 120,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\AccountService',
        'implementingClassName' => 'App\\Services\\Finance\\AccountService',
        'currentClassName' => 'App\\Services\\Finance\\AccountService',
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