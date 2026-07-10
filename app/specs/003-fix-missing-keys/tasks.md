# Tasks: Fix Missing Translation Keys

> Generated from spec.md, plan.md, research.md, data-model.md, quickstart.md

## Technical Context

- **Stack**: Laravel 10, PHP 8.5
- **Packages**: laravel/framework v10
- **Component**: `lang/{ar,en}/` translation files + `app/Http/Controllers/HomeController.php`
- **No database changes**, no migrations, no new dependencies

## User Stories

| ID | Description | Priority | FR Ref |
|----|-------------|----------|--------|
| US1 | Admin Dashboard Displays Proper Labels | P1 | FR3, FR6 |
| US2 | Form Validation Shows Correct Messages | P2 | FR4 (keys 4.5, 4.8, 4.9), FR5 (5.1) |
| US3 | Report Pages Load Without Missing Keys | P3 | FR4 (keys 4.4, 4.6, 4.7, 4.9, 4.10), FR5 (5.2–5.5) |
| US4 | Sidebar Navigation Labels | P4 | FR4 (key 4.2) |
| US5 | Inventory Enum Labels | P5 | FR1 |

## Dependency Graph

```
Phase 1 (Foundational)
  ├── T001–T002: Cross-cutting files (log.php, auth.php, clothes.php)
  │
  └──► Phase 2 [US5]: enums.php (FR1)
  └──► Phase 3 [US4]: Sidebar.php (FR4.2)
  └──► Phase 4 [US2]: Validation-related (FR4.5, FR4.8, FR5.1)
  └──► Phase 5 [US3]: Reports & employees (FR4.4, 4.6, 4.7, 4.9, 4.10, FR5.2–5.5)
  └──► Phase 6 [US1]: Dashboard (FR3, FR6)
      │
      └──► Phase 7 (Verification): All stories depend on this
```

---

## Phase 1: Foundational (Cross-Cutting Additions)

> No user story label — these keys serve multiple stories

- [x] T001 [P] Add `models.user.status_changed`, `parents.added_action`, `book_sheets_order.sarf_added`, `clothes_order.out_order_added_action` to `lang/ar/log.php` and `lang/en/log.php`
- [x] T002 [P] Add `session_expired` key to `lang/ar/auth.php` and `lang/en/auth.php`
- [x] T003 [P] Add `unpaid` key to `lang/ar/clothes.php` and `lang/en/clothes.php`

**Verification:** Run `php artisan tinker --execute="echo __('log.parents.added_action');"` and verify returns translated string.

---

## Phase 2: Inventory Enum Labels [US5]

**Story:** Admin views inventory order forms — enum dropdowns show translated labels without raw key names.
**FR1:** Missing Enum Translations

- [x] T004 [P] [US5] Add `inventory_order_status` section (paid, unpaid) to `lang/ar/enums.php` and `lang/en/enums.php`
- [x] T005 [P] [US5] Add `inventory_order_type` section (inventory, sales, gard) to `lang/ar/enums.php` and `lang/en/enums.php`
- [x] T006 [P] [US5] Add `transaction_type` section (in, out, adjust) to `lang/ar/enums.php` and `lang/en/enums.php`

**Independent test:** `php artisan tinker --execute="echo __('enums.inventory_order_status.paid');"` → returns `مدفوع` / `Paid`

---

## Phase 3: Sidebar Navigation Labels [US4]

**Story:** Any user views the sidebar — all section titles display translated text.
**FR4.2:** Sidebar.ReceiptPayment, Sidebar.main_navigation

- [x] T007 [P] [US4] Add `ReceiptPayment` and `main_navigation` keys to `lang/ar/Sidebar.php` and `lang/en/Sidebar.php`

**Independent test:** `php artisan tinker --execute="echo __('Sidebar.ReceiptPayment');"` → returns `إيصالات الدفع` / `Receipt Payments`

---

## Phase 4: Form Validation Messages [US2]

**Story:** Teacher submits form with invalid data — validation messages display in Arabic with proper placeholders.
**FR4.5, FR4.8, FR5.1**

- [x] T008 [P] [US2] Fix typo in `lang/ar/student.php`: rename `validation.require .name` → `validation.required.name` (remove trailing space, add `d`)
- [x] T009 [P] [US2] Add nested `validation.required.name` structure to `lang/en/student.php` (replace flat string with array)
- [x] T010 [P] [US2] Add `Father_phone` and `Mother_phone` (lowercase p) to `lang/ar/Parents.php` and `lang/en/Parents.php`
- [x] T011 [P] [US2] Add `grade.cannot_deleted` nested key to `lang/ar/Grades.php` and `lang/en/Grades.php`

**Independent test:** `php artisan tinker --execute="echo __('student.validation.required.name');"` → `الاسم مطلوب.`

---

## Phase 5: Report & Employee Pages [US3]

**Story:** Accountant navigates to reports — all column headers and action buttons display translated text.
**FR4.4, FR4.6, FR4.7, FR4.9, FR4.10, FR5.2–FR5.5**

- [x] T012 [P] [US3] Add `students` key to `lang/ar/report.php` and `lang/en/report.php`
- [x] T013 [P] [US3] Add `old_grade`, `old_class`, `new_grade`, `new_class` keys to `lang/ar/promotions.php` and `lang/en/promotions.php`
- [x] T014 [P] [US3] Add `name` and `type` keys to `lang/ar/jobs.php` and `lang/en/jobs.php`
- [x] T015 [P] [US3] Add `date_of_birth`, `date_of_hiring`, `email`, `password` keys to `lang/ar/employees.php` and `lang/en/employees.php`
- [x] T016 [P] [US3] Add `schedules` key to `lang/ar/schedules.php` and `lang/en/schedules.php`
- [x] T017 [P] [US3] Add `classrooms.name` and `classrooms.grade` nested keys to `lang/ar/class_rooms.php` and `lang/en/class_rooms.php`
- [x] T018 [P] [US3] Add `fee_invoices.fees`, `fee_invoices.student`, `fee_invoices.fee` nested keys to `lang/ar/fee_invoice.php` and `lang/en/fee_invoice.php`
- [x] T019 [P] [US3] Add `receipt.*` nested section (8 keys: student, invoice, type, amount, date, FundAccount, notes, parts) to `lang/ar/Recipt_Payments.php` and `lang/en/Recipt_Payments.php`
- [x] T020 [P] [US3] Add `FundAccount.*` nested section (5 keys: credit, debit, total_credit, total_debit, grand_total) to `lang/ar/fund_account.php` and `lang/en/fund_account.php`

**Independent test:** `php artisan tinker --execute="echo __('report.students');"` → `الطلاب` / `Students`

---

## Phase 6: Admin Dashboard Labels [US1]

**Story:** Fatima (admin) logs in and views dashboard — stat cards, quick actions, activity feed show proper Arabic text.
**FR3 (21 general keys), FR6 (16 dashboard keys + controller update)**

- [x] T021 [P] [US1] Add 21 missing flat keys (no_data_found, unauthorized_action, action_completed, ReceiptPayment, showing, notes, add, cancel, save, balance, reset, more_actions, recent_activity, revenue, skip_to_content, unpin, pin, chart, fullscreen, settings, logout) to `lang/ar/general.php`
- [x] T022 [P] [US1] Add same 21 missing flat keys to `lang/en/general.php`
- [x] T023 [P] [US1] Add 16 dashboard keys (invoiced, collected, pending, overdue, new_invoice, create_receipt, fee_exceptions, payment_plans, my_students, today_schedule, pending_tasks, my_classes, take_attendance, grade_entry, payment_received, student_created) to `lang/ar/general.php`
- [x] T024 [P] [US1] Add same 16 dashboard keys to `lang/en/general.php`
- [x] T025 [US1] Update `app/Http/Controllers/HomeController.php`: replace 16 plain-text `__('Text')` calls with `__('general.xxx')` (see plan.md Phase C for line-by-line mapping)
- [x] T026 [US1] Update `tests/Feature/DashboardRedesignTest.php`: replace `__('Invoiced')`, `__('Collected')`, `__('Pending')` assertions with `__('general.invoiced')`, `__('general.collected')`, `__('general.pending')`

**Independent test:** `php artisan test --compact --filter=DashboardRedesignTest` — expect 16/16 pass

---

## Phase 7: Verification

- [ ] T027 [P] Run DashboardRedesignTest: `php artisan test --compact --filter=DashboardRedesignTest`
- [ ] T028 [P] Run key parity scan: verify all new keys exist in both `lang/ar/` and `lang/en/` (use quickstart.md scenario 4)
- [ ] T029 [P] Visual check: login as admin → inspect dashboard stat cards, quick actions, activity feed for raw key text
- [ ] T030 [P] Visual check: login as accountant → verify financial card labels (Invoiced, Collected, Pending, Overdue) display correctly
- [ ] T031 [P] Visual check: login as teacher → verify teaching card labels (My Students, Today Schedule, Pending Tasks)
- [ ] T032 [P] Visual check: navigate sidebar sections → verify all labels translated
- [ ] T033 [P] Visual check: navigate inventory order forms → verify enum dropdown options translated
- [ ] T034 [P] Visual check: submit 5 forms with empty required fields (Student, Parent, Job, Promotion, Employee) → verify validation messages show Arabic with proper :attribute placeholders (SC5)
- [ ] T035 [P] Visual check: navigate create/edit forms for Students, Parents, Jobs, Promotions, Employees → verify no raw key names in form labels (SC6)

---

## Parallel Execution Opportunities

| Batch | Tasks | Rationale |
|-------|-------|-----------|
| A | T001, T002, T003 | Different files (log.php, auth.php, clothes.php) |
| B | T004, T005, T006 | Same file but different sections (enums.php) |
| C | T007 | Standalone (Sidebar.php) |
| D | T008, T009, T010, T011 | Different files (student.php, Parents.php, Grades.php) |
| E | T012–T020 | All different files — fully parallel |
| F | T021, T022, T023, T024 | Both locales independently (general.php) |
| G | T025 | Depends on T023–T024 completion |
| H | T026 | Depends on T025 completion |
| I | T027–T035 | All independent checks |

---

## MVP Scope

For a minimal deliverable, implement **Phases 1 + 6 (US1)** only:
- T001–T003 (foundational)
- T021–T026 (dashboard general keys + HomeController + test updates)

This covers the most visible user-facing issue (raw key text on the dashboard). All other phases can be delivered incrementally.

---

## Format Validation

- [x] All tasks use `- [ ]` checkbox prefix
- [x] All tasks have sequential Task IDs (T001–T035)
- [x] Parallel tasks marked with `[P]`
- [x] User story tasks labeled with `[US#]`
- [x] Setup/foundational tasks have no story label
- [x] All tasks include file paths
- [x] Independent test criteria provided per story
- [x] Dependency graph included
- [x] Parallel execution examples provided
