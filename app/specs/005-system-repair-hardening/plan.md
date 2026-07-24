# Implementation Plan: System Repair & Hardening

## Technical Context

- **Framework:** Laravel 10 + Livewire v4
- **PHP:** 8.5
- **Frontend:** Tailwind CSS v4, Alpine.js v3
- **Testing:** PHPUnit v10 (SQLite in-memory)
- **Auth:** Spatie Permissions (`{action}_{entity}` naming)
- **Code Style:** Laravel Pint

## Constitution Check

No constitution file exists. Proceeding with standard Laravel conventions from AGENTS.md.

## Files to Modify/Create

| # | File | Action | Phase |
|---|------|--------|-------|
| 1 | `lang/en/schedules.php` | Modify | 1 |
| 2 | `lang/ar/schedules.php` | Modify | 1 |
| 3 | `resources/views/livewire/Schedules/Schedules.blade.php` | Modify | 1 |
| 4 | `app/Http/Middleware/SecurityHeadersMiddleware.php` | Create | 2 |
| 5 | `app/Http/Kernel.php` | Modify | 2 |
| 6 | `database/migrations/2026_07_03_000001_add_indexes_to_frequent_queries.php` | Create | 2 |
| 7 | `database/migrations/2026_07_03_000002_fix_payed_to_paid.php` | Create | 2 |
| 8 | `app/Http/Requests/StorePaymentRequest.php` | Create | 3 |
| 9 | `app/Http/Requests/UpdatePaymentRequest.php` | Create | 3 |
| 10 | `app/Http/Requests/StoreExchangeBondRequest.php` | Create | 3 |
| 11 | `app/Http/Requests/UpdateExchangeBondRequest.php` | Create | 3 |
| 12 | `app/Http/Requests/StoreFeeInvoiceRequest.php` | Create | 3 |
| 13 | `app/Http/Requests/UpdateFeeInvoiceRequest.php` | Create | 3 |
| 14 | `app/Http/Controllers/PaymentPartsController.php` | Modify | 3 |
| 15 | `app/Http/Controllers/ExchangeBondController.php` | Modify | 3 |
| 16 | `app/Http/Controllers/FeeInvoiceController.php` | Modify | 3 |
| 17 | `app/Services/DashboardService.php` | Create | 4 |
| 18 | `app/Services/PaymentService.php` | Create | 4 |
| 19 | `app/Services/StudentQueryService.php` | Create | 4 |
| 20 | `app/Services/InvoiceQueryService.php` | Create | 4 |
| 21 | `app/Services/UserService.php` | Create | 4 |
| 22 | `app/Http/Controllers/Controller.php` | Modify | 4 |
| 23 | `app/Http/Controllers/HomeController.php` | Modify | 4 |
| 24 | `app/Http/Controllers/ReceiptPaymentController.php` | Modify | 4 |
| 25 | `app/Http/Controllers/Students/StudentsController.php` | Modify | 4 |
| 26 | `app/Http/Controllers/UserController.php` | Modify | 4 |
| 27 | `app/Policies/StudentPolicy.php` | Create | 5 |
| 28 | `app/Policies/FeeInvoicePolicy.php` | Create | 5 |
| 29 | `app/Policies/UserPolicy.php` | Create | 5 |
| 30 | `app/Policies/InventoryItemPolicy.php` | Create | 5 |
| 31 | `app/Policies/InventoryOrderPolicy.php` | Create | 5 |
| 32 | `app/Policies/GradePolicy.php` | Create | 5 |
| 33 | `app/Policies/ClassPolicy.php` | Create | 5 |
| 34 | `app/Policies/EmployeePolicy.php` | Create | 5 |
| 35 | `app/Providers/AuthServiceProvider.php` | Modify | 5 |
| 36 | 20 Form Request classes | Modify | 5 |
| 37 | 12+ controllers | Modify | 4 |
| 38 | `routes/inventory.php` | Modify | 6 |
| 39 | `routes/api.php` | Modify | 6 |
| 40 | `routes/web.php` | Modify | 6 |
| 41 | `routes/reports.php` | Modify | 5, 6 |
| 42 | `routes/employees.php` | Modify | 6 |
| 43 | `routes/academic.php` | Modify | 6 |
| 44 | `routes/security.php` | Modify | 5, 6 |
| 45 | `tests/Feature/InventoryItemTest.php` | Create | 7 |
| 46 | `tests/Feature/InventoryOrderTest.php` | Create | 7 |
| 47 | `tests/Feature/ActivityLogTest.php` | Create | 7 |
| 48 | `tests/Feature/FinancialTest.php` | Create | 7 |
| 49 | `app/Http/Traits/EagerLoadingTrait.php` | Delete | 8 |
| 50 | `app/Providers/ViewServiceProvider.php` | Delete | 8 |
| 51 | 8 unused pagination templates | Delete | 8 |

---

## Phase 1: Schedule Polish (3 tasks)

### Task 1: Add missing translation keys

**Files:** `lang/en/schedules.php`, `lang/ar/schedules.php`

Add 9 new keys to both files:

```php
// English
'print_pdf' => 'Print PDF',
'download_pdf' => 'Download PDF',
'weekly_schedule' => 'Weekly Schedule',
'no_schedule' => 'No Schedule',
'auto_generate_confirm' => 'Are you sure you want to auto-generate the schedule? This will replace any existing assignments.',
'generation_summary' => 'Generation Summary',
'sat_short' => 'Sat', 'sun_short' => 'Sun', 'mon_short' => 'Mon',
'tue_short' => 'Tue', 'wed_short' => 'Wed', 'thu_short' => 'Thu',
'print_type' => 'Print Type',
'select_print_type' => 'Select Print Type',
```

Arabic equivalents for all keys.

**Verify:** `grep -c "=>" lang/en/schedules.php` returns ~51.

---

### Task 2: Add wire:loading and confirmation dialog

**File:** `resources/views/livewire/Schedules/Schedules.blade.php`

Add `wire:loading` to action buttons:
```html
<button wire:click="autoGenerate" wire:loading.attr="disabled" class="...">
    <span wire:loading.remove wire:target="autoGenerate">{{ __('schedules.auto_generate') }}</span>
    <span wire:loading wire:target="autoGenerate">...</span>
</button>
```

Add Alpine.js confirmation dialog to autoGenerate:
```html
@click.prevent="$dispatch('confirm-generate')"
```

**Verify:** Buttons show loading state during processing.

---

### Task 3: Run verification

```bash
php artisan view:clear && php artisan cache:clear
php artisan route:list --name=schedule
vendor/bin/pint --dirty --format agent
php artisan test --compact --filter=schedule
```

**Verify:** All pass, exit code 0.

---

## Phase 2: Foundation (5 tasks)

### Task 4: Create SecurityHeadersMiddleware

**File:** `app/Http/Middleware/SecurityHeadersMiddleware.php`

```php
class SecurityHeadersMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:");
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        return $response;
    }
}
```

**Verify:** File exists, class is valid PHP.

---

### Task 5: Register SecurityHeadersMiddleware

**File:** `app/Http/Kernel.php`

Add to `$middleware` array (global):
```php
\App\Http\Middleware\SecurityHeadersMiddleware::class,
```

**Verify:** `grep "SecurityHeadersMiddleware" app/Http/Kernel.php` returns match.

---

### Task 6: Create index migration

**File:** `database/migrations/2026_07_03_000001_add_indexes_to_frequent_queries.php`

```php
Schema::table('student_accounts', fn(Blueprint $t) => $t->index('type'));
Schema::table('activity_logs', fn(Blueprint $t) => $t->index('action'));
Schema::table('inventory_items', fn(Blueprint $t) => $t->index('category'));
```

**Verify:** File exists, `php artisan migrate --pretend` succeeds.

---

### Task 7: Create column rename migration

**File:** `database/migrations/2026_07_03_000002_fix_payed_to_paid.php`

Rename columns only if they exist:
```php
if (Schema::hasColumn('table', 'payed')) {
    Schema::rename('table', 'payed', 'paid');
}
```

**Verify:** File exists, migration handles missing columns gracefully.

---

### Task 8: Document cron setup

Create documentation (inline in plan or separate file) with:
```
* * * * * cd /path/to/app && php artisan schedule:run >> /dev/null 2>&1
```

Queue worker:
```
[program:queue-logs]
command=php /path/to/app artisan queue:work --queue=logs
```

**Verify:** Documentation exists and is accurate.

---

### Task 9: Verify foundation

```bash
php artisan migrate --force
curl -I http://localhost:8000/ | grep -i "content-security-policy"
php artisan test --compact
```

---

## Phase 3: Form Requests (10 tasks)

### Task 10-15: Create 6 Form Request classes

Create in `app/Http/Requests/`:

| File | Rules |
|------|-------|
| `StorePaymentRequest.php` | `student_id` required\|exists:students,id; `amount` required\|numeric\|min:0.01; `type` required\|in:cash,bank; `date` required\|date; `fund_account_id` required\|exists:fund_accounts,id |
| `UpdatePaymentRequest.php` | `student_id` required\|exists:students,id; `amount` required\|numeric\|min:0.01; `date` required\|date |
| `StoreExchangeBondRequest.php` | `student_id` required\|exists:students,id; `amount` required\|numeric\|min:0.01; `type` required\|in:receive,pay; `date` required\|date |
| `UpdateExchangeBondRequest.php` | Same as Store |
| `StoreFeeInvoiceRequest.php` | `list_fees` required\|array\|min:1; `list_fees.*.student_id` required\|exists:students,id; `list_fees.*.fee` required\|numeric\|min:0 |
| `UpdateFeeInvoiceRequest.php` | Same as Store |

Each `authorize()` returns `true` (permission checks added in Phase 5).

**Verify:** All 6 files exist, `php artisan test --compact` still passes.

---

### Task 16-18: Bind Form Requests in controllers

**PaymentPartsController:**
```php
public function store(StorePaymentRequest $request) { ... }
public function update(UpdatePaymentRequest $request, $id) { ... }
```

**ExchangeBondController:**
```php
public function store(StoreExchangeBondRequest $request) { ... }
public function update(UpdateExchangeBondRequest $request, $id) { ... }
```

**FeeInvoiceController:**
```php
public function store(StoreFeeInvoiceRequest $request) { ... }
public function update(UpdateFeeInvoiceRequest $request, $id) { ... }
```

**Verify:** Controllers import and type-hint new Form Requests.

---

### Task 19: Add school_id scoping

Add `school_id` validation to Form Requests where the model has a `school_id` column.

**Verify:** Relevant Form Requests include `school_id` rule.

---

## Phase 4: Business Logic (16 tasks)

### Task 20-24: Create 5 service classes

Create in `app/Services/`:

| File | Methods | Extracted From |
|------|---------|---------------|
| `DashboardService.php` | `getUserRoleCounts()`, `getFinancialData()`, `generateChartData()`, `getMonthlyRevenueTrend()` | `HomeController` (493 lines) |
| `PaymentService.php` | `handleFeeInvoice()`, `handlePartialPayment()`, `handleFullPayment()`, `handleExchangeBond()` | `ReceiptPaymentController` (506 lines) |
| `StudentQueryService.php` | `getFilteredQuery()`, `applyFilters()`, `applySorts()` | `StudentsController::index()` (503 lines) |
| `InvoiceQueryService.php` | `getFilteredQuery()`, `applyDynamicFilters()` | `FeeInvoiceController::index()` (298 lines) |
| `UserService.php` | `assignFields()`, `prepareUserData()` | `UserController::store()`, `::update()` (243 lines) |

**Verify:** All 5 files exist, classes are valid PHP.

---

### Task 25: Add executeInTransaction to Controller

**File:** `app/Http/Controllers/Controller.php`

```php
protected function executeInTransaction(callable $callback): mixed
{
    return DB::transaction($callback);
}
```

**Verify:** Method exists, accepts callable.

---

### Task 26-30: Refactor 5 controllers to use services

| Controller | Target Lines | Service |
|-----------|-------------|---------|
| `HomeController` | <200 | `DashboardService` |
| `ReceiptPaymentController` | <250 | `PaymentService` |
| `StudentsController` | <250 | `StudentQueryService` |
| `FeeInvoiceController` | <250 | `InvoiceQueryService` |
| `UserController` | <200 | `UserService` |

Each controller method becomes thin delegation:
```php
public function index()
{
    $data = $this->studentQueryService->getFilteredQuery(request());
    return view('students.index', compact('data'));
}
```

**Verify:** `wc -l` under target for each controller.

---

### Task 31-32: Replace DB::beginTransaction

Replace 22 occurrences across 12 controllers with `$this->executeInTransaction()`.

Controllers to update:
- ReceiptPaymentController (5)
- UserController (2)
- GradesController (2)
- FeeInvoiceController (2)
- ExchangeBondController (2)
- ExceptionFeesController (2)
- promotionController (2)
- SettingsController (2)
- SetupController (1)
- ClassRoomsController (1)
- ClassesController (1)

**Verify:** `grep -r "DB::beginTransaction" app/Http/Controllers/` returns 0 matches.

---

### Task 33-35: Fix N+1 queries

Add eager loading in service query methods:
- `StudentQueryService`: `with('grade', 'classroom', 'parent')`
- `InvoiceQueryService`: `with('fees', 'student')`
- `ReportService`: `with()` for related models

**Verify:** No N+1 in debugbar/laravel-debugbar queries.

---

## Phase 5: Security (13 tasks)

### Task 36-43: Create 8 Policy classes

Create in `app/Policies/`:

Each policy follows this pattern:
```php
class StudentPolicy
{
    public function view(User $user): bool    { return $user->can('add_student'); }
    public function create(User $user): bool  { return $user->can('add_student'); }
    public function update(User $user): bool  { return $user->can('edit_student'); }
    public function delete(User $user): bool  { return $user->can('delete_student'); }
}
```

**Verify:** All 8 files exist, classes are valid PHP.

---

### Task 44: Register policies in AuthServiceProvider

**File:** `app/Providers/AuthServiceProvider.php`

```php
protected $policies = [
    Student::class => StudentPolicy::class,
    FeeInvoice::class => FeeInvoicePolicy::class,
    User::class => UserPolicy::class,
    InventoryItem::class => InventoryItemPolicy::class,
    InventoryOrder::class => InventoryOrderPolicy::class,
    Grade::class => GradePolicy::class,
    ClassRoom::class => ClassPolicy::class,
    // Employee::class => EmployeePolicy::class, (if Employee model exists)
];
```

**Verify:** `$policies` array populated, no empty array.

---

### Task 45: Add $this->authorize() to controllers

Add authorization checks to controller actions:
```php
public function store(Request $request)
{
    $this->authorize('create', Student::class);
    // ...
}
```

**Verify:** `grep -r "this->authorize" app/Http/Controllers/` returns matches.

---

### Task 46: Fix Form Request authorize() methods

Update all 20 Form Request `authorize()` methods to check permissions:
```php
public function authorize(): bool
{
    return $this->user()->can('add_student');
}
```

**Verify:** `grep -A3 "function authorize" app/Http/Requests/*.php` shows permission checks, not `return true`.

---

### Task 47: Add can: middleware to report routes

**File:** `routes/reports.php`

Add `can:` middleware:
```php
Route::middleware('can:view_reports')->group(function () { ... });
```

**Verify:** `grep "can:" routes/reports.php` returns matches.

---

### Task 48: Secure /monitor route

**File:** `routes/security.php`

```php
Route::middleware(['auth', 'can:access_monitor'])->get('/monitor', ...);
```

**Verify:** `/monitor` route has auth and authorization middleware.

---

## Phase 6: Routes (4 tasks)

### Task 49: Move inventory catch-all route

**File:** `routes/inventory.php`

Move `Route::get('/{type}')` to the END of the items group (currently first).

**Verify:** `grep -n "inventory" routes/inventory.php` shows catch-all last in items group.

---

### Task 50: Add route names to api.php

**File:** `routes/api.php`

Add `->name()` to all 11+ routes.

**Verify:** `grep "->name" routes/api.php` returns matches for all routes.

---

### Task 51: Convert POST update → PUT

Convert in:
- `routes/inventory.php` (orders, gard groups)
- `routes/security.php`

Update Blade forms with `@method('PUT')`.

**Verify:** `grep "POST.*update" routes/inventory.php` returns 0 matches.

---

### Task 52: Convert snake_case to kebab-case

Convert URL segments in:
- `routes/web.php`: `get_classRooms` → `get-class-rooms`
- `routes/reports.php`: `Students_export` → `students-export`
- `routes/employees.php`: `return_emp` → `return-emp`
- `routes/academic.php`: `add_students` → `add-students`
- `routes/security.php`: `admin_era` → `admin-era`

**Verify:** `grep "_" routes/*.php` shows minimal snake_case in route definitions.

---

## Phase 7: Tests (5 tasks)

### Task 53: Create InventoryItemTest

**File:** `tests/Feature/InventoryItemTest.php`

Test cases:
- Create item with valid data → 200/redirect
- Create item with invalid data → 422 validation error
- List items by type → 200, items present
- Show single item → 200, item data present
- Update item → 200/redirect
- Delete item → redirect, item removed
- Unauthorized create → 403

**Verify:** `php artisan test --compact --filter=InventoryItemTest` passes.

---

### Task 54: Create InventoryOrderTest

**File:** `tests/Feature/InventoryOrderTest.php`

Test cases:
- Create order with valid data → 200/redirect
- Create order with invalid data → 422
- Status transition: pending → confirmed → completed
- Status transition: pending → cancelled (terminal)
- Status transition: confirmed → returned (terminal)
- Invalid transition: completed → pending (should fail)

**Verify:** `php artisan test --compact --filter=InventoryOrderTest` passes.

---

### Task 55: Create ActivityLogTest

**File:** `tests/Feature/ActivityLogTest.php`

Test cases:
- List activity logs → 200, logs present
- Filter by action → filtered results
- Filter by type → filtered results
- Pagination → correct page count

**Verify:** `php artisan test --compact --filter=ActivityLogTest` passes.

---

### Task 56: Create FinancialTest

**File:** `tests/Feature/FinancialTest.php`

Test cases:
- Create FeeInvoice with valid data → 200/redirect
- Create FeeInvoice with invalid data → 422
- Process PaymentParts → 200/redirect
- Create ExchangeBond → 200/redirect
- Unauthorized operations → 403

**Verify:** `php artisan test --compact --filter=FinancialTest` passes.

---

### Task 57: Run full test suite

```bash
php artisan test --compact
```

Fix any failures until exit code 0.

---

## Phase 8: Cleanup (9 tasks)

### Task 58: Remove EagerLoadingTrait

```bash
rm app/Http/Traits/EagerLoadingTrait.php
```

**Verify:** File removed, `grep -r "EagerLoadingTrait" app/` returns 0 matches.

---

### Task 59: Remove ViewServiceProvider

```bash
rm app/Providers/ViewServiceProvider.php
```

Remove from `config/app.php` line 177.

**Verify:** File removed, no reference in config/app.php.

---

### Task 60: Remove unused pagination templates

```bash
rm resources/views/vendor/pagination/bootstrap-4.blade.php
rm resources/views/vendor/pagination/bootstrap-5.blade.php
rm resources/views/vendor/pagination/default.blade.php
rm resources/views/vendor/pagination/semantic-ui.blade.php
rm resources/views/vendor/pagination/simple-bootstrap-4.blade.php
rm resources/views/vendor/pagination/simple-bootstrap-5.blade.php
rm resources/views/vendor/pagination/simple-default.blade.php
rm resources/views/vendor/pagination/simple-tailwind.blade.php
```

Keep only `tailwind.blade.php`.

**Verify:** `ls resources/views/vendor/pagination/` shows 1 file.

---

### Task 61: Audit models for $fillable/$guarded

Check all models in `app/Models/` for missing `$fillable` or `$guarded` properties. Add if missing.

**Verify:** All models have either `$fillable` or `$guarded`.

---

### Task 62: Run tests after cleanup

```bash
php artisan test --compact
```

**Verify:** Exit code 0.

---

### Task 63: Run route:list smoke test

```bash
php artisan route:list
```

**Verify:** All routes load without errors.

---

### Task 64: Run Pint

```bash
vendor/bin/pint --dirty --format agent
```

**Verify:** Exit code 0.

---

## Parallel Opportunities

| Phase | Parallel Tasks |
|-------|---------------|
| 1 | T1, T2 (sequential — same files) |
| 2 | T4, T6, T7 (independent files) |
| 3 | T10-T15 (create 6 requests — all parallel) |
| 4 | T20-T24 (create 5 services — all parallel) |
| 5 | T36-T43 (create 8 policies — all parallel) |
| 7 | T53-T56 (create 4 tests — all parallel) |
| 8 | T58-T60 (delete files — all parallel) |

## Critical Path

```
Phase 1 (Schedule) ──────────────────────────────────────────────┐
                                                                  │
Phase 2 (Foundation) ──→ Phase 3 (Form Requests) ──→ Phase 4 (Services) ──→ Phase 5 (Security) ──→ Phase 7 (Tests) ──→ Phase 8 (Cleanup)
                                              │
                                              └──→ Phase 6 (Routes)
```

## Estimated Effort

| Phase | Hours |
|-------|-------|
| Phase 1: Schedule Polish | 1-2 |
| Phase 2: Foundation | 2-3 |
| Phase 3: Form Requests | 2-3 |
| Phase 4: Business Logic | 4-5 |
| Phase 5: Security | 3-4 |
| Phase 6: Routes | 1-2 |
| Phase 7: Tests | 2-3 |
| Phase 8: Cleanup | 1-2 |
| **Total** | **16-24** |
