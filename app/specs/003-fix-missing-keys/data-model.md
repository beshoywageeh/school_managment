# Data Model: Translation File Structure

No database entities involved. This feature modifies existing PHP translation arrays.

## Translation File Layout

```
lang/
├── ar/                           # Arabic translations
│   ├── enums.php                 # Enum/lookup value translations
│   ├── log.php                   # Activity log message templates
│   ├── general.php               # General UI strings
│   ├── auth.php                  # Authentication messages
│   ├── Sidebar.php               # Sidebar navigation labels
│   ├── clothes.php               # Clothes module labels
│   ├── report.php                # Report page labels
│   ├── student.php               # Student module labels
│   ├── promotions.php            # Student promotion labels
│   ├── jobs.php                  # Job definition labels
│   ├── Parents.php               # Parent/guardian labels
│   ├── employees.php             # Employee module labels
│   ├── schedules.php             # Schedule module labels
│   ├── Grades.php                # Grade labels
│   ├── class_rooms.php           # Classroom labels
│   ├── fee_invoice.php           # Fee invoice labels
│   ├── Recipt_Payments.php       # Receipt payments labels
│   └── fund_account.php          # Fund account labels
└── en/                           # English translations
    └── (same filenames)
```

## Key Translation Patterns

### Pattern 1: Simple string map
```php
'key_name' => 'Translation string',
```
Ex: `'male' => 'ذكر'`

### Pattern 2: Nested section
```php
'section_name' => [
    'sub_key' => 'Translation',
],
```
Ex: `'gender' => ['male' => 'ذكر', 'female' => 'أنثى']`

### Pattern 3: Deeply nested (log.php)
```php
'models' => [
    'entity' => [
        'action' => 'Template with :placeholder',
    ],
],
```
Ex: `'models.user.created' => 'تم إنشاء المستخدم :name'`

## Key Access Convention

Keys are accessed via dot notation: `__('file.key')` resolves to `$lang['file']['key']`.

For nested arrays: `__('enums.gender.male')` → `$enums['gender']['male']`.

## Namespace Resolution

When `__('grade.cannot_deleted')` is called, Laravel looks for:
1. `lang/{locale}/grade.php` → `cannot_deleted` — file doesn't exist
2. Current workaround: Add `'grade' => ['cannot_deleted' => '...']` to `Grades.php`

This allows `Grades.grade.cannot_deleted` to resolve via dotted key access while keeping the file-based namespace as the existing filename.
