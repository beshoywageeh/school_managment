# Implementation Plan: Fix Missing Translation Keys

## Technical Context

- **Stack**: Laravel 10, PHP 8.5
- **Translation system**: Laravel's `__()` helper with PHP array files in `lang/{ar,en}/`
- **No database changes**: All modifications are to PHP translation array files and one controller
- **Fallback locale**: `en` (already configured)
- **Default locale**: `ar`

All unknowns have been resolved in `research.md`. No `NEEDS CLARIFICATION` markers remain.

## Constitution Check

No `.specify/memory/constitution.md` found — no constitution constraints to evaluate.

## Gate Evaluation

| Gate | Status | Reasoning |
|------|--------|-----------|
| Spec completeness | ✅ PASS | All 6 FR groups are testable, scoped, and bounded |
| Research completeness | ✅ PASS | All 13 file pairs + 5 namespace files + 1 controller verified |
| Dependency readiness | ✅ PASS | All target files exist; no database or external deps |

## Architecture Overview

```
┌─────────────────────────────────────────────────────────┐
│                   Implementation Phases                  │
├─────────────┬──────────────┬──────────────┬─────────────┤
│  Phase A    │   Phase B    │   Phase C    │   Phase D   │
│  Add keys   │  Fix name-   │  Dashboard   │ Verification│
│  (13 files) │  space mis-  │  plain-text  │             │
│             │  matches (5) │  → namespaced│             │
└─────────────┴──────────────┴──────────────┴─────────────┘
        │              │              │              │
        └──────┬───────┘              │              │
               │                      │              │
          Sequential                  │              │
          (Phase A → B → C → D)       │              │
```

### Phase A — Add Missing Keys

**Task A1: enums.php** — Add 3 nested sections (both ar + en)

| Section | Keys |
|---------|------|
| `inventory_order_status` | `paid`, `unpaid` |
| `inventory_order_type` | `inventory`, `sales`, `gard` |
| `transaction_type` | `in`, `out`, `adjust` |

**Task A2: log.php** — Add 4 missing keys (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `models.user.status_changed` | تم تغيير حالة المستخدم | User status changed |
| `parents.added_action` | تم إضافة ولي أمر | Parent added |
| `book_sheets_order.sarf_added` | تم إضافة صرف كتب | Book sheet order added |
| `clothes_order.out_order_added_action` | تم إضافة أمر صرف ملابس | Clothes order added |

**Task A3: general.php** — Add 21 missing flat keys (both ar + en)

- `no_data_found`, `unauthorized_action`, `action_completed`, `ReceiptPayment`, `showing`, `notes`, `add`, `cancel`, `save`, `balance`, `reset`, `more_actions`, `recent_activity`, `revenue`, `skip_to_content`, `unpin`, `pin`, `chart`, `fullscreen`, `settings`, `logout`

**Task A4: auth.php** — Add 1 key (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `session_expired` | انتهت الجلسة | Session expired |

**Task A5: Sidebar.php** — Add 2 keys (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `ReceiptPayment` | إيصالات الدفع | Receipt Payments |
| `main_navigation` | القائمة الرئيسية | Main Navigation |

**Task A6: clothes.php** — Add 1 key (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `unpaid` | غير مدفوع | Unpaid |

**Task A7: report.php** — Add 1 key (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `students` | الطلاب | Students |

**Task A8: student.php** — Fix typo (both ar + en)

**`lang/ar/student.php:63`** — rename key `'require '` → `'required'` (remove trailing space, add 'd'):
```php
'validation' => [
    'required' => [
        'name' => 'الاسم مطلوب.',
        'birth_date' => 'تاريخ الميلاد مطلوب.',
        'parent_id' => 'ولي الأمر مطلوب.',
        'national_id' => 'رقم الهوية الوطنية مطلوب.',
        'grade_id' => 'المرحلة مطلوبة.',
        'classroom_id' => 'الفصل مطلوب.',
    ],
    'unique' => [
        'national_id' => 'رقم الهوية الوطنية مسجل يالفعل.',
    ],
],
```

**`lang/en/student.php:62`** — change flat string to nested array:
```php
'validation' => [
    'required' => [
        'name' => 'The name field is required.',
        'birth_date' => 'The birth date field is required.',
        'parent_id' => 'The parent field is required.',
        'national_id' => 'The national ID field is required.',
        'grade_id' => 'The grade field is required.',
        'classroom_id' => 'The classroom field is required.',
    ],
    'unique' => [
        'national_id' => 'The national ID has already been taken.',
    ],
],
```

**Task A9: promotions.php** — Add 4 keys (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `old_grade` | المرحلة القديمة | Old Grade |
| `old_class` | الفصل القديم | Old Class |
| `new_grade` | المرحلة الجديدة | New Grade |
| `new_class` | الفصل الجديد | New Class |

**Task A10: jobs.php** — Add 2 keys (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `name` | اسم الوظيفة | Job Name |
| `type` | نوع الوظيفة | Job Type |

**Task A11: Parents.php** — Add 2 keys (both ar + en, lowercase variants)

| Key | ar value | en value |
|-----|----------|----------|
| `Father_phone` | هاتف الأب | Father Phone |
| `Mother_phone` | هاتف الأم | Mother Phone |

**Task A12: employees.php** — Add 4 keys (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `date_of_birth` | تاريخ الميلاد | Date of Birth |
| `date_of_hiring` | تاريخ التعيين | Date of Hiring |
| `email` | البريد الإلكتروني | Email |
| `password` | كلمة المرور | Password |

**Task A13: schedules.php** — Add 1 key (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `schedules` | الجداول | Schedules |

### Phase B — Fix Namespace Mismatches

**Task B1: Grades.php** — Add nested `grade` section (values per locale)

**`lang/ar/Grades.php`:**
```php
'grade' => [
    'cannot_deleted' => 'لا يمكن حذف مرحلة بها صفوف دراسية',
]
```

**`lang/en/Grades.php`:**
```php
'grade' => [
    'cannot_deleted' => 'Cannot delete a grade with classrooms',
]
```

**Task B2: class_rooms.php** — Add nested `classrooms` section (values per locale)

**`lang/ar/class_rooms.php`:**
```php
'classrooms' => [
    'name' => 'اسم الصف',
    'grade' => 'المرحلة',
]
```

**`lang/en/class_rooms.php`:**
```php
'classrooms' => [
    'name' => 'Classroom Name',
    'grade' => 'Grade',
]
```

**Task B3: fee_invoice.php** — Add nested `fee_invoices` section (values per locale)

**`lang/ar/fee_invoice.php`:**
```php
'fee_invoices' => [
    'fees' => 'الرسوم',
    'student' => 'الطالب',
    'fee' => 'الرسوم',
]
```

**`lang/en/fee_invoice.php`:**
```php
'fee_invoices' => [
    'fees' => 'Fees',
    'student' => 'Student',
    'fee' => 'Fee',
]
```

**Task B4: Recipt_Payments.php** — Add nested `receipt` section (8 keys, values per locale)

**`lang/ar/Recipt_Payments.php`:**
```php
'receipt' => [
    'student' => 'الطالب',
    'invoice' => 'الفاتورة',
    'type' => 'النوع',
    'amount' => 'القيمة',
    'date' => 'التاريخ',
    'FundAccount' => 'الخزنة',
    'notes' => 'ملاحظات',
    'parts' => 'الأقساط',
]
```

**`lang/en/Recipt_Payments.php`:**
```php
'receipt' => [
    'student' => 'Student',
    'invoice' => 'Invoice',
    'type' => 'Type',
    'amount' => 'Amount',
    'date' => 'Date',
    'FundAccount' => 'Fund Account',
    'notes' => 'Notes',
    'parts' => 'Parts',
]
```

**Task B5: fund_account.php** — Add nested `FundAccount` section (5 keys, values per locale)

**`lang/ar/fund_account.php`:**
```php
'FundAccount' => [
    'credit' => 'دائن',
    'debit' => 'مدين',
    'total_credit' => 'إجمالي الدائن',
    'total_debit' => 'إجمالي المدين',
    'grand_total' => 'الإجمالي',
]
```

**`lang/en/fund_account.php`:**
```php
'FundAccount' => [
    'credit' => 'Credit',
    'debit' => 'Debit',
    'total_credit' => 'Total Credit',
    'total_debit' => 'Total Debit',
    'grand_total' => 'Grand Total',
]
```

### Phase C — Dashboard Plain-Text → Namespaced Keys

**Task C1: general.php** — Add 16 dashboard keys (both ar + en)

| Key | ar value | en value |
|-----|----------|----------|
| `invoiced` | الفواتير | Invoiced |
| `collected` | المحصل | Collected |
| `pending` | معلق | Pending |
| `overdue` | متأخر | Overdue |
| `new_invoice` | فاتورة جديدة | New Invoice |
| `create_receipt` | إنشاء إيصال | Create Receipt |
| `fee_exceptions` | الإعفاءات | Fee Exceptions |
| `payment_plans` | خطط الدفع | Payment Plans |
| `my_students` | طلابي | My Students |
| `today_schedule` | جدول اليوم | Today Schedule |
| `pending_tasks` | المهام المعلقة | Pending Tasks |
| `my_classes` | فصولي | My Classes |
| `take_attendance` | تسجيل الحضور | Take Attendance |
| `grade_entry` | إدخال الدرجات | Grade Entry |
| `payment_received` | تم استلام الدفعة | Payment received |
| `student_created` | تم إنشاء الطالب | Student created |

**Task C2: HomeController.php** — Update 16 `__()` calls

| Line(s) | Current | New |
|---------|---------|-----|
| 284, 487 | `__('Payment received')` | `__('general.payment_received')` |
| 290 | `__('Invoiced')` | `__('general.invoiced')` |
| 291 | `__('Collected')` | `__('general.collected')` |
| 292 | `__('Pending')` | `__('general.pending')` |
| 293 | `__('Overdue')` | `__('general.overdue')` |
| 296 | `__('New Invoice')` | `__('general.new_invoice')` |
| 297 | `__('Create Receipt')` | `__('general.create_receipt')` |
| 298 | `__('Fee Exceptions')` | `__('general.fee_exceptions')` |
| 299 | `__('Payment Plans')` | `__('general.payment_plans')` |
| 346 | `__('My Students')` | `__('general.my_students')` |
| 347 | `__('Today Schedule')` | `__('general.today_schedule')` |
| 348 | `__('Pending Tasks')` | `__('general.pending_tasks')` |
| 351 | `__('My Classes')` | `__('general.my_classes')` |
| 352 | `__('Take Attendance')` | `__('general.take_attendance')` |
| 353 | `__('Grade Entry')` | `__('general.grade_entry')` |
| 481 | `__('Student created')` | `__('general.student_created')` |

### Phase D — Verification

**Task D1:** Run DashboardRedesignTest — `php artisan test --compact --filter=DashboardRedesignTest`
**Task D2:** Key parity scan — verify all new keys exist in both ar and en
**Task D3:** Visual check — navigate dashboard, reports, forms for any raw key text

## Dependencies & Technical Constraints

- All tasks touch flat translation files; no DB schema, migrations, or environment config
- Arrow key order in lang files should be alphabetical for cleanliness but not functionally required
- `DashboardRedesignTest` checks for `__('Invoiced')` etc. — will need assertions updated after Phase C (the test checks literal `__()` output which changes from `'Invoiced'` to `'general.invoiced'`)
- No naming conventions beyond existing PHP array syntax
