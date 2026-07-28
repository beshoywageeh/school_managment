<?php declare(strict_types = 1);

// osfsl-/data/projects/laravel_projects/school_managment/app/vendor/composer/../alkoumi/laravel-arabic-numbers/src/Numbers.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Alkoumi\LaravelArabicNumbers\Numbers
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-efb51396abeb4514642dd5fdca456e77b712757cc7fc5d340e9ce140bfcf1292-8.5-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'filename' => '/data/projects/laravel_projects/school_managment/app/vendor/composer/../alkoumi/laravel-arabic-numbers/src/Numbers.php',
      ),
    ),
    'namespace' => 'Alkoumi\\LaravelArabicNumbers',
    'name' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
    'shortName' => 'Numbers',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 6,
    'endLine' => 61,
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
    ),
    'immediateMethods' => 
    array (
      'TafqeetNumber' => 
      array (
        'name' => 'TafqeetNumber',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 14,
            'endLine' => 14,
            'startColumn' => 42,
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
 * Spell integer number in Arabic idiom { تتفقيط الأرقام بالعربية الفصحى مثل أربعة آلاف و مئتان و أربعة و ثلاثون ريالًا و خمسون هللة فقط لا غير  }
 * @param $number { هنا تضع الرقم الذي تريد تفقيطه باللغة العربية 523.05 }
 * @return string The Arabic idiom that spells inserted number { تتفقيط الأرقام بالعربية الفصحى }
 * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
 */',
        'startLine' => 14,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Alkoumi\\LaravelArabicNumbers',
        'declaringClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'implementingClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'currentClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'aliasName' => NULL,
      ),
      'TafqeetMoney' => 
      array (
        'name' => 'TafqeetMoney',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'currency' => 
          array (
            'name' => 'currency',
            'default' => 
            array (
              'code' => '\'sar\'',
              'attributes' => 
              array (
                'startLine' => 26,
                'endLine' => 26,
                'startTokenPos' => 63,
                'startFilePos' => 1328,
                'endTokenPos' => 63,
                'endFilePos' => 1332,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 50,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'lang' => 
          array (
            'name' => 'lang',
            'default' => 
            array (
              'code' => '\'ar\'',
              'attributes' => 
              array (
                'startLine' => 26,
                'endLine' => 26,
                'startTokenPos' => 70,
                'startFilePos' => 1343,
                'endTokenPos' => 70,
                'endFilePos' => 1346,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 69,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Spell number in Arabic idiom as money { تتفقيط المبالغ النقدية بالعربية الفصحى }
 * @param $number { هنا تضع المبلغ الذي تريد تفقيطه باللغة العربية 523.50 }
 * @param string $currency { هنا تضع العملة التي تريد تفقيطها ثلاث حروف \'SAR\' }
 * @return string The Arabic idiom that spells inserted number as money
 * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
 */',
        'startLine' => 26,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Alkoumi\\LaravelArabicNumbers',
        'declaringClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'implementingClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'currentClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'aliasName' => NULL,
      ),
      'NumberFromString' => 
      array (
        'name' => 'NumberFromString',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 45,
            'endColumn' => 55,
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
 * Convert Arabic idiom number string into Integer { الحصول على العدد من الألفاظ العربية }
 * @param string $str The Arabic idiom that spells input number
 * @return integer OR float The number you spell it in the Arabic idiom
 * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
 */',
        'startLine' => 37,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Alkoumi\\LaravelArabicNumbers',
        'declaringClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'implementingClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'currentClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'aliasName' => NULL,
      ),
      'ShowInArabicDigits' => 
      array (
        'name' => 'ShowInArabicDigits',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 47,
            'endColumn' => 52,
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
 * Represent integer number in Arabic-Indic digits using HTML entities { عرض وتحويل الأرقام الهندية إلى العربية الشرقية لأي قيمة كانت  }
 * @param string OR Mixed $value
 * @return string The Arabic-Indic digits represent inserted integer number
 * using HTML entities
 * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
 * @copyright inspired from The Great 💗 Khaled Al-Sham\'aa <khaled@ar-php.org>
 */',
        'startLine' => 50,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Alkoumi\\LaravelArabicNumbers',
        'declaringClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'implementingClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'currentClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'aliasName' => NULL,
      ),
      'ShowInEnglishDigits' => 
      array (
        'name' => 'ShowInEnglishDigits',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 48,
            'endColumn' => 53,
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
        'startLine' => 55,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Alkoumi\\LaravelArabicNumbers',
        'declaringClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'implementingClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
        'currentClassName' => 'Alkoumi\\LaravelArabicNumbers\\Numbers',
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