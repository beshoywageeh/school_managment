<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();

            //Fatherinformation
            $table->string('Father_Name')->nullable();
            $table->string('Father_National_Id')->nullable();
            $table->string('Father_Phone')->nullable();
            $table->string('Father_Job')->nullable();
            $table->date('Father_Birth_Date')->nullable();
            $table->string('Father_Learning')->nullable();
            $table->string('Father_Birth_Location')->nullable();

            //Mother information
            $table->string('Mother_Name')->nullable();
            $table->string('Mother_National_Id')->nullable();
            $table->string('Mother_Phone')->nullable();
            $table->string('Mother_Job')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Address')->nullable();
            $table->date('Mother_Birth_Date')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->string('slug')->nullable();


            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
