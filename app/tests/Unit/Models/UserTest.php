<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new User;
    }

    public function test_user_has_correct_fillable_attributes(): void
    {
        $fillable = [
            'name',
            'email',
            'password',
            'code',
            'phone',
            'address',
            'date_of_birth',
            'date_of_hiring',
            'learning',
            'reiligon',
            'gender',
            'type',
            'job_id',
            'isAdmin',
            'login_allow',
            'insurance',
            'insurance_date',
            'national_id',
            'grade_year',
            'school_id',
            'user_id',
            'lesson_count',
            'sepicality',
            'national_id_expire_date',
            'contract_start_date',
            'notes',
            'ministry_code',
        ];

        $this->assertEquals($fillable, $this->user->getFillable());
    }

    public function test_user_has_correct_hidden_attributes(): void
    {
        $hidden = [
            'password',
            'remember_token',
        ];

        $this->assertEquals($hidden, $this->user->getHidden());
    }

    public function test_user_has_casts(): void
    {
        $casts = [
            'email_verified_at',
            'password',
            'gender',
            'religion',
            'type',
        ];

        foreach ($casts as $attribute) {
            $this->assertArrayHasKey($attribute, $this->user->getCasts());
        }
    }

    public function test_user_belongs_to_job(): void
    {
        $relation = $this->user->job();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('job_id', $relation->getForeignKeyName());
    }

    public function test_user_has_many_images(): void
    {
        $relation = $this->user->image();

        $this->assertInstanceOf(MorphMany::class, $relation);
    }

    public function test_user_belongs_to_many_grades(): void
    {
        $relation = $this->user->grades();

        $this->assertInstanceOf(BelongsToMany::class, $relation);
    }

    public function test_user_belongs_to_many_settings(): void
    {
        $relation = $this->user->settings();

        $this->assertInstanceOf(BelongsToMany::class, $relation);
    }

    public function test_user_uses_sanctum_api_tokens(): void
    {
        $this->assertTrue(in_array('Laravel\Sanctum\HasApiTokens', class_uses_recursive($this->user)));
    }

    public function test_user_uses_spatie_roles(): void
    {
        $this->assertTrue(in_array('Spatie\Permission\Traits\HasRoles', class_uses_recursive($this->user)));
    }

    public function test_user_uses_soft_deletes(): void
    {
        $this->assertTrue(in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses_recursive($this->user)));
    }
}
