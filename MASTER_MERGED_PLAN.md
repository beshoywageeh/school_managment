# MASTER_MERGED_PLAN.md

## Progress: 29/130 (22%)

### ✅ الموجة 0 — 7/7 Bugs فوري
- [x] **F1** إضافة `pay($id)` و `submit_pay(Request)` في `PaymentPartsController`
- [x] **F2** إصلاح `$status` parameter الناقص في `FinancialService::PaymentParts()`
- [x] **F3** إصلاح `Credit`→`Debit` في `ExchangeBondController::update()` + Constructor injection
- [x] **F4** إصلاح `fee_invoiceController::update()` — `firstOrNew` + `save` بدل `create`
- [x] **F5** `$guarded = []` → `$fillable` في 4 Models
- [x] **F6** `'date'` → `'datetime'` في `ActivityLog.php`
- [x] **F7** تصحيح `$fiillable` → `$fillable` في `promotion.php`

### ✅ الموجة 1 — 9/9 تقارير + ActivityLog
- [x] **R1** إزالة `->pivot` في `clothe_stock.blade.php`
- [x] **R2** إزالة `->pivot` في `book_sheet_stock.blade.php`
- [x] **R3** إزالة `->pivot` + `opening_stock`→`opening_qty` في `stock_product_view.blade.php`
- [x] **R4** إزالة `'pivot.'` في `clothes_stocks.blade.php`
- [x] **R5** إزالة `'pivot.'` في `books_sheets_stocks.blade.php`
- [x] **R6** `orders()`→`orders` + `opening_stock`→`opening_qty` في `stock_product.blade.php`
- [x] **A1** إصلاح `$data['today']` — query منفصل + `clone` للـ total count
- [x] **A2** إضافة `->where('school_id', $school->id)` في `ActivityLogController`
- [x] **A3** تغيير label من `Sidebar.Students`→`log.index.total` + إضافة الترجمة

### ✅ تم سابقاً — 2/2
- [x] **N5** صفحات أخطاء مخصصة (401-503) — Tailwind v4 + Alpine + `<x-hero-icon/>`
- [x] إصلاح 4 syntax errors في `FinancialService.php` (`]);`→`};`)

### ✅ الموجة 2 — فلاتر وإضافات (9/9)
- [x] **F1** إصلاح `self::UNPAID` → `self::NOT_PAID` في `InventoryOrderStatus`
- [x] **F2** إصلاح `...$request` → `$request->validated()` في `GardController::store()`
- [x] **F3** إصلاح references views (form→create_tawreed/create_sarf, gard-form→gard_create/gard_edit)
- [x] **F4** إصلاح `order_number`→`auto_number` و `order_date`→`date` في جميع الـ blades
- [x] **I1-I5** إضافة فلاتر وبحث وترتيب (sort) و per-page لصفحة الأصناف
- [x] **O1-O5** إضافة فلاتر وبحث وترتيب وتحديد نطاق تاريخ لصفحة الأوامر
- [x] **L1** ترجمة الفلاتر (reset_filters)
- [x] **L2** إصلاح `payed`→`paid` و `not_payed`→`not_paid` في lang files
- [x] إصلاح `$allItems`→`$items` في gard_create/gard_edit
- [x] إصلاح `item_id`→`itemable_id` في gard_edit
- [x] تمرير `order_id` في GardController::update() إلى submitGard()
### ⬜ الموجة 3 — Inventory System
### ... باقي الموجات pending
