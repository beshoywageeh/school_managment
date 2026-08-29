# تحليل شامل لنظام إدارة المدرسة

> **التاريخ:** 28 أغسطس 2026
> **التقنية:** Laravel 10، PHP 8.5، Livewire 4، Spatie Permissions، نظام متعدد المدارس عبر `SchoolScope`

تحليل كامل للنظام يشمل كل الوحدات والروابط الداخلية: المخزون (Inventory)، المالية (Finance)، الطلاب/الأكاديمي/الموارد البشرية، والأمن/المصادقة/التعددية.

---

## جدول المحتويات

1. [المشاكل الحرجة (Critical)](#1-المشاكل-الحرجة-critical)
2. [ثغرات أمنية عالية (High)](#2-ثغرات-أمنية-عالية-high)
3. [مشاكل مالية (Financial)](#3-مشاكل-مالية-financial)
4. [مشاكل أمنية/أداء متوسطة](#4-مشاكل-أمنيةأداء-متوسطة)
5. [مشاكل قابلية الصيانة (Maintainability)](#5-مشاكل-قابلية-الصيانة-maintainability)
6. [المميزات والنقاط القوية](#6-المميزات-والنقاط-القوية)
7. [خطة التطوير المقترحة (Roadmap)](#7-خطة-التطوير-المقترحة-roadmap)
8. [ملخص الأولويات](#8-ملخص-الأولويات)

---

## 1. المشاكل الحرجة (Critical — يجب إصلاحها فورًا)

### 1.1 ثغرة تصعيد صلاحيات كاملة في `AdminEraController`

**الملف:** `app/Http/Controllers/AdminEraController.php` + `routes/security.php:22-30`

- لا يوجد **أي middleware** للصلاحيات على هذا المتحكم (كل المتحكمات الأخرى تستخدم `permission:` في الـ constructor، لكن هذا لا).
- `emp_active($id, ...)` (أسطر 24-39) تسمح **لأي مستخدم مسجّل دخول** — بمجرد الوصول للرابط — من:
  - ضبط `isAdmin` لأي مستخدم
  - **إعادة تعيين كلمات المرور** (bcrypt)
  - تغيير الإيميل
  - تعطيل `login_allow`
  - تعيين الأدوار لأي مستخدم
- `Index()` (سطر 18) يختار **hash كلمات المرور الخام** (`'password'`) ويمررها للعرض.

> ⚠️ **الأخطر في النظام كله.** أي مستخدم يستطيع تسليم نفسه صلاحيات الأدمن وتغيير كلمة مرور الأدمن الرئيسي.

### 1.2 حسابات معطّلة ما زالت تستطيع تسجيل الدخول

**الملف:** `app/Http/Requests/Auth/LoginRequest.php:44`

```php
if (! Auth::attempt($this->only('email', 'password'), $this->boolean('login_allow'))) {
```

المعامل الثاني لـ `Auth::attempt()` هو **remember-me** وليس السماح بالدخول. حقل `login_allow` (علم تعطيل الموظف) **لا يُفعل إطلاقًا** — الموظفون المعطَّلون يستطيعون الدخول. كما أن `isAdmin` و `login_allow` موجودان في `$fillable` (User.php:47) ويُضبطان من الـ request مباشرة عبر `UserService::assignFields()` — تصعيد صلاحيات إضافي.

### 1.3 التسجيل العام المفتوح + بيانات عبر المدارس

- `routes/auth.php:15-18` يعرّض `register` — أي شخص يستطيع إنشاء حساب (بلا دور ولا `school_id`).
- في `SchoolScope`، المستخدم ذو `school_id = null` يُعامَل كـ **super-admin** (مخرج مفتوح مقصود) — أي أن **المستخدم المسجّل ذاتيًا يرى بيانات كل المدارس**.
- `HomeController.php:40`: `$data['users'] = User::query()->get();` — **كل مستخدمي كل المدارس** يتسربون لأي حساب بلا دور ولا صلاحية.

### 1.4 حماية bruteforce معطّلة

- `LoginRequest::ensureIsNotRateLimited()` (السطور 63-79) **لا تُستدعى في أي مكان** (ميتة).
- لا يوجد throttle على مسارات password-reset / register.
- `throttle:web` (60/دقيقة) مطبَّق على **كل** المسارات (web.php:29) بما فيها الداشبورد، وليس فقط على تسجيل الدخول.
- معدلات API / imports / reports **معلَّقة في الكومنت** (RouteServiceProvider.php:27-41).

---

## 2. ثغرات أمنية عالية (High)

### 2.1 ثغرات IDOR وعمليات مالية

- **`InventoryOrderController::pay()`** (سطر 177-186): **لا يوجد `$this->authorize()`**، والرابط هو `GET` يبدّل حالة الدفع (paid/unpaid) — قابلة للهجوم عبر CSRF، وغير مدفوعة بـ Policy.
- **`ExchangeBondController::update()`** (أسطر 108-121): **حساب مزدوج** — ينشئ قيد `StudentAccount` جديد بالفرق دون عكس القيد الأصلي، فيتضخّم رصيد الطالب، ويتجاوز حارس `alreadyAccounted`.
- **انعكاس إشارة صندوق المدرسة:** نفس الحدث الاقتصادي (دفعة من طالب) يُسجَّل في `Fund_Account` بإشارة **مضادة** حسب نوع الدفع:
  - `PaymentService::handleFeeInvoice` → `Debit = amount`
  - `InventoryPaymentService::handleBooksPayment` → `Credit = amount`
  - → أرصدة خزنة غير متسقة وتتوقف على نوع الدفعة.
- **كسر تكامل مرجعي:** `InventoryPaymentService` يخزّن **معرّف أمر مخزون** في `student_accounts.fee_invoices_id` — بلا قيود FK — فيقوم `AccountingReversalService::reverseReceiptEntries` بتحديث `FeeInvoice` خاطئ أحيانًا.

### 2.2 ثغرات تحقق/تحقق مفقود

- **`ExceptionFeesController::create()`** (سطر 70): `$fees->first()->student_id` — تحقق `if ($id !== ...)` **ميت دائمًا** (لأن القائمة مفلترة أصلًا)، ويتعطل **بخطأ "property on null"** إن لم توجد فواتير. والتحقق الفعلي `isEmpty()` يأتي **بعد** هذا السطر.
- **`PaymentPartsController::edit()`**: يشير لـ `$paymentpart->status` بينما المتغير `$paymentParts` — **خطأ Undefined variable** — ويحمّل علاقات غير موجودة (`students`, `grades`, `classes`).
- **`ClassesController::tammen()`** (سطر 176): `classes::findorfail($class->id)->first()` — `->first()` على نموذج يؤدي لـ `BadMethodCallException` (خطأ مؤكَّد).
- **`PromotionController::create()`**: `where('status', 0)` — لكن الحقل نص `'active'/'inactive'` → القائمة فارغة دائمًا.
- **`StudentRegeister`**: يساوي `join_date = birth_date` (خطأ منطقي)، والاسم مكتوب خطأ إملائيًا `Regeister`.

### 2.3 ثغرات استيراد/تحميل

- **`ParentsImport`** يكتب عمود `Father_Birth_Location` غير موجود (الجدول `father_birth_location`) → **خطأ SQL**.
- **`StudentsController::Excel_Import`**: يقرأ `$result['errors']` / `['imported']` بينما `StudentImportService::StudentImport()` يرجع فقط `['message']` (import مؤجل) → رسائل نجاح/فشل **خاطئة دائمًا**.
- **`UserController::Excel_Import()`**: لا validation على الملف (لا `mimes` ولا حجم) → `getRealPath()` يتعطل على ملف مفقود.
- **CSV injection**: الحقول تُخزَّن verbatim دون sanitize — محفوظة تبدأ بـ `=`,`+`,`@` تصبح صيغ Excel إذا أُعيد تصديرها.
- **`config('defaults.grade_id', 1)`** (StudentImport.php:58): لا يوجد `config/defaults.php` → مستويات دراسية خاطئة تُرسم بصمت للصف 1، مع أرقام سحرية `1`, `64`.

---

## 3. مشاكل مالية (Financial — خطورة عالية على الدقة)

### 3.1 التعامل مع المال كـ float وليس سنتات/أعداد صحيحة

كل الأعمدة `DECIMAL(10,2)` لكن الكود يجري **حسابًا عائمًا** على نصوص:
- `ExceptionFeesController::create`: `sum('debit') - sum('credit')` (float)
- `ExchangeBondController::update`: `$request->amount - $student_account->debit`
- مقارنات `==` مع DECIMAL-cast (`$request->amount == $fee->schoolFee->amount`)
- **لا يوجد معالجة بـ integer-cents** → خطر فقدان دقة في دفتر مالي. هذا أهم قلق صواب.

### 3.2 `ExceptionFeesController::store` يحذف الفاتورة دون عكس

`if ($request->amount == $fee->schoolFee->amount) { $fee->delete(); }` (سطر 119-121) — يحذف `FeeInvoice` تاركًا قيد `StudentAccount` الخصم غير معكوس، ويقارن `==` على decimal.

### 3.3 دفع جزئي مفقود / فائض يُسقَط

`PaymentService::handlePartialPayment`: الدفع الأقل من قيمة القسط **لا يُسجَّل أي قيد**، والمال الفائض بعد كل الأقساط **يُسقَط صامتًا** (لا rest ولا معالجة over-payment).

---

## 4. مشاكل أمنية/أداء متوسطة

### 4.1 علاقة polymorphic `reference` ميتة (خطأ كامن)

`InventoryTransaction::reference()` (MorphTo) و `InventoryOrder::transactions()` (MorphMany) يعلنان `reference`، لكن `reference_type` يخزّن `'order'`, `'reversal'`, `'initial'`, `'adjustment'` — وليس أسماء كلاسات — أي أن أي تحميل `->reference` سيفشل أو يرجع null.

### 4.2 `updateItem` يطرح القيم الصفرية (`array_filter`)

لا يمكن ضبط سعر/كمية على `0` ولا تعطيل عنصر (`is_active = false`) عبر مسار التحديث — يُتجاهل وتبقى القيمة القديمة.

### 4.3 `create_sarf.blade.php:14` يثبّت `type="sales"`

`<input type="hidden" name="type" value="sales">` حرفيًا — بينما المتحكم يربط الاثنين `sales` و `purchases` على نفس العرض → **أوامر الشراء (purchases) لا يمكن إنشاؤها عبر هذا العرض أبدًا**.

### 4.4 نزاعات في auto-numbering

مساران غير متوافقين يكتبان في نفس `auto_number`:
- `InventoryOrderService::generateOrderNumber` → `INV-00001`, `SRF-00001`...
- `StudentOrderService::generateAutoNumber` (legacy) → أرقام رقمية من 6 خانات

معًا سيسببان تعارض مع الفهرس الفريد الجديد `(school_id, type, auto_number)` → استثناء مفتاح مكرر.

### 4.5 سباق / نزاع التزامن في `stockOut`

قراءة `current_stock` وكتابته **بدون `lockForUpdate`** → تحت بيع متزامن يمكن بيع أكثر من المتوفر (lost update / overselling).

### 4.6 قيود تكامل مرجعي مفقودة + فهارس ناقصة

- لا يوجد أي `foreign()` constraint في كل الجداول (كلها `unsignedBigInteger` بلا FK) → لا تكامل مرجعي.
- فهارس ناقصة على: `student_accounts.student_id`, `excption_fees`, `exchange_bonds`, `schedules.*`, `promotions.*`, `parents.father_name`, `students.class_id`, جدول `teacher_grade`.

### 4.7 مشاكل Scottoping / تسريب بيانات

- **Parent count bug:** `DashboardService.php:31` `$parents->whereIn('student_id', $gradeIds)` — يقارن `student_id` الأب مع `grade_id` → صفر دائمًا.
- استعلامات `DB::table()` الخام تتجاوز `SchoolScope` (HomeController, RoleController, ImportStudentsJob — الذي لا يختم `school_id`).
- `SettingsController::update/update_password` بلا permission middleware، ويحدّث أي `School` بأي `$id` (IDOR).
- `RoleController::destroy` يحذف من `roles` **دون** تنظيف `model_has_roles`/`role_has_permissions` → صفوف يتيمة.
- أسماء الصلاحيات غير متسقة بأحرف كبيرة: `permission:ReceiptPayment-list` (بأحرف كبيرة) مقابل `receiptpayment-list` (أحرف صغيرة) — Spatie حساس لحالة الأحرف.

### 4.8 الأداء

- الداشبورد يكرّر استعلامات تجميع ثقيلة شهريًا بلا caching (HomeController, DashboardTrendService).
- الـ API rescans `ReceiptPayment::orderBy('manual','desc')->first()` على كامل الجدول لكل صفحة.
- قوائم كثيرة `->get()` بلا pagination (AdminEraController, HomeController, ReportController, ClassesController).
- **خلل كاش:** `CacheService::invalidateFeesCache()` يمسح مفتاح واحد لكن getter يبني مفاتيح مُتعددة (`fees_{schoolId}_{gradeId}_{classroomId}`) → بيانات قديمة 24 ساعة.
- N+1: أوامر المخزون تحمّل `student` واحدة-بواحدة في `index`.

---

## 5. مشاكل قابلية الصيانة (Maintainability)

### 5.1 ضمور/أكواد مكررة

- **إنشاء الطالب** منسوخ 3 مرات (Repository، Service، Import) بمُنطق متناقض.
- `generateAutoNumber` مكرر في 3 خدمات.
- `InventoryPaymentService::handleClothesPayment` و `handleBooksPayment` **90% متطابقان**.
- `FinancialService` مُعلَّم `@deprecated` لكنه ما زال مركزيًا وحقنًا في كل مكان.

### 5.2 متحكم/خدمة ضخمة

- `ReportController` (~446 سطر، 20 نوع تقرير)
- `HomeController` (~441 سطر)

### 5.3 Services ميتة

- `PromotionService` (مستخدَم لا، وbuggy — يكتب `acc_year_from` غير موجودة)
- `InventoryOrderQueryService` (غير مستدعى)
- `ReportPolicy` (غير مسجَّل)
- `SettingsController::store()` (بلا route — method ميتة، تضاعف `SetupController`)

### 5.4 أخطاء إملائية/تسمية

- `recipt__payments` (شرطة سفلية مزدوجة)
- `excption_fees`
- `reiligon` (بدل religion) في الـ column بينما الـ cast `religion` → لا يُقرأ أبدًا
- فئة `StudentRegeister`

### 5.5 Enums بأسماء snake_case

تنتهك قاعدة TitleCase: `Payment_Status`, `Payment_Type`, `Student_Status`.

### 5.6 أكواد معلَّقة/debug

- كومات كثيرة في `ClassRoomsController`, `ClassesController`, `AcademicYearController`, `UserController`, `RouteServiceProvider`
- `GradesController::edit()` فارغ

### 5.7 `ImageTrait`

- يحفظ في مجلد `Str::slug($fName)` ويحذف من `folderName/filename` — مسارات مختلفة → صور قديمة لا تُنظف أبدًا
- `UserController` يمرر `imageable_type = 'App\Model\Users'` (اسم مساحة خاطئ) → كسر morph

---

## 6. المميزات والنقاط القوية

1. **هندسة الخدمات النظيفة** — بناء `InventoryService` كوجهة أمامية تُفوّض لخدمات فرعية متخصصة (InventoryItemService, InventoryOrderService, InventoryGardService, InventoryTransactionService).
2. **إعادة البناء الموحّد للمخزون** — استبدال الأنظمة legacy المتكررة (stocks/clothes/book_sheets) بجداول مخزون polyomorphic موحدة (`inventory_items/orders/order_items/transactions`) هو تصميم سليم.
3. **استخدام تنسيق `DB::transaction`** موجود في معظم العمليات الحساسة (Controller.php:14-17) — savepoint-safe للتداخل.
4. **Form Requests** موجودة للمخزون (StoreItemRequest, StoreOrderRequest...) رغم نقص تغطيتها.
5. **`SchoolScope` global + trait `BelongsToSchool`** — عزل متعددات المدارس عبر Eloquent موجود وتُطبق بشكل صحيح في معظم الاستعلامات.
6. **تخزين المال كـ DECIMAL** في الجداول (جيد) — المشكلة فقط في الحساب.
7. **Spatie Permission + Policies** (للمخزون/الطلاب/الدوال) — أساس جيد رغم عدم الاستفادة الكاملة منه.
8. **Sanctum + middleware aliases** مهيأة بشكل جيد (رغم غياب surface API فعلي).
9. **ترتيب migrations وفهارس إصلاحية** لاحقة (fix migrations 2026_07/08) تُظهر عقلية صيانة استباقية.
10. **logActivity / ActivityLog + Trails** للتدقيق موجودة في معظم المتحكمات.

---

## 7. خطة التطوير المقترحة (Roadmap)

### المرحلة 1 — الأمن الحرج (عاجل)
1. إضافة `permission` middleware (أو Gate) على `AdminEraController` وتسليم كلمة المرور/تغيير الإيميل لأدمن فائق فقط، وإزالة `password` hash من الاستعلامات.
2. إصلاح `login_allow` — منع الدخول فعليًا للحسابات المعطلة.
3. **تعطيل التسجيل العام** أو تقييده، وضبط `SchoolScope` حتى لا تُساوي `null school_id` دائمًا super-admin.
4. تفعيل `ensureIsNotRateLimited()` و throttles على auth/password-reset.

### المرحلة 2 — الصواب المالي
5. توحيد إشارة Fund_Account لكل أنواع الدفعات.
6. إصلاح `ExchangeBondController::update` (عكس القيد الأصلي قبل الجديد).
7. **تحويل محسابات المال إلى integer cents** أو Value Object عشري — أهم إصلاح صوابي.
8. إصلاح `InventoryPaymentService` المخزّن `fee_invoices_id`، وإضافة قيود FK.

### المرحلة 3 — المخزون
9. توحيد auto-numbering في مزوّد واحد + `lockForUpdate` لـ `stockOut`.
10. إصلاح الثابت `type="sales"` في `create_sarf` / إضافة `authorize()` على `pay()` (وتحويله لـ POST).
11. إصلاح `array_filter` في `updateItem` للقيم الصفرية، وإصلاح علاقة `reference` الميتة.

### المرحلة 4 — الجودة
12. استيعاب 3 مسارات إنشاء الطالب في مسار واحد، وحذف الخدمات الميتة (`PromotionService`, `InventoryOrderQueryService`, `ReportPolicy`, `SettingsController::store`).
13. توحيد التسمية (الأعمدة `recipt__payments`, `excption_fees`, `reiligon`) والأدوار/الصلاحيات الحساسة لحالة الأحرف.
14. إضافة فهارس وفوائد FK مفقودة + pagination للقوائم الكبيرة + إصلاح CacheService.

### المرحلة 5 — الاختبارات
15. يوجد حاليًا ~50 ملف اختبار. إضافة اختبارات تغطي: ثغرات auth/الصلاحيات، البيانات المالية المزدوجة، انتظام المخزون المتزامن، ومسارات الأخطاء (الواجهات الفارغة).

---

## 8. ملخص الأولويات

| الأولوية | العدد | أمثلة |
|---|---|---|
| 🔴 حرج | 4 | AdminEraController، login_allow، تسجيل عام، bruteforce |
| 🟠 عالية | 9 | حساب مزدوج، انعكاس إشارة، IDOR، CSV injection |
| 🟡 متوسطة | 8 | فهارس، N+1، cache، أداء |
| ⚪ صيانة | 7 | تكرار، أسماء، كود ميت |

---

**الخلاصة:** النظام ذو أساس معماري جيد (خدمات، عزل مدارس، إعادة بناء مخزون نظيفة)، لكن فيه **ثغرات أمنية حرجة في المسار الإداري والدخول** و**أخطاء صوابية مالية** يجب إصلاحها قبل أي توسّع. يبدأ بالمرحلة 1 (وبالتحديد AdminEraController و login_allow) ثم المرحلة 2 المالية.
