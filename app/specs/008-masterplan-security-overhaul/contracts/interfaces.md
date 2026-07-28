# Contracts: Masterplan Security & Quality Overhaul

**Date**: 2026-07-27

## Overview

This overhaul fixes existing interfaces rather than creating new ones. The contracts below document the corrected behavior that callers can rely on.

## API Route Method Contracts

All destroy routes MUST use HTTP DELETE. All payment routes MUST use POST/PATCH.

| Resource | Current Method | Correct Method | Route File |
|----------|---------------|---------------|-----------|
| Backup delete | GET | DELETE | `routes/security.php` |
| Student force-delete | GET | DELETE | `routes/student.php` |
| Student restore | GET | DELETE | `routes/student.php` |

## Form Request Contracts

New validation classes required:

| Controller | Method | New Request Class | Required Fields |
|-----------|--------|------------------|----------------|
| `PromotionController` | `store()` | `StorePromotionRequest` | student_id, from_class, to_class, academic_year_id |
| `InventoryGardController` | `update()` | `UpdateInventoryGardRequest` | item_id, quantity, type |

## Service Method Signatures (Corrected)

### FinancialService::Fund_Account()

```
Correct signature: Fund_Account($school, $exchange, $Credit, $Debit, $receipt)
```

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `$school` | School model | Yes | Current school |
| `$exchange` | float/null | No | Exchange amount (default: null) |
| `$Credit` | float | Yes | Credit amount (increases balance) |
| `$Debit` | float | Yes | Debit amount (decreases balance) |
| `$receipt` | int/null | No | Receipt payment ID |

**Callers must NOT pass receipt ID as `$Debit`.**

### FinancialService::CreateStudentAccount()

```
Correct signature: CreateStudentAccount($student, $fee_invoices_id, $acc_year, $type, $debit, $credit)
```

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `$student` | Student model | Yes | Student record |
| `$fee_invoices_id` | int | Yes | FeeInvoice ID (NOT school_fee ID) |
| `$acc_year` | string/int | Yes | Academic year ID |
| `$type` | string | Yes | Transaction type ('invoice', 'payment') |
| `$debit` | float | Yes | Debit amount |
| `$credit` | float | Yes | Credit amount |

**Called exactly once per fee invoice creation (inside FeeInvoice service method).**

## School Scope Contract

Models using `BelongsToSchool` trait are automatically filtered by `school_id` for non-admin users. Admin users bypass this filter.

| Model | Has BelongsToSchool | Needs Explicit Filter (Admin Context) |
|-------|--------------------|--------------------------------------|
| `PaymentParts` | Yes | Yes — for admin views |
| `ExceptionFees` | Yes | Yes — for admin views |
| `Grade` | Yes | Yes — for dropdowns in admin context |
| `MyParent` | Yes | Yes — for dropdowns in admin context |
| `ClassRoom` | Yes | Yes — for dropdowns in admin context |
| `InventoryItem` | Yes | Yes — for reports in admin context |
| `User` | Yes | Intentional — super-admin panel |

## Rate Limiting Contract

| Endpoint Type | Rate Limit | Window |
|--------------|-----------|--------|
| API routes (all) | 60 requests | Per minute per authenticated user |
| Backup creation | 1 request | Per 5 minutes per user |

## Static Analysis Contract

Larastan must pass at level 5 with zero errors. Baseline file `phpstan-baseline.neon` may be used for pre-existing issues only — new code must be clean.
