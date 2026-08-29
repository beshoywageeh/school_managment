# Tasks: Deferred Hardening — Track 3

**Input**: Design documents from `specs/013-deferred-hardening-track3/`
**Prerequisites**: plan.md (required), spec.md (required), research.md, data-model.md, contracts/

**Tests**: Included. The project constitution (Automated Testing) and Laravel Boost rules require programmatic tests for every change (PHPUnit feature tests).

**Exactly-once reconciliation with `012-system-hardening-spec`**: This Track 3 wave is the *deferred remainder*. Where an item is already concretely planned in `012-system-hardening-spec/tasks.md`, this file **references** that 012 task ID (`012 T###`) instead of re-planning it; the 013 story still gets an integrated verification task so the outcome is traceable. Full implementation tasks are included only for Track 3-unique work not owned by 012. (See plan.md §Summary and research.md §0.)

**Path conventions**: Laravel root is `/data/projects/laravel_projects/school_managment/app/`. Paths below are relative to that root.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3)
- Include exact file paths in descriptions

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Shared test fixtures, additive migration batch, and small reusable helpers before story work. No feature behavior yet.

- [ ] T001 Create multi-school test fixtures (two schools; non-super-admin user with null school_id; parent with/without linked students; a role to delete) in `app/database/factories/` and `app/tests/TestCase.php`
- [x] T002 Add the export-time CSV-injection escaper helper (`escapeFormulaCell`) in `app/app/Support/CsvInjection.php` with a unit test in `app/tests/Unit/CsvInjectionTest.php`
- [ ] T003 [P] Add an additive migration batch `2026_08_28_*_track3_*.php`: index on `parents.father_name`, reference_type backfill (already scoped in reflective form), and any Track 3-only additive columns — in `app/database/migrations/`
- [ ] T004 [P] Confirm the baseline suite runs green before changes: `php artisan test --compact`

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Core infrastructure that MUST be complete before most user stories. Mirrors 012's shared setup; 013 only adds what is not already planned.

**⚠️ CRITICAL**: No user story work can begin until this phase is complete.

- [ ] T005 [P] Confirm/reuse 012's shared fixtures and exact-decimal helpers (reference `012 T001`/`012 T002`) — no re-implementation; verify they are importable from `app/tests/TestCase.php`
- [ ] T006 [P] Confirm `parents.father_name` index (T003) is the only genuinely missing index; reconcile with `012 T077` so the column is not dropped from either plan — document result in `app/specs/013-deferred-hardening-track3/research.md`
- [ ] T007 [P] Establish a tenant-isolation baseline test for the Track 3 scope (null-school user and parent-count behavior) in `app/tests/Feature/MultiTenancy/TenantIsolationTest.php`

**Checkpoint**: Foundation ready — user story implementation can begin.

---

## Phase 3: User Story 1 - Inventory Stays Consistent and Correct Under Real Use (Priority: P3)

**Goal**: Stock never oversells under concurrency; purchase orders persist as purchases; zero/false item values persist; order↔transaction history resolves. Most core fixes are owned by 012; 013 delivers an integrated verification of the combined four behaviors plus the Track 3 concurrency verification.

**Independent Test**: Concurrent sells never drive stock negative; a `purchases` order is stored as `purchases`; zero price/quantity edits persist; an order's transaction history returns rows (reference resolves).

### Tests for User Story 1

- [ ] T008 [P] [US1] Feature test: concurrent `stockOut` never drives an item's stock negative (relies on `lockForUpdate`; core lock owned by `012 T061`) in `app/tests/Feature/Inventory/Track3_StockConcurrencyTest.php`
- [ ] T009 [P] [US1] Feature test: the four US1 behaviors hold together end-to-end (type preserved + zero-value persist + reference resolves) as one integration scenario in `app/tests/Feature/Inventory/Track3_InventoryEndToEndTest.php`

### Implementation for User Story 1 (reference to 012-owned work)

- [ ] T010 [P] [US1] Confirm/verify owned fixes are implemented by 012 — core lock (`012 T061`), order-type binding (`012 T062`), `pay()` POST+Policy (`012 T063`/`012 T064`), reference class-name mapping (`012 T065`), gard authorize (`012 T066`), zero-value Form Request (`012 T067`) — and that the additive `reference_type` backfill (T003) is present; fix only gap found in `app/app/Services/Inventory/`

**Checkpoint**: US1 complete and testable independently.

---

## Phase 4: User Story 2 - Large Lists Load Quickly and Always Show Current Data (Priority: P3)

**Goal**: Core lists paginated ≤50/page and ≤500ms at p95; dashboard figures cached for reads but invalidated/refreshed on every relevant write (never full-day stale). Pagination + cache-invalidation cores are owned by 012; 013 enforces the p95 SLO and the on-write freshness via tests.

**Independent Test**: Referenced lists return ≤50 rows and respond ≤500ms p95; a fee/accounting write makes the dashboard figure reflect the new data immediately.

### Tests for User Story 2

- [ ] T011 [P] [US2] Feature test (PERF-1): each referenced list (receipts, exchange bonds, promotions, parents) returns ≤50 records/pages; assert the p95 budget on a representative page in `app/tests/Feature/Performance/ListPaginationTest.php`
- [ ] T012 [P] [US2] Feature/unit test (PERF-2): writing a fee/accounting record refreshes the affected school's cached figure (no full-day-stale key persists) in `app/tests/Feature/Performance/CacheFreshnessOnWriteTest.php`

### Implementation for User Story 2 (reference to 012-owned work)

- [ ] T013 [P] [US2] Confirm/verify 012 implements pagination (`012 T076`) and cache invalidation (`012 T078`); add the Track 3 p95 enforcement where relevant in the affected list controllers and `app/app/Services/CacheService.php` (suffix-variant clearing), fixing any gap found

**Checkpoint**: US2 complete and testable independently.

---

## Phase 5: User Story 3 - A Parent's Student Count and School Boundaries Are Always Correct (Priority: P3)

**Goal**: Dashboard parent/student counts derive from the correct linkage (never the nonexistent `parents.student_id`); non-super-admin users (including null-school) never see cross-school data. **SCOPE-1 (parent count) is Track 3-unique**; user-list scoping and null-school handling are owned by 012.

**Independent Test**: A linked parent's count is correct (and 0, not an error, for an unlinked parent); a null-school/non-super-admin user sees no cross-school data.

### Tests for User Story 3

- [x] T014 [P] [US3] Feature test (SCOPE-1): linked parent dashboard count is correct and non-zero; unlinked parent shows 0 with no error in `app/tests/Feature/MultiTenancy/DashboardParentCountTest.php`
- [ ] T015 [P] [US3] Feature test (SCOPE-2/3): dashboard user list is school-scoped and paginated; a null-school non-super-admin user sees no cross-school data in `app/tests/Feature/MultiTenancy/SchoolBoundariesTest.php`

### Implementation for User Story 3

- [x] T016 [US3] Fix `app/app/Services/DashboardService.php` — derive the parent/student count from the correct linkage (join/relationship table), never `parents.student_id`; return 0 (not an error) when a parent has no linked students
- [ ] T017 [P] [US3] Confirm/verify 012 scopes `HomeController::index()` (user list) and null-school handling (`012 T033`/`012 T075`/`012 T032`); add the parent-count fix only if `DashboardService` still leaks; keep behavior consistent in `app/app/Http/Controllers/HomeController.php`

**Checkpoint**: US3 complete and testable independently.

---

## Phase 6: User Story 4 - School Settings and Roles Stay Secure When Administered (Priority: P3)

**Goal**: Settings updates are permission-guarded and school-scoped (no IDOR); role deletion cleans Spatie pivot rows (no orphans). Both cores are owned by 012; 013 adds integrated verification.

**Independent Test**: A user without permission cannot edit settings by guessing a school id; deleting a role leaves no `model_has_roles`/`role_has_permissions` orphans.

### Tests for User Story 4

- [ ] T018 [P] [US4] Feature test (ADMIN-1): settings update without permission (or for another school) is rejected in `app/tests/Feature/MultiTenancy/SettingsPermissionTest.php`
- [ ] T019 [P] [US4] Feature test (ADMIN-2): role deletion leaves no orphaned assignments/permissions in `app/tests/Feature/Quality/RoleCleanupTrack3Test.php`

### Implementation for User Story 4 (reference to 012-owned work)

- [ ] T020 [P] [US4] Confirm/verify 012 guards `SettingsController::update` (`012 T034`) and cleans role pivots on delete (`012 T071`/`012 T080`); fix only gaps found in `app/app/Http/Controllers/SettingsController.php` and `app/app/Http/Controllers/RoleController.php`

**Checkpoint**: US4 complete and testable independently.

---

## Phase 7: User Story 5 - Data Imports Are Reliable and Safe (Priority: P3)

**Goal**: Parents import saves every intended field; uploads validated (presence + type) with clear errors; **export-time** formula-neutralization (CSV-injection safe); reports reflect true outcomes. **Entirely Track 3-unique** (not owned by 012).

**Independent Test**: A parents import persists all intended fields; a missing/invalid upload yields a clear validation message (no crash); a `=cmd` cell exports as inert text; import messages show real counts.

### Tests for User Story 5

- [x] T021 [P] [US5] Feature test (IMP-1): parents import persists every intended field (incl. address/birth-location mapping) to the correct column in `app/tests/Feature/Imports/ParentsImportMappingTest.php`
- [x] T022 [P] [US5] Feature test (IMP-2): student and user imports validate file presence/type and surface a clear message instead of crashing in `app/tests/Feature/Imports/ImportUploadValidationTest.php`
- [ ] T023 [P] [US5] ⚠️ BLOCKED-on-012 Feature test (IMP-3): a cell starting with `=`, `+`, `-`, `@` exports as inert text (export-time escaping) in `app/tests/Feature/Imports/CsvInjectionExportTest.php` — the `StudentsExport`/`ExportStudentsJob` reference a non-existent report view and are reworked by 012; the `CsvInjection::escapeFormulaCell` helper (T002) is delivered and unit-tested as the foundation
- [x] T024 [P] [US5] Feature test (IMP-4): `StudentsController::Excel_Import` displays actual imported/failed counts, never a hardcoded success in `app/tests/Feature/Imports/ImportOutcomeReportTest.php`

### Implementation for User Story 5

- [x] T025 [US5] Fix `app/app/Imports/ParentsImport.php` — align imported columns to `MyParent::$fillable` (map or add `Father_Birth_Location`/address field) and add a row-length/emptiness guard before reading cells
- [x] T026 [P] [US5] Add a Form Request (or validation) requiring `excel` upload (`required|file|mimes:xlsx,xls,csv`) with clear messages for `UserController::Excel_Import` in `app/app/Http/Requests/` and `app/app/Http/Controllers/UserController.php`
- [x] T027 [P] [US5] Ensure `StudentsController::Excel_Import` reports real imported/failed counts (have `StudentImportService` return counts) in `app/app/Http/Controllers/Students/StudentsController.php` and `app/app/Services/Student/StudentImportService.php`
- [ ] T028 [P] [US5] ⚠️ BLOCKED-on-012 Apply `escapeFormulaCell` (T002) at export to every text cell in any CSV/XLSX export path (and any `FromCollection`/`FromView` export added), in `app/app/Exports/` — export path is reworked by 012; helper T002 is ready for use

**Checkpoint**: US5 complete and testable independently.

---

## Phase 8: User Story 6 - Dead Code Cannot Become an Accidental Danger (Priority: P3)

**Goal**: Dormant paths fixed as guardrails before any future activation. **GUARD-1 (ImportStudentsJob keep-disabled + school-scope test) is Track 3-unique**; auto-numbering consolidation is owned by 012.

**Independent Test**: The dormant queued student-import path stays disabled and, if activated, writes only school-scoped rows; the legacy auto-numbering path cannot collide if reactivated.

### Tests for User Story 6

- [x] T029 [P] [US6] Feature/unit test (GUARD-1): `ImportStudentsJob` is not auto-dispatched and, when invoked, school-scopes every row it writes in `app/tests/Feature/Quality/GuardrailImportStudentsJobTest.php`
- [ ] T030 [P] [US6] Feature test (GUARD-2): the legacy `StudentOrderService` numbering delegates to the single provider and cannot collide with the `(school_id, type, auto_number)` scheme in `app/tests/Feature/Inventory/GuardrailOrderNumberingTest.php`

### Implementation for User Story 6

- [x] T031 [US6] Add a school-scope guard to `app/app/Jobs/ImportStudentsJob.php` and keep it unscheduled; the keep-disabled assertion is covered by T029
- [ ] T032 [P] [US6] Confirm/verify 012 consolidates numbering on the single provider (`012 T060`); ensure the legacy path delegates (guardrail) rather than independently numbering, in `app/app/Services/StudentOrderService.php`

**Checkpoint**: US6 complete and testable independently.

---

## Phase 9: User Story 7 - The Codebase Is Maintainable (Priority: P3)

**Goal**: Student creation consolidated to one authoritative path; unused services removed/guarded; naming/enums normalized backward-compatibly; missing indexes added. **MAINT-1 (StudentService) is Track 3-unique**; dead-code removal, naming, and generic indexes are owned by 012.

**Independent Test**: Student creation flows through one authoritative path with no behavior change; the `parents.father_name` index exists; naming changes are backward-compatible with no data loss.

### Tests for User Story 7

- [x] T033 [P] [US7] Feature test (MAINT-1): web-form, repository, and import student creation all produce equivalent persisted students through one path in `app/tests/Feature/Students/StudentCreationConsolidationTest.php`
- [ ] T034 [P] [US7] Feature/unit test (IDX-1): `parents.father_name` is indexed (report via `information_schema`/migration presence) in `app/tests/Feature/Quality/FatherNameIndexTest.php`
- [ ] T035 [P] [US7] Feature/unit test (MAINT-3): normalized naming/enum casts preserve DB values (backward-compat) in `app/tests/Feature/Quality/NamingBackwardCompatTest.php`

### Implementation for User Story 7

- [x] T036 [US7] Introduce a single authoritative `StudentService` creation method (reuse existing repository logic) and make `StudentRepository::storeStudent` and `StudentImport::onRow` delegate to it in `app/app/Services/Student/StudentService.php`, `app/app/Repositories/Eloquent/StudentRepository.php`, `app/app/Imports/StudentImport.php`
- [ ] T037 [P] [US7] Confirm/verify 012 removes genuinely-unused services (`012 T082`) and normalizes enums/casing (`012 T081`/`012 T083`/`012 T084`); keep `parents.father_name` index (T003) consistent with `012 T077`; document in `app/specs/013-deferred-hardening-track3/research.md`

**Checkpoint**: US7 complete and testable independently.

---

## Phase 10: Polish & Cross-Cutting Concerns

**Purpose**: Final normalization and full-suite verification across all Track 3 stories.

- [ ] T038 [P] Run the Track 3 test groups and fix regressions: `php artisan test --compact tests/Feature/Inventory tests/Feature/MultiTenancy tests/Feature/Imports tests/Feature/Performance tests/Feature/Quality tests/Feature/Students`
- [ ] T039 [P] Run full verification: `php artisan test --compact` and `vendor/bin/pint --format agent` in the Laravel root (`/data/projects/laravel_projects/school_managment/app`)
- [ ] T040 [P] Run `php artisan route:list` to confirm settings/inventory routes and resolve any `Vite manifest` errors with `npm run build`
- [ ] T041 [P] Update `app/specs/013-deferred-hardening-track3/` markdown (spec/data-model/research) if implementation surfaced corrections; keep consistency with 012 references

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately.
- **Foundational (Phase 2)**: Depends on Setup — BLOCKS all user stories (fixtures, migration batch, isolation baseline).
- **User Stories (Phase 3+)**:
  - US1 (inventory) depends on 012's inventory tasks (T060–T067) being present; 013 adds verification.
  - US2 (perf) depends on 012's pagination/cache (T076/T078) + Track 3 p95.
  - US3 (tenant) depends on 012's HomeController scoping (T033/T075/T032); SCOPE-1 parent count is independent.
  - US4 (settings/roles) depends on 012 (T034/T071/T080); verification-only in 013.
  - US5 (imports) is independent — the largest Track 3-unique vertical.
  - US6 (guardrails) depends on 012 numbering (T060) for GUARD-2; GUARD-1 is independent.
  - US7 (maintainable) depends on 012 dead-code/naming (T081/T082/T083/T084); MAINT-1 is independent.
- **Polish (Final Phase)**: Depends on all user stories.

### User Story Dependencies

- Each story is independently implementable/testable after Phase 2. US1, US5, and MAINT-1 (US7) do not block one another. Within a story: tests written first (left failing), then Form Requests/helpers, then services, then controllers; story complete before next priority.

### Parallel Opportunities

- All Setup `[P]` and Foundational `[P]` tasks in parallel.
- Once Phase 2 completes: US1 (dev A), US5 (dev B), US3+US4 (dev C), US7 MAINT-1 (dev D) can run in parallel.
- Test tasks within each story run in parallel. T026/T027/T028 (imports) run in parallel after T025/T021–T024.

---

## Parallel Example: User Story 5 (the Track 3-unique vertical)

```bash
# Launch all US5 tests together:
Task: "Feature test: parents import mapping (IMP-1)"
Task: "Feature test: upload validation (IMP-2)"
Task: "Feature test: CSV-injection export escaping (IMP-3)"
Task: "Feature test: true import outcome report (IMP-4)"

# Then implementation in parallel:
Task: "Fix ParentsImport fillable mapping + row guard"
Task: "Add excel upload Form Request for UserController"
Task: "Report real counts from StudentImportService"
Task: "Apply escapeFormulaCell at export"
```

---

## Implementation Strategy

### MVP First (User Story 5 — the highest net-new value)

1. Phase 1: Setup (fixtures, CSV escaper helper, migration batch).
2. Phase 2: Foundational (isolation baseline).
3. Phase 7: User Story 5 (imports — entirely Track 3-unique, highest independent value).
4. **STOP and VALIDATE**: run US5 tests; confirm imports save all fields, validate uploads, escape formulas at export, and report true counts.

### Incremental Delivery

1. Setup + Foundational → foundation ready.
2. US5 (imports) → test → deploy/demo (MVP).
3. US1 (inventory verification over 012) → test.
4. US2 (perf p95 + cache) → test.
5. US3 (parent count + boundaries) → test.
6. US4 (settings/roles verification) → test.
7. US6 (guardrails) → test.
8. US7 (StudentService consolidation) → test.
9. Polish → full verify.

### Parallel Team Strategy

- Team completes Setup + Foundational together.
- Dev A: US5 (imports). Dev B: US1 + US2 (inventory/perf). Dev C: US3 + US4 (tenant/security verification against 012). Dev D: US6 + US7 (guardrails + StudentService). Each integrates independently; 012-owned items are verified, not re-implemented.

---

## Notes

- [P] tasks = different files, no dependencies.
- [Story] label maps tasks to a user story for traceability.
- Each user story is independently completable and testable.
- Verify tests fail before implementing.
- Commit after each task or logical group.
- Run `vendor/bin/pint --format agent` before finalizing code changes per Laravel Boost rules.
- Reconciliation: this file assigns exactly-once all Track 3 work — 012-owned items are referenced (`012 T###`), Track 3-unique items are fully specified here (SCOPE-1, US5 imports, MAINT-1, GUARD-1 keep-disabled test, PERF-1 p95 enforcement).

---

## Phase 11: Convergence

**Purpose**: Close gaps between the Track 3 spec/plan/tasks and the current codebase, surfaced by the `/speckit.converge` assessment (2026-08-29). Where an item is referenced as 012-owned (`012 T###`), the task reconciles so work is assigned exactly once; otherwise it is Track 3 net-new remaining work.

**Ordering**: CRITICAL/HIGH first; each item traces to its source requirement and gap type.

- [x] T042 CRITICAL [US4] Refactor `RoleController::destroy` to delete the role and its Spatie pivot rows through Eloquent relationships/`detach`/`sync` (cleaning `model_has_roles` and `role_has_permissions`) instead of raw `DB::table('roles')->where('id', $id)->delete()`, adding a test that no orphaned assignment/permission rows remain, per FR-ADMIN-2 / US4 `T019` (contradicts; also a Constitution I raw-SQL violation) in `app/app/Http/Controllers/RoleController.php` and `app/tests/Feature/Quality/RoleCleanupTrack3Test.php`
- [x] T043 [US1] Make `InventoryTransactionService::stockOut` atomic by row-locking the `InventoryItem` (`lockForUpdate()` inside `DB::transaction`) before checking available quantity and deducting, so concurrent sells cannot oversell, per FR-INV-1 / US1 `T008` (missing) in `app/app/Services/Inventory/InventoryTransactionService.php` and `app/tests/Feature/Inventory/Track3_StockConcurrencyTest.php`
- [x] T044 [US1] Fix `InventoryItemService::updateItem` to persist zero/false item values (price, quantity/`current_stock`, `is_active`) by applying presence-based assignment (`array_key_exists`) instead of `array_filter`/`??` which drops falsy values, per FR-INV-3 / US1 `T009` (contradicts) in `app/app/Services/Inventory/InventoryItemService.php`
- [x] T045 [US4] Guard `SettingsController::update` with the settings permission and the acting school scope so a user cannot edit another school's settings by guessing an id (IDOR), per FR-ADMIN-1 / US4 `T018` (contradicts); reconcile with `012 T034` in `app/app/Http/Controllers/SettingsController.php` and `app/tests/Feature/MultiTenancy/SettingsPermissionTest.php`
- [x] T046 [US7] Add the additive `2026_08_28_*_track3_*` migration that indexes `parents.father_name` (and any other Track 3-only additive columns), per FR-IDX-1 / `T003` (missing); reconcile with `012 T077` so the column/index is not dropped from either plan; add `tests/Feature/Quality/FatherNameIndexTest.php` (`T034`) in `app/database/migrations/`
- [x] T047 [P] [US1/US2/US3/US4] Create the shared multi-school test fixtures (two schools; non-super-admin user with null `school_id`; parent with/without linked students; a role to delete) and a tenant-isolation baseline test, per `T001`/`T005`/`T007` (missing) in `app/database/factories/`, `app/tests/TestCase.php`, and `app/tests/Feature/MultiTenancy/TenantIsolationTest.php`
- [x] T048 [P] [US2] Add PERF-1 enforcement + PERF-2 tests: assert core lists (receipts, exchange bonds, promotions, parents) return ≤50 records per page with the p95 budget, and that a fee/accounting write refreshes the affected school's cached figure, per FR-PERF-1/PERF-2 / `T011`/`T012`/`T013` (missing; reconcile with `012 T076`/`012 T078`) in `app/tests/Feature/Performance/ListPaginationTest.php` and `app/tests/Feature/Performance/CacheFreshnessOnWriteTest.php`
