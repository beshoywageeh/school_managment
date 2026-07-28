# Quickstart Validation Guide

**Date**: 2026-07-27
**Spec**: [spec.md](./spec.md)

## Prerequisites

- PHP 8.5+ with all extensions
- MySQL/MariaDB running
- `.env` configured with database credentials
- `composer install` completed
- `npm install && npm run build` completed
- Database migrated: `php artisan migrate`

## Validation Scenarios

### V1: Git History Clean (FR-001, SC-001)

```bash
# After history rewrite
git log --all --diff-filter=A -- '*.env' '.env'
# Expected: No results

# Verify .env is gitignored
git check-ignore .env
# Expected: .env
```

### V2: School Scope Filtering (FR-004, SC-002)

```bash
# Login as non-admin user from School A
# Navigate to Students index — should only see School A students
# Navigate to Fee Invoices — should only see School A invoices
# Navigate to Activity Log — should only see School A entries

# Attempt to access School B data via URL manipulation
# Expected: Empty results or 403
```

### V3: Password Change (FR-003, SC-003)

```bash
# Login as any user
# Change password via Settings
# Logout
# Login with new password — should succeed
# Login with old password — should fail
```

### V4: API Authentication (FR-005/006/007, SC-004)

```bash
# Unauthenticated request to any API endpoint
curl -s -o /dev/null -w "%{http_code}" http://localhost/api/grades
# Expected: 401

# Authenticated request
curl -s -H "Authorization: Bearer {token}" http://localhost/api/grades
# Expected: 200

# Rate limit test (61st request in 1 minute)
# Expected: 429 Too Many Requests
```

### V5: Financial Accuracy (FR-013/014/015, SC-006/007)

```bash
# Create a fee invoice for a student
# Verify student_account has exactly ONE entry with correct debit
# Verify fund_account Credit reflects the invoice amount
# Check status values in database
php artisan tinker --execute="
    echo DB::table('fee_invoices')->where('status','unpaid')->count();
"
# Expected: 0 (all migrated to 'not_paid')
```

### V6: XSS Prevention (FR-023, SC-010)

```bash
# In admin settings, set heading_right to: <script>alert('xss')</script>
# Navigate to Student show page
# View page source
# Expected: &lt;script&gt;alert('xss')&lt;/script&gt; (escaped)
```

### V7: Destroy Routes (FR-020, SC-009)

```bash
# Check all destroy routes use DELETE method
php artisan route:list --columns=method,uri | grep -E "DELETE|GET.*destroy|GET.*delete|GET.*forceDelete"
# Expected: Only DELETE methods for destructive operations
```

### V8: Schedule Transaction (FR-028, SC-008)

```bash
# Trigger schedule auto-generation
# If it fails midway, verify database rolled back
php artisan tinker --execute="
    echo DB::table('schedules')->count();
"
# Expected: Count matches pre-generation state
```

### V9: N+1 Query Fix (FR-044, SC-011)

```bash
# Enable query logging in .env: DB_LOG_QUERY=true
# Visit pages with related data (Students index, Fee Invoices)
# Check logs for N+1 patterns
# Expected: ≤5 queries per page regardless of data volume
```

### V10: Static Analysis (FR-009, SC-014)

```bash
vendor/bin/phpstan analyse --level=5
# Expected: 0 errors
```

### V11: Code Style (Global Constraint)

```bash
vendor/bin/pint --dirty --format agent
# Expected: No changes needed (code already formatted)
```

### V12: Test Suite (FR-052, SC-013)

```bash
php artisan test --compact
# Expected: All tests pass
```
