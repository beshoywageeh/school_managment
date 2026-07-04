# Implementation Plan: Permission Middleware for All Controllers

**Branch**: `002-permission-middleware` | **Date**: 2026-07-04 | **Spec**: [spec.md](./spec.md)
**Input**: Feature specification from `/specs/002-permission-middleware/spec.md`

## Summary

Add `__construct` methods with `$this->middleware('permission:...', ['only' => ['...']])` calls to 25+ controllers, following the Spatie Permission pattern already established (but commented out) in `RoleController.php`. Permission suffixes map to standard CRUD methods (+ custom actions). Existing dependency injection is preserved. Targeted smoke tests verify middleware registration.

## Technical Context

**Language/Version**: PHP 8.4  
**Primary Dependencies**: spatie/laravel-permission (already installed), laravel/framework v10  
**Storage**: MySQL/MariaDB (via Eloquent, `permissions` and `model_has_permissions` tables managed by Spatie)  
**Testing**: PHPUnit 10 via `php artisan test`  
**Target Platform**: Linux server (Laravel web application)  
**Project Type**: Web application (Laravel 10 + Livewire 4 + Tailwind CSS v4)  
**Performance Goals**: Negligible overhead — middleware is a standard Laravel pattern; no measurable impact  
**Constraints**: All 25+ controllers must retain existing dependency injection; no new controllers or UI changes  
**Scale/Scope**: 25+ controllers across ~15 permission groups

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

**Principle I — Framework Convention Compliance**: ✅ PASS. Using Spatie `$this->middleware('permission:...')` in controllers is the documented standard approach. Controllers remain thin — middleware gates requests at the routing layer, keeping business logic in Services.

**Principle II — Type Safety & Validation**: ✅ PASS. No new data types or validation rules introduced. Existing Form Request classes and type declarations remain untouched.

**Principle III — Service Layer Architecture**: ✅ PASS. Middleware runs before controller methods; service layer is unaffected.

**Principle IV — Incremental Refactoring**: ✅ PASS. Adding middleware constructors is purely additive — no legacy code removed. Changes are backward compatible.

**Principle V — Automated Testing**: ✅ PASS. Smoke tests (one per controller) and 2-3 end-to-end gate tests will be added per spec FR-016/FR-017. Existing test suite must pass.

## Project Structure

### Documentation (this feature)

```text
specs/002-permission-middleware/
├── plan.md              # This file
├── research.md          # Phase 0 — resolved clarifications
├── data-model.md        # Phase 1 — permission mapping data model
├── quickstart.md        # Phase 1 — validation guide
├── contracts/           # Phase 1 — interface contracts
│   └── permission-mapping.md
├── spec.md              # Feature specification
└── checklists/
    └── requirements.md  # Quality checklist
```

### Source Code (repository root)

```text
app/Http/Controllers/
├── ClassesController.php              # + middleware constructor
├── ClassRooms/ClassRoomsController.php
├── Grades/GradesController.php
├── AcademicYearController.php
├── JobController.php
├── UserController.php
├── schedulesController.php
├── Parents/MyParentsController.php
├── Students/StudentsController.php
├── SchoolFeeController.php
├── FeeInvoiceController.php
├── ExceptionFeesController.php
├── PaymentPartsController.php
├── ReceiptPaymentController.php
├── ExchangeBondController.php
├── promotionController.php
├── Inventory/InventoryItemController.php
├── Inventory/InventoryOrderController.php
├── Inventory/InventoryGardController.php
├── BackupController.php
├── RoleController.php                  # uncomment existing constructor
├── SettingsController.php
├── AdminEraController.php              # read first — confirm methods
├── ReportController.php                # read first — confirm methods
├── ActivityLogController.php           # read first — confirm methods
├── SetupController.php                 # read first — confirm methods
└── HomeController.php                  # read first — confirm methods
```

**Structure Decision**: Single Laravel project — controllers live under `app/Http/Controllers/`. No new directories needed. All changes are additive within existing files.

## Complexity Tracking

> No Constitution violations — all gates pass. Complexity tracking section is not required.

