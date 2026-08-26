# 📊 التحليل المتكامل لنظام إدارة المدرسة

> **نطاق التحليل:** الطلبة - أولياء الأمور - المراحل الدراسية - الصفوف | الحسابات: المصاريف الدراسية - الأرباع الدراسية - الأقساط - العفاءات - السنة الدراسية - إيصالات الدفع - سندات الصرف - الخزنة | التقارير المتعلقة بها جميعاً
>
> **تاريخ التحليل:** أغسطس 2026 | **Laravel:** 10.50.2 | **PHP:** 8.5.0 | **قاعدة البيانات:** MySQL

---

## جدول المحتويات

1. [خريطة البنية الحالية](#أولا-خريطة-البنية-الحالية)
2. [تحليل وحدة الطلبة وأولياء الأمور](#ثانيا-تحليل-وحدة-الطلبة-وأولياء-الأمور)
3. [تحليل الهيكل الدراسي (المراحل والصفوف والسنة)](#ثالثا-تحليل-الهيكل-الدراسي)
4. [تحليل الوحدة المالية التعليمية (المصاريف والأقساط والعفاءات)](#رابعا-تحليل-الوحدة-المالية-التعليمية)
5. [تحليل الخزينة (الإيصالات وسندات الصرف)](#خامسا-تحليل-الخزينة)
6. [تحليل وحدة التقارير](#سادسا-تحليل-وحدة-التقارير)
7. [التحليل المتكامل: المميزات والعيوب الجذرية](#سابعا-التحليل-المتكامل)
8. [الخصائص المقترح إضافتها (بالأولوية)](#ثامنا-الخصائص-المقترح-إضافتها)
9. [الخلاصة التنفيذية](#التخلصة-التنفيذية)

---

## أولاً: خريطة البنية الحالية

```
School ──< Grade ──< ClassRoom (فصل) ──< ClassRoom2/"classes" (شعبة) ──< Student
                    │                                                    │
AcademicYear ───────┼────────────────────────────────────────────────────┤
                                                                         │
SchoolFee (قالب سعر) ──< FeeInvoice (فاتورة الطالب)                      │
PaymentParts (أقساط يدوية، مرتبطة بالمصروف لا بالفاتورة!)               │
ExceptionFees (عفاءات)                                                   │
ReceiptPayment (إيصال قبض) ←→ StudentAccount (دفتر الطالب debit/credit)  │
ExchangeBond (سند صرف) ←→ StudentAccount + FundAccount (الخزنة)          │
```

**نقطة معمارية جوهرية:** النظام **ليس محاسبة قيد مزدوج حقيقية**، بل ثلاثة دفاتر متوازية منفصلة:

| الدفتر | الدور |
|---|---|
| `recipt__payments` | سندات القبض الفعلية (المبلغ في عمود `Debit`) |
| `student_accounts` | دفتر أستاذ الطالب (debit = فواتير وصرف، credit = مدفوعات وعفاءات) |
| `fund_accounts` | دفتر يومية الخزنة (صف لكل حركة، لا يوجد عمود رصيد محفوظ) |

تُنشأ القيود جنباً إلى جنب داخل معاملة واحدة غالباً، **دون دليل يومية موحد ولا مرجعية قيد مشترك** بينها.

### الجداول الرئيسية

| الجدول | Model | الدور |
|---|---|---|
| `students` | Student | بيانات الطالب (code, name, grade_id, classroom_id, parent_id, acadmiecyear_id ⚠️ خطأ إملائي) |
| `parents` | MyParent | بيانات الأب والأم مسطّحة في سجل واحد |
| `grades` | Grade | المراحل الدراسية |
| `class_rooms` | ClassRoom | الفصول/القاعات |
| `classes` | ClassRoom2 ⚠️ | الشعب (تسمية مربكة جداً) |
| `acadmice_years` ⚠️ | AcademicYear | السنوات الدراسية |
| `school__fees` ⚠️ | SchoolFee | قالب سعر المصاريف لكل صف/عام |
| `fee_invoices` | FeeInvoice | فاتورة رسوم الطالب |
| `payment_parts` | PaymentParts | الأقساط المخططة يدوياً |
| `excption_fees` ⚠️ | ExceptionFees | العفاءات/الحسومات |
| `recipt__payments` ⚠️ | ReceiptPayment | سندات القبض |
| `exchange_bonds` | ExchangeBond | سندات الصرف |
| `fund_accounts` | FundAccount | الخزنة |
| `student_accounts` | StudentAccount | دفتر حساب الطالب |
| `promotions` | Promotion | الترقيات بين الصفوف |
| `schedules` | Schedule | جداول الحصص |

⚠️ = خطأ إملائي معمّق في اسم الجدول/العمود أصبح جزءاً من الـ Schema.

---

## ثانياً: تحليل وحدة الطلبة وأولياء الأمور

### البنية

- **العلاقة student↔parent:** واحد لأكثر — كل طالب مرتبط بولي أمر واحد فقط عبر `students.parent_id`. الأب والأم مخزنان كبيانات مسطّحة (أعمدة `father_*` و`mother_*`) في سجل واحد موحّد.
- **طبقات الكود:** Controllers + Repositories (مع Interfaces) + Services (`StudentQueryService`, `StudentImportService`, `AgeCalculationService`) + Livewire (`ParentsTable`).
- **لا توجد أي Foreign Key Constraints** في migrations هذه الوحدة.

### نقاط القوة ✅

1. **عزل المدارس (Multi-tenancy):** trait `BelongsToSchool` يضيف Global Scope تلقائياً ويملأ `school_id` عند الإنشاء — ومغطاة باختبارات ممتازة (`SchoolScopeTest`, `MultiTenancyTest`).
2. **Form Requests للتحقق** (`StudentStoreRequest`, `ParentsRequest`, `StorePromotionRequest`) برسائل مترجمة.
3. **صلاحيات محكمة لكل عملية** عبر middleware `permission:` مع `@can` في الـ views.
4. **SoftDeletes بواجهة "المتخرجون"** مع restore وforceDelete منفصلين.
5. **Eager Loading صحيح** في عرض ولي الأمر وجدول Livewire مع pagination.
6. **Enums** للحالة والدين والجنس مع دوال ترجمة.
7. **Activity Logging غير متزامن** عبر Job على queue مستقل.
8. **استيراد Excel متقن جزئياً**: تعامل مع التواريخ العربية والإكسل الرقمي، تخطي التكرارات، إنشاء ولي أمر تلقائياً.

### نقاط الضعف 🔴 (الكود مكسور فعلياً)

#### أخطاء وظيفية حرجة

| # | الخطأ | الدليل |
|---|---|---|
| 1 | **إنشاء طالب من الواجهة مكسور تماماً**: متغير `$school` غير معرّف | `StudentRepository.php:58` |
| 2 | **`join_date` يُسجَّل بتاريخ الميلاد** بدلاً من تاريخ الالتحاق | `StudentRepository.php:41` |
| 3 | **لا توليد لـ `code`** وهو NOT NULL + unique (كود التوليد موجود فقط في مسار الاستيراد) | `StudentRepository.php:38-59` |
| 4 | **`createParent()` يرجع مبكراً ثم كود ميت** — يمرر `null` إلى `storeStudent` → crash | `ParentRepository.php:15-23` |
| 5 | **خاصية `$this->StudentFinance` غير معرفة** → Error داخل الtransaction | `StudentsController.php:180` |
| 6 | **صفحة عرض الطالب تفشل دائماً**: `findorfail('id', $studentId)` بتوقيع خاطئ | `StudentRepository.php:94-95` |
| 7 | **الاسترجاع مكسور مرتين**: بلا `onlyTrashed()` + route خاطئ بحرف كبير | `StudentsController.php:281-292` |
| 8 | **forceDelete يستخدم `$student->name` قبل التحقق من وجوده** | `StudentsController.php:327-332` |
| 9 | **حذف ولي أمر من Livewire يرسل GET لمسار DELETE → 405** | `ParentsTable.php:61` مقابل `routes/student.php:14` |
| 10 | **update ولي الأمر بدون FormRequest ولا findorfail ولا أي validation** | `MyParentsController.php:131-155` |
| 11 | **رسائل حذف متناقضة**: flash نجاح ثم flash "لا يمكن الحذف" يظهر دائماً | `MyParentsController.php:175-186` |
| 12 | **datalist حالة الأم فارغ دائماً**: استعلام خاطئ + قراءة خاصية غير موجودة | `MyParentsController.php:46,123` + `Parents/create.blade.php:81` |
| 13 | **رسالة نجاح استيراد مضللة** (غير متزامن لكنه يقرأ نتائج غير موجودة) | `StudentImportService.php:16-19` + `StudentsController.php:378` |

#### مشاكل الترقية (Promotion) — تصميم جوهري خاطئ

1. **الترقية "تحديث في المكان" لا نسخ**: `$Students->toQuery()->update(...)` يمسح البيانات الأكاديمية الحالية مباشرة — **التاريخ الأكاديمي للطالب يُدمَّر** (`PromotionController.php:81`).
2. **الاسترجاع غير كامل**: يعيد grade/classroom لكن **لا يعيد `acadmiecyear_id`** (`PromotionController.php:148-151`).
3. `updateOrCreate` بمفاتيح تشمل `user_id`: نفس الترقية بمستخدم مختلف تنشئ سجلاً مكرراً.
4. لا تحقق أن `new_grade != old_grade` ولا منع ترقية طالب تمت ترقيته فعلاً.
5. `index()` بدون pagination مع eager loading لـ 7 علاقات.
6. مقارنة حالة العام بـ `status => 0` رقمياً بينما StudentsController تستخدم enum — عدم اتساق.

#### الثغرات الأمنية 🐛

1. **unique عالمي بين المدارس**: `unique:students,name` و`unique:students,national_id` — يمنع تسجيل نفس الطالب بمدرستين ويسمح بجس نبض البيانات عبر المدارس.
2. **IDOR**: حقول `parent_id`/`academic_year`/`nationality`/`gender`/`student_status` بلا قواعد exists → يمكن ربط طالب ببيانات مدرسة أخرى.
3. **SQL Injection جزئي في الفرز**: `sort_by/sort_order` من request مباشرة إلى `orderBy()` دون whitelist (`StudentQueryService.php:73-82`).
4. **update ولي الأمر بدون تفويض إطلاقاً** + `ParentsRequest::authorize()` ترجع true دائماً.
5. تسريب رسائل الاستثناءات الخام للمستخدم (`$e->getMessage()` في session flash).
6. **تعارض منطق المشرف**: سطور 64-67 في `StudentQueryService` تقصر أي مستخدم ليس Admin بجدول `teacher_grade` → **مدير مدرسة يرى قائمة طلبة فارغة!**
7. **لا ParentPolicy إطلاقاً**.
8. تخطي الفلترة بصمت لمستخدم بلا school_id (`SchoolScope.php:28-31`).
9. regex هاتف الأب يستبعد مقطع 010 بينما الأم يقبلها (`ParentsRequest.php:28`).

#### الأداء 📈

- `graduated()` بدون pagination — كل الطلبة المحذوفين دفعة واحدة.
- عرض **كل** حركات `studentAccount` لكل الأبناء في صفحة ولي الأمر بلا حد + حساب sum() في الview.
- استعلامات داخل الviews (`nationality::all()`) وlazy loading (N+1).
- توليد `code` عالمي بلا قفل → سباق تحت التوازي.
- `AgeCalculationService` يحسب مرتين وقد ينتج نصاً مثل "7-2.45-3" مع Carbon 3 floats.
- magic numbers في الاستيراد: `academicYearId ?? 1` و`nationalityId ?? 64`.

#### جودة الكود

- عدم اتساق أسماء حقول create vs edit (`name/grade_id` مقابل `student_name/grade/class_room/parents/std_status`).
- أعمدة ميتة: `tameen`, `slug`, `class_id`.
- خلط مفاهيم: softDelete يُستخدم كـ"تخرج" — لا تمييز تخرج/انسحاب/حذف إداري.
- `dd()` معلق في `MyParentsController::Excel_Import:198`.
- **Nationalities بلا CRUD نهائياً** — نموذج وجدول فقط.
- جدول `images` polymorphic جاهز لكن غير مربوط بالوحدة.
- اختبار الوحدة شبه غائب (Scopes/Policies فقط).

---

## ثالثاً: تحليل الهيكل الدراسي

### البنية

- **ClassRoom vs ClassRoom2 ليسا جدولين مكررين بالخطأ بل طبقتان بترميز مربك:**
  - `ClassRoom` = **الفصل/القاعة** داخل المرحلة (مثل "1/1").
  - `ClassRoom2` = فعلياً جدول **`classes` = الشعبة** التي تجمع (مرحلة+فصل) ويُسند إليها الطلاب وتُبنى عليها الجداول.
  - alias `use App\Models\ClassRoom2 as classes;` منتشر في الكود — تسمية كارثية.
- **حقل `tameen` (التأمين) مكرر بنوعين مختلفين**: string في `class_rooms` وboolean في `classes`.
- **Student لا يعرّف علاقة `class()` رغم وجود العمود `class_id`** في جدوله.
- العلاقات معرفة يدوياً في migration `2025_12_30_194613_db_relations.php` (كلها CASCADE).

### نقاط القوة ✅

1. عزل المدارس مركزي وجيد التصميم مع تسجيل تحذير عند تخطي الفلترة.
2. صلاحيات Spatie على مستوى الconstructor بشكل متسق + `@can` في الviews.
3. Eager loading صحيح في أغلب القوائم (`withCount`, تحديد أعمدة).
4. Form Requests + رسائل ترجمة مخصصة لمعظم عمليات الإنشاء.
5. SoftDeletes + Transactions عبر `executeInTransaction`.
6. حماية من حذف مرحلة/فصل/شعبة بها طلاب.
7. Activity Log في جميع العمليات.
8. مكوّن Livewire Schedules فيه منطق توليد تلقائي مع فحص تعارضات ومغطى باختبارات.

### نقاط الضعف 🔴

#### أخطاء وظيفية حرجة (الكود مكسور فعلياً)

| # | الخطأ | الدليل |
|---|---|---|
| 1 | **FormRequest غير موجود إطلاقاً — انهيار 500 عند إنشاء سنة دراسية**: يستورد `AcadmiceYearStoreRequest` والملف الموجود `AcademicYearStoreRequest` باسم مختلف | `AcademicYearController.php:5,40` |
| 2 | **تعارض Validation↔Controller↔View في المراحل**: form يرسل `Grade_Name` والتحقق يطلب `name` إلزامياً → store يفشل دائماً | `GradeStoreRequest.php:26-33` + `create.blade.php:7` + `GradesController.php:62` |
| 3 | **حذف المرحلة مكسور**: `withcount('class_room')` والعلاقة اسمها `class_rooms` → RelationNotFoundException | `GradesController.php:168-169` مقابل `Grade.php:36` |
| 4 | **ValueError غير ملتقط**: Enum نصي (active/inactive) والمتحكم يخزن أرقاماً `(int)1` → ValueError لا يلتقطه catch(\Exception) → 500 | `AcademicYear.php` casts + `AcademicYearController.php:52,100` |
| 5 | **استعلام على عمود غير موجود**: `orderBy('year')` ولا يوجد عمود year في acadmice_years | `ReportService.php:116-121` |
| 6 | **استرجاع ترقية ناقص**: لا يعيد `acadmiecyear_id` | `PromotionController::destroy:146-152` |

#### الثغرات الأمنية 🐛

1. **Mass update بدون تحقق في إسناد الطلاب للشعب**: Request خام، بلا transaction، دون التحقق من انتماء الطلاب لنفس المرحلة/الفصل (`ClassesController::add_students_submit:95-116`).
2. **أكشنات Livewire بدون تفويض**: `autoGenerate()` و`clearSchedule()` تحذف **كل الجداول** بلا فحص صلاحية داخل الأكشن — الصلاحية مفروضة فقط على GET صفحة الويب (`Schedules.php:45,136`).
3. **سباقات**: فحوص التعارض check-then-create بلا قيد فريد في DB.
4. **unique rules عالمية بدل نطاق المدرسة** (كسر multi-tenant): `unique:grades,name` و`unique:acadmice_years,year_end`.
5. **update السنة الدراسية بلا validation ولا authorization**: Request خام تماماً.
6. **`show()` يعيد JSON خام من route ويب** بلا pagination ولا policy — تسريب بيانات طلاب/أولياء/مستخدمين (`AcademicYearController.php:70-84`).

#### مشاكل تصميمية

1. فوضى تسمية ClassRoom/classes + مسارات views متناقضة الأحرف (`backend.class_rooms.index` مقابل `backend.Grades.Index`).
2. ازدواجية منطق `tameen` بتنفيذ مختلف ونوعي أعمدة مختلفين.
3. **denormalization**: `classes.grade_id` قابل للاشتقاق من `class_room_id` ويظل محفوظاً يدوياً.
4. `$fillable` لا يشمل school_id في Grade/AcademicYear/ClassRoom — يعتمد كلياً على hook الtrait (يفشل للأدمن الذي school_id = null).
5. اختبارات قديمة/غير مطابقة (`GradeCrudTest`) تعطي ثقة زائفة.

#### الأداء 📈

- استعلام شرطي مشوه + فرع Admin يجلب كل الصفوف بلا pagination (`ClassRoomsController::index:42-51`).
- خصائص `#[Computed]` تجلب كل المستخدمين/الشعب/المراحل في كل render + ~96 استعلام في autoGenerate.
- **جدول schedules بلا فهارس مركبة ولا UNIQUE constraint** يمنع التضارب رغم استعلامه بـ day+period+class/user.
- قوائم بلا pagination (Promotions index، Classes index).

#### غياب "السنة النشطة" الموحدة

كل وحدة تحل السنة بطريقتها الخاصة:

```php
AcademicYear::where('status', config('school.academic_year_status'))->first()  // config افتراضي '0' !
where('status', 'active')                                                       // SchoolFeeController
where('status', 0)                                                              // PromotionController
whereYear('year_start', date('Y'))                                              // ClassRoomsController وغيره
```

### الميزات الناقصة

1. **المواد الدراسية (Subjects)** — غير موجودة نهائياً؛ الجداول مرتبطة بالوظيفة (job_id) لا بالمادة!
2. مصفوفة إسناد مدرس–مادة–شعبة (`teacher_grade` يربط بالمرحلة فقط).
3. شعب بلا capacity وبلا معلم مشرف.
4. **عملية إغلاق سنة/فتح سنة جديدة (Rollover)** — لا نسخ هياكل ولا منع تعدد سنوات نشطة.
5. **الفصول الدراسية (Terms/Semesters)** — كل شيء سنوي.
6. تعريف حصص بأوقات — `period` نص حر والعدد hardcoded = 8.
7. أيام دوام وإجازات رسمية.
8. ترتيب المراحل (`order/level`).
9. ارتباط الجداول بالسنة الدراسية — `schedules` لا يحمل academic_year_id إطلاقاً!
10. بدائل المعلمين وحضور الحصص.

---

## رابعاً: تحليل الوحدة المالية التعليمية

### البنية والدورة المالية

```
SchoolFee (قالب سعر لكل صف/فصل/عام)
    ↓ 1:N
FeeInvoice (فاتورة الطالب، status: not_paid/paid)
    ↓ (غير مرتبطة مباشرة!)
PaymentParts (أقساط مخططة يدوياً — مرتبطة بالمصروف school_fees_id وليس بالفاتورة!)

StudentAccount ← دفتر أستاذ الطالب (debit=فواتير/صرف، credit=مدفوعات/عفاءات)
ReceiptPayment ← سندات القبض الفعلية
ExceptionFees ← العفاءات (تُسجل credit في StudentAccount وليس خصماً من الفاتورة)
FundAccount ← خزينة المدرسة
```

**دورة الحياة:**
1. تعريف المصروف → يولّد **فواتير تلقائية لكل طلاب الفصل** داخل Transaction.
2. إنشاء الفاتورة → قيد مدين في StudentAccount. **لا تُولّد أقساط تلقائياً**.
3. الأقساط تُدخل يدوياً لكل طالب (تاريخ + مبلغ + unpaid).
4. التحصيل من شاشة سند القبض: فاتورة كاملة دفعة واحدة (لا دفع جزئي للفواتير!) أو توزيع على الأقساط FIFO.
5. العفو يسجل credit منفصل؛ إذا ساوى قيمة المصروف **يحذف الفاتورة نهائياً**!

**حساب المتبقي:** لا يوجد حساب مركزي — `sum(debit)-sum(credit)` ad-hoc في مواضع متفرقة.

### نقاط القوة ✅

1. `decimal(10,2)` في كل الأعمدة المالية + casts صحيحة.
2. عزل مدارس (Global Scope) — باستثناء StudentAccount!
3. خدمات مفصولة (`InvoiceService`, `AccountService`, `PaymentService`) مع DI.
4. DB transactions في المسارات الحرجة (إنشاء فاتورة+قيد، حذف فاتورة/سند مع عكس القيود).
5. صلاحيات Spatie + طبقة authorize ثانية.
6. فهارس مركبة مدروسة على fee_invoices.
7. CSRF + Activity Log غير متزامن + SoftDeletes.

### نقاط الضعف 🔴

#### سلامة الحسابات المالية — أخطاء حرجة

**(أ-1) أعمدة ربط تُكتب بأسماء خاطئة فتفقد البيانات صمتاً:**

| المكتوب (خطأ) | العمود الحقيقي | النتيجة | الدليل |
|---|---|---|---|
| `'recipt__payments_id'` | `receipt_payment_id` | **ربط الإيصال بالقيد لا يُحفظ أبداً** → حذف الإيصال لا يعكس قيود الطالب | `AccountService.php:139` مقابل migration `2024_05_21_160603:19` |
| `'excpetion_id'` | `exception_id` | ربط العفو بالقيد ضاع | `AccountService.php:141` |
| `exchange_bond_id` غير موجود في $fillable | — | رابط سند الصرف بالخزنة يضيع → delete() على null fatal | `FundAccount.php:16-22` مقابل `AccountService.php:113` |

**(أ-2) استعلامات عن أعمدة غير موجودة (SQL Error):**
- `where('excpetion_id', ...)` — `ExceptionFeesController::update:200`
- `where('recipt__payments_id', ...)` — `ReceiptPaymentController::update:204-215`

**(أ-3) ازدواجية حالات `unpaid` مقابل `not_paid`:**
- الكتابة: `InvoiceService.php:43` يكتب `'not_paid'` بينما `PaymentPartsController::store:88` يكتب `'unpaid'`.
- القراءة: شاشات القبض والعفاءات والأقساط تفلتر `'unpaid'` فقط → **الفواتير الجديدة لا تظهر في شاشة التحصيل نهائياً**.
- Migration `2026_07_28_144634` غيّرت العمود لنص افتراضه not_paid **بدون backfill** للصفوف القديمة، والـ Enum لا يعرف unpaid → ValueError لأي صف قديم.
- تقرير `credit`: `where('status', 0)` بعد تحويل العمود لنص → MySQL يحوّل paid وnot_paid كليهما إلى 0 → **التقرير يشمل المدفوع أيضاً**.

**(أ-4) حساب المبالغ المعروضة ≠ المحصّلة فعلاً:**
- View الإنشاء يطرح إجمالي العفاءات على كل فاتورة على حدة، بينما التحصيل يحصّل كامل المبلغ متجاهلاً العفاء (`reciptpayment/create.blade.php:66-67` مقابل `handleFeeInvoice:47`).
- `<input hidden name="feeInvoice">` داخل حلقة بنفس الاسم → PHP يأخذ آخر قيمة → **زر "سداد كامل" يسدد فاتورة أخرى!** (`create.blade.php:62`)
- `handlePartialPayment:112-114` يستعمر **كل** الأقساط دون فلترة حالة → **القسط المدفوع يُسدد مرة ثانية** (دفع مزدوج)، وفائض الدفع **يُهمَل بصمت**، ومبلغ أقل من أصغر قطعة لا ينشئ شيئاً ولا رسالة خطأ.
- السطر 153 يقرأ `$pay->amount` والعمود اسمه `Debit` → null.
- مقارنة عائمة فضفاضة `$request->amount == $fee->amount` + حذف فاتورة عند المساواة بدل تأشيرها.

**(أ-5) أخطاء تكسر التشغيل:**
- `StudentAccount::firstOrNew(...)` بدون استيراد الكلاس → Error: Class not found (`FeeInvoiceController::update:205`). كما يقرأ `$fee->amount` وجدول fee_invoices **لا يحتوي عمود amount أصلاً**.
- `exists:school_fees,id` بينما الجدول `school__fees` (شرطتان) → فشل Validation بخطأ SQL على Linux (`StoreFeeInvoiceRequest:19`, `StorePaymentRequest:19`).
- Migration جدول المصاريف يستدعي `->require()` وهي غير موجودة في Schema Builder → BadMethodCallException عند migrate:fresh، والأعمدة ليست NOT NULL فعلياً.

#### المعاملات (Transactions) ⚠️

| الموضع | المشكلة |
|---|---|
| `PaymentService::handleFeeInvoice/handlePartialPayment` | `beginTransaction()` ثم رمي FinancialException **دون rollBack** → معاملة مفتوحة |
| `PaymentPartsController::store` | **لا توجد معاملة إطلاقاً** — حلقة إنشاء أقساط؛ فشل الجزء الثالث يترك أول قسمين |
| ترقيم السندات اليدوي | آخر صف + 1 في PHP خارج أي قفل → سباق وتكرار (`ReceiptPaymentController:80-86`) |
| توليد فواتير صف كامل | حلقة each + Job لكل طالب داخل HTTP sync — 200 طالب = 400+ استعلام متزامنين، بلا bulk insert |

#### الأمان 🐛

1. **IDOR مالي**: `handleFeeInvoice:34-44` يجلب الفاتورة بـ id دون التحقق أنها للطالب المطلوب → يمكن تحصيل فاتورة طالب آخر وإثباتها على طالبك. نفس الثغرة في ExceptionFees.
2. **StudentAccount بلا عزل مدرسي**: لا BelongsToSchool ولا عمود school_id → `DashboardService:52` يجمع debit **لجميع المدارس** حتى عندما يكون schoolId محدداً، والتسمية معكوسة (`'credit' => sum('debit')`).
3. `FinancialReportService` يستعلم FeeInvoice/StudentAccount **دون فلتر مدرسة** بفلترات classroom/grade قادمة من request مباشرة → تزييف المعرفات يسرّب بيانات مدرسة أخرى.
4. `InvoiceQueryService:25-29` يمرر sort_by من الطلب مباشرة إلى orderBy.
5. `amount` بدون min:0.01 → **مصروف بسالب ممكن** (`StoreSchoolFeeRequest:31`).

#### منع التعديل/الحذف بعد الدفع — غير موجود تقريباً

| العملية | الخطر | الدليل |
|---|---|---|
| تعديل مبلغ قسط مدفوع | مسموح بلا فحص | `PaymentPartsController::update:123-129` |
| حذف قسط مدفوع | مسموح | `PaymentPartsController::destroy:146-157` |
| حذف فاتورة مدفوعة | مسموح + عكس بتبديل Debit/Credit بدل قيد عكس جديد → فقدان أثر التدقيق | `FeeInvoiceController:237-261` |
| حذف عفو | يحذف دون عكس قيده الائتماني → **رصيد الطالب يتضخم للأبد** | `ExceptionFeesController:231-243` |
| حذف مصروف مستخدم | يمسح رغم وجود فواتير → null dereference في show | `SchoolFeeController:179-202` |

#### الأداء والجودة 📈

- تقارير تجلب كل الصفوف ثم groupBy في PHP بدل تجميع SQL.
- Dashboard SUM كامل الجدول بلا حدود زمنية ولا فلترة مدرسة.
- `LIKE '%...%'` عبر whereHas غير قابل للفهارس.
- Views تستدعي `$student->studentAccount->sum(...)` بعد تحميل كل القيود للذاكرة بدل withSum.
- منطق أعمال في Controllers رغم وجود Services.
- `FinancialService` موسوم @deprecated لكنه لا يزال المسار الأساسي.
- `UpdateSchoolFeeRequest` لا يتحقق من العنوان بينما Controller يكتبه → عنوان قابل للإفراغ.
- تناقض العام الدراسي: config افتراضي '0' مقابل DB 'active' → بدون env ينهار على `$ac_year->id`.
- لا اختبارات تغطي handleFeeInvoice/handlePartialPayment إطلاقاً.

---

## خامساً: تحليل الخزينة

### نقاط القوة ✅

1. DB transactions صحيحة في `AccountService::createReceipt` و`createOrUpdateExchangeBond` والحذف.
2. فكرة العكس المحاسبي عند الحذف (`AccountingReversalService`) أفضل من الحذف الصامت.
3. ترقيم آمن نسبياً: `generateAutoNumber` بـ lockForUpdate داخل معاملة.
4. صلاحيات منظمة + طبقة authorize ثانية.
5. عزل مدرسي عبر Global Scope يشمل ReceiptPayment/ExchangeBond/FundAccount.
6. Form Requests بمنع المبالغ السالبة/الصفرية + فحص إضافي في الخدمة.
7. تدقيق نشاط غير متزامن.
8. طباعة عربية كاملة بالتفقيط A5 لسند الصرف.

### نقاط الضعف 🔴

**(أ) أعطال وظيفية مؤكدة بسبب أسماء الأعمدة — الأخطر:**

1. **ربط الإيصال بقيد الطالب لا يُحفظ أبداً** (مشكلة أ-1 أعلاه) → **الأثر المباشر**: عند حذف إيصال، `AccountingReversalService:28` يعيد فارغاً دائماً → **لا يُرجَع أي قيد طالب ولا تعود أي فاتورة إلى غير مدفوعة** (فقط صفوف الخزنة تُعكس). ضمانة "الحذف الآمن" وهمية نصفها معطل.
2. **تعديل الإيصال معطّل**: استعلام على عمود غير موجود → SQL error للمستخدم (`ReceiptPaymentController:204-207,215`).
3. **تعديل الإيصال لا يلمس الخزنة**: يغيّر مبلغ الإيصال وقيد الطالب لكن **لا يعدّل صف fund_accounts** المرتبط، ويفرض تاريخ اليوم على الحركة القديمة → عدم اتساق محاسبي كامل بين الدفاتر الثلاثة.
4. حقول غير موجودة في العروض والتقارير:
   - `$pay->amount` والعمود `Debit` (`PaymentService:153`)
   - `$exchange->note` والعمود `description` → **الوصف يطبع فارغاً دائماً** (`print.blade.php:84`)
   - رابط الطالب يمرر `$student->id` لمسار يتوقع id الإيصال → عرض خاطئ أو 404 (`index.blade.php:33`)
   - `FinancialReportService:119-129` يجمع عمود amount على fee_invoices وهو **غير موجود** → أرقام فارغة

**(ب) تعارض unpaid/not_paid** — كما فُصّل أعلاه: عطل حرج في العملية اليومية.

**(ج) سلامة الرصيد الخزني:**
1. **لا تحقق من كفاية الرصيد قبل الصرف إطلاقاً** → الرصيد يمكن أن يصبح سالباً بحرية، والعرض يقبل السالب دون تنبيه (`AccountService:62-100`).
2. **Race condition على الأقساط**: جلب بلا فلتر status وبلا lockForUpdate → double payment ممكن + إهمال الفائض.
3. **ازدواج القيود عند updateOrCreate**: ينشئ قيدين جديدين دائماً فوق القديمة → تضخيم/انكماش الرصيد دون أثر واضح (`AccountService:72-96`).
4. **تعديل سند الصرف يدمر الاتساق**: قيد طالب **بالفرق** + قيد خزنة **كاملاً** بمنهجين مختلفين لنفس التعديل، بلا فحص null ولا قفل، وسجل الخزنة يفقد قيمته التاريخية (`ExchangeBondController:88-118`).
5. **حذف سند الصرف بعكس منطق الإيصال**: يحذف نهائياً بلا قيد عكس ولا توثيق سبب — لا مطابقة مع AccountingReversalService (`ExchangeBondController:142-158`).
6. حد أقصى للمبلغ غائب → overflow على decimal(8,2) في fund_accounts يفشل الإدراج بعد نجاح الإيصال.
7. `manual` بسند الصرف يقبل أي نص دون unique → تكرار أرقام السندات.

**(د) IDOR والتحقق:**
1. قبض على فاتورة طالب آخر (كما فُصّل).
2. `updateOrCreate(['id' => $request->id],...)` — لو مُرِّر id بشكل ضار سيُعدَّل سند موجود دون فحص ملكية.
3. `exists:students,id` عالمي بلا قيد مدرسة.
4. ترقيم الإيصالات **المعروض** للمستخدم عابر للمدارس وغير مؤمَّن (`create:80-86` بخلاف generateAutoNumber المؤمَّن).

**(هـ) عزل مدرسي — صورة أدق:**
- ReceiptPayment/ExchangeBond/FundAccount محمية فعلاً بـ SchoolScope ✓
- **لكن StudentAccount ليس له scope ولا school_id أصلاً** → فلترة classroom_id/grade_id من request مباشرة في `getFinalYearData:70-76` تسمح بتسريب بيانات مالية لمدرسة أخرى بطلب مزوَّر.
- الأدمن يرى كل المدارس مختلطة بلا أداة اختيار مدرسة.

**(و) الطباعة:**
- عملة EGP **hardcoded** بدل `$school->currency` (`print.blade.php:77,80`).
- الوصف يطبع فارغاً (خطأ note)، ولا اسم مصرِف ولا وقت طباعة ولا QR توثيقي.
- لا صفحة طباعة مكافئة لتقرير الأقساط.

**(ز) أداء وجودة:**
- `ExchangeBondController::index:32-34` بلا pagination.
- FundAccountIndex/StatementTab جلب كامل بلا حدود + **لا رصيد تراكمي/افتتاحي في أي شاشة** (مجاميع يوم واحد فقط).
- تسميات مضللة: `FinancialService` مسمى `$StudentAccount`؛ علاقة `FundAccount::receipts()` هي BelongsTo مفردة.
- `whereYear('year_start', date('Y'))` بدون فلتر مدرسة → null deref محتمل + خطأ اختيار السنة في منتصف عام دراسي عابر لسنتين.
- `$request->student->name` في update:220 — Request لا يملك خاصية student → null في السجل.
- الاختبارات سطحية (صلاحيات/validation فقط) — لا اختبار لحذف إيصال مع عكس القيود، ولا للتسديد الجزئي، ولا لعزل المدارس.

---

## سادسا: تحليل وحدة التقارير

> **نتيجة رئيسية مذهلة: 17 من أصل 18 مسار ستنهار عند التشغيل** بسبب خطأ واحد في مسارات Views + علاقات Eloquent غير موجودة.

### جدول التقارير الموجودة

جميعها تحت البادئة `report` مع middleware `can:reports-view` والتصدير بـ `can:reports-export`:

| # | التقرير | Route | Method | العرض | الحالة |
|---|---|---|---|---|---|
| 1 | مركز التقارير | GET /report/ | index | Blade | ✅ يعمل |
| 2 | بيانات الطلاب | POST students-export | ExportStudents | PDF | ⛔ مكسور |
| 3 | مخزون المنتجات | GET stocks-product | StockProducts | PDF | ⛔ مكسور |
| 4 | الإعفاءات | POST exception-fee | exception_fee | PDF | ⛔ مكسور + علاقة وهمية |
| 5 | جرد صنف مخزون | POST stock | stock_product | PDF | ⛔ مكسور |
| 6 | جرد كتاب | POST book-sheet-stock | book_sheet_stock | PDF | ⛔ مكسور |
| 7 | مخزون الكتب | GET books-sheets | books_sheets | PDF | ⛔ مكسور |
| 8 | سجل المستجدين (نموذج 41) | POST student-report/{type} | student_report | PDF | ⛔ مكسور |
| 9 | حصر تأمين صحي (قانون 99/1992) | POST student-tameen | student_tameen | PDF | ⛔ مكسور |
| 10 | إجمالي زي | GET clothes-stock | clothes_stocks | PDF | ⛔ مكسور |
| 11 | جرد صنف زي | POST clothe-stock | clothe_stock | PDF | ⛔ مكسور |
| 12 | حالة الدفع | POST payment-status | payment_status | PDF | ⛔ علاقات وهمية |
| 13 | الفواتير الدراسية | POST fees-invoices | fees_invoices | PDF | ⛔ 4 علاقات وهمية |
| 14 | المدفوعات | POST payments | payments | PDF | ⛔ مكسور |
| 15 | الأقساط | POST payment-parts | payment_parts | PDF | ⛔ mismatch مزدوج |
| 16 | المستحقات (متأخرات) | POST credit | credit | PDF | ⛔ مكسور |
| 17 | رسوم المقررة | GET school-fees | school_fees | PDF | ⛔ مكسور |
| 18 | ختام السنة المالية | POST final-year | final_year | Blade HTML | ⛔ متغيرات ناقصة |

**ملاحظات:**
- **لا يوجد أي تصدير Excel** رغم تثبيت `maatwebsite/excel` (يُستخدم للاستيراد فقط).
- View يتيم: `daily_fee_view.blade.php` (الرسوم اليومية) موجود مع ترجمة جاهزة لكن **لا route ولا method**!
- قسم "الموظفين" في واجهة التقارير **فارغ تماماً** (`index.blade.php:124`).

### نقاط القوة ✅

1. فصل منطق الأعمال في 4 خدمات مخصصة (`ReportService`, `StockReportService`, `FinancialReportService`, `PDFExportService`).
2. Authorization على مستوى الروت عبر ReportPolicy + صلاحيات في seeder.
3. عزل مدرسي متعدد الطبقات (Global Scope + فلتر من Auth وليس request).
4. Eloquent بدل Raw SQL مع eager loading.
5. واجهة مركزية منظمة ببطاقات مصنفة + `@can` + Alpine.js للفلاتر التفاعلية.
6. RTL وعربية كاملة في قوالب PDF.
7. تقرير ختام السنة يستخدم SQL aggregation فعلياً (count + groupBy).

### نقاط الضعف 🔴

#### أعطال مكسورة (Critical)

1. **كل تقارير PDF مكسورة (17 مساراً)**: `PDFExportService::PrintPDF:11` يستدعي Views بأسماء مجردة (`PDF::loadView('students')`) بينما الملفات في `resources/views/backend/report/PDF/` → `View [students] not found`. الدليل المقارن: `GradesController.php:98` يستخدم المسار الكامل ويعمل. **الإصلاح: سطر واحد** (إضافة البادئة).
2. **ازدواجية كسر في الأقساط**: يمرر `'payment_parts'` (جمع) والملف `payments_part.blade.php` (مفرد) — mismatch مزدوج (`ReportController.php:117`).
3. **علاقات وهمية**: 
   - `payment_status():217` → `with('grades','students')` والعلاقات مفردة → RelationNotFoundException.
   - `fees_invoices():264` → `grades, classes, students, fees` — **الأربعة غير موجودة** في FeeInvoice.
   - `exception_fee():201` → `students` والعلاقة `student()`.
4. **تقرير ختام السنة يشير لمتغيرات غير مُمررة**: `$Students_grouped/$Students_grouped_sum` بينما الخدمة تعيد `Students_by_grade/Students_by_classroom` (`FinalYear.blade.php:32,64-65` مقابل `FinancialReportService.php:47-53`). اختيار "الكل" يعطي Undefined variable.
5. **رابط POST في واجهة GET**: `<a href>` لمسار POST → 405 (`index.blade.php:19`).
6. **Job التصدير مكسور وميت معاً**: 3 وسائط لكلاس يقبل وسيطاً واحداً + View غير موجود + لا أحد يستدعيه + `notifyUser()` فارغة stub.
7. Null pointer محتمل: `$data['acc_year']->id` و`$school->id` بلا فحص null في 4 مواضع.

#### الأمان 🐛

1. **صفر Validation في 18 دالة** — لا FormRequest ولا validate؛ التواريخ تُمرر مباشرة لـ Carbon::parse.
2. فلتر حالة الأقساط: popup يرسل نصوص ('all'|'unpaid'|'paid') والمتحكم يتوقع أرقاماً → نتائج خاطئة (`ReportController:113-115`).
3. **فلتر مراحل المعلم غير مفروض على الاستعلامات**: القوائم المنسدلة محصورة، لكن أي grade/classroom id يُقبل من الطلب → موظف يولّد كشف أي مرحلة بتزوير الطلب.
4. Admin يرى كل المدارس مختلطة بلا dropdown اختيار.
5. **لا Audit log للتصدير** — من صدّر أي تقرير حساس غير مسجل.
6. `findorfail` يرمي 404 خام + switch default فارغ → استجابة فارغة.

#### الأداء 📈

1. تحميل كامل للبيانات بلا استثناء: `ExportStudents`, `payments`, `credit`, `fees_invoices` — get() ثم groupBy في PHP. 5000 طالب = كل الفواتير والإيصالات دفعة واحدة.
2. Aggregation في PHP بدل SQL (`calculateTotals:32-46` بحلقة foreach؛ `getPaymentStatusReport` كود ميت).
3. `chunk(100)` زائف الفائدة: `get()->chunk(100)` حمّلت كل شيء أصلاً.
4. لا pagination في أي تقرير.
5. **لا فهارس مركبة مخصصة** للتقارير: `(school_id, date)`, `(academic_year_id, status)` غائبة عن receipt_payments/payment_parts/fee_invoices.
6. mPDF مع آلاف الصفوف يستهلك ذاكرة هائلة دون queue.

#### التكرار والفوضى

1. ازدواجية الفلتر المدرسي: `when($this->schoolId(),...)` يدوي + Global Scope تلقائي = نفس الشرط مرتين في كل استعلام.
2. **كود ميت في ReportService**: 6 دوال لا أحد يستدعيها (`getStudentReportByGrade`, `getGradesWithCounts`, ...).
3. Views يتيمة: `daily_fee_view`, `stock_product` (نسخة قديمة), `payments_part`.
4. تسمية فوضوية: snake_case مختلط بـ PascalCase في نفس الController.
5. **سنة دراسية ثابتة بالكود**: `Carbon::now()->format('Y')` في 5 مواضع → المستخدم **لا يستطيع توليد تقرير لعام سابق** إلا في تقرير credit وحده.

### التقارير الناقصة المهمة

**مالية تحليلية:**
1. **Aging Report (أعمار المتأخرات)** — 0-30/31-60/61-90/+90 يوماً لكل طالب وصف — العمود الفقري لإدارة التحصيل، غائب تماماً.
2. تقرير التحصيل الشهري/الترمي (مستهدف مقابل محصل).
3. مقارنة سنوات دراسية (النظام لا يدعم أصلاً اختيار عام سابق).
4. تدفق نقدي يومي للخزنة (النماذج موجودة **بلا أي تقرير**!).
5. تحليل حجم التنازلات (العفاءات لها قائمة فقط لا تحليل).
6. توقع الإيرادات المتبقية بناء على أقساط لم تُحصّل.

**أكاديمية وطلبة:**
7. Dashboard KPIs (يوجد DashboardService منفصل ليس ضمن وحدة التقارير).
8. تقرير الانسحاب/التسرب (عمود student_status موجود بلا أي تقرير يستثمره).
9. تقرير الترقيات والرسوب.
10. إحصاء ديموغرافي (gender/religion/nationality/birth_date كلها موجودة).
11. تقرير أولياء الأمور (أشقاء، حملات اتصال).

**تشغيلية:**
12. تقارير الموظفين — قسم فارغ في الواجهة.
13. إكمال تقرير الرسوم اليومية (View + ترجمة جاهزان، ينقصهما route وmethod فقط!).
14. تصدير Excel حقيقي + إصلاح ExportStudentsJob.
15. أرشفة وجدولة التقارير (توليد مجدول + إرسال بالبريد + سجل من ولّد ماذا).

---

## سابعاً: التحليل المتكامل

### ✅ المميزات (أساس جيد يمكن البناء عليه)

1. **Multi-tenancy محكم**: Global Scope + trait موحد + اختبارات عزل ممتازة — أفضل ما في النظام.
2. **طبقات صلاحيات منظمة**: Spatie middleware + `@can` في Views + Policies للتقارير.
3. **بذور هندسة سليمة**: Repositories/Services/Enums/Form Requests/Livewire موجودة كأنماط صحيحة.
4. **وعي محاسبي مبدئي**: decimal(10,2)، transactions في المسارات الحرجة، عكس قيود عند الحذف، تفقيط عربي، طباعة نماذج رسمية.
5. **بنية تحتية للتدقيق**: Activity Log غير متزامن على queue مستقل + Telescope.
6. **دعم عربي كامل**: RTL، ترجمة شاملة، نماذج حكومية (نموذج 41، قانون 99/1992).
7. **استيراد Excel** متقن جزئياً مع معالجة تواريخ عربية.

### ❌ العيوب الجذرية (أنماط متكررة عبر كل الوحدات)

| # | النمط الجذري | أمثلة وأثره |
|---|---|---|
| 1 | **أخطاء إملائية تسرّبت للـ Schema والاستعلامات** | `acadmiecyear_id`, `recipt__payments_id`, `excption_fees`, `scheduale-list`, `acadmice_years`. Mass assignment يتجاهلها صمتاً → **انكسار العكس المحاسبي، تعديلات الإيصالات، التقارير المالية** |
| 2 | **غياب الاختبارات الوظيفية** | المسارات المكسورة (إنشاء طالب/سنة دراسية/17 تقرير) كانت ستُكتشف بأول feature test. الاختبارات الحالية تغطي Scopes/Policies فقط |
| 3 | **عدم اتساق الحالات والقيم** | `unpaid/not_paid`, status رقمي/نصي/enum، `where('status', 0)` بعد تحويل العمود لنص → فواتير غير ظاهرة + تقارير خاطئة |
| 4 | **Validation ناقصة أو عابرة للمدارس** | unique عالمي، FKs بلا exists، Request خام في updates → IDOR عبر المدارس |
| 5 | **معاملات DB غير مكتملة** | beginTransaction بلا rollback، حلقات بلا transaction، check-then-create بلا locks → سباقات ودفع مزدوج |
| 6 | **لا حماية للسجلات المالية بعد السداد** | تعديل/حذف قسط أو فاتورة مدفوعة بحرية + عكس بالتبديل بدل قيود عكسية مؤرخة → فقدان أثر التدقيق |
| 7 | **تسميات مربكة** | ClassRoom vs ClassRoom2 vs classes؛ snake/PascalCase مختلطة؛ aliases مضللة |
| 8 | **غياب "المتبقي" المركزي** | الرصيد يُحسب ad-hoc في مواضع متفرقة بطرق مختلفة |
| 9 | **Admin بلا أداة اختيار مدرسة** | كل بياناته مختلطة عبر المدارس في كل الشاشات والتقارير |
| 10 | **كود ميت وViews يتيمة** | دوال لا تستدعى، Views بلا routes، Jobs ميتة |

### الخطر الأكبر: الوحدة المالية غير آمنة

- الربط بين الإيصالات والقيود معطل بصمت → الحذف الآمن وهمي.
- الدفع المزدوج للأقساط ممكن (race condition).
- رصيد الخزنة يمكن أن يصبح سالباً بحرية.
- يمكن تسديد فاتورة طالب آخر وإثباتها على طالبك (IDOR).
- تعديل السندات ينشئ قيوداً مزدوجة → الرصيد يتضخم/ينكمش دون أثر.
- StudentAccount بلا عزل مدرسي → تسريب مالي بين المدارس.

---

## ثامناً: الخصائص المقترح إضافتها

### 🚨 المرحلة صفر — إنقاذ قبل التطوير (يجب قبل أي ميزة جديدة)

| # | المهمة | الأولوية |
|---|---|---|
| 1 | توحيد أسماء الأعمدة والحالات + migration backfill لـ `unpaid→not_paid` + إصلاح `AccountService:139,141` | حرجة |
| 2 | كتابة Feature Tests لمسارات الكتابة الحرجة (ستكشف الانكسارات فوراً) | حرجة |
| 3 | إصلاح سطر `PDFExportService` لإحياء 17 تقريراً | حرجة |
| 4 | فحص ملكية المستند (الفاتورة/السند للطالب/المدرسة) + rollback موحد عبر executeInTransaction | حرجة |
| 5 | منع تعديل/حذف السجلات بعد السداد الجزئي | حرجة |
| 6 | whitelist للفرز + عزل validation بالمدرسة (`Rule::unique()->where(school_id)`) | عالية |

### 👨‍🎓 الطلبة وأولياء الأمور

| # | الميزة | ملاحظات |
|---|---|---|
| 7 | **بوابة ولي الأمر** | الحقل user_id جاهز! متابعة أبناء ومدفوعات وإشعارات |
| 8 | **تعدد أولياء أمور لكل طالب** | many-to-many مع نوع علاقة (أب/أم/وصي) وصلاحية استلام — التصميم المسطّح الحالي لا يسمح إلا بواحد |
| 9 | **عرض الأشقاء تلقائياً** | عبر نفس ولي الأمر + أساس لخصومات الإخوة |
| 10 | **سجل أكاديمي تاريخي** | سجل الطالب في كل عام (صف/فصل/حالة) — الترقية الحالية تدمر التاريخ |
| 11 | **ترقية بنسخة لا تحديث + ترقية مشروطة بالنتائج** | معاينة قبل التنفيذ وتقرير نتيجة واسترجاع كامل |
| 12 | حالات انتقالية صريحة | منسحب/مجمد/متخرج/منقول بتاريخ وسبب — بدل soft-delete كتخرج |
| 13 | مستندات وصور الطالب | ربط جدول images الجاهز (شهادة ميلاد، صورة شخصية) برفع آمن |
| 14 | بطاقة طالب PDF + تصدير Excel للقوائم | |
| 15 | CRUD للجنسيات ضمن الإعدادات | حالياً بلا controller/routes/views |
| 16 | تسلسل ترقيم code لكل مدرسة | transactional sequence بدل العداد العالمي |
| 17 | بحث وفلترة متقدمة | بالحالة والعام وولي الأمر والهاتف |
| 18 | بيانات صحية وسلوكية | حساسية، ملاحظات تربية |

### 🏫 الهيكل الدراسي

| # | الميزة | ملاحظات |
|---|---|---|
| 19 | **المواد الدراسية (Subjects)** | غائبة نهائياً — أهم فجوة هيكلية؛ الجداول مرتبطة بالوظيفة لا بالمادة! |
| 20 | مصفوفة مدرس–مادة–شعبة | teacher_grade يربط بالمرحلة فقط حالياً |
| 21 | سعة الشعب (capacity) + معلم مشرف (homeroom) | |
| 22 | **عملية إغلاق/فتح سنة (Rollover)** | نسخ الهياكل والرسوم + منع تعدد سنوات نشطة + خدمة "السنة النشطة" موحدة بدل 4+ أنماط |
| 23 | فصول دراسية (Terms/Semesters) | كل الرسوم والحصص سنوية حالياً |
| 24 | تعريف حصص بأوقات بداية/نهاية + أيام دوام وإجازات | period نصحر والعدد hardcoded = 8 |
| 25 | فهارس وقيود UNIQUE على الجداول | (day, period, class_id) و(day, period, user_id) |
| 26 | ترتيب المراحل (order) | لأتمتة الانتقال والعرض الصحيح |
| 27 | ربط schedules بالسنة الدراسية | حالياً لا يحمل academic_year_id — التوليد يمحو التاريخ |
| 28 | بدائل المعلمين وحضور الحصص | |

### 💰 المالية

| # | الميزة | ملاحظات |
|---|---|---|
| 29 | **خطط سداد قوالبية** | قوالب أقساط لكل صف/عام + توليد تلقائي — الحالي يدوي لكل طالب! |
| 30 | **دفع جزئي حقيقي للفاتورة** | رصيد جزئي لكل فاتورة بدل ثنائية paid/not_paid |
| 31 | غرامات تأخير + جدولة إنذارات | due_date غير مطبق حالياً |
| 32 | **محرك خصومات منظمة** | أشقاء آلية، تفوق، سقف خصم مُتحقق — العفو الحالي يدوي فردي |
| 33 | **قيود يومية Double-entry موحدة** | journal_entries + chart of accounts + أرقام قيود متسلسلة + Hash chain للتدقيق |
| 34 | رصيد تراكمي ومصادقات في الخزنة | running balance + مركز خزنة برصيد افتتاحي/ختامي |
| 35 | منع ذري للرصيد السالب | lockForUpdate قبل الصرف |
| 36 | تسوية بنكية | مطابقة كشوف، شيكات تحت التحصيل، حسابات بنكية منفصلة عن النقدية |
| 37 | صلاحيات صرف متدرجة | سقوف لكل دور + maker-checker للسندات الكبيرة |
| 38 | طرق دفع ومرفقات | نقدي/شيك/تحويل + مرجع العملية + صورة المستند — لا يوجد أي حقل وسيلة دفع حالياً |
| 39 | بوابة دفع إلكتروني | Webhooks + Idempotency-Key ضد الإرسال المزدوج + Reconciliation |
| 40 | إغلاق مالي سنوي | ترحيل أرصدة + تجميد فترات + منع تعديل بأثر رجعي (update الحالي يفرض تاريخ اليوم!) |
| 41 | VAT وفواتير رسمية مرقمة | ترقيم فواتير تسلسلي لكل مدرسة (generateAutoNumber كود ميت حالياً) |
| 42 | استرداد أموال (Refunds) | دورة استرداد بقيود عكسية مؤرخة بدل تبديل قيم القيود |
| 43 | إشعارات أولياء الأمور | قبل استحقاق القسط وعند السداد/التأخر |
| 44 | عملة قابلة للتهيئة | EGP hardcoded حالياً رغم وجود school->currency |

### 📈 التقارير والتحليلات

| # | الميزة | ملاحظات |
|---|---|---|
| 45 | **Aging Report للمتأخرات** | 0-30/31-60/+90 — العمود الفقري للتحصيل، غائب تماماً |
| 46 | تقرير تحصيل شهري (مستهدف مقابل محصل) | بنسبة تحصيل لكل مرحلة وصف |
| 47 | مقارنة سنوات دراسية | يتطلب دعم اختيار عام سابق (غير موجود أصلاً) |
| 48 | تدفق نقدي يومي للخزنة | النماذج موجودة بلا أي تقرير |
| 49 | Dashboard KPIs | طلبة، نسبة سداد، ملء طاقة استيعابية |
| 50 | تقرير انسحاب/تسرب + ديموغرافيا | الأعمدة كلها جاهزة بلا تقرير يستثمرها |
| 51 | **تصدير Excel حقيقي** | المكتبة مثبتة ومعطلة + إصلاح ExportStudentsJob |
| 52 | إحياء تقرير الرسوم اليومية | View + ترجمة جاهزان، ينقصهما route وmethod فقط! |
| 53 | جدولة تقارير دورية بالبريد + Audit log للتصديرات | |
| 54 | اختيار مدرسة للأدمن + اختيار سنة دراسية في كل التقارير | |

---

## التخلصة التنفيذية

النظام يمتلك **هيكلاً تنظيمياً جيد النوايا** (عزل مدارس ممتاز، صلاحيات منظمة، فصل طبقات جزئي) لكنه يعاني من **انكسار وظيفي واسع** نتج عن ثلاثة أعراض مترابطة:

1. **أخطاء إملائية تسرّبت لطبقة البيانات** — سببت انكسار العكس المحاسبي وتعديلات الإيصالات والتقارير المالية بصمت.
2. **غياب اختبارات feature للمسارات الحرجة** — الانكسارات (إنشاء طالب/سنة دراسية/17 تقريراً) لم تُكتشف أبداً.
3. **عدم اتساق القيم والحالات** — unpaid/not_paid وأرقام مقابل enums أخفت الفواتير الجديدة من شاشات التحصيل.

**الأخطر أن الوحدة المالية — وهي حساس النظام — غير آمنة محاسبياً:** الربط بين الإيصالات والقيود معطل، الدفع المزدوج ممكن، رصيد الخزنة يمكن أن يصبح سالباً، ويمكن تسديد فاتورة طالب آخر، ودفتر حسابات الطلبة بلا عزل مدرسي.

> **التوصية النهائية:** لا تُضف ميزة واحدة جديدة قبل إنقاذ الأساس (توحيد الأعمدة/الحالات + اختبارات + إصلاحات السلامة المالية — "المرحلة صفر"). بعدها، أعلى مردود استثماري: **بوابة ولي الأمر + خطط السداد القوالبية + Aging Report + المواد الدراسية**.
