# Data Model: Code Review Fixes

**Date**: 2026-07-24
**Spec**: [spec.md](spec.md)

## Entities

### User (Modification Only)

No new columns. Only mass-assignment and validation changes.

**`$fillable` addition**:
- `insurance_number` — add to array

**`UserStoreRequest` validation additions** (fields already read by `assignFields()`):

| Field | Rules | Notes |
|-------|-------|-------|
| `worker_type` | `required\|integer` | Maps to `type` column |
| `grade_year` | `nullable\|string\|max:255` | |
| `lesson_count` | `nullable\|integer` | |
| `sepicality` | `nullable\|string\|max:255` | |
| `national_id_expire_date` | `nullable\|date` | |
| `contract_start_date` | `nullable\|date` | |
| `notes` | `nullable\|string` | |
| `ministry_code` | `nullable\|string\|max:255` | |
| `insurance_number` | `required\|numeric\|digits_between:10,14` | Per clarification |

**`UserUpdateRequest` validation additions**:

| Field | Rules | Notes |
|-------|-------|-------|
| `birth_date` | `sometimes\|date` | |
| `date_of_hiring` | `sometimes\|date` | |
| `religion` | `sometimes\|integer` | |
| `gender` | `sometimes\|integer` | |
| `isAdmin` | `sometimes\|boolean` | |
| `login_allow` | `sometimes\|boolean` | |
| `insurance` | `sometimes\|boolean` | |
| `insurance_number` | `sometimes\|numeric\|digits_between:10,14` | |
| `insurance_date` | `sometimes\|date` | |
| `grade_year` | `sometimes\|string\|max:255` | |
| `lesson_count` | `sometimes\|integer` | |
| `sepicality` | `sometimes\|string\|max:255` | |
| `national_id_expire_date` | `sometimes\|date` | |
| `contract_start_date` | `sometimes\|date` | |
| `notes` | `sometimes\|string` | |
| `ministry_code` | `sometimes\|string\|max:255` | |

### FinancialService (No Changes)

No model changes. Namespace standardization only — class remains at `App\Services\Finance\FinancialService`.

### Route Definitions (Method Changes Only)

14 routes change from `Route::get()` to `Route::delete()`. No URI changes. No controller changes needed (destroy methods already exist).

### SecurityHeadersMiddleware (CSP Changes Only)

No model changes. CSP header value updated to remove `unsafe-eval` and add `connect-src`, `font-src`, `frame-src`.

### Orphan Views (Deletion Only)

Remove `resources/views/backend/labs/` directory (4 files). No other changes needed.
