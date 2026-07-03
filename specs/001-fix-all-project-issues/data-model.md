# Data Model: Complete System Repair — Fix All Project Issues

## Entities (Existing — No Changes)

### InventoryItem
Central polymorphic item replacing legacy `stocks`, `clothes`, `book_sheets`.

| Field | Type | Constraints |
|-------|------|-------------|
| `id` | bigInteger, PK | auto-increment |
| `name` | string(255) | required |
| `type` | enum (stock, clothe, book) | required, backed by `InventoryItemType` enum |
| `category` | enum (book, sheet, nullable) | backed by `InventoryItemCategory` enum |
| `school_id` | bigInteger, FK | `exists:schools,id` |
| `grade_id` | bigInteger, FK, nullable | `exists:grades,id` |
| `classroom_id` | bigInteger, FK, nullable | `exists:class_rooms,id` |
| `opening_qty` | numeric, nullable | min:0 |
| `opening_date` | date, nullable | |
| `sell_price` | numeric, nullable | min:0 |
| `cost_price` | numeric, nullable | min:0 |
| `current_stock` | numeric | default:0 |
| `sales_price_set` | numeric, nullable | min:0 |

**Relationships**: `grade()`, `classroom()`, `transactions()` (morphMany via `InventoryTransaction`)

### InventoryOrder
Central polymorphic order replacing legacy order tables.

| Field | Type | Constraints |
|-------|------|-------------|
| `id` | bigInteger, PK | auto-increment |
| `type` | enum (tawreed, sarf, gard) | required, backed by `InventoryOrderType` enum |
| `status` | enum (pending, confirmed, completed, cancelled, returned) | required, backed by `InventoryOrderStatus` enum |
| `school_id` | bigInteger, FK | `exists:schools,id` |
| `user_id` | bigInteger, FK | `exists:users,id` |
| `notes` | text, nullable | |

**State transitions**: `pending→confirmed→completed` (forward). `cancelled` and `returned` are terminal from any non-terminal state.

**Relationships**: `items()` (hasMany via `InventoryOrderItem`), `user()`, `transactions()` (morphMany)

### InventoryOrderItem
Line items on an order (polymorphic).

| Field | Type | Constraints |
|-------|------|-------------|
| `id` | bigInteger, PK | auto-increment |
| `inventory_order_id` | bigInteger, FK | `exists:inventory_orders,id` |
| `item_type` | string | morphs to `InventoryItem` |
| `item_id` | bigInteger | morphs to `InventoryItem` |
| `quantity` | numeric | required, min:1 |
| `price` | numeric, nullable | |

### InventoryTransaction
Polymorphic transaction log for inventory movements.

| Field | Type | Constraints |
|-------|------|-------------|
| `id` | bigInteger, PK | auto-increment |
| `type` | enum | backed by `TransactionType` enum |
| `quantity` | numeric | required |
| `reference_type` | string | morphs to `InventoryOrder` or `InventoryItem` |
| `reference_id` | bigInteger | |
| `subject_type` | string | morphs to `InventoryItem` |
| `subject_id` | bigInteger | |
| `school_id` | bigInteger, FK | |
| `user_id` | bigInteger, FK | |
| `notes` | text, nullable | |

### ActivityLog
Existing audit log (referenced by Phase 4 logging requirement).

| Field | Type |
|-------|------|
| `id` | bigInteger, PK |
| `user_id` | bigInteger, FK |
| `action` | string |
| `description` | string |
| `ip` | string, nullable |
| `user_agent` | string, nullable |
| `school_id` | bigInteger, FK |
| `model_type` | string (morphs) |
| `model_id` | bigInteger (morphs) |

## Entities (To Create — Phase 4)

### DashboardService
*Not a DB entity. Service class extracting analytics from `HomeController`.*

Methods: `getUserRoleCounts()`, `getFinancialData()`, `generateChartData()`, `getMonthlyRevenueTrend()`

### PaymentService
*Not a DB entity. Service class extracting payment processing from `ReciptPaymentController`.*

Methods: payment handlers (~260 lines extracted). Injects logger; mutations write activity log entries.

### StudentQueryService
*Not a DB entity. Service class extracting filter/sort/join logic from `StudentsController::index()`.*

### InvoiceQueryService
*Not a DB entity. Service class extracting dynamic query building from `fee_invoiceController::index()`.*

### UserService
*Not a DB entity. Service class extracting field assignment from `UserController::store()/update()`.*
Injects logger; mutation operations write activity log entries.

## Entities (To Create — Phase 5)

### Policies (8 classes)
Not DB entities. Policy classes mapping to existing spatie/laravel-permission keys:

| Policy | Permission Key Pattern |
|--------|----------------------|
| `StudentPolicy` | `add_student`, `edit_student`, `delete_student` |
| `FeeInvoicePolicy` | `add_fee_invoice`, `edit_fee_invoice`, `delete_fee_invoice` |
| `UserPolicy` | `add_user`, `edit_user`, `delete_user` |
| `InventoryItemPolicy` | `add_inventory`, `edit_inventory`, `delete_inventory` |
| `InventoryOrderPolicy` | `add_inventory_order`, `edit_inventory_order`, `delete_inventory_order` |
| `GradePolicy` | `add_grade`, `edit_grade`, `delete_grade` |
| `ClassPolicy` | `add_class`, `edit_class`, `delete_class` |
| `EmployeePolicy` | employee permissions |

## Database Changes (Migrations — Phase 0 & Cross-cutting)

### Add Indexes (F0.7)
```php
// On student_accounts table
$table->index('type');

// On activity_logs table
$table->index('action');

// On inventory_items table (if not exists)
$table->index('category');
```

### Spelling Fix (F8.1)
Rename columns: `payed` → `paid`, `notpayed` → `not_paid` in relevant tables and lang files.

## Validation Rules (Phase 2 Form Requests)

All Form Requests use array-style validation rules with custom `messages()` returning `trans()` calls.

### New Financial Requests (F2.2)
- **StorePayment / UpdatePayment**: `student_id` exists:students, `amount` required|numeric|min:0, etc.
- **StoreExchangeBond / UpdateExchangeBond**: `student_id` exists:students, `amount` required|numeric|min:0, `type` in:...
- **StoreFeeInvoice / UpdateFeeInvoice**: `list_fees` required|array|min:1, `list_fees.*.student_id` exists:students, `list_fees.*.fee` exists:school_fees (mirror existing `FeeInvoiceRequest`)
