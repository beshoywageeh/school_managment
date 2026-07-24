# Implementation Plan: Code Review Fixes

**Branch**: `007-code-review-fixes` | **Date**: 2026-07-24 | **Spec**: [spec.md](spec.md)
**Input**: Feature specification from `/specs/007-code-review-fixes/spec.md`

## Summary

Address 6 pre-existing issues identified during codebase review: standardize FinancialService namespace imports, convert all GET destroy routes to HTTP DELETE for CSRF protection, add missing form request validations for user fields, add `insurance_number` to User mass-assignment, harden CSP headers, and remove orphan labs edit view. All changes are backward-compatible fixes to existing code — no new features or dependencies.

## Technical Context

**Language/Version**: PHP 8.5.0
**Primary Dependencies**: Laravel 10, Livewire 4, Alpine.js 3, Tailwind CSS v4, Spatie Permission v3
**Storage**: MySQL/MariaDB (via Eloquent ORM)
**Testing**: PHPUnit 10
**Target Platform**: Linux server (web application)
**Project Type**: Web application (school management system)
**Performance Goals**: No new performance requirements — changes are structural/security fixes
**Constraints**: Must not break existing tests; must pass Pint formatting; must maintain Livewire/Alpine.js compatibility in CSP
**Scale/Scope**: ~20 route files, ~14 controllers affected, 1 model (User), 1 middleware (CSP), 1 orphan view

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

| Principle | Status | Notes |
|-----------|--------|-------|
| I. Clean Code & Convention Compliance | ✅ PASS | Standardizing namespaces, adding Form Request validation — all align with conventions |
| II. Simple UX & Responsive Design | ✅ PASS | No UI changes — only route method changes and CSP header hardening |
| III. Minimal Dependencies | ✅ PASS | No new dependencies — all fixes use existing Laravel features |
| IV. Service Layer Architecture | ✅ PASS | No service layer changes — only import path corrections |
| V. Automated Testing | ⚠️ CONDITIONAL | Tests must be added for new validations (FR-004, FR-005). Existing tests must pass after route changes. |

**Gate Result**: PASS with condition — implementation must include tests for new validation rules.

## Project Structure

### Documentation (this feature)

```text
specs/007-code-review-fixes/
├── plan.md              # This file
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── contracts/           # Phase 1 output
└── tasks.md             # Phase 2 output (created by /speckit.tasks)
```

### Source Code (repository root)

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── ExceptionFeesController.php    # FR-001: namespace fix
│   │   ├── ExchangeBondController.php     # FR-001: namespace fix
│   │   ├── FeeInvoiceController.php       # FR-001: namespace fix
│   │   └── ... (other controllers with GET destroy routes)
│   ├── Middleware/
│   │   └── SecurityHeadersMiddleware.php  # FR-006/007: CSP headers
│   └── Requests/
│       └── UserStoreRequest.php           # FR-004/005: add missing validations
├── Models/
│   └── User.php                           # FR-005: add insurance_number to $fillable
├── Services/
│   └── Finance/
│       └── FinancialService.php           # FR-001: verify canonical location
└── ...
resources/views/
├── backend/labs/edit.blade.php            # FR-008: remove orphan view
└── ... (Blade forms with GET destroy links)
routes/
├── finance.php                            # FR-002/003: GET→DELETE
├── academic.php                           # FR-002/003: GET→DELETE
├── employee.php                           # FR-002/003: GET→DELETE
├── student.php                            # FR-002/003: GET→DELETE
├── inventory.php                          # FR-002/003: GET→DELETE
├── settings.php                           # FR-002/003: GET→DELETE
├── roles.php                              # FR-002/003: GET→DELETE
├── parents.php                            # FR-002/003: GET→DELETE
├── grades.php                             # FR-002/003: GET→DELETE
├── class-rooms.php                        # FR-002/003: GET→DELETE
├── promotions.php                         # FR-002/003: GET→DELETE
├── jobs.php                               # FR-002/003: GET→DELETE
├── fund-accounts.php                      # FR-002/003: GET→DELETE
├── exchange-bonds.php                     # FR-002/003: GET→DELETE
├── school-fees.php                        # FR-002/003: GET→DELETE
├── fee-invoices.php                       # FR-002/003: GET→DELETE
├── receipt-payments.php                   # FR-002/003: GET→DELETE
├── exception-fees.php                     # FR-002/003: GET→DELETE
├── payment-parts.php                      # FR-002/003: GET→DELETE
├── labs.php                               # FR-008: remove GET destroy route
└── web.php (or routes file with CSP middleware registration)
```

**Structure Decision**: Standard Laravel 10 application structure — no structural changes needed. All modifications are to existing files.

## Complexity Tracking

> No constitution violations requiring justification. All changes align with existing principles.
