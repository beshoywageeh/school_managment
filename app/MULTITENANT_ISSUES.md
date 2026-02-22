# Multitenancy Analysis - School Management System

## Overview

This document analyzes the current implementation of multitenancy using `school_id` in the School Management System, identifies issues, and provides recommendations for enhancement.

---

## Current Architecture

### Tenant Identification Method
- **Strategy**: Shared database with `school_id` column filtering
- **School Entity**: Uses `settings` table as the school model
- **Tenant Resolution**: Via authenticated user's `school_id` field

### Key Components
- **Trait**: `App\Http\Traits\SchoolTrait` - Provides `getSchool()` method
- **Model**: `App\Models\settings` - Represents school entity
- **User Field**: `users.school_id` - Links users to schools

---

## Critical Issues

### 1. Missing `school_id` Column in `student_accounts` Table

**Location**: `database/migrations/2024_05_21_160603_create_student_accounts_table.php`

**Issue**: The `student_accounts` table does not have a `school_id` column, but the code attempts to query by it.

**Evidence from logs**:
```
SQLSTATE[42703]: Undefined column: column "school_id" does not exist
select sum("credit") as aggregate from "student_accounts" where "school_id" = 1
```

**Impact**: Financial reports and queries fail silently or throw errors.

**Files Affected**:
- `app/Services/FinancialService.php` (attempts to set `school_id`)
- Any controller querying `StudentAccount` with `school_id`

---

### 2. Missing `school_id` in `schedules` Table

**Location**: `database/migrations/2025_01_13_194458_create_schedules_table.php`

**Issue**: No `school_id` column means schedules from all schools are mixed together.

**Impact**: Teachers/students could see schedules from other schools.

---

### 3. No Global Scope for Automatic Tenant Filtering

**Issue**: Every query must manually add `->where('school_id', ...)` which is:
- Error-prone
- Easy to forget
- Inconsistent across the codebase

**Example of inconsistent patterns**:

```php
// Pattern 1: Using SchoolTrait
$school = $this->getSchool();
Student::where('school_id', $school->id)->get();

// Pattern 2: Direct from Auth
Student::where('school_id', Auth::user()->school_id)->get();

// Pattern 3: In Livewire
Grade::where('school_id', Auth::user()->school_id)->get();
```

---

### 4. FinancialService Bug - CreateStudentAccount Missing school_id

**Location**: `app/Services/FinancialService.php:55-73`

**Issue**: The `CreateStudentAccount` method does not set `school_id`:

```php
public function CreateStudentAccount($student, $fees, $acc_year, $type, ...)
{
    $StudentAccount = new StudentAccount;
    $StudentAccount->student_id = $student->id;
    // ... other fields
    // school_id is NEVER set!
    $StudentAccount->save();
}
```

---

### 5. HomeController Query Bug

**Location**: `app/Http/Controllers/HomeController.php:103-105`

**Issue**: Incorrect query for non-admin parent count:

```php
$parents = My_parents::where('school_id', $schoolId)
    ->whereIn('student_id', $gradeIds)  // BUG: student_id compared to gradeIds
    ->count();
```

Should be:
```php
$parents = My_parents::where('school_id', $schoolId)
    ->whereHas('students', fn($q) => $q->whereIn('grade_id', $gradeIds))
    ->count();
```

---

### 6. Inconsistent Tenant Isolation in Livewire Components

**Location**: `app/Livewire/StudentTable.php:89`

**Issue**: Classroom query doesn't filter by school:

```php
public function getClassroomsProperty()
{
    if (!$this->grade_id) {
        return collect();
    }
    // Missing: ->where('school_id', ...)
    return class_room::where('grade_id', $this->grade_id)->get();
}
```

---

### 7. Missing `school_id` in `nationalities` Table

**Location**: `database/migrations/2024_12_08_183511_create_nationalities_table.php`

**Issue**: Nationalities are global, not per-school. May be intentional, but should be reviewed.

---

### 8. No Authorization Policies

**Issue**: Routes allow direct ID access without verifying school ownership:

```php
// routes/web.php - No school validation
Route::get('/{id}/show', 'show')->name('show');
Route::get('/{id}/edit', 'edit')->name('edit');
Route::get('/{id}/destroy', 'destroy')->name('destroy');
```

**Risk**: User from School A could potentially access/modify records from School B by changing the ID in URL.

---

### 9. School Model Confusion

**Issue**: Using `settings` table as school entity is confusing:

```php
// app/Http/Traits/SchoolTrait.php
$school = settings::where('id', $user)->with('image')->first();
```

**Problems**:
- Unclear naming (`settings` vs `schools`)
- Only has `name` field in fillable
- Should be a dedicated `School` model

---

### 10. Column Name Case Sensitivity Issues

**Evidence from logs**:
```
column "Father_name" does not exist
HINT: Perhaps you meant to reference the column "parents.Father_Name"
```

**Issue**: PostgreSQL is case-sensitive. Column is `Father_Name` but code queries `Father_name`.

---

## Security Vulnerabilities

### 1. IDOR (Insecure Direct Object Reference) Risk

Without proper authorization checks, users could access resources from other schools.

### 2. Missing Middleware for School Context

No middleware verifies that the user's school context is valid before processing requests.

### 3. Cascade Delete Concern

Foreign keys use `onDelete('Cascade')` which could accidentally delete all school data:

```php
$table->foreign('school_id')->references('id')->on('settings')
    ->onDelete('Cascade')  // Dangerous!
    ->onUpdate('Cascade');
```

---

## Enhancement Recommendations

### Priority 1: Critical Fixes

#### 1.1 Add Missing `school_id` Columns

Create migration for `student_accounts`:

```php
Schema::table('student_accounts', function (Blueprint $table) {
    $table->unsignedBigInteger('school_id')->nullable()->after('id');
    $table->foreign('school_id')->references('id')->on('settings')
        ->onDelete('Cascade')->onUpdate('Cascade');
});

// Backfill existing records
DB::statement('UPDATE student_accounts sa 
    JOIN students s ON sa.student_id = s.id 
    SET sa.school_id = s.school_id');
```

Create migration for `schedules`:

```php
Schema::table('schedules', function (Blueprint $table) {
    $table->unsignedBigInteger('school_id')->nullable()->after('id');
    $table->foreign('school_id')->references('id')->on('settings')
        ->onDelete('Cascade')->onUpdate('Cascade');
});
```

#### 1.2 Fix FinancialService Bug

```php
public function CreateStudentAccount($student, $fees, $acc_year, $type, 
    $debit = 0.00, $credit = 0.00, $recipt_id = null, $excpetion_id = null, 
    $exchange_bond_id = null, $school_id = null)
{
    $StudentAccount = new StudentAccount;
    $StudentAccount->school_id = $school_id ?? auth()->user()->school_id;
    // ... rest of the method
}
```

#### 1.3 Fix HomeController Bug

```php
private function getUserRoleCounts(int $userId, int $schoolId, bool $isAdmin): array
{
    if ($isAdmin) {
        $students = Student::where('school_id', $schoolId)->count();
        $parents = My_parents::where('school_id', $schoolId)->count();
    } else {
        $gradeIds = DB::table('teacher_grade')
            ->where('teacher_id', $userId)
            ->pluck('grade_id');

        $students = Student::where('school_id', $schoolId)
            ->whereIn('grade_id', $gradeIds)
            ->count();

        $parents = My_parents::where('school_id', $schoolId)
            ->whereHas('Students', fn($q) => $q->whereIn('grade_id', $gradeIds))
            ->count();
    }

    return [$students, $parents];
}
```

---

### Priority 2: Architecture Improvements

#### 2.1 Create a Global Scope for Tenant Isolation

```php
// app/Scopes/SchoolScope.php
<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class SchoolScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        if (Auth::check() && Auth::user()->school_id) {
            $builder->where($model->getTable() . '.school_id', Auth::user()->school_id);
        }
    }
}
```

#### 2.2 Create BelongsToSchool Trait

```php
// app/Models/Traits/BelongsToSchool.php
<?php

namespace App\Models\Traits;

use App\Scopes\SchoolScope;
use App\Models\settings;

trait BelongsToSchool
{
    public static function bootBelongsToSchool(): void
    {
        static::addGlobalScope(new SchoolScope);

        static::creating(function ($model) {
            if (Auth::check() && !$model->school_id) {
                $model->school_id = Auth::user()->school_id;
            }
        });
    }

    public function school()
    {
        return $this->belongsTo(settings::class, 'school_id');
    }

    public function scopeWithoutSchoolScope($query)
    {
        return $query->withoutGlobalScope(SchoolScope::class);
    }
}
```

#### 2.3 Apply Trait to Models

```php
// app/Models/Student.php
class Student extends Model
{
    use HasFactory, SoftDeletes, BelongsToSchool;
    // ... rest of model
}
```

---

### Priority 3: Security Enhancements

#### 3.1 Create School Context Middleware

```php
// app/Http/Middleware/EnsureSchoolContext.php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureSchoolContext
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->school_id) {
            abort(403, 'User not associated with any school.');
        }

        return $next($request);
    }
}
```

#### 3.2 Create Authorization Policies

```php
// app/Policies/StudentPolicy.php
<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Student;

class StudentPolicy
{
    public function view(User $user, Student $student): bool
    {
        return $user->school_id === $student->school_id;
    }

    public function update(User $user, Student $student): bool
    {
        return $user->school_id === $student->school_id;
    }

    public function delete(User $user, Student $student): bool
    {
        return $user->school_id === $student->school_id;
    }
}
```

#### 3.3 Register and Use Policies

```php
// app/Providers/AuthServiceProvider.php
protected $policies = [
    Student::class => StudentPolicy::class,
    // ... other policies
];

// In controllers
public function show(Student $student)
{
    $this->authorize('view', $student);
    // ...
}
```

---

### Priority 4: Code Quality Improvements

#### 4.1 Create Dedicated School Model

```php
// app/Models/School.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'settings';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'logo',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
```

#### 4.2 Update SchoolTrait

```php
// app/Http/Traits/SchoolTrait.php
<?php

namespace App\Http\Traits;

use App\Models\School;
use Illuminate\Support\Facades\Auth;

trait SchoolTrait
{
    public function getSchool(): ?School
    {
        return School::where('id', Auth::user()->school_id)
            ->with('image')
            ->first();
    }

    public function getSchoolId(): int
    {
        return Auth::user()->school_id;
    }
}
```

#### 4.3 Standardize Query Patterns

Create a helper or use query scopes consistently:

```php
// In models
public function scopeForCurrentSchool($query)
{
    return $query->where('school_id', auth()->user()->school_id);
}

// Usage
Student::forCurrentSchool()->where('grade_id', $gradeId)->get();
```

---

### Priority 5: Database Improvements

#### 5.1 Add Indexes for Performance

```php
Schema::table('students', function (Blueprint $table) {
    $table->index('school_id');
});

Schema::table('fee_invoices', function (Blueprint $table) {
    $table->index(['school_id', 'academic_year_id']);
});
```

#### 5.2 Consider Soft Deletes Over Cascade

```php
$table->foreign('school_id')
    ->references('id')
    ->on('settings')
    ->onDelete('restrict')  // Prevents accidental deletion
    ->onUpdate('Cascade');
```

---

## Testing Recommendations

### 1. Create Multitenancy Tests

```php
// tests/Feature/MultitenancyTest.php
<?php

test('user can only see students from their school', function () {
    $school1 = School::factory()->create();
    $school2 = School::factory()->create();
    
    $student1 = Student::factory()->create(['school_id' => $school1->id]);
    $student2 = Student::factory()->create(['school_id' => $school2->id]);
    
    $user = User::factory()->create(['school_id' => $school1->id]);
    
    actingAs($user)
        ->get(route('students.index'))
        ->assertSee($student1->name)
        ->assertDontSee($student2->name);
});

test('user cannot access student from another school', function () {
    $school1 = School::factory()->create();
    $school2 = School::factory()->create();
    
    $student = Student::factory()->create(['school_id' => $school2->id]);
    
    $user = User::factory()->create(['school_id' => $school1->id]);
    
    actingAs($user)
        ->get(route('students.show', $student))
        ->assertForbidden();
});
```

---

## Migration Checklist

- [ ] Add `school_id` to `student_accounts` table
- [ ] Add `school_id` to `schedules` table
- [ ] Create `SchoolScope` global scope
- [ ] Create `BelongsToSchool` trait
- [ ] Apply trait to all school-scoped models
- [ ] Fix `FinancialService::CreateStudentAccount`
- [ ] Fix `HomeController::getUserRoleCounts`
- [ ] Fix `StudentTable` classroom query
- [ ] Create authorization policies
- [ ] Create school context middleware
- [ ] Create dedicated `School` model
- [ ] Add database indexes
- [ ] Write multitenancy tests
- [ ] Review and update cascade delete behavior
- [ ] Fix column name case sensitivity issues

---

## Files Requiring Changes

### Models
- `app/Models/Student.php`
- `app/Models/User.php`
- `app/Models/Grade.php`
- `app/Models/class_room.php`
- `app/Models/My_parents.php`
- `app/Models/Fee_invoice.php`
- `app/Models/Recipt_Payment.php`
- `app/Models/StudentAccount.php`
- `app/Models/school_fee.php`
- `app/Models/acadmice_year.php`
- `app/Models/promotion.php`
- `app/Models/order.php`
- `app/Models/stock.php`
- `app/Models/laboratory.php`
- `app/Models/clothes.php`
- `app/Models/clothes_order.php`
- `app/Models/book_sheet.php`
- `app/Models/bookSheets_order.php`
- `app/Models/Exchange_bond.php`
- `app/Models/ExcptionFees.php`
- `app/Models/PaymentParts.php`
- `app/Models/fund_account.php`
- `app/Models/classes.php`

### Services
- `app/Services/FinancialService.php`

### Controllers
- `app/Http/Controllers/HomeController.php`
- `app/Http/Controllers/Students/StudentsController.php`
- And all other controllers using `SchoolTrait`

### Livewire Components
- `app/Livewire/StudentTable.php`
- `app/Livewire/EmployeesTable.php`

### Migrations (New)
- Add school_id to student_accounts
- Add school_id to schedules
- Add indexes for school_id columns

### New Files to Create
- `app/Scopes/SchoolScope.php`
- `app/Models/Traits/BelongsToSchool.php`
- `app/Http/Middleware/EnsureSchoolContext.php`
- `app/Policies/StudentPolicy.php`
- `app/Policies/GradePolicy.php`
- (and other policies as needed)
- `tests/Feature/MultitenancyTest.php`

---

## Conclusion

The current multitenancy implementation has several critical issues that could lead to:
1. **Data leakage** between schools
2. **Application errors** from missing columns
3. **Security vulnerabilities** from missing authorization
4. **Code inconsistency** from manual filtering

Implementing the recommended enhancements will:
1. **Automate tenant isolation** via global scopes
2. **Prevent cross-school access** via policies
3. **Improve code quality** with consistent patterns
4. **Enhance security** with proper authorization
5. **Fix existing bugs** in financial services

Priority should be given to fixing the missing `school_id` columns and the `FinancialService` bugs as these cause immediate errors.
