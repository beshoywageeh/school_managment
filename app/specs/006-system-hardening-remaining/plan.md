# Implementation Plan: System Hardening — Remaining Tasks

**Branch**: `006-system-hardening-remaining` | **Date**: 2026-07-23 | **Spec**: [spec.md](spec.md)
**Input**: Feature specification from `specs/006-system-hardening-remaining/spec.md`

## Summary

Complete the remaining ~40 hardening tasks for the iSchool Management System: register missing policy, add authorization checks to ClassesController, remove deprecated trait from all 8 policies, create 14 Form Requests for 7 controllers, standardize routes (PUT/DELETE, kebab-case), fix 8 code quality issues (naming, config values, booleans), add ~50 translation keys, write tests for 4 controllers and 8 policies, and perform manual UI verification.

## Technical Context

**Language/Version**: PHP 8.5.0
**Primary Dependencies**: Laravel 10, Livewire 4, Tailwind CSS 4, Alpine.js, Spatie Permission v3, Sanctum v3
**Storage**: MySQL/SQLite (testing uses SQLite in-memory)
**Testing**: PHPUnit 10 with RefreshDatabase trait, factories for all major models
**Target Platform**: Linux server (web application)
**Project Type**: Web application (server-rendered Blade + Livewire)
**Performance Goals**: Page load <3s, DataTable <5s, JS bundle <200KB gzipped
**Constraints**: Arabic RTL layout must be maintained, Laravel 10 conventions (no `casts()` method), existing permission naming `{entity}-{action}`
**Scale/Scope**: ~40 tasks across 10 categories, ~25-30 hours estimated

## Constitution Check

*No constitution file exists. Skipping gate evaluation.*

## Project Structure

### Documentation (this feature)

```text
specs/006-system-hardening-remaining/
├── plan.md              # This file
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── checklists/
│   └── requirements.md  # Spec quality checklist
└── tasks.md             # Phase 2 output (/speckit.tasks)
```

### Source Code (repository root)

```text
app/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PromotionController.php          # renamed from promotionController
│   │   │   ├── FundAccountsController.php       # renamed from fund_accountsController
│   │   │   ├── SchedulesController.php          # renamed from schedulesController
│   │   │   ├── ClassesController.php            # add authorize() calls
│   │   │   └── ... (existing controllers)
│   │   └── Requests/
│   │       ├── ClassRoomStoreRequest.php        # new
│   │       ├── ClassRoomUpdateRequest.php       # new
│   │       ├── ClassStoreRequest.php            # new
│   │       ├── ClassUpdateRequest.php           # new
│   │       ├── ReceiptPaymentStoreRequest.php   # new
│   │       ├── ReceiptPaymentUpdateRequest.php  # new
│   │       ├── ExceptionFeeStoreRequest.php     # new
│   │       ├── ExceptionFeeUpdateRequest.php    # new
│   │       ├── UserStoreRequest.php             # new
│   │       ├── UserUpdateRequest.php            # new
│   │       ├── RoleStoreRequest.php             # new
│   │       ├── RoleUpdateRequest.php            # new
│   │       ├── JobStoreRequest.php              # new
│   │       └── JobUpdateRequest.php             # new
│   ├── Policies/
│   │   ├── StudentPolicy.php                    # remove HandlesAuthorization
│   │   ├── FeeInvoicePolicy.php                 # remove HandlesAuthorization
│   │   ├── UserPolicy.php                       # remove HandlesAuthorization
│   │   ├── InventoryItemPolicy.php              # remove HandlesAuthorization
│   │   ├── InventoryOrderPolicy.php             # remove HandlesAuthorization
│   │   ├── GradePolicy.php                      # remove HandlesAuthorization
│   │   ├── ClassPolicy.php                      # remove HandlesAuthorization
│   │   └── EmployeePolicy.php                   # remove HandlesAuthorization
│   └── Providers/
│       └── AuthServiceProvider.php              # register EmployeePolicy
├── config/
│   └── school.php                               # new: currency, academic_year_status, per_page
├── routes/
│   ├── inventory.php                            # reorder catch-all
│   ├── finance.php                              # POST→PUT conversions
│   ├── student.php                              # POST→PUT conversions
│   ├── academic.php                             # POST→PUT conversions
│   ├── employees.php                            # POST→PUT conversions
│   └── ... (other route files)
├── lang/
│   ├── en/ (updated translation keys)
│   └── ar/ (updated translation keys)
├── resources/views/ (Blade forms updated with @method directives)
├── tests/Feature/
│   ├── ReceiptPaymentControllerTest.php         # new
│   ├── ExchangeBondControllerTest.php           # new
│   ├── ExceptionFeesControllerTest.php          # new
│   ├── PaymentPartsControllerTest.php           # new
│   └── PolicyTest.php                           # new
└── phpunit.xml (existing — SQLite in-memory configured)
```

**Structure Decision**: Follow existing Laravel 10 project structure. No new directories needed — new files go into existing directories (`app/Http/Requests/`, `app/Policies/`, `tests/Feature/`, `config/`, `lang/`).

## Complexity Tracking

*No constitution violations to justify.*

## Implementation Phases

### Phase 1: Security (Highest Priority)
**Tasks**: T047, T048, T059
**Estimated time**: ~1 hour
**Dependencies**: None

1. Register `EmployeePolicy` in `AuthServiceProvider::$policies`
2. Add `$this->authorize()` calls to `ClassesController` (index, store, update, destroy)
3. Remove `HandlesAuthorization` trait from all 8 Policy classes
4. Run `vendor/bin/pint --dirty --format agent`
5. Run `php artisan test --compact --filter="Policy"`

### Phase 2: Code Quality — Critical (Data Integrity + Security)
**Tasks**: CQ07, CQ04
**Estimated time**: ~30 minutes
**Dependencies**: None

1. Fix `where('status', 'false')` → proper boolean in `StudentsController` (line 114)
2. Add rate limiting middleware on web routes in `Kernel.php` or `RouteServiceProvider`
3. Run Pint
4. Run `php artisan test --compact --filter="Students"`

### Phase 3: Code Quality — Naming
**Tasks**: CQ01, CQ02, CQ03
**Estimated time**: ~30 minutes
**Dependencies**: None

1. Rename `promotionController.php` → `PromotionController.php`, update all references
2. Rename `fund_accountsController.php` → `FundAccountsController.php`, update all references
3. Rename `schedulesController.php` → `SchedulesController.php`, update all references
4. Run Pint
5. Run `php artisan test --compact`

### Phase 4: Form Requests
**Tasks**: T027-T033, T022
**Estimated time**: ~1.5 hours
**Dependencies**: Phase 1 (authorization patterns established)

1. Create 14 Form Request classes following existing `StorePaymentRequest` pattern
2. Add `school_id` scoping validation to all Form Requests where applicable
3. Bind Form Requests to controllers (replace `Request $request` with typed hints)
4. Run Pint
5. Run `php artisan test --compact`

### Phase 5: Routes
**Tasks**: T052, T055, T056
**Estimated time**: ~1.5 hours
**Dependencies**: Phase 4 (Form Requests must be bound first)

1. Move `/{type}` catch-all to END of orders group in `routes/inventory.php`
2. Convert 13 `POST /update` → `PUT /{id}` across 6 route files
3. Update all corresponding Blade forms with `@method('PUT')`
4. Convert 20+ snake_case URL segments → kebab-case across all route files
5. Update all Blade links and `route()` calls
6. Run Pint
7. Run `php artisan test --compact --filter="Route"`

### Phase 6: Tests
**Tasks**: T058-T059e
**Estimated time**: ~2.5 hours
**Dependencies**: Phases 1-5 (all controllers and policies must be finalized)

1. Create `ReceiptPaymentControllerTest` (store, update, delete, auth)
2. Create `ExchangeBondControllerTest` (store, update, delete, auth)
3. Create `ExceptionFeesControllerTest` (store, update, delete, auth)
4. Create `PaymentPartsControllerTest` (store, update, delete, auth)
5. Create `PolicyTest` (all 8 policies, view/create/update/delete)
6. Run `php artisan test --compact`

### Phase 7: Code Quality — Configuration
**Tasks**: CQ05, CQ06, CQ08
**Estimated time**: ~30 minutes
**Dependencies**: None

1. Create `config/school.php` with `currency`, `academic_year_status`, `per_page`
2. Replace 7 hardcoded `'EGP'` → `config('school.currency')`
3. Replace 7 hardcoded `AcademicYear::where('status', '0')` → `config('school.academic_year_status')`
4. Replace 10+ hardcoded `->paginate(10)` → `config('school.per_page')`
5. Run Pint
6. Run `php artisan test --compact`

### Phase 8: Translations
**Tasks**: FR-T1, FR-T2, FR-T3
**Estimated time**: ~1 hour
**Dependencies**: None

1. Fix 5 namespace mismatches in translation file references
2. Namespace 16 plain-text keys in HomeController
3. Add ~40 missing translation keys across `enums.php`, `log.php`, `general.php`, `auth.php`, `Sidebar.php`
4. Run `php artisan test --compact`

### Phase 9: Foundation Documentation
**Tasks**: T004, T011
**Estimated time**: ~30 minutes
**Dependencies**: None

1. Document Supervisor configuration for `logs` queue worker
2. Document cron setup for scheduler

### Phase 10: Final Verification
**Tasks**: T03, T071, T072
**Estimated time**: ~30 minutes
**Dependencies**: All previous phases

1. Run `php artisan view:clear && cache:clear`
2. Run `php artisan test --compact` — all tests must pass
3. Run `php artisan route:list` — verify all routes
4. Run `vendor/bin/pint --dirty --format agent`

### Phase 11: UI Verification (Manual)
**Tasks**: FR-UV1 through FR-UV10
**Estimated time**: ~4 hours
**Dependencies**: All previous phases, running application

Manual testing checklist:
- [ ] Keyboard navigation (sidebar, tables, forms, modals)
- [ ] ARIA attributes on interactive elements
- [ ] Mobile breakpoints (375px, 768px, 1024px)
- [ ] Performance (page <3s, DataTable <5s, bundle <200KB)
- [ ] RTL layout in Arabic
- [ ] Dark mode across all pages
- [ ] Focus management (modal open/close)
- [ ] Screen reader compatibility
- [ ] Print stylesheet
- [ ] Browser compatibility (Chrome, Firefox, Safari, Edge)

## Parallel Opportunities

| Phase | Parallel Tasks |
|-------|---------------|
| Phase 3 | All 3 controller renames can be done simultaneously |
| Phase 4 | All 14 Form Requests can be created simultaneously |
| Phase 6 | All 5 test files can be created simultaneously |
| Phase 7 | All 3 config replacements are independent |
| Phase 8 | All translation file updates are independent |

## Risk Mitigation

- **Route changes breaking links**: After Phase 5, run `php artisan route:list` and grep all Blade templates for old route names
- **Form Request validation mismatches**: Compare new Form Request rules against existing controller inline validation before replacing
- **Translation key regressions**: After Phase 8, switch app locale to Arabic and verify all pages render without missing key errors
