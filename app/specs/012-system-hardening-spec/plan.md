# Implementation Plan: System Hardening & Correctness Remediation

**Branch**: `012-system-hardening-spec` | **Date**: 2026-08-28 | **Spec**: [spec.md](./spec.md)
**Input**: Feature specification from `specs/012-system-hardening-spec/spec.md`

## Summary

This plan hardens a Laravel 10 multi-tenant school management system and repairs correctness defects in four risk tiers, as specified:

- **Phase 1 — Critical security**: close the privilege-escalation hole in `AdminEraController.php`; enforce `login_allow` (disabled accounts cannot sign in); gate or remove open public registration and the `null school_id → super-admin` escape hatch; wire real brute-force rate limiting into login/registration/password-reset. Audit-trace all privileged actions.
- **Phase 2 — Financial correctness**: exact cent/decimal arithmetic for all money; consistent school-fund sign; reverse-then-record for exchange-bond edits; reverse ledger on invoice void; record partials and track over-payment; preserve referential integrity between inventory orders and finance entries.
- **Phase 3 — Inventory consistency**: single consistent auto-numbering; `lockForUpdate`-serialized stock deduction; fix the hardcoded `type="sales"`; authorize `pay()` and convert to a state-changing (POST + Policy) action; allow zero/false item updates; repair the broken `reference` polymorphic mapping.
- **Phase 4 — Quality & hardening**: school-scope every raw query/job; enforce orphan-preventing deletion semantics; add missing indexes; paginate core lists; fix cache invalidation; remove dead code and normalize names/enums.

**Inventory note**: The centralized inventory rebuild is already on disk (legacy stocks/clothes/book_sheets removed; new `inventory_*` tables, models, services, controllers, and views exist). Phase 3 therefore targets consistency bugs in the **new** implementation, per the clarification that these are constraints for the rebuilt system.

## Technical Context

**Language/Version**: PHP 8.5, Laravel framework v10
**Primary Dependencies**: spatie/laravel-permission, laravel/sanctum (v3), livewire/livewire (v4), maatwebsite/excel, mcamara/laravel-localization. **No new package dependencies required** (all fixes use Laravel core + existing Spatie auth/permission and `lockForUpdate` + `DB::transaction`).
**Storage**: MySQL / MariaDB via Eloquent (DECIMAL for money; migrations-first per constitution).
**Testing**: PHPUnit 10; `php artisan test --compact --filter=...`; Laravel Boost `tinker` for smoke checks.
**Target Platform**: Linux web server (containerized via Docker/Sail).
**Project Type**: Laravel web application (Livewire 4 frontend).
**Performance Goals**: Core lists paginated (≤50/page); dashboard reads return current data without recomputing heavy monthly aggregates per request; inventory order numbering collision-free under concurrent creation; stock writes serialized via row locks.
**Constraints**: Multi-tenant isolation (schools) must never regress; no new dependencies without justification; incremental refactoring (backward-compatible additive changes first); money stays DECIMAL but arithmetic uses exact decimal discipline; audit log for privileged actions is tamper-resistant to the acting admin.
**Scale/Scope**: Multi-school tenant model; several dozen tables; existing ~50 test files to extend.

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

**PASS** — evaluated against constitution `app` (Clean Code & Convention Compliance, Simple UX, Minimal Dependencies, Service Layer, Automated Testing, Incremental Refactoring):

- **I. Clean Code & Convention Compliance** — PASS. All fixes respect Form Requests, PHP 8 constructor promotion, TitleCase enums, `config()` only, `make:` scaffolding. Enums renamed to TitleCase with the original snake_case retained for BC via `backed` enum casts (see data-model).
- **II. Simple UX & Responsive Design** — PASS. UI changes are minimal (route/button `pay` conversion, order-type hidden field) and use existing Livewire/Alpine/Tailwind patterns.
- **III. Minimal Dependencies** — PASS. No new package is introduced. Throttling uses Laravel's `RateLimiter`/`throttle` middleware; exact money uses Laravel decimal cast + optional `bcmath` (core PHP); row locking uses `lockForUpdate()`. Additive migrations only.
- **IV. Service Layer Architecture** — PASS. Logic moved/hardened in existing `App\Services\` classes (`UserService`, `PaymentService`, `AccountingReversalService`, `Inventory*Service`). Controllers remain thin.
- **V. Automated Testing** — PASS. Every change ships with PHPUnit feature/unit tests (happy + failure + edge), per phase.
- **Development Workflow 5 (Incremental refactoring)** — PASS. This plan is entirely additive/behavioral fixes on top of stable tables + existing services; no legacy module deletion is required here (already completed by the inventory rebuild).

No violations require Complexity Tracking justification.

## Project Structure

### Documentation (this feature)

```text
specs/012-system-hardening-spec/
├── plan.md              # This file (/speckit.plan command output)
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── contracts/           # Phase 1 output (form requests / policies / route contract)
└── tasks.md             # Phase 2 output (/speckit.tasks command - NOT created by /speckit.plan)
```

### Source Code (repository root — Laravel layout)

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── AdminEraController.php        # FIX: permission gate + drop password hash
│   │   ├── Auth/LoginRequest.php         # FIX: enforce login_allow + wire rate limiting
│   │   ├── Auth/RegisteredUserController.php  # FIX: gate/remove open registration
│   │   ├── Inventory/InventoryOrderController.php  # FIX: pay() POST + authorize + scope
│   │   ├── Inventory/InventoryGardController.php   # FIX: add authorize()
│   │   ├── Finance/ExchangeBondController.php      # FIX: reverse-then-record (move to service)
│   │   ├── Finance/ExceptionFeesController.php     # FIX: dead check + reverse-on-void
│   │   └── HomeController.php, SettingsController.php  # FIX: scoping, pagination, password exposure
│   └── Requests/
│       └── (existing Form Requests hardened; new UpdateInventoryItemRequest if needed)
├── Models/
│   ├── Scopes/SchoolScope.php            # FIX: null school_id no longer implicit super-admin
│   ├── Inventory/InventoryTransaction.php # FIX: reference_type to class name
│   └── Traits/BelongsToSchool.php        # reviewed for scope consistency
├── Services/
│   ├── UserService.php                   # FIX: server-side guard on isAdmin/login_allow
│   ├── PaymentService.php                # FIX: exact money, consistent fund sign, partial/overpay
│   ├── InventoryPaymentService.php       # FIX: fund sign consistency + ledger FK integrity
│   ├── AccountingReversalService.php     # FIX: reverse-then-record; no recursive double-reversal
│   ├── Finance/ (new service extraction) # ExchangeBond/ExceptionFees ledger ops
│   ├── Inventory/InventoryOrderService.php       # FIX: single numbering
│   ├── Inventory/InventoryItemService.php        # FIX: zero/false updates
│   └── Inventory/InventoryTransactionService.php # FIX: lockForUpdate serialization
├── Enums/                                # NEW/renamed TitleCase enums (BC kept)
│   ├── PaymentStatus.php (rename Payment_Status)
│   ├── PaymentType.php    (rename Payment_Type)
│   └── StudentStatus.php  (rename Student_Status)
├── Policies/
│   └── InventoryOrderPolicy.php          # NEW: authorize pay()
└── Providers/AppServiceProvider.php      # FIX: rate limiter registration (if moved)

database/migrations/
└── 2026_08_28_*_harden_* .php            # NEW additive migrations (rate-limit/alerts, ledger fixes, indexes)

resources/views/backend/inventory/orders/
├── create_sarf.blade.php                 # FIX: type from route, not hardcoded sales
└── index.blade.php                       # FIX: gard tab label + pay via POST form

routes/
├── security.php                          # FIX: permission guard on admin-era + settings IDOR
├── auth.php                              # FIX: throttle register/login/password-reset
└── inventory.php                         # FIX: pay route -> POST

tests/
├── Feature/Security/                     # NEW: privilege, disabled-login, registration, throttle
├── Feature/Finance/                      # NEW: reconciliation, reversal, fund sign
├── Feature/Inventory/                    # NEW: numbering, oversell, pay auth, zero updates
└── Feature/Quality/                      # NEW: scoping, pagination, cache
```

**Structure Decision**: Existing Laravel layout is retained. Phase 2 extracts ledger operations into a new `App\Services\Finance\` namespace to keep `ExchangeBondController`/`ExceptionFeesController` thin (per Service Layer principle), while reusing existing financial services. No new top-level folders; files land in the established `app/Http/Controllers`, `app/Services`, `app/Models`, `app/Enums`, `app/Policies`, `database/migrations`, `routes` directories.

## Complexity Tracking

> No constitution violations. Table intentionally empty.
