Sprint 1 — الأمان الحرج (P0) — أسبوع واحد، بلا تفاوض

1. **إزالة `.env` من Git بالكامل**

- `git filter-repo` أو BFG لمسحه من الـ history

- تدوير كل الـ credentials فوراً (DB password, APP_KEY, أي API keys)

- التأكد إنه في `.gitignore`

2. **إصلاح `SettingsController@update_password`** ⚠️ **إضافة جديدة من تحليل الـ Models**

- بينشئ `new User` بدل تعديل الموجود — كلمة المرور فعلياً **متتغيرش**، والمستخدم يفتكر إنها اتغيرت. ده false sense of security، أولوية قصوى.

3. **إغلاق نمط الـ IDOR (تسريب بيانات بين المدارس) — نمط متكرر مش حالة واحدة**
   الحل الجذري: `Global Scope` أو `trait` موحد يتطبق تلقائياً على كل Model فيه `school_id`، بدل الاعتماد على كل مطور يحطها يدوي. المواضع المؤكدة لحد دلوقتي:

- `PaymentPartsController@index:28` — بدون فلتر school_id، بيحمّل كل الدفعات من كل المدارس

- `ExceptionFeesController@index:41` — بدون فلتر school_id

- `StudentsController@edit:204-205` — `Grade::all()` و `MyParent::all()` بدون فلتر

- `ClassRoomsController@index:57` — `Grade::get()` بدون فلتر

- `ReportController@index:39` — `InventoryItem::where('type','stock')->get()` بدون فلتر

- `ReportController@book_sheet_stock:163` — بدون فلتر

- `SchoolFeeController@getclasses:206` — بدون فلتر

- `AdminEraController@index:18` — `User::with('roles:id')->get()` بدون فلتر

- بالإضافة لـ 12+ controller من التحليل الأمني الأول (Student, FeeInvoice, InventoryItem, InventoryOrder, ReceiptPayment وغيرهم)

- تفعيل `GetSchoolMiddleWare` الفاضي فعلياً — يربط المدرسة بالـ request/container من البداية

4. **تأمين الـ API**

- نقل endpoints الـ grades/classes/academic-years جوه `auth:sanctum`

- Policy/Gate check على كل عملية create/update/delete في `StudentApiController` و `FeeInvoiceApiController`

- Rate limiting على كل الـ API routes

5. **إزالة `isAdmin` و `school_id` من mass-assignable** — شيلهم من `$fillable`، استخدام Spatie roles بدلها

6. **إضافة `nunomaduro/larastan` (PHPStan لـ Laravel)** — يمسك أخطاء زي `$stuudent` typo و`->fees->amount` على Collection تلقائياً قبل الـ production، مهم جداً بعد كل الـ bugs اللي اتكشفت بالمراجعة اليدوية

> 📦 **Packages للسبرنت ده:** `nunomaduro/larastan`

---

## Sprint 2 — الأخطاء الحرجة اللي هتتلاقى فوراً (P0) — 2-3 أيام

**دول bugs هتظهر لأول مستخدم يستخدم الصفحة، مش خفية زي باقي المشاكل**

6. `StudentsController@show:190` — typo `$stuudent` بدل `$student`، الـ view هيفشل بالكامل
7. `FeeInvoiceController@show:177` — `$invoice_details->fees->amount` — `fees` هي `hasMany` (Collection) مش `hasOne`، الوصول لـ `->amount` مباشرة هيرمي error أو null
8. `MyParentsController@destroy:142` — `$d->Students_count < 0` — العدد مينفعش يبقى سالب، الشرط لازم يبقى `== 0`

---

## Sprint 3 — سلامة البيانات المالية (P0) — أسبوع إلى أسبوعين

9. إصلاح `PaymentService::Fund_Account()` — ترتيب الـ Credit/Debit المعكوس
10. إصلاح الـ double entry في `FeeInvoice` — إزالة `CreateStudentAccount()` المكرر
11. توحيد status strings (`paid`/`not_paid`) في كل الـ DB والـ enums
12. إصلاح `scopeActive()` — `->where('is_active', true)` بدون تعارض مع soft deletes
13. إصلاح العلاقات المالية المكسورة — `SchoolFee::fee_invoices()`, `SchoolFee::students()`, `ExceptionFees::classroom()`
14. إضافة accounting reversal عند الحذف (receipt/invoice) — يرجّع `student_accounts` و`fund_accounts` وحالة الفاتورة لوضعهم الصح
15. إصلاح `generateAutoNumber()` — إضافة `lockForUpdate()` لمنع الـ race condition

> 📦 **Package مفيد:** `spatie/laravel-data` — Data Transfer Objects بدل تمرير arrays بين الـ Service Layer، بيقلل bugs زي مشكلة `FeeInvoice::fees` (الوصول لخاصية على النوع الغلط)

---

## Sprint 4 — ثغرات متوسطة ومنطق أعمال (P0 المتبقي + P1) — أسبوعين

16. تغيير route الدفع من GET لـ POST/PATCH مع CSRF token
17. إصلاح path traversal في الباك أب — sanitize لـ `$file_name`
18. تفعيل CSRF وrate limiting على عمليات الباك أب
19. إصلاح XSS — استبدال `{!! !!}` بـ `{{ }}` في الأماكن السبعة+، تأمين flash messages في JS context
20. تفعيل `AdminIpWhitelist` أو حذفه لو مش هيتستخدم
21. إصلاح ترتيب الـ routes — specific routes قبل الـ wildcard `{type}`
22. إضافة FormRequest validation لـ `PromotionController::store()` و `InventoryGardController::update()`

---

## Sprint 4.5 — إصلاحات حرجة في Schedules / Reports / Backup / ActivityLog (P0-P1) — أسبوعين

**⚠️ إضافة جديدة من تحليل الملفات الأربعة — دي أخطاء في نفس الموديولز اللي هنبني عليهم Sprint 15-17، لازم تتصلح الأول**

**Schedules.php (Livewire):** 45. حذف الجداول بالكامل قبل إعادة التوليد (`schedules_Managment::query()->delete()` سطر 67) بدون transaction ولا صلاحيات — لو `autoGenerate` وقعت في النص، المدرسة تفضل من غير جدول دراسي خالص. لازم `DB::transaction()` فوري 46. لا يوجد Policy/Gate — أي مستخدم عنده access للـ Livewire يقدر يمسح أو يولّد الجداول 47. N+1 في `render()` (سطر 225-231) — `User::where('type', TEACHER)->with('job')->get()`, `classes::all()`, `Grade::all()` بتتنادى في كل render بدل `#[Computed]` 48. خوارزمية الـ auto-generate ضعيفة (سطر 70-125) — لا يوجد load balancing حقيقي، المعلم الأول ياخد أول فصل متاح دايماً 49. `$listeners` deprecated — لازم `#[On('event')]` بدل `protected $listeners` (Livewire v3+)

**ReportController.php:** 50. **`DB::raw` بدون import في `final_year` (سطر 473)** — ده فعلياً fatal error هيحصل أول ما حد يفتح التقرير ده، مش تحسين 51. لا يوجد Validation ولا Authorization في أي method من الكونترولر كله 52. `ReportService` محقون في الـ Constructor بس **مش مستخدم في أي method** — كل المنطق مكتوب في الكونترولر مباشرة 53. `student_report` (سطر 187-234) و `final_year` (115 سطر، سطر 434-549) — methods ضخمة بمنطق معقد بدون service layer 54. `clothe_stock`, `book_sheet_stock`, `stock_product` — نفس المنطق مكرر 3 مرات (DRY violation)

**BackupController.php:** 55. `Artisan::call('backup:run')` مباشر في الـ Request بدل Queue Job — نفس المشكلة المذكورة في Sprint 6 بند 38، هنا بتفاصيل إضافية: لا يوجد Rate Limiting على عدد النسخ، ولا حماية ضد حذف نسخة شغالة حالياً

**ActivityLogController.php:** 56. **Wildcard injection في فلتر `action`** (سطر 24) — الـ `%` و `_` في مدخل المستخدم مش بيتعمللهم escape، لازم:

```php
$action = str_replace(['%', '_'], ['\\%', '\\_'], $request->action);
```

57. `$school` ممكن يرجع `null` من `getSchool()` وبعدين `$school->id` هيكسر الصفحة (سطر 16-17) — نفس نمط "بيانات مفترض وجودها من غير تحقق" اللي بنشوفه في كل حتة
58. لا يوجد Authorization — أي مستخدم عنده access يشوف كل سجلات النشاط بدون تحقق صلاحيات
59. Query مكرر لحساب `today()` بدل استخدام نفس الـ `clone $query` (سطر 35-37)

> 💡 **ملاحظة مهمة:** الملفات الأربعة دي بتشترك في نفس المشكلة اللي شفناها من قبل — **مفيش Authorization موحد**. الحل الجذري Policy واحدة أو Gate مركزي لكل الأربعة، مش إصلاح كل controller لوحده — نفس فلسفة الـ `SchoolScope` اللي طبقناها.

---

## Sprint 5 — أداء (N+1) وجودة الكود (P1) — أسبوعين

**مشاكل N+1 / Missing Eager Loading:** 23. `PromotionController@destroy:149` — `$promotions->student->name` بدون `with('student')` 24. `ReceiptPaymentController@destroy:236` — `$ReceiptPayment->student->name` بدون eager loading 25. `ExceptionFeesController@destroy:239` — `$pay->students->name` بدون eager loading 26. `AcademicYearController@show:78-81` — دمج 3 مجموعات models بدون أي eager loading 27. `ReportController@student_report:227` — `->chunk(100)` على Collection بعد `get()` — بلا فايدة فعلية

**استبدال `DB::table()` بـ Model relationships (7+ مواضع):** 28. `ClassRoomsController@index:40`, `GradesController@index:38`, `ReportController@index:35` — `DB::table('teacher_grade')` 29. `StudentsController@create:141` — `DB::table('school__fees')` 30. `HomeController@teacherWidgets:182,191,200` — 3 مواضع 31. `RoleController@edit:72` — `DB::table('role_has_permissions')`

**تحسينات أخرى:** 32. `ClassesController@add_students_submit:101` — `->first()` زائد بعد `findorfail()` 33. `PromotionController@store:101-103` — إعادة فلترة نفس الـ Collection بدل استخدام العنصر مباشرة

> 📦 **Package مفيد:** `spatie/laravel-query-builder` — يوحّد الفلترة والـ sorting عبر كل الـ controllers، بيقلل جزء كبير من كود التقارير والفلاتر المكرر

---

## Sprint 6 — بنية معمارية وTech Debt (P1-P2) — 2-3 أسابيع

**ينفع يتنفذ بالتوازي مع بداية سبرنتات الفيتشرز**

34. إضافة الـ indexes الناقصة — `school_id` على الجداول الحرجة، composite indexes على `inventory_orders`/`inventory_transactions`
35. تقسيم الـ God classes — `InventoryService` (539 سطر) → 3 خدمات، `FinancialService` → 3 خدمات
36. إزالة `SchoolTrait` من الـ Service Layer — المدرسة تتحقن كـ parameter بدل `Auth::user()` جوه الـ service
37. إضافة domain exceptions — `InventoryException`, `FinancialException`
38. Queue backup creation بدل الـ synchronous `Artisan::call()`
39. إضافة tests — أولوية قصوى لـ multi-tenancy enforcement والعمليات المالية

**توحيد الـ naming في الـ Models (P2 — مش عاجل، لكن يتراكم دَين تقني):** 40. أسماء lowercase مخالفة لـ PSR-4: `classes.php`, `schedules.php`, `nationality.php`, `promotion.php` 41. علاقات بأسماء جمع بس هي `belongsTo`: `students()` في `FeeInvoice` و`ExceptionFees` 42. علاقات بـ camelCase غلط: `StudentAccount()` في Student يجب أن تكون `studentAccount()` 43. Typos في أسماء العلاقات: `Adadmice_year()` → `academicYear()`, `excpetion()` → `exception()`, `recipt_payment()` → `receiptPayment()` 44. إنشاء `SchoolScope` فعلي بدل الـ Scopes الفارغة الموجودة
