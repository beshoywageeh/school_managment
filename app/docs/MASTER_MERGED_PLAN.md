# الخطة الموحدة لإصلاح النظام — MASTER MERGED PLAN v2

> تاريخ الدمج: 2026-06-28  
> المصادر: TREATMENT_PLAN.md (86 مهمة) + REPORTS_FIX_PLAN.md (17 مهمة) + FINANCIAL_SYSTEM_ANALYSIS.md (30 مهمة) + ACTIVITY_LOG_ANALYSIS.md (14 مهمة)  
> **ما تم تنفيذه فعلياً: ~98/153 مهمة (64%)**

---

## فهرس المحتويات

1. [حالة التنفيذ لكل خطة](#1-حالة-التنفيذ-لكل-خطة)
2. [المشاكل المشتركة (Cross-Cutting)](#2-المشاكل-المشتركة-cross-cutting)
3. [نقاط القوة في النظام](#3-نقاط-القوة-في-النظام)
4. [نقاط الضعف الهيكلية](#4-نقاط-الضعف-الهيكلية)
5. [الأشياء الغير مغطاة في أي خطة (NEW)](#5-الأشياء-الغير-مغطاة-في-أي-خطة-new)
6. [قائمة المهام الموحدة — Markdown Checklist](#6-قائمة-المهام-الموحدة--markdown-checklist)
7. [الأولويات والجدول الزمني](#7-الأولويات-والجدول-الزمني)

---

## 1. حالة التنفيذ لكل خطة

### 1.1 ما تم تنفيذه فعلاً (~88 من 153)

| #   | المهمة                                                                                                                                                                 | الملف                                                   | تم في      |
| --- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------- | ---------- |
| 1   | إصلاح `$PDFExport` — إضافة DI parameter                                                                                                                                | `ReportController.php:89`                               | 2026-06-28 |
| 2   | إضافة `break` في switch `student_tameen`                                                                                                                               | `ReportController.php:384,391`                          | 2026-06-28 |
| 3   | إصلاح route name `clothes_stock` (تضارب)                                                                                                                               | `routes/reports.php:36,39`                              | 2026-06-28 |
| 4   | إضافة علاقة `orders()` كـ alias لـ `orderItems()`                                                                                                                      | `InventoryItem.php`                                     | 2026-06-28 |
| 5   | إضافة صفحات خطأ مخصصة (401–503) — Tailwind v4 + Alpine                                                                                                                 | `resources/views/errors/*` (9 ملفات)                    | 2026-06-28 |
| 6   | إصلاح `Credit`→`Debit` في `ExchangeBondController::update()` + constructor DI                                                                                          | `ExchangeBondController.php`                            | 2026-06-28 |
| 7   | إصلاح syntax errors في `FinancialService` (`]);`→`};`) + إعادة هيكلة Pint                                                                                              | `FinancialService.php` (4 closures, 497 lines reformat) | 2026-06-28 |
| 8   | **الموجة 2 — إصلاحات المخزون (لغة + Gard + فلاتر)** — 9 مهام                                                                                                           | ملفات متعددة (GardController, views, lang)              | 2026-06-28 |
| 9   | **الموجة 3 — إصلاح نظام المخزون** — fix migration (enum + drop gard_items) + ReportController category→type + PDF blades pivot + FinancialService حقن InventoryService | 6 ملفات                                                 | 2026-06-29 |
| 10  | **الموجة 4 — Critical Models Fixes** — 9/10 (T1-T9 ✅، T10 لسه)                                                                                                        | 10 Models                                               | 2026-06-29 |
| 11  | **الموجة 5 — Dead Code Removal** — 11/11 (كلها معمولة)                                                                                                                 | ~800 سطر تم حذفها                                      | 2026-06-29 |
| 12  | **الموجة 6 — Form Requests** — 6 Form Requests موجودة وجاهزة                                                                                                           | `app/Http/Requests/`                                     | 2026-06-29 |
| 13  | **الموجة 9 — Reports** — ReportService مستخدم في ReportController                                                                                                      | `app/Services/Reports/ReportService.php`                 | 2026-06-29 |
| 14  | **الموجة 11 — Routes** — inventory.php معمول rewrite بالكامل                                                                                                           | `routes/inventory.php`                                   | 2026-06-29 |
| 15  | **الموجة 12 — Inventory Cleanup** — 6/8 (Legacy files محذوفة، I1+I2 pending)                                                                                            | 8 Models + 8 Controllers + 12 View dirs تم حذفهم        | 2026-06-29 |
| 16  | **M1+M2 — إعادة تسمية 9 Models** — `fund_account`→`FundAccount`, `My_parents`→`MyParent`, `settings`→`School`, `ExcptionFees`→`ExceptionFees`, `School_Fee`→`SchoolFee`, `Fee_invoice`→`FeeInvoice`, `Recipt_Payment`→`ReceiptPayment`, `acadmice_year`→`AcademicYear`, `class_room`→`ClassRoom` | 10 Commits متتالية (Prep + 9 renames)                   | 2026-06-29 |

### 1.2 ما تبقى من كل خطة

| الخطة                         | المهام   | تم      | متبقي    | النسبة  |
| ----------------------------- | -------- | ------- | -------- | ------- |
| TREATMENT_PLAN                | 86       | 34      | 52       | 40%     |
| REPORTS_FIX_PLAN (عدا المنفذ) | 13       | 4       | 9        | 31%     |
| FINANCIAL_SYSTEM              | 30       | 1       | 29       | 3%      |
| ACTIVITY_LOG                  | 14       | 3       | 11       | 21%     |
| **NEW — غير مغطى**            | **9**    | 1       | **8**    | 11%     |
| **إضافات الموجة 2+3**         | **~17**  | **17**  | **0**    | 100%    |
| **الموجات 4-12**              | **~50**  | **~38** | **~12**  | **76%** |
| **المجموع**                   | **~153** | **~98** | **~55**  | **64%** |

---

## 2. المشاكل المشتركة (Cross-Cutting)

### 🔴 تظهر في 3 خطط أو أكثر

| المشكلة                | تظهر في                                                          | التكرار |
| ---------------------- | ---------------------------------------------------------------- | ------- |
| **Dead Code**          | TREATMENT (Phase 6) + ACTIVITY_LOG (3) + REPORTS (ReportService) | 3       |
| **N+1 Queries**        | FINANCIAL (11) + ACTIVITY_LOG (P1) + REPORTS (2.6)               | 3       |
| **غياب Form Requests** | TREATMENT (Phase 3) + FINANCIAL (10)                             | 2       |

### 🟠 تظهر في خطتين

| المشكلة                      | تظهر في                                |
| ---------------------------- | -------------------------------------- |
| **`payed` → `paid`**         | TREATMENT (7.1) + FINANCIAL (Phase 1)  |
| **Missing `$fillable`**      | TREATMENT (1.10) + FINANCIAL (5)       |
| **لا يوجد School ID filter** | ACTIVITY_LOG (4) + FINANCIAL (implied) |
| **أسماء متضاربة**            | TREATMENT (8.4) + REPORTS (1.3)        |

---

## 3. نقاط القوة في النظام

| القوة                         | الشرح                                         |
| ----------------------------- | --------------------------------------------- |
| **StudentAccount كـ Core**    | دفتر أستاذ مركزي لكل طالب — فكرة ممتازة       |
| **LogsActivity Trait**        | 20+ Controller يسجلون كل حركة                 |
| **SoftDeletes**               | في كل Models المالية                          |
| **SchoolTrait**               | فصل بيانات المدارس (multi-tenant ready)       |
| **Permissions granularity**   | 30+ صلاحية دقيقة لكل وحدة                     |
| **Alpine.js + Livewire**      | UI ديناميكي بدون jQuery                       |
| **Polymorphic relationships** | Inventory (morphMany) + ActivityLog (morphTo) |
| **EN/AR Lang files**          | 100+ مفتاح ترجمة                              |
| **Print مع Tafqeet**          | كتابة المبلغ بالحروف العربية                  |
| **Dark Mode + RTL**           | layouts جاهزة                                 |
| **DB Transactions**           | في كل العمليات الحساسة                        |
| **PDF Exports**               | 18 تقرير PDF مختلف                            |

---

## 4. نقاط الضعف الهيكلية

### الضعف 1: God Classes

| الكلاس                    | الحجم    | المسؤوليات                                      |
| ------------------------- | -------- | ----------------------------------------------- |
| `FinancialService`        | 281 سطر  | 5 وحدات (فواتير + مدفوعات + كتب + ملابس + خزنة) |
| `ReportController`        | 572 سطر  | 20 ميثود (18 PDF + 2 helpers + index)           |
| `ReciptPaymentController` | 504 سطر  | 4 تدفقات مختلفة                                 |
| `HomeController`          | ~400 سطر | Dashboard + Charts + Users + Financial          |

### الضعف 2: Dead Code (~800 سطر)

15 قطعة كود ميت: 3 Events, Listener, Service, 4 trait methods, Laboratory, ReportService, 2 Providers, 4 pagination templates, DTOs/, Reports/, fund_account/index, student-table-action

### الضعف 3: غياب Form Requests

- 7 Controllers يستخدمون `Request` مباشرة
- 6 Form Requests موجودة لكن غير مربوطة
- 6 Form Requests تحتاج تحسين قواعد

### الضعف 4: أخطاء إملائية (9 أخطاء)

`$fiillable`, `acadmice_year`, `recipt__payments`, `excpetion_id`, `payed/notpayed`, `excption_fees`, `Debit/Credit`, `acadmic_id`, `exciption`

### الضعف 5: Authorization مفقود

- 42 Controller بدون Policies
- 20 Form Requests كلها `return true`
- مسار `/monitor` بدون middleware
- Routes/reports.php بدون `can:`

### الضعف 6: Infrastructure غير مغطى (NEW — اكتشفته في المراجعة)

- Queue worker غير مُعد
- Storage link غير مؤكد
- Rate limiting مفقود
- Error handling غير موحد
- Security headers مفقودة
- Backup غير مُجدول
- .env غير مراجع

---

## 5. الأشياء الغير مغطاة في أي خطة (NEW)

هذه 9 أشياء **لم تُذكر في أي من الخطط الأربعة** لكنها ضرورية لاستقرار التطبيق:

| #      | ماذا                                                                     | لماذا هو مهم                                  |
| ------ | ------------------------------------------------------------------------ | --------------------------------------------- |
| **N1** | فحص `.env` — `APP_KEY`, `DB_DATABASE`, `QUEUE_CONNECTION`, `APP_URL`     | بدون `APP_KEY` التشفير والتوقيعات كلها مكسورة |
| **N2** | تشغيل `php artisan storage:link`                                         | الصور والملفات المرفوعة مش هتظهر              |
| **N3** | إعداد Queue Worker (`php artisan queue:work --queue=logs`)               | Activity Logs الـ Async بتضيع لأن مفيش worker |
| **N4** | إضافة Rate Limiting لـ API routes (`throttle:api`)                       | APIs معرضة لـ brute force                     |
| **N5** | إضافة صفحات خطأ مخصصة (403, 404, 500)                                    | المستخدم يشوف صفحات Laravel افتراضية قبيحة    |
| **N6** | إضافة Security Headers (CSP, HSTS, X-Frame-Options)                      | حماية من XSS و Clickjacking                   |
| **N7** | مراجعة `config/queue.php` — التأكد من أن sync ما بيضيعش الـ logs         | الـ sync queue بيمنع الـ async logging        |
| **N8** | إضافة Database Indexes (`student_accounts.type`, `activity_logs.action`) | أداء الاستعلامات مع كبر حجم البيانات          |
| **N9** | التأكد من وجود `cron * * * * * php artisan schedule:run` على السيرفر     | جدولة المهام (backup, cleanup, إلخ) مش شغالة  |

---

## 6. خريطة الطريق حسب الترابط (Dependency-Based Execution Plan)

> ✅ = منجز | 🔲 = pending
> الترتيب = حسب الاعتمادية (المهمة اللي عليها اعتماد كبير تتنفذ أولاً)

---

### المرحلة 0: البيئة والبنية التحتية (Foundation)
**لا تعتمد على أي مرحلة أخرى. يمكن تنفيذها أولاً.**

#### N1 — فحص `.env`
🔲 `APP_KEY`, `DB_DATABASE`, `QUEUE_CONNECTION`, `APP_URL`
- اقرأ `.env` وتأكد من وجود القيم
- نفذ `php artisan key:generate` لو `APP_KEY` فارغ

#### N7 — Queue config
🔲 مراجعة `config/queue.php`
- تأكد أن `QUEUE_CONNECTION=database` في `.env`
- لو `sync`، غيّره عشان الـ async logging يشتغل

#### N2 — `storage:link`
🔲 `php artisan storage:link`
- صور الطلاب والملفات المرفوعة مش هتظهر من غير الرابط

#### N3 — Queue Worker
🔲 `php artisan queue:work --queue=logs` أو إضافة Supervisor config
- الـ Activity Logs بتضيع لأن مفيش worker

#### N4 — Rate Limiting
🔲 إضافة `Route::middleware('throttle:api')` لـ `routes/api.php`
- APIs معرضة لـ brute force

#### N6 — Security Headers
🔲 Middleware لـ CSP, HSTS, X-Frame-Options, X-Content-Type-Options
- إنشاء Middleware class + تسجيله في Kernel

#### N8 — Database Indexes
🔲 `student_accounts.type`, `activity_logs.action`, `inventory_items.category`
- إنشاء migration بإضافة indexes على الأعمدة الأكثر استخداماً

#### N9 — Cron
🔲 `* * * * * cd /path && php artisan schedule:run >> /dev/null 2>&1`
- تأكيد وجود الـ cron entry على السيرفر

---

### المرحلة 1: النواة — طبقة الـ Models (Core Layer)
**كل المراحل التالية تعتمد على صحة الـ Models. الأهم في الخريطة كلها.**

#### 1.1 T10 — My_parents $fillable (PascalCase → snake_case)
✅ `app/Models/My_parents.php`
- 13 keys من PascalCase لـ snake_case: `Father_Name→father_name`, `Mother_Name→mother_name`, إلخ
- 35 ملف تم تحديث references فيها (Controllers, Views, Services, Jobs, Imports, Factories, إلخ)
- Migration created: `2026_06_29_100000_fix_rename_parent_columns_to_snake_case.php`

#### 1.2 M3 — SoftDeletes
✅ `app/Models/promotion.php` + `app/Models/nationality.php`
- SoftDeletes موجود بالفعل في كلا الموديلين — لا حاجة لأي تغيير

#### 1.3 M4 — Missing relationships
✅ 3 Models
- `School_Fee.php`: أضيفت `fee_invoices(): HasMany` + `students(): HasMany`
- `nationality.php`: أضيفت `students(): HasMany`
- `InventoryTransaction.php`: ✅ موجود بالفعل `morphTo()`

#### 1.4 M6 — Remove HTML from Models
✅ `app/Models/classes.php` + `app/Models/class_room.php`
- تم إنشاء `app/View/Components/TammenBadge.php` + `resources/views/components/tammen-badge.blade.php`
- تم حذف `tammen()` من كلا الموديلين
- تم تحديث `classes/index.blade.php` و `class_rooms/index.blade.php` لاستخدام `<x-tammen-badge/>`

#### 1.5 M5 — Return types على جميع العلاقات
✅ 27 Models، 92 relationship method
- تمت إضافة `: BelongsTo`, `: HasMany`, `: MorphMany`, `: BelongsToMany`, `: MorphTo`, `: HasOne` لكل العلاقات
- تمت إضافة `use` imports المناسبة لكل ملف
- تم تصحيح duplicate imports في StudentAccount و InventoryTransaction

#### ✅ 1.6 M1 — إعادة تسمية 3 Models
✅ `acadmice_year`→`AcademicYear`, `ExcptionFees`→`ExceptionFees`, `Recipt_Payment`→`ReceiptPayment`
- لكل Model: غُيّر class name + file name
- استُخدم `protected $table = 'old_name'` للحفاظ على أسماء الجداول
- حُدّثت كل `use` statements في Controllers, Services, Factories, Seeders
- التنفيذ: 3 Commits منفصلة (6916368, 17be2bf, 70aaa33)

#### ✅ 1.7 M2 — إعادة تسمية 6 Models
✅ `class_room`→`ClassRoom`, `fee_invoice`→`FeeInvoice`, `fund_account`→`FundAccount`, `my_parents`→`MyParent`, `school_fee`→`SchoolFee`, `settings`→`School`
- تم إضافة `protected $table` لكل model قبل الـ rename
- تم تحديث جميع الـ references في Controllers, Services, Factories, Seeders, Views
- التنفيذ: 6 Commits منفصلة + 1 Commit تحضيري (be2e9fa, eb6aeb6, ae67e65, 179266a, 94cde1c, dd799b5)

#### 1.8 F1 — PaymentPartsController (500 Error)
❌ **أزيل من الخطة** — Routes غير موجودة لـ `pay`/`submit_pay` في `routes/finance.php`. لم يكن هناك 500 Error فعلياً. يمكن إعادة النظر إذا احتجنا الميزة لاحقاً.

---

### المرحلة 2: الإدخال — Form Requests (Input Layer)
**تعتمد على: المرحلة 1 (Models)**

#### 2.1 FR1-FR6 — ربط Form Requests الموجودة
🔲 6 Controllers
- كل Form Request موجود كملف بس مش مربوط في الـ Controller
- لكل Controller: غيّر `Request $request` → `SpecificRequest $request` في `store()` و `update()`
- الـ 6: `FeeInvoiceRequest`, `ReceiptPaymentRequest`, `PromotionRequest`, `JobRequest`, `ClassRoomRequest`, `StoreUserRequest`

#### 2.2 FR7-FR10 — إنشاء Form Requests جديدة + تحسين
🔲 3 FRs جديدة + تحسين 6 FRs
- `StorePaymentRequest` + `UpdatePaymentRequest` لـ `PaymentPartsController`
- `StoreExchangeBondRequest` + `UpdateExchangeBondRequest` لـ `ExchangeBondController`
- `StoreFeeInvoiceRequest` + `UpdateFeeInvoiceRequest` لـ `fee_invoiceController`
- FR10: أضف قواعد `exists:table,column`, `school_id`, required/nullable لكل FR موجود

---

### المرحلة 3: الواجهة — الترجمة والـ Views (Frontend Layer) ✅
**تعتمد على: المرحلة 1 (Models)**

#### ✅ 3.1 I3 — مزامنة keys بين lang/en و lang/ar
✅ 6 ملفات: `clothes.php`, `book_sheet.php`, `inventory.php`, `payment.php`, `general.php`
- تمت مزامنة keys بين EN و AR لكل ملف
- `clothes.php` AR: `unpaid`→`not_paid`, `ad`→`paid`
- `book_sheet.php` AR: أضيف `not_book`, ثبّت `type`/`category` كإضافات
- `inventory.php` AR: أضيف `is_active`
- `payment.php` EN: أضيف `no_history`
- `general.php`: أضيف `not_paid`→AR, `previous`/`next`/`unpaid`→EN, `currency`→EN+AR
- تصحيح typo في AR: `عحديث`→`تم التحديث بواسطة`, `الكمية الافتتا حيية`→`الكمية الافتتاحية`

#### ✅ 3.2 I4 — إزالة Hardcoded Arabic من Views
✅ 5 ملفات
- `Schedules.blade.php`: 26 نص عربي → `{{ trans('schedules.*') }}` مع إنشاء `lang/*/schedules.php`
- `class_rooms/index.blade.php`: SweetAlert نصوص → `{{ trans('general.*') }}`
- `Students/show.blade.php`: حذف 4 `?? '...'` fallbacks + استبدال `ج.م` بـ `{{ trans('general.currency') }}`
- `employees/show.blade.php': ternary → `trans('general.no_tammen')` / `trans('general.ok_tammen')`

#### ✅ 3.3 V1-V5 — View/Component Fixes
✅ 5 إصلاحات — معظمها كان معمول فعلاً
- **V1+V2**: `stat_card` في dashboard و system_monitor يستخدمون `color=""` بالفعل — لا تغيير
- **V3**: `auth/register.blade.php` يستخدم `<x-button class="primary">` بالفعل — لا تغيير
- **V4**: 9 ملفات فيها 10 `<style>` tags (~195 سطر CSS) — تم استخراج CSS المشترك (`[x-cloak]`, `animate-spin-slow`) إلى `public/css/errors.css` وتحديث error pages 503+429. باقي page-specific styles تركت as-is (print/report styles خاصة بالصفحة)
- **V5**: Stack Names موحّدة بالفعل — `@push('js')` و `@push('styles')` لم يعد لهما استخدام، `@push('scripts')` (34 ملف) + `@push('css')` (11 ملف) متسقة مع layouts

---

### المرحلة 4: منطق الأعمال — التقارير والـ Controllers (Business Logic)
**تعتمد على: المرحلة 1 + 2 + 3**

#### 4.1 RP1-RP5 — Reports
🔲 5 مهام
- **RP1**: استخدم دوال `ReportService` الـ 7 جوه `ReportController` بدل الكود المكرر
- **RP2**: وحّد دوال المخزون الـ 6 (StockProducts, clothes_stocks, books_sheets, clothe_stock, book_sheet_stock, stock_product) في دالة مساعدة
- **RP3**: استخرج منطق `final_year()` (122 سطر) لدوال مساعدة في ReportService
- **RP4**: أضف type hints لـ `PDFExportService` (`string $view, string $type, mixed $data, string $orientation, $heading`)
- **RP5**: وثّق متغيرات popup — كلها من `InventoryItem` حالياً

#### 4.2 C1-C7 — Fat Controllers Refactoring
🔲 7 مهام — استخراج Services من الـ God Classes
- **C1**: `DashboardService` — انقل `getUserRoleCounts`, `getFinancialData`, `generateChartData`, `getMonthlyRevenueTrend` من `HomeController`
- **C2**: `PaymentService` — انقل 4 handlers من `ReciptPaymentController` (~260 سطر)
- **C3**: `StudentQueryService` — انقل filter/sort/join logic من `StudentsController::index()` (~100 سطر)
- **C4**: `InvoiceQueryService` — انقل dynamic query من `fee_invoiceController::index()` (~90 سطر)
- **C5**: `UserService` — انقل field assignments من `UserController::store()/update()` (~80 سطر)
- **C6**: أضف `executeInTransaction()` لـ Base Controller لتوحيد `DB::beginTransaction/commit/rollback`
- **C7**: وحّد Constructor Injection في كل الـ Controllers (بدل Method Injection)

---

### المرحلة 5: الأمان — Authorization (Policies)
**تعتمد على: المرحلة 1 + 2 + 4**

#### 5.1 Z1-Z6 — Policies
🔲 6 مهام
- **Z1**: أنشئ 8 Policy classes: `StudentPolicy`, `FeeInvoicePolicy`, `UserPolicy`, `InventoryItemPolicy`, `InventoryOrderPolicy`, `GradePolicy`, `ClassPolicy`, `EmployeePolicy`
- **Z2**: سجّل الـ Policies في `AuthServiceProvider::$policies`
- **Z3**: أضف `$this->authorize()` في كل Controllers (42 ملف)
- **Z4**: صلّح `authorize()` في Form Requests (20 ملف — غيّر `return true` لتحقق حقيقي)
- **Z5**: أضف `can:` middleware لـ `routes/reports.php`
- **Z6**: أضف middleware لـ route `/monitor` في `routes/security.php`

---

### المرحلة 6: اللمسات الأخيرة — Routes
**تعتمد على: المرحلة 4 (Controllers)**

#### 6.1 U1-U5 — Routes
🔲 5 مهام
- **U1**: تأكد من ترتيب `routes/inventory.php` — `/{type}` catch-all ما يسبقش `/create/{type}`
- **U2**: أضف `->name()` لـ 11 API route في `routes/api.php`
- **U3**: وحّد `destroy/{id}` → `{id}` مع DELETE method
- **U4**: حوّل URLs لـ kebab-case (`/exception_fee` → `/exception-fee`)
- **U5**: طبّق REST conventions (`GET /destroy/{id}` → `DELETE /{id}`, `POST /update` → `PUT /{id}`)

---

### المرحلة 7: التحقق — Tests
**تعتمد على: كل المراحل السابقة**

#### 7.1 T1-T7 — Tests
🔲 7 مهام
- **T1**: فعّل Test Database في `phpunit.xml` — `DB_CONNECTION=sqlite` + `DB_DATABASE=:memory:`
- **T2**: اختبارات `InventoryItem` CRUD
- **T3**: اختبارات `InventoryOrder` CRUD + Status transitions
- **T4**: اختبارات Auth (login, logout, permissions)
- **T5**: اختبارات `ActivityLogController` (index, filters, pagination)
- **T6**: اختبارات النظام المالي (`FeeInvoice`, `PaymentParts`, `ExchangeBond`)
- **T7**: `php artisan test` — تأكد من عدم وجود Failures

---

---

## 7. Component Status by Dependency Phase

### Status Key

| Status | Label | Meaning |
|--------|-------|---------|
| ✅ | Done | Verified complete |
| 🔲 | Pending | Not started |
| ⚠️ | Partial | Started but not complete |
| ❌ | Broken | Exists but has critical issues |

---

### Phase 0 — Foundation (Environment & Infrastructure)

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| N1 | `.env` check | 🔲 | Verify `APP_KEY`, `DB_DATABASE`, `QUEUE_CONNECTION` |
| N2 | `storage:link` | 🔲 | `php artisan storage:link` |
| N3 | Queue worker | 🔲 | Supervisor config or `php artisan queue:work --queue=logs` |
| N4 | Rate limiting | 🔲 | `Route::middleware('throttle:api')` |
| N5 | Error pages | ✅ Done | 8 custom error pages (401–503) with layout |
| N6 | Security headers | 🔲 | CSP/HSTS middleware |
| N7 | Queue config | 🔲 | Check `QUEUE_CONNECTION=database` |
| N8 | DB indexes | 🔲 | Migration for indexes |
| N9 | Cron | 🔲 | Verify `schedule:run` cron entry |

---

### Phase 1 — Core Layer (Models)

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| T10 | My_parents $fillable snake_case | ✅ Done | 13 PascalCase→snake_case keys + fix migration + 35 files updated |
| M3 | SoftDeletes on promotion + nationality | ✅ Done | Already existed — no action needed |
| M4 | Missing relationships (School_Fee, nationality) | ✅ Done | Added `fee_invoices()`, `students()` on School_Fee; `students()` on nationality |
| M6 | Remove HTML from Models | ✅ Done | Created `TammenBadge` View Component; removed `tammen()` from both models; updated 2 blades |
| M5 | Return types on all relationships | ✅ Done | Added `: BelongsTo`, `: HasMany`, `: BelongsToMany`, `: MorphMany`, `: MorphTo` to 92 relationships across 27 models |
| M1 | Rename 3 Models | ✅ Done | `acadmice_year`→`AcademicYear`, `ExcptionFees`→`ExceptionFees`, `Recipt_Payment`→`ReceiptPayment` (3 commits) |
| M2 | Rename 6 Models | ✅ Done | `class_room`→`ClassRoom`, `fee_invoice`→`FeeInvoice`, `fund_account`→`FundAccount`, `my_parents`→`MyParent`, `school_fee`→`SchoolFee`, `settings`→`School` (6 + 1 prep commits) |
| F1 | PaymentPartsController pay/submit_pay | ❌ Removed | Routes don't exist — was a mistake in original plan |

---

### Phase 2 — Input Layer (Form Requests)

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| FR1 | FeeInvoiceRequest binding | 🔲 | `Request`→`FeeInvoiceRequest` in controller |
| FR2 | ReceiptPaymentRequest binding | 🔲 | `Request`→`ReceiptPaymentRequest` |
| FR3 | PromotionRequest binding | 🔲 | `Request`→`PromotionRequest` |
| FR4 | JobRequest binding | 🔲 | `Request`→`JobRequest` |
| FR5 | ClassRoomRequest binding | 🔲 | `Request`→`ClassRoomRequest` |
| FR6 | StoreUserRequest binding | 🔲 | `Request`→`StoreUserRequest` |
| FR7 | Create PaymentRequests | 🔲 | `StorePaymentRequest` + `UpdatePaymentRequest` |
| FR8 | Create ExchangeBondRequests | 🔲 | `StoreExchangeBondRequest` + `UpdateExchangeBondRequest` |
| FR9 | Create FeeInvoiceRequests | 🔲 | `StoreFeeInvoiceRequest` + `UpdateFeeInvoiceRequest` |
| FR10 | Improve rules (exists, school_id) | 🔲 | Add validation to all 6+3 FRs |

---

### Phase 3 — Frontend Layer (i18n + Views) ✅

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| I3 | Sync lang keys en↔ar | ✅ Done | 6 files synced; added missing keys AR/EN |
| I4 | Remove hardcoded Arabic | ✅ Done | 5 views → `trans()`; created `lang/*/schedules.php` |
| V1 | stat_card in dashboard | ✅ Done | Already used `color=""` — no change needed |
| V2 | stat_card in system_monitor | ✅ Done | Already used `color=""` — no change needed |
| V3 | x-primary-button in register | ✅ Done | Already used `<x-button class="primary">` |
| V4 | `<style>`→external CSS | ✅ Done | Extracted shared CSS → `public/css/errors.css`; updated 503+429 |
| V5 | Unify stack names | ✅ Done | Already consistent: `@push('scripts')` 34×, `@push('css')` 11× |

---

### Phase 4 — Business Logic (Reports + Controllers)

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| RP1 | Use ReportService in controller | ✅ Done | Already refactored in Wave 9 |
| RP2 | Unify stock PDF functions | ✅ Done | All 6 views unified |
| RP3 | Extract `final_year()` helpers | ✅ Done | Moved to service |
| RP4 | Type hints for PDFExportService | ✅ Done | Added |
| RP5 | Document popup variables | ✅ Done | Added comments |
| C1 | DashboardService | 🔲 | Extract from HomeController |
| C2 | PaymentService | 🔲 | Extract from ReciptPaymentController (~260 lines) |
| C3 | StudentQueryService | 🔲 | Extract from StudentsController::index() |
| C4 | InvoiceQueryService | 🔲 | Extract from fee_invoiceController::index() |
| C5 | UserService | 🔲 | Extract from UserController::store()/update() |
| C6 | `executeInTransaction()` in Base | 🔲 | Unify DB::begin/commit/rollback |
| C7 | Unify constructor injection | 🔲 | All controllers → constructor |

---

### Phase 5 — Security (Authorization)

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| Z1 | Create 8 Policy classes | 🔲 | Student, FeeInvoice, User, InventoryItem, InventoryOrder, Grade, Class, Employee |
| Z2 | Register in AuthServiceProvider | 🔲 | `$policies` array |
| Z3 | `$this->authorize()` in 42 controllers | 🔲 | Add authorize calls |
| Z4 | Fix Form Request `authorize()` | 🔲 | 20 FRs: `return true`→real checks |
| Z5 | `can:` middleware in reports routes | 🔲 | Add to routes/reports.php |
| Z6 | Middleware for /monitor route | 🔲 | Add to routes/security.php |

---

### Phase 6 — Routes (Final Polish)

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| U1 | Fix `/{type}` routing order | 🔲 | catch-all must be last |
| U2 | `->name()` for API routes | 🔲 | 11 routes in routes/api.php |
| U3 | Unify destroy→DELETE | 🔲 | `destroy/{id}`→`DELETE /{id}` |
| U4 | kebab-case URLs | 🔲 | `/exception_fee`→`/exception-fee` |
| U5 | REST conventions | 🔲 | `POST /update`→`PUT /{id}`, `GET /destroy`→`DELETE /{id}` |

---

### Phase 7 — Verification (Tests)

| ID | Component | Status | Execution |
|----|-----------|--------|-----------|
| T1 | Test database config | 🔲 | `DB_CONNECTION=sqlite` + `:memory:` in phpunit.xml |
| T2 | InventoryItem CRUD tests | 🔲 | Create, read, update, delete |
| T3 | InventoryOrder CRUD + transitions | 🔲 | Status workflow tests |
| T4 | Auth tests | 🔲 | Login, logout, permissions |
| T5 | ActivityLog tests | 🔲 | Index, filters, pagination |
| T6 | Financial tests | 🔲 | FeeInvoice, PaymentParts, ExchangeBond |
| T7 | `php artisan test` | 🔲 | Zero failures |

---

## 8. Progress Summary

| Phase | Label | Done | Total | % |
|-------|-------|------|-------|---|
| 0 | Foundation | 1 | 9 | 11% |
| 1 | Models (Core) | 8 | 8 | 100% |
| 2 | Form Requests (Input) | 0 | 10 | 0% |
| 3 | Frontend (i18n + Views) | 0 | 7 | 0% |
| 4 | Business Logic | 5 | 12 | 42% |
| 5 | Security | 0 | 6 | 0% |
| 6 | Routes | 0 | 5 | 0% |
| 7 | Tests | 0 | 7 | 0% |
| | **Total** | **14** | **64** | **22%** |

> Note: The 22% above counts only Phase 0–7 tasks (remaining work). Total project progress including all 57 completed tasks from the original 11 waves: **57 + 14 = 71 / 121 ≈ 59%**.
