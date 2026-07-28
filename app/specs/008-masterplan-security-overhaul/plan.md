# Implementation Plan: Masterplan Security & Quality Overhaul

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Fix 56+ security vulnerabilities, critical bugs, financial data integrity issues, performance problems, and architectural debt across 6 sprints in a Laravel school management system.

**Architecture:** Fix issues in-place across existing controllers, models, services, and views. Use the existing `BelongsToSchool` + `SchoolScope` + `SchoolTrait` pattern for multi-tenancy. Extract service layer logic from god controllers. Add static analysis (Larastan) for ongoing protection.

**Tech Stack:** PHP 8.5, Laravel 10, Livewire 4, Alpine.js 3, Tailwind CSS v4, MySQL/MariaDB, PHPUnit 10, Laravel Pint, Spatie Roles, Spatie Backup, Laravel Sanctum

## Global Constraints

- PHP ^8.5 with constructor property promotion
- Laravel 10 conventions, PSR-12, Laravel Pint style
- Livewire 4 + Alpine.js 3 + Tailwind CSS v4 for UI
- PHPUnit 10 for testing (not Pest)
- Eloquent ORM for all database access
- Form Request classes for validation (array-style rules)
- PHP backed enums for fixed-value sets
- `config()` helper only; no `env()` outside config files
- Service layer architecture: controllers only marshal HTTP, services hold business logic
- Run `vendor/bin/pint --dirty --format agent` before every commit
- Run affected tests after every change

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

| Principle | Status | Notes |
|-----------|--------|-------|
| I. Clean Code & Convention Compliance | PASS | All fixes follow Laravel 10 conventions |
| II. Simple UX & Responsive Design | PASS | No UI changes — bug fixes only |
| III. Minimal Dependencies | PASS | Adding only Larastan (static analysis); no new runtime deps |
| IV. Service Layer Architecture | PASS | Extracting controller logic into services; removing SchoolTrait from services |
| V. Automated Testing | PASS | Adding tests for multi-tenancy and financial operations |

## Project Structure

### Documentation (this feature)

```text
specs/008-masterplan-security-overhaul/
├── plan.md              # This file
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── contracts/           # Phase 1 output
└── tasks.md             # Phase 2 output (/speckit.tasks command)
```

### Source Code (repository root)

```text
app/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # Fix IDOR, validation, route methods
│   │   │   ├── Students/
│   │   │   ├── Fees/
│   │   │   ├── Inventory/
│   │   │   └── ...
│   │   ├── Middleware/          # Remove AdminIpWhitelist
│   │   └── Requests/           # Add missing FormRequest classes
│   ├── Models/
│   │   ├── Scopes/             # SchoolScope (existing, functional)
│   │   ├── Traits/             # BelongsToSchool (existing)
│   │   └── Inventory/          # Fix relationship names
│   ├── Services/
│   │   ├── Finance/            # Fix credit/debit, extract from controllers
│   │   ├── Inventory/          # Decompose god class
│   │   └── Report/             # Extract from ReportController
│   └── Exceptions/             # Add domain exceptions
├── database/
│   └── migrations/             # Add indexes, fix status values
├── resources/
│   └── views/                  # Fix XSS (!! → {{ }}), fix routes
├── routes/                     # Fix route ordering, convert GET→DELETE
├── tests/
│   ├── Feature/                # Add multi-tenancy and financial tests
│   └── Unit/
└── docs/
    └── masterplan.md           # Source specification
```

**Structure Decision**: Single Laravel project. All changes within existing directory structure. No new top-level directories needed.

## School Scope Strategy

The existing multi-tenancy pattern is retained:
- `SchoolScope` (Eloquent global scope) — auto-filters by `school_id` for non-admin users
- `BelongsToSchool` (Model trait) — registers scope, auto-populates `school_id` on creation
- `SchoolTrait` (Controller helper) — provides `getSchool()` for explicit filtering

**Fix approach**: Add explicit `school_id` filtering in 8 controllers that have gaps (especially for admin-context queries where the global scope is bypassed). No new global scopes or middleware added.

## Complexity Tracking

> No constitution violations — all changes align with existing principles.
