# إعادة تحليل النظام مقارنةً بـ `docs/plan.md`

> **التاريخ:** أغسطس 2026
> **المنهجية:** فحص فعلي لسطور الكود في كل ملف مذكور في الخطة، ومقارنة كل بند من الـ 44 بندًا بحالته الحالية.
> **الخلاصة الكبرى:** تحسّن كبير — معظم بنود "المرحلة صفر" والمالية اتصلحت فعلًا، لكن تبقّت ملاحظات حقيقية (جزئية أو جديدة).

---

## جدول النتائج الكامل (44 بند)

### 🔴 المرحلة صفر — المتحقّق

| # | الحالة | التفصيل |
|---|---|---|
| **1** | ✅ **اتصلح** | `DB::commit()` في `PaymentService.php` بقى قبل `return` في الدالتين (السطر 93 قبل 95، و180 قبل 182) |
| **2** | ✅ **اتصلح** | `use Exception;` موجود (السطر 14) |
| **3** | ✅ **اتصلح** | نوع الإرجاع `: array` اتشال من الدالتين |
| **4** | ✅ **اتصلح** | فيه فحص `if (! $invoice)` صريح (السطر 38) + `findorfail` للطالب |
| **5** | ✅ **اتصلح** | `receipt_payment_id` صح في `AccountService::createStudentAccount` (سطر 201) |
| **6** | ✅ **اتصلح** | المفتاح **و** المتغير بقوا `exception_id` (سطر 202) |
| **7** | ✅ **اتصلح** | `ExceptionFeesController.php` بقى يستخدم `exception_id` (S222,258,270) |
| **8** | ✅ **اتصلح** | `ReceiptPaymentController.update` بقى `where('receipt_payment_id', ...)` (S220-223) |
| **9** | ✅ **اتصلح** | `school_id` موجودة في `$fillable` في الأربعة موديلات + `exchange_bond_id` في `StudentAccount` |
| **10** | ✅ **اتصلح** (جزئيًا) | قاعدة `GradeStoreRequest` بقت بدون `id` إجباري، فالإ**نشاء** يعمل الآن |
| **11** | ✅ **اتصلح** | `GradesController.store` بيقرأ `$request->name` (سطر 62) |
| **12** | ✅ **اتصلح** | الشرط بقى `$grade->class_rooms_count` (سطر 169) |
| **13** | ✅ **اتصلح** | `ParentRepository` و`StudentRegeister` بيحفظوا `father_name` من `father_name/parent_name` مش `parent_id` |
| **14** | ✅ **اتصلح** | `ParentsTable` بقى فيه `use LogsActivity;` (سطر 13) |
| **15** | ✅ **اتصلح** | `ParentsTable.delete` بقى فيه `if/else` وreturn واحد (S63-76) |

---

### 💰 المالية — المتحقّق

| # | الحالة | التفصيل |
|---|---|---|
| **16** | ✅ **اتصلح** | hidden input واحد مربوط بـ Alpine `feeInvoice`، وكل زر بيحدد الـ id الصحيح عند الضغط |
| **17** | ✅ **اتصلح** | `use App\Models\StudentAccount;` موجود في `FeeInvoiceController` (سطر 15) |
| **18** | ✅ **اتصلح** | كل `exists:` بقى `exists:school__fees,id` مطابقًا للاسم الفعلي (المؤكَّد في `DashboardService` سطر 63) |
| **19** | ⚠️ **جزئي** | `reverseFeeInvoiceEntries` بقى بصحيح، لكن حذف العفو في `ExceptionFeesController::destroy` لسه بيعمل reversal ناقص |
| **20** | ✅ **اتصلح** | `min:0.01` مضاف لكل الـ requests النشطة — الـ `ReceiptPaymentRequest` اللي بيه `min:0` كلاس ميت/غير مستخدم |
| **21** | ✅ **اتصلح** | `StudentAccount` بقى فيه trait + `school_id` في `$fillable` |
| **22** | ✅ **اتصلح** | `DashboardService::getFinancialData` بقى بيفلتر بـ `where('school_id', ...)` |

---

### 🏦 الخزينة — المتحقّق

| # | الحالة | التفصيل |
|---|---|---|
| **23** | ✅ **اتصلح** | `ReceiptPaymentController.update` بقى يحدّث `fund_accounts` المرتبط (S234-239) |
| **24** | ✅ **اتصلح** | `$pay->Debit` بدل `$pay->amount` (سطر 168) |
| **25** | ⚠️ **جزئي** | `print.blade.php` بقي `description`، لكن `edit.blade.php` لسه بيقرأ `$exchange->note` |
| **26** | ✅ **اتصلح** | الرابط بقى `route('receipt-payment.show', $ReceiptPayment->id)` (سطر 33) |
| **27** | ✅ **اتصلح** | الـ reversal بقى بيعمل قيدًا جديدًا بعلامة معكوسة مع الحفاظ على الأصلي (الأسلوب الصحيح محاسبيًا) |
| **28** | ✅ **اتصلح** (في السيرفيس) | الـ reversal بيمرر كل بيانات السياق (student/grade/classroom/academic_year/type/school_id...) |
| **29** | ✅ **اتصلح** | `createOrUpdateExchangeBond` بقى فيه فحص رصيد + `lockForUpdate()` (S99-115) |
| **30** | ✅ **اتصلح** | `lockForUpdate()` + `DB::beginTransaction()` حول مسار `handlePartialPayment` |
| **31** | ✅ **اتصلح** | الـ `alreadyAccounted` / `alreadyFunded` بيمنعوا التكرار (S131-155) |
| **32** | ✅ **اتصلح** | `fee_invoices_id: null` + `exchange_bond_id: $exchange->id` بدل تمرير الكائن (S139-144) |
| **33** | ⚠️ **محتاجة مراجعة** | اتجاه قيد الصرف في `fund_accounts` محتاج إعادة فحص (انظر التفاصيل أدناه) |
| **34** | ✅ **اتصلح** | `destroy` بيستدعي `reverseExchangeBond()` قبل الحذف (سطر 155) |
| **35** | ✅ **اتصلح** | العملة بقت `config('school.currency')` + `Number::Currency` |
| **36** | ✅ **اتصلح** | `->paginate(...)` في `ExchangeBondController::index` (سطر 37) |

---

### 📈 التقارير — المتحقّق

| # | الحالة | التفصيل |
|---|---|---|
| **37** | ✅ **اتصلح** | كل أسماء الـ views بتتcall ببادئة `backend.report.PDF.*` |
| **38** | ✅ **اتصلح** | الاسم بقى `backend.report.PDF.payments_part` والملف موجود بالفعل |
| **39** | ✅ **اتصلح** | `payment_status_view` + service بيستخدموا `schoolFee` |
| **40** | ✅ **اتصلح** | `getFinalYearData` بقى بيبعت `Students_grouped` |
| **41** | — | لم يتم التحقق من الـ route في الفحص الحالي |
| **42** | ⚠️ **جزئي** | الـ validation اتضاف لمعظم دوال التقارير، لكن لسه ناقصة في `StockProducts`, `clothes_stocks`, `books_sheets`, `student_report` |
| **43** | ✅ **اتصلح** | `fee_invoices.blade` (S53) و`credit.blade` (S42) و`FinancialReportService` بقت `schoolFee?->amount` |
| **44** | ✅ **اتصلح** | الفلترة بقت `where('status', ...)` بدل `payment_status` (S122-124) |

---

## ⚠️ الملاحظات المتبقية / الجديدة (تحتاج انتباه)

### أ. حذف العفو بيعمل قيدًا عكسيًا ناقصًا (Issue 19 + 28 Remnant) — حقيقي
`ExceptionFeesController::destroy` (S256-276):
```php
foreach ($studentAccounts as $account) {
    $account->create(['Debit' => $account->Credit, 'Credit' => $account->Debit]);
}
```
- `$account->create()` على instance (وليس `StudentAccount::create`) بيكوّن سجلًا جديدًا **بدون** `student_id/exception_id/grade_id/academic_year_id/type/school_id` → قيد عكسي يتيم بدون سياق. نفس صنف مشكلة الـ Issue 28 (اللي اتصلحت في السيرفيس لكن **مش** في المتحكم).
- **الحل المقترح:** استخدام `AccountingReversalService` (أو `StudentAccount::create` بنقل كل سياق `$account`) بدل الـ instance `create`.

### ب. `edit.blade.php` لسه بيقرأ `$exchange->note` (Issue 25 Remnant)
`exchange_bond/edit.blade.php` سطر 28: `value="{{ $exchange->note }}"` — والعمود الفعلي `description`، فالوصف هيظهر **فاضي** في صفحة التعديل.
- **الحل:** استبدال `$exchange->note` بـ `$exchange->description`.

### ج. Issue 33 — اتجاه قيد الصرف في `fund_accounts` لسه مفتوحة
في `fund_accounts`، كلًا من **القبض** و**الصرف** بيسجّل `Credit = amount, Debit = 0`:
- القبض: `PaymentService` (S65-71): `Fund_Account(..., $invoice->schoolFee->amount, 0.0)` → Credit=amount, Debit=0
- الصرف: `AccountService` (S154): `fundAccount($school, $exchange->id, $request->amount, 0.0)` → Credit=amount, Debit=0

بينما في `student_accounts`، **صرف = debit** و**قبض = credit** (اتجاهين صحيحين ومعاكسين). إذًا الـ `fund_accounts` لسه محتاج إعادة فحص:
- الصرف المفروض يكون **معاكسًا** للقبض في اتجاهه.
- تناقض إضافي: `ExchangeBondController::update` (S119) بيحط `$FundAccount->Debit = $request->amount` (اتجاه مختلف عن `store` الذي يستخدم Credit=amount) → **store وupdate غير متطابقين** في `fund_accounts`.

### د. `GradeStoreRequest` مشترك بين إنشاء وتعديل (Issue 10 Remnant محتمل)
القاعدة بقت بدون `id` نهائيًا، وكود التعديل لسه بيقرأ `$request->id` (`GradesController` S133). لو `id` مش جاي في الـ request، **التعديل هيفشل بصمت**. الحل المخطط له في الخطة كان `sometimes` / `isMethod('put')` (مطلوب في التعديل فقط).

### هـ. ملاحظات جديدة رصدتها في الفحص
- `ExceptionFeesController::update` (S212-214): `ExceptionFees::where('id',...)->first()` بدون فحص null قبل `$pay->date = ...` → `Attempt to read property on null` لو السجل غير موجود.
- `ExceptionFeesController::destroy` (S269-273): متغير `$receiptIds` بيجمع `exception_id` (اسم متغير غير دقيق) وبيفضل **غير مستخدم** — كود ميت.
- `ExchangeBondController::update`: بينشئ `StudentAccount` جديد بالفرق (`$request->amount - $student_account->debit`) بدون فحص إن كان موجودًا بالفعل → إمكانية قيود مكررة/تراكمية، وبشكل مختلف عن منطق `store` (اللي فيه `alreadyAccounted`).

---

## الخلاصة

من أصل **44 بند**:
- **اتصلحت بالكامل:** ~34 (≈77%)
- **جزئية/متبقية:** 5 (19 — 25 — 33 — 42) + ملاحظة "د" على 10

**أخطر بنود التقرير الأصلي** (الـ `DB::commit`، الفحوصات، الأعمدة المغلوطة) **اتصلحوا فعلًا**. لكن التحذير الحاسم الوارد في نهاية الخطة — *"اقرأ كل الدوال المرتبطة، مش السطر المكسور"* — ما زال ساريًا في 3 أماكن:
1. `ExceptionFeesController::destroy` (قيد العكسي الناقص بلا سياق)
2. `exchange_bond/edit.blade.php` (يقرأ `note` بدل `description`)
3. `ExchangeBondController` (تناقض اتجاه `fund_accounts` بين store وupdate، + تراكم محتمل في `update`)
