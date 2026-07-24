# iSchool Management System — Remaining Tasks

> Generated from `docs/unified-master-plan.md`
> **Last reviewed**: July 23, 2026
> **Removed**: 26 completed items

---

## Phase 1 — Schedule Polish

- [ ] **T03** Run verification: `php artisan view:clear && cache:clear`, verify routes, pint, test suite

---

## Phase 2 — Foundation (~1.5h)

- [ ] **T004** Configure queue worker: create Supervisor config for `logs` queue OR document cron alternative
- [ ] **T011** Document cron setup: `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1`
- [ ] **T022** Add `school_id` scoping validation to all Form Requests where applicable

---

## Phase 3 — Form Requests: Missing (~1.5h)

Still using `Request $request` instead of Form Requests:
- [ ] **T027** Create Form Request for `ClassRoomsController` (store/update use raw Request)
- [ ] **T028** Create Form Request for `ClassesController` (store/update use raw Request)
- [ ] **T029** Create Form Request for `ReceiptPaymentController` (store/update use raw Request)
- [ ] **T030** Create Form Request for `ExceptionFeesController` (store/update use raw Request)
- [ ] **T031** Create Form Request for `UserController` (store/update use raw Request)
- [ ] **T032** Create Form Request for `RoleController` (store/update use raw Request)
- [ ] **T033** Create Form Request for `JobController` (store/update use raw Request)

---

## Phase 5 — Security: Authorization Integration (~1h)

- [ ] **T047** Register `EmployeePolicy` in `AuthServiceProvider` `$policies` array (7 of 8 done, EmployeePolicy missing)
- [ ] **T048** Add `$this->authorize()` calls to `ClassesController` actions (all other controllers done)
- [ ] **T059** Remove deprecated `HandlesAuthorization` trait from all 8 policies

---

## Phase 6 — Routes: Convention Cleanup (~1.5h)

- [ ] **T052** Move `/{type}` catch-all to END of orders group in `routes/inventory.php` (items group already fixed)
- [ ] **T055** Convert `POST /update` → `PUT /{id}` patterns (13 occurrences across 6 route files)
- [ ] **T056** Convert snake_case URL segments → kebab-case across all route files (20+ occurrences)

---

## Phase 7 — Tests: Missing Coverage (~2.5h)

- [ ] **T058** `ReceiptPaymentController`
- [ ] **T059b** `ExchangeBondController`
- [ ] **T059c** `ExceptionFeesController`
- [ ] **T059d** `PaymentPartsController`
- [ ] **T059e** All 8 Policies (zero tests currently)

---

## Phase 8 — Cleanup

- [ ] **T071** Run `php artisan test --compact` after cleanup
- [ ] **T072** Run `php artisan route:list` smoke test

---

## Code Quality (from `analysis.md`)

- [ ] **CQ01** Fix naming: `promotionController` → `PromotionController`
- [ ] **CQ02** Fix naming: `fund_accountsController` → `FundAccountsController`
- [ ] **CQ03** Fix naming: `schedulesController` → `SchedulesController`
- [ ] **CQ04** Add rate limiting on web routes
- [ ] **CQ05** Fix hardcoded `'EGP'` currency → config value (7 occurrences)
- [ ] **CQ06** Fix hardcoded `AcademicYear::where('status', '0')` → config (7 occurrences)
- [ ] **CQ07** Fix `where('status', 'false')` string → proper boolean (StudentsController line 114)
- [ ] **CQ08** Fix hardcoded `->paginate(10)` → config or variable (10+ occurrences)

---

## Translation Keys

- [ ] **Namespace mismatches**: Fix 5 mismatches (grade→Grades, classrooms→class_rooms, fee_invoices→fee_invoice, receipt→Recipt_Payments, FundAccount→fund_account)
- [ ] **HomeController**: Namespace 16 plain-text keys to namespaced keys

---

## UI Verification (manual testing)

- [ ] Keyboard navigation testing
- [ ] ARIA attribute verification across components
- [ ] Mobile breakpoint testing
- [ ] Performance testing (bundle size, load times)
- [ ] RTL layout verification
- [ ] Dark mode verification
- [ ] Focus management testing
- [ ] Screen reader compatibility
- [ ] Print stylesheet testing
- [ ] Browser compatibility testing

---

## Highest-Impact Items (Do First)

1. **T047/T048/T059** — Policy registration + authorization + trait cleanup (security)
2. **CQ07** — Fix boolean string comparisons (data integrity)
3. **CQ04** — Rate limiting on web routes (security)
4. **CQ01-CQ03** — Controller naming fixes (code quality)
