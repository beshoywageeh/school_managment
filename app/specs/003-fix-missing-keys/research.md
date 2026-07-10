# Research: Fix Missing Translation Keys

## Verification of All Translation Files

### Phase A — Missing Sub-Keys (13 file pairs)

| # | File | Status | Notes |
|---|------|--------|-------|
| 1 | `enums.php` | ✅ Both exist | Missing 3 nested sections: `inventory_order_status`, `inventory_order_type`, `transaction_type` |
| 2 | `log.php` | ✅ Both exist | Missing `models.user.status_changed`, plus top-level `parents.added_action`, `book_sheets_order.sarf_added`, `clothes_order.out_order_added_action` |
| 3 | `general.php` | ✅ Both exist | Missing 21 flat keys (no_data_found, unauthorized_action, action_completed, ReceiptPayment, showing, notes, add, cancel, save, balance, reset, more_actions, recent_activity, revenue, skip_to_content, unpin, pin, chart, fullscreen, settings, logout) |
| 4 | `auth.php` | ✅ Both exist | Missing `session_expired` |
| 5 | `Sidebar.php` | ✅ Both exist | Missing `ReceiptPayment`, `main_navigation` |
| 6 | `clothes.php` | ✅ Both exist | Missing `unpaid` |
| 7 | `report.php` | ✅ Both exist | Missing `students` |
| 8 | `student.php` | ✅ Both exist | Typo: `validation.require .name` → should be `validation.required.name` (trailing space + missing `d`) |
| 9 | `promotions.php` | ✅ Both exist | Missing `old_grade`, `old_class`, `new_grade`, `new_class` |
| 10 | `jobs.php` | ✅ Both exist | Missing `name`, `type` |
| 11 | `Parents.php` | ✅ Both exist | Missing lowercase `Father_phone`, `Mother_phone` |
| 12 | `employees.php` | ✅ Both exist | Missing `date_of_birth`, `date_of_hiring`, `email`, `password` |
| 13 | `schedules.php` | ✅ Both exist | Missing `schedules` |

### Phase B — Namespace Mismatches (5 files)

| File | Code uses | Current file keys | Action |
|------|-----------|-------------------|--------|
| `Grades.php` | `grade.cannot_deleted` | `Grades.*` flat keys only | Add nested `grade => ['cannot_deleted' => '...']` |
| `class_rooms.php` | `classrooms.*` | Flat keys, no `classrooms` prefix | Add nested `classrooms => ['name' => '...', 'grade' => '...']` |
| `fee_invoice.php` | `fee_invoices.*` | Flat keys, no `fee_invoices` prefix | Add nested `fee_invoices => ['fees' => '...', 'student' => '...', 'fee' => '...']` |
| `Recipt_Payments.php` | `receipt.*` | Flat keys, no `receipt` prefix | Add nested `receipt => ['student' => '...', 'invoice' => '...', 'type' => '...', 'amount' => '...', 'date' => '...', 'FundAccount' => '...', 'notes' => '...', 'parts' => '...']` |
| `fund_account.php` | `FundAccount.*` | Flat lowercase keys | Add nested `FundAccount => ['credit' => '...', 'debit' => '...', 'total_credit' => '...', 'total_debit' => '...', 'grand_total' => '...']` |

### Phase C — Dashboard Plain-Text

**File:** `app/Http/Controllers/HomeController.php`
- `accountantWidgets()` at line 290-293: uses `__('Invoiced')`, `__('Collected')`, `__('Pending')`, `__('Overdue')`
- `accountantWidgets()` at line 296-299: uses `__('New Invoice')`, `__('Create Receipt')`, `__('Fee Exceptions')`, `__('Payment Plans')`
- `teacherWidgets()` at line 346-348: uses `__('My Students')`, `__('Today Schedule')`, `__('Pending Tasks')`
- `teacherWidgets()` at line 351-353: uses `__('My Classes')`, `__('Take Attendance')`, `__('Grade Entry')`
- `getRecentActivity()` at line 481, 487: uses `__('Payment received')`, `__('Student created')`

**16 plain-text calls total** — all need conversion to `__('general.xxx')` + corresponding new keys in both locale files.

### DashboardRedesignTest

**File:** `tests/Feature/DashboardRedesignTest.php`
- 16 tests, all passing ✓
- Tests will need updated assertions for namespaced keys: `__('Invoiced')` → `__('general.invoiced')`

### Config

- `config/app.php` `fallback_locale` = `'en'` ✓ (already fixed in previous session)
- `config/app.php` `locale` = `'ar'` ✓ (Arabic-first locale)

## Key Decisions

- **Decision:** Add all missing keys to existing files (no file renames)
- **Rationale:** File renames (PascalCase → snake_case) would break existing code references; safer to add nested keys with the namespace prefix the code expects
- **Decision:** Dashboard plain-text → `general.*` namespace (not a new `dashboard.php` file)
- **Rationale:** Matches existing convention where `general.php` holds miscellaneous UI strings
- **Decision:** Error page hardcoded text left as-is
- **Rationale:** Already works correctly, no missing key warnings, scope boundary per spec
