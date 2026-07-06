# Specification Analysis Report: UI Redesign & Migration

**Analysis Date**: 2026-07-06
**Scope**: spec.md, plan.md, tasks.md

---

## Findings

| ID | Category | Severity | Location | Summary | Recommendation |
|----|----------|----------|----------|---------|----------------|
| I1 | Inconsistency | MEDIUM | plan.md:98-102, tasks.md:77-82 | Plan lists Card.php, StatusBadge.php, Button.php as Livewire components under `app/Http/Livewire/Components/UI/`, but tasks and contracts treat them as Blade-only (`x-ui.*`) with no server state. Plan also lists `livewire/ui/card.blade.php` unnecessarily. | Remove Livewire component classes and views for Card, StatusBadge, and Button from plan.md project structure tree — they are Blade-only components. |
| I2 | Coverage Gap | MEDIUM | spec.md:203-206 (FR-014), tasks.md:192-193 (T056-057) | FR-014 requires expired session detection + friendly message + redirect to login. T056 (loading states) and T057 (error/empty states) are generic and don't explicitly address session expiry. Livewire handles session timeouts differently than the existing Axios interceptor in app.js. | Add a task under Polish phase: "Implement Livewire session expiry handling — catch 401/419 in Livewire lifecycle hooks, show toast, redirect to login." |
| I3 | Coverage Gap | MEDIUM | plan.md:48-50 (Principle IV) | Principle IV (Service Layer) notes that "existing backend controllers may need lightweight adjustments" for Livewire compatibility, but no task explicitly calls this out. T032/T038 (PoC migrations) imply it but don't name the service layer work. | Add a Foundational task: "Audit existing controllers used by PoC migration pages — wrap queries in Service classes where missing, ensure Livewire-compatible data access." |
| I4 | Underspecification | LOW | tasks.md:83 (T025), 109 (T032), 133 (T038), 176 (T049) | PoC migration targets use "e.g." phrasing ("e.g., treasuries list", "e.g., bank account detail"). Which specific pages to migrate first is undeclared. | Resolve during implementation — pick the most representative module. |
| I5 | Underspecification | LOW | tasks.md:192 (T056) | "loading skeletons/spinners" — skeletons and spinners are different patterns. Not specified which approach each component should use. | Use consistent `wire:loading` spinner for DataTable; skeleton placeholders for cards/KPIs. |
| I6 | Ambiguity | LOW | tasks.md:34 (T002) | "Cairo or Tajawal" — two font options, no decision. | Both are fine; pick Cairo for broader character support. |
| I7 | Gap | LOW | spec.md:235-236 (SC-003), 239-240 (SC-005) | SC-003 (<2s initial load, <1s tab switch) and SC-005 (<1s inline action) define performance targets but no task establishes a benchmark or performance test. | Acceptable as soft targets; add a Polish task if automated perf testing is desired. |

---

## Coverage Summary

| Requirement Key | Has Task? | Task IDs | Notes |
|-----------------|-----------|----------|-------|
| FR-001 (consistent layout) | ✅ | T005, T006, T007, T008, T009, T010, T011, T012, T013, T024, T025, T050 | Well-covered |
| FR-002 (nav active highlight) | ✅ | T006, T008, T010 | Covered |
| FR-003 (topbar RTL + actions) | ✅ | T007, T009, T011, T019 | Covered |
| FR-004 (table sort/filter/page) | ✅ | T026, T027, T028, T029, T030, T031, T032 | Well-covered |
| FR-005 (table states) | ✅ | T026, T027, T028, T029, T056, T057 | Covered |
| FR-006 (detail record header) | ✅ | T033, T034, T035, T036, T038, T052 | Covered |
| FR-007 (tabs on-demand) | ✅ | T017, T022, T023, T033, T034, T036, T037, T038, T052 | Well-covered |
| FR-008 (status badge colors) | ✅ | T001, T015, T020 | Covered |
| FR-009 (modal from page) | ✅ | T016, T021 | Covered |
| FR-010 (responsive breakpoints) | ✅ | T043, T044, T045, T039, T040, T042 | Covered |
| FR-011 (mobile sidebar) | ✅ | T013, T039, T041, T045 | Covered |
| FR-012 (inline row actions) | ✅ | T046, T047, T048, T049, T053 | Covered |
| FR-013 (dashboard) | ✅ | T054, T055 | Polish phase |
| FR-014 (session expiry) | ❌ | — | **Gap** — see I2 |
| FR-015 (RTL rendering) | ✅ | T001, T002, T004 | Covered |
| SC-001 (layout consistency) | ✅ | T005, T006, T024, T025, T050, T058 | Covered |
| SC-002 (sort/filter <10s) | ✅ | T026, T028, T031, T032, T051 | Covered |
| SC-003 (detail <2s, tab <1s) | ❌ | — | **Gap** — no perf benchmark task |
| SC-004 (375px no scroll) | ✅ | T039, T040, T041, T042, T043, T044, T045 | Well-covered |
| SC-005 (inline <1s) | ✅ | T046, T047, T049 | Covered (no perf benchmark) |
| SC-006 (no Bootstrap/jQuery) | ✅ | T060, T061, T062, T063 | Covered |
| SC-007 (Arabic font + RTL) | ✅ | T002, T058 | Covered |

---

## Constitution Alignment Issues

| Principle | Status | Notes |
|-----------|--------|-------|
| I — Clean Code & Convention | ✅ | T064 covers Pint formatting; Blade components use proper props/slots |
| II — Simple UX & Responsive | ✅ | All phases use Livewire 4 + Alpine + Tailwind v4 with @theme. No violations. |
| III — Minimal Dependencies | ✅ | No new packages required. ApexCharts (already installed) used instead of Chart.js. |
| IV — Service Layer Architecture | ⚠️ | See I3 — no explicit task for Livewire-compatible controller/ service layer adjustments |
| V — Automated Testing | ✅ | Tests for every user story (T014-T017, T026-T027, T033-T034, T039-T040, T046) |
| Incremental Refactoring | ✅ | T060-T062 handle legacy deletion AFTER migration confirmed |

---

## Unmapped Tasks

All 66 tasks map to at least one FR or SC. No unmapped tasks.

---

## Metrics

| Metric | Value |
|--------|-------|
| Total Functional Requirements | 15 |
| Total Success Criteria | 7 |
| Total Requirements (FR + SC) | 22 |
| Total Tasks | 66 |
| Coverage (requirements with ≥1 task) | 20/22 (91%) |
| Ambiguity Count | 3 |
| Duplication Count | 0 |
| Inconsistency Count | 1 |
| Critical Issues | 0 |
| High Issues | 0 |
| Medium Issues | 3 |

---

## Next Actions

**No CRITICAL issues found.** The plan is ready to proceed.

Medium-severity items to consider before `/speckit.implement`:

1. **I1** — Fix plan.md project structure (remove Card/StatusBadge/Button Livewire entries)
2. **I2** — Add session expiry handling task to Polish phase
3. **I3** — Add service layer audit task to Foundational phase

Would you like me to suggest concrete remediation edits for these 3 issues?
