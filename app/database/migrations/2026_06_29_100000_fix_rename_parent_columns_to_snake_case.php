<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('parents', function (Blueprint $table) {
            $table->renameColumn('Father_Name', 'father_name');
            $table->renameColumn('Father_Phone', 'father_phone');
            $table->renameColumn('Father_Job', 'father_job');
            $table->renameColumn('Father_National_Id', 'father_national_id');
            $table->renameColumn('Father_Birth_Date', 'father_birth_date');
            $table->renameColumn('Father_Learning', 'father_learning');
            $table->renameColumn('Father_Birth_Location', 'father_birth_location');
            $table->renameColumn('Mother_Name', 'mother_name');
            $table->renameColumn('Mother_Phone', 'mother_phone');
            $table->renameColumn('Mother_Job', 'mother_job');
            $table->renameColumn('Mother_National_Id', 'mother_national_id');
            $table->renameColumn('Mother_Birth_Date', 'mother_birth_date');
            $table->renameColumn('Religion', 'religion');
            $table->renameColumn('Address', 'address');
        });
    }

    public function down(): void
    {
        Schema::table('parents', function (Blueprint $table) {
            $table->renameColumn('father_name', 'Father_Name');
            $table->renameColumn('father_phone', 'Father_Phone');
            $table->renameColumn('father_job', 'Father_Job');
            $table->renameColumn('father_national_id', 'Father_National_Id');
            $table->renameColumn('father_birth_date', 'Father_Birth_Date');
            $table->renameColumn('father_learning', 'Father_Learning');
            $table->renameColumn('father_birth_location', 'Father_Birth_Location');
            $table->renameColumn('mother_name', 'Mother_Name');
            $table->renameColumn('mother_phone', 'Mother_Phone');
            $table->renameColumn('mother_job', 'Mother_Job');
            $table->renameColumn('mother_national_id', 'Mother_National_Id');
            $table->renameColumn('mother_birth_date', 'Mother_Birth_Date');
            $table->renameColumn('religion', 'Religion');
            $table->renameColumn('address', 'Address');
        });
    }
};
