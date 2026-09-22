# Table Search for Admin List Screens — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Add server-side search (+ a few filter selects) to 14 admin list screens using one shared `<x-filters>` Blade component, matching the existing inventory search pattern, with search params preserved across pagination.

**Architecture:** Server-side GET-form filtering. A shared Blade component renders the search bar; each controller applies `->when(request(...))` filters to its existing query; every paginated view switches to `->withQueryString()->links()` and corrects row numbering to `firstItem() + $loop->index`.

**Tech Stack:** PHP 8.5 / Laravel 10, Tailwind v4 utility classes, Blade components, PHPUnit 10 (feature tests), Laravel Pint.

## Global Constraints

- Config: pagination size is always `config('school.per_page')`.
- Behavior: GET form, `GET` filters, server-side `LIKE` / `whereHas`; pagination links must keep the query string (`->withQueryString()->links()`).
- Naming: filter param default `search`; two screens use the pre-built services whose param is `students` (Students index, FeeInvoices) via the component's `searchName` prop.
- Conventions: follow sibling code style; reuse `trans('general.search')`, `trans('general.all')`, `trans('general.reset')`, `trans('employees.reset_filters')` — no new lang keys.
- Tests are PHPUnit (NOT Pest). Every screen change ships with a passing feature test appended to `tests/Feature/TableSearchTest.php`; run the single test after each screen task.
- Run `vendor/bin/pint --dirty --format agent` before finalizing. Do not change routes, models, or dependencies.
- Test-data note: where a factory lacks a required relation the view renders, seed it explicitly (grade, classroom, academic year, student) exactly like `FeeInvoiceFactory` does. Admin user `$this->admin` is used for `actingAs`.

---
### Task 1: Shared `<x-filters>` component

**Files:**
- Create: `resources/views/components/filters.blade.php`
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: Blade component `<x-filters action="" reset="" placeholder="" label="" searchName="search">...</x-filters>`. Exact `oldString`/`newString` anchors for each view are given in later tasks. Component public API:
  - `action` — form `action` (index route URL).
  - `reset` — link target that clears filters (same index route URL).
  - `placeholder` — search input placeholder (the column being searched).
  - `label` — search input label (defaults to `trans('general.search')`).
  - `searchName` — the `name` attribute of the search input (default `search`).
  - `$slot` — optional filter `<select>` blocks (each wrapped in its own `<div>` to fill the CSS grid column).

- [ ] **Step 1: Write the failing test**

Create `tests/Feature/TableSearchTest.php`:

```php
<?php

namespace Tests\Feature;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class TableSearchTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);

        $school = School::factory()->create();
        $this->admin = User::factory()->create(['school_id' => $school->id]);
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $role = Role::firstOrCreate(['name' => 'search-test-role-'.$permission]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    public function test_filters_component_renders_search_form(): void
    {
        $html = $this->blade('<x-filters action="/x" reset="/x" placeholder="Enter-Name" />');

        $this->assertStringContainsString('<form method="GET" action="/x"', $html);
        $this->assertStringContainsString('name="search"', $html);
        $this->assertStringContainsString('Enter-Name', $html);
    }
}
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_filters_component_renders_search_form`
Expected: FAIL (component `filters` does not exist / view not found).

- [ ] **Step 3: Create the component**

Create `resources/views/components/filters.blade.php`:

```blade
@props([
    'action' => url()->current(),
    'reset' => url()->current(),
    'placeholder' => trans('general.search'),
    'label' => trans('general.search'),
    'searchName' => 'search',
])
<div class="p-4 bg-gray-50 border-b border-gray-100">
    <form method="GET" action="{{ $action }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <x-input-label>{{ $label }}</x-input-label>
            <input type="text" name="{{ $searchName }}" value="{{ request($searchName) }}"
                class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                placeholder="{{ $placeholder }}">
        </div>
        {{ $slot }}
        <div class="flex items-end gap-2">
            <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 text-sm">
                {{ trans('general.search') }}
            </button>
            <a href="{{ $reset }}" class="px-4 py-2 text-sm text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-100">
                {{ trans('general.reset') }}
            </a>
        </div>
    </form>
</div>
```

- [ ] **Step 4: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_filters_component_renders_search_form`
Expected: PASS.

- [ ] **Step 5: Commit**

```bash
git add resources/views/components/filters.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: add shared x-filters search bar component"
```

---
### Task 2: Students index

**Files:**
- Modify: `app/Http/Controllers/Students/StudentsController.php:63-120`
- Modify: `resources/views/backend/Students/Index.blade.php` (insert filter bar before `<div @class(['container', 'mx-auto', 'p-6'])>`; `links()` at line 102)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Consumes: `$this->studentQuery->getFilteredQuery(Request, ?int $schoolId)` — exists, currently commented out, driven by request keys `students`, `grade_id`, `classroom_id`. `StudentQueryService` is already injected as `private StudentQueryService $studentQuery`.
- Produces: index action reacts to `students`, `grade_id`, `classroom_id` query params.

- [ ] **Step 1: Write the failing test (append to `tests/Feature/TableSearchTest.php`)**

```php
    public function test_students_index_filters_by_student_name(): void
    {
        $this->givePermission($this->admin, 'Students-list');
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $classroom = \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $make = fn (string $name) => \App\Models\Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => \App\Models\MyParent::factory()->create(['school_id' => $school->id])->id,
            'name' => $name,
        ]);
        $make('SearchableStudentOne');
        $make('UnrelatedStudentXYZ');

        $this->actingAs($this->admin);

        $response = $this->get(route('students.index', ['students' => 'SearchableStudentOne']));
        $response->assertOk();
        $response->assertSee('SearchableStudentOne');
        $response->assertDontSee('UnrelatedStudentXYZ');
        $response->assertSee('students=SearchableStudentOne');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_students_index_filters_by_student_name`
Expected: FAIL (both names rendered, no filtering; `students=` query not carried).

- [ ] **Step 3: Wire the controller**

Replace `StudentsController::index` body (lines 63-120) with:

```php
    public function index(Request $request)
    {
        $school = $this->getSchool();
        $gradeOptions = Grade::pluck('name', 'id')->toArray();
        $classroomOptions = ClassRoom::pluck('name', 'id')->toArray();
        $Students = $this->studentQuery->getFilteredQuery($request, $this->schoolId());

        return view(
            'backend.Students.Index',
            compact('school', 'gradeOptions', 'classroomOptions', 'Students'),
        );
    }
```

Delete the now-unused commented `// $columns = [...]`, `// $students = ...`, and `// if ($request->expectsJson()){...}` blocks (lines 68-114). `Grade` and `ClassRoom` are already imported; `Request` is already imported.

- [ ] **Step 4: Update the view**

In `resources/views/backend/Students/Index.blade.php`, insert this block directly before `<div @class(['container', 'mx-auto', 'p-6'])>` (line 20):

```blade
        <x-filters action="{{ route('students.index') }}" reset="{{ route('students.index') }}" searchName="students" placeholder="{{ trans('student.name') }}">
            <div>
                <x-select name="grade_id" label="{{ trans('Grades.title') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach ($gradeOptions as $id => $name)
                        <option value="{{ $id }}" {{ request('grade_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </x-select>
            </div>
            <div>
                <x-select name="classroom_id" label="{{ trans('class_rooms.Name') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach ($classroomOptions as $id => $name)
                        <option value="{{ $id }}" {{ request('classroom_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </x-select>
            </div>
        </x-filters>
```

Then replace line 102 `{{$Students->links()}}` with:

```blade
{{ $Students->withQueryString()->links() }}
```

Replace the row-number cell (line 35) `{{$loop->index+1}}` with:

```blade
{{ $Students->firstItem() + $loop->index }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_students_index_filters_by_student_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/Students/StudentsController.php resources/views/backend/Students/Index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on students index"
```

---
### Task 3: Graduated students

**Files:**
- Modify: `app/Http/Controllers/Students/StudentsController.php:270-279`
- Modify: `resources/views/backend/Students/graduated.blade.php` (insert after line 7 card div, before `<div class="overflow-x-auto">`; `links()` at line 66)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `students.graduated` reacts to `?search=` (searches `students.name`).

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_graduated_students_filter_by_name(): void
    {
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $classroom = \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $match = \App\Models\Student::factory()->create(['school_id' => $school->id, 'grade_id' => $grade->id, 'classroom_id' => $classroom->id, 'name' => 'GradSearchOne', 'deleted_at' => now()]);
        \App\Models\Student::factory()->create(['school_id' => $school->id, 'grade_id' => $grade->id, 'classroom_id' => $classroom->id, 'name' => 'GradOtherTwo', 'deleted_at' => now()]);
        $match->delete(); // ensure soft-trashed

        $this->actingAs($this->admin);
        $response = $this->get(route('students.graduated', ['search' => 'GradSearchOne']));
        $response->assertOk();
        $response->assertSee('GradSearchOne');
        $response->assertDontSee('GradOtherTwo');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_graduated_students_filter_by_name`
Expected: FAIL (both names shown).

- [ ] **Step 3: Wire the controller**

Replace `graduated()` with:

```php
    public function graduated()
    {
        $school = $this->getSchool();
        $students = Student::onlyTrashed()
            ->with('grade', 'classroom')
            ->when(request('search'), fn ($q, $search) => $q->where('name', 'like', "%{$search}%"))
            ->paginate(config('school.per_page'));

        return view(
            'backend.students.graduated',
            compact('students', 'school'),
        );
    }
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 8):

```blade
        <x-filters action="{{ route('students.graduated') }}" reset="{{ route('students.graduated') }}" placeholder="{{ trans('student.name') }}"></x-filters>
```

Replace line 66 `{{ $students->links() }}` with:

```blade
{{ $students->withQueryString()->links() }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_graduated_students_filter_by_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/Students/StudentsController.php resources/views/backend/Students/graduated.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on graduated students"
```

---
### Task 4: Roles

**Files:**
- Modify: `app/Http/Controllers/RoleController.php:27`
- Modify: `resources/views/backend/roles/index.blade.php` (insert before `<div class="overflow-x-auto">` line 18; `links()` at line 65)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `roles.index` reacts to `?search=` (matches role `name`).

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_roles_index_filters_by_name(): void
    {
        $this->givePermission($this->admin, 'role-list');
        \Spatie\Permission\Models\Role::create(['name' => 'zzsearchrole']);
        \Spatie\Permission\Models\Role::create(['name' => 'zzotherrole']);

        $this->actingAs($this->admin);
        $response = $this->get(route('roles.index', ['search' => 'zzsearch']));
        $response->assertOk();
        $response->assertSee('zzsearchrole');
        $response->assertDontSee('zzotherrole');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_roles_index_filters_by_name`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace line 27 with:

```php
        $roles = Role::when(request('search'), fn ($q, $s) => $q->where('name', 'like', "%{$s}%"))
            ->orderBy('id', 'DESC')->withCount('permissions')->paginate(config('school.per_page'));
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 18):

```blade
        <x-filters action="{{ route('roles.index') }}" reset="{{ route('roles.index') }}" placeholder="{{ trans('permissions.name') }}"></x-filters>
```

Replace line 65 `{{ $roles->links() }}` with:

```blade
{{ $roles->withQueryString()->links() }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_roles_index_filters_by_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/RoleController.php resources/views/backend/roles/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on roles index"
```

---
### Task 5: Classes

**Files:**
- Modify: `app/Http/Controllers/ClassesController.php:28-41` (add `use App\Models\Grade;`)
- Modify: `resources/views/backend/classes/index.blade.php` (insert before `@can('classes-list')` line 14; `links()` at line 88)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `classes.index` reacts to `?search=` (title), `?grade_id=`, `?class_room_id=`; passes new `$grades` and `$class_room_list` view variables.

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_classes_index_filters_by_title(): void
    {
        $this->givePermission($this->admin, 'classes-list');
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $room = \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        \App\Models\ClassRoom2::create(['title' => 'ClassMatchSeven', 'grade_id' => $grade->id, 'class_room_id' => $room->id, 'tameen' => 0]);
        \App\Models\ClassRoom2::create(['title' => 'ClassOtherEight', 'grade_id' => $grade->id, 'class_room_id' => $room->id, 'tameen' => 0]);

        $this->actingAs($this->admin);
        $response = $this->get(route('classes.index', ['search' => 'ClassMatchSeven']));
        $response->assertOk();
        $response->assertSee('ClassMatchSeven');
        $response->assertDontSee('ClassOtherEight');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_classes_index_filters_by_title`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Add import (after the existing `use App\Models\ClassRoom2 as classes;` line):

```php
use App\Models\Grade;
```

Replace `index()` body (lines 28-41) with:

```php
    public function index()
    {
        $school = $this->getSchool();
        $class_rooms = ClassRoom::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->with(['grade:id,name'])
            ->get(['id', 'name', 'grade_id'])
            ->groupBy('grade.name');
        $class_room_list = $class_rooms->flatten();
        $grades = Grade::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->get(['id', 'name']);
        $classes = classes::with(['grade:id,name', 'class_room:id,name'])
            ->withCount('students')
            ->when(request('search'), fn ($q, $s) => $q->where('title', 'like', "%{$s}%"))
            ->when(request('grade_id'), fn ($q, $gid) => $q->where('grade_id', $gid))
            ->when(request('class_room_id'), fn ($q, $cid) => $q->where('class_room_id', $cid))
            ->paginate(config('school.per_page'), ['id', 'title', 'class_room_id', 'grade_id', 'tameen']);

        return view('backend.classes.index', compact('school', 'class_rooms', 'class_room_list', 'grades', 'classes'));
    }
```

Remove the `// return $classes;` debug line.

- [ ] **Step 4: Update the view**

Insert directly before `@can('classes-list')` (line 14):

```blade
        <x-filters action="{{ route('classes.index') }}" reset="{{ route('classes.index') }}" placeholder="{{ trans('classes.name') }}">
            <div>
                <x-select name="grade_id" label="{{ trans('classes.grades') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}" {{ request('grade_id') == $grade->id ? 'selected' : '' }}>{{ $grade->name }}</option>
                    @endforeach
                </x-select>
            </div>
            <div>
                <x-select name="class_room_id" label="{{ trans('classes.classroom') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach ($class_room_list as $room)
                        <option value="{{ $room->id }}" {{ request('class_room_id') == $room->id ? 'selected' : '' }}>{{ $room->name }}</option>
                    @endforeach
                </x-select>
            </div>
        </x-filters>
```

Replace line 88 `{{ $classes->links() }}` with:

```blade
{{ $classes->withQueryString()->links() }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_classes_index_filters_by_title`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/ClassesController.php resources/views/backend/classes/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on classes index"
```

---
### Task 6: Class rooms

**Files:**
- Modify: `app/Http/Controllers/ClassRooms/ClassRoomsController.php:42-44`
- Modify: `resources/views/backend/class_rooms/index.blade.php` (insert before `@can('class_rooms-list')` line 14; `links()` at line 85)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `class-rooms.index` reacts to `?search=` (name) and `?grade_id=`.

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_class_rooms_index_filters_by_name(): void
    {
        $this->givePermission($this->admin, 'class_rooms-list');
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'name' => 'RoomAlphaNine', 'user_id' => $this->admin->id]);
        \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'name' => 'RoomBetaZero', 'user_id' => $this->admin->id]);

        $this->actingAs($this->admin);
        $response = $this->get(route('class-rooms.index', ['search' => 'RoomAlphaNine']));
        $response->assertOk();
        $response->assertSee('RoomAlphaNine');
        $response->assertDontSee('RoomBetaZero');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_class_rooms_index_filters_by_name`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace lines 42-44 with:

```php
        $query->when(request('search'), fn ($q, $s) => $q->where('name', 'like', "%{$s}%"))
            ->when(request('grade_id'), fn ($q, $gid) => $q->where('grade_id', $gid));

        $data['class_rooms'] = $query
            ->orderBy('grade_id', 'asc')
            ->paginate(config('school.per_page'));
```

- [ ] **Step 4: Update the view**

Insert directly before `@can('class_rooms-list')` (line 14):

```blade
        <x-filters action="{{ route('class-rooms.index') }}" reset="{{ route('class-rooms.index') }}" placeholder="{{ trans('class_rooms.Name') }}">
            <div>
                <x-select name="grade_id" label="{{ trans('class_rooms.grades') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach ($data['grades'] as $grade)
                        <option value="{{ $grade->id }}" {{ request('grade_id') == $grade->id ? 'selected' : '' }}>{{ $grade->name }}</option>
                    @endforeach
                </x-select>
            </div>
        </x-filters>
```

Replace line 85 `{{ $data['class_rooms']->links() }}` with:

```blade
{{ $data['class_rooms']->withQueryString()->links() }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_class_rooms_index_filters_by_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/ClassRooms/ClassRoomsController.php resources/views/backend/class_rooms/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on class rooms index"
```

---
### Task 7: Exchange bonds

**Files:**
- Modify: `app/Http/Controllers/ExchangeBondController.php:32-39`
- Modify: `resources/views/backend/exchange_bond/index.blade.php` (insert before `<div class="p-6">` line 13; `links()` at line 66)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `exchange-bonds.index` reacts to `?search=` (matches `manual`, `description`, and student `name` via whereHas).

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_exchange_bonds_index_filters_by_manual(): void
    {
        $this->givePermission($this->admin, 'exchange_bonds-list');
        $school = $this->admin->school;
        $year = \App\Models\AcademicYear::factory()->create(['school_id' => $school->id]);
        $student = \App\Models\Student::factory()->create(['school_id' => $school->id, 'name' => 'BondStudentOne']);
        \App\Models\ExchangeBond::create(['student_id' => $student->id, 'academic_year_id' => $year->id, 'user_id' => $this->admin->id, 'manual' => 'MAN-777', 'amount' => 100, 'description' => 'first']);
        \App\Models\ExchangeBond::create(['student_id' => $student->id, 'academic_year_id' => $year->id, 'user_id' => $this->admin->id, 'manual' => 'MAN-888', 'amount' => 200, 'description' => 'second']);

        $this->actingAs($this->admin);
        $response = $this->get(route('exchange-bonds.index', ['search' => 'MAN-777']));
        $response->assertOk();
        $response->assertSee('MAN-777');
        $response->assertDontSee('MAN-888');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_exchange_bonds_index_filters_by_manual`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace lines 34-36 with:

```php
        $exchanges = ExchangeBond::with(['student', 'academicYear'])
            ->when(request('search'), function ($q, $s) {
                $q->where(function ($q) use ($s) {
                    $q->where('manual', 'like', "%{$s}%")
                        ->orWhere('description', 'like', "%{$s}%")
                        ->orWhereHas('student', fn ($sq) => $sq->where('name', 'like', "%{$s}%"));
                });
            })
            ->paginate(config('school.per_page', 10));
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="p-6">` (line 13):

```blade
        <x-filters action="{{ route('exchange-bonds.index') }}" reset="{{ route('exchange-bonds.index') }}" placeholder="{{ trans('exchange_bonds.manual') }}"></x-filters>
```

Replace line 66 `{{ $exchanges->links() }}` with:

```blade
{{ $exchanges->withQueryString()->links() }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_exchange_bonds_index_filters_by_manual`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/ExchangeBondController.php resources/views/backend/exchange_bond/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on exchange bonds index"
```

---
### Task 8: Employees (AdminEra)

**Files:**
- Modify: `app/Http/Controllers/AdminEraController.php:18`
- Modify: `resources/views/backend/AdminEra/index.blade.php` (insert before `<div class="overflow-x-auto">` line 9; `links()` at line 78)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `admin-era.index` reacts to `?search=` (matches `name`, `code`, `email`). No permission middleware on this action — auth only.

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_admin_era_filters_by_name(): void
    {
        $school = $this->admin->school;
        \App\Models\User::factory()->create(['school_id' => $school->id, 'name' => 'EmpSearchUser', 'code' => 'E-01', 'email' => 'a@x.test']);
        \App\Models\User::factory()->create(['school_id' => $school->id, 'name' => 'EmpOtherUser', 'code' => 'E-02', 'email' => 'b@x.test']);

        $this->actingAs($this->admin);
        $response = $this->get(route('admin-era.index', ['search' => 'EmpSearchUser']));
        $response->assertOk();
        $response->assertSee('EmpSearchUser');
        $response->assertDontSee('EmpOtherUser');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_admin_era_filters_by_name`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace line 18 with:

```php
        $Employees = User::with('roles:id')
            ->when(request('search'), function ($q, $s) {
                $q->where(function ($q) use ($s) {
                    $q->where('name', 'like', "%{$s}%")
                        ->orWhere('code', 'like', "%{$s}%")
                        ->orWhere('email', 'like', "%{$s}%");
                });
            })
            ->paginate(config('school.per_page'), ['id', 'code', 'type', 'name', 'email', 'isAdmin', 'login_allow', 'password']);
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 9):

```blade
        <x-filters action="{{ route('admin-era.index') }}" reset="{{ route('admin-era.index') }}" placeholder="{{ trans('adminera.name') }}"></x-filters>
```

Replace line 78 `{{ $Employees->links() }}` with:

```blade
{{ $Employees->withQueryString()->links() }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_admin_era_filters_by_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/AdminEraController.php resources/views/backend/AdminEra/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on employees (admin era) index"
```

---
### Task 9: Academic years

**Files:**
- Modify: `app/Http/Controllers/AcademicYearController.php:32`
- Modify: `resources/views/backend/academic_year/index.blade.php` (insert inside `@can('academic_year-list')`, before `<div class="overflow-x-auto">` line 17; `links()` at line 95)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `academic-year.index` reacts to `?search=` (matches `year_start`, `year_end`, and `view`).

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_academic_years_index_filters_by_year(): void
    {
        $this->givePermission($this->admin, 'academic_year-list');
        $school = $this->admin->school;
        \App\Models\AcademicYear::factory()->create(['school_id' => $school->id, 'year_start' => '2020-09-01', 'year_end' => '2021-06-30', 'view' => '2020 - 2021']);
        \App\Models\AcademicYear::factory()->create(['school_id' => $school->id, 'year_start' => '2022-09-01', 'year_end' => '2023-06-30', 'view' => '2022 - 2023']);

        $this->actingAs($this->admin);
        $response = $this->get(route('academic-year.index', ['search' => '2020']));
        $response->assertOk();
        $response->assertSee('2020 - 2021');
        $response->assertDontSee('2022 - 2023');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_academic_years_index_filters_by_year`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace line 32 with:

```php
        $acadmice_years = AcademicYear::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->when(request('search'), function ($q, $s) {
                $q->where(function ($q) use ($s) {
                    $q->where('year_start', 'like', "%{$s}%")
                        ->orWhere('year_end', 'like', "%{$s}%")
                        ->orWhere('view', 'like', "%{$s}%");
                });
            })
            ->paginate(config('school.per_page'));
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 17):

```blade
            <x-filters action="{{ route('academic-year.index') }}" reset="{{ route('academic-year.index') }}" placeholder="{{ trans('academic_year.view') }}"></x-filters>
```

Replace line 95 `{{ $acadmice_years->links() }}` with:

```blade
{{ $acadmice_years->withQueryString()->links() }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_academic_years_index_filters_by_year`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/AcademicYearController.php resources/views/backend/academic_year/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on academic years index"
```

---
### Task 10: Fee invoices

**Files:**
- Modify: `app/Services/InvoiceQueryService.php:13-21` (add parent eager-load; no filter-key changes)
- Modify: `app/Http/Controllers/FeeInvoiceController.php:48-58`
- Modify: `resources/views/backend/fee_invoices/index.blade.php` (insert inside `@can('fee_invoice-list')`, before `<div class="container mx-auto p-6">` line 13; `links()` at line 50; numbering at line 30)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Consumes: `$this->invoiceQueryService->getFilteredQuery(Request, ?int $schoolId)` — already injected as `protected InvoiceQueryService $invoiceQueryService`. Request keys: `students`, `grade_id`.
- Produces: `fee-invoice.index` reacts to `students` (student name) and `grade_id`.

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_fee_invoices_index_filters_by_student_name(): void
    {
        $this->givePermission($this->admin, 'fee_invoice-list');
        $invoiceOne = \App\Models\FeeInvoice::factory()->create();
        $invoiceTwo = \App\Models\FeeInvoice::factory()->create();
        $invoiceTwo->student->update(['name' => 'InvoiceSearchStudent']);
        $invoiceTwo->student->refresh();

        $this->actingAs($this->admin);
        $response = $this->get(route('fee-invoice.index', ['students' => 'InvoiceSearchStudent']));
        $response->assertOk();
        $response->assertSee('InvoiceSearchStudent');
        $response->assertDontSee($invoiceOne->student->name);
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_fee_invoices_index_filters_by_student_name`
Expected: FAIL.

- [ ] **Step 3: Wire the service + controller**

In `InvoiceQueryService::getFilteredQuery`, replace the `->with([...])` block (lines 15-20) with:

```php
            ->with([
                'student:id,name,parent_id',
                'student.parent:id,father_name',
                'grade:id,name',
                'classroom:id,name',
                'acd_year:id,view',
            ])
```

In `FeeInvoiceController::index` (lines 48-58), replace with:

```php
    public function index(Request $request)
    {
        $school = $this->getSchool();
        $gradeOptions = Grade::pluck('name', 'id')->toArray();
        $feeInvoices = $this->invoiceQueryService->getFilteredQuery($request, $this->schoolId());

        return view(
            'backend.fee_invoices.index',
            compact('school', 'gradeOptions', 'feeInvoices'),
        );
    }
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="container mx-auto p-6">` (line 13):

```blade
        <x-filters action="{{ route('fee-invoice.index') }}" reset="{{ route('fee-invoice.index') }}" searchName="students" placeholder="{{ trans('fee_invoice.name') }}">
            <div>
                <x-select name="grade_id" label="{{ trans('fee_invoice.grade') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach ($gradeOptions as $id => $name)
                        <option value="{{ $id }}" {{ request('grade_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </x-select>
            </div>
        </x-filters>
```

Replace line 50 `{{ $feeInvoices->links() }}` with:

```blade
{{ $feeInvoices->withQueryString()->links() }}
```

Replace line 30 `{{$loop->index+1}}` with:

```blade
{{ $feeInvoices->firstItem() + $loop->index }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_fee_invoices_index_filters_by_student_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Services/InvoiceQueryService.php app/Http/Controllers/FeeInvoiceController.php resources/views/backend/fee_invoices/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on fee invoices index"
```

---
### Task 11: School fees

**Files:**
- Modify: `app/Http/Controllers/SchoolFeeController.php:59-66`
- Modify: `resources/views/backend/school_fees/index.blade.php` (insert inside `@can('schoolfees-list')`, before `<div class="overflow-x-auto">` line 17; `links()` at line 92)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `school-fees.index` reacts to `?search=` (title, description) and `?grade_id=`.

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_school_fees_index_filters_by_title(): void
    {
        $this->givePermission($this->admin, 'schoolfees-list');
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $room = \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $year = \App\Models\AcademicYear::factory()->create(['school_id' => $school->id]);
        \App\Models\SchoolFee::factory()->create(['school_id' => $school->id, 'user_id' => $this->admin->id, 'grade_id' => $grade->id, 'classroom_id' => $room->id, 'academic_year_id' => $year->id, 'title' => 'FeeSearchTitle']);
        \App\Models\SchoolFee::factory()->create(['school_id' => $school->id, 'user_id' => $this->admin->id, 'grade_id' => $grade->id, 'classroom_id' => $room->id, 'academic_year_id' => $year->id, 'title' => 'FeeOtherTitle']);

        $this->actingAs($this->admin);
        $response = $this->get(route('school-fees.index', ['search' => 'FeeSearchTitle']));
        $response->assertOk();
        $response->assertSee('FeeSearchTitle');
        $response->assertDontSee('FeeOtherTitle');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_school_fees_index_filters_by_title`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace lines 59-66 with:

```php
        $SchoolFees = SchoolFee::with(
            'grade:id,name',
            'classroom:id,name',
            'user:id,name',
            'year:id,view',
        )
            ->latest()
            ->when(request('search'), function ($q, $s) {
                $q->where(function ($q) use ($s) {
                    $q->where('title', 'like', "%{$s}%")
                        ->orWhere('description', 'like', "%{$s}%");
                });
            })
            ->when(request('grade_id'), fn ($q, $gid) => $q->where('grade_id', $gid))
            ->paginate(config('school.per_page'));
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 17):

```blade
            <x-filters action="{{ route('school-fees.index') }}" reset="{{ route('school-fees.index') }}" placeholder="{{ trans('fees.title') }}">
                <div>
                    <x-select name="grade_id" label="{{ trans('fees.grade') }}">
                        <option value="">{{ trans('general.all') }}</option>
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}" {{ request('grade_id') == $grade->id ? 'selected' : '' }}>{{ $grade->name }}</option>
                        @endforeach
                    </x-select>
                </div>
            </x-filters>
```

Replace line 92 `{{ $SchoolFees->links('vendor.pagination.tailwind') }}` with:

```blade
{{ $SchoolFees->withQueryString()->links('vendor.pagination.tailwind') }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_school_fees_index_filters_by_title`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/SchoolFeeController.php resources/views/backend/school_fees/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on school fees index"
```

---
### Task 12: Exception fees

**Files:**
- Modify: `app/Http/Controllers/ExceptionFeesController.php:45-46`
- Modify: `resources/views/backend/fee_exception/index.blade.php` (insert inside `@can('except_fee-list')`, before `<div class="overflow-x-auto">` line 13; `links()` at line 76; numbering at line 27)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `except-fee.index` reacts to `?search=` (student name via whereHas).

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_exception_fees_index_filters_by_student_name(): void
    {
        $this->givePermission($this->admin, 'except_fee-list');
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $room = \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $studentA = \App\Models\Student::factory()->create(['school_id' => $school->id, 'grade_id' => $grade->id, 'classroom_id' => $room->id, 'name' => 'ExceptionSearchStudent']);
        $studentB = \App\Models\Student::factory()->create(['school_id' => $school->id, 'grade_id' => $grade->id, 'classroom_id' => $room->id, 'name' => 'ExceptionOtherStudent']);
        \App\Models\ExceptionFees::factory()->create(['student_id' => $studentA->id, 'amount' => 50, 'user_id' => $this->admin->id]);
        \App\Models\ExceptionFees::factory()->create(['student_id' => $studentB->id, 'amount' => 50, 'user_id' => $this->admin->id]);

        $this->actingAs($this->admin);
        $response = $this->get(route('except-fee.index', ['search' => 'ExceptionSearchStudent']));
        $response->assertOk();
        $response->assertSee('ExceptionSearchStudent');
        $response->assertDontSee('ExceptionOtherStudent');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_exception_fees_index_filters_by_student_name`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace lines 45-46 with:

```php
        $ExceptionFees = ExceptionFees::with('student')
            ->when(request('search'), fn ($q, $s) => $q->whereHas('student', fn ($sq) => $sq->where('name', 'like', "%{$s}%")))
            ->paginate(config('school.per_page'));
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 13):

```blade
            <x-filters action="{{ route('except-fee.index') }}" reset="{{ route('except-fee.index') }}" placeholder="{{ trans('Recipt_Payments.name') }}"></x-filters>
```

Replace line 76 `{{ $ExceptionFees->links() }}` with:

```blade
{{ $ExceptionFees->withQueryString()->links() }}
```

Replace line 27 `{{ $loop->iteration }}` with:

```blade
{{ $ExceptionFees->firstItem() + $loop->index }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_exception_fees_index_filters_by_student_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/ExceptionFeesController.php resources/views/backend/fee_exception/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on exception fees index"
```

---
### Task 13: Payment parts

**Files:**
- Modify: `app/Http/Controllers/PaymentPartsController.php:38-45`
- Modify: `resources/views/backend/payment_parts/index.blade.php` (insert inside `@can('payment_parts-list')`, before `<div class="overflow-x-auto">` line 14; `links()` at line 84; numbering at line 29)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `payment-parts.index` reacts to `?search=` (student name) and `?status=` (enum value); passes new `$statuses` view variable.

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_payment_parts_index_filters_by_status(): void
    {
        $this->givePermission($this->admin, 'payment_parts-list');
        $school = $this->admin->school;
        $student = \App\Models\Student::factory()->create(['school_id' => $school->id, 'name' => 'PartStudent']);
        \App\Models\PaymentParts::create(['student_id' => $student->id, 'date' => now()->toDateString(), 'status' => 'paid', 'amount' => 100]);
        \App\Models\PaymentParts::create(['student_id' => $student->id, 'date' => now()->toDateString(), 'status' => 'not_paid', 'amount' => 200]);

        $this->actingAs($this->admin);
        $response = $this->get(route('payment-parts.index', ['status' => 'paid']));
        $response->assertOk();
        $response->assertSee(\App\Enums\Payment_Status::from('paid')->lang());
        $response->assertDontSee(\App\Enums\Payment_Status::from('not_paid')->lang());
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_payment_parts_index_filters_by_status`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace lines 38-45 with:

```php
    public function index()
    {
        $school = $this->getSchool();
        $statuses = \App\Enums\Payment_Status::cases();
        $PaymentParts = PaymentParts::with(['student', 'grade', 'classroom', 'year'])
            ->when(request('search'), fn ($q, $s) => $q->whereHas('student', fn ($sq) => $sq->where('name', 'like', "%{$s}%")))
            ->when(request('status'), fn ($q, $st) => $q->where('status', $st))
            ->paginate(config('school.per_page'));

        return view(
            'backend.payment_parts.index',
            compact('PaymentParts', 'school', 'statuses'),
        );
    }
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 14):

```blade
            <x-filters action="{{ route('payment-parts.index') }}" reset="{{ route('payment-parts.index') }}" placeholder="{{ trans('Recipt_Payments.name') }}">
                <div>
                    <x-select name="status" label="{{ trans('PaymentParts.status') }}">
                        <option value="">{{ trans('general.all') }}</option>
                        @foreach ($statuses as $status)
                            <option value="{{ $status->value }}" {{ request('status') === $status->value ? 'selected' : '' }}>{{ $status->lang() }}</option>
                        @endforeach
                    </x-select>
                </div>
            </x-filters>
```

Replace line 84 `{{ $PaymentParts->links() }}` with:

```blade
{{ $PaymentParts->withQueryString()->links() }}
```

Replace line 29 `{{ $loop->index + 1 }}` with:

```blade
{{ $PaymentParts->firstItem() + $loop->index }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_payment_parts_index_filters_by_status`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/PaymentPartsController.php resources/views/backend/payment_parts/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on payment parts index"
```

---
### Task 14: Receipt payments

**Files:**
- Modify: `app/Http/Controllers/ReceiptPaymentController.php:53-59`
- Modify: `resources/views/backend/reciptpayment/index.blade.php` (insert inside `@can('ReceiptPayment-list')`, before `<div class="overflow-x-auto">` line 13; `links()` at line 80; numbering at line 28)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `receipt-payment.index` reacts to `?search=` (matches `manual` and student name).

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_receipt_payments_index_filters_by_manual(): void
    {
        $this->givePermission($this->admin, 'ReceiptPayment-list');
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $room = \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $year = \App\Models\AcademicYear::factory()->create(['school_id' => $school->id]);
        $student = \App\Models\Student::factory()->create(['school_id' => $school->id, 'grade_id' => $grade->id, 'classroom_id' => $room->id, 'acadmiecyear_id' => $year->id, 'name' => 'ReceiptStudent']);
        \App\Models\ReceiptPayment::create(['school_id' => $school->id, 'student_id' => $student->id, 'academic_year_id' => $year->id, 'user_id' => $this->admin->id, 'manual' => 'RCP-501', 'Debit' => 150]);
        \App\Models\ReceiptPayment::create(['school_id' => $school->id, 'student_id' => $student->id, 'academic_year_id' => $year->id, 'user_id' => $this->admin->id, 'manual' => 'RCP-502', 'Debit' => 250]);

        $this->actingAs($this->admin);
        $response = $this->get(route('receipt-payment.index', ['search' => 'RCP-501']));
        $response->assertOk();
        $response->assertSee('RCP-501');
        $response->assertDontSee('RCP-502');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_receipt_payments_index_filters_by_manual`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace lines 53-59 with:

```php
        $Recipt_Payments = ReceiptPayment::when(
            $this->schoolId(),
            fn ($q, $id) => $q->where('school_id', $id),
        )
            ->with(['student:id,name'])
            ->orderBy('date', 'desc')
            ->when(request('search'), function ($q, $s) {
                $q->where(function ($q) use ($s) {
                    $q->where('manual', 'like', "%{$s}%")
                        ->orWhereHas('student', fn ($sq) => $sq->where('name', 'like', "%{$s}%"));
                });
            })
            ->paginate(config('school.per_page'));
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 13):

```blade
            <x-filters action="{{ route('receipt-payment.index') }}" reset="{{ route('receipt-payment.index') }}" placeholder="{{ trans('Recipt_Payments.manual') }}"></x-filters>
```

Replace line 80 `{{ $Recipt_Payments->links() }}` with:

```blade
{{ $Recipt_Payments->withQueryString()->links() }}
```

Replace line 28 `{{ $loop->iteration }}` with:

```blade
{{ $Recipt_Payments->firstItem() + $loop->index }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_receipt_payments_index_filters_by_manual`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/ReceiptPaymentController.php resources/views/backend/reciptpayment/index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on receipt payments index"
```

---
### Task 15: Promotions

**Files:**
- Modify: `app/Http/Controllers/PromotionController.php:29-47`
- Modify: `resources/views/backend/promotion/Index.blade.php` (insert inside `@can('promotion-list')`, before `<div class="overflow-x-auto">` line 20; `links()` at line 73; numbering at line 39)
- Test: `tests/Feature/TableSearchTest.php`

**Interfaces:**
- Produces: `promotion.index` reacts to `?search=` (student name via whereHas).

- [ ] **Step 1: Write the failing test (append)**

```php
    public function test_promotions_index_filters_by_student_name(): void
    {
        $this->givePermission($this->admin, 'promotion-list');
        $school = $this->admin->school;
        $grade = \App\Models\Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $room = \App\Models\ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $year = \App\Models\AcademicYear::factory()->create(['school_id' => $school->id]);
        $make = fn (string $name) => \App\Models\Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $room->id,
            'acadmiecyear_id' => $year->id,
            'name' => $name,
        ]);
        $studentA = $make('PromotionSearchStudent');
        $studentB = $make('PromotionOtherStudent');
        $create = fn ($student) => \App\Models\Promotion::create([
            'student_id' => $student->id,
            'from_grade' => $grade->id,
            'from_class' => $room->id,
            'to_grade' => $grade->id,
            'to_class' => $room->id,
            'from_acc' => $year->id,
            'to_acc' => $year->id,
            'user_id' => $this->admin->id,
        ]);
        $create($studentA);
        $create($studentB);

        $this->actingAs($this->admin);
        $response = $this->get(route('promotion.index', ['search' => 'PromotionSearchStudent']));
        $response->assertOk();
        $response->assertSee('PromotionSearchStudent');
        $response->assertDontSee('PromotionOtherStudent');
    }
```

- [ ] **Step 2: Run test to verify it fails**

Run: `php artisan test --compact --filter=test_promotions_index_filters_by_student_name`
Expected: FAIL.

- [ ] **Step 3: Wire the controller**

Replace the `$promotions = promotion::with(...)->paginate(...)` block (lines 32-41) with:

```php
        $promotions = promotion::with(
            'student:id,name',
            'f_grade:id,name',
            'f_class:id,name',
            't_grade:id,name',
            't_class:id,name',
            't_acc:id,view',
            'f_acc:id,view',
        )
            ->when(request('search'), fn ($q, $s) => $q->whereHas('student', fn ($sq) => $sq->where('name', 'like', "%{$s}%")))
            ->paginate(config('school.per_page'));
```

- [ ] **Step 4: Update the view**

Insert directly before `<div class="overflow-x-auto">` (line 20):

```blade
            <x-filters action="{{ route('promotion.index') }}" reset="{{ route('promotion.index') }}" placeholder="{{ trans('promotions.student') }}"></x-filters>
```

Replace line 73 `{{ $promotions->links() }}` with:

```blade
{{ $promotions->withQueryString()->links() }}
```

Replace line 39 `{{ $loop->iteration }}` with:

```blade
{{ $promotions->firstItem() + $loop->index }}
```

- [ ] **Step 5: Run test to verify it passes**

Run: `php artisan test --compact --filter=test_promotions_index_filters_by_student_name`
Expected: PASS.

- [ ] **Step 6: Commit**

```bash
git add app/Http/Controllers/PromotionController.php resources/views/backend/promotion/Index.blade.php tests/Feature/TableSearchTest.php
git commit -m "feat: server-side search on promotions index"
```

---
### Task 16: Final verification

**Files:**
- All touched files from Tasks 1-15.

- [ ] **Step 1: Run the full search test class**

Run: `php artisan test --compact tests/Feature/TableSearchTest.php`
Expected: all tests PASS.

- [ ] **Step 2: Compile all Blade views**

Run: `php artisan view:cache`
Expected: "Blade templates cached successfully."

- [ ] **Step 3: Run the surrounding regression suites**

Run: `php artisan test --compact tests/Feature/ExchangeBondControllerTest.php tests/Feature/PolicyTest.php tests/Feature/FinancialTest.php tests/Feature/ClassRoomCrudTest.php tests/Feature/GradesTest.php`
Expected: PASS.

- [ ] **Step 4: Format with Pint**

Run: `vendor/bin/pint --dirty --format agent`
Expected: phpat "fixed" (spacing/style only).

- [ ] **Step 5: Final commit**

```bash
git add -A
git commit -m "feat: table search across admin list screens"
```