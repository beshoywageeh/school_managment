# AGENTS.md - School Management System Development Guide

This file contains development guidelines, commands, and conventions for the Laravel School Management System.

## Build/Lint/Test Commands

### PHP & Laravel Commands
```bash
# Install dependencies
composer install

# Run the application
php artisan serve

# Run database migrations
php artisan migrate

# Fresh database with seeding
php artisan migrate:fresh --seed

# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Generate application key
php artisan key:generate

# Create new controller
php artisan make:controller ControllerName

# Create new model with migration and factory
php artisan make:model ModelName -m -f

# Create new request class
php artisan make:request RequestName

# Create new service class
php artisan make:service ServiceName
```

### Frontend Commands
```bash
# Install Node.js dependencies
npm install

# Run development server
npm run dev

# Build for production
npm run build
```

### Testing Commands
```bash
# Run all tests
php artisan test

# Run PHPUnit directly
./vendor/bin/phpunit

# Run specific test file
php artisan test tests/Feature/ExampleTest.php
./vendor/bin/phpunit tests/Feature/ExampleTest.php

# Run specific test method
php artisan test --filter test_the_application_returns_a_successful_response

# Run with coverage
php artisan test --coverage

# Run only unit tests
php artisan test tests/Unit

# Run only feature tests
php artisan test tests/Feature
```

### Code Quality
```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Check code style
./vendor/bin/pint --test

# Run Pint on specific file
./vendor/bin/pint app/Models/Student.php
```

## Code Style Guidelines

### PHP Standards
- Follow PSR-4 autoloading standards
- Use 4 spaces for indentation (no tabs)
- Use snake_case for variable and method names
- Use PascalCase for class names
- Use UPPER_CASE for constants
- Maximum line length: 120 characters

### File Naming Conventions
- **Models**: Singular PascalCase (e.g., `Student.php`, `StudentAccount.php`)
- **Controllers**: PascalCase with "Controller" suffix (e.g., `StudentsController.php`)
- **Requests**: PascalCase with "Request" suffix (e.g., `StudentRequest.php`)
- **Services**: PascalCase with "Service" suffix (e.g., `FinancialService.php`)
- **Migrations**: YYYY_MM_DD_HHMMSS_description (e.g., `2024_03_29_121647_create_students_table.php`)
- **Livewire Components**: PascalCase (e.g., `StudentTable.php`)
- **View Components**: PascalCase (e.g., `AppLayout.php`)

### Import Organization
```php
<?php

// 1. External libraries (Illuminate, Carbon, etc.)
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

// 2. Application level (App\*)
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Traits\LogsActivity;
use App\Models\Student;
use App\Services\FinancialService;
```

### Model Conventions
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'grade_id',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function accounts()
    {
        return $this->hasMany(StudentAccount::class);
    }
}
```

### Controller Conventions
```php
<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        
        return view('backend.students.index', compact('students'));
    }

    public function store(StudentRequest $request)
    {
        try {
            $student = Student::create($request->validated());
            
            session()->flash('success', trans('general.success'));
            
            return redirect()->route('students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            
            return redirect()->back()->withInput();
        }
    }
}
```

### Request Validation Conventions
```php
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email'],
            'grade_id' => ['required', 'exists:grades,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => trans('validation.required'),
            'email.unique' => trans('student.email_unique'),
        ];
    }
}
```

### Service Class Conventions
```php
<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentService
{
    public function createStudent(array $data): Student
    {
        DB::beginTransaction();
        
        try {
            $student = Student::create($data);
            
            // Additional logic here
            
            DB::commit();
            
            return $student;
        } catch (\Exception $e) {
            DB::rollBack();
            
            throw $e;
        }
    }
}
```

### Livewire Component Conventions
```php
<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $students = Student::query()
            ->where('name', 'like', '%'.$this->search.'%')
            ->paginate($this->perPage);

        return view('livewire.student-table', [
            'students' => $students,
        ]);
    }
}
```

### Database Migration Conventions
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->date('birth_date')->nullable();
            $table->unsignedBigInteger('grade_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('grade_id')->references('id')->on('grades');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
```

### Error Handling
- Always wrap database operations in try-catch blocks
- Use database transactions for multiple related operations
- Return proper error messages to users via session flashes
- Log errors using `Log::error()` for debugging

### Frontend Conventions
- Use Tailwind CSS for styling
- Alpine.js for JavaScript interactions
- Livewire for dynamic components
- Use Blade components for reusable UI elements
- Follow semantic HTML5 structure

### Testing Conventions
- Store tests in `tests/Feature` for feature tests
- Store tests in `tests/Unit` for unit tests
- Use descriptive test method names
- Follow Arrange-Act-Assert pattern
- Use factories for test data

### Security
- Always validate user input using Request classes
- Use Laravel's built-in CSRF protection
- Implement proper authorization checks
- Sanitize user data before database operations
- Use parameterized queries to prevent SQL injection

### Language & Localization
- Store user-facing strings in language files
- Use `trans()` or `__()` helper for translations
- Follow consistent naming for translation keys
- Support Arabic language as primary interface language

### Git Conventions
- Use descriptive commit messages
- Follow conventional commits format when possible
- Create feature branches for new functionality
- Run tests before committing changes