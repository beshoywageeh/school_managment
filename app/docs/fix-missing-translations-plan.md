# Fix Missing Translations Plan

## Current State

| Metric | Value |
|--------|-------|
| Translation files | 44 files in `lang/ar/`, 44 in `lang/en/` |
| Total keys in ar | 1,112 |
| Total keys in en | 1,059 → **1,112** ✅ (after fix) |
| Files with missing keys in en/ | 15 → **0** ✅ |
| Typo bugs found | 8+ |
| Broken validation placeholders | ~15 spots → **all fixed** ✅ |
| PascalCase filenames | 8 files (deferred — see note) |
| fallback_locale | `'ar'` → `'en'` ✅ |

## Execution Order

### ✅ Step 1 — Fix `fallback_locale` in `config/app.php`

Changed `'fallback_locale' => 'ar'` to `'fallback_locale' => 'en'` at `config/app.php:108`.

---

### ✅ Step 2 — Add Missing Keys to `en/` Files

All 53 missing keys added across 15 file pairs:

| File | Keys added | Status |
|------|-----------|--------|
| `enums.php` | `jobs`, `std_status`, `gender`, `religion`, `payment_status`, `payment_type`, `inventory_item_type` (nested arrays) | ✅ |
| `Parents.php` | 14 keys (`father-birth-date`, `father-national-id`, `father-learning`, `mother-name`, `mother-phone`, `mother-job`, `mother-national-id`, `mother-birth-date`, `religion`, `muslim`, `christian`, `father-info`, `other-info`, `children_count`) | ✅ |
| `Sidebar.php` | 8 keys (`Clothes_Books`, `daily`, `fast_actions`, `exciption`, `inventory`, `invoice`, `payment`, `exchange`) | ✅ |
| `install.php` | 6 keys (`email`, `db_name`, `db_user`, `db_password`, `db_details`, `first_name`) | ✅ |
| `inventory.php` | 3 keys (`description`, `sales_price_set`, `status`) | ✅ |
| `validation.php` | 3 keys (`email_rules`, `end_with`, `begin_with`) | ✅ |
| `book_sheet.php` | 2 keys (`type`, `category`) | ✅ |
| `employees.php` | 2 keys (`emp_info`, `index`) | ✅ |
| `student.php` | 2 keys (`choose_acadmice`, `validation`) | ✅ |
| `academic_year.php` | 1 key (`year`) | ✅ |
| `auth.php` | 1 key (`email`) | ✅ |
| `class_rooms.php` | 1 key (`student_count`) | ✅ |
| `fees.php` | 1 key (`total`) | ✅ |
| `login.php` | 1 key (`setup`) | ✅ |
| `PaymentParts.php` | 1 key (`total_required`) | ✅ |
| `general.php` | `Pending_Balance` added to en, `unpaid` added to ar | ✅ |

---

### ✅ Step 3 — Fix Validation Placeholders in `ar/validation.php`

Fixed ~20 broken `:attribute`, `:min`, `:max`, `:value` placeholders with colon-spacing issues (e.g., `': السمة'` → `':attribute'`, `'بين: min و: max'` → `'بين :min و :max'`).

Also translated ~20 English-only strings in the Arabic validation file (password rules, `hex_color`, `mac_address`, `ulid`, `prohibited`, `uppercase`, etc.).

Fixed typo: `عندماتكون` → `عندما تكون` in `required_without`.

---

### ✅ Step 4 — Typo Fixes

| Typo | File | Fix | Status |
|------|------|-----|--------|
| `maual` → `manual` | `ar/Recipt_Payments.php`, `en/Recipt_Payments.php`, blade view | Fixed key + reference | ✅ |
| `updated_by` value "Updated At" | `en/general.php` | Changed to "Updated By" | ✅ |

**Not changed** (system values, not just translation typos):
- `exciption` in Sidebar.php — used as enum value in `Payment_Type::EXCEPTION = 'exciption'`
- `manegment`, `TRASPORT_TO/FROM`, `FREEZED`, `payment_recipt`, `wating` in enums.php — actual key names used in code

---

### ⏭️ Step 5 — File Naming Consistency (Skipped)

Renaming 8 PascalCase files to snake_case was deferred because:
- Filenames determine translation namespaces (`Sidebar.*`, `Grades.*`, etc.)
- Renaming would break ALL `__('Sidebar.XXX')` references across the codebase
- This is a separate refactoring task, not a translation fix

---

### ✅ Step 6 — Investigate Bare Keys

The reported `permissions.` and `schedules.` bare keys were **false positives** — they are dynamic key constructions in blade files:
- `trans('permissions.' . $table)` and `trans('permissions.' . $role->name)`
- `trans('schedules.' . $selectedDay)`

No actual bare key bugs exist.

---

### ✅ Step 7 — Final Verification

| Check | Result |
|-------|--------|
| DashboardRedesignTest (16 tests) | ✅ All pass |
| Key parity: ar ↔ en | ✅ All 44 file pairs have matching key sets |
| fallback_locale changed | ✅ `'ar'` → `'en'` |
| Validation placeholders fixed | ✅ |
| Typo fixes applied | ✅ |

**Pre-existing test failures** (38 tests, unrelated to translations):
- `RouteTest` — missing controller method (`ClassesController@create`)
- Model tests — infrastructure/database setup errors
- Auth tests — environment-specific

---

## Summary

| Step | Files touched | Status |
|------|--------------|--------|
| 1. fallback_locale | 1 | ✅ |
| 2. Missing English keys | 15 file pairs | ✅ |
| 3. Validation placeholders | 1 | ✅ |
| 4. Typo fixes | 3 files + 1 blade | ✅ |
| 5. File naming | — | ⏭️ Deferred |
| 6. Bare keys | 0 (false positives) | ✅ |
| 7. Verification | — | ✅ |
