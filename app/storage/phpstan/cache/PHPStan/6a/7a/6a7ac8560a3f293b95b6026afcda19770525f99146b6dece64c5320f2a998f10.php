<?php declare(strict_types = 1);

// odsl-/data/projects/laravel_projects/school_managment/app/app/Services/Finance/FinancialService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\Finance\FinancialService
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5-1878c7329fa2342a8883a595fbfffffd0d5fd6127e0f27ac3e3c40c70e4191d3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Services\\Finance\\FinancialService',
        'filename' => '/data/projects/laravel_projects/school_managment/app/app/Services/Finance/FinancialService.php',
      ),
    ),
    'namespace' => 'App\\Services\\Finance',
    'name' => 'App\\Services\\Finance\\FinancialService',
    'shortName' => 'FinancialService',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @deprecated Use InvoiceService or AccountService or StudentOrderService directly.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 83,
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
      'invoiceService' => 
      array (
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'name' => 'invoiceService',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Services\\Finance\\InvoiceService',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 9,
        'endColumn' => 48,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'accountService' => 
      array (
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'name' => 'accountService',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Services\\Finance\\AccountService',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 9,
        'endColumn' => 48,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'studentOrderService' => 
      array (
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'name' => 'studentOrderService',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Services\\StudentOrderService',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 9,
        'endColumn' => 58,
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
          'invoiceService' => 
          array (
            'name' => 'invoiceService',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Services\\Finance\\InvoiceService',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 9,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'accountService' => 
          array (
            'name' => 'accountService',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Services\\Finance\\AccountService',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 9,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'studentOrderService' => 
          array (
            'name' => 'studentOrderService',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Services\\StudentOrderService',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 24,
            'endLine' => 24,
            'startColumn' => 9,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 21,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'FeeInvoice' => 
      array (
        'name' => 'FeeInvoice',
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fee' => 
          array (
            'name' => 'fee',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 42,
            'endColumn' => 45,
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 59,
            'endColumn' => 65,
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
            'name' => 'App\\Models\\FeeInvoice',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 27,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'PaymentParts' => 
      array (
        'name' => 'PaymentParts',
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fee_id' => 
          array (
            'name' => 'fee_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 44,
            'endColumn' => 50,
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 53,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 64,
            'endColumn' => 70,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'pay_at' => 
          array (
            'name' => 'pay_at',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 73,
            'endColumn' => 79,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 82,
            'endColumn' => 88,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'status' => 
          array (
            'name' => 'status',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 91,
            'endColumn' => 97,
            'parameterIndex' => 6,
            'isOptional' => false,
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
        'startLine' => 32,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'AddStudentBookInvoice' => 
      array (
        'name' => 'AddStudentBookInvoice',
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 217,
                'startFilePos' => 1135,
                'endTokenPos' => 217,
                'endFilePos' => 1138,
              ),
            ),
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
                      'name' => 'Illuminate\\Http\\Request',
                      'isIdentifier' => false,
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 53,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Models\\Inventory\\InventoryOrder',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 37,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'AddStudentClotheInvoice' => 
      array (
        'name' => 'AddStudentClotheInvoice',
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
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 42,
                'endLine' => 42,
                'startTokenPos' => 258,
                'startFilePos' => 1330,
                'endTokenPos' => 258,
                'endFilePos' => 1333,
              ),
            ),
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
                      'name' => 'Illuminate\\Http\\Request',
                      'isIdentifier' => false,
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
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 55,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Models\\Inventory\\InventoryOrder',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 42,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'exciption_fee' => 
      array (
        'name' => 'exciption_fee',
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 35,
            'endColumn' => 42,
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 45,
            'endColumn' => 60,
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 63,
            'endColumn' => 71,
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 74,
            'endColumn' => 83,
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
            'name' => 'App\\Models\\ExceptionFees',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 47,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'exchangeBond' => 
      array (
        'name' => 'exchangeBond',
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
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 34,
            'endColumn' => 40,
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
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 43,
            'endColumn' => 58,
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
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 61,
            'endColumn' => 69,
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
        'startLine' => 52,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'Fund_Account' => 
      array (
        'name' => 'Fund_Account',
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 34,
            'endColumn' => 40,
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
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 386,
                'startFilePos' => 1915,
                'endTokenPos' => 386,
                'endFilePos' => 1918,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 43,
            'endColumn' => 58,
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
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 393,
                'startFilePos' => 1931,
                'endTokenPos' => 393,
                'endFilePos' => 1933,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 61,
            'endColumn' => 73,
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
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 400,
                'startFilePos' => 1945,
                'endTokenPos' => 400,
                'endFilePos' => 1947,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 76,
            'endColumn' => 87,
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
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 407,
                'startFilePos' => 1961,
                'endTokenPos' => 407,
                'endFilePos' => 1964,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 90,
            'endColumn' => 104,
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
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
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
            'startLine' => 62,
            'endLine' => 62,
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
            'startLine' => 62,
            'endLine' => 62,
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
            'startLine' => 62,
            'endLine' => 62,
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
            'startLine' => 62,
            'endLine' => 62,
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
        'startLine' => 62,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
        'aliasName' => NULL,
      ),
      'CreateStudentAccount' => 
      array (
        'name' => 'CreateStudentAccount',
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
            'startLine' => 68,
            'endLine' => 68,
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
            'startLine' => 69,
            'endLine' => 69,
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
            'startLine' => 70,
            'endLine' => 70,
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
            'startLine' => 71,
            'endLine' => 71,
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
                'startLine' => 72,
                'endLine' => 72,
                'startTokenPos' => 508,
                'startFilePos' => 2426,
                'endTokenPos' => 508,
                'endFilePos' => 2428,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
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
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 515,
                'startFilePos' => 2449,
                'endTokenPos' => 515,
                'endFilePos' => 2451,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
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
                'startLine' => 74,
                'endLine' => 74,
                'startTokenPos' => 522,
                'startFilePos' => 2475,
                'endTokenPos' => 522,
                'endFilePos' => 2478,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
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
                'startLine' => 75,
                'endLine' => 75,
                'startTokenPos' => 529,
                'startFilePos' => 2505,
                'endTokenPos' => 529,
                'endFilePos' => 2508,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 75,
            'endLine' => 75,
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
                'startLine' => 76,
                'endLine' => 76,
                'startTokenPos' => 536,
                'startFilePos' => 2539,
                'endTokenPos' => 536,
                'endFilePos' => 2542,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 76,
            'endLine' => 76,
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
        'startLine' => 67,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\Finance',
        'declaringClassName' => 'App\\Services\\Finance\\FinancialService',
        'implementingClassName' => 'App\\Services\\Finance\\FinancialService',
        'currentClassName' => 'App\\Services\\Finance\\FinancialService',
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