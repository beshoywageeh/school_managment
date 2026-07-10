# Fix All Missing Translation Keys Plan

## Problem

Translation keys used in PHP/Blade code that don't exist in any translation file silently fall back to the key name itself, showing raw English text like `general.add` or `Sidebar.ReceiptPayment` in the UI instead of a proper translation.

Three categories of missing keys were found:

| Category | Count | Root Cause |
|----------|-------|------------|
| A — Namespace mismatch | 5 namespaces | Code uses different casing/plurality than the translation filename (`grade` vs `Grades`) |
| B — Keys missing from files | ~57 keys | Code references keys that don't exist in either `ar/` or `en/` translation arrays |
| C — Plain-text keys | ~47 keys | `__('Some Text')` calls without a namespace |

---

## Category A: Namespace Mismatch

The code uses a translation namespace that doesn't match any filename in `lang/{ar,en}/`. Fix by adding the proper key/value to the CORRECT existing file, or — if the namespace doesn't exist — creating it.

| Namespace used in code | Translation file that SHOULD contain it | Keys | Fix action |
|------------------------|----------------------------------------|------|------------|
| `grade.*` | `lang/*/Grades.php` → but uses `Grades` namespace, not `grade` | `grade.cannot_deleted` | Add `cannot_deleted` key to `Grades.php` (both ar/en) AND change code to use `Grades.cannot_deleted` or add a `grade` entry |
| `classrooms.*` | `lang/*/class_rooms.php` | `classrooms.name`, `classrooms.grade` | Code uses `classrooms` but file uses `class_rooms` namespace. Add aliases or change code |
| `fee_invoices.*` | `lang/*/fee_invoice.php` | `fee_invoices.fees`, `fee_invoices.student`, `fee_invoices.fee` | Add `fees`, `student`, `fee` keys under `fee_invoices` namespace or change code to use `fee_invoice.*` |
| `receipt.*` | `lang/*/Recipt_Payments.php` (typo: `Recipt`) | `receipt.student`, `receipt.invoice`, `receipt.type`, `receipt.amount`, `receipt.date`, `receipt.FundAccount`, `receipt.notes`, `receipt.parts` | Add these keys to `Recipt_Payments.php` under a `receipt` key, or change code references |
| `FundAccount.*` | `lang/*/fund_account.php` | `FundAccount.credit`, `FundAccount.debit`, `FundAccount.total_credit`, `FundAccount.total_debit`, `FundAccount.grand_total` | Add these keys to `fund_account.php` |

### Recommended approach for A

For each mismatch, **add the missing keys to the existing file** (using the namespace as the file name). This is safer than changing all code references. For example, add `grade` → `cannot_deleted` inside `Grades.php`.

---

## Category B: Keys Missing from Translation Files

These 57 keys reference existing namespaces but the specific sub-key doesn't exist in the translation array.

### B1: `enums.php` — Add 3 new nested sections

```php
// In both ar/enums.php and en/enums.php, add:
'inventory_order_status' => [
    'paid' => 'Paid / مدفوع',
    'unpaid' => 'Unpaid / غير مدفوع',
],
'inventory_order_type' => [
    'inventory' => 'Inventory / مخزون',
    'sales' => 'Sales / مبيعات',
    'gard' => 'Gard / جرد',
],
'transaction_type' => [
    'in' => 'In / وارد',
    'out' => 'Out / منصرف',
    'adjust' => 'Adjust / تسوية',
],
```

**Used in:** `app/Services/Inventory/InventoryService.php`, inventory Livewire components

### B2: `log.php` — Add 8 missing keys

| Key | Arabic | English | Source |
|-----|--------|---------|--------|
| `log.models.user.status_changed` | تم تغيير حالة المستخدم | User status changed | `AdminEraController.php:36` |
| `log.models.SchoolFee.created` | تم إنشاء الرسوم الدراسية | School fee created | `SchoolFeeController.php:80` |
| `log.models.SchoolFee.invoice_added` | تم إضافة فاتورة للرسوم | Invoice added to school fee | `SchoolFeeController.php:101` |
| `log.models.SchoolFee.updated` | تم تحديث الرسوم الدراسية | School fee updated | `SchoolFeeController.php:158` |
| `log.models.SchoolFee.deleted` | تم حذف الرسوم الدراسية | School fee deleted | `SchoolFeeController.php:185` |
| `log.parents.added_action` | تم إضافة ولي أمر | Parent added | `FinancialService.php:164` |
| `log.book_sheets_order.sarf_added` | تم إضافة صرف كتب | Book sheet order added | `FinancialService.php:165` |
| `log.clothes_order.out_order_added_action` | تم إضافة أمر صرف ملابس | Clothes order added | `FinancialService.php:223-224` |

### B3: `general.php` — Add 16 missing keys

| Key | Arabic | English |
|-----|--------|---------|
| `general.no_data_found` | لا توجد بيانات | No data found |
| `general.unauthorized_action` | إجراء غير مصرح به | Unauthorized action |
| `general.action_completed` | تمت العملية بنجاح | Action completed |
| `general.ReceiptPayment` | إيصال دفع | Receipt Payment |
| `general.showing` | عرض | Showing |
| `general.notes` | ملاحظات | Notes |
| `general.add` | إضافة | Add |
| `general.cancel` | إلغاء | Cancel |
| `general.save` | حفظ | Save |
| `general.balance` | الرصيد | Balance |
| `general.reset` | إعادة تعيين | Reset |
| `general.more_actions` | المزيد من الإجراءات | More actions |
| `general.recent_activity` | النشاط الأخير | Recent Activity |
| `general.revenue` | الإيرادات | Revenue |
| `general.skip_to_content` | تخطى إلى المحتوى | Skip to content |
| `general.unpin` | إلغاء التثبيت | Unpin |
| `general.pin` | تثبيت | Pin |
| `general.chart` | رسم بياني | Chart |
| `general.fullscreen` | ملء الشاشة | Fullscreen |
| `general.settings` | الإعدادات | Settings |
| `general.logout` | تسجيل الخروج | Logout |

### B4: `auth.php` — Add 1 key

| Key | Arabic | English |
|-----|--------|---------|
| `auth.session_expired` | انتهت الجلسة | Session expired |

### B5: `Sidebar.php` — Add 2 keys

| Key | Arabic | English |
|-----|--------|---------|
| `Sidebar.ReceiptPayment` | إيصالات الدفع | Receipt Payments |
| `Sidebar.main_navigation` | القائمة الرئيسية | Main Navigation |

### B6: `clothes.php` — Add 1 key

| Key | Arabic | English |
|-----|--------|---------|
| `clothes.unpaid` | غير مدفوع | Unpaid |

### B7: `report.php` — Add 1 key

| Key | Arabic | English |
|-----|--------|---------|
| `report.students` | الطلاب | Students |

### B8: `student.php` — Fix 1 typo

The code uses `student.validation.required.name` but the file has a key `validation.require .name` (trailing space). Fix the trailing space in the file and add the dotted key properly.

### B9: `promotions.php` — Add 4 keys

The code uses `old_grade`, `old_class`, `new_grade`, `new_class` but the file only has `old`, `new`, `from_gradename`, `from_classroom`, etc.

| Key | Arabic | English |
|-----|--------|---------|
| `promotions.old_grade` | المرحلة القديمة | Old Grade |
| `promotions.old_class` | الفصل القديم | Old Class |
| `promotions.new_grade` | المرحلة الجديدة | New Grade |
| `promotions.new_class` | الفصل الجديد | New Class |

### B10: `jobs.php` — Add 2 keys

| Key | Arabic | English |
|-----|--------|---------|
| `jobs.name` | اسم الوظيفة | Job Name |
| `jobs.type` | نوع الوظيفة | Job Type |

### B11: `Parents.php` — Add 2 keys (casing fix)

The code uses `Father_phone` (lowercase p) but the file has `Father_Phone` (uppercase P). Same for `Mother_phone`. Add lowercase versions.

| Key | Arabic | English |
|-----|--------|---------|
| `Parents.Father_phone` | هاتف الأب | Father Phone |
| `Parents.Mother_phone` | هاتف الأم | Mother Phone |

### B12: `employees.php` — Add 4 keys

| Key | Arabic | English |
|-----|--------|---------|
| `employees.date_of_birth` | تاريخ الميلاد | Date of Birth |
| `employees.date_of_hiring` | تاريخ التعيين | Date of Hiring |
| `employees.email` | البريد الإلكتروني | Email |
| `employees.password` | كلمة المرور | Password |

### B13: `schedules.php` — Add 1 key

| Key | Arabic | English |
|-----|--------|---------|
| `schedules.schedules` | الجداول | Schedules |

---

## Category C: Plain-Text Keys

These are `__('English Text')` calls with no namespace. Laravel treats them as keys verbatim.

### C1: Dashboard labels in `HomeController.php` (16)

These should be converted to proper namespaced keys:

| Current plain-text | Suggested namespace key |
|-------------------|----------------------|
| `__('Invoiced')` | `general.invoiced` |
| `__('Collected')` | `general.collected` |
| `__('Pending')` | `general.pending` |
| `__('Overdue')` | `general.overdue` |
| `__('New Invoice')` | `general.new_invoice` |
| `__('Create Receipt')` | `general.create_receipt` |
| `__('Fee Exceptions')` | `general.fee_exceptions` |
| `__('Payment Plans')` | `general.payment_plans` |
| `__('My Students')` | `general.my_students` |
| `__('Today Schedule')` | `general.today_schedule` |
| `__('Pending Tasks')` | `general.pending_tasks` |
| `__('My Classes')` | `general.my_classes` |
| `__('Take Attendance')` | `general.take_attendance` |
| `__('Grade Entry')` | `general.grade_entry` |
| `__('Payment received')` | `general.payment_received` |
| `__('Student created')` | `general.student_created` |

### C2: Error page text (30 keys)

These are in `resources/views/errors/*.blade.php`. They're a mix of Arabic and English hardcoded strings. They work as-is because the text itself IS the translation. But for consistency, they should be moved to a proper translation file (e.g., `errors.php`).

### C3: Vendor pagination

`__('Go to page :page')` — Already covered by `pagination.php` in Laravel vendor. This is fine as-is.

---

## Execution Order

### Phase 1: Add missing keys to existing translation files

1. `enums.php` — 3 new nested sections (inventory_order_status, inventory_order_type, transaction_type)
2. `log.php` — 8 missing keys (SchoolFee, user status, parents, orders)
3. `general.php` — 21 missing keys (showing, cancel, save, balance, chart, etc.)
4. `auth.php` — session_expired
5. `Sidebar.php` — ReceiptPayment, main_navigation
6. `clothes.php` — unpaid
7. `report.php` — students
8. `student.php` — fix typo in validation key
9. `promotions.php` — old_grade, old_class, new_grade, new_class
10. `jobs.php` — name, type
11. `Parents.php` — Father_phone, Mother_phone (lowercase)
12. `employees.php` — date_of_birth, date_of_hiring, email, password
13. `schedules.php` — schedules

**For each key, add BOTH Arabic (`lang/ar/`) and English (`lang/en/`) translations.**

### Phase 2: Fix namespace mismatches (Category A)

For each of the 5 mismatched namespaces, add the missing keys to the CORRECT existing file (don't rename files — that would break existing references).

- `Grades.php` — already has `Grades.*` keys; add `grade.cannot_deleted` as a dotted key
- `class_rooms.php` — add `classrooms.name` and `classrooms.grade`
- `fee_invoice.php` — add `fee_invoices.fees`, `fee_invoices.student`, `fee_invoices.fee`
- `Recipt_Payments.php` — add `receipt.*` nested array
- `fund_account.php` — add `FundAccount.*` flat keys

### Phase 3: Convert dashboard plain-text keys (Category C1)

1. Add all 16 dashboard keys to `general.php` (both ar/en)
2. Update `HomeController.php` `widgets()` and `accountantWidgets()` methods to use namespaced keys

### Phase 4: Verification

1. Run `php artisan test --compact --filter=DashboardRedesignTest`
2. Run a script to verify no `__()` call references a missing key
3. Visual check of dashboard, reports, and admin pages

---

## Effort Estimate

| Phase | Files touched | Effort |
|-------|--------------|--------|
| 1. Add missing keys (57 keys) | 13 file pairs | 45 min |
| 2. Fix namespace mismatches (5) | 5 file pairs | 20 min |
| 3. Dashboard plain-text → namespaced | 2 files | 15 min |
| 4. Verification | — | 10 min |
| **Total** | | **~1.5 hours** |
