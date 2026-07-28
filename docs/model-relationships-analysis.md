# تحليل متكامل لعلاقات Models واستخدامها في Controllers

> تاريخ التحليل: 26 يوليو 2026
> عدد Models: 27 | عدد Controllers: 42 | عدد الملفات: 29 models + 42 controllers

---

## أولًا: خريطة العلاقات الكاملة (Relationship Map)

### الجدول المركزي: Student

```
Student
├── belongsTo: User (user_id)
├── belongsTo: Grade (grade_id)
├── belongsTo: ClassRoom (classroom_id)
├── belongsTo: MyParent (parent_id)
├── belongsTo: AcademicYear (acadmiecyear_id)
├── belongsTo: nationality (nationality_id)
├── hasMany: StudentAccount (student_id)
├── hasMany: FeeInvoice (student_id)
├── hasMany: PaymentParts (student_id)
├── hasMany: ExceptionFees (student_id)
└── hasMany: InventoryOrder (student_id)
```

### الجدول المركزي: Grade

```
Grade
├── belongsTo: User (user_id)
├── belongsToMany: User (pivot: teacher_grade)
├── hasMany: ClassRoom (grade_id)
├── hasMany: classes (grade_id)
├── hasMany: Student (grade_id)
└── hasMany: SchoolFee (grade_id)
```

### الجدول المركزي: ClassRoom

```
ClassRoom
├── belongsTo: User (user_id)
├── belongsTo: Grade (grade_id)
└── hasMany: Student (classroom_id)
```

### الجدول المركزي: classes

```
classes
├── belongsTo: Grade (grade_id)
├── belongsTo: ClassRoom (class_room_id)
└── hasMany: Student (class_id)
```

### الجدول المركزي: User

```
User
├── morphMany: Image (imageable)
├── belongsToMany: School (settings relation)
├── belongsTo: Job (job_id)
├── belongsToMany: Grade (pivot: teacher_grade)
└── hasMany: schedules (user_id)
```

### الجدول المركزي: InventoryItem (NEW)

```
InventoryItem
├── belongsTo: Grade
├── belongsTo: ClassRoom
├── belongsTo: User
├── belongsTo: School
├── morphMany: InventoryOrderItem (itemable)
└── hasMany: InventoryTransaction (item_id)
```

### الجدول المركزي: InventoryOrder (NEW)

```
InventoryOrder
├── belongsTo: Student
├── belongsTo: School
├── belongsTo: User
├── hasMany: InventoryOrderItem
└── morphMany: InventoryTransaction (reference)
```

### العلاقات المتعددة الشكل (Polymorphic Relationships)

```
Image                ← morphTo  → User, School (imageable)
ActivityLog          ← morphTo  → أي Model (model_type, model_id)
InventoryOrderItem   ← morphTo  → InventoryItem (itemable)
InventoryTransaction ← morphTo  → InventoryOrder (reference)
School.image()       ← morphOne → Image (imageable)
```

---

## ثانيًا: تفصيل كل Model وعلاقاته

### 1. AcademicYear

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `creator()` | BelongsTo | User | `created_by` |
| `updator()` | BelongsTo | User | `updated_by` |

**الملف:** `app/Models/AcademicYear.php`
**الجدول:** `acadmice_years`
**المميزات:** SoftDeletes, HasFactory, Status Enum

---

### 2. ActivityLog

| العلاقة | النوع | الـ Model الآخر | التفاصيل |
|---------|-------|-----------------|----------|
| `user()` | BelongsTo | User | `user_id` |
| `subject()` | MorphTo | أي Model | `model_type`, `model_id` |

**الملف:** `app/Models/ActivityLog.php`
**الجدول:** `activity_logs`
**الـ Scopes:** `scopeBySchool($query, $school_id)`

---

### 3. classes

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `grade()` | BelongsTo | Grade | `grade_id` |
| `class_room()` | BelongsTo | ClassRoom | `class_room_id` |
| `students()` | HasMany | Student | `class_id` |

**الملف:** `app/Models/classes.php`
**الجدول:** `classes`

---

### 4. ClassRoom

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `user()` | BelongsTo | User | `user_id` |
| `grade()` | BelongsTo | Grade | `grade_id` |
| `students()` | HasMany | Student | `classroom_id` |

**الملف:** `app/Models/ClassRoom.php`

---

### 5. Employee

| العلاقة | النوع | الـ Model الآخر | التفاصيل |
|---------|-------|-----------------|----------|
| (وراثة) | — | User | STI: يرث من User، الجدول `users` |

**الملف:** `app/Models/Employee.php`

---

### 6. ExceptionFees

| العلاقة | النوع | الـ Model الآخر | Foreign Key | ملاحظات |
|---------|-------|-----------------|-------------|---------|
| `students()` | BelongsTo | Student | `student_id` | اسم خاطئ: يجب أن يكون `student()` |
| `academic_year()` | BelongsTo | AcademicYear | `academic_year_id` | |
| `grade()` | BelongsTo | Grade | `grade_id` | |
| `classroom()` | BelongsTo | ClassRoom | `class_id` | |
| `school_fee()` | BelongsTo | SchoolFee | `school_fee_id` | `withTrashed()` |

**الملف:** `app/Models/ExceptionFees.php`
**الجدول:** `excption_fees`

---

### 7. Exchange_bond

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `student()` | BelongsTo | Student | `student_id` |
| `acadmic_year()` | BelongsTo | AcademicYear | `academic_year_id` |
| `studentaccount()` | HasMany | StudentAccount | — |

**الملف:** `app/Models/Exchange_bond.php`

---

### 8. FeeInvoice

| العلاقة | النوع | الـ Model الآخر | Foreign Key | ملاحظات |
|---------|-------|-----------------|-------------|---------|
| `students()` | BelongsTo | Student | `student_id` | اسم خاطئ: يجب `student()` |
| `grades()` | BelongsTo | Grade | `grade_id` | اسم خاطئ: يجب `grade()` |
| `classes()` | BelongsTo | ClassRoom | `classroom_id` | اسم خاطئ: يجب `classRoom()` |
| `fees()` | BelongsTo | SchoolFee | `school_fee_id` | اسم خاطئ: يجب `fee()` |
| `acd_year()` | BelongsTo | AcademicYear | `academic_year_id` | |

**الملف:** `app/Models/FeeInvoice.php`
**الجدول:** `fee_invoices`
**الملاحظة:** جميع العلاقات BelongsTo لكن الأسماء في الجمع مما يسبب حيرة.

---

### 9. FundAccount

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `receipts()` | BelongsTo | ReceiptPayment | `receipt_id` |
| `exchange_bond()` | BelongsTo | Exchange_bond | `exchange_bond_id` |
| `user()` | BelongsTo | User | `user_id` |

**الملف:** `app/Models/FundAccount.php`
**الجدول:** `fund_accounts`

---

### 10. Grade

| العلاقة | النوع | الـ Model الآخر | التفاصيل |
|---------|-------|-----------------|----------|
| `user()` | BelongsTo | User | `user_id` |
| `users()` | BelongsToMany | User | pivot: `teacher_grade` (grade_id, teacher_id) |
| `class_rooms()` | HasMany | ClassRoom | `grade_id` |
| `students()` | HasMany | Student | `grade_id` |
| `classes()` | HasMany | classes | `grade_id` |
| `fees()` | HasMany | SchoolFee | `grade_id` |

**الملف:** `app/Models/Grade.php`

---

### 11. Image

| العلاقة | النوع | الـ Model الآخر | التفاصيل |
|---------|-------|-----------------|----------|
| `imageable()` | MorphTo | أي Model | `imageable_id`, `imageable_type` |

**الملف:** `app/Models/Image.php`

**النماذج المستخدمة معها:** User (morphMany), School (morphOne)

---

### 12. Job

| العلاقة | النوع | الـ Model الآخر | Foreign Key | ملاحظات |
|---------|-------|-----------------|-------------|---------|
| `creator()` | BelongsTo | User | `created_by` | |
| `updator()` | BelongsTo | User | `updated_by` | |
| `jobs()` | BelongsTo | Job | `main_job_id` | Self-referencing |
| `users()` | HasMany | User | `job_id` | |

**الملف:** `app/Models/Job.php`
**الجدول:** `work_jobs`

---

### 13. MyParent

| العلاقة | النوع | الـ Model الآخر | Foreign Key | ملاحظات |
|---------|-------|-----------------|-------------|---------|
| `user()` | BelongsTo | User | `user_id` | |
| `students()` | HasMany | Student | `parent_id` | `orderBy('join_date', 'ASC')` |

**الملف:** `app/Models/MyParent.php`
**الجدول:** `parents`

---

### 14. nationality

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `students()` | HasMany | Student | `nationality_id` |

**الملف:** `app/Models/nationality.php`

---

### 15. PaymentParts

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `students()` | BelongsTo | Student | `student_id` |
| `grades()` | BelongsTo | Grade | `grade_id` |
| `classes()` | BelongsTo | ClassRoom | `class_id` |
| `year()` | BelongsTo | AcademicYear | `academic_year_id` |

**الملف:** `app/Models/PaymentParts.php`

---

### 16. promotion

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `f_grade()` | BelongsTo | Grade | `from_grade` |
| `t_grade()` | BelongsTo | Grade | `to_grade` |
| `f_class()` | BelongsTo | ClassRoom | `from_class` |
| `t_class()` | BelongsTo | ClassRoom | `to_class` |
| `t_acc()` | BelongsTo | AcademicYear | `to_acc` |
| `f_acc()` | BelongsTo | AcademicYear | `from_acc` |
| `students()` | BelongsTo | Student | `student_id` |

**الملف:** `app/Models/promotion.php`

---

### 17. ReceiptPayment

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `student()` | BelongsTo | Student | `student_id` |
| `acc_year()` | BelongsTo | AcademicYear | `academic_year_id` |

**الملف:** `app/Models/ReceiptPayment.php`
**الجدول:** `recipt__payments`

---

### 18. schedules

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `teacher()` | BelongsTo | User | `user_id` |
| `job()` | BelongsTo | Job | `job_id` |
| `section()` | BelongsTo | classes | `class_id` |

**الملف:** `app/Models/schedules.php`

---

### 19. School

| العلاقة | النوع | الـ Model الآخر | التفاصيل |
|---------|-------|-----------------|----------|
| `image()` | MorphOne | Image | `imageable` |

**الملف:** `app/Models/School.php`
**الجدول:** `schools`

---

### 20. SchoolFee

| العلاقة | النوع | الـ Model الآخر | Foreign Key | ملاحظات |
|---------|-------|-----------------|-------------|---------|
| `user()` | BelongsTo | User | `user_id` | |
| `grade()` | BelongsTo | Grade | `grade_id` | |
| `classroom()` | BelongsTo | ClassRoom | `classroom_id` | |
| `year()` | BelongsTo | AcademicYear | `academic_year_id` | |
| `fee_invoices()` | HasMany | FeeInvoice | `fee_invoice_id` | قد يكون خاطئاً |
| `students()` | HasMany | Student | `school_fee_id` | قد يكون خاطئاً |

**الملف:** `app/Models/SchoolFee.php`
**الجدول:** `school__fees`
**المميزات:** LogsActivity, SoftDeletes

---

### 21. Student

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `user()` | BelongsTo | User | `user_id` |
| `grade()` | BelongsTo | Grade | `grade_id` |
| `classroom()` | BelongsTo | ClassRoom | `classroom_id` |
| `parent()` | BelongsTo | MyParent | `parent_id` |
| `StudentAccount()` | HasMany | StudentAccount | `student_id` |
| `Adadmice_year()` | BelongsTo | AcademicYear | `acadmiecyear_id` |
| `nationality()` | BelongsTo | nationality | `nationality_id` |
| `fee_invoice()` | HasMany | FeeInvoice | `student_id` |
| `parts()` | HasMany | PaymentParts | `student_id` |
| `excption()` | HasMany | ExceptionFees | `student_id` |

**الملف:** `app/Models/Student.php`

**الملاحظات:**
- `StudentAccount()` — PascalCase خاطئ، يجب `studentAccounts()`
- `Adadmice_year()` — خطأ إملائي، يجب `academicYear()`

---

### 22. StudentAccount

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `student()` | BelongsTo | Student | `student_id` |
| `classroom()` | BelongsTo | ClassRoom | `classroom_id` |
| `grade()` | BelongsTo | Grade | `grade_id` |
| `academic_year()` | BelongsTo | AcademicYear | `academic_year_id` |
| `fee()` | BelongsTo | FeeInvoice | `fee_invoices_id` |
| `recipt_payment()` | BelongsTo | ReceiptPayment | `receipt_payment_id` |
| `excpetion()` | BelongsTo | ExceptionFees | `exception_id` |

**الملف:** `app/Models/StudentAccount.php`
**الجدول:** `student_accounts`

---

### 23. User

| العلاقة | النوع | الـ Model الآخر | التفاصيل |
|---------|-------|-----------------|----------|
| `image()` | MorphMany | Image | `imageable` |
| `settings()` | BelongsToMany | School | pivot جدول relations |
| `job()` | BelongsTo | Job | `job_id` |
| `grades()` | BelongsToMany | Grade | pivot: `teacher_grade` |

**الملف:** `app/Models/User.php`
**المميزات:** HasApiTokens, HasRoles (Spatie), Notifiable, SoftDeletes

---

### 24-27. Inventory Models (NEW)

#### InventoryItem

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `grade()` | BelongsTo | Grade | `grade_id` |
| `classroom()` | BelongsTo | ClassRoom | `classroom_id` |
| `user()` | BelongsTo | User | `user_id` |
| `school()` | BelongsTo | School | `school_id` |
| `orderItems()` | MorphMany | InventoryOrderItem | `itemable` |
| `orders()` | — | — | alias لـ `orderItems()` |
| `transactions()` | HasMany | InventoryTransaction | `item_id` |

**الـ Scopes:** `scopeBySchool`, `scopeActive`, `scopeLowStock`, `scopeByType`, `scopeByCategory`

#### InventoryOrder

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `student()` | BelongsTo | Student | `student_id` |
| `school()` | BelongsTo | School | `school_id` |
| `user()` | BelongsTo | User | `user_id` |
| `items()` | HasMany | InventoryOrderItem | `inventory_order_id` |
| `transactions()` | MorphMany | InventoryTransaction | `reference` |

**الـ Scopes:** `scopeBySchool`, `scopeByType`

#### InventoryOrderItem

| العلاقة | النوع | الـ Model الآخر | التفاصيل |
|---------|-------|-----------------|----------|
| `order()` | BelongsTo | InventoryOrder | `inventory_order_id` |
| `itemable()` | MorphTo | InventoryItem | `itemable_id`, `itemable_type` |

#### InventoryTransaction

| العلاقة | النوع | الـ Model الآخر | Foreign Key |
|---------|-------|-----------------|-------------|
| `item()` | BelongsTo | InventoryItem | `item_id` |
| `school()` | BelongsTo | School | `school_id` |
| `user()` | BelongsTo | User | `user_id` |
| `reference()` | MorphTo | InventoryOrder | `reference_type`, `reference_id` |

---

## ثالثًا: استخدام العلاقات في Controllers

### ✅ Controllers تستخدم العلاقات بشكل صحيح

| Controller | الدالة | النمط المستخدم |
|------------|--------|----------------|
| `ClassRoomsController@index` | `with(['user', 'grade'])->withCount('students')` | eager loading + count |
| `StudentsController@show` | `with(['user:id,name', 'grade:id,name', 'classroom:id,name', 'parent:...'])` | eager loading محدد الأعمدة |
| `InventoryItemController@index` | `with(['grade' => fn($q) => $q->select(['id','name'])])` | closure-based eager |
| `InventoryOrderController@index` | `with('items.itemable')->withCount('items')` | nested eager loading |
| `ReportController@fees_invoices` | `with([...])->withSum('fees', 'amount')` | aggregate + eager |
| `InvoiceQueryService` | `with([...])->withSum('fees', 'amount')` | service delegation |

---

### 🔴 أخطاء حرجة (Bugs)

| الموقع | المشكلة | التصنيف |
|--------|---------|---------|
| `StudentsController@show:190` | `$stuudent` بدلاً من `$student` — الـ view سيفشل | typo |
| `FeeInvoiceController@show:177` | `$invoice_details->fees->amount` — `fees` هو hasMany (Collection) وليس hasOne، الوصول لـ `->amount` على Collection لن يعمل | logic error |
| `SettingsController@update_password:100` | ينشئ `new User` بدلاً من التحديث — كلمة المرور لن تتغير | logic error |
| `MyParentsController@destroy:142` | `$d->Students_count < 0` — العدد لا يمكن أن يكون سالباً، يجب `== 0` | logic error |

---

### 🟠 مشاكل أداء (N+1 Queries / Missing Eager Loading)

| الموقع | المشكلة |
|--------|---------|
| `PromotionController@destroy:149` | الوصول لـ `$promotions->student->name` بدون `with('student')` |
| `ReceiptPaymentController@destroy:236` | الوصول لـ `$ReceiptPayment->student->name` بدون eager loading |
| `ExceptionFeesController@destroy:239` | الوصول لـ `$pay->students->name` بدون eager loading |
| `AcademicYearController@show:78-81` | دمج 3 مجموعات models بدون أي eager loading |
| `ReportController@student_report:227` | `->chunk(100)` على Collection بعد `get()` — لا فعل لها |

---

### 🔴 مشاكل أمنية (Missing school_id Filtering)

| الموقع | المشكلة |
|--------|---------|
| `PaymentPartsController@index:28` | لا يوجد فلتر `school_id` — يحمل كل الدفعات من كل المدارس |
| `ExceptionFeesController@index:41` | لا يوجد فلتر `school_id` — يحمل كل الاستثناءات |
| `StudentsController@edit:204-205` | `Grade::all()` و `MyParent::all()` بدون فلتر مدرسة |
| `ClassRoomsController@index:57` | `Grade::get()` بدون فلتر مدرسة |
| `ReportController@index:39` | `InventoryItem::where('type','stock')->get()` بدون فلتر مدرسة |
| `ReportController@book_sheet_stock:163` | `InventoryItem::where('id', $request->stock)` بدون فلتر |
| `SchoolFeeController@getclasses:206` | `ClassRoom::where('grade_id', $id)` بدون فلتر مدرسة |
| `AdminEraController@index:18` | `User::with('roles:id')->get()` بدون فلتر مدرسة |

---

### 🟡 مشاكل برمجة (Code Quality)

| الموقع | المشكلة |
|--------|---------|
| `ClassRoomsController@index:40` | `DB::table('teacher_grade')` — استخدام DB عادي بدل Relationship |
| `GradesController@index:38` | `DB::table('teacher_grade')` — نفس المشكلة |
| `StudentsController@create:141` | `DB::table('school__fees')` — يجب استخدام Model |
| `HomeController@teacherWidgets:182,191,200` | `DB::table()` في 3 أماكن |
| `RoleController@edit:72` | `DB::table('role_has_permissions')` |
| `ReportController@index:35` | `DB::Table('teacher_grade')` — حتى حرف T كبير في Table |
| `ClassesController@add_students_submit:101` | `classes::findorfail()->first()` — `first()` زائد بعد `findorfail()` |
| `PromotionController@store:101-103` | إعادة فلترة نفس الـ Collection: `$Students->where('id', $student->id)->first()->name` |

---

### 🟡 مشاكل Naming في Models

| المشكلة | المثال |
|---------|--------|
| أسماء lowercase تخل بـ PSR-4 | `classes.php`, `schedules.php`, `nationality.php`, `promotion.php` |
| أسماء pluralization خاطئة | `students()` في FeeInvoice هي `belongsTo` (singular) |
| أسماء inconsistent | `students()` في ExceptionFees = BelongsTo (وليس HasMany) |
| صيغة camelCase في relation | `StudentAccount()` في Student = HasMany (يجب `studentAccount`) |
| أسماء typo | `Adadmice_year()` يجب أن تكون `academicYear()` |
| أسماء typo | `excpetion()` يجب أن تكون `exception()` |
| أسماء typo | `recipt_payment()` يجب أن تكون `receiptPayment()` |

---

## رابعًا: تحليل Inventory System (NEW)

### العلاقات في Inventory Models

```
InventoryItem ──morphMany──> InventoryOrderItem (itemable)
InventoryItem ──hasMany────> InventoryTransaction (item_id)
InventoryItem ──belongsTo──> Grade, ClassRoom, User, School

InventoryOrder ──hasMany───> InventoryOrderItem
InventoryOrder ──morphMany─> InventoryTransaction (reference)
InventoryOrder ──belongsTo─> Student, School, User

InventoryOrderItem ──morphTo──> InventoryItem (itemable)
InventoryOrderItem ──belongsTo> InventoryOrder

InventoryTransaction ──belongsTo──> InventoryItem
InventoryTransaction ──morphTo────> InventoryOrder (reference)
InventoryTransaction ──belongsTo──> School, User
```

### أنماط الطلب في Inventory

| Type | الحركة |
|------|--------|
| `inventory` (توريد) | `quantity_in` > 0, `quantity_out` = 0 |
| `sales` (بيع) | `quantity_in` = 0, `quantity_out` > 0 |
| `gard` (جرد) | تعديل مباشر عبر `adjustStock()` |

### استخدام Polymorphism في Inventory

- **InventoryOrderItem.itemable** ← InventoryItem — كل صنف في الطلب يشير لـ item عبر morph
- **InventoryTransaction.reference** ← InventoryOrder — كل معاملة مالية تشير لطلبها

---

## خامسًا: ملخص الإحصائيات

| الفئة | العدد |
|-------|-------|
| إجمالي Models | 27 (+ 2 Scopes فارغة) |
| إجمالي Controllers | 42 (20 root + 9 auth + 9 subdirs + 2 API + 2 other) |
| علاقات BelongsTo | ~70 |
| علاقات HasMany | ~25 |
| علاقات BelongsToMany | 2 (teacher_grade) |
| علاقات Polymorphic | 5 (morphTo, morphMany, morphOne) |
| أخطاء حرجة | 4 |
| مشاكل N+1 | 5 |
| مشاكل أمنية (school_id) | 8+ |
| استخدام DB::table بدل Model | 7+ |

---

## سادسًا: التوصيات

### أولوية حرجة

1. إصلاح typo `$stuudent` → `$student` في `StudentsController@show`
2. إصلاح `FeeInvoiceController@show` — استخدام `->first()` أو `->find()` لـ `fees`
3. إصلاح `SettingsController@update_password`
4. إضافة `school_id` filtering لـ `PaymentPartsController` و `ExceptionFeesController`

### أولوية عالية

5. إضافة eager loading في `PromotionController@destroy`, `ReceiptPaymentController@destroy`, `ExceptionFeesController@destroy`
6. استبدال `DB::table()` بـ Model relationships في Controllers
7. إضافة `school_id` filtering لـ `StudentsController@edit`, `ReportController@index`

### أولوية متوسطة

8. توحيد naming conventions في Models (PascalCase، صيغة singular/plural صحيحة)
9. إنشاء `SchoolScope` فعلياً بدل الـ Scopes الفارغة
10. استخدام `SchoolTrait` بشكل موحد عبر جميع Controllers
11. إصلاح `ClassesController@add_students_submit` — إزالة `->first()` الزائد بعد `findorfail()`
