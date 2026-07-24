# Research: System Hardening — Remaining Tasks

> Generated: 2026-07-23
> Spec: `specs/006-system-hardening-remaining/spec.md`

---

## R1: Form Request Validation Pattern

**Decision**: Follow existing project convention — each Form Request has `authorize()`, `rules()`, and `messages()` methods. Use standard Laravel validation error bag.

**Rationale**: 15+ Form Requests already exist in `app/Http/Requests/` following this exact pattern. The frontend Blade/Livewire components already handle Laravel's default error bag display. No custom error format needed.

**Alternatives considered**:
- Custom JSON error responses: Rejected — the app is server-rendered Blade, not API-first
- Custom Blade error component: Rejected — unnecessary duplication when Laravel's default works

**Existing pattern reference**: `StorePaymentRequest.php` — checks `$this->user()->can('payment_parts-create')` in `authorize()`, uses `trans()` for error messages.

---

## R2: Policy Registration & Authorization

**Decision**: Register all 8 policies in `AuthServiceProvider::$policies`. Use `$this->authorize()` in controllers. Remove deprecated `HandlesAuthorization` trait.

**Rationale**: All 8 policies already exist but `EmployeePolicy` is not registered. The `HandlesAuthorization` trait was deprecated in Laravel 10 — policies should use the `$this->authorize()` method directly or return booleans from policy methods.

**Alternatives considered**:
- Middleware-based authorization (`can:` middleware): Already used in some controllers via `__construct()`. Both approaches are valid; `$this->authorize()` is more explicit for action-level checks.
- Gate-based authorization: Rejected — policies are already created and match the permission model.

**Key finding**: Existing policies use `{entity}-{action}` permission naming (e.g., `Students-create`). New authorization checks must follow this convention.

---

## R3: Route Convention Standards

**Decision**: Convert to RESTful HTTP methods (PUT for updates, DELETE for destroys) and kebab-case URL segments.

**Rationale**: Laravel community standard. The existing routes use `POST /update` and `GET /destroy` which are non-standard. 13 occurrences of `POST /update` and 20+ snake_case segments need conversion.

**Alternatives considered**:
- Keep current conventions: Rejected — creates confusion for new developers and violates REST principles
- Full API versioning: Rejected — out of scope for hardening; this is a server-rendered app

**Impact**: All Blade forms must be updated with `@method('PUT')` or `@method('DELETE')` directives. All `route()` calls must use new kebab-case names.

---

## R4: Code Quality Standards

**Decision**: PascalCase controller naming, configurable values for currency/status/pagination, rate limiting on web routes.

**Rationale**: 3 controllers use non-standard naming (`promotionController`, `fund_accountsController`, `schedulesController`). 7 hardcoded `'EGP'` strings, 7 hardcoded `AcademicYear::where('status', '0')`, and 10+ hardcoded `->paginate(10)` need to be configurable.

**Alternatives considered**:
- Leave naming as-is: Rejected — inconsistency makes the codebase harder to navigate
- Use environment variables for config: Rejected — Laravel config files are the standard approach

**Config pattern**: Create `config/school.php` with `currency`, `academic_year_status`, `per_page` values. Reference via `config('school.currency')`.

---

## R5: Test Coverage Approach

**Decision**: PHPUnit feature tests using `RefreshDatabase` trait, factories for model creation, `actingAs()` for auth.

**Rationale**: Existing tests (35 files) all follow this pattern. The `phpunit.xml` is configured with SQLite in-memory. Factories exist for all major models.

**Alternatives considered**:
- Pest: Rejected — project uses PHPUnit exclusively
- HTTP tests vs controller tests: Using HTTP tests (`$this->get()`, `$this->post()`) as they test the full request lifecycle

**Key factories available**: `UserFactory`, `StudentFactory`, `FeeInvoiceFactory`, `ClassRoomFactory`, `GradeFactory`, `ReceiptPaymentFactory`, `JobFactory`, `AcademicYearFactory`

---

## R6: Translation Key Management

**Decision**: Fix namespace mismatches, add missing keys, namespace plain-text keys. All keys must exist in both `lang/en/` and `lang/ar/`.

**Rationale**: 5 namespace mismatches cause runtime errors when switching languages. 16 plain-text keys in HomeController bypass the translation system. ~40 missing keys across 5 files.

**Alternatives considered**:
- Auto-generate translations: Rejected — Arabic translations require human review
- Use a translation management service: Rejected — overkill for ~50 keys

**File locations**: `lang/{en,ar}/` with subdirectories for each namespace (general, grades, classrooms, etc.)

---

## R7: Rate Limiting Configuration

**Decision**: Add `throttle:60,1` middleware to web routes via `RouteServiceProvider` or `Kernel.php`.

**Rationale**: API routes already have `throttle:api` (verified in Kernel.php). Web routes currently have no rate limiting. Adding it protects against brute-force and DoS attacks.

**Alternatives considered**:
- Per-route rate limiting: Rejected — too granular for a server-rendered app
- No rate limiting: Rejected — security requirement

**Configuration**: 60 requests per minute per IP address for web routes.
