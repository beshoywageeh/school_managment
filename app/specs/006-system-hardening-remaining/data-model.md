# Data Model: System Hardening — Remaining Tasks

> Generated: 2026-07-23
> Spec: `specs/006-system-hardening-remaining/spec.md`

---

## Overview

This spec does not introduce new entities. It hardens existing entities by adding validation, authorization, and consistent conventions. Below are the existing entities relevant to the hardening tasks.

## Existing Entities (Relevant to Scope)

### Form Request (New — 14 classes)

| Request Class | Controller | Fields Validated | Authorization |
|---------------|-----------|-----------------|---------------|
| ClassRoomStoreRequest | ClassRoomsController | classroom fields | `ClassRooms-create` |
| ClassRoomUpdateRequest | ClassRoomsController | classroom fields | `ClassRooms-edit` |
| ClassStoreRequest | ClassesController | class fields | `Classes-create` |
| ClassUpdateRequest | ClassesController | class fields | `Classes-edit` |
| ReceiptPaymentStoreRequest | ReceiptPaymentController | receipt payment fields | `receipt-payment-create` |
| ReceiptPaymentUpdateRequest | ReceiptPaymentController | receipt payment fields | `receipt-payment-edit` |
| ExceptionFeeStoreRequest | ExceptionFeesController | exception fee fields | `exception-fees-create` |
| ExceptionFeeUpdateRequest | ExceptionFeesController | exception fee fields | `exception-fees-edit` |
| UserStoreRequest | UserController | user fields | `Users-create` |
| UserUpdateRequest | UserController | user fields | `Users-edit` |
| RoleStoreRequest | RoleController | role fields | `roles-create` |
| RoleUpdateRequest | RoleController | role fields | `roles-edit` |
| JobStoreRequest | JobController | job fields | `jobs-create` |
| JobUpdateRequest | JobController | job fields | `jobs-edit` |

### Policy (Modified — 8 classes)

All 8 existing policies are modified to remove the deprecated `HandlesAuthorization` trait:

| Policy | Model | Permissions Checked |
|--------|-------|-------------------|
| StudentPolicy | Student | Students-list, Students-create, Students-edit, Students-delete |
| FeeInvoicePolicy | FeeInvoice | FeeInvoice-list, FeeInvoice-create, FeeInvoice-edit, FeeInvoice-delete |
| UserPolicy | User | Users-list, Users-create, Users-edit, Users-delete |
| InventoryItemPolicy | InventoryItem | InventoryItem-list, InventoryItem-create, InventoryItem-edit, InventoryItem-delete |
| InventoryOrderPolicy | InventoryOrder | InventoryOrder-list, InventoryOrder-create, InventoryOrder-edit, InventoryOrder-delete |
| GradePolicy | Grade | Grades-list, Grades-create, Grades-edit, Grades-delete |
| ClassPolicy | Class | Classes-list, Classes-create, Classes-edit, Classes-delete |
| EmployeePolicy | Employee | Employee-list, Employee-create, Employee-edit, Employee-delete |

### Config (New — 1 file)

`config/school.php` — centralized configuration for hardcoded values:

```php
return [
    'currency' => env('SCHOOL_CURRENCY', 'EGP'),
    'academic_year_status' => env('SCHOOL_ACADEMIC_YEAR_STATUS', '0'),
    'per_page' => env('SCHOOL_PER_PAGE', 10),
];
```

## Relationships

No new relationships are introduced. Existing relationships remain unchanged:

- Student belongsTo Grade, ClassRoom, User
- FeeInvoice belongsTo Student, SchoolFee
- ClassRoom belongsTo Grade
- ReceiptPayment belongsTo Student
- InventoryItem hasMany InventoryOrderItem
- InventoryOrder hasMany InventoryOrderItem

## State Transitions

No new state machines are introduced. Existing state transitions remain unchanged.

## Validation Rules (New Form Requests)

Each new Form Request follows the existing pattern:
- `authorize()`: Check permission using `$this->user()->can('{entity}-{action}')`
- `rules()`: Field-specific validation rules (required, exists, numeric, etc.)
- `messages()`: Translatable error messages using `trans()` helper
