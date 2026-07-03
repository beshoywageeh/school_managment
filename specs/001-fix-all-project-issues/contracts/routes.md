# Route Contracts: Complete System Repair — Fix All Project Issues

## Overview

This document defines the HTTP contracts (routes) affected by the remaining work. These are the interface points between the web application and its users.

## Affected Routes

### Web Routes (web.php, inventory.php, reports.php, security.php)

#### Phase 5 — Authorization Middleware Additions

| Route File | Routes | Current Auth | Target Auth |
|------------|--------|-------------|-------------|
| `routes/reports.php` | All report routes | None or basic | Add `can:` middleware with permission keys |
| `routes/security.php` | `/monitor` | None | Auth + authorization middleware |

#### Phase 6 — Convention Fixes

| Route File | Current Route | Target Route |
|------------|---------------|--------------|
| `routes/inventory.php` | `/{type}` before specific routes | `/{type}` moved after `/create/{type}` and all specific routes |
| `routes/web.php` | `GET /destroy/{id}` | `DELETE /{id}` |
| `routes/web.php` | `POST /update` | `PUT /{id}` |
| Various | `/exception_fee` (snake_case) | `/exception-fee` (kebab-case) |
| `routes/api.php` | Unnamed API routes | Add `->name()` to all routes |

### API Routes (api.php)

Current state: Throttle middleware `throttle:api` to be applied (F0.5). Route names to be added (F6.2).

## Controller Contracts

### Form Request Binding (Phase 2)

Each affected controller must accept a `SpecificRequest` instead of base `Request`:

| Controller | Store Request | Update Request |
|------------|---------------|----------------|
| `PaymentPartsController` | `StorePaymentRequest` | `UpdatePaymentRequest` |
| `ExchangeBondController` | `StoreExchangeBondRequest` | `UpdateExchangeBondRequest` |
| `FeeInvoiceController` | `StoreFeeInvoiceRequest` | `UpdateFeeInvoiceRequest` |

### Policy Authorization (Phase 5)

All 42 controllers must call `$this->authorize()` on applicable actions. 20 Form Requests must implement real `authorize()` via `$this->user()->can(...)`.

### Service Delegation (Phase 4)

| Controller | Method | Delegates To |
|------------|--------|-------------|
| `HomeController` | Multiple | `DashboardService` |
| `ReciptPaymentController` | 4 payment handlers | `PaymentService` |
| `StudentsController` | `index()` | `StudentQueryService` |
| `fee_invoiceController` | `index()` | `InvoiceQueryService` |
| `UserController` | `store()`, `update()` | `UserService` |

### Transaction Handling (F4.6)

All controllers use `$this->executeInTransaction(callable)` from Base Controller instead of raw `DB::beginTransaction/commit/rollback`. Rollback is all-or-nothing.

## Response Contract

- Success: Redirect to index route with `success` flash message
- Validation error: Redirect back with errors and old input
- Authorization failure: `403` HTTP response
- Not found: `404` HTTP response
- Rate limit exceeded: `429` HTTP response
- Server error: Custom error page (F0.6 — 401–503 pages)

## Security Headers Contract (F0.6)

All HTTP responses MUST include:
- `Content-Security-Policy`
- `Strict-Transport-Security`
- `X-Frame-Options`
- `X-Content-Type-Options`

## Rate Limiting Contract (F0.5)

API routes: max 60 requests per minute per IP. Returns `429 Too Many Requests` on breach.
