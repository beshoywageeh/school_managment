# Requirements Checklist: 008-masterplan-security-overhaul

**Feature**: 008-masterplan-security-overhaul
**Generated**: 2026-07-26
**Source**: spec.md

## FR Coverage Summary

| FR | Requirement | Task ID(s) | Covered |
|----|-------------|------------|---------|
| FR-001 | .env removal from git history | Manual step (T004 partial) | P |
| FR-002 | .gitignore includes .env | T004 | Y |
| FR-003 | Password change updates existing record | T006 | Y |
| FR-004 | School filtering in controllers | T008–T014 | Y |
| FR-005 | API auth:sanctum | T015 | Y |
| FR-006 | API Policy/Gate checks | T016 | Y |
| FR-007 | API rate limiting (60/min) | T017 | Y |
| FR-008 | Remove isAdmin/school_id from $fillable | T005 | Y |
| FR-009 | Static analysis (Larastan) | T001–T003 | Y |
| FR-010 | Fix $stuudent typo | T019 | Y |
| FR-011 | Fix fees collection access | T020 | Y |
| FR-012 | Fix parent deletion condition | T021 | Y |
| FR-013 | Fix Fund_Account credit/debit | T029 | Y |
| FR-014 | Fix double CreateStudentAccount | T030 | Y |
| FR-015 | Standardize status values | T023–T024 | Y |
| FR-016 | Fix scopeActive() | T032 | Y |
| FR-017 | Fix broken relationships | T025–T028 | Y |
| FR-018 | Accounting reversal on delete | T031 | Y |
| FR-019 | Fix generateAutoNumber race condition | T033 | Y |
| FR-020 | Convert GET destroy to DELETE | T035–T037 | Y |
| FR-021 | Sanitize backup path | T039 | Y |
| FR-022 | CSRF + rate limit on backups | T040 | Y |
| FR-023 | Fix XSS ({!! !!} → {{ }}) | T038 | Y |
| FR-024 | Escape flash messages in JS | T042 | Y |
| FR-025 | Remove AdminIpWhitelist | T007 | Y |
| FR-026 | Route ordering | N/A (confirmed non-issue) | N/A |
| FR-027 | FormRequest validation | T043–T046 | Y |
| FR-028 | DB::transaction for schedules | T048 | Y |
| FR-029 | Schedule authorization | T051 | Y |
| FR-030 | Schedule #[Computed] properties | T050 | Y |
| FR-031 | Schedule load balancing | T056 | Y |
| FR-032 | Replace $listeners with #[On] | T049 | Y |
| FR-033 | Fix ReportController final_year | T052 | Y |
| FR-034 | Report validation/authorization | T053 | Y |
| FR-035 | Use ReportService | T055 | Y |
| FR-036 | Extract large report methods | T055 | Y |
| FR-037 | Consolidate stock-report logic | T054 | Y |
| FR-038 | Queue backup creation | T057–T058 | Y |
| FR-039 | Backup rate limiting + active protection | T040–T041 | Y |
| FR-040 | Activity log wildcard escaping | T059 | Y |
| FR-041 | Activity log null school_id | T060 | Y |
| FR-042 | Activity log authorization | T061 | Y |
| FR-043 | Activity log redundant today() | T062 | Y |
| FR-044 | Fix N+1 eager loading | T064–T067 | Y |
| FR-045 | Replace DB::table() with Eloquent | T068–T071 | Y |
| FR-046 | Remove redundant ->first() | T072 | Y |
| FR-047 | Fix collection re-filtering | T073 | Y |
| FR-048 | Add missing indexes | T075 | Y |
| FR-049 | Decompose god classes | T077–T078 | Y |
| FR-050 | Remove SchoolTrait from services | T079 | Y |
| FR-051 | Domain exceptions | T076 | Y |
| FR-052 | Tests pass + new tests | T085–T087 | Y |
| FR-053 | Rename model files PSR-4 | T080 | Y |
| FR-054 | Fix plural belongsTo names | T081 | Y |
| FR-055 | Fix relationship typos | T082 | Y |
| FR-056 | Fix empty SchoolScope | T083 | Y |

## SC Coverage Summary

| SC | Success Criterion | Validation Method | Covered |
|----|-------------------|-------------------|---------|
| SC-001 | No IDOR vulnerabilities | V1 | Y |
| SC-002 | Financial data accuracy | V2, V3 | Y |
| SC-003 | No XSS vulnerabilities | V4 | Y |
| SC-004 | No SQL injection vectors | V5 | Y |
| SC-005 | Clean Larastan baseline | T001–T003 | Y |
| SC-006 | Clean Pint formatting | All T* run Pint | Y |
| SC-007 | All existing tests pass | T085 | Y |
| SC-008 | Multi-tenancy enforced | V1, T086 | Y |
| SC-009 | Financial reversals correct | V2, T087 | Y |
| SC-010 | Authorization enforced | V3, T051, T053 | Y |
| SC-011 | API secured with Sanctum | V5 | Y |
| SC-012 | Backups queued | V6 | Y |
| SC-013 | Activity log secure | V7 | Y |
| SC-014 | Performance improved | V8 | Y |

## Priority Summary

| Priority | FR Count | Task Count |
|----------|----------|------------|
| P0 (Critical) | 15 | 42 |
| P1 (High) | 20 | 35 |
| P2 (Medium) | 15 | 13 |
| N/A | 6 | 0 |
| **Total** | **56** | **90** |
