<?php

namespace Database\Seeders;

use App\Enums\Jobs_types;
use App\Models\Job;
use App\Models\School;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Create a role and sync permissions by table names.
     */
    private function createRole(string $name, array $tables, array $permissionsByTable): Role
    {
        $permissionIds = collect($tables)
            ->flatMap(fn (string $table) => $permissionsByTable[$table] ?? [])
            ->pluck('id')
            ->toArray();

        $role = Role::firstOrCreate(['name' => $name]);
        $role->syncPermissions($permissionIds);

        return $role;
    }

    /**
     * Create a user, assign a role, and optionally set their job/type.
     */
    private function createUser(
        Role $role,
        string $email,
        string $name,
        ?Jobs_types $type = null,
        ?Job $job = null,
    ): void {
        $attributes = [
            'email' => $email,
            'name' => $name,
            'school_id' => School::query()->min('id'),
        ];

        if ($type !== null) {
            $attributes['type'] = $type;
        }

        if ($job !== null) {
            $attributes['job_id'] = $job->id;
        }

        $user = User::factory()->create($attributes);
        $user->assignRole($role);
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionsByTable = Permission::all()
            ->groupBy('table')
            ->toArray();

        // Create a few jobs to assign to users
        $jobs = [
            'teacher' => Job::factory()->create([
                'name' => 'مدرس',
                'type' => Jobs_types::TEACHER,
                'created_by' => null,
            ]),
            'accountant' => Job::factory()->create([
                'name' => 'محاسب',
                'type' => Jobs_types::SPECIALIST,
                'created_by' => null,
            ]),
            'storekeeper' => Job::factory()->create([
                'name' => 'أمين مخزن',
                'type' => Jobs_types::WORKER,
                'created_by' => null,
            ]),
            'director' => Job::factory()->create([
                'name' => 'مدير المدرسة',
                'type' => Jobs_types::DIRECTOR,
                'created_by' => null,
            ]),
            'security' => Job::factory()->create([
                'name' => 'حارس',
                'type' => Jobs_types::SECURITY,
                'created_by' => null,
            ]),
        ];

        // ── Role: Admin (all permissions) ────────────────────
        $adminRole = $this->createRole('Admin', array_keys($permissionsByTable), $permissionsByTable);

        $this->createUser(
            role: $adminRole,
            email: 'admin@ischool.com',
            name: 'مدير النظام',
            type: Jobs_types::MANEGMENT,
        );

        // ── Role: Director (oversight & read permissions) ────
        $directorRole = $this->createRole('Director', [
            'classes', 'class_rooms', 'grade', 'academic_year',
            'employees', 'teacher_schedaule', 'Students', 'schoolfees',
            'role', 'jobs', 'settings', 'store', 'order_store',
            'clothes', 'clothes-order', 'books_sheets', 'books_sheets-order',
        ], $permissionsByTable);

        $this->createUser(
            role: $directorRole,
            email: 'director@ischool.com',
            name: 'مدير المدرسة',
            type: Jobs_types::DIRECTOR,
            job: $jobs['director'],
        );

        // ── Role: Accountant (financial permissions) ─────────
        $accountantRole = $this->createRole('Accountant', [
            'schoolfees', 'fee_invoice', 'except_fee',
            'payment_parts', 'ReceiptPayment', 'exchange_bonds',
            'StudentAccount',
        ], $permissionsByTable);

        $this->createUser(
            role: $accountantRole,
            email: 'accountant@ischool.com',
            name: 'محاسب',
            type: Jobs_types::SPECIALIST,
            job: $jobs['accountant'],
        );

        // ── Role: Teacher (classroom & student permissions) ──
        $teacherRole = $this->createRole('Teacher', [
            'classes', 'class_rooms', 'grade',
            'Students', 'promotion', 'teacher_schedaule',
        ], $permissionsByTable);

        $this->createUser(
            role: $teacherRole,
            email: 'teacher@ischool.com',
            name: 'مدرس',
            type: Jobs_types::TEACHER,
            job: $jobs['teacher'],
        );

        // ── Role: Storekeeper (inventory permissions) ────────
        $storekeeperRole = $this->createRole('Storekeeper', [
            'store', 'order_store', 'clothes', 'clothes-order',
            'books_sheets', 'books_sheets-order',
        ], $permissionsByTable);

        $this->createUser(
            role: $storekeeperRole,
            email: 'storekeeper@ischool.com',
            name: 'أمين المخزن',
            type: Jobs_types::WORKER,
            job: $jobs['storekeeper'],
        );

        // ── 2 extra generic admin users ──────────────────────
        User::factory()
            ->count(2)
            ->sequence(
                ['email' => 'admin2@ischool.com', 'name' => 'مدير النظام 2'],
                ['email' => 'admin3@ischool.com', 'name' => 'مدير النظام 3'],
            )
            ->create(['school_id' => School::query()->min('id')])
            ->each(fn ($user) => $user->assignRole($adminRole));
    }
}
