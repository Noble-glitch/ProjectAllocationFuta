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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("firstName");
            $table->string("email");
            $table->string("lastName")->nullable();
            $table->string("middleName")->nullable();
            $table->string("school")->nullable();
            $table->string("department");
            $table->string("status");
            $table->longText("areaExpertise");
            $table->string("researchArea");
            $table->string("MajResearchArea")->nullable();
            $table->string("MinResearchArea")->nullable();
            $table->string("keywords");
            $table->unsignedBigInteger("students")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisors');
    }
};
