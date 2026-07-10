# Feature Specification: Fix Missing Translation Keys

**Date:** 2026-07-10
**Status:** Draft
**Version:** 1.0

---

## 1. Overview

### 1.1 Summary

The application has ~104 translation keys referenced in PHP/Blade code that don't exist in any translation file (`lang/ar/` or `lang/en/`). When a key is missing, Laravel returns the key name itself (e.g., `general.add` or `Sidebar.ReceiptPayment`) instead of a proper Arabic or English string. This results in raw English key text appearing in the UI, broken dashboard labels, and missing form field labels.

This spec covers adding all missing keys, fixing namespace mismatches between code and translation filenames, and converting plain-text English strings to proper namespaced translations.

### 1.2 Business Value

- **Professional appearance** — No raw key names displayed to users
- **Consistent bilingual support** — Arabic and English translations for every UI string
- **Reduced maintenance debt** — All translation keys exist in both language files, preventing silent fallback bugs
- **Developer confidence** — New features can safely reference translation keys without checking if they exist

### 1.3 Scope

**In scope:**
- Add 57 missing sub-keys across 13 existing translation files (`enums`, `log`, `general`, `auth`, `Sidebar`, `clothes`, `report`, `student`, `promotions`, `jobs`, `Parents`, `employees`, `schedules`)
- Fix 5 namespace mismatches where code uses a different key prefix than the translation filename (`grade` vs `Grades`, `classrooms` vs `class_rooms`, `fee_invoices` vs `fee_invoice`, `receipt` vs `Recipt_Payments`, `FundAccount` vs `fund_account`)
- Convert 16 plain-text English strings in `HomeController.php` to proper namespaced translation keys
- Add all new keys to both `lang/ar/` and `lang/en/`

**Out of scope:**
- File renames (PascalCase → snake_case) — deferred to separate task
- Error page hardcoded bilingual text — retained as-is since it works correctly
- Vendor pagination translations — already handled by Laravel

---

## 2. User Scenarios & Testing

### 2.1 Admin Dashboard Displays Proper Labels

**Scenario:** Fatima (admin) logs in and views the dashboard.

1. Dashboard stat cards show proper Arabic text for all labels (Invoiced, Collected, Pending, Overdue)
2. Quick action buttons show correct labels without raw key text
3. Recent activity feed shows translated descriptions

**Expected outcome:** All dashboard text appears in Arabic (or English if locale is en) with no raw key names visible.

**Testing approach:**
- Log in as admin, visually inspect all stat cards, quick actions, and activity feed
- Verify no raw key names like `general.add` appear in the UI

### 2.2 Form Validation Shows Correct Messages

**Scenario:** Teacher submits a form with invalid data.

1. Validation error messages display in Arabic with properly substituted `:attribute`, `:min`, `:max` placeholders
2. Error messages show the correct field name, not a raw placeholder like `: السمة`

**Expected outcome:** Validation messages are readable Arabic sentences with field names properly inserted.

**Testing approach:**
- Submit forms with empty required fields
- Verify error messages don't contain raw placeholder syntax

### 2.3 Report Pages Load Without Missing Keys

**Scenario:** Accountant navigates to reports section.

1. All column headers, section titles, and action buttons display translated text
2. No raw key names appear in any report view

**Expected outcome:** All report UI elements display properly translated text.

**Testing approach:**
- Navigate to each report page
- Visually verify no raw translation keys are visible

### 2.4 Sidebar Navigation Labels

**Scenario:** Any user views the sidebar.

1. All sidebar section titles display properly translated text
2. Inventory, exceptions, payment items show correct Arabic labels

**Expected outcome:** Sidebar navigation items show correct translations from `Sidebar.php`.

**Testing approach:**
- Navigate through all sidebar sections
- Verify labels like "Receipt Payments", "Main Navigation" appear correctly in both locales

### 2.5 Inventory Enum Labels

**Scenario:** Admin views inventory order forms.

1. Order type dropdown shows proper labels (Inventory, Sales, Gard)
2. Status dropdown shows Paid/Unpaid correctly
3. Transaction type shows In/Out/Adjust

**Expected outcome:** Enum values display properly translated without raw key names.

**Testing approach:**
- Navigate to inventory order create/edit pages
- Verify dropdown options show translated text

---

## 3. Functional Requirements

### FR1: Missing Enum Translations

| ID | Requirement | Verification |
|----|------------|-------------|
| FR1.1 | `enums.inventory_order_status.{paid,unpaid}` exist in `ar/enums.php` and `en/enums.php` | Check translation files contain keys |
| FR1.2 | `enums.inventory_order_type.{inventory,sales,gard}` exist in both locales | Check translation files contain keys |
| FR1.3 | `enums.transaction_type.{in,out,adjust}` exist in both locales | Check translation files contain keys |

### FR2: Missing Log Translations

| ID | Requirement | Verification |
|----|------------|-------------|
| FR2.1 | `log.models.user.status_changed` exists with Arabic and English values | Check translation files |
| FR2.2 | All 4 `log.models.SchoolFee.*` keys exist (created, invoice_added, updated, deleted) | Check translation files |
| FR2.3 | `log.parents.added_action` exists | Check translation files |
| FR2.4 | `log.book_sheets_order.sarf_added` and `log.clothes_order.out_order_added_action` exist | Check translation files |

### FR3: Missing General Translations

| ID | Requirement | Verification |
|----|------------|-------------|
| FR3.1 | All 21 missing `general.*` keys exist in both locale files (see plan for full list) | Check translation files |
| FR3.2 | Keys include: `no_data_found`, `unauthorized_action`, `action_completed`, `ReceiptPayment`, `showing`, `notes`, `add`, `cancel`, `save`, `balance`, `reset`, `more_actions`, `recent_activity`, `revenue`, `skip_to_content`, `unpin`, `pin`, `chart`, `fullscreen`, `settings`, `logout` | Check translation files |

### FR4: Remaining Missing Keys

| ID | Requirement | Verification |
|----|------------|-------------|
| FR4.1 | `auth.session_expired` exists in both locales | Check translation files |
| FR4.2 | `Sidebar.ReceiptPayment` and `Sidebar.main_navigation` exist | Check translation files |
| FR4.3 | `clothes.unpaid` exists | Check translation files |
| FR4.4 | `report.students` exists | Check translation files |
| FR4.5 | `student.validation.required.name` typo (trailing space) is fixed | Inspect `ar/student.php` |
| FR4.6 | `promotions.{old_grade,old_class,new_grade,new_class}` exist | Check translation files |
| FR4.7 | `jobs.name` and `jobs.type` exist | Check translation files |
| FR4.8 | `Parents.Father_phone` (lowercase) and `Parents.Mother_phone` (lowercase) exist | Check translation files |
| FR4.9 | `employees.{date_of_birth,date_of_hiring,email,password}` exist | Check translation files |
| FR4.10 | `schedules.schedules` exists | Check translation files |

### FR5: Namespace Mismatch Resolution

| ID | Requirement | Verification |
|----|------------|-------------|
| FR5.1 | `grade.cannot_deleted` accessible through translation system (add to `Grades.php`) | Delete test or code inspection |
| FR5.2 | `classrooms.name` and `classrooms.grade` accessible (add to `class_rooms.php`) | Code inspection |
| FR5.3 | `fee_invoices.fees`, `fee_invoices.student`, `fee_invoices.fee` accessible (add to `fee_invoice.php`) | Code inspection |
| FR5.4 | `receipt.*` (8 keys) accessible (add to `Recipt_Payments.php`) | Code inspection |
| FR5.5 | `FundAccount.*` (5 keys) accessible (add to `fund_account.php`) | Code inspection |

### FR6: Dashboard Plain-Text → Namespaced Keys

| ID | Requirement | Verification |
|----|------------|-------------|
| FR6.1 | 16 dashboard labels in `HomeController.php` are converted from plain `__('Text')` to `__('general.key')` | Code inspection |
| FR6.2 | Corresponding `general.*` keys exist in both `ar/general.php` and `en/general.php` | Check translation files |
| FR6.3 | Dashboard widget API still returns correct label strings | Run DashboardRedesignTest |

---

## 4. Success Criteria

| Criterion | Type | Target | Verification Method |
|-----------|------|--------|-------------------|
| No raw translation key names visible on dashboard | UX | 0 instances | Visual inspection of all dashboard views |
| No missing key warnings in application log | Correctness | 0 warnings | Check laravel.log after navigating admin/accountant/teacher flows |
| Dashboard widget API returns translated strings for all 3 roles | Correctness | 3/3 roles | DashboardRedesignTest |
| All 104 missing keys added to both locale files | Completeness | 100% | Automated key parity scan |
| Validation error messages show Arabic with proper placeholders | UX | All messages | Visual inspection of 5 validation scenarios |
| Form request validation keys resolve without error | Correctness | All requests | Navigate create/edit forms for Students, Parents, Jobs, Promotions, Employees |

---

## 5. Key Entities

N/A — This feature involves translation file content changes, not data entities.

---

## 6. Dependencies

| Dependency | Impact | Notes |
|-----------|--------|-------|
| Existing translation files in `lang/ar/` and `lang/en/` | Required | All changes add to existing files |
| `config/app.php` `locale` and `fallback_locale` | Should already be `ar` / `en` from previous fix | Verify before implementing |

---

## 7. Assumptions

- `fallback_locale` is already set to `'en'` from the previous translation fix
- All existing translation keys are correct and don't need modification
- The namespace mismatch fixes should add keys to existing files (not rename files)
- Dashboard plain-text conversion should keep the same visible label text — only the key name changes
- The error page bilingual text in `resources/views/errors/` is intentionally hardcoded and should be left as-is
