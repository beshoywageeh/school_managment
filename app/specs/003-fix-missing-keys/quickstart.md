# Quickstart: Translation Keys Validation Guide

## Prerequisites

- All `php artisan` commands run from project root
- Database not needed (translation files are PHP arrays)

## Setup

```bash
# No setup required — translation files are plain PHP
```

## Validation Scenarios

### 1. Verify Single Key Exists

```bash
php artisan tinker --execute="echo __('enums.inventory_order_status.paid');"
```

Expected: `مدفوع` (locale=ar) or `Paid` (locale=en)

### 2. Verify All Phase A Keys Added

```bash
# Check enums
php artisan tinker --execute="
\$keys = [
  'enums.inventory_order_status.paid',
  'enums.inventory_order_status.unpaid',
  'enums.inventory_order_type.inventory',
  'enums.inventory_order_type.sales',
  'enums.inventory_order_type.gard',
  'enums.transaction_type.in',
  'enums.transaction_type.out',
  'enums.transaction_type.adjust',
];
foreach (\$keys as \$k) { echo \$k . ' → ' . __(\$k) . PHP_EOL; }
"
```

Expected: All return translated strings (not raw key names)

### 3. Run Dashboard Widget Tests

```bash
php artisan test --compact --filter=DashboardRedesignTest
```

Expected: 16/16 passed

### 4. Verify No Missing Key Fallback (Key Parity Scan)

```bash
php artisan tinker --execute="
\$files = ['enums', 'log', 'general', 'auth', 'Sidebar', 'clothes', 'report',
           'student', 'promotions', 'jobs', 'Parents', 'employees', 'schedules',
           'Grades', 'class_rooms', 'fee_invoice', 'Recipt_Payments', 'fund_account'];
\$mismatches = [];
foreach (\$files as \$f) {
  \$ar = include lang_path('ar/'.\$f.'.php');
  \$en = include lang_path('en/'.\$f.'.php');
  // Basic structural comparison (nested keys that exist in one but not other)
  // For thorough check, iterate all leaf keys
}
echo 'Manual review: open each file pair side by side';
"
```

### 5. Dashboard Visual Check

1. Login as admin → dashboard → verify all stat cards, quick actions, activity feed show Arabic text (no raw keys)
2. Switch to `?locale=en` → verify English labels appear
3. Login as accountant → verify financial cards (Invoiced, Collected, Pending, Overdue show correctly)
4. Login as teacher → verify teaching cards (My Students, Today Schedule, Pending Tasks)

### 6. Inventory/Report Visual Check

1. Navigate to inventory orders → check dropdown options translated
2. Navigate to reports → check all headers and labels

## Expected Outcomes

| Scenario | Expected Result |
|----------|----------------|
| Key existence | Returns translated string, not raw key name |
| Dashboard API | Returns labels without `general.` prefix visible to end user (`__()` resolves the key) |
| Namespace mismatches | `__('grade.cannot_deleted')` resolves properly |
| Dashboard labels | `__('general.invoiced')` returns `الفواتير` / `Invoiced` |
| Tests | DashboardRedesignTest: 16/16 pass |

## Rollback

All changes are to individual PHP files. Revert via git:

```bash
git diff --name-only  # See changed files
git checkout -- lang/ar/ lang/en/ app/Http/Controllers/HomeController.php
```
