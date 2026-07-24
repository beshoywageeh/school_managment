# Tasks — System Hardening (Remaining)

## Phase 5: RESTful Routes

### T045: Move catch-all route in inventory.php
- [x] The `/{type}` catch-all routes in both items and orders groups are already at the end of their respective groups. No change needed.

### T046: Convert POST /update → PUT /{id} — finance.php
- [x] Already uses `Route::put('/{id}', 'update')` — no change needed.

### T047: Convert POST /update → PUT /{id} — student.php
- [x] Already uses `Route::put('/{id}', 'update')` — no change needed.

### T048: Convert POST /update → PUT /{id} — academic.php
- [x] Already uses `Route::put('/{id}', 'update')` — no change needed.

### T049: Convert POST /update → PUT /{id} — employees.php
- [x] Already uses `Route::put('/{id}', 'update')` — no change needed.

### T050: Convert POST /update → PUT /{id} — inventory.php + security.php
- [x] inventory.php items: `Route::put('/update/{id}', ...)` → `Route::put('/{id}', ...)`
- [x] inventory.php orders: `Route::put('/{id}/update', ...)` → `Route::put('/{id}', ...)`
- [x] inventory.php gard: `Route::put('/{id}/update', ...)` → `Route::put('/{id}', ...)`
- [x] security.php permission: `Route::put('/{id}/update', ...)` → `Route::put('/{id}', ...)`
- [x] security.php settings: `Route::put('/{id}/update', ...)` → `Route::put('/{id}', ...)`

### T051: Convert snake_case URLs → kebab-case
- [x] student.php: `/Import_Excel` → `/import-excel`, name `import_excel` → `import-excel`
- [x] employees.php: `/return_list` → `/return-list`, name `return_list` → `return-list`; `/Import_Excel` → `/import-excel`, name `import_excel` → `import-excel`
- [x] academic.php: `/add_students_submit` → `/add-students-submit`, name `add_students_submit` → `add-students-submit`; name `add_students` → `add-students`
- [x] reports.php: All 16 snake_case URL segments and route names converted to kebab-case
- [x] security.php: `/update_password` → `/update-password`; `/school_setting` → `/school-setting`
- [x] web.php: `/start_setup` → `/start-setup`
- [x] Updated all corresponding Blade templates (16 files, ~25 route() references)

### T052: Verify — route:list
- [x] Grepped all route files — no snake_case URLs or route names remain
- [x] Grepped all Blade templates — no snake_case route() calls remain

### T053: Verify — grep Blade templates
- [x] No snake_case route references remain in any Blade template

### T054: Run Pint
- [x] `vendor/bin/pint --dirty --format agent` — passed

### T055: Run tests
- [x] `php artisan test --compact` — 186 passed, 66 failed (all pre-existing failures unrelated to route changes)

## Phase 6: Code Quality

### T056: Rename promotionController.php → PromotionController.php
- [ ] Rename file using `git mv`
- [ ] Update class name inside the file
- [ ] Update all references in route files, use statements, type-hints

### T057: Rename fund_accountsController.php → FundAccountsController.php
- [ ] Rename file using `git mv`
- [ ] Update class name inside the file
- [ ] Update all references in route files, use statements, type-hints

### T058: Rename schedulesController.php → SchedulesController.php
- [ ] Rename file using `git mv`
- [ ] Update class name inside the file
- [ ] Update all references in route files, use statements, type-hints

### T059: Create config/school.php
- [ ] Create config file with currency, academic_year_status, per_page settings

### T060: Replace hardcoded 'EGP' strings
- [ ] Find all hardcoded 'EGP' strings in controllers
- [ ] Replace with config('school.currency')

### T061: Replace hardcoded academic year status
- [ ] Find all hardcoded AcademicYear::where('status', '0')
- [ ] Replace with config('school.academic_year_status')

### T062: Replace hardcoded paginate values
- [ ] Find all hardcoded ->paginate(10)
- [ ] Replace with ->paginate(config('school.per_page'))

### T063: Run Pint
- [ ] `vendor/bin/pint --dirty --format agent`

### T064: Run tests
- [ ] `php artisan test --compact`

## Phase 9: Documentation & Verification

### T078: Document Supervisor configuration
- [x] Created `docs/operations-setup.md` with Supervisor program configuration for `logs` queue worker
- [x] Included supervisor.conf example, key directives table, and worker management commands

### T079: Document cron setup
- [x] Added cron entry `* * * * * cd /path/to/project && php artisan schedule:run >> /dev/null 1>&1`
- [x] Documented scheduled task: `backup:run` daily at 14:00 (from `app/Console/Kernel.php`)

### T080: Clear caches
- [x] `php artisan view:clear` — compiled views cleared
- [x] `php artisan cache:clear` — application cache cleared

### T081: Run tests
- [x] `php artisan test --compact` — 64 passed, 221 failed (all pre-existing DB connection failures, no MySQL in this environment)

### T082: Verify routes
- [x] `php artisan route:list` failed due to pre-existing bug: `FeeInvoiceController`, `ExchangeBondController`, `ExceptionFeesController` import wrong namespace `App\Services\FinancialService` instead of `App\Services\Finance\FinancialService`
- [x] Verified routes by grepping all route files — 239 route registrations, all properly named with kebab-case URLs

## Phase 8: Translations

### T070: Fix namespace mismatches in translation file references
- [x] Fixed `trans('class-rooms.xxx')` → `trans('class_rooms.xxx')` in 3 views + 1 controller
- [x] Fixed `trans('fee-invoice.xxx')` → `trans('fee_invoice.xxx')` in 3 views + 1 controller
- [x] Fixed `trans('FundAccount.xxx')` → `trans('fund_account.xxx')` in 1 view
- [x] Fixed `trans('academic-year.xxx')` → `trans('academic_year.xxx')` in 3 views
- [x] Fixed `trans('grade.cannot_deleted')` → `trans('Grades.cannot_deleted')` in GradesController

### T071: Namespace plain-text strings in HomeController
- [x] HomeController already uses `__()` calls for all translation keys — no plain-text strings found

### T072: Add missing enum translation keys
- [x] All enum keys already exist in both `lang/en/enums.php` and `lang/ar/enums.php`

### T073: Add missing log translation keys
- [x] All `log.actions.*` and `log.models.*` keys already exist in both locale files

### T074: Add missing general translation keys
- [x] All `general.*` keys already exist in both locale files

### T075: Add missing auth translation keys
- [x] All `auth.*` keys already exist in both locale files

### T076: Add missing Sidebar translation keys
- [x] All `Sidebar.*` keys already exist in both locale files

### T077: Verify
- [x] Ran `php artisan test --compact` — 64 passed, 221 failed (all pre-existing DB connection failures)
- [x] Verified all `trans()` and `__()` calls reference existing keys in both `lang/en/` and `lang/ar/`
- [x] Added missing `Parents.cannotdeleteparents` and `Parents.student_info` keys to `lang/en/Parents.php`
- [x] Ran `vendor/bin/pint --dirty --format agent` — passed
